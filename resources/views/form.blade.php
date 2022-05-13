
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>

<body>
  

   
  
  <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <div class="card-body p-md-5 text-black ">
        <form action="/create" method="post">
        @csrf
      <h4 class="mb-5 text-uppercase text-center">Student registration form</h4>

      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="form-outline">
            <input type="text" id="form3Example1m" name="firstname" class="form-control form-control-lg">
            <label class="form-label" for="form3Example1m" style="margin-left: 0px;">First name</label>
          <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 68.8px;"></div><div class="form-notch-trailing"></div></div></div>
        </div>
        <div class="col-md-6 mb-4">
          <div class="form-outline">
            <input type="text" id="form3Example1n" name="lastname" class="form-control form-control-lg">
            <label class="form-label" for="form3Example1n" style="margin-left: 0px;">Last name</label>
          <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 68px;"></div><div class="form-notch-trailing"></div></div></div>
        </div>
      </div>

      <div class="form-outline mb-4">
        <input type="text" id="form3Example8" name="address" class="form-control form-control-lg">
        <label class="form-label" for="form3Example8" style="margin-left: 0px;">Address</label>
      <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 55.2px;"></div><div class="form-notch-trailing"></div></div></div>

      <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

        <h6 class="mb-0 me-4">Gender: </h6>

        <div class="form-check form-check-inline mb-0 me-4">
          <input class="form-check-input" type="radio" name="gender" id="femaleGender" value="female">
          <label class="form-check-label" for="femaleGender">Female</label>
        </div>

        <div class="form-check form-check-inline mb-0 me-4">
          <input class="form-check-input" type="radio" name="gender" id="maleGender" value="male">
          <label class="form-check-label" for="maleGender">Male</label>
        </div>

        <div class="form-check form-check-inline mb-0">
          <input class="form-check-input" type="radio" name="gender" id="otherGender" value="other">
          <label class="form-check-label" for="otherGender">Other</label>
        </div>

      </div>

      <div class="row">
        <div class="col-md-6 mb-4">
            <div class="form-outline">
                <input type="text" id="form3Example1n" name="state" class="form-control form-control-lg">
                <label class="form-label" for="form3Example1n" style="margin-left: 0px;">State</label>
              <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 68px;"></div><div class="form-notch-trailing"></div></div></div>
         

        </div>
        <div class="col-md-6 mb-4">

            <div class="form-outline">
                <input type="text" id="form3Example1n" name="city" class="form-control form-control-lg">
                <label class="form-label" for="form3Example1n" style="margin-left: 0px;">City</label>
              <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 68px;"></div><div class="form-notch-trailing"></div></div></div>

        </div>
      </div>

      <div class="form-outline mb-4">
        <input type="text" id="form3Example90" name="pincode" class="form-control form-control-lg">
        <label class="form-label" for="form3Example90" style="margin-left: 0px;">Pincode</label>
      <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 54.4px;"></div><div class="form-notch-trailing"></div></div></div>

      <div class="form-outline mb-4">
        <input type="text" id="form3Example99" name="course" class="form-control form-control-lg">
        <label class="form-label" for="form3Example99" style="margin-left: 0px;">Course</label>
      <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 49.6px;"></div><div class="form-notch-trailing"></div></div></div>

      <div class="form-outline mb-4">
        <input type="text" id="form3Example97" name="email" class="form-control form-control-lg">
        <label class="form-label" for="form3Example97" style="margin-left: 0px;">Email ID</label>
      <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 56px;"></div><div class="form-notch-trailing"></div></div></div>

      <div class="d-flex justify-content-end pt-3">
        <button type="submit" class="btn btn-primary btn-lg ms-2">Submit form</button>
      </div>
    </form>
    </div>
    
   
 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>