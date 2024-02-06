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
</head>
<body>
    <!-- header -->
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
          <img src="assets/image/logo.png" width=70 height=70 alt="logo">
        </a>
      </div>

      <!-- <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/" class="nav-link px-2 link-secondary">Home</a></li>
        <li><button type="button" class="btn btn-light "  data-bs-toggle="modal" data-bs-target="#addexpense">Add Expense</button></li>
        <!-- <li><a href="#" class="nav-link px-2">Pricing</a></li> -->
        <!-- <li><a href="#" class="nav-link px-2">FAQs</a></li> -->
        <!-- <li><a href="#" class="nav-link px-2">About</a></li>
      </ul> --> 

      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#employee">Add Employee</button>
      </div>
    </header>
  </div>
  <!-- header -->

  <!-- modal start employee-->
  <div class="modal fade" id="employee" tabindex="-1" aria-labelledby="login" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="employee">Employee</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="card p-3">
                <form  action="/login-user" method="post">
                  {{@csrf_field()}}            
            <div class="row g-3 align-items-center" style="margin-bottom: 5px">
              <div class="col-auto">
                <label for="name" class="col-form-label">Name</label>
              </div>
              <div class="col-auto">
                <input type="text" id="name" class="form-control" aria-describedby="basic-addon1">
              </div>
            </div>
            <div class="row g-3 align-items-center" style="margin-bottom: 5px">
              <div class="col-auto">
                <label for="email" class="col-form-label">Email </label>
              </div>&nbsp;
              <div class="col-auto">
                 <input type="email" id="email" class="form-control" aria-describedby="basic-addon1">
              </div>
            </div>
            <div class="row g-3 align-items-center" style="margin-bottom: 5px">
              <div class="col-auto">
                <label for="email" class="col-form-label">Gender</label>
              </div>&nbsp;
              <div class="col-auto">
                
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Male
                  </label>  
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                  <label class="form-check-label" for="flexRadioDefault2">
                    Female
                  </label>
              </div>
            </div>
            <div class="row g-3 align-items-center" style="margin-bottom: 5px">
              <div class="col-auto">
                <label for="email" class="col-form-label">Address</label>
              </div>&nbsp;
              <div class="col-auto">
                  <textarea class="form-control" aria-label="With textarea"></textarea>
              </div>
            </div>
            <div class="row g-3 align-items-center" style="margin-bottom: 5px">
              <div class="col-auto">
                <label for="email" class="col-form-label">Country</label>
              </div>&nbsp;
              <div class="col-auto">
              <select class="form-select" aria-label="Default select example">
                <option selected>India</option>
                <option value="1">USA</option>
                <option value="2">UK</option>
                <option value="3">PAK</option>
              </select>
              </div>
            </div>
            <div class="row g-3 align-items-center" style="margin-bottom: 5px">
              <div class="col-auto">
                <label for="email" class="col-form-label">State</label>
              </div>&nbsp;
              <div class="col-auto">
                <input type="text" id="name" class="form-control" aria-describedby="basic-addon1">
              </div>
            </div>
            <div class="row g-3 align-items-center" style="margin-bottom: 5px">
              <div class="col-auto">
                <label for="email" class="col-form-label">UploadFile</label>
              </div>&nbsp;
              <div class="col-auto">
              <input type="file" id="name" class="form-control" aria-describedby="basic-addon1">
              </div>
            </div>
          </div>
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
  <!-- modal end employee -->
  <section style="padding:5%">
  <div>
<table style="border: 2px solid black; width:100%; height:100%;" id="data">
<tr style="border: 2px solid black; text-align:center">
	<th style="border: 2px solid black;">Name</th>
    <th style="border: 2px solid black;">Email</th>
    <th style="border: 2px solid black;">Gender</th>
    <th style="border: 2px solid black;">Country</th>
	<th style="border: 2px solid black;">State</th>
	<th style="border: 2px solid black;">Uploadded file</th>
  </tr>
  <tr  style="border: 2px solid black; text-align:center">
  <td>Employee1</td>
  <td>emp@gmail.com</td>
  <td>Male</td>
  <td>India</td>
  <td>Bihar</td>
  <td></td>
  </tr>
  <tr  style="border: 2px solid black; text-align:center">
  <td>Employee1</td>
  <td>emp@gmail.com</td>
  <td>Male</td>
  <td>India</td>
  <td>Bihar</td>
  <td></td>
  </tr>
  <tr  style="border: 2px solid black; text-align:center">
  <td>Employee1</td>
  <td>emp@gmail.com</td>
  <td>Male</td>
  <td>India</td>
  <td>Bihar</td>
  <td></td>
  </tr>
  <tr  style="border: 2px solid black; text-align:center">
  <td>Employee1</td>
  <td>emp@gmail.com</td>
  <td>Male</td>
  <td>India</td>
  <td>Bihar</td>
  <td></td>
  </tr>
</table>

</div>

  </section>
</body>
</html>