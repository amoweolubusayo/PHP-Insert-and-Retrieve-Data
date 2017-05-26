<?php

session_start();
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME','xplor');


class DB_connection
{   
    private $conn;
    function __construct(){
        $this->conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
        if(mysqli_connect_error()){
            echo "could not connect to db";
        }
    }
    public function insert($name,$email,$country){
        $result = mysqli_query($this->conn, "INSERT INTO register(name,email,country) VALUES('$name', '$email', '$country')");
        if($result){
            $_SESSION['insert'] = true;
            echo "<script>
                    alert('successful');
             </script>   
                     ";
        }else{
              echo "insert not successful:"  . mysqli_error($this->conn);
        }
        return $result;
    }
    public function select($country)
    {
        $country = mysqli_real_escape_string($this->conn, $country);
        $result = mysqli_query($this->conn ,"SELECT * FROM register where country = '$country'");
        $result = mysqli_fetch_all($result, MYSQL_ASSOC);
        if($result){
            $_SESSION['select'] = true;
        }
        return $result;
    }
}
?>
