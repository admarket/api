<?php /* Smarty version Smarty-3.0.8, created on 2015-03-04 07:41:45
         compiled from "C:\wamp\api/tpl\submit.php" */ ?>
<?php /*%%SmartyHeaderCode:3221254f6a929d6b3e0-44350220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13c5f7af498ad9b371c018fd3ba8bc4c06641203' => 
    array (
      0 => 'C:\\wamp\\api/tpl\\submit.php',
      1 => 1425385557,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3221254f6a929d6b3e0-44350220',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
  <head>
    <title>Submit API Info to Us  - API.com</title>
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
    <div style="background-color:#fff;margin:40px auto;width:700px;border:solid 1px #dedede;padding:40px;">
        <div style="border-bottom:solid 1px #dedede;">
            <a href="/" title="home">
              <img  border="0"  title="api" alt="api" src="/img/logo.png"/>
            </a>
        </div>
        <div class="ui small form segment" style="border:solid 2px #fff;box-shadow:none;">
          <div class="two fields" >
              <div class="field">
                  <label>First Name</label>
                  <input placeholder="First Name" type="text">
                  <div class="ui red pointing above ui label">Enter a first name</div>
              </div>
              <div class="field">
                  <label>Last Name</label>
                  <input placeholder="Last Name" type="text">
              </div>
          </div>
          <div style="padding:20px 0;">
              <a class="ui blue small submit button" style="background-color: #00b040;font-size:10px;">Submit</a>
          </div>
        </div>
    </div>
  </body>
</html>
