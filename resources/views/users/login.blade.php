<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users</title>
</head>
<body>
    <h1>Login</h1>

    {{-- Show success message --}}
    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    {{-- Show validation / login errors --}}
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('login.post') }}" method="POST">
        @csrf

        <label for="username">Username</label>
        <input type="text" id="username" name="username" value="{{ old('username') }}" required> <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required> <br>

        <button type="submit">Login</button>
    </form>

    <p>Don't have an account? <a href="{{ route('users.register') }}">Register here</a></p>

</body>
</html>
