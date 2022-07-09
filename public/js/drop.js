async function deleteCotacao(id) {

    const dados = await fetch('/api/cotacao/' + id, {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method: 'DELETE'
    });

    const res = dados.json();

    window.location.href = "/dashboard";

}

async function deleteClientes(id) {

    const dados = await fetch('/api/cliente/' + id, {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method: 'DELETE'
    });

    window.location.href = "/clientes";

}


async function deleteProdutos(id) {

    const dados = await fetch('/api/produtos/' + id, {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method: 'DELETE'
    });

    window.location.href = "/clientes";
}


async function deleteFornecedores(id) {

    const dados = await fetch('/api/fornecedores/' + id, {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method: 'DELETE'
    });

    window.location.href = "/clientes";
}

async function deleteMarcas(id) {

    const dados = await fetch('/api/marcas/' + id, {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method: 'DELETE'
    });

    window.location.href = "/clientes";
}

async function deletePortais(id) {

    const dados = await fetch('/api/portais/' + id, {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method: 'DELETE'
    });

    window.location.href = "/clientes";
}

async function deleteEmpresas(id) {

    const dados = await fetch('/api/empresas/' + id, {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method: 'DELETE'
    });

    window.location.href = "/clientes";