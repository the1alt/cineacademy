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
      <li class="{{ Route::currentRouteName() === 'welcome' ? 'active' : '' }}">
        <a href="/">
          <span class="glyphicon glyphicon-home"></span>
          <span class="sidebar-title">Home</span>
        </a>
      </li>
      <li class="{{ Route::currentRouteName() === 'mention' ? 'active' : '' }}">
        <a href="/mention">
          <span class="glyphicon glyphicon-book"></span>
          <span class="sidebar-title">Mentions légales</span>
        </a>
      </li>
      <li class="{{ Route::currentRouteName() === 'contact' ? 'active' : '' }}">
        <a href="/contact">
          <span class="fa fa-envelope"></span>
          <span class="sidebar-title">Contact</span>
        </a>
      </li>
      <li class="{{ Route::currentRouteName() === 'faq' ? 'active' : '' }}">
        <a href="/faq">
          <span class="fa fa-question-circle"></span>
          <span class="sidebar-title">Faq</span>
        </a>
      </li>
      <li class="{{ Route::currentRouteName() === 'about' ? 'active' : '' }}">
        <a href="/about">
          <span class="fa fa-question-circle"></span>
          <span class="sidebar-title">About</span>
        </a>
      </li>
      <li class="sidebar-label pt15">Exclusive Tools</li>
      <li>
        <a class="accordion-toggle {{ strpos(Route::currentRouteName(), 'movies') === 0 ? 'menu-open' : '' }}" href="#">
          <span class="fa fa-film"></span>
          <span class="sidebar-title">Movies</span>
          <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
          <li class="{{ Route::currentRouteName() === 'movies.index' ? 'active' : '' }}">
            <a  href="/movies/index">
              <span class="fa fa-desktop"></span>
              Index
            </a>
          </li>
          <li class="{{ Route::currentRouteName() === 'movies.create' ? 'active' : '' }}">
            <a  href="/movies/create">
              <span class="fa fa-plus"></span>
              Create
            </a>
          </li>
          <li class="{{ Route::currentRouteName() === 'movies.remove' ? 'active' : '' }}">
            <a  href="/movies/remove">
              <span class="fa fa-times"></span>
              Remove
            </a>
          </li>
          <li class="{{ Route::currentRouteName() === 'movies.update' ? 'active' : '' }}">
            <a  href="/movies/update">
              <span class="fa fa-edit"></span>
              Update
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a class="accordion-toggle {{ strpos(Route::currentRouteName(), 'categories') === 0 ? 'menu-open' : '' }}" href="#">
          <span class="fa fa-tags"></span>
          <span class="sidebar-title">Categories</span>
          <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
          <li class="{{ Route::currentRouteName() === 'categories.index' ? 'active' : '' }}">
            <a  href="/categories/index">
              <span class="fa fa-desktop"></span>
              Index
            </a>
          </li>
          <li class="{{ Route::currentRouteName() === 'categories.create' ? 'active' : '' }}">
            <a  href="/categories/create">
              <span class="fa fa-plus"></span>
              Create
            </a>
          </li>
          <li class="{{ Route::currentRouteName() === 'categories.remove' ? 'active' : '' }}">
            <a  href="/categories/remove">
              <span class="fa fa-times"></span>
              Remove
            </a>
          </li>
          <li class="{{ Route::currentRouteName() === 'categories.update' ? 'active' : '' }}">
            <a  href="/categories/update">
              <span class="fa fa-edit"></span>
              Update
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a class="accordion-toggle {{ strpos(Route::currentRouteName(), 'Actors') === 0 ? 'menu-open' : '' }}" href="#">
          <span class="fa fa-user"></span>
          <span class="sidebar-title">Actors</span>
          <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
          <li class="{{ Route::currentRouteName() === 'actors.index' ? 'active' : '' }}">
            <a  href="/actors/index">
              <span class="fa fa-desktop"></span>
              Index
            </a>
          </li>
          <li  class="{{ Route::currentRouteName() === 'actors.create' ? 'active' : '' }}">
            <a  href="/actors/create">
              <span class="fa fa-plus"></span>
              Create
            </a>
          </li>
          <li class="{{ Route::currentRouteName() === 'actors.remove' ? 'active' : '' }}">
            <a  href="/actors/remove">
              <span class="fa fa-times"></span>
              Remove
            </a>
          </li>
          <li  class="{{ Route::currentRouteName() === 'actors.update' ? 'active' : '' }}">
            <a  href="/actors/update">
              <span class="fa fa-edit"></span>
              Update
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a class="accordion-toggle {{ strpos(Route::currentRouteName(), 'directors') === 0 ? 'menu-open' : '' }}" href="#">
          <span class="fa fa-users"></span>
          <span class="sidebar-title">Directors</span>
          <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
          <li  class="{{ Route::currentRouteName() === 'directors.index' ? 'active' : '' }}">
            <a  href="/directors/index">
              <span class="fa fa-desktop"></span>
              Index
            </a>
          </li>
          <li class="{{ Route::currentRouteName() === 'directors.create' ? 'active' : '' }}">
            <a  href="/directors/create">
              <span class="fa fa-plus"></span>
              Create
            </a>
          </li>
          <li  class="{{ Route::currentRouteName() === 'directors.remove' ? 'active' : '' }}">
            <a  href="/directors/remove">
              <span class="fa fa-times"></span>
              Remove
            </a>
          </li>
          <li class="{{ Route::currentRouteName() === 'directors.update' ? 'active' : '' }}">
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
