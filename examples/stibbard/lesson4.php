<?php
if(!session_id()) session_start(); //If session has not been started, start it.
echo "
<form method='post' action='redirect.php'>
  <select name='stibbard'>
  <option value='1'>See Lesson 1</option><br />
  <option value='2'>See Lesson 2</option><br />
  <option value='3'>See Lesson 3</option><br />
  <option value='4'>See Lesson 4</option><br />
  <option value='5'>See Lesson 5</option><br />
  <option value='6'>See Lesson 6</option><br />
  <option value='7'>See Lesson 7</option><br />
  <option value='8'>See Lesson 8</option><br />
</select>
<input type='submit' value='Choose' />
<!-- <a href='redirect.php'>Home</a><br /> -->
</form>
<br /><hr /><br />
<a href='https://www.youtube.com/watch?v=izeoWWYOnoY'>MySQL PDO Tutorial Lesson 4 - Fetch method</a>
";
include('footer.php');
?>