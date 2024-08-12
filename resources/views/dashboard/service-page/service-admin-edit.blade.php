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
    <title>service admin edit</title>
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
            <img src="{{url('/download.jpg')}}" alt="" width="270px" height="200px">
            <form action="{{route('adminServiceUpdate',$service->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">title </label>
                    <input type="text" value="{{$service->title}}" name="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">description </label>
                    <input type="text" value="{{$service->description}}" name="description" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">description </label>
                    <input type="text" value="{{$service->description}}" name="description" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Service Image</label>
                    <img style="width: 100px;height=100px;" src="{{Storage::url($service->image)}}" alt="">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Change Image</label>
                    <input type="file" name="image" id="">
                </div>
                <div class="mb-3">
                    <input type="submit" value="Update" class="btn btn-success mt-3">
                </div>
            </form>
            <a href="{{route('ourteamview-Admin')}}"><button class="btn btn-primary mt-3">back to service
                    view</button></a>

        </div>
</body>

</html>