var express = require('express');

var app = express();

app.get('/', function(req, res) {
    res.send('ola do express');
});

app.get('/hello', function(req, res) {
    res.json({
        mensagem: "esta é uma mensagem de olá"
    });
});

app.get('/hello/:name', function(req, res) {
    res.json({
        mensagem: "este é um parametro " + req.params.name
    });
});

app.listen(3000, function() {
    console.log('express foi inicializado');
});