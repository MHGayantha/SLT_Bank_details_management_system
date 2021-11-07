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
     <div class="container">
        <div class="text-center">
            <h1>Bank Details Management</h1>
              <br>
             <div class="row">
                 <div class="col-md-12">
                     <form method="POST" acttion="/addBankDetails">
                          <button type="submit" class="btn btn-primary">Add Bank Details</button>
                     </form>
                          <br>
                          <br>
                          <table class="table table-dark">
                              <th>Id<th> 
                              <th>Branch Code<th>
                              <th>Bank Name<th>
                              <th>Branch<th>
                              <th>Account Number<th>
                            
                              @foreach($bankdetails as $details)
                              <tr>
                                  <td>{{$details->id}}<td>
                                  <td>{{$details->branch_code}}<td>
                                  <td>{{$details->bank_name}}<td>
                                  <td>{{$details->branch}}<td>
                                  <td>{{$details->account_number}}<td>
                              </tr>
                              @endforeach
                          </table>
                 <div>
             </div>
        </div>
     </div>
</body>
</html>