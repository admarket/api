<?php /* Smarty version Smarty-3.0.8, created on 2015-04-20 08:22:08
         compiled from "C:\wamp\api/tpl\system/submit.php" */ ?>
<?php /*%%SmartyHeaderCode:1732055349b105930f8-42249856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6af884ef497056eb276575554393eacf113d7eda' => 
    array (
      0 => 'C:\\wamp\\api/tpl\\system/submit.php',
      1 => 1429510926,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1732055349b105930f8-42249856',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
  <head>
    <title>Submit your api or your discovery  - API.com</title>
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
    <div style="background-color:#fff;margin:40px auto;width:60%;border:solid 1px #dedede;padding:40px;line-height:30px;font-size:14px;" >
      
        <div style="border-bottom:solid 1px #f6f6f6;">
            <a href="/" title="home">
              <img  border="0"  title="api" alt="api" src="/img/logo.png"/>
            </a>

        </div>
        <div id="submit-box">
            <div style="border-bottom:solid 1px #f6f6f6;padding:10px;">
                <div class="ui  fluid  input">
                  <input  id="txt-name"  placeholder="your api name, 6-100 length" type="text">
                </div>
                <div id="msg-name" class="ui red pointing above ui label msg" style="display:none;">
                      Name should be 6-100 length!
                  </div>
            </div>
            <div class="ui small form segment" style="border:solid 2px #fff;box-shadow:none;">

              <div class="two fields" >
                  <div class="field">
                      <label>Data Format:</label>
                      <select class="ui dropdown" id="select-format">
                        <option value="">Data Format, Json or XML</option>
                        <option value="JSON">JSON</option>
                        <option value="XML">XML</option>
                      </select>
                      <div id="msg-format" class="ui red pointing above ui label msg" style="display:none;">
                          Format should be selected!
                      </div>
                  </div>
                   <div class="field" id="category-box">
                      <label>Category:</label>
                      <select class="ui dropdown" id="select-category">
                        <option value="">Required</option>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                      </select>
                       <div id="msg-category" class="ui red pointing above ui label msg" style="display:none;">
                          Category should be selected!
                      </div>
                  </div>


              </div>
              <div class="two fields" >
                  <div class="field">
                      <label>Price:</label>

                      <div class="ui right labeled input">

                          <input  id="txt-price" placeholder="price per call, 0 means free" type="text">
                          <div class="ui label"  style="font-size:12px;">
                            $ per call
                          </div>
                       </div>
                      <div id="msg-price" class="ui red pointing above ui label msg" style="display:none;">
                          Price should be a positive number!
                      </div>

                  </div>
                  <div class="field">
                      <label>Discount:</label>
                      <div class="ui right labeled input">

                          <input  id="txt-discount"  placeholder="price discount like 0.2, 0 means none" type="text">
                          <div class="ui label"  style="font-size:12px;">
                            off
                          </div>
                       </div>
                      <div id="msg-discount" class="ui red pointing above ui label msg" style="display:none;">
                          Discount should be a positive number in [0,1)!
                      </div>
                  </div>
              </div>

              <div class="two fields" >
                  <div class="field">
                      <label>API URL:</label>
                       <div class="ui fluid input">
                          <input  id="txt-url" placeholder="api url" type="text">
                       </div>
                      <div id="msg-url" class="ui red pointing above ui label msg" style="display:none;">
                            Url format is invalid!
                      </div>
                  </div>
                  <div class="field">
                      <label>Provider:</label> 
                       <div class="ui input">
                          <input  id="txt-provider" placeholder="api provider name or url" type="text">
                       </div>
                      <div id="msg-provider" class="ui red pointing above ui label msg" style="display:none;">
                          Provider should be 6-50 length!
                      </div>
                  </div>

              </div>
              <div>
                  <div class="field">
                      <label>Description:</label>
                       <textarea id="txt-description" placeholder="your api short description"></textarea>
                      <div id="msg-description" class="ui red pointing above ui label msg" style="display:none;">
                          Description should be 6-500 length!
                      </div>
                  </div>
              </div>
              <div style="padding:20px 0;">
                <a id="btn-submit" class="ui green mini button green-btn"  style="background-color: #00b040;font-size:10px;">Submit</a> 
                </p>
              </div>

            </div>
        </div>
        <div id="msg-box" style="padding:20px;display:none;">
            Hi, Dear
            <div style="paddding:40px;margin:20px;">
                <div>
                    
                    <span  style="color:#00b040;font-weight:bold;">Thanks for your submit!</span>
                    <span>
                        We need to have a short review for it. Click to 
                        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'index'),$_smarty_tpl);?>
" style="text-decoration:underline;color:blue;">home page</a>
                    </span>
                </div>

            </div>
            <div>
                Best Regards!
            </div>
        </div>  
    </div>
<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<script type="text/javascript">
    var name = "";
    var format = "";
    var category = "";
    var price = "";
    var discount = "";
    var url = "";
    var provider = "";
    var description = "";
    
    $('.ui.checkbox').checkbox();
    $('select.dropdown').dropdown();
    $('#btn-submit').click(function(){
        var check = checkParam();
        if(check){

            var params = {name:name, format:format, category:category, price:price, discount:discount, url:url, provider:provider, description:description};
            $.post("<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'api','a'=>'submit'),$_smarty_tpl);?>
", params,
                 function(data, status){
                    if(data){
                        $('#submit-box').hide(100);
                        $('#msg-box').show(100);
                    }else{}
                });
        }
    
    });

    loadCategory();
    
    function loadCategory(){
        $.post('<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'ccategory','a'=>'getJsonData'),$_smarty_tpl);?>
',function(data) {
                if(data!="0"){
                 $("#select-box").html('');
                 categories=JSON.parse(data);
                 category_html = '<label>Category:</label>';
                 category_html += '<select class="ui dropdown" id="select-category">';
                 category_html += '<option value="">Select Category</option>';
                 for(var i=0;i<categories.length;i++){
                    var category = '<option value="'+ categories[i].id +'">'+categories[i].name+'</option> ';
                    category_html += category;
                 }
                 category_html += '</select>';
                category_html += '<div id="msg-category" class="ui red pointing above ui label msg" style="display:none;">Category should be selected!</div>';
                 $("#category-box").html(category_html);
                   $('select.dropdown').dropdown();
               }else{
                  $("#category").html("<li>Failed loading catogory data...</li>");
               }
                $('.mob-size').selectmenu().selectmenu('refresh', true);
            }
        );
  }
    function isURL(str_url) {// 验证url
//        var strRegex = "^((https|http|ftp|rtsp|mms)?://)?"
//        + "(([0-9a-z_!~*'().&=+$%-]+: )?[0-9a-z_!~*'().&=+$%-]+@)?" // ftp的user@
//        + "(([0-9]{1,3}\.){3}[0-9]{1,3}" // IP形式的URL- 199.194.52.184
//        + "|" // 允许IP和DOMAIN（域名）
//        + "([0-9a-z_!~*'()-]+\.)*" // 域名- www.
//        + "([0-9a-z][0-9a-z-]{0,61})?[0-9a-z]\." // 二级域名
//        + "[a-z]{2,6})" // first level domain- .com or .museum
//        + "(:[0-9]{1,4})?" // 端口- :80
//        + "((/?)|" // a slash isn't required if there is no file name
//        + "(/[0-9a-z_!~*'().;?:@&=+$,%#-]+)+/?)$";
        var strRegex = "((http|ftp|https)://)(([a-zA-Z0-9\._-]+\.[a-zA-Z]{2,6})|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,4})*(/[a-zA-Z0-9\&%_\./-~-]*)?";
        var re = new RegExp(strRegex);
        return re.test(str_url);
    }
    function checkParam(){
        var check_result = true;
        //check name
        name = $.trim($('#txt-name').val());
        if(name.length < 6 || name.length >100){
            $('#msg-name').show();
            check_result = false;
        }else{
            $('#msg-name').hide();
        }
        //check format
        format = $.trim($('#select-format option:selected').val());
        if(format == ""){
            $('#msg-format').show();
            check_result = false;
        }else{
            $('#msg-format').hide();
        }
        //check category
        category = $.trim($('#select-category option:selected').val());
        if(category == ""){
            $('#msg-category').show();
        }else{
            $('#msg-category').hide();
        }
        //check price
        price = parseFloat($.trim($('#txt-price').val()));
        if(isNaN(price) || price<0){
            $('#msg-price').show();
        }else{
            $('#msg-price').hide();
        }
        //check discount
        discount = parseFloat($.trim($('#txt-discount').val()));
        if(isNaN(discount) || discount<0 || discount>1){
            $('#msg-discount').show();
            check_result = false;
        }else{
            $('#msg-discount').hide();
        }
        //check api url
        url = $.trim($('#txt-url').val());
        if(!isURL(url)){
            $('#msg-url').show();
        }else{
            $('#msg-url').hide();
        }
        //check provider
        provider = $.trim($('#txt-provider').val());

        if(provider.length < 6 || provider.length >50){
            $('#msg-provider').show();
            check_result = false;
        }else{
            $('#msg-provider').hide();
        }
        //check description
        description = $.trim($('#txt-description').val());
        if(description.length < 6 || description.length >50){
            $('#msg-description').show();
            check_result = false;
        }else{
            $('#msg-description').hide();
        }
        return check_result;
    }

</script>
  </body>
</html>
