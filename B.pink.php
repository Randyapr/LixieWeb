<!DOCTYPE html>
<html>

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="shipstyle.css">
     <title>Shipping</title>
</head>

<body>
     <div class="container">
          <header class="lixie-header">
               <div class="header-left">
                    <a href="#articxie">Articxie</a>
                    <a href="#category">Kategori</a>
                    <a href="#product">Produk</a>
               </div>
               <div class="header-center">
                    <a href="home"><img src="asset/Logo Lixie 1.png"></a>
               </div>
               <div class="header-right">
                    <a href="sign-in">Masuk</a>
                    <a href="search"><img src="asset/search.png"></a>
                    <a href="wishlist"><img src="asset/wishlist.png"></a>
                    <a href="cart"><img src="asset/cart.png"></a>
               </div>
          </header>
     </div>
     <div class="main-container">
          <div class="container-1">
               <h2>Lixie</h2>
               <div class="flow">
                    <div class="red-flow">
                         <a href="#checkout">Check Out > </a>
                         <a href="#information">Informasi > </a>
                    </div>
                    <div class="white-flow">
                         <a href="#shipping">Pengiriman > </a>
                         <a href="#payment">Pembayaran </a>
                    </div>
               </div>
               <?php
               include "koneksi.php";
               if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $emailOrPhone = $_POST["email_or_phone"];
                    $deliverMethod = $_POST["deliver_method"];
                    $shippingAddress = $_POST["shipping_address"];
                    $firstName = $_POST["firstname"];
                    $lastName = $_POST["lastname"];
                    $address = $_POST["address"];
                    $city = $_POST["city"];
                    $province = $_POST["province"];
                    $posCode = $_POST["pos_code"];
                    $whatsappNumber = $_POST["whatsapp_number"];
                    $totalPrice = $_POST["total_price"];
                    $createdAt = date("Y-m-d H:i:s");

                    $koneksi = mysqli_connect($host, $user, $pass, $db);

                    if (!$koneksi) {
                         die("Koneksi database gagal: " . mysqli_connect_error());
                    }

                    $sql = "INSERT INTO shipping (email_or_phone, deliver_method, shipping_address, firstname, lastname, address, city, province, pos_code, whatsapp_number, total_price, created_at) VALUES ('$emailOrPhone', '$deliverMethod', '$shippingAddress', '$firstName', '$lastName', '$address', '$city', '$province', '$posCode', '$whatsappNumber', '$totalPrice', '$createdAt')";
                    if (mysqli_query($koneksi, $sql)) {
                         echo "Silahkan Lanjut Ke Pengisian Form payment";
                         echo "<script>document.getElementById('input-form').style.display = 'none';</script>";
                    } else {
                         echo "Error: " . mysqli_error($koneksi);
                    }
                    mysqli_close($koneksi);
               }
               ?>
               <script>
               function submitForm() {
                    var form = document.getElementById("input-form");
                    form.submit();

                    // Buat objek FormData dan tambahkan data formulir
                    var formData = new FormData(form);

                    // Kirim permintaan POST ke halaman payment.php
                    fetch("payment.php", {
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
                              console.error("Error:", error);
                         });
               }
               </script>
               <form id="input-form" action="" method="post">
                    <div class="contact">
                         <h4>Kontak</h4>

                         <label for="email">Email atau nomor telepon</label><br>
                         <input type="text" name="email_or_phone"><br>
                    </div>
                    <div class="deliver-method">
                         <h4>Metode pengiriman</h4>
                         <div class="method-choice">
                              <input type="radio" id="deliver_ship" name="deliver_method" value="ship">
                              <label for="deliver_ship">Ship</label><br>
                              <input type="radio" id="deliver_pickup" name="deliver_method" value="pickup">
                              <label for="deliver_pickup">Take</label>
                         </div>
                    </div>
                    <div class="address">
                         <h4>Alamat pengiriman</h4>
                         <div class="form-input">
                              <label for="region">Negara/Region</label><br>
                              <input type="text" name="shipping_address">
                         </div>
                         <div class="form-input">
                              <div class="form-input-flex">
                                   <div class="first-name">
                                        <label for="firstname">Nama depan</label><br>
                                        <input type="text" name="firstname">
                                   </div>
                                   <div class="last-name">
                                        <label for="lastname">Nama belakang</label><br>
                                        <input type="text" name="lastname">
                                   </div>
                              </div>
                         </div>
                         <div class="form-input">
                              <label for="address-name">Alamat</label><br>
                              <input type="text" name="address">
                         </div>
                         <div class="form-input">
                              <label for="city-name">Kota</label><br>
                              <input type="text" name="city">
                         </div>
                         <div class="form-input">
                              <div class="form-input-flex">
                                   <div class="province">
                                        <label for="province-name">Provinsi</label><br>
                                        <input type="text" name="province">
                                   </div>
                                   <div class="pos-code">
                                        <label for="pos-code-num">Kode Pos</label><br>
                                        <input type="text" name="pos_code">
                                   </div>
                              </div>
                         </div>
                         <div class="form-input">
                              <label for="num-phone">Nomor telepon [WhatsApp]</label><br>
                              <input type="text" name="whatsapp_number">
                         </div>
                         <input type="hidden" name="total_price" value="<?php echo $totalPrice; ?>">
                         <input type="checkbox" name="news-offer">
                         <label for="news-offer">Kirimkan saya informasi dan penawaran</label>
                         <div class="nav-button">
                              <a href="CheckoutBasicBabyPink.php"> | Kembali ke checkout</a>
                              <button type="button" onclick="submitForm()">Input Address</button>
                         </div>
               </form>
          </div>
          <br>
          <div class="nav-button1">
               <a href="payment.php">
                    <button type="submit">Next To Payment</button>
               </a>
          </div>
     </div>

     <div class="wall"></div>
     <div class="container-2">
          <div class="product">
               <img src="asset/Basic Pink.png" alt="basic baby" width="239" height="268">
               <h3>Lixie T-Shirt Basic Baby Pink</h3>
          </div>
          <div class="discount-price">
               <input type="text">
               <button type="submit">Apply</button>
          </div>
          <?php
                include "koneksi.php";

                $productIDs = range(1, 100);

                $subtotal = 0;
                $total = 0;

                foreach ($productIDs as $productID) {
                    $sqlPrice = "SELECT price FROM checkout WHERE id = '$productID'";
                    $resultPrice = mysqli_query($koneksi, $sqlPrice);

                    if (mysqli_num_rows($resultPrice) > 0) {
                        $rowPrice = mysqli_fetch_assoc($resultPrice);
                        $price = $rowPrice['price'];

                        $subtotal += $price;
                    }
                }

                $sqlTotal = "SELECT SUM(total_price) AS total FROM checkout";
                $resultTotal = mysqli_query($koneksi, $sqlTotal);
                $rowTotal = mysqli_fetch_assoc($resultTotal);
                $total = $rowTotal['total'];

                mysqli_close($koneksi);
                ?>

          <div class="detail-price">
               <p>Subtotal................................................... Rp <?php echo $subtotal; ?></p>
               <p>Pengiriman.................................................. Gratis</p>
               <p>Total........................................................ Rp <?php echo $total; ?></p>
          </div>
     </div>
     </div>
     </div>
</body>

</html>