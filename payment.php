<!-- <i class="fa fa-arrow-circle-left" aria-hidden="true"></i> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Learning Style</title>
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/cust_images/logo_blue.svg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Developer : Salman agha (Whatsapp : +923347360763, aghasalmankhan95@gmail.com)" name="description" />
    <meta content="Mannatthemes" name="author" />
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">
    <link href="assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css"
    rel="stylesheet"
    />
</head>
<body>
 <div class="page-wrapper"> 
    <div class="page-content">
        <div class="container-fluid">




            <div class="row mt-5 mb-5">
                <div class="col-md-2"></div>
                <div class="col-md-8 mt-5 mb-5">
                    <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-3">Billing Details</h4>
                <div class="billing-nav">
                    <ul class="nav nav-pills justify-content-center text-center mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-credit-card-tab" data-toggle="pill" href="#pills-credit-card"><i class="mdi mdi-credit-card d-block mx-auto text-danger font-18"></i>Credit-Card</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-paypal-tab" data-toggle="pill" href="#pills-paypal"><i class="mdi mdi-paypal d-block mx-auto text-secondary font-18"></i>Paypal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-bitcoin-tab" data-toggle="pill" href="#pills-bitcoin"><i class="mdi mdi-bitcoin d-block mx-auto text-warning font-18"></i>Bitcoin</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-credit-card">

                                <div class="form-container">
                                    <form class="bill-form">
                                        <div class="row">
                                            <div class="col-md-6">                            
                                                <div class="form-group">
                                                    <label>Card Number</label>
                                                    <input placeholder="Card number" class="form-control" type="tel" name="number">
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-6">                            
                                                <div class="form-group">
                                                    <label>Full Name</label>
                                                    <input placeholder="Full name" class="form-control" type="text" name="name">
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                        <div class="row">
                                            <div class="col-md-6">                            
                                                <div class="form-group">
                                                    <label>Ex. Date</label>
                                                    <input placeholder="MM/YY" class="form-control" type="tel" name="expiry">
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-6">                            
                                                <div class="form-group">
                                                    <label>CVV</label>
                                                    <input placeholder="CVC" class="form-control" type="number" name="cvc">
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                        <button class="btn btn-success px-3">Pay Now</button>
                                    </form><!--end form-->
                                </div><!--end form-container-->
                            </div><!--end demo-->
                        </div><!--end tab-pane-->
                        <div class="tab-pane fade" id="pills-paypal">
                            <div class="row">
                                <div class="col-md-12 col-lg-6 offset-lg-3">
                                    <div class="card border">
                                        <div class="card-body">
                                            <h4 class="title-text"><i class="mdi mdi-paypal d-block mx-auto text-secondary font-18"></i>Add Paypal Form</h4>
                                            <p class="mb-0 text-muted">There are many variations of passages of Lorem Ipsum available, 
                                                but the majority have suffered alteration in some form, by injected humour, 
                                                or randomised words.
                                            </p>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->
                            </div><!--end row-->                                                   
                        </div><!--end tab-pane--> 
                        <div class="tab-pane fade" id="pills-bitcoin">
                            <div class="row">
                                <div class="col-md-12 col-lg-6 offset-lg-3">
                                    <div class="card border">
                                        <div class="card-body">
                                            <h4 class="title-text"><i class="mdi mdi-bitcoin d-block mx-auto text-warning font-18"></i>Add Bitcoin Form</h4>
                                            <p class="mb-0 text-muted">There are many variations of passages of Lorem Ipsum available, 
                                                but the majority have suffered alteration in some form, by injected humour, 
                                                or randomised words.
                                            </p>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->
                            </div> <!--end row--> 
                        </div><!--end tab-pane--> 
                    </div><!--end tab-content--> 
                </div> <!--end billing-nav-->                                       
            </div><!--end card-body-->
        </div>
                </div>
                <div class="col-md-2"></div>
            </div>

           

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-7  text-right mt-5 mb-5">
                <a type="button" class="btn btn-danger waves-effect waves-light pl-5 pr-5" href="payment.html" >Procced</a>
            </div>
            <div class="col-md-3"></div>
        </div>


    </div>
</div>                       
<!-- end page content -->
</div>
<!-- end page-wrapper -->
<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/metisMenu.min.js"></script>
<script src="assets/js/waves.min.js"></script>
<script src="assets/js/jquery.slimscroll.min.js"></script>
<script src="../assets/js/jquery.core.js"></script>
<!--Plugins-->
<script src="assets/plugins/moment/moment.js"></script>
<!-- Required datatable js -->
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
<script src="assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
<script src="assets/pages/jquery.sweet-alert.init.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script src="../assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/metisMenu.min.js"></script>
<script src="assets/js/waves.min.js"></script>
<script src="assets/js/jquery.slimscroll.min.js"></script>
<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/app.js"></script>
<script src="functions/Staff.js"></script>
<!-- App js -->
<script src="assets/js/app.js"></script>
</body>
</html>