<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    {{-- <link rel="stylesheet" href="./css/bootstrap.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
    
</head>
<body>    
            <div class="container mt-2">
                <div class="row">
                <form class="col-sm-5" id="myForm" method="post" enctype="multipart/form-data" action="{{route('project1.edit',['id'=>$post->id])}}">
                    @csrf
                    <h3 class="text-center p-2" style="color:chocolate;">
                        --edit your details--
                    </h3>
                    <div>
                        <label for="title" class="form-label">Title:</label>
                        <input type="text" class="form-control" id="title" placeholder="Title*" name="title" value="{{$post->title}}">
                        <span id="sfname"style="color: red"></span>
                    </div>
                    <div>
                        <label for="dis" class="form-label">Discription:</label>
                        <input type="text" class="form-control" id="dis" placeholder="Discription*" name="dis" value="{{$post->discription}}">
                        <span id="slname"style="color: red"></span>
                    </div>
                    <div>
                        <label for="img" class="form-label"> Image:</label>
                        <input type="file" class="form-control" id="img" placeholder="Image*" name="img">
                        <span id="semail"style="color: red"></span>
                    </div>
                       
                        <br/>
                                <div id="btn">                      
                        <button type="submit" class="btn btn-primary mt-6" id="upd">
                            Update
                        </button>
                        {{-- <button type="view" class="btn btn-primary mt-6" id="view">
                            View
                        </button> --}}
                        
                        
                    </div>
                    </div>
                </form>
            </div>
        </div>

        
</body>
</html>