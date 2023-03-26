// 確認ページの作成

<?php $this->assign('title','問い合わせ'); ?>
<?php echo $this->Form->create(false,array('type' => 'post','action' => '')); ?>

<div class="container">       
<div class="col-12">

<div class="panel panel-danger">
<div class="panel-heading">お問い合わせ</div>
<div class="panel-body">

<div class="control-group">
<label class="control-label">名前</label>
<div class="controls">
<?php echo $this->data['name']; ?>
</div>
</div>

<div class="control-group">
<hr />
<label class="control-label">Email</label>
<div class="controls">
<?php echo $this->data['email']; ?>
</div>
</div>

<div class="control-group">
<hr />
<label class="control-label">ご用件</label>
<div class="controls">
<?php
    foreach($this->data['area'] as $k => $v){
        $area_tmp[$k] = $area[$v];
    }
?>
<?php echo implode(',',$area_tmp); ?>
</div>
</div>

<div class="control-group">
<hr />
<label class="control-label">内容</label>
<div class="controls">
<?php echo nl2br($this->data['text']); ?>
</div>
</div>

<div class="control-group">
<div class="controls">
<hr />
<?php echo $this->Form->submit('送信する',array('name' => 'send','class' =>' btn btn-danger')); ?>
</div>
</div>

<div class="control-group">
<div class="controls">
<hr />
<?php echo $this->Form->submit('戻る',array('name' => 'back','class' =>' btn')); ?>
</div>
</div>

</div>
</div>
<?php echo $this->Form->end(); ?>
</div>
</div>