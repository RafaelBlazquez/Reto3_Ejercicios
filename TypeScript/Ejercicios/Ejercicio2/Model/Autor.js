var Autor = /** @class */ (function () {
    function Autor(nombre, nacionalidad, fechaNacimiento) {
        this.nombre = nombre;
        this.nacionalidad = nacionalidad;
        this.fechaNacimiento = fechaNacimiento;
    }
    Autor.prototype.getNombre = function () {
        return this.nombre;
    };
    Autor.prototype.setNombre = function (value) {
        this.nombre = value;
    };
    Autor.prototype.getNacionalidad = function () {
        return this.nacionalidad;
    };
    Autor.prototype.setNacionalidad = function (value) {
        this.nacionalidad = value;
    };
    Autor.prototype.getFechaNacimiento = function () {
        return this.fechaNacimiento;
    };
    Autor.prototype.setFechaNacimiento = function (value) {
        this.fechaNacimiento = value;
    };
    Autor.prototype.getLibros = function () {
        return this.libros;
    };
    Autor.prototype.setLibros = function (value) {
        this.libros = value;
    };
    return Autor;
}());
