<!DOCTYPE html>
<html>

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="checkout.css">
     <title>CHECKOUT</title>
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
                    <a href="dashboard.php"><img src="asset/Logo Lixie 1.png"></a>
               </div>
               <div class="header-right">
                    <a href="sign-in">Sign In</a>
                    <a href="search"><img src="asset/search.png"></a>
                    <a href="wishlist"><img src="asset/wishlist.png"></a>
                    <a href="cart"><img src="asset/cart.png"></a>
               </div>
          </header>
     </div>

     <div class="checkout-success">
          <p>Checkout berhasil!</p>
     </div>
     
     <div class="container-1">
          <div class="product">
               <div class="product-shirt">
                    <img src="asset/Basic Pink.png" alt="">
               </div>
               <div class="product-shirt-1">
                    <img src="asset/Basic Pink Depan.png"><br>
                    <img src="asset/Basic Pink Belakang.png">
               </div>
               <div class="product-price">
                    <h3>Lixie T-Shirt Basic Baby Pink</h3>
                    <h4>Rp 135.000</h4>
                    <div class="checkout-product">
                         <?php
                         if ($_SERVER["REQUEST_METHOD"] == "POST") {
                              $quantity = $_POST["quantity"];
                              $size = $_POST["size"];
                              $productName = $_POST["nama_produk"];
                              $price = $_POST["price"];
                              $totalPrice = intval($price) * intval($quantity);
                              $host = "localhost";
                              $user = "root";
                              $pass = "";
                              $db = "lixie";

                              $koneksi = mysqli_connect($host, $user, $pass, $db);

                              if (!$koneksi) {
                                   die("Koneksi database gagal: " . mysqli_connect_error());
                              }
                              $sql = "INSERT INTO checkout (nama_produk, price, quantity, size, total_price) VALUES ('$productName', $price, '$quantity', '$size', $totalPrice)";
                              if (mysqli_query($koneksi, $sql)) {
                                   echo "Silahkan Lanjut Ke Pengisian Form Pengiriman";
                                   echo "<script>document.getElementById('checkout-form').style.display = 'none';</script>";
                              } else {
                                   echo "Checkout gagal. Silakan coba lagi.";
                              }

                              mysqli_close($koneksi);
                         }
                         ?>
                         <form id="checkout-form" action="" method="POST">
                              <label for="quantity">Total: </label><br>
                              <input type="number" name="quantity">
                              <input type="hidden" name="nama_produk" value="Lixie T-Shirt Basic Baby Pink">
                              <input type="hidden" name="price" value="135000">
                              <div class="size">
                                   <label for="size">Size: </label><br><br>
                                   <select name="size">
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                   </select>
                              </div>

                              <button type="button" onclick="submitForm()">Check Out</button>
                         </form>
                         <br>
                         <a href="B.pink.php">
                              <button type="submit">Next to Shipping</button>
                         </a>
                              

                         <script>
                         function submitForm() {
                              var form = document.getElementById("checkout-form");
                              form.submit();

                              // Buat objek FormData dan tambahkan data formulir
                              var formData = new FormData(form);

                              // Kirim permintaan POST ke halaman B.pink.php
                              fetch("B.pink.php", {
                                        method: "POST",
                                        body: formData
                                   })
                                   .then(response => response.text())
                                   .then(result => {
                                        // Tampilkan pesan atau lakukan tindakan lain setelah pemrosesan berhasil
                                        console.log(result);
                                   })
                                   .catch(error => {
                                        // Tangani kesalahan jika pemrosesan gagal
                                        console.error(error);
                                   });
                         }
                         </script>

                         <a href="#wishlist"><img src="asset/wishlist-mark.png" width="30" height="30"></a>
                         <a href="#share"><img src="asset/share.png" width="30" height="30"></a>
                    </div>

               </div>

          </div>
     </div>
     <div class="line-break">
          <hr>
     </div>
     <div class="container-2">
          <div class="description">
               <h3>Description</h3>
               <p>
                    💥T-Shirt Lixie Basic Baby💥<br>
                    T-Shirt Ini merupakan salah satu bagian dari Series 1 dan yang pertama di rilis oleh brand baru ini.
                    Yang dimana, Lixie ingin menawarkan salah satu pakaian terbaik dan berkualitas tinggi diantara Local
                    Brand Indonesia maupun non-Local. Dibuat dengan bahan cotton combed 24s dan nyaman untuk menemani
                    di setiap hari mu, dengan kualitas desain unik dan terbatas.<br><br>


                    Dapat-kan sekarang sebelum<br>
                    “The end of the f*ck1n9 future🤣”.<br><br>


                    Detail T-Shirt :<br>

                    -Warna Baby Pink<br>

                    -Material Cotton Combed 24s<br>

                    -Screen printing flocking (bagian depan Font) <br>

                    -Free include<br>

                    -Thank you card and stickers<br><br>



                    Don't forget tag us Instagram for outfit @lixie.co<br>

                    ---------------------------------------------------------<br><br>

                    💥Lixie Basic Baby T-Shirt💥<br>
                    This T-Shirt is part of Series 1 and the first one released by this new brand. Lixie aims to offer
                    one of the best and highest quality apparel among Indonesian local and non-local brands. Made with
                    24s combed cotton and comfortable to accompany you in your daily life.
                    every day, with unique and limited quality designs.<br><br>


                    Get it now before<br>
                    "The end of the f*ck1n9 future🤣".<br><br>


                    T-Shirt Details:<br>

                    -Black Color<br>

                    -24s Combed Cotton material<br>

                    -DTF screen printing<br><br>

                    Free include:<br>

                    -Thank you card and stickers<br><br>



                    Don't forget to tag us on Instagram for outfit @lixie.co
               </p>
          </div>
     </div>
     <div class="container-3">
          <footer class="foot-lixie">
               <div class="section">
                    <h5>CUSTOMER SERVICE</h5>
                    <a href="#contact-us">Contact Us</a>
               </div>
               <div class="section">
                    <h5>HELP</h5>
                    <a href="#ex-return">Exchanges & Returns</a>
                    <a href="#pay-information">Payment Information</a>
                    <a href="tra-your-order">Track Your Order</a>
               </div>
               <div class="section">
                    <h5>BUSINESS</h5>
                    <a href="#about-us">About Us</a>
                    <a href="#pop-up">Pop-up Store</a>
                    <a href="#news">News</a>
               </div>
               <div class="section-sign-up">
                    <h5>SIGN UP FOR OUR NEWSLETTER</h5>
                    <input type="text" name="input-email">
                    <button type="submit">SUBMIT</button>
               </div>
          </footer>
     </div>
</body>

</html>