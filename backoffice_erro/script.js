
$(document).ready(function(){

   printTabelaLeilao();
});

    function printTabelaLeilao(){
        // console.log("printTabelaLeilao");
        $.ajax({
            type:"POST",
            url:"response.php",
            data:{action:"printTabelaLeilao"},
            success:function(data){
                $("#area_table").html(data);
                $("#auction_menu").addClass("active_menu");
                $("#users_menu").removeClass("active_menu");
                $("#movie_menu").removeClass("active_menu");
                $("#places_menu").removeClass("active_menu");
            }
        });
    }

    function printTabelaUsers(){
        // console.log("printTabelaUsers");
        $.ajax({
            type:"POST",
            url:"response.php",
            data:{action:"printTabelaUsers"},
            success:function(data){
                $("#area_table").html(data);
                $("#auction_menu").removeClass("active_menu");
                $("#users_menu").addClass("active_menu");
                $("#movie_menu").removeClass("active_menu");
                $("#places_menu").removeClass("active_menu");
                // console.log(data);
            }
        });
    }

    function printTabelaMovies(){
        // console.log("printTabelaMovies");
        $.ajax({
            type:"POST",
            url:"response.php",
            data:{action:"printTabelaMovies"},
            success:function(data){
                // console.log(data);
                $("#area_table").html(data);
                $("#auction_menu").removeClass("active_menu");
                $("#users_menu").removeClass("active_menu");
                $("#movie_menu").addClass("active_menu");
                $("#places_menu").removeClass("active_menu");
               
            }
        });
    }

    function printTabelaPlaces(){
        // console.log("printTabelaPlaces");
        $.ajax({
            type:"POST",
            url:"response.php",
            data:{action:"printTabelaPlaces"},
            success:function(data){
                console.log(data);
                $("#area_table").html(data);
                $("#auction_menu").removeClass("active_menu");
                $("#users_menu").removeClass("active_menu");
                $("#movie_menu").removeClass("active_menu");
                $("#places_menu").addClass("active_menu");
               
            }
        });
    }

    function changetoEdit(id){
        // console.log(id);
        var concat = '#row_leilao_'.concat(id).concat(" input");
        $(concat).addClass("input_active_edit");

        var concat = '#button_edit_'.concat(id);
        $(concat).addClass("non_display_button");
                // $(concat).css("display","");

         var concat = '#button_delete_'.concat(id);
         $(concat).addClass("non_display_button");
        // $(concat).css("display","");

         var concat = '#button_check_'.concat(id);
         $(concat).removeClass("non_display_button");
         // console.log(concat);
        // $(concat).css("display","none");

        //  $("#button_edit_1").css("display","none");
        // $("#button_delete_1").css("display","none");
        // $("#button_sucess_1").css("display","");
        // $("#option_leilao_1").append("<button onclick='' class='btn btn-success btn-xs'><span class='glyphicon glyphicon-ok'></span></button>");
    }

    function update_Table_Leilao(id_leilao){
        // console.log(id_leilao);
        
        var concat = '#stock_'.concat(id_leilao);
        var stock = $(concat).val();

        var concat = '#preco_base_'.concat(id_leilao);
        var preco_base = $(concat).val();

        var concat = '#preco_final_'.concat(id_leilao);
        var preco_final = $(concat).val();

        var concat = '#nr_licitacoes_'.concat(id_leilao);
        var nr_licitacoes = $(concat).val();

        var concat = '#extra_'.concat(id_leilao);
        var extra = $(concat).val();

        var concat = '#tempo_'.concat(id_leilao);
        var tempo = $(concat).val();

        var concat = '#estado_'.concat(id_leilao);
        var estado = $(concat).val();

        var concat = '#vencedor_'.concat(id_leilao);
        var vencedor = $(concat).val();

        var concat = '#fk_id_local_'.concat(id_leilao);
        var fk_id_local = $(concat).val();

        var concat = '#fk_id_movies_'.concat(id_leilao);
        var fk_id_movies = $(concat).val();

        
        $.ajax({
            type:"POST",
            url:"response.php",
            data:{
                action:"update_Table_Leilao",
                id_leilao:id_leilao,
                stock:stock,
                preco_base:preco_base,
                preco_final:preco_final,
                nr_licitacoes:nr_licitacoes,
                extra:extra,
                tempo:tempo,
                estado:estado,
                vencedor:vencedor,
                fk_id_local:fk_id_local,
                fk_id_movies:fk_id_movies
            },
            success:function(data){
                // console.log(data);
                var concat = '#button_edit_'.concat(id_leilao);
                $(concat).removeClass("non_display_button");
                // $(concat).css("display","");

                 var concat = '#button_delete_'.concat(id_leilao);
                 $(concat).removeClass("non_display_button");
                // $(concat).css("display","");

                 var concat = '#button_check_'.concat(id_leilao);
                 $(concat).addClass("non_display_button");
                // $(concat).css("display","none");

                var concat = '#row_leilao_'.concat(id_leilao).concat(" input");
                $(concat).removeClass("input_active_edit");

                printTabelaLeilao();
            }
        });
    }

    function delete_row_from_table_leilao(id_leilao){
        console.log("delete_row_from_table_leilao");
        $.ajax({
            type:"POST",
            url:"response.php",
            data:{  action:"delete_row_from_table_leilao",
                    id_leilao:id_leilao},
            success:function(data){               
                console.log(data);
                printTabelaLeilao();
            }
        });
    }

    function showModalNovoLeilao(){
        $("#myModal").modal("show");
    }
    

