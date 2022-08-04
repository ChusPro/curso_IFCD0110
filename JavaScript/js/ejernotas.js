let notas;
notas = prompt('Escribe tu nota aquí');

/*if(Number(notas) == notas){
    if(notas<5){
        document.getElementById('main').innerHTML ='Lo siento tu nota es un Insuficiente';
        window.location.reload();
    }
    if(notas>=5 && notas <= 6){
        document.getElementById('main').innerHTML ='Tu nota es un Bien';
        window.location.reload();
    }
    if(notas > 6 && notas <= 8){
        document.getElementById('main').innerHTML ='Tu nota es un Notable';
        window.location.reload();
    }
    if(notas > 8 && notas >=10){
        document.getElementById('main').innerHTML ='Tu nota es un Sobresaliente';
        window.location.reload();
    }
}else{
    //Aviso de q no es un número 
    alert('Debes introducir un número');
    //Pedimos una recarga para poder hacerlo bien
    //window.location.reload();
};*/
/*le ponemos "" en los nº de los casos para que lo lea como un nº
tb lo podemos poner Number(notas) y de esta forma considera los string como un nº*/
switch(notas){
    case '0':
    case '1':
        notas = 'Muy deficiente';
        break;
    case '2':
    case '3':
    case '4':
        notas = 'Insuficiente';
        break;
    case '5':
        notas = 'Suficiente';
        break;
    case '6':
        notas = 'Bien';
        break;
    case '7':
    case '8':
        notas = 'Notable';
        break;
    case '9':
    case '10':
        notas = 'Sobresaliente';
        break;
    default:
        notas = '<span style="color:red">No estás escribindo una nota que entre en los parámetros</span>56'
}
document.getElementById('main').innerHTML= notas;