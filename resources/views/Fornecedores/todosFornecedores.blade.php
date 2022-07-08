@extends('dashboard')

@section('content')

<section  class="section">
  <div class="row">
   <div class="mb-5">
    <div class="alert border" role="alert">
      <h1 class="mx-2 my-2">Fornecedores</h1>
    </div>
    <div class="float-end mr-5">
      <a href="{{route ('createFornecedor')}}" type="button" class="button is-solid is-medium">
        Fornecedor
        <i class="ml-2 fa-solid fa-truck-fast"></i>
        </i>
      </a>
    </div>
  </div>
  <div>

  </div>    
</div>
<table class="table" id="tableUsuarios">
  <thead>
    <tr>
      <th scope="col">Fornecedor</th>
      <th scope="col">CNPJ</th>
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
    "ajax": "/api/fornecedores",
    "columns": [
    {"data":"fornecedor" },
    {"data":"cnpj" },
    {"data":"button" }
    ]
  } );
 } );

</script>


@endsection