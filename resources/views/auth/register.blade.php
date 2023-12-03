<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <!-- style css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="{{asset('assets/auth/css/register.css')}}" type="text/css">  <!-- iconscut css -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
</head>

<body>
  <div class="container">
    <div class="forms">
      <div class="form login">
        <span class="title">Registration</span>
        <form action="{{route('register.custom')}}" method="post">
            @csrf
            <div class="input-field">
                <input type="text" name="name" placeholder="Enter Your Name" required />
                <i class="uil uil-user"></i>
                @if ($errors->has('name'))
                <br>
                <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>

            <div class="input-field">
                <input type="text" name="email" placeholder="Enter Your Email" required />
                <i class="uil uil-envelope icon"></i>
            </div>

            {{-- Email error --}}
            @if ($errors->has('email'))
            <br>
            <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif

            <div class="input-field">
                <input type="password" name="password" class="password" placeholder="Enter Your Password" required />
                <i class="uil uil-lock-alt icon"></i>
            </div>

            {{-- Password Error --}}
            @if ($errors->has('password'))
            <br><span class="text-danger">{{ $errors->first('password') }}</span>
            @endif

            <div class="d-grid gap-2">
                <button class="btn btn-primary mt-3 btn-lg" type="submit">Register Now</button>
            </div>
            <div class="login-signup">
                <span class="text">Have Account?
                <a href="{{route('login')}}" class="text signup-text">Login now</a>
            </span>
        </form>
      </div>
    </div>
  </div>
</body>
</html>