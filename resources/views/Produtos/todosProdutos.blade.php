@extends('dashboard')

@section('content')

<section  class="section">
  <div class="row">
   <div class="mb-5">
    <div class="alert border" role="alert">
      <h1 class="mx-2 my-2">Produtos</h1>
    </div>
    <div class="float-end mr-5">
      <a href="{{route('createProdutos')}}" type="button" class="button is-solid is-medium">
        Produto
        <i class="fa-solid fa-person-circle-plus ml-3">
        </i>
      </a>
    </div>
  </div>       
</div>

<table class="table" id="tableUsuarios">
  <thead>
    <tr>
      <th scope="col">Produto</th>
      <th scope="col">Marca</th>
      <th scope="col">Edit | Delete</th>
    </tr>
  </thead>
  <tbody>

  </tbody>
</table>

</section>

<script type="text/javascript">
  $(document).ready(function() {
   $('#tableUsuarios').DataTable( {
    "ajax": "/api/client",
    "columns": [
    {"data":"inscricaoEstadual" },
    {"data":"uasg" },
    {"data":"button" }
    ]
  } );
 } );

</script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.11.5/datatables.min.css"/>

<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.11.5/datatables.min.js"></script>


@endsection