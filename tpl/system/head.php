 <!--header content-->
    <div class="header" >
        <div class="ui  grid">
          <div class="four wide column">
            <a href="/" title="home" style="margin-left:20px;">
              <img  border="0" height="45"  title="api" alt="api" src="/img/logo.png"/>
            </a>
          </div>
          <div class="eight wide column form" >
            <div class="ui action mini input" style="margin:10px 0;width:100%;">
                <input type="text" id="txt-keyword" placeholder="search..." />
                <a class="ui icon mini button" href="javascript:search();" ><i class="search icon"></i></a>
            </div>


          </div>

          <div class="four wide column " style="padding:25px 60px;text-align:right;">
            <{if $smarty.session.user eq '' }>
              <a class="ui mini button default" href="<{spUrl c=main a=login}>" style="background-color: #fff;font-size:10px;">Log In</a>
              <a class="ui green mini button green-btn" href="<{spUrl c=main a=register}>" style="background-color: #00b040;font-size:10px;">Sign Up</a>
            <{else}>
              <a class="ui mini button default"  href="<{spUrl c=sub a=dashboard}>" style="background-color: #fff;font-size:10px;">
                <i class="icon-user icon-white"></i>Dashboard
              </a>
                <a class="btn" href="<{spUrl c=sub a=logout}>">exit</a>
            <{/if}>

          </div>
        </div>
        <!--nav-head content-->
    </div>
<script type="text/javascript">
  $('.dropdown').dropdown({
    // you can use any ui transition
    transition: 'drop'
  });
</script>
