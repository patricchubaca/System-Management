@extends('dashboard')

@section('content')
    <section class="section">
        <div class="container ">
            <main>
        </div>
        <div class="col-md-7 col-lg-12 mt-1 border">
            <form class="needs-validation  px-5 py-1 mt-1" method="POST" action="{{ route('storeCotacao') }}">
                @csrf
                <div class="alert border">
                    <h1 class="mx-2 my-2">Cotação</h1>
                </div>
                <div class="col-md-4">
                    <label for="firstName" class="form-label">Numero da Pasta :</label>
                    <input type="text" class="form-control" id="firstName" placeholder="4523" name="marca" required>
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>
                <div class="row g-3 mt-3">
                    <div class="col-sm-6">
                        <label for="firstName" class="form-label">Pregão Nro :</label>
                        <input type="text" class="form-control" id="firstName" placeholder="N° Pregão" name="marca"
                            required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="country" class="form-label">Modalidade</label>
                        <select class="form-select" id="country" required>
                            <option value="pregaoEletronico">Pregão Eletrônico</option>
                            <option value="adsao">Adesão</option>
                            <option value="compraDireta">Compra Direta</option>
                            <option value="concorrenciaDireta">Concorrencia Direta</option>
                            <option value="concorenciaPublic">Concorrencia Publica</option>
                            <option value="convite">Convite</option>
                            <option value="cotacaoEletronica">Cotação Eletrônica</option>
                            <option value="dispensaEletronica">Dispensa Eletrônica</option>
                            <option value="pregaoPresencial">Pregão Presencial</option>
                            <option value="tomadaPreco">Tomada de Preço</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div>
                    <div class="col-md-5">
                        <label for="country" class="form-label">Portais</label>
                        <select class="form-select" id="country" required>
                            <option value="">Portais...</option>
                            <option>United States</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="country" class="form-label">Tipo</label>
                        <select class="form-select" id="country" required>
                            <option value="aquisicao">Aquisição</option>
                            <option value="srpblobal">SRP Disputa Global</option>
                            <option value="srpunitaria">SRP Disputa Unitária</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="zip" class="form-label">UASG</label>
                        <input type="text" class="form-control" id="zip" placeholder="856321" name="ano"
                            required>
                        <div class="invalid-feedback">
                            Zip code required.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="zip" class="form-label">Cliente</label>
                        <input type="text" class="form-control" id="zip" placeholder="BRASTEMP" name="ano"
                            required>
                        <div class="invalid-feedback">
                            Zip code required.
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label for="firstName" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="firstName" placeholder="Pendencias do Veiculo"
                            name="divida" value="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Contato</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Pendencias do Veiculo"
                            name="financiamento" value="" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="cc-cvv" class="form-label">Data saida</label>
                        <input type="date" class="form-control" format="mm-dd-yyyy" name="dataSaida" required>
                        <div class="invalid-feedback">
                            Security code required
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="state" class="form-label">Hora</label>
                        <input type="time" class="form-control" id="lastName"
                            placeholder="Multas vinculadas ao Veiculo" value="" name="multa" required>
                    </div>
                    <div class="col-md-4">
                        <label for="zip" class="form-label">Empresa</label>
                        <input type="text" class="form-control" id="zip" placeholder="Empresa" name="ipva"
                            required>
                        <div class="invalid-feedback">
                            Zip code required.
                        </div>
                    </div>
                    <div class="col-md-1">
                        <label for="country" class="form-label">SRP ?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                            <label class="form-check-label" for="flexCheckIndeterminate">
                                SRP
                            </label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <label for="country" class="form-label">Atestado ?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                            <label class="form-check-label" for="flexCheckIndeterminate">
                                Atestado
                            </label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <label for="country" class="form-label">Instalação ?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                            <label class="form-check-label" for="flexCheckIndeterminate">
                                Instalação
                            </label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Observações :</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
                <div class="row mt-3">
                    <a type="button"   class="btn btn-danger mb-1">Avançar <i
                            class="fa-solid fa-arrow-right-long"></i></button>
                </div>

        </div>
        </div>
        </form>
        </div>
        </div>
        </main>
    </section>
@endsection
