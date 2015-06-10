<h1>Hello index!</h1>
<?php 
	//echo $this->render('about');	
	
	//echo $this->render('about',array('v_hello_str'=>'Hello World!'));
?>

<?php 
	$this->beginBlock('block1');
?>
<h1>index</h1>
<?php $this->endBlock();?>