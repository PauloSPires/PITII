<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link {{ $nav == 'cad' ? 'active' : '' }}" aria-current="page"
            href="{{ route('cupcakes.index') }}">Cadastro</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ $nav == 'edit' ? 'active' : '' }}"
            href="{{ route('cupcakes.show', ['cupcake' => 1]) }}">Edição</a>
    </li>
</ul>
