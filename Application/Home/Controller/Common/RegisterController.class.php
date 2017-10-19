<?php
/**
 * Created by PhpStorm.
 * User: pengjiang
 * Date: 2017/10/19
 * Time: 21:24
 */
namespace Home\Controller\Common;
use Think\Controller;
class RegisterController extends Controller
{
    public function index()
    {
        $this->display();
    }

    public function register()
    {
        $user = D('user');
        // 自动验证 创建数据集
        if (!$data = $user->create()) {
            // 防止输出中文乱码
            header("Content-type: text/html; charset=utf-8");
            exit($user->getError());
        }

        if ($id = $user->add($data)) {
            /* 直接注册用户为超级管理员,子用户采用邀请注册的模式,
               遂设置公司id等于注册用户id,便于管理公司用户*/
            $user->where("userid = $id")->setField('companyid', $id);
            $this->success('注册成功', U('Home/Common/register/index'), 2);
        } else {
            $this->error('注册失败');
        }
    }

    public function verify()
    {
        // 实例化Verify对象
        $verify = new \Think\Verify();
        // 配置验证码参数
        $verify->fontSize = 14;     // 验证码字体大小
        $verify->length = 4;        // 验证码位数
        $verify->imageH = 34;       // 验证码高度
        $verify->useImgBg = true;   // 开启验证码背景
        $verify->useNoise = true;  // 关闭验证码干扰杂点
        $verify->entry();
    }


}