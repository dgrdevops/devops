<?php
$ip_server = (`curl http://169.254.169.254/latest/meta-data/public-ipv4`);

echo "<h1>DGR Image is running...</h1><br>";
echo "Server ip address is: $ip_server", "<br><p>";
echo "Enjoy!";

?>