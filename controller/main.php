<?php

class main extends spController
{
	function index(){
        $this->display("system/index.php"); 
	}
    function replaceStr($str){
        $result=strip_tags($str);
        $result=str_replace('(',"",$result);
        $result=str_replace(')',"",$result);
        $result=str_replace('&quot;',"",$result);
        $result=str_replace('"',"",$result);
        return $result;
    }
    function login(){
        $this->display("system/login.php"); 
    }
    function register(){
        $this->display("system/register.php"); 
    }
    function submit(){
        $this->display("system/submit.php");
    }
    function detail(){
        $id = intval($this->spArgs('id'));
        $model = spClass("m_api");
        $condition = "id = $id";
        $record = $model->spLinker()->find($condition);
        $formats = explode(',',$record['format_tags']);
        $record['format_tags'] = $formats;
        $this->data = $record;
        $this->display("system/detail.php");
    }
    function about(){
        $this->display("system/about.php"); // 注册 
    }
    function privacy(){
        $this->display("system/privacy.php"); // 注册 
    }
    function partner(){
        $this->display("system/partner.php"); // 注册 
    }
    function question(){
        $this->display("system/question.php"); // 注册 
    }
    function forget(){
        $this->display("system/forget.php"); // 找回密码 
    }
     function go(){
        $url=strip_tags($this->spArgs("url"));
        //dump($url);
        $this->jump($url);
    }
    function test(){
        $this->display("test.php"); // 找回密码 
    }
}