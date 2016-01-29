<h1>メッセージ編集</h1>
  <?php echo $this->Form->create('Post', array('action' => 'edit')); ?>
  <?php echo $this->Form->input('message', array('label' => 'メッセージ', 'value' => $data['message'])); ?>
  <?php echo $this->Form->hidden('id' , array('value' => $data['id'])); ?>
  <?php echo $this->Form->end('編集する'); ?>