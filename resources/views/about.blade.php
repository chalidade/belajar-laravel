<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>
    <h1>{{$name}} </h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum molestiae asperiores distinctio necessitatibus sequi rerum repudiandae et aperiam veniam similique est, excepturi accusamus, veritatis libero sed provident magni minima aut.</p>
    <p>Kelas : {{$class}}</p>
    <p>Alamat : {{$alamat ? $alamat : "-"}}</p>
    <p>Mata Pelajaran : 
        <ul>
            @foreach($mapel as $mapel)
                <li>{{$mapel}}</li>
            @endforeach
       </ul>
    </p>
</body>
</html>