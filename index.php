<?php
include_once('partail/header.php'); 
include_once('partail/navbar.php');
//get each page
if (isset($_GET['page'])){

    if($_GET['page']=='dog'){
        include_once('pages/dog.php');
    }elseif ($_GET['page']=='contact'){
        include_once('pages/contact.php');
    }else{
        include_once('pages/home.php');
    }

}else{
    include_once('pages/home.php');
}
include_once('partail/footer.php'); 