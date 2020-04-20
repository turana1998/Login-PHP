<?php


require_once "db.php";

$db = new DBConnection;

require_once "class.php";

$crud = new CRUD;
// setTimeout(function(){ alert("Hello"); 




// }, 3000);

if(isset($_POST["signin"])){
    // set_time_limit(10);
    $crud->Insert($_POST) ? header("Location:index.php?status=ok") : header("Location:index.php?status=no");
}

if(isset($_POST["login"])){
    $crud->adminLogin($_POST) ? header("Location:index.php?status=ok") : header("Location:index.php?status=no");
   // $crud->adminLogin($_POST) ? header("Location:admin.php") : header("Location:index.php?status=no");
    // $login=$crud->adminLogin($_POST);
    //echo $login["msg"];
    //print_r($_POST);
}

