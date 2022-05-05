<?php

function F_is_allowed_upload($filename)
{
    if (!defined('K_ALLOWED_UPLOAD_EXTENSIONS')) {
        return false;
    }
    $allowed_extensions = unserialize(K_ALLOWED_UPLOAD_EXTENSIONS);
    $path_parts = pathinfo($filename);
    if (in_array(strtolower($path_parts['extension']), $allowed_extensions)) {
        return true;
    }
    return false;
}


function F_upload_file($fieldname, $uploaddir)
{
    global $l;
    require_once('../config/tce_config.php');
    // sanitize file name
    $filename = preg_replace('/[\s]/', '_', $_FILES[$fieldname]['name']);
    $filename = preg_replace('/[^a-zA-Z0-9_\.\-]/', '', $filename);
    if ($filename[0] === '.') {
		// files starting with a '.' are rendered as HTML pages.
		return false;
	}
    $filepath = $uploaddir.$filename;
    if (F_is_allowed_upload($filename) and move_uploaded_file($_FILES[$fieldname]['tmp_name'], $filepath)) {
        F_print_error('MESSAGE', htmlspecialchars($filename).': '.$l['m_upload_yes']);
        return $filename;
    }
    F_print_error('ERROR', htmlspecialchars($filename).': '.$l['m_upload_not'].'');
    return false;
}

function F_read_file_size($filetocheck)
{
    global $l;
    require_once('../config/tce_config.php');
    $filesize = 0;
    if ($fp = fopen($filetocheck, 'rb')) {
        $s_array = fstat($fp);
        if ($s_array['size']) {
            $filesize = $s_array['size'];
        } else {//read size from remote file (very slow function)
            while (!feof($fp)) {
                $content = fread($fp, 1);
                $filesize++;
            }
        }
        fclose($fp);
        return($filesize);
    }
    F_print_error('ERROR', basename($filetocheck).': '.$l['m_openfile_not']);
    return false;
}

//============================================================+
// END OF FILE
//============================================================+
