<?php
$pageTitle = 'Application Details';
function customPageHeader()
{
    echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/applicationdetails.css" rel="stylesheet">';
}
include_once('include/dashboard.header.php');
?>

<div class="container-fluid">
    <div class=" container col-md-12 col-md-10" id="Applicationdetails">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Application Type: </h1>
        </div>
        <div class="panel-group wrap" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel">
                <div class="panel-heading " role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Personal Details
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-expanded="true" aria-labelledby="headingOne">
                    <div class="panel-body">
                        <div class="card mb-4">
                            <div class="card-body">
                                <!--Table-->
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col" colspan="2">User Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Applicant Name</th>
                                            <th id="applicantName">Faizan Khan</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">ID Of Applicant</th>
                                            <th id="IDOfApplicant">Jacob</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">ID Type of Applicant</th>
                                            <th id="IDTypeOfApplicant">Larry</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">Address of Applicant</th>
                                            <th id="AddressOfApplicant">Larry</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">Country</th>
                                            <th id="ApplicantCountry">Larry</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">Province</th>
                                            <th id="ApplicantProvince">Larry</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">City</th>
                                            <th id="ApplicantCity">Larry</th>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--Table-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of panel -->

            <div class="panel">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Company Details
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        <div class="card mb-4">
                            <div class="card-body">
                                <!--Table-->
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col" colspan="2">Company Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Company Name</th>
                                            <th id="companyName">Faizan Khan</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">Corparate Registration Document</th>
                                            <th id="corporateRegistrationDocument"><button id="CorporateButton" target="#modalIMG" data-toggle="modal" type="button" class="btn btn-primary viewdocument">View Document</button></th>
                                        </tr>
                                        <tr>
                                            <th scope="row">Company Address</th>
                                            <th id="companyAddress">Larry</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">Company Country</th>
                                            <th id="companycountry">Larry</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">Company Province</th>
                                            <th id="companyProvince">Larry</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">Company City</th>
                                            <th id="companycity">Larry</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">No of Employees</th>
                                            <th id="NoOfEmployees">Larry</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">No of Shares</th>
                                            <th id="NoOfShares">Larry</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">Share Capital</th>
                                            <th id="ShareCapital">Larry</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">foriegn Investment (if Applicable)</th>
                                            <th id="foriegnInvestment">Larry</th>
                                        </tr>

                                        <tr>
                                            <th scope="row">Holding Company Details (if applicable)</th>
                                            <th id="holdingCompanyDetails">Larry</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">Ultimate Holding Company Details (if applicable)</th>
                                            <th id="UltimateHoldingCompanyDetails">Larry</th>
                                        </tr>

                                    </tbody>
                                </table>
                                <!--Table-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of panel -->

            <div class="panel">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Share of Holder Details
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        <div class="card mb-4">
                            <div class="card-body">
                                <!--Table-->
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col" colspan="2">ShareHolder Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">ShareHolder Names</th>
                                            <th id="shareHolderNames">Faizan Khan <br /> Adnan <br /> Hanzla Khan</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">ID Card/ Passport Number</th>
                                            <th id="shareHolderPassportNumbers">Faizan Khan <br /> Adnan <br /> Hanzla Khan</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">ID Card/Passport Document</th>
                                            <th id="shareHolderPassportdocument">Faizan Khan <br /> Adnan <br /> Hanzla Khan</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">Address</th>
                                            <th id="shareHolderAddres">Faizan Khan <br /> Adnan <br /> Hanzla Khan</th>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--Table-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of panel -->

            <div class="panel">
                <div class="panel-heading" role="tab" id="headingFour">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Board of Director Details
                        </a>
                    </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                    <div class="panel-body">
                        <div class="card mb-4">
                            <div class="card-body">
                                <!--Table-->
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col" colspan="2">Board of Director Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Director Names</th>
                                            <th id="directorNames">Faizan Khan <br /> Adnan <br /> Hanzla Khan</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">ID Card/ Passport Number</th>
                                            <th id="directorIDNumbers">Faizan Khan <br /> Adnan <br /> Hanzla Khan</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">ID Card/Passport Document</th>
                                            <th id="directorIDDocuments">Faizan Khan <br /> Adnan <br /> Hanzla Khan</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">Address</th>
                                            <th id="directorAddress">Faizan Khan <br /> Adnan <br /> Hanzla Khan</th>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--Table-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of panel -->
            <div class="panel">
                <div class="panel-heading" role="tab" id="headingFive">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFour">
                            Subsidaries Details
                        </a>
                    </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                    <div class="panel-body">
                        <div class="card mb-4">
                            <div class="card-body">
                                <!--Table-->
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col" colspan="2">Subsidaries Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Subsidaries Names</th>
                                            <th id="subsidariesNames">Faizan Khan <br /> Adnan <br /> Hanzla Khan</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">Registration</th>
                                            <th id="subsidariesRegistration">Faizan Khan <br /> Adnan <br /> Hanzla Khan</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">Address</th>
                                            <th id="subsidariesAddress">Faizan Khan <br /> Adnan <br /> Hanzla Khan</th>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--Table-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="panel-heading" role="tab" id="headingSix">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseFour">
                            Attachment Details
                        </a>
                    </h4>
                </div>
                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                    <div class="panel-body">
                        <div class="card mb-4">
                            <div class="card-body">
                                <!--Table-->
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col" colspan="2">Attachments</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Memorandom of Association</th>
                                            <th id="memorandomAttachment">Faizan Khan </th>
                                        </tr>
                                        <tr>
                                            <th scope="row">Articles of Association</th>
                                            <th id="ArticlesAttachment">Faizan Khan </th>
                                        </tr>
                                        <tr>
                                            <th scope="row">Other Attachments</th>
                                            <th id="OtherdocumentsAttachment">Faizan Khan <br /> Adnan <br /> Hanzla Khan</th>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--Table-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="panel-heading" role="tab" id="headingSeven">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseFour">
                            Key Employees Details
                        </a>
                    </h4>
                </div>
                <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                    <div class="panel-body">
                        <div class="card mb-4">
                            <div class="card-body">
                                <!--Table-->
                                <table class="table table-bordered mb-4">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col" colspan="2">CEO Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"> Name</th>
                                            <th id="ceoName">Faizan Khan</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">Registration</th>
                                            <th id="ceoRegistration">Faizan Khan</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">Address</th>
                                            <th id="ceoAddress">Faizan Khan</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">ID Document</th>
                                            <th id="ceoIdDocument">Faizan Khan</th>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-bordered mb-4">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col" colspan="2">COO Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"> Name</th>
                                            <th id="cooName">Faizan Khan</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">Registration</th>
                                            <th id="cooRegistration">Faizan Khan</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">Address</th>
                                            <th id="cooAddress">Faizan Khan</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">ID Document</th>
                                            <th id="cooIdDocument">Faizan Khan</th>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-bordered mb-4">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col" colspan="2">Head of Internal Audit Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"> Name</th>
                                            <th id="HiaName">Faizan Khan</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">Registration</th>
                                            <th id="HiaRegistration">Faizan Khan</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">Address</th>
                                            <th id="HiaAddress">Faizan Khan</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">ID Document</th>
                                            <th id="HiaIdDocument">Faizan Khan</th>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-bordered mb-4">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col" colspan="2">Head of Risk Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"> Name</th>
                                            <th id="hordetails">Faizan Khan</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">Registration</th>
                                            <th id="horRegistration">Faizan Khan</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">Address</th>
                                            <th id="horAddress">Faizan Khan</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">ID Document</th>
                                            <th id="horIdDocument">Faizan Khan</th>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--Table-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end of #accordion -->

    </div>
    <!-- end of wrap -->
    <!-- end of wrap -->


    <?php
    function customPageFooter()
    {
        echo '<script src="js/applicationdetails.js"></script>';
    }
    include_once('include/dashboard.footer.php');
    ?>