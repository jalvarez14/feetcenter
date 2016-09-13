


<?php
    /************************ YOUR DATABASE CONNECTION START HERE   ****************************/
    
    define ("DB_HOST", "localhost"); // set database host
    define ("DB_USER", "feetcent_admin"); // set database user
    define ("DB_PASS","3TZ7dyGs"); // set database password
    define ("DB_NAME","feetcent_feetcenter"); // set database name
    
    $link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");
    $db = mysql_select_db(DB_NAME, $link) or die("Couldn't select database");
    
    $databasetable = "paciente";
     $fecharegistro= date("Y-m-d");
    /************************ YOUR DATABASE CONNECTION END HERE  ****************************/
    
    
   // set_include_path('/Applications/AMPPS/www/classes');
    require 'phpexcel/IOFactory.php';
    
    // This is the file path to be uploaded.
    $inputFileName = 'pabe2.xls';
    
    try {
        $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
    } catch(Exception $e) {
        die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
    }
    
    $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
    $arrayCount = count($allDataInSheet);  // Here get total count of row in that Excel sheet
    
    $idempleado=1;
    $idempleadocreador=1;
    $idclinica=3;
    
    for($i=3;$i<1699;$i++){
        $cliente = trim($allDataInSheet[$i]["B"]);
        $celular = trim($allDataInSheet[$i]["C"]);
        $telefono = trim($allDataInSheet[$i]["D"]);
        $idempleado = trim($allDataInSheet[$i]["F"]);
        
        
        $insertTable= mysql_query("insert into paciente (idclinica, idempleado, paciente_nombre, paciente_celular, paciente_telefono, paciente_fecharegistro) values(".$idclinica.",".$idempleado.",'".$cliente."', '".$celular."', '".$telefono."','".$fecharegistro."')");
        if(!$insertTable)
        {
            echo $cliente;
            
            die('Could not enter data 1 : ' . mysql_error());
            
        }
        
      
        echo "ID último".mysql_insert_id();
        $idpaciente =mysql_insert_id();
        
        
        $enero1 = trim($allDataInSheet[$i]["O"]);
        $feb1 = trim($allDataInSheet[$i]["P"]);
        $mar1 = trim($allDataInSheet[$i]["Q"]);
        $abr1 = trim($allDataInSheet[$i]["R"]);
        $mayo1 = trim($allDataInSheet[$i]["S"]);
        $junio1 = trim($allDataInSheet[$i]["T"]);
        $julio1 = trim($allDataInSheet[$i]["U"]);
        $ago1 = trim($allDataInSheet[$i]["V"]);
        $sept1 = trim($allDataInSheet[$i]["W"]);
        $oct1 = trim($allDataInSheet[$i]["X"]);
        $nov1 = trim($allDataInSheet[$i]["Y"]);
        $dic1 = trim($allDataInSheet[$i]["Z"]);

        
        $enero = trim($allDataInSheet[$i]["AA"]);
        $feb = trim($allDataInSheet[$i]["AB"]);
        $mar = trim($allDataInSheet[$i]["AC"]);
        $abr = trim($allDataInSheet[$i]["AD"]);
        $mayo = trim($allDataInSheet[$i]["AE"]);
        $junio = trim($allDataInSheet[$i]["AF"]);
        $julio = trim($allDataInSheet[$i]["AG"]);
        $ago = trim($allDataInSheet[$i]["AH"]);
        $sept = trim($allDataInSheet[$i]["AI"]);
        $oct = trim($allDataInSheet[$i]["AJ"]);
       $nov = trim($allDataInSheet[$i]["AK"]);
       // $dic = trim($allDataInSheet[$i]["R"]);
        //________
        
        if(strlen($enero1)>0)
        {
            $array = explode(",", $enero1);
            echo "<br><br>El número de elementos en el array es: " . count($array);
            $num=count($array);
            
            for($j=0;$j<$num;$j++)
            {
                $fecharaw="2014-01-".$array[$j]." 12:00:00";
                $timestamp = strtotime($fecharaw);
                $fecha= date("Y-m-d H:i:s", $timestamp);
                $insertTable= mysql_query("insert into visita (idclinica, idempleado,idempleadocreador, idpaciente, visita_tipo,visita_creadaen, visita_fechainicio, visita_fechafin, visita_status,visita_estatuspago, visita_total) values(".$idclinica.",".$idempleado.",".$idempleadocreador.",".$idpaciente.",'servicio', '".$fecha."','".$fecha."','".$fecha."','terminada','pagada',0)");
                if(!$insertTable)
                {
                    die('Could not enter data 2: ' . mysql_error());
                }
                
            }
        }
        if(strlen($feb1)>0)
        {
            $array = explode(",", $feb1);
            echo "<br><br>El número de elementos en el array es: " . count($array);
            $num=count($array);
            
            for($j=0;$j<$num;$j++)
            {
                $fecharaw="2014-02-".$array[$j]." 12:00:00";
                $timestamp = strtotime($fecharaw);
                $fecha= date("Y-m-d H:i:s", $timestamp);
                $insertTable= mysql_query("insert into visita (idclinica, idempleado,idempleadocreador, idpaciente, visita_tipo,visita_creadaen, visita_fechainicio, visita_fechafin, visita_status,visita_estatuspago, visita_total) values(".$idclinica.",".$idempleado.",".$idempleadocreador.",".$idpaciente.",'servicio', '".$fecha."','".$fecha."','".$fecha."','terminada','pagada',0)");
                if(!$insertTable)
                {
                    die('Could not enter data 2: ' . mysql_error());
                }
                
            }
        }
        if(strlen($mar1)>0)
        {
            $array = explode(",", $mar1);
            echo "<br><br>El número de elementos en el array es: " . count($array);
            $num=count($array);
            
            for($j=0;$j<$num;$j++)
            {
                $fecharaw="2014-03-".$array[$j]." 12:00:00";
                $timestamp = strtotime($fecharaw);
                $fecha= date("Y-m-d H:i:s", $timestamp);
                $insertTable= mysql_query("insert into visita (idclinica, idempleado,idempleadocreador, idpaciente, visita_tipo,visita_creadaen, visita_fechainicio, visita_fechafin, visita_status,visita_estatuspago, visita_total) values(".$idclinica.",".$idempleado.",".$idempleadocreador.",".$idpaciente.",'servicio', '".$fecha."','".$fecha."','".$fecha."','terminada','pagada',0)");
                if(!$insertTable)
                {
                    die('Could not enter data 2: ' . mysql_error());
                }
                
            }
        }
        
        if(strlen($abr1)>0)
        {
            $array = explode(",", $abr1);
            echo "<br><br>El número de elementos en el array es: " . count($array);
            $num=count($array);
            
            for($j=0;$j<$num;$j++)
            {
                $fecharaw="2014-04-".$array[$j]." 12:00:00";
                $timestamp = strtotime($fecharaw);
                $fecha= date("Y-m-d H:i:s", $timestamp);
                $insertTable= mysql_query("insert into visita (idclinica, idempleado,idempleadocreador, idpaciente, visita_tipo,visita_creadaen, visita_fechainicio, visita_fechafin, visita_status,visita_estatuspago, visita_total) values(".$idclinica.",".$idempleado.",".$idempleadocreador.",".$idpaciente.",'servicio', '".$fecha."','".$fecha."','".$fecha."','terminada','pagada',0)");
                if(!$insertTable)
                {
                    die('Could not enter data 2: ' . mysql_error());
                }
                
            }
        }
        
        if(strlen($mayo1)>0)
        {
            $array = explode(",", $mayo1);
            echo "<br><br>El número de elementos en el array es: " . count($array);
            $num=count($array);
            
            for($j=0;$j<$num;$j++)
            {
                $fecharaw="2014-05-".$array[$j]." 12:00:00";
                $timestamp = strtotime($fecharaw);
                $fecha= date("Y-m-d H:i:s", $timestamp);
                $insertTable= mysql_query("insert into visita (idclinica, idempleado,idempleadocreador, idpaciente, visita_tipo,visita_creadaen, visita_fechainicio, visita_fechafin, visita_status,visita_estatuspago, visita_total) values(".$idclinica.",".$idempleado.",".$idempleadocreador.",".$idpaciente.",'servicio', '".$fecha."','".$fecha."','".$fecha."','terminada','pagada',0)");
                if(!$insertTable)
                {
                    die('Could not enter data 2: ' . mysql_error());
                }
                
            }
        }
        
        if(strlen($junio1)>0)
        {
            $array = explode(",", $junio1);
            echo "<br><br>El número de elementos en el array es: " . count($array);
            $num=count($array);
            
            for($j=0;$j<$num;$j++)
            {
                $fecharaw="2014-06-".$array[$j]." 12:00:00";
                $timestamp = strtotime($fecharaw);
                $fecha= date("Y-m-d H:i:s", $timestamp);
                $insertTable= mysql_query("insert into visita (idclinica, idempleado,idempleadocreador, idpaciente, visita_tipo,visita_creadaen, visita_fechainicio, visita_fechafin, visita_status,visita_estatuspago, visita_total) values(".$idclinica.",".$idempleado.",".$idempleadocreador.",".$idpaciente.",'servicio', '".$fecha."','".$fecha."','".$fecha."','terminada','pagada',0)");
                if(!$insertTable)
                {
                    die('Could not enter data 2: ' . mysql_error());
                }
                
            }
        }
        
        
        if(strlen($julio1)>0)
        {
            $array = explode(",", $julio1);
            echo "<br><br>El número de elementos en el array es: " . count($array);
            $num=count($array);
            
            for($j=0;$j<$num;$j++)
            {
                $fecharaw="2014-07-".$array[$j]." 12:00:00";
                $timestamp = strtotime($fecharaw);
                $fecha= date("Y-m-d H:i:s", $timestamp);
                $insertTable= mysql_query("insert into visita (idclinica, idempleado,idempleadocreador, idpaciente, visita_tipo,visita_creadaen, visita_fechainicio, visita_fechafin, visita_status,visita_estatuspago, visita_total) values(".$idclinica.",".$idempleado.",".$idempleadocreador.",".$idpaciente.",'servicio', '".$fecha."','".$fecha."','".$fecha."','terminada','pagada',0)");
                if(!$insertTable)
                {
                    die('Could not enter data 2: ' . mysql_error());
                }
                
            }
        }
        
        
        if(strlen($ago1)>0)
        {
            $array = explode(",", $ago1);
            echo "<br><br>El número de elementos en el array es: " . count($array);
            $num=count($array);
            
            for($j=0;$j<$num;$j++)
            {
                $fecharaw="2014-08-".$array[$j]." 12:00:00";
                $timestamp = strtotime($fecharaw);
                $fecha= date("Y-m-d H:i:s", $timestamp);
                $insertTable= mysql_query("insert into visita (idclinica, idempleado,idempleadocreador, idpaciente, visita_tipo,visita_creadaen, visita_fechainicio, visita_fechafin, visita_status,visita_estatuspago, visita_total) values(".$idclinica.",".$idempleado.",".$idempleadocreador.",".$idpaciente.",'servicio', '".$fecha."','".$fecha."','".$fecha."','terminada','pagada',0)");
                if(!$insertTable)
                {
                    die('Could not enter data 2: ' . mysql_error());
                }
                
            }
        }
        
        
        if(strlen($sept1)>0)
        {
            $array = explode(",", $sept1);
            echo "<br><br>El número de elementos en el array es: " . count($array);
            $num=count($array);
            
            for($j=0;$j<$num;$j++)
            {
                $fecharaw="2014-09-".$array[$j]." 12:00:00";
                $timestamp = strtotime($fecharaw);
                $fecha= date("Y-m-d H:i:s", $timestamp);
                $insertTable= mysql_query("insert into visita (idclinica, idempleado,idempleadocreador, idpaciente, visita_tipo,visita_creadaen, visita_fechainicio, visita_fechafin, visita_status,visita_estatuspago, visita_total) values(".$idclinica.",".$idempleado.",".$idempleadocreador.",".$idpaciente.",'servicio', '".$fecha."','".$fecha."','".$fecha."','terminada','pagada',0)");
                if(!$insertTable)
                {
                    die('Could not enter data 2: ' . mysql_error());
                }
                
            }
        }
        
        
        if(strlen($oct1)>0)
        {
            $array = explode(",", $oct1);
            echo "<br><br>El número de elementos en el array es: " . count($array);
            $num=count($array);
            
            for($j=0;$j<$num;$j++)
            {
                $fecharaw="2014-10-".$array[$j]." 12:00:00";
                $timestamp = strtotime($fecharaw);
                $fecha= date("Y-m-d H:i:s", $timestamp);
                $insertTable= mysql_query("insert into visita (idclinica, idempleado,idempleadocreador, idpaciente, visita_tipo,visita_creadaen, visita_fechainicio, visita_fechafin, visita_status,visita_estatuspago, visita_total) values(".$idclinica.",".$idempleado.",".$idempleadocreador.",".$idpaciente.",'servicio', '".$fecha."','".$fecha."','".$fecha."','terminada','pagada',0)");
                if(!$insertTable)
                {
                    die('Could not enter data 2: ' . mysql_error());
                }
                
            }
        }
        
        
         if(strlen($nov1)>0)
         {
         $array = explode(",", $nov1);
         echo "<br><br>El número de elementos en el array es: " . count($array);
         $num=count($array);
         
         for($j=0;$j<$num;$j++)
         {
         $fecharaw="2014-11-".$array[$j]." 12:00:00";
         $timestamp = strtotime($fecharaw);
         $fecha= date("Y-m-d H:i:s", $timestamp);
         $insertTable= mysql_query("insert into visita (idclinica, idempleado,idempleadocreador, idpaciente, visita_tipo,visita_creadaen, visita_fechainicio, visita_fechafin, visita_status,visita_estatuspago, visita_total) values(".$idclinica.",".$idempleado.",".$idempleadocreador.",".$idpaciente.",'servicio', '".$fecha."','".$fecha."','".$fecha."','terminada','pagada',0)");
         if(!$insertTable)
         {
         die('Could not enter data 2: ' . mysql_error());
         }
         
         }
         }
         
         
         if(strlen($dic1)>0)
         {
         $array = explode(",", $dic1);
         echo "<br><br>El número de elementos en el array es: " . count($array);
         $num=count($array);
         
         for($j=0;$j<$num;$j++)
         {
         $fecharaw="2014-12-".$array[$j]." 12:00:00";
         $timestamp = strtotime($fecharaw);
         $fecha= date("Y-m-d H:i:s", $timestamp);
         $insertTable= mysql_query("insert into visita (idclinica, idempleado,idempleadocreador, idpaciente, visita_tipo,visita_creadaen, visita_fechainicio, visita_fechafin, visita_status,visita_estatuspago, visita_total) values(".$idclinica.",".$idempleado.",".$idempleadocreador.",".$idpaciente.",'servicio', '".$fecha."','".$fecha."','".$fecha."','terminada','pagada',0)");
         if(!$insertTable)
         {
         die('Could not enter data 2: ' . mysql_error());
         }
         
         }
         }
        

      //  ________
        
        if(strlen($enero)>0)
        {
            $array = explode(",", $enero);
            echo "<br><br>El número de elementos en el array es: " . count($array);
            $num=count($array);
            
            for($j=0;$j<$num;$j++)
            {
                $fecharaw="2015-01-".$array[$j]." 12:00:00";
                $timestamp = strtotime($fecharaw);
                $fecha= date("Y-m-d H:i:s", $timestamp);
                $insertTable= mysql_query("insert into visita (idclinica, idempleado,idempleadocreador, idpaciente, visita_tipo,visita_creadaen, visita_fechainicio, visita_fechafin, visita_status,visita_estatuspago, visita_total) values(".$idclinica.",".$idempleado.",".$idempleadocreador.",".$idpaciente.",'servicio', '".$fecha."','".$fecha."','".$fecha."','terminada','pagada',0)");
                if(!$insertTable)
                {
                    die('Could not enter data 2: ' . mysql_error());
                }

            }
        }
        if(strlen($feb)>0)
        {
            $array = explode(",", $feb);
            echo "<br><br>El número de elementos en el array es: " . count($array);
            $num=count($array);
            
            for($j=0;$j<$num;$j++)
            {
                $fecharaw="2015-02-".$array[$j]." 12:00:00";
                $timestamp = strtotime($fecharaw);
                $fecha= date("Y-m-d H:i:s", $timestamp);
                $insertTable= mysql_query("insert into visita (idclinica, idempleado,idempleadocreador, idpaciente, visita_tipo,visita_creadaen, visita_fechainicio, visita_fechafin, visita_status,visita_estatuspago, visita_total) values(".$idclinica.",".$idempleado.",".$idempleadocreador.",".$idpaciente.",'servicio', '".$fecha."','".$fecha."','".$fecha."','terminada','pagada',0)");
                if(!$insertTable)
                {
                    die('Could not enter data 2: ' . mysql_error());
                }
                
            }
        }
        if(strlen($mar)>0)
        {
            $array = explode(",", $mar);
            echo "<br><br>El número de elementos en el array es: " . count($array);
            $num=count($array);
            
            for($j=0;$j<$num;$j++)
            {
                $fecharaw="2015-03-".$array[$j]." 12:00:00";
                $timestamp = strtotime($fecharaw);
                $fecha= date("Y-m-d H:i:s", $timestamp);
                $insertTable= mysql_query("insert into visita (idclinica, idempleado,idempleadocreador, idpaciente, visita_tipo,visita_creadaen, visita_fechainicio, visita_fechafin, visita_status,visita_estatuspago, visita_total) values(".$idclinica.",".$idempleado.",".$idempleadocreador.",".$idpaciente.",'servicio', '".$fecha."','".$fecha."','".$fecha."','terminada','pagada',0)");
                if(!$insertTable)
                {
                    die('Could not enter data 2: ' . mysql_error());
                }
                
            }
        }
        
        if(strlen($abr)>0)
        {
            $array = explode(",", $abr);
            echo "<br><br>El número de elementos en el array es: " . count($array);
            $num=count($array);
            
            for($j=0;$j<$num;$j++)
            {
                $fecharaw="2015-04-".$array[$j]." 12:00:00";
                $timestamp = strtotime($fecharaw);
                $fecha= date("Y-m-d H:i:s", $timestamp);
                $insertTable= mysql_query("insert into visita (idclinica, idempleado,idempleadocreador, idpaciente, visita_tipo,visita_creadaen, visita_fechainicio, visita_fechafin, visita_status,visita_estatuspago, visita_total) values(".$idclinica.",".$idempleado.",".$idempleadocreador.",".$idpaciente.",'servicio', '".$fecha."','".$fecha."','".$fecha."','terminada','pagada',0)");
                if(!$insertTable)
                {
                    die('Could not enter data 2: ' . mysql_error());
                }
                
            }
        }
        
        if(strlen($mayo)>0)
        {
            $array = explode(",", $mayo);
            echo "<br><br>El número de elementos en el array es: " . count($array);
            $num=count($array);
            
            for($j=0;$j<$num;$j++)
            {
                $fecharaw="2015-05-".$array[$j]." 12:00:00";
                $timestamp = strtotime($fecharaw);
                $fecha= date("Y-m-d H:i:s", $timestamp);
                $insertTable= mysql_query("insert into visita (idclinica, idempleado,idempleadocreador, idpaciente, visita_tipo,visita_creadaen, visita_fechainicio, visita_fechafin, visita_status,visita_estatuspago, visita_total) values(".$idclinica.",".$idempleado.",".$idempleadocreador.",".$idpaciente.",'servicio', '".$fecha."','".$fecha."','".$fecha."','terminada','pagada',0)");
                if(!$insertTable)
                {
                    die('Could not enter data 2: ' . mysql_error());
                }
                
            }
        }
        
        if(strlen($junio)>0)
        {
            $array = explode(",", $junio);
            echo "<br><br>El número de elementos en el array es: " . count($array);
            $num=count($array);
            
            for($j=0;$j<$num;$j++)
            {
                $fecharaw="2015-06-".$array[$j]." 12:00:00";
                $timestamp = strtotime($fecharaw);
                $fecha= date("Y-m-d H:i:s", $timestamp);
                $insertTable= mysql_query("insert into visita (idclinica, idempleado,idempleadocreador, idpaciente, visita_tipo,visita_creadaen, visita_fechainicio, visita_fechafin, visita_status,visita_estatuspago, visita_total) values(".$idclinica.",".$idempleado.",".$idempleadocreador.",".$idpaciente.",'servicio', '".$fecha."','".$fecha."','".$fecha."','terminada','pagada',0)");
                if(!$insertTable)
                {
                    die('Could not enter data 2: ' . mysql_error());
                }
                
            }
        }
        
        
        if(strlen($julio)>0)
        {
            $array = explode(",", $julio);
            echo "<br><br>El número de elementos en el array es: " . count($array);
            $num=count($array);
            
            for($j=0;$j<$num;$j++)
            {
                $fecharaw="2015-07-".$array[$j]." 12:00:00";
                $timestamp = strtotime($fecharaw);
                $fecha= date("Y-m-d H:i:s", $timestamp);
                $insertTable= mysql_query("insert into visita (idclinica, idempleado,idempleadocreador, idpaciente, visita_tipo,visita_creadaen, visita_fechainicio, visita_fechafin, visita_status,visita_estatuspago, visita_total) values(".$idclinica.",".$idempleado.",".$idempleadocreador.",".$idpaciente.",'servicio', '".$fecha."','".$fecha."','".$fecha."','terminada','pagada',0)");
                if(!$insertTable)
                {
                    die('Could not enter data 2: ' . mysql_error());
                }
                
            }
        }
        
        
        if(strlen($ago)>0)
        {
            $array = explode(",", $ago);
            echo "<br><br>El número de elementos en el array es: " . count($array);
            $num=count($array);
            
            for($j=0;$j<$num;$j++)
            {
                $fecharaw="2015-08-".$array[$j]." 12:00:00";
                $timestamp = strtotime($fecharaw);
                $fecha= date("Y-m-d H:i:s", $timestamp);
                $insertTable= mysql_query("insert into visita (idclinica, idempleado,idempleadocreador, idpaciente, visita_tipo,visita_creadaen, visita_fechainicio, visita_fechafin, visita_status,visita_estatuspago, visita_total) values(".$idclinica.",".$idempleado.",".$idempleadocreador.",".$idpaciente.",'servicio', '".$fecha."','".$fecha."','".$fecha."','terminada','pagada',0)");
                if(!$insertTable)
                {
                    die('Could not enter data 2: ' . mysql_error());
                }
                
            }
        }
        
        
        if(strlen($sept)>0)
        {
            $array = explode(",", $sept);
            echo "<br><br>El número de elementos en el array es: " . count($array);
            $num=count($array);
            
            for($j=0;$j<$num;$j++)
            {
                $fecharaw="2015-09-".$array[$j]." 12:00:00";
                $timestamp = strtotime($fecharaw);
                $fecha= date("Y-m-d H:i:s", $timestamp);
                $insertTable= mysql_query("insert into visita (idclinica, idempleado,idempleadocreador, idpaciente, visita_tipo,visita_creadaen, visita_fechainicio, visita_fechafin, visita_status,visita_estatuspago, visita_total) values(".$idclinica.",".$idempleado.",".$idempleadocreador.",".$idpaciente.",'servicio', '".$fecha."','".$fecha."','".$fecha."','terminada','pagada',0)");
                if(!$insertTable)
                {
                    die('Could not enter data 2: ' . mysql_error());
                }
                
            }
        }
        
        
        if(strlen($oct)>0)
        {
            $array = explode(",", $oct);
            echo "<br><br>El número de elementos en el array es: " . count($array);
            $num=count($array);
            
            for($j=0;$j<$num;$j++)
            {
                $fecharaw="2015-10-".$array[$j]." 12:00:00";
                $timestamp = strtotime($fecharaw);
                $fecha= date("Y-m-d H:i:s", $timestamp);
                $insertTable= mysql_query("insert into visita (idclinica, idempleado,idempleadocreador, idpaciente, visita_tipo,visita_creadaen, visita_fechainicio, visita_fechafin, visita_status,visita_estatuspago, visita_total) values(".$idclinica.",".$idempleado.",".$idempleadocreador.",".$idpaciente.",'servicio', '".$fecha."','".$fecha."','".$fecha."','terminada','pagada',0)");
                if(!$insertTable)
                {
                    die('Could not enter data 2: ' . mysql_error());
                }
                
            }
        }
        
        
        if(strlen($nov)>0)
        {
            $array = explode(",", $nov);
            echo "<br><br>El número de elementos en el array es: " . count($array);
            $num=count($array);
            
            for($j=0;$j<$num;$j++)
            {
                $fecharaw="2015-11-".$array[$j]." 12:00:00";
                $timestamp = strtotime($fecharaw);
                $fecha= date("Y-m-d H:i:s", $timestamp);
                $insertTable= mysql_query("insert into visita (idclinica, idempleado,idempleadocreador, idpaciente, visita_tipo,visita_creadaen, visita_fechainicio, visita_fechafin, visita_status,visita_estatuspago, visita_total) values(".$idclinica.",".$idempleado.",".$idempleadocreador.",".$idpaciente.",'servicio', '".$fecha."','".$fecha."','".$fecha."','terminada','pagada',0)");
                if(!$insertTable)
                {
                    die('Could not enter data 2: ' . mysql_error());
                }
                
            }
        }
        
        /*
        if(strlen($dic)>0)
        {
            $array = explode(",", $dic);
            echo "<br><br>El número de elementos en el array es: " . count($array);
            $num=count($array);
            
            for($j=0;$j<$num;$j++)
            {
                $fecharaw="2015-12-".$array[$j]." 12:00:00";
                $timestamp = strtotime($fecharaw);
                $fecha= date("Y-m-d H:i:s", $timestamp);
                $insertTable= mysql_query("insert into visita (idclinica, idempleado,idempleadocreador, idpaciente, visita_tipo,visita_creadaen, visita_fechainicio, visita_fechafin, visita_status,visita_estatuspago, visita_total) values(".$idclinica.",".$idempleado.",".$idempleadocreador.",".$idpaciente.",'servicio', '".$fecha."','".$fecha."','".$fecha."','terminada','pagada',0)");
                if(!$insertTable)
                {
                    die('Could not enter data 2: ' . mysql_error());
                }
                
            }
        }
         */
        
    }

?>
