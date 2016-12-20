@extends('layout')

@section('title')
  <title>{{$movie->title}}</title>
@endsection

@section('content')
  <!-- Begin: Content -->
  <section id="content" class="animated fadeIn">
    <div class="tray tray-center">
      <!-- Begin .page-heading -->
      <div class="page-heading">
        <a href="{{ route('movies.detail', ['id' => $movie['id']-1]) }}" class="btn-move btn-prev"><i class="fa fa-angle-left"></i></a>
        <div class="media clearfix">
          <div class="media-left pr30">
            <div class="modal-content">
              {{-- <div id="animation-switcher"> --}}
                <a href="#modal-image" class="active-animation item-checked" data-effect="mfp-fullscale">
                  <img id="imgModal" class="img-responsive mw200" src="{{$movie->image}}" alt="{{$movie->title}}">
                </a>

              {{-- </div> --}}
            </div>
          </div>
          <div class="media-body va-m">
            <h2 class="media-heading">{{$movie->title}}
            </h2>
            <p class="lead">{{$movie->categories->title}} - {{$movie->type}}</p>
            <div style="font-size:2em;color:gold">
              {!! str_repeat('<i class="fa fa-star"></i>', $movie['note_presse']) !!}
            </div>
          </div>
        </div>
        <a href="{{ route('movies.detail', ['id' => $movie['id']+1]) }}" class="btn-move btn-next"><i class="fa fa-angle-right"></i></a>

      </div>

      <div class="row">
          <div class="col-md-4">
            <div class="panel">
              <div class="panel-heading">
                <span class="panel-icon">
                  <i class="fa fa-star"></i>
                </span>
                <span class="panel-title"> Infos</span>
              </div>
              <div class="panel-body pn">
                <table class="table mbn tc-med-2 tc-bold-last">
                    <tr>
                      <td>Date de sortie</td>
                      <td>
                        {{Carbon\Carbon::parse($movie->date_release)->format("d/m/y")}}</td>
                    </tr>
                    <tr>
                      <td>Budget</td>
                      <td>
                        {{$movie->budget}}$</td>
                    </tr>
                    <tr>
                      <td>Durée</td>
                      <td>{{$movie->duree}}h</td>
                    </tr>
                    <tr>
                      <td>Langue</td>
                      <td>{{$movie->languages}}</td>
                    </tr>
                    <tr>
                      <td>BO</td>
                      <td>{{$movie->bo}}</td>
                    </tr>
                    <tr>
                      <td>Distributeur</td>
                      <td>{{$movie->distributeur}}</td>
                    </tr>
                </table>
              </div>
            </div>
            <div class="panel">
              <div class="panel-heading">
                <span class="panel-icon">
                  <i class="fa fa-trophy"></i>
                </span>
                <span class="panel-title">Tags</span>
              </div>
              <div class="panel-body pb5">
                @foreach ($movie->tags as $tag)
                  <a href="#"><span class="label label-success mr5 mb10 ib lh15">{{$tag->word}}</span></a>
                @endforeach
              </div>
            </div>
          </div>
          <div class="col-md-8">

            <div class="tab-block">
              <ul class="nav nav-tabs">
                <li class="active">
                  <a href="#tab1" data-toggle="tab">Synopsis</a>
                </li>
                <li>
                  <a href="#tab2" data-toggle="tab">Descrition</a>
                </li>
                <li>
                  <a href="#tab3" data-toggle="tab">Trailer</a>
                </li>
              </ul>
              <div class="tab-content p30">
                <div id="tab1" class="tab-pane active">
                  {!! $movie->synopsis !!}
                </div>
                <div id="tab2" class="tab-pane">
                  {!! $movie->description !!}
                </div>
                <div id="tab3" class="tab-pane">
                  <svg width="100%" viewBox="0 0 660 523" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;">
                      <path d="M264.41,447.79C263.34,461.009 263.118,488.066 262.323,494.906C261.259,504.053 258.705,506.608 252.323,508.309C247.034,509.718 239.87,511.337 236.884,512.105C233.899,512.873 232.961,513.392 232.961,513.984C232.961,513.984 232.961,514.015 232.967,514.073C232.97,514.103 232.974,514.132 232.979,514.159C233.108,514.947 250.111,517.07 258.4,517.07L402.117,517.07C410.404,517.07 427.407,514.947 427.536,514.159C427.542,514.132 427.546,514.103 427.549,514.073C427.555,514.015 427.555,513.984 427.555,513.984C427.555,513.392 426.618,512.874 423.632,512.105C420.646,511.337 413.482,509.718 408.193,508.309C401.811,506.608 399.258,504.053 398.194,494.906C397.399,488.066 397.176,461.009 396.105,447.79" style="fill-opacity:0;fill-rule:nonzero;stroke:rgb(43, 10,9);stroke-width:3px;stroke-dasharray:367.09,367.09;"/>
                      <path d="M636.122,7.411L24.392,7.411C16.43,7.411 9.954,13.888 9.954,21.849L9.954,433.352C9.954,441.313 16.43,447.79 24.392,447.79L636.122,447.79C644.084,447.79 650.56,441.312 650.56,433.352L650.56,21.849C650.561,13.888 644.084,7.411 636.122,7.411Z" style="fill-opacity:0.9;fill:rgb(200,200,200);fill-rule:nonzero;stroke:rgb(150,150,150);stroke-width:3px;stroke-dasharray:3963.56,3963.56;"/>
                  </svg>
                  <div class="incrusteTv">
                    {!! $movie->trailer !!}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="modal-image" class="popup-basic popup-md mfp-with-anim mfp-hide ">
          <img class="img-responsive" src="{{$movie->image}}">
        </div>
    </div>


  </section>
  <!-- End: Content -->
@endsection

@section('js')
  @parent
  <script src="{{asset('vendor/plugins/magnific/jquery.magnific-popup.js')}}" charset="utf-8"></script>

  <script type="text/javascript">
  jQuery(document).ready(function() {
    "use strict";
    console.log($(window).height());
    // Init Demo JS
    Demo.init();
    var source = $('.modal-content a').attr('href');
    var modalContent = $('.modal-content');


    // Form Skin Switcher
    $('.modal-content a').on('click', function() {
      $('.modal-content').find('a').removeClass('active-animation');
      $(this).addClass('active-animation item-checked');
      // Inline Admin-Form example
      $.magnificPopup.open({
        removalDelay: 500, //delay removal by X to allow out-animation,
        mainClass : " ",
        image: {
          verticalFit: true,
        },
        items: {
          src: source
        },
        // overflowY: 'hidden', //
        callbacks: {
          beforeOpen: function(e) {
            var Animation = $(".modal-content a").attr('data-effect');
            this.st.mainClass = Animation;
          }
        },
        midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
      });

    });

  });
  </script>
@endsection
