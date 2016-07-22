<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>iPub @yield('title')</title>
  @yield('description')
  @yield('author')
  <!-- favicon -->
  <link rel = "shortcut icon" href = "ipub.ico">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <!--      <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">        -->
  <link rel="stylesheet" href="{{ asset('ipub/bootstrap/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <!--       <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">     -->
  <link rel="stylesheet" href="{{ asset('ipub/dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('ipub/dist/css/skins/_all-skins.min.css') }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  @yield('css')

</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-blue fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{{ url('/account') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini" style="font-size:45px"><b>iP</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg" style="font-size:45px"><b>iP</b>ub</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">

@yield('toggle')

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

                @if (Auth::guest())

                     <li style="right: 270%"><a href="/pubs" >Pubs</a></li>
                      <li style="right: 270%"><a href="/about" >About Us</a></li>
                    <li>
                        <a href="{{ url('/login') }}" id = "colored">Login
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/register') }}" id = "colored">Register
                        </a>
                    </li>
                @else

          <!-- Messages: style can be found in dropdown.less-->

               <li style="right: 120%"><a href="/pubs" >Pubs</a></li>
                <li style="right: 120%"><a href="/about" >About Us</a></li>
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="{{ asset('ipub/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
              </li>
              <li class="footer"><a href="{{ url('/inbox') }}">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="{{ url('/notifications') }}">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ asset('ipub/dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::user()->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ asset('ipub/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">

                <p>
                 {{ Auth::user()->name}} - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    Followers <br /> 1907
                  </div>
                  <div class="col-xs-4 text-center" style = "padding-left: 20px; padding-right: 20px">
                    <i class = "fa fa-star" style = "color: #FFC733"></i>
                    <i class = "fa fa-star" style = "color: #FFC733"></i>
                    <i class = "fa fa-star-half-full" style = "color: #FFC733"></i>
                    <i class = "fa fa-star-o" style = "color: #FFC733"></i>
                    <i class = "fa fa-star-o" style = "color: #FFC733"></i>
                  </div>
                  <div class="col-xs-4 text-center">
                    Invited <br /> 498
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="/account" class="btn btn-primary btn-flat">Account</a>
                </div>
                <div class="pull-right">
                  <a href="/logout" class="btn btn-danger btn-flat">Logout</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>

          @endif

        </ul>
      </div>
    </nav>
  </header>

@yield('extendable_content')

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<!--        <script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>        -->
<script src="{{ asset('ipub/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<!-- Bootstrap 3.3.6 -->
<!--        <script src="../../bootstrap/js/bootstrap.min.js"></script>     -->
<script src="{{ asset('ipub/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<!--        <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>     -->
<script src="{{ asset('ipub/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<!--        <script src="../../plugins/fastclick/fastclick.js"></script>     -->
<script src="{{ asset('ipub/plugins/fastclick/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<!--        <script src="../../dist/js/app.min.js"></script>     -->
<script src="{{ asset('ipub/dist/js/app.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<!--        <script src="../../dist/js/demo.js"></script>     -->
<script src="{{ asset('ipub/dist/js/demo.js') }}"></script>
</body>
</html>
