<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings UI</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
       <style>
        /* Ensure body stretches to full viewport height */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin-bottom: 80px; /* Reserve space for the footer */
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
            justify-content: flex-start;
            align-items: center;
            padding: 10px 20px;
            z-index: 999; /* Ensure the header stays above other content */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Add shadow for effect */
        }

        .header .back-arrow {
            font-size: 1.5rem;
            cursor: pointer; /* Change cursor to indicate clickable */
        }

        /* Content container for scrolling */
        .container {
            flex-grow: 1;
            overflow-y: auto;
            padding-top: 60px; /* Space for sticky header */
        }
        
        
        .header {
    display: flex;
    justify-content: space-between; /* Push elements to the ends */
    align-items: center; /* Vertically center items */
    
}

.back-arrow {
    /* Style for the back arrow if needed */
}

.header-text {
    /* Optional styling for the span text */
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
            padding: 20px 0;
            z-index: 1000;
        }

        .footer-item {
            display: flex;               
            flex-direction: column;     
            align-items: center;        
            font-size: 1.2rem;           
        }

        .footer-item i {
            font-size: 2rem;             
            margin-bottom: 5px;          
        }
    </style>
</head>
<body>
  
  
  <!-- Sticky Header -->
<div class="header">
    <i class="fas fa-arrow-left back-arrow"></i> <!-- Back Arrow -->
    <span class="header-text">Actions Menu</span> <!-- Added Span Text -->
</div>


    <div class="container mt-1">
        <!-- Profile Section -->

        <div class="d-flex align-items-center mb-4">
            <img src="https://via.placeholder.com/80" class="rounded-circle me-3" alt="Profile Picture"><div>
    <h5 class="mb-0">
        Godsent Akpovi
        <i class="fas fa-check-circle text-primary ms-2"></i> <!-- Real Verified Badge -->
    </h5>
    <small>Can't be sleeping <i class="fas fa-face-grin-beam-sweat"></i></small>
</div>

        </div>

        <!-- Settings Options -->
        <ul class="list-group">
            <li class="list-group-item">
                <div class="d-flex align-items-start">
                    <i class="fas fa-briefcase me-3 mt-1"></i>
                    <div>
                        <span>Subscription</span>
                        <p class="text-muted mb-0 small">Disable ad, more features</p>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="d-flex align-items-start">
                    <i class="fas fa-badge-check me-3 mt-1"></i>
                    <div>
                        <span>Verified Account</span>
                        <p class="text-muted mb-0 small">Show that your profile is verified</p>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="d-flex align-items-start">
                    <i class="fas fa-key me-3 mt-1"></i>
                    <div>
                        <span>Account</span>
                        <p class="text-muted mb-0 small">Security notifications, edit acc</p>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="d-flex align-items-start">
                    <i class="fas fa-lock me-3 mt-1"></i>
                    <div>
                        <span>Privacy</span>
                        <p class="text-muted mb-0 small">Block creators, quotes type to hide</p>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="d-flex align-items-start">
                    <i class="fas fa-user-circle me-3 mt-1"></i>
                    <div>
                        <span>Profile Pic</span>
                        <p class="text-muted mb-0 small">Create, edit, profile photo</p>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="d-flex align-items-start">
                    <i class="fas fa-heart me-3 mt-1"></i>
                    <div>
                        <span>Favorites</span>
                        <p class="text-muted mb-0 small">Add, reorder, remove</p>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="d-flex align-items-start">
                    <i class="fas fa-comments me-3 mt-1"></i>
                    <div>
                        <span>Chat Settings</span>
                        <p class="text-muted mb-0 small">Unblock a user, other settings</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    
    
<div class="footer">
  <div class="footer-item">
    <i class="fa fa-home"></i>
    Home
  </div>
  <div class="footer-item">
    <i class="fa fa-search"></i>
    Search
  </div>
  <div class="footer-item">
    <i class="fa fa-book"></i>
    Mine
  </div>
</div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/js/all.min.js"></script>
</body>
</html>