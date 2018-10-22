<?php

function main_index() {
    echo render('navigation.php');
    echo 'Главная страница';
}

function contacts_index() {
    echo render('navigation.php');
    echo 'Страница с контактами';
}