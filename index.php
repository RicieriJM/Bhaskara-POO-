<?php

require ('classes.php');

echo '<pre>';

$dados = new dados;
$calculo_deltas = new calculo_deltas;
$calculo_xs = new calculo_xs;

$calculo_deltas->a = $dados->a;
$calculo_deltas->b = $dados->b;
$calculo_deltas->c = $dados->c;

$calculo_deltas->calculo_delta();

$dados->delta = $calculo_deltas->delta;

$calculo_xs->a = $dados->a;
$calculo_xs->b = $dados->b;
$calculo_xs->delta = $calculo_deltas->delta;

$calculo_xs->calculo_x1();
$calculo_xs->calculo_x2();

$dados->x1 = $calculo_xs->x1;
$dados->x2 = $calculo_xs->x2;

var_dump($dados);