<?php
/*$a=array("a"=>"Cat","b"=>"Dog","c"=>"Horse","d"=>"Cow");
echo '<pre>';print_r(array_chunk($a,2));echo '</pre>';

$a1=array("a"=>"Horse","b"=>"Dog");
$a2=array("c"=>"Cow","b"=>"Cat");
print_r(array_merge($a1,$a2));

$aa = array('a','b','c','d');
$bb = array('A','B','C','D');
echo '<pre>';print_r(array_combine($aa,$bb));echo '</pre>';*/

// 表示由数据库返回的可能记录集的数组
/**
 * array_column() 返回输入数组中某个单一列的值
 * @param array $a 必需
 * @param column_key 必需。需要返回值的列
 * @param index_key  可选。用作返回数组的索引/键的列
 */
$a = array(
  array(
    'id' => 5698,
    'first_name' => 'Bill',
    'last_name' => 'Gates',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Steve',
    'last_name' => 'Jobs',
  ),
  array(
    'id' => 3809,
    'first_name' => 'Mark',
    'last_name' => 'Zuckerberg',
  )
);

$last_names = array_column($a, 'last_name', 'id');
#echo '<pre>';print_r($last_names);echo '</pre>';

/**
 * array_chunk() 函数把数组分割为新的数组块
 * @param array $cars 必需
 * @param int   size  必需
 * @param preserve_keys 可选
 */
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
echo '<pre>';print_r(array_chunk($cars,2, true));echo '</pre>';
?>