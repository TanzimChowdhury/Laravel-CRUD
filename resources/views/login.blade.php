@if (session()->has("success"))
    <h1 style="text-align: center"> {{session()->get("success")}} </h1>
@else
    <h1 style="text-align: center"> Login </h1>
@endif


<form style="text-align: center"
      method="POST"
      action="/login"
>
    @csrf
    <label for="fname">Username</label>
    <input type="text" id="username" name="username" value="{{old('username')}}">
    <br>

    <label for="pass">Password</label>
    <input type="password" id="password" name="password"">
    <br>
    <button  type="submit">Submit</button>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul >
                @foreach ($errors->all() as $error)
                    <li style="color:red;padding-left: 0;list-style-position: inside;" >{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</form>
