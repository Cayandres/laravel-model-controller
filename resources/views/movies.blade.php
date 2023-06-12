<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  @vite('resources/js/app.js')
</head>
<body>
    <div class="container">
        <div class="cards-container d-flex">
            @foreach ($movies as $movie)
            <div class="card flex-wrap" style="width: 200px">
                <div class="card-body">

                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Nationality: {{$movie->nationality}}</h6>
                    <p class="card-text">{{ $movie->vote }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</body>
</html>
