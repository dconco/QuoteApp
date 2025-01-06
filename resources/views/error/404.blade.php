@extends('layout.app')

@section('title', 'Page Not Found')

@section('style')
   <style>
      body {
         font-family: Arial, sans-serif;
         background-color: white;
         color: #333;
         margin: 0;
         padding: 0;
         box-sizing: border-box;
      }

      .header {
         position: fixed;
         top: 0;
         left: 0;
         width: 100%;
         background-color: white;
         color: black;
         display: flex;
         justify-content: space-between;
         align-items: center;
         padding: 10px 20px;
         z-index: 999;
         box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      }

      .header-text {
         font-weight: bold;
         font-size: 1.2rem;
      }

      .back-arrow {
         font-size: 1.5rem;
         cursor: pointer;
      }

      .footer {
         position: fixed;
         bottom: 0;
         left: 0;
         width: 100%;
         background: white;
         color: black;
         display: flex;
         justify-content: space-around;
         align-items: center;
         padding: 10px 0;
         box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
      }

      .footer-item {
         text-align: center;
         font-size: 0.9rem;
      }

      .footer-item i {
         font-size: 1.5rem;
         display: block;
         margin-bottom: 5px;
      }
   </style>
@endsection
   
@section('content')
   <!-- Main Content -->
   <div class="content">
      <div class="card mx-auto" style="max-width: 600px; margin-top: 50px; text-align: center; border: none; box-shadow: none;">
         <div class="card-body">
            <img src="https://img.freepik.com/free-vector/404-error-lost-space-concept-illustration_114360-7911.jpg?w=826&t=st=20241207~exp=20241214~hmac=6dc8f1d582fdb56870c7e2e8a8c11df5fbc9bc531d13ae6ed43ebca0af5ca10b" 
                alt="404 Image" 
                style="max-width: 100%; height: auto;">
            <h1 class="card-title" style="margin-top: 20px; font-size: 36px; color: #343a40;">404 - Page Not Found</h1>
            <p class="card-text" style="font-size: 18px; color: #6c757d;">Oops! The page you're looking for doesn't exist.</p>
         </div>
      </div>
   </div>

   <div style="margin-bottom: 50px;"></div>

   <!-- Notification Modal -->
   <div class="modal fade" id="notificationModal" tabindex="-1" aria-labelledby="notificationModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-fullscreen">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="notificationModalLabel">Notifications</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <p>left blank</p>
            </div>
         </div>
      </div>
   </div>
@endsection