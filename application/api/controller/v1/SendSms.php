<?php

namespace  app\api\controller\v1 ;
use  app\lib\exception\ParameterException ;

class SendSms {

    //发送验证码
    public function sendCode()
    {
        $postdata = request()->post() ;
        $scene = $postdata['scene'];    //发送短信验证码使用场景  1注册 2 找回密码
        $mobile = $postdata['mobile'];
        $session_id = session_id();

        //注册
        //判断是否存在验证码
        $data = M('sms_log')->where(array('mobile' => $mobile, 'session_id' => $session_id, 'status' => 1))->order('id DESC')->find();
        //获取时间配置
        $sms_time_out = '60';
        //60秒以内不可重复发送
        if ($data && (time() - $data['add_time']) < $sms_time_out) {
            $e = new  ParameterException(array(
                'msg' => $sms_time_out . '秒内不允许重复发送',
                'errorCode' => '391020',
            ));
            throw  $e;
        }
        //随机一个验证码
        $code = mt_rand(100000, 999999);
        if ($scene == 1) {
            $msg = '验证码：' . $code . ',您正在注册成为爱车送用户, 请勿告诉他人，感谢您的支持!';
        }
        if ($scene == 2) {
            $msg = '验证码：' . $code . ',用于密码找回，如非本人操作，请及时检查账户安全';
        }

        //发送短信
        $resp = sendSms($mobile, $msg, $code, $scene, $needstatus = 'true');

        if ($resp['status'] == 1) {
            //发送成功, 修改发送状态位成功
            $e = new  ParameterException(array(
                'msg' => '验证码发送成功',
                'errorCode' => '0',
            ));
            throw  $e;
        } else {
            $e = new  ParameterException(array(
                'msg' => '验证码发送失败',
                'errorCode' => '391036',
            ));
            throw  $e;
        }
    }


}