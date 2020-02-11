$(document).ready(function(){
    $('.td_ver_legenda').click(bindClick);   
});
var bindClick = function() {
    let tr = $(this);
    $.getJSON("./dvds/legendas/"+$(this).attr("data-dvd_id"), function(legendas){
        //console.log(legendas)
        $(".row-legendas").remove();

        $(tr).parent().parent().after("<tr class='row-legendas'><td colspan='5' class='legendas'></td><td class='remove-row' align='right'><b>X</b></td></tr>");
        $(".row-legendas").hide();

        for (var i in legendas) {            
            $(".legendas").append("<span class='legenda'>"+legendas[i].lingua+"</span>");
        }
        
        $(".row-legendas").fadeIn(800);
        $(".remove-row").click(function(){$(this).parent().remove();});
    });   
}
