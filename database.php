<?php                                                              define('HOST','localhost');
        define('DB_NAME','siteweb');
        define('USER','root');
        define('PASS','1234jojo');

        try{                                                               $db = new PDO("mysql:host=" . HOST . "; dbname=" .DB_NAME, USER, PASS);
                echo "Connect > OK !";
        }catch(PDOException $e){
        echo $e;
        }

?>
