var Libro = /** @class */ (function () {
    function Libro(titulo, tipo, editorial, ano, autor) {
        this.titulo = titulo;
        this.tipo = tipo;
        this.editorial = editorial;
        this.ano = ano;
        this.autor = autor;
    }
    Libro.prototype.getTitulo = function () {
        return this.titulo;
    };
    Libro.prototype.setTitulo = function (value) {
        this.titulo = value;
    };
    Libro.prototype.getTipo = function () {
        return this.tipo;
    };
    Libro.prototype.setTipo = function (value) {
        this.tipo = value;
    };
    Libro.prototype.getEditorial = function () {
        return this.editorial;
    };
    Libro.prototype.setEditorial = function (value) {
        this.editorial = value;
    };
    Libro.prototype.getAno = function () {
        return this.ano;
    };
    Libro.prototype.setAno = function (value) {
        this.ano = value;
    };
    Libro.prototype.getAutor = function () {
        return this.autor;
    };
    Libro.prototype.setAutor = function (value) {
        this.autor = value;
    };
    Libro.prototype.getCopias = function () {
        return this.copias;
    };
    Libro.prototype.setCopias = function (value) {
        this.copias = value;
    };
    return Libro;
}());
