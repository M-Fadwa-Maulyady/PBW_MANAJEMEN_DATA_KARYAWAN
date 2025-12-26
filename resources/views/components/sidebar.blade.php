<style>
/* SIDEBAR */
.sidebar {
    background: #111827;
    min-height: 123vh;
    padding: 20px 15px;
    color: #fff;
}

.sidebar h2 {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 20px;
}

/* MENU */
.sidebar-menu {
    list-style: none;
    padding: 0;
    margin: 0;
}

.sidebar-menu li {
    margin-bottom: 6px;
}

.sidebar-menu li a,
.logout-btn {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px 14px;
    color: #e5e7eb;
    text-decoration: none;
    border-radius: 8px;
    transition: all 0.2s ease;
    font-size: 14px;
}

/* ICON */
.sidebar-menu i {
    width: 18px;
    text-align: center;
}

/* HOVER */
.sidebar-menu li a:hover {
    background: rgba(255,255,255,0.1);
    color: #fff;
}

/* ACTIVE MENU (optional) */
.sidebar-menu li.active a {
    background: #2563eb;
    color: #fff;
}

/* MENU HEADER */
.menu-header {
    padding: 12px 14px;
    font-size: 11px;
    text-transform: uppercase;
    color: #9ca3af;
    margin-top: 15px;
    margin-bottom: 5px;
}

/* LOGOUT */
.logout-btn {
    width: 100%;
    background: rgba(239,68,68,0.15);
    border: none;
    color: #fecaca;
    cursor: pointer;
}

.logout-btn:hover {
    background: rgba(239,68,68,0.3);
    color: #fff;
}
</style>


<div class="sidebar">
    <h2>Admin Panel</h2>

    <ul class="sidebar-menu">

        <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}">
                <i class="fa-solid fa-house"></i>
                Dashboard
            </a>
        </li>

        <li class="{{ request()->routeIs('karyawan.*') ? 'active' : '' }}">
            <a href="{{ route('karyawan.index') }}">
                <i class="fa-solid fa-users"></i>
                Data Karyawan
            </a>
        </li>

        <li class="{{ request()->routeIs('jabatan.*') ? 'active' : '' }}">
            <a href="{{ route('jabatan.index') }}">
                <i class="fa-solid fa-sitemap"></i>
                Data Jabatan
            </a>
        </li>

        <li class="menu-header">LAPORAN</li>

        <li class="{{ request()->routeIs('laporan.karyawan') ? 'active' : '' }}">
            <a href="{{ route('laporan.karyawan') }}">
                <i class="fa-solid fa-file-lines"></i>
                Laporan Karyawan
            </a>
        </li>

        <li class="{{ request()->routeIs('laporan.jabatan') ? 'active' : '' }}">
            <a href="{{ route('laporan.jabatan') }}">
                <i class="fa-solid fa-chart-column"></i>
                Laporan Jabatan
            </a>
        </li>

        <li class="menu-header">INTERAKSI</li>

        <li class="{{ request()->routeIs('guestbook.*') ? 'active' : '' }}">
            <a href="{{ route('guestbook.index') }}">
                <i class="fa-solid fa-book-open"></i>
                Buku Tamu
            </a>
        </li>

        <li style="margin-top: 20px;">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="logout-btn">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    Logout
                </button>
            </form>
        </li>

    </ul>
</div>

