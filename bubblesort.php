<?php
function bubblesort(array &$array)
{
    $LSup = count($array) - 1;
    do {
        $j = 0;
        for ($i = 0; $i < $LSup; $i++) {
            if ($array[$i] > $array[$i + 1]) {
                $temp = $array[$i];
                $array[$i] = $array[$i + 1];
                $array[$i + 1] = $temp;
                $j = $i;
            }
        }
        $LSup = $j;
    } while ($LSup >= 1);
}

$array = [];
while (count($array) < 10000) {
    $numero_aleatorio = rand(1, 100000);
    if (!in_array($numero_aleatorio, $array)) {
        $array[] = $numero_aleatorio;
    }
}

$tempo_inicial = microtime(true);

bubblesort($array);

$tempo_final = microtime(true);

$tempo_execucao = $tempo_final - $tempo_inicial;

echo "Tempo de execução do Bubblesort: " . number_format($tempo_execucao, 6) . " segundos<br><br>";

echo "Números ordenados:<br>" . implode(", ", $array) . "<br>";
?>
