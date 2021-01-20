<h1>Data list</h1>
@foreach($profiledata as $profile)

    <ul>
        <li>
        <h3>{{$profile['title']}}</h3><br>
        {{$profile['body']}}
        </li>

    </ul>


@endforeach()
