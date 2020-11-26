@if(session('msgadd'))
    <div id="msg" class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('msgadd') }}
    </div>
@endif

@if(session('msgupdate'))
    <div id="msg" class="alert alert-info alert-dismissible fade show" role="alert">
        {{ session('msgupdate') }}
    </div>
@endif

@if(session('msgdelete'))
    <div id="msg" class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('msgdelete') }}
    </div>
@endif
