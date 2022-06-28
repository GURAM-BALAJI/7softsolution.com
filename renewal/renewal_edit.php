<?php
include '../session.php';
include '../includes/req_start.php';
if ($req_per == 1) {
	if (isset($_POST['edit'])) {
		$id = $_POST['id'];
		$customers_renewal_date = $_POST['customers_renewal_date'];
		try {
			date_default_timezone_set('Asia/Kolkata');
			$today = date('d-m-Y h:i:s a');
			$stmt = $conn->prepare("UPDATE customers SET 
			customers_renewal_date=:customers_renewal_date,
			customers_updated_date=:customers_updated_date WHERE customers_id=:id");
			$stmt->execute([
				'customers_renewal_date' => $customers_renewal_date,
				'customers_updated_date' => $today,
				'id' => $id
			]);
			$_SESSION['success'] = 'Renewed successfully';
		} catch (PDOException $e) {
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	} else {
		$_SESSION['error'] = 'Fill up edit customers form first';
	}
}

header('location: index.php');
