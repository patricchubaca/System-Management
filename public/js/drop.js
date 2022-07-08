async function deleteUser(id){

  const dados = await fetch('/api/car/'+id,{
    method:'DELETE'
  });
  
  const res = dados.json();
  
  window.location.href = "/dashboard";
  
  }	