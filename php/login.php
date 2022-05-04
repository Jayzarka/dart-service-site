<?php 
    session_start();
    include('connectDB.php');

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = $connection->prepare("SELECT * FROM users WHERE username=:username");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <link rel="stylesheet" href="style.css">
    <title>Sign in</title>
</head>
<body>
    <div class="form">
        <form action="" method="post" name="signin-form" class="signin">
        <h1 class="form_caption">Войти</h1>
            <div class="form-element">
                <label for="username">Username:</label>
                <input  type="text" name="username" pattern="[a-zA-Z0-9]+" required>
            </div>
    
            <div class="form-element">
                <label for="password">Password:</label>
                <input  type="password" name="password" required>
            </div>
    
            <p class="login_link">Еще не зарегистрированы? <a href="register.php">зарегистрироваться</a></p>
            <button id="login" type="submit" name="login" value="login">Log In</button>
        </form>
    </div>

    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-center",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "100",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }

        <? if (!$result) {
            echo 'toastr.info("Неверные пароль или имя пользователя!");';
        } else {
            if (password_verify($password, $result['password'])) {
                $_SESSION['user_id'] = $result['id'];
                $_SESSION['login'] = $result['username'];
                $_SESSION['logged'] = true;
                header('Location: ../index.php');
                exit;
            } else {
                echo 'toastr.info("Неверные пароль или имя пользователя!");';
            }
        }
        } ?>
    </script>
</body>
</html>