<?php

class PostsController extends AppController
{
  public $uses = array('User', 'Post');

  public $components = array(
     'Session',
     'Auth' => array(
        'authenticate' => array(
           'Form' => array(
              'fields' =>
                     array('username' => 'name', 'password' =>'email')
            )
      ),
    'loginRedirect' => array('action' => 'postlist'),
                   'logoutRedirect' => array('action' => 'index'),
                   'loginAction' => array('action' => 'index')
              )
         );

  public function beforeFilter()
  {
    $this->Auth->allow('index');
    $this->set('user', $this->Auth->user());
  }


  public function index()
  {
    if($this->request->is('post'))
    {
      if($this->Auth->login())
      {
        return $this->redirect($this->Auth->redirect());
      }
      else
      {
        $this->Session->setFlash('ユーザーネームかメールアドレスが間違っています', 'default', array(), 'auth');
      }
    }
  }
  public function postlist()
  {
   $this->set('list', $this->Post->find('all'));
  }

  public function add()
  {
    if ($this->request->is('post'))
    {
      $request = $this->request->data['Post'];
      $user = $this->Auth->user();
      $this->Post->save($data);
    }
    $this->redirect('postlist');
  }

  public function edit($id)
  {
    if($this->request->is('post'))
    {
      $request = $this->request->data['Post'];
      $data = array(
        'id' => $request['id'],
        'message' => $request['message']
        );
      $this->Post->save($data);
      $this->redirect('postlist');
    }
    else
    {
       $data = $this->Post->findById($id);
    }
     $this->set('data', $data['Post']);
  }

  public function delete($id)
  {
    $this->Post->delete($id);
     $this->redirect('postlist');
  }

  public function logout()
  {
 $this->Auth->logout();
 $this->redirect(array('action'=>'index'));
  }

}