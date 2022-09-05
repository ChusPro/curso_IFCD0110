//Realizar una entrada de datos
//Darle salida p pantalla con un alert()

//Declarar variable
let edad;

//Damos valor a la variable
//El valor es un return de una función.
edad = prompt('introduce tu edad');

//Condicional para que sólo admita números
//comprobamos que sea un número
if(Number(edad) == edad ){
    //Sabiendo que es un número, comprobamos el rango
    if(edad<18){
        alert('Tienes que ser mayor de 18 años para poder acceder');
        window.location.href = "https://elpais.com";
    }  
    //Con esto nos muestra el texto y nuestra la variable en la pantalla
    document.getElementById('main').innerHTML = `<h2>¡¡¡Enhorabuena!!! tu edad es </h2><h1>${edad}</h1>`;

}else{
    //Aviso de q no es un número 
    alert('Debes introducir un número');
    //Pedimos una recarga para poder hacerlo bien
    window.location.reload();
};