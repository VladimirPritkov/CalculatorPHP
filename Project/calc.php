<?php
include 'functions.php';
$_SESSION['answer']['0']="Сохранение ваших ответов";
$answer = null;
$saveAnswer=null;
$calcData = [
  'firstValue' => null,
  'secondValue' => null,
  'symbol' => null
];
$errorMessage = null;
if (!empty($_POST)) {
  if (postIsValid($calcData)) {
    $calcData['firstValue'] =  $_POST['firstValue'];
    $calcData['secondValue'] = $_POST['secondValue'];
    $calcData['symbol'] = $_POST['symbol'];
    $answer = calculate($calcData);
    $saveAnswer = saveAnswer($calcData['firstValue'],$calcData['symbol'],$calcData['secondValue'],$answer);
    addAnswerToSession($saveAnswer);
  } else {
    $errorMessage = 'Data you submitted is invalid!';
  }
if ($_POST['property'] == 'saveAnswer'){
   $calcData['firstValue'] = $answer;
   $answer = 0;
}
else{ $calcData['firstValue'] = 0;}
}
if(isset($_SESSION['answers']['3'])){
  session_unset();
    session_destroy();
    $_SESSION['answers']['0'] = $saveAnswer;
}
