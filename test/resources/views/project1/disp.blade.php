<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script

    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"
    integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer">

</script>
</head>
<body>
    <div id="cont"></div>
    <div id="tbl">
    <h1>Table</h1>
    <table id="tb" border=1 class="table">
        <tr>
            <th>id</th>
            <th>title</th>
            <th>Discription</th>
            <th>orignal name</th>
            <th>path</th>
            <th>image</th>
            <th>Delete</th>
            <th>update</th>
        </tr>
            @foreach ($views as $view)
              <tr class="tr">
                <td>{{$view->id}}</td>

                <td>{{$view->title}}</td>
                <td>{{$view->discription}}</td>
                <td>{{$view->origanal_name	}}</td>
                <td>{{$view->img_path}}</td> 
                <td><a href="{{asset('storage/'.$view->img_path)}}"><img src="{{asset('storage/'.$view->img_path)}}" height="50" width="auto"></a></td>   
                {{-- <td><div class="del" id="{{$view->id}}" style="background-color: red; border-radius:5px; padding-left:2px;"><a style="text-decoration:none; color:azure" href="{{route('task.delete',['id'=>$view->id])}}">delete</a></div></td> --}}
                {{-- <td><div class="upd" id="{{$view->id}}" style="background-color: green; border-radius:5px; padding-left:2px;"><a style="text-decoration:none; color:azure" href="{{route('task.update',['id'=>$view->id])}}">update</a></div></td> --}}

                <td><button id='{{$view->id}}' class="delete" style="background-color:red; border-radius: 5px;">Delete</button></td>
                <td><a href="{{route('task.update',['id'=>$view->id])}}"><button id='{{$view->id}}' class= "update" style="background-color: rgb(9, 243, 9); border-radius: 5px;" >update</button></a></td>
                
            </tr>
            @endforeach

    </table>
</div>
    {{-- <script src="https://cdn.datatables.net/plug-ins/1.10.20/sorting/enum.js"></script> --}}
    
    <script>
        $(document).ready(function(){
            $(".table").on('click',".delete",function(){
                // e.preventDefault(); 
                
                id=$(this).attr("id");
               mythis=this;

                console.log(id);
                $.ajax({
                    url:'/project1/delete/'+id, 
                    Type:"GET",
                    // Route::get('project1/delete/id',[PostController::class,'delete'])->name('task.delete');

                   
                success: function ()
                {
                    console.log("it Work");
                    $(mythis).closest("tr").remove();

                }

                })
            })
//update
            $(".table").on('click',".update",function(e){
                e.preventDefault(); 
                id=$(this).attr("id");
                console.log(id);
                $.ajax({
                    url:'/project1/update/'+id, 
                    Type:"GET",
                success: function (response)
                {
                    console.log("update");
                    // document.write(response)
                    $("#cont").html(response);
                    // $("#tbl").hide();

                }

                })
            })

// update after fetch the data 
            $("#cont").on('click',"#upd",function(){
                // e.preventDefault(); 
                id=$(this).attr("id");
                console.log(id);
                    $.ajax({
                        url:'/project1/edit/'+id, 
                        Type:"POSt",
                        // Route::get('project1/delete/id',[PostController::class,'delete'])->name('task.delete');
                    success: function (response)
                    {
                        // console.log("update");
                        // // $(mythis).closest("tr").remove();
                        // $("#cont").html(response);

                    }

                    })
            })
        })
    </script>
</body>
</html>