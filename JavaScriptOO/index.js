/**
 * Created by marciso on 08/04/2017.
 */
function Bank(){
    var name = '';
    var account = '';
    var amount = 0;

    this.setName = function (_name) {
        name = _name;
    };

    this.getName = function () {
        return name;
    };

    this.setAccount = function (_account) {
        account = _account;
    }

    this.getAccount = function () {
        return account;
    }

    this.setAmount = function (_amount) {
        amount = _amount;
    }

    this.getAmount = function () {
        return amount;
    }
}

function BankStrategy(_strategy, _bank){
    this.strategy = _strategy;
    this.bank = _bank;
}

BankStrategy.prototype.doStrategy = function () {
    return this.strategy;
};

var deposit = function (_bank,_value) {
    var amount = _bank.getAmount() + _value;

    console.log("Deposit strategy -> "+ amount);
};

var withdraw = function (_bank,_value) {
    var amount = _bank.getAmount() - _value;

    console.log("Withdraw strategy -> "+ amount);
}

function Main(){
    var name = window.prompt("Qual o nome do seu banco?");
    var account = window.prompt("Qual a sua conta?");
    var amount = parseInt(window.prompt("Quanto você tem?"));

    var bank = new Bank();

    bank.setName(name);
    bank.setAccount(account);
    bank.setAmount(amount);

    var option = parseInt(window.prompt('1 - Deposit \n 2 - Withdraw'));
    var value = 0;

    while(option != 0){
        value = parseInt(window.prompt("Entre o valor: "));

        if(option == 1){
            return new BankStrategy(deposit(bank,value));
        }

        if(option == 2){
            return new BankStrategy(withdraw(bank,value));
        }
    }

    console.log(bank.getName(),bank.getAccount(),bank.getAmount());
}

Main();

