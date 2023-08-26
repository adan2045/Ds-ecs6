<?php

require_once 'modelos/oportunidad.php';
require_once 'modelos/persona.php';
require_once 'modelos/datosOperacion.php';
require_once 'modelos/respuestaOportunidad.php';

header('Content-Type: application/json');


$pe = new Persona();
$pe ->Nombres ='pedro rodriguez';
$pe -> Sexo='F' ;
$pe -> Documento='123123' ;
$pe -> Email= 'aaaa@aaaa.com.ar';
$pe -> Celular= '123456';
$pe -> TelefonoAlternativo= '123456';

$do = new DatosOperacion();
$do ->MontoSolicitado ='500000';
$do ->CantidadCuotas='12' ;
$do ->Linea='500' ;
$do ->TasaEfectivaMensual='2.9589' ;
$do -> CuotaPromedio= '53503.08';
$do -> TasaNominalAnual= '36';
$do ->CostoFinancieroTotal= '56.55';

$op= new Oportunidad();
$op->Persona=$pe;
$op->DatosOperacion=$do;
$op->SmsConsultaId='17654293-27258197726';
$op->IdValidatorId='893';
$op->MotorSolaFirmaId='8870';

$res= new RespuestaOportunidad ();
$res->Oportunidad= $op;
$res->IsOk='true';

  

echo json_encode($res);