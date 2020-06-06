<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title?></title>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="description" content="Interactive Website">
    <meta name="author" content="Nazmul Hussain">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <!-- <link rel="icon" href="favicon.png"> -->
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&display=swap" rel="stylesheet">
    <!-- CSS Links -->
    <link rel="stylesheet" href="site/Assets/css/slick.min.css">
    <link rel="stylesheet" href="site/Assets/css/app.css">
    <link rel="stylesheet" href="site/Assets/css/style.css">
    
    <!-- Modernizr JS -->
    <script src="site/Assets/js/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
         your browser</a> to improve your experience.
      </p>
      <![endif]-->
    <!-- Preloader -->
    <div class="spinner-area" id="preloader">
        <div class="spinner"></div>
    </div>
    <!-- ./Preloader -->
    
    

    <!-- ===============================Chat Icon=================== -->
    <div class="chat-icon">
        <!-- Button -->
        <button data-open="shopping" aria-controls="shopping" aria-haspopup="true" tabindex="0">
            <img src="site/Assets/img/message.svg" alt="chat">
        </button>
        <!-- Modal Content -->
        <div class="reveal shopping-area" id="shopping" data-reveal>
            <div class="shopping-title">
                <h2>Hey, I’m Sandy! <br>
                    I’m here to help you today.</h2>
                <h4>Let’s get started!</h4>
                <h4>Can you please provide your delivery address?</h4>
            </div>
            <div class="shopping-form">
                <form action="#">
                    <div class="shopping-address-form">
                        <input type="text" placeholder="Your delivery address">
                    </div>
                    <button type="submit">Continue Shopping</button>
                </form>
            </div>
            <button class="close-button" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true"><img src="site/Assets/img/cross.png" alt="cross"></span>
            </button>
        </div>
    </div>
    <!-- =============================== Main =============================== -->
    <main id="main" class="panel">
        <!-- Mobile Menu Open Icon -->
        <div class="panel-header">
            <button class="btn-hamburger js-slideout-toggle">
                <img src="site/Assets/img/bars.svg" alt="menu">
            </button>
            <!-- Cart Mobile -->
            <div class="cart cart-mobile">
                <a href="#">
                    <img class="inactive" src="site/Assets/img/cart.svg" alt="cart">
                    <img class="active" src="site/Assets/img/cart-active.svg" alt="cart">
                </a>
                <!-- Cart -->
                <div class="cart-popup-area">
                    <!-- Popup -->
                    <div class="cart-popup">
                        <!-- Cart Top -->
                        <div class="cart-popup-top">
                            <!-- Single -->
                            <div class="cart-popup-single">
                                <div class="cart-popup-left">
                                    <div class="cart-popup-left-img">
                                        <img src="site/Assets/img/cart-popup.png" alt="product">
                                    </div>
                                    <div class="cart-popup-left-btn">
                                        <h3>River Sand</h3>
                                        <div class="cart-popup-btns">
                                            <form>
                                                <input class="cp-minus" type="button" onclick="if(this.form.name.value>0){this.form.name.value--};">
                                                <input class="cp-input-box" type="text" name="name" value="7" onchange="if(this.value<0){this.value=0}" />
                                                <input class="cp-plus" type="button" onclick="if(this.form.name.value>=0){this.form.name.value++;}">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-popup-right">
                                    <div class="cart-popup-right-amount">
                                        <h2>$250</h2>
                                    </div>
                                    <div class="cart-popup-right-del">
                                        <img src="site/Assets/img/cart-popup-del.png" alt="delete">
                                    </div>
                                </div>
                            </div>
                            <!-- Single -->
                            <div class="cart-popup-single">
                                <div class="cart-popup-left">
                                    <div class="cart-popup-left-img">
                                        <img src="site/Assets/img/cart-popup-2.png" alt="product">
                                    </div>
                                    <div class="cart-popup-left-btn">
                                        <h3>Masonry Sand</h3>
                                        <div class="cart-popup-btns">
                                            <form>
                                                <input class="cp-minus" type="button" onclick="if(this.form.name.value>0){this.form.name.value--};">
                                                <input class="cp-input-box" type="text" name="name" value="7" onchange="if(this.value<0){this.value=0}" />
                                                <input class="cp-plus" type="button" onclick="if(this.form.name.value>=0){this.form.name.value++;}">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-popup-right">
                                    <div class="cart-popup-right-amount">
                                        <h2>$250</h2>
                                    </div>
                                    <div class="cart-popup-right-del">
                                        <img src="site/Assets/img/cart-popup-del.png" alt="delete">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Cost -->
                        <div class="cart-popup-cost">
                            <table>
                                <tr>
                                    <td>Material Cost</td>
                                    <td>$12.500</td>
                                </tr>
                                <tr>
                                    <td>Sales Taxes</td>
                                    <td>$0.00</td>
                                </tr>
                                <tr>
                                    <td>Subtotal</td>
                                    <td>$12.500</td>
                                </tr>
                            </table>
                        </div>
                        <!-- Total -->
                        <div class="cart-popup-total">
                            <table>
                                <tr>
                                    <td>Delivery cost (2 trucks)</td>
                                    <td>$95.00</td>
                                </tr>
                            </table>
                        </div>
                        <!--  Pay -->
                        <div class="cart-popup-pay">
                            <table>
                                <tr>
                                    <td>Total (to pay)</td>
                                    <td>$12.595</td>
                                </tr>
                            </table>
                        </div>
                        <!-- Checkout -->
                        <div class="cart-popup-checkout">
                            <div class="cart-popup-checkout-left">
                                <a href="#">Checkout</a>
                            </div>
                            <div class="cart-popup-checkout-right">
                                <button>Save Quote</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-logo">
                <a href="#"><img src="site/Assets/img/logo.png" alt="logo"></a>
            </div>
        </div>
        <!-- ===============================Header Area=================== -->
        <div class="header-area">
            <div class="grid-container">
                <div class="grid-x grid-margin-x">
                    <div class="cell small-12">
                        <!-- Header -->
                        <div class="header">
                            <!-- logo -->
                            <div class="logo">
                                <a href="./">
                                    <img src="site/Assets/img/logo.png" alt="logo">
                                </a>
                            </div>
                            <!-- Menu -->
                            <nav class="menu">
                                <ul>
                                    <li><a href="./">Home</a></li>
                                    <li><a href="about">About</a></li>
                                    <li><a href="products">Products</a></li>
                                    <li><a href="services">Services</a></li>
                                    <li><a href="Contact">Contact</a></li>
                                    <li><a href="DIY">DIY</a></li>
                                    <li class="cart">
                                        <a href="#">
                                            <img class="inactive" src="site/Assets/img/cart.svg" alt="cart">
                                            <img class="active" src="site/Assets/img/cart-active.svg" alt="cart">
                                        </a>
                                        <!-- Cart -->
                                        <div class="cart-popup-area">
                                            <!-- Popup -->
                                            <div class="cart-popup">
                                                <!-- Cart Top -->
                                                <div class="cart-popup-top">
                                                    <!-- Single -->
                                                    <div class="cart-popup-single">
                                                        <div class="cart-popup-left">
                                                            <div class="cart-popup-left-img">
                                                                <img src="site/Assets/img/cart-popup.png" alt="product">
                                                            </div>
                                                            <div class="cart-popup-left-btn">
                                                                <h3>River Sand</h3>
                                                                <div class="cart-popup-btns">
                                                                    <form>
                                                                        <input class="cp-minus" type="button" onclick="if(this.form.name.value>0){this.form.name.value--};">
                                                                        <input class="cp-input-box" type="text" name="name" value="7" onchange="if(this.value<0){this.value=0}" />
                                                                        <input class="cp-plus" type="button" onclick="if(this.form.name.value>=0){this.form.name.value++;}">
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cart-popup-right">
                                                            <div class="cart-popup-right-amount">
                                                                <h2>$250</h2>
                                                            </div>
                                                            <div class="cart-popup-right-del">
                                                                <img src="site/Assets/img/cart-popup-del.png" alt="delete">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single -->
                                                    <div class="cart-popup-single">
                                                        <div class="cart-popup-left">
                                                            <div class="cart-popup-left-img">
                                                                <img src="site/Assets/img/cart-popup-2.png" alt="product">
                                                            </div>
                                                            <div class="cart-popup-left-btn">
                                                                <h3>Masonry Sand</h3>
                                                                <div class="cart-popup-btns">
                                                                    <form>
                                                                        <input class="cp-minus" type="button" onclick="if(this.form.name.value>0){this.form.name.value--};">
                                                                        <input class="cp-input-box" type="text" name="name" value="7" onchange="if(this.value<0){this.value=0}" />
                                                                        <input class="cp-plus" type="button" onclick="if(this.form.name.value>=0){this.form.name.value++;}">
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cart-popup-right">
                                                            <div class="cart-popup-right-amount">
                                                                <h2>$250</h2>
                                                            </div>
                                                            <div class="cart-popup-right-del">
                                                                <img src="site/Assets/img/cart-popup-del.png" alt="delete">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Cost -->
                                                <div class="cart-popup-cost">
                                                    <table>
                                                        <tr>
                                                            <td>Material Cost</td>
                                                            <td>$12.500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sales Taxes</td>
                                                            <td>$0.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Subtotal</td>
                                                            <td>$12.500</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <!-- Total -->
                                                <div class="cart-popup-total">
                                                    <table>
                                                        <tr>
                                                            <td>Delivery cost (2 trucks)</td>
                                                            <td>$95.00</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <!--  Pay -->
                                                <div class="cart-popup-pay">
                                                    <table>
                                                        <tr>
                                                            <td>Total (to pay)</td>
                                                            <td>$12.595</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <!-- Checkout -->
                                                <div class="cart-popup-checkout">
                                                    <div class="cart-popup-checkout-left">
                                                        <a href="#">Checkout</a>
                                                    </div>
                                                    <div class="cart-popup-checkout-right">
                                                        <button>Save Quote</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="my-account">
                                        <a href="#" data-open="loginModal">My Account</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================ Modal Area ===================== -->
        <!-- ============================Login Modal ============================ -->
        <div class="reveal register-area" id="loginModal" data-reveal>
            <div class="register-logo">
                <a href="#"><img src="site/Assets/img/logo.png" alt="logo"></a>
            </div>
            <div class="register-title">
                <h2>Register and create <br>
                    your account</h2>
            </div>
            <div class="register-form login-form">
                <form action="#">
                    <div class="single-form">
                        <input type="email" placeholder="Email">
                        <img src="site/Assets/img/mail-icon.png" alt="icon">
                    </div>
                    <div class="single-form">
                        <input type="text" placeholder="Password">
                        <img src="site/Assets/img/lock-icon.png" alt="icon">
                    </div>
                    <button type="submit">Login</button>
                    <a href="#" data-open="pw" class="forget-pass">Forgot password?</a>
                    <span>
                        <a href="#" data-open="register">Have an account already? </a>
                        <br>
                        <a href="#" data-open="register" class="login">Register</a></span>
                </form>
            </div>
            <button class="close-button" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true"><img src="site/Assets/img/cross.png" alt="cross"></span>
            </button>
        </div>
        <!-- ============================Password Reset Modal ============================ -->
        <div class="reveal register-area pw-area" id="pw" data-reveal>
            <div class="register-logo">
                <a href="#"><img src="site/Assets/img/logo.png" alt="logo"></a>
            </div>
            <div class="register-title">
                <h2>Forgot password? <br>Recover it using your email.</h2>
            </div>
            <div class="register-form pw-form">
                <form action="#">
                    <div class="single-form">
                        <input type="email" placeholder="Email">
                        <img src="site/Assets/img/mail-icon.png" alt="icon">
                    </div>
                    <button type="submit">Recover</button>
                    <span><a href="#" data-close aria-label="Close modal">Cancel</a></span>
                </form>
            </div>
            <button class="close-button" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true"><img src="site/Assets/img/cross.png" alt="cross"></span>
            </button>
        </div>
        <!-- ============================ Register Modal ============================ -->
        <div class="reveal register-area" id="register" data-reveal>
            <div class="register-logo">
                <a href="#"><img src="site/Assets/img/logo.png" alt="logo"></a>
            </div>
            <div class="register-title">
                <h2>Register and create <br>
                    your account</h2>
            </div>
            <div class="register-form">
                <form action="#">
                    <div class="single-form">
                        <input type="text" placeholder="Full Name">
                        <img src="site/Assets/img/user-icon.png" alt="icon">
                    </div>
                    <div class="single-form">
                        <input type="email" placeholder="Email">
                        <img src="site/Assets/img/mail-icon.png" alt="icon">
                    </div>
                    <div class="single-form">
                        <input type="text" placeholder="Password">
                        <img src="site/Assets/img/lock-icon.png" alt="icon">
                    </div>
                    <button type="submit">Register</button>
                    <span><a href="#">Have an account already? </a><a href="#" data-open="loginModal" class="login">Login</a></span>
                </form>
            </div>
            <button class="close-button" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true"><img src="site/Assets/img/cross.png" alt="cross"></span>
            </button>
        </div>
        <!-- Modal Ad to cart -->
        <div class="reveal shopping-modal" id="shoppingModal" data-reveal>
            <div class="add-card">
                <img src="site/Assets/img/add.png" alt="icon">
            </div>
            <div class="shopping-modal-area">
                <h2>Product added to Cart!</h2>
                <p>You successfully added 3/yd3 of River sand to your card, you
                    can always edit or remove a product from your cart.</p>
                <div class="shopping-btn">
                    <a href="#" data-close aria-label="Close modal" >Continue shopping</a>
                    <a href="#">Quick Checkout</a>
                </div>
            </div>
            <button class="close-button" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true"><img src="site/Assets/img/cross.png" alt="cross"></span>
            </button>
        </div>
                <!-- ===============================More Details Area=================== -->
        <div class="more-details-area">
            <div class="grid-container">
                <div class="grid-x grid-margin-x">
                    <div class="cell small-12">
                        <!-- More Details -->
                        <div class="more-details">
                            <p>Need some help or more details? please call us at <a href="tel:(504) 355-9000">(504) 355-9000</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>