<h1>ログイン</h1>
<div>
    <?php echo $this->Session->Flash('auth'); ?>
    <?php echo $this->Form->create('Post', array('action' => 'index')); ?>
    <?php echo $this->Form->input('User.name', array('label' => 'ユーザーネーム', 'error' => false)); ?>
    <?php echo $this->Form->input('User.email', array('label' => 'メールアドレス', 'error' => false)); ?>
    <?php echo $this->Form->end('ログイン'); ?>

</div>
<?php
  echo $this->Html->link(
    '新規登録はこちら！',
    array(
      'controller' => 'users',
      'action' => 'index'
    )
  );

?>