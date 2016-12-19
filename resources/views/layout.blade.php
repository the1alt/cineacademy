<!DOCTYPE html>
<html>

<head>
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>AbsoluteAdmin - A Responsive Bootstrap 3 Admin Dashboard Template</title>
  <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
  <meta name="description" content="AbsoluteAdmin - A Responsive HTML5 Admin UI Framework">
  <meta name="author" content="AbsoluteAdmin">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font CSS (Via CDN) -->
  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>

  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="{{asset('skin/default_skin/css/theme.css')}}">

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

</head>

<body class="blank-page">

  <!-- Start: Main -->
  <div id="main">

    <!-- Start: Header -->
    <header class="navbar navbar-fixed-top navbar-shadow">
      <div class="navbar-branding">
        <a class="navbar-brand" href="dashboard.html">
          <b>Absolute</b>Admin
        </a>
        <span id="toggle_sidemenu_l" class="ad ad-lines"></span>
      </div>
      <ul class="nav navbar-nav navbar-left">
        <li class="dropdown menu-merge hidden-xs">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown
            <span class="caret caret-tp"></span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        <li class="hidden-xs">
          <a class="request-fullscreen toggle-active" href="#">
            <span class="ad ad-screen-full fs18"></span>
          </a>
        </li>
      </ul>
      <form class="navbar-form navbar-left navbar-search alt" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search..." value="Search...">
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
				<li>
					<div class="navbar-btn btn-group">
	          <a href="#" class="topbar-menu-toggle btn btn-sm" data-toggle="button">
		          <span class="ad ad-wand"></span>
	          </a>
	        </div>
				</li>
        <li class="dropdown menu-merge">
          <div class="navbar-btn btn-group">
            <button data-toggle="dropdown" class="btn btn-sm dropdown-toggle">
              <span class="fa fa-bell-o fs14 va-m"></span>
              <span class="badge badge-danger">9</span>
            </button>
            <div class="dropdown-menu dropdown-persist w350 animated animated-shorter fadeIn" role="menu">
              <div class="panel mbn">
                  <div class="panel-menu">
                     <span class="panel-icon"><i class="fa fa-clock-o"></i></span>
                     <span class="panel-title fw600"> Recent Activity</span>
                     <button class="btn btn-default light btn-xs pull-right" type="button"><i class="fa fa-refresh"></i></button>
                  </div>
                  <div class="panel-body panel-scroller scroller-navbar scroller-overlay scroller-pn pn">
                      <ol class="timeline-list">
                        <li class="timeline-item">
                          <div class="timeline-icon bg-dark light">
                            <span class="fa fa-tags"></span>
                          </div>
                          <div class="timeline-desc">
                            <b>Michael</b> Added to his store:
                            <a href="#">Ipod</a>
                          </div>
                          <div class="timeline-date">1:25am</div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-icon bg-dark light">
                            <span class="fa fa-tags"></span>
                          </div>
                          <div class="timeline-desc">
                            <b>Sara</b> Added his store:
                            <a href="#">Notebook</a>
                          </div>
                          <div class="timeline-date">3:05am</div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-icon bg-success">
                            <span class="fa fa-usd"></span>
                          </div>
                          <div class="timeline-desc">
                            <b>Admin</b> created invoice for:
                            <a href="#">Software</a>
                          </div>
                          <div class="timeline-date">4:15am</div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-icon bg-success">
                            <span class="fa fa-usd"></span>
                          </div>
                          <div class="timeline-desc">
                            <b>Admin</b> created invoice for:
                            <a href="#">Apple</a>
                          </div>
                          <div class="timeline-date">7:45am</div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-icon bg-success">
                            <span class="fa fa-usd"></span>
                          </div>
                          <div class="timeline-desc">
                            <b>Admin</b> created invoice for:
                            <a href="#">Software</a>
                          </div>
                          <div class="timeline-date">4:15am</div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-icon bg-success">
                            <span class="fa fa-usd"></span>
                          </div>
                          <div class="timeline-desc">
                            <b>Admin</b> created invoice for:
                            <a href="#">Apple</a>
                          </div>
                          <div class="timeline-date">7:45am</div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-icon bg-dark light">
                            <span class="fa fa-tags"></span>
                          </div>
                          <div class="timeline-desc">
                            <b>Michael</b> Added his store:
                            <a href="#">Ipod</a>
                          </div>
                          <div class="timeline-date">8:25am</div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-icon bg-system">
                            <span class="fa fa-fire"></span>
                          </div>
                          <div class="timeline-desc">
                            <b>Admin</b> created invoice for:
                            <a href="#">Software</a>
                          </div>
                          <div class="timeline-date">4:15am</div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-icon bg-dark light">
                            <span class="fa fa-tags"></span>
                          </div>
                          <div class="timeline-desc">
                            <b>Sara</b> Added to his store:
                            <a href="#">Notebook</a>
                          </div>
                          <div class="timeline-date">3:05am</div>
                        </li>
                      </ol>

                  </div>
                  <div class="panel-footer text-center p7">
                    <a href="#" class="link-unstyled"> View All </a>
                  </div>
              </div>
            </div>
          </div>
        </li>
        <li class="dropdown menu-merge">
          <div class="navbar-btn btn-group">
            <button data-toggle="dropdown" class="btn btn-sm dropdown-toggle">
              <span class="ad ad-radio-tower fs14 va-m"></span>
              <span class="badge">5</span>
            </button>
            <div class="dropdown-menu dropdown-persist w350 animated animated-shorter fadeIn" role="menu">
              <div class="panel mbn">
                  <div class="panel-menu">
                    <div class="btn-group btn-group-justified btn-group-nav" role="tablist">
                      <a href="#nav-tab1" data-toggle="tab" class="btn btn-default btn-sm active">Notifications</a>
                      <a href="#nav-tab2" data-toggle="tab" class="btn btn-default btn-sm br-l-n br-r-n">Messages</a>
                      <a href="#nav-tab3" data-toggle="tab" class="btn btn-default btn-sm">Activity</a>
                    </div>
                  </div>
                  <div class="panel-body panel-scroller scroller-navbar pn">
                    <div class="tab-content br-n pn">
                      <div id="nav-tab1" class="tab-pane alerts-widget active" role="tabpanel">
                        <div class="media">
                          <a class="media-left" href="#"> <span class="glyphicon glyphicon-user text-info"></span> </a>
                          <div class="media-body">
                            <h5 class="media-heading">New Registration
                              <small class="text-muted"></small>
                            </h5> Tyler Durden - 16 hours ago

                          </div>
                          <div class="media-right">
                            <div class="media-response"> Approve?</div>
                            <div class="btn-group">
                              <button type="button" class="btn btn-default btn-xs light">
                                <i class="fa fa-check text-success"></i>
                              </button>
                              <button type="button" class="btn btn-default btn-xs light">
                                <i class="fa fa-remove"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="media">
                          <a class="media-left" href="#"> <span class="glyphicon glyphicon-shopping-cart text-success"></span> </a>
                          <div class="media-body">
                            <h5 class="media-heading">New Order
                              <small class="text-muted"></small>
                            </h5> <a href="#">Apple Ipod</a> - 4 hours ago
                          </div>
                          <div class="media-right">
                            <div class="media-response"> Confirm?</div>
                            <div class="btn-group">
                              <button type="button" class="btn btn-default btn-xs light">
                                <i class="fa fa-check text-success"></i>
                              </button>
                              <button type="button" class="btn btn-default btn-xs light">
                                <i class="fa fa-print"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="media">
                          <a class="media-left" href="#"> <span class="glyphicon glyphicon-comment text-system"></span> </a>
                          <div class="media-body">
                            <h5 class="media-heading">New Comment
                              <small class="text-muted"></small>
                            </h5> Mike - I loved your article!
                          </div>
                          <div class="media-right">
                            <div class="media-response text-right"> Moderate?</div>
                            <div class="btn-group">
                              <button type="button" class="btn btn-default btn-xs light">
                                <i class="fa fa-pencil"></i>
                              </button>
                              <button type="button" class="btn btn-default btn-xs light">
                                <i class="fa fa-check text-success"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="media">
                          <a class="media-left" href="#"> <span class="glyphicon glyphicon-star text-warning"></span> </a>
                          <div class="media-body">
                            <h5 class="media-heading">New Review
                              <small class="text-muted"></small>
                            </h5> Sammy Hilton - 4 hours ago
                          </div>
                          <div class="media-right">
                            <div class="media-response"> Approve?</div>
                            <div class="btn-group">
                              <button type="button" class="btn btn-default btn-xs light">
                                <i class="fa fa-check text-success"></i>
                              </button>
                              <button type="button" class="btn btn-default btn-xs light">
                                <i class="fa fa-remove"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="media">
                          <a class="media-left" href="#"> <span class="glyphicon glyphicon-user text-info"></span> </a>
                          <div class="media-body">
                            <h5 class="media-heading">New Registration
                              <small class="text-muted"></small>
                            </h5> Michael Sober - 7 hours ago
                          </div>
                          <div class="media-right">
                            <div class="media-response"> Approve?</div>
                            <div class="btn-group">
                              <button type="button" class="btn btn-default btn-xs light">
                                <i class="fa fa-check text-success"></i>
                              </button>
                              <button type="button" class="btn btn-default btn-xs light">
                                <i class="fa fa-remove"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="media">
                          <a class="media-left" href="#"> <span class="glyphicon glyphicon-usd text-alert"></span> </a>
                          <div class="media-body">
                            <h5 class="media-heading">New Invoice
                              <small class="text-muted"></small>
                            </h5> <a href="#">Apple Ipod</a> - 4 hours ago

                          </div>
                          <div class="media-right">
                            <div class="media-response single">#518358</div>
                          </div>
                        </div>
                        <div class="media">
                          <a class="media-left" href="#"> <span class="glyphicon glyphicon-shopping-cart text-success"></span> </a>
                          <div class="media-body">
                            <h5 class="media-heading">New Order
                              <small class="text-muted"></small>
                            </h5> <a href="#">Apple Ipod</a> - 4 hours ago
                          </div>
                          <div class="media-right">
                            <div class="media-response"> Confirm?</div>
                            <div class="btn-group">
                              <button type="button" class="btn btn-default btn-xs light">
                                <i class="fa fa-check text-success"></i>
                              </button>
                              <button type="button" class="btn btn-default btn-xs light">
                                <i class="fa fa-print"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="nav-tab2" class="tab-pane chat-widget" role="tabpanel">
                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" alt="64x64" src="assets/img/avatars/3.jpg">
                            </a>
                          </div>
                          <div class="media-body">
                            <span class="media-status online"></span>
                            <h5 class="media-heading">Courtney Faught
                              <small> - 12:30am</small>
                            </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                          </div>
                        </div>
                        <div class="media">
                          <div class="media-body">
                            <span class="media-status offline"></span>
                            <h5 class="media-heading">Joe Gibbons
                              <small> - 12:30am</small>
                            </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque.
                          </div>
                          <div class="media-right">
                            <a href="#">
                              <img class="media-object" alt="64x64" src="assets/img/avatars/1.jpg">
                            </a>
                          </div>
                        </div>
                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" alt="64x64" src="assets/img/avatars/2.jpg">
                            </a>
                          </div>
                          <div class="media-body">
                            <span class="media-status online"></span>
                            <h5 class="media-heading">Courtney Faught
                              <small> - 12:30am</small>
                            </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metuscommodo.
                          </div>
                        </div>
                        <div class="media">
                          <div class="media-body">
                            <span class="media-status offline"></span>
                            <h5 class="media-heading">Joe Gibbons
                              <small> - 12:30am</small>
                            </h5> Cras sit amet nibh libero, in Nulla vel metus scelerisque antecommodo.
                          </div>
                          <div class="media-right">
                            <a href="#">
                              <img class="media-object" alt="64x64" src="assets/img/avatars/1.jpg">
                            </a>
                          </div>
                        </div>
                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" alt="64x64" src="assets/img/avatars/2.jpg">
                            </a>
                          </div>
                          <div class="media-body">
                            <span class="media-status online"></span>
                            <h5 class="media-heading">Courtney Faught
                              <small> - 12:30am</small>
                            </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque soltudino.
                          </div>
                        </div>
                        <div class="media">
                          <div class="media-body">
                            <span class="media-status offline"></span>
                            <h5 class="media-heading">Joe Gibbons
                              <small> - 12:30am</small>
                            </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.
                          </div>
                          <div class="media-right">
                            <a href="#">
                              <img class="media-object" alt="64x64" src="assets/img/avatars/1.jpg">
                            </a>
                          </div>
                        </div>
                      </div>
                      <div id="nav-tab3" class="tab-pane scroller-nm" role="tabpanel">
                        <ul class="media-list" role="menu">
                          <li class="media">
                            <a class="media-left" href="#"> <img src="assets/img/avatars/5.jpg" class="mw40" alt="avatar"> </a>
                            <div class="media-body">
                              <h5 class="media-heading">Article
                                <small class="text-muted">- 08/16/22</small>
                              </h5> Last Updated 36 days ago by
                              <a class="text-system" href="#"> Max </a>
                            </div>
                          </li>
                          <li class="media">
                            <a class="media-left" href="#"> <img src="assets/img/avatars/2.jpg" class="mw40" alt="avatar"> </a>
                            <div class="media-body">
                              <h5 class="media-heading mv5">Article
                                <small> - 08/16/22</small>
                              </h5>
                              Last Updated 36 days ago by
                              <a class="text-system" href="#"> Max </a>
                            </div>
                          </li>
                          <li class="media">
                            <a class="media-left" href="#"> <img src="assets/img/avatars/3.jpg" class="mw40" alt="avatar"> </a>
                            <div class="media-body">
                              <h5 class="media-heading">Article
                                <small class="text-muted">- 08/16/22</small>
                              </h5> Last Updated 36 days ago by
                              <a class="text-system" href="#"> Max </a>
                            </div>
                          </li>
                          <li class="media">
                            <a class="media-left" href="#"> <img src="assets/img/avatars/4.jpg" class="mw40" alt="avatar"> </a>
                            <div class="media-body">
                              <h5 class="media-heading mv5">Article
                                <small class="text-muted">- 08/16/22</small>
                              </h5> Last Updated 36 days ago by
                              <a class="text-system" href="#"> Max </a>
                            </div>
                          </li>
                          <li class="media">
                            <a class="media-left" href="#"> <img src="assets/img/avatars/5.jpg" class="mw40" alt="avatar"> </a>
                            <div class="media-body">
                              <h5 class="media-heading">Article
                                <small class="text-muted">- 08/16/22</small>
                              </h5> Last Updated 36 days ago by
                              <a class="text-system" href="#"> Max </a>
                            </div>
                          </li>
                          <li class="media">
                            <a class="media-left" href="#"> <img src="assets/img/avatars/2.jpg" class="mw40" alt="avatar"> </a>
                            <div class="media-body">
                              <h5 class="media-heading mv5">Article
                                <small> - 08/16/22</small>
                              </h5>
                              Last Updated 36 days ago by
                              <a class="text-system" href="#"> Max </a>
                            </div>
                          </li>
                          <li class="media">
                            <a class="media-left" href="#"> <img src="assets/img/avatars/3.jpg" class="mw40" alt="avatar"> </a>
                            <div class="media-body">
                              <h5 class="media-heading">Article
                                <small class="text-muted">- 08/16/22</small>
                              </h5> Last Updated 36 days ago by
                              <a class="text-system" href="#"> Max </a>
                            </div>
                          </li>
                        </ul>
                        <table class="table table-striped hidden">
                        <thead>
                          <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                          <tr>
                            <td>Sussy</td>
                            <td>Watcher</td>
                            <td>@thehawk</td>
                          </tr>
                          <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <td>Sussy</td>
                            <td>Watcher</td>
                            <td>@thehawk</td>
                          </tr>
                          <tr>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                          <tr>
                            <td>Sussy</td>
                            <td>Watcher</td>
                            <td>@thehawk</td>
                          </tr>
                          <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                        </tbody>
                      </table>
                      </div>
                    </div>
                  </div>
                  <div class="panel-footer text-center p7">
                    <a href="#" class="link-unstyled"> View All </a>
                  </div>
              </div>
            </div>
          </div>
        </li>
				<li class="dropdown menu-merge">
					<div class="navbar-btn btn-group">
	          <button data-toggle="dropdown" class="btn btn-sm dropdown-toggle">
		          <span class="flag-xs flag-us"></span>
		          <!-- <span class="caret"></span> -->
	          </button>
	          <ul class="dropdown-menu pv5 animated animated-short flipInX" role="menu">
	            <li>
	              <a href="javascript:void(0);">
	                <span class="flag-xs flag-in mr10"></span> Hindu </a>
	            </li>
	            <li>
	              <a href="javascript:void(0);">
	                <span class="flag-xs flag-tr mr10"></span> Turkish </a>
	            </li>
	            <li>
	              <a href="javascript:void(0);">
	                <span class="flag-xs flag-es mr10"></span> Spanish </a>
	            </li>
	          </ul>
	        </div>
				</li>
        <li class="menu-divider hidden-xs">
          <i class="fa fa-circle"></i>
        </li>
        <li class="dropdown menu-merge">
          <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown">
          	<img src="assets/img/avatars/1.jpg" alt="avatar" class="mw30 br64">
          	<span class="hidden-xs pl15"> Michael .R </span>
            <span class="caret caret-tp hidden-xs"></span>
          </a>
          <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">
            <li class="dropdown-header clearfix">
              <div class="pull-left ml10">
                <select id="user-status">
                  <optgroup label="Current Status:">
                    <option value="1-1">Away</option>
                    <option value="1-2">Offline</option>
                    <option value="1-3" selected="selected">Online</option>
                  </optgroup>
                </select>
              </div>

              <div class="pull-right mr10">
                <select id="user-role">
                  <optgroup label="Logged in As:">
                    <option value="1-1">Client</option>
                    <option value="1-2">Editor</option>
                    <option value="1-3" selected="selected">Admin</option>
                  </optgroup>
                </select>
              </div>
            </li>
            <li class="list-group-item">
              <a href="#" class="animated animated-short fadeInUp">
                <span class="fa fa-envelope"></span> Messages
                <span class="label label-warning">2</span>
              </a>
            </li>
            <li class="list-group-item">
              <a href="#" class="animated animated-short fadeInUp">
                <span class="fa fa-user"></span> Friends
                <span class="label label-warning">6</span>
              </a>
            </li>
            <li class="list-group-item">
              <a href="#" class="animated animated-short fadeInUp">
                <span class="fa fa-bell"></span> Notifications </a>
            </li>
            <li class="list-group-item">
              <a href="#" class="animated animated-short fadeInUp">
                <span class="fa fa-gear"></span> Settings </a>
            </li>
            <li class="dropdown-footer">
              <a href="#" class="">
              <span class="fa fa-power-off pr5"></span> Logout </a>
            </li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- End: Header -->

    <!-- Start: Sidebar -->
    <aside id="sidebar_left" class="nano nano-light affix">

      <!-- Start: Sidebar Left Content -->
      <div class="sidebar-left-content nano-content">

        <!-- Start: Sidebar Header -->
        <header class="sidebar-header">

          <!-- Sidebar Widget - Menu (Slidedown) -->
          <div class="sidebar-widget menu-widget">
            <div class="row text-center mbn">
              <div class="col-xs-4">
                <a href="dashboard.html" class="text-primary" data-toggle="tooltip" data-placement="top" title="Dashboard">
                  <span class="glyphicon glyphicon-home"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_messages.html" class="text-info" data-toggle="tooltip" data-placement="top" title="Messages">
                  <span class="glyphicon glyphicon-inbox"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_profile.html" class="text-alert" data-toggle="tooltip" data-placement="top" title="Tasks">
                  <span class="glyphicon glyphicon-bell"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_timeline.html" class="text-system" data-toggle="tooltip" data-placement="top" title="Activity">
                  <span class="fa fa-desktop"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_profile.html" class="text-danger" data-toggle="tooltip" data-placement="top" title="Settings">
                  <span class="fa fa-gears"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_gallery.html" class="text-warning" data-toggle="tooltip" data-placement="top" title="Cron Jobs">
                  <span class="fa fa-flask"></span>
                </a>
              </div>
            </div>
          </div>

          <!-- Sidebar Widget - Author (hidden)  -->
          <div class="sidebar-widget author-widget hidden">
            <div class="media">
              <a class="media-left" href="#">
                <img src="assets/img/avatars/3.jpg" class="img-responsive">
              </a>
              <div class="media-body">
                <div class="media-links">
                   <a href="#" class="sidebar-menu-toggle">User Menu -</a> <a href="pages_login(alt).html">Logout</a>
                </div>
                <div class="media-author">Michael Richards</div>
              </div>
            </div>
          </div>

          <!-- Sidebar Widget - Search (hidden) -->
          <div class="sidebar-widget search-widget hidden">
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-search"></i>
              </span>
              <input type="text" id="sidebar-search" class="form-control" placeholder="Search...">
            </div>
          </div>

        </header>
        <!-- End: Sidebar Header -->

        <!-- Start: Sidebar Menu -->
        <ul class="nav sidebar-menu">
          <li class="sidebar-label pt20">Menu</li>
          <li>
            <a href="/">
              <span class="glyphicon glyphicon-home"></span>
              <span class="sidebar-title">Home</span>
            </a>
          </li>
          <li>
            <a href="/about">
              <span class="glyphicon glyphicon-book"></span>
              <span class="sidebar-title">Mentions légales</span>
            </a>
          </li>
          <li class="/contact">
            <a href="dashboard.html">
              <span class="fa fa-envelope"></span>
              <span class="sidebar-title">Contact</span>
            </a>
          </li>
          <li class="/faq">
            <a href="dashboard.html">
              <span class="fa fa-question-circle"></span>
              <span class="sidebar-title">Faq</span>
            </a>
          </li>
          <li class="sidebar-label pt15">Exclusive Tools</li>
          <li>
            <a class="accordion-toggle" href="#">
              <span class="fa fa-film"></span>
              <span class="sidebar-title">Movies</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a  href="/movies/index">
                  <span class="fa fa-desktop"></span>
                  Index
                </a>
              </li>
              <li>
                <a  href="/movies/create">
                  <span class="fa fa-plus"></span>
                  Create
                </a>
              </li>
              <li>
                <a  href="/movies/remove">
                  <span class="fa fa-times"></span>
                  Remove
                </a>
              </li>
              <li>
                <a  href="/movies/update">
                  <span class="fa fa-edit"></span>
                  Update
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a class="accordion-toggle" href="#">
              <span class="fa fa-tags"></span>
              <span class="sidebar-title">Categories</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a  href="/categories/index">
                  <span class="fa fa-desktop"></span>
                  Index
                </a>
              </li>
              <li>
                <a  href="/categories/create">
                  <span class="fa fa-plus"></span>
                  Create
                </a>
              </li>
              <li>
                <a  href="/categories/remove">
                  <span class="fa fa-times"></span>
                  Remove
                </a>
              </li>
              <li>
                <a  href="/categories/update">
                  <span class="fa fa-edit"></span>
                  Update
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a class="accordion-toggle" href="#">
              <span class="fa fa-user"></span>
              <span class="sidebar-title">Actors</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a  href="/actors/index">
                  <span class="fa fa-desktop"></span>
                  Index
                </a>
              </li>
              <li>
                <a  href="/actors/create">
                  <span class="fa fa-plus"></span>
                  Create
                </a>
              </li>
              <li>
                <a  href="/actors/remove">
                  <span class="fa fa-times"></span>
                  Remove
                </a>
              </li>
              <li>
                <a  href="/actors/update">
                  <span class="fa fa-edit"></span>
                  Update
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a class="accordion-toggle" href="#">
              <span class="fa fa-users"></span>
              <span class="sidebar-title">Directors</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a  href="/directors/index">
                  <span class="fa fa-desktop"></span>
                  Index
                </a>
              </li>
              <li>
                <a  href="/directors/create">
                  <span class="fa fa-plus"></span>
                  Create
                </a>
              </li>
              <li>
                <a  href="/directors/remove">
                  <span class="fa fa-times"></span>
                  Remove
                </a>
              </li>
              <li>
                <a  href="/directors/update">
                  <span class="fa fa-edit"></span>
                  Update
                </a>
              </li>
            </ul>
          </li>
          <!-- sidebar progress bars -->
          <li class="sidebar-label pt25 pb10">User Stats</li>
          <li class="sidebar-stat">
            <a href="#projectOne" class="fs11">
              <span class="fa fa-inbox text-info"></span>
              <span class="sidebar-title text-muted">Email Storage</span>
              <span class="pull-right mr20 text-muted">35%</span>
              <div class="progress progress-bar-xs mh20 mb10">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 35%">
                  <span class="sr-only">35% Complete</span>
                </div>
              </div>
            </a>
          </li>
          <li class="sidebar-stat">
            <a href="#projectOne" class="fs11">
              <span class="fa fa-dropbox text-warning"></span>
              <span class="sidebar-title text-muted">Bandwidth</span>
              <span class="pull-right mr20 text-muted">58%</span>
              <div class="progress progress-bar-xs mh20">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 58%">
                  <span class="sr-only">58% Complete</span>
                </div>
              </div>
            </a>
          </li>
        </ul>
        <!-- End: Sidebar Menu -->

	      <!-- Start: Sidebar Collapse Button -->
	      <div class="sidebar-toggle-mini">
	        <a href="#">
	          <span class="fa fa-sign-out"></span>
	        </a>
	      </div>
	      <!-- End: Sidebar Collapse Button -->

      </div>
      <!-- End: Sidebar Left Content -->

    </aside>

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">
      <section class="content">
        <div class="tray tray-center">
          @section('content')
          @show
        </div>
      </section>
    </section>
  </div>


  @section('js')
  <!-- jQuery -->
  <script src="{{asset('vendor/jquery/jquery-1.11.1.min.js')}}"></script>
  <script src="{{asset('vendor/jquery/jquery_ui/jquery-ui.min.js')}}"></script>

  <!-- Theme Javascript -->
  <script src="{{asset('js/utility/utility.js')}}"></script>
  <script src="{{asset('js/demo/demo.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>
  <script type="text/javascript">
  jQuery(document).ready(function() {

    "use strict";

    // Init Theme Core
    Core.init();


  });
  </script>
  <!-- END: PAGE SCRIPTS -->
  @show
</body>
</html>
