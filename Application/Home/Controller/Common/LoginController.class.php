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
        $data = D('user')->GetUserByName(I('username'));
        if (!empty($data))
        {
            if (0 != $data['status'])
            {
                if (md5(md5(I('password'))) == $data['password'])
                {
                    session('uid', $result['userid']);          // 当前用户id
                    session('nickname', $result['nickname']);   // 当前用户昵称
                    session('username', $result['username']);   // 当前用户名
                    session('lastdate', $result['lastdate']);   // 上一次登录时间
                    session('lastip', $result['lastip']);

                    // todo 更新登陆次数和最后登陆ip
                    /*$where['userid'] = session('uid');
                    M('user')->where($where)->setInc('loginnum');   // 登录次数加 1
                    M('user')->where($where)->save($data);*/

                    $this->success('登陆成功',U('Home/Common/Index/index'),0);
                }else{
                    $this->error('密码错误!', U('Home/Common/Login/index'),2);
                }
            }else{
                $this->error('账户已被冻结，请联系管理员!', U('Home/Common/Login/index'),2);
            }
        }else{
            $this->error('该用户未注册!', U('Home/Common/login/index'),2);
        }
    }

    public function logout()
    {
        session(null);
        redirect(U('Home/Common/login/index'), 2, '正在退出登录...');
    }

    public function register()
    {
        $this->display();
    }
}