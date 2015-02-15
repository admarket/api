<div class="nav-bar">
    <div class="left-nav">
        <div class="title"><i class="list layout icon"></i> Popular Topics</div>
        <div class="item-group" id="category">
            <div class="ui active inverted dimmer">
                <div class="ui text loader">Loading</div>
            </div>
        </div>
        <div class="item-group">
            <p>Just click to submit your API to Join us<br/>
             <a class="ui green mini button" href="#" style="background-color: #00b040;font-size:10px;">Submit</a> 
            </p>
        </div>

    </div>

</div>

<script  type="text/javascript">
var categories;
 $.post("<{spUrl c=ccategory a=getJsonData}>",
             function(data){
               if(data!="0"){
                 $("#category").html('');
                 categories=JSON.parse(data);

                 for(var i=0;i<categories.length;i++){
                     var category = '<a href="#"> '+categories[i].name+'</a>';
                    $("#category").append(category);
                 }
                  
               }else{
                  $("#category").html("<li>Failed loading catogory data...</li>");
               }
             });
 $("#nav-bar li").bind("click",function(){
    $(this).attr('class','active');
    $('#currentCategory').val($(this).attr('data-key'));
    $("#search-form").submit(function(e){
      e.preventDefault();
    });
 });
 function submitSearch(obj){
    $(obj).attr('class','active');
     $('#currentCategory').val($(obj).attr('data-key'));
      $("#search-form").submit();
 }

function stringToJSON(obj){   
  return eval('(' + obj + ')');   
} 
</script>
         