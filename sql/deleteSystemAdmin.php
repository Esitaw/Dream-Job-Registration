<?php require_once '/Users/saman/OneDrive/Documents/WEBSITE/DreamJob/core/dbConfig.php'; ?>
<?php require_once '/Users/saman/OneDrive/Documents/WEBSITE/DreamJob/core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<h1>Are you sure you want to delete this user?</h1>
	<?php $getSystemAdminById = getSystemAdminById($pdo, $_GET['admin_id']); ?>
	<form action="/DreamJob/core/handleForms.php?admin_id=<?php echo $_GET['admin_id']; ?>" method="POST">

		<div class="SystemAdminContainer" style="border-style: solid; 
		font-family: 'Arial';">
			<p>First Name: <?php echo $getSystemAdminById['first_name']; ?></p>
			<p>Last Name: <?php echo $getSystemAdminById['last_name']; ?></p>
			<p>Email: <?php echo $getSystemAdminById['email']; ?></p>
			<p>Address: <?php echo $getSystemAdminById['address']; ?></p>
			<p>Gender: <?php echo $getSystemAdminById['gender']; ?></p>
			<p>Age: <?php echo $getSystemAdminById['age']; ?></p>
			<p>College Degree: <?php echo $getSystemAdminById['college_degree']; ?></p>
            <p>Skills: <?php echo $getSystemAdminById['skills']; ?></p>
			<input type="submit" name="deleteSystemAdminBtn" value="Delete">
		</div>
	</form>
</body>
</html>