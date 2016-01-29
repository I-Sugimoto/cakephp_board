<h1><?php echo $user['name'] ?>さん 会員制掲示板へようこそ!</h1>
<div>
  <?php echo $this->Html->link('ログアウト', array('action' => 'logout')); ?>
</div>
<div>
一言どうぞ!
</div>
<div>
  <?php echo $this->Form->create('Post', array('action' => 'add')); ?>
  <?php echo $this->Form->input('message', array('label' => 'メッセージ')); ?>
   <?php echo $this->Form->end('投稿する'); ?>
</div>
<h1>投稿されたメッセージ</h1>
<div>
    <?php if ($list) : ?>
      <table>
          <tr>
              <th>名前</th>
              <th>メッセージ</th>
              <th>投稿時間</th>
              <th>編集</th>
              <th>削除</th>
          </tr>
        <?php foreach ($list as $data) :?>

            <tr>
                <td><?=$data['Post']['name']?></td>
                <td><?=$data['Post']['message']?></td>
                <td><?=$data['Post']['created']?></td>
                <td><?php echo $this->Html->link('編集', array('action' => 'edit', $data['Post']['id'])); ?></td>
                <td><?php echo $this->Html->link('削除', array('action' => 'delete', $data['Post']['id'])); ?></td>
            </tr>
        <?php endforeach; ?>
      </table>
    <?php else: ?>
        投稿されたメッセージはありません
    <?php endif; ?>
</div>