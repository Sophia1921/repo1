<?php
//$this->title = 'Одна статья';
?>
<?php $this->beginBlock('block1');?>
<h1>Заголовок страницы</h1>
<?php $this->endBlock();?>
<h1>Show Action!</h1>
<?php $this->registerJs("$('.container\').append(\'<p>Show!</p>\');")?>
<button class="btn btn-success">Click me..</button>
