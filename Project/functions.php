<?php


function postIsValid($calcData) {
  foreach ($calcData as $fieldName => $value) {
    if (!isset($_POST[$fieldName]) || empty($_POST[$fieldName])) {
      return false;
    }
  }

  return true;
}

function calculate($calcData) {
  $mapSymbolsToCallback = [
    '+' => 'sum',
    '-' => 'minus',
    '*' => 'multiply',
    '**' => 'square',
    '/' => 'divide',
    'root' => 'squareRoot',
  ];
  $answer = null;
  $a =  $calcData['firstValue'];
  $b = $calcData['secondValue'];
  $symbol = $calcData['symbol'];

  if(array_key_exists ( $symbol, $mapSymbolsToCallback )){
    $answer = call_user_func($mapSymbolsToCallback [$symbol], $a, $b);
  }
  return $answer;
}

function sum($a, $b) {
  return $a + $b;
}

function minus($a, $b) {
  return $a - $b;
}

function multiply($a, $b) {
  return $a * $b;
}

function devide($a, $b) {
  return $a / $b;
}

function square($a, $b) {
  return $a ** $b;
}

function squareRoot($a, $b) {
  return $a ** (0.5 ** $b);
}
