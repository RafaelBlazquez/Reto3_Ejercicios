

class TextoSaludo extends HTMLElement {
    constructor() {
        super();
    }
    connectedCallback() {
        this.innerHTML = '<div> <p>Hola Mundo</p> </div>';
        this.addEventListener('click',this.saludar)
    }
    saludar(){
        alert("Hola Mundo");
    }
}


customElements.define('texto-saludo', TextoSaludo );
