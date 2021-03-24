var numero="";
var numero1=document.getElementById('numero1');
var numero2=document.getElementById('numero2');
var imagemFundo=document.getElementById("candidatoID");
imagemFundo.style.backgroundImage="URL('brasao.png')";

function mudaFoto(numero){      
    imagemFundo.style.backgroundImage="URL('f"+numero+".jpg')";
}

function numeroClicado(numeroClicado){   
    numero+=""+numeroClicado+"";
    if(numero.length<2){
        numero1.innerHTML=numero;       
    }else{
        numero2.innerHTML=numeroClicado;
    }
    // alert(numero);
    mudaFoto(numero);
}

function branco(){
    numero1.innerHTML="0";
    numero2.innerHTML="0";
}

function corrige(){
    numero="";
    numero1.innerHTML="-";
    numero2.innerHTML="-";
    imagemFundo.style.backgroundImage="URL('brasao.png')"
}

function confirma(){
    n=document.getElementById('n').value=numero;
    // alert(n);
}