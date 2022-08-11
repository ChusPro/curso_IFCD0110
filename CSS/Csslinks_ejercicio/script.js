async function inserta(){
    let header = await fetch('header.html.html');
    let elhtml = await header.text();
    document.getElementById('header').innerHTML = elhtml;
    let footer = await fetch('footer.html');
    let elfooter = await footer.text();
    document.getElementById('footer').innerHTML = elfooter;
}
window.onload = function(){
    inserta();
}