<?php
//Here are some examples of how to use this library:
?>
<?php
/*   include 'vendor/autoload.php'; */
include('phpseclib/Net/SSH2.php');

   $ssh = new SSH2('pcma1p.bdcm.bannerhealth.com');
   if (!$ssh->login('pharmftp', 'pharm$$pass')) {
       exit('Login Failed');
   }

   echo $ssh->exec('pwd');
   echo $ssh->exec('ls -la');
?>

<?php
/*
   include 'vendor/autoload.php';

   $key = new \phpseclib\Crypt\RSA();
   //$key->setPassword('whatever');
   $key->load(file_get_contents('privatekey'));

   $ssh = new \phpseclib\Net\SSH2('pcma1p.bdcm.bannerhealth.com');
   if (!$ssh->login('pharmftp', $key)) {
       exit('Login Failed');
   }

   echo $ssh->read('username@username:~$');
   $ssh->write("ls -la\n");
   echo $ssh->read('username@username:~$');
*/
?>
