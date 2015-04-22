<!DOCTYPE html>
<html>
  <head>
    <title><{$data.name}>  - API.com</title>
    <{include file="system/meta.php"}>
    <{include file="system/style.php"}>
    <{include file="system/script.php"}>
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
              <{$data.name}>
            </a>
        </div>
        <div class="ui small form segment" style="border:solid 2px #fff;box-shadow:none;">
          
          <div class="two fields" >
              <div class="field">
                  <label>Data Format:</label>
                  <{foreach from=$data.format_tags item=tag}>
                    <a class="ui blue label"><{$tag}></a>

                  <{/foreach}>
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
                    <a class="ui green label"><{$data.discount_rate}></a>
                  <{/if}>
              </div>
          </div>
          <div class="two fields" >
              <div class="field">
                  <label>Developer Token Required:</label>
                  
                  <{if $data.token_require == 0}>
                    <a class="ui red label">Yes</a>
                  <{else}>
                    <a class="ui green label">no</a>
                  <{/if}>
              </div>
              <div class="field">
                  <label>Usage Quota:</label>
                  <{if $data.usage_quota_time <= 0}>
                    <a class="ui green label">Unlimit</a>
                  <{else}>
                    <a class="ui green label"><{$data.usage_quota_time|number_format}>/<{$data.usage_quota_unit}></a>
                  <{/if}>
              </div>
          </div>
          <div class="two fields" >
              <div class="field">
                  <label>Provider:</label> 
                  <a class="ui label"><{$data.provider_url}></a>
              </div>
              <div class="field">
                  <label>License:</label>
                  <a class="ui label"><{$data.license}></a>
              </div>
              
          </div>
          <div class="one fields" >
              <div class="field">
                  <label>API URL:</label>
                  <div class="ui label">
                    <i class="linkify icon"></i>
                    <a href="<{$data.api_url}>" target="_blank"><{$data.api_url}></a>
                  </div>
              </div>
          </div>
          <div class="one fields" >
              <div class="field">
                  <label>Description:</label>
                  <div class="ui label" style="font-size:14px;padding:20px;line-height:20px;">
                    <{$data.description}>
                  </div>
              </div>
          </div>

        </div>
    </div>
    <script type="text/javascript">
      $('.ui.checkbox').checkbox();
    </script>
  </body>
</html>
