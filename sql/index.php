<?php require_once '/Users/saman/OneDrive/Documents/WEBSITE/DreamJob/core/dbConfig.php'; ?>
<?php require_once '/Users/saman/OneDrive/Documents/WEBSITE/DreamJob/core/models.php'; ?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>System Admin Job Application</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 20px;
			background-color: #f4f4f9;
		}
		h3 {
            text-align: center;
			color: #333;
			font-weight: 600;
		}
		input {
			font-size: 1.2em;
			height: 40px;
			width: 300px;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}
        input[name="skills"] {
			width: 400px; 
        }
		label {
			font-weight: bold;
		}
		form {
			display: flex;
			flex-direction: column;
			align-items: center; 
		}
		input[type="submit"] {
			background-color: #007BFF;
			color: white;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			width: 320px;
            margin-bottom: 20px; 
		}
        label {
            font-weight: bold;
            margin-bottom: 5px; 
        }
		input[type="submit"]:hover {
			background-color: #007BFF;
			color: white;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			width: 320px;
			font-size: 1.2em; 
			padding: 10px;
		}
		table {
			width: 80%;
			margin-top: 50px;
			border-collapse: collapse;
			margin-left: auto;
			margin-right: auto;
			box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
			background-color: white;
		}
		th, td {
			padding: 12px;
			border: 1px solid #ddd;
			text-align: center;
		}
		th {
			background-color: #007BFF;
			color: white;
			font-weight: bold;
		}
		td {
			font-size: 1em;
			color: #555;
		}
		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
		tr:hover {    
			background-color: #ddd;
		}
		a {
			color: #007BFF;
			text-decoration: none;
			font-weight: bold;
		}
		a:hover {
			text-decoration: underline;
		}
	</style>
</head>
<body>
    <h3>Welcome to the System Admin Job Application. Input your details here to register.</h3>
	<form action="/DreamJob/core/handleForms.php" method="POST">
		<p><label for="first_name">First Name</label> <br> <input type="text" name="first_name"></p>
		<p><label for="last_name">Last Name</label> <br> <input type="text" name="last_name"></p>
		<p><label for="email">Email</label> <br> <input type="text" name="email"></p>
		<p><label for="address">Address</label> <br> <input type="text" name="address"></p>
		<p><label for="gender">Gender</label> <br> <input type="text" name="gender"></p>
		<p><label for="age">Age</label> <br> <input type="text" name="age"></p>
		<p><label for="college_degree">College Degree</label> <br> <input type="text" name="college_degree"></p>
        <p><label for="skills">Skills</label> <br> <input type="text" name="skills"></p>
		<p><input type="submit" name="insertNewSystemAdminBtn" value="Submit"></p>
	</form>

	<table>
	  <tr>
	    <th>Admin ID</th>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>Email</th>
	    <th>Address</th>
	    <th>Gender</th>
	    <th>Age</th>
	    <th>College Degree</th>
        <th>Skills</th>
        <th>Actions</th>
	  </tr>

      <?php $seeAllSystemAdmin = seeAllSystemAdmin($pdo); ?>
	  <?php foreach ($seeAllSystemAdmin as $row) { ?>
	  <tr>
	  	<td><?php echo $row['admin_id']; ?></td>
	  	<td><?php echo $row['first_name']; ?></td>
	  	<td><?php echo $row['last_name']; ?></td>
	  	<td><?php echo $row['email']; ?></td>
	  	<td><?php echo $row['address']; ?></td>
	  	<td><?php echo $row['gender']; ?></td>
	  	<td><?php echo $row['age']; ?></td>
	  	<td><?php echo $row['college_degree']; ?></td>
        <td><?php echo $row['skills']; ?></td>
	  	<td>
	  		<a href="editSystemAdmin.php?admin_id=<?php echo $row['admin_id'];?>">Edit</a> | 
	  		<a href="deleteSystemAdmin.php?admin_id=<?php echo $row['admin_id'];?>" onclick="return confirm('Are you sure you want to delete this entry?')">Delete</a>
	  	</td>
	  </tr>
	  <?php } ?>
	</table>
</body>
