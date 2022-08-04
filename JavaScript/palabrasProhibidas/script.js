//tratamineto de string (cadena de texto)

let palabra_prohibida = ['mierda', 'joder', 'colorines']; //la añadimos para hacer un if y que se remplace esta por una palabra para todos los publicos
//let cadena_de_texto = 'hola que tal estamos,he pisado mierda';
let cadena_de_texto = prompt('escribe tu mensaje'); // con esta var el usuario es el q escribe la frase.
let minuscula = cadena_de_texto.toLowerCase();//pasa todo el texto a minuscula
console.log(minuscula);
/**
 * Usando el replace conseguimos q la palabra prohibida se sustituya p una para todos los públicos
 */
//cadena_de_texto = cadena_de_texto.replace(palabra_prohibida, 'heces');
//console.log(cadena_de_texto);
/**
 * comprobar si hay mayúsculas o minúsculas, antes de reemplazar
 */
function escribe(cadena, id) {
    document.getElementById(id).innerHTML = cadena;
    console.log(cadena);
}

for (let i = 0; i < palabra_prohibida.length; i++) {

    let tabu = palabra_prohibida[i];
    console.log(tabu);

    if (minuscula.replace(tabu, '') != minuscula) {
        cadena_de_texto = cadena_de_texto.replace(tabu, 'mecachis');
        console.log(cadena_de_texto.replace(tabu, 'mecachis'));
        //cadena_de_texto = cadena_de_texto.toUpperCase();//y con esto tenemos el resultado en mayúsculas

    }
}

// console.log(cadena_de_texto);
//document.getElementById(id).innerHTML= cadena;
//document.write(cadena_de_texto);


/**
 * declaramos una var para que descomponga un string(cadena)
 */
//let texto_descompuesto = cadena_de_texto.split(' '); //convierte la frase en un array(bucle), es decir separa cada palabra y le asigna una posicion(length, una longitud)
//console.log(texto_descompuesto);
//console.log(texto_descompuesto[1]);
/**let txtVertical = texto_descompuesto[0]+'<br>'+texto_descompuesto[1]+'<br>'+texto_descompuesto[2]+'<br>';
txtVertical= txtVertical.toUpperCase();*/
//console.log(texto_descompuesto);
//console.log(txtVertical);

//print(texto_descompuesto);
escribe(cadena_de_texto, 'main');
/**
 * otra forma de hacer un for
 * es como un foreach
 * dentro escribes el nombre de la variable 
 * y que lo busque en el array 
 * con el siguiente código si funciona el bucle 
 * let txt = prompt("escribe texto");

for(const malas of palabra_prohibida){
    if(txt.replace(malas, '')){
        txt= txt.replaceAll(malas, 'jamones')
        console.log(txt);
    }
    document.getElementById('main').innerHTML = txt;
}
 */
