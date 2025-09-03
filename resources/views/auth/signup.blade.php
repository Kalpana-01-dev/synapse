<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Synapse login</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/logo/feviconIcon.png">


 
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
                            <figure><img src="https://synapse.mordorintelligence.com/assets/Synapse_logo-DGOYytuY.svg" alt=""></figure>
                        </div>
                        <div class="innerContent">
                            <h4 class="lSize ">Register to Synapse</h4>

                            <form class="signup"   action="{{request()->url()}}" method="post"> 
                                    @csrf
                                     <div class="mb-3">
                                    <input type="text" class="form-control" id="name" name="name"
                                    value="{{old('name')}}"
                                    >
                                    <label for="name">Name</label>
                                        @error('name')
                            <p class="error_msg">{{$message}}</p>
                            @enderror
                                </div>

                                <div class="mb-3">
                                    <input type="email" class="form-control" id="email" name="email"
                                    value="{{old('email')}}"
                                    >
                                    <label for="email">Email</label>
                                        @error('name')
                            <p class="error_msg">{{$message}}</p>
                            @enderror
                                </div>

                                <div class="mb-3">
                                   <input type="password" class="form-control" name="password"   >
                                   <label for="subject">Password</label>
                                       @error('password')
                            <p class="error_msg">{{$message}}</p>
                            @enderror
                                </div>

                                  
                                <div class="mb-3">
                                   <input type="password" class="form-control" name="password_confirmation"   >


                                   <label for="subject">Confirm Password</label>
                                   
                                          @error('password')
                            <p class="error_msg">{{$message}}</p>
                            @enderror
                                </div>

                                <button type="submit" class="btn blueBtn" >Submit</button>
                                <div class="text-center anotherWay py-2">
                                    <p class="m-0">or</p>
                                    <a href="{{route('login')}}">Login Here</a>
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

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</html>


