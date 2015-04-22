 
<!--
<div class="main-head">
    <a href="#" class="current">Hot Topic Api </a>
    <a href="#">Recent discovery</a>
</div>
-->
<div class="main-content">
    <div class="ui list" id="api-box" style="width:100%;">
        
    </div>
    <div class="ui  pagination" id="page-box" style="border-top:solid 1px #f6f6f6;margin:40px 10px;padding:20px 0px;font-size:10px;">
      <a class="item">1</a>
    </div>
</div>
<script  type="text/javascript">
var apis = [];
var current_page = 1;
var page_size = 10;
var category = 0;
var keyword = '';
loadAPI();


function changeCategory(current){
    category = parseInt(current);
    keyword = '';
    $('#txt-keyword').val('')
    loadAPI();
 }
function search(){
  keyword = $('#txt-keyword').val();
  loadAPI();
}
function page(index){
  current_page = parseInt(index);
  loadAPI();
}
function loadAPI(){
  var loading_code = '<div class="ui active inverted dimmer"><div class="ui text loader">Loading</div></div>';
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
               var api_code = '<div style="width:100%;"><a href="<{spUrl c=main a=detail}>?id=' + apis[i].id + '"> '+apis[i].name+'</a></div>';
               api_code = '<div class="item ui grid" style="padding:0;">';
               api_code += '<div class="content ui ten wide column" style="padding:5px 10px;margin:0 10px;">';
               api_code += '<a class="header" target="_blank" href="<{spUrl c=main a=detail}>?id=' + apis[i].id + '">' 
                        + apis[i].name + '</a>';
               api_code += '<div class="description" style="text-overflow:ellipsis;overflow:hidden;">' + apis[i].description + '</div>';
               
               api_code += '</div>';
                      
              $("#api-box").append(api_code);
           }
           //loading page
           var sum_page = result.sum_page;
           
           for (var i = 1; i <= sum_page; i++) {
            var page_code = '';
             if (i == current_page) {
                page_code = '<a class="item current page">' + i + '</a>';
             }else{
                page_code = '<a class="item" href="javascript:page(' + i + ')">' + i + '</a>';
             }
             
             $('#page-box').append(page_code);
           }

         }else{
            var nodata_code = '<div style="margin:20px;"><span style="background-color:#fefed8;">';
            nodata_code += 'No result yet ';
            if (keyword != '') {
               nodata_code += 'for searching "' + keyword + '"';
            };
            nodata_code += ' ...';
            nodata_code += '</span></div>';
            $("#api-box").append(nodata_code);

         }

       }else{
          $("#api-box").html("<li>Failed to load api data...</li>");
       }
     }); 
}

</script>