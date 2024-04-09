
  <!-- HEADER START -->

  <header class="site-header nav-wide nav-transparent mobile-sider-drawer-menu">

    <div class="sticky-header main-bar-wraper navbar-expand-lg">

        <div class="main-bar">

            <div class="container clearfix">

                <div class="logo-header">

                    <div class="logo-header-inner logo-header-one">

                        <a href="{{ url("/") }}">

                            <img src="{{ asset("images/logo.jpg") }}" />

                        </a>

                    </div>

                </div>

                <!-- NAV Toggle Button -->

                <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">

                    <span class="sr-only">Toggle navigation</span>

                    <span class="icon-bar icon-bar-first"></span>

                    <span class="icon-bar icon-bar-two"></span>

                    <span class="icon-bar icon-bar-three"></span>

                </button>

                    <!-- EXTRA NAV -->

                    <div class="extra-nav">

                        <div class="extra-cell">                                            

                            <a href="#search">

                                <i class="fa fa-search"></i>

                            </a>

                        </div>

                    </div>

                    <!-- EXTRA Nav -->

                    <!-- MAIN NAVIGATION -->

                    <div class="header-nav navbar-collapse collapse justify-content-center collapse">

                        <ul class=" nav navbar-nav">
                            <li class="active">
                                <a href="{{ url("/") }}">Home</a>
                                                                                   
                            </li>

                            <li>
                                <a href="{{ route("about") }}">About us</a>
                                                                             
                            </li>

                            <li>
                                <a href="javascript:;">Services</a>
                            
                            </li>
                            <li>
                                <a href="{{route("payment")}}">Register</a>
                            
                            </li>

                            <li><a href="javascript:;">FAQ</a></li>
                            <li><a href="{{ route("contact") }}">Contact us</a></li>                                    
                       
                        </ul>

                    </div>

                    <!-- SITE SEARCH -->

                    {{-- <div id="search"> 

                        <span class="close"></span>

                        <form role="search" id="searchform" action="https://theme7x.com/search" method="get" class="radius-xl">

                            <div class="input-group">

                                <input value="" name="q" type="search" placeholder="Type to search"/>

                                <span class="input-group-btn"><button type="button" class="search-btn"><i class="fa fa-search arrow-animation"></i></button></span>

                            </div>   

                        </form>

                    </div>                                                                                                           --}}

            </div>

        </div>

    </div>

</header>

<!-- HEADER END -->