const ValidarNotas = () =>
{
    /*let matem = document.getElementById('Matem');
    let leng = document.getElementById('Leng');
    let ing = document.getElementById('Ing');
    let Notas = new Array(document.getElementById('Matem'), document.getElementById('Leng'),document.getElementById('Ing'));*/
    let Notas = [document.getElementById('Matem'), document.getElementById('Leng'),document.getElementById('Ing')];
    let esvalido = true;
    for (let i = 0; i < Notas.length; i++) {
        if(isNaN(Notas[i]) || Notas[i] < 1 || Notas[i] > 10 || !Number.isInteger(Notas[i]) || Notas[i] == '')
        {
            esvalido = false;
        } 
    }
    if (esvalido == false) {
        CrearTexto();
        return esvalido;  
    } else    
    return esvalido;
};




const CrearTexto = () =>
{
    let para = document.createElement("p").classList.add('nombremateria');
    let node = document.createTextNode("Alerta: no se mandó el formulario. Revise si anotó todas las notas correctamente");
    para.appendChild(node);
    let element = document.getElementById("divAlerta");
    element.appendChild(para);
};