<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>
<body>
{{-- showing flash message--}}
@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
        anjing
    </div>
@endif
 <h1>Contacts Us anytime</h1>

 <form action="{{route("contact")}}" method="post">
     @csrf
     <input type="text" name="name" placeholder="your name" />
     <input type="email" name="email" placeholder="your valid email" />
     <textarea name="message" placeholder="your query" rows="10" ></textarea>
     <button type="submit">submit</button>
 </form>
</body>
</html>
