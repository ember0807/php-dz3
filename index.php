<?php
include 'AutoInfo.php';
//импорт класса
use base\AutoInfo; 
$string = 'автомобиль с госномером В695СХ допустил столкновение с автомобилем марки Toyota corolla c госномером Т495СХ22 <BR>';

echo "<BR>--- Исходная строка ---<BR>\n";
echo $string . "\n";
$processor = new AutoInfo($string);
$plates = $processor->getFoundLicensePlates();

echo "\n<BR>--- Результат поиска ---<BR>\n";
if (!empty($plates)) 
    {
    echo "<BR>Найдены следующие госномера:<BR>\n";
    foreach ($plates as $plate) 
    {
        echo "<BR>- " . $plate . "<BR>\n";
    }
} else 
{
    echo "<BR>Гос. номера не найдены.\n<BR>";
}