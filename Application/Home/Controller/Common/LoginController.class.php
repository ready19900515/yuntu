<?php
/**
 * Created by PhpStorm.
 * User: pengjiang
 * Date: 2017/10/17
 * Time: 22:23
 */
namespace Home\Controller\Common;
use Think\Controller;
class LoginController extends Controller
{
    public function index()
    {
        $this->display();
    }

    public function login()
    {
        echo I('username');
    }

    public function logout()
    {

    }
}