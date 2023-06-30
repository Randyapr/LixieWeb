<?php
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);


    $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("ssss", $firstName, $lastName, $email, $hashedPassword);

    if ($stmt->execute()) {
        header('Location: Sign.php');
        exit;
    } else {
        header('Location: Regis.php?error=1');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="styleRegis.css" rel="stylesheet">
     <title>CREATE ACCOUNT</title>
</head>

<body>
     <div class="container">
          <header class="lixie-header">
               <div class="header-left">
                    <a href="#articxie">Articxie</a>
                    <a href="#category">Category</a>
                    <a href="#product">Product</a>
               </div>
               <div class="header-center">
                    <a href="home"><img src="asset/Logo Lixie 1.png"></a>
               </div>
               <div class="header-right">
                    <a href="sign-in">Sign In</a>
                    <a href="search"><img src="asset/search.png"></a>
                    <a href="wishlist"><img src="asset/wishlist.png"></a>
                    <a href="cart"><img src="asset/cart.png"></a>
               </div>
          </header>
     </div>
     <div class="container-1">
          <div class="head-create">
               <h3>CREATE NEW ACCOUNT CUSTOMER</h3>
          </div>
          <div class="input-form">
               <form method="POST" action="Regis.php">
                    <div class="input-text">
                         <label for="first-name">First Name</label><br>
                         <input type="text" name="first-name" required><br>
                    </div>
                    <div class="input-text">
                         <label for="last-name">Last Name</label><br>
                         <input type="text" name="last-name" required><br>
                    </div>
                    <div class="input-text">
                         <label for="email">Your Email Address</label><br>
                         <input type="text" name="email" required><br>
                    </div>
                    <div class="input-text">
                         <label for="password">Create Password</label><br>
                         <input type="password" name="password" required>
                    </div>
                    <br />
                    <br />
                    <div class="agree-box">
                         <input type="checkbox" name="agree">
                         <label for="agree">I agree with the terms and conditions</label><br>
                    </div>
                    <button type="submit">Create An Account</button>
               </form>
          </div>
     </div>
</body>

</html>