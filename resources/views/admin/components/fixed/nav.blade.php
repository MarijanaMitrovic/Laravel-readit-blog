<body>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">

        @foreach($navigation as $n)
            <li><a class="nav-link" href="{{ url($n->route) }}">{{ $n->title }}</a></li>
        @endforeach
        @if(session()->has('user'))
            @if(session()->get('user')->role_name == 'admin')
                <li><a class="nav-link" href="{{ route("admin-posts") }}">Admin panel</a></li>
            @endif

            <li><a class="nav-link" href="{{ route("logout") }}">Logout</a></li>


        @endif


    </ul>
</nav>