<h1>User Data</h1>
<table border="2"> 
    <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Profile Photo</td>
    </tr>

@foreach($datas as $data)
    <tr>
            <td>{{$data['id']}}</td>
            <td>{{$data['first_name'].$data['last_name']}}</td>
            <td>{{$data['email']}}</td>
            <td><img src="{{$data['avatar']}}"></td>
    </tr>
    @endforeach
</table>