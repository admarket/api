<div class="nav-bar">
    <div class="left-nav">
        <div class="title"><i class="list layout icon"></i> Category</div>
        <div class="item-group" id="category">
            <div class="ui active inverted dimmer">
                <div class="ui text loader">Loading</div>
            </div>
        </div>
        <div class="item-group" style="font-size:12px;line-height:25px;">
            <p>Submit your API to Join us<br/>
             <a class="ui green mini button green-btn" href="<{spUrl c=main a=submit}>" style="background-color: #00b040;font-size:10px;">Submit</a> 
            </p>
        </div>

    </div>

</div>

<script  type="text/javascript">
var categories;
loadCategory();
function loadCategory(){
  $.post("<{spUrl c=ccategory a=getJsonData}>",
     function(data){
       if(data!="0"){
         $("#category").html('');
         categories=JSON.parse(data);

         for(var i=0;i<categories.length;i++){
             var category = '<a href="javascript:changeCategory('+ categories[i].id +');"> '+categories[i].name+'</a>';
            $("#category").append(category);
         }
          
       }else{
          $("#category").html("<li>Failed loading catogory data...</li>");
       }
     });
}

 function submitSearch(obj){
    $(obj).attr('class','active');
     $('#currentCategory').val($(obj).attr('data-key'));
      $("#search-form").submit();
 }

function stringToJSON(obj){   
  return eval('(' + obj + ')');   
} 
</script>
         