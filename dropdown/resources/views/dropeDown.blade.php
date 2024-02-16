<!DOCTYPE html>
<html>
<head>
    <title>DropDown</title>

<script

    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"
    integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer">

</script>
    <style>
        /* Style for the form container */
        .form-container {
            width: 300px;
            margin: 0 auto;
            text-align: center;
        }

        /* Style for the dropdowns */
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Select Options</h2>
        <form>
            <h4>Country</h4>
            <select name="country" id='country'>
                <option value="" disable readonly >--select country--</option>
                @foreach ($data as $item)
                    <option value="{{$item->id}}" id='{{$item->id}}'>{{$item->country_name}}</option>
                @endforeach
            </select>

            <select name="state" id='state'>
                <option value="" readonly></option>
              
            </select>

            <select name="city" id='city'>
                <option value="" readonly></option>
              
            </select>

            

            <input type="submit" value="Submit">
        </form>
    </div>
    {{$view}}
</body>
<script>
    $(document).ready(function(){
        // $('.country').change(function(){
             $(document).on("change", "#country", function () {
                var cid = $(this).val();
            // console.log(cid);
            var htm='<option value="" disable readonly >--select state--</option>';
             var url = "state/"+cid;
            //   console.log(url)
              
            fetch(url)
            .then(function (response){
                return response.json();
            })
            .then(data =>{ 
                
                data.forEach(element => {
                    htm=htm+"<option id='"+element.id+" 'value='"+element.id % 5 +"'>"+element.state_name+"</option>";
                    // $('#state').append(htm);
                });
                    $('#state').html(htm);




            $(document).on("change", "#state", function () {
            var sid = $(this).val();
            // console.log(sid);
            // console.log(cid);

            var htm='<option value="" disable readonly >--select city--</option>';
             var url = "city/"+sid+"/"+cid;
            //   console.log(url)
              
            fetch(url)
            .then(function (response){
                return response.json();
            })
            .then(data =>{ 
                
                data.forEach(element => {
                    htm=htm+"<option id="+element.id+">"+element.city_name+"</option>";
                    // $('#state').append(htm);
                });
                    $('#city').html(htm);

                console.log('success');
            })


        })

                
            })


        })



        

    })
</script>
</html>

