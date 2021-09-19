function vali() {
    var nomi, passi;
    nomi= document.getElementById("nomi").value;
    passi=document.getElementById("passi").value;

if(nomi===""){
alert("Ingresar usuario");
return false;
}
else if(passi===""){
    alert("Ingresar Contraseña");
    return false ;  

}
else if(nomi.length>30){
    alert("Usuario no valido");
    return false  ; 
}
else if(passi.length>20){
    alert("Contraseña no valida");
    return false ;  
}
}