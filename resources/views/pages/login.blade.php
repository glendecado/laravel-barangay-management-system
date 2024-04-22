<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="p-0 m-0">
    <form action="{{route('login')}}" method="post">
        @csrf

        <div class="d-flex border align-items-center justify-content-center" style="height: 100vh; width: 100%">
            <div class="p-5 shadow d-flex flex-column container-fluid border rounded align-items-center justify-content-center" style="width: fit-content;">
                <div class="mb-5"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8e/Barangay.svg/800px-Barangay.svg.png" alt="" width="50px" height="50px"></div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="form-floating mb-3 " style="width: 300px;">
                    <input name="email" type="text" class="form-control" id="floatingEmail" placeholder="Email" autocomplete="off">
                    <label for="floatingEmail">email</label>
                </div>
                <div class="form-floating mb-2" style="width: 300px;">
                    <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" autocomplete="off">
                    <label for="floatingPassword">Password</label>
                </div>
                <button type="submit" class="btn btn-primary  mt-3">Submit</button>

            </div>
        </div>
    </form>

</body>

</html>