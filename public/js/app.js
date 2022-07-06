async function createCliente(id){

   const dados = await fetch('/api/cliente/'+id);
   const res = dados.json();

    if (res == true){
      location.reload(true);
    } 
} 

async function createCompanies(id){

   const dados = await fetch('/api/companies/'+id);
   const res = dados.json();

    if (res == true){
      location.reload(true);
    } 
} 

async function createProvider(id){

   const dados = await fetch('/api/provider/'+id);
   const res = dados.json();

    if (res == true){
      location.reload(true);
    } 
} 

async function createProducts(id){

   const dados = await fetch('/api/provider/'+id);
   const res = dados.json();

    if (res == true){
      location.reload(true);
    } 
} 

async function createProducts(id){

   const dados = await fetch('/api/portais/'+id);
   const res = dados.json();

    if (res == true){
      location.reload(true);
    } 
} 