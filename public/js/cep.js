
const $campoCep = document.querySelector('[name="cep"]');
const $campoBairro = document.querySelector('[name="bairro"]');
const $campoRua = document.querySelector('[name="rua"]');
const $campoCidade = document.querySelector('[name="cidade"]');

$campoCep.addEventListener("blur", infosDoEvento => {

  const cep = infosDoEvento.target.value;

  fetch(`https://viacep.com.br/ws/${cep}/json/`)

  .then((respostaDoServer) =>{

    return respostaDoServer.json()

  })
  .then((dadosDoCep) => {

    $campoBairro.value = dadosDoCep.bairro;
    $campoCidade.value = dadosDoCep.localidade;
    $campoRua.value = dadosDoCep.logradouro;

  });
});

const $campoFCep = document.querySelector('[name="cepFornecedor"]');
const $campoFBairro = document.querySelector('[name="bairroFornecedor"]');
const $campoFRua = document.querySelector('[name="ruaFornecedor"]');
const $campoFCidade = document.querySelector('[name="cidadeFornecedor"]');

$campoFCep.addEventListener("blur", infosDoEventoF => {

  const cepF = infosDoEventoF.target.value;

  fetch(`https://viacep.com.br/ws/${cepF}/json/`)

  .then((respostaDoServerF) =>{

    return respostaDoServerF.json()

  })
  .then((dadosDoCepF) => {

    $campoFBairro.value = dadosDoCepF.bairro;
    $campoFCidade.value = dadosDoCepF.localidade;
    $campoFRua.value = dadosDoCepF.logradouro;

  });
});
