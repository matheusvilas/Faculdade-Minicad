
    function retornaLinha(x0 , y0 , x1 , y1){
        var fieldao = [];
        var fieldX = [];
        var fieldY = [];
         dTx = x1 - x0;
         dTy = y1 - y0;
         x = x0;
         y = y0;
         p = (2 * dTy) - dTx;
        fieldX.push(x);
        fieldY.push(y);
        do {
            if (p < 0) {
                x++;
                p = p + (2 * dTy);
                fieldX.push(x);
                fieldY.push(y);
            }else{
                x++;    
                y++;
                p = p + ((2 * dTy) - (2 * dTx));
                fieldX.push(x);
                fieldY.push(y);
            }
        } while (x != x1 && y != y1);
        fieldao.push(fieldX,fieldY);
        return fieldao;
    }