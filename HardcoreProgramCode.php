<?php
$bus = false;
$nub = 2;
$sub = 8;

while($nub<$sub){
$nub++;
  echo '<br>';
  echo $nub;
  echo '<br>';
  echo $sub;
}
if ($nub=$sub) {
  echo('float');
}elseif ($nub==7) {
 $bus=$nub*$sub;
}
echo ($bus);

 ?>
