<?php
echo "\033[01;32m
 __ .   .__.._..  ..__ .__..___.
/  `|   [__] | |\/|[__)|  |  |
\__.|___|  |_|_|  |[__)|__|  |
\033[0m\033[01;36m         by Junior Hilario Jara\033[0m\n\n";
$link = readline("Url: ");
$tiempo = readline("Tiempo [Segundos]: ");
while (true) {
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $link,
      ));
$resp = curl_exec($curl);                                   curl_close($curl);
$div = explode('<div class="alert alert-success">', $resp);
$div2 = explode('.</div>', $div[1]);
echo $div2[0]."\n";
        sleep($tiempo); 
	}
?>