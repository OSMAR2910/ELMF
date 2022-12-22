const abrirmodal = document.querySelector("#button_ag_abrir");
const cerrarmodal = document.querySelector("#button_ag_cerrar");
const modal = document.querySelector("#modal1");

abrirmodal.addEventListener("click",()=>{
    modal.showModal();
}
)
cerrarmodal.addEventListener("click",()=>{
    modal.close();
}
)