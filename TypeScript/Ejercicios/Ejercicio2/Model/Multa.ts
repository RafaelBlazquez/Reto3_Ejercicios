class Multa{
    private fInicio: Date;
    private fFin: Date;
    private lector: Lector;
    

    constructor( fInicio : Date, fFin : Date, lector : Lector){
        this.fInicio = fInicio;
        this.fFin = fFin;
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

    public getLector(): Lector {
        return this.lector;
    }

    public setLector(value: Lector) {
        this.lector = value;
    }
}