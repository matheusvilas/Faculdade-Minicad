$( document ).ready(function() {
    $('.chamaGrafico').click(function(){
        var name = $(this).text();
        var input = $( ".input-father" ).find( '.input');
        var txt = $(input).find('.tituloChamado');
        input.show().css('display', 'inline-flex');
        txt.html(name);
    });
});