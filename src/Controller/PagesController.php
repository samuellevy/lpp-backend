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
			case 'noticias':
				$this->loadModel('Posts');
				$posts = $this->paginate($this->Posts, [
					'conditions'=>['category_id'=>1]
				]);

				$this->set(compact('posts'));
			break;

			case 'colunas':
				$this->loadModel('Posts');
				$posts = $this->paginate($this->Posts, [
					'conditions'=>['category_id'=>2]
				]);

				$this->set(compact('posts'));
			break;

			case 'dicas-de-saude':
				$this->loadModel('Posts');
				$posts = $this->paginate($this->Posts, [
					'conditions'=>['category_id'=>3]
				]);

				$this->set(compact('posts'));
			break;

			case 'nossos-numeros':
				$this->loadModel('Numbers');
				$numbers = $this->Numbers->find('all', [
					'contain'=>'Files'
				])->all();

				$this->set(compact(('numbers')));
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

	public function results(){
		$this->loadModel('Credenciados');
		$qualiss_list = [ 1=>'APALC', 2=>'ADICQ', 3=>'AONA', 4=>'ACBA', 5=>'AIQG', 6=>'n.png', 7=>'p.png', 8=>'r.png', 9=>'e.png', 10=>'q.png', 13=>'p.png', 14=>'m.png', 15=>'d.png', 16=>'a.png', 17=>'g.png', 18=>'i.png' ];
		$conditions = [];

		if($this->request->is('get')){
			$conditions = [];
			if(isset($this->request->query['prestador']) && !empty($this->request->query['prestador'])){
				$prestador = $this->request->query['prestador'];
				$this->set(compact('prestador'));
				$conditions = array_merge($conditions,['prestador LIKE'=>'%'.$prestador.'%']);
			}
			if(isset($this->request->query['servico']) && !empty($this->request->query['servico'])){
				$servico = $this->request->query['servico'];
				$this->set(compact('servico'));
				$conditions = array_merge($conditions,['servico'=>$servico]);
			}
			if(isset($this->request->query['especialidade']) && !empty($this->request->query['especialidade'])){
				$especialidade = $this->request->query['especialidade'];
				$this->set(compact('especialidade'));
				$conditions = array_merge($conditions,['especialidade'=>$especialidade]);
			}
			if(isset($this->request->query['cidade']) && !empty($this->request->query['cidade'])){
				$cidade = $this->request->query['cidade'];
				$this->set(compact('cidade'));
				$conditions = array_merge($conditions,['cidade'=>$cidade]);
			}
			if(isset($this->request->query['bairro']) && !empty($this->request->query['bairro'])){
				$bairro = $this->request->query['bairro'];
				$this->set(compact('bairro'));
				$conditions = array_merge($conditions,['bairro'=>$bairro]);
			}
		}

		$credenciados = $this->paginate($this->Credenciados, [
			'conditions'=>$conditions,
		]);

		$this->set(compact(['qualiss_list', 'credenciados']));
	}

	public function send(){
		$form = $this->request->data;
		// die(debug($form));

		$assunto = "Currículo de ";
		$assunto.= $form['nome'];
		$assunto.= " - ";
		$assunto.= $form['profissao'];

		$msg = "<br/>";
		$msg.= "<h1>CURR&Iacute;CULO ENVIADO PELO WEBSITE - www.cac.org.br</h1>";
		$msg.= "<h2>".$form['nome']." - ".$form['profissao']."</h2>";
		$msg.= "<hr />";
		$msg.= "<br/>";

		$msg.= "<strong>Nome:</strong> ";
		$msg.= $form['nome'];
		$msg.= "<br/>";

		$msg.= "<strong>Email:</strong> ";
		$msg.= $form['email'];
		$msg.= "<br/>";

		$msg.= "<strong>Sexo:</strong> ";
		$msg.= $form['sexo'];
		$msg.= "<br/>";

		$msg.= "<strong>Estado Civil:</strong> ";
		$msg.= $form['estadocivil'];
		$msg.= "<br/>";

		$msg.= "<strong>Nascimento:</strong> ";
		$msg.= $form['datadenascimento'];
		$msg.= "<br/>";

		$msg.= "<strong>Telefone Residencial:</strong> ";
		$msg.= $form['residencial'];
		$msg.= "<br/>";

		$msg.= "<strong>Telefone Celular:</strong> ";
		$msg.= $form['celular'];
		$msg.= "<br/>";

		$msg.= "<strong>Telefone para Recado:</strong> ";
		$msg.= $form['telefonederecado'];
		$msg.= "<br/>";
		$msg.= 'Falar com '.$form['falarcom'];
		$msg.= "<br/>";

		$msg.= "<strong>Endere&ccedil;o:</strong> ";
		$msg.= $form['endereco'];
		$msg.= ", ";
		$msg.= $form['numero'];
		$msg.= "<br/>";
		
		$msg.= "<strong>Complemento:</strong> ";
		$msg.= $form['complemento'];
		$msg.= "<br/>";

		$msg.= "<strong>Bairro:</strong> ";
		$msg.= $form['bairro'];
		$msg.= "<br/>";

		$msg.= "<strong>Cidade:</strong> ";
		$msg.= $form['cidade'];
		$msg.= "<br/>";

		$msg.= "<strong>Estado:</strong> ";
		$msg.= $form['estado'];
		$msg.= "<br/>";

		$msg.= "<strong>CEP:</strong> ";
		$msg.= $form['cep'];
		$msg.= "<br/>";
		$msg.= "<hr/>";
		$msg.= "<br/>";

		$msg.= "<strong>Est&aacute; Empregado?</strong> ";
		$msg.= $form['empregado'];
		$msg.= "<br/>";

		$msg.= "<strong>Objetivos Profissionais:</strong> ";
		$msg.= $form['objetivosprofissionais'];
		$msg.= "<br/>";

		$msg.= "<strong>Onde Deseja Trabalhar:</strong> ";
		$msg.= $form['ondesejatrabalhar'];
		$msg.= "<br/>";

		$msg.= "<strong>Pretens&atilde;o:</strong> ";
		$msg.= $form['pretensaosalarial'];
		$msg.= "<br/>";

		$msg.= "<strong>&Aacute;rea de Atua&ccedil;&atilde;o:</strong> ";
		$msg.= $form['areadeatuacao'];
		$msg.= "<br/>";

		$msg.= "<strong>Minicurr&iacute;culo:</strong> ";
		$msg.= $form['minicurriculo'];
		$msg.= "<br/>";
		$msg.= "<hr/>";
		$msg.= "<br/>";

		$msg.= "<strong>Escolaridade:</strong> ";
		$msg.= $form['graudescolaridade'];
		$msg.= "<br/>";

		$msg.= "<strong>Cursos:</strong> ";
		$msg.= $form['curso'];
		$msg.= "<br/>";

		$msg.= "<strong>Idiomas:</strong> ";
		$msg.= $form['idiomas'];
		$msg.= "<br/>";
		$msg.= "<hr/>";
		$msg.= "<br/>";

		$msg.= "<strong>&Uacute;ltimo Emprego:</strong> ";
		$msg.= $form['ultimoemprego'];
		$msg.= "<br/>";

		$msg.= "<strong>Cargo:</strong> ";
		$msg.= $form['cargonaempresa1'];
		$msg.= "<br/>";

		$msg.= "<strong>Entrada:</strong> ";
		$msg.= $form['datadeentrada1'];
		$msg.= "<br/>";

		$msg.= "<strong>Saida:</strong> ";
		$msg.= $form['datadesaida1'];
		$msg.= "<br/>";
		$msg.= "<br/>";

		$msg.= "<strong>Pen&uacute;ltimo Emprego:</strong> ";
		$msg.= $form['penultimoemprego'];
		$msg.= "<br/>";

		$msg.= "<strong>Cargo:</strong> ";
		$msg.= $form['cargonaempresa2'];
		$msg.= "<br/>";

		$msg.= "<strong>Entrada:</strong> ";
		$msg.= $form['datadeentrada2'];
		$msg.= "<br/>";

		$msg.= "<strong>Saida:</strong> ";
		$msg.= $form['datadesaida2'];
		$msg.= "<br/>";
		$msg.= "<br/>";

		$msg.= "<strong>AntiPen&uacute;ltimo Emprego:</strong> ";
		$msg.= $form['antepenultimo'];
		$msg.= "<br/>";

		$msg.= "<strong>Cargo:</strong> ";
		$msg.= $form['cargonaempresa3'];
		$msg.= "<br/>";

		$msg.= "<strong>Entrada:</strong> ";
		$msg.= $form['datadeentrada3'];
		$msg.= "<br/>";

		$msg.= "<strong>Saida:</strong> ";
		$msg.= $form['datadesaida3'];

		$email = new Email('default');
		$email->from(['cac@cac.org.br' => 'Trabalhe Conosco'])
			->to('vinicius.machado@3aworldwide.com.br')
			->emailFormat('html')
			->subject($assunto)
			->send($msg);

		$this->Flash->success(__('Enviado com sucesso.'));
		return $this->redirect(['controller'=>'pages', 'action'=>'view', 'trabalhe-conosco']);
	}

	public function ouvidoria(){
		$form = $this->request->data;

		$assunto = 'Mensagem enviada pelo site da CAC';

		$msg = "<h3>Mensagem enviada atrav&eacute;s do site da CAC para a Ouvidoria</h3>";
		$msg.= "<hr/>";

		$msg.= "Nome Completo: ";
		$msg.= $form['nome'];
		$msg.= "<br/>";

		$msg.= "Nº Carteirinha: ";
		$msg.= $form['numero'];
		$msg.= "<br/>";

		$msg.= "Email: ";
		$msg.= $form['email'];
		$msg.= "<br/>";

		$msg.= "Mensagem: ";
		$msg.= $form['mensagem'];


		$email = new Email('default');
		$email->from(['cac@cac.org.br' => 'Ouvidoria - CAC'])
			->to('ouvidoria@cedaesaude.org.br')
			->emailFormat('html')
			->subject($assunto)
			->send($msg);

		$this->Flash->success(__('Enviado com sucesso.'));
		return $this->redirect(['controller'=>'pages', 'action'=>'view', 'trabalhe-conosco']);
	}

	public function contact(){
		$form = $this->request->data;

		if(empty($form['setor'])){
			$form['setor'] = 3;
		}

		if(empty($form['assunto'])){
			$form['assunto'] = '';
		}

		$titles = [0=>"Central de Atendimento (dúvidas, reclamações, sugestões)", 1=>"Setor de Credenciamento (atendimento aos Prestadores)", 2=>"Setor de Comunicação (outros assuntos)", 3=>"Webmaster (sobre o funcionamento do website)"];
		$emails = [0=>"gecli@cedaesaude.org.br", 1=>"gecre@cedaesaude.org.br", 2=>"comunicacao@cedaesaude.org.br", 3=>"cedaesaude@cedaesaude.org.br"];

		$setor = $form['setor'];
		
		$assunto = 'Mensagem enviada pelo site da CAC';

		$msg = "<h3>Mensagem enviada atrav&eacute;s do site da CAC para a Ouvidoria</h3>";
		$msg.= "<hr/>";

		$msg.= "Nome Completo: ";
		$msg.= $form['nome'];
		$msg.= "<br/>";

		$msg.= "Nº Carteirinha: ";
		$msg.= $form['assunto'];
		$msg.= "<br/>";

		$msg.= "Email: ";
		$msg.= $form['email'];
		$msg.= "<br/>";

		$msg.= "Mensagem: ";
		$msg.= $form['mensagem'];


		$email = new Email('default');
		$email->from(['cac@cac.org.br' => 'Fale Conosco - CAC'])
			->to($emails[$setor])
			->emailFormat('html')
			->subject($assunto)
			->send($msg);

		$this->Flash->success(__('Enviado com sucesso.'));
		return $this->redirect(['controller'=>'pages', 'action'=>'view', 'contato']);
	}

	public function login(){
		
	}

	public function bairros(){
		$this->viewBuilder()->setLayout('ajax');
		
		$cidade = $this->request->data('cidade');
		// $cidade = 'CABO+FRIO';
		$cidade = str_replace('+', ' ', $cidade);

		$this->loadModel('Cidades');
		$cidade = $this->Cidades->find('all',['conditions'=>['nome'=>$cidade]])->first();
		// die(debug($cidade));

		$this->loadModel('Bairros');
		$bairros = $this->Bairros->find('all', [
			'conditions'=>[
				'Bairros.nome !='=>'',
				'Bairros.nome !='=>' ',
				'Bairros.id_cidade'=>$cidade->id
			]
		])->all();

		$options = '';
		foreach($bairros as $bairro):
			$options .= '<option value="'.$bairro->nome.'">'.$bairro->nome.'</option>';
		endforeach;

		echo $options;
		exit();
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
