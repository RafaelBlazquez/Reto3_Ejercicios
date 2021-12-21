class Copia{
    private id: number;
    private estadoCopia: string;
    private libro: Libro;
  
    constructor(id : number , estadoCopia : string, libro : Libro){
        this.id = id;
        this.estadoCopia = estadoCopia;
        this.libro = libro;
    }

    public getId(): number {
        return this.id;
    }

    public setId(value: number) {
        this.id = value;
    }

    public getEstadoCopia(): string {
        return this.estadoCopia;
    }

    public setEstadoCopia(value: string) {
        this.estadoCopia = value;
    }

    public getLibro(): Libro {
        return this.libro;
    }

    public setLibro(value: Libro) {
        this.libro = value;
    }

}