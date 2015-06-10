<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\Test;
use app\models\Customer;
use app\models\Order;

class TestController extends Controller{
	
	public function actionIndex()
	{
		//查询数据
		//$sql = 'select * from test where id = 1';
		
		//防止SQL 注入
// 		$id = '1 or 1=1';
// 		$sql = 'select * from test where id =:id';	//:id为占位符
		
// 		$results  = Test::findBySql($sql,array(':id'=>1))->all();
//		$results  = Test::findBySql($sql,array(':id'=>'1 or 1=1'))->all();
		
		//通过数组查询数据
		
		//id=1的数据查询
		//$results = Test::find()->where(['id'=>1])->all();
		
		//id>0的数据查询
		//$results = Test::find()->where(['>','id',0])->all();
		
		//id>=1或者id<=2的数据查询
		//$results = Test::find()->where(['between','id',1,2])->all();
		
		//title like "%title1%"
		//$results = Test::find()->where(['like','title','title1'])->all();
		
		//查询结果转化成数组,降低内存
		//$results = Test::find()->where(['between','id',1,2])->asArray()->all();
		
// 		//批量查询
// 		foreach (Test::find()->batch(1) as $tests){
			
// 			print_R(count($tests));
// 			echo "<br >";
// 		}		
	//print_R($results);
		//print_R(count($results));
		
//**************************************
		
		//删除数据
// 		$results = Test::find()->where(['id'=>1])->all();
// 		$results[0]->delete();

		//删除数据
	//	Test::deleteAll('id>:id',array(':id'=>0));
//*****************************************

		//单表添加数据
// 		$test = new Test;
// 		$test->id = '4';
// 		$test->title = 'title4';
// 		//启用验证器
// 		$test->validate();
// 		if($test->hasErrors()){
			
// 			echo 'data is error!';
// 			die;
// 		}
// 		$test->save();

		//表数据修改
// 		$test  = Test::find()->where(['id'=>4])->one();
// 		$test->title = 'title4';
// 		$test->save();
		
//************* 关联查询 *************************************
	
		//根据顾客查询他的订单信息
//		$customer = Customer::find()->where(['name'=>'zhangsan'])->one();
// 		$orders = $customer->hasMany(Order::className(),['customer_id'=>'id'])->asArray()->all();		
// 		$orders = $customer->getOrders();
//		$orders = $customer->orders;
//		print_r($orders);	

		//根据订单查询顾客信息
// 		$order = Order::find()->where(['id'=>1])->one();
// 		$customer = $order->customer;
		
// 		print_r($customer);

//************** 关联查询结果缓存 ******************
// 	$customer = Customer::find()->where(['name'=>'zhangsan'])->one();
// 	$orders = $customer->orders;		//select * from order where customer_id = ...
// 	unset($customer->orders);
// 	$order2 = $customer->orders;	//select * from order where customer_id = ...
	
	//关联查询的多次查询
//	$customer = Customer::find()->all();	//select * from customer

// 		$customer = Customer::find()->with('orders')->all();
// 	foreach ($customers as $customer){
// 		$orders = $customer->orders;			
//	}
		
		
	}
	
}

?>