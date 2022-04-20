<nav class="navbar navbar-expand-lg border border-bottom-primary border-3">
    <div class="container">
        <a class="navbar-brand" href="/"><img class="logo" src="/source/img/logo.png"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    {{-- di bawah ini memakai operator ternary, jadi jika title = home, maka tambahkan kelas active, kalau engga kasih string kosong --}}
                    <a class="nav-link" href="/">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/service">SERVICE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/joinus">JOIN US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/aboutus">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/profile">PROFILE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/MainNews">NEWS</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="hr1">
    </div>
</nav>