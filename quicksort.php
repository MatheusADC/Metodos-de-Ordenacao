<?php
function quicksort(array &$array, int $esquerda, int $direita): void
{
    $i = $esquerda;
    $j = $direita;
    $pivo = $array[($i + $j) / 2];
    do {
        while ($array[$i] < $pivo)
            $i++;
        while ($array[$j] > $pivo)
            $j--;
        if ($i <= $j) {
            troca($array, $i, $j);
            $i++;
            $j--;
        }
    } while ($i <= $j);
    // Recursividade
    if ($esquerda < $j)
        quicksort($array, $esquerda, $j);
    if ($direita > $i)
        quicksort($array, $i, $direita);
}

function troca(array &$array, int $i, int $j)
{
    $temp = $array[$i];
    $array[$i] = $array[$j];
    $array[$j] = $temp;
}

$array = [];
while (count($array) < 10000) {
    $numero_aleatorio = rand(1, 100000);
    if (!in_array($numero_aleatorio, $array)) {
        $array[] = $numero_aleatorio;
    }
}

$tempo_inicial = microtime(true);

quicksort($array, 0, count($array) - 1);

$tempo_final = microtime(true);

$tempo_execucao = $tempo_final - $tempo_inicial;

echo "Tempo de execução do Quicksort: " . number_format($tempo_execucao, 6) . " segundos<br><br>";

echo "Números ordenados:<br>" . implode(", ", $array) . "<br>";
?>
