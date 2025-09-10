
function adicionarLinhaMedia() {
    const tabela = document.getElementById("tabelaNotas");
    if (document.getElementById("linhaMedia")) return; // evita duplicar
    const numNotas = tabela.rows[1].cells.length - 1;
    const novaLinha = tabela.insertRow(-1);
    novaLinha.id = "linhaMedia";
    novaLinha.classList.add("media");
    let celulaTitulo = novaLinha.insertCell(0);
    celulaTitulo.textContent = "Média da Turma";

    for (let j = 1; j <= numNotas; j++) {
    let soma = 0, cont = 0;
    for (let i = 2; i < tabela.rows.length - 1; i++) {
        let valor = parseFloat(tabela.rows[i].cells[j].innerText.replace(",", "."));
        if (!isNaN(valor)) {
        soma += valor;
        cont++;
        }
    }
    let media = cont > 0 ? (soma / cont).toFixed(2) : "";
    let cel = novaLinha.insertCell(j);
    cel.textContent = media;
    }
}

function adicionarColunaMedia() {
    const tabela = document.getElementById("tabelaNotas");
    if (tabela.rows[0].cells[tabela.rows[0].cells.length - 1].innerText === "Média") return;

    // adicionar cabeçalho
    tabela.rows[0].insertCell(-1).outerHTML = '<th rowspan="2">Média</th>';

    // adicionar células de média
    for (let i = 2; i < tabela.rows.length; i++) {
    let soma = 0, cont = 0;
    for (let j = 1; j < tabela.rows[i].cells.length; j++) {
        let valor = parseFloat(tabela.rows[i].cells[j].innerText.replace(",", "."));
        if (!isNaN(valor)) {
        soma += valor;
        cont++;
        }
    }
    let media = cont > 0 ? (soma / cont).toFixed(2) : "";
    let cel = tabela.rows[i].insertCell(-1);
    cel.classList.add("media");
    cel.textContent = media;
    }
}