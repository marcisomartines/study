/**
 * Created by marciso on 09/04/2017.
 */
var Animal = function () {
    throw "Esta é uma classe abstrata";
};

Animal.prototype.name = '';
Animal.prototype.sound = '';
Animal.prototype.say = function () {
    return console.log(this.name + " Emite -> " + this.sound);
};

var Gato = function(){
    this.name = 'gato';
    this.sound = 'meow';
};

var Cachorro = function(){
    this.name = 'cachorro';
    this.sound = 'woof';
};

Gato.prototype = Object.create(Animal.prototype);
Cachorro.prototype = Object.create(Animal.prototype);

console.log(new Gato().say());
console.log(new Cachorro().say());
console.log(new Animal().say());