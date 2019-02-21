document.body.innerHTML += "<div onclick='contatowpp();' id='img-contato' style='display: none;'><img width='100%' src='imgs/whatsapp.png' /></div>";

function contatowpp() {
    console.log("TEste");
}

try {

    document.getElementById("img-contato").style.position = "fixed";
    document.getElementById("img-contato").style.width = "60px";
    document.getElementById("img-contato").style.height = "60px";
    document.getElementById("img-contato").style.bottom = "15px";
    document.getElementById("img-contato").style.right = "15px";
    document.getElementById("img-contato").style.margin = "0px";
    document.getElementById("img-contato").style.padding = "0px";
    document.getElementById("img-contato").style.cursor = "pointer";
    document.getElementById("img-contato").style.backgroundColor = "#23B180";
    document.getElementById("img-contato").style.borderRadius = "50%";
    document.getElementById("img-contato").style.boxShadow = "1px 1px 5px 0px rgba(0,0,0,0.75)";

    document.getElementById("img-contato").onmouseover = function () {
        document.getElementById("img-contato").style.width = "80px";
        document.getElementById("img-contato").style.height = "80px";
    };
    document.getElementById("img-contato").onmouseout = function () {
        document.getElementById("img-contato").style.width = "60px";
        document.getElementById("img-contato").style.height = "60px";
    };

    document.getElementById("img-contato").style.display = "block";

} catch (e) {
    throw new e;
}



