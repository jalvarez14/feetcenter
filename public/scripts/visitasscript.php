<?php
  
    /************************ YOUR DATABASE CONNECTION START HERE   ****************************/
    
    define ("DB_HOST", "localhost"); // set database host
    define ("DB_USER", "feetcent_admin"); // set database user
    define ("DB_PASS","3TZ7dyGs"); // set database password
    define ("DB_NAME","feetcent_feetcenter"); // set database name
    
    $link = mysqli_connect(DB_HOST, DB_USER, DB_PASS,DB_NAME) ;
    if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
   // $db = mysql_select_db(DB_NAME, $link) or die("Couldn't select database");
    
    $databasetable = "visita";
    /************************ YOUR DATABASE CONNECTION END HERE  ****************************/
    
    
    $sql = "SELECT idvisita, year(visita_fechainicio), month(visita_fechainicio),dayofmonth(visita_fechainicio) FROM visita where 1";
    $result = mysqli_query($link, $sql);
    
    if (mysqli_num_rows($result) > 0)
    {
        // output data of each row
        while($row = mysqli_fetch_assoc($result))
        {
            echo "id: " . $row["year(visita_fechainicio)"]. " - Name: " . $row["month(visita_fechainicio)"]. "<br>";
            $anio =$row["year(visita_fechainicio)"];
             $mes =$row["month(visita_fechainicio)"];
            $day =$row["dayofmonth(visita_fechainicio)"];
            
           $sql2 = "UPDATE visita SET visita_year=" .$anio . ", visita_month=" . $mes. ", visita_day=" . $day. " WHERE idvisita=" . $row["idvisita"];
            
            if ($link->query($sql2) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $conn->error;
            }
        
            
        }
    }
    else
    {
        echo "0 results";
    }
    
    mysqli_close($conn);


?>
