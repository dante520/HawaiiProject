<?php
$objetivo = 1200;
$servername = "127.0.0.1";
// Create connection
$conn = new mysqli($servername, "root", "", "test");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/5b7935d620.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css" />
    <link rel="stylesheet" type="text/css" href="nav.css" />
    <link rel="stylesheet" type="text/css" href="Hawaii.css" />
    <title>Document</title>
</head>
<body>
    <!-- nav bar -->
    <div class="nav2">
        <p class="icon">Family projects</p>
    </div>
    <div class="nav">
        <div class="nav-extension">
            <a href="home.html" class="nav-item">Home</a>
            <a href="Projects.html" class="nav-item">Projects</a>
            <a href="About Us.html" class="nav-item">About Us</a>
            <p class="bottom-text"><i class="fa-regular fa-copyright"></i> copyright 2023 Dante & Miguel Castillo</p>
        </div>
    </div>
    <div class="Hawaii-img">
        <img src="imagen nosotros.jfif" alt="hotel hawaii" width="25%" height="25%">
        <p class="alt-hawaii">test</p>
    </div>
    <div class="form-hawaii-wrapper">
        <form action="hawaii.php" method="post">
            <p class="form-element"> ingresa transacion:</p>
            <br>
            <input type="number" name="ahorro" id="ahorro" class="form-element" placeholder="dinero ahorrado" required>
            <br>
            <input type="text" name="name" id="name" class="form-element" placeholder="nombre" required>
            <br>
            <button>ingresar ahorro</button onclick="enviar()">
        </form>
    </div>
    <tablet class="tableta" style="padding-left: 1000px;">
        <tr class="tableta">
            <td style="border: 1px solid black;">id </td>
            <td style="border: 1px solid black;">nombre     </td>
            <td style="border: 1px solid black;">dinero </td>
            <td style="border: 1px solid black;">fecha  </td>
            <br>
        </tr>
        <?php
        $sql="SELECT * from puebra";
        $result=mysqli_query($conn,$sql);
        while ($mostrar = mysqli_fetch_array($result)) {
            ?>
        <tr class="tableta">
            <td class="tableta" style="padding-left: 1000px; border: 1px solid black;"><?php echo "<td>$mostrar['id']</td>"; ?></td>
            <td class="tableta" style="padding-left: 1000px; border: 1px solid black;"> <?php echo $ostmrar['nombre']; ?></td>
            <td class="tableta" style="padding-left: 1000px; border: 1px solid black;"> <?php echo $mostrar['dinero'];?>$ </td>
            <td class="tableta" style="padding-left: 1000px; border: 1px solid black;"><?php echo $mostrar['fecha']; ?></td>
            <br>
        </tr>
        <?php } ?>
    </tablet>
</body>
</html>

<?php
    function enviar() {
        $objetivo = 1200;
        $servername = "127.0.0.1";
        // Create connection
        $conn = new mysqli($servername, "root", "", "test");
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        $ahorro = $_POST["ahorro"];
        $nombre = $_POST["name"];
        $sql = "INSERT INTO puebra (nombre, dinero)
        VALUES ('$nombre', '$ahorro')";
        mysqli_query($conn, $sql);
    }
?>
