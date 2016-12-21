@extends('layout')

@section('title')
  <title>Liste des catégories</title>
@endsection

@section('css')

<!-- Datatables CSS -->
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/plugins/datatables/media/css/dataTables.bootstrap.css')}}">

  <!-- Datatables Editor Addon CSS -->
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/plugins/datatables/extensions/Editor/css/dataTables.editor.css')}}">
  <!-- Datatables ColReorder Addon CSS -->
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css')}}">

@endsection

@section('content')
    <section id="content">
      <div class="tray tray-center">
        <div class="panel-heading">
            <span class="panel-title">
              <span class="fa fa-table"></span>
              Liste des catégories -
              @if($nbCat === 0)
              Aucune catégorie a afficher
              @else
              nombre de catégories : {{ $nbCat }}
            </span>
        </div>
        <div class="pn">
          <table class="table table-striped table-bordered">
            <thead>
              <tr class="dark">
                <th></th>
                <th>Catégorie</th>
                <th>Description</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($categories as $categorie)
                <tr>
                  <td class='text-center'>
                    <img src="{{$categorie->image}}" alt="{{$categorie['title']}}" height="50px;" />
                  </td>
                  <td>
                    <strong>{{ $categorie['title'] }}</strong>
                  </td>
                  <td>
                    {{ $categorie['description']}}
                  </td>
                  <td>
                    <a href="#" class="btn btn-xs btn-primary">
                      <i class="fa fa-eye"></i> Voir
                    </a>
                    <a href="#" class="btn btn-xs btn-warning">
                      <i class="fa fa-pencil"></i> Editer
                    </a>
                    <a href="{{ route('categories.remove', ['id' => $categorie['id']]) }}" class="btn btn-xs btn-danger">
                      <i class="fa fa-trash"></i> supprimer
                    </a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </section>
@endif
@endsection
@section('js')
  @parent
  <script src="{{ asset('vendor/plugins/datatables/media/js/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js')}}"></script>
  <script src="{{ asset('vendor/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js')}}"></script>
  <script src="{{ asset('vendor/plugins/datatables/media/js/dataTables.bootstrap.js')}}"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $('.table').dataTable({
      "aoColumnDefs": [{
        'bSortable': false,
        'aTargets': [-1]
      }],
      "oLanguage": {
        "oPaginate": {
          "sPrevious": "",
          "sNext": ""
        }
      },
      "iDisplayLength": 10,
      "aLengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
      ],
      "sDom": '<"dt-panelmenu clearfix"lfr>t<"dt-panelfooter clearfix"ip>',
      "oTableTools": {
        "sSwfPath": "{{asset('vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf')}}"
      }
    });
  });

  </script>
@endsection
