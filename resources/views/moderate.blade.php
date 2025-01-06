<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Moderation Panel</title>
    <style>
    
    
    
         html, body {
            position: fixed;
            width: 100%;
            height: 100%;
            overflow: hidden;
            -webkit-overflow-scrolling: touch;
        }   
    
    
    
    
    
    
    
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
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
    text-align: center; /* Center the text */
    width: 100%; /* Ensure it takes full width so the text centers */
}

.header .header-text {
    text-align: center; /* Make sure text is centered */
    flex-grow: 1; /* Allow the text to take available space */
}


        .content {
            padding: 80px 20px 80px; /* Space for header and footer */
        }

        .quote-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 15px;
            margin: 10px 0;
            text-align: center; /* Center-align all text inside the card */
        }

        .quote-text {
            font-style: italic;
            font-size: 1rem;
            color: #555;
            word-wrap: break-word;
            margin-bottom: 10px;
        }

        .user-details {
            font-size: 0.9rem;
            color: #777;
            margin-bottom: 15px;
        }

        .moderation-actions {
            display: flex;
            flex-wrap: wrap;
            justify-content: center; /* Center the buttons */
            gap: 10px;
        }

        .moderation-actions button {
            flex: 1 1 calc(25% - 10px); /* Buttons adjust to 25% width */
            min-width: 100px;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease-in-out;
            text-align: center;
        }

        .moderation-actions button:hover {
            transform: scale(1.05);
        }

        .btn-approve {
            background-color: #28a745;
            color: white;
        }

        .btn-approve:hover {
            background-color: #218838;
        }

        .btn-reject {
            background-color: #dc3545;
            color: white;
        }

        .btn-reject:hover {
            background-color: #c82333;
        }

        .btn-edit {
            background-color: #ffc107;
            color: black;
        }

        .btn-edit:hover {
            background-color: #e0a800;
        }

        .btn-history {
            background-color: #6c757d;
            color: white;
        }

        .btn-history:hover {
            background-color: #5a6268;
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
            z-index: 999;
        }

        .footer-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center; /* Centers text vertically */
            font-size: 0.9rem;
        }

        .footer-item i {
            font-size: 1.5rem;
            margin-bottom: 5px;
        }

        /* Clear Search Button */
        .clear-btn {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            color: #888;
        }

        .clear-btn:hover {
            color: #333;
        }
    </style>
</head>
<body>
    
    
    
    <!-- Header -->
<div class="header">
    <span class="header-text">Moderation Panel</span>
    <i class="fas fa-sign-out-alt" title="Logout" style="cursor: pointer;"></i>
</div>


    <!-- Main Content -->
    <div class="content">
        <!-- Search Bar -->
        <div class="search-bar mb-3 p-3 bg-white shadow rounded position-relative">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search quotes or users..." id="searchInput" onkeyup="filterQuotes()">
                <button class="btn btn-primary" type="button" onclick="filterQuotes()">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            <button class="clear-btn" onclick="clearSearch()">
                <i class="fas fa-times-circle"></i>
            </button>
        </div>

        <!-- Example Quote 1 -->
        <div class="quote-card">
            <div class="quote-text">"Innovation distinguishes between a leader and a follower." - by User123</div>
            <div class="user-details">Submitted by: User123 on 2024-12-01</div>
            <div class="moderation-actions">
                <button class="btn-approve" onclick="moderateAction('approve', 'Innovation distinguishes...')">
                    <i class="fas fa-check"></i> Approve
                </button>
                <button class="btn-reject" onclick="moderateAction('reject', 'Innovation distinguishes...')">
                    <i class="fas fa-times"></i> Reject
                </button>
                <button class="btn-edit" onclick="editQuote('Innovation distinguishes...')">
                    <i class="fas fa-edit"></i> Edit
                </button>
                <button class="btn-history">
                    <i class="fas fa-history"></i> History
                </button>
            </div>
        </div>

        <!-- Example Quote 2 -->
        <div class="quote-card">
            <div class="quote-text">"Life is 10% what happens to us and 90% how we react to it." - by User456</div>
            <div class="user-details">Submitted by: User456 on 2024-12-01</div>
            <div class="moderation-actions">
                <button class="btn-approve" onclick="moderateAction('approve', 'Life is 10% what happens...')">
                    <i class="fas fa-check"></i> Approve
                </button>
                <button class="btn-reject" onclick="moderateAction('reject', 'Life is 10% what happens...')">
                    <i class="fas fa-times"></i> Reject
                </button>
                <button class="btn-edit" onclick="editQuote('Life is 10% what happens...')">
                    <i class="fas fa-edit"></i> Edit
                </button>
                <button class="btn-history">
                    <i class="fas fa-history"></i> History
                </button>
            </div>
        </div>
  
        <div class="quote-card">
            <div class="quote-text">"Life is 10% what happens to us and 90% how we react to it." - by User456</div>
            <div class="user-details">Submitted by: User456 on 2024-12-01</div>
            <div class="moderation-actions">
                <button class="btn-approve" onclick="moderateAction('approve', 'Life is 10% what happens...')">
                    <i class="fas fa-check"></i> Approve
                </button>
                <button class="btn-reject" onclick="moderateAction('reject', 'Life is 10% what happens...')">
                    <i class="fas fa-times"></i> Reject
                </button>
                <button class="btn-edit" onclick="editQuote('Life is 10% what happens...')">
                    <i class="fas fa-edit"></i> Edit
                </button>
                <button class="btn-history">
                    <i class="fas fa-history"></i> History
                </button>
            </div>
        </div>  
  
  
    </div>

    <!-- Sticky Footer -->
    <div class="footer">
        <div class="footer-item">
            <i class="fas fa-history"></i>
            <span>Pending</span>
        </div>
        <div class="footer-item">
            <i class="fas fa-users"></i>
            <span>Moderation</span>
        </div>
        <div class="footer-item">
            <i class="fas fa-trophy"></i>
            <span>Rewards</span>
        </div>
    </div>
<script>
        function moderateAction(action, quote) {
            alert(`${action.charAt(0).toUpperCase() + action.slice(1)} action performed on: "${quote}"`);
        }

        function editQuote(quote) {
            const newQuote = prompt("Edit the quote:", quote);
            if (newQuote !== null) {
                alert(`Updated quote: "${newQuote}"`);
                // Implement backend update logic here
            }
        }
        
        function filterQuotes() {
            const input = document.getElementById("searchInput").value.toLowerCase();
            const quotes = document.querySelectorAll(".quote-card");

            quotes.forEach((quote) => {
                const quoteText = quote.querySelector(".quote-text").textContent.toLowerCase();
                const userDetails = quote.querySelector(".user-details").textContent.toLowerCase();

                if (quoteText.includes(input) || userDetails.includes(input)) {
                    quote.style.display = "";
                } else {
                    quote.style.display = "none";
                }
            });
        }

        function clearSearch() {
            document.getElementById("searchInput").value = "";
            filterQuotes();
        }
    </script>
</body>
</html>
