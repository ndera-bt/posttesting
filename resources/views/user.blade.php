<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    
<h1>User View</h1>
<h2>User Name {{$name}}</h2>
<ul>
<li>Name: {{$users['name']}}</li>
<li>Mail: {{$users['mail']}}</li>
<li>Phone: {{$users['phone']}}</li>
<li>DOB: {{$users['dob']}}</li>
</ul>
</body>
</html>