<div class="footeris">
    <p>Sistema &copy; Edvinas Valentinovičius</p>
    <a href="/"><p>Klientų sąrašas</p></a>
    <a href="/add"><p>Pridėti klientą</p></a>
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Atsijungti
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</div>
