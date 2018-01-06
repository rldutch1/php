<?php
//include('SSH2.php');
//include('Net/SSH2.php');
include('Unit/Net/SSH2Test.php');
include('PhpseclibTestCase.php');

//include('PhpseclibFunctionalTestCase.php');

$ssh = new Net_SSH2('pcma1p.bdcm.bannerhealth.com');
if (!$ssh->login('pharmftp', 'pharm$$ftp')) {
    exit('Login Failed');
}

echo $ssh->exec('pwd');
echo $ssh->exec('ls -la');
?>

