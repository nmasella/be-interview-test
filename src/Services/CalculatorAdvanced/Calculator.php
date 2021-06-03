<?php


namespace App\Services\CalculatorAdvanced;

/*
 * Implementare un servizio calcolatrice che esegua le quattro operazioni aritmetiche di base:
 * - addizione
 * - sottrazione
 * - divizione
 * - moltiplicazione
 *
 * Utilizzare un meccanismo di callback per formare le operazioni.
 */
class Calculator
{
    public function addOperator(string $operation, callable $doOperation) : void
    {
        //TODO: Just an example of a callback setup
    }

    public function operate( float $a, float $b, string $operation = "+") : float
    {
        return 0;
    }
}