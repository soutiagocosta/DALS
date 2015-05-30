  
$(document).ready(function(){
    
    //carrega filme na pagina
    LoadActiveLeiloes();
    //pede de 1 em 1 segundo os preços e escreve nos respectivos sitios 
    setInterval(function(){ActiveLeiloes()},1000)
    // timer();
    // ActiveLeiloes();
    
});
    
    function LoadActiveLeiloes(){
        // console.log("printLastLeiloes");
        $.ajax({
            type:"POST",
            url:"response.php",
            data:{action:"LoadActiveLeiloes"},
            success:function(data){
                // console.log(data);
               $("#row_1").html(data);
            }
        });
    }

    function BidAuction(bid){
        console.log(bid);
    }

    function ActiveLeiloes(){
        // console.log("printLastLeiloes");
        $.ajax({
            type:"POST",
            url:"response.php",
            data:{action:"ActiveLeiloes"},
            success:function(data){
                var id_leilao = data.split("#") ;
                // console.log(id_leilao);
                // id_leilao.length 
                var tamanho = id_leilao.length -1;
                // console.log(tamanho);
             
            
                // console.log(data);
                for(i=0;i<tamanho;i++){
                    LeilaoById(id_leilao[i]);
                }
            }
        });
    }

    function printLastLeiloes(){
        // console.log("printLastLeiloes");
        $.ajax({
            type:"POST",
            url:"response.php",
            data:{action:"printLastLeiloes"},
            success:function(data){
                // console.log(data);
                var leilao = data.split("*");
                // console.log(leilao);

            }
        });
    }

    function LeilaoById(id_leilao){
        // console.log("LeilaoById");
        $.ajax({
            type:"POST",
            url:"response.php",
            data:{action:"LeilaoById", 
                id_leilao:id_leilao},
            success:function(data){
                // console.log(data);
                var leilao = data.split("#");
                var tamanho = leilao.length;
                var concat = "#preco_".concat(id_leilao);
                console.log(concat);
                // for(i=0; i< tamanho; i++){
                    $(concat).html(leilao[1]);
                // }
                // console.log(i);
                console.log(leilao);


            }
        });
    }


    
    

