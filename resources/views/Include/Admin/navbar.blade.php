<nav class="navbar navbar-expand-lg navbar-primary navbar-absolute fixed-top ">
  <div class="container-fluid">
    <div class="navbar-wrapper">
        <h2>
            Dashboard
            <small>@if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
        
                You are logged as  <b>{{ Auth::user()->name }}</b> !</small>
          </h2>
      </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
      <span class="sr-only">Toggle navigation</span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end">

      {{-- <form class="navbar-form">
        <span class="bmd-form-group">
            <div class="input-group no-border">
              <input type="text" value="" class="form-control" placeholder="Search...">
              <button type="submit" class="btn btn-white btn-sm btn-round btn-just-icon">
                <i class="material-icons">search</i>
                <div class="ripple-container"></div>
              </button>
          </div>
        </span>
      </form> --}}

      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#pablo">
            <i class="material-icons">dashboard</i>
            <p class="d-lg-none d-md-block">
              Stats
            </p>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="material-icons">notifications</i>
            <span class="notification">5</span>
            <p class="d-lg-none d-md-block">
              Some Actions
            </p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Mike John responded to your email</a>
            <a class="dropdown-item" href="#">You have 5 new tasks</a>
            <a class="dropdown-item" href="#">Youre now friend with Andrew</a>
            <a class="dropdown-item" href="#">Another Notification</a>
            <a class="dropdown-item" href="#">Another One</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="material-icons">person</i>
            <p class="d-lg-none d-md-block">
              Account
            </p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
            <a class="dropdown-item" href="/user">Profile</a>
            <a class="dropdown-item" href="#">Settings</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section class="content-header">
 
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Here</li>
  </ol>
  
</section>