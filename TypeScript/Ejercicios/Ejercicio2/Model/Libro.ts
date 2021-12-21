class Libro{
    private titulo: string;
    private tipo: string;
    private editorial: string;
    private ano: number;
    private autor: Autor;
    private copias: Copia[];

    constructor( titulo : string, tipo : string, editorial : string, ano : number, autor :Autor){
        this.titulo = titulo;
        this.tipo = tipo;
        this.editorial = editorial;
        this.ano = ano;
        this.autor = autor;
    }

    public getTitulo(): string {
        return this.titulo;
    }

    public setTitulo(value: string) {
        this.titulo = value;
    }

    public getTipo(): string {
        return this.tipo;
    }

    public setTipo(value: string) {
        this.tipo = value;
    }

    public getEditorial(): string {
        return this.editorial;
    }
    
    public setEditorial(value: string) {
        this.editorial = value;
    }

    public getAno(): number {
        return this.ano;
    }

    public setAno(value: number) {
        this.ano = value;
    }

    public getAutor(): Autor {
        return this.autor;
    }

    public setAutor(value: Autor) {
        this.autor = value;
    }

    public getCopias(): Copia[] {
        return this.copias;
    }

    public setCopias(value: Copia[]) {
        this.copias = value;
    }
}