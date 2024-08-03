<pre
<?php
require_once "Lutador.php";
require_once "Luta.php";

$l = array();
$l[0] = new Lutador(
    "Pretty boy","EUA",31,1.75,68.9,11,3,1
);

$l[1] = new Lutador("Cezinha","Brasil",29,1.68,57.8,14,2,3);

$l[2] = new Lutador("Juniu carpintero", "EUA", 35, 1.65, 80.9, 12, 2, 1);

$l[3] = new Lutador("Zézo da luva", "Australia", 28, 1.93, 81.6, 13, 0, 2);

$l[4] = new Lutador("Toninho Popó", "Brasil", 37, 1.70, 119.3, 5, 4, 3);

$l[5] = new Lutador("Zorolaudo", "Brasil", 27, 1.93, 81.6, 13, 0 ,2);

$l[6] = new Lutador("Chico Peréba", "EUA", 30, 1.81, 105.7, 12, 2, 4);

$UEC01 = new Luta;
$UEC01->marcarLuta($l[0],$l[1]);
$UEC01->lutar();
$l[0]->status();
?>
></pre>
