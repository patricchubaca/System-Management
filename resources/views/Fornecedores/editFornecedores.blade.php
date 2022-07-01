@extends('dashboard')

@section('content')

<section  class="section">

  <div class="container ">
    <main>
    </div>
    <div class="col-md-7 col-lg-12 mt-1 border">

     <form class="needs-validation  px-5 py-1 mt-1" method="POST" action="{{route('storeProvider')}}">
      @csrf
      <div class="alert border" role="alert">
             <h1 class="mx-2 my-2">Fornecedor</h1>
      </div>
  
      <div class="row g-3 mt-3">
        <div class="col-sm-8">
          <label for="firstName" class="form-label">Fornecedor</label>
          <input type="text" class="form-control" id="firstName" placeholder="SOLIDSTEEL" name="fornecedor" required>
          <div class="invalid-feedback">
            Valid first name is required.
          </div>
        </div>

        <div class="col-sm-4">
          <label for="lastName" class="form-label">CNPJ</label>
          <input type="number" class="form-control" id="lastName" placeholder="21.474.350/0001-60" value="" name="cnpj" required>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>

        <div class="col-md-3">
          <label for="zip" class="form-label">Inscrição Estadual</label>
          <input type="text" class="form-control" id="zip" placeholder="388.108.598.269" name="inscricaoEstadual" required>
          <div class="invalid-feedback">
            Zip code required.
          </div>
        </div>

        <div class="col-md-5">
          <label for="country" class="form-label">Observações</label>
          <input type="text" class="form-control" id="lastName" placeholder="Informações adicionais ?" name="observacoes" required>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>

        <div class="col-md-2">
          <label for="state" class="form-label">Isento ?</label>
          <input type="text" class="form-control" id="lastName" placeholder="SIM" value="" name="isento" required>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
          <div class="invalid-feedback">
            Please provide a valid state.
          </div>
        </div>
      </div>
      <hr class="my-4">
      <h2 class="mb-3 mt-5">Endereço</h2>
      <div class="row g-3 mt-4">
        <div class="col-sm-2">
          <label for="firstName" class="form-label">CEP</label>
          <input type="text" class="form-control"  placeholder="83507-382" name="cep" required>
          <div class="invalid-feedback">
            Valid first name is required.
          </div>
        </div>

        <div class="col-sm-4">
          <label for="lastName" class="form-label">Rua</label>
          <input type="text" class="form-control" placeholder="Avenida Sete de Setembro" name="rua" required>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>
        <div class="col-sm-4">
          <label for="country" class="form-label">Bairro</label>
          <input type="text" class="form-control" id="lastName" placeholder="Água verde" name="bairro" required>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>

        <div class="col-md-4">
          <label for="state" class="form-label">Cidade</label>
          <input type="text" class="form-control" id="lastName" placeholder="Curitiba" name="cidade" required>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
          <div class="invalid-feedback">
            Please provide a valid state.
          </div>
        </div>

        <div class="col-sm-2">
          <label for="country" class="form-label">Numero</label>
          <input type="text" class="form-control" id="lastName" placeholder="1357" value="" name="numero" required>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>
      </div>

      <hr class="my-4">

      <h2 class="mb-5 ">Contatos</h2>

      <div class="row gy-3 mt-1">
        <div class="col-md-4">
          <label for="cc-name" class="form-label">Contato 01</label>
          <input type="text" class="form-control" id="cc-name" placeholder="Sandro Luiz Padilha" name="contato1" required>
          <div class="invalid-feedback">

          </div>
        </div>
        <div class="col-md-4">
          <label for="cc-expiration" class="form-label">Telefone 01</label>
          <input type="text" class="form-control" id="cc-expiration" placeholder="041 99725 - 1035" name="telefone1" required>
          <div class="invalid-feedback">
            Expiration date required
          </div>
        </div>

        <div class="col-md-4">
          <label for="cc-cvv" class="form-label">Email 01</label>
          <input type="text" class="form-control" id="cc-cvv" placeholder="sandro@gmail.com" name="email1" required>
          <div class="invalid-feedback">
            Security code required
          </div>
        </div>
        <div class="col-md-6">
          <label for="cc-cvv" class="form-label">Cargo Setor 01</label>
          <input type="text" class="form-control" placeholder="Diretor Financeiro" name="cargoSetor1" required>
          <div class="invalid-feedback">
            Security code required
          </div>
        </div>
        <div class="row gy-3 mt-1">
          <div class="col-md-4">
            <label for="cc-name" class="form-label">Contato 02</label>
            <input type="text" class="form-control" id="cc-name" placeholder="Fernanda Cabral Bragança" name="contato2" required>
            <div class="invalid-feedback">

            </div>
          </div>
          <div class="col-md-4">
            <label for="cc-expiration" class="form-label">Telefone 02</label>
            <input type="text" class="form-control" id="cc-expiration" placeholder="047 99851 - 3595" name="telefone2" required>
            <div class="invalid-feedback">
              Expiration date required
            </div>
          </div>

          <div class="col-md-4">
            <label for="cc-cvv" class="form-label">Email 02</label>
            <input type="text" class="form-control" id="cc-cvv" placeholder="ferbragança@outlook.com" name="email2" required>
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>
          <div class="col-md-6">
            <label for="cc-cvv" class="form-label">Cargo Setor 02</label>
            <input type="text" class="form-control" placeholder="Gerente de Compras" name="cargoSetor2" required>
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>
          <hr class="col-12">
          <button class="w-100 btn btn-primary btn-lg" type="submit">Registrar Fornecedor</button>
        </div>
      </div>
    </form>
  </div>
</div>
</main>
</section>  
@endsection