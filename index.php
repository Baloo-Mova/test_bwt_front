<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lookshop</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/> 
        <link href="css/etalage.css" rel="stylesheet" type="text/css"/> 
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/swiper.css" rel="stylesheet" type="text/css"/>
        <link href='http://fonts.googleapis.com/css?family=Oxygen:300,400,700' rel='stylesheet' type='text/css'>
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <!-- HEADER -->

        <div class="header">
            <div class="header_top">
                <div class="container header_container">
                    <div class="header_top_left">
                        <p>customer care: 888-23-4567</p>
                    </div>
                    <div class="header_top_right">
                        <div class="lang_list">
                            <select tabindex="4" class="dropdown">
                                <option value="1" class="label">$ Us</option> 
                                <option value="2" class="label">$ Us</option> 
                                <option value="3" class="label">&euro; Euro</option>
                            </select>
                        </div>
                        <ul class="header_user_info">
                            <a class="login" href="#">
                                <i class="user"></i> 
                                <li class="user_desc">My Account</li>
                            </a>
                            <div class="clearfix"> </div>
                        </ul>
                        <!-- start search-->
                        <div class="search-box">
                            <span class="sb-icon-search"> </span>
                        </div>  
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>

            <div class="header_bottom">
                <div class="container">	 

                    <div class="logo">
                        <a href="#"><img src="images/logo.png" alt=""/></a>
                    </div>	 
                    <!--<div class="header_bottom_right">-->		

                    <div class="shopping_cart">
                        <ul class="shopping_cart_top">
                            <a href="#">
                                <li class="shop_left">Your cart</li>
                                <li class="shop_right"><img src="images/arrow1.png" alt=""/></li>
                                <div class="clearfix"></div>	
                            </a>
                        </ul>
                        <ul class="shopping_bag">
                            <a href="#">
                                <li class="bag_left"><img src="images/bag.png" alt=""/></li>
                                <li class="bag_right"> 0 Items | $ 0</li>
                                <div class="clearfix"></div>	
                            </a>
                        </ul>		
                    </div>

                    <!--<div class="h_menu4"> start h_menu4 --> 
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header mobile-navbar">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsed-menu">
                            <span class="sr-only"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>

                        </button>
                        <a class="navbar-brand" href="#">Menu</a>
                    </div>

                    <div id="collapsed-menu" class="collapse navbar-collapse js-navbar-collapse text-center">
                        <ul class="nav">
                            <li><a href="#">New<span class="caret"></span></a></li>
                            <li><a href="#">Designers<span class="caret"></span></a></li>
                            <li><a href="#">Women<span class="caret"></span></a></li>
                            <li><a href="#">Men<span class="caret"></span></a></li>
                            <li><a href="#">Clearence<span class="caret"></span></a></li>
                        </ul> 
                    </div>
                    <!--</div> end h_menu4 -->

                    <div class="clearfix"></div>		   
                    <!-- </div> -->
                </div>
            </div>
        </div>


        <!-- HEADER SLIDER -->
        <div class="slider">
            <div class="callbacks_container">
                <ul class="rslides" id="slider">
                    <li>
                        <!--                        <div class="rslides_button_position">
                                                     <a href="#" class="btn1 btn-primary1 shop_now_btn"> SHOP NOW </a>
                                                </div>-->
                        <img src="images/banner.jpg" class="img-responsive" alt=""/>
                    </li> 
                    <li><img src="images/banner.jpg" class="img-responsive" alt=""/></li>
                    <li><img src="images/banner.jpg" class="img-responsive" alt=""/></li> 
                </ul>
            </div>
        </div>
        <!-- HEader slider END -->


        <div class="column_center">
            <div class="container">
                <div class="search">
                    <div class="stay">Stay updated</div>
                    <div class="stay_right">
                        <input type="text" value="" placeholder="Your email adress">
                        <input type="submit" value="">
                    </div>
                    <div class="clearfix"> </div>
                </div>


                <ul class="social">
                    <div class="social_container">
                        <li class="find">Find us here</li>
                        <li><a href="#"> <i class="fb"> </i> </a></li>
                        <li><a href="#"> <i class="tw"> </i> </a></li>
                        <li><a href="#"> <i class="dribble"> </i></a></li>
                        <div class="clearfix"> </div>
                    </div>
                </ul>  
            </div>
        </div>

        <div class="brand">
            <div class="container">
                <img src="images/brands.jpg" class="img-responsive" alt=""/>
            </div>
        </div>

        <div class="sap_tabs">	
            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                <ul class="resp-tabs-list">
                    <li class="resp-tab-item" aria-controls="tab_item-0" role="tab" onclick="reinitSwiper(swiper1)"><span>What's Hot</span></li>
                    <li class="resp-tab-item" aria-controls="tab_item-1" role="tab" onclick="reinitSwiper(swiper2)"><span>Designers</span></li>
                    <li class="resp-tab-item" aria-controls="tab_item-2" role="tab" onclick="reinitSwiper(swiper3)"><span>Featured</span></li>
                    <li class="resp-tab-item" aria-controls="tab_item-3" role="tab" onclick="reinitSwiper(swiper4)"><span>Latest</span></li>
                    <div class="clear"></div>
                </ul>	

                <div class="resp-tabs-container"> 
                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0"> 
                        <div class="swiper-container container1"> 
                            <!--                            <div class="swiper-button-prev swiper-button-white"></div>
                                                        <div class="swiper-button-next swiper-button-white" ></div>-->
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b3.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                    <div class="sale-box1"> </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                    <div class="sale-box1"> </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Add Pagination --> 
                            <button class="button"> LOAD MORE </button>
                        </div>

                    </div> 
                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                        <div class="swiper-container container2">  
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                    <div class="sale-box1"> </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                    <div class="sale-box1"> </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                    <div class="sale-box1"> </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                    <div class="sale-box1"> </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                    <div class="sale-box1"> </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                    <div class="sale-box1"> </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                    <div class="sale-box1"> </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                    <div class="sale-box1"> </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                    <div class="sale-box1"> </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                    <div class="sale-box1"> </div>
                                </div>
                            </div>
                            <!-- Add Pagination --> 
                            <button class="button"> LOAD MORE </button>
                        </div>
                    </div>	
                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
                        <div class="swiper-container container3">  
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                    <div class="sale-box1"> </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                    <div class="sale-box1"> </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Add Pagination --> 
                            <button class="button"> LOAD MORE </button>
                        </div>
                    </div>	
                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
                        <div class="swiper-container container4"> 
                            <!--                            <div class="swiper-button-prev swiper-button-white"></div>
                                                        <div class="swiper-button-next swiper-button-white" ></div>-->
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                    <div class="sale-box1"> </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                    <div class="sale-box1"> </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="view view-first">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                        <div class="tab_desc">
                                            <h3><a href="#">Feel Tank</a></h3>
                                            <p>$59.95</p>
                                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Add Pagination --> 
                            <button class="button"> LOAD MORE </button>
                        </div>
                    </div>		        					 	        					 
                </div>	
            </div>
        </div>


        <div class="clearence">
            <div class="container">
                <div class="m_3"><span class="left_line1"> </span><i class="clearence"> </i><span class="right_line1"> </span></div>
            </div>
        </div>


        <div class="content_bottom">
            <div class="container">
                <div class="row content_bottom_row">
                    <div class="view view-first col-lg-3 col-md-4 col-sm-4 col-xs-6">
                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                        <div class="tab_desc">
                            <h3><a href="#">Feel Tank</a></h3>
                            <p>$59.95</p>
                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="view view-first col-lg-3 col-md-4 col-sm-4 col-xs-6">
                        <img src="images/b2.jpg" class="img-responsive" alt=""/>
                        <div class="tab_desc">
                            <h3><a href="#">Feel Tank</a></h3>
                            <p>$59.95</p>
                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                        </div>
                    </div> 
                    <div class="view view-first col-lg-3 col-md-4 col-sm-4 hidden-xs">
                        <img src="images/b3.jpg" class="img-responsive" alt=""/>
                        <div class="tab_desc">
                            <h3><a href="#">Feel Tank</a></h3>
                            <p>$59.95</p>
                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                        </div>
                    </div> 
                    <div class="view view-first col-lg-3 col-md-4  hidden-sm hidden-xs">
                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                        <div class="tab_desc">
                            <h3><a href="#">Feel Tank</a></h3>
                            <p>$59.95</p>
                            <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
                        </div>
                    </div> 

                </div>
                <button class="button"> LOAD MORE </button>
            </div>
        </div> 

        <div class="brands hidden-xs">
            <div class="wrapper">
                <div class="brands__title">FAVOURITE BRANDS</div>
                <img class="brands__logo" src="images/ic-brand-1.png" alt="Brand logo">
                <img class="brands__logo" src="images/ic-brand-2.png" alt="Brand logo">
                <img class="brands__logo" src="images/ic-brand-3.png" alt="Brand logo">
                <img class="brands__logo" src="images/ic-brand-4.png" alt="Brand logo">
                <img class="brands__logo" src="images/ic-brand-5.png" alt="Brand logo">
                <img class="brands__logo" src="images/ic-brand-6.png" alt="Brand logo">
                <img class="brands__logo hidden-sm" src="images/ic-brand-7.png" alt="Brand logo">
                <img class="brands__logo hidden-sm" src="images/ic-brand-8.png" alt="Brand logo">
            </div>
        </div>

        <div class="grid-1 hidden-xs">
            <div class="container">
                <h1>About LookShop</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dapibus tortor ut turpis molestie maximus. Pellentesque egestas nulla felis, vel consectetur neque mollis non. Integer pellentesque egestas rhoncus. Duis ullamcorper dui ut diam consectetur mattis. Nam ac lacinia nisl, at porta ipsum. Etiam imperdiet nisl et pulvinar ultricies. Maecenas fringilla lobortis purus, sed maximus sem varius in. Duis ut ullamcorper dolor. Aenean non justo id lacus sodales egestas. Praesent mollis volutpat imperdiet. Nam tincidunt leo mauris, sed lobortis sem iaculis ut. Etiam convallis enim sit amet tortor porta mollis. Curabitur non urna vitae turpis scelerisque imperdiet lacinia quis magna.</p>
            </div>
        </div>
        <div class="grid-2 hidden-xs">
            <div class="container">
                <p>We accept<img src="images/paypal.png" class="img-responsive" alt="" align="middle" /></p>
            </div>
        </div>
        <div class="footer_top hidden-xs">
            <div class="container">
                <div class="col-lg-8 col-sm-6">
                    <div class="col-lg-3 col-sm-6 grid-3">
                        <h3>Customer Service</h3>
                        <ul class="footer_list">
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Terms of payment</a></li>
                            <li><a href="#">Terms of sale</a></li>
                            <li><a href="#">Terms and conditions</a></li>
                            <li><a href="#">Returns and Refunds</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6 grid-3">
                        <h3>Information</h3>
                        <ul class="footer_list">
                            <li><a href="#">Affiliate</a></li>
                            <li><a href="#">Cookies</a></li>
                            <li><a href="#">How to Shop</a></li>
                            <li><a href="#">About Nelly</a></li>
                            <li><a href="#">Investor relations</a></li>
                        </ul>
                    </div>
                    <div class="clearfix hidden-lg" style="margin-bottom: 40px;"></div>
                    <div class="col-lg-3 col-sm-6 grid-3">
                        <h3>Campaigns</h3>
                        <ul class="footer_list">
                            <li><a href="#">Evening Dresses</a></li>
                            <li><a href="#">Makeup</a></li>
                            <li><a href="#">Fashion forward</a></li>
                            <li><a href="#">Training clothes</a></li>
                            <li><a href="#">Special Occasion Dresses</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6 grid-3">
                        <h3>Stores</h3>
                        <ul class="footer_list">
                            <li><a href="#">Paris</a></li>
                            <li><a href="#">New York</a></li>
                            <li><a href="#">London</a></li>
                            <li><a href="#">Madrid</a></li>
                            <li><a href="#">Tokio</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="col-lg-6 col-sm-6 grid-3">
                        <h3>Social</h3>
                        <ul class="footer_social">
                            <li><a href="#"> <i class="tw1"> </i> </a></li>
                            <li><a href="#"> <i class="db1"> </i> </a></li>
                            <li><a href="#"> <i class="fb1"> </i></a></li>
                            <li><a href="#"> <i class="g1"> </i></a></li>
                            <li><a href="#"> <i class="thumb"> </i></a></li>
                            <li><a href="#"> <i class="vimeo"> </i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <img src="images/secure.png" alt=""/>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="footer_bottom">
            <div class="container">
                <div class="cssmenu hidden-xs">
                    <ul>
                        <li class="active"><a href="login.html">Privacy & Cookies</a></li> |
                        <li><a href="checkout.html">Terms & Conditions</a></li> |
                        <li><a href="checkout.html">Accessibility</a></li> |
                        <li><a href="login.html">Store Directory</a></li> |
                        <li><a href="register.html">About Us</a></li>
                    </ul>
                </div>
                <div class="copy">
                    <p>&copy; LookShop.com</p>
                    <p>All Rights Reserved</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>


        <script src="js/jquery-1.9.1.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script> 
        <script src="js/responsiveslides.js" type="text/javascript"></script>
        <script src="js/jquery.easydropdown.js" type="text/javascript"></script>
        <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>  
        <script src="js/swiper.js" type="text/javascript"></script>
        <script type="text/javascript">
                            $(document).ready(function () {
                                $('#horizontalTab').easyResponsiveTabs({
                                    type: 'default', //Types: default, vertical, accordion           
                                    width: 'auto', //auto or any width like 600px
                                    fit: true, // 100% fit in a container 
                                });
                            });
        </script>
        <script>
            $(function () {
                $("#slider").responsiveSlides({
                    //auto: true,
                    nav: true,
                    speed: 500,
                    namespace: "callbacks",
                    pager: true,
                });
            });
        </script> 
        <script>
            var swiper1 = new Swiper('.container1', {
                slidesPerView: 3,
                paginationClickable: true,
                spaceBetween: 60
            });
            var swiper2 = new Swiper('.container2', {
                slidesPerView: 3,
                paginationClickable: true,
                spaceBetween: 60
            });
            var swiper3 = new Swiper('.container3', {
                slidesPerView: 3,
                paginationClickable: true,
                spaceBetween: 60
            });
            var swiper4 = new Swiper('.container4', {
                slidesPerView: 3,
                paginationClickable: true,
                spaceBetween: 60
            });

            function reinitSwiper(swiper) {
                setTimeout(function () {
                    swiper.onResize();
                });
            }

            reinitSwiper(swiper1);
        </script>
    </body>
</html>
