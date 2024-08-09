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
    <title>AboutView</title>
</head>

<body>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .cont {
            width: 100%;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            padding: 100px;
            /* border: 1px solid transparent; */
            box-shadow: 2px 5px 5px 2px gray;

        }

        a {
            display: inline-block
        }
    </style>
    <div class="container">
        <div class="cont">
            <img src="{{url('/images.jpg')}}" alt="" width="90%" height="350px">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Text</th>
                        <th scope="col">image</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($aboutviews as $about)
                    <tr>
                        <td>{{$about->id}}</td>
                        <td>{{$about->text}}</td>
                        <td>{{$about->image}}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            <div class="col-md-8 text-center">
                <a href=""><button class="btn btn-success btn-lg mx-5" type="submit" formaction="1klasse.html">update
                    </button></a>
                <a href=""><button class="btn btn-danger btn-lg" formaction="1klasse.html">delete
                    </button></a>


                </button></a>

            </div>
            <a href="{{route('admin')}}"><button class="btn btn-primary mt-3 ">back to dashboard</button></a>

        </div>
</body>

</html>