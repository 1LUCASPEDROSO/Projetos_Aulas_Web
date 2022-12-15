function testeDados()
{
    var header = document.querySelector('header');
    var div = document.querySelector('div');
    var requestURL = '../php-BD/dados.json';
    var request = new XMLHttpRequest();
    request.open('get', requestURL);
    request.responseType = 'json';
    request.send();
    request.onload = function() {
        var acessoDados = request.response;
        populateHeader(acessoDados);
        showHeroes(acessoDados);
      }
      function populateHeader(jsonObj) {
        var myH1 = document.createElement('h1');
        myH1.textContent = jsonObj['peso'];
        header.appendChild(myH1);
      
        var myPara = document.createElement('p');
        myPara.textContent = 'peso: ' + jsonObj['peso'];
        header.appendChild(myPara);
      }
}

function parsejson()
{
    const dadosJson = '[{"result":"true", "count":"42}]'
    const obj = parsejson(dadosJson);
    console.log(obj.count);
    
}
function readTextFile(file, callback) {
    var rawFile = new XMLHttpRequest();
    rawFile.overrideMimeType("application/json");
    rawFile.open("GET", file, true);
    rawFile.onreadystatechange = function() {
        if (rawFile.readyState === 4 && rawFile.status == "200") {
            callback(rawFile.responseText);
        }
    }
    rawFile.send(null);
}

//usage:
readTextFile("../php-BD/dados.json", function(text){
    var data = JSON.parse(text);
    console.log(data);
});