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
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/css/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="/css/slider.css" media="all">
<link rel="stylesheet" type="text/css" href="/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="/css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="/css/style.css" media="all">
<link rel="stylesheet" type="text/css" href="/css/responsive.css">

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,300,700,800,400,600' rel='stylesheet' type='text/css'>
</head>

<body class="cms-index-index cms-home-page">

<header>
  <div class="top-links">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-4 col-xs-7"> 
          <!-- Header Language -->
          <div class="dropdown language-box"> <a role="button" data-toggle="dropdown" data-target="#" class="block-language dropdown-toggle language-switcher" href="#"> <img src="images/english.png" alt="language"> English <span class="caret"></span> </a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="images/eqyjk03342_scalyfullzip,v_kyh6_frt1.jpg" alt="language"> English </a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="images/192770000_1.jpg" alt="language"> French </a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="images/3424427-p-MULTIVIEW._CB514432018_.jpg"  alt="language"> German </a></li>
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
              <div class="login">
              @if (Auth::guest())
                  <li><a href="{{ route('login') }}">Login |</a></li>
                  <li><a href="{{ route('register') }}">Register</a></li>
              @else
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <ul class="dropdown-menu" role="menu">
                          <li>
                              <a href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                  Logout
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form>
                          </li>
                      </ul>
                  </li>
              @endif
              </div>
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
                    <li class="item odd"> <a href="#" title="Skater Dress In Leaf Print" class="product-image"><img src="../products-images/product1.jpg" alt="Skater Dress In Leaf Print" width="55"></a>
                      <div class="product_details"> <a href="#" title="Remove This Item" onClick="" class="btn-remove1">Remove This Item</a> <a class="btn-edit" title="Edit item" href="#">Edit item</a>
                        <p class="product-name"><a href="#">Skinny Jeans in Audacity of Taupe</a> </p>
                        <strong>1</strong> x <span class="price">$20.00</span> </div>
                    </li>
                    <li class="item even"> <a href="#" title="Product layout: large content" class="product-image"><img src="../products-images/product1.jpg" alt="Product layout: large content" width="55"></a>
                      <div class="product_details"> <a href="#" title="Remove This Item" onClick="" class="btn-remove1">Remove This Item</a> <a class="btn-edit" title="Edit item" href="#">Edit item</a>
                        <p class="product-name"><a href="#">V-Neck Tee in Biscuits n' Navy</a> </p>
                        <strong>1</strong> x <span class="price">$230.00</span> </div>
                    </li>
                    <li class="item last odd"> <a href="#" title="Skater Dress In Leaf Print" class="product-image"><img src="../products-images/product1.jpg" alt="Skater Dress In Leaf Print" width="55"></a>
                      <div class="product_details"> <a href="#" title="Remove This Item" onClick="" class="btn-remove1">Remove This Item</a><a class="btn-edit" title="Edit item" href="#">Edit item</a>
                        <p class="product-name"><a href="#">V-Neck Tee in Biscuits n' Navy</a> </p>
                        <strong>2</strong> x <span class="price">$420.00</span> </div>
                    </li>
                  </ul>
                  <div class="top-subtotal">Subtotal: <span class="price">$520.00</span></div>
                  <div class="actions">
                    <button class="btn-checkout" type="button"><span>Checkout</span></button>
                    <button class="view-cart" type="button" onclick="window.location.href='/showmycart'"><span>View Cart</span></button>
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
                        <!-- <li class="level1"><a href="../green/index.html"><span>Green</span></a> </li>
                        <li class="level1"><a href="../aqua/index.html"><span>Aqua</span></a> </li>
                        <li class="level1"><a href="../pink/index.html"><span>Pink</span></a> </li>
                        <li class="level1"><a href="../red/index.html"><span>Red</span></a> </li>
                        <li class="level1"><a href="../yellow/index.html"><span>Yellow</span></a> </li>
                      </ul>-->
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
                    <li class="level0 nav-6 level-top first parent"> <a class="level-top" href="/category/1"> <span>Women</span> </a>
                      <ul class="level0">
                        <li class="level1 nav-6-1 first"> <a href="grid.html"> <span>Unlocked phones</span> </a> </li>
                        <li class="level1 nav-6-2"> <a href="grid.html"> <span>Cell Phones with Service</span> </a> </li>
                        <li class="level1 nav-6-3"> <a href="grid.html"> <span>Sim cards</span> </a> </li>
                        <li class="level1 nav-6-4 last"> <a href="grid.html"> <span>Accessories</span> </a> </li>
                      </ul>
                    </li>
                    <li class="level0 nav-7 level-top parent"> <a class="level-top" href="/category/2"> <span>Men</span> </a>
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
        <li class="level0 parent drop-menu"  id="current-page"><a href="index.html"><span>Home</span> </a>
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
          <li class="level0 nav-5 level-top first"> <a href="grid.html" class="level-top "> <span>Women</span> </a>
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
                  <div class="push_img"> <a href="#"> <img  alt=""   src="images/6XL.jpg" width=" 137"> </a> </div>
                  <div class="push_text">Lorem Ipsum is simply dummy text of the printing</div>
                </div>
                <div class="push_item">
                  <div class="push_img"> <a href="#"> <img  alt="" src="images/S-SABOR-2017-russo-estilo-Primavera-Outono-Novas-mulheres-cor-s-lida-vestido-longo-com-lace.jpg" width="137"> </a> </div>
                  <div class="push_text">Lorem Ipsum is simply dummy text of the printing</div>
                </div>
                <div class="push_item">
                  <div class="push_img"> <a href="#"> <img  alt="" src="images/S-SABOR-2017-russo-estilo-Primavera-Outono-Novas-mulheres-cor-s-lida-vestido-longo-com-lace.jpg" width="137"> </a> </div>
                  <div class="push_text">Lorem Ipsum is simply dummy text of the printing</div>
                </div>
                <div class="push_item push_item_last">
                  <div class="push_img"> <a href="#"> <img  alt="" src="images/S-SABOR-2017-russo-estilo-Primavera-Outono-Novas-mulheres-cor-s-lida-vestido-longo-com-lace.jpg" width="137"> </a> </div>
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
                <div class="nav-block nav-block-right std grid12-4"><a href="grid.html"><img src="images/download.jpg"  alt="menu furniture" class="fade-on-hover"></a> </div>
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

<div class="slider-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-sm-3 col-xs-12">
        <div id="magik-verticalmenu" class="block magik-verticalmenu">
          <div class="nav-title"> <span>Categories</span> </div>
          <b class="caret-arrow">&nbsp;</b>
          <div class="nav-content">
            <div class="navbar navbar-inverse">
              <div id="verticalmenu" class="verticalmenu" role="navigation">
                <div class="navbar">
                  <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav verticalmenu">
                      <li class=" parent dropdown "> <a href="grid.html" class="dropdown-toggle" data-toggle="dropdown"><span class="menu-title">Women</span><b class="round-arrow"></b></a>
                        <div class="dropdown-menu" style="width:580px">
                          <div class="dropdown-menu-inner">
                            <div class="row">
                              <div class="mega-col" data-widgets="wid-5" data-colwidth="6">
                                <div class="mega-col-inner">
                                  <div class="ves-widget">
                                    <div class="menu-title">Styliest Bag </div>
                                    <div class="widget-html">
                                      <div class="widget-inner">
                                        <ul>
                                          <li class="first"> <a href="grid.html"> <span>Clutch Handbags</span> </a> </li>
                                          <li> <a href="grid.html"> <span>Diaper Bags</span> </a> </li>
                                          <li> <a href="grid.html"> <span>Bags</span> </a> </li>
                                          <li class="last"> <a href="grid.html"> <span>Hobo Handbags</span> </a> </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="mega-col" data-colwidth="6" data-widgets="wid-7">
                                <div class="mega-col-inner">
                                  <div class="magik-widget">
                                    <div class="menu-title">Material Bag</div>
                                    <div class="widget-html">
                                      <div class="widget-inner">
                                        <ul>
                                          <li class="first"> <a href="grid.html"> <span>Beaded Handbags</span> </a> </li>
                                          <li> <a href="grid.html"> <span>Fabric Handbags</span> </a> </li>
                                          <li> <a href="grid.html"> <span>Handbags</span> </a> </li>
                                          <li class="last"> <a href="grid.html"> <span>Leather Handbags</span> </a> </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="mega-col" data-colwidth="6" data-widgets="wid-7">
                                <div class="mega-col-inner">
                                  <div class="magik-widget">
                                    <div class="menu-title">Designer Bag</div>
                                    <div class="widget-html">
                                      <div class="widget-inner">
                                        <ul>
                                          <li class="first"> <a href="grid.html"> <span>Flat Shoes</span> </a> </li>
                                          <li> <a href="grid.html"> <span>Flat Sandals</span> </a> </li>
                                          <li> <a href="grid.html"> <span>Boots</span> </a> </li>
                                          <li class="last"> <a href="grid.html"> <span>Heels</span> </a> </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="mega-col" data-colwidth="6" data-widgets="wid-7">
                                <div class="mega-col-inner">
                                  <div class="magik-widget">
                                    <div class="menu-title">Cotton Bag</div>
                                    <div class="widget-html">
                                      <div class="widget-inner">
                                        <ul>
                                          <li class="first"> <a href="grid.html"> <span>Bracelets</span> </a> </li>
                                          <li> <a href="grid.html"> <span>Necklaces &amp; Pendants</span> </a> </li>
                                          <li> <a href="grid.html"> <span>Pendants</span> </a> </li>
                                          <li class="last"> <a href="grid.html"> <span>Pins &amp; Brooches</span> </a> </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="mega-col" data-colwidth="6" data-widgets="wid-6">
                                <div class="mega-col-inner">
                                  <div class="magik-widget">
                                    <div class="menu-title">Swimwear</div>
                                    <div class="widget-html">
                                      <div class="widget-inner">
                                        <ul>
                                          <li class="first"> <a href="grid.html"> <span>Swimsuits</span> </a> </li>
                                          <li> <a href="grid.html"> <span>Beach Clothing</span> </a> </li>
                                          <li> <a href="grid.html"> <span>Clothing</span> </a> </li>
                                          <li class="last"> <a href="grid.html"> <span>Bikinis</span> </a> </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="cat_img"><span class="left-cat-img"><img src="images/women_jwellery.png" alt="jwellery"></span>                          <span class="left-cat-img1"><img src="images/women_bag.png" alt="bag"></span> </div>
                        </div>
                      </li>
                      <li class="parent dropdown "> <a href="grid.html" class="dropdown-toggle" data-toggle="dropdown"><span class="menu-title">Men</span><b class="round-arrow"></b></a>
                        <div class="dropdown-menu" style="width:580px">
                          <div class="dropdown-menu-inner">
                            <div class="row">
                              <div class="mega-col" data-widgets="wid-5" data-colwidth="6">
                                <div class="mega-col-inner">
                                  <div class="ves-widget">
                                    <div class="menu-title">Shoes</div>
                                    <div class="widget-html">
                                      <div class="widget-inner">
                                        <ul>
                                          <li class="first"> <a href="grid.html"><span>Sport Shoes</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                          <li> <a href="grid.html"><span>Casual Shoes</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                          <li> <a href="grid.html"><span>Leather Shoes</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                          <li class="last"> <a href="grid.html"><span>Canvas shoes</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="mega-col" data-colwidth="6" data-widgets="wid-7">
                                <div class="mega-col-inner">
                                  <div class="magik-widget">
                                    <div class="menu-title">Dresses</div>
                                    <div class="widget-html">
                                      <div class="widget-inner">
                                        <ul>
                                          <li class="first"> <a href="grid.html"><span>Casual Dresses</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                          <li> <a href="grid.html"><span>Evening</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                          <li> <a href="grid.html"><span>Designer</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                          <li class="last"> <a href="grid.html"><span>Party</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="mega-col" data-colwidth="6" data-widgets="wid-7">
                                <div class="mega-col-inner">
                                  <div class="magik-widget">
                                    <div class="menu-title">Jackets</div>
                                    <div class="widget-html">
                                      <div class="widget-inner">
                                        <ul>
                                          <li class="first"> <a href="grid.html"><span>Coats</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                          <li> <a href="grid.html"><span>Formal Jackets</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                          <li> <a href="grid.html"><span>Leather Jackets</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                          <li class="last"> <a href="grid.html"><span>Blazers</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="mega-col" data-colwidth="6" data-widgets="wid-7">
                                <div class="mega-col-inner">
                                  <div class="magik-widget">
                                    <div class="menu-title">Watches</div>
                                    <div class="widget-html">
                                      <div class="widget-inner">
                                        <ul>
                                          <li class="first"> <a href="grid.html"><span>Fasttrack</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                          <li> <a href="grid.html"><span>Casio</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                          <li> <a href="grid.html"><span>Titan</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                          <li class="last"> <a href="grid.html"><span>Tommy-Hilfiger</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="mega-col" data-colwidth="6" data-widgets="wid-6">
                                <div class="mega-col-inner">
                                  <div class="magik-widget">
                                    <div class="menu-title">Sunglasses</div>
                                    <div class="widget-html">
                                      <div class="widget-inner">
                                        <ul>
                                          <li class="first"> <a href="grid-ban.html"><span>Ray Ban</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                          <li> <a href="grid.html"><span>Fasttrack</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                          <li> <a href="grid.html"><span>Police</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                          <li class="last"> <a href="grid.html"><span>Oakley</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="parent dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="grid.html"><span class="menu-title">Electronics</span><b class="round-arrow"></b></a>
                        <div class="dropdown-menu" style="width:580px">
                          <div class="dropdown-menu-inner">
                            <div class="row">
                              <div class="mega-col" data-widgets="wid-5" data-colwidth="6">
                                <div class="mega-col-inner">
                                  <div class="ves-widget">
                                    <div class="menu-title">Mobiles </div>
                                    <div class="widget-html">
                                      <div class="widget-inner">
                                        <ul>
                                          <li class="first"> <a href="grid.html"><span>Samsung</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                          <li> <a href="grid.html"><span>Nokia</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                          <li> <a href="grid.html"><span>iPhone</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                          <li class="last"> <a href="grid.html"><span>Sony</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="mega-col" data-colwidth="6" data-widgets="wid-7">
                                <div class="mega-col-inner">
                                  <div class="magik-widget">
                                    <div class="menu-title">Mobiles Accesories</div>
                                    <div class="widget-html">
                                      <div class="widget-inner">
                                        <ul>
                                          <li class="first"> <a href="grid.html"><span>Mobile Memory Cards</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                          <li> <a href="grid.html"><span>Cases &amp; Covers</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                          <li> <a href="grid.html"><span>Mobile Headphones</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                          <li class="last"> <a href="grid.html"><span>Bluetooth Headsets</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="mega-col" data-colwidth="6" data-widgets="wid-7">
                                <div class="mega-col-inner">
                                  <div class="magik-widget">
                                    <div class="menu-title">Cameras</div>
                                    <div class="widget-html">
                                      <div class="widget-inner">
                                        <ul>
                                          <li class="first"> <a href="grid.html"><span>Camcorders</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                          <li> <a href="grid.html"><span>Point &amp; Shoot</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                          <li> <a href="grid.html"><span>Digital SLR</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                          <li class="last"> <a href="grid.html"><span>Camera Accesories</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="mega-col" data-colwidth="6" data-widgets="wid-7">
                                <div class="mega-col-inner">
                                  <div class="magik-widget">
                                    <div class="menu-title">Audio & Video</div>
                                    <div class="widget-html">
                                      <div class="widget-inner">
                                        <ul>
                                          <li class="first"> <a href="grid.html"><span>MP3 Players</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                          <li> <a href="grid.html"><span>IPods</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                          <li> <a href="grid.html"><span>Speakers</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                          <li class="last"> <a href="grid.html"><span>Video Players</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="parent dropdown "> <a class="dropdown-toggle" data-toggle="dropdown" href="grid.html"><span class="menu-title">Furniture</span><b class="round-arrow"></b></a>
                        <div class="dropdown-menu" style="width:580px">
                          <div class="dropdown-menu-inner">
                            <div class="row">
                              <div class="mega-col" data-widgets="wid-5" data-colwidth="6">
                                <div class="mega-col-inner">
                                  <div class="ves-widget">
                                    <div class="menu-title">Living Room </div>
                                    <div class="widget-html">
                                      <div class="widget-inner">
                                        <ul>
                                          <li class="first"> <a href="grid.html"><span>Racks &amp; Cabinets</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                          <li> <a href="grid.html"><span>Sofas</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                          <li> <a href="grid.html"><span>Chairs</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                          <li class="last"> <a href="grid.html"><span>Tables</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="mega-col" data-colwidth="6" data-widgets="wid-7">
                                <div class="mega-col-inner">
                                  <div class="magik-widget">
                                    <div class="menu-title">Dining & Bar</div>
                                    <div class="widget-html">
                                      <div class="widget-inner">
                                        <ul>
                                          <li class="first"> <a href="grid.html"><span>Dining Table Sets</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                          <li> <a href="grid.html"><span>Serving Trolleys</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                          <li> <a href="grid.html"><span>Bar Counters</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                          <li class="last"> <a href="grid.html"><span>Dining Cabinets</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                          
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="mega-col" data-colwidth="6" data-widgets="wid-7">
                                <div class="mega-col-inner">
                                  <div class="magik-widget">
                                    <div class="menu-title">Bedroom</div>
                                    <div class="widget-html">
                                      <div class="widget-inner">
                                        <ul>
                                          <li class="first"> <a href="grid.html"><span>Beds</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                          <li> <a href="grid.html"><span>Chest of Drawers</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                          <li> <a href="grid.html"><span>Wardrobes &amp; Almirahs</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                          <li class="last"> <a href="grid.html"><span>Nightstands</span></a> </li>
                                          <!--level2 nav-6-1-1-->
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div data-widgets="wid-8" data-colwidth="6" class="mega-col">
                                <div class="mega-col-inner">
                                  <div class="magik-widget"> 
                                    <!-- <div class="menu-title">Demo Images</div> -->
                                    <div class="widget-image">
                                      <div class="widget-inner clearfix">
                                        <div><img title="" alt="" src="images/download.jpg"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class=""> <a href="grid.html"><span class="menu-title"> Boys</span></a></li>
                      <li class=""> <a href="grid.html"><span class="menu-title">Girls</span></a></li>
                      <li class=" parent dropdown "> <a href="grid.html" class="dropdown-toggle" data-toggle="dropdown"><span class="menu-title">Custom</span><b class="round-arrow"></b></a>
                        <div class="dropdown-menu" style="width:520px">
                          <div class="dropdown-menu-inner">
                            <div class="row">
                              <div class="mega-col" data-widgets="wid-1" data-colwidth="8">
                                <div class="mega-col-inner">
                                  <div class="magik-widget">
                                    <div class="product-block">
                                      <div class="image"><a href="grid.html"><img src="images/custom-img1.jpg" alt="Fauxwaii Shirt - Oldss" width="240"></a></div>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue.</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="mega-col right_col" data-widgets="wid-2" data-colwidth="8">
                                <div class="mega-col-inner">
                                  <div class="magik-widget">
                                    <div class="widget-product">
                                      <div class="widget-inner">
                                        <div class="product-block">
                                          <div class="image"><a href="grid.html"><img src="images/custom-img1.jpg" alt="Framed-Sleeve Mid" width="240"></a></div>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue.</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="mega-col" data-widgets="wid-1" data-colwidth="8">
                                <div class="mega-col-inner">
                                  <div class="magik-widget">
                                    <div class="product-block">
                                      <div class="image"><a href="grid.html"><img src="images/custom-img1.jpg" alt="Fauxwaii Shirt - Oldss" width="240"></a></div>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue.</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="mega-col right_col" data-widgets="wid-2" data-colwidth="8">
                                <div class="mega-col-inner">
                                  <div class="magik-widget">
                                    <div class="widget-product">
                                      <div class="widget-inner">
                                        <div class="product-block">
                                          <div class="image"><a href="grid.html"><img src="images/custom-img1.jpg" alt="Framed-Sleeve Mid" width="240"></a></div>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue.</p>
                                        </div>
                                      </div>
                                    </div>
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
            </div>
          </div>
        </div>
        <div class="cat_b_img"><img src="images/HEYKESON-Tshirt-Brand-2017-Male-Short-Sleeve-T-Shirt-O-Neck-Men-T-Shirt-Simple-splicing.jpg" width="237" alt="nav b"></div>
      </div>
      <div class="col-lg-9 col-sm-9 col-xs-12">
        <div class="the-slideshow slideshow-wrapper">
          <ul style="overflow: hidden;" class="slideshow">
            <li class="slide">
              <p><a href="#"> <img src="images/COLROVIE-Rood-OL-Elegante-Bodycon-Jurk-2017-Vrouwen-Een-Kant-Tiered-ruche-Leuke-Lange-Mouwen-Jurk.jpg" alt=""></a></p>
              <div class="caption light1 top-right">
                <div class="caption-inner">
                  <p class="heading">Women Collection 2014</p>
                  <div class="badge"><em>up to</em> <br>
                    70% <span>OFF</span></div>
                  <p class="heading1">Lorem Ipsum is simply dummy text of the printing and typesetting industry  it has been the industry's standard dummy</p>
                  <p class="intro-btn"><a  href="#" title="Click to see all features">Shop Now</a> </p>
                </div>
              </div>
            </li>
            <li class="slide">
              <p><a href="#"> <img src="images/HDY-Haoduoyi-Mesh-Sheer.jpg" alt=""></a></p>
              <div class="caption light top-left">
                <div class="caption-inner">
                  <p class="normal-text">Collection 2014</p>
                  <h2 class="heading permanent">You like this theme</h2>
                  <p class="normal-text1">tristique senectus </p>
                  <p class="intro-btn"><a  href="#" title="Click to see all features">Buy Now</a> </p>
                </div>
              </div>
            </li>
            <li class="slide">
              <p><a title="#" href="#"> <img src="images/GustOmerD-Brand-T-shirt-Men-s-V-neck-Slim-Fit-Pure-Cotton-T-shirt-Fashion-Short.jpg" alt=""> </a></p>
              <div class="caption light2 top-right">
                <div class="caption-inner">
                  <p class="heading">Responsive Layout</p>
                </div>
              </div>
            </li>
          </ul>
          <a href="#" id="home-slides-prev" class="backward browse-button">previous</a> <a href="#" id="home-slides-next" class="forward browse-button">next</a>
          <div id="home-slides-pager" class="tab-pager tab-pager-img tab-pager-ring-lgray"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="service-section">
  <div id="store-messages" class="messages-3 container">
    <div class="row">
      <div class="col-lg-4 col-sm-4 col-xs-12">
        <div class="message"><i class="icon-refresh">&nbsp;</i> <span><strong>Return &amp; Exchange</strong> in 3 days </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div>
      </div>
      <div class="col-lg-4 col-sm-4 col-xs-12">
        <div class="message"><i class="icon-truck">&nbsp;</i><span><strong>Free Shipping</strong> order over $99</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div>
      </div>
      <div class="col-lg-4 col-sm-4 col-xs-12">
        <div class="message"><i class="icon-discount">&nbsp;</i><span><strong>50% Off</strong> on all products</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div>
      </div>
    </div>
  </div>
</div>
<div class="offer-banner">
  <div class="offer-banner-section container">
    <div class="row">
      <div class="col-lg-3 col-sm-3 col-xs-12"><img src="images/steganaya-zhenskaya-kurtka-121.jpg" alt="banner1"></div>
      <div class="col-lg-6 col-sm-6 col-xs-12"><img src="images/3424427-p-MULTIVIEW._CB514432018_.jpg" width="" alt="banner2"></div>
      <div class="col-lg-3 col-sm-3 col-xs-12"> <img src="images/eqyjk03342_scalyfullzip,v_kyh6_frt1.jpg" alt="banner3"></div>
    </div>
  </div>
</div>
<!-- Best Seller Slider -->
<section class="main-col">
  <div class="container">
    <div class="best-seller-pro">
      <div class="slider-items-products">
        <div class="new_title center">
          <h2>Best Seller</h2>
        </div>
        <div id="best-seller-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col6"> 
            @foreach($product as $products)
            <!-- Item -->
            <div class="item">
              <div class="col-item">
                <div class="item-inner">
                  <div class="product-block">
                    <div class="product-image"> <a href="#">
                      <figure class="product-display">
                        <div class="sale-label sale-top-left">Sale</div>
                        <img src="/images/{{$products->img}}" class="product-mainpic" alt="" style="display: block;"> <img class="product-secondpic" alt="" src="/products-images/{{$products->img}}"> </figure>
                      </a> </div>
                    <div class="product-meta">
                      <div class="product-action"> <a class="addcart" href="/addtocart/{{$products->id}}"> <i class="icon-shopping-cart">&nbsp;</i> Add to cart </a> <a class="wishlist" href="wishlist.html"> <i class="icon-heart">&nbsp;</i> </a> <a class="quickview" href="quick_view.html"> <i class="icon-zoom">&nbsp;</i> </a> </div>
                    </div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title"> <a href="product_detail.html" title="Sample Product">{{$products->title}}</a> </div>
                      <div class="item-content">
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">{{$products->price}}</span> </span> </div>
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
              </div>
            </div>
            <!-- End Item --> 
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <div class="featured-pro">
      <div class="slider-items-products">
        <div class="new_title center">
          <h2>Featured Products</h2>
        </div>
        <div id="featured-product-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col6"> 
            
            <!-- Item -->
            <div class="item">
              <div class="col-item">
                <div class="item-inner">
                  <div class="product-block">
                    <div class="product-image"> <a href="product_detail.html">
                      <figure class="product-display">
                        <div class="sale-label sale-top-left">Sale</div>
                        <img src="../images/img_9753_1.jpg" class="product-mainpic" alt="" style="display: block;"> <img class="product-secondpic" alt="" src="../products-images/product1.jpg"> </figure>
                      </a> </div>
                    <div class="product-meta">
                      <div class="product-action"> <a class="addcart" href="shopping_cart.html"> <i class="icon-shopping-cart">&nbsp;</i> Add to cart </a> <a class="wishlist" href="wishlist.html"> <i class="icon-heart">&nbsp;</i> </a> <a class="quickview" href="quick_view.html"> <i class="icon-zoom">&nbsp;</i> </a> </div>
                    </div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title"> <a href="product_detail.html" title="Sample Product">Sample Product</a> </div>
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
              </div>
            </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item">
              <div class="col-item">
                <div class="item-inner">
                  <div class="product-block">
                    <div class="product-image"> <a href="product_detail.html">
                      <figure class="product-display">
                        <div class="sale-label sale-top-left">Sale</div>
                        <img src="../images/48a9994cfb2b2b49b02891deebacd6fe.jpg " class="product-mainpic" alt="" style="display: block;"> <img class="product-secondpic" alt="" src="../products-images/fb769ee1dcfdf13dde2d34669467c537.jpg"> </figure>
                      </a> </div>
                    <div class="product-meta">
                      <div class="product-action"> <a class="addcart" href="shopping_cart.html"> <i class="icon-shopping-cart">&nbsp;</i> Add to cart </a> <a class="wishlist" href="wishlist.html"> <i class="icon-heart">&nbsp;</i> </a> <a class="quickview" href="quick_view.html"> <i class="icon-zoom">&nbsp;</i> </a> </div>
                    </div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title"> <a href="product_detail.html" title="Sample Product">Sample Product</a> </div>
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
              </div>
            </div>
            <!-- End Item --> 
            <!-- Item -->
            <div class="item">
              <div class="col-item">
                <div class="item-inner">
                  <div class="product-block">
                    <div class="product-image"> <a href="product_detail.html">
                      <figure class="product-display">
                        <div class="sale-label sale-top-left">Sale</div>
                        <img src="../images/_-_-01-_-_-17__2.jpg" class="product-mainpic" alt="" style="display: block;"> <img class="product-secondpic" alt="" src="../products-images/product1.jpg"> </figure>
                      </a> </div>
                    <div class="product-meta">
                      <div class="product-action"> <a class="addcart" href="shopping_cart.html"> <i class="icon-shopping-cart">&nbsp;</i> Add to cart </a> <a class="wishlist" href="wishlist.html"> <i class="icon-heart">&nbsp;</i> </a> <a class="quickview" href="quick_view.html"> <i class="icon-zoom">&nbsp;</i> </a> </div>
                    </div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title"> <a href="product_detail.html" title="Sample Product">Sample Product</a> </div>
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
              </div>
            </div>
            <!-- End Item --> 
            <!-- Item -->
            <div class="item">
              <div class="col-item">
                <div class="item-inner">
                  <div class="product-block">
                    <div class="product-image"> <a href="product_detail.html">
                      <figure class="product-display">
                        <div class="sale-label sale-top-left">Sale</div>
                        <img src="../images/184601_2834_2734.jpg" class="product-mainpic" alt="" style="display: block;"> <img class="product-secondpic" alt="" src="../products-images/product1.jpg"> </figure>
                      </a> </div>
                    <div class="product-meta">
                      <div class="product-action"> <a class="addcart" href="shopping_cart.html"> <i class="icon-shopping-cart">&nbsp;</i> Add to cart </a> <a class="wishlist" href="wishlist.html"> <i class="icon-heart">&nbsp;</i> </a> <a class="quickview" href="quick_view.html"> <i class="icon-zoom">&nbsp;</i> </a> </div>
                    </div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title"> <a href="product_detail.html" title="Sample Product">Sample Product</a> </div>
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
              </div>
            </div>
            <!-- End Item --> 
            <!-- Item -->
            <div class="item">
              <div class="col-item">
                <div class="item-inner">
                  <div class="product-block">
                    <div class="product-image"> <a href="product_detail.html">
                      <figure class="product-display">
                        <div class="sale-label sale-top-left">Sale</div>
                        <img src="../products-images/product1.jpg" class="product-mainpic" alt="" style="display: block;"> <img class="product-secondpic" alt="" src="../products-images/product1.jpg"> </figure>
                      </a> </div>
                    <div class="product-meta">
                      <div class="product-action"> <a class="addcart" href="shopping_cart.html"> <i class="icon-shopping-cart">&nbsp;</i> Add to cart </a> <a class="wishlist" href="wishlist.html"> <i class="icon-heart">&nbsp;</i> </a> <a class="quickview" href="quick_view.html"> <i class="icon-zoom">&nbsp;</i> </a> </div>
                    </div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title"> <a href="product_detail.html" title="Sample Product">Sample Product</a> </div>
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
              </div>
            </div>
            <!-- End Item --> 
            <!-- Item -->
            <div class="item">
              <div class="col-item">
                <div class="item-inner">
                  <div class="product-block">
                    <div class="product-image"> <a href="product_detail.html">
                      <figure class="product-display">
                        <div class="sale-label sale-top-left">Sale</div>
                        <img src="../products-images/product1.jpg" class="product-mainpic" alt="" style="display: block;"> <img class="product-secondpic" alt="" src="../products-images/product1.jpg"> </figure>
                      </a> </div>
                    <div class="product-meta">
                      <div class="product-action"> <a class="addcart" href="shopping_cart.html"> <i class="icon-shopping-cart">&nbsp;</i> Add to cart </a> <a class="wishlist" href="wishlist.html"> <i class="icon-heart">&nbsp;</i> </a> <a class="quickview" href="quick_view.html"> <i class="icon-zoom">&nbsp;</i> </a> </div>
                    </div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title"> <a href="product_detail.html" title="Sample Product">Sample Product</a> </div>
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
              </div>
            </div>
            <!-- End Item --> 
               
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Best Seller Slider -->

<section class="blog_fix latest-news">
  <div class="container">
    <div class="row">
      <div class="new_title center">
        <h2><span>Latest Blog</span></h2>
      </div>
      
      <div class="col-xs-12 col-sm-3">
        <div class="blog_inner">
          <div class="blog-img"> <img src="images/d3b42abc2ca3bfe4e108bfa28aec9d5e.jpg" alt="Blog image">
            <div class="mask"> <a class="info" href="blog_detail.html">Read More</a> </div>
          </div>
          <h2><a href="blog_detail.html">Pellentesque habitant morbi</a> </h2>
          <div class="post-date"><i class="icon-calendar"></i> Apr 10, 2014</div>
          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce sit  ... </p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-3">
        <div class="blog_inner">
          <div class="blog-img"> <img src="images/img_9469_1.jpg" alt="Blog image">
            <div class="mask"> <a class="info" href="blog_detail.html">Read More</a> </div>
          </div>
          <h2><a href="blog_detail.html">Pellentesque habitant morbi</a> </h2>
          <div class="post-date"><i class="icon-calendar"></i> Apr 10, 2014</div>
          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce sit  ... </p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-3">
        <div class="blog_inner">
          <div class="blog-img"> <img src="images/980252.jpg" alt="Blog image">
            <div class="mask"> <a class="info" href="blog_detail.html">Read More</a> </div>
          </div>
          <h2><a href="blog_detail.html">Pellentesque habitant morbi</a> </h2>
          <div class="post-date"><i class="icon-calendar"></i> Apr 10, 2014</div>
          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce sit  ... </p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-3">
        <div class="blog_inner">
          <div class="blog-img"> <img src="images/18939109_mmdb.jpg" alt="Blog image">
            <div class="mask"> <a class="info" href="blog_detail.html">Read More</a> </div>
          </div>
          <h2><a href="blog_detail.html">Pellentesque habitant morbi</a> </h2>
          <div class="post-date"><i class="icon-calendar"></i> Apr 10, 2014</div>
          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce sit  ... </p>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="our-features-box">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-xs-12 col-sm-4">
        <div class="feature-box">
          <div class="icon-reponsive">&nbsp;</div>
          <div class="content">Responsive Theme <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec cursus mi nec lectus tempor. </span> </div>
        </div>
      </div>
      <div class="col-md-4 col-xs-12 col-sm-4">
        <div class="feature-box">
          <div class="icon-admin">&nbsp;</div>
          <div class="content">Powerful Admin Panel <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec cursus mi nec lectus tempor. </span></div>
        </div>
      </div>
      <div class="col-md-4 col-xs-12 col-sm-4">
        <div class="feature-box">
          <div class="icon-support">&nbsp;</div>
          <div class="content">Premium Support <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec cursus mi nec lectus tempor. </span> </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer Starts -->
<footer>
  <div class="brand-logo">
    <div class="container">
      <div class="slider-items-products">
        <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col6"> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/Без названия.png" width="137" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/images.jpg" width="137"  alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/bc3938e4d0c3e55e87394154c06cdc88.png" width="137" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/Ebay.png" width="57" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/images.jpg" width="137"  alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/Без названия.png" width="137" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/bc3938e4d0c3e55e87394154c06cdc88.png" width="137" alt="Image"></a> </div>
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
<script type="text/javascript" src="/js/jquery.min.js"></script> 
<script type="text/javascript" src="/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="/js/common.js"></script> 
<script type="text/javascript" src="/js/slider.js"></script> 
<script type="text/javascript" src="/js/owl.carousel.min.js"></script> 
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
