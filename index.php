<?php 
require dirname(__FILE__).'\class\Page.php';
use \Page\Page;

$configuracion['titulo'] = 'Titulo';

$pagina = new Page($configuracion);

echo $pagina->mostrar();




