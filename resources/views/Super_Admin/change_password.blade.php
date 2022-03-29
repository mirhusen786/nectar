<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
</head>
<body>
    <form action="{{url('change_password')}}" method="post">
        @csrf
    <div class="form-group">
      <label for="">Old Password</label>
      <input type="password" class="form-control" name="old_password" id="" placeholder="">
    </div>
    <div class="form-group">
        <label for="">New Password</label>
        <input type="password" class="form-control" name="new_password" id="" placeholder="">
      </div>
      <div class="form-group">
        <label for="">Confirm Password</label>
        <input type="password" class="form-control" name="confirm_password" id="" placeholder="">
      </div>
      <button>submit</button>
    </form>
</body>
</html>

