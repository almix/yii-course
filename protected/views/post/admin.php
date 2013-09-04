<?php
$this->breadcrumbs=array(
	'Manage Posts',
);
?>
<h1>Manage Posts</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'name'=>'title',
			'type'=>'raw',
			'value'=>'CHtml::link(CHtml::encode($data->title), $data->url)'
		),
		array(
			'name'=>'status',
			'value'=>'Lookup::item("PostStatus",$data->status)',
			'filter'=>Lookup::items('PostStatus'),
		),
		array(
			'name'=>'create_time',
			'type'=>'datetime',
			'filter'=>false,
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
<table>
<tr>
	<td style="text-align: right;">Записей на странице: <?php echo CHtml::dropDownList('',Yii::app()->session['postPageCount'] ? Yii::app()->session['postPageCount'] : 10,Yii::app()->params['selectPageCount'],array('onchange'=>"document.location.href='/" . Yii::app()->request->pathInfo . "?pageCount='+this.value;")); ?></td>
</tr>
</table>
