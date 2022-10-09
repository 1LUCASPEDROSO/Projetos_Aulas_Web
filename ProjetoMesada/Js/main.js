var ValorOcorrencia = [0.25,0.50,0.75,1.00]
var TotalOcorrencia
var TotalFinal
var ValorMensal = parseInt(document.querySelector('#inputmesada').value)
alert(ValorMensal)
//the name of functions is basead in positon in array valorOcorrencia
function CaluclarMesada0(){
    var CountOcorrencia = parseInt(document.querySelector('#input0').value)
    if(CountOcorrencia < 0){
       alert("Valores negativos não são aceitos")
        document.querySelector('#input0'.value=0)
       do{
           var CountOcorrencia = parseInt(document.querySelector('#input0').value)
      }while(CountOcorrencia <=0);
    }
    {
        TotalOcorrencia = CountOcorrencia * ValorOcorrencia[0]
        TotalFinal = ValorMensal - TotalOcorrencia
        document.querySelector("#total0").value=TotalOcorrencia
    }
}
function CaluclarMesada1(){
    var CountOcorrencia = parseInt(document.querySelector('#input1').value)
    if(CountOcorrencia < 0){
        alert("Valores negativos não são aceitos")
         document.querySelector('#input1'.value=0)
        do{
            var CountOcorrencia = parseInt(document.querySelector('#input1').value)
       }while(CountOcorrencia <=0);
     }
     {
         TotalOcorrencia = CountOcorrencia * ValorOcorrencia[1]
         TotalFinal = ValorMensal - TotalOcorrencia
         document.querySelector("#total1").value=TotalOcorrencia
     }
}
function CaluclarMesada2(){
    var CountOcorrencia = parseInt(document.querySelector('#input2').value)
    if(CountOcorrencia < 0){
        alert("Valores negativos não são aceitos")
         document.querySelector('#input2'.value=0)
        do{
            var CountOcorrencia = parseInt(document.querySelector('#input2').value)
       }while(CountOcorrencia <=0);
     }
     {
         TotalOcorrencia = CountOcorrencia * ValorOcorrencia[2]
         TotalFinal = ValorMensal - TotalOcorrencia
         document.querySelector("#total2").value=TotalOcorrencia
     }
}
function CaluclarMesada3(){
    var CountOcorrencia = parseInt(document.querySelector('#input3').value)
    if(CountOcorrencia < 0){
        alert("Valores negativos não são aceitos")
         document.querySelector('#input3'.value=0)
        do{
            var CountOcorrencia = parseInt(document.querySelector('#input3').value)
       }while(CountOcorrencia <=0);
     }
     {
         TotalOcorrencia = CountOcorrencia * ValorOcorrencia[3]
         TotalFinal = ValorMensal - TotalOcorrencia
         document.querySelector("#total3").value=TotalOcorrencia
     }
}

