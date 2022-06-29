
<?php
include '../session.php';
include '../includes/req_start.php';
if ($req_per == 1) {
	if (isset($_POST['add'])) {
		$name = strtoupper($_POST['customers_name']);
		$phone_1 = $_POST['customers_phone1'];
		$phone_2 = $_POST['customers_phone2'];
		$phone_3 = $_POST['customers_phone3'];
		$customers_email = strtolower($_POST['customers_email']);
		$customers_address = strtoupper($_POST['customers_address']);
		$customers_website = strtolower($_POST['customers_website']);
		$customers_purpoes = strtoupper($_POST['customers_purpoes']);
		$customers_renewal_date = $_POST['customers_renewal_date'];
		$customers_renewal_cost = $_POST['customers_renewal_cost'];

		$conn = $pdo->open();
		try {

			date_default_timezone_set('Asia/Kolkata');
			$today = date('d-m-Y h:i:s a');
			$stmt = $conn->prepare("INSERT INTO customers (customers_name,customers_phone1,customers_phone2,customers_phone3,customers_email,customers_address,customers_website,customers_purpoes,customers_renewal_date,customers_updated_date,customers_added_date,customers_renewal_cost) VALUES (:name,:phone_1,:phone_2,:phone_3,:customers_email,:customers_address,:customers_website,:customers_purpoes,:customers_renewal_date,:customers_updated_date,:customers_created_date,:customers_renewal_cost)");
			$stmt->execute(['name' => $name, 'phone_1' => $phone_1, 'phone_2' => $phone_2, 'phone_3' => $phone_3, 'customers_email' => $customers_email, 'customers_address' => $customers_address, 'customers_website' => $customers_website, 'customers_purpoes' => $customers_purpoes, 'customers_renewal_date' => $customers_renewal_date, 'customers_updated_date' => $today, 'customers_created_date' => $today, 'customers_renewal_cost'=>$customers_renewal_cost]);


			$_SESSION['success'] = 'Customers added successfully';
		} catch (PDOException $e) {
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	} else {
		$_SESSION['error'] = 'Fill up customers form first';
	}
}

header('location: index.php');

?>