<?php
    if (!isset($_SESSION['lang'])) {
        $_SESSION['lang'] = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    }

    if (isset($_POST['lang'])) {
        if ($_POST['lang'] == 'fr') {
            $_SESSION['lang'] = 'fr';
        } elseif ($_POST['lang'] == 'en') {
            $_SESSION['lang'] = 'en';
        }
    }

    switch ($_SESSION['lang'])
    {
    case 'fr':
        $language = "fr_FR.utf8";
        $btn_fr = 'btn-info';
        $btn_en = 'btn-default';
        break;
    default:
        $language = "en_US.utf8";
        $btn_fr = 'btn-default';
        $btn_en = 'btn-info';
        break;
    }

    putenv("LANG=$language");
    setlocale(LC_ALL, $language);
    // Set the text domain as 'messages'
    $domain = 'messages';
    bindtextdomain($domain, "./locale");
    textdomain($domain);
?>
