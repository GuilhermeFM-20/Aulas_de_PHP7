<?php
require_once("config.php");

echo session_save_path()."<br>";
echo session_status()."<br>";
switch(session_status()){
    case PHP_SESSION_DISABLED:
        echo"sessões estiverem desabilitadas.";
    break;
    case PHP_SESSION_NONE:
        echo" as sessões estiverem habilitadas, mas nenhuma existir";
    break;
    case PHP_SESSION_ACTIVE:
        echo"sessões estiverem habilitadas, e uma existir.";
    break;
}
