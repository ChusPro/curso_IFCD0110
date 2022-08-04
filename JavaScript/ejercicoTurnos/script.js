let i=0;
function sumar(){
     i++;
     console.log(i);
     if(i>99){
        i = 0;
        console.log(i);
     }; 
     if(i<10){
        document.getElementById("num").innerHTML= "0" + i;
    }else{
        document.getElementById("num").innerHTML= i;
    }      
}
function restar(){
    i--;
    console.log(i);
    if(i<1){
        i = 99;
       console.log(i);
    };if(i<10){
        document.getElementById("num").innerHTML= "0" + i;
    }else{
        document.getElementById("num").innerHTML= i;
    }
}