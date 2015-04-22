<?php /* Smarty version Smarty-3.0.8, created on 2015-03-17 05:02:25
         compiled from "C:\wamp\api/tpl\system/login.php" */ ?>
<?php /*%%SmartyHeaderCode:306655507a7518b4c00-95613915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0703d80392ec299ac20c926fb94c900ed5dbd551' => 
    array (
      0 => 'C:\\wamp\\api/tpl\\system/login.php',
      1 => 1426564887,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '306655507a7518b4c00-95613915',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
  <head>
    <title>Sign In - API.com</title>
    <?php $_template = new Smarty_Internal_Template("system/meta.php", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
    <?php $_template = new Smarty_Internal_Template("system/style.php", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
    <?php $_template = new Smarty_Internal_Template("system/script.php", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
  </head>
  <body>
    <!--header content-->
    <!-- load head tpl -->
    <div style="background-color:#fff;margin:40px auto;width:500px;border:solid 1px #dedede;padding:40px;">
        <div style="border-bottom:solid 1px #dedede;">
            <a href="/" title="home">
              <img  border="0"  title="api" alt="api" src="/img/logo.png"/>
            </a>
        </div>
        <div class="ui small form segment" style="border:solid 2px #fff;box-shadow:none;">
          <div class="one fields">
              <div class="field " style="width:100%;font-size:14px;margin:10px 0;">
                  <label>Email:</label>
                  <div class="ui left icon  input">
                    <input  id="txt-email" placeholder="input email address" type="text">
                    <i class="user icon"></i>
                  </div>
              </div> 

          </div>

          <div class="one fields" >
              <div class="field" style="width:100%;font-size:14px;margin:10px 0;">
                  <label>Password:</label>
                  <div class="ui left icon input">
                    <input id="txt-password" placeholder="input password" type="password">
                    <i class="lock icon"></i>
                  </div>

              </div>
          </div>
          <div style="padding:20px 0;">
              <a id="btn-login" class="ui blue small submit button" style="background-color: #00b040;font-size:14px;">Sign In</a> 
              <span style="margin:10px 0px 0px 30px;"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'forget'),$_smarty_tpl);?>
">Forget your password?</a></span>
          </div>
        </div>
    </div>
    <script src="/js/jquery.message.js"></script>
    <script type="text/javascript">
    init();
    function init(){
      $('.ui.checkbox').checkbox();
      var CookieStr = document.cookie;
      if(CookieStr.indexOf('email')>=0){
        var GetName = '';
        if(CookieStr.indexOf('=')>=0&&CookieStr.indexOf(';')>=0){
          GetName =CookieStr.split('=')[1].split(';')[0]; //get cookie
        }
        
         $("#txt-email").val(GetName);
      } 
    }
    
    function login(){
       $("#btn-login").attr('class', 'ui disabled loading blue small submit button');
          $.post("<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'login'),$_smarty_tpl);?>
", { email: $("#txt-email").val(), password: $("#txt-password").val() },
           function(data){
             if(data){
              if($("#cookieCheck").attr("checked")){//cookie
                //document.cookie="email="+$("#txt-email").val();
                var Days = 30;   
                var exp = new Date();  
                var name="email";
                var value=  $("#txt-email").val();
                exp.setTime(exp.getTime() + Days*24*60*60*1000);   
                document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString();   
              }
              if(document.referrer==""||document.referrer=="undefined"){
                 window.location.href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'index'),$_smarty_tpl);?>
";
                
              }
              else{
                window.location.href = document.referrer;
              }
                
             }else{
              $.msg("Email or password error！",function(){
              });
              $("#btn-login").attr('class', 'ui blue small submit button');
             }
           });
    }
      $("#btn-login").click(function(){
         login();  
      });
    document.onkeydown=function(event){
      e = event ? event :(window.event ? window.event : null);
      if(e.keyCode==13){
        login();
      }
     }
    </script>
  </body>
</html>
