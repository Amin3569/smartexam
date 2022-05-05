<?php


require_once('../config/tce_config.php');

$pagelevel = K_AUTH_ADMIN_INFO;
require_once('../../shared/code/tce_authorization.php');

$thispage_title = $l['t_page_info'];
require_once('../code/tce_page_header.php');

require_once('tce_page_header.php');

echo '<div class="container">'.K_NEWLINE;

echo ''.$l['d_tcexam_desc'].'<br />'.K_NEWLINE;

echo '<ul class="credits">'.K_NEWLINE;
echo '<li><strong>'.$l['w_author'].':</strong>Amin,Linda,Ashenafi,Afeworkand Mengestu</li>'.K_NEWLINE;


echo '<a href="# title="'.$l['m_new_window_link'].'"></a></li>'.K_NEWLINE;
echo '</ul>'.K_NEWLINE;



echo '<p>Smart Exam is an online examination system platform used for conducting online exam easily and efficiently, specially for educational sectors in Ethiopia.</p>'.K_NEWLINE;





require_once('tce_page_footer.php');

//============================================================+
// END OF FILE
//============================================================+
