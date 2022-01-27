<?php
$euros = $_POST['euros'];
$pesetas = $euros * 166.386;
?>

<form action='p2.php' method='POST'>
  <input type='text' name='euros' value='<?php echo $euros;?>'>
  <input type='text' name='pesetas' value='<?php echo $pesetas;?>'>
  <input type='submit' value='Igual a'>
</form>
