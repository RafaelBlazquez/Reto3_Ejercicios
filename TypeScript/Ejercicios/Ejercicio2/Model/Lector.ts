class Lector{
    private nSocio: string;
    private nombre: string;
    private telefono: string;
    private direccion: string;
    private copias: Copia[];
    private multa: Multa;
   
    constructor( nSocio : string, nombre : string, telefono : string, direccion : string){
        this.nSocio = nSocio;
        this.nombre = nombre;
        this.telefono = telefono;
        this.direccion = direccion;
    }

    public prestar(){
        
    }

    public getNSocio(): string {
        return this.nSocio;
    }

    public setNSocio(value: string) {
        this.nSocio = value;
    }

    public getNombre(): string {
        return this.nombre;
    }

    public setNombre(value: string) {
        this.nombre = value;
    }

    public getTelefono(): string {
        return this.telefono;
    }

    public setTelefono(value: string) {
        this.telefono = value;
    }

    public getDireccion(): string {
        return this.direccion;
    }
    
    public setDireccion(value: string) {
        this.direccion = value;
    }

    public getCopias(): Copia[] {
        return this.copias;
    }
    
    public setCopias(value: Copia[]) {
        this.copias = value;
    }

    public getMulta(): Multa {
        return this.multa;
    }

    public setMulta(value: Multa) {
        this.multa = value;
    }
}