<pre>
<?php
// 1.	Создайте массив arrRange и заполните его числами в промежутке [-50; 50] с шагом=8.
// Перемешайте элементы этого массива
$arrRange = range(-50, 50, 8);
shuffle($arrRange);
print_r($arrRange);

// 2.	Выведите элементы этого массива в строку через 
// « ** ».
$string = join(' ** ', $arrRange);
print_r($string);

// 3.	Удалите четные элементы этого массива, определите количество оставшихся
$resss = array_filter($arrRange, fn ($item) => $item % 2 == 0);
unset($arrRange);
count($resss);

// 4.	Замените все отрицательные значения положительными


// 5.	Создайте новый массив arrRandom и заполните его на 20 элементов случайными числами в промежутке [-5; 10].
$arrRandom = [];
$length = 20;
$min = -5;
$max = 10;
for ($i = 0; $i <= $length; $i++) {
    $arrRandom[$i] = rand($min, $max);
};
print_r($arrRandom);

// 6.	Определите количество значений в массиве arrRandom (количество повторений) 
array_count_values($arrRandom);

// 7.	Определите сумму элементов массива arrRandom
$sum = array_reduce($arrRandom, function ($carry, $item) {
    $carry += $item;
    return $carry;
});
print_r($sum);

// 8.	Определите произведение элементов массива arrange, кратных 3
$arr1 = array_filter(
    $arrRange,
    function ($item) {
        if ($item % 3 == 0) {
            return $item;
        }
    },
);
$res2 = array_product($arr1);
print_r($res2);

// 9.	Объедините массивы arrRange и arrRandom двумя способами
$ress1 = ($arrRange + $arrRandom);
$ress2 = array_merge($arrRange, $arrRandom);
print_r($ress1);
print_r($ress2);

// 10.	В массиве arrRandom удалите 2, 3 и 4 элементы
print_r($arrRandom);
unset($arrRandom[2], $arrRandom[3]);
print_r($arrRandom);

// 11.	В массиве arrRandom определите количество элементов, не превышающих его среднее значение
$mean = $sum / count($arrRandom);
$res3 = array_filter($arrRandom, fn ($item) => $item < $mean);
print_r(count($res3));

// 12.	Добавьте в конец массива arrRandom элемент=1000 (2 способа)
array_push($arrRandom, 1000);
print_r($arrRandom);

// 14.	Сформируйте массив из переменных, представленных ниже
$apple = "Черешня";
$grape = "Виноград";
$strawberry = "Земляника";
$pear = "Груша";
$arrrrr  = compact("apple", "grape", "strawberry", "pear");
print_r($arrrrr);

// 15.	Имеется массив
$arrrrrrrrrrrrrrrr = [
    [
        "street" => "Гагарина",
        "house" => 7,
        "flat" => 303
    ],
    [
        "street" => "Елькина",
        "house" => 12,
        "flat" => 12
    ],
    [
        "street" => "Доватора",
        "house" => 113,
        "flat" => 24
    ],
];
usort($arr, fn ($a, $b) => $b["house"] <=> $a["house"]);
?>
</pre>