<?php
$pageTitle = 'Dashboard';
function customPageHeader()
{
    echo '<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>';
}
include_once('include/dashboard.header.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" id="newApplication">Start New Application</button>
    </div>

    <!-- Content Row -->

    <div class="row">

        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header d-flex flex-row ">
                    <h6 class="m-0 font-weight-bold text-primary">Applications Overview</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <section>
                        <!--for demo wrap-->
                        <?php if (isset($_SESSION['type'])) {
                            echo 'div id="piechart" style="width: 900px; height: 500px;"></div>';
                        } else {
                            echo '<div class="tbl-header">
                                    <table cellpadding="0" cellspacing="0" border="0">
                                        <thead>
                                            <tr>
                                                <th>Application ID</th>
                                                <th>Company Name</th>
                                                <th>Start Date</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="tbl-content" id="Table_data">
                                </div>';
                        }
                        ?>

                    </section>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Advertisments</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?php
function customPageFooter()
{
    echo '<script src="js/dashboard.js"></script>';
}
include_once('include/dashboard.footer.php');
?>