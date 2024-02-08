<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body style="background-color: rgb(28, 29, 29);">
    <div class="container row sss" style="text-align: center; margin: auto; padding-top:10%;">
        <div class="col-12">
            <div class="scatola" style="padding: 3%;">
                
            
   <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "cinema_finale";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname, "3306");

      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }


      $codpro = $_POST['codpro'];


      $sql =

        "DELETE FROM proiezioni WHERE proiezioni.CodProiezione = $codpro";

      if ($conn->query($sql)) {
        if($conn->affected_rows == 0){
          echo "<h3>PROIEZIONE NON TROVATA</h3>";
      }else{
          echo "<h3>PROIEZIONE ELIMINATA CORRETTAMENTE</h3>";
      }
      }
      else {
        echo "<h1>ERRORE </h1>" . mysqli_error($conn);
      }
      $conn->close();

      echo "<br><a href=\"index.html\"> torna indietro </a>"
    ?>

    </div>
        </div>
        
    </div>
</body>
</html>
       

            

