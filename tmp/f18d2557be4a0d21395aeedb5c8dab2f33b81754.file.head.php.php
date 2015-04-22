<?php /* Smarty version Smarty-3.0.8, created on 2015-03-03 10:53:35
         compiled from "C:\wamp\api/tpl\head.php" */ ?>
<?php /*%%SmartyHeaderCode:2555554f5849f72c877-46388872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f18d2557be4a0d21395aeedb5c8dab2f33b81754' => 
    array (
      0 => 'C:\\wamp\\api/tpl\\head.php',
      1 => 1425376413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2555554f5849f72c877-46388872',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
 <!--header content-->
    <div class="header" >
        <div class="ui  grid">
          <div class="four wide column">
            <a href="/" title="home">
              <img  border="0"  title="api" alt="api" src="/img/logo.png"/>
            </a>
          </div>
          <div class="eight wide column form" >
            <div class="ui action mini input" style="margin:10px 0;width:100%;">
                <input type="text" id="txt-keyword" placeholder="search..." />
                <a class="ui icon mini button" href="javascript:search();"><i class="search icon"></i></a>
            </div>
             

          </div>
          
          <div class="four wide column " style="padding:25px 0;text-align:right;">
            <?php if ($_SESSION['user']==''){?>
              <a class="ui mini button default" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'register'),$_smarty_tpl);?>
">Submit</a>
              <a class="ui mini green button" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'login'),$_smarty_tpl);?>
">Login</a>
            <?php }else{ ?>
              <a class="btn btn-success" style="width:80px;" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'sub','a'=>'dashboard'),$_smarty_tpl);?>
">
                <i class="icon-user icon-white"></i> Dashboard</a>
                <a class="btn" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'sub','a'=>'logout'),$_smarty_tpl);?>
">exit</a>
            <?php }?>
            
          </div>
        </div>
        <!--nav-head content-->
    </div>

    