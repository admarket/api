 <!--header content-->
    <div class="header" >
        <div class="ui  grid">
          <div class="three wide column">
            <a href="/" title="home">
              <img  border="0"  title="api" alt="api" src="/img/logo.png"/>
            </a>
          </div>
          <div class="nine wide column form" >
             
             <form id="search-form" name="search-form" action="<{spUrl c=main a=result}>" method="post">
                     <div class="ui action mini input" style="margin:10px 0;width:100%;">
                        <input type="text" placeholder="search..." />
                        <a class="ui icon mini button"><i class="search icon"></i></a>
                    </div>
              </form>

          </div>
          <div class="four wide column " style="padding:25px;text-align:right;">
            <{if $smarty.session.user eq '' }>
              <a class="ui mini button default" href="<{spUrl c=main a=register}>">Submit</a>
              <a class="ui mini green button" href="<{spUrl c=main a=login}>">Login</a>
            <{else}>
              <a class="btn btn-success" style="width:80px;" href="<{spUrl c=sub a=dashboard}>">
                <i class="icon-user icon-white"></i> Dashboard</a>
                <a class="btn" href="<{spUrl c=sub a=logout}>">exit</a>
            <{/if}>
            
          </div>
        </div>
        <!--nav-head content-->
    </div>

    