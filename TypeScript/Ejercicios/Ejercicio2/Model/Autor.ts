class Autor{
    private nombre: string;
    private nacionalidad: string;
    private fechaNacimiento: Date;
    private libros: Libro[];
    
    constructor( nombre : string, nacionalidad : string, fechaNacimiento : Date){
        this.nombre = nombre;
        this.nacionalidad = nacionalidad;
        this.fechaNacimiento = fechaNacimiento;
    }
    
    public getNombre(): string {
        return this.nombre;
    }

    public setNombre(value: string) {
        this.nombre = value;
    }

    public getNacionalidad(): string {
        return this.nacionalidad;
    }

    public setNacionalidad(value: string) {
        this.nacionalidad = value;
    }

    public getFechaNacimiento(): Date {
        return this.fechaNacimiento;
    }

    public setFechaNacimiento(value: Date) {
        this.fechaNacimiento = value;
    }

    public getLibros(): Libro[] {
        return this.libros;
    }

    public setLibros(value: Libro[]) {
        this.libros = value;
    }
}