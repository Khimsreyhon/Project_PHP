<?php
    function database(){
        return new mysqli('localhost', 'root', '', 'dasana_shop');
    }
    function selectAllPost(){
        return database()->query("SELECT * FROM post ORDER BY post_id DESC");
    }
    function selectPost($id){
        return database()->query("SELECT * FROM post WHERE post_id = $id");

    }

    function createPost($value,$image){
        $name = $value['name'];
        // $image=$value['image'];
        $description=$value['description'];
        $price = $value['price'];
        $user_id=$value['user_id'];
        $category_id=$value['category_id'];
        return database()->query("INSERT INTO post(name,image,description,price,user_id,category_id) VALUES ('$name','$image','$description','$price','$user_id','$category_id')");
    }
    function deletPost($id){
        database()->query("DELETE FROM post WHERE post_id = $id");
        
    }

    function editPost($value){
        $name = $value['name'];
        $description=$value['description'];
        $price = $value['price'];
        $id = $value['PostId'];
        database()->query("UPDATE post SET name='$name',description='$description',price='$price' WHERE post_id = $id");
        header("Location: http://localhost/project_php/?page=dog"); 
    }


//search
function getAll(){
    return database()->query("SELECT * FROM post ORDER BY post_id DESC");
}
function getOne($id){
    return database()->query("SELECT * FROM post WHERE post_id=$id");
}
function seachByTitle($title){
    $name= $title['search'];
    return database()->query("SELECT * FROM post WHERE name LIKE '%$name%'");
}