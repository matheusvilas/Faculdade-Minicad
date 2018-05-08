$( document ).ready(function() {
    var canvas = document.getElementById("myCanvas");
    var context = canvas.getContext('2d');
    var coordenadas = document.getElementById('coordenadas');
    var x1 = $( ".input-father" ).find( '.x1');
    var y1 = $( ".input-father" ).find( '.y1');
    var x2 = $( ".input-father" ).find( '.x2');
    var y2 = $( ".input-father" ).find( '.y2');

    $('.chamaGrafico').click(function(){
        var name = $(this).text();
        var input = $( ".input-father" ).find( '.input');
        var txt = $(input).find('.tituloChamado');
        input.show().css('display', 'inline-flex');
        txt.html(name);
    });

    /**
     * 
     * MOUSE CLICK FUCNTION SAVE IN DOM
     * 
     */
    $('#myCanvas').click(function(evt){
        var mousePos = getMousePos(this, evt);
        x = Math.round(mousePos.x);
        y = Math.round(mousePos.y);
        (click)?ponto1(x , y):ponto2(x , y);
    });

    function ponto1(x , y){
        x1.val(x);
        y1.val(y);
        click = false;
    }

    
    function ponto2(x , y){
        x2.val(x);
        y2.val(y);
        click = true;
    }
  
    /**
     * 
     * Metódo chama para desenhar no canvas
     * 
     */

    $('.montar').click(function(){
        var canvas = document.getElementById("myCanvas");
        var x1 = $( ".input-father" ).find( '.x1');
        var y1 = $( ".input-father" ).find( '.y1');
        var x2 = $( ".input-father" ).find( '.x2');
        var y2 = $( ".input-father" ).find( '.y2');
        var ctx = canvas.getContext("2d");
        console.log(x1.val());
        console.log(y1.val());
        console.log(x2.val());
        console.log(y2.val());
        ctx.moveTo(x1.val(),y1.val());
        ctx.lineTo(x2.val(),y2.val());
        ctx.stroke();
    });


    function writeMessage(coordenadas, message) {
        coordenadas.innerHTML = message;
        
      }
      function getMousePos(canvas, evt) {
        var rect = canvas.getBoundingClientRect();
        return {
          x: evt.clientX - rect.left,
          y: evt.clientY - rect.top
        };
      }

      canvas.addEventListener('mousemove', function(evt) {
        var mousePos = getMousePos(canvas, evt);
        var message = 'Coordenadas: ' + Math.round(mousePos.x) + ',' + Math.round(mousePos.y);
        writeMessage(coordenadas, message);
      }, false);

      
});