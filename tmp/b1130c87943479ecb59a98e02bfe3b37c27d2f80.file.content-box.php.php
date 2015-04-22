<?php /* Smarty version Smarty-3.0.8, created on 2015-01-18 16:57:15
         compiled from "/Applications/MAMP/htdocs/tpl/content-box.php" */ ?>
<?php /*%%SmartyHeaderCode:115775573354bbd7dbd7c135-49375306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1130c87943479ecb59a98e02bfe3b37c27d2f80' => 
    array (
      0 => '/Applications/MAMP/htdocs/tpl/content-box.php',
      1 => 1421596632,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115775573354bbd7dbd7c135-49375306',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
 
<div class="main-head">
    <a href="#" class="current">Hot Topic Api </a>
    <a href="#">Recent discovery</a>
</div>
<div class="main-content">
    <div class="ui list" id="api-box">
        <div class="ui active inverted dimmer">
            <div class="ui text loader">Loading</div>
        </div>
      <div class="item ui grid">
        <div class="face ui two wide column">
            <i class="big  apple icon"></i>
            <div>Apple</div>
        </div>
        
        <div class="content ui ten wide column">
            <a class="header">Daniel Louise</a>
            <div class="description">
              Last seen watching <a><b>Arrested Development</b></a> just now.
            </div>
        </div>
      </div>
      <div class="item ui grid">
        <div class="face ui two wide column">
            <a href="#"><i class="big  behance icon"></i></a>
            <div>Behance</div>
        </div>
        
        <div class="content ui ten wide column">
          <a class="header">Daniel Louise</a>
          <div class="description">Last seen watching <a><b>Arrested Development</b></a> just now.</div>
        </div>
      </div>
        <div class="item ui grid">
        <div class="face ui two wide column">
            <i class="big  youtube icon"></i>
            <div>Youtube</div>
        </div>
        
        <div class="content ui ten wide column">
          <a class="header">Daniel Louise</a>
          <div class="description">Last seen watching <a><b>Arrested Development</b></a> just now.</div>
        </div>
      </div>
        <div class="item ui grid">
        <div class="face ui two wide column">
            <i class="big  twitter icon"></i>
            <div>Twitter</div>
        </div>
        
        <div class="content ui ten wide column">
          <a class="header">Daniel Louise</a>
          <div class="description">Last seen watching <a><b>Arrested Development</b></a> just now.</div>
        </div>
      </div>
        <div class="ui borderless pagination menu">
          <a class="item">
            <i class="left arrow icon"></i> Previous
          </a>
          <a class="item">1</a>
          <a class="item">2</a>
          <a class="item">3</a>
          <a class="item">4</a>
          <a class="item">5</a>
          <a class="item">6</a>
          <a class="item">
            Next <i class="icon right arrow"></i>
          </a>
        </div>
      </div>
</div>
<script  type="text/javascript">
var apis = [];
$.post("<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'api','a'=>'getJsonData'),$_smarty_tpl);?>
",
     function(data){
       if(data!="0"){
         $("#api-box").html('');
         apis=JSON.parse(data);

         for(var i=0;i<apis.length;i++){
             var api_code = '<a href="#"> '+apis[i].name+'</a>';
             api_code = '<div class="item ui grid">';
             
             api_code += '<div class="face ui two wide column">';
             api_code += '<i class="big  apple icon"></i>';
             api_code += '<div>Apple</div>';
             api_code += '</div>';
             
             
             
             api_code += '<div class="content ui ten wide column">';
             api_code += '<a class="header" href="' + apis[i].url + '">' + apis[i].name + '</a>';
             api_code += '<div class="description">' + apis[i].description + '</div>';
             api_code += '</div>';
             
             api_code += '</div>';
                    
            $("#api-box").append(api_code);
         }

       }else{
          $("#api-box").html("<li>Failed loading catogory data...</li>");
       }
     }); 
</script>