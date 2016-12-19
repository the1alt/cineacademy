<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CinéAcademy</title>
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="{{asset('css/main.css')}}" media="screen">
  </head>
  <body>
    <header>

            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
              <div class="container-fluid">
                <div class="navbar-header">
                  <a class="navbar-brand" href="/"><i class="fa fa-film" aria-hidden="true"></i> CineAcademy <i class="fa fa-film" aria-hidden="true"></i></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar">
                  <ul class="nav navbar-nav">
                    <li class="bt bt1"><a href="/">Home</a></li>
                    <li class="bt bt2"><a href="/faq">FAQ</a></li>
                    <li class="bt bt3"><a href="/about">About</a></li>
                    <li class="bt bt4"><a href="/mention">Mentions Légales</a></li>
                    <li class="bt bt5"><a href="/contact">Contact</a></li>
                    <li class="dropdown bt bt6">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Films <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="/movies/index">index</a></li>
                        <li><a href="/movies/create">create</a></li>
                        <li><a href="/movies/update">update</a></li>
                        <li><a href="/movies/remove">remove</a></li>
                      </ul>
                    </li>
                    <li class="dropdown bt bt7">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="/categories/index">index</a></li>
                        <li><a href="/categories/create">create</a></li>
                        <li><a href="/categories/update">update</a></li>
                        <li><a href="/categories/remove">remove</a></li>
                      </ul>
                    </li>
                    <li class="dropdown bt bt8">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Acteurs <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="/actors/index">index</a></li>
                        <li><a href="/actors/create">create</a></li>
                        <li><a href="/actors/update">update</a></li>
                        <li><a href="/actors/remove">remove</a></li>
                      </ul>
                    </li>
                    <li class="dropdown bt bt9">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Films <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="/directors/index">index</a></li>
                        <li><a href="/directors/create">create</a></li>
                        <li><a href="/directors/update">update</a></li>
                        <li><a href="/directors/remove">remove</a></li>
                      </ul>
                    </li>

                  </ul>

                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>

    </header>
    <main>
