<h1 style="text-align: center"> Welcome </h1>
<p style="text-align: center"> To laravel learning </p>
    @if(session()->has('login') || auth()->check())
        <p style="text-align: center;color: blueviolet">
            Welcome back. {{auth()->user()->username}}
        </p>

        <form action="/logout" method="POST" style="text-align: center">
            @csrf
            <button type="submit" > Logout! </button>
        </form>

        <form action="/app_settings" method="GET" style="text-align: center">
            <button type="submit" >Admins Users Only!</button>
        </form>
    @else
        <p style="text-align: center">Please Login or Register</p>
        <form action="/login" method="GET" style="text-align: center">

            <button type="submit"> Login </button>
        </form>

        <form action="/register" method="GET" style="text-align: center">

            <button type="submit" > Register </button>
        </form>

    @endif
