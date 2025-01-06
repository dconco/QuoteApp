<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
   <title>@yield('title')</title>

   @yield('style')
</head>
<body>
   <!-- Sticky Header -->
   <div class="header">
      <i class="fas fa-arrow-left back-arrow"></i>
      <span class="header-text">
         @hasSection('header-title')
            @yield('header-title')
         @else 
            @yield('title')
         @endif
      </span>
   </div>
   
   @yield('content')
   
   @hasSection('no-footer')
   @else
   <!-- Sticky Footer -->
   <div class="footer">
      <div class="footer-item">
         <i class="fas fa-home"></i>
         <span>Home</span>
      </div>
      <div class="footer-item">
         <i class="fas fa-bookmark"></i>
         <span>Saved</span>
      </div>
      <div class="footer-item">
         <i class="fas fa-user"></i>
         <span>Me</span>
      </div>
   </div>
   @endif

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
   @yield('script')
</body>
</html>