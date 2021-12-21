class Prestamo{
    private fInicio: Date;
    private fFin: Date;
    private copia: Copia;
    private lector: Lector;
    
    constructor( fInicio : Date, fFin : Date, copia : Copia, lector : Lector){
        this.fInicio = fInicio;
        this.fFin = fFin;
        this.copia = copia;
        this.lector = lector;
    }

    public getFInicio(): Date {
        return this.fInicio;
    }

    public setFInicio(value: Date) {
        this.fInicio = value;
    }

    public getFFin(): Date {
        return this.fFin;
    }

    public setFFin(value: Date) {
        this.fFin = value;
    }

    public getCopia(): Copia {
        return this.copia;
    }
    
    public setCopia(value: Copia) {
        this.copia = value;
    }

    public getLector(): Lector {
        return this.lector;
    }

    public setLector(value: Lector) {
        this.lector = value;
    }
}