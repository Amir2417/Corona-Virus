<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Corona Virus Results</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 mt-5 wrapper">
            @foreach ($data as $key=>$value )
            <div class="card text-center">
                <div class="card-hearder">
                    <h5>{{ $key }}</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">{{ $value }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</body>
</html>
