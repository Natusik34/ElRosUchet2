<?php

// Меню проекта «ЭлРос-Учет»

$menuItems = [
    '1' => 'Справочник товаров',
    '2' => 'Учет прихода товаров',
    '3' => 'Учет продажи товаров',
    '0' => 'Выход'
];

while (true) {
    echo "\n=== Информационная система «ЭлРос-Учет» ===\n";
    foreach ($menuItems as $key => $value) {
        echo "$key. $value\n";
    }
    echo "Выберите пункт меню: ";

    $choice = trim(fgets(STDIN));

    switch ($choice) {
        case '1':
            echo "Открыт справочник товаров.\n";
            break;
        case '2':
            echo "Открыт учет прихода товаров.\n";
            break;
        case '3':
            echo "Открыт учет продажи товаров.\n";
            break;
        case '0':
            echo "Выход из программы.\n";
            exit(0);
        default:
            echo "Неверный выбор. Попробуйте снова.\n";
    }
}