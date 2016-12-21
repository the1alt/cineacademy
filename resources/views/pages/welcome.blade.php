@extends('layout')

@section('css')
    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin-tools/admin-forms/css/admin-forms.css')}}">
@endsection

@section('content')
  <section id="content">
    <div class="tray tray-center">
      <h1 style="margin-bottom:100px" class="text-center"><i class="fa fa-dashboard"></i> Homepage</h1>
      <div class="row wrapper" style="margin-bottom:50px">
        @foreach ($lastMovies as $movie)
          <div class="col-md-2 img-box" >
            <a href="{{route('movies.detail', ['id' => $movie->id])}}">
              <img src="{{$movie->image}}" alt="{{$movie->title}}" class="img-responsive shadow" />
            </a>
          </div>
        @endforeach
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="panel panel-tile bg-primary light shadow">
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
          <div class="panel panel-tile bg-warning light shadow">
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
          <div class="panel panel-tile bg-danger light shadow">
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
          <div class="panel panel-tile bg-success light shadow">
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
      <div class="row">
        <div class="col-md-4">
          <!-- Pie Chart -->
          <div class="panel">
            <div class="panel-heading">
              <span class="panel-title fw600 text-info">Pourcentage de notes reçues</span>
            </div>
            <div class="pn">
              <div id="high-pie" style="width: 100%; height: 210px; margin: 0 auto">
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <!-- Pie Chart -->
        <div class="panel">
          <div class="panel-heading">
            <span class="panel-title fw600 text-info">Acteurs les plus représentés</span>
          </div>
          <div class="container-fluid" style="padding:1em">
            <div class="row wrapper">
              <div class="col-md-4">
                <a href="{{ route('movies.detail', ['id' => $actorsNbMovies[0]->id])}}" class="btn captionBox" >
                  <img src="{{$actorsNbMovies[0]->image}}" alt="" class="img-responsive"/>
                  <span class="caption full-caption">{{$actorsNbMovies[0]->firstname." ".$actorsNbMovies[0]->lastname}} </span>
                </a>
              </div>
              <div class="col-md-4">
                <a href="{{ route('movies.detail', ['id' => $actorsNbMovies[1]->id])}}" class="btn captionBox" >
                  <img src="{{$actorsNbMovies[1]->image}}" alt="" class="img-responsive"/>
                  <span class="caption full-caption">{{$actorsNbMovies[1]->firstname." ".$actorsNbMovies[1]->lastname}} </span>
                </a>
              </div>
              <div class="col-md-4">
                <a href="{{ route('movies.detail', ['id' => $actorsNbMovies[2]->id])}}" class="btn captionBox" >
                  <img src="{{$actorsNbMovies[2]->image}}" alt="" class="img-responsive"/>
                  <span class="caption full-caption">{{$actorsNbMovies[2]->firstname." ".$actorsNbMovies[2]->lastname}} </span>
                </a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
@section('js')
  @parent

    <!-- Charts JS -->
    <script src="{{asset('vendor/plugins/highcharts/highcharts.js')}}"></script>

    <script type="text/javascript">
      $(document).ready(function(){

        var demoHighCharts = function () {


                // Define chart color patterns
                var highColors = [bgWarning, bgPrimary, bgInfo, bgAlert,
                    bgDanger, bgSuccess, bgSystem, bgDark
                ];

                // Color Library we used to grab a random color
                var sparkColors = {
                    "primary": [bgPrimary, bgPrimaryLr, bgPrimaryDr],
                    "info": [bgInfo, bgInfoLr, bgInfoDr],
                    "warning": [bgWarning, bgWarningLr, bgWarningDr],
                    "success": [bgSuccess, bgSuccessLr, bgSuccessDr],
                    "alert": [bgAlert, bgAlertLr, bgAlertDr]
                };

        $('#high-pie').highcharts({
            credits: false,
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: null
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    center: ['30%', '50%'],
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            colors: highColors,
            legend: {
                x: 90,
                floating: true,
                verticalAlign: "middle",
                layout: "vertical",
                itemMarginTop: 10
            },
            series: [{
                type: 'pie',
                name: 'Browser share',
                data: [
                    ['0 étoiles', {{$tabNotes[0]*100/array_sum($tabNotes)}}],
                    ['1 étoiles', {{$tabNotes[1]*100/array_sum($tabNotes)}}],
                    ['2 étoiles', {{$tabNotes[2]*100/array_sum($tabNotes)}}],
                    ['3 étoiles', {{$tabNotes[3]*100/array_sum($tabNotes)}}],
                    ['4 étoiles', {{$tabNotes[4]*100/array_sum($tabNotes)}}],
                    ['5 étoiles', {{$tabNotes[5]*100/array_sum($tabNotes)}}],
                ]
            }]
        });
      }

      demoHighCharts();

      });
    </script>
@endsection
