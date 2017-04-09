/**
 * Created by marciso on 08/04/2017.
 */
var Animal = function(){

};

Animal.prototype.name = '';
Animal.prototype.type = '';
Animal.prototype.move = function () {
    console.log("esta andando");
};

Animal.prototype.say = function () {

};

console.log(new Animal());

gato = new Animal();

gato.move();