<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

   @foreach($errors->all() as $error)
          <div class = "alert alert-danger" role="alert">
              {{$error}}
          </div>
   @endforeach
   
      <form method="POST" action="/saveDetails">
          {{csrf_field()}}
                         <div class="mb-3">
                              <label class="form-label">Branch Code</label>
                              <input type="text" class="form-control" name = "branchCode">   
                          </div>
                          <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Bank Name</label>
                              <input type="text" class="form-control" name = "bankName">
                          </div>
                          <div class="mb-3">
                              <label class="form-label">Branch Name</label>
                              <input type="text" class="form-control" name = "branchName">   
                          </div>
                          <div class="mb-3">
                              <label class="form-label">Account Nimber</label>
                              <input type="text" class="form-control" name = "accountNo">   
                          </div>
                              <button type="submit" class="btn btn-primary">Add</button>
                              
      </form>
</body>
</html>