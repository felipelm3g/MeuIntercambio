document.body.innerHTML += "<img id='img-contato' width='80' style='display: none;' height='80' src='imgs/whatsapp.png' />";

try {
    
    document.getElementById("img-contato").style.display = "none";
    document.getElementById("img-contato").style.position = "fixed";
    document.getElementById("img-contato").style.bottom = "5px";
    document.getElementById("img-contato").style.right = "5px";
    document.getElementById("img-contato").style.margin = "0px";
    document.getElementById("img-contato").style.padding = "0px";
    document.getElementById("img-contato").style.cursor = "pointer";
    document.getElementById("img-contato").style.boxShadow = "1px 1px 5px 0px rgba(0,0,0,0.75)";
        
    document.getElementById("img-contato").style.display = "block";
    
} catch (e) {
    throw new e;
}




