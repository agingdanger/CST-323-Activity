<html lang="en">
	<head><title>Login Page</title>
	</head>
<body>
	<form action = "generate" method = "POST">
		<input type = "hidden" name = "_token"
			value = "<?php echo csrf_token() ?>"/>
		<h2>Random Verse</h2>
		<table>
			<tr>
				<td colspan = "2" align ="center">
					<input type = "submit" value = "Generate" />
				</td>
			</tr>
		</table>
	</form>
</body>
</html>