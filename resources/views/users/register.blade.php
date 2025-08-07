<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Register </title>
</head>
<body>
    <h1>User Register</h1>

    @if (session('success'))
    <div style="color: green;">{{ session('success') }}</div>
@endif

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="{{ route('users.register.post') }}" method="POST">
    @csrf

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required> <br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required> <br>

    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required> <br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required> <br>

    <label for="password_confirmation">Confirm Password:</label>
    <input type="password" id="password_confirmation" name="password_confirmation" required> <br>

    <button type="submit">Register</button>
</form>

    <p><a href="{{ route('login') }}">Already have an account? Login</a></p>




</body>
</html>