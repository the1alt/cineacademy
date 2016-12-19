@extends('layout')
@section('content')

<div class="container-fluid">
    <h3>Liste des acteurs</h3>
    <div class="row">
      @foreach ($actors as $actor)
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="{{$actor->image}}" alt="{{$actor->lastname}} "/>
            <div class="caption">
              <h3>{{$actor->firstname}} {{$actor->lastname}}</h3>
              <p class="limit">{{str_limit(strip_tags($actor->biography),300)}}</p>
              <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
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
