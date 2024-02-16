{{-- <div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
</div> --}}
{{$data}}


<table border=2>
    <tr>
        <td>id</td>
        <td>name</td>
        <td>email</td>
    </tr>
    {{-- @foreach ($data as $item){ --}}
       <tr>
        <td>{{$data['id']}}</td>
        <td>{{$data['name']}}</td>
        <td>{{$data['email']}}</td>
        

       </tr>
    {{-- } --}}
        
    {{-- @endforeach --}}
</table>