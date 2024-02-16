<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    
</head>
<body>
   
                <form method="POST" action="{{ url('/') }}/student">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="test" name="email" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender:- </label>
                        <input type="radio" name="gender" id="" value="Male">Male
                        <input type="radio" name="gender" id="" value="Female">Female
                        <input type="radio" name="gender" id="" value="Other">Other
                    </div>
                    <div class="form-group">
                        <label for="phoneno">Phone No</label>
                        <input type="text" name="phoneno" id="" class="form-control">
                    </div>
                    <button type="submit" name="submit" class="btn btn-success">Submit</button>
                </form>
            
 
</body>
</html>

