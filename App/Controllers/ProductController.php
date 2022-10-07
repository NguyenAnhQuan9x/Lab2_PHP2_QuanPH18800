<?php
namespace App\Controllers;
use App\Controllers\BaseController;

class ProductController extends BaseController{
    public function getProduct($id){
        //Hiển thị danh sách sản phẩm bằng render của BladeOne
        $viewName = 'product.detailProduct';
        $data=[
            'name'=>'Iphone 14',
            'price'=>12000000,
            'color'=>['red','green','black']
        ];
        return $this->render($viewName,$data);
    }
    
    public function showProduct(){
        $viewName = 'product.showProduct';
        $data=[
            'name'=>"Iphone 13",
            'price'=>1150000
        ];
        return $this->render($viewName,$data);
    }  
    public function addProduct(){
        $viewName = 'product.addProduct';
        $data=[
            'name'=>"Iphone 13",
            'price'=>1150000
        ];
        return $this->render($viewName,$data);
    } 

}