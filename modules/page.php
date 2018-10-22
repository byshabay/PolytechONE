<?php

function page_history_index() {
    echo render('navigation.php');
    echo 'Страница с историей команды';
}

function page_team_index() {
    echo render('navigation.php');
    echo 'Страница с составом команды';
}

function page_preparation_index() {
    echo render('navigation.php');
    echo 'Страница с подготовкой КИА';
}

function page_setupandtests_index() {
    echo render('navigation.php');
    echo 'Страница с настройкой и тестами';
}

function page_firstrace_index() {
    echo render('navigation.php');
    echo 'Страница с первой гонкой';
}