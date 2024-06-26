<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SportsMagazine Blog Detail</title>

    <!-- Css Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
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
  <body>

    <!--// Main Wrapper \\-->
    <div class="sportsmagazine-main-wrapper">

        <!--// Header \\-->
        <header id="sportsmagazine-header" class="sportsmagazine-header-one">

            <!--// TopStrip \\-->
            <div class="sportsmagazine-topstrip">
                <div class="container">
                    <div class="row">
                        {{-- @include('layouts.socialtop') --}}
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

            @include('navmenu')

        </header>
        <!--// Header \\-->

		<!--// Main Content \\-->
		<div class="sportsmagazine-main-content sportsmagazine-main-contentminus">

            <!--// Main Section \\-->
            <div class="sportsmagazine-main-section sportsmagazine-thumb">
                <span class="thumb-transparent"></span>
                <div class="sportsmagazine-thumb-text">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>{{ $popularNews->title }}</h2>
                                <ul class="sportsmagazine-thumb-option">
                                    <li><i class="fa fa-calendar-o"></i>{{ $popularNews->created_at->diffForHumans() }}</li>
                                    {{-- <li><a href="#" class="like-link" data-id="{{ $popularNews->id }}"><i class="fa fa-thumbs-o-up" ></i> </a>{{ $popularNews->likes }}</li> --}}
                                    {{-- li><a href="404.html"><i class="fa fa-comments-o"></i> 21</a></li> --}}
                                    <li><i class="fa fa-user"></i> {{ $popularNews->author }}</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

			<!--// Main Section \\-->
			<div class="sportsmagazine-main-section">
				<div class="container">
					<div class="row">

                        <div class="col-md-9">
                            <div class="sportsmagazine-rich-editor">
                                <p class="h3">{{ $popularNews->content }}
                                {{-- <blockquote>Sed gravida, urna quis tempus sollicitudin, tellus urna suscipit nisl, id rhoncus ligula elit condi Suspendisse lacinia, risus et porta dignissim, elit tellus iaculis tellus, eget efficitur elit magna ellus tempor consectetur magna.
                                <span></span>
                                </blockquote> --}}
                                </p>
                                <div class="sportsmagazine-post-tags">
                                  <div class="sportsmagazine-tags">
                                     <a>{{ $popularNews->topic }}</a>

                                  </div>
                                  <div class="sportsmagazine-blog-social">
                                     {{-- <ul>
                                        <li><a href="https://www.facebook.com/" class="color-one"><i class="fa fa-facebook"></i>facebook</a></li>
                                        <li><a href="https://twitter.com/login" class="color-two"><i class="fa fa-twitter"></i>Twitter</a></li>
                                        <li><a href="https://plus.google.com/" class="color-three"><i class="fa fa-google-plus"></i>Google+</a></li>
                                     </ul> --}}
                                  </div>
                               </div>
                            </div>
                            {{-- <div class="sportsmagazine-prenxt-post">
                                <ul>
                                    <li>
                                        <div class="sportsmagazine-prev-post">
                                            <figure><a href="404.html"><img src="extra-images/post-img1.jpg" alt=""></a></figure>
                                            <div class="sportsmagazine-prev-artical">
                                                <h3><a href="404.html">The team is starting a new power breakfast regimen</a></h3>
                                                <a href="404.html" class="sportsmagazine-post-arrow"><i class="fa fa-angle-double-left"></i> Previous Post</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sportsmagazine-next-post">
                                            <figure><a href="404.html"><img src="extra-images/post-img2.jpg" alt=""></a></figure>
                                            <div class="sportsmagazine-next-artical">
                                                <h3><a href="404.html">The team is starting a new power breakfast regimen</a></h3>
                                                <a href="404.html" class="sportsmagazine-post-arrow">Next Post <i class="fa fa-angle-double-right"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div> --}}

                            <div class="comments-area">
                              <!--// coments \\-->
                              <div class="sportsmagazine-section-heading"><h2>Comments</h2></div>
                              <ul class="comment-list">
                                 <li>
                                    @foreach ($comments as $comment)
                                    <div class="thumb-list">
                                       <figure><img alt="" src="{{ asset('extra-images/avatarcomment.png') }}"></figure>
                                       <div class="text-holder">
                                          <h6>{{ $comment->name }}</h6>
                                          <time class="post-date" datetime="2008-02-14 20:00">{{ $comment->created_at->diffForHumans() }} </time>
                                          {{-- <a class="comment-reply-link" href="#">Reply</a> --}}
                                       </div>
                                       <p>{{ $comment->comment }}</p>
                                    </div>
                                    @endforeach
                                    {{-- <div class="thumb-list">
                                       <figure><img alt="" src="extra-images/comment-img2.jpg"></figure>
                                       <div class="text-holder">
                                          <h6>Albert Darren</h6>
                                          <time class="post-date" datetime="2008-02-14 20:00">1 Hour Ago </time>
                                          <a class="comment-reply-link" href="#">Reply</a>
                                       </div>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus tempor consectetur. Sed vitae dignissim purus, eget aliquam libero. Duis et arcu a erat venenatis ornare eget nec urna.</p>
                                    </div> --}}
                                    {{-- <ul class="children">
                                       <li>
                                          <div class="thumb-list">
                                             <figure><img alt="" src="extra-images/comment-img3.jpg"></figure>
                                             <div class="text-holder">
                                                <h6>Jeans Morris</h6>
                                                <time class="post-date" datetime="2008-02-14 20:00">1 Hour Ago </time>
                                                <a class="comment-reply-link" href="#">Reply</a>
                                             </div>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus tempor consetur ed vit dignissim purus, eget aliquam libero. Duis et arcu a erat venenatis ornare eget nec urna.</p>
                                          </div>
                                       </li>
                                       <!-- #comment-## -->
                                    </ul> --}}
                                    <!-- .children -->
                                 </li>
                                 <!-- #comment-## -->
                                 {{-- <li>
                                    <div class="thumb-list">
                                       <figure><img alt="" src="extra-images/comment-img4.jpg"></figure>
                                       <div class="text-holder">
                                          <h6>Ricky David</h6>
                                          <time class="post-date" datetime="2008-02-14 20:00">1 Hour Ago </time>
                                          <a class="comment-reply-link" href="#">Reply</a>
                                       </div>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus tempor consectetur. Sed vitae dignissim purus, eget aliquam libero. Duis et arcu a erat venenatis ornare eget nec urna.</p>
                                    </div>
                                 </li> --}}
                                 <!-- #comment-## -->
                              </ul>
                              <!--// coments \\-->
                              <!--// comment-respond \\-->
                              <div class="comment-respond sportsmagazine-contact-form">
                               <div class="sportsmagazine-section-heading"><h2>Write A Comment</h2></div>
                                <form method="POST" action="{{ route('addComment') }}">
                                    @csrf
                                    <ul>
                                        <li>
                                            <label>Name:</label>
                                            <p>
                                                <input value="" name="name" required placeholder="Type here" type="text">
                                                <span><i class="fa fa-user"></i></span>
                                            </p>
                                        </li>
                                        <li>
                                            <label>Email:</label>
                                            <p>
                                                <input value="" name="email" required placeholder="Type here" type="text">
                                                <span><i class="fa fa-envelope"></i></span>
                                            </p>
                                        </li>
                                        <li class="full-input">
                                            <label>Comment:</label>
                                            <p>
                                                <textarea  name="comment" required placeholder="Type here"></textarea>
                                                <span><i class="fa fa-comment"></i></span>
                                            </p>

                                        </li>
                                        {!! NoCaptcha::renderJs() !!}
                                        {!! NoCaptcha::display() !!}
                                        <li>
                                            <input type="hidden" name="post_id" value="{{ $popularNews->id }}">
                                            <p><label><input value="Submit" type="submit"></label></p>
                                        </li>
                                    </ul>
                                </form>
                              </div>
                              <!--// comment-respond \\-->
                           </div>
                           {{-- <div class="sportsmagazine-section-heading"><h2>Related Articles</h2></div>
                            <div class="sportsmagazine-related-article sportsmagazine-blog-artical">
                                <ul class="row">
                                    <li class="col-md-4">
                                        <figure><a href="blog-detail.html.html"><img src="extra-images/related-articel-img1.jpg" alt=""><i class="fa fa-link"></i></a></figure>
                                        <div class="sportsmagazine-article-text">
                                             <time datetime="2008-02-14 20:00">August 23rd, 2016</time>
                                             <h5><a href="blog-detail.html.html">Michael Bran as was chosen as best pl</a></h5>
                                        </div>
                                        <ul class="sportsmagazine-article-options">
                                            <li><a href="404.html"><i class="fa fa-thumbs-o-up"></i> 320</a></li>
                                            <li><a href="404.html"><i class="fa fa-eye"></i> 840</a></li>
                                            <li><a href="404.html"><i class="fa fa-share-alt"></i> 89</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-md-4">
                                        <figure><a href="blog-detail.html.html"><img src="extra-images/related-articel-img2.jpg" alt=""><i class="fa fa-link"></i></a></figure>
                                        <div class="sportsmagazine-article-text">
                                             <time datetime="2008-02-14 20:00">August 23rd, 2016</time>
                                             <h5><a href="blog-detail.html.html">Michael Bran as was chosen as best pl</a></h5>
                                        </div>
                                        <ul class="sportsmagazine-article-options">
                                            <li><a href="404.html"><i class="fa fa-thumbs-o-up"></i> 320</a></li>
                                            <li><a href="404.html"><i class="fa fa-eye"></i> 840</a></li>
                                            <li><a href="404.html"><i class="fa fa-share-alt"></i> 89</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-md-4">
                                        <figure><a href="blog-detail.html.html"><img src="extra-images/related-articel-img3.jpg" alt=""><i class="fa fa-link"></i></a></figure>
                                        <div class="sportsmagazine-article-text">
                                             <time datetime="2008-02-14 20:00">August 23rd, 2016</time>
                                             <h5><a href="blog-detail.html.html">Michael Bran as was chosen as best pl</a></h5>
                                        </div>
                                        <ul class="sportsmagazine-article-options">
                                            <li><a href="404.html"><i class="fa fa-thumbs-o-up"></i> 320</a></li>
                                            <li><a href="404.html"><i class="fa fa-eye"></i> 840</a></li>
                                            <li><a href="404.html"><i class="fa fa-share-alt"></i> 89</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div> --}}

                        </div>

                        <!--// SideBar \\-->
                        <aside class="col-md-3">

                            <!--// Widget Popular Post \\-->
                            <div class="sportsmagazine-widget-heading"><h2>Popular Posts</h2></div>
                            <div class="widget widget_popular_post">
                                <ul>
                                    @foreach($PopularNews as $news)
                                        <li>
                                            <div class="sportsmagazine-popular-post">
                                                <figure><a href="{{ route('blogdetail', ['id' => $news->id]) }}"><img src="extra-images/widget-popular-post1.jpg" alt=""></a></figure>
                                                <div class="sportsmagazine-popular-post-text">
                                                    <h5><a href="{{ route('blogdetail', ['id' => $news->id]) }}">{{ $news->tilte }}</a></h5>
                                                    <time datetime="2008-02-14 20:00">{{ $news->created_at->diffForHumans() }}</time>
                                                </div>
                                                <span></span>
                                            </div>
                                        </li>
                                        @endforeach
                                    {{-- <li>
                                        <div class="sportsmagazine-popular-post">
                                            <figure><a href="blog-detail.html"><img src="extra-images/widget-popular-post2.jpg" alt=""></a></figure>
                                            <div class="sportsmagazine-popular-post-text">
                                                <h5><a href="blog-detail.html">Mark Johnson has as acture and is gona</a></h5>
                                                <time datetime="2008-02-14 20:00">August 23rd, 2016</time>
                                            </div>
                                            <span></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sportsmagazine-popular-post">
                                            <figure><a href="blog-detail.html"><img src="extra-images/widget-popular-post3.jpg" alt=""></a></figure>
                                            <div class="sportsmagazine-popular-post-text">
                                                <h5><a href="blog-detail.html">Mark Johnson has as acture and is gona</a></h5>
                                                <time datetime="2008-02-14 20:00">August 23rd, 2016</time>
                                            </div>
                                            <span></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sportsmagazine-popular-post">
                                            <figure><a href="blog-detail.html"><img src="extra-images/widget-popular-post4.jpg" alt=""></a></figure>
                                            <div class="sportsmagazine-popular-post-text">
                                                <h5><a href="blog-detail.html">Mark Johnson has as acture and is gona</a></h5>
                                                <time datetime="2008-02-14 20:00">August 23rd, 2016</time>
                                            </div>
                                            <span></span>
                                        </div>
                                    </li> --}}
                                </ul>
                            </div>
                            <!--// Widget Popular Post \\-->

                            <!--// Widget Cetagories \\-->
                            {{-- <div class="sportsmagazine-widget-heading"><h2>Cetagories</h2></div>
                            <div class="widget widget_cetagories">
                                <ul>
                                    <li><a href="404.html">Championship <span>( 13 )</span></a></li>
                                    <li><a href="404.html">Super Ball <span>( 12 )</span></a></li>
                                    <li><a href="404.html">Football <span>( 04 )</span></a></li>
                                    <li><a href="404.html">Boxing <span>( 08 )</span></a></li>
                                    <li><a href="404.html">BasketBall <span>( 13 )</span></a></li>
                                </ul>
                            </div> --}}
                            <!--// Widget Cetagories \\-->

                            <!--// Widget Upcoming Matches \\-->
                            {{-- <div class="sportsmagazine-widget-heading"><h2>Upcoming Matches</h2></div>
                            <div class="widget widget_matches">
                                <ul>
                                    <li>
                                        <div class="sportsmagazine-team-one">
                                            <h6><a href="fixture-detail.html">Ocean Kings</a></h6>
                                            <span>St. Patrick’s</span>
                                        </div>
                                        <span>VS</span>
                                        <div class="sportsmagazine-team-two">
                                            <h6><a href="fixture-detail.html">Bloody Wave</a></h6>
                                            <span>Marine College</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sportsmagazine-team-one">
                                            <h6><a href="fixture-detail.html">LA Pirates</a></h6>
                                            <span>Bebop Institute</span>
                                        </div>
                                        <span>VS</span>
                                        <div class="sportsmagazine-team-two">
                                            <h6><a href="fixture-detail.html">Ocean Kings</a></h6>
                                            <span>Marine College</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sportsmagazine-team-one">
                                            <h6><a href="fixture-detail.html">Red Wings</a></h6>
                                            <span>Marine College</span>
                                        </div>
                                        <span>VS</span>
                                        <div class="sportsmagazine-team-two">
                                            <h6><a href="fixture-detail.html">Lucky Clovers</a></h6>
                                            <span>Elric Bros School</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sportsmagazine-team-one">
                                            <h6><a href="fixture-detail.html">Draconians</a></h6>
                                            <span>Atlantic School</span>
                                        </div>
                                        <span>VS</span>
                                        <div class="sportsmagazine-team-two">
                                            <h6><a href="fixture-detail.html">Bloody Wave</a></h6>
                                            <span>Marine College</span>
                                        </div>
                                    </li>
                                </ul>
                            </div> --}}
                            <!--// Widget Upcoming Matches \\-->

                            <!--// Widget Flicker Images \\-->
                            {{-- <div class="sportsmagazine-widget-heading"><h2>Flicker Images</h2></div>
                            <div class="widget widget_gallery">
                                <ul>
                                    <li><a data-fancybox-group="group" href="extra-images/flicker-image-1.jpg" class="fancybox"><img src="extra-images/flicker-image-1.jpg" alt=""><i class="fa fa-angle-double-right"></i></a></li>
                                    <li><a data-fancybox-group="group" href="extra-images/flicker-image-2.jpg" class="fancybox"><img src="extra-images/flicker-image-2.jpg" alt=""><i class="fa fa-angle-double-right"></i></a></li>
                                    <li><a data-fancybox-group="group" href="extra-images/flicker-image-3.jpg" class="fancybox"><img src="extra-images/flicker-image-3.jpg" alt=""><i class="fa fa-angle-double-right"></i></a></li>
                                    <li><a data-fancybox-group="group" href="extra-images/flicker-image-4.jpg" class="fancybox"><img src="extra-images/flicker-image-4.jpg" alt=""><i class="fa fa-angle-double-right"></i></a></li>
                                    <li><a data-fancybox-group="group" href="extra-images/flicker-image-5.jpg" class="fancybox"><img src="extra-images/flicker-image-5.jpg" alt=""><i class="fa fa-angle-double-right"></i></a></li>
                                    <li><a data-fancybox-group="group" href="extra-images/flicker-image-6.jpg" class="fancybox"><img src="extra-images/flicker-image-6.jpg" alt=""><i class="fa fa-angle-double-right"></i></a></li>
                                    <li><a data-fancybox-group="group" href="extra-images/flicker-image-7.jpg" class="fancybox"><img src="extra-images/flicker-image-7.jpg" alt=""><i class="fa fa-angle-double-right"></i></a></li>
                                    <li><a data-fancybox-group="group" href="extra-images/flicker-image-8.jpg" class="fancybox"><img src="extra-images/flicker-image-8.jpg" alt=""><i class="fa fa-angle-double-right"></i></a></li>
                                    <li><a data-fancybox-group="group" href="extra-images/flicker-image-9.jpg" class="fancybox"><img src="extra-images/flicker-image-9.jpg" alt=""><i class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </div> --}}
                            <!--// Widget Flicker Images \\-->

                        </aside>
                        <!--// SideBar \\-->


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
            <div class="sportsmagazine-copyright">
                <div class="container">
                    <div class="row">
                        <aside class="col-md-6 sportsmagazine-copyright-left"><p><a target="_blank" href="#"></a></p></aside>
                        <aside class="col-md-6 sportsmagazine-copyright-right">
                            <ul class="sportsmagazine-copyright-link">
                                <li><a href="#" class="sportsmagazine-colorhover">Terms And Condition</a></li>
                                <li><a href="#" class="sportsmagazine-colorhover">Privacy Policy</a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
            <!--// CopyRight \\-->

        </footer>
        <!--// Footer \\-->

	<div class="clearfix"></div>
    </div>
    <!--// Main Wrapper \\-->

    <!-- SearchModal -->
    {{-- <div class="searchmodal modal fade" id="searchModal" tabindex="-1" role="dialog">
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
    </div> --}}

    <!-- LoginModal -->
    {{-- <div class="loginmodal modal fade" id="loginModal" tabindex="-1" role="dialog">
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
    </div> --}}

    <!-- SignupModal -->
    {{-- <div class="loginmodal modal fade" id="signupModal" tabindex="-1" role="dialog">
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.like-link').click(function(e) {
                e.preventDefault();

                var popularNewsId = $(this).data('id');
                var url = "{{ route('like', ':id') }}";
                url = url.replace(':id', popularNewsId);

                $.ajax({
                    type: 'POST',
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        console.log(response);
                        toastr.options.showEasing = 'swing';
                        /* toastr.options.progressBar = true; */
                        toastr.success('', '', { timeOut: 1000, className: 'toastr-empty' });
                        // Mettre à jour l'affichage des likes si nécessaire
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText);
                        // Gérer les erreurs si nécessaire
                    }
                });
            });
        });
    </script>

  </body>

</html>
