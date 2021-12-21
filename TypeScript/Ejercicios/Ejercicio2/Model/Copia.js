var Copia = /** @class */ (function () {
    function Copia(id, estadoCopia, libro) {
        this.id = id;
        this.estadoCopia = estadoCopia;
        this.libro = libro;
    }
    Copia.prototype.getId = function () {
        return this.id;
    };
    Copia.prototype.setId = function (value) {
        this.id = value;
    };
    Copia.prototype.getEstadoCopia = function () {
        return this.estadoCopia;
    };
    Copia.prototype.setEstadoCopia = function (value) {
        this.estadoCopia = value;
    };
    Copia.prototype.getLibro = function () {
        return this.libro;
    };
    Copia.prototype.setLibro = function (value) {
        this.libro = value;
    };
    return Copia;
}());
