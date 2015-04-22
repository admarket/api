<?php /* Smarty version Smarty-3.0.8, created on 2015-03-13 11:33:50
         compiled from "C:\wamp\api/tpl\system/detail.php" */ ?>
<?php /*%%SmartyHeaderCode:161025502bd0e89ed53-93728268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0ac5d63286136997251e34aee3857774c7c83b0' => 
    array (
      0 => 'C:\\wamp\\api/tpl\\system/detail.php',
      1 => 1426242828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161025502bd0e89ed53-93728268',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $_smarty_tpl->getVariable('data')->value['name'];?>
  - API.com</title>
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
    <div style="background-color:#fff;margin:40px auto;width:70%;border:solid 1px #dedede;padding:40px;line-height:30px;font-size:14px;" >
      
        <div style="border-bottom:solid 1px #f6f6f6;">
            <a href="/" title="home">
              <img  border="0"  title="api" alt="api" src="/img/logo.png"/>
            </a>

        </div>
        <div style="border-bottom:solid 1px #f6f6f6;padding:10px;">

            <a href="/" title="home" style="font-weight:bold;font-size:16px;color:#555;">
              <?php echo $_smarty_tpl->getVariable('data')->value['name'];?>

            </a>
        </div>
        <div class="ui small form segment" style="border:solid 2px #fff;box-shadow:none;">
          
          <div class="two fields" >
              <div class="field">
                  <label>Data Format:</label>
                  <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value['format_tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
?>
                    <a class="ui blue label"><?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
</a>

                  <?php }} ?>
              </div>
              <div class="field">
                  <label>Category:</label>
                  <a class="ui label"><?php echo $_smarty_tpl->getVariable('data')->value['category']['name'];?>
</a>
              </div>
              
          </div>
          <div class="two fields" >
              <div class="field">
                  <label>Price:</label>
                  
                  <?php if ($_smarty_tpl->getVariable('data')->value['price_number']==0){?>
                    <a class="ui green label">Free</a>
                    
                  <?php }else{ ?>
                    <a class="ui red label"><?php echo $_smarty_tpl->getVariable('data')->value['price_number'];?>
<?php echo $_smarty_tpl->getVariable('data')->value['price_unit'];?>
 / Call</a>
                  <?php }?>
              </div>
              <div class="field">
                  <label>Discount:</label>
                  <?php if ($_smarty_tpl->getVariable('data')->value['discount_rate']==0){?>
                    <a class="ui label">None</a>
                  <?php }else{ ?>
                    <a class="ui green label"><?php echo $_smarty_tpl->getVariable('data')->value['discount_rate'];?>
</a>
                  <?php }?>
              </div>
          </div>
          <div class="two fields" >
              <div class="field">
                  <label>Developer Token Required:</label>
                  
                  <?php if ($_smarty_tpl->getVariable('data')->value['token_require']==0){?>
                    <a class="ui red label">Yes</a>
                  <?php }else{ ?>
                    <a class="ui green label">no</a>
                  <?php }?>
              </div>
              <div class="field">
                  <label>Usage Quota:</label>
                  <?php if ($_smarty_tpl->getVariable('data')->value['usage_quota_time']<=0){?>
                    <a class="ui green label">Unlimit</a>
                  <?php }else{ ?>
                    <a class="ui green label"><?php echo number_format($_smarty_tpl->getVariable('data')->value['usage_quota_time']);?>
/<?php echo $_smarty_tpl->getVariable('data')->value['usage_quota_unit'];?>
</a>
                  <?php }?>
              </div>
          </div>
          <div class="two fields" >
              <div class="field">
                  <label>Provider:</label> 
                  <a class="ui label"><?php echo $_smarty_tpl->getVariable('data')->value['provider_url'];?>
</a>
              </div>
              <div class="field">
                  <label>License:</label>
                  <a class="ui label"><?php echo $_smarty_tpl->getVariable('data')->value['license'];?>
</a>
              </div>
              
          </div>
          <div class="one fields" >
              <div class="field">
                  <label>API URL:</label>
                  <div class="ui label">
                    <i class="linkify icon"></i>
                    <a href="<?php echo $_smarty_tpl->getVariable('data')->value['api_url'];?>
" target="_blank"><?php echo $_smarty_tpl->getVariable('data')->value['api_url'];?>
</a>
                  </div>
              </div>
          </div>
          <div class="one fields" >
              <div class="field">
                  <label>Description:</label>
                  <div class="ui label" style="font-size:14px;padding:20px;line-height:20px;">
                    <?php echo $_smarty_tpl->getVariable('data')->value['description'];?>

                  </div>
              </div>
          </div>

        </div>
    </div>
    <script type="text/javascript">
      $('.ui.checkbox').checkbox();
    </script>>
  </body>
</html>
