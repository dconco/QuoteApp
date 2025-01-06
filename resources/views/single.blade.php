<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quote App</title>
  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  
  <style>
  body {
    margin: 0;
  }
  .bg-image {
    background: url('https://img.freepik.com/free-photo/field-covered-greenery-surrounded-by-zebras-sunlight-blue-sky_181624-18150.jpg') center/cover no-repeat;
    height: 100vh;
    width: 100%;
    position: relative;
  }
  .overlay {
    background: rgba(0, 0, 0, 0.4);
    bottom: 0;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    z-index: 1;
    user-select: none; /* Prevents text selection */
  }
  .quote-card {
    background: white;
    border-radius: 15px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
    padding: 20px;
    position: absolute;
    top: 15%;
    left: 50%;
    transform: translateX(-50%);
    width: 90%;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    user-select: none; /* Disables selection inside quote card */
  }
  .quote-card:hover {
    transform: translateX(-50%) scale(1.05);
    box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.3);
  }
  .quote-card .heart-icon {
    position: absolute;
    top: 10px;
    right: 10px;
    color: red;
    font-size: 1.5rem;
    cursor: pointer;
  }
  .header {
    position: absolute;
    top: 10px;
    left: 10px;
    z-index: 3;
    user-select: none; /* Disables selection for header */
  }
  .header button {
    background: rgba(255, 255, 255, 0.8);
    border: none;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.3);
    cursor: pointer;
  }
  .copy-icon {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -20%);
    background: white;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3);
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    user-select: none; /* Disables selection for copy icon */
  }
  .copy-icon:hover {
    transform: translate(-50%, -20%) scale(1.1);
    box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.4);
  }
  .footer-icons {
    position: fixed;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 15px;
    z-index: 2;
    user-select: none; /* Prevents selection for footer icons */
  }
  .footer-icons button {
    font-size: 1.2rem;
  }
</style>
  
</head>
<body>
  <div class="bg-image">
    <!-- Header Back Button -->
    <div class="header">
      <button onclick="goBack()">
        <i class="bi bi-arrow-left"></i>
      </button>
    </div>

    <div class="overlay">
      <!-- Quote Div -->
      <div class="quote-card text-center">
        <div class="heart-icon">
          ♥
        </div>
        <h5>#1</h5>
        <p class="mb-0">
          Don’t be so quick to judge someone. After all, you only see what they
          choose to show you.
        </p>
      </div>

      <!-- Copy Button -->
      <div class="copy-icon" onclick="copyQuote()">
        <i class="bi bi-clipboard"></i>
      </div>
    </div>
  </div>

  <!-- Footer Icons -->
  <div class="footer-icons">
    <button class="btn btn-outline-secondary">
      <i class="bi bi-arrow-left"></i> Previous
    </button>
    <button class="btn btn-outline-secondary">
      <i class="bi bi-shuffle"></i> Random
    </button>
    <button class="btn btn-outline-secondary">
      Next <i class="bi bi-arrow-right"></i>
    </button>
  </div>

  <!-- Bootstrap JS Bundle -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  ></script>
  <!-- Bootstrap Icons -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"
    rel="stylesheet"
  />

  <!-- JavaScript -->
  <script>
    function goBack() {
      alert('Back button clicked!');
      // Implement back navigation here
    }

    function copyQuote() {
  const quote = "Don’t be so quick to judge someone. After all, you only see what they choose to show you.";
  navigator.clipboard.writeText(quote).then(() => {
    alert('Quote copied to clipboard!');
  });
}
  </script>
</body>
</html>