
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center text-center px-5 py-5 my-5 ">
            <div class="col-6 shadow">
       
            <?php 
                    session_start();
                    if (isset($_SESSION['error_message'])){
                        echo "<div class=' alert alert-danger fs-5'>" .$_SESSION['error_message']. "</div>";
                    }
                    unset($_SESSION['error_message']);
            ?>

                <p class="fs-1"> <u>Sign Up page</u></p>
                <form action="process.php" method="post">
                    <input type="text" placeholder="First Name" name="firstName" class="form-control my-2">
                    <input type="text" placeholder="Last Name" name="lastName" class="form-control my-2">
                    <input type="email" placeholder="Email" name="email" class="form-control my-2">
                    <input type="password" placeholder="password" name="password" class="form-control my-2">
                    <input type="submit" name="submit" class="btn btn-dark w-100 my-2"> 
                </form>
            </div>

        </div>
    </div>
</body>
</html>