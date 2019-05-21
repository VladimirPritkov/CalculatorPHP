
<?php
$answer = null ;
$calculator = [
'firstValue' => 0,
'secondValue' => 0,
'sign' => null
];
if(isset($_POST['number_1']) && isset($_POST['number_2'])) {
 if(!empty($_POST['number_1']) && !empty($_POST['number_2'])) {
   $calculator['firstValue'] =  $_POST['number_1'];
   $calculator['secondValue'] = $_POST['number_2'];
   $calculator['sign'] = $_POST['sign'];
 } else {
   echo "Fatall error";
 }
}
if($calculator['sign'] != null && $calculator['firstValue'] != null && $calculator['secondValue'] !=null){
switch ($calculator['sign']) {
  case '+':
    $answer = $calculator['firstValue'] + $calculator['secondValue'];
    break;
    case '-':
      $answer = $calculator['firstValue'] - $calculator['secondValue'];
      break;
      case '*':
        $answer = $calculator['firstValue'] * $calculator['secondValue'];
        break;
        case '/':
          $answer = $calculator['firstValue'] / $calculator['secondValue'];
          break;
          case '^':
            $answer = $calculator['firstValue'] ** $calculator['secondValue'];
            break;
            case 'root':
              $answer = $calculator['firstValue'] ** (0.5 ** $calculator['secondValue']);
              break;
  default:
  $answer = 'Мы еще не готовы к этому ';
    break;
}
}
?>
