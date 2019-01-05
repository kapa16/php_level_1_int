<?php
$fileName = 'current.txt';
$fileNameTask3 = 'task3.txt';
$fileTask3 = fopen($fileNameTask3, 'w');
for ($i = 1; $i <= 20; $i++) {
    fwrite($fileTask3, $i . PHP_EOL);
}
fclose($fileTask3);

echo "1. Прочитайте содержимое текущего каталога в массив. Сохраните этот набор строк в файл current.txt таким образом, 
чтобы имя каждого файла и каталога располагались на отдельных строках.<br><br>";
$filesCurrentDir = scandir('.');
$filesCurrentDir = array_filter($filesCurrentDir, function ($elem) {
    return !in_array($elem, ['.', '..']);
});
echo "<pre>";
print_r($filesCurrentDir);
echo "</pre>";

$fileToWrite = fopen($fileName, 'w');
foreach ($filesCurrentDir as $file) {
    fwrite($fileToWrite, $file . PHP_EOL);
}
fclose($fileToWrite);

echo "<hr>";

echo "2. Возьмите любой текстовый файл, например, файл из предыдущего задания. 
Извлеките его содержимое в виде массива строк, 
поменяйте порядок следования строк на обратный и перезапишите содержимое исходного файла.<br><br>";

$arrStr = file($fileName);
$newArr = array_reverse($arrStr);
//while(($str = fgets($fileReadWrite)) !== false) {
//    array_unshift($arrStr, $str);
//}
echo "<pre>";
print_r($newArr);
echo "</pre>";
$fileReadWrite = fopen($fileName, 'w');

foreach ($newArr as $str) {
    fwrite($fileReadWrite, $str);
}
fclose($fileReadWrite);

echo "<hr>";

echo "3. *По желанию. Прочитайте последние 10 строк файла и выведите в стандартный поток вывода.<br><br>";

$arrTask3 = file($fileNameTask3);
$arrTenStr = [];
$lastIndex = count($arrTask3) - 1;
for ($i = $lastIndex - 9; $i <= $lastIndex; $i++) {
    array_push($arrTenStr, $arrTask3[$i]);
}
echo "<pre>";
print_r($arrTenStr);
echo "</pre>";

echo "<hr>";

echo "4. *По желанию. Подсчитайте размер каталога, учитывая вложенные подкаталоги и файлы в них.<br><br>";

function getSizeFiles($dirName)
{
    $fileSize = 0;
    $filesDir = scandir($dirName);
    for ($i = 2; $i < count($filesDir); $i++) {
        $fileName = $dirName . '/' . $filesDir[$i];
        if (is_dir($fileName)) {
            $fileSize += getSizeFiles($fileName);
        } else {
            $fileSize += filesize($fileName);
        }
    }
    return $fileSize;
}

echo 'Размер файлов в каталоге и подкаталогах: ' . getSizeFiles('.') . ' байт';