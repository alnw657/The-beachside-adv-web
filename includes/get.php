 <?php
   
   
        $host = "127.0.0.1";
            $user = "alnw657";                     
            $pass = "";                                  
            $db = "db";                                  
            $port = 3306;                            
            
            $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
   
        $room_id = $_GET['room_id'];
        $roomQuery = "SELECT room_id FROM 'Rooms'";
        
        
        // if(isset($_GET['room_id'])){
        //     echo $room_id;
        // }
        // else{
        //     echo "Error";
        // }
     
   
   ?>