/*function escribe(texto){
    document.getElementById('main').innerHTML = texto;
    console.log(texto);
    escribe(texto + 'p');
}
/*
comentado para q no se dispare con onclick*/
//escribe('Hola');
//escribe('¿como estamos?');
/*let i = 0;
function escribe(texto){
    document.getElementById('main').innerHTML = texto;
    i++;
    if(i>100){
         return;
    }
    setTimeout(function(){
        escribe(texto + ' ' + i);
        console.log(texto);
    },100) 
}
/**Con esta función veremos:
 * un string donde aparece lo q escribe el onclick y el bucle de la función, ya que veremos el texto más el espacio más el valor de i,
 * ya que texto cambia de valor p cada aumento de i
 * por lo tanto la siguente vez texto tiene el valor anterior más un nuevo espacio más un nuevo i
 *  Texto tendrá un nuevo valor hasta q i llegue a 100, pero aparecerán todos los valores de i ya que el texto se modifica y aumenta en cada vuelta
 * Pongo el console.log para ver que ocurre en cada paso del bucle y muestra lo q se ve en la pantalla para q lo entendamos.*/
/**
 * Realizaremos una nueva función para realizar operariones
 */
let a;
let b;
function suma(a,b){
    return a+b;
}