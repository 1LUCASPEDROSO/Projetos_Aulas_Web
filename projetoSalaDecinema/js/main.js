class controleingrsso
{
    ingresso = new Array();

dadoscinema(cod,nom,dt,hr,prc,tp,sl) {
     this.codigo = cod;
     this.nomefilme = nom;
     this.data = dt;
     this.hora = hr;
     this.preco = prc;
     this.tipo = tp;
     this.sala = sl;
 }
 adcionaringresso(cod,nom,dt,hr,prc,tp,sl){
    ingresso[ingresso.lenght] = new this.dadoscinema(cod,nom,dt,hr,prc,tp,sl);
    for (let i = 0; i < ingresso.length; i++) {
        console.log(ingresso[i].codigo)
        console.log(ingresso[i].nomefilme)
        console.log(ingresso[i].data)
        console.log(ingresso[i].hora)
        console.log(ingresso[i].preco)
        console.log(ingresso[i].tipo)
        console.log(ingresso[i].salas)
        
     }
 }

 mostraringressos(){
 
 }




}