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
    var nombre;
    var edad;
    nombre = prompt('Ingresa tu nombre:', '');
    edad = prompt('Ingresa tu edad:', '');
    document.write('Hola ');
    document.write(nombre);
    document.write(', así que tienes ');
    document.write(edad);
    document.write(' años');
}

function ejemplo4(){
    var valor1;
    var valor2;
    valor1 = prompt('Introducir primer número:', '');
    valor2 = prompt('Introducir segundo número', '');
    var suma = parseInt(valor1)+parseInt(valor2);
    var producto = parseInt(valor1)*parseInt(valor2);
    document.write('La suma es ');
    document.write(suma);
    document.write('<br>');
    document.write('El producto es ');
    document.write(producto);
}

function ejemplo5(){
    var nombre;
    var nota;
    nombre = prompt('Ingresa tu nombre:', '');
    nota = prompt('Ingresa tu nota:', '');
    if (nota>5) {
        document.write(nombre+' esta aprobado con un '+nota);
    }
}

function ejemplo6(){
    var num1,num2;
    num1 = prompt('Ingresa el primer número:', '');
    num2 = prompt('Ingresa el segundo número:', '');
    num1 = parseInt(num1);
    num2 = parseInt(num2);
    if (num1>num2) {
        document.write('El número mayor es '+num1);
    }
    else {
        document.write('El número mayor es '+num2);
    }
}

function ejemplo7(){
    var nota1,nota2,nota3;

    nota1 = prompt('Ingresa 1ra. nota:', '');
    nota2 = prompt('Ingresa 2da. nota:', '');
    nota3 = prompt('Ingresa 3ra. nota:', '');

    //Convertimos los 3 string en enteros
    nota1 = parseInt(nota1);
    nota2 = parseInt(nota2);
    nota3 = parseInt(nota3);

    var pro;
    pro = (nota1+nota2+nota3)/3;

    if (pro>=7) {
        document.write('Aprobado');
    }
    else {
        if (pro>=4) {
        document.write('Regular');
        }
        else {
        document.write('Reprobado');
        }
    }
}

function ejemplo8(){
    var valor;
    valor = prompt('Ingresar un valor comprendido entre 1 y 5:', '');
    //Convertimos a entero
    valor = parseInt(valor);
    switch (valor) {
        case 1: document.write('Uno');
        break;

        case 2: document.write('Dos');
        break;

        case 3: document.write('Tres');
        break;

        case 4: document.write('Cuatro');
        break;

        case 5: document.write('Cinco');
        break;

        default:document.write('Debe ingresar un valor comprendido entre 1 y 5.');
    }
}

function ejemplo9(){
    var col;
    col = prompt('Ingresa el color con que quierar pintar el fondo de la ventana (rojo, verde, azul)' , '');
    switch (col) {
        case 'rojo': document.bgColor='#ff0000';
        break;

        case 'verde': document.bgColor='#00ff00';
        break;

        case 'azul': document.bgColor='#0000ff';
        break;
    }
}