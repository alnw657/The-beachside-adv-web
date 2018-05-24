<html>
    
    
    <body>
        <?php include ('includes/header.php'); ?>
        <h1>Rooms</h1>
        

        <?php
            $host = "127.0.0.1";
            $user = "alnw657";                     //Your Cloud 9 username
            $pass = "";                                  //Remember, there is NO password by default!
            $db = "db";                                  //Your database name you want to connect to
            $port = 3306;                                //The port #. It is always 3306
            
            $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
        
        
        
            //And now to perform a simple query to make sure it's working
            $query = "SELECT * FROM Rooms";
            $result = mysqli_query($connection, $query);
        
            while ($row = mysqli_fetch_assoc($result)) { // for some reason is echo twice VERIFY 
                $roomName = $row['room_name']; 
                $roomId = $row['room_id'];
                
                
                echo("<div>$roomName $roomId</div>");
               //echo("<div>$roomId</div>");
                
                
               // echo "The ID is: " . $row['room_id'] . " and the name is: " . $row['room_name'];
            }
            
        ?>
        
        
    </body>
</html>