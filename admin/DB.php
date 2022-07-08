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

            
            $sql = "INSERT INTO about_us VALUES(null, '$title','$description','$fn')";
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
    function team($team,$image_data){
        $this->connect();
        extract($team);
        $fn = $_FILES['team_image']['name'];
        $ftemp = $_FILES['team_image']['tmp_name'];
        $sql = "INSERT INTO employee VALUES(null, '$fn','$name','$domain')";
        $result = mysqli_query($this->connection, $sql);
        if ($result == true) {
            if ($fn != "") {
                move_uploaded_file($ftemp, "images/$fn");
                return true;
            }
        } else {
            return false;
        }
    }

    function get_team()
    {
        $this->connect();
        $sql = "SELECT * FROM employee ";
        $result = mysqli_query($this->connection, $sql);
        $row_num = mysqli_num_rows($result);
        if ($row_num == 0) {
            return false;
        } else {
            while($row = mysqli_fetch_assoc($result)){
                $data[]=$row;
            }
            return $data;
        }
    }

    function save_galary($gallary){
        $this->connect();
        extract($gallary);
        $fn = $_FILES['gallary_image']['name'];
        $temp_name = $_FILES['gallary_image']['tmp_name'];
        $sql = "INSERT INTO gallary VALUES(null , '$title', '$fn')";
        $result = mysqli_query($this->connection, $sql);
        if($result){
            if($fn != ''){
                move_uploaded_file($temp_name,"images/$fn");
                return true;
            }

        }else{
            return false;
        }
    }


}//end of class




$db_object = new DB(); 


?>
