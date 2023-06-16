
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accout teacher</title>
    <link rel="stylesheet" href="{{asset('bootstrap/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('bootstrap/vendors/base/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('bootstrap/css/style.css')}}">
</head>
<style>
  body{background: #f5f5f5}.rounded{border-radius: 1rem}.nav-pills .nav-link{color: #555}.nav-pills .nav-link.active{color: white}input[type="radio"]{margin-right: 5px}.bold{font-weight:bold}
</style>
<body>

  <div class="container py-5">
    <!-- For demo purpose -->
    <div class="row mb-4">
        <div class="col-lg-8 mx-auto text-center">
            <h1 class="display-6">ADD account teacher</h1>
        </div>
    </div> <!-- End -->
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card ">
                <div class="card-header">
                     <!-- End -->
                    <!-- Credit card form content -->
                    <div class="tab-content">
                        <!-- credit card info-->
                        <div id="credit-card" class="tab-pane fade show active pt-3">
                            <form method="POST" action="editaccounteacher1" role="form" >
                                @csrf

                                    <div class="form-group"> <label for="Username">
                                      <h6>Username</h6>
                                  </label> <input type="text" name="Username" placeholder="Enter name_class" class="form-control "> </div>
                                  <div class="form-group"> <label for="Password">
                                    <h6>Password</h6>
                                </label> <input type="password" name="Password" placeholder="Enter name_class" class="form-control "> </div>
                                <div class="form-group"> <label for="tensinhvien">
                                    <h6>Name teacher</h6>
                                </label> <select class="form-control" id="ccmonth" name="drop">
                                  
                                  <option value="" selected disabled>--Please select name giao vien--</option>
                                  @foreach($data as $row)
                                  <option value="{{ $row->ID_teacher}}">Ten giao vien:{{ $row->Name_teacher }}</option>
                               @endforeach
                              </select> </div> 

                                <div class="card-footer"> <input type="submit" class="subscribe btn btn-primary btn-block shadow-sm">  </input>
                            </form>
                        </div>
                    </div> <!-- End -->
                    <!-- Paypal info -->
                    <div id="paypal" class="tab-pane fade pt-3">
                        <h6 class="pb-2">Select your paypal account type</h6>
                        <div class="form-group "> <label class="radio-inline"> <input type="radio" name="optradio" checked> Domestic </label> <label class="radio-inline"> <input type="radio" name="optradio" class="ml-5">International </label></div>
                        <p> <button type="button" class="btn btn-primary "><i class="fab fa-paypal mr-2"></i> Log into my Paypal</button> </p>
                        <p class="text-muted"> Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order. </p>
                    </div> <!-- End -->
                    <!-- bank transfer info -->
                     <!-- End -->
                    <!-- End -->
                </div>
            </div>
        </div>
    </div>
</body>

</html>