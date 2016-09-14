<?php
/**
* 控制器作用是调用各个模型，并调用视图，将模型产生的数据传递给视图，并让视图去显示
*/
class testController 
{
	function show()
	{
		$testModel = M('test');//实例化
		$data = $testModel->get();

	//已经取到数据
		$testView =V('test');
		$testView->display($data);
	}
}