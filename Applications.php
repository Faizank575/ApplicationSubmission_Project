<?php
$pageTitle = 'Applications';
include_once('include/dashboard.header.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Application</h1>
    </div>

    <!-- Content Row -->
    <ul class="list-group" id="applicationsList">
    </ul>

    <!-- <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header d-flex flex-row ">
                    <h6 class="m-0 font-weight-bold text-primary">Applications Overview</h6>
                </div>
                <div class="card-body">
                    <section>
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
        </div> -->

    <!-- <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Advertisments</h6>
                </div>
                <div class="card-body">
                </div>
            </div>
        </div> -->

</div>
<!-- /.container-fluid -->

<?php
function customPageFooter()
{
    echo '<script src="js/getApplications.js"></script>';
}
include_once('include/dashboard.footer.php');
?>