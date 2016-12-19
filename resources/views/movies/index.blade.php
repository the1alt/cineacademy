@extends('layout')
@section('content')
<section id="content">
    <div class="tray tray-center">
      <h2>Liste des films</h2>
      @if(count($movies) === 0)
        <h5>Aucun film a afficher</h5>
      @else
        <h5>Nombre de films : {{ count($movies) }}</h5>

        <table class="table table-striped table-bordered">
  <thead>
    <tr class="primary">
      <th>#</th>
      <th>Film</th>
      <th>Synopsis</th>
      <th>image</th>
      <th>date de sortie</th>
      <th>En couverture</th>
      <th>Note de presse</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($movies as $movie)
      <tr>

        <td>{{ $movie['id'] }}</td>
        <td>{{ $movie['title'] }}</td>
        <td>{{ str_limit(strip_tags($movie['synopsis']), 100) }}</td>
        <td><img class="img-responsive mw40" src="{{ $movie['image'] }}" alt="" /></td>
        <td>{{ Carbon\Carbon::parse($movie->date_release)->format('d/m/Y') }}</td>
        <td>
          @if($movie['visible'] === 1)
            <i class="fa fa-check"></i>
          @else
            <i class="fa fa-times"></i>
          @endif
        </td>
        <td>
          {!! str_repeat('<i class="fa fa-star"></i>', $movie['note_presse']) !!}
        </td>
        <td>
          <a href="#" class="btn btn-xs btn-primary">
            <i class="fa fa-eye"></i> Voir</a>
          <a href="#" class="btn btn-xs btn-warning">
            <i class="fa fa-pencil"></i> Editer</a>
          <a href="{{ route('movies.remove', ['id' => $movie['id']]) }}" class="btn btn-xs btn-danger">
            <i class="fa fa-trash"></i> supprimer</a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>

      @endif
  </div>
</section>

@endsection
