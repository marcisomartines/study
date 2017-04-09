/**
 * Created by marciso on 09/04/2017.
 */
function Pen(){
    this.color;

    this.getColor = function (){
        return this.color;
    };

    this.setColor = function (_color) {
        this.color = _color;
    };
}

// var pen = new Pen();
//
// pen.setColor("black");
//
// console.log(pen);

Pen.fabricante ='';

Pen.setFabricante = function (_fabricante) {
    this.fabricante = _fabricante;
};

Pen.getFabricante = function () {
    return this.fabricante;
};

Pen.setFabricante("BIC");

console.log(Pen.getFabricante());