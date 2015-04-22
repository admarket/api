<?php /* Smarty version Smarty-3.0.8, created on 2015-02-20 15:44:52
         compiled from "C:\wamp\api/tpl\result.php" */ ?>
<?php /*%%SmartyHeaderCode:141054e74864d3b501-10682229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3bbbdce8ddd83fa0efddeb5e0eccf049ac439ac' => 
    array (
      0 => 'C:\\wamp\\api/tpl\\result.php',
      1 => 1389583000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141054e74864d3b501-10682229',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
  <head>
    <title>广告位市场 - 网络广告位交易、发布、管理平台  </title>
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
    <?php $_template = new Smarty_Internal_Template("head.php", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
    <!--section content-->
    <div class="section">
      <div class="container">
        <!--intro content-->
        <?php $_template = new Smarty_Internal_Template("intro.php", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
           <!-- load head tpl -->
          <div class="row-fluid" >
            <?php $_template = new Smarty_Internal_Template("side-bar.php", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

            <div class="span8 main-body">
              <!--Body content-->
              <div class="page-header">
                <h5 style="border-bottom:solid 1px #eee;padding:10px">筛选条件：</h5>
                <div class="conditions" style="padding:0 10px;line-height:30px;font-size:12px;">
                    <div class="row-fluid" style="padding:0px;margin:0;">
                        <div class="span2 title" style="width:13%;">
                          全球排名：
                        </div>
                        <div class="span10 alexa-box" style="padding:0;margin:0;">
                          <a class="alexa" data-range="" style="margin-left:20px;" ><span class="condition">全部</span></a>
                          <a class="alexa" data-range="1,1000" style="margin-left:20px;" ><span class="condition">1-1,000</span></a>
                          <a class="alexa" data-range="1000,10000" style="margin-left:20px;" ><span  class="condition" >1,000-1万</span></a>
                          <a class="alexa" data-range="10000,100000" style="margin-left:20px;" ><span  class="condition" >1万-10万</span></a>
                          <a class="alexa" data-range="100000,1000000" style="margin-left:20px;" ><span  class="condition" >10万-100万</span></a>
                          <a class="alexa" data-range="1000000,5000000" style="margin-left:20px;" ><span  class="condition" >100万-500万</span></a>
                          <a class="alexa" data-range="5000000,50000000" style="margin-left:20px;" ><span  class="condition" >500万以上</span></a>
                        </div>
                    </div>

                    <div class="row-fluid" style="padding:0px;margin:0;">
                        <div class="span2 title" style="width:13%;">
                          价格（&yen;/天）：
                        </div>
                        <div class="span10 price-box" style="padding:0;margin:0;">
                          <a  class="price" data-range="" style="margin-left:20px;" ><span class="condition">全部</span></a>
                          <a  class="price" data-range="0,1" style="margin-left:20px;" ><span  class="condition">0-1&yen;</span></a>
                          <a class="price"  data-range="1,10" style="margin-left:20px;" ><span  class="condition" >1-10&yen;</span></a>
                          <a class="price" data-range="10,100" style="margin-left:20px;" ><span  class="condition" >10-100&yen;</span></a>
                          <a class="price" data-range="100,1000" data-range="0" style="margin-left:20px;" ><span  class="condition" >100-1000&yen;</span></a>
                          <a class="price" data-range="1000,10000" style="margin-left:20px;" ><span  class="condition" >1000&yen;以上</span></a>
                        </div>
                    </div>
                     <div class="row-fluid" style="padding:0px;margin:0;">
                        <div class="span2 title" style="width:13%;">
                          出售状态：
                        </div>
                        <div class="span10 state-box" style="padding:0;margin:0;">
                          <a class="state" data-range="" style="margin-left:20px;" ><span class="condition">全部</span></a>
                          <a class="state" data-range="0" style="margin-left:20px;" ><span class="condition">未出售</span></a>
                          <a class="state" data-range="1" style="margin-left:20px;" ><span class="condition">已出售</span></a>
                          <a class="state" data-range="2" style="margin-left:20px;" ><span class="condition">可预订</span></a>
                        </div>
                    </div>
                    <div class="row-fluid" style="padding:0px;margin:0;">
                        <div class="span2 title" style="width:13%;">
                          排序方式：
                        </div>
                        <div class="span10 order-box" style="padding:0;margin:0;">
                          <a class="order" data-range="0" style="margin-left:20px;" ><span class="condition">默认</span></a>
                          <a class="order" data-range="1" style="margin-left:20px;" >
                            <span class="condition">价格升序&nbsp;<i class=" icon-arrow-up"></i></span>
                          </a>
                          <a class="order" data-range="2" style="margin-left:20px;" >
                            <span class="condition">价格降序&nbsp;<i class=" icon-arrow-down"></i></span>
                          </a>
                        </div>
                    </div>
                     <div class="row-fluid " style="padding:0px;margin:0;">
                        
                        <div class="span4 title" >
                          <span>总计：</span>
                          <span style="margin-left:20px;"><?php echo number_format($_smarty_tpl->getVariable('resultsCount')->value);?>
个广告位</span>

                        </div>
                        <div class="span4 title" >
                          关键词：
                          <span style="margin-left:20px;">“<?php echo $_smarty_tpl->getVariable('keyword')->value;?>
”</span>
                        </div>
                        <div class="span3 title" >
                          当前页：
                          <span style="margin-left:20px;">第<?php echo $_smarty_tpl->getVariable('currentPage')->value;?>
页</span>

                        </div>
                    </div>
                    
                </div>
              </div>
               <!-- content box tpl-->  
               <div  class="row-fluid" style="padding:0px 15px;margin:0px;">
                <ul class="ads"  style="width:100%;padding:0;margin-bottom:10px;"> 

                      <?php if (count($_smarty_tpl->getVariable('results')->value)==0){?>
                        <div style="font-size:12px;border:dashed 1px #ccc;padding:10px 20px;border-radius:5px;width:80%;background-color:#eee;">
                          没有找到合适的广告位？
                          <a class="tip" target="_blank" title="点击联系我们" href="http://wpa.qq.com/msgrd?v=3&uin=4006776&site=qq&menu=yes">
                            联系我们为您量身订购
                          </a>
                        </div>
                      <?php }?>
                     <?php  $_smarty_tpl->tpl_vars['advertise'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('results')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['advertise']->key => $_smarty_tpl->tpl_vars['advertise']->value){
?>
                         <?php $_template = new Smarty_Internal_Template("content-box.php", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
                     <?php }} ?>
                </ul>
              </div>  
                 <?php if (count($_smarty_tpl->getVariable('results')->value)!=0){?>
                <div class="pagination pagination-small" align="center" > 
                          <ul>
                          <?php if ($_smarty_tpl->getVariable('pager')->value){?>
                          <!--在当前页不是第一页的时候，显示前页和上一页-->
                          <?php if ($_smarty_tpl->getVariable('pager')->value['current_page']!=$_smarty_tpl->getVariable('pager')->value['first_page']){?>
                          <li>
                            <a class="newpage" data-value="<?php echo $_smarty_tpl->getVariable('pager')->value['first_page'];?>
">首页</a>
                          </li> 
                          <li>
                            <a class="newpage" data-value="<?php echo $_smarty_tpl->getVariable('pager')->value['prev_page'];?>
">上一页</a> 
                          </li>
                          <?php }?>
                          <!--开始循环页码，同时如果循环到当前页则不显示链接-->
                          <?php  $_smarty_tpl->tpl_vars['thepage'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pager')->value['all_pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['thepage']->key => $_smarty_tpl->tpl_vars['thepage']->value){
?>
                                  <?php if ($_smarty_tpl->tpl_vars['thepage']->value!=$_smarty_tpl->getVariable('pager')->value['current_page']){?>
                                          <li>
                                            <a class="newpage" data-value="<?php echo $_smarty_tpl->tpl_vars['thepage']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['thepage']->value;?>
</a>
                                          </li>
                                  <?php }else{ ?>
                                          <li><a id="current-Page" class="disabled" style="color:#777;cursor:text;"><?php echo $_smarty_tpl->tpl_vars['thepage']->value;?>
</a></li>
                                  <?php }?>
                                 
                          <?php }} ?>
                          <!--在当前页不是最后一页的时候，显示下一页和后页-->

                            <?php if ($_smarty_tpl->getVariable('pager')->value['current_page']!=$_smarty_tpl->getVariable('pager')->value['last_page']){?> 
                            <li>
                              <a class="newpage" data-value="<?php echo $_smarty_tpl->getVariable('pager')->value['all_pages'][count($_smarty_tpl->getVariable('pager')->value['all_pages'])-1];?>
">...</a>
                            </li>
                            <li>
                              <a class="newpage" data-value="<?php echo $_smarty_tpl->getVariable('pager')->value['next_page'];?>
">下一页</a>
                            </li>
                            <li>
                              <a class="newpage" data-value="<?php echo $_smarty_tpl->getVariable('pager')->value['last_page'];?>
">末页</a>
                            </li>
                            <?php }?>
                          <?php }?>
                          </ul>
                </div> 
                 <?php }?>

            </div>

        </div>
      </div>
    </div>
        <!--footer content-->
    <?php $_template = new Smarty_Internal_Template("foot.php", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
    <!--script content-->

    <script type="text/javascript">
      $('.tip').tooltip();
     
       $('.alexa').click(function(){
          var value=$(this).attr('data-range');
           $('#currentAlexa').val(value);
       });
       $('.price').click(function(){
          var value=$(this).attr('data-range');
           $('#currentPrice').val(value);

       });
       $('.state').click(function(){
          var value=$(this).attr('data-range');
           $('#currentState').val(value);

       });
      $('.newpage').click(function(){
          var value=$(this).attr('data-value');
           $('#currentPage').val(value);
           //$("#search-form").submit();
       });
      var conditionUrl="";
      loadCondition();
      function loadCondition(){

          var url="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'result'),$_smarty_tpl);?>
?a=1";
          var keyword=$.trim($('#keyword').val());
         
         
          var categoryUrl=url;
          if($('#currentCategory').val()!=""){
              categoryUrl=url+'&category='+$('#currentCategory').val();
           }
          var keywordUrl=categoryUrl;
          if(keyword!=""){
            keywordUrl=categoryUrl+'&keyword='+encodeURI(keyword);
          }

          conditionUrl=keywordUrl;
          //alert(keywordUrl);
          //keywordUrl=keywordUrl;
          //alexa url connect
            var alexaBaseUrl=keywordUrl;
            if($('#currentPrice').val()!=""){
                  alexaBaseUrl+='&price='+$('#currentPrice').val();
              }
               if($('#currentState').val()!=""){
                  alexaBaseUrl+='&state='+$('#currentState').val();
              }
              if($('#currentOrder').val()!=""){
                  alexaBaseUrl+='&order='+$('#currentOrder').val();
              }
           $('.alexa-box').children().each(function(){
              if($(this).attr('data-range')!=""){
                var currentAlexaBaseUrl=alexaBaseUrl+'&alexa='+$(this).attr('data-range');
                $(this).attr('href',currentAlexaBaseUrl);
              }else{
                $(this).attr('href',alexaBaseUrl);
              }
              if($(this).attr('data-range')==$('#currentAlexa').val()){
                $(this).attr('class','label condition');

              }
            });

           //price url connect
            var priceBaseUrl=keywordUrl;
            if($('#currentAlexa').val()!=""){
                  priceBaseUrl+='&alexa='+$('#currentAlexa').val();
              }
               if($('#currentState').val()!=""){
                  priceBaseUrl+='&state='+$('#currentState').val();
              }
              if($('#currentOrder').val()!=""){
                  priceBaseUrl+='&order='+$('#currentOrder').val();
              }
           $('.price-box').children().each(function(){
              if($(this).attr('data-range')!=""){
                var currentPriceBaseUrl=priceBaseUrl+'&price='+$(this).attr('data-range');
                $(this).attr('href',currentPriceBaseUrl);
              }else{
                $(this).attr('href',priceBaseUrl);
              }
              if($(this).attr('data-range')==$('#currentPrice').val()){
                $(this).attr('class','label condition');

              }
            });
           //state url connect
           var stateBaseUrl=keywordUrl;
            if($('#currentAlexa').val()!=""){
                  stateBaseUrl+='&alexa='+$('#currentAlexa').val();
              }
               if($('#currentPrice').val()!=""){
                  stateBaseUrl+='&price='+$('#currentPrice').val();
              }
              if($('#currentOrder').val()!=""){
                  stateBaseUrl+='&order='+$('#currentOrder').val();
              }
           $('.state-box').children().each(function(){
              if($(this).attr('data-range')!=""){
                var currentStateBaseUrl=stateBaseUrl+'&state='+$(this).attr('data-range');
                $(this).attr('href',currentStateBaseUrl);
              }else{
                $(this).attr('href',stateBaseUrl);
              }
               if($(this).attr('data-range')==$('#currentState').val()){
                  $(this).attr('class','label condition');
                }
            });
           var orderBaseUrl=keywordUrl;
            if($('#currentAlexa').val()!=""){
                  orderBaseUrl+='&alexa='+$('#currentAlexa').val();
              }
               if($('#currentPrice').val()!=""){
                  orderBaseUrl+='&price='+$('#currentPrice').val();
              }
              if($('#currentState').val()!=""){
                  orderBaseUrl+='&state='+$('#currentState').val();
              }
           $('.order-box').children().each(function(){
              if($(this).attr('data-range')!=""){
                var currentOrderBaseUrl=orderBaseUrl+'&order='+$(this).attr('data-range');
                $(this).attr('href',currentOrderBaseUrl);
              }else{
                $(this).attr('href',orderBaseUrl);
              }
               if($(this).attr('data-range')==$('#currentOrder').val()){
                  $(this).attr('class','label condition');
                }
            });
        
      }

      loadPage();
      function loadPage(){
            if($('#currentPrice').val()!=""){
                conditionUrl+='&price='+$('#currentPrice').val();
            }
             if($('#currentState').val()!=""){
                conditionUrl+='&state='+$('#currentState').val();
            }
            if($('#currentAlexa').val()!=""){
                conditionUrl+='&alexa='+$('#currentAlexa').val();
            }
            if($('#currentOrder').val()!=""){
                conditionUrl+='&order='+$('#currentOrder').val();
            }
            $('.newpage').each(function(){
              var value=$(this).attr('data-value');
              $(this).attr('href',conditionUrl+'&page='+value);
               //$("#search-form").submit();
            });
      }
    </script>
  </body>
</html>
