<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\UserModel;

class UserController extends Controller
{
    /**
     * 注册视图
     */
    public function reg()
    {
        return view('user.reg');
    }

    /**
     * 执行注册
     */
    public function regDo(Request $request)
    {
        $data = $request->input();
        
        if(empty($data['user_name'])){
            echo "<script>alert('用户名必填'); window.history.go(-1);</script>";
            die;
        }

        if(empty($data['email'])){
            echo "<script>alert('邮箱必填'); window.history.go(-1);</script>";
            die;
        }
        if(empty($data['tel'])){
            echo "<script>alert('手机号必填'); window.history.go(-1);</script>";
            die;
        }
        if(empty($data['pwd'])){
            echo "<script>alert('密码必填'); window.history.go(-1);</script>";
            die;
        }
        if(empty($data['pwd1'])){
            echo "<script>alert('确认密码必填'); window.history.go(-1);</script>";
            die;
        }else if($data['pwd']!=$data['pwd1']){
            echo "<script>alert('确认密码与密码不一致'); window.history.go(-1);</script>";
            die;
        }

        $name = UserModel::where(['user_name'=>$data['user_name']])->first();
        if($name){
            echo "<script>alert('用户名已存在'); window.history.go(-1);</script>";
            die;
        }
        $email = UserModel::where(['email'=>$data['email']])->first();
        if($email){
            echo "<script>alert('邮箱已存在'); window.history.go(-1);</script>";
            die;
        }
        $tel = UserModel::where(['tel'=>$data['tel']])->first();
        if($tel){
            echo "<script>alert('手机号已存在'); window.history.go(-1);</script>";
            die;
        }

        $pwd = password_hash($data['pwd'], PASSWORD_BCRYPT);
        $userInfo = [
            'user_name'     => $data['user_name'],
            'email'         => $data['email'],
            'tel'           => $data['tel'],
            'pwd'           => $pwd
        ];
        $res = UserModel::insertGetId($userInfo);
        if($res>0){
            echo "<script>alert('注册成功',location='/user/login')</script>";
        }else{
            echo "<script>alert('注册失败',localtion='/user/reg')</script>";
        }
    }
}
