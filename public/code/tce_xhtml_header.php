<?php

// if necessary load default values
if (!isset($pagelevel) or empty($pagelevel)) {
    $pagelevel = 0;
}
if (!isset($thispage_title) or empty($thispage_title)) {
    $thispage_title = K_SITE_TITLE;
}
if (!isset($thispage_description) or empty($thispage_description)) {
    $thispage_description = K_SITE_DESCRIPTION;
}
if (!isset($thispage_author) or empty($thispage_author)) {
    $thispage_author = K_SITE_AUTHOR;
}
if (!isset($thispage_reply) or empty($thispage_reply)) {
    $thispage_reply = K_SITE_REPLY;
}
if (!isset($thispage_keywords) or empty($thispage_keywords)) {
    $thispage_keywords = K_SITE_KEYWORDS;
}
if (!isset($thispage_icon) or empty($thispage_icon)) {
    $thispage_icon = K_SITE_ICON;
}
if (!isset($thispage_style) or empty($thispage_style)) {
    if (strcasecmp($l['a_meta_dir'], 'rtl') == 0) {
        $thispage_style = K_SITE_STYLE_RTL;
    } else {
        $thispage_style = K_SITE_STYLE;
    }
}

echo '<'.'?'.'xml version="1.0" encoding="'.$l['a_meta_charset'].'" '.'?'.'>'.K_NEWLINE;
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">'.K_NEWLINE;
echo '<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="'.$l['a_meta_language'].'" lang="'.$l['a_meta_language'].'" dir="'.$l['a_meta_dir'].'">'.K_NEWLINE;

echo '<head>'.K_NEWLINE;
echo '<title>'.htmlspecialchars($thispage_title, ENT_NOQUOTES, $l['a_meta_charset']).'</title>'.K_NEWLINE;
echo '<meta name="viewport" content="width=device-width, initial-scale=1">'.K_NEWLINE;
echo '<meta http-equiv="Content-Type" content="text/html; charset='.$l['a_meta_charset'].'" />'.K_NEWLINE;
echo '<meta name="language" content="'.$l['a_meta_language'].'" />'.K_NEWLINE;
echo '<meta name="smartexam_level" content="'.$pagelevel.'" />'.K_NEWLINE;
echo '<meta name="description" content="smart online examination system developed in AdamaScience and Technology University, with the following students" />'.K_NEWLINE;
echo '<meta name="author" content="AminBeshir,LindaAshebir,AshenafiGirma,AfeworkAdane,MengestuAraya"/>'.K_NEWLINE;
echo '<meta name="reply-to" content="'.htmlspecialchars($thispage_reply, ENT_COMPAT, $l['a_meta_charset']).'" />'.K_NEWLINE;
echo '<meta name="keywords" content="'.htmlspecialchars($thispage_keywords, ENT_COMPAT, $l['a_meta_charset']).'" />'.K_NEWLINE;
echo '<link rel="stylesheet" href="'.$thispage_style.'" type="text/css" />'.K_NEWLINE;
echo '<link rel="shortcut icon" href="'.$thispage_icon.'" />'.K_NEWLINE;
// calendar
if (isset($enable_calendar) and $enable_calendar) {
    echo '<style type="text/css">@import url('.K_PATH_SHARED_JSCRIPTS.'jscalendar/calendar-blue.css);</style>'.K_NEWLINE;
    echo '<script type="text/javascript" src="'.K_PATH_SHARED_JSCRIPTS.'jscalendar/calendar.js"></script>'.K_NEWLINE;
    if (F_file_exists(''.K_PATH_SHARED_JSCRIPTS.'jscalendar/lang/calendar-'.$l['a_meta_language'].'.js')) {
        echo '<script type="text/javascript" src="'.K_PATH_SHARED_JSCRIPTS.'jscalendar/lang/calendar-'.$l['a_meta_language'].'.js"></script>'.K_NEWLINE;
    } else {
        echo '<script type="text/javascript" src="'.K_PATH_SHARED_JSCRIPTS.'jscalendar/lang/calendar-en.js"></script>'.K_NEWLINE;
    }
    echo '<script type="text/javascript" src="'.K_PATH_SHARED_JSCRIPTS.'jscalendar/calendar-setup.js"></script>'.K_NEWLINE;
}
echo '<!-- '.'S'.'M'.'A'.'R'.'T'.'e'.'x'.'a'.'m' .'-->'.K_NEWLINE;
echo '</head>'.K_NEWLINE;

echo '<body>'.K_NEWLINE;

global $login_error;
if (isset($login_error) and $login_error) {
    F_print_error('WARNING', $l['m_login_wrong']);
}

//============================================================+
// END OF FILE
//============================================================+
