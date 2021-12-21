var Multa = /** @class */ (function () {
    function Multa(fInicio, fFin, lector) {
        this.fInicio = fInicio;
        this.fFin = fFin;
        this.lector = lector;
    }
    Multa.prototype.getFInicio = function () {
        return this.fInicio;
    };
    Multa.prototype.setFInicio = function (value) {
        this.fInicio = value;
    };
    Multa.prototype.getFFin = function () {
        return this.fFin;
    };
    Multa.prototype.setFFin = function (value) {
        this.fFin = value;
    };
    Multa.prototype.getLector = function () {
        return this.lector;
    };
    Multa.prototype.setLector = function (value) {
        this.lector = value;
    };
    return Multa;
}());
