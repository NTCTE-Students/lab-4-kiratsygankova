<?php
function celsiusToFahrenheit($celsius) {
    return $celsius * 1.8 + 32;
}

$temperatureInCelsius = 25;
$temperatureInFahrenheit = celsiusToFahrenheit($temperatureInCelsius);
echo $temperatureInCelsius . "°C = " . number_format($temperatureInFahrenheit, 2) . "°F";
