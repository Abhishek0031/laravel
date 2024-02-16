@extends("layouts.app")
@section("content");
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Pannel</title>
    <script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"
    integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer">

</script>
    <style>
        table{
            border: 2px solid #000;
        }
        tr,th,td{
            /* border: 2px solid #000; */
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <table class="table table-striped" id='table'>
            <thead>

                <tr >
                    <th>Id</th>
                    <th>Manual Id</th>
                    <th>Role</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Delete</th>
                    <th>Update</th>
                    </tr>
                </thead>
                @foreach($data as $user)
                <tr>
                <td>{{$user['id']}}</td>
                <td>{{$user['m_id']}}</td>
                <td>{{$user['role']}}</td>
                <td>{{$user['name']}}</td>
                <td>{{$user['email']}}</td>
                <td><button id='{{$user["id"]}}' class="delete" style="background-color:red; border-radius: 5px;">Delete</button></td>
                <td><button id='{{$user["id"]}}' class= "update" style="background-color: rgb(9, 243, 9); border-radius: 5px;" >update</button></td>
        
                {{-- <td>
                    <img height=100 width=100 src="@isset($user->image_path) {{asset('storage/' . $user->image_path) }} @endisset" alt="profile pic">
                </td> --}}
            </tr>
            @endforeach
        </table>
    </div>

    <script>
     $(document).ready(function(){

        $("#table").on('click',".delete",function(){
                // e.preventDefault(); 
                console.log('hii')
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
     })

    </script>
</body>
</html>
@endsection