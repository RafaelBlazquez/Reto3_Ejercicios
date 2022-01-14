class Contador extends HTMLElement {
    constructor() {
        super();
    }
    connectedCallback() {
        this.innerHTML = '<div><button id="suma">+</button><input id="valor" value="0" type="text"><button id="resta">-</button></div>';
        document.getElementById("suma").addEventListener('click',this.sumar);
        document.getElementById("resta").addEventListener('click',this.restar);
    }
    sumar(){
        document.getElementById("valor").value++;
    }
    restar(){
        document.getElementById("valor").value--;
    }
}
window.customElements.define('contador-numeros', Contador );
