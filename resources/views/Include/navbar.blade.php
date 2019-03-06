@section('navbar')
    

<nav id="nav" class="navbar navbar-transparent navbar-absolute">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" style="max-height: 50px; padding-top: 0.8px; font-family: forte; font-size: 30px;" href="#">
                                    <img style="max-height" id="logo" src="assets\img\Logos\LOGO.png" alt="logo">                 
                            </a>
                    </div>
    
                    <div class="collapse navbar-collapse" id="navigation-example-success">
                            <ul class="nav navbar-nav navbar-right">
                                        <!-- INSERT PAGES -->
                                        <li class="active"><a href="#">HOME</a></li>
                                        <li><a href="/about">ABOUT US</a></li>
                                        <li><a href="/posts">BLOG</a></li>
                                       
                                            {{--  <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">EVENTS <b class="caret"></b></a>
                                                    <ul class="dropdown-menu">
                                                              <li><a href="#">Action</a></li>
                                                              <li><a href="#">Another action</a></li>
                                                              <li><a href="#">Something else here</a></li>
                                                              <li class="divider"></li>
                                                              <li><a href="#">Separated link</a></li>
                                                              <li class="divider"></li>
                                                          <li><a href="#">One more separated link</a></li>
                                                    </ul>
                                            </li>  --}}
                                            <li class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Programs <b class="caret"></b></a>
                                                            <ul class="dropdown-menu">
                                                                      <li><a href="#">BOYS TO MEN</a></li>
                                                                      <li><a href="#">GIRLS TO LADIES</a></li>
                                                                      <li><a href="#">MORAN PROJECT</a></li>
                                                                      <li><a href="#">ElIMA PROJECT</a></li>
                                                                      <li><a href="#">MORAN PROJECT</a></li>
                                                                      <li class="divider"></li>
                                                                      <li><a href="#">Separated link</a></li>
                                                                      <li class="divider"></li>
                                                                  <li><a href="#">One more separated link</a></li>
                                                            </ul>
                                                    </li>

                                            <!-- CONTACT MODAL --> 
                                            <li><a data-toggle="modal" data-target="#myModal">CONTACT US</a></li>

                                           


                                            <!-- Authentication Links -->
                                            @guest
                                            @else
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                                        {{ Auth::user()->name }} <span class="caret"></span>
                                                    </a>
                    
                                                    <ul class="dropdown-menu">
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
                                            @endguest
    
                            </ul>
                    </div>
                </div>
</nav>

