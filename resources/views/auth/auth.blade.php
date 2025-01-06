@extends('layout.app')

@section('title', 'Interactive Entertainment')

@section('style')
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
   <style>
      :root {
         --primary-bg: #333;
         --secondary-bg: #444;
         --text-color: white;
         --badge-color: #dc3545;
         --animation-speed: 3s;
      }

      body {
         background-color: var(--primary-bg);
         background-image: url('https://img.freepik.com/premium-vector/illustration-road-indonesian-state-palace_1266838-373.jpg?semt=ais_hybrid');
         background-size: cover;
         background-repeat: no-repeat;
         background-position: center;
         color: var(--text-color);
         min-height: 100vh;
         margin: 0;
         display: flex;
         align-items: center;
         justify-content: center;
         font-family: Arial, sans-serif;
      }

      .container {
         width: 100%;
         padding: 20px;
         max-width: 1200px;
      }

      .logo-container {
         text-align: center;
      }

      .logo {
         width: 150px;
         height: 40px;
         margin: 0 auto;
      }

      .main-content {
         display: flex;
         align-items: center;
         justify-content: center;
         gap: 50px;
         flex-wrap: wrap;
      }

      .phone {
         flex: 0 0 300px;
         background-color: var(--secondary-bg);
         border-radius: 30px;
         overflow: hidden;
         display: none;
      }

      .content {
         flex: 0 1 400px;
         min-width: 280px;
      }

      .typewriter-container {
         position: relative;
         min-height: 100px;
         margin: 20px 0 0 0;
         display: flex;
         align-items: flex-start;
      }

      .badge-new {
         background-color: var(--badge-color);
         color: var(--text-color);
         font-weight: bold;
         border-radius: 8px;
         padding: 2px 6px;
         font-size: 12px;
         margin-right: 8px;
         margin-top: 8px;
         flex-shrink: 0;
      }

      .typewriter-text {
         position: relative;
         flex: 1;
         color: white;
         min-height: 80px;
      }

      .typewriter {
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         font-size: clamp(18px, 4vw, 24px);
         visibility: hidden;
         opacity: 0;
         white-space: normal;
         word-wrap: break-word;
      }

      .typewriter.active {
         visibility: visible;
         opacity: 1;
      }

      .typewriter.typing::after {
         content: '||';
         animation: blink 0.7s infinite;
      }

      .form-control {
         background-color: rgba(255, 255, 255, 0.1);
         border: 2px solid transparent;
         color: white;
         margin-bottom: 15px;
         border-radius: 6px;
         background-image: linear-gradient(rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.1)), linear-gradient(45deg, rgb(0,0,0), rgb(220,53,69));
         background-origin: border-box;
         background-clip: padding-box, border-box;
         position: relative;
         transition: all 0.3s ease;
      }
      
      .form-control:focus {
         background-image: 
            linear-gradient(rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0.15)),
            linear-gradient(45deg, rgb(220,53,69), rgb(0,0,0));
         box-shadow: 0 0 15px rgba(220, 53, 69, 0.3);
         color: white;
         outline: none;
      }
      
      .form-control::placeholder {
         color: rgba(255, 255, 255, 0.6);
      }
      
      .form-control:-webkit-autofill,
      .form-control:-webkit-autofill:hover,
      .form-control:-webkit-autofill:focus {
         -webkit-text-fill-color: white;
         -webkit-box-shadow: 0 0 0px 1000px rgba(255, 255, 255, 0.1) inset;
         transition: background-color 5000s ease-in-out 0s;
      }

      @keyframes blink {
         50% { opacity: 0; }
      }

      @media (min-width: 768px) {
         .phone {
            display: block;
         }
         
         .content {
            padding: 0 20px;
         }
      }

      .img-fluid {
         width: 100%;
         height: auto;
         display: block;
      }
   </style>
@endsection

@section('content')
   <div class="container">
      <div class="main-content">
         <div class="phone">
            <img src="https://img.freepik.com/free-photo/field-covered-greenery-surrounded-by-zebras-sunlight-blue-sky_181624-18150.jpg" alt="" class="img-fluid">
         </div>
         <div class="content">
            <div class="typewriter-container">
               <span class="badge-new">NEW</span>
               <div class="typewriter-text" id="typewriter-text"></div>
            </div>

            <h2>Welcome, back! Let's get you started and in</h2>
            <div class="mt-3">
               <form method="post">
                  @csrf
                  <input type="email" name="email" class="form-control" placeholder="Email address" required>
                  <input type="password" name="password" class="form-control" placeholder="Password" required>
                  <button type="submit" class="btn btn-light btn-outline-danger w-100 mb-2">Continue</button>
                  <div class="text-center">
                     <span>or</span>
                  </div>
                  <button type="button" class="btn btn-outline-light w-100 mt-2">Recover Account</button>
               </form>
            </div>
            <p class="mt-3 text-muted small">
               By continuing, you agree to our Terms and acknowledge our Privacy Policy.
            </p>
         </div>
      </div>
   </div>
@endsection

@section('script')
   <script>
      class Typewriter {
         constructor(container, texts, options = {}) {
            this.container = container;
            this.texts = texts;
            this.currentIndex = 0;
            this.options = {
               typeSpeed: 50,
               deleteSpeed: 30,
               pauseTime: 2000,
               ...options
            };
         }

         async type(element, text) {
            let index = 0;
            element.textContent = '';
            element.classList.add('typing');
            
            while (index < text.length) {
               element.textContent += text[index];
               index++;
               await this.wait(this.options.typeSpeed);
            }
            
            await this.wait(this.options.pauseTime);
            await this.delete(element);
         }

         async delete(element) {
            let text = element.textContent;
            
            while (text.length > 0) {
               text = text.slice(0, -1);
               element.textContent = text;
               await this.wait(this.options.deleteSpeed);
            }
         }

         wait(ms) {
            return new Promise(resolve => setTimeout(resolve, ms));
         }

         async animate() {
            const current = this.texts[this.currentIndex];
            const element = document.createElement('div');
            element.classList.add('typewriter', 'active');
            this.container.innerHTML = '';
            this.container.appendChild(element);

            await this.type(element, current);
            this.currentIndex = (this.currentIndex + 1) % this.texts.length;
            this.animate();
         }

         start() {
            this.animate();
         }
      }

      document.addEventListener("DOMContentLoaded", () => {
         const texts = [
            "Discover new adventures and explore amazing quotes with friends.",
            "View status with friends worldwide and make lasting connections.",
            "Level up your skills and become a master of amazing quotes",
            "Join the quote revolution and be part of an amazing community."
         ];

         const typewriter = new Typewriter(
            document.getElementById('typewriter-text'),
            texts,
            {
               typeSpeed: 50,
               deleteSpeed: 30,
               pauseTime: 2000
            }
         );

         typewriter.start();
      });
   </script>
@endsection

@section('no-footer', '!')