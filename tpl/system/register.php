<!DOCTYPE html>
<html>
  <head>
    <title>Sign Up  - API.com</title>
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
          <div class="field">
                  <label  style="font-size:12px;">Username:</label>
                  <div class="ui labeled input">
                    <div class="ui label"  style="font-size:12px;">
                      http://www.api.com/
                    </div>
                    <input type="text" placeholder="4-20 characters"  style="font-size:12px;" id="txt-username">

                  </div>
                   <div id="msg-username" class="ui red pointing above ui label msg" style="display:none;">your email address is invalid</div>
          </div>
            
          <div class="field">
              <label>Email:</label>
              <input placeholder="your email address" type="text" id="txt-email">
              <div id="msg-email" class="ui red pointing above ui label msg" style="display:none;">your email address is invalid</div>
          </div>
              
            <div class="field">
                <label>Password:</label>
                <input placeholder="4-20 characters" type="password" id="txt-password">
                <div id="msg-password" class="ui red pointing above ui label msg"  style="display:none;">your password is invalid</div>
            </div>
           <!--<div class="field">
              <div class="ui checkbox">
                <input type="checkbox" name="hot-deals">
                <label>I agree to the <a href="#">Terms of Service</a>.</label>
              </div>
            </div>-->
          <div style="padding:20px 0;">
              <a class="ui blue small save button" style="background-color: #00b040;font-size:10px;">Sign Up</a>
          </div>
        </div>
    </div>
    <script type="text/javascript">
    var check_username = false;
    var check_email = false;
    var check_password = false;
    var email = $.trim($('#txt-email').val());
    var password = $.trim($('#txt-password').val());
    var username = $.trim($('#txt-username').val());


      $('.ui.checkbox').checkbox();
      $('.save').click(function(){
          checkForm();
          if (check_username && check_email && check_password) {
            $.post("<{spUrl c=user a=register}>", {username:username, email:email, password:password},
             function(data, status){
                alert(data);
            });
          };
      });
      

      function checkForm(){
        check_username = false;
        check_email = false;
        check_password = false;
        email = $.trim($('#txt-email').val());
        password = $.trim($('#txt-password').val());
        username = $.trim($('#txt-username').val());
        //check username
        if (username.length < 4 || username.length > 20) {
          $('#msg-username').show();
          $('#msg-username').html('username invalid, required 4-20 characters');
        }else{
          check_username = true;
          $('#msg-username').hide();
        }
        //check email 
        var email_reg =  /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!email_reg.test(email)){
            $('#msg-email').show();
            $("#msg-email").html("email invalid, check the format");
        }else{
            check_email = true;
             $('#msg-email').hide();
        }
        //check password
        if (password.length < 4 || password.length > 20) {
          $('#msg-password').show();
          $('#msg-password').html('password invalid, required 4-20 characters');
        }else{
          check_password = true;
           $('#msg-password').hide();
        }


      }
    </script>>
  </body>
</html>
