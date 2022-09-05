//tratamineto de string (cadena de texto)
function escribe (cadena,id){
    document.getElementById(id).innerHTML= cadena;
}
let palabra_prohibida = 'mierda'; //la añadimos para hacer un if y que se remplace esta por una palabra para todos los publicos
//let cadena_de_texto = 'hola que tal estamos,he pisado mierda';
let cadena_de_texto = prompt('escribe tu mensaje'); // con esta var el usuario es el q escribe la frase.
/**usamos el método replace, donde tenemos que poner lo q queremos reemplazar y lo q queremos q se vea */
//cadena_de_texto = cadena_de_texto.replace('que tal', 'como');
/**
 * Usando el replace conseguimos q la palabra prohibida se sustituya p una para todos los públicos
 */
/**if(cadena_de_texto.replace(palabra_prohibida, '') != cadena_de_texto){
    cadena_de_texto = cadena_de_texto.replace(palabra_prohibida, 'heces');
    console.log(palabra_prohibida);
}*/
 //cadena_de_texto = cadena_de_texto.replace(palabra_prohibida, 'heces');
 /**
  * comprobar si hay mayúsculas o minúsculas, antes de reemplazar
  */
  if(cadena_de_texto.toLowerCase().replace(palabra_prohibida, '') != cadena_de_texto){
    console.log(palabra_prohibida);
    cadena_de_texto = cadena_de_texto.toLowerCase().replace(palabra_prohibida, 'heces');//hasta aquí pasa todo a minúsculas
    console.log(palabra_prohibida);
    cadena_de_texto = cadena_de_texto.toUpperCase();//y con esto tenemos el resultado en mayúsculas
    console.log(palabra_prohibida);
}
/**
 * declaramos una var para que descomponga un string(cadena)
 */
let texto_descompuesto = cadena_de_texto.split(' '); //convierte la frase en un array(bucle), es decir separa cada palabra y le asigna una posicion(length, una longitud)
console.log(texto_descompuesto);
console.log(texto_descompuesto[1]);
let txtVertical = texto_descompuesto[0]+'<br>'+texto_descompuesto[1]+'<br>'+texto_descompuesto[2]+'<br>';
txtVertical= txtVertical.toUpperCase();
console.log(texto_descompuesto);
console.log(txtVertical);
print(texto_descompuesto);
escribe (txtVertical, 'main');