//SEPARAMOS OS MENINOS DOS MENINOS
function retornaLinha(x1 , x2 , y1 , y2){
    var fieldao = [];
    var fieldX = [];
    var fieldY = [];
    var dx = Math.abs(x2-x1);
    var dy = Math.abs(y2-y1);
    var sx = (x1 < x2) ? 1 : -1;
    var sy = (y1 < y2) ? 1 : -1;
    var err = dx-dy;
    while(true){  // Do what you need to for this
        // fieldX.push(x1);
        // fieldY.push(y1);
        console.log(x1,y1);
        if ((x1==x2) && (y1==y2)) break;
        var e2 = 2*err;
        if (e2 >-dy){ err -= dy; x1  += sx; }
        if (e2 < dx){ err += dx; y1  += sy; }
    }
    // fieldao.push(fieldX, fieldY);
    return fieldao;
} 