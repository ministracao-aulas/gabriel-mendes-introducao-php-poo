index.php
|__config.php -> SITE_NAME -> "Meu site Legal"
    |__app.php
    |__funcoes.php



--------------------
<?php
define('HOST_URL', 'http://site.com');
define('SITE_NAME', 'Meu site Legal');

require_once('config.php');
require_once('app.php');
require_once('funcoes.php');

echo "Este é meu ". SITE_NAME;
echo "<a href='". HOST_URL.'/home' ."'>Home</a>";