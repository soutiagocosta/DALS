


    
$(document).ready(function(){
    
   ActiveLeiloes();
    
});
    
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
                console.log(leilao);

            }
        });



    }

    

    
    

