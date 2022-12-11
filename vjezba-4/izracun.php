<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Da Vincijev kod</title>
</head>
<body>
  <?php
    $a = $_POST['vrijednost-a'];
    $b = $_POST['vrijednost-b'];
    $c = (3*$a - $b ) / 2;
    print '
      <div class="odlomak">
        <p>Predana vrijednost za a: ' . $a . '</p>
        <p>Predana vrijednost za b: ' . $b . '</p>
        <p>Dobiveno rješenje nakon prolaska kroz formulu c = (3*' . $a . '-' . $b . ') / 2 = ' . $c . '</p>
      </div>'
  ?>
</body>
</html>
