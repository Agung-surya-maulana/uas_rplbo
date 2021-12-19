<?php
define ('host', 'localhost');
    define ('nama', 'root');
    define ('password', '');
    define ('dbase', 'uas_rplbo');

    $conn = mysqli_connect (host, nama, password, dbase) or die ('Unable to Connect');

    ?>