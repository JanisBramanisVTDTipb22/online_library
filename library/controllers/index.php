<?php

require "Database.php";
$config = require "config.php";

if(isset($_GET["id"]))
{
    $id = $_GET["id"];
    $params = [];
    if($id == "all")
    {
        $query = "SELECT * FROM books";
    }else if(is_numeric($id))
    {
        $id = $_GET["id"];
        $query = "SELECT * FROM books WHERE id=:id";
        $params = [":id" => $id];
    }else if($id != "meow")
    {
        if($id == "")
        {
            $query = "SELECT * FROM books"; 
        }else
        {
            echo "Not found " . $id;
            $query = "SELECT * FROM books"; 
        }
    }else
    {
        $query = "SELECT * FROM books"; 
    }
}

if(isset($_GET["writer_name"]))
{
    if($_GET["writer_name"] == "show_all" || $_GET["writer_name"] == ""){
        $writers = $_GET["writer_name"];
        $params = [];
        $query = "SELECT * FROM books";
    }else{
        $writers = $_GET["cat_name"];
        $params = [];
        $query = "SELECT * FROM books WHERE writer = :writer_name";
        $params = [":writer_name" => $writers];
    }
};

if(isset($query) || isset($params) ){
    $db = new DataBase($config);
    $books = $db->execute($query, $params)->fetchALL();
}else{
    $query = "SELECT * FROM books"; 
    $params = [];
    $db = new DataBase($config);
    $books = $db->execute($query, $params)->fetchALL();
}

$title = "NO!";
require "views/books/index.view.php";
?>