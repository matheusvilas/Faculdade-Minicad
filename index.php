<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>DDA e Bresenham em PHP</title>
    <link href="estilo.css" rel="stylesheet" type="text/css" />
    <link href="reset.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    
</head>
<?php
if (!extension_loaded('gd') || !function_exists('gd_info')) {
    die('Instalacao de PHP quebrada');
}
?>
<body style="height: 100vh;">
    <div class="container-deus">
        <nav class="sidebar-menu">
            <ul class="sidebar-menu-itens">
                <li>    
                    <a class="sidebar-menu-itens-principal" href="">Minicad</a> 
                </li>
                <li>
                    <a class="chamaGrafico">Quadrado</a>   
                </li>
                <li>
                    <a class="chamaGrafico">Triangulo</a>
                </li>
                <li>
                    <a class="chamaGrafico">Círculo</a> 
                </li>
                <li>
                    <a class="sidebar-menu-itens-clean" href="">Limpar</a> 
                </li>
            </ul>
        </nav>
        <div class="input-father">
           <div class="input">
                <form method="post" action="bresenham.php" target="bresenham">
                        <label class="tituloChamado"></label>
                        <br>
                        x1:
                        <input type="text" name="x1"/>
                        <br>
                        y1:
                        <input type="text" name="y1"/>
                        <br>
                        x2:
                        <input type="text" name="x2"/>
                        <br>
                        y2:
                        <input type="text" name="y2"/>
                        <p></p>
                        <input type="submit" value="Montar" />
                    </form>
           </div>
        </div>
        <div class="grafico">
            <iframe src="bresenham.php" width="100%" height="100%" frameborder="0" name="bresenham" scrolling="no" align="middle"></iframe>
        </div>
    </div>  



    <!-- <table  border="0" cellpadding="10" align="center">
    <tr>
            <td width="200">
           		<h1>Bresenham: </h1>
           		<form method="post" action="bresenham.php" target="bresenham">
                    x1:
                    <input type="text" name="x1"/>
          <br/>
                    y1:
                    <input type="text" name="y1"/>
                    <br />
                    x2:
                    <input type="text" name="x2"/>
                    <br />
                    y2:
                    <input type="text" name="y2"/>
                    <p></p>
                    <input type="submit" class="boton" value="Montar" />
                </form>
            </td>
            <td width="600">
                <div name="bresenham">
                    
                </div>
            </td>
        </tr>
    </table>
    <table width="600" border="0" cellpadding="10" align="center">
        <tr>
            <td width="200">
            	<h1>DDA: </h1>
                <form method="post" action="dda.php" target="dda">
                    x1:
                    <input type="text" name="x1"/>
                    <br />
                    y1:
                    <input type="text" name="y1"/>
                    <br />
                    x2:
                    <input type="text" name="x2"/>
                    <br />
                    y2:
                    <input type="text" name="y2"/>
                    <p></p>
                    <input type="submit" class="boton" value="Montar" />
                </form>
            </td>
            <td width="400">
                <div name="dda">
                    <iframe src="dda.php" width="100%" frameborder="0" name="dda" height="400px" scrolling="no" align="middle"></iframe>
                </div>
            </td>
        </tr>
    </table>
    <script src="bootstrap/js/bootstrap.min.js"></script> -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
