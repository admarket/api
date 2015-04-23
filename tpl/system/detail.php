<!DOCTYPE html>
<html>
  <head>
    <title><{$data.name}>  - API.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0,maximum-scale=2.0"/>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="keywords" content="api, web service, lambda api"/>
      <meta name="description"
      content="<{$data.description}>"/>
    <{include file="system/style.php"}>
    <{include file="system/script.php"}>
  </head>
  <body>
    <!--header content-->
    <!-- load head tpl -->
    <{include file="system/head.php"}>
    <div style="margin:20px 50px;">
        <div class="ui  grid">
            <div class="eleven wide column" style="background-color:#fff;border:solid 1px #f6f6f6;padding:30px 50px;line-height:30px;font-size:14px;" >

                <div style="border-bottom:solid 1px #f6f6f6;padding:10px;">

                    <a href="/" title="home" style="font-weight:bold;font-size:16px;color:#555;">
                      <{$data.name}>
                    </a>
                </div>
                <div class="ui small form segment" style="border:solid 2px #fff;box-shadow:none;">

                  <div class="two fields" >
                      <div class="field">
                            <label>Data Format:</label>
                            <a class="ui blue label"><{$data.format}></a>
                      </div>
                      <div class="field">
                          <label>Category:</label>
                          <a class="ui label"><{$data.category.name}></a>
                      </div>

                  </div>
                  <div class="two fields" >
                      <div class="field">
                          <label>Price:</label>

                          <{if $data.price_number == 0}>
                            <a class="ui green label">Free</a>

                          <{else}>
                            <a class="ui red label"><{$data.price_number}><{$data.price_unit}> / Call</a>
                          <{/if}>
                      </div>
                      <div class="field">
                          <label>Discount:</label>
                          <{if $data.discount_rate == 0}>
                            <a class="ui label">None</a>
                          <{else}>
                            <a class="ui green label"><{$data.discount_rate}> Off</a>
                          <{/if}>
                      </div>
                  </div>
                  <div class="two fields" >
                      <div class="field">
                          <label>Provider:</label>
                          <a class="ui label"><{$data.provider_url}></a>
                      </div>
                      <div class="field">
                          <label>API URL:</label>
                          <div class="ui label" >
                            <i class="linkify icon"></i>
                            <a style="text-overflow:ellipsis;overflow:hidden;" href="<{$data.api_url}>" target="_blank"><{$data.api_url}></a>
                          </div>
                      </div>
                  </div>
                  <div class="one field" >
                      <div class="field">
                          <label>Description:</label>
                          <div class="ui label" style="font-size:14px;padding:20px;line-height:20px;width:90%;">
                            <{$data.description}>
                          </div>
                      </div>
                  </div>

                </div>
            </div>
            <div class="four wide column" style="background-color:#fff;border:solid 1px #f6f6f6;padding: 10px 20px;line-height:30px;font-size:14px;margin-left:10px;">
                <div style="border-bottom:solid 1px #f6f6f6;padding:5px 10px;">

                    <a   style="font-weight:bold;font-size:14px;color:#000;">
                      Recommand APIs
                    </a>
                </div>
                <div id="api-box" style="">

                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $('.ui.checkbox').checkbox();
        var category = <{$data.category.id}>;
        var loading_code = '<div class="ui active inverted dimmer"><div class="ui text loader">Loading</div></div>';
        var current_page = 1;
        var page_size = 10;
        var keyword = '';
        $("#api-box").html(loading_code);
        $.post("<{spUrl c=api a=getJsonData}>",
            {'current_page':current_page, 'page_size':page_size, 'keyword':keyword, 'category':category},
            function(response){
                result = JSON.parse(response);
                 if(result.code == 0){
                  //loading data
                  var apis = result.data;
                   $("#api-box").html('');
                   $('#page-box').html('');
                   if (apis.length > 0) {
                     for(var i = 0;i < apis.length;i++){
                         var api_code = '<div style="width:100%;padding:10px;border-bottom:solid 1px #ededed;line-height:20px;"><div><a style="color:#555;font-weight:bold;" href="<{spUrl c=main a=detail}>?id=' + apis[i].id + '"> '+apis[i].name+'</a></div>';
                         api_code += '<div class="provider" style="font-size:10px;text-overflow:ellipsis;overflow:hidden;"><a href="' + apis[i].api_url + '">' +  apis[i].api_url + '</a></div>';
                         api_code += '<div class="provider" style="font-size:10px;color:#999;">Provided by :' + apis[i].provider_url + '</div>';
                         api_code += '<div class="ui star rating" data-rating="0"></div>';

                         api_code += '</div>';

                        $("#api-box").append(api_code);
                     }

                   }else{
                      var nodata_code = '<div style="margin:20px;"><span style="background-color:#fefed8;">';
                      nodata_code += 'No result yet ';
                      nodata_code += ' ...';
                      nodata_code += '</span></div>';
                      $("#api-box").append(nodata_code);

                   }

                 }else{
                    $("#api-box").html("<li>Failed to load api data...</li>");
                 }
                 $('.ui.rating').rating();
        });
    </script>
  </body>
</html>
