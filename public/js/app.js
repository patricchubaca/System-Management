async function deletarCliente(id){

   const dados = await fetch('/api/cliente/'+id);
   const res = dados.json();

    if (res == true){
      location.reload(true);
    } 
} 