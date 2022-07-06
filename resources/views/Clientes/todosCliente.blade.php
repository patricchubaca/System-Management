@extends('dashboard')

@section('content')

<section  class="section">
  <div class="row">
   <div class="mb-5">
    <div class="alert border" role="alert">
     <h1 class="mx-2 my-2">Clientes</h1>
   </div>
    <div class="float-end mr-5">
      <a href="{{route('/cliente')}}" type="button" class="button is-solid is-medium">
        Cliente
        <i class="fa-solid fa-person-circle-plus ml-3">
        </i>
      </a>
    </div>
 </div>   
</div>

<table class="table" id="tableUsuarios">
  <thead>
    <tr>
      <th scope="col">UASG</th>
      <th scope="col">CNPJ</th>
      <th scope="col">Cliente</th>
      <th scope="col">Edit | Delete</th>
    </tr>
  </thead>
  <tbody>

  </tbody>
</table>

</section>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Produtos</h5>
        <div class="control">
        </div>
      </div>
      <form method="POST" id="form-cad-usuario">
        @csrf 
        <div class="modal-body">
          <div class="control">
            <input class="invisible" name="id" type="text" id="editid">
          </div>
          <label>Sigla:</label>
          <div class="control">
            <input class="input is-hovered" name="sigla" type="text" id="editsigla">
          </div>
          <label>Descrição:</label>
          <div class="control">
            <input class="input is-hovered" name="tipo" type="text" id="edittipo">
          </div>
          <label>Composição:</label>
          <div class="control">
            <input class="input is-hovered" name="formula" type="text" id="editformula">
          </div>
          <label>COD Spead:</label>
          <div class="control">
            <input class="input is-hovered" name="codigo_sped" type="text" id="editcodigo_sped">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
   $('#tableUsuarios').DataTable( {
    "ajax": "/api/client",
    "columns": [
    {"data":"uasg" },
    {"data":"cnpj" },
    {"data":"cliente" },
    {"data":"button" }
    ]
  } );
 } );

</script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.11.5/datatables.min.css"/>

<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.11.5/datatables.min.js"></script>


@endsection