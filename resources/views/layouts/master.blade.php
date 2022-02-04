<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Nyi Project" />
    <meta name="keywords" content="Nyi Project">
    <meta name="author" content="Nyi" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
	<!-- [ Pre-loader ] start
	<div class="loader-bg ">
		<div class="loader-track">
			<div class="loader-fill">akkekkekekekekekkkkkk</div>
		</div>
	</div> -->
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar menu-light">
		<div class="navbar-wrapper">
			<div class="navbar-content scroll-div " >
				
				<div class="">
					<div class="main-menu-header">
						<img class="img-radius img-responsive" src="{{asset('img/logo.png')}}"   alt="User-Profile-Image">
						<div class="user-details mt-2">
							<div id="more-details">Project</div>
						</div>
					</div>
				</div>
				<br/>
				<ul class="nav pcoded-inner-navbar ">
					<!-- <li class="nav-item pcoded-menu-caption">
					    <label>Dashboard:</label>
					</li> -->
                    @if(Auth::check())
							<li class="nav-item">
								<a href="{{url('/start')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-download-cloud"></i></span><span class="pcoded-mtext">My Project</span></a>
							</li>
							<li class="nav-item">
								<a href="{{url('/selectmenu')}}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-download-cloud"></i></span><span class="pcoded-mtext">Menu </span></a>
							</li>
                    @endif
                    
					
					<!-- <li class="nav-item pcoded-menu-caption">
					    <label>Chart & Maps</label>
					</li>
					<li class="nav-item">
					    <a href="chart-apex.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Chart</span></a>
					</li>
					<li class="nav-item">
					    <a href="map-google.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-map"></i></span><span class="pcoded-mtext">Maps</span></a>
					</li> -->
                    
					<!-- <li class="nav-item pcoded-menu-caption">
					    <label>Auth:</label>
					</li>
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">Authentication</span></a>
					    <ul class="pcoded-submenu">
                        <!-- @if(Auth::check())
                            @if(Auth::user()->role_id == 1 )
					        <li><a href="{{url(Auth::user()->roles->name.'/loginlog')}}" >Login Log</a></li>
							<li><a href="{{url(Auth::user()->roles->name.'/users')}}" >Sign up</a></li>
                            @endif
					        <li><a href="{{ route('logout') }}"  title="sign-out" >Sign out</a></li>
                        @endif -->
					    <!-- </ul>
					</li> --> 
					<!-- <li class="nav-item"><a href="sample-page.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Sample page</span></a></li> -->

				</ul>
				
				<!-- <div class="card text-center">
					<div class="card-block">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<i class="feather icon-sunset f-40"></i>
						<h6 class="mt-3">Web-Application</h6>
						<p>Getting more features</p>
						<a href="" target="_blank" class="btn btn-primary btn-sm text-white m-0">Contact:</a>
					</div>
				</div> -->
				
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
				<div class="m-header">
					<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
					<a href="#!" class="b-brand pr-4">
						<!-- ========   change your logo hear   ============ -->
						<!-- <img src="{{asset('assets/images/logo.png')}}" alt="" class="logo">--->
						<!-- <img src="{{asset('assets/images/logo-icon.png')}}" alt="" class="logo-thumb">
						<img src="{{asset('img/moi.jpg')}}" alt="" class="logo"> -->
					</a>
					<a href="#!" class="mob-toggler offset-2">
						<i class="feather icon-more-vertical"></i>
					</a>
				</div>
				<div class="container-fluid">
					<div class="row" style="width:100%;position:relative">
						<div class="offset-xl-1 col-xl-10" style="margin-top:-10px;z-index:1;position:absolute;width:100%;text-align:center;color: white;
            			font-size: 1.2vw;
            			text-shadow: -1px 1px 0 #000,
                          1px 1px 0 #000,
                         1px -1px 0 #000,
                        -1px -1px 0 #000;">
							Обработка концептуальных моделей 
						</div>
					</div>
				</div>
				<div class="collapse navbar-collapse">
					
					<ul class="navbar-nav ml-auto">
						
						<li>
							<div class="dropdown drp-user">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="feather icon-user"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right profile-notification">
									<div class="pro-head">
										<img src="{{asset('img/logo.png')}}" class="img-radius" alt="User-Profile-Image">
										<span></span>
										<!-- <a href="{{ route('logout') }}" class="dud-logout" title="Logout">
											<i class="feather icon-log-out"></i>
										</a> -->
									</div>
									<ul class="pro-body">
										<!--<li><a href="user-profile.html" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
										<li><a href="email_inbox.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>-->
										<li>
											<a href="{{ route('logout') }}" class="dropdown-item"
												onclick="event.preventDefault();
												document.getElementById('logout-form').submit();">
												
												<i class="feather icon-log-out"></i> 
												LogOut
											</a>
											<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
												@csrf
											</form>
										</li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
	</header>
	<!-- [ Header ] end -->
<!-- [ Main Content ] start -->
<div class="pcoded-main-container header-dark">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
			<div class="row">
				@yield("header")
			</div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-12 p-0">
                @yield('content')   
            </div>                     
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
    

    <!-- Required Js -->
    <script src="{{asset('assets/js/vendor-all.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/bootstrap.min.js')}}"></script>
    <!-- <script src="assets/js/ripple.js"></script> -->
    <!-- <script src="{{asset('assets/js/pcoded.min.js')}}"></script> -->

    <!-- apps -->
    <!-- <script src="{{asset('dist/js/app-style-switcher.js')}}"></script> -->
    <!-- <script src="{{asset('dist/js/feather.min.js')}}"></script> -->
    <!-- <script src="{{asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script> -->
    <script src="{{asset('dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('dist/js/custom.min.js')}}"></script>
@yield('script') 
</body>

</html>
