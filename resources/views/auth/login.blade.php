<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Synapse login</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/logo/feviconIcon.png">


    @notifyCss
    <link rel="stylesheet" href="{{asset('assets/css/default.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
 

   <!-- Cdn styles -->
    <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
  

    <style>
        body {
            overflow: hidden;
        }
    </style>
</head>

<body>
    
    <section class="Login LoginScreen" id="LoginScreen">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="grid2">
                    <div
                        class="formSide position-relative lightBlueBg d-flex justify-content-center align-items-center">
                        <div class="loginHeader">
                            <figure>
                                <img src="https://synapse.mordorintelligence.com/assets/Synapse_logo-DGOYytuY.svg" alt="">
                            </figure>
                        </div>
                        <div class="innerContent">
                            <h4 class="lSize ">Log in to Synapse</h4>

                            <form class="LoginForm"   action="{{route('login_user')}}" method="POST"> 
                                    @csrf
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email address"  value="{{old('email')}}"
                                    required>
                                    <label for="email">Email</label>

                                </div>
                                <div class="mb-3">
                                   <input type="password" class="form-control" name="password" placeholder="Password"  required>
                                   <label for="subject">Password</label>
                                </div>

                                <button type="submit" class="btn blueBtn" >Submit</button>
                                <div class="text-center anotherWay py-2">
                                    <p class="m-0">or</p>
                                    <a href="{{route('signup')}}"> Signup Here</a>
                                </div>
                            </form>
                        </div>
                    </div>
                     <div class="imgSide">
                        <figure><img src="{{asset('assets/img/ChatGPT Image Aug 22, 2025, 12_51_25 PM.png')}}" alt=""></figure>
                    </div>
            </div>
        </div>
    </section>
 

   @include('notify::components.notify')
    @notifyJs
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</html>


