<!DOCTYPE html>
<html>
 

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
    font-size: 14px;
    font-weight: 300;
    font-style: normal
}
.container{
    width: 100%;
    height: 100vh;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 7rem;
    padding: 1rem 2rem;
}
.img{
    display: flex;
    align-items: center;
    justify-content: flex-end;
    background: url(undraw_secure_login_pdn4.svg);
    z-index: 1;
}
.img img{
    width: 300px;
}
.login-container{
    display: flex;
    align-items: center;
    text-align: center;
}

form{
    width: 360px;
}

.image img{
    width: 100px;
}
form h2{
    font-size: 2.9rem;
    text-transform: uppercase;
    margin: 15px 0;
    color: #333;
}

.input-div{
    position: relative;
    display: grid;
    grid-template-columns: 7% 93%;
    margin: 25px 0;
    padding: 5px 0;
    border-bottom: 2px solid #d9d9d9;
}

.input-div::after,
.input-div::before{
    content: '';
    position: absolute;
    bottom: -2px;
    width: 0;
    height: 2px;
    background-color: darkmagenta;
    transition: .3s;
}

.input-div::after{
    right: 50%;
}

.input-div::before{
    left: 50%;
}

.input-div.focus .icon i{
    color: darkmagenta;
}

.input-div.focus div h5{
    top: -5px;
    font-size: 16px;
}

.input-div.focus::after,
.input-div.focus::before{
    width: 50%;
}

.input-div.one{
    margin-top: 0;
}

.input-div.two{
    margin-bottom: 4px;
}

.icon{
    display: flex;
    justify-content: center;
    align-items: center;
}

.icon i{
    color: #d9d9d9;
    transition: .3s;
}
.input-div > div{
    position: relative;
    height: 40px;
}

.input-div{
    font-size: 18px;
}

.input-div > div h5{
    position: absolute;
    left: 10px;
    top: 50%;
    transform: translateY(-50%);
    color: #999;
    font-size: 18px;
    text-transform: lowercase;
    transition: .3s;
}
.inputs{
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    border: none;
    outline: none;
    background: none;
    padding: 0.4rem 1rem;
    font-size: 18px;
    font-family: 'poppins', sans-serif;
    color: #555;
}
#toggle i{
    position: absolute;
    right: 5px;
    align-items: center;
    color: #555;
}

.links{
    position: relative;
    width: 100%;
    display: flex;
    flex-direction: column;
    margin-top: 10px;
}

.links.link{
    position: relative;
    width: 100%;
    display: flex;
    flex-direction: row;
    margin-top: 10px;
    margin-left: 10px;
}
.links.link a{
    margin-left: 20px;
}

a{
    right: 0;
    text-decoration: none;
    color: #999;
    font-size: 0.9rem;
    transition: .3s;
}

a:hover{
    color: darkviolet;
}
.btn{
    display: block;
    width: 100%;
    height: 50px;
    border-radius: 25px;
    margin: 1rem 0;
    font-size: 1.0rem;
    outline: none;
    border: none;
    background-image: linear-gradient(to right, darkviolet, darkviolet, darkviolet);
    cursor: pointer;
    color: #fff;
    text-transform: capitalize;
    background-size: 200%;
    transition: .5s;
}
.btn:hover{
    background-position: right;
}

@media screen and (max-width: 1050px) {
    container{
        grid-gap: 5rem;
    }
}

@media screen and (max-width: 1000px) {
    form{
        width: 290px;
    }
    form h2{
        font-size: 2.4rem;
    }
}
@media screen and (max-width: 800px){
    .img{
        display: none;
    }
    .container{
        grid-template-columns: 1fr;
    }
    .login-container{
        justify-content: center;
    }
}

@media screen and (max-width: 375px) {
    .img{
        display: none;
    }
    .container{
        grid-template-columns: 1fr;
        padding: 10px 10px;
    }
    .login-container{
        justify-content: center;
    }
}
    </style>
    <title>login</title>
</head>
<body>

  
    <div class="container">
        <div class="img">
            <img src="images/login/undraw_secure_login_pdn4.svg" alt="">
        </div>

        <div class="login-container">
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="image">
                    <img src="images/login/logo1.jpeg" alt="">
                    <h2>Welcome Back</h2>
                    <!-- Email Address -->
                    <div class="input-div one">
                        <div class="icon">
                            <i class='bx bx-envelope'></i>
                        </div>
                        <div>
                            <h5>Email</h5>
                            <input type="email" autocomplete="off" name="email" required="required" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" class="inputs" value="{{ old('email') }}" >
                            
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="input-div two">
                        <div class="icon">
                            <i class='bx bx-lock-alt'></i>
                        </div>
                        <div>
                            <h5>Password</h5>
                            <input type="password" name="password" required="required" class="inputs" id="password" required autocomplete="current-password">
                            <div id="toggle" onclick="showHide()"><i class='bx bx-show-alt'></i></div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                    </div>
                    



                    <div class="links link">
                       
                       <input id="remember_me" type="checkbox" name="remember">
                       <a href="{{ __('Remember me') }}">Remember me</a>
                  
                    </div>

                    <!-- Links -->
                    <div class="links">

                            <!-- Remember Me -->

                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                        @endif
                        <a href="{{ route('register') }}" class="links two">Do not have an account?</a>
                    </div>

                    <!-- Log in Button -->
                    <input type="submit" value="Login" class="btn">
                </div>
            </form>
        </div>

    </div>

<!-- form register -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const inputs = document.querySelectorAll('.inputs');

        function focusFunc() {
            let parent = this.parentNode.parentNode;
            parent.classList.add('focus');
        }

        function blurFunc() {
            let parent = this.parentNode.parentNode;
            if (this.value === '') {
                parent.classList.remove('focus');
            }
        }

        inputs.forEach(input => {
            input.addEventListener('focus', focusFunc);
            input.addEventListener('blur', blurFunc);
        });

        const password = document.getElementById('password');
        const toggle = document.getElementById('toggle');

        toggle.addEventListener('click', function() {
            if (password.type === 'password') {
                password.setAttribute('type', 'text');
                toggle.classList.add('hide');
            } else {
                password.setAttribute('type', 'password');
                toggle.classList.remove('hide');
            }
        });
    });
</script>


</body>