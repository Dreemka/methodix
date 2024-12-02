<?php
function save_user_page_selection() {
    // Проверяем, что пользователь залогинен
    $current_user = wp_get_current_user();
    if ($current_user->ID) {
        // Проверяем, что переданы необходимые параметры
        if (isset($_POST['selected_page']) && isset($_POST['action_type'])) {
            $page_id = intval($_POST['selected_page']);
            $action_type = $_POST['action_type'];

            // Получаем текущие выбранные страницы
            $selected_pages = (array)get_user_meta($current_user->ID, 'selected_pages', true);

            if ($action_type === 'add') {
                // Добавляем ID, если его еще нет в массиве
                if (!in_array($page_id, $selected_pages)) {
                    $selected_pages[] = $page_id;
                }
            } elseif ($action_type === 'remove') {
                // Удаляем ID, если он есть в массиве
                $selected_pages = array_diff($selected_pages, [$page_id]);
            }

            // Сохраняем обновленный массив
            update_user_meta($current_user->ID, 'selected_pages', $selected_pages);
        }
    }

	// Перенаправляем пользователя обратно на ту же страницу после сохранения
	wp_redirect($_SERVER['HTTP_REFERER']);
	exit;
}

add_action('admin_post_nopriv_save_user_page_selection', 'save_user_page_selection');
add_action('admin_post_save_user_page_selection', 'save_user_page_selection');
?>