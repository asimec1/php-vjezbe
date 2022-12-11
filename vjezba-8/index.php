<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marke vozila</title>
  </head>
  <body>
    <form action="" method="post">
      <label for="vozila">Označi vozilo od ponuđenih:</label>
      <input type="radio" name="vozila" value="Audi">Audi
      <input type="radio" name="vozila" value="BMW">BMW
      <input type="radio" name="vozila" value="Renault">Renault
      <input type="radio" name="vozila" value="Citroen">Citroen
      <input type="submit" value="Pošalji">
    </form>
    <?php 
      if (isset($_POST['vozila'])) {
        $odabranoVozilo = $_POST['vozila'];
        print '
        <p>Odabrali ste vozilo marke: <strong>'.$odabranoVozilo.'</strong></p>';
      }
      ?>
  </body>
</html>