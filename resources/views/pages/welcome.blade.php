@extends('layout')
@section('content')
  <section id="content">
    <div class="tray tray-center">
      <h1 style="margin-bottom:100px" class="text-center"><i class="fa fa-dashboard"></i> Homepage</h1>
        <div class="row">
          <div class="col-md-3">
            <div class="panel panel-tile bg-primary light">
              <div class="panel-body pn pl20 p5">
                <i class="fa fa-film icon-bg"></i>
                <h2 class="mt15 lh15">
                  <b>{{$nbMovies}}</b>
                </h2>
                <h5 class="text-muted">Films</h5>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="panel panel-tile bg-warning light">
              <div class="panel-body pn pl20 p5">
                <i class="fa fa-comments-o icon-bg"></i>
                <h2 class="mt15 lh15">
                  <b>{{$nbComments}}</b>
                </h2>
                <h5 class="text-muted">Commentaires</h6>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="panel panel-tile bg-danger light">
              <div class="panel-body pn pl20 p5">
                <i class="fa fa-dollar icon-bg"></i>
                <h2 class="mt15 lh15">
                  <b>{{ number_format($sumBudgetMovies, 0, ",", " ")}} $</b>
                </h2>
                <h5 class="text-muted">Budget total</h6>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="panel panel-tile bg-success light">
              <div class="panel-body pn pl20 p5">
                <i class="fa fa-clock-o icon-bg"></i>
                <h2 class="mt15 lh15">
                  <b>{{ gmdate('H:i', $avgDuration*3600)}}</b>
                </h2>
                <h5 class="text-muted">Durée moyenne</h6>
              </div>
            </div>
          </div>
        </div>
    </div>
  </section>

@endsection
