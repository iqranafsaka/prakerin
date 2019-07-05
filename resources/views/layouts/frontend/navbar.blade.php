  <!-- Navigation -->
  <header class="nav">

    <div class="nav__holder nav--sticky">
      <div class="container relative">

        <div class="flex-parent">

          <!-- Mobile Menu Button -->
          <button class="nav-icon-toggle" id="nav-icon-toggle" aria-label="Open mobile menu">
            <span class="nav-icon-toggle__box">
              <span class="nav-icon-toggle__inner"></span>
            </span>
          </button> <!-- end mobile menu button -->

          <!-- Logo -->
          <a href="index.html" class="logo">
            <img class="logo__img" src="{{ asset('img/logo_light.png')}}" srcset="{{ asset('assets/frontend/img/logo_light.png')}} 1x, {{ asset('img/logo_light@2x.png')}} 2x" alt="logo">
          </a>

          <!-- Nav-wrap -->
          <nav class="flex-child nav__wrap d-none d-lg-block">              
            <ul class="nav__menu">

              <li class="nav__dropdown active">
                <a href="index.html">Home</a>
                <ul class="nav__dropdown-menu">
                  <li>
                    <a href="index.html">Home Demo 1</a>
                  </li>
                  <li>
                    <a href="index-2.html">Home Demo 2</a>
                  </li>
                  <li>
                    <a href="index-3.html">Home Demo 3</a>
                  </li>
                </ul>
              </li>

              <li class="nav__dropdown">
                <a href="categories.html">Posts</a>
                <ul class="nav__dropdown-menu">
                  <li><a href="single-post.html">Gallery Post</a></li>
                  <li><a href="single-post.html">Video Post</a></li>
                  <li><a href="single-post.html">Audio Post</a></li>
                  <li><a href="single-post.html">Quote Post</a></li>
                </ul>
              </li>

              <li class="nav__dropdown">
                <a href="catalog.html">Pages</a>
                <ul class="nav__dropdown-menu">
                  <li><a href="categories.html">Categories</a></li>
                  <li><a href="about.html">About</a></li>                    
                  <li><a href="contact.html">Contact</a></li>
                  <li><a href="404.html">404</a></li>
                </ul>
              </li>

              <li class="nav__dropdown">
                <a href="catalog.html">Features</a>
                <ul class="nav__dropdown-menu">
                  <li><a href="lazyload.html">Lazy Load</a></li>
                  <li><a href="shortcodes.html">Shortcodes</a></li>
                </ul>
              </li>

              <li>
                <a href="#">Purchase</a>
              </li>


            </ul> <!-- end menu -->
          </nav> <!-- end nav-wrap -->

          <!-- Nav Right -->
          <div class="nav__right nav--align-right d-none d-lg-flex">

            <!-- Socials -->
            <div class="nav__right-item socials socials--nobase nav__socials "> 
              <a class="social-facebook" href="#" target="_blank">
                <i class="ui-facebook"></i>
              </a>
              <a class="social-twitter" href="#" target="_blank">
                <i class="ui-twitter"></i>
              </a>
              <a class="social-youtube" href="#" target="_blank">
                <i class="ui-youtube"></i>
              </a>
            </div>

            <div class="nav__right-item">
              <a href="" class="nav__subscribe" data-toggle="modal" data-target="#subscribe-modal">Subscribe</a>
            </div>

            <!-- Search -->
            <div class="nav__right-item nav__search">
              <a href="#" class="nav__search-trigger" id="nav__search-trigger">
                <i class="ui-search nav__search-trigger-icon"></i>
              </a>
              <div class="nav__search-box" id="nav__search-box">
                <form class="nav__search-form">
                  <input type="text" placeholder="Search an article" class="nav__search-input">
                  <button type="submit" class="nav__search-button btn btn-md btn-color btn-button">
                    <i class="ui-search nav__search-icon"></i>
                  </button>
                </form>
              </div>
              
            </div>

          </div> <!-- end nav right -->  
      
        </div> <!-- end flex-parent -->
      </div> <!-- end container -->

    </div>
  </header> <!-- end navigation -->
