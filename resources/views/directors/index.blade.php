@extends('layout')
@section('content')

<div class="container-fluid">
    <h3>Liste des acteurs</h3>
    <div class="row">
      @foreach ($directors as $director)
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="{{$director->image}}" alt="{{$director->lastname}} "/>
            <div class="caption">
              <h3>{{$director->firstname}} {{$director->lastname}}</h3>
              <p class="limit">{{str_limit(strip_tags($director->biography),300)}}</p>
              <p><a href="{{ route('directors.remove', ['id' => $director['id']]) }}" class="btn btn-danger" role="button"><i class="fa fa-trash"></i> Supprimer</a></p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
</div>

@endsection

@section('js')
  @parent
  <script type="text/javascript">
    $(document).ready(function(){
      var height=[];
      $(".thumbnail").each(function(){
        height.push($(this).height());
      });
      height = Math.max.apply(Math, height);
      console.log(height);
      $(".thumbnail").each(function(){
        $(this).height(height);
      })
    })
  </script>

@endsection
