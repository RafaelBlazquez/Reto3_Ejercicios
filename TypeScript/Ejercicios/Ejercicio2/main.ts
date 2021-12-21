/// <reference path="Model/Autor.ts"/>
/// <reference path="Model/Copia.ts"/>
/// <reference path="Model/Lector.ts"/>
/// <reference path="Model/Libro.ts"/>
/// <reference path="Model/Multa.ts"/>
/// <reference path="Model/Prestamo.ts"/>


$(document).ready(function(){
    generarDatos();
    

});

function generarDatos(){
    generarLectores();
    generarAutores();
    generarLibros();
    
}
function generarLectores(){
    var lectores : Lector[] = [];
    let lector1 : Lector = new Lector("1","Juan","666666666","Hogwarts");
    lectores.push(lector1);
    let lector2 : Lector = new Lector("2","Jaime","667667667","Narnia");
    lectores.push(lector2);
    let lector3 : Lector = new Lector("3","Jordi","668668668","Atlantida");
    lectores.push(lector3);
}

function generarAutores(){
    var autores : Autor[] = [];
    let autor1 : Autor = new Autor("J.K.Rowling","Britanica",new Date(31/7/1965));
    autores.push(autor1);
    let autor2 : Autor = new Autor("C.S.Lewis","Irlandés",new Date(29/11/1898));
    autores.push(autor2);
    let autor3 : Autor = new Autor("John Lenon","Epañol",new Date(26/2/1932));
    autores.push(autor3);
}
function generarLibros(){
    
}