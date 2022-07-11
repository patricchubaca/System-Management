@extends('dashboard')

@section('content')
    <section class="section">

        <div class="container ">
            <main>
        </div>
        <div class="col-md-7 col-lg-12 mt-5 border">
            <form class="needs-validation  px-5 py-1 mt-1" method="POST" action="">
                @csrf
                <div class="alert border " role="alert">
                    <h1 class="">Canais de Compras</h1>
                </div>
                <div class="row g-3 mt-5">
                    <div class="col-sm-6">
                        <label for="firstName" class="form-label">Login</label>
                        <input type="text" class="form-control" id="firstName" placeholder="Mercedes-benz Classe A"
                            name="marca" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Senha</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Mercedes-Benz" value=""
                            name="modelo" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                    <div class="col-md-5">
                        <label for="country" class="form-label">Empresa Cadastradas</label>
                        <input type="text" class="form-control" id="lastName" placeholder="BRZ7S19" value=""
                            name="placa" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="state" class="form-label">Cor</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Branco" value=""
                            name="cor" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="zip" class="form-label">Ano</label>
                        <input type="text" class="form-control" id="zip" placeholder="2018" name="ano"
                            required>
                        <div class="invalid-feedback">
                            Zip code required.
                        </div>
                    </div>
                    <hr class="col-12">
                    <button class="w-100 btn btn-primary btn-lg" type="submit">Registrar Veiculo</button>
                </div>
        </div>
        </form>
        </div>
        </div>
        </main>
    </section>
@endsection
