@extends('layout')
@section('content')

<h3>Liste des catégories</h3>

@if($nbCat === 0)
  <h5>Aucune catégorie a afficher</h5>
@else
  <h5>Nombre de catégories : {{ $nbCat }}</h5>

  <table class="table table-striped">
  <thead>
    <tr>
      <th >Catégorie</th>
      <th >description</th>
      <th ></th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $categorie)
      <tr>
        <td>
          <strong>{{ $categorie['title'] }}</strong>
        </td>
        <td>
          {{ $categorie['description']}}
        </td>
        <td>
          <img src="{{$categorie->image}}" alt="{{$categorie['title']}}" height="50px;" />
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
@endif
@endsection
