<!-- 
视图创建:
<h1>Hello World!</h1>
通过数组进行数据传递：
<h1><?//=$view_hello_str; ?></h1>

数组数据的传递:
<h1><?//=$view_test_arr[0]; ?></h1>
-->
<?php 
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>
<h1><?=Html::encode($view_hello_str); //通过Html::encode()过滤javascript代码
?></h1>
<h1><?= HtmlPurifier::process($view_hello_str); //去掉javascirpt代码

?></h1>
