<?php

header('Content-Type: application/json');

require_once 'modelo/tasa.php';
require_once 'modelo/tipoLinea.php';
require_once 'modelo/demostracion.php';
require_once 'modelo/linea.php';
require_once 'modelo/respuestaLinea.php';

$t = new Tasa();
$t->plazoDesde = 0;
$t->plazoHasta = 48;
$t->tem = 4.7671;
$t->tna = 58;
$t->listTasaScore;

$tL = new TipoLinea();
$tL->codigo = '1';
$tL->descripcion = 'convencional';

$d = new Demostracion();
$d->codigo = '1';
$d->descripcion = 'DNI';

$l = new Linea();
$l->id = 222;
$l->codigo = '752';
$l->demostracion = $d;
$l->linea = 'Linea sin RCI';
$l->relacionCuotaIngreso = 100;
$l->tipoLinea = $tL;
$l->tasa = $t;
$l->tope = 250000;

$resp = new RespuestaLinea();
$resp->linea = $l;
$resp->contieneError = false;
$resp->mensaje;

echo json_encode($resp);
