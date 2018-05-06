<?php
    require_once ('jpgraph/jpgraph.php');
    require_once ('jpgraph/jpgraph_scatter.php');
    function grafica($datay, $datax, $titulo) {
        $graph = new Graph(600,600);
        $graph->SetScale("linlin");
        $graph->img->SetMargin(20,20,20,20);
        $graph->SetShadow();
        $graph->title->Set($titulo);
        $graph->title->SetFont(FF_FONT1,FS_BOLD);
        $sp1 = new ScatterPlot($datay,$datax);
        $graph->Add($sp1);
        $graph->Stroke();
    }
?>
