


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
    
    
    set_include_path('/Applications/AMPPS/www/classes');
    include 'PHPExcel/IOFactory.php';
    
    // This is the file path to be uploaded.
    $inputFileName = 'tepe2.xls';
    
    try {
        $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
    } catch(Exception $e) {
        die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
    }
    
    $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
    $arrayCount = count($allDataInSheet);  // Here get total count of row in that Excel sheet
    
    $idempleado=1;
    $idempleadocreador=1;
    $idclinica=4;
    //3492
    for($i=3;$i<3946;$i++){
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
        
        
        $enero = trim($allDataInSheet[$i]["AF"]);
        $feb = trim($allDataInSheet[$i]["AG"]);
        $mar = trim($allDataInSheet[$i]["AH"]);
        $abr = trim($allDataInSheet[$i]["AI"]);
        $mayo = trim($allDataInSheet[$i]["AJ"]);
        $junio = trim($allDataInSheet[$i]["AK"]);
        $julio = trim($allDataInSheet[$i]["AL"]);
        $ago = trim($allDataInSheet[$i]["AM"]);
        $sept = trim($allDataInSheet[$i]["AN"]);
        $oct = trim($allDataInSheet[$i]["AO"]);
       $nov = trim($allDataInSheet[$i]["AP"]);
       // $dic = trim($allDataInSheet[$i]["R"]);
        
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
