<?php

//Шорткод вывода карточек методов и поиска
if (file_exists(get_template_directory() . '/custom-functions/methods-cards/page-methods.php')) {
	require_once get_template_directory() . '/custom-functions/methods-cards/page-methods.php';
}

//Функция выводит фильтра
if (file_exists(get_template_directory() . '/custom-functions/methods-cards/render-filters.php')) {
	require_once get_template_directory() . '/custom-functions/methods-cards/render-filters.php';
}

//Функция сохранения выделенных карточек методов
if (file_exists(get_template_directory() . '/custom-functions/methods-cards/selection-cards.php')) {
	require_once get_template_directory() . '/custom-functions/methods-cards/selection-cards.php';
}

//функция которая строит карточку метода
if (file_exists(get_template_directory() . '/custom-functions/methods-cards/constructor-card.php')) {
	require_once get_template_directory() . '/custom-functions/methods-cards/constructor-card.php';
}

//функция которая строит карточку метода
if (file_exists(get_template_directory() . '/custom-functions/methods-cards/comparison-methods.php')) {
	require_once get_template_directory() . '/custom-functions/methods-cards/comparison-methods.php';
}

//функция которая выводит контент метода в окно
if (file_exists(get_template_directory() . '/custom-functions/methods-cards/page-method-in-window.php')) {
	require_once get_template_directory() . '/custom-functions/methods-cards/page-method-in-window.php';
}

//функция которая выводит контент метода в окно
if (file_exists(get_template_directory() . '/custom-functions/methods-cards/methods-list-right-panel.php')) {
	require_once get_template_directory() . '/custom-functions/methods-cards/methods-list-right-panel.php';
}


//Шорткод который выводит сохраненные карточки методов пользователя
if (file_exists(get_template_directory() . '/custom-functions/methods-cards/selected-cards.php')) {
	require_once get_template_directory() . '/custom-functions/methods-cards/selected-cards.php';
}


if (file_exists(get_template_directory() . '/custom-functions/methods-cards/render-chips-filter.php')) {
	require_once get_template_directory() . '/custom-functions/methods-cards/render-chips-filter.php';
}

?>