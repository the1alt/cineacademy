@extends('layout')
@section('content')
<h3>Liste des réalisateurs</h3>

@foreach($directors as $director)
  <ul>
    <li>{{$director->firstname}} {{$director->lastname}}@if($director->dob != null) - {{$director->dob}}@endif</li>

  </ul>
@endforeach
@endsection
