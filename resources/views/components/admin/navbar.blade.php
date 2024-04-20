<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8e/Barangay.svg/1024px-Barangay.svg.png" alt="" height="50px" width="50px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto gap-2">
                <li class="nav-item">
                    <a class="nav-link active text-white" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  text-white" href="/admin">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  text-white" href="/resident">Resident</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  text-white" href="#">Zone Leader</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">check</a>
                </li>

            </ul>
            <a class="nav-link text-white" href="{{route('logout')}}">logout</a>
        </div>

    </div>

</nav>