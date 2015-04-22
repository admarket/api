<!DOCTYPE html>
<html>
  <head>
    <title>Get back password  - API.com</title>
    <{include file="system/meta.php"}>
    <{include file="system/style.php"}>
    <{include file="system/script.php"}>
  </head>
  <body>
    <!--header content-->
    <!-- load head tpl -->
    <div style="background-color:#fff;margin:40px auto;width:500px;border:solid 1px #dedede;padding:40px;">
        <div style="border-bottom:solid 1px #dedede;">
            <a href="/" title="home">
              <img  border="0"  title="api" alt="api" src="/img/logo.png"/>
            </a>
        </div>
        <div class="ui small form segment" style="border:solid 2px #fff;box-shadow:none;">
          <div class="one fields">
              <div class="field " style="width:100%;font-size:14px;margin:10px 0;">
                  <label>Email:</label>
                  <div class="ui left icon  input">
                    <input  id="txt-email" placeholder="the email address when you sign up" type="text">
                    <i class="user icon"></i>
                  </div>
              </div> 

          </div>

          <div style="padding:20px 0;">
              <a id="btn-forget" class="ui blue small submit button" style="background-color: #00b040;font-size:14px;">Send</a> 
              <span style="margin:10px 0px 0px 30px;"><a>We will send your password to your mail box</a></span>
          </div>
        </div>
    </div>
    <script src="/js/jquery.message.js"></script>
    <script type="text/javascript">
      $("#btn-forget").click(function(){
          
          getback();
          
      });
      function getback(){
        if(checkEmail()){
            $("#btn-forget").attr('class', 'ui disabled loading blue small submit button');
            $.post("<{spUrl c=cuser a=forget}>", { email: $("#txt-email").val()},
             function(data){
              //alert(data);
               if(data.indexOf("successful")>=0){
                //$("#alert-msg").hide();
                $.msg("Your password has been send to your mail box",'color:green;');
               }else{
                $.msg(data);
                //$("#alert-msg").show();
                
               }
               $("#btn-forget").attr('class', 'ui blue small submit button');
             });
          }else{
             $("#btn-forget").attr('class', 'ui blue small submit button');
          }
      }
      function checkEmail(){
        if($.trim($("#txt-email").val()).length==0){
            $.msg("mail address can not be blank");
             return false;
        }else{
            var reg =  /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if(!reg.test($.trim($("#txt-email").val()))){
                $.msg("mail address is invalid");
                return false;
            }else{
                return true;
            }
         }
      }
       document.onkeydown=function(event){
        e = event ? event :(window.event ? window.event : null);
        if(e.keyCode==13){
          getback();
        }
       }
    </script>
  </body>
</html>
