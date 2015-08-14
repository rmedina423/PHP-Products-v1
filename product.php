<?php

$id = $_GET['id'];
$product = 'You chose the ';
if ($id == '1') $product .= "Mac";

else if ($id == '2') $product .= "Ubuntu";

else if ($id == '3') $product .= "Windows";

else $product = "Your entry is not valid, please try again.";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Products</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>

	<?php require 'header.php' ?>

	<h1><?php echo $product; ?></h1>

	<?php require 'footer.php' ?>
	
</body>
</html>