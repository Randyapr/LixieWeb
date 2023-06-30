<?php
include "koneksi.php";

$query = "SELECT * FROM produk";
$result = mysqli_query($koneksi, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $nama_produk = $row['nama_produk'];
    $harga_produk = $row['harga_produk'];
}

mysqli_close($koneksi);
?>

<!DOCTYPE html>
<html>

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="dashstyle.css" rel="stylesheet">
     <title>Dashboard</title>
</head>

<body>
     <div class="container">
          <header class="lixheader">
               <div class="header-left">
                    <a href="#articxie">Articxie</a>
                    <a href="#cattegory">Category</a>
                    <a href="#product">Product</a>
               </div>
               <div class="header-center">
                    <a href="Logo Lixie 1.png">
                         <img src="asset/Logo Lixie 1.png">
                    </a>
               </div>
               <div class="header-right">
                    <a href="#signin">Sign In</a>
                    <a href="#search" onclick="showSearch()">
                         <img src="asset/search.png">
                    </a>

                    <div id="searchContainer" style="display: none;">
                         <form action="hasil_pencarian.php" method="GET">
                              <input type="text" name="q" placeholder="Masukkan kata kunci pencarian">
                              <input type="submit" value="Cari">
                         </form>
                    </div>

                    <script>
                    function showSearch() {
                         var searchContainer = document.getElementById("searchContainer");
                         if (searchContainer.style.display === "none") {
                              searchContainer.style.display = "block";
                         } else {
                              searchContainer.style.display = "none";
                         }
                    }
                    </script>

                    </a>
                    <a href="#wishlist">
                         <img src="asset/bag-heart.png">
                    </a>
                    <a href="#cart">
                         <img src="asset/cart.png">
                    </a>
               </div>
          </header>
     </div>
     <div class="dashboard-photo">
          <img src="asset/Dasboard 1 1.png" alt width="1366">
     </div>
     <div class="container-1">
          <h3>New Arrival</h3>
          <div class="newarrival">
               <div class="shirt">
                    <a href="CheckoutBasicBabyPink.php">
                         <img src="asset/Basic Pink.png" alt width="340" height="471">
                    </a>
                    <p>Lixie T-Shirt Basic Pink Premium</p>
                    <p>Rp 125.000</p>
               </div>
               <div class="shirt">
                    <a href="checkoutSkythetacker.php">
                         <img src="asset/Scythtaker.png" alt width="340" height="471">
                    </a>
                    <p>Lixie T-Shirt Scythetaker Premium Oversize</p>
                    <p>Rp 150.000</p>
               </div>
               <div class="shirt">
                    <a href="checkoutBasicBlack.php">
                         <img src="asset/Basic Hitam.png" alt width="340" height="471">
                    </a>
                    <p>Lixie T-Shirt Basic Black Premium</p>
                    <p>Rp 125.000</p>
               </div>
          </div>
     </div>
     <div class="container-2">
          <h3>Best Seller</h3>
          <div class="best-seller">
               <div class="shirt">
                    <a href="checkoutEyeChild.php">
                         <img src="asset/eye child.png" alt width="340" height="471">
                    </a>
                    <p>Lixie T-Shirt Black Eye Child</p>
                    <p>Rp 135.000</p>
               </div>
               <div class="shirt">
                    <a href="checkoutEasyLife.php">
                         <img src="asset/Easy Life.png" alt width="340" height="471">
                    </a>
                    <p>Lixie T-Shirt Scythetaker Premium Oversize</p>
                    <p>Rp 135.000</p>
               </div>
          </div>
     </div>
     <div class="container-3">
          <h3>Series 1</h3>
          <div class="series">
               <div class="series-1">
                    <div class="articxie">
                         <a href="#eyechild">
                              <img src="asset/eye child logo.png" alt width="451" height="405">
                         </a>
                         <h3>Artixie 1 Eye Child</h3>
                    </div>
                    <div class="articxie">
                         <a href="#easylife">
                              <img src="asset/easy life logo.png" alt width="451" height="405">
                         </a>
                         <h3>Artixie 2 Easy Life</h3>
                    </div>
               </div>
               <div class="articxie3">
                    <a href="articxie3">
                         <img src="asset/artixie3.png" width="451" height="405">
                    </a>
                    <h3>Artixie 3</h3>
               </div>
          </div>
     </div>
     <div class="container-4">
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