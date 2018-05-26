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
            $room_id = mysqli_real_escape_string($connection, $_REQUEST['room_id']);
            $adults = mysqli_real_escape_string($connection, $_REQUEST['adults']);
            $infants = mysqli_real_escape_string($connection, $_REQUEST['infants']);
            $children = mysqli_real_escape_string($connection, $_REQUEST['children']);
            $room_id = mysqli_real_escape_string($connection, $_REQUEST['room_id']);
            
            
        

            $insertSql = "INSERT INTO Reservations (date_in, date_out, adults, children , infants, room_id)
            VALUES ('$date_in', '$date_out', '$adults' , '$children', '$infants', '$room_id' )";

            if (mysqli_query($connection, $insertSql)) {
                echo "New record created successfully";
            }
            else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
            }

mysqli_close($connection);

?>