<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aboutadmin</title>
</head>

<body>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .cont {
            width: 32%;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            padding: 100px;
            /* border: 1px solid transparent; */
            box-shadow: 2px 5px 5px 2px gray;

        }
    </style>
    <div class="container">
        <div class="cont">
            <img src="{{url('/images.jpg')}}" alt="" width="270px" height="200px">
            <form class="form" action="{{route('AboutStore')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="usr">Text:</label>
                <input type="text" name="text" class="form-control" id="usr">
                <label for="img" class="pt-3">image:</label>
                <input type="file" name="image" class="form-control" id="img">
                <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-3" value="submit">Submit</button>
                </div>
        </div>

        </form>
        <a href="{{route('admin')}}"><button class="btn btn-primary mt-3">back to dashboard</button></a>

    </div>
</body>

</html>