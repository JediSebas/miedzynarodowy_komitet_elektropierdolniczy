<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8" />
  </head>

  <body>
    <h1>Menu</h1>
    <a href="wypisz.php">Wypisz</a><br />
    <a href="dodaj.php">Dodaj</a><br />

    <form method="post" action="dodaj.php">
      <label>towar: <input type="text" name="towar" /></label><br />
      <label>ilosc: <input type="number" name="ilosc" /></label><br />
      <label>cena: <input type="number" name="cena" /></label><br />
      <input type="submit" value="Dodaj" />
    </form>

    <?php
    
    if (isset($_POST['towar']) && 
        isset($_POST['ilosc']) && 
        isset($_POST['cena'])) {

      $towar = $_POST['towar'];
      $ilosc = $_POST['ilosc'];
      $cena = $_POST['cena'];

      if ($towar &&
          $ilosc &&
          $cena) {
        
        $q = "INSERT INTO magazyn VALUES (NULL, '$towar', '$ilosc', '$cena');";
        $connect = mysqli_connect('localhost', 'root', '', 'dane4');
        $wynik = mysqli_query($connect, $q);
        
      } else {
        echo "Nie podano wszystkich danych";
      }
    }
    
    ?>
  </body>

</html>