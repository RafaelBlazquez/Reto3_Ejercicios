
export default class TextoSaludo extends HTMLElement {
    constructor() {
        super();
    }
    connectedCallback() {
        this.innerHTML = '<div> <p onclick="saludar()">Hola Mundo</p> </div>';
    }
}

function saludar(){
    alert("Hola Mundo");
}
customElements.define('texto-saludo', TextoSaludo );
