<?php
namespace App\Controller;
use Cake\Mailer\Email;


class PagesController extends AppController
{
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

				$this->loadModel('Posts');
				$posts = $this->Posts->find('all', ['contain'=>['Files','BlogCategories']])->all();
				$this->set(compact('posts'));

				//Instagram
				// $pictures = $this->Instagram->getPics();
			break;
			case 'quem-somos':
				$conf_active = 'always_active';
				$this->set(compact('conf_active'));

				$this->loadModel('Timeline');
				$timeline = $this->Timeline->getByYears();
				$this->set(compact('timeline'));
				// die(debug($timeline));

				$this->loadModel('Team');
				$team_top = $this->Team->find('all', [
					'contain'=>['Files'],
					'conditions'=>['position'=>'top']
				])->all();
				$team_mid = $this->Team->find('all', [
					'contain'=>['Files'],
					'conditions'=>['position'=>'bottom']
				])->all();
				$team_bot = $this->Team->find('all', [
					'contain'=>['Files'],
					'conditions'=>['position'=>'both']
				])->all();
				$this->set(compact('team_top','team_mid','team_bot'));

				$this->loadModel('Sponsors');
				$sponsors_global = $this->Sponsors->find('all', [
					'contain'=>['Files'],
					'conditions'=>['sponsor_from_id'=>'1']
				])->all();

				$sponsors_brasil = $this->Sponsors->find('all', [
					'contain'=>['Files'],
					'conditions'=>['sponsor_from_id'=>'2']
				])->all();

				$sponsors_uk = $this->Sponsors->find('all', [
					'contain'=>['Files'],
					'conditions'=>['sponsor_from_id'=>'3']
				])->all();
				
				$sponsors_internacional = $this->Sponsors->find('all', [
					'contain'=>['Files'],
					'conditions'=>['sponsor_from_id'=>'4']
				])->all();
				$this->set(compact('sponsors_global','sponsors_brasil','sponsors_uk','sponsors_internacional'));
				// die(debug($sponsors_brasil));
			break;

			case 'o-que-fazemos':
				$conf_active = 'always_active';
				$this->set(compact('conf_active'));
			break;

			case 'academias':
				$conf_active = 'always_active';
				$this->set(compact('conf_active'));

				$this->loadModel('Programs');
				$programs = $this->Programs->find('all', ['contain'=>'Files']);
				$this->set(compact('programs'));
			break;

			case 'como-colaborar':
				$conf_active = 'always_active';
				$this->set(compact('conf_active'));
			break;
			
			case 'fale-conosco':
				$conf_active = 'always_active';
				$this->set(compact('conf_active'));
			break;

			case 'nossas-conquistas':
				$conf_active = 'always_active';
				$this->set(compact('conf_active'));

				$this->loadModel('Testimonials');
				$testimonials = $this->Testimonials->find('all', ['contain'=>'Files']);
				$this->set(compact('testimonials'));
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
		$conf_active = 'always_active';
		$this->set(compact('conf_active'));

		$this->loadModel('Posts');
		$post = $this->Posts->getBySlug($slug);
	
		$posts = $this->Posts->find('all', [
		  'contain'=>[
			'files',
			'Miniaturas',
			'BlogCategories'
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
