<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
class Employee extends Controller{
    private $Employee;
    public function __construct() {
        $this->Employee = [
            1=>[
                'name' => 'user1',
                'surname' => 'surname1',
                'salary'=>1000,
            ],
            2=>[
                'name'=>'user2',
                'surname'=>'surname2',
                'salary'=>2000,
            ],
            3=>[
                'name'=>'user3',
                'surname'=>'surname3',
                'salary'=>3000,
            ],
            4=>[
                'name'=>'user4',
                'surname'=>'surname4',
                'salary'=>4000,
            ],
        ];
    }
    public function showOne4($id){
        return $this->Employee[$id];
    }
    public function showOne2($id,$param){
        return $this->Employee[$id][$param];
    }
}
