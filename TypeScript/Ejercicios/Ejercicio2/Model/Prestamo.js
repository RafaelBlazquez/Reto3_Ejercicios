var Prestamo = /** @class */ (function () {
    function Prestamo(fInicio, fFin, copia, lector) {
        this.fInicio = fInicio;
        this.fFin = fFin;
        this.copia = copia;
        this.lector = lector;
    }
    Prestamo.prototype.getFInicio = function () {
        return this.fInicio;
    };
    Prestamo.prototype.setFInicio = function (value) {
        this.fInicio = value;
    };
    Prestamo.prototype.getFFin = function () {
        return this.fFin;
    };
    Prestamo.prototype.setFFin = function (value) {
        this.fFin = value;
    };
    Prestamo.prototype.getCopia = function () {
        return this.copia;
    };
    Prestamo.prototype.setCopia = function (value) {
        this.copia = value;
    };
    Prestamo.prototype.getLector = function () {
        return this.lector;
    };
    Prestamo.prototype.setLector = function (value) {
        this.lector = value;
    };
    return Prestamo;
}());
