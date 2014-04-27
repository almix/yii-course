<?php if(!empty($_GET['tag'])): ?>
<h1>Posts Tagged with <i><?php echo CHtml::encode($_GET['tag']); ?></i></h1>
<?php endif; ?> 

<?php if(!empty($_GET['username'])): ?>
<h1>Статьи автора &mdash; <i><?php echo CHtml::encode($_GET['username']); echo "&nbsp;<span class=smallgray>(кол-во: ".$countAuthorPosts.")</span>"?></i></h1>
<?php 
$this->breadcrumbs=array('Статьи'=>array('post/index'),	'автор '.$_GET['username'],);
$this->pageTitle="Статьи автора &mdash; ".$_GET['username'];
endif; ?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'template'=>"{items}\n{pager}",
)); ?>
