/**
 * Created by marciso on 09/04/2017.
 */
function Address(){
    var number = 0;
    var city = '';
    var address = '';
}

Address.prototype.setNumber = function (_number) {
    number = _number;
};

Address.prototype.getNumber = function () {
    return number;
};

Address.prototype.setCity = function(_city){
    city = _city;
};

Address.prototype.getCity = function(){
    return city;
};

Address.prototype.setAddress = function(_address){
    address = _address;
};

Address.prototype.getAddress = function(){
    return address;
};
/**************************************************/
function Person(){
    var age = '';
    var name = '';
}

Person.prototype = new Address();
Person.prototype.constructor = Person;

Person.prototype.getName = function(){
    return name;
};

Person.prototype.setName = function (_name){
    name = _name;
};

Person.prototype.getAge = function () {
    return age;
};

Person.prototype.setAge = function (_age) {
    age = _age;
};

marciso = new Person();

marciso.setName('MARCISO');
marciso.setAge(30);

console.log(marciso.getName(),marciso.getAge());

marciso.setCity("Campo Grande");
marciso.setNumber(1478);
marciso.setAddress("Rua Palmacia");

console.log(marciso.getCity(),marciso.getAddress(),marciso.getNumber());

console.log(marciso instanceof Address);
