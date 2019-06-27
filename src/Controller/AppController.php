<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\I18n\I18n;

class AppController extends Controller
{
    public function initialize(){
        // I18n::locale('en_US');    
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');
    }

    public function beforeFilter(Event $event){
        $this->viewBuilder()->theme('Site'); // AppUI is my plugin name

        $this->loadModel('Menu');
        $menu = $this->Menu->find('all', ['contain'=>[
          'ChildMenu'=>[
            'conditions'=>['ChildMenu.status'=>1]
          ]
        ],
        'conditions'=>[
          'parent_id' => 0,
          'Menu.status'=>1
          ]]);
        $menu = $menu->all();
        $this->set('menu', $menu);

        $this->loadModel('Configs');
        $footer_presentation = $this->Configs->find('all',['conditions'=>['slug'=>'footer-presentation']])->first();
        $this->set(compact('footer_presentation'));

        $full_footer = $this->Configs->find('all',['conditions'=>['slug'=>'full-footer']])->first();
        $this->set(compact('full_footer'));

        $top_signin = $this->Configs->find('all',['conditions'=>['slug'=>'top-signin']])->first();
        $this->set(compact('top_signin'));

        $top_ouvidoria = $this->Configs->find('all',['conditions'=>['slug'=>'top-ouvidoria']])->first();
        $this->set(compact('top_ouvidoria'));
    }

    public function beforeRender(Event $event){
      $general_info['title'] = '';

    }
}
