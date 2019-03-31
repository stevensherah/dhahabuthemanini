<div class="sidebar" data-color="purple" data-background-color="black" data-image="../dashboard/img/sidebar-1.jpg">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
  <div class="logo bg-warning">
    <a href="{{ url('/admin') }}" class="simple-text logo-normal" style="color:black">
      <b>{{ env('APP_NAME') }}</b>
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item" class=" {{ Request::is('/admin') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/admin') }}">
          <i class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item" class=" {{ Request::is('/user') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/user') }}">
          <i class="material-icons">person</i>
          <p>User Profile</p>
        </a>
      </li>
      <li class="nav-item" class=" {{ Request::is('/users') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/users') }}">
          <i class="material-icons">person</i>
          <p>Users List</p>
        </a>
      </li>
      <li class="nav-item" class=" {{ Request::is('/messages') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('/messages') }}">
            <i class="material-icons">message</i>
            <p>Messages</p>
          </a>
      </li>
      <li class="nav-item" class=" {{ Request::is('/filemanager') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/filemanager') }}">
          <i class="material-icons">folder</i>
          <p>File Manager</p>
        </a>
      </li>
        <li class="dropdown nav-item" class=" {{ Request::is('/') ? 'active' : '' }}">
            <a href="" class="dropdown-toggle" data-toggle="dropdown">
              <i class="material-icons">person</i>
              <p>Programs<b class="caret"></b></p></a>
            <ul class="dropdown-menu">
                      <li><a href="{{ url('#') }}">BOYS TO MEN</a></li>
                      <li><a href="{{ url('#') }}">GIRLS TO LADIES</a></li>
                      <li><a href="{{ url('#') }}">MORAN PROJECT</a></li>
                      <li><a href="{{ url('#') }}">ElIMA PROJECT</a></li>
                      <li><a href="{{ url('#') }}">MORAN PROJECT</a></li>
            </ul>
      </li>
      <li class="nav-item" class=" {{ Request::is('/subscribers') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('/subscribers') }}">
            <i class="material-icons">crowd</i>
            <p>Subscriptions</p>
          </a>
      </li>
      <li class="nav-item" class=" {{ Request::is('/posts') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('/posts') }}">
            <i class="material-icons">email</i>
            <p>Posts</p>
          </a>
      </li>      <li class="nav-item" class=" {{ Request::is('/blogs') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('/admin') }}/blogs">
            <i class="material-icons">paper</i>
            <p>Blogs</p>
          </a>
      </li>
      <li class="nav-item" class=" {{ Request::is('/products') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('/products') }}">
            <i class="material-icons">busket</i>
            <p>Products</p>
          </a>
      </li>
      <li class="nav-item" class=" {{ Request::is('/tasks') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('/tasks') }}">
            <i class="material-icons">pencil</i>
            <p>User Tasks</p>
          </a>
      </li>
      
    </ul>
  </div>
</div>