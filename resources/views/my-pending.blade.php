<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Notification Modal</title>
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

        .btn-accept {
            background-color: #28a745;
            color: white;
        }

        .btn-accept:hover {
            background-color: #218838;
        }

        .btn-decline {
            background-color: #dc3545;
            color: white;
        }

        .btn-decline:hover {
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
</head>
<body>
    <!-- Sticky Header -->
    <div class="header">
        <i class="fas fa-arrow-left back-arrow"></i>
        <span class="header-text">Page title</span>
        <i class="fas fa-bell" data-bs-toggle="modal" data-bs-target="#notificationModal" style="cursor: pointer;"></i>
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
                <button class="btn-accept" onclick="moderateAction('accept', 'Innovation distinguishes...')">
                    <i class="fas fa-check"></i> Accept
                </button>
                <button class="btn-decline" onclick="moderateAction('decline', 'Innovation distinguishes...')">
                    <i class="fas fa-times"></i> Decline
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
                <button class="btn-accept" onclick="moderateAction('accept', 'Life is 10% what happens...')">
                    <i class="fas fa-check"></i> Accept
                </button>
                <button class="btn-decline" onclick="moderateAction('decline', 'Life is 10% what happens...')">
                    <i class="fas fa-times"></i> Decline
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>