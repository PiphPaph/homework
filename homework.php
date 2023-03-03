<?php
$labirinth = [
    ['start' => 'Стартовая комната'],
    ['stash' => 'Кладовка'],
    ['main room' => 'Гостинная'],
    ['kitchen' => 'Кухня'],
    ['water disco' => 'аквадискотека'],
    ['derty room' => 'Комната для грязи'],
    ['collector' => 'Канализация'],
    ['girl room' => 'Комната с Окси'],
    ['splinter room' => 'Компана сплинтера и ЦЛК'],
    ['exit' => 'Выход']
];
$p = 'Player';
$b = 0;
$labirinth[$b][$p] = $p;
echo ' Этот посис - то, что я смог написать. Передвижение - напиши направление с маленькой буквы (вперед, назад и т.д.) ' . PHP_EOL ;
echo ' Ты попал в дворец из которого предстоит выбраться. Удачи, кек... ' . PHP_EOL ;

while (true) {
    $way = rand(1,4);
    switch ($way){
        case 1:
            $way = 'вперед'; break;
        case 2:
            $way = 'назад'; break;
        case 3:
            $way = 'влево'; break;
        case 4:
            $way = 'вправо'; break;
        default:
            $way = 'sdfsdfsdf';
    }
    echo ' Куда пойдём?  ';
    $path = readline('What do u want? ');
    if ($way != $path) {
        echo ' Попробуй еще раз... ';
        continue;
    }
    else {
        unset($labirinth[$b][$p]);
        $b = $b + 1;
        $labirinth[$b][$p] = $p;
        echo ' Ты прошел дальше, мои поздравления. ' . PHP_EOL;
        if($b==9){
            echo 'Поздравляю, ты пришел к выходу. Впереди тебя ждет холодный и серый мир.';
            break;
        }
    }
}
