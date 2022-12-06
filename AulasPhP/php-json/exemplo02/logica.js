
const pegabtn = document.getElementById('getdados')
const saida =  document.getElementById('saida')
const table =  document.getElementById('table')

pegabtn.addEventListener('click',() => {
    fetch('dados.php')
        .then((res)=>{
            return res.json()
        })
        .then((dados)=>{
            saida.innerHTML=''
            let table = createTableAndHeader()
            saida.appendChild(table)
            appenRows(table,dados)
        })
        .catch((erro)=>{
            console.log("erro procurar os dados")
            console.log(erro)
        })
})

function createTableAndHeader()
{
    let table = document.createElement("table")
    let tr = table.insertRow(-1)
    let titulo = ["NOME","PROFISSÃO","CIDADE"]
    for (let i = 0; i < 3; i++)
    {      
        let th = document.createElement("th")
        th.innerHTML = titulo[i]
        tr.appendChild(th)
    }
    return table
}

function appenRows(table,dados) 
{
    for (let i = 0; i < dados.length; i++) {
        let tr = table.insertRow(-1)
        for (const[_,valor] of Object.entries(dados[i])) {            
            let cell = tr.insertCell(-1)
            cell.innerHTML = valor
        }        
    }
}