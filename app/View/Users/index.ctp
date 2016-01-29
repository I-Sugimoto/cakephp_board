<h1>新規登録</h1>
<?php echo $this->Form->create('User', array('action' => 'add')); ?>
<?php echo $this->Form->input('name', array('label' => 'ユーザーネーム')); ?>
<?php echo $this->Form->input('email', array('label' => 'メールアドレス')); ?>
<?php echo $this->Form->end('登録する'); ?>
<?php echo $this->Html->link(
    'ログイン画面へ',
    array(
      'controller' => 'posts',
      'action' => 'index'
    )
  );
?>