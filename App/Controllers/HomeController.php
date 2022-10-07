<?php
namespace App\Controllers;
use App\Controllers\BaseController;

class HomeController extends BaseController{
    public function Home(){
        //Hiển thị danh sách sản phẩm bằng render của BladeOne
        $viewName = 'home';
        $data=[
            'name'=>'Iphone 14',
            'price'=>12000000,
            'color'=>['red','green','black']
        ];
        return $this->render($viewName,$data);
    }

}