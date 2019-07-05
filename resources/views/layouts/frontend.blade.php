<!DOCTYPE html>
<html lang="en">
<head>
  <title>Neotech | Home</title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="">

  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Poppins:400,600,700%7CRoboto:400,400i,700' rel='stylesheet'>

  <!-- Css -->
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/font-icons.css')}}" />
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css')}}" />
  @yield('css')

  <!-- Favicons -->
  <link rel="shortcut icon" href="{{ asset('assets/frontend/img/favicon.ico')}}">
  <link rel="apple-touch-icon" href="{{ asset('assets/frontend/img/apple-touch-icon.png')}}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/frontend/img/apple-touch-icon-72x72.png')}}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/frontend/img/apple-touch-icon-114x114.png')}}">

  <!-- Lazyload -->
  <script type="text/javascript" src="{{ asset('assets/frontend/js/lazysizes.min.js')}}"></script>

</head>

<body>

  <!-- Preloader -->
  <div class="loader-mask">
    <div class="loader">
      <div></div>
    </div>
  </div>

  <!-- Bg Overlay -->
  <div class="content-overlay"></div>

  <!-- Subscribe Modal -->
  <div class="modal fade" id="subscribe-modal" tabindex="-1" role="dialog" aria-labelledby="subscribeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="subscribeModalLabel">Subscribe for Newsletter</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="mc4wp-form" method="post">
            <div class="mc4wp-form-fields">
              <p>
                <i class="mc4wp-form-icon ui-email"></i>
                <input type="email" name="EMAIL" placeholder="Your email" required="">
              </p>
              <p>
                <input type="submit" class="btn btn-md btn-color" value="Subscribe">
              </p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> <!-- end subscribe modal -->
  

  <!-- Mobile Sidenav -->    
  
  @include("layouts.frontend.mobilesidenav")
  
  <!-- end mobile sidenav -->


  <main class="main oh" id="main">

    <!-- Navigation -->
    
    @include("layouts.frontend.navbar")
    
    <!-- end navigation -->
    
    <div class="main-container" id="main-container">
      <!-- Hero Slider -->
      <section class="hero">
        <div id="owl-hero" class="owl-carousel owl-theme">        

          <div class="hero__slide">
            <article class="hero__slide-entry entry">
              <div class="thumb-bg-holder" style="background-image: url({{ asset('assets/frontend/img/blog/featured_img_1.jpg')}})">
                <a href="single-post.html" class="thumb-url"></a>
                <div class="bottom-gradient"></div>
              </div>
              
              <div class="thumb-text-holder">
                <a href="categories.html" class="entry__meta-category entry__meta-category--label">Startups</a>   
                <h2 class="thumb-entry-title">
                  <a href="single-post.html">Technology's impact on marketing</a>
                </h2>
              </div>
            </article>          
          </div>

          <div class="hero__slide">
            <article class="hero__slide-entry entry">
              <div class="thumb-bg-holder" style="background-image: url({{ asset('assets/frontend/img/blog/featured_img_2.jpg')}})">
                <a href="single-post.html" class="thumb-url"></a>
                <div class="bottom-gradient"></div>
              </div>
              
              <div class="thumb-text-holder">
                <a href="categories.html" class="entry__meta-category entry__meta-category--label">Startups</a>   
                <h2 class="thumb-entry-title">
                  <a href="single-post.html">the Age of Artificial Intelligence</a>
                </h2>
              </div>
            </article>          
          </div>

          <div class="hero__slide">
            <article class="hero__slide-entry entry">
              <div class="thumb-bg-holder" style="background-image: url({{ asset('assets/frontend/img/blog/featured_img_3.jpg')}})">
                <a href="single-post.html" class="thumb-url"></a>
                <div class="bottom-gradient"></div>
              </div>
              
              <div class="thumb-text-holder">
                <a href="categories.html" class="entry__meta-category entry__meta-category--label">Startups</a>   
                <h2 class="thumb-entry-title">
                  <a href="single-post.html">The Most Powerful Thing You Can Do Is Be Yourself</a>
                </h2>
              </div>
            </article>          
          </div>
          
        </div> <!-- end owl -->
      </section> <!-- end hero slider -->

      <!-- Ad Banner 728 -->
      <div class="text-center">
        <a href="#">
          <img src="{{ asset('assets/frontend/img/blog/placeholder_728.jpg')}}" alt="">
        </a>
      </div>    

      <!-- Content -->

      @yield('content')
      
      <!-- end content -->

      <!-- Latest Videos -->
      <section class="section-wrap pt-40">
        <div class="container">

          <h3 class="section-title">Latest Videos</h3>

          <div class="video-playlist">

            <div class="video-playlist__content thumb-container">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.youtube.com/embed/mn6Ia5e_suY?feature=oembed" class="video-playlist__content-video">
                </iframe>
              </div>
            </div>

            <div class="video-playlist__list">
              <a href="https://www.youtube.com/embed/mn6Ia5e_suY?feature=oembed&autoplay=1" class="video-playlist__list-item video-playlist__list-item--active">
                <div class="video-playlist__list-item-thumb thumb-container">
                  <img data-src="https://i.ytimg.com/vi/mn6Ia5e_suY/default.jpg" src="https://i.ytimg.com/vi/mn6Ia5e_suY/default.jpg')}}" class="video-playlist__list-item-img lazyload" alt="">
                </div>
                <div class="video-playlist__list-item-description">
                  <h4 class="video-playlist__list-item-title">Top 5 New Tech Gadgets You Must Have In 2017</h4>
                </div>
              </a>
              <a href="https://www.youtube.com/embed/x68XnWszi2A?feature=oembed&autoplay=1" class="video-playlist__list-item">
                <div class="video-playlist__list-item-thumb thumb-container">
                  <img data-src="https://i.ytimg.com/vi/x68XnWszi2A/default.jpg" src="https://i.ytimg.com/vi/mn6Ia5e_suY/default.jpg')}}" class="video-playlist__list-item-img lazyload" alt="">
                </div>
                <div class="video-playlist__list-item-description">
                  <h4 class="video-playlist__list-item-title">10 Amazing Gadgets You Can Buy Now On Amazon</h4>
                </div>
              </a>
              <a href="https://www.youtube.com/embed/TXFrCy47ue8?feature=oembed&autoplay=1" class="video-playlist__list-item">
                <div class="video-playlist__list-item-thumb thumb-container">
                  <img data-src="https://i.ytimg.com/vi/TXFrCy47ue8/default.jpg" src="https://i.ytimg.com/vi/mn6Ia5e_suY/default.jpg')}}" class="video-playlist__list-item-img lazyload" alt="">
                </div>
                <div class="video-playlist__list-item-description">
                  <h4 class="video-playlist__list-item-title">Top 5 Best Drones with HD Camera (Cheap and Affordable Version)</h4>
                </div>
              </a>
              <a href="https://www.youtube.com/embed/rdFXddVsUuQ?feature=oembed&autoplay=1" class="video-playlist__list-item">
                <div class="video-playlist__list-item-thumb thumb-container">
                  <img data-src="https://i.ytimg.com/vi/rdFXddVsUuQ/default.jpg" src="https://i.ytimg.com/vi/mn6Ia5e_suY/default.jpg')}}" class="video-playlist__list-item-img lazyload" alt="">
                </div>
                <div class="video-playlist__list-item-description">
                  <h4 class="video-playlist__list-item-title">iPhone X Review – Pushing Me to Android</h4>
                </div>
              </a>
            </div>

          </div>        
        </div>
      </section>

      <!-- Ad Banner 728 -->
      <div class="text-center pb-60">
        <a href="#">
          <img src="{{ asset('assets/frontend/img/blog/placeholder_728.jpg')}}" alt="">
        </a>
      </div> 

      <!-- Footer -->

      @include("layouts.frontend.footer")
     
      <!-- end footer -->

    </div> <!-- end main container -->

    <div id="back-to-top">
      <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
    </div>

  </main> <!-- end main-wrapper -->


  
  <!-- jQuery Scripts -->
  <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/easing.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/owl-carousel.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/twitterFetcher_min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/modernizr.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/scripts.js')}}"></script>
  @yield('js')


  <script type="text/javascript">
    // Twitter Feed
      var config1 = {
      "id": '594366594521804800',
      "domId": 'tweets',
      "showUser": false,
      "showInteraction": false,
      "showPermalinks": false,
      "showTime": false,
      "maxTweets": 2,
      "enableLinks": true
    };

    twitterFetcher.fetch(config1);                    
  </script>

</body>
</html>