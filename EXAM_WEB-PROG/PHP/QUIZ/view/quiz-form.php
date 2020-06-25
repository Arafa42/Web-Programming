<?php


return "

<h1>QUIZ</h1>
$vraag
<form method='post' action='index.php?pagina=quiz'>
<select name='quiz'>
<option value='ja'>JA</option>
<option value='nee'>NEE</option>
</select>
<input type='submit' name='submitted'>
</form>


";



?>
