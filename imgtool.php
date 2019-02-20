<?php

header('Expires: ' . date(DATE_RFC822, time() + 3600 * 24 * 365));

require_once($_SERVER['DOCUMENT_ROOT'] . '/lib/phpthumb/ThumbLib.inc.php');

// ---
function purgeCache()
{
    $date = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/photos_cache/__date');
    $now = date('Y-m-d');
    if ($date != $now) {
        set_time_limit(0);
        ignore_user_abort(true);
        $lst = glob($_SERVER['DOCUMENT_ROOT'] . '/photos_cache/*');
        array_walk($lst, create_function('$p', 'unlink($p);'));
        $f = fopen($_SERVER['DOCUMENT_ROOT'] . '/photos_cache/__date', 'w');
        fwrite($f, $now);
        fclose($f);
    }
}

// ---
function fromCache($i = '', $x = false, $y = false)
{
    $i = str_replace('../', '', $i);
    $i = str_replace('/..', '', $i);
    if (substr($i, 0, 1) == '/')
        $i = '';
    $filename = $i;


    $typeFile = 'png';
    if (substr($i, -4) == 'jpeg' || substr($i, -3) == 'jpg')
        $typeFile = 'jpg';

    $cachedName = $i;

    if (!is_file($i)) {
        $i = $_SERVER['DOCUMENT_ROOT'] . '/gfx/nophoto.jpg';
        header('HTTP/1.1 404 Not Found');
    }


    if ($x) {
        if ($_GET['type'] == 'a') {
            $_GET['type'] = 'a';
        } else {
            $_GET['type'] = 'r';
        }
        $cachedName = $_SERVER['DOCUMENT_ROOT'] . '/photos_cache/' .
            preg_replace('/\.\w+$|[^0-9a-z_]/', '', strtolower($filename)) . '_' .
            $x . '_' . $y . '_' . $_GET['type'] . '_' .
            dechex(filemtime($filename) - 1209648000) . '.' . $typeFile;  // - 2008-05-01

        if (!is_file($cachedName)) {
            $thumb = PhpThumbFactory::create($i);
            if (!empty($thumb)) {
                if ($_GET['type'] == 'a') {
                    $thumb->adaptiveResize($x, $y);
                } else {
                    $thumb->resize($x, $y);
                }
                $thumb->save($cachedName, $typeFile);
                $thumb->show();
            } else {
                return;
            }

            return;
        }
    }
    if ($typeFile == 'png')
        header('Content-type: image/png');
    else
        header('Content-type: image/jpeg');
    header("Cache-Control: public, max-age=2592000");
    header("Pragma: cache");

    ob_clean();
    readfile($cachedName);
}

// ---

$x = abs(intval($_GET['x_res']));
$y = abs(intval($_GET['y_res']));

fromCache($_GET['imgpath'], $x, $y);
