<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <div class="container">
        <a class="navbar-brand" href="/">Tumbas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="mr-auto navbar-nav"></ul>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('produk') }}">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('kategori') }}">Kategori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('kontak') }}">Kontak</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown">
                        Toko
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ URL::to('cart') }}">Keranjang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ URL::to('datatransaksi') }}">Data Transaksi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ URL::to('toko') }}">Barang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('wishlist.index') }}">Wishlist</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
