<!DOCTYPE html5>
<head>
</head>
<main>
  <header>
  </header>
  <body>
    <?php

    include 'config.php';
    include 'opendb.php';

    $sql= "SELECT item, price, description FROM menu";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

      while ($row = mysqli_fetch_assoc($result)) {
        echo "Item: " . $row["item"]. "<br>";
        echo "Price: " . $row["price"]. "<br>";
        echo "Description: " . $row["description"]. "<br><hr>";
      }

    }
      else {
        echo "0 results";
      }

      mysqli_close($conn);

    ?>
  </body>
  <footer>
  </footer>
</main>
