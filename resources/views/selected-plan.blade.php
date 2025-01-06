<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <title>Support our movement with a premium plan</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f0f0;
            color: #333;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
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
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            z-index: 999;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .header-text {
            margin-left: auto;
            font-family: Arial, sans-serif;
            font-weight: 600;
            font-size: 1.2rem;
        }
        .back-arrow {
            font-size: 1.5rem;
            cursor: pointer;
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
            padding: 10px 0;
            z-index: 1000;
        }
        .footer-item {
            text-align: center;
            font-size: 0.9rem;
            font-family: 'Poppins', sans-serif;
        }
        .footer-item i {
            font-size: 1.5rem;
            display: block;
            margin-bottom: 5px;
        }

        /* Subscription Card */
        .subscription-card {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            margin: 80px auto;
            width: 100%;
            max-width: 500px;
            color: black;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .subscription-card h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 10px;
        }
        .subscription-card h5 {
            font-family: 'Poppins', sans-serif;
            font-size: 1.2rem;
            font-weight: 600;
        }
        .subscription-card p {
            font-family: 'Roboto', sans-serif;
            font-size: 1rem;
            color: #666;
        }
        .link:hover {
            text-decoration: underline;
        }

        /* Sticky Button */
        .btn-sticky {
            position: fixed;
            bottom: 80px;
            left: 0;
            width: 100%;
            height: 50px;
            background: linear-gradient(90deg, #f5f5f5, #333, #f5f5f5);
            color: #FFD700;
            border: none;
            font-family: 'Poppins', sans-serif;
            font-size: 1.2rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background 1s ease, transform 0.2s ease;
        }
        .btn-sticky:hover {
            background: linear-gradient(90deg, white, blue, gold);
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <!-- Sticky Header -->
    <div class="header">
        <i class="fas fa-arrow-left back-arrow"></i>
        <span class="header-text">Premium Subscription</span>
    </div>

    <!-- Main Content -->
    <div class="container">
        <div class="subscription-card">
            <h1>&#8358; 30,000</h1>
            <p>Premium Subscription</p>
            <hr class="text-secondary">
            <div>
                <h5>Subscription Duration</h5>
                <p>30 Days</p>
            </div>
            <div>
                <h5>Total Amount</h5>
                <p>&#8358; 30,000.00</p>
            </div>
            <hr class="text-secondary">
            <p>Payment Method: <strong>PayPal</strong></p>
            <a href="#" class="link" data-bs-toggle="modal" data-bs-target="#instructionsModal">Click here to view payment instructions</a>
        </div>
    </div>

    <!-- Sticky Button -->
    <button class="btn btn-sticky">Pay Now</button>

    <!-- Modal -->
    <div class="modal fade" id="instructionsModal" tabindex="-1" aria-labelledby="instructionsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="instructionsModalLabel">Payment Instructions</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ol>
                        <li>Transfer the total amount of &#8358;30,000 to our bank account.</li>
                        <li>Use the following account details:</li>
                        <ul>
                            <li>Bank Name: XYZ Bank</li>
                            <li>Account Number: 1234567890</li>
                            <li>Account Name: Premium Services</li>
                        </ul>
                        <li>Once payment is made, send proof of payment to support@example.com.</li>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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