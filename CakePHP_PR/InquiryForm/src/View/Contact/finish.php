// 完了ページの作成

<?php $this->assign('title',' お問い合わせ完了画面'); ?>
<?php echo $this->Form->create(false,array('type' => 'post','action' => '')); ?>

<div class="container">       
<div class="col-12">

<div class="panel panel-danger">
<div class="panel-heading">  送信完了しました。</div>
<div class="panel-body">

<?php echo $this->Form->submit('戻る',array('name' => 'back','class' =>' btn btn-danger')); ?>

</div>
</div>
<?php echo $this->Form->end(); ?>
</div>