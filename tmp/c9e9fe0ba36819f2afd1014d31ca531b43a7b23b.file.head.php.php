<?php /* Smarty version Smarty-3.0.8, created on 2015-03-17 12:10:50
         compiled from "C:\wamp\api/tpl\system/head.php" */ ?>
<?php /*%%SmartyHeaderCode:226055080bba88fd79-70853536%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9e9fe0ba36819f2afd1014d31ca531b43a7b23b' => 
    array (
      0 => 'C:\\wamp\\api/tpl\\system/head.php',
      1 => 1426590648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '226055080bba88fd79-70853536',
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
                <a class="ui icon mini button" href="javascript:search();" ><i class="search icon"></i></a>
            </div>
             

          </div>
          
          <div class="four wide column " style="padding:25px;text-align:right;">
            <?php if ($_SESSION['user']==''){?>
              <a class="ui mini button default" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'login'),$_smarty_tpl);?>
" style="background-color: #fff;font-size:10px;">Log In</a>
              <a class="ui green mini button green-btn" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'register'),$_smarty_tpl);?>
" style="background-color: #00b040;font-size:10px;">Sign Up</a>
            <?php }else{ ?>
              <a class="ui mini button default"  href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'sub','a'=>'dashboard'),$_smarty_tpl);?>
" style="background-color: #fff;font-size:10px;">
                <i class="icon-user icon-white"></i>Dashboard
              </a>
                <a class="btn" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'sub','a'=>'logout'),$_smarty_tpl);?>
">exit</a>
            <?php }?>
            
          </div>
        </div>
        <!--nav-head content-->
    </div>
<script type="text/javascript">
  $('.dropdown').dropdown({
    // you can use any ui transition
    transition: 'drop'
  });
</script>
    