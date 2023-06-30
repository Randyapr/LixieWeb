<!DOCTYPE html>
<html>

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="stylepayment.css">
     <title>Payment</title>
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
     <div class="main-container">
          <div class="container-1">
               <h2>Lixie</h2>
               <div class="flow">
                    <div class="red-flow">
                         <a href="#checkout">Check Out > </a>
                         <a href="#information">Information > </a>
                         <a href="#shipping">Shipping > </a>
                    </div>
                    <div class="white-flow">
                         <a href="#payment">Payment </a>
                    </div>
               </div>
               <form action="#">
                    <div class="detail-contact">
                         <div class="change">
                              <a>Contact <br></a>

                              <?php
                              include "koneksi.php";

                              $sqlContact = "SELECT whatsapp_number FROM shipping";
                              $resultContact = mysqli_query($koneksi, $sqlContact);
                              $rowContact = mysqli_fetch_assoc($resultContact);
                              $whatsappNumber = $rowContact['whatsapp_number'];

                              mysqli_close($koneksi);
                              ?>
                              <br>
                              <a class="margin-change" href="#change-contact"><?php echo $whatsappNumber; ?></a>
                         </div>
                         <hr>
                         <div class="change">
                              <a>Ship to</a>
                              <?php
                              include "koneksi.php";

                              $sqlAddress = "SELECT address FROM shipping";
                              $resultAddress = mysqli_query($koneksi, $sqlAddress);
                              $rowAddress = mysqli_fetch_assoc($resultAddress);
                              $Address = $rowAddress['address'];

                              mysqli_close($koneksi);
                              ?>
                              <br>
                              <br>
                              <a class="margin-change" href="#change-ship"><?php echo $Address; ?></a>
                         </div>
                    </div>
                    <div class="deliver-method">
                         <h4>Shipping method</h4>
                         <div class="sicepat">
                              <div class="flex-content">
                                   <div class="content-1">
                                        <h4>SiCepat Express</h4>
                                        <p>
                                             1 to 2 business days<br>
                                             Sending from: <br> NEW YORK to GARUT - USA
                                        </p>
                                   </div>
                                   <div class="content-2">
                                        <h4>Free</h4>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="nav-button">
                         <a href="CheckoutBasicBabyPink.php"> | Return to check out</a>
                         <button type="button" onclick="window.location.href='notif.php'">Continue </button>
                    </div>
               </form>

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
                    <p>Subtotal................................................... Rp <?php echo $price; ?></p>
                    <p>Shipping.................................................. Free</p>
                    <p>Total........................................................ Rp <?php echo $total; ?></p>
               </div>
          </div>
     </div>
     </div>
</body>

</html>