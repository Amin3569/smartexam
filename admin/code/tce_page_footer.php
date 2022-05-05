<?php


echo K_NEWLINE;
echo '</div>'.K_NEWLINE; //close div.content
echo '</div>'.K_NEWLINE; //close div.body

include('../../shared/code/tce_page_userbar.php'); // display user bar
include('../config/theme/'.K_ADMIN_THEME.'.php'); // load extra script for the selected theme

echo '<!-- .Department of Computer Science and Engineering. -->'.K_NEWLINE;
echo '</body>'.K_NEWLINE;
echo '</html>';

//============================================================+
// END OF FILE
//============================================================+
