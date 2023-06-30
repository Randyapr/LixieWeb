<?php
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT password FROM users WHERE email = ?";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        // cek pw
        $row = $result->fetch_assoc();
        $storedPassword = $row['password'];
        if (password_verify($password, $storedPassword)) {
            // Password sesuai,login pun lancar
            header('Location: Dashboard.php');
            exit;
        } else {
            // Password tidak sesuai, login pun gagal
            $error = "email or password invalid";
        }
    } else {
        // Email tidak ditemukan, login pun gagal gak beramal jadina
        $error = "email or password invalid";
    }
}

?>


<!DOCTYPE html>
<html>

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="StyleSign.css" rel="stylesheet">
     <title>SIGN IN</title>
</head>

<body>
     <div class="container">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
               <div class="close">
                    <button href="#close" type="button">X Close</button>
               </div>
               <h3 class="title-sign">Sign In</h3>
               <hr />
               <div class="input-form">
                    <label>Email address</label><br>
                    <input type="text" name="email" maxlength="25" required><br>
                    <label>Password</label><br>
                    <input type="password" name="password" required><br>
                    <?php if (isset($error)) { ?>
                    <div class="error-message"><?php echo $error; ?></div>
                    <?php } ?>
                    <div class="submit">
                         <button type="submit">Sign In</button>
                    </div>
               </div>
          </form>
          <div class="forgot">
               <a href="#forgot">Forgot your password?</a>
          </div>
          <div class="create">
               <div class="create-account">
                    <button type="button" onclick="window.location.href='Regis.php'">Create an Account</button>
               </div>
               <div class="sign-google">
                    <button href="google">
                         <ion-icon name="logo-google"></ion-icon> Sign in with Google Account
                    </button>
               </div>
          </div>
     </div>
     <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>