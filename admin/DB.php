<?php
class db{

    private $server;
    private $databasename;
    private $username;
    private $password;
    private $connection;

    function __construct(){
        $this->server= 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->databasename = 'cms';

    }

    function connect (){
        $this->connection = mysqli_connect($this->server, $this->username, $this->password, $this->databasename) or die('Error connecting to DB');        
    }

    function save($user_data){
        $this->connect();
        extract($user_data);
        $filename = $_FILES['image']['name'];
        $ftemp = $_FILES['image']['tmp_name'];
        
        if($this->get_user_data() == false){//data not found

            
            $sql = "INSERT INTO about_us VALUES(null, '$title','$description','$image')";
            $result = mysqli_query($this->connection, $sql);
            if($result == true){
                if($filename != null){
                    move_uploaded_file($ftemp,"images/$filename");
                    return true;
                }
            }else{
                return false;
            }

        }else{ 
            //update
            
            $sql = "UPDATE about_us SET about_title = '$title', about_description= '$description', about_image='$filename' WHERE true";
            $result = mysqli_query($this->connection, $sql);
            if ($result == true) {
                if ($filename != '') {
                    move_uploaded_file($ftemp, "images/$filename");
                    return true;
                }
            } else {
                return false;
            }

        }
    }
    
    function get_user_data(){
        $this->connect();
        $sql = "SELECT * FROM about_us ";
        $result = mysqli_query($this->connection, $sql);
        $row_num = mysqli_num_rows($result);
        if($row_num == 0){
            return false;
        }else{
            $row = mysqli_fetch_assoc($result);
            return $row;        
        }


    }

    //create teams
    function team($team){
        $this->connect();
        extract($team);
        $filename = $_FILES['image']['name'];
        $ftemp = $_FILES['image']['tmp_name'];
        $sql = "INSERT INTO employee VALUES(null, '$team_image','$name','$domain')";
        $result = mysqli_query($this->connection, $sql);
        if ($result == true) {
            if ($filename != '') {
                move_uploaded_file($ftemp, "images/$filename");
                return true;
            }
        } else {
            return false;
        }
    }




}//end of class




$db_object = new DB(); 


?>
