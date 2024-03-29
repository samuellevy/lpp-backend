<?php
namespace App\Controller;
use Cake\Mailer\Email;


class PagesController extends AppController
{
	public function view($slug=null){
		$page = $this->Pages->find('all', [
			'conditions'=>[
				'slug'=>$slug,
			],
			'limit'=>1,
			'contain'=>[
				'PagesComponents'=>[
					'sort'=>['sort'=>'asc'],
					'conditions'=>['status'=>1]
				],
				'PagesComponents.Components',
				'PagesComponents.Banners.Files'
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
				$posts = $this->Posts->find('all', ['contain'=>['Files','BlogCategories'], 'limit'=>4, 'order'=>['created'=>'DESC']])->all();
				$this->set(compact('posts'));

				$this->loadModel('Numbers');
				$numbers = $this->Numbers->find('all', ['contain'=>['Desktop', 'Mobile']])->all()->toArray();
				$this->set(compact('numbers'));

				// die(debug($numbers[0]));

				if ($this->request->is('post')) {
					$this->contact($this->request->getData());
				}

				//Instagram
				// $pictures = $this->Instagram->getPics();
			break;
			case 'about-us':
			case 'quem-somos':
				$conf_active = 'always_active';
				$this->set(compact('conf_active'));

				$this->loadModel('Timeline');
				$timeline = $this->Timeline->getByYears();
				$this->set(compact('timeline'));
				// die(debug($timeline));

				$this->loadModel('TeamPositions');
				$positions = $this->TeamPositions->find('all', [
					'contain'=>['Team.Files']
				])->all()->toArray();

				// die(debug($positions));
				$this->set(compact('positions'));

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

			case 'what-we-do':
			case 'o-que-fazemos':
				$conf_active = 'always_active';
				$this->set(compact('conf_active'));

				$this->loadModel('Offices');
				$offices = $this->Offices->find('all')->all();
				$this->set(compact('offices'));
			break;

			case 'academies':
			case 'academias':
				$conf_active = 'always_active';
				$this->set(compact('conf_active'));

				$this->loadModel('Programs');
				$programs = $this->Programs->find('all', ['contain'=>'Files', 'conditions'=>['status']]);
				$this->set(compact('programs'));
				
				$this->loadModel('Pillars');
				$pillars = $this->Pillars->find('all');
				$this->set(compact('pillars'));
			break;

			case 'get-involved':
			case 'como-colaborar':
				$conf_active = 'always_active';
				$this->set(compact('conf_active'));

				if ($this->request->is('post')) {
					$this->contact($this->request->getData());
				}
			break;
			
			case 'contact-us':
			case 'fale-conosco':
				$conf_active = 'always_active';
				$this->set(compact('conf_active'));
				
				if ($this->request->is('post')) {
					$this->contact($this->request->getData());
				}

				$this->loadModel('Units');
				$special_unit = $this->Units->find('all',['conditions'=>['featured'=>1]])->all()->first();
				// die(debug($special_unit));
				$units = $this->Units->find('all', ['conditions'=>['featured'=>0]])->all()->toArray();
				$this->set(compact('units', 'special_unit'));
			break;

			case 'our-results':
			case 'nossas-conquistas':
				$conf_active = 'always_active';
				$this->set(compact('conf_active'));

				$this->loadModel('Testimonials');
				$testimonials = $this->Testimonials->find('all', ['contain'=>'Files']);
				$this->set(compact('testimonials'));

				$this->loadModel('Numbers');
				$numbers = $this->Numbers->find('all', ['contain'=>['Desktop', 'Mobile']])->all()->toArray();
				$this->set(compact('numbers'));

				// die(debug($numbers[0]->desktop[0]->filename));
				
				$this->loadModel('Documents');
				$documents = $this->Documents->find('all', ['contain'=>'Files']);
				$this->set(compact('documents'));

				$count_documents_pe = count($this->Documents->find('all', ['contain'=>'Files', 'conditions'=>['category_id'=>1]])->all());
				$count_documents_ra = count($this->Documents->find('all', ['contain'=>'Files', 'conditions'=>['category_id'=>2]])->all());
				$count_documents_au = count($this->Documents->find('all', ['contain'=>'Files', 'conditions'=>['category_id'=>3]])->all());

				// die(debug($documents->all()));
				$this->set(compact('count_documents_pe','count_documents_ra','count_documents_au'));
			break;

			case 'news':
				$conf_active = 'always_active';
				$this->set(compact('conf_active'));

				$this->loadModel('Posts');
				$posts = $this->Posts->find('all', ['contain'=>['Files','BlogCategories']])->all();
				$this->set(compact('posts'));
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
			'BlogCategories',
		  ],
		  'limit' => 4,
		  'conditions'=>['Posts.slug !='=>$slug],
		  'order'=>[
			'category_id'=>'DESC'
		  ]
		]);
		// $posts_category = $this->Posts->find('all', [
		// 	'contain'=>[
		// 		'files',
		// 		'Miniaturas',
		// 		'BlogCategories',
		// 	  ],
		// 	'limit' => 4,
		// 	'conditions'=>['Posts.category_id ='=>$post->category_id],
		// 	'order'=>[
		// 	  'created'=>'DESC'
		// 	]
		//   ]);
		// $posts_category = $posts_category->all();
		$posts = $posts->all();
		$title = $post->title;
		//die(debug($posts_category));
		$this->set(compact(['post', 'posts', 'title']));
		// $this->set('_serialize', ['post', 'posts']);
		// die(debug($post));
	}
	
	public function marco($slug=null){
		$conf_active = 'always_active';
		$this->set(compact('conf_active'));

		$this->loadModel('Posts');
		$post = $this->Posts->getBySlug($slug);
	
		$posts = $this->Posts->find('all', [
		  'contain'=>[
			'files',
			'Miniaturas',
			'BlogCategories',
		  ],
		  'limit' => 4,
		  'conditions'=>['Posts.slug !='=>$slug],
		  'order'=>[
			'created'=>'DESC'
		  ],
		  'category_id'=> 4
		]);
		$posts = $posts->all();
		$title = $post->title;
		die(debug($posts));
		$this->set(compact(['post', 'posts', 'title']));
		// $this->set('_serialize', ['post', 'posts']);
		// die(debug($post));
	}

	public function contact($message=null, $origin=null){
		// die(debug($message['assunto']));
		$this->loadModel('Subjects');
		$subjects = $this->Subjects->find()->all()->toArray();

		switch($message['assunto']):
			default:
				$assunto = $subjects[0]->title;
				$email = $subjects[0]->email;
				break;
			case 1:
				$assunto = $subjects[1]->title;
				$email = $subjects[1]->email;
				break;
			case 2:
				$assunto = $subjects[2]->title;
				$email = $subjects[2]->email;
				break;
			case 3:
				$assunto = $subjects[3]->title;
				$email = $subjects[3]->email;
				break;
			case 4:
				$assunto = $subjects[4]->title;
				$email = $subjects[4]->email;
				break;
			case 5:
				$assunto = 'Newsletter';
				break;
		endswitch;
		
		$email = new Email('default');
		try {
			if($message['assunto']==5){
				$email->template('newsletter')
				->emailFormat('html')
				->from(['noreply@lutapelapaz.org' => 'Luta Pela Paz [lutapelapaz.org]'])
				->to($email)
				->addTo('samuel.levy@3aworldwide.com.br')
				->subject('['.$assunto.'] Luta Pela Paz')
				->viewVars(['nome'=>$message['name'],'email'=>$message['email'],'assunto'=>$assunto,'mensagem'=>$message['mensagem']])
				// ->attachments([$message->file])
				->send();
				$this->Flash->success(__('Seu cadastro foi enviado com sucesso!'));
			}else{
				$email->template('contact')
				->emailFormat('html')
				->from(['noreply@lutapelapaz.org' => 'Luta Pela Paz [lutapelapaz.org]'])
				->to($email)
				->addTo('samuel.levy@3aworldwide.com.br')
				->subject('['.$assunto.'] Luta Pela Paz')
				->viewVars(['nome'=>$message['name'],'email'=>$message['email'],'assunto'=>$assunto,'mensagem'=>$message['mensagem']])
				// ->attachments([$message->file])
				->send();
				$this->Flash->success(__('Sua mensagem foi enviada com sucesso!'));
			}	
		} catch (Exception $e) {
			
		}

		
		// die(debug($message));
	}
}
