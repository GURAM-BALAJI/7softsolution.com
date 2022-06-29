<?php
include '../session.php';
include '../includes/req_start.php';
if ($req_per == 1) {
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        if (isset($_POST['customers_view']))
            $customers_view = 1;
        else
            $customers_view = 0;
        if (isset($_POST['customers_create']))
            $customers_create = 1;
        else
            $customers_create = 0;
        if (isset($_POST['customers_edit']))
            $customers_edit = 1;
        else
            $customers_edit = 0;
        if (isset($_POST['customers_del']))
            $customers_del = 1;
        else
            $customers_del = 0;

        if (isset($_POST['admin_view']))
            $admin_view = 1;
        else
            $admin_view = 0;
        if (isset($_POST['admin_create']))
            $admin_create = 1;
        else
            $admin_create = 0;
        if (isset($_POST['admin_edit']))
            $admin_edit = 1;
        else
            $admin_edit = 0;
        if (isset($_POST['admin_del']))
            $admin_del = 1;
        else
            $admin_del = 0;
        if (isset($_POST['admin_special']))
            $admin_special = 1;
        else
            $admin_special = 0;

       
        $conn = $pdo->open();
        try {
            $stmt = $conn->prepare("UPDATE admin SET admin_special=:admin_special,customers_view=:customers_view,customers_create=:customers_create,customers_edit=:customers_edit,customers_del=:customers_del,admin_view=:admin_view,admin_create=:admin_create,admin_edit=:admin_edit,admin_del=:admin_del WHERE admin_id=:id");
            $stmt->execute(['admin_special' => $admin_special, 'customers_view' => $customers_view, 'customers_create' => $customers_create, 'customers_edit' => $customers_edit, 'customers_del' => $customers_del, 'admin_view' => $admin_view, 'admin_create' => $admin_create, 'admin_edit' => $admin_edit, 'admin_del' => $admin_del, 'id' => $id]);
            $_SESSION['success'] = 'Admin Permission Updated Successfully';
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
        }
        $pdo->close();
    }
}

header('location: index.php');
