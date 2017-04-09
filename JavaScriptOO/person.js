/**
 * Created by marciso on 08/04/2017.
 */
// function Person(){//no javascript não existe a palavra chave class, o que diferencia é o "new"
//     this.name = '';
//     this.age ='';
//     this.eyesColor = '';
//     this.body = '';
//     var tattoo = '';
//
//     var swim = function(){
//         return console.log("Estou nadando");
//     }
//
//     this.move = function(canSwin){
//         if(canSwin){
//             return swim();
//         }
//
//         return console.log("Estou caminhando");
//     }
//
//     this.say = function(){
//         console.log("ola da ação falar");
//     }
//
//     this.see = function () {
//
//     }
// }
//
// var marciso = new Person();
//
// console.log(typeof Person);
// console.log(typeof marciso);
//
// marciso.name = "marciso";
// marciso.age = 30;
// marciso.eyesColor="castanho";
// marciso.body="magro";
//
// console.log(marciso);
// marciso.say();

function Person(){
    // this.name = '';
    // this.age = '';
    var name;
    var age

    this.getName = function(){
        return name;
    }

    this.setName = function(_name){
        name = _name;
    }

    this.getAge = function(){
        return age;
    }

    this.setAge = function(_age){
        age = _age;
    }
}

marciso = new Person();

marciso.setName("marciso");
console.log(marciso.getName());

console.log(marciso);