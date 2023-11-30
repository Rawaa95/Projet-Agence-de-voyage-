
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connexion à la base de données échouée: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	/*Loading Single User Data*/
	if (isset($_POST['grab'])&&($_POST['grab'] == 'userData')) {
		if (isset($_POST['id'])) {
			$res = [];
			$uid = $_POST['id'];
			$sql = "SELECT * FROM users WHERE id = '$uid'";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					array_push($res,$row);
				}
			} else {
			}
			$conn->close();
		   }
		   die(json_encode($res));
   	}
	/*Editing User Data*/
	if (isset($_POST['edit'])&&($_POST['edit'] == 'userData')) {
		if (isset($_POST['id'])&&isset($_POST['fname'])&&isset($_POST['lname'])&&isset($_POST['email'])&&isset($_POST['tel'])&&isset($_POST['pass'])) {
			$uid = $_POST['id'];
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$email = $_POST['email'];
			$tel = $_POST['tel'];
			$pass = $_POST['pass'];
			$sql = "UPDATE users
			SET email = '$email', nom ='$fname',  prenom ='$lname',tel ='$tel',pass ='$pass' WHERE id='$uid'";
			$result = $conn->query($sql);
			if ($result) {
				/*while($row = $result->fetch_assoc()) {
					array_push($res,$row);
				}*/
			} else {
			}
			$conn->close();
		   }
		   die(json_encode(array('success')));
   	}
	/*Deleting User*/
	if (isset($_POST['edit'])&&($_POST['edit'] == 'delete')) {
		if (isset($_POST['id'])) {
			$uid = $_POST['id'];
			$sql = "UPDATE users SET isactiveaccount =0 WHERE id='$uid'";
			$result = $conn->query($sql);
			if ($result) {
			} else {
			}
			$conn->close();
		   }
		   die(json_encode(array('success')));
   	}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Panel</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="admin.css">
	<script src="js/ak_js_jq.js"></script>
	<script src="js/a_js_edit.js"></script>
</head>
<body>
	<header>
		<h1>Espace Admin</h1>
		<nav>
			<ul>
				<li><a href="#">Dashboard</a></li>
				<li><a href="#">Users</a></li>
				<li><a href="#">Settings</a></li>
				<li><a href="#">Logout</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<h2>Welcome, Admin!</h2>
		<p>You can manage your site from this panel.</p>
		<section class="panel">
			<h3>Dashboard</h3>
			<div class="content">
				<p>Here you can see your site's statistics and manage your content.</p>
			</div>
		</section>
		<section class="panel">
			<h3>les utilisateurs</h3>
			<div class="content">
				<!--p>Here you can manage your users, view their profiles and make changes.</p-->
				<center>
					<?php
						$sql = "SELECT * FROM users WHERE isactiveaccount = 1";
						$result = $conn->query($sql);

						if ($result !== false && ($result->num_rows > 0)) {
						echo '
						<div class="tableusersdiv">
						<table>
								<tr class="tableUsersHead">
								<th>ID</th>
								<th colspan="2"><i class="fa-solid fa-signature"></i> Nom Complet</th>
								<!--th><i class="fa-solid fa-bold"></i> Prenom</th-->
								<th><i class="fa-solid fa-envelope"></i> Email</th>
								<th><i class="fa-solid fa-square-phone-flip"></i> Téléphone</th>
								<th><i class="fa-solid fa-lock"></i> Mot De Passe</th>
								<th><i class="fa-solid fa-user-pen"></i></th>
								</tr>';
						while($row = $result->fetch_assoc()) {
							$userRow = '
										<tr class="UserRow">
											<td>'.$row["id"].'</td>
											<td what ="name" for="">'.$row["nom"].'</td>
											<td>'.$row["prenom"].'</td>
											<td>'.$row["email"].'</td>
											<td>'.$row["tel"].'</td>
											<td>'.$row["pass"].'</td>
											<td>
												<button class="editUserBtn"type="button" id ="'.$row["id"].'" onclick="toggleModalWithData('.$row["id"].');">
													<i class="fa-sharp fa-solid fa-pen-to-square"></i>
												</button>

												<button class="DeleteUserBtn"type="button" id ="'.$row["id"].'" onclick="toggleDeleteModalWithData('.$row["id"].');">
												<i class="fa-solid fa-trash"></i>
											</button>
											</td>
										</tr>';
							echo $userRow;
						}
						echo "</table></div>";
						} else {
						echo "0 utilisateurs";
						}
						$conn->close();
					?>
				</center>
			</div>

			
				<!-- The Modal -->
					<div id="myModal" class="modal">
					<!-- Modal content -->
					<div class="modal-content">
					<!--span class="close">&times;</span-->
						<div class="EditUserForm">
							<p>Nom</p>
							<input type="text" value="" id="disp_nom">

							<p>Prenom</p>
							<input type="text" value="" id="disp_prenom">

							<p>Adresse Email</p>
							<input type="text" value="" id="disp_email">

							<p>Téléphone</p>
							<input type="text" value="" id="disp_tel">

							<p>Mot De Passe</p>
							<input type="text" value="" id="disp_pass">
						</div>
						<input type="hidden" value="" id="disp_userid">
						<button class="SaveDataBtn">Save</button>
					</div>
					</div>
				<!-- The Modal -->
				<!-- The Modal Delete -->
				<div id="DeleteModal" class="modal">
					<!-- Modal content -->
					<div class="modal-content">
						<p><h4>Are you sure ?</h4></p>
						<p>You will permanently delete this user from the database</p>
						<input type="hidden" value="" id="_userid">
						<button class="ConfirmDeleteUserBtn">Delete</button>
					</div>
					</div>
				<!-- The Modal -->
		</section>
		<section class="panel">
			<h3>Settings</h3>
			<div class="content">
				<p>Here you can change your site's settings, like the logo, colors, and other preferences.</p>
			</div>
		</section>

	</main>
	
	<footer>
		<p>&copy; 2023 Admin Panel. All rights reserved.</p>
	</footer>
</body>
</html>
