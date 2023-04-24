<div>
<form action="/?calculate=Table" method="post">
<input type="number" name="num" placeholder="Value">
<button type="submit" name="submit" value="submit">Calculate</button>
</form>
<p>Odpowiedź:</p>

<?php

  function multiply_table($size) {
    if (apcu_exists($size)) {
      return apcu_fetch($size);
    }
    $table = array();
    for ($i = 1; $i <= $size; $i++) {
      $row = array();
      for ($j = 1; $j <= $size; $j++) {
        $row[] = $i * $j;
      }
      $table[] = $row;
    }
    apcu_store($size, json_encode($table));

    return json_encode($table);
  }
 

  if(isset($_POST['submit'])) {
    $size = $_POST['num'];

    if (is_numeric($size) && $size >= 1 && $size <= 100) {
     echo "Wynik dla $size to: ";
 } else {
     echo "Podaj liczbę z zakresu od 1 do 100.";
     exit();
 }


    $CalcHistory = 'CalcHistory.txt';
         echo multiply_table($size);
         $resultCel = multiply_table($size);
         $history = "Wartość: $size = $resultCel \n";
      file_put_contents($CalcHistory, $history, FILE_APPEND | LOCK_EX);
    }
?>
</div>