<?php
namespace App\Controller;
use Cake\Mailer\Email;


class PagesController extends AppController
{
	/**
	 * This function on controller will render views builded from database.
	 */
	public function view($slug=null){
		$page = $this->Pages->find('all', [
			'conditions'=>[
				'slug'=>$slug
			],
			'limit'=>1,
			'contain'=>[
				'PagesComponents'=>[
					'sort'=>['sort'=>'asc']
				],
				'PagesComponents.Components',
			]
		]);
		$page = $page->first();
		if($page->type==2):
			$this->viewBuilder()->setLayout('newsletter');
		elseif($page->type==3):
			$this->viewBuilder()->setLayout('blank');
		endif;
		if($page->type==0){
			return $this->redirect(['controller'=>'pages', 'action'=>$page->slug]);
		}

		switch($this->request->getParam('slug')):
			default:
			case 'home':
				$this->loadModel('Testimonials');
				$testimonials = $this->Testimonials->find('all', ['contain'=>'Files']);

				$this->set(compact('testimonials'));
			break;

			case 'fale-conosco':
				$conf_active = 'always_active';
				$this->set(compact('conf_active'));
			break;

			case 'nossas-conquistas':
				$conf_active = 'always_active';
				$this->set(compact('conf_active'));
			break;

		endswitch;
		

		$this->loadModel('Modals');
		$modals = $this->Modals->find('all', ['conditions'=>['status'=>1]])->all();
		$page_title = $page->title;
		$post_conditions = [];
		$posts_ids = null;
		foreach($page->pages_components as $component):
			if($component->component_id == 7){
				$posts_ids = explode(',', $component->content);
			}
		endforeach;

		if($posts_ids!=null){
			$this->loadModel('Posts');
			$posts = $this->Posts->find('all', ['contain'=>['BlogCategories','BlogPostTags.BlogTags','Miniaturas','Capas'], 'conditions'=>$post_conditions])->all();
			foreach($posts as $post){
				$top_posts[$post->id] = $post;
			}

			$this->set(compact(['posts', 'top_posts']));
		}

		
		
		// die(debug($posts));
		$this->set(compact(['page', 'page_title', 'modals']));
	}

	
	public function news($slug=null){
		$this->loadModel('Posts');
		$post = $this->Posts->getBySlug($slug);
	
		$posts = $this->Posts->find('all', [
		  'contain'=>[
			'files',
			'Miniaturas'
		  ],
		  'limit' => 15,
		  'conditions'=>['Posts.slug !='=>$slug],
		  'order'=>[
			'created'=>'DESC'
		  ]
		]);
		$posts = $posts->all();
		$title = $post->title;
		$this->set(compact(['post', 'posts', 'title']));
		// $this->set('_serialize', ['post', 'posts']);
		// die(debug($post));
	  }
}
