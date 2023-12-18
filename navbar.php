<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <div>
            <img src="data:image/jpeg;base64,<?php echo base64_encode(file_get_contents('Untitled копія.jpeg')); ?>" alt="Logo" width="100px">
        </div>
        <div class="text-center">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Diets</a>
                </li>
            </ul>
        </div>
        <div>
            <ul class="navbar-nav">
                <li class="nav-item1">
                    <a class="nav-link active" aria-current="page" href="#">Log In</a>
                </li>
                <li class="nav-item2">
                    <a class="nav-link active" aria-current="page" href="#">Sign Up</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Fr</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">En</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
