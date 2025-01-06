<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Philosophers List</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <style>
    /* Basic Styles */
    body {
      margin: 0;
      padding-top: 80px;
      /* Adjust for fixed header height */
      padding-bottom: 50px;
      /* Adjust for fixed footer height */
      font-family: Arial, sans-serif;
    }

    .header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1000;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
      background-color: white;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .search-box {
      flex-grow: 1;
      margin: 0 15px;
      position: relative;
    }

    .search-box input {
      width: 100%;
      padding: 8px 15px;
      border: 1px solid #ddd;
      border-radius: 20px;
      outline: none;
      transition: all 0.3s;
    }

    .search-box input:focus {
      border-color: #7fbfff;
      box-shadow: 0 0 5px rgba(127, 191, 255, 0.7);
    }

    .search-box i {
      position: absolute;
      top: 50%;
      right: 15px;
      transform: translateY(-50%);
      color: #999;
      pointer-events: none;
    }

    .footer {
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      z-index: 1000;
      background: white;
      box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
      padding: 10px 0;
      display: flex;
      justify-content: space-around;
      align-items: center;
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

    .bg-gradient {
      min-height: 100vh;
      padding: 20px;
    }

    .philosopher-card {
      border: 1px solid #ddd;
      border-radius: 10px;
      margin-bottom: 15px;
      padding: 10px;
      display: flex;
      align-items: center;
      background: white;
    }

    .philosopher-card img {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      margin-right: 15px;
    }

    .badge-custom {
      font-size: 0.9rem;
      padding: 5px 10px;
      border-radius: 5px;
    }

    .badge-modern {
      background-color: #7fbfff;
      color: white;
    }
    .badge-medieval {
      background-color: #94f394;
      color: black;
    }
    .badge-reason {
      background-color: #ff8dff;
      color: white;
    }
    .badge-enlightenment {
      background-color: #ffd27f;
      color: black;
    }
    .badge-socratic {
      background-color: #ffcb85;
      color: black;
    }
    .badge-hellenistic {
      background-color: #ff8e8e;
      color: white;
    }
  </style>
</head>
<body>
  <!-- Header -->
  <div class="header">
    <!-- Back Arrow -->
    <span class="icon text-black me-3" style="font-size: 1.5rem; cursor: pointer;">
      <i class="fas fa-arrow-left"></i>
    </span>

    <!-- Search Box -->
    <div class="search-box">
      <input type="text" placeholder="Search philosophers...">
      <i class="fas fa-search"></i>
    </div>

    <!-- Icons -->
    <div class="header-icons">

      <span class="icon text-black ms-3">➕</span>
    </div>
  </div>
  
  <h1 class="text-center">All Hosted Authors</h1>

  <!-- Main Content -->
  <div class="bg-gradient">
    <div class="container-fluid mt-1">
      <!-- Aristotle -->
      <div class="philosopher-card">
        <img src="https://via.placeholder.com/60" alt="Aristotle">
        <div>
          <h5>Aristotle</h5>
          <p class="mb-1">He is a blablabla blanket from black nation</p>
          <span class="badge badge-custom badge-socratic">dead</span>
        </div>
      </div>
            <div class="philosopher-card">
        <img src="https://via.placeholder.com/60" alt="Aristotle">
        <div>
          <h5>Aristotle</h5>
          <p class="mb-1">He is a blablabla blanket from black nation</p>
          <span class="badge badge-custom badge-socratic">dead</span>
        </div>
      </div>      <div class="philosopher-card">
        <img src="https://via.placeholder.com/60" alt="Aristotle">
        <div>
          <h5>Aristotle</h5>
          <p class="mb-1">He is a blablabla blanket from black nation</p>
          <span class="badge badge-custom badge-modern">alive</span>
        </div>
      </div>      <div class="philosopher-card">
        <img src="https://via.placeholder.com/60" alt="Aristotle">
        <div>
          <h5>Aristotle</h5>
          <p class="mb-1">He is a blablabla blanket from black nation</p>
          <span class="badge badge-custom badge-modern">alive</span>
        </div>
      </div>      <div class="philosopher-card">
        <img src="https://via.placeholder.com/60" alt="Aristotle">
        <div>
          <h5>Aristotle</h5>
          <p class="mb-1">He is a blablabla blanket from black nation</p>
          <span class="badge badge-custom badge-socratic">dead</span>
        </div>
 
     </div>

      <!-- Repeat similar structure for other philosophers -->
    </div>
    
    <!-- Pagination -->
<div class="d-flex justify-content-center mt-4">
    <nav aria-label="Page navigation">
        <ul class="pagination">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>
  </div>

  <!-- Footer -->
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

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>