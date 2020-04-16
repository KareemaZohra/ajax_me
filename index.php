<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Ajax project</title>
  </head>
  <body>
    <div id="panel">
      
    </div>
    <div class="container">
      <div class="row">
        <div class="offset-md-3 col-md-6 form">
         
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            <p id="emerr" style="background-color: red; color: white"> </p>
            
          </div>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Name">
            <p id="nerr" style="background-color: red; color: white"> </p>
          </div>
          <button type="submit" id="submit" class="btn btn-primary">Submit</button>
        
        </div>
      </div>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- **** version of jq must be updated *** -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
      $(document).ready(function(){

        $('button#submit').click(function(){
            let name = $("input#name").val();
            let email = $("input#email").val();

            if(name=='' ||  email==''){
                if( name==''){
                  $('#nerr').html("this field is required");
                }
                if( email==''){
                  $('#emerr').html("this field is required");
                }
            }
            else{
                  $.ajax({
                url : 'data.php',
                data : {myname : name , myemail : email},
                method : 'POST',
                success : function(data){
                  $('#panel').html(data);
                }
                });
            }
        });

      });
    </script>
  </body>
</html>