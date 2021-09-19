
function valr() {
    var nom,nick,cod,cel;
    nom= document.getElementById("nom").value;
    nick=document.getElementById("nick").value;
    cod=document.getElementById("cod").value;
    cel=document.getElementById("cel").value;
    

    if(nom==="" ||nick==="" ||cod==="" ||cel===""){
        alert("todos los campos son obligatorios");
        return false;
        }
        else if(cod.length>14){
            alert("El codigo ingresado es demaciado largo");
            return false  ; 
        }
        
        else if(nom.length>40){
            alert("Usuario demaciado largo");
            return false  ; 
        }
        else if(cel.length>15){
            alert("celular invalido, ej valido:+5491112345678");
            return false  ; 
        }

         else if(cel.length<13){
            alert("celular invalido, ej valido:+5491112345678");
            return false  ; 
        }
       
}