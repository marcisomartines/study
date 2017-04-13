var http = require('http');
var handle = require('./handle');
var events = require('events');

require('console-log-hello-world');
var emiter = new events.EventEmitter();

emiter.on('say', say);

function say() {
    console.log('estou dizendo');
}

emiter.emit('say');
//var s = require('./name');
//console.log(s.name());

var server = http.createServer(handle);

server.listen(3000, function() {
    console.log('Servidor criado com sucesso na porta 3000');
});