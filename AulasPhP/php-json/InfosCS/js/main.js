const pegarBtn = document.getElementById("btnImportarDados");
const saida = document.getElementById("saidaDados");
const table = document.getElementById('table');

pegarBtn.addEventListener('click', () => {
    fetch('./php/main.php')
                     .then((resposta)=>{ return resposta.json()})
                     .then((dados)=>{saida.innerHTML=''
                    let table = createTableAndHeader();
                    saida.appendChild(table)
                    appenRows(table,dados)
                    })
.catch((erro)=>{
    console.log("error ao procurar dados");
    console.log(erro);
})
});

function createTableAndHeader()
{
    let table = document.createElement("table");
    let tr = table.insertRow(-1);
    let titulo = ["nome","idade","time","estilo"];
    for (let i = 0; i < 4; i++)
    {
        let th = document.createElement("th");
        th.innerHTML= titulo[i];
        tr.appendChild(th);
    }
    return table;
}

function appenRows(table,dados)
{
    for(let i=0; i < dados.lenght; i++)
    {
        let tr = table.insertRow(-1);
        for(const[_,valor] of Object.entries(dados[i]))
        {
            let cell = tr.insertcell(-1);
            cell.innerHTML = valor;

        }
    }
}