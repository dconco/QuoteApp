@extends('layout.app')

@section('title', 'Select Payment Method')

@section('style')
   <style>
      body {
         font-family: 'Roboto', sans-serif;
         background-color: #f0f0f0;
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
         font-family: 'Poppins', sans-serif;
         font-weight: 600;
         font-size: 1.2rem;
      }
      .back-arrow {
         font-size: 1.5rem;
         cursor: pointer;
      }

      .container {
         margin-top: 80px;
         text-align: center;
      }
      .container h1 {
         font-family: Arial, sans-serif;
         font-size: 1.8rem;
         color: #333;
         margin-bottom: 20px;
      }

      .payment-methods {
         display: flex;
         flex-wrap: wrap;
         justify-content: center;
         gap: 20px;
      }
      .payment-method {
         background-color: white;
         border-radius: 8px;
         box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
         width: 150px;
         height: 150px;
         display: flex;
         flex-direction: column;
         align-items: center;
         justify-content: center;
         cursor: pointer;
         transition: transform 0.2s ease, box-shadow 0.2s ease;
      }
      .payment-method:hover {
         transform: scale(1.05);
         box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
      }
      .payment-method i {
         font-size: 2.5rem;
         color: #555;
         margin-bottom: 10px;
      }
      .payment-method span {
         font-family: 'Poppins', sans-serif;
         font-size: 1rem;
         font-weight: 500;
         color: #333;
      }

      .btn-back {
         margin-top: 30px;
         background-color: #333;
         color: white;
         font-family: 'Poppins', sans-serif;
         font-size: 1rem;
         font-weight: 600;
         padding: 10px 20px;
         border: none;
         border-radius: 5px;
         cursor: pointer;
         transition: background-color 0.3s ease;
      }
      .btn-back:hover {
         background-color: #555;
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
   <!-- Main Content -->
   <div class="container">
      <h1>Choose A Preferred Payment Method</h1>
      <div class="payment-methods">
         <div class="payment-method" onclick="alert('Bank Transfer Selected')">
            <i class="fas fa-university"></i>
            <span>Flupay</span>
         </div>
         <div class="payment-method" onclick="alert('Credit Card Selected')">
            <i class="fas fa-credit-card"></i>
            <span>Stripe</span>
         </div>
         <div class="payment-method" onclick="alert(' Selected')">
            <i class="fab fa-paypal"></i>
            <span>PayPal</span>
         </div>
         <div class="payment-method" onclick="alert('Cryptocurrency Selected')">
            <i class="fab fa-bitcoin"></i>
            <span>Binance</span>
         </div>
      </div>
      <button class="btn-back" onclick="alert('Go back to the previous page')">Manual Transfer</button>
   </div>
@endsection