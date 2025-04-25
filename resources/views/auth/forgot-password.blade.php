<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form{
            position: absolute;
            width: 40%;
            height: auto;
            border: 2px solid purple;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1rem 2rem;
            border-radius: 4px;
            background-color: #fff;
            z-index: 111;
            box-shadow: 8px 8px 10px rgba(0, 0, 0, 0.4),
            inset 3px 3px 8px rgba(0, 0, 0, 0.3);
        }

        form{
            z-index: 11;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        form img{
            margin: 1rem 0 2rem;
            position: relative;
            width: 150px;
            height: 150px; 
        }
        p{
            font-size: 18px;
            letter-spacing: 0.5px;
            margin-bottom: 1rem;
        }
        .ins{
            position: relative;
            width: 100%;
            margin: 1rem 0 1rem;
            display: flex;
            justify-content: center;
        }
        .ins input{
            position: relative;
            width: 100%;
            padding: 1rem 1.5rem;
            outline: none;
            border: 2px solid purple;
            border-radius: 4px;
            font-size: 18px;
            font-weight: 400;
            letter-spacing: 0.5px;
        }
        span{
            position: absolute;
            left: 0;
            padding: 1rem 1.5rem;
            font-size: 18px;
            font-weight: 400;
            letter-spacing: 0.5px;
            pointer-events: none;
        }
        .ins input:valid,
        .ins input:focus{
            background: #fff;
        }
        .ins input:valid~span,
        .ins input:focus~span{
            transform: translate(1.5rem, -15px);
            transition: .5s ease;
            background: #fff;
            -border: 2px solid purple;
            font-size: 14px;
            padding: 5px 10px;
            -border-radius: 8px;
        }
        .ins input[type="submit"]{
            padding: 1rem 1.5rem 1rem;
            width: fit-content;
            display: flex;
            justify-content: center;
            text-align: center;
            font-size: 16px;
            background: purple;
            color: #fff;
            cursor: pointer;
        }
        .ins input[type="submit"]:hover{
            background: rgb(116, 22, 116);
        }

        @media (max-width:780px){
          .form{
            width: 60%;
          }  
        }
        @media (max-width:600px){
          .form{
            width: 80%;
          }  
        }
        @media (max-width:420px){
            body{
                width: 100%;
                padding: 1rem 2rem;
            }
          .form{
            width: 100%;
            border: none;
          }  
        }
    </style>
</head>
<body>
   <div class="form">
    <form action="{{ route('password.email') }}" method="POST" autocomplete="off">
        @csrf
        <img src="images/login/logo1.jpeg" alt="Logo">
        <p>
            Forgot your password? No problem. Just let us know 
            your email address and we will email you a password 
            reset link that will allow you to choose a new one.
        </p>

        <!-- Session Status -->
        @if (session('status'))
            <div class="mb-4 text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <div class="ins">
            <input type="email" name="email" id="email" required="required" value="{{ old('email') }}">
            <span>Enter your email</span>
        </div>

        <!-- Email Error -->
        @if ($errors->has('email'))
            <div class="text-sm text-red-600">
                {{ $errors->first('email') }}
            </div>
        @endif

        <div class="ins">
            <input type="submit" value="Get Password">
        </div>
    </form>
</div>

</body>
</html>