<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vježba-6</title>
</head>
<body>
  <h1>Kalkulator (switch naredba)</h1>
  <form action="" method="POST" id="calculator">
    <label for="number">Unesite prvi broj</label>
    <input type="number" name="number1" id="number" required autofocus>
    <br> 
    <br>  
    <label for="number2">Unesite drugi broj</label>
    <input type="number" name="number2" id="number" required>
    <br>
    <h2>Odaberi računsku operaciju: </h2>
    <input type="submit" value="+" name="operator">
    <input type="submit" value="-" name="operator">
    <input type="submit" value="*" name="operator">
    <input type="submit" value="/" name="operator">
  </form>
  <?php
    if (isset($_POST["number1"])) { $prviBroj = $_POST["number1"]; }
    if (isset($_POST["number2"])) { $drugiBroj = $_POST["number2"]; }
    if (isset($_POST["number1"])) { $operator = $_POST["operator"]; }
    $rezultat = '';

    if (isset($_POST["number1"]) && isset($_POST["number2"])) {
      switch ($operator) {
        case "+":
          $rezultat = $prviBroj + $drugiBroj;
          break;
        case "-":
          $rezultat = $prviBroj - $drugiBroj;
          break;
        case "*":
          $rezultat = $prviBroj * $drugiBroj;
          break;
        case "/":
          $rezultat = $prviBroj / $drugiBroj;
          break;
      }
      
      print '<h2>Rezultat: '.$rezultat.'</h2>';
    }
  
  
  ?>
</body>
</html>
