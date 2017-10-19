<?php
/**
 * Created by PhpStorm.
 * User: pengjiang
 * Date: 2017/10/19
 * Time: 21:08
 */
namespace Home\Controller\Common;
use Think\Controller;
class IndexController extends Controller
{
    public function index()
    {
        $this->display();
    }
}