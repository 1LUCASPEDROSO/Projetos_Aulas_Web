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
     ingresso[ingresso.lenght] = new this.dadoscinema(cod,nom,dt,hr,prc,tp,sl);
 }







}