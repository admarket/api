<?php /* Smarty version Smarty-3.0.8, created on 2015-01-11 13:38:33
         compiled from "/Applications/MAMP/htdocs/tpl/signin.php" */ ?>
<?php /*%%SmartyHeaderCode:14543596554b26ec978c7d0-22861622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '737e4bf294d0f01e3a4a4e96b1a8e8bfb12ec8d9' => 
    array (
      0 => '/Applications/MAMP/htdocs/tpl/signin.php',
      1 => 1389583000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14543596554b26ec978c7d0-22861622',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
  <head>
    <title>广告位市场  - 用户登录</title>
    <?php $_template = new Smarty_Internal_Template("meta.php", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
    <?php $_template = new Smarty_Internal_Template("style.php", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
    <?php $_template = new Smarty_Internal_Template("script.php", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
  </head>
  <body>
    <!-- load head tpl -->
    <?php $_template = new Smarty_Internal_Template("head.php", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
    <div class="section">
      <div class="container"  style="width:500px; padding:60px 0 100px 0;text-align:center;">
         <form class="form-horizontal" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'login'),$_smarty_tpl);?>
" method="POST">
          <fieldset>
            <div id="legend" align="center">
                <h3>用户登录</h3>
            </div>
            

          <div class="control-group">
                <!-- Text input-->
                
                <div class="controls">
                  <span style="margin-left:-60px;margin-right:10px;">邮箱：</span>
                   <div class="input-prepend">
                   <span class="add-on"><i class="icon-envelope"></i></span>
                    <input type="text" placeholder="输入您的邮箱地址" class="input-xlarge" id="txt-email">
                    <p class="help-block"></p>
                  </div>
                </div>
              </div>
              <div class="control-group">

                <!-- Prepended text-->
                <div class="controls">
                  <span style="margin-left:-60px;margin-right:10px;">密码：</span>
                  <div class="input-prepend">
                    <span class="add-on"><i class="icon-key"></i></span>
                    <input class="input-xlarge" placeholder="输入您的登录密码" id="txt-password" type="password">
                  </div>
                  <p class="help-block"></p>
                </div>

              </div>

          <div class="control-group">
                <label class="control-label"></label>

                <!-- Button -->
                <div class="controls">
                  <span>
                    <a class="btn btn-primary" id="btn-login" data-toggle="button"  data-loading-text="正在验证..." >
                      登录</a>
                  </span>
                  <span class="checkbox inline" style="margin-left:20px;">
                    <input type="checkbox" checked="checked" id="cookieCheck" value="option2"> 
                    <span style="margin-right:20px;">记住我</span>
                    <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'forget'),$_smarty_tpl);?>
">忘记密码？</a>
                  </span>
                  
                </div>
              </div>

          

          

          </fieldset>
        </form>
        
      </div>
    </div>
    <!--footer content-->
    <!-- load foot tpl -->
    <?php $_template = new Smarty_Internal_Template("foot.php", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

    <script src="/js/jquery.message.js"></script>
    <script type="text/javascript">
    var CookieStr = document.cookie;
    if(CookieStr.indexOf('email')>=0){
      var GetName = '';
      if(CookieStr.indexOf('=')>=0&&CookieStr.indexOf(';')>=0){
        GetName =CookieStr.split('=')[1].split(';')[0]; //获取到cookie中 的值
      }
      
       $("#txt-email").val(GetName);
    } 
    function login(){
       $("#btn-login").button('loading');
          $.post("<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'cuser','a'=>'login'),$_smarty_tpl);?>
", { email: $("#txt-email").val(), password: $("#txt-password").val() },
           function(data){
             if(data){
              //$("#alert-msg").hide();
              if($("#cookieCheck").attr("checked")){//添加cookie
                //document.cookie="email="+$("#txt-email").val();
                var Days = 30;   
                var exp = new Date();  
                var name="email";
                var value=  $("#txt-email").val();
                exp.setTime(exp.getTime() + Days*24*60*60*1000);   
                document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString();   
              }
              $.msg("验证成功！正在跳转中...",'color:green;');
              if(document.referrer==""||document.referrer=="undefined"){
                 window.location.href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'index'),$_smarty_tpl);?>
";
                
              }
              else{
                window.location.href=document.referrer;
              }
                
             }else{
              $.msg("用户名或密码错误！",function(){
              });
              //$("#alert-msg").show();
              $('#btn-login').button('toggle');
              $('#btn-login').button('reset');
             }
           });
    }
      $("#btn-login").click(function(){
         login();  
      });
    document.onkeydown=function(event){
      e = event ? event :(window.event ? window.event : null);
      if(e.keyCode==13){
       //执行的方法
        login();
      }
     }
    </script>
  </body>
</html>
