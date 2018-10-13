<?php

// Scalar Types Hints em PHP
// Declarações de tipos escalares

declare(strict_types=1);

function somar( int $a, float $b)
{
	return $a + $b;
}

echo somar(2,4.7);
