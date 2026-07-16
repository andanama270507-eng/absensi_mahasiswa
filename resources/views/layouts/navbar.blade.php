<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">

    <div class="container-fluid">

        <a class="navbar-brand fw-bold" href="{{ route('dashboard') }}">
            <i class="fas fa-user-check"></i>
            Sistem Absensi Mahasiswa
        </a>

        <div class="ms-auto d-flex align-items-center">

            <span class="text-white me-3">
                <i class="fas fa-user-circle"></i>
                {{ Auth::user()->name }}
            </span>

            <form action="{{ route('logout') }}" method="POST">
                @csrf

                <button type="submit" class="btn btn-light btn-sm">
                    <i class="fas fa-sign-out-alt"></i>
                    Logout
                </button>

            </form>

        </div>

    </div>

</nav>