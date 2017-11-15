<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons Icon -->
<link rel="icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
<title>Vento premium HTML5 &amp; CSS3 template</title>

<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="css/slider.css" media="all">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="css/style.css" media="all">
<link rel="stylesheet" type="text/css" href="css/responsive.css">

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,300,700,800,400,600' rel='stylesheet' type='text/css'>
</head>

<body class="cms-index-index cms-home-page">
<!-- Header -->
<header>
  <div class="top-links">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-4 col-xs-7"> 
          <!-- Header Language -->
          <div class="dropdown language-box"> <a role="button" data-toggle="dropdown" data-target="#" class="block-language dropdown-toggle language-switcher" href="#"> <img src="images/english.png" alt="language"> English <span class="caret"></span> </a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="images/english.png" alt="language"> English </a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="images/francais.png" alt="language"> French </a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="images/german.png" alt="language"> German </a></li>
            </ul>
          </div>
          <!-- End Header Language --> 
          <!-- Header Currency -->
          <div class="dropdown currency-box"> <a role="button" data-toggle="dropdown" data-target="#" class="block-currency dropdown-toggle currency-switcher" href="#"> USD <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> $ - Dollar </a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> &pound; - Pound </a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> &euro; - Euro </a></li>
            </ul>
          </div>
          <!-- End Header Currency --> 
          <!-- Default Welcome Message -->
          <div class="welcome-msg hidden-xs"> Default welcome msg! </div>
          <!-- End Default Welcome Message --> 
        </div>
        <div class="col-lg-8 col-sm-8 col-xs-5">
          <div class="toplinks">
            <div class="links">
              <div class="myaccount"><a title="My Account" href="login.html"><span class="hidden-xs">My Account</span></a></div>
              <div class="wishlist"><a title="My Wishlist" href="wishlist.html"><span class="hidden-xs">Wishlist</span></a></div>
              <div class="check"><a title="Checkout" href="checkout.html"><span class="hidden-xs">Checkout</span></a></div>
              <div class="demo"><a href="blog.html" title="Demo"><span class="hidden-xs">Blog</span></a></div>
              <!-- Header Language -->
              <div class="dropdown company hidden-xs"> <a role="button" data-toggle="dropdown" data-target="#" class="block-language dropdown-toggle click-nav" href="#"> Company <span class="caret"></span> </a>
                <ul class="dropdown-menu" role="menu">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="about_us.html"> About Us </a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> Customer Service </a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> Privacy Policy </a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="sitemap.html"> Site Map </a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> Search Terms </a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> Advanced Search </a></li>
                </ul>
              </div>
              <!-- End Header Language -->
              <div class="login"><a href="login.html"><span class="hidden-xs">Log In</span></a></div>
            </div>
            <!-- links --> 
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="header">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-6 col-xs-12"> 
          <!-- Header Logo -->
          <div class="logo"><a title="Magento Commerce" href="/"><img alt="Magento Commerce" src="images/logo.png"></a> </div>
          <!-- End Header Logo --> 
        </div>
        <div class="col-lg-6 col-sm-6 col-xs-12">
          <div class="top-cart-contain">
            <div class="mini-cart">
              <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="shopping_cart.html"><span>Shopping Cart (3)</span></a></div>
              <div>
                <div style="display: none;" class="top-cart-content arrow_box">
                  <div class="block-subtitle">Recently added item(s)</div>
                  <ul id="cart-sidebar" class="mini-products-list">
                  @foreach($carts as $cart)
                    <li class="item odd"> <a href="#" title="Skater Dress In Leaf Print" class="product-image"><img src="/images/{{$cart->product_img}}" alt="Skater Dress In Leaf Print" width="55"></a>
                      <div class="product_details"> <a href="#" title="Remove This Item" onClick="" class="btn-remove1">Remove This Item</a> <a class="btn-edit" title="Edit item" href="#">Edit item</a>
                        <p class="product-name"><a href="#">{{$cart->product_title}}</a> </p>
                        <strong>1</strong> x <span class="price">{{$cart->product_price}}</span> </div>
                    </li>
                  @endforeach
                  </ul>
                  <div class="top-subtotal">Subtotal: <span class="price">$520.00</span></div>
                  <div class="actions">
                    <button class="btn-checkout" type="button"><span>Checkout</span></button>
                    <button class="view-cart" type="button"><span>View Cart</span></button>
                  </div>
                </div>
              </div>
            </div>
            <div id="ajaxconfig_info" style="display:none"> <a href="#/"></a>
              <input value="" type="hidden">
              <input id="enable_module" value="1" type="hidden">
              <input class="effect_to_cart" value="1" type="hidden">
              <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- end header --> 
<!-- Navbar -->
<nav>
  <div class="container">
    <div class="row">
      <div class="nav-inner"> 
        <!-- mobile-menu -->
        <div class="hidden-desktop" id="menu">
          <ul class="navmenu">
            <li>
              <div class="menutop">
                <div class="toggle"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></div>
                <!--<h2>Menu</h2>--> 
              </div>
              <ul style="display:none;" class="submenu">
                <li>
                  <ul class="topnav">
                    <li class="level0 nav-6 level-top first parent"> <a class="level-top" href="index.html"> <span>Home</span> </a>
                      <ul class="level0">
                         <li class="level1"><a href="../green/index.html"><span>Green</span></a> </li>
                        <li class="level1"><a href="../aqua/index.html"><span>Aqua</span></a> </li>
                        <li class="level1"><a href="../pink/index.html"><span>Pink</span></a> </li>
                        <li class="level1"><a href="../red/index.html"><span>Red</span></a> </li>
                        <li class="level1"><a href="../yellow/index.html"><span>Yellow</span></a> </li>
                      </ul>
                    </li>
                    <li class="level0 nav-6 level-top"> <a class="level-top" href="#"> <span>Pages</span> </a>
                      <ul class="level0">
                        <li class="level1 first"><a href="grid.html"><span>Grid</span></a></li>
                        <li class="level1 nav-10-2"> <a href="list.html"> <span>List</span> </a> </li>
                        <li class="level1 nav-10-3"> <a href="product_detail.html"> <span>Product Detail</span> </a> </li>
                        <li class="level1 nav-10-4"> <a href="shopping_cart.html"> <span>Shopping Cart</span> </a> </li>
                        <li class="level1 first parent"><a href="checkout.html"><span>Checkout</span></a>
                          <ul class="level2">
                            <li class="level2 nav-2-1-1 first"><a href="checkout_method.html"><span>Checkout Method</span></a></li>
                            <li class="level2 nav-2-1-5 last"><a href="checkout_billing-info.html"><span>Checkout Billing Info</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-10-4"> <a href="wishlist.html"> <span>Wishlist</span> </a> </li>
                        <li class="level1"> <a href="dashboard.html"> <span>Dashboard</span> </a> </li>
                        <li class="level1"> <a href="multiple_addresses.html"> <span>Multiple Addresses</span> </a> </li>
                        <li class="level1 first parent"><a href="checkout.html"><span>Bolg</span></a>
                          <ul class="level2">
                            <li class="level2 nav-2-1-1 first"><a href="checkout_method.html"><span>Blog Detail</span></a></li>
                          </ul>
                        </li>
                        <li class="level1"> <a href="about.html"> <span>About us</span> </a> </li>
                        <li class="level1"><a href="compare.html"><span>Compare</span></a></li>
                        <li class="level1"><a href="delivery.html"><span>Delivery</span></a> </li>
                        <li class="level1"><a href="faq.html"><span>FAQ</span></a> </li>
                        <li class="level1"><a href="quick_view.html"><span>Quick View</span></a> </li>
                        <li class="level1"><a href="newsletter.html"><span>Newsletter</span></a> </li>
                        <li class="level1"><a href="contact_us.html"><span>Contact us</span></a> </li>
                        <li class="level1"><a href="sitemap.html"><span>Sitemap</span></a> </li>
                        <li class="level1"><a href="404error.html"><span>404 Error Page</span></a> </li>
                      </ul>
                    </li>
                    <li class="level0 nav-6 level-top first parent"> <a class="level-top" href="grid.html"> <span>Women</span> </a>
                      <ul class="level0">
                        <li class="level1 nav-6-1 first"> <a href="grid.html"> <span>Unlocked phones</span> </a> </li>
                        <li class="level1 nav-6-2"> <a href="grid.html"> <span>Cell Phones with Service</span> </a> </li>
                        <li class="level1 nav-6-3"> <a href="grid.html"> <span>Sim cards</span> </a> </li>
                        <li class="level1 nav-6-4 last"> <a href="grid.html"> <span>Accessories</span> </a> </li>
                      </ul>
                    </li>
                    <li class="level0 nav-7 level-top parent"> <a class="level-top" href="http://magento.com/camera.html"> <span>Men</span> </a>
                      <ul class="level0">
                        <li class="level1 nav-7-1 first"> <a href="grid.html"> <span>Digital Cameras</span> </a> </li>
                        <li class="level1 nav-7-2 last"> <a href="grid.html"> <span>Camcorders</span> </a> </li>
                      </ul>
                    </li>
                    <li class="level0 nav-8 level-top parent"> <a class="level-top" href="grid.html"> <span>Electronics</span> </a>
                      <ul class="level0">
                        <li class="level1 nav-8-1 first"> <a href="grid.html"> <span>Desktops</span> </a> </li>
                        <li class="level1 nav-8-2"> <a href="grid.html"> <span>Laptops</span> </a> </li>
                        <li class="level1 nav-8-3"> <a href="grid.html"> <span>Netbooks</span> </a> </li>
                        <li class="level1 nav-8-4 last parent"> <a href="grid.html"> <span>Tablets</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-8-4-1 first"> <a href="grid.html"> <span>Android</span> </a> </li>
                            <li class="level2 nav-8-4-2"> <a href="grid.html"> <span>Apple</span> </a> </li>
                            <li class="level2 nav-8-4-3 last"> <a href="grid.html"> <span>Windows</span> </a> </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="level0 nav-9 level-top"> <a class="level-top" href="grid.html"> <span>Furniture</span> </a> </li>
                    <li class="level0 nav-10 level-top "> <a class="level-top" href="grid.html"> <span>Boys</span> </a>
                      <ul class="level0">
                        <li class="level1 nav-10-1 first"> <a href="grid.html"> <span>GPS Trackers</span> </a> </li>
                        <li class="level1 nav-10-2 last"> <a href="grid.html"> <span>GPS System Accessories</span> </a> </li>
                      </ul>
                    </li>
                    <li class="level0 nav-9 level-top last parent "> <a class="level-top" href="grid.html"> <span>Girls</span> </a> </li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
          <!--navmenu--> 
        </div>
        <!--End mobile-menu -->
        <ul id="nav" class="hidden-xs">
        <li class="level0 parent drop-menu" id="nav-home1"><a href="index.html"><span>Home</span> </a>
            <ul style="display: none;" class="level1">
              <li class="level1 first parent"><a href="../green/index.html"><span>Green</span></a> </li>
              <li class="level1 parent"><a href="../aqua/index.html"><span>Aqua</span></a> </li>
              <li class="level1 parent"><a href="../pink/index.html"><span>Pink</span></a> </li>
              <li class="level1 parent"><a href="../red/index.html"><span>Red</span></a></li>
              <li class="level1 parent"><a href="../yellow/index.html"><span>Yellow</span></a></li>
        
            </ul>
          </li>
          
          <li class="level0 parent drop-menu"><a href="#"><span>Pages</span> </a> 
            <!--sub sub category-->
            <ul class="level1">
              <li class="level1 first"><a href="grid.html"><span>Grid</span></a></li>
              <li class="level1 nav-10-2"> <a href="list.html"> <span>List</span> </a> </li>
              <li class="level1 nav-10-3"> <a href="product_detail.html"> <span>Product Detail</span> </a> </li>
              <li class="level1 nav-10-4"> <a href="shopping_cart.html"> <span>Shopping Cart</span> </a> </li>
              <li class="level1 first parent"><a href="checkout.html"><span>Checkout</span></a> 
                <!--sub sub category-->
                <ul class="level2 right-sub">
                  <li class="level2 nav-2-1-1 first"><a href="checkout_method.html"><span>Checkout Method</span></a></li>


                  <li class="level2 nav-2-1-5 last"><a href="checkout_billing_info.html"><span>Checkout Billing Info</span></a></li>
                </ul>
                <!--sub sub category--> 
              </li>
              <li class="level1 nav-10-4"> <a href="wishlist.html"> <span>Wishlist</span> </a> </li>
              <li class="level1"> <a href="dashboard.html"> <span>Dashboard</span> </a> </li>
              <li class="level1"> <a href="multiple_addresses.html"> <span>Multiple Addresses</span> </a> </li>
              <li class="level1"> <a href="about_us.html"> <span>About us</span> </a> </li>
              <li class="level1"><a href="compare.html"><span>Compare</span></a></li>
              <li class="level1"><a href="delivery.html"><span>Delivery</span></a> </li>
              <li class="level1"><a href="faq.html"><span>FAQ</span></a> </li>
              <li class="level1"><a href="quick_view.html"><span>Quick View</span></a> </li>
              <li class="level1"><a href="newsletter.html"><span>Newsletter</span></a> </li>
              <li class="level1"><a href="contact_us.html"><span>Contact us</span></a> </li>
              <li class="level1"><a href="sitemap.html"><span>Sitemap</span></a> </li>
              <li class="level1 first parent"><a href="blog.html"><span>Blog</span></a> 
                <!--sub sub category-->
                <ul class="level2 right-sub">
                  <li class="level2 nav-2-1-1 first"><a href="blog_detail.html"><span>Blog Detail</span></a></li>
                </ul>
                <!--sub sub category--> 
              </li>
              <li class="level1"><a href="404error.html"><span>404 Error Page</span></a> </li>
            </ul>
          </li>
          <li class="level0 nav-5 level-top first" > <a href="grid.html" class="level-top "> <span>Women</span> </a>
            <div style="display: none; left: 0px;" class="level0-wrapper dropdown-6col">
              <div class="level0-wrapper2">
                <div class="nav-block nav-block-center">
                  <ul class="level0">
                    <li class="level1 nav-6-1 first parent item"> <a href="grid.html"> <span>Styliest Bag </span> </a>
                      <ul class="level1">
                        <li class="level2 nav-6-1-1 first"> <a href="grid.html"> <span>Clutch Handbags</span> </a> </li>
                        <li class="level2 nav-6-1-2"> <a href="grid.html"> <span>Diaper Bags</span> </a> </li>
                        <li class="level2 nav-6-1-2"> <a href="grid.html"> <span>Bags</span> </a> </li>
                        <li class="level2 nav-6-1-3 last"> <a href="grid.html"> <span>Hobo Handbags</span> </a> </li>
                      </ul>
                    </li>
                    <li class="level1 nav-6-2 parent item"> <a href="grid.html"> <span>Material Bag</span> </a>
                      <ul class="level1">
                        <li class="level2 nav-6-2-4 first"> <a href="grid.html"> <span>Beaded Handbags</span> </a> </li>
                        <li class="level2 nav-6-2-5"> <a href="grid.html"> <span>Fabric Handbags</span> </a> </li>
                        <li class="level2 nav-6-2-5"> <a href="grid.html"> <span>Handbags</span> </a> </li>
                        <li class="level2 nav-6-2-6 last"> <a href="grid.html"> <span>Leather Handbags</span> </a> </li>
                      </ul>
                    </li>
                    <li class="level1 nav-6-3 parent item"> <a href="grid.html"> <span>Designer Bag</span> </a>
                      <ul class="level1">
                        <li class="level2 nav-6-3-9 first"> <a href="grid.html"> <span>Flat Shoes</span> </a> </li>
                        <li class="level2 nav-6-3-10"> <a href="grid.html"> <span>Flat Sandals</span> </a> </li>
                        <li class="level2 nav-6-3-11"> <a href="grid.html"> <span>Boots</span> </a> </li>
                        <li class="level2 nav-6-3-12 last"> <a href="grid.html"> <span>Heels</span> </a> </li>
                      </ul>
                    </li>
                    <li class="level1 nav-6-4 parent item"> <a href="grid.html"> <span>Cotton Bag</span> </a>
                      <ul class="level1">
                        <li class="level2 nav-6-4-13 first"> <a href="grid.html"> <span>Bracelets</span> </a> </li>
                        <li class="level2 nav-6-4-14"> <a href="grid.html"> <span>Necklaces &amp; Pendants</span> </a> </li>
                        <li class="level2 nav-6-4-14"> <a href="grid.html"> <span>Pendants</span> </a> </li>
                        <li class="level2 nav-6-4-15 last"> <a href="grid.html"> <span>Pins &amp; Brooches</span> </a> </li>
                      </ul>
                    </li>
                    <li class="level1 nav-6-5 last parent item"> <a href="grid.html"> <span>Swimwear</span> </a>
                      <ul class="level1">
                        <li class="level2 nav-6-8-28 first"> <a href="grid.html"> <span>Swimsuits</span> </a> </li>
                        <li class="level2 nav-6-8-29"> <a href="grid.html"> <span>Beach Clothing</span> </a> </li>
                        <li class="level2 nav-6-8-29"> <a href="grid.html"> <span>Clothing</span> </a> </li>
                        <li class="level2 nav-6-8-30 last"> <a href="grid.html"> <span>Bikinis</span> </a> </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="nav-add">
                <div class="push_item">
                  <div class="push_img"> <a href="#"> <img  alt="" src="images/women_jwellery.png"> </a> </div>
                  <div class="push_text">Lorem Ipsum is simply dummy text of the printing</div>
                </div>
                <div class="push_item">
                  <div class="push_img"> <a href="#"> <img  alt="" src="images/women_bag.png"> </a> </div>
                  <div class="push_text">Lorem Ipsum is simply dummy text of the printing</div>
                </div>
                <div class="push_item">
                  <div class="push_img"> <a href="#"> <img  alt="" src="images/women_sandle.png"> </a> </div>
                  <div class="push_text">Lorem Ipsum is simply dummy text of the printing</div>
                </div>
                <div class="push_item push_item_last">
                  <div class="push_img"> <a href="#"> <img  alt="" src="images/women_top.png"> </a> </div>
                  <div class="push_text">Lorem Ipsum is simply dummy text of the printing</div>
                </div>
                <br class="clear">
              </div>
            </div>
          </li>
          <li class="level0 nav-7 level-top parent"> <a href="grid.html" class="level-top"> <span>Men</span> </a>
            <div style="display: none; left: 0px;" class="level0-wrapper dropdown-6col">
              <div class="level0-wrapper2">
                <div class="nav-block nav-block-center">
                  <ul class="level0">
                    <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Shoes</span></a> 
                      <!--sub sub category-->
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Sport Shoes</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Casual Shoes</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Leather Shoes</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Canvas shoes</span></a> </li>
                        <!--level2 nav-6-1-1-->
                      </ul>
                      <!--level1--> 
                      <!--sub sub category--> 
                    </li>
                    <!--level1 nav-6-1 parent item-->

                    <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Dresses</span></a> 
                      <!--sub sub category-->
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Casual Dresses</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Evening</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Designer</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Party</span></a> </li>
                        <!--level2 nav-6-1-1-->
                      </ul>
                      <!--level1--> 
                      <!--sub sub category--> 
                    </li>
                    <!--level1 nav-6-1 parent item-->
                    <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Jackets</span></a> 
                      <!--sub sub category-->
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Coats</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Formal Jackets</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Leather Jackets</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Blazers</span></a> </li>
                        <!--level2 nav-6-1-1-->
                      </ul>
                      <!--level1--> 
                      <!--sub sub category--> 
                    </li>
                    <!--level1 nav-6-1 parent item-->
                    <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Watches</span></a> 
                      <!--sub sub category-->
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Fasttrack</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Casio</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Titan</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Tommy-Hilfiger</span></a> </li>
                        <!--level2 nav-6-1-1-->
                      </ul>
                      <!--level1--> 
                      <!--sub sub category--> 
                    </li>
                    <!--level1 nav-6-1 parent item-->
                    <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Sunglasses</span></a> 
                      <!--sub sub category-->
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Ray Ban</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Fasttrack</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Police</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Oakley</span></a> </li>
                        <!--level2 nav-6-1-1-->
                      </ul>
                      <!--level1--> 
                      <!--sub sub category--> 
                    </li>
                    <!--level1 nav-6-1 parent item-->
                  </ul>
                  <!--level0--> 
                </div>
                <!--nav-block nav-block-center--> 
              </div>
            </div>
          </li>
          <li class="level0 nav-6 level-top parent"> <a href="grid.html" class="level-top"> <span>Electronics</span> </a>
            <div style="display: none; left: 0px;" class="level0-wrapper dropdown-6col">
              <div class="level0-wrapper2">
                <div class="nav-block nav-block-center grid13-8 itemgrid itemgrid-4col">
                  <ul class="level0">
                    <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Mobiles</span></a> 
                      <!--sub sub category-->
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Samsung</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Nokia</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>iPhone</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Sony</span></a> </li>
                        <!--level2 nav-6-1-1-->
                      </ul>
                      <!--level1--> 
                      <!--sub sub category--> 
                    </li>
                    <!--level1 nav-6-1 parent item-->
                    <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Accesories</span></a> 
                      <!--sub sub category-->
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Mobile Memory Cards</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Cases &amp; Covers</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Mobile Headphones</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Bluetooth Headsets</span></a> </li>
                        <!--level2 nav-6-1-1-->
                      </ul>
                      <!--level1--> 
                      <!--sub sub category--> 
                    </li>
                    <!--level1 nav-6-1 parent item-->
                    <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Cameras</span></a> 
                      <!--sub sub category-->
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Camcorders</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Point &amp; Shoot</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Digital SLR</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Camera Accesories</span></a> </li>
                        <!--level2 nav-6-1-1-->
                      </ul>
                      <!--level1--> 
                      <!--sub sub category--> 
                    </li>
                    <!--level1 nav-6-1 parent item-->
                    <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Audio &amp; Video</span></a> 
                      <!--sub sub category-->
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>MP3 Players</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>IPods</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Speakers</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Video Players</span></a> </li>
                        <!--level2 nav-6-1-1-->
                      </ul>
                      <!--level1--> 
                      <!--sub sub category--> 
                    </li>
                    <!--level1 nav-6-1 parent item-->
                  </ul>
                  <!--level0--> 
                </div>
                <div class="nav-block nav-block-right std grid12-3"> <a class="product-image" title="Stablished fact reader" href="grid.html"> <img alt="Stablished fact reader" src="../products-images/product1.jpg" width="150"></a>
                  <div class="item-title"> <a href="#" title="Ut tincidunt tortor"> Sample Product </a> </div>
                </div>
              </div>
            </div>
          </li>
          <li class="level0 nav-7 level-top parent"> <a class="level-top" href="grid.html"> <span>Furniture</span> </a>
            <div class="level0-wrapper dropdown-6col" style="left: 0pt; display: none;">
              <div class="level0-wrapper2">
                <div class="nav-block nav-block-center grid12-8 itemgrid itemgrid-4col">
                  <ul class="level0">
                    <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Living Room</span></a> 
                      <!--sub sub category-->
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Racks &amp; Cabinets</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Sofas</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Chairs</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Tables</span></a> </li>
                        <!--level2 nav-6-1-1-->
                      </ul>
                      <!--level1--> 
                      <!--sub sub category--> 
                    </li>
                    <!--level1 nav-6-1 parent item-->
                    <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Dining &amp; Bar</span></a> 
                      <!--sub sub category-->
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Dining Table Sets</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Serving Trolleys</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Bar Counters</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Dining Cabinets</span></a> </li>
                        <!--level2 nav-6-1-1-->
                      </ul>
                      <!--level1--> 
                      <!--sub sub category--> 
                    </li>
                    <!--level1 nav-6-1 parent item-->
                    <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Bedroom</span></a> 
                      <!--sub sub category-->
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Beds</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Chest of Drawers</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Wardrobes &amp; Almirahs</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Nightstands</span></a> </li>
                        <!--level2 nav-6-1-1-->
                      </ul>
                      <!--level1--> 
                      <!--sub sub category--> 
                    </li>
                    <!--level1 nav-6-1 parent item-->
                  </ul>
                  <!--level0--> 
                </div>
                <div class="nav-block nav-block-right std grid12-4"><a href="grid.html"><img src="images/menu_furniture.png"  alt="menu furniture" class="fade-on-hover"></a> </div>
              </div>
            </div>
          </li>
          <li class="level0 nav-8 level-top"> <a href="grid.html" class="level-top"> <span>Boys</span> </a> </li>
          <li class="nav-custom-link level0 level-top parent"> <a class="level-top" href="#"><span>Custom</span></a>
            <div style="display: none; left: 0px;" class="level0-wrapper">
              <div class="header-nav-dropdown-wrapper clearer">
                <div class="grid12-5"> 
                  <!--<h4 class="heading">HTML5 + CSS3</h4> -->
                  <div class="custom_img"><img src="images/custom-img1.jpg" alt="custom img"></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue.</p>
                </div>
                <div class="grid12-5"> 
                  <!--  <h4 class="heading">Responsive Design</h4> --> 
                  <a href="#">
                  <div class="custom_img"><img src="images/custom-img1.jpg" alt="custom img"></div>
                  </a>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue.</p>
                </div>
                <div class="grid12-5"> 
                  <!--   <h4 class="heading">Google Fonts</h4> --> 
                  <a href="#">
                  <div class="custom_img"><img src="images/custom-img1.jpg" alt="custom img"></div>
                  </a>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue.</p>
                </div>
                <div class="grid12-5"> 
                  <!--<h4 class="heading">Smart Product Grid</h4> --> 
                  <a href="#">
                  <div class="custom_img"><img src="images/custom-img1.jpg" alt="custom img"></div>
                  </a>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue.</p>
                </div>
                <br>
              </div>
            </div>
          </li>
        </ul>
        <!-- Search-col -->
        <div class="search-box">
          <form action="se" method="POST" id="search_mini_form" name="search">
            <input type="text" placeholder="Search entire store here..."  maxlength="70"  name="search" id="search">
            <button id="submit-button" class="button-common search-btn-bg"><span class="searchIconNew"></span></button>
          </form>
        </div>
        <!-- End Search-col --> 
      </div>
    </div>
  </div>
</nav>
<!-- End Nav -->


<section class="main-container">
  <article class="main-container-inner container">
    <div class="cart row">
    <div class="page-title">
      <h2>Shopping Cart</h2>
    </div>
    <div class="table-responsive">
      <table class="data-table cart-table hidden-desktop" id="shopping-cart-table">
        <colgroup>
        <col width="1">
        <col>
        <col width="1">
        <col width="1">
        <col width="1">
        <col width="1">
        <col width="1">
        </colgroup>
        <thead>
          <tr class="first last">
            <th class="hidden-table" rowspan="1">&nbsp;</th>
            <th rowspan="1"><span class="nobr">Product Name</span></th>
            <th colspan="1" class="a-left hidden-table"><span class="nobr">Unit Price</span></th>
            <th class="a-left" rowspan="1">Qty</th>
            <th colspan="1" class="a-left">Subtotal</th>
            <th class="hidden-table" rowspan="1"></th>
            <th class="a-left" rowspan="1">&nbsp;</th>
          </tr>
        </thead>
        <tfoot>
          <tr class="first last">
            <td class="a-right last" colspan="50"><button onClick="setLocation('#ma_optima/index.php/')" class="button btn-continue" title="Continue Shopping" type="button"><span><span>Continue Shopping</span></span></button>
              <button class="button btn-update" title="Update Cart" value="update_qty" name="update_cart_action" type="submit"><span><span>Update Cart</span></span></button>
              <button id="empty_cart_button" class="button btn-empty" title="Clear Cart" value="empty_cart" name="update_cart_action" type="submit"><span><span>Clear Cart</span></span></button></td>
          </tr>
        </tfoot>
        <tbody>
          @foreach($carts as $cart)
          <tr class="first odd">
            <td class="hidden-table"><a class="product-image" title="Proin lectus ipsum" href="#"><img width="75" alt="Proin lectus ipsum" src="/images/{{$cart->product_img}}"></a></td>
            <td><h2 class="product-name"> <a href="#">{{$cart->product_title}}</a> </h2></td>
            <td class="a-left hidden-table"><span class="cart-price"> <span class="price">{{$cart->product_price}}</span> </span></td>
            <td class="a-left"><input maxlength="12" class="input-text qty" title="Qty" size="4" value="2" name="cart[1312][qty]"></td>
            <td class="a-left"><span class="cart-price"> <span class="price"></span> </span></td>
            <td class="a-left hidden-table"><a title="Edit item parameters" href="#ma_optima/index.php/checkout/cart/configure/id/1314/" class="edit-bnt"><span>Edit</span></a></td>
            <td class="a-left last"><a class="remove-item" title="Clear Cart" type="submit"><span><span>Remove item</span></span></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <table class="data-table cart-table" id="shopping-cart-table">
        <colgroup>
        <col width="1">
        <col>
        <col width="1">
        <col width="1">
        <col width="1">
        <col width="1">
        <col width="1">
        </colgroup>
        <thead>
          <tr class="first last">
            <th class="hidden-phone" rowspan="1">&nbsp;</th>
            <th rowspan="1"><span class="nobr">Product Name</span></th>
            <th colspan="1" class="a-left"><span class="nobr">Unit Price</span></th>
            <th class="a-left" rowspan="1">Qty</th>
            <th colspan="1" class="a-left">Subtotal</th>
            <th class="hidden-phone" rowspan="1"></th>
            <th class="a-left" rowspan="1">&nbsp;</th>
          </tr>
        </thead>
        <tfoot>
          <tr class="first last">
            <td class="a-right last" colspan="50"><button onClick="setLocation('#ma_optima/index.php/')" class="button btn-continue" title="Continue Shopping" type="button"><span><span>Continue Shopping</span></span></button>
              <button class="button btn-update" title="Update Cart" value="update_qty" name="update_cart_action" type="submit"><span><span>Update Cart</span></span></button>
              <button id="empty_cart_button" class="button btn-empty" title="Clear Cart" value="empty_cart" name="update_cart_action" type="submit"><span><span>Clear Cart</span></span></button></td>
          </tr>
        </tfoot>
        <tbody>
        @foreach($carts as $cart)
          <tr class="first odd">
            <td class="hidden-phone"><a class="product-image" title="Proin lectus ipsum" href="product_detail.html"><img width="75" alt="Proin lectus ipsum" src="../products-images/product1.jpg"></a></td>
            <td><h2 class="product-name"> <a href="product_detail.html">{{$cart->product_title}}</a> </h2></td>
            <td class="a-left"><span class="cart-price"> <span class="price">{{$cart->product_price}}</span> </span></td>
            <td class="a-left"><input maxlength="12" class="input-text qty" title="Qty" size="4" value="2" name="cart[1312][qty]"></td>
            <td class="a-left"><span class="cart-price"> <span class="price">$900.00</span> </span></td>
            <td class="a-left hidden-phone"><a title="Edit item parameters" href="#ma_optima/index.php/checkout/cart/configure/id/1314/" class="edit-bnt"><span>Edit item</span></a></td>
            <td class="a-left last"><a class="remove-item" title="Clear Cart" type="submit"><span>Remove item</span></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="cart-collaterals">
        <div class="totals col-2">
          <h3>Shopping Cart Total</h3>
          <div class="inner">
            <table id="shopping-cart-totals-table">
              <col>
              <col width="1">
              <tfoot>
                <tr>
                  <td style="" class="a-left" colspan="1"><strong>Grand Total</strong></td>
                  <td style="" class="a-right"><strong><span class="price">$950.00</span></strong></td>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td style="" class="a-left" colspan="1"> Subtotal </td>
                  <td style="" class="a-right"><span class="price">$950.00</span></td>
                </tr>
              </tbody>
            </table>
            <ul class="checkout">
              <li>
                <a href="checkout.html"><button type="button" class="button btn-proceed-checkout" onClick="window.location='#computerstore/checkout/onepage/';"><span>Proceed to Checkout</span></button></a>
              </li>
              <br>
              <li><a href="multiple_addresses.html">Checkout with Multiple Addresses</a></li>
            </ul>
          </div>
        </div>
        <div class="col2-set col-1">
          <div class="shipping">
            <h3>Estimate Shipping and Tax</h3>
            <form action="#computerstore/checkout/cart/estimatePost/" method="post" id="shipping-zip-form">
              <p>Enter your destination to get a shipping estimate.</p>
              <ul id="" class="form-list">
                <li>
                  <label for="country">Country</label>
                  <select name="country_id" id="country" class="validate-select" title="Country">
                    <option value=""> </option>
                    <option value="AF">Afghanistan</option>
                    <option value="AL">Albania</option>
                    <option value="DZ">Algeria</option>
                    <option value="AS">American Samoa</option>
                    <option value="AD">Andorra</option>
                    <option value="AO">Angola</option>
                    <option value="AI">Anguilla</option>
                    <option value="AQ">Antarctica</option>
                    <option value="AG">Antigua and Barbuda</option>
                    <option value="AR">Argentina</option>
                    <option value="AM">Armenia</option>
                    <option value="AW">Aruba</option>
                    <option value="AU">Australia</option>
                    <option value="AT">Austria</option>
                    <option value="AZ">Azerbaijan</option>
                    <option value="BS">Bahamas</option>
                    <option value="BH">Bahrain</option>
                    <option value="BD">Bangladesh</option>
                    <option value="BB">Barbados</option>
                    <option value="BY">Belarus</option>
                    <option value="BE">Belgium</option>
                    <option value="BZ">Belize</option>
                    <option value="BJ">Benin</option>
                    <option value="BM">Bermuda</option>
                    <option value="BT">Bhutan</option>
                    <option value="BO">Bolivia</option>
                    <option value="BA">Bosnia and Herzegovina</option>
                    <option value="BW">Botswana</option>
                    <option value="BV">Bouvet Island</option>
                    <option value="BR">Brazil</option>
                    <option value="IO">British Indian Ocean Territory</option>
                    <option value="VG">British Virgin Islands</option>
                    <option value="BN">Brunei</option>
                    <option value="BG">Bulgaria</option>
                    <option value="BF">Burkina Faso</option>
                    <option value="BI">Burundi</option>
                    <option value="KH">Cambodia</option>
                    <option value="CM">Cameroon</option>
                    <option value="CA">Canada</option>
                    <option value="CV">Cape Verde</option>
                    <option value="KY">Cayman Islands</option>
                    <option value="CF">Central African Republic</option>
                    <option value="TD">Chad</option>
                    <option value="CL">Chile</option>
                    <option value="CN">China</option>
                    <option value="CX">Christmas Island</option>
                    <option value="CC">Cocos [Keeling] Islands</option>
                    <option value="CO">Colombia</option>
                    <option value="KM">Comoros</option>
                    <option value="CG">Congo - Brazzaville</option>
                    <option value="CD">Congo - Kinshasa</option>
                    <option value="CK">Cook Islands</option>
                    <option value="CR">Costa Rica</option>
                    <option value="HR">Croatia</option>
                    <option value="CU">Cuba</option>
                    <option value="CY">Cyprus</option>
                    <option value="CZ">Czech Republic</option>
                    <option value="CI">Côte d’Ivoire</option>
                    <option value="DK">Denmark</option>
                    <option value="DJ">Djibouti</option>
                    <option value="DM">Dominica</option>
                    <option value="DO">Dominican Republic</option>
                    <option value="EC">Ecuador</option>
                    <option value="EG">Egypt</option>
                    <option value="SV">El Salvador</option>
                    <option value="GQ">Equatorial Guinea</option>
                    <option value="ER">Eritrea</option>
                    <option value="EE">Estonia</option>
                    <option value="ET">Ethiopia</option>
                    <option value="FK">Falkland Islands</option>
                    <option value="FO">Faroe Islands</option>
                    <option value="FJ">Fiji</option>
                    <option value="FI">Finland</option>
                    <option value="FR">France</option>
                    <option value="GF">French Guiana</option>
                    <option value="PF">French Polynesia</option>
                    <option value="TF">French Southern Territories</option>
                    <option value="GA">Gabon</option>
                    <option value="GM">Gambia</option>
                    <option value="GE">Georgia</option>
                    <option value="DE">Germany</option>
                    <option value="GH">Ghana</option>
                    <option value="GI">Gibraltar</option>
                    <option value="GR">Greece</option>
                    <option value="GL">Greenland</option>
                    <option value="GD">Grenada</option>
                    <option value="GP">Guadeloupe</option>
                    <option value="GU">Guam</option>
                    <option value="GT">Guatemala</option>
                    <option value="GG">Guernsey</option>
                    <option value="GN">Guinea</option>
                    <option value="GW">Guinea-Bissau</option>
                    <option value="GY">Guyana</option>
                    <option value="HT">Haiti</option>
                    <option value="HM">Heard Island and McDonald Islands</option>
                    <option value="HN">Honduras</option>
                    <option value="HK">Hong Kong SAR China</option>
                    <option value="HU">Hungary</option>
                    <option value="IS">Iceland</option>
                    <option value="IN">India</option>
                    <option value="ID">Indonesia</option>
                    <option value="IR">Iran</option>
                    <option value="IQ">Iraq</option>
                    <option value="IE">Ireland</option>
                    <option value="IM">Isle of Man</option>
                    <option value="IL">Israel</option>
                    <option value="IT">Italy</option>
                    <option value="JM">Jamaica</option>
                    <option value="JP">Japan</option>
                    <option value="JE">Jersey</option>
                    <option value="JO">Jordan</option>
                    <option value="KZ">Kazakhstan</option>
                    <option value="KE">Kenya</option>
                    <option value="KI">Kiribati</option>
                    <option value="KW">Kuwait</option>
                    <option value="KG">Kyrgyzstan</option>
                    <option value="LA">Laos</option>
                    <option value="LV">Latvia</option>
                    <option value="LB">Lebanon</option>
                    <option value="LS">Lesotho</option>
                    <option value="LR">Liberia</option>
                    <option value="LY">Libya</option>
                    <option value="LI">Liechtenstein</option>
                    <option value="LT">Lithuania</option>
                    <option value="LU">Luxembourg</option>
                    <option value="MO">Macau SAR China</option>
                    <option value="MK">Macedonia</option>
                    <option value="MG">Madagascar</option>
                    <option value="MW">Malawi</option>
                    <option value="MY">Malaysia</option>
                    <option value="MV">Maldives</option>
                    <option value="ML">Mali</option>
                    <option value="MT">Malta</option>
                    <option value="MH">Marshall Islands</option>
                    <option value="MQ">Martinique</option>
                    <option value="MR">Mauritania</option>
                    <option value="MU">Mauritius</option>
                    <option value="YT">Mayotte</option>
                    <option value="MX">Mexico</option>
                    <option value="FM">Micronesia</option>
                    <option value="MD">Moldova</option>
                    <option value="MC">Monaco</option>
                    <option value="MN">Mongolia</option>
                    <option value="ME">Montenegro</option>
                    <option value="MS">Montserrat</option>
                    <option value="MA">Morocco</option>
                    <option value="MZ">Mozambique</option>
                    <option value="MM">Myanmar [Burma]</option>
                    <option value="NA">Namibia</option>
                    <option value="NR">Nauru</option>
                    <option value="NP">Nepal</option>
                    <option value="NL">Netherlands</option>
                    <option value="AN">Netherlands Antilles</option>
                    <option value="NC">New Caledonia</option>
                    <option value="NZ">New Zealand</option>
                    <option value="NI">Nicaragua</option>
                    <option value="NE">Niger</option>
                    <option value="NG">Nigeria</option>
                    <option value="NU">Niue</option>
                    <option value="NF">Norfolk Island</option>
                    <option value="KP">North Korea</option>
                    <option value="MP">Northern Mariana Islands</option>
                    <option value="NO">Norway</option>
                    <option value="OM">Oman</option>
                    <option value="PK">Pakistan</option>
                    <option value="PW">Palau</option>
                    <option value="PS">Palestinian Territories</option>
                    <option value="PA">Panama</option>
                    <option value="PG">Papua New Guinea</option>
                    <option value="PY">Paraguay</option>
                    <option value="PE">Peru</option>
                    <option value="PH">Philippines</option>
                    <option value="PN">Pitcairn Islands</option>
                    <option value="PL">Poland</option>
                    <option value="PT">Portugal</option>
                    <option value="PR">Puerto Rico</option>
                    <option value="QA">Qatar</option>
                    <option value="RO">Romania</option>
                    <option value="RU">Russia</option>
                    <option value="RW">Rwanda</option>
                    <option value="RE">Réunion</option>
                    <option value="BL">Saint Barthélemy</option>
                    <option value="SH">Saint Helena</option>
                    <option value="KN">Saint Kitts and Nevis</option>
                    <option value="LC">Saint Lucia</option>
                    <option value="MF">Saint Martin</option>
                    <option value="PM">Saint Pierre and Miquelon</option>
                    <option value="VC">Saint Vincent and the Grenadines</option>
                    <option value="WS">Samoa</option>
                    <option value="SM">San Marino</option>
                    <option value="SA">Saudi Arabia</option>
                    <option value="SN">Senegal</option>
                    <option value="RS">Serbia</option>
                    <option value="SC">Seychelles</option>
                    <option value="SL">Sierra Leone</option>
                    <option value="SG">Singapore</option>
                    <option value="SK">Slovakia</option>
                    <option value="SI">Slovenia</option>
                    <option value="SB">Solomon Islands</option>
                    <option value="SO">Somalia</option>
                    <option value="ZA">South Africa</option>
                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                    <option value="KR">South Korea</option>
                    <option value="ES">Spain</option>
                    <option value="LK">Sri Lanka</option>
                    <option value="SD">Sudan</option>
                    <option value="SR">Suriname</option>
                    <option value="SJ">Svalbard and Jan Mayen</option>
                    <option value="SZ">Swaziland</option>
                    <option value="SE">Sweden</option>
                    <option value="CH">Switzerland</option>
                    <option value="SY">Syria</option>
                    <option value="ST">São Tomé and Príncipe</option>
                    <option value="TW">Taiwan</option>
                    <option value="TJ">Tajikistan</option>
                    <option value="TZ">Tanzania</option>
                    <option value="TH">Thailand</option>
                    <option value="TL">Timor-Leste</option>
                    <option value="TG">Togo</option>
                    <option value="TK">Tokelau</option>
                    <option value="TO">Tonga</option>
                    <option value="TT">Trinidad and Tobago</option>
                    <option value="TN">Tunisia</option>
                    <option value="TR">Turkey</option>
                    <option value="TM">Turkmenistan</option>
                    <option value="TC">Turks and Caicos Islands</option>
                    <option value="TV">Tuvalu</option>
                    <option value="UM">U.S. Minor Outlying Islands</option>
                    <option value="VI">U.S. Virgin Islands</option>
                    <option value="UG">Uganda</option>
                    <option value="UA">Ukraine</option>
                    <option value="AE">United Arab Emirates</option>
                    <option value="GB">United Kingdom</option>
                    <option value="US" selected="selected">United States</option>
                    <option value="UY">Uruguay</option>
                    <option value="UZ">Uzbekistan</option>
                    <option value="VU">Vanuatu</option>
                    <option value="VA">Vatican City</option>
                    <option value="VE">Venezuela</option>
                    <option value="VN">Vietnam</option>
                    <option value="WF">Wallis and Futuna</option>
                    <option value="EH">Western Sahara</option>
                    <option value="YE">Yemen</option>
                    <option value="ZM">Zambia</option>
                    <option value="ZW">Zimbabwe</option>
                    <option value="AX">Åland Islands</option>
                  </select>
                </li>
                <li id="">
                  <label for="region_id">State/Province</label>
                  <select defaultvalue="" id="region_id" name="region_id" title="State/Province" style="">
                    <option value="">Please select region, state or province</option>
                    <option value="1">Alabama</option>
                    <option value="2">Alaska</option>
                    <option value="3">American Samoa</option>
                    <option value="4">Arizona</option>
                    <option value="5">Arkansas</option>
                    <option value="6">Armed Forces Africa</option>
                    <option value="7">Armed Forces Americas</option>
                    <option value="8">Armed Forces Canada</option>
                    <option value="9">Armed Forces Europe</option>
                    <option value="10">Armed Forces Middle East</option>
                    <option value="11">Armed Forces Pacific</option>
                    <option value="12">California</option>
                    <option value="13">Colorado</option>
                    <option value="14">Connecticut</option>
                    <option value="15">Delaware</option>
                    <option value="16">District of Columbia</option>
                    <option value="17">Federated States Of Micronesia</option>
                    <option value="18">Florida</option>
                    <option value="19">Georgia</option>
                    <option value="20">Guam</option>
                    <option value="21">Hawaii</option>
                    <option value="22">Idaho</option>
                    <option value="23">Illinois</option>
                    <option value="24">Indiana</option>
                    <option value="25">Iowa</option>
                    <option value="26">Kansas</option>
                    <option value="27">Kentucky</option>
                    <option value="28">Louisiana</option>
                    <option value="29">Maine</option>
                    <option value="30">Marshall Islands</option>
                    <option value="31">Maryland</option>
                    <option value="32">Massachusetts</option>
                    <option value="33">Michigan</option>
                    <option value="34">Minnesota</option>
                    <option value="35">Mississippi</option>
                    <option value="36">Missouri</option>
                    <option value="37">Montana</option>
                    <option value="38">Nebraska</option>
                    <option value="39">Nevada</option>
                    <option value="40">New Hampshire</option>
                    <option value="41">New Jersey</option>
                    <option value="42">New Mexico</option>
                    <option value="43">New York</option>
                    <option value="44">North Carolina</option>
                    <option value="45">North Dakota</option>
                    <option value="46">Northern Mariana Islands</option>
                    <option value="47">Ohio</option>
                    <option value="48">Oklahoma</option>
                    <option value="49">Oregon</option>
                    <option value="50">Palau</option>
                    <option value="51">Pennsylvania</option>
                    <option value="52">Puerto Rico</option>
                    <option value="53">Rhode Island</option>
                    <option value="54">South Carolina</option>
                    <option value="55">South Dakota</option>
                    <option value="56">Tennessee</option>
                    <option value="57">Texas</option>
                    <option value="58">Utah</option>
                    <option value="59">Vermont</option>
                    <option value="60">Virgin Islands</option>
                    <option value="61">Virginia</option>
                    <option value="62">Washington</option>
                    <option value="63">West Virginia</option>
                    <option value="64">Wisconsin</option>
                    <option value="65">Wyoming</option>
                  </select>
                  <input type="text" id="region" name="region" value="" title="State/Province" class="input-text" style="display: none;">
                </li>
                <li>
                  <label for="postcode">Zip/Postal Code</label>
                  <input type="text" class="input-text validate-postcode" id="postcode" name="estimate_postcode" value="">
                </li>
              </ul>
              <div class="buttons-set11">
                <button type="button" onClick="coShippingMethodForm.submit()" class="button get-quote"><span>Get a Quote</span></button>
              </div>
            </form>
          </div>
          <div class="discount">
            <h3>Discount Codes</h3>
            <form id="discount-coupon-form" action="#computerstore/checkout/cart/couponPost/" method="post">
              <label for="coupon_code">Enter your coupon code if you have one.</label>
              <input type="hidden" name="remove" id="remove-coupone" value="0">
              <input size="35" value="" id="coupon_code" class="input-text" name="coupon_code">
              <button class="button coupon" onClick="discountForm.submit(false)" type="button" value="Apply Coupon"><span>Apply Coupon</span></button>
            </form>
          </div>
        </div>
      </div>
      <div class="crosssel">
        <h2>Based on your selection, you may be interested in the following items:</h2>
        <div class="category-products">
          <ul class="products-grid first odd" id="crosssell-products-list">
            <li class="item">
              <div class="item-inner">
                <div class="item-img">
                  <div class="product-block">
                    <div class="product-image"> <a href="product_detail.html">
                      <figure class="product-display">
                        <div class="new-label new-top-right">New</div>
                        <img src="../products-images/product1.jpg" class="lazyOwl product-mainpic" alt="" style="display: block;"> <img class="product-secondpic" alt="" src="../products-images/product4.jpg"> </figure>
                      </a> </div>
                    <div class="product-meta">
                      <div class="product-action"> <a class="addcart" href="javascript:;"> <i class="icon-shopping-cart">&nbsp;</i> Add to cart </a> <a class="wishlist" href="javascript:;"> <i class="icon-heart">&nbsp;</i> </a> <a class="quickview" href="javascript:;"> <i class="icon-zoom">&nbsp;</i> </a> </div>
                    </div>
                  </div>
                </div>
                <div class="item-info">
                  <div class="info-inner">
                    <div class="item-title"> <a href="product_detail.html" title="Sample Product"> Sample Product </a> </div>
                    <div class="item-content">
                      <div class="item-price">
                        <div class="price-box">
                          <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price" id="old-price-2"> $567.00 </span> </p>
                          <p class="special-price"> <span class="price-label">Special Price</span> <span class="price" id="product-price-2"> $456.00 </span> </p>
                        </div>
                      </div>
                      <div class="rating">
                        <div class="ratings">
                          <div class="rating-box">
                            <div class="rating" style="width:80%"></div>
                          </div>
                          <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="item">
              <div class="item-inner">
                <div class="product-block">
                  <div class="product-image"> <a href="product_detail.html">
                    <figure class="product-display">
                      <div class="new-label new-top-right">New</div>
                      <img src="../products-images/product1.jpg" class="lazyOwl product-mainpic" alt="" style="display: block;"> <img class="product-secondpic" alt="" src="../products-images/product6.jpg"> </figure>
                    </a> </div>
                  <div class="product-meta">
                    <div class="product-action"> <a class="addcart" href="javascript:;"> <i class="icon-shopping-cart">&nbsp;</i> Add to cart </a> <a class="wishlist" href="javascript:;"> <i class="icon-heart">&nbsp;</i> </a> <a class="quickview" href="javascript:;"> <i class="icon-zoom">&nbsp;</i> </a> </div>
                  </div>
                </div>
                <div class="item-info">
                  <div class="info-inner">
                    <div class="item-title"> <a href="product_detail.html" title="Stablished fact reader"> Sample Product </a> </div>
                    <div class="item-content">
                      <div class="item-price">
                        <div class="price-box">
                          <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price" id="old-price-27"> $100.00 </span> </p>
                          <p class="special-price"> <span class="price-label">Special Price</span> <span class="price" id="product-price-27"> $90.00 </span> </p>
                        </div>
                      </div>
                      <div class="rating">
                        <div class="ratings">
                          <div class="rating-box">
                            <div class="rating" style="width:0%"></div>
                          </div>
                          <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="item">
              <div class="item-inner">
                <div class="product-block">
                  <div class="product-image"> <a href="product_detail.html">
                    <figure class="product-display">
                      <div class="sale-label sale-top-left">Sale</div>
                      <img src="../products-images/product1.jpg" class="lazyOwl product-mainpic" alt="" style="display: block;"> <img class="product-secondpic" alt="" src="../products-images/product10.jpg"> </figure>
                    </a> </div>
                  <div class="product-meta">
                    <div class="product-action"> <a class="addcart" href="javascript:;"> <i class="icon-shopping-cart">&nbsp;</i> Add to cart </a> <a class="wishlist" href="javascript:;"> <i class="icon-heart">&nbsp;</i> </a> <a class="quickview" href="javascript:;"> <i class="icon-zoom">&nbsp;</i> </a> </div>
                  </div>
                </div>
                <div class="item-info">
                  <div class="info-inner">
                    <div class="item-title"> <a href="product_detail.html" title="Sample Product"> Sample Product </a> </div>
                    <div class="item-content">
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                      </div>
                      <div class="rating">
                        <div class="ratings">
                          <div class="rating-box">
                            <div class="rating" style="width:80%"></div>
                          </div>
                          <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="item">
              <div class="item-inner">
                <div class="product-block">
                  <div class="product-image"> <a href="product_detail.html">
                    <figure class="product-display">
                      <div class="sale-label sale-top-left">Sale</div>
                      <img src="../products-images/product1.jpg" class="lazyOwl product-mainpic" alt="" style="display: block;"> <img class="product-secondpic" alt="" src="../products-images/product12.jpg"> </figure>
                    </a> </div>
                  <div class="product-meta">
                    <div class="product-action"> <a class="addcart" href="javascript:;"> <i class="icon-shopping-cart">&nbsp;</i> Add to cart </a> <a class="wishlist" href="javascript:;"> <i class="icon-heart">&nbsp;</i> </a> <a class="quickview" href="javascript:;"> <i class="icon-zoom">&nbsp;</i> </a> </div>
                  </div>
                </div>
                <div class="item-info">
                  <div class="info-inner">
                    <div class="item-title"> <a href="product_detail.html" title="Sample Product"> Sample Product </a> </div>
                    <div class="item-content">
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                      </div>
                      <div class="rating">
                        <div class="ratings">
                          <div class="rating-box">
                            <div class="rating" style="width:80%"></div>
                          </div>
                          <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </article>
</section>

<!-- Footer Starts -->
<footer>
  <div class="brand-logo">
    <div class="container">
      <div class="slider-items-products">
        <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col6"> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/b-logo1.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/b-logo1.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/b-logo1.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/b-logo1.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/b-logo1.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/b-logo1.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/b-logo1.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/b-logo1.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="inner">
        <div class="col-lg-3 col-sm-4 col-md-3 col-xs-12 ">
          <div class="footer-logo"><a href="#" title="Logo"><img src="images/f-logo.png" alt="footer logo"></a></div>
          <address>
          <i class="add-icon">&nbsp;</i>123 Main Street, Anytown, <br>
          &nbsp;CA 12345  USA
          </address>
          <div class="phone-footer"><i class="phone-icon">&nbsp;</i> +1 800 123 1234</div>
          <div class="email-footer"><i class="email-icon">&nbsp;</i> <a href="mailto:support@magikcommerce.com">support@magikcommerce.com</a> </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-md-2 col-xs-12 footer_links">
          <h4>Shopping Guide</h4>
          <ul class="links">
            <li class="first"><a href="#" title="How to buy">How to buy</a></li>
            <li><a href="faq.html" title="FAQs">FAQs</a></li>
            <li><a href="#" title="Payment">Payment</a></li>
            <li><a href="#" title="Shipment&lt;/a&gt;">Shipment</a></li>
            <li><a href="#" title="Where is my order?">Where is my order?</a></li>
            <li class="last"><a href="#" title="Return policy">Return policy</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-sm-4 col-md-2 col-xs-12 footer_links">
          <h4>Style Advisor</h4>
          <ul class="links">
            <li class="first"><a title="Your Account" href="login.html">Your Account</a></li>
            <li><a title="Information" href="#">Information</a></li>
            <li><a title="Addresses" href="#">Addresses</a></li>
            <li><a title="Addresses" href="#">Discount</a></li>
            <li><a title="Orders History" href="#">Orders History</a></li>
            <li class="last"><a title=" Additional Information" href="#">Additional Information</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-sm-4 col-md-2 col-xs-12 footer_links">
          <h4>Information</h4>
          <ul class="links">
            <li class="first"><a href="sitemap.html" title="Site Map">Site Map</a></li>
            <li><a href="#" title="Search Terms">Search Terms</a></li>
            <li><a href="#" title="Advanced Search">Advanced Search</a></li>
            <li><a href="contact_us.html" title="Contact Us">Contact Us</a></li>
            <li><a href="#" title="Suppliers">Suppliers</a></li>
            <li class=" last"><a href="#" title="Our stores" class="link-rss">Our stores</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-sm-8 col-md-3 col-xs-12">
          <h4>Sign up for emails</h4>
          <div class="newsletter">
            <form id="newsletter-validate-detail" method="post">
              <div id="container_form_news">
                <div id="container_form_news2">
                  <input type="text" class="input-text required-entry validate-email" value="Enter your email address" title="Sign up for our newsletter" id="newsletter" name="email">
                  <button class="button subscribe" title="Subscribe" type="submit"><span>Subscribe</span></button>
                </div>
              </div>
            </form>
          </div>
          <div class="social">
            <h4>Follow Us</h4>
            <ul class="link">
              <li class="fb"><a href="#"></a></li>
              <li class="tw"><a href="#"></a></li>
              <li class="googleplus"><a href="#"></a></li>
              <li class="rss"><a href="#"></a></li>
              <li class="linkedin"><a href="#"></a></li>
              <li class="youtube"><a href="#"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container inner">
      <div class="row">
        <div class="col-sm-5 col-xs-12 coppyright"> &copy; 2013. All Rights Reserved. Designed by <a href="http://www.magikcommerce.com/">magikcommerce.com</a> </div>
        <div class="col-sm-7 col-xs-12 bottom_links">
          <ul class="links">
            <li><a href="#catalogsearch/advanced/" title="Advanced Search">Magento Themes</a></li>
            <li><a href="#" title="Orders and Returns">Premium Themes</a></li>
            <li><a href="#contacts/" title="Contact Us">Responsive Themes</a></li>
            <li class="last"><a href="#contacts/" title="Contact Us">Magento Extensions</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- End Footer -->

<!-- JavaScript --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/common.js"></script> 
<script type="text/javascript" src="js/slider.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 
<script type="text/javascript">
//<![CDATA[
jQuery(function() {
jQuery(".slideshow").cycle({
fx: 'scrollHorz', easing: 'easeInOutCubic', timeout: 10000, speedOut: 800, speedIn: 800, sync: 1, pause: 1, fit: 0, 			pager: '#home-slides-pager',
prev: '#home-slides-prev',
next: '#home-slides-next'
});
});
//]]>
</script>
</body>
</html>
