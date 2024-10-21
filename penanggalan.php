<?php
    echo date("D/M/Y");
    echo ("<br/>");
    echo date("l/M/Y");
    echo ("<br/>");
    echo time();
    echo ("<br/>");
    echo date("l", time()+60*60*24);
?>