function generar(){
    let num = [];
    let premiados = [];
    for(let i= 1; i<50; i++){
        num.push(i);
    }
        for(let i=0; i<6; i++){
            let posicion = Math.floor(Math.random()*num.length);
            let premiado = num[posicion];
            premiados.push(premiado);
            num.splice(posicion,1);
        }
    premiados.sort(function(a,b){return a-b;});
    //document.write(premiados.toString()); De esta forma no nos sale el botón
    document.getElementById('main').innerHTML=premiados;
}

