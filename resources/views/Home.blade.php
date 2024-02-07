 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Landing page</title>
     <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
     <link rel="stylesheet" href="{{asset('cssfiles/home.css')}}">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
 </head>
 <body>
     <div id="bg">
         </div>
     <div id="main">
         
         <div id="logo">Logo</div>
         <nav>
             <ul>
                 <a href="/">Home</a>
                 <a href="/groups">Groups</a>
                 <a href="/knowladge">Knowladge</a>
                 <a href="/debate">Debate</a>
             </ul>
         </nav>
         <div id="sign-nav">
             <div id="signin">
                 <a href="/login">Login</a>
             </div>
             <div id="signup">
                 <a href="/login">Sign up</a>
             </div>
         </div>
 
         <div id="main-content">
                <div id="big-title">
                  <h1>My main title</h1>
                  
                </div>
                <div id="desc">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Eligendi recusandae necessitatibus autem qui possimus officia
                     laudantium commodi enim adipisci rem dolorum laboriosam, 
                     iure ratione harum? Fuga distinctio deleniti enim eos! </p>
                 </div>
                 <div class="btn">
                     Get started
                 </div>
         </div>
         {{-- <div id="social-icons">
         
                 <img src="assets/google.png" alt="G" height="36" width="36">
                 <img src="assets/facebook.png" alt="f" height="36" width="36">
                 <img src="assets/instagram.png" alt="i" height="36" width="36">
                 <img src="assets/twitter.png" alt="t" height="36" width="36">
                 <img src="assets/linkedin.png" alt="l" height="36" width="36">
     
             </div> --}}
 
         
         
     </div>
 {{-- for the footer part --}}
 <footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>company</h4>
                <ul>
                    <li><a href="#">about us</a></li>
                    <li><a href="#">our services</a></li>
                    <li><a href="#">privacy policy</a></li>
                    <li><a href="#">affiliate program</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>get help</h4>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">shipping</a></li>
                    <li><a href="#">returns</a></li>
                    <li><a href="#">order status</a></li>
                    <li><a href="#">payment options</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>online shop</h4>
                <ul>
                    <li><a href="#">watch</a></li>
                    <li><a href="#">bag</a></li>
                    <li><a href="#">shoes</a></li>
                    <li><a href="#">dress</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>follow us</h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>   
 </body>
 </html>