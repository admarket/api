<?php
class api extends spController
{

    function getJsonData(){

        //args init area
        $page_size = 10;
        if ($this->spArgs("page_size")) {
            $page_size = intval($this->spArgs("page_size"));
        }
        $current_page = 1;
        if ($this->spArgs("current_page")) {
            $current_page = intval($this->spArgs("current_page"));
        }
        $category_id = 0;//0 means all
        if ($this->spArgs("category")) {
            $category_id = intval($this->spArgs("category"));
        }
        $keyword = '';
        if ($this->spArgs("keyword")) {
            $keyword = trim(addslashes($this->spArgs("keyword")));
        }
        //data prepare area
        $model = spClass("m_api");
        $condition = 'status = 1';
        if ($category_id != 0) {
            $condition = $condition." and category_id = $category_id";
        }
        if ($keyword != '') {
            $condition = $condition." and (name like '%$keyword%' or description like '%$keyword%')";
        }

        $count_sql = 'select count(id) as count from api where '.$condition;
        $offset = ($current_page - 1) * $page_size;
        $query_sql = "select * from api where $condition  order by id desc limit $page_size offset $offset";
        $records = $model->findSql($query_sql);
        $sum_result = $model->findSql($count_sql);
        $sum_count = intval($sum_result[0]['count']);
        $sum_page = ceil($sum_count / $page_size);
        $msg = 'successful get data';
        $code = 0;
        // result area
        $array_result =  array(
            'code' => $code,
            'data' => $records,
            'category_id' => $category_id,
            'keyword' => $keyword,
            'page_size' => $page_size,
            'sum_page' => $sum_page,
            'current_page' => $current_page,
            'msg' => $msg,
         );
  		echo json_encode($array_result);
  	}

    function getByID(){
        $id = intval($this->spArgs('id'));
        $model = spClass("m_api");
        $condition = "id = $id";
        $record = $model->find($condition);
        echo json_encode($record);
    }

    function submit(){
        $api_model = spClass("m_api");
        $name = $this->spArgs("name");
    		$format = $this->spArgs("format");
    		$category = $this->spArgs("category");
    		$price = $this->spArgs("price");
    		$discount = $this->spArgs("discount");
    		$url = $this->spArgs("url");
    		$provider = $this->spArgs("provider");
    		$description = $this->spArgs("description");
        $newrow = array(
                "name" => $name ,
                "format" => $format,
                "category_id" => $category,
                "price_number" => $price ,
                "discount_rate"=>$discount,
                "api_url" => $url,
                "provider_url" => $provider,
                "description"=>$description,
            );
        $result = $api_model->create($newrow);
        if($result){
            echo true;
        }else{
            echo false;
        }
    }
}
