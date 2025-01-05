<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Activity Log</title>
    <style>
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
            text-align: center;
            width: 100%;
        }

        .content {
            padding: 80px 20px 80px;
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
            justify-content: center;
            font-size: 0.9rem;
        }

        .footer-item i {
            font-size: 1.5rem;
            margin-bottom: 5px;
        }

        .log-card {
            background: white;
            border-radius: 8px;
            padding: 15px 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .log-details {
            flex-grow: 1;
        }

        .log-details h6 {
            margin: 0;
            font-weight: bold;
            font-size: 1rem;
        }

        .log-details p {
            margin: 0;
            color: #666;
            font-size: 0.9rem;
        }

        .log-time {
            color: #888;
            font-size: 0.8rem;
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
        <h5 class="mb-3">Activity Log</h5>
        <!-- Sorting and Search -->
        <div class="d-flex justify-content-between mb-3">
            <div>
                <button class="btn btn-sm btn-outline-primary" onclick="sortLogs('all')">All</button>
                <button class="btn btn-sm btn-outline-primary" onclick="sortLogs('me')">Me</button>
                <button class="btn btn-sm btn-outline-secondary" onclick="sortLogs('others')">Others</button>
            </div>
            <div>
                <input id="searchInput" type="text" class="form-control form-control-sm" placeholder="🔍 Search logs..." onkeyup="filterLogs()">
            </div>
        </div>

        <!-- Activity Log Cards -->
        <div id="logContainer">
            <div class="log-card" data-user="me">
                <div class="log-details">
                    <h6>User Login</h6>
                    <p>You logged in successfully.</p>
                </div>
                <span class="log-time">2024-12-08 10:15 AM</span>
            </div>

            <div class="log-card" data-user="others">
                <div class="log-details">
                    <h6>Content Reviewed</h6>
                    <p>Admin <strong>moderator007</strong> reviewed content ID: <strong>12345</strong>.</p>
                </div>
                <span class="log-time">2024-12-08 10:30 AM</span>
            </div>

            <div class="log-card" data-user="me">
                <div class="log-details">
                    <h6>Content Restricted</h6>
                    <p>You restricted user <strong>user789@example.com</strong>.</p>
                </div>
                <span class="log-time">2024-12-08 11:00 AM</span>
            </div>

            <div class="log-card" data-user="others">
                <div class="log-details">
                    <h6>System Alert</h6>
                    <p>System detected a large number of login attempts from IP <strong>192.168.0.1</strong>.</p>
                </div>
                <span class="log-time">2024-12-08 11:30 AM</span>
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

    <!-- JavaScript -->
    <script>
        // Sort logs by user type
        function sortLogs(type) {
            const container = document.getElementById('logContainer');
            const logs = Array.from(container.children);

            logs.forEach(log => {
                if (type === 'all' || log.dataset.user === type) {
                    log.style.display = 'flex';
                } else {
                    log.style.display = 'none';
                }
            });
        }

        // Filter logs by search term
        function filterLogs() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const container = document.getElementById('logContainer');
            const logs = Array.from(container.children);

            logs.forEach(log => {
                const text = log.innerText.toLowerCase();
                log.style.display = text.includes(searchTerm) ? 'flex' : 'none';
            });
        }

        // Initialize with "All" logs visible
        sortLogs('all');
    </script>
</body>
</html>