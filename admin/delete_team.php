<?php
$team_id= $_GET['id'];
require('DB.php');

if($db_object->delete_team($team_id)){
    header("location:team_view.php?msg=deleted");
}else{
    header("location:team_view.php?msg=Notdeleted");
}

if ($db_object->delete_gallary($team_id)) {
    header("location:view_projects.php?msg=deleted");
} else {
    header("location:view_projects.php?msg=Notdeleted");
}



?>