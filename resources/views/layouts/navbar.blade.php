{{--  navbar menjadi suatu componen  --}}
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">SayonaraDev</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
                <a class="nav-link" href="{{ url('/about') }}">About</a>
            </div>
        </div>
    </div>
</nav>
