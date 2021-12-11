<!DOCTYPE HTML>  
<html>
<head>
<title>Project LAMP</title>
<style>
    body {
        background-color: #f0f0f0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        overflow: hidden;
    }
    h1{
        color: gray;
        font-family: arial;
    }
    table{
      width: 600px !important;
      text-align: left !important;
      
    }
    .th{
      border: 1px solid #000 !important;
      padding: 20px;
      }
</style>
</head>
<body>  

<div>
  <h1>STUDENT LIST (GROUP 5 - LAMP)</h1>
    <?php
    $servername = "localhost";
    $database = "lamp_project";
    $username = "root";
    $password = "2002";
    // Create connection
    $conn = new mysqli($servername, $username, $password,$database);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM class";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      echo "<table><tr><th class='th'>ID</th><th class='th'>Name</th><th class='th'>Sex</th><th class='th'>Class</th></tr>";
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<tr><td class='th'>".$row["id"]."</td><td class='th'>".$row["name"]."</td><td class='th'>".$row["sex"]."</td><td class='th'> ".$row["class"]."</td></tr>";
      }
      echo "</table>";
    } else {
      echo "0 results";
    }
    $conn->close();
    ?>
</div>
</body> 