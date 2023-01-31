<?php
session_start();
$err = "";
if (!empty($_SESSION['pass'])) {
    header('location:./home');
}
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $pass = $_POST['pass'];
    if ($id == 'naresh' && $pass == 'admin@123') {
        $_SESSION['pass'] = 'yes';
        header('location:./home');
        die();
    } else {
        $err = '<div class="alert alert-info my-2" role="alert">
        Wrong Details !
      </div>';
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(bg.jpg);">
    <section class="ftco-section" style="min-height: 100vh;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Olive Venture Partners</h2>
                    <!-- <h5 style="color: white">By Webly Technolab</h5> -->
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="signin-form">
                            <div class="form-group">
                                <input type="text" class="form-control" name="id" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" name="pass" class="form-control" placeholder="Password" required>
                            </div>
                            <br>
                            <?php echo $err; ?>
                            <div class="form-group">
                                <button type="submit" name="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>