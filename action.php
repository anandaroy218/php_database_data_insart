<?php
session_start();
include './env.php';

$post_title = trim($_POST["title"]); 
$post_description = trim($_POST["description"]); 
$post_author = trim($_POST["author"]);
$errors = [];


if (empty($post_title)){
    $errors ['title_error'] = 'Title Field is Requieed';
}else{

    if(strlen($post_title) > 60){
    $errors['title_error'] = 'text is thoo long';
    }
} 

if (empty ($post_description)){
    $errors ['description_error'] = 'description Field is Requieed';
}else{

if(strlen($post_description) > 600){
    $errors['description'] = 'text is thoo long';
}
} 

if (empty($post_author)){
    $errors ['author_error'] = 'author Field is Requieed';
}else{

    if(strlen($post_author) > 60){
    $errors['author_error'] = 'text is thoo long';
    }
} 




if(count($errors) > 0){
    $_SESSION = $errors;
    header('location: ./index.php');
} else {

   $query = "INSERT INTO post (title, description, author ) 
   VALUES ('$post_title' , '$post_description' , '$post_author')";

  mysqli_query($conn, $query);



}

?> 