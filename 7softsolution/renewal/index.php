<?php include '../session.php'; ?>
<?php include '../includes/header.php'; ?>
<?php if ($admin['renewal_view']) { ?>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php include '../includes/navbar.php'; ?>
        <?php include '../includes/menubar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Renewals
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li>Manage</li>
                    <li class="active">Renewals</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <?php
                    if (isset($_SESSION['error'])) {
                        echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              " . $_SESSION['error'] . "
            </div>
          ";
                        unset($_SESSION['error']);
                    }
                    if (isset($_SESSION['success'])) {
                        echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              " . $_SESSION['success'] . "
            </div>
          ";
                        unset($_SESSION['success']);
                    }
                    ?>
                <div class="panel panel-default" style="overflow-x:auto;">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-body">
                                    <table id="example1" class="table table-bordered">
                                        <thead>
                                            <th>ID</th>
                                            <th>NAME</th>
                                            <th>PHONE</th>
                                            <th>RENEWAL</th>
                                            <th>COST</th>
                                            <th>REMARK</th>
                                            <th>TOOLS</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $conn = $pdo->open();
                                                try {
                                                    date_default_timezone_set('Asia/Kolkata');
                                                    $month = date('m');
                                                    $year=date('Y');
                                                    $stmt = $conn->prepare("SELECT * FROM customers WHERE MONTH(customers_renewal_date)=$month AND YEAR(customers_renewal_date)=$year AND customers_deleted='0'");
                                                    $stmt->execute();
                                                    foreach ($stmt as $row) {
                                                        echo "<tr>";
                                                        echo "<td>" . $row['customers_id'] . "</td>";
                                                        echo "<td>" . $row['customers_name'] . "</td>";
                                                        echo "<td>" . $row['customers_phone1'] . "</td>";
                                                        echo "<td>" . $row['customers_renewal_date'] . "</td>";
                                                        echo "<td>" . $row['customers_renewal_cost'] . "</td>";
                                                        echo "<td>" . $row['customers_remark'] . "</td>";
                                                        echo "<td>";
                                                        echo "<button class='btn btn-primary btn-sm view_more btn-flat' data-id='" . $row['customers_id'] . "'><i class='fa fa-chevron-circle-down'></i> More</button> ";
                                                        if ($admin['renewal_edit'])
                                                            echo "<button class='btn btn-success btn-sm edit btn-flat' data-id='" . $row['customers_id'] . "'><i class='fa fa-refresh'></i> Renewed</button> ";
                                                        if ($admin['renewal_del'])
                                                            echo "<button class='btn btn-danger btn-sm delete btn-flat' data-id='" . $row['customers_id'] . "'><i class='fa fa-trash'></i> Delete</button>";
                                                        echo "</td>";
                                                        echo "</tr>";
                                                    }
                                                } catch (PDOException $e) {
                                                    echo $e->getMessage();
                                                }
                                                $pdo->close();
                                                ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <?php include 'renewal_modal.php'; ?>

    </div>
    <!-- ./wrapper -->

    <?php include '../includes/scripts.php'; ?>
    <script>
    $(function() {
        $(document).on('click', '.edit', function(e) {
            e.preventDefault();
            $('#edit').modal('show');
            var id = $(this).data('id');
            getRow_edit(id);
        });

        $(document).on('click', '.view_more', function(e) {
            e.preventDefault();
            $('#view_more').modal('show');
            var id = $(this).data('id');
            getRow(id);
        });

        $(document).on('click', '.delete', function(e) {
            e.preventDefault();
            $('#delete').modal('show');
            var id = $(this).data('id');
            getRow(id);
        });

    });

    function getRow_edit(id) {
        $.ajax({
            type: 'POST',
            url: 'renewal_row.php',
            data: {
                id: id
            },
            dataType: 'json',
            success: function(response) {

                $('#edit_customers_id').val(response.customers_id);
                $('#edit_customers_name').val(response.customers_name);
                $('#edit_customers_phone1').val(response.customers_phone1);
                $('#edit_customers_website').val(response.customers_website);
                $('#edit_customers_renewal_date').val(response.customers_renewal_date);
                $('#edit_customers_renewal_cost').val(response.customers_renewal_cost);
                $('#edit_customers_remark').val(response.customers_remark);
            }
        });
    }

    function getRow(id) {
        $.ajax({
            type: 'POST',
            url: 'renewal_row.php',
            data: {
                id: id
            },
            dataType: 'json',
            success: function(response) {
                $('.delete_customers_id').val(response.customers_id);
                $('.delete_customers_name').html(response.customers_name);
                $('#view_customers_name').html(response.customers_name);
                $('#view_customers_phone2').html(response.customers_phone2);
                $('#view_customers_phone3').html(response.customers_phone3);
                $('#view_customers_email').html(response.customers_email);
                $('#view_customers_address').html(response.customers_address);
                $('#view_customers_website').html(response.customers_website);
                $('#view_customers_purpoes').html(response.customers_purpoes);
                $('#view_customers_updated_date').html(response.customers_updated_date);
                $('#view_customers_created_date').html(response.customers_added_date);
            }
        });
    }
    </script>
</body>
<?php } ?>
<?php include '../includes/req_end.php'; ?>

</html>