<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>FansJSK</title>

    <!-- Css Files -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/flaticon.css" rel="stylesheet">
    <link href="css/slick-slider.css" rel="stylesheet">
    <link href="css/fancybox.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="css/color.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--/!--[if lte IE 9]--> {{-- <link rel="stylesheet" href="../../css/chosen.html"> --}} <!--[endif]--//-->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
@media (max-width: 767px) {
  .logo-image {
    display: block;
    margin: 0 auto;
  }
}
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
                                <li><i class="fa fa-globe"></i> <a href="404.html">Support</a></li>
                                <li><i class="fa fa-dollar"></i> <a href="404.html">Currency : USD</a></li>
                                <li><i class="fa fa-shopping-cart"></i> <a href="#" class="sportsmagazine-open-cart">Cart (0)</a>
                                    <div class="sportsmagazine-cart-box">
                                        <h2>You have 2 items in the cart</h2>
                                        <ul>
                                            <li>
                                                <figure>
                                                    <a href="checkout.html"><img src="extra-images/cartbox-1.png" alt=""></a>
                                                </figure>
                                                <div class="sportsmagazine-cartbox-text">
                                                    <h6><a href="checkout.html">Key Management Model The 60+ Models</a></h6>
                                                    <div class="sportsmagazine-rating"><span class="sportsmagazine-rating-box" style="width:80%"></span></div>
                                                    <span class="sportsmagazine-cartbox-price sportsmagazine-color">$35.99 <small>$43.00</small></span>
                                                </div>
                                            </li>
                                            <li>
                                                <figure>
                                                    <a href="checkout.html"><img src="extra-images/cartbox-2.png" alt=""></a>
                                                </figure>
                                                <div class="sportsmagazine-cartbox-text">
                                                    <h6><a href="checkout.html">Pyramid Principle: Logic Writing &amp; Thinking</a></h6>
                                                    <div class="sportsmagazine-rating"><span class="sportsmagazine-rating-box" style="width:100%"></span></div>
                                                    <span class="sportsmagazine-cartbox-price sportsmagazine-color">$21.00</span>
                                                </div>
                                            </li>
                                        </ul>
                                        <h5>Subtotal <span class="sportsmagazine-color">$1343</span></h5>
                                        <div class="sportsmagazine-cart-link"><a href="checkout.html" class="sportsmagazine-cartbox-btn sportsmagazine-bgcolorhover"><i class="flaticon-tool"></i> Go to Checkout</a></div>
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

		<!--// Main Banner \\-->
		<div class="sportsmagazine-banner">

            <!--// Slider \\-->
            <div class="sportsmagazine-banner-one">
                <div class="sportsmagazine-banner-one-layer">
                    <img src="extra-images/theteam.jpg" alt="">
                    <span class="sportsmagazine-banner-pattren"></span>
                    <div class="sportsmagazine-banner-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="sportsmagazine-banner-wrap">
                                        <h1><span>We Are</span> Developing The <strong class="sportsmagazine-color">Game</strong> <span>Be Our Partner</span></h1>
                                        <p>Transforming the realm of basketball, we aspire to reach new heights and redefine the essence of this thrilling sport</p>
                                        {{-- <a href="404.html" class="sportsmagazine-banner-btn">Read More <span></span></a> --}}
                                    </div>
                                    <div class="sportsmagazine-banner-thumb">  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sportsmagazine-banner-one-layer">
                    <img src="extra-images/theteam2023.jpg" alt="">
                    <span class="sportsmagazine-banner-pattren"></span>
                    <div class="sportsmagazine-banner-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="sportsmagazine-banner-wrap">
                                        <h1><span>Nous</span> développons le <strong class="sportsmagazine-color">Basketball</strong> <span>Soyez notre partenaire</span></h1>
                                        <p>L'innovation et la croissance du basketball sont au cœur de notre engagement, façonnant un avenir dynamique pour ce sport passionnant.</p>
                                        {{-- <a href="404.html" class="sportsmagazine-banner-btn">Read More <span></span></a> --}}
                                    </div>
                                    <div class="sportsmagazine-banner-thumb">  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Slider \\-->

        </div>
		<!--// Main Banner \\-->

		<!--// Main Content \\-->
		<div class="sportsmagazine-main-content">

			<!--// Main Section \\-->
			<div class="sportsmagazine-main-section">
				<div class="container">
					<div class="row">

                        <!--// Fixture Slider \\-->
						<div class="col-md-12">
                            <div class="sportsmagazine-fixture-slider">

                                @foreach($lastGames as $game)
                                <div class="sportsmagazine-fixture-slider-layer">
                                    <time datetime="{{ $game->gameDate }}">{{ \Carbon\Carbon::parse($game->gameDate)->format('F d, Y') }}</time>
                                    <ul class="sportsmagazine-bgcolor">
                                        <li class="first-child">{{ $game->teamA }} <span>{{ $game->scoreA }}</span></li>
                                        <li>{{ $game->teamB }} <span>{{ $game->scoreB }}</span></li>
                                    </ul>
                                </div>
                            @endforeach



                            </div>
                        </div>
                        <!--// Fixture Slider \\-->

                        <!--// Content \\-->
                        <div class="col-md-8">

                            <!--// Fancy Title \\--> {{-- <div class="sportsmagazine-fancy-title"><h2>Featured News</h2></div> --}} <!--// Fancy Title \\-->
                            <!--// Featured Slider \\-->
                            {{-- <div class="sportsmagazine-featured-slider">
                                <div class="sportsmagazine-featured-slider-layer">
                                    <img src="extra-images/featured-slider-1.jpg" alt="">
                                    <span class="sportsmagazine-black-transparent"></span>
                                    <div class="sportsmagazine-featured-caption">
                                        <h2>Fusce at molestie elit, sit amet Curabitur in tellus non risu illa vitae non nunc</h2>
                                        <span class="sportsmagazine-color">03 December 2017 / John Maxwell</span>
                                    </div>
                                </div>
                                <div class="sportsmagazine-featured-slider-layer">
                                    <img src="extra-images/featured-slider-2.jpg" alt="">
                                    <span class="sportsmagazine-black-transparent"></span>
                                    <div class="sportsmagazine-featured-caption">
                                        <h2>Fusce at molestie elit, sit amet Curabitur in tellus non risu illa vitae non nunc</h2>
                                        <span class="sportsmagazine-color">03 December 2017 / John Maxwell</span>
                                    </div>
                                </div>
                            </div> --}}
                            <!--// Featured Slider \\-->

                            <!--// Latest Match Result \\-->
                            <div class="sportsmagazine-match-result" style="margin-bottom: 0px">
                                <div class="sportsmagazine-match-title">
                                    <h4>Latest Match Result</h4>
                                    <span>{{ $lastGame->gameDate }}</span>
                                </div>
                                <ul>
                                    <li>
                                        <img src="extra-images/{{ $lastGame->teamA }}.png" alt="">
                                        <h4><a >{{ $lastGame->teamA }}</a></h4>
                                        {{-- <span>03 Mark Baily (21)</span> --}}
                                    </li>
                                    <li class="sportsmagazine-match-score">
                                        <h5>FINAL SCORE</h5>
                                        <p><strong class="sportsmagazine-color">{{ $lastGame->scoreA }}</strong> <small>:</small> {{ $lastGame->scoreB }}</p>
                                    </li>
                                    <li>
                                        <img src="extra-images/{{ $lastGame->teamB }}.png" alt="">
                                        <h4><a >{{ $lastGame->teamB }}</a></h4>
                                        {{-- <span>03 Mark Baily (21)</span> --}}
                                    </li>
                                </ul>
                            </div>
                            <!--// Latest Match Result \\-->

                            <!--// Fancy Title \\--> <div class="sportsmagazine-fancy-title" style="margin-top:40px"><h2>Latest News</h2></div> <!--// Fancy Title \\-->
                            <!--// Blog's \\-->
                            <div class="sportsmagazine-blog sportsmagazine-blog-grid">
                                <ul class="row">
                                    @foreach($PopularNews as $news)


                                        <li class="col-md-6">
                                            <figure>
                                                <a href="{{ route('blogdetail', ['id' => $news->id]) }}"><img src="{{ asset($news->image) }}" alt=""></a>
                                                <figcaption>
                                                    <span><small>Featured</small></span>
                                                    <a href="{{ route('blogdetail', ['id' => $news->id]) }}" class="sportsmagazine-link-btn"><i class="fa fa-link"></i></a>
                                                </figcaption>
                                            </figure>
                                            <section >
                                                <h2><a href="{{ route('blogdetail', ['id' => $news->id]) }}">{{ $news->title }}</a></h2>
                                                <p class="truncate-text">{{ $news->content }}</p>
                                            </section>
                                            <div class="sportsmagazine-blog-grid-options">
                                                <a href="{{ route('blogdetail', ['id' => $news->id]) }}" class="sportsmagazine-blog-grid-thumb">{{-- <img src="extra-images/blog-thumb-1.jpg" alt=""> --}} {{ $news->author }}</a>
                                                <ul>

                                                </ul>
                                            </div>
                                        </li>

                                    @endforeach


                                </ul>
                                {{-- <div class="text-center">
                                    {{ $PopularNews->links() }}
                                </div> --}}
                            </div>
                            {{-- <div class="row">
                                <div class="col-md-6">
                                    <div class="sportsmagazine-blog sportsmagazine-blog-grid">
                                        <ul class="row">
                                            <li class="col-md-12 sportsmagazine-the-team">
                                                <figure>
                                                    <a href="blog-detail.html"><img src="extra-images/latest-blog-3.jpg" alt=""></a>
                                                    <figcaption>
                                                        <span><small>The Team</small></span>
                                                        <a href="blog-detail.html" class="sportsmagazine-link-btn"><i class="fa fa-link"></i></a>
                                                    </figcaption>
                                                </figure>
                                                <section>
                                                    <h2><a href="blog-detail.html">The vicotory againts The Shark brings us close to the Final</a></h2>
                                                    <p>Lorem ipsum dolor sit amet, consecttur adipis elit. Vestibulum a nunc dui. Curabitr dignissi luctus nisi id euismod. feugiat eros. Pellentesque tempus tortor.</p>
                                                </section>
                                                <div class="sportsmagazine-blog-grid-options">
                                                    <a href="blog-detail.html" class="sportsmagazine-blog-grid-thumb"><img src="extra-images/blog-thumb-1.jpg" alt=""> Julia Martyn</a>
                                                    <ul>
                                                        <li><i class="fa fa-thumbs-o-up"></i> <a href="404.html">320</a></li>
                                                        <li><i class="fa fa-eye"></i> <a href="404.html">840</a></li>
                                                        <li><i class="fa fa-share-alt"></i> <a href="404.html">89</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sportsmagazine-blog sportsmagazine-blog-list">
                                        <ul class="row">
                                            <li class="col-md-12">
                                                <div class="sportsmagazine-blog-list-wrap">
                                                    <span>The Team</span>
                                                    <h6><a href="blog-detail.html">The victry againts The Shark bring us closer to the Final</a></h6>
                                                    <time datetime="2008-02-14 20:00">August 23rd, 2017</time>
                                                    <p>Lorem ipsum dolor sit amet, consecttur adipis elit. Vestibulum a nunc dui.</p>
                                                </div>
                                            </li>
                                            <li class="col-md-12 playoffs">
                                                <div class="sportsmagazine-blog-list-wrap">
                                                    <span>Playoffs</span>
                                                    <h6><a href="blog-detail.html">The new eco friendly stadium won a Leafy Award in 2016</a></h6>
                                                    <time datetime="2008-02-14 20:00">August 23rd, 2017</time>
                                                    <p>Lorem ipsum dolor sit amet, consecttur adipis elit. Vestibulum a nunc dui.</p>
                                                </div>
                                            </li>
                                            <li class="col-md-12 playoffs">
                                                <div class="sportsmagazine-blog-list-wrap">
                                                    <span>Playoffs</span>
                                                    <h6><a href="blog-detail.html">The new eco friendly stadium won a Leafy Award in 2016</a></h6>
                                                    <time datetime="2008-02-14 20:00">August 23rd, 2017</time>
                                                    <p>Lorem ipsum dolor sit amet, consecttur adipis elit. Vestibulum a nunc dui.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div> --}}
                            <!--// Blog's \\-->

                            <!--// Advertisement \\-->
                            {{-- <figure class="sportsmagazine-add-banner">
                                <img src="extra-images/add-thumb-1.jpg" alt="">
                                <span class="sportsmagazine-add-transparent"></span>
                                <figcaption>
                                    <div class="sportsmagazine-addbanner-caption">
                                        <h2>Take a look at the brand New Uniforms for next season</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Utac malesuada ante. Curabitur lacinia.</p>
                                        <a href="404.html" class="sportsmagazine-banner-btn">Read More <span></span></a>
                                    </div>
                                </figcaption>
                            </figure> --}}
                            <!--// Advertisement \\-->

                            <!--// Fancy Title \\--> <div class="sportsmagazine-fancy-title"><h2>Popular Players</h2></div> <!--// Fancy Title \\-->
                            <div class="sportsmagazine-player-slider">

                                <div class="sportsmagazine-player-slider-image">
                                    <div class="sportsmagazine-player-image-layer">
                                        <img src="extra-images/capitanoo.png" alt="">
                                        <div class="sportsmagazine-player-slider-caption">
                                            <span>97</span>
                                            <section>
                                                <h6><a href="fixture-detail.html">Obaid Kochat</a></h6>
                                                <small>Forword</small>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="sportsmagazine-player-image-layer">
                                        <img src="extra-images/islemAjmi.png" alt="">
                                        <div class="sportsmagazine-player-slider-caption">
                                            <span>38</span>
                                            <section>
                                                <h6><a href="#">Islem Ajmi</a></h6>
                                                <small>Defensive</small>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="sportsmagazine-player-image-layer">
                                        <img src="extra-images/jadJaouadi.png" alt="">
                                        <div class="sportsmagazine-player-slider-caption">
                                            <span>97</span>
                                            <section>
                                                <h6><a href="fixture-detail.html">Jad Jaouadi</a></h6>
                                                <small>Forword</small>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="sportsmagazine-player-image-layer">
                                        <img src="extra-images/wass.png" alt="">
                                        <div class="sportsmagazine-player-slider-caption">
                                            <span>10</span>
                                            <section>
                                                <h6><a href="fixture-detail.html">Wassef Methnani</a></h6>
                                                <small>Forword</small>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="sportsmagazine-player-image-layer">
                                        <img src="extra-images/ahmeddhif.png" alt="">
                                        <div class="sportsmagazine-player-slider-caption">
                                            <span>97</span>
                                            <section>
                                                <h6><a href="fixture-detail.html">Ahmed Dhif</a></h6>
                                                <small>Forword</small>
                                            </section>
                                        </div>
                                    </div>
                                </div>

                                <div class="sportsmagazine-player-slider-nav">
                                    <div class="sportsmagazine-player-nav-layer">
                                        <span>09</span>
                                        <section>
                                            <h6>Obaid Kochat</h6>
                                            <small>Forword</small>
                                        </section>
                                    </div>
                                    <div class="sportsmagazine-player-nav-layer">
                                        <span>38</span>
                                        <section>
                                            <h6>Islem Ajmi</h6>
                                            <small>Defensive</small>
                                        </section>
                                    </div>
                                    <div class="sportsmagazine-player-nav-layer">
                                        <span>97</span>
                                        <section>
                                            <h6>Jad Jaouadi</h6>
                                            <small>Forword</small>
                                        </section>
                                    </div>
                                    <div class="sportsmagazine-player-nav-layer">
                                        <span>10</span>
                                        <section>
                                            <h6>Wassef Methnani</h6>
                                            <small>Forword</small>
                                        </section>
                                    </div>
                                    <div class="sportsmagazine-player-nav-layer">
                                        <span>09</span>
                                        <section>
                                            <h6>Ahmed Dhif</h6>
                                            <small>Forword</small>
                                        </section>
                                    </div>
                                </div>

                            </div>

                                {{--
                            <!--// Fancy Title \\--> <div class="sportsmagazine-fancy-title"><h2>Club Media</h2></div> <!--// Fancy Title \\-->
                            <div class="sportsmagazine-gallery sportsmagazine-fixture-gallery">
                                <ul>
                                    <li>
                                        <figure>
                                            <a data-fancybox-group="group" href="extra-images/gallery-modren-img1.jpg" class="fancybox"><img src="extra-images/gallery-modren-img1.jpg" alt=""><i class="icon-signs23"></i></a>
                                            <span>12 Photos</span>
                                            <figcaption>
                                                <h6><a href="#">The Champion Final will be played</a></h6>
                                                <time datetime="2008-02-14 20:00">May 17th, 2017</time>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li>
                                        <figure>
                                            <a data-fancybox-group="group" href="extra-images/gallery-modren-img2.jpg" class="fancybox"><img src="extra-images/gallery-modren-img2.jpg" alt=""><i class="icon-signs23"></i></a>
                                            <span>11 Photos</span>
                                            <figcaption>
                                                <h6><a href="#">The Champion Final will be played</a></h6>
                                                <time datetime="2008-02-14 20:00">Feb 17th, 2017</time>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li>
                                        <figure>
                                            <a data-fancybox-group="group" href="extra-images/gallery-modren-img3.jpg" class="fancybox"><img src="extra-images/gallery-modren-img3.jpg" alt=""><i class="icon-signs23"></i></a>
                                            <span>7 Photos</span>
                                            <figcaption>
                                                <h6><a href="#">The Champion Final will be played</a></h6>
                                                <time datetime="2008-02-14 20:00">May 17th, 2017</time>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li>
                                        <figure>
                                            <a data-fancybox-group="group" href="extra-images/gallery-modren-img4.jpg" class="fancybox"><img src="extra-images/gallery-modren-img4.jpg" alt=""><i class="icon-signs23"></i></a>
                                            <span>4 Photos</span>
                                            <figcaption>
                                                <h6><a href="#">The Champion Final will be played</a></h6>
                                                <time datetime="2008-02-14 20:00">Feb 17th, 2017</time>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li>
                                        <figure>
                                            <a data-fancybox-group="group" href="extra-images/gallery-modren-img5.jpg" class="fancybox"><img src="extra-images/gallery-modren-img5.jpg" alt=""><i class="icon-signs23"></i></a>
                                            <span>13 Photos</span>
                                            <figcaption>
                                                <h6><a href="#">The Champion Final will be played</a></h6>
                                                <time datetime="2008-02-14 20:00">May 17th, 2017</time>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li>
                                        <figure>
                                            <a data-fancybox-group="group" href="extra-images/gallery-modren-img6.jpg" class="fancybox"><img src="extra-images/gallery-modren-img6.jpg" alt=""><i class="icon-signs23"></i></a>
                                            <span>6 Photos</span>
                                            <figcaption>
                                                <h6><a href="#">The Champion Final will be played</a></h6>
                                                <time datetime="2008-02-14 20:00">Feb 17th, 2017</time>
                                            </figcaption>
                                        </figure>
                                    </li>
                                </ul>
                            </div> --}}

                        </div>

                        <!--// Content \\-->

                        <!--// SideBaar \\-->
                        <aside class="col-md-4">

                            <!--// Widget TeamRanking \\-->
                            <div class="widget widget_team_ranking">
                                <div class="sportsmagazine-fancy-title"><h2>Team Rankings</h2></div>
                                <div class="ranking-title-table">
                                    <ul class="ranking-title-row">
                                        <li>Team Rank</li>
                                        <li>W</li>
                                        <li>D</li>
                                        <li>PTS</li>
                                    </ul>
                                </div>
                                @foreach($teams as $index => $team)
                                <div class="ranking-content-table">
                                    <ul class="ranking-content-row">
                                        <li>{{ $index + 1 }}</li>
                                        <li>
                                            <img src="extra-images/{{ strtolower($team->name) }}.png" alt="{{ $team->name }}">
                                            <div class="ranking-logo"><span>{{ $team->name }}</span></div>
                                        </li>
                                        <li>{{ $team->victoires }}</li>
                                        <li>{{ $team->defaites }}</li>
                                        <li>{{ $team->points }}</li>
                                    </ul>
                                </div>
                            @endforeach
                            </div>
                            <!--// Widget TeamRanking \\-->

                            <!--// Widget Popular News \\-->
                            <div class="widget widget_popular_news">
                                <div class="sportsmagazine-fancy-title"><h2>Popular News</h2></div>
                                <ul>
                                    @foreach($PopularNews2 as $news)
                                        <li>
                                            <span> {{ $news->likes }}</span>
                                            <div class="popular_news_text">
                                                <small>{{ $news->topic }}</small>
                                                <a href="{{ route('blogdetail', ['id' => $news->id]) }}">{{ $news->title }}</a>
                                                <time datetime="2008-02-14 20:00">{{ $news->created_at->diffForHumans() }}</time>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                            <!--// Widget Popular News \\-->

                            <!--// Widget Trending News \\-->
                            {{-- <div class="widget widget_trending_news">
                                <div class="sportsmagazine-fancy-title"><h2>Top Trending News</h2></div>
                                <!-- Nav tabs -->
                                <ul class="nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Newset</a></li>
                                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Most Commented</a></li>
                                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Populer</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                        <div class="widget_popular_news">
                                            <ul>
                                                <li>
                                                    <div class="popular_news_text">
                                                        <small>The Team</small>
                                                        <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                        <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                                    </div>
                                                </li>
                                                <li class="widget-injuries">
                                                    <div class="popular_news_text">
                                                        <small>Injuries</small>
                                                        <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                        <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                                    </div>
                                                </li>
                                                <li class="widget-theleague">
                                                    <div class="popular_news_text">
                                                        <small>The League</small>
                                                        <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                        <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="profile">
                                        <div class="widget_popular_news">
                                            <ul>
                                                <li class="widget-injuries">
                                                    <div class="popular_news_text">
                                                        <small>Injuries</small>
                                                        <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                        <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="popular_news_text">
                                                        <small>The Team</small>
                                                        <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                        <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="messages">
                                        <div class="widget_popular_news">
                                            <ul>
                                                <li class="widget-theleague">
                                                    <div class="popular_news_text">
                                                        <small>The League</small>
                                                        <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                        <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="popular_news_text">
                                                        <small>The Team</small>
                                                        <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                        <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                                    </div>
                                                </li>
                                                <li class="widget-injuries">
                                                    <div class="popular_news_text">
                                                        <small>Injuries</small>
                                                        <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                        <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <!--// Widget Trending News \\-->

                            <!--// Widget Next Match \\-->
                            <div class="widget widget_next_match">
                                <div class="sportsmagazine-fancy-title"><h2>Next Match</h2></div>
                                <div class="widget_next_match_title">
                                    <h5>Championship {{ $nextGame->gameWeek }} round</h5>
                                    <span>{{ \Carbon\Carbon::parse($nextGame->gameDate)->format('l, F d, Y') }}</span>
                                </div>
                                <ul>
                                    <li>
                                        <img src="{{ asset('extra-images/'. $nextGame->teamA .'.png') }}" alt="{{ $nextGame->teamA }}">
                                        <h6><a >{{ $nextGame->teamA }}</a></h6>
                                    </li>
                                    <li>
                                        <div class="widget_next_match_option">
                                            <small>{{ $nextGame->gameStadium }}</small>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="{{ asset('extra-images/' . $nextGame->teamB . '.png') }}" alt="{{ $nextGame->teamB }}">
                                        <h6><a >{{ $nextGame->teamB }}</a></h6>
                                    </li>
                                </ul>

                            {{-- <div class="widget_match_countdown">
                                    <h6>Game Countdown</h6>
                                    <div id="sportsmagazine-countdown"></div>
                                </div> --}}
                                {{-- <a href="fixture.html" class="widget_match_btn">Buy Ticket Now</a> --}}
                            </div>
                            <!--// Widget Next Match \\-->

                            <!--// Widget Newsletter \\-->
                            {{-- <div class="widget widget_newsletter">
                                <div class="sportsmagazine-fancy-title"><h2>Our Newsletter</h2></div>
                                <form>
                                    <label>Subscribe Now</label>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante.</p>
                                    <input type="text" value="Your Name" onblur="if(this.value == '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }">
                                    <input type="text" value="Enter Your email" onblur="if(this.value == '') { this.value ='Enter Your email'; }" onfocus="if(this.value =='Enter Your email') { this.value = ''; }">
                                    <label class="widget_newsletter_btn"><input type="submit" value="Subscribe"></label>
                                </form>
                            </div> --}}
                            <!--// Widget Newsletter \\-->

                            <!--// Widget Add \\-->
                            {{-- <div class="widget widget_add ">
                                <img src="extra-images/add.jpg" class="" alt="">
                            </div> --}}
                            <!--// Widget Add \\-->

                        </aside>
                        <!--// SideBaar \\-->

					</div>
                    <div class="col-md-12">
                        <div class="sportsmagazine-fancy-title"><h2>Streaming</h2></div>
                        <div class="sportsmagazine-blog sportsmagazine-blog-grid">
                            <iframe width="560" height="415" src="https://www.youtube.com/embed/WXJ6qTHWzhY" frameborder="0" allowfullscreen></iframe>
                        </div> </div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->

		<!--// Footer \\-->
		<footer id="sportsmagazine-footer" class="sportsmagazine-footer-one">

            <!--// Footer Widget \\-->
            <div class="sportsmagazine-footer-widget">
                {{-- <div class="container">
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
                </div> --}}
                <a href="#" class="sportsmagazine-back-top"><i class="fa fa-angle-up"></i></a>
            </div>
            <!--// Footer Widget \\-->

            <!--// CopyRight \\-->
            <div class="sportsmagazine-copyright">
                <div class="container">
                    <div class="row">
                        <aside class="col-md-6 sportsmagazine-copyright-left"><p><a  href="#"></a></p></aside>
                        <aside class="col-md-6 sportsmagazine-copyright-right">
                            <ul class="sportsmagazine-copyright-link">
                                <li><a href="404.html" class="sportsmagazine-colorhover"></a></li>
                                <li><a href="404.html" class="sportsmagazine-colorhover"></a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
            <!--// CopyRight \\-->

		</footer>
		<!--// Footer \\-->

	{{-- <div class="clearfix"></div>
    </div> --}}
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
    <script type="text/javascript" src="script/functions.js"></script>

  </body>

</html>
