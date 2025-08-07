<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Customers Registration Form</h1>
    <form action="/register" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required> <br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required> <br>
        
        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required> <br>
        
        <button type="submit">Register</button> 
    </form>

    <p><a href="/customers">View Customer List</a></p>

</body> 
</html>