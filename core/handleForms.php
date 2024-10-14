<?php 

require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertNewSystemAdminBtn'])) {
	$first_Name = trim($_POST['first_name']);
	$last_Name = trim($_POST['last_name']);
	$email = trim($_POST['email']);
	$address = trim($_POST['address']);
	$gender = trim($_POST['gender']);
	$age = trim($_POST['age']);
	$college_degree = trim($_POST['college_degree']);
    $skills = trim($_POST['skills']);

	if (!empty($first_Name) && !empty($last_Name) && !empty($email) && !empty($address) && !empty($gender)  && !empty($age)  && !empty($college_degree) && !empty($skills)) {
			$query = insertIntoSystemAdmin($pdo, $first_Name, $last_Name, 
			$email, $address, $gender, $age, $college_degree, $skills);

		if ($query) {
			header("Location: ../sql/index.php");
		}

		else {
			echo "Insertion failed";
		}
	}

	else {
		echo "Make sure that no fields are empty";
	}
	
}


if (isset($_POST['editSystemAdminBtn'])) {
	$admin_id = $_POST['admin_id'];
	$first_Name = trim($_POST['first_name']);
	$last_name = trim($_POST['last_name']);
	$email = trim($_POST['email']);
	$address = trim($_POST['address']);
	$gender = trim($_POST['gender']);
	$age = trim($_POST['age']);
	$college_degree = trim($_POST['college_degree']);
    $skills = trim($_POST['skills']);


	echo "Admin ID: $admin_id<br>";
    echo "First Name: $first_Name<br>";
    echo "Last Name: $last_name<br>";
    echo "Email: $email<br>";
    echo "Address: $address<br>";
    echo "Gender: $gender<br>";
    echo "Age: $age<br>";
    echo "College Degree: $college_degree<br>";
    echo "Skills: $skills<br>";

    if (!empty($admin_id) && !empty($first_Name) && !empty($last_name) && !empty($email) && !empty($address) && !empty($gender) && !empty($age) && !empty($college_degree) && !empty($skills)) {
        $query = updateASystemAdmin($pdo, $admin_id, $first_Name, $last_name, $email, $address, $gender, $age, $college_degree, $skills);

        if ($query) {
            header("Location: ../sql/index.php");
        } else {
            echo "Update failed";
        }
    } else {
        echo "Make sure that no fields are empty";
    }
}





if (isset($_POST['deleteSystemAdminBtn'])) {

	$query = deleteASystemAdmin($pdo, $_GET['admin_id']);

	if ($query) {
		header("Location: ../sql/index.php");
	}
	else {
		echo "Deletion failed";
	}
}




?>




