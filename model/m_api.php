<?php
class m_api extends spModel
{
  var $pk = "id"; // 每个留言唯一的标志，可以称为主键
  var $table = "api"; // 数据表的名称
  // 由spModel的变量$linker来设置表间关联
        var $linker = array(
                'category'=>array(
                        'type' => 'hasone',   // 关联类型，这里是一对一关联
                        'map' => 'category',    // 关联的标识
                        'mapkey' => 'category_id', // 本表与对应表关联的字段名
                        'fclass' => 'm_category', // 对应表的类名
                        'fkey' => 'id',
                        'enabled' => true     // 启用关联
                ),
                
        );
}