
<?php
include 'functions.php';

$answer = null;
$calcData = [
  'firstValue' => 0,
  'secondValue' => 0,
  'symbol' => 'null'
];

if (!empty($_POST)) {
  if (postIsValid($calcData)) {
    $calcData['firstValue'] =  $_POST['firstValue'];
    $calcData['secondValue'] = $_POST['secondValue'];
    $calcData['symbol'] = $_POST['symbol'];

    $answer = calculate($calcData);
  } else {
    echo 'Data you submitted is invalid!';
  }
}
