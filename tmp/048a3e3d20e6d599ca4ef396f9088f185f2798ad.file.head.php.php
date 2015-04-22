<?php /* Smarty version Smarty-3.0.8, created on 2015-01-10 02:58:26
         compiled from "/Applications/MAMP/htdocs/tpl/head.php" */ ?>
<?php /*%%SmartyHeaderCode:110709854254b08742127ce6-63321137%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '048a3e3d20e6d599ca4ef396f9088f185f2798ad' => 
    array (
      0 => '/Applications/MAMP/htdocs/tpl/head.php',
      1 => 1420766330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110709854254b08742127ce6-63321137',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
 <!--header content-->
    <div class="header" >
        <div class="ui  grid">
          <div class="three wide column">
            <a href="/" title="home">
              <img  border="0"  title="api" alt="api" src="/img/logo.png"/>
            </a>
          </div>
          <div class="nine wide column form" >
             
             <form id="search-form" name="search-form" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'result'),$_smarty_tpl);?>
" method="post">
                     <div class="ui action mini input" style="margin:10px 0;width:100%;">
                        <input type="text" placeholder="search..." />
                        <a class="ui icon mini button"><i class="search icon"></i></a>
                    </div>
              </form>

          </div>
          <div class="four wide column " style="padding:25px;text-align:right;">
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

    