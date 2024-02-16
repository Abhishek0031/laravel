@extends('layouts.app')
@section('content')
{{-- {{$user}} --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"
    integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer">
</script>
</head>
<body>
<div class="container">

{{-- <div> --}}
   <h1>admin</h1> 
   
   {{-- {{$user}} --}}
   <div id="ref_tbl">
    <table border=2 class="table">
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>email</th>
            <th>status</th>
            <th>image</th>
            {{-- <th>phoneno</th> --}}
            <th>change</th>
            <th>delete</th>
           
            @foreach ($user as $data)
        </tr>
        <td>{{$data['id']}}</td>
            <td>{{$data['name']}}</td>
            <td>{{$data['email']}}</td>
            <td class="sts" id="{{$data['id']}}">{{$data['status']}}</td>
            <td><a href="{{asset('storage/'.$data->image)}}"><img src="{{asset('storage/'.$data->image)}}" height="50" width="50"></a></td>
            <td><select name="status" class="status">
                <option value="" disabled selected>Choose status</option>
                <option value="Active" id="{{$data['id']}}">Active</option>
                <option value="Inactive" id="{{$data['id']}}">Inactive</option>
            </select>
        @csrf</td>
        <td><button id='{{$data->id}}' class="delete" style="background-color:red; border-radius: 5px;">Delete</button></td>
        {{-- <td><button id='{{$data->id}}' class= "update" style="background-color: rgb(9, 243, 9); border-radius: 5px;" >update</button></td> --}}
        </tr>
            @endforeach
    </table>
   </div>
</div>
<div id="forget" style="margin-left: 150px"><a href="{{route('admin.reset')}}">reset password</a></div>
   <script>
    // $(document).ready(function(){
    //  $('.status').change(function(){
    //  let status =   $(this).find(":selected").val();
    //  let id = $(this).find(":selected").attr('id');
    //  obj1={"id":id,"status":status};
    //         console.log(obj1);
    //         console.log(status);
    //         // $obj = json_encode($obj1);
    //         $.ajax({
    //             url:"/change/"+id+"/"+status,
    //             type:"GET",
    //             // data:obj,
    //             // dataType:"json",
    //             success:function(response){
    //                 console.log(response);
    //                 $("ref_tbl").html(response);    
    //             }
    //         })
    //     })
    // })
    $(document).ready(function(){
    $('.status').change(function(){
        let status = $(this).find(":selected").val();
        let id = $(this).find(":selected").attr('id');
        let obj1 = {"id": id, "status": status};
        var currentRow = $(this).closest('tr'); // Find the closest table row
        var statusTd = currentRow.find("#sts"); // Find the status element within the current row
        var currentStatus = statusTd.text();
        var newStatus = currentStatus === 'active' ? 'inactive' : 'active';
        // console.log(obj1);
        // console.log(status);
        $.ajax({
            url: "/change/"+id+"/"+status,
            type: "POST", // Change to POST
            data: obj1, // Send data as JSON
                dataType: "json", // Expect JSON response
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Add CSRF token for Laravel
                },  
            success: function(response){
                // console.log(response);
              console.log(response.newStatus)
                statusTd.text(response.newStatus)
                
               var stRow = currentRow.find(".sts"); // Find the status element within the current row
               var currentStatus = stRow.text(response.newStatus);
               
                // $('.sts').text(response.newStatus)
            },
        });
    });

//delete
   
            $(".table").on('click',".delete",function(){
                // e.preventDefault(); 
                
                id=$(this).attr("id");
               mythis=this;

                console.log(id);
                $.ajax({
                    url:'/delete/'+id, 
                    Type:"GET",
                success: function (response)
                {
                    console.log(response)
                    // console.log("it Work");
                    $(mythis).closest("tr").remove();
                }

                })
                })
});

</script>
</body>
</html>
@endsection
