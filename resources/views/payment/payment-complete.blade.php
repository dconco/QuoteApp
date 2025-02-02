@extends('layout.app')

@section('title', 'Payment Success')

@section('style')
   <style>
      body {
         font-family: Arial, sans-serif;
         background-color: #f0f0f0;
         color: #333;
         margin: 0;
         padding: 20px;
         box-sizing: border-box;
         display: flex;
         justify-content: center;
         align-items: center;
         height: 100vh;
         flex-direction: column;
      }

      .success-container {
         text-align: center;
         background-color: #fff;
         padding: 40px;
         border-radius: 8px;
         box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      }

      .success-icon {
         color: #28a745;
         font-size: 3rem;
         margin-bottom: 20px;
      }

      .success-message {
         font-size: 1.2rem;
         margin-bottom: 10px;
      }

      .details {
         font-size: 1rem;
         color: #555;
      }

      /* Sticky Header */
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
         box-sizing: border-box;
      }
      .header-text {
         margin-left: auto;
      }
      .back-arrow {
         font-size: 1.5rem;
         cursor: pointer;
      }

      /* Sticky Footer */
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
         z-index: 1000;
         box-sizing: border-box;
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
   <!-- Success Page Content -->
   <div class="success-container">
      <i class="fas fa-check-circle success-icon"></i>
      <div class="success-message">Payment Completed Successfully!</div>
      <div class="details">Thank you for your subscription. Your rewards have been granted and level increased from freemium. <br>Your transaction ID is #123456789.</div>
   </div>
@endsection