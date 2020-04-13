<div class="menu">
    <h3>Menü</h3>
    @auth
        <p>
            <a href="{{ route('admin') }}">Központi adminisztrációs oldal</a>
        </p>
    @endauth
    @can('view-user')
        <p>
            <a href="{{ route('user') }}">Bejelentkezett felhasználó oldal</a>
        </p>
    @endcan
    @can('view-editor')
        <p>
            <a href="{{ route('editor') }}">Tartalomszerkesztői oldal</a>
        </p>
    @endcan
    <p>
        <a href="{{ route('logout') }}">Kijelentkezés</a>
    </p>
</div>
