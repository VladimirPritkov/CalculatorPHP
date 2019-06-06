<?php session_start()?>
<?php include 'calc.php';  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="index.css">
  </head>
  <body>
    <?php echo $errorMessage?>
    <form class="calc"  action="index.php" method="post">
      <input type="number" name="firstValue" value="<?php echo $calcData['firstValue'] ?>">
      <select class="" name="symbol">
              <option  value = "+">+</option>
              <option  value = "-">-</option>
              <option  value = "*">*</option>
              <option  value = "/">/</option>
              <option  value = "**">^</option>
              <option  value = "root">root</option>
              </select>
      <input type="number" name="secondValue" value="">
      <select class="" name="property">
        <option value="noProperty"> Normal </option>
        <option value="saveAnswer"> Save </option>

      </select>
      <input type="submit" name="" value="Okey">
    </form>

    <div class="answer"><?php echo $answer ;?></div>
    <?php if(!empty($_SESSION['answers'])): ?>
    <?php foreach ($_SESSION['answers'] as $key => $value):?>
     <table>
       <tr>
         <td class="answers">  <?php echo $value ?> </td>
       </tr>
     </table>
   <?php endforeach; ?>
 <?php endif;?>
  </body>
</html>
