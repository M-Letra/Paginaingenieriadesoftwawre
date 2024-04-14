 <?php 
        $hostName = "localhost";
        $userName = "root";
        $password = "";
        $databaseName = "registradora";
        try {
         $conn = new PDO("mysql:host=$hostName; dbname=$databaseName;", $userName, $password);
        } catch (PDOException $e) {
             die('Connection failed:' .$e->getMessage());        }
     ?>