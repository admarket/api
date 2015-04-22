<!DOCTYPE html>
<html>
  <head>
    <title>Sign In - API.com</title>
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
                    <input  id="txt-email" placeholder="input email address" type="text">
                    <i class="user icon"></i>
                  </div>
              </div> 

          </div>

          <div class="one fields" >
              <div class="field" style="width:100%;font-size:14px;margin:10px 0;">
                  <label>Password:</label>
                  <div class="ui left icon input">
                    <input id="txt-password" placeholder="input password" type="password">
                    <i class="lock icon"></i>
                  </div>

              </div>
          </div>
          <div style="padding:20px 0;">
              <a id="btn-login" class="ui blue small submit button" style="background-color: #00b040;font-size:14px;">Sign In</a> 
              <span style="margin:10px 0px 0px 30px;"><a href="<{spUrl c=main a=forget}>">Forget your password?</a></span>
          </div>
        </div>
    </div>
    <script src="/js/jquery.message.js"></script>
    <script type="text/javascript">
    init();
    function init(){
      $('.ui.checkbox').checkbox();
      var CookieStr = document.cookie;
      if(CookieStr.indexOf('email')>=0){
        var GetName = '';
        if(CookieStr.indexOf('=')>=0&&CookieStr.indexOf(';')>=0){
          GetName =CookieStr.split('=')[1].split(';')[0]; //get cookie
        }
        
         $("#txt-email").val(GetName);
      } 
    }
    
    function login(){
       $("#btn-login").attr('class', 'ui disabled loading blue small submit button');
          $.post("<{spUrl c=user a=login}>", { email: $("#txt-email").val(), password: $("#txt-password").val() },
           function(data){
             if(data){
              if($("#cookieCheck").attr("checked")){//cookie
                //document.cookie="email="+$("#txt-email").val();
                var Days = 30;   
                var exp = new Date();  
                var name="email";
                var value=  $("#txt-email").val();
                exp.setTime(exp.getTime() + Days*24*60*60*1000);   
                document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString();   
              }
              if(document.referrer==""||document.referrer=="undefined"){
                 window.location.href="<{spUrl c=main a=index}>";
                
              }
              else{
                window.location.href = document.referrer;
              }
                
             }else{
              $.msg("Email or password error！",function(){
              });
              $("#btn-login").attr('class', 'ui blue small submit button');
             }
           });
    }
      $("#btn-login").click(function(){
         login();  
      });
    document.onkeydown=function(event){
      e = event ? event :(window.event ? window.event : null);
      if(e.keyCode==13){
        login();
      }
     }
    </script>
  </body>
</html>
