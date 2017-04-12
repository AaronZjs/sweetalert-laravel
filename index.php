<?php 
require 'vendor/autoload.php';


use Aliyun\opensearch\CloudsearchClient;
use Aliyun\opensearch\CloudsearchIndex;
use Aliyun\opensearch\CloudsearchDoc;
use Aliyun\opensearch\CloudsearchSearch;

$access_key = "LTAIYwAfefLIyqA5";
$secret = "EEMfHUUmpIOiR2QDpzWbYNE7UmYQDx";
//杭州公网API地址：http://opensearch-cn-hangzhou.aliyuncs.com
//北京公网API地址：http://opensearch-cn-beijing.aliyuncs.com 
$host = "http://opensearch-cn-beijing.aliyuncs.com";//根据自己的应用区域选择API
$key_type = "aliyun";  //固定值，不必修改
$opts = array('host'=>$host);

// 实例化一个SDK客户端client
$client = new CloudsearchClient($access_key,$secret,$opts,$key_type);

print_r($client);

 ?>