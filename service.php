<?php
/**
 * Created by PhpStorm.
 * User: jc91715
 * Date: 2018/9/8
 * Time: 9:47
 */
include './client.php';

$id_array = array('id'=>1);

echo $client->getName($id_array);