
const $campoCep = document.querySelector('[name="cep"]');
const $campoBairro = document.querySelector('[name="bairro"]');
const $campoRua = document.querySelector('[name="rua"]');
const $campoCidade = document.querySelector('[name="cidade"]');

$campoCep.addEventListener("blur", infosDoEvento => {

  const cep = infosDoEvento.target.value;

  fetch(`https://viacep.com.br/ws/${cep}/json/`)

  .then(respostaDoServer => {

    return respostaDoServer.json();

  })
  .then(dadosDoCep => {
    $campoBairro.value = dadosDoCep.bairro;
    $campoCidade.value = dadosDoCep.localidade;
    $campoRua.value = dadosDoCep.logradouro;
  });
});


