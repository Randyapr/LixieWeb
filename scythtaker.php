<!DOCTYPE html>
<html lang="en">
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
                <a href="#category">Category</a>
                <a href="#product">Product</a>
            </div>
            <div class="header-center">
                <a href="home"><img src="Logo Lixie 1.png"></a>
            </div>
            <div class="header-right">
                <a href="sign-in">Sign In</a>
                <a href="search"><img src="search.png"></a>
                <a href="wishlist"><img src="wishlist.png"></a>
                <a href="cart"><img src="cart.png"></a>
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
                </div>
                <div class="white-flow">
                    <a href="#shipping">Shipping > </a>
                    <a href="#payment">Payment </a>
                </div>
            </div>
            <div class="contact">
                <h4>Contact</h4>
                <label for="email">Email or number phone</label><br>
                <input type="text" name="email"><br>
            </div>
            <div class="deliver-method">
                <h4>Deliver method</h4>
                <div class="method-choice">
                    <input type="radio" name="method" id="">
                    <label for="method">Ship</label><br>
                    <hr>
                    <input type="radio" name="method" id="">
                    <label for="method">Pick Up</label>
                </div>
            </div>
            <div class="address">
                <h4>Shipping address</h4>
                <form action="#">
                    <div class="form-input">
                        <label for="region">Country/Region</label><br>
                        <input type="text">
                    </div>
                    <div class="form-input">
                        <div class="form-input-flex">
                            <div class="first-name">
                                <label for="firstname">First name</label><br>
                                <input type="text" name="lastname">
                            </div>
                            <div class="last-name">
                                <label for="lastname">Last name</label><br>
                                <input type="text" name="lastname">
                            </div>
                        </div>
                    </div>
                    <div class="form-input">
                        <label for="address-name">Address</label><br>
                        <input type="text" name="address-name">
                    </div>
                    <div class="form-input">
                        <label for="city-name">City</label><br>
                        <input type="text" name="city-name">
                    </div>
                    <div class="form-input">
                        <div class="form-input-flex">
                            <div class="province">
                                <label for="province-name">Province</label><br>
                                <input type="text" name="province-name">
                            </div>
                            <div class="pos-code">
                                <label for="pos-code-num">Pos Code</label><br>
                                <input type="text" name="pos-code-num">
                            </div>
                        </div>
                    </div>
                    <div class="form-input">
                        <label for="num-phone">Number phone [Whatsapp] </label><br>
                        <input type="text" name="num-phone">
                    </div>
                    <input type="checkbox" name="news-offer">
                    <label for="news-offer">Text me with news and offer</label>
                    <div class="nav-button">
                        <a href="#checkout"> | Return to check out</a>
                        <button type="submit">Continue to shipping</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="wall"></div>
        <div class="container-2">
            <div class="product">
                <img src="Scythtaker.png" alt="basic baby" width="239" height="268">
                <h3>Lixie T-Shirt Basic Baby Pink</h3>
            </div>
            <div class="discount-price">
                <input type="text">
                <button type="submit">Apply</button>
            </div>
            <div class="detail-price">
                <p>Subtotal................................................... Rp 150.000</p>
                <p>Shipping.................................................. Free</p>
                <p>Total........................................................ Rp 150.000</p>
            </div>
        </div>
    </div>
</body>
</html>