<?php
class Database{
private $dbserver="localhost";
private $dbuser="pervej";
private $dbpassword="12345";
private $dbname="userdata";
protected $conn;

// constructor

public function __construct()
{

    try {
        $conn = new PDO("mysql:host=$this->dbserver;dbname=$this->dbname", $this->dbuser, $this->dbpassword);

        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // $sql = "INSERT INTO MyGuests (firstname, lastname, email)
        // VALUES ('John', 'Doe', 'john@example.com')";
        // use exec() because no results are returned
        // $conn->exec($sql);
        echo "New record created successfully";
      } catch(PDOException $e) {
        echo "Connection Error".$e->getMessage();
      }
    
      


      
 //$sql . "<br>" .

//  try{
//     $dsn="mysql:host={$this->dbserver} ; dbname={$this->dbname}; charset=utf8";
//    $options=array(PDO::ATTR_PERSISTENT);
//   $this->conn=new PDO($dsn,$this->dbuser,$this->dbpassword,$options);
  
// }catch(PDOException $e){ echo "Connection Error".$e->getMessage();
//    }


}

}
?>