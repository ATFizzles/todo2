<?php
    // require database file
    require_once(__DIR__ . "/../model/config.php");

    //require_once(__DIR__ . "/../model/date.php");


    
    
    // different from the other post(blog post)
    // this POST means that we're sending information/data or recive info
    $title    = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $post     = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
    $date = new DateTime("today");
    $time = new DateTime("America/Los_Angeles");

       
    // run query to insert things into the table
    // sql command starts off with an action/verb
    $query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");
    // use conditional statement to see if it's true or false
    // to see we are successful in inserting information into the database
    if($query){
        // if success it output with a title
        echo "<p>Successfully inserting post: $title</p>";
        echo "Posted on: " . $date->format('M/D/Y') . " at " . $time->format('g:i');
    }
    else {
        // if not successful display an error
        echo "<p>" . $_SESSION["connection"]->error . "</p>";
   }
    
    