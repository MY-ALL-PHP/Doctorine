<?php

echo <<<END
<form action="index" method="post">
<table>
	<tr>
		<td>
		Name
		</td>
		<td>
		<input type="text" name="name">
		</td>
	</tr>

	<tr>
		<td>
		Mobile
		</td>
		<td>
		<input type="number" name="phone">
		</td>
	</tr>
	<tr>
	<td></td>
	<td><input type="submit" value="submit"></td>
	</tr>
</table>
</form>
END;



?>