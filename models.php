<?php 

require_once 'dbConfig.php';

function insertIntoSystemAdmin($pdo,$first_name, $last_name, $email, $address, $gender, $age, $college_degree, $skills) {

	$sql = "INSERT INTO system_admin_registration (first_name,last_name,email,address,gender,age,college_degree,skills) VALUES (?,?,?,?,?,?,?,?)";

	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$first_name, $last_name, $email, 
		$address, $gender, $age, $college_degree, $skills]);

	if ($executeQuery) {
		return true;	
	}
}

function seeAllSystemAdmin($pdo) {
	$sql = "SELECT * FROM system_admin_registration";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getSystemAdminByID($pdo, $admin_id) {
	$sql = "SELECT * FROM system_admin_registration WHERE admin_id = ?";
	$stmt = $pdo->prepare($sql);
	if ($stmt->execute([$admin_id])) {
		return $stmt->fetch();
	}
}

function updateASystemAdmin($pdo, $admin_id, $first_name, $last_name, 
	$email, $address, $gender, $age, $college_degree, $skills) {

	$sql = "UPDATE system_admin_registration 
				SET first_name = ?, 
					last_name = ?, 
					email = ?, 
					address = ?, 
					gender = ?, 
					age = ?, 
					college_degree = ?,
                    skills = ? 
			WHERE admin_id = ?";
	$stmt = $pdo->prepare($sql);
	
	$executeQuery = $stmt->execute([$first_name, $last_name, $email, 
		$address, $gender, $age, $college_degree, $skills, $admin_id]);

	if ($executeQuery) {
		return true;
	}
}



function deleteASystemAdmin($pdo, $admin_id) {

	$sql = "DELETE FROM system_admin_registration WHERE admin_id = ?";
	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$admin_id]);

	if ($executeQuery) {
		return true;
	}

}




?>