const tbody = document.querySelector("tbody");

const listarUsuarios = async () => {
    const dados = await fetch("../controllers/listDados.php");
    const resposta = await dados.text();
    tbody.innerHTML = resposta;
}

listarUsuarios();