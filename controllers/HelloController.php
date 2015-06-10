<?php
/**
* TestGuest Version1.0
* ================================================
* Copy 2014
* Web: http://www.yc60.com
* ================================================
* Author:zhangshuhui
* Date: 2015-5-29
*/
namespace app\controllers;

use yii\web\Controller;
use yii\web\Cookie;

class HelloController extends Controller{
	
	public $layout = 'common'; //common布局文件
	
	public function actionIndex()
	{
		//echo "Hello World";
		
		//$request = \YII::$app->request;
		
		//GET方式获得请求
		//echo $request->get('id');
		//echo $request->get('id',20);
		
		//POST方式获得请求
		//$request->post('name');
		// $request->post('name',3333);
		
		/*判断请求是否为GET方式
		if($request->isGet)
		{
			echo 'This is get method!';
		}
		*/
		
		/* 判断请求是否为POST方式
		if ($request->isPost)
		{
			echo 'This is post method!';
		}
		*/
		
		//获取用户地址
		//echo $request->userIp;
		 
		//响应处理
		//$res = \YII::$app->response;
		
		//$res->statusCode = '404';		//响应状态码的设置
		
		//pragma 主要是和浏览器缓存打交道的
		//$res->headers->add('pragma','no-cache');	
		
		//设置浏览器缓存为5秒
		//$res->headers->set('pragma','max-age-5');
		
		//remove 删除pragma
		//$res->headers->remove('pragma');
		
		//跳转
		//$res->headers->add('location','http://www.baidu.com');
		//跳转2
		//$this->redirect('http://www.baidu.com',302);
		
		//文件下载
		//$res->headers->add('content-disposition','attachment;filename="a.jpg"');
		//包装的方法进行文件的下载
		//$res->sendFile('./robots.txt');
		
		//控制器之#session处理
	//	$session = \YII::$app->session;
		
	//	$session->open();
		
// 		if($session->isActive)
// 		{
// 			echo "session is active";
// 		}
		
		//把session当成对象使用
 	//	$session->set('user','张曙辉');
//		echo $session->get('user');
//		$session->remove('user');
		
		//把session当成数组使用
//		$session['user'] = '张曙辉';
//		echo $session['user'];
//		unset($session['user']);

 		//$session['user'] = '张曙辉';
 	//	echo $session['user'];
 	
		
		//控制器的cookie处理
// 		$cookies = \YII::$app->response->cookies;
		
// 		$cookie_data = array('name'=>'user','value'=>'zhangmiao');
// 		$cookies->add(new Cookie($cookie_data));
		//$cookies->remove('user');
		
//		从请求中获取cookie值
// 		$cookies = \YII::$app->request->cookies;		//请求组建
// 		echo $cookies->getValue('user');
// 		echo $cookies->getValue('users',20); //所user不存在，返回20
		

//视图创建
		//return $this->renderPartial('index');
		
//数据传递		
// 		$hello_str = "Hello God!";
// 		$test_arr = array(1,2);
		
// 		//创建一个数组
// 		$data = array();
		
// 		//把需要传递给视图的数据，放到数组当中
// 		$data['view_hello_str'] = $hello_str;
// 		$data['view_test_arr'] = $test_arr;
		
// 		return $this->renderPartial('index',$data);	
//  		return $this->renderPartial('index',$data);
//数据安全
	
//  		$hello_str = "Hello God!<script>alert(3);</script>";
//  		$data = array();
//  		$data['view_hello_str'] = $hello_str;
//  		return $this->renderPartial('index1',$data);

		//视图之布局文件
	//	return $this->render('about');		//把about视图里面的内容放到$content变量当中	
		
		//视图中显示另外一个视图
		return $this->render('about');
 
	}
	
}

?>