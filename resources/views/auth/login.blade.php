<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login & Registration</title>
  <!-- iconscut css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  <!-- css -->
  <link rel="stylesheet" href="{{asset('assets/auth/css/login.css')}}" type="text/css">
</head>

<body>
  <div class="container">
    <div class="forms">
      <div class="form login">
        <span class="title">Login</span>
        <form action="{{route('login.custom')}}" method="post">
            @csrf

            {{-- Login Failed --}}

            @if(session()->get('failed'))
            <br><div class="alert alert-failed text-danger">
                {{ session()->get('failed')}}
            </div>
            @endif

            <div class="input-field">
                <input type="text"  autocomplete="off" name="email" placeholder="Enter Your Email" required />
                <i class="uil uil-envelope icon"></i>
            </div>

            {{-- Email error --}}
            @if ($errors->has('email'))
            <br>
            <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif

            <div class="input-field">
                <input type="password" class="password" name= "password" placeholder="Enter Your Password" required />
                <i class="uil uil-lock-alt icon"></i>
            </div>

            {{-- Password Error --}}
            @if ($errors->has('password'))
            <br><span class="text-danger">{{ $errors->first('password') }}</span>
            @endif

            <div class="d-grid gap-2">
                <button class="btn btn-primary mt-3 btn-lg" type="submit">Login Now</button>
            </div>
        </form>
            <div class="login-signup">
                <span class="text">Not a member?
                <a href="{{route('register-user')}}" class="text signup-text">Signup now</a>
            </span>
        </div>
      </div>
    </div>
  </div>
</body>

</html>





