<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Send Email</title>
</head>
<body>
    <div class="container p-5 w-50">
        <h4>Form Send Email</h4>
        <form action="{{url('/sendemail/send')}}" method="post">
            @csrf
            <div class="form-group border-dark">
                <label for="name">Enter Your Name</label>
                <input class="form-control" type="text" name="name" id="name">
                <label for="email">Enter Your Email</label>
                <input class="form-control" type="email" name="email" id="email">
                <label for="message">Enter Your Message</label>
                <input class="form-control" type="text" name="message" id="message">

                <input class="btn btn-danger mt-3" type="submit" value="Send Email">
        </div>
        </form>
    </div>



    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
