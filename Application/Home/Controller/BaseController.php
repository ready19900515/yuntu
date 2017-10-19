<?php
/**
 * Created by PhpStorm.
 * User: pengjiang
 * Date: 2017/10/19
 * Time: 22:24
 */
namespace Home;
use Think\Controller;
class BaseController extends Controller
{
    protected function _initialize()
    {
        $this->checkLogin();

        $this->checkAuth();

        $this->getResource();
    }

    private function checkLogin()
    {
        if (!isset($_SESSION['uid']) && isset($_SESSION['username']))
        {

        }
    }

    public function checkAuth()
    {

    }

    public function getResource()
    {

    }
}