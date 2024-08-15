<?php
//include('SSH2.php');
//include('Net/SSH2.php');
include('Unit/Net/SSH2Test.php');
include('PhpseclibTestCase.php');

//include('PhpseclibFunctionalTestCase.php');

$ssh = new Net_SSH2('someservername.com');
if (!$ssh->login('thesshusername', 'thesshuserpassword')) {
    exit('Login Failed');
}

echo $ssh->exec('pwd');
echo $ssh->exec('ls -la');
?>

