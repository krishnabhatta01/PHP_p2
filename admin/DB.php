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

    function get_team2()
    {
        $this->connect();
        $sql = "SELECT * FROM employee ";
        $result = mysqli_query($this->connection, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    function delete_team($id){
        $this->connect();
        $sql= "DELETE FROM employee WHERE id='$id' ";
        $result = mysqli_query($this->connection, $sql);
        //$row = mysqli_fetch_assoc($result);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    function save_galary($gallary){
        $this->connect();
        extract($gallary);
        $fn = $_FILES['image']['name'];
        $ftemp = $_FILES['image']['tmp_name'];
        $sql = "INSERT INTO gallary VALUES(null , '$title', '$fn')";
        $result = mysqli_query($this->connection, $sql);
        if($result){
            if($fn != ''){
                move_uploaded_file($ftemp,"images/$fn");
                return true;
            }

        }else{
            return false;
        }
    }

    function get_gallary(){
        $this->connect();
        $sql= "SELECT * FROM gallary";
        $result = mysqli_query($this->connection, $sql);

        $row_num = mysqli_num_rows($result);
        if ($row_num == 0) {
            return false;
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
            return $data;
        }
        
        
    }
    function delete_gallary($id){
        $this->connect();
        $sql = "DELETE  FROM gallary WHERE id='$id' ";
        $result = mysqli_query($this->connection, $sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }


    function create_blog($post,$file){
        $this->connect();
        extract($post);
        $fn = $_FILES['image']['name'];
        $ftemp = $_FILES['image']['tmp_name'];
        $sql = "INSERT INTO blog VALUES(null , '$title', '$description','$fn')";
        $result = mysqli_query($this->connection, $sql);
        if ($result) {
            if ($fn != '') {
                move_uploaded_file($ftemp, "images/$fn");
                return true;
            }
        } else {
            return false;
        }
    }
    function get_blog()
    {
        $this->connect();
        $sql = "SELECT * FROM blog";
        $result = mysqli_query($this->connection, $sql);
        $row_num = mysqli_num_rows($result);
        if ($row_num == 0) {
            return false;
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
            return $data;
        }
    }

    //Login
    function login($email,$password){
        $this->connect();

        $email = mysqli_real_escape_string($this->connection,$email);
        $password = mysqli_real_escape_string($this->connection, $password);
        $sql = "SELECT * FROM login WHERE email='$email' and password='$password' and id='1' ";
        $result = mysqli_query($this->connection, $sql);
        $no = mysqli_num_rows($result);
        if ($no == 1) {
            return true;
        } else {
            return false;
        }
    }


}//end of class




$db_object = new DB(); 


?>


