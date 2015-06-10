<?php
namespace app\models;

use yii\db\ActiveRecord;

class Test extends ActiveRecord{
	
	//对数据合法性进行验证。其中integer ,string都是验证器
	public function rules(){
		return [
			['id','integer'],
			['title','string','length'=>[0,10]]
		];
	}
}

?>