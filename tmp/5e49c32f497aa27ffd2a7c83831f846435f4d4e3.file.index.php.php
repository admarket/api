<?php /* Smarty version Smarty-3.0.8, created on 2015-03-04 09:16:27
         compiled from "C:\wamp\api/tpl\system/index.php" */ ?>
<?php /*%%SmartyHeaderCode:360154f6bf5b562502-59478660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e49c32f497aa27ffd2a7c83831f846435f4d4e3' => 
    array (
      0 => 'C:\\wamp\\api/tpl\\system/index.php',
      1 => 1425456985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '360154f6bf5b562502-59478660',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
  <head>
    <title>Discover New API  - API.com</title>
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
    <div style="background-color:#fff;">
        <?php $_template = new Smarty_Internal_Template("system/head.php", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
        <!--section content-->
            <div style="overflow:hidden;background-color:#fff;">
                <div class="ui grid" > 
                    <!-- load head tpl -->
                    <div class="four wide column">
                        <?php $_template = new Smarty_Internal_Template("system/side-bar.php", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

                    </div>
                    <div class="ten wide column main">
                        <?php $_template = new Smarty_Internal_Template("system/content-box.php", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
                    </div>

                </div>
            </div>

        <?php $_template = new Smarty_Internal_Template("system/foot.php", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
    </div>
  </body>
</html>
