var fs = require('fs');

/*fs.writeFile('data.txt', "ola mondo do SON", function(err) {
    if (err) {
        throw err;
    }
});*/

/*fs.readFile('data.txt', function(err, data) {
    if (err) {
        throw err;
    }

    console.log(data.toString('utf8'));
});


fs.readdir('.', function(erro, arquivos) {
    if (erro)
        throw erro;

    for (var arquivo in arquivos) {
        console.log(arquivos[arquivo]);
    }
});*/

fs.readdirSync('.').filter(function(file) {
    return (file.endsWith('.js'))
}).forEach(function(file) {
    console.log(file);
});