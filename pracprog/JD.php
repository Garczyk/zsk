<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sredni wiek</title>
  </head>
  <body>
    <h3>Ilość osób w rodzinie</h3>
    <?php
    if(!isset($_post['person'])){
      echo <<< FORMCOUNTPERSON
      <form method="post">
        <input type="number" method="post" placeholder="ilość osób"><br><br>
        <input type="submit" value="Zatwirdź">
      </form>
      FORMCOUNTPERSON;
    }

      if(!empty($_post['person'])){
        echo "<h3>Ilość osób w rodzinie; $_post[person]</h3>";
        echo <<< FORMCOUNTPERSON
        <form method="post">
        FORMCOUNTPERSON;
        for ($i=1; $i<= $_post['person']; $i++){
          echo '<input type="number" method="post" placeholder="wiek osoby nr"><br><br>';
        }
          echo <<< FORMCOUNTPERSON
            <input type="submit" value="Zatwirdź">
            </form>
          FORMCOUNTPERSON;
      }

     ?>

  </body>
</html>
