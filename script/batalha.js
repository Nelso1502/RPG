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
// seleciona dois heróis, não escolhidos ainda, do banco
function filtraHerois(op1, op2, op3) {

    let escolher = document.querySelector(/* ativador de escolha */);
    escolher.addEventListener("click", async function slc_herois() {
        let req = await fetch('../php/Herois/read.php?id1 ='+op1+'&id2'+op2+'&id3'+op3);
        let res = await req.json();
    })


}
// sorteia dentre os heróis escolhidos, o final
function escolha(op1, op2, op3) {

}
