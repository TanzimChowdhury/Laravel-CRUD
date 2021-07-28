<h1 style="text-align: center"> Welcome </h1>
<p style="text-align: center"> To laravel learning </p>
    @if(session()->has('login'))
        <p style="text-align: center;color: blueviolet">
            {{session()->get('login')}}
        </p>
    @elseif (auth()->check())

        <p style="text-align: center;color: blueviolet">
            Welcome back. {{auth()->user()->username}}
        </p>
     @endif
