<?php
 require_once('../database.php');
 if(isset($_FILES['image'])){
    $imageName = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $folder = '../images/';
    move_uploaded_file($tmp_name, $folder.$imageName);
    createPost($_POST, $imageName);
    header('Location: http://localhost/project_php/?page=dog');

}else{
    echo "Fail";
}
