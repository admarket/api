<?php /* Smarty version Smarty-3.0.8, created on 2015-04-23 12:01:47
         compiled from "C:\wamp\api/tpl\system/side-bar.php" */ ?>
<?php /*%%SmartyHeaderCode:265585538c30bdf43f1-33136913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66eee6352bacffd1b33ee78950f2d0826c56b621' => 
    array (
      0 => 'C:\\wamp\\api/tpl\\system/side-bar.php',
      1 => 1429717602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '265585538c30bdf43f1-33136913',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="nav-bar">
    <div class="left-nav">
        <div class="title"><i class="list layout icon"></i> Category</div>
        <div class="item-group" id="category">
            <div class="ui active inverted dimmer">
                <div class="ui text loader">Loading</div>
            </div>
        </div>
        <div class="item-group" style="font-size:12px;line-height:25px;">
            <p>Submit your API to Join us<br/>
             <a class="ui green mini button green-btn" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'submit'),$_smarty_tpl);?>
" style="background-color: #00b040;font-size:10px;">Submit</a> 
            </p>
        </div>

    </div>

</div>

<script  type="text/javascript">
var categories;
loadCategory();
function loadCategory(){
  $.post("<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'ccategory','a'=>'getJsonData'),$_smarty_tpl);?>
",
     function(data){
       if(data!="0"){
         $("#category").html('');
         categories=JSON.parse(data);

         for(var i=0;i<categories.length;i++){
             var category = '<a href="javascript:changeCategory('+ categories[i].id +');"> '+categories[i].name+'</a>';
            $("#category").append(category);
         }
          
       }else{
          $("#category").html("<li>Failed loading catogory data...</li>");
       }
     });
}

 function submitSearch(obj){
    $(obj).attr('class','active');
     $('#currentCategory').val($(obj).attr('data-key'));
      $("#search-form").submit();
 }

function stringToJSON(obj){   
  return eval('(' + obj + ')');   
} 
</script>
         