function getDatos(){
    var nombre = prompt('Nombre: ', '');
    var edad = prompt('Edad: ', 0);;

    var div1 = document.getElementById('nombre');
    div1.innerHTML = '<h3>Nombre: ' + nombre + '</h3>';

    var div2 = document.getElementById('edad');
    div2.innerHTML = '<h3>Edad: ' + edad + '</h3>';
}

function ejemplo1(){
    document.write('<h3>Hola Mundo</h3>');
}

function ejemplo2(){
    var nombre = 'Nava';
    var edad = 19;
    var altura = 1.70;
    var casado = false;

    document.write(nombre);
    document.write('<br/>')
    document.write(edad);
    document.write('<br/>')
    document.write(altura);
    document.write('<br/>')
    document.write(casado);
}

function ejemplo3(){
    
}