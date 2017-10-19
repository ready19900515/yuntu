<?php
/**
 * Created by PhpStorm.
 * User: pengjiang
 * Date: 2017/10/17
 * Time: 22:42
 */
namespace Home\Model;
use Think\Model;
class UserModel extends Model
{
    public function GetUserByName($strName)
    {

    }

    /**
     * @param null $strName
     * @param int $intLevel
     * @param int $intStatus
     * @return mixed
     */
    private function GetUserLists($strName=null, $intLevel=0, $intStatus=0)
    {
        $condition = array();
        if ($strName){
            $condition['username'] = $strName;
        }
        if ($intLevel){
            $condition['level'] = $intLevel;
        }
        if ($intStatus){
            $condition['status'] = $intStatus;
        }
        $data = D('user')->where($condition)->select();
        return $data;
    }
}