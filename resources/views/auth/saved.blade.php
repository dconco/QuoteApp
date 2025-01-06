@extends('layout.app')

@section('title', 'Saved Quotes')

@section('style')
   <style>
      body {
         font-family: Arial, sans-serif;
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

      .content {
         padding-top: 60px;
         padding-bottom: 60px;
      }

      .quote-card {
         background: white;
         border-radius: 8px;
         box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
         padding: 15px 50px 15px 15px; /* Leave space for the icons */
         margin: 20px 20px;
         position: relative;
         transition: all 0.3s ease-in-out; /* Smooth shadow effect */
      }

      .quote-card:hover {
         box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3); /* Elevated shadow on hover */
         transform: translateY(-5px); /* Slight lift on hover */
      }

      .quote-text {
         font-style: italic;
         font-size: 1rem;
         color: #555;
         word-wrap: break-word; /* Ensures long words wrap properly */
         text-align: center; /* Center-align the quote text */
      }

      .quote-actions {
         position: absolute;
         top: 2px;
         right: 10px;
         display: flex;
         gap: 10px; /* Space between icons */
      }

      .quote-actions i {
         font-size: 1.2rem;
         cursor: pointer;
         color: #666;
         transition: color 0.2s ease;
      }

      .quote-actions i:hover {
         color: #000; /* Highlight icons on hover */
      }
   </style>
@endsection

@section('content')
   <!-- Main Content -->
   <div class="content">
      <!-- Example Quotes -->
      <div class="quote-card">
         <div class="quote-text">"The best way to predict the future is to invent it." - by a person</div>
         <div class="quote-actions">
            <i class="fas fa-copy" title="Copy" onclick="copyToClipboard('The best way to predict the future is to invent it.')"></i>
            <i class="fas fa-trash-alt" title="Delete"></i>
         </div>
      </div>
      <div class="quote-card">
         <div class="quote-text">"Success is not final, failure is not fatal: It is the courage to continue that counts." - by someone</div>
         <div class="quote-actions">
            <i class="fas fa-copy" title="Copy" onclick="copyToClipboard('Success is not final, failure is not fatal: It is the courage to continue that counts.')"></i>
            <i class="fas fa-trash-alt" title="Delete"></i>
         </div>
      </div>
      <!-- Add more quotes dynamically -->
   </div>
@endsection

@section('script')
   <script>
      function copyToClipboard(text) {
         navigator.clipboard.writeText(text).then(() => {
            alert("Quote copied to clipboard!");
         }).catch(err => {
            alert("Failed to copy text: " + err);
         });
      }
   </script>
@endsection