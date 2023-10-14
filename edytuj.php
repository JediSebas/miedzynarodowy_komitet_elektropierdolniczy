<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8" />
  </head>

  <body>
    <h1>Menu</h1>
    <a href="wypisz.php">Wypisz</a><br />
    <a href="dodaj.php">Dodaj</a><br />

    <p>Edytujesz pole o id:
      <?php
      echo $_POST['id'];
      ?>
    </p>

    <form method="post" action="edytuj.php">
      <label>towar: <input type="text" name="towar" /></label><br />
      <label>ilosc: <input type="number" name="ilosc" /></label><br />
      <label>cena: <input type="number" name="cena" /></label><br />

      <?php
      $id = $_POST['id'];
      echo "<input type='hidden' name='id' value='$id' />";
      ?>

      <input type="submit" value="Edytuj" />
    </form>

    <?php
    
    if (isset($_POST['towar']) && 
        isset($_POST['ilosc']) && 
        isset($_POST['cena']) &&
        isset($_POST['id'])) {

      $towar = $_POST['towar'];
      $ilosc = $_POST['ilosc'];
      $cena = $_POST['cena'];
      $id = $_POST['id'];

      if ($towar &&
          $ilosc &&
          $cena &&
          $id) {
        
        $q = "UPDATE magazyn SET towar7='$towar', ilosc7='$ilosc', cena7='$cena' WHERE id7='$id';";
        $connect = mysqli_connect('localhost', 'root', '', 'dane4');
        $wynik = mysqli_query($connect, $q);

        echo "Zmieniono wartość";
      } else {
        echo "Nie podano wszystkich danych";
      }
    }
    
    ?>

  </body>
</html>