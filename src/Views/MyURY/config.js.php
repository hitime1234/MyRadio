<?php
/**
 * 
 * @author Lloyd Wallis <lpw@ury.org.uk>
 * @version 20130525
 * @package MyURY_Core
 */
header('Content-Type: text/javascript');
header('Cache-Control: max-age=86400, must-revalidate');
header('Expires: ', date('r', time()+86400));
header('HTTP/1.1 200 OK');

echo 'mConfig='. json_encode($conf).';';