
<div class="row">
    

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
                                        <h3 class="modal-title mt-0" id="mySmallModalLabel"><?php echo $_SESSION['fullname1'];?></h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body text-left">
                                     <div class="mb-3" >
                                        <label for="exampleFormControlInput1" class="form-label pt-3">Patient Name</label>
                                        <input type="email" class="form-control" id="fullname1" placeholder="Patient Name">      
                                    </div>
                                    <div class="mb-3 mt-4" >
                                        <label for="exampleFormControlInput1" class="form-label pt-3">Age</label>
                                        <input type="email" class="form-control" id="age1" placeholder="Age">      
                                    </div>
                                    <div class="mb-3 mt-4" >
                                        <label for="exampleFormControlInput1" class="form-label pt-3">Gender</label>
                                        <input type="email" class="form-control" id="sex1" placeholder="Gender">      
                                        <!-- <select class="form-select" aria-label="Default select example">
                                            <option selected>Gender</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                        </select> -->      
                                    </div>
                                    <button type="button" class="btn btn-danger col-12 mt-4"  onclick="UpdatePatient();"> Submit </button>      

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