<?php

require_once './configClass.php';
require_once './extraFunctions.php';

echo "Empiezan las verificaciones \r\n";
echo "Verificación de la configuración de Twitter\r\n";
verifyConfig();
echo "Fin de verificación de configuración\r\n";
echo "Inicio Tokens\r\n";
getAccessTokens();
echo "End Tokens\r\n";
echo "Fin de Tests\r\n";
?>