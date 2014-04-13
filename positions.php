<?
/*  define original positions of elements
    (currently still manually written) */
$init_phpappX = 300;
$init_phpappY = 50;
$init_kontoappX = 250;
$init_kontoappY = 150;
$init_photoappX = 450;
$init_photoappY = 250;

// php info app
(!$_SESSION['phpaX']) ? ($_SESSION['phpaX'] = $init_phpappX) : '';
(!$_SESSION['phpaY']) ? ($_SESSION['phpaY'] = $init_phpappY) : '';
// konto app
(!$_SESSION['kaX']) ? ($_SESSION['kaX'] = $init_kontoappX) : '';
(!$_SESSION['kaY']) ? ($_SESSION['kaY'] = $init_kontoappY) : '';
// photo app
(!$_SESSION['paX']) ? ($_SESSION['paX'] = $init_photoappX) : '';
(!$_SESSION['paY']) ? ($_SESSION['paY'] = $init_photoappY) : '';
?>
