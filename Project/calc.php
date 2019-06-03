<?php
include 'functions.php';
$answer = null;
$saveAnswer=null;
$calcData = [
  'firstValue' => null,
  'secondValue' => null,
  'symbol' => null
];
if (!empty($_POST)) {
  if (postIsValid($calcData)) {
    $calcData['firstValue'] =  $_POST['firstValue'];
    $calcData['secondValue'] = $_POST['secondValue'];
    $calcData['symbol'] = $_POST['symbol'];
    $answer = calculate($calcData);
    $saveAnswer = saveAnswer($calcData['firstValue'],$calcData['symbol'],$calcData['secondValue'],$answer);
  } else {
    echo 'Data you submitted is invalid!';
  }
if ($_POST['property'] == 'saveAnswer'){
   $calcData['firstValue'] = $answer;
   $answer = 0;
}
else{ $calcData['firstValue'] = 0;}
}
