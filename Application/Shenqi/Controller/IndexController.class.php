<?php
namespace Shenqi\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->show('123');
    }
}