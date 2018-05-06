<?php
    require_once 'grafica.php';
    if (!isset($_POST['x1']) || !isset($_POST['y1']) || !isset($_POST['x2']) || !isset($_POST['y2']))
        echo '';
    else {
        $x1 = $_POST['x1'];
        $y1 = $_POST['y1'];
        $x2 = $_POST['x2'];
        $y2 = $_POST['y2'];
        $x = $x1;
        $y = $y1;
        $dx = $x2 - $x1;
        $dy = $y2- $y1;
        if(abs($dx) >= abs($dy))
            $m = abs($dx);
        else
            $m = abs($dy);
        $ptsX[] = (int)$x;
        $ptsY[] = (int)$y;
        for($i=1; $i<=$m; $i++) {
            $x = $x + $dx / $m;
            $y = $y + $dy / $m;
            $ptsX[] = (int)$x;
            $ptsY[] = (int)$y;
        }
        grafica($ptsY, $ptsX, 'Algoritmo DDA');
    }
?>
