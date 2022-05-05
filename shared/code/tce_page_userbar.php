<?php





echo '<div class="userbar">'.K_NEWLINE;
if ($_SESSION['session_user_level'] > 0) {
    // display user information
    echo '<span title="'.$l['h_user_info'].'">'.$l['w_user'].': '.$_SESSION['session_user_name'].'</span>';
    // display logout link
    echo ' <a href="tce_logout.php" class="logoutbutton" title="'.$l['h_logout_link'].'" onclick="return confirm(\''.$l['w_logout'].' ?\')">'.$l['w_logout'].'</a>'.K_NEWLINE;
} else {
    // display login link
    echo ' <a href="tce_login.php" class="loginbutton" title="'.$l['h_login_button'].'">'.$l['w_login'].'</a>'.K_NEWLINE;
}
echo '</div>'.K_NEWLINE;

// language selector
if (K_LANGUAGE_SELECTOR and (stristr($_SERVER['SCRIPT_NAME'], 'tce_test_execute.php') === false)) {
    echo '<div class="minibutton" dir="ltr">'.K_NEWLINE;
    echo '<span class="langselector" title="change language">'.K_NEWLINE;
    $lang_array = unserialize(K_AVAILABLE_LANGUAGES);
    $lngstr = '';
    foreach ($lang_array as $lang_code => $lang_name) {
        $lngstr .= ' | ';
        if ($lang_code == K_USER_LANG) {
            $lngstr .= '<span class="selected" title="'.$lang_name.'">'.strtoupper($lang_code).'</span>';
        } else {
            // query string was removed because unnecessary
            //if (isset($_SERVER['QUERY_STRING']) AND (strlen($_SERVER['QUERY_STRING'])>0)) {
            //	$querystr = preg_replace("/([\?|\&]?)lang=([a-z]{2,3})/si", '', $_SERVER['QUERY_STRING']);
            //}
            //if (isset($querystr) AND (strlen($querystr)>0)) {
            //	$langlink = $_SERVER['SCRIPT_NAME'].'?'.str_replace('&', '&amp;', $querystr).'&amp;lang='.$lang_code;
            //} else {
                $langlink = $_SERVER['SCRIPT_NAME'].'?lang='.$lang_code;
            //}
            $lngstr .= '<a href="'.$langlink.'" class="langselector" title="'.$lang_name.'">'.strtoupper($lang_code).'</a>';
        }
    }
    echo substr($lngstr, 3);
    echo '</span>'.K_NEWLINE;
    echo '</div>'.K_NEWLINE;
}

echo '<div class="minibutton" dir="ltr">';
//echo '<span class="copyright"><a href="#">Smart Online Exam Provided by Amin,Linda,Ashenafi,Afework, and Mengestu</a></span>';
//echo '</div>'.K_NEWLINE;




//============================================================+
// END OF FILE
//============================================================+
