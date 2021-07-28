<h1 style="text-align: center">Welcome, Please Sign up</h1>

<form style="text-align: center"
      method="POST"
      action="/register"
>
    @csrf
    <label for="fname">Username</label>
    <br>
    <input type="text" id="username" name="username" value="{{old('username')}}">
    <br>
    <label for="email">email</label>
    <br>
    <input type="text" id="email" name="email"  value="{{old('email')}}">
    <br>
    <label for="pass">Password</label>
    <br>
    <input type="password" id="password" name="password">
    <br>
    <p>Please choose user type</p>
     <input type="radio" id="admin" name="user_type" value="Admin">
     <label for="admin">Admin</label>

     <input type="radio" id="regular" name="user_type" value="Regular">
     <label for="regular">Regular</label><br>
    <br>
    <button  type="submit">Submit</button>
    <br>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color:red;padding-left: 0;list-style-position: inside;" >{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</form>
