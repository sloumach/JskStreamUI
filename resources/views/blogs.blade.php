<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SportsMagazine Blog Detail</title>

    <!-- Css Files -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/flaticon.css" rel="stylesheet">
    <link href="css/slick-slider.css" rel="stylesheet">
    <link href="css/fancybox.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="css/color.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <style>
    .truncate-text {
        display: block;
        display: -webkit-box;
        max-width: 100%;
        height: auto;
        margin: 0 auto;
        font-size: 14px;
        line-height: 1.4em;
        -webkit-line-clamp: 2; /* Nombre de lignes à afficher avant la troncature */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>
  <body>

    <!--// Main Wrapper \\-->
    <div class="sportsmagazine-main-wrapper">

        <!--// Header \\-->
        <header id="sportsmagazine-header" class="sportsmagazine-header-one">

            <!--// TopStrip \\-->
            <div class="sportsmagazine-topstrip">
                <div class="container">
                    <div class="row">
                        <aside class="col-md-4">
                            <ul class="sportsmagazine-social-network">
                                <li><a href="#" class="sportsmagazine-colorhover fa fa-facebook-official"></a></li>
                                <li><a href="#" class="sportsmagazine-colorhover fa fa-twitter-square"></a></li>
                                <li><a href="#" class="sportsmagazine-colorhover fa fa-linkedin-square"></a></li>
                                <li><a href="#" class="sportsmagazine-colorhover fa fa-google-plus-square"></a></li>
                            </ul>
                        </aside>
                        {{-- <aside class="col-md-8">
                            <ul class="sportsmagazine-user-section">
                                <li><i class="fa fa-globe"></i> <a href="#">Support</a></li>
                                <li><i class="fa fa-dollar"></i> <a href="#">Currency : USD</a></li>
                                <li><i class="fa fa-shopping-cart"></i> <a href="#" class="sportsmagazine-open-cart">Cart (0)</a>
                                    <div class="sportsmagazine-cart-box">
                                        <h2>You have 2 items in the cart</h2>
                                        <ul>
                                            <li>
                                                <figure>
                                                    <a href="#"><img src="extra-images/cartbox-1.png" alt=""></a>
                                                </figure>
                                                <div class="sportsmagazine-cartbox-text">
                                                    <h6><a href="#">Key Management Model The 60+ Models</a></h6>
                                                    <div class="sportsmagazine-rating"><span class="sportsmagazine-rating-box" style="width:80%"></span></div>
                                                    <span class="sportsmagazine-cartbox-price sportsmagazine-color">$35.99 <small>$43.00</small></span>
                                                </div>
                                            </li>
                                            <li>
                                                <figure>
                                                    <a href="#"><img src="extra-images/cartbox-2.png" alt=""></a>
                                                </figure>
                                                <div class="sportsmagazine-cartbox-text">
                                                    <h6><a href="#">Pyramid Principle: Logic Writing &amp; Thinking</a></h6>
                                                    <div class="sportsmagazine-rating"><span class="sportsmagazine-rating-box" style="width:100%"></span></div>
                                                    <span class="sportsmagazine-cartbox-price sportsmagazine-color">$21.00</span>
                                                </div>
                                            </li>
                                        </ul>
                                        <h5>Subtotal <span class="sportsmagazine-color">$1343</span></h5>
                                        <div class="sportsmagazine-cart-link"><a href="#" class="sportsmagazine-cartbox-btn sportsmagazine-bgcolorhover"><i class="flaticon-tool"></i> Go to Checkout</a></div>
                                    </div>
                                </li>
                                <li><i class="fa fa-user"></i> <a href="#" data-toggle="modal" data-target="#loginModal">Login</a></li>
                                <li><i class="fa fa-sign-in"></i> <a href="#" data-toggle="modal" data-target="#signupModal">Sign Up</a></li>
                            </ul>
                        </aside> --}}
                    </div>
                </div>
            </div>
            <!--// TopStrip \\-->

            <!--// MainSection \\-->
            @include('navmenu')
            <!--// MainSection \\-->

        </header>

		<!--// Main Content \\-->
		<div class="sportsmagazine-main-content">

			<!--// Main Section \\-->
			<div class="sportsmagazine-main-section sportsmagazine-blogmodren-full">
				<div class="container">
					<div class="row">

						<div class="col-md-12">
                            <div class="sportsmagazine-blog sportsmagazine-blog-medium">
                                <ul class="row">
                                    {{--<li class="col-md-6">
                                        <figure><a href="blog-detail.html"><img src="extra-images/ball.jpg" alt=""></a></figure>
                                        <div class="sportsmagazine-blogmedium-text">
                                            <h5><a href="#">ici le title</a></h5>
                                            <ul class="sportsmagazine-blogmedium-option">
                                                <li>
                                                    <span>Date /</span>
                                                    <time datetime="2008-02-14 20:00">ici la date</time>
                                                </li>
                                                <li>
                                                    <span>By /</span>
                                                    <small>ici le author</small>
                                                </li>
                                            </ul>
                                            <p>ici le content</p>
                                            <ul class="sportsmagazine-blogmedium-social">

                                            </ul>
                                        </div>
                                    </li> --}}
                                    @foreach($PopularNews as $news)
                                    <li class="col-md-6">
                                        <figure><a href="{{ route('blogdetail', ['id' => $news->id]) }}"><img src="{{ asset('extra-images/ball.jpg') }}" alt=""></a></figure>
                                        <div class="sportsmagazine-blogmedium-text">
                                            <h5><a href="{{ route('blogdetail', ['id' => $news->id]) }}">{{ $news->title }}</a></h5>
                                            <ul class="sportsmagazine-blogmedium-option">
                                                <li>
                                                    <span>Date /</span>
                                                    <time datetime="{{ $news->date }}">{{ $news->created_at->diffForHumans() }}</time>
                                                </li>
                                                <li>
                                                    <span>By /</span>
                                                    <small>{{ $news->author }}</small>
                                                </li>
                                            </ul>
                                            <p class="truncate-text">{{ $news->content }}</p>
                                            <ul class="sportsmagazine-blogmedium-social">
                                                <!-- Ajoutez ici le contenu de la balise ul pour les médias sociaux si nécessaire -->
                                            </ul>
                                        </div>
                                    </li>
                                @endforeach

                                </ul>
                            </div>
                            <!--// Pagination \\-->
                            {{-- <div class="sportsmagazine-pagination">
                              <ul class="page-numbers">
                                 <li><a class="previous page-numbers" href="#"><span aria-label="Next"><i class="fa fa-angle-left"></i></span></a></li>
                                 <li><span class="page-numbers current">1</span></li>
                                 <li><a class="page-numbers" href="#">2</a></li>
                                 <li><a class="page-numbers" href="#">3</a></li>
                                 <li><a class="page-numbers" href="#">4</a></li>
                                 <li><a class="next page-numbers" href="#"><span aria-label="Next"><i class="fa fa-angle-right"></i></span></a></li>
                              </ul>
                            </div> --}}
                            <!--// Pagination \\-->
                        </div>


					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->

		<!--// Footer \\-->
        <footer id="sportsmagazine-footer" class="sportsmagazine-footer-one">

            <!--// Footer Widget \\-->
            {{-- <div class="sportsmagazine-footer-widget">
                <div class="container">
                    <div class="row">
                        <!--// Widget Contact Info \\-->
                        <aside class="col-md-4 widget widget_contact_info">
                            <a href="index-2.html" class="footer-logo"><img src="images/logo-1.png" alt=""></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elUt ac malesuada ante.Sed gravida, ur quis tempus sollicitudin, tellus urna</p>
                            <ul class="sportsmagazine-social-network">
                                <li><a href="https://www.facebook.com/" class="sportsmagazine-colorhover fa fa-facebook-official"></a></li>
                                <li><a href="https://twitter.com/login" class="sportsmagazine-colorhover fa fa-twitter-square"></a></li>
                                <li><a href="https://pk.linkedin.com/" class="sportsmagazine-colorhover fa fa-linkedin-square"></a></li>
                                <li><a href="https://plus.google.com/" class="sportsmagazine-colorhover fa fa-google-plus-square"></a></li>
                            </ul>
                            <ul class="sportsmagazine-info-list">
                                <li><i class="fa fa-map-marker"></i> <span>9907 Salford road, east London Uk 2807</span></li>
                                <li><i class="fa fa-phone"></i> <span>(+92) 123 45 678 - 987 65 432</span></li>
                                <li><i class="fa fa-envelope"></i> <span><a href="mailto:name@email.com">info@example.com</a></span></li>
                            </ul>
                        </aside>
                        <!--// Widget Contact Info \\-->
                        <!--// Widget Twitter \\-->
                        <aside class="col-md-4 widget widget_twitter">
                            <div class="footer-widget-title"><h2>Twitter Feeds</h2></div>
                            <ul>
                                <li>
                                    <i class="fa fa-twitter"></i> <span>@basketball</span>
                                    <p>Sed gravida, urna quis tempus sollicitudin, tellus urnasuscipit nisl, id rhoncus ligula elit condimentum <a href="404.html">https://t.co/XHrPAM4ANv</a></p>
                                    <time datetime="2008-02-14 20:00"><i class="fa fa-clock-o"></i> 2 Hours Ago</time>
                                </li>
                                <li>
                                    <i class="fa fa-twitter"></i> <span>@football</span>
                                    <p>Sed gravida, urna quis tempus sollicitudin, tellus urnasuscipit nisl, id rhoncus ligula elit condimentum <a href="404.html">https://t.co/XHrPAM4ANv</a></p>
                                    <time datetime="2008-02-14 20:00"><i class="fa fa-clock-o"></i> 4 Hours Ago</time>
                                </li>
                            </ul>
                        </aside>
                        <!--// Widget Twitter \\-->
                        <!--// Widget Gallery \\-->
                        <aside class="col-md-4 widget widget_gallery">
                            <div class="footer-widget-title"><h2>Flicker Photos</h2></div>
                            <ul>
                                <li><a data-fancybox-group="group" href="extra-images/widget-gallery-1.jpg" class="fancybox"><img src="extra-images/widget-gallery-1.jpg" alt=""></a></li>
                                <li><a data-fancybox-group="group" href="extra-images/widget-gallery-1.jpg" class="fancybox"><img src="extra-images/widget-gallery-2.jpg" alt=""></a></li>
                                <li><a data-fancybox-group="group" href="extra-images/widget-gallery-1.jpg" class="fancybox"><img src="extra-images/widget-gallery-3.jpg" alt=""></a></li>
                                <li><a data-fancybox-group="group" href="extra-images/widget-gallery-1.jpg" class="fancybox"><img src="extra-images/widget-gallery-4.jpg" alt=""></a></li>
                                <li><a data-fancybox-group="group" href="extra-images/widget-gallery-1.jpg" class="fancybox"><img src="extra-images/widget-gallery-5.jpg" alt=""></a></li>
                                <li><a data-fancybox-group="group" href="extra-images/widget-gallery-1.jpg" class="fancybox"><img src="extra-images/widget-gallery-6.jpg" alt=""></a></li>
                                <li><a data-fancybox-group="group" href="extra-images/widget-gallery-1.jpg" class="fancybox"><img src="extra-images/widget-gallery-7.jpg" alt=""></a></li>
                                <li><a data-fancybox-group="group" href="extra-images/widget-gallery-1.jpg" class="fancybox"><img src="extra-images/widget-gallery-8.jpg" alt=""></a></li>
                            </ul>
                        </aside>
                        <!--// Widget Gallery \\-->

                    </div>
                </div>
                <a href="#" class="sportsmagazine-back-top"><i class="fa fa-angle-up"></i></a>
            </div> --}}
            <!--// Footer Widget \\-->

            <!--// CopyRight \\-->
            {{-- <div class="sportsmagazine-copyright">
                <div class="container">
                    <div class="row">
                        <aside class="col-md-6 sportsmagazine-copyright-left"><p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p></aside>
                        <aside class="col-md-6 sportsmagazine-copyright-right">
                            <ul class="sportsmagazine-copyright-link">
                                <li><a href="404.html" class="sportsmagazine-colorhover">Terms And Condition</a></li>
                                <li><a href="404.html" class="sportsmagazine-colorhover">Privacy Policy</a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div> --}}
            <!--// CopyRight \\-->

        </footer>
        <!--// Footer \\-->

{{-- 	<div class="clearfix"></div>
    </div>
    <!--// Main Wrapper \\-->

    <!-- SearchModal -->
    <div class="searchmodal modal fade" id="searchModal" tabindex="-1" role="dialog">
        <a href="#" data-dismiss="modal" class="sportsmagazine-modal-close"><i class="icon-uniF106"></i></a>
        <div class="modal-dialog" role="document">
            <div class="container">
                <div class="row">
                    <form class="sportsmagazine-search-box">
                        <input type="text" value="Search Your Keyword" onblur="if(this.value == '') { this.value ='Search Your Keyword'; }" onfocus="if(this.value =='Search Your Keyword') { this.value = ''; }">
                        <input type="submit" value="">
                        <i class="fa fa-search"></i>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- LoginModal -->
    <div class="loginmodal modal fade" id="loginModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="sportsmagazine-login-box">
                <a href="#" data-dismiss="modal" class="sportsmagazine-login-close sportsmagazine-color"><i class="icon-uniF106"></i></a>
                <h4>Login To Your Account</h4>
                <form>
                    <input type="text" value="Enter username*" onblur="if(this.value == '') { this.value ='Enter username*'; }" onfocus="if(this.value =='Enter username*') { this.value = ''; }">
                    <input type="password" value="Password*" onblur="if(this.value == '') { this.value ='Password*'; }" onfocus="if(this.value =='Password*') { this.value = ''; }">
                    <a href="#" class="sportsmagazine-colorhover">Forget Password?</a>
                    <div class="clearfix"></div>
                    <label><input type="submit" value="Sign In" class="sportsmagazine-bordercolor sportsmagazine-color"></label>
                </form>
                <h4>Try Our Socials Also</h4>
                <ul class="login-network">
                    <li><a href="#"><i class="fa fa-facebook-square"></i> Facebook</a></li>
                    <li class="sportsmagazine-twitter"><a href="#"><i class="fa fa-twitter-square"></i> Twitter</a></li>
                    <li class="sportsmagazine-google-plus"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                </ul>
                <p>Not A Member Yet ? <a href="#" class="sportsmagazine-color">Sign - Up Now !</a></p>
            </div>
        <div class="clearfix"></div>
        </div>
    </div>

    <!-- SignupModal -->
    <div class="loginmodal modal fade" id="signupModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="sportsmagazine-login-box">
                <a href="#" data-dismiss="modal" class="sportsmagazine-login-close sportsmagazine-color"><i class="icon-uniF106"></i></a>
                <h4>Sign Up Now</h4>
                <form>
                    <input type="text" value="Enter username*" onblur="if(this.value == '') { this.value ='Enter username*'; }" onfocus="if(this.value =='Enter username*') { this.value = ''; }">
                    <input type="text" value="Type your password*" onblur="if(this.value == '') { this.value ='Type your password*'; }" onfocus="if(this.value =='Type your password*') { this.value = ''; }">
                    <input type="text" value="Confirm your password*" onblur="if(this.value == '') { this.value ='Confirm your password*'; }" onfocus="if(this.value =='Confirm your password*') { this.value = ''; }">
                    <a href="#" class="sportsmagazine-colorhover">Forget Password?</a>
                    <div class="clearfix"></div>
                    <label><input type="submit" value="Sign Up" class="sportsmagazine-bordercolor sportsmagazine-color"></label>
                </form>
                <h4>Try Our Socials Also</h4>
                <ul class="login-network">
                    <li><a href="#"><i class="fa fa-facebook-square"></i> Facebook</a></li>
                    <li class="sportsmagazine-twitter"><a href="#"><i class="fa fa-twitter-square"></i> Twitter</a></li>
                    <li class="sportsmagazine-google-plus"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                </ul>
                <p>Not A Member Yet ? <a href="#" class="sportsmagazine-color">Login - Now !</a></p>
            </div>
        <div class="clearfix"></div>
        </div>
    </div> --}}


	<!-- jQuery (necessary for JavaScript plugins) -->
	<script type="text/javascript" src="script/jquery.js"></script>
    <script type="text/javascript" src="script/bootstrap.min.js"></script>
    <script type="text/javascript" src="script/slick.slider.min.js"></script>
    <script type="text/javascript" src="script/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="script/fancybox.pack.js"></script>
    <script type="text/javascript" src="script/isotope.min.js"></script>
    <script type="text/javascript" src="script/progressbar.js"></script>
    <script type="text/javascript" src="script/counter.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="script/functions.js"></script>

  </body>

</html>
