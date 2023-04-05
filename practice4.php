<html>
<head>
<title>Ethan B - EECS 348 Lab Seven</title>
  <style>
      body {
    background-color: rgb(38, 38, 38);
    color: white;
  }
  </style>
</head>
<body>

<table border="1">
    <tbody>
        
    <?php
        echo"<tr>";
        echo"<td></td>";

        for ($i = 0; $i < $_POST["size"]; $i++) {
            echo"<td>";
            echo $i + 1;
            echo"</td>";
        }

        echo"</tr>";


        for ($i = 0; $i < $_POST["size"]; $i++) {
            echo"<tr>";

                echo "<td>";
                echo $i + 1;
                echo "</td>";

            for ($j = 0; $j < $_POST["size"]; $j++) {
                echo "<td>";
                echo ($i + 1) * ($j + 1);
                echo "</td>";
            }
            echo"</tr>";
        }    
    ?>
    </tbody>
</table>


</body>

</html>