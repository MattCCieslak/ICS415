<!DOCTYPE html>
<html>
<head>
	<title>Comment form</title>
</head>
<body>
	<p>Here are the comments:</p>
	<div id="comments">
	<?PHP
		$fileName = "comments.txt";
	
		#open the comments file and append the new comment
		#if we have one
		if(isset($_POST["newcomment"])){
			$newComment = $_POST["newcomment"];
			$fh = fopen($fileName, 'a') or die ("Cannot open ".$fileName);
			fwrite($fh, $newComment."<br>");
			fclose($fh);
		}
		
		#if the comments file isn't empty, read it and 
		#output the contents to the page
		if(filesize($fileName) > 0){
			$fh = fopen($fileName, 'r');
			$fileContent = fread($fh, filesize($fileName));
			fclose($fh);
			echo $fileContent;	
		}
	?>
	</div>

	<form name="commentform" action="comments.php" method="post">
		<p>Enter a comment here: </p>
		<input type="text" name="newcomment"><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>

