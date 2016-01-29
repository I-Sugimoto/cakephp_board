<?php

class UsersController extends AppController
{
  public $components = array('Auth');

  public function beforeFilter ()
  {
        $this->Auth->allow('index', 'add');
  }

  public function index ()
  {


  }

  public function add ()
  {
      $this->request->data['User']['email'] = Authcomponent::password($this->request->data['User']['email']);
      $this->User->save($this->request->data);

      return $this->redirect(
          array(
            'controller' => 'posts',
            'action' => 'index'
          )
      );
  }

}