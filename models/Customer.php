<?php
namespace app\models;

use yii\db\ActiveRecord;

class Customer extends ActiveRecord{

	//帮助顾客获取订单信息
	public function getOrders(){
		$orders = $this->hasMany('app\models\Order',['customer_id'=>'id'])->asArray();
		return $orders;
	}
}

?>