    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header" style="background-color: #41633B;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <h4 style="color: white;">Pucala</h4>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a style="color: white;" href="./index.html">Home</a></li>
                            <li><a style="color: white;" href="{{ route('shop') }}">Shop</a></li>
                            <li><a style="color: white;" href="./blog.html">Blog</a></li>
                            <li><a style="color: white;" href="./contact.html">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch" style="color: white;"><img src="img/icon/search.png" alt=""></a>
                        @guest
                        <a href="{{ route('login') }}" style="color: white;">Sign In</a>
                        @endguest
                        @auth
                        <a href="#"><img src="img/icon/heart.png" alt=""></a>
                        <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                        <div class="price">$0.00</div>
                        @endauth
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->