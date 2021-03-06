@extends('dashboard')

@section('content')

<section  class="section">

  <div class="container ">
    <main>
    </div>
    <div class="col-md-7 col-lg-12 mt-1 border">

     <form class="needs-validation  px-5 py-1 mt-1" method="POST" action="{{route ('storeMarca') }}">
      @csrf
      <div class="mb-5">
        <div class="alert border" role="alert">
         <h1 class="mt-3">Marcas</h1>
       </div>
     </div>
     <div class="row g-3 mt-3">
      <div class="col-sm-6">
        <label for="firstName" class="form-label">Marca</label>
        <input type="text" class="form-control" id="firstName" placeholder="SOLIDSTEEL" name="marca" required>
        <div class="invalid-feedback">
          Valid first name is required.
        </div>
      </div>

      <div class="col-sm-6">
        <label for="lastName" class="form-label">Produto</label>
        <input type="text" class="form-control" id="lastName" placeholder="Fogão 8 Bocas" name="modelo" required>
        <div class="invalid-feedback">
          Valid last name is required.
        </div>
      </div>

      <hr class="col-12">
      <button class="w-100 btn btn-primary btn-lg"  type="submit">Registrar Marca</button>
    </div>
  </div>
</form>
</div>
</div>
</main>
</section>  
@endsection