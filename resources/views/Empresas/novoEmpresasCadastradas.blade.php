@extends('dashboard')

@section('content')
    <section class="section">

        <div class="container ">
            <main>
        </div>
        <div class="col-md-7 col-lg-12 mt-1 border">
            <form class="needs-validation  px-5 py-1 mt-1" method="POST" action="{{ route('storeEmpresa') }}">
                @csrf
                <div class="mb-5">
                    <div class="alert border" role="alert">
                        <h1 class="mt-3">Dados Empresa</h1>
                    </div>
                </div>

                <div class="row g-3 mt-3">
                    <div class="col-sm-6">
                        <label for="firstName" class="form-label">Razao Social</label>
                        <input type="text" class="form-control" id="firstName" placeholder="SISCOTA COTAÇÕES LTDA"
                            name="razaoSocial" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Inscrição Estadual</label>
                        <input type="text" class="form-control" id="lastName" placeholder="S I LTDA" value=""
                            name="inscricaoEstadual" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>

                    <div class="col-md-5">
                        <label for="country" class="form-label">CNPJ</label>
                        <input type="text" class="form-control" id="lastName" placeholder="00.438.402/0001-72"
                            value="" name="cnpj" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="state" class="form-label">E-mail</label>
                        <input type="text" class="form-control" id="lastName" placeholder="si@outlook.com"
                            value="" name="email" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label for="zip" class="form-label">Contato</label>
                        <input type="text" class="form-control" id="zip" placeholder="(41)9 9725-3521"
                            name="telefone" required>
                        <div class="invalid-feedback">
                            Zip code required.
                        </div>
                    </div>

                    <hr class="my-4">

                    <h2 class="mb-3 mt-5">Endereço</h2>
                    <div class="row g-3 mt-4">
                        <div class="col-sm-2">
                            <label for="firstName" class="form-label">CEP</label>
                            <input type="text" class="form-control" placeholder="83507-382" name="cep" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label for="lastName" class="form-label">Rua</label>
                            <input type="text" class="form-control" placeholder="Avenida Sete de Setembro" name="rua"
                                value="" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label for="country" class="form-label">Bairro</label>
                            <input type="text" class="form-control" id="lastName" placeholder="Água verde"
                                name="bairro" value="" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="state" class="form-label">Cidade</label>
                            <input type="text" class="form-control" id="lastName" placeholder="Curitiba" value=""
                                name="cidade" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <label for="country" class="form-label">Numero</label>
                            <input type="text" class="form-control" id="lastName" placeholder="1357" value=""
                                name="numero" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                    </div>

                    <hr class="col-12">
                    <button class="w-100 btn btn-primary btn-lg" type="submit">Registrar Empresa</button>
                </div>
        </div>
        </form>
        </div>
        </div>
        </main>
    </section>
@endsection
