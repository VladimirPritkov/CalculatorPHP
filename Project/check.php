<?php include 'calc.php';  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="index.css">
  </head>
  <body>
    <form class="calc"  action="check.php" method="post">
      <input type="number" name="number_1" value="">
      <select class="" name="sign">
              <option  value = "+">+</option>
              <option  value = "-">-</option>
              <option  value = "*">*</option>
              <option  value = "/">/</option>
              <option  value = "^">^</option>
              <option  value = "root">root</option>
              </select>
      <input type="number" name="number_2" value="">
      <input type="submit" name="" value="Okey">
    </form>
    <div class="answer"><?php echo $answer ;?>
  </body>
</html>
