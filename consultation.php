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



            <div class="row">
                <div class="col-md-12">
                    <div class="row mt-5">
                        <div class="col-md-2"></div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body align-self-center ml-3">
                                        <h3>Who are you consulting for ?</h3>
                                        <h6> Select person you want to consult for and prefferred mode of <br> consultation. </h6>
                                    </div>
                                </div><!--end media-->
                            </div><!--end card-body-->
                        </div>
                        <div class="col-md-2">
                            <img src="assets/images/docter.webp" alt="user" class="rounded-circle thumb-lg">
                        </div>
                        <div class="col-md-2">
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-3">
                    <div class="mb-3  ml-3 mt-4 text-right" >
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">         
                        <a type="button" class="text-danger" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-sm">Edit</a>
                        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title mt-0" id="mySmallModalLabel">Edit Patient</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body text-left">
                                     <div class="mb-3" >
                                        <label for="exampleFormControlInput1" class="form-label pt-3">Patient Name</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Patient Name">      
                                    </div>
                                    <div class="mb-3 mt-4" >
                                        <label for="exampleFormControlInput1" class="form-label pt-3">Age</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Age">      
                                    </div>
                                    <div class="mb-3 mt-4" >
                                        <label for="exampleFormControlInput1" class="form-label pt-3">Gender</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Gender</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                        </select>      
                                    </div>
                                    <button type="button" class="btn btn-danger col-12 mt-4"> Submit </button>      

                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </div>
                <div class="mb-3  ml-3 mt-4" >
                  <a href="#" class=" text-danger pb-3 ">+ Add New Member</a>  <br>
                  <label for="exampleFormControlInput1" class="form-label pt-3">Patient phone number</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">      
              </div>
              <div class="mb-3  ml-3 mt-5" >
                <p> What isn your prefferred mode of <br> consultation? </p>
                <div class="btn-group btn-group-toggle mb-4" data-toggle="buttons">
                    <label class="btn btn-outline-danger">
                        <input type="radio" name="options" id="option1" checked=""> Vedio
                    </label>
                    <label class="btn btn-outline-danger">
                        <input type="radio" name="options" id="option2"> Audio
                    </label>
                    <label class="btn btn-outline-danger active">
                        <input type="radio" name="options" id="option3"> Chat
                    </label>
                </div> 
            </div>
        </div>
        <div class="col-md-7">
        </div>

    </div>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-7  text-right mt-5">
        <a type="button" class="btn btn-danger waves-effect waves-light pl-5 pr-5" href="symtoms.html" >Procced</a>
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