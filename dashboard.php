<?php
    session_start();
    require 'connection.php';
    //print_r($_SESSION['user_id']);
    $id=$_SESSION['user_id'];
    $query = "SELECT * FROM registration WHERE id =$id" ;
    $found = $connect->query($query);
    $user = $found->fetch_assoc();
    $firstname = $user['firstName']; 
    $lastname = $user['lastName']; 
    
    //FETCHING NOTE
    $query_note= "SELECT * FROM note WHERE user_id = $id";
    $found_note = $connect->query($query_note);
    $note = $found_note->fetch_all();
    // $note2 = $found_note->fetch_array();
    //print_r($found_note);
    echo "</br>";
    //print_r($note); echo"</br>";  
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center text-center my-5"> 
            <div class="col-5 shadow my-3 py-3">
            <?php
                  if (isset($_SESSION['response'])){
                        echo "<div class='alert alert-success fs-5'>" .$_SESSION['response']. "</div>";
                    }
                    unset($_SESSION['response']);
                    if (isset($_SESSION['response2'])){
                        echo "<div class='alert alert-danger fs-5'>" .$_SESSION['response2']. "</div>";
                    }
                    unset($_SESSION['response2']);
            ?>
                <h3> Welcome  <?php  echo $firstname. " ". $lastname ?> </h3>
                
                <h4 class="display-3"> <u>Create Note</u></h4>
                <form action="process.php" method="post" >
                    <input type="text" name="note_title" placeholder="Title" class="form-control my-2">
                    <textarea name="note_body" placeholder="Type Your Note Here" class="form-control my-2" > </textarea>
                    <input type="submit" name="note_submit" value="Save" class="btn w-100 btn-dark my-2">
                </form>
                
            </div>
            <div class="col-5 shadow  ">
                    <p class="display-4"> <b><u>Notes</u></b></p>
                    <?php 
                        // print_r($note);
                        foreach($note as $each ){
                            echo '</br>';
                            // print_r($each);
                            foreach($each as $key=>$value){
                                //echo "</br>";
                                echo   " " . $value;
                            }
                        }
                    ?>
            </div>
        </div>

    </div>
</body>
</html>