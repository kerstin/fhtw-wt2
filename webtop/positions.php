<?
/*  define original positions of elements
    (currently still manually written) */
$init_phpappX = 300;
$init_phpappY = 50;
$init_rssappX = 500;
$init_rssappY = 300;
$init_kontoappX = 250;
$init_kontoappY = 150;
$init_photoappX = 450;
$init_photoappY = 250;

// php info app
(!$_SESSION['phpappX']) ? ($_SESSION['phpappX'] = $init_phpappX) : '';
(!$_SESSION['phpappY']) ? ($_SESSION['phpappY'] = $init_phpappY) : '';
// rss app
(!$_SESSION['rssappX']) ? ($_SESSION['rssappX'] = $init_rssappX) : '';
(!$_SESSION['rssappY']) ? ($_SESSION['rssappY'] = $init_rssappY) : '';
// konto app
(!$_SESSION['kontoappX']) ? ($_SESSION['kontoappX'] = $init_kontoappX) : '';
(!$_SESSION['kontoappY']) ? ($_SESSION['kontoappY'] = $init_kontoappY) : '';
// photo app
(!$_SESSION['photoappX']) ? ($_SESSION['photoappX'] = $init_photoappX) : '';
(!$_SESSION['photoappY']) ? ($_SESSION['photoappY'] = $init_photoappY) : '';
?>
