<?php


            $host = "127.0.0.1";
            $user = "alnw657";                     
            $pass = "";                                  
            $db = "db";                                  
            $port = 3306;                            
            
            $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
            
            // Escape user inputs for security
            $date_in = mysqli_real_escape_string($connection, $_REQUEST['date_in']);
            $date_out = mysqli_real_escape_string($connection, $_REQUEST['date_out']);
            $status = mysqli_real_escape_string($connection, $_REQUEST['status']);
         
            $adutls = mysqli_real_escape_string($connection, $_REQUEST['adutls']);
            $infants = mysqli_real_escape_string($connection, $_REQUEST['infants']);
            $children = mysqli_real_escape_string($connection, $_REQUEST['children']);
            
            
        

            $insertSql = "INSERT INTO Reservations (date_in, date_out, status, adutls, infants, children)
            VALUES ('$date_in', '$date_out', '$status', '$adutls', '$infants', '$children')";

            if (mysqli_query($connection, $insertSql)) {
                echo "New record created successfully";
            } 
            else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
            }

mysqli_close($connection);

?>