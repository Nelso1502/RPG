
let escolher = document.querySelector(/* ativador de escolha */);
escolher.addEventListener("click", async function slc_herois(){
    let opcao1 = localStorage.getItem["opcao1"];
    let opcao2 = localStorage.getItem["opcao2"];
    let opcao3 = localStorage.getItem["opcao3"];
    let req = await fetch('../php/Herois/read.php?opcao1 = '+ opcao1 + '&opcao2=' + opcao2 + '&opcao3=' + opcao3);
    let res = await req.json();
    


})

function escolha() {

}