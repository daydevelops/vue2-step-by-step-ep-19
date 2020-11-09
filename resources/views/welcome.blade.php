<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <div id="main" class="container mt-4">
        <div class="row">
            <div class="col-8">
                @foreach ($projects as $p)
                <div class="card text-left mb-4 border-dark">
                    <div class="card-body">
                        <h4 class="card-title">{{$p->name}}</h4>
                        <p class="card-text">{{$p->description}}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-4">
                <form action="/projects" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">Description</label>
                        <input type="text" name="description" id="" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>