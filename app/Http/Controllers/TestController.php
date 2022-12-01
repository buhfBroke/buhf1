<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
class TestController extends Controller{
	public function show12($param1,$param2){
		
		return view ('test.test', ['d'=>'w','arr'=>[1,2],'age'=>18,'salary'=>25000 , 'var'=>'color:brown','age'=>'18',
	'day'=>14, 'day1'=>11]);
	}
	
	public function showOne13(){
		$ar=[88,12];
		$v=0;
		foreach($ar as $a)
		$v=$v+$a;
		
		return view ('test.test' , ['ar'=>$ar,'sum'=>$v]);
	}
}

