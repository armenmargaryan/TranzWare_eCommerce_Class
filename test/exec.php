<?php

include('../class/eCommerce.class');

$config = array(
  'url' => 'https://twpg-test.siab.ru/exec',
  'merchantid' => '9902200976',
  'area'    => 'development',
  'logShow' => TRUE,
  'logCurl' => 'full',
  'data' => 'json'
);

$exec = new eCommerce($config);
if ($_POST['action']) {
  $result = array();
  switch ($_POST['action']) {
    case 'createOrder':
      $result = $exec->exec_CreateOrder();
      break;
    default:
      $temp['status'] = 'error';
      $temp['log'] = 'no info about action';
      $result = json_encode($temp,true);
  }
}

echo $result;

?>