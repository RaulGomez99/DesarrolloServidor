window.onload = function(){
    document.querySelectorAll(".compra").forEach(boton=>boton.addEventListener("click",ajaxAdd))
    document.getElementById("carrito").addEventListener("click", irCarrito);
}

function ajaxAdd(){
    const {id} = this;
    data={id:id,metodo:"addProductoSesion"};
    fetch("controlador.php",{
        method: 'POST', 
        body: JSON.stringify(data), 
        headers:{
            'Content-Type': 'application/json'
        }
    }).then(()=>{});
}