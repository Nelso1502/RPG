// seleciona todos os heróis do banco
function getHerois() {
    let gerar = document.querySelector('#gerar')
    let opcoes = document.querySelector('#opcoes')
    gerar.addEventListener('click', async function () {
        let req = await fetch('../php/Herois/read.php');
        let resp = await req.json();
        opcoes.innerHTML = ""
        resp.forEach(function (valor) {
            if (gerar.value != "") {
                opcoes.innerHTML += "<li><div class= " + valor.id + ">" + valor.nome + "</div></li>"
            }
        })
    })
}
// seleciona um herói, não escolhidos ainda, do banco
function filtraHerois(op1, op2) {

    let escolher = document.querySelector(/* ativador de escolha */);
    escolher.addEventListener("click", async function slc_herois() {
        let req = await fetch('../php/Herois/read.php?id1 =' + op1 + '&id2' + op2);
        var op3 = await req.json();
        return op3;
    })


}
// sorteia dentre os heróis escolhidos, o final, retorna qual foi escolhido
function escolha(op1, op2, op3) {
    let conf = true;
    let rnd = Math.floor(Math.random() * 3);
    if (rnd == 0) {
        let req = await fetch('../php/Herois/update.php?id=' + op1+'&conf='+conf);
        let resp = await req.json();
        let requ = await fetch('../php/Jogador/update.php?idHeroi=' + op1);
        let respo = await requ.json();
        return op1;
    } else if (rnd == 1) {
        let req = await fetch('../php/Herois/update.php?id=' + op2+'&conf='+conf);
        let resp = await req.json();
        let requ = await fetch('../php/Jogador/update.php?idHeroi=' + op2);
        let respo = await requ.json();
        return op2;
        return op2;
    } else if (rnd == 2) {
        let req = await fetch('../php/Herois/update.php?id=' + op3+'&conf='+conf);
        let resp = await req.json();
        let requ = await fetch('../php/Jogador/update.php?idHeroi=' + op3);
        let respo = await requ.json();
        return op3;
        return op2;
    }


}
