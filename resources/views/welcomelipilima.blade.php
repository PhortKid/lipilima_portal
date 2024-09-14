<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <style>
        
        /* Inline styles for email compatibility */
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; }
        .container { width: 100%; max-width: 600px; margin: auto; background: #ffffff; border-radius: 8px; overflow: hidden; }
        .header { text-align: center; padding: 20px; background: #3b82f6; color: #ffffff; }
        .header img { max-width: 120px; height: auto; border-radius: 50%; border: 4px solid #ffffff; margin: 0 auto; display: block; }
        .content { padding: 20px; }
        .code-box { background: #f9f9f9; border: 1px solid #ddd; border-radius: 4px; padding: 15px; text-align: center; }
        .code { font-size: 24px; font-weight: bold; color: #333; margin: 0; }
        .instructions { font-size: 16px; color: #555; margin: 20px 0; text-align: center; }
        .button { display: block; width: 100%; max-width: 200px; margin: 20px auto; text-align: center; background-color: #3b82f6; color: #ffffff; padding: 12px 0; text-decoration: none; border-radius: 4px; font-weight: bold; }
        .footer { text-align: center; padding: 20px; font-size: 14px; color: #555555; }
    </style>
</head>
<body>

    <div class="container">
        <!-- Header -->
        <div class="header">
            <img src="https://www.lipilimatower.co.tz/assets/images/logo.jpg" alt="Your Logo">
            <h1>Registration Details</h1>
        </div>
        
        <!-- Content -->
        <div class="content">
        <p class="instructions">Your Username is : {{$user->email}} </p>
            <p class="instructions">Your Password is :</p>
            <div class="code-box">
                <p class="code">{{$password}}</p>
            </div>
         
      


            <p class="instructions">Please make sure you change the password after login .</p>
            <!-- Button to visit the website -->
            <a href="#" class="button">Login</a>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>Don't share with anyone.</p>
            <p>If you have any questions, feel free to <a href="mailto:support@yourwebsite.com" style="color: #3b82f6; text-decoration: none;">contact us</a>.</p>
        </div>
    </div>

</body>
</html>
