<!DOCTYPE html5>
<head>
  <link href="menu.css" rel="stylesheet">
  <title>MinneSoda Fountain</title>
</head>
<main>
  <header>
    <image id="logo" src="logo.png">
      <h1>MinneSoda <br> Fountain</h1>
      <Nav>
        <button onclick="window.location.href = 'index.html';">Home</button>
        <button onclick="window.location.href = 'about.html';">About</button>
        <button onclick="window.location.href = 'menu.php';">Menu</button>
        <button onclick="window.location.href = 'contact.html';">Contact</button>
      </nav>
  </header>
  <body>
    <div id="left-col">
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
    </div>
    <div id="right-col"> -->
      <image id="menu" src="menu.jpg">
    </div>
  </body>
  <footer>
    <p>&#9400; Richard Wilmot</p>
  </footer>
</main>
