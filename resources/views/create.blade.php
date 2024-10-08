<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>
<body>

    @if (session('success'))
    {{session('success')}}
        
    @elseif(session('error'))
    {{session('error')}}
        
    @endif




    <div class="container">
        <div class="containerContent">
            <h3>Sign Up</h3>
               <!-- Logo Section -->
          <div class="logo-container">
            <img src="img/full.png" alt="Logo" class="logo">
        </div>
          
            <form method="POST" action="{{route('store')}}" id="signup-form">
                @csrf 
                {{-- crost site request forgerly token --}}

                <h1>Create Your Account</h1>

                <div class="inputRow">
                    <i class="fas fa-user"></i>
                    <input type="text" id="name" name="name" placeholder="Your Full Name" required />
                </div>

                <div class="inputRow">
                    <i class="fas fa-envelope"></i>
                    <input type="email" id="email" name="email" placeholder="Your Email" required />
                </div>

                <div class="inputRow">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="password" placeholder="Password" name="password" required />
                    <span id="password-eye" onclick="togglePasswordVisibility()">
                        <i id="password-icon" class="fas fa-eye"></i>
                    </span>
                </div>

                <div class="inputRow">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="confirm-password" name="confirmPassword" placeholder="Confirm Password" required />
                    
                </div>
                
                 <!-- Error message for passwords -->
                 <div class="error-message" id="password-error"><i class="fas fa-exclamation-circle"></i> Passwords do not match</div>

          

                 <div class="inputRow">
                    <input type="name" id="phone" placeholder="Phone Number" name="phone" required />
                    
                </div>
                <div class="error-message" id="phone-error"></div>
                

                

                <button type="submit">Sign Up</button>
                <p>Already have an account? <a href="login.html">Log in</a></p>
            </form>
            <p>&copy; 2024 All rights Reserved | JRonnie</p>
       </footer>
        </div>
    </div>

    <footer>


      

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="js/script.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var input = document.querySelector("#phone");
            var iti = window.intlTelInput(input, {
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js" // for formatting/validation
            });
        });
    </script>
</body>
</html>
