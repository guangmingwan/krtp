<?php

/**
 * Created by PhpStorm.
 * User: adouming
 * Date: 2017/7/5
 * Time: 下午11:57
 */
class ProfileController extends Controller
{
    public function actionModify() {
        $HTTP_RAW_POST_DATA = isset($GLOBALS['HTTP_RAW_POST_DATA']) ? $GLOBALS['HTTP_RAW_POST_DATA'] : "{}";
        $post_data = array_merge($_GET,json_decode($HTTP_RAW_POST_DATA, true));

//        $company = $post_data["company"];
//        $tel = $post_data["tel"];
//        $username = $post_data["username"];

        $user_openid = $post_data["openid"];
        unset($post_data["openid"]);

        $user = User::model()->findByAttributes(array("username"=>$user_openid));
        if(empty($user)) {
            $user = new User();
            $user->password = "n/a";
            $user->email = $user_openid."@17tex.com";
            $user->username = $user_openid;


        }
        $user->profile = json_encode($post_data,JSON_UNESCAPED_UNICODE);
        //$user->save();
        if (!$user->save()) {
            echo json_encode( array("code"=>500,"errors"=>$user->errors) );
            die();
        }

        echo json_encode( array("code"=>200) );
        die();
    }
    public function actionFetch() {
        $user_openid = $_GET["openid"];
        $user = User::model()->findByAttributes(array("username"=>$user_openid));
        if(empty($user)) {
            echo json_encode( array("code"=>404) );
            die();
        }
        die($user->attributes["profile"]);
    }
}