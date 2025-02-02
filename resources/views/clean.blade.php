<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="clearport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Cleaner UI</title>
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

        .card {
            background-color: white;
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin: 20px;
            padding: 20px;
        }

        .title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #000;
        }

        .subtitle {
            font-size: 1rem;
            color: #6c757d;
            margin-bottom: 15px;
        }

        .btn-clear {
            color: white;
            background-color: #28a745;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
        }

        .btn-clear:hover {
            background-color: #218838;
        }

        .info {
            color: #28a745;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- Sticky Header -->
    <div class="header">
        <i class="fas fa-arrow-left back-arrow"></i>
        <span class="header-text">Page Title</span>
        <i class="fas fa-bell" data-bs-toggle="modal" data-bs-target="#notificationModal" style="cursor: pointer;"></i>
    </div>

    <!-- Main Content -->
    <div class="content" style="padding-top: 60px; padding-bottom: 60px;">
   
   
        <div class="card">
            <h1 class="title">7.8 MB Found</h1>
            <p class="subtitle">Clean cache and free up space on your device</p>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <p class="mb-0">Clean up unnecessary caches</p>
                    <span class="info">Cache heavier than 1mb would be cleared</span>
                </div>
                <button class="btn-clear">Clear</button>
            </div>
            <hr>
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <p class="mb-0">Clear all pending quotes</p>
                    <span class="info">20 current pending quotes would be permanently declined and deleted
                    </span>
                </div>
                <button class="btn-clear">clear</button>
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
                    <p>Left blank</p>
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