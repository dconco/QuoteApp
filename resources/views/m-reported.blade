<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Reported Contents</title>
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

        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .report-card {
            background: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .report-header {
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin-bottom: 10px;
        }

        .report-reason {
            font-weight: bold;
            margin: 10px 0;
        }

        .report-details span {
            display: block;
            color: #666;
            font-size: 0.9rem;
        }

        /* Modal Styles */
        .modal-review {
            position: fixed;
            bottom: -50%;
            left: 0;
            width: 100%;
            
            background: white;
            box-shadow: 0 -5px 15px rgba(0, 0, 0, 0.3);
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            z-index: 1000;
            transition: all 0.3s ease-in-out;
        }

        .modal-review.active {
            bottom: 0;
        }

        .modal-header {
            padding: 10px 20px;
            border-bottom: 1px solid #ddd;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-content {
            padding: 20px;
        }

        .modal-footer {
            display: flex;
            justify-content: flex-end;
            padding: 10px 20px;
            border-top: 1px solid #ddd;
        }

        .modal-footer button {
            margin-left: 10px;
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
        <h5 class="mb-3 d-flex justify-content-between">
            <span>Reported Contents</span>
            <div>

                <button class="btn btn-sm btn-outline-danger" onclick="sortReports('quotes')">Sort by Quotes</button>
            </div>
        </h5>
        <div class="card-container" id="reportCards">
            <!-- Example Report Cards -->
            <div class="report-card" data-comments="12" data-quotes="5">
                <div class="report-header">
                    <span>Content ID: 12345</span>
                    <span class="text-muted">2024-12-08</span>
                </div>
                <div class="report-reason">Reason: Inappropriate Content</div>
                <div class="report-details">
                    <span>Reported by: user@example.com</span>
                    <span>Comments: 12</span>
                    <span>Quotes: 5</span>
                    <span>Status: Pending</span>
                </div>
                <div class="report-actions mt-3">
                    <button class="btn btn-sm btn-primary" onclick="openModal()">Review</button>
                    <button class="btn btn-sm btn-danger">Dismiss</button>
                </div>
            </div>
            <!-- Add more cards dynamically here -->
        </div>
    </div>

    <!-- Review Modal -->
    <div class="modal-review" id="reviewModal">
        <div class="modal-header">
            <h5>Review Report</h5>
            <button class="btn-close" onclick="closeModal()"></button>
        </div>
        <div class="modal-content">
            <p><strong>Reported Content:</strong></p>
            <p>This is an example of the reported content for review.</p>
            <p><strong>Reason:</strong> Inappropriate Content</p>
        </div>
        <div class="modal-footer">
            <button class="btn btn-danger">Restrict User</button>
            <button class="btn btn-secondary" onclick="closeModal()">Close</button>
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
        function openModal() {
            document.getElementById('reviewModal').classList.add('active');
        }

        function closeModal() {
            document.getElementById('reviewModal').classList.remove('active');
        }

        function sortReports(type) {
            const container = document.getElementById('reportCards');
            const cards = Array.from(container.children);

            cards.sort((a, b) => {
                const aValue = parseInt(a.dataset[type], 10);
                const bValue = parseInt(b.dataset[type], 10);
                return bValue - aValue; // Descending order
            });

            cards.forEach(card => container.appendChild(card));
        }
    </script>
</body>
</html>