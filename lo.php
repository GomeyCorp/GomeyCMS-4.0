<?php
require 'geoip2.phar';
$country = geoip_country_code_by_name('www.example.com');
if ($country) {
    echo 'This host is located in: ' . $country;
}
?>
