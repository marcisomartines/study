/**
 * Created by marciso on 09/04/2017.
 */
var Value = {
    val : 10,
    getValue : function () {
        return this.val + 2;
    }
};

console.log(Value.getValue());

var Value2 = Object.create(Value);

Value2.getValue = function () {//sobreescreve o metodo
    return this.val + 10;
};

console.log(Value2.getValue());
