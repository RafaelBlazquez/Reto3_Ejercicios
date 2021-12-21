var Lector = /** @class */ (function () {
    function Lector(nSocio, nombre, telefono, direccion) {
        this.nSocio = nSocio;
        this.nombre = nombre;
        this.telefono = telefono;
        this.direccion = direccion;
    }
    Lector.prototype.prestar = function () {
    };
    Lector.prototype.getNSocio = function () {
        return this.nSocio;
    };
    Lector.prototype.setNSocio = function (value) {
        this.nSocio = value;
    };
    Lector.prototype.getNombre = function () {
        return this.nombre;
    };
    Lector.prototype.setNombre = function (value) {
        this.nombre = value;
    };
    Lector.prototype.getTelefono = function () {
        return this.telefono;
    };
    Lector.prototype.setTelefono = function (value) {
        this.telefono = value;
    };
    Lector.prototype.getDireccion = function () {
        return this.direccion;
    };
    Lector.prototype.setDireccion = function (value) {
        this.direccion = value;
    };
    Lector.prototype.getCopias = function () {
        return this.copias;
    };
    Lector.prototype.setCopias = function (value) {
        this.copias = value;
    };
    Lector.prototype.getMulta = function () {
        return this.multa;
    };
    Lector.prototype.setMulta = function (value) {
        this.multa = value;
    };
    return Lector;
}());
