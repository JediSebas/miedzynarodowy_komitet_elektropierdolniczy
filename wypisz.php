<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8" />
    <style>
      table, tr, td {
        border: 1px solid black;
        border-collapse: collapse;
      }
    </style>
  </head>

  <body>

    <h1>Menu</h1>
    <a href="wypisz.php">Wypisz</a><br />
    <a href="dodaj.php">Dodaj</a><br />

    <table>
      <tr>
        <td>id7</td>
        <td>towar7</td>
        <td>ilosc7</td>
        <td>cena7</td>
      </tr>

      <?php
      
      $q = "SELECT * FROM magazyn;";
      $connect = mysqli_connect('localhost', 'root', '', 'dane4');
      $wynik = mysqli_query($connect, $q);

      while ($x = mysqli_fetch_assoc($wynik)) {
        $id = $x['id7'];
        echo "<tr>";
        echo "<td>" . $x['id7'] . "</td>";
        echo "<td>" . $x['towar7'] . "</td>";
        echo "<td>" . $x['ilosc7'] . "</td>";
        echo "<td>" . $x['cena7'] . "</td>";

        echo "<td>";
        echo "<form method='post' action='edytuj.php'>";
        echo "<input type='hidden' value='$id' name='id' />";
        echo "<input type='submit' value='Edytuj' />";
        echo "</form>";
        echo "</td>";

        echo "</tr>";
      }

      ?>
    </table>
  </body>
</html>