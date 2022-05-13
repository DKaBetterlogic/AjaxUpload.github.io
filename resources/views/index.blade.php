<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://malsup.github.com/jquery.form.js"></script>
    <title>Upload Image in Laravel using Ajax</title>
  </head>
  <body>
        <br>
        <div class="container w-50 border rounded p-4 border-secondary">
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <div class="d-flex justify-content-center border-bottom">
            <h3 align="center">Upload Image in Laravel using Ajax</h3>
            </div>
            
            <br>
            <div class="alert" id="message" style="display: none"></div>
            <form method="post" id="upload_form" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <table class="table">
                    <tr>
                        <td width="40%"" align="right"><label>Select File for Upload</label></td>
                        <td width="30%"><input type="file" name="select_file" id="select_file"></td>
                        <td width="30%" align="left"><input type="submit" name="upload" id="upload" class="button btn btn-primary" value="Upload"></td>
                    </tr>
                    <tr>
                        <td width="40%"" align="right"></td>
                        <td width="30%"><span class="text-muted">jpg, png, gif</span></td>
                        <td width="30%" align="left"></td>
                    </tr>
                </table>
            </div>
            </form>
            <br>
            <span id="uploaded_image"></span>
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
<script>
    $(document).ready(function(){
        $('#upload_form').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url:"{{ route('ajaxupload.action') }}",
                method:"post",
                data:new FormData(this),
                dataType:'JSON',
                contentType:false,
                cache:false,
                processData: false,
                success:function(data)
                {
                    $('#message').css('display', 'block');
                    $('#message').html(data.message);
                    $('#message').addClass(data.class_name);
                    $('#uploaded_image').html(data.uploaded_image);
                }
            })
        });
    });
</script>