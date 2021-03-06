<?php


require_once('../../shared/code/tce_functions_menu.php');

$menu = array(
    'index.php' => array('link' => 'index.php', 'title' => $l['h_index'], 'name' => $l['w_index'], 'level' => K_AUTH_PUBLIC_INDEX, 'key' => 'i', 'enabled' => true),
    'tce_test_allresults.php' => array('link' => 'tce_test_allresults.php', 'title' => $l['t_all_results_user'], 'name' => $l['w_results'], 'level' => K_AUTH_PUBLIC_TEST_RESULTS, 'key' => 'r', 'enabled' => ($_SESSION['session_user_level'] > K_AUTH_PUBLIC_TEST_RESULTS)),
    'tce_page_user.php' => array('link' => 'tce_page_user.php', 'title' => $l['w_user'], 'name' => $l['w_user'], 'level' => K_AUTH_PAGE_USER, 'key' => 'u', 'enabled' => ($_SESSION['session_user_level'] > 0)),
    'admin' => array('link' => '../../admin/code/index.php', 'title' => $l['h_admin_link'], 'name' => $l['w_admin'], 'level' => K_ADMIN_LINK, 'key' => 'a', 'enabled' => ($_SESSION['session_user_level'] >= K_ADMIN_LINK)),
    'tce_logout.php' => array('link' => 'tce_logout.php', 'title' => $l['h_logout_link'], 'name' => $l['w_logout'], 'level' => 1, 'key' => 'q', 'enabled' => ($_SESSION['session_user_level'] > 0)),
    'tce_login.php' => array('link' => 'tce_login.php', 'title' => $l['h_login_link'], 'name' => $l['w_login'], 'level' => 0, 'key' => 'l', 'enabled' => ($_SESSION['session_user_level'] < 1))
);

$menu['tce_page_user.php']['sub'] = array(
    'tce_user_change_email.php' => array('link' => 'tce_user_change_email.php', 'title' => $l['t_user_change_email'], 'name' => $l['w_change_email'], 'level' => K_AUTH_USER_CHANGE_EMAIL, 'key' => '', 'enabled' => true),
    'tce_user_change_password.php' => array('link' => 'tce_user_change_password.php', 'title' => $l['t_user_change_password'], 'name' => $l['w_change_password'], 'level' => K_AUTH_USER_CHANGE_PASSWORD, 'key' => '', 'enabled' => true)
);

echo '<a name="menusection" id="menusection"></a>'.K_NEWLINE;

// link to skip navigation

$menudata = '';
foreach ($menu as $link => $data) {
    $menudata .= F_menu_link($link, $data, 0);
}

if (!empty($menudata)) {
    echo '<ul class="menu">'.K_NEWLINE;
    echo $menudata;
    echo '</ul>'.K_NEWLINE;
     // end of menu
}
include('../../shared/code/tce_page_timer.php');
echo '<a name="timersection" id="timersection"></a>';



//============================================================+
// END OF FILE
//============================================================+
