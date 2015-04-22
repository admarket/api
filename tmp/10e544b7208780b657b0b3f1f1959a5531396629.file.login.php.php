<?php /* Smarty version Smarty-3.0.8, created on 2015-03-04 09:12:04
         compiled from "C:\wamp\api/tpl\login.php" */ ?>
<?php /*%%SmartyHeaderCode:843354f6be54188ae9-48342309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e544b7208780b657b0b3f1f1959a5531396629' => 
    array (
      0 => 'C:\\wamp\\api/tpl\\login.php',
      1 => 1425456722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '843354f6be54188ae9-48342309',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
  <head>
    <title>User Sign In  - API.com</title>
    <?php $_template = new Smarty_Internal_Template("meta.php", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
    <?php $_template = new Smarty_Internal_Template("style.php", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
    <?php $_template = new Smarty_Internal_Template("script.php", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
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
          <div class="one fields" >
              <div class="field">
                  <label>Email:</label>
                  <input placeholder="input email address" type="text">
                  <div class="ui red pointing above ui label">Enter a first name</div>
              </div>          </div>
          <div class="one fields" >
              <div class="field">
                  <label>Password:</label>
                  <input placeholder="input password" type="password">
                  <div class="ui red pointing above ui label">Enter a first name</div>
              </div>
          </div>
          <div style="padding:20px 0;">
              <a class="ui blue small submit button" style="background-color: #00b040;font-size:10px;">Sign In</a>
          </div>
        </div>
    </div>
  </body>
</html>
