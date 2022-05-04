<?php 
    session_start();
    include('connectDB.php');

    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $query = $connection->prepare("SELECT * FROM users WHERE email=:email");
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->execute();

        if ($query->rowCount() > 0) {
            echo '<p id="error_msg" class="error">This email are used</p>';
        }
        if ($query->rowCount() == 0) {
            $query = $connection->prepare("INSERT INTO users(username, password, email) VALUES (:username,:password_hash,:email)");
            $query->bindParam("username", $username, PDO::PARAM_STR);
            $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
            $query->bindParam("email", $email, PDO::PARAM_STR);
            $result = $query->execute();
            if ($result) {
                echo '<script toastr["success"]("My name is Inigo Montoya. You killed my father. Prepare to die!") </script>';
            } else {
                echo '<p id="error_msg" class="error">Неверные данные!</p>';
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700;800&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
    <div class="form">

        <form action="" method="post" name="signin-form" class="signin">
            <h1 class="form_caption">Регистрация</h1>
            <div class="form-element">
                <label for="username">Username:</label>
                <input  type="text" name="username" pattern="[a-zA-Z0-9]+" required>
            </div>

            <div class="form-element">
                <label for="email">Email:</label>
                <input  type="email" name="email" required>
            </div>
    
            <div class="form-element">
                <label for="password">Password:</label>
                <input  type="password" name="password" required>
            </div>                                                                                              
            <p class="login_link">Уже зарегистрированы? <a href="login.php">войти</a></p>
            <button type="submit" name="register" value="register">register</button>
        </form>
    </div>

    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-center",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>
</body>
</html>