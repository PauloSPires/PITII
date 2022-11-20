@if ($errors->any())
    <div class="message-alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="error">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (\Session::has('success'))
    <div class="message-alert">
        <ul>
            @foreach (\Session::all()['_flash']['old'] as $success)
                <li class="success">{{ $success }}</li>
            @endforeach
        </ul>
    </div>
@endif
