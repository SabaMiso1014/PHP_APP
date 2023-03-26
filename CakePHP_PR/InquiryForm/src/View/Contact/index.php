// 入力ページの作成

<?php $this->assign('title','お問い合わせ'); ?>
<?php $this->Html->css('post',null,array('inline' => false)); ?>
<?php echo $this->Form->create(false,array('type' => 'post','action' => '')); ?>

<div class="container">       
<div class="well1">
<div class="col-12">

<div class="panel panel-danger">
<div class="panel-heading">お問い合わせ</div>
<div class="panel-body">

<div class="control-group">
<p>お気軽にお問い合わせください</p>
<br />
<hr>
</div>

<div class="control-group">
<label class="control-label">※名前</label>
<div class="controls">
<?php echo $this->Form->input('name',array('type' => 'text','label' => false)); ?><?php echo $this->Form->error('ContactModel.name'); ?>
</div>
</div>

<div class="control-group">
<label class="control-label">※Email</label>
<div class="controls">
<?php echo $this->Form->input('email',array('type' => 'text','label' => false)); ?><?php echo $this->Form->error('ContactModel.email'); ?>
</div>
</div> 

<div class="col-12 col-lg-12  col-sm-12">  

<div class="control-group">
<div class="controls">
<hr />
<label class="control-label">※ご用件</label>
<?php echo $this->Form->input('area',array('type' => 'select','multiple' => 'checkbox','options' => $area,'label' => false)); ?>
<?php echo $this->Form->error('ContactModel.area'); ?>
</label>
<hr />
</div>
</div>

</div>           
<div class="control-group">
<div class="controls">
<hr />
<label class="control-label">※問い合わせ</label>
<hr />
<?php echo $this->Form->textarea('text',array('rows' => '10','cols' => '30')); ?> <?php echo $this->Form->error('ContactModel.text'); ?>
</label>
</div>
</div>

<div class="control-group">
<div class="controls">
<?php echo $this->Form->submit('確認',array('name' => 'enter','class' =>' btn btn-danger')); ?>
</div>
</div>
</div>
</div>

<?php echo $this->Form->end(); ?>
</div>
</div>
</div>