@extends('layout')

@section('title')
  <title>Liste des films</title>
@endsection

@section('content')
<section id="content">
  <div class="tray tray-center">
      <div class="panel-heading">
          <span class="panel-title">
          <span class="fa fa-table"></span>Liste des films -
          @if(count($movies) === 0)
            aucun film a afficher
          @else
            nombre de films : {{ count($movies) }}</span>
      </div>
      <table class="table table-striped table-bordered">
        <thead>
          <tr class="dark">
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
                <a href="{{ route('movies.detail', ['id' => $movie['id']]) }}" class="btn btn-xs btn-primary">
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
