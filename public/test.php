<?php

require_once '../libraries/hash.lib.php';

?>

<p>Salt: <?=Hash::salt()?></p>
<p>Hash: <?=Hash::make_password('123')?></p>