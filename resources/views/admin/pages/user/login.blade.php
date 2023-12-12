<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Document </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    

<form  action="{{route('login.post')}}" method="post">
  @csrf
<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card px-5 py-5" id="form1">
                <div class="form-data" >
                    <div class="forms-inputs mb-4"> <span> Email or Username </span> 
                    <input autocomplete="off" type="text" v-model="email" name="email" placeholder="Input Your email" required>                       
                    </div>
                    <div class="forms-inputs mb-4"> <span> Password </span> 
                    <input  type="password"  name="password" placeholder="Input Your Password" required>                       
                    </div>
                    
                    <div class="mb-3"> <button type="submit" class="btn btn-dark w-100"> Login </button> </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
</body>
</html>