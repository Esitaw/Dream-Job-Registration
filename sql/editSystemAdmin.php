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
	<?php $getSystemAdminById = getSystemAdminById($pdo, $_GET['admin_id']); ?>
	<form action="/DreamJob/core/handleForms.php" method="POST">
            <input type="hidden" name="admin_id" value="<?php echo $getSystemAdminById['admin_id']; ?>">
		<p>
			<label for="first_name">First Name</label> 
			<input type="text" name="first_name" value="<?php echo $getSystemAdminById['first_name']; ?>">
		</p>
		<p>
			<label for="last_name">Last Name</label> 
			<input type="text" name="last_name" value="<?php echo $getSystemAdminById['last_name']; ?>">
		</p>
		<p>
			<label for="email">Email</label>
			<input type="text" name="email" value="<?php echo $getSystemAdminById['email']; ?>">
		</p>
		<p>
			<label for="address">Address</label>
			<input type="text" name="address" value="<?php echo $getSystemAdminById['address']; ?>">
		</p>
		<p>
			<label for="gender">Gender</label>
			<input type="text" name="gender" value="<?php echo $getSystemAdminById['gender']; ?>">
		</p>
		<p>
			<label for="age">Age</label>
			<input type="text" name="age" value="<?php echo $getSystemAdminById['age']; ?>"></p>
		<p>
			<label for="college_degree">College Degree</label>
			<input type="text" name="college_degree" value="<?php echo $getSystemAdminById['college_degree']; ?>">

        <p>
            <label for="skills">Skills</label>
            <input type="text" name="skills" value="<?php echo $getSystemAdminById['skills']; ?>">
            <input type="submit" name="editSystemAdminBtn">
        </p>
	</form>
</body>
</html>
