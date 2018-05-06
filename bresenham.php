<?php
    require_once 'grafica.php';
    if (!isset($_POST['x1']) || !isset($_POST['y1']) || !isset($_POST['x2']) || !isset($_POST['y2']))
        echo '';
    else {
        $x1 = $_POST['x1'];
        $y1 = $_POST['y1'];
        $x2 = $_POST['x2'];
        $y2 = $_POST['y2'];
        $ptsX = array();
        $ptsY = array();
        $dx = $x2 - $x1;
        $sx = ($dx < 0) ? -1 : 1;
        $dy = $y2 - $y1;
        $sy = ($dy < 0) ? -1 : 1;
        $m = $dy / $dx;
        $b = $y1 - ($m * $x1);
        while(($x1!=$x2)&&($y1!=$y2)){
           $y = round(($m * $x1) + $b);
           $ptsX[] = (int)$x1;
           $ptsY[] = (int)$y;
           $x1 += ($sx * 1);
        }
        grafica($ptsY, $ptsX, 'Algoritmo de Bresenham');
    }
?>
