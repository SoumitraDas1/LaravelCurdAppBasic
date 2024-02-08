<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dev Test</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="icon" type="image/x-icon" href="assets/image/logo.png">
    <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  </head>
<body style="background-color:#FDF8F0">
    <!-- header -->
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="/dashboard" class="d-inline-flex link-body-emphasis text-decoration-none">
          <img src="assets/image/logo.png" width=70 height=70 alt="logo">
        </a>
      </div>
      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#employee">Add Employee</button>
        <a class="btn btn-block  btn-success" href="logout">Logout</a>
      </div>
    </header>
  </div>
  <!-- header -->
  @if(Session::has('successmsg')) <span>{{Session::get('successmsg')}}</span>@endif


  <!-- modal start employee-->
  <div class="modal fade" id="employee" tabindex="-1" aria-labelledby="login" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="employee">Employee</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body bg-light">
            <div class="card p-3">
                <form  action="/employee" method="post" enctype="multipart/form-data">
                  {{@csrf_field()}}            
            <div class="row g-3 align-items-center" style="margin-bottom: 5px">
              <div class="col-auto">
                <label for="name" class="col-form-label">Name</label>
              </div>
              <div class="col-auto">
                <input type="text" required name="empname" id="name" class="form-control" aria-describedby="basic-addon1">
              </div>
            </div>
            <span class="text-danger">@error('empname'){{$message}} @enderror</span>
            <div class="row g-3 align-items-center" style="margin-bottom: 5px">
              <div class="col-auto">
                <label for="email" class="col-form-label">Email </label>
              </div>&nbsp;
              <div class="col-auto">
                 <input type="email" required name="email" id="email" class="form-control" aria-describedby="basic-addon1">
              </div>
            </div>
            <span class="text-danger">@error('email'){{$message}} @enderror</span>
            <div class="row g-3 align-items-center" style="margin-bottom: 5px">
              <div class="col-auto">
                <label for="gender" class="col-form-label">Gender</label>
              </div>&nbsp;
              <div class="col-auto">
                
                  <input class="form-check-input" type="radio" name="gender" value="male" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Male
                  </label>  
                  <input class="form-check-input" type="radio" name="gender" value="female" id="flexRadioDefault2">
                  <label class="form-check-label" for="flexRadioDefault2">
                    Female
                  </label>
              </div>
            </div>
            <span class="text-danger">@error('gender'){{$message}} @enderror</span>
            <div class="row g-3 align-items-center" style="margin-bottom: 5px">
              <div class="col-auto">
                <label for="address" class="col-form-label">Address</label>
              </div>&nbsp;
              <div class="col-auto">
                  <textarea name="address" class="form-control" aria-label="With textarea"></textarea>
              </div>
            </div>
            <span class="text-danger">@error('address'){{$message}} @enderror</span>
            <div class="row g-3 align-items-center" style="margin-bottom: 5px">
              <div class="col-auto">
                <label for="country" class="col-form-label">Country</label>
              </div>&nbsp;
              <div class="col-auto">
              <select name="country" id="country" class="form-select" aria-label="Default select example">
                <option value="">Select Country</option>
               @foreach($country as $country)
  
                <option value="{{$country->id}}">{{$country->country}}</option>
                @endforeach
               
              </select>
              
              </div>
            </div>
            <span class="text-danger">@error('country'){{$message}} @enderror</span>
            <div class="row g-3 align-items-center" style="margin-bottom: 5px">
              <div class="col-auto">
                <label for="state" class="col-form-label">State &nbsp; &nbsp;</label>
              </div>&nbsp;
              <div class="col-auto">
              <select name="state" id="state" class="form-select" aria-label="Default select example">
                <option selected>Select State</option>
                
              </select>
              </div>
            </div>
            <!-- <div class="row g-3 align-items-center" style="margin-bottom: 5px">
              <div class="col-auto">
                <label for="state" class="col-form-label">State</label>
              </div>&nbsp;
              <div class="col-auto">
                <input required type="text" name="state" id="state" class="form-control" aria-describedby="basic-addon1">
              </div>
            </div> -->
            <span class="text-danger">@error('state'){{$message}} @enderror</span>
            <div class="row g-3 align-items-center" style="margin-bottom: 5px">
              <div class="col-auto">
                <label for="file" class="col-form-label">UploadFile</label>
              </div>&nbsp;
              
              <input type="file" accept="image/x-png" required name="file" id="file" class="form-control" aria-describedby="basic-addon1" >
              
            </div>
          </div>
          <span class="text-danger">@error('file'){{$message}} @enderror</span>
		  </div>
            <div class="modal-footer">
              <input type="submit" name="submit" class="btn btn-primary m-2" value="submit" aria-label="Password" aria-describedby="basic-addon1">
            </div>
                </form>
          
          
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div> -->
        </div>
      </div>
    </div>
  <!-- modal end employee -->@php
  $emp = DB::table('employees')->where('userid', Session::get('loginId') )->get();
  @endphp
  <section style="padding:5%">
  <div>
<table class="shadow table table-primary table-striped table-hover " style="width:100%; height:100%;" id="data">
<tr style="text-align:center">
	<th >Name</th>
    <th>Email</th>
    <th>Gender</th>
    <th>Country</th>
	<th>State</th>
	<th>Uploadded file</th>
  <th>Action</th>
  </tr>
  @foreach ($emp as $employee)
<tr style=" text-align:center">
<td>{{$employee->empname}}</td>
<td>{{$employee->email}}</td>
<td>{{$employee->gender}}</td>
<td>{{$employee->country}}</td>
<td>{{$employee->state}}</td>
<td><img src="{{$employee->image}}" alt="logo" width=40px height=40px></td>
<td ><button type="button" class="btn btn-sm btn-secondary"  data-bs-toggle="modal" data-bs-target="#update">Update</button> <a class="btn btn-sm bg-danger text-white" href="{{route('delete', $employee->id )}}">Delete</a></td>  
</tr>

  <!-- modal start employee-->
  <div class="modal fade" id="update" tabindex="-1" aria-labelledby="update" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="employee">Employee</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body bg-light">
            <div class="card p-3">
                <form  action="/update" method="post" enctype="multipart/form-data">
                  {{@csrf_field()}}  
                  <input type="text" name="id" hidden value="{{$employee->id}}">          
            <div class="row g-3 align-items-center" style="margin-bottom: 5px">
              <div class="col-auto">
                <label for="name" class="col-form-label">Name</label>
              </div>
              <div class="col-auto">
                <input type="text" required value="{{$employee->empname}}" name="empname" id="name" class="form-control" aria-describedby="basic-addon1">
              </div>
            </div>
            <span class="text-danger">@error('empname'){{$message}} @enderror</span>
            <div class="row g-3 align-items-center" style="margin-bottom: 5px">
              <div class="col-auto">
                <label for="email" class="col-form-label">Email </label>
              </div>&nbsp;
              <div class="col-auto">
                 <input type="email" required value="{{$employee->email}}" name="email" id="email" class="form-control" aria-describedby="basic-addon1">
              </div>
            </div>
            <span class="text-danger">@error('email'){{$message}} @enderror</span>
            <div class="row g-3 align-items-center" style="margin-bottom: 5px">
              <div class="col-auto">
                <label for="gender" class="col-form-label">Gender</label>
              </div>&nbsp;
              <div class="col-auto">
                
                  <input class="form-check-input" type="radio" name="gender" value="male" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Male
                  </label>  
                  <input class="form-check-input" type="radio" name="gender" value="female" id="flexRadioDefault2">
                  <label class="form-check-label" for="flexRadioDefault2">
                    Female
                  </label>
              </div>
            </div>
            <span class="text-danger">@error('gender'){{$message}} @enderror</span>
            <div class="row g-3 align-items-center" style="margin-bottom: 5px">
              <div class="col-auto">
                <label for="address" class="col-form-label">Address</label>
              </div>&nbsp;
              <div class="col-auto">
                  <textarea name="address" class="form-control" aria-label="With textarea">{{$employee->address}}</textarea>
              </div>
            </div>
            <span class="text-danger">@error('address'){{$message}} @enderror</span>
            <div class="row g-3 align-items-center" style="margin-bottom: 5px">
              <div class="col-auto">
                <label for="email" class="col-form-label">Country</label>
              </div>&nbsp;
              <div class="col-auto">
              <select name="country" class="form-select" aria-label="Default select example">
              <option selected>{{$employee->country}}</option>
                <option value="India">India</option>
                <option value="USA">USA</option>
                <option value="UK">UK</option>
                <option value="PAK">PAK</option>
              </select>
              </div>
            </div>
            <span class="text-danger">@error('country'){{$message}} @enderror</span>
            <div class="row g-3 align-items-center" style="margin-bottom: 5px">
              <div class="col-auto">
                <label for="state" class="col-form-label">State</label>
              </div>&nbsp;
              <div class="col-auto">
                <input required type="text" value="{{$employee->state}}" name="state" id="state" class="form-control" aria-describedby="basic-addon1">
              </div>
            </div>
            <span class="text-danger">@error('state'){{$message}} @enderror</span>
            <div class="row g-3 align-items-center" style="margin-bottom: 5px">
              <div class="col-auto">
                <label for="file" class="col-form-label">UploadFile</label>
              </div>&nbsp;
              
              <input type="file" accept="image/x-png" required name="file" id="file" class="form-control" aria-describedby="basic-addon1" >
              
            </div>
          </div>
          <span class="text-danger">@error('file'){{$message}} @enderror</span>
		  </div>
            <div class="modal-footer">
              <input type="submit" name="update" class="btn btn-primary m-2" value="update" aria-label="Password" aria-describedby="basic-addon1">
            </div>
                </form>
          
          
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div> -->
        </div>
      </div>
    </div>
  <!-- modal end update -->
  @endforeach
  
</table>

</div>
  </section>
  
    <script type="text/javascript">
    jQuery(document).ready(function(){
      jQuery('#country').change(function(){
        let cid = jQuery(this).val();
        jQuery.ajax({
          url:'/getState',
          type:'post',
          data:'cid='+cid+'&_token={{csrf_token()}}',
          success:function(result){
            jQuery('#state').html(result)
          }
        });
      });
    });
  </script>
</body>
</html>