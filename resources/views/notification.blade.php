<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Notification Page 📄 </title>
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

        .notification-list {
            padding-top: 60px;
            padding-bottom: 60px;
        }

        .notification-item {
            background: white;
            padding: 15px;
            margin: 10px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .notification-item:hover {
            background-color: #f8f9fa;
        }

        .notification-icon {
            font-size: 2rem;
            margin-right: 15px;
            color: #007bff;
        }

        .notification-content {
            flex-grow: 1;
        }

        .notification-title {
            font-weight: bold;
            margin: 0;
        }

        .notification-text {
            font-size: 0.9rem;
            color: #666;
        }

        .notification-date {
            font-size: 0.8rem;
            color: #aaa;
            text-align: right;
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

        .modal-action {
            text-align: center;
            padding: 15px;
        }

        .modal-action button {
            width: 80%;
        }

        .modal-date {
            font-size: 0.9rem;
            color: #aaa;
            text-align: right;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <!-- Sticky Header -->
    <div class="header">
        <i class="fas fa-arrow-left back-arrow"></i>
        <span class="header-text">Notifications</span>
    </div>

    <!-- Notification List -->
    <div class="notification-list container">
        <div class="notification-item" data-bs-toggle="modal" data-bs-target="#notificationModal" data-title="New Message" data-content="You have received a new message from Sarah. She says: 'Hey, just wanted to check in and see if you're free this weekend!'" data-date="2024-12-01 10:00 AM">
            <div>
                <i class="fas fa-envelope notification-icon"></i>
            </div>
            <div class="notification-content">
                <p class="notification-title">New Message</p>
                <p class="notification-text">Sarah sent you a message</p>
            </div>
            <div class="notification-date">2024-12-01</div>
        </div>
        <div class="notification-item" data-bs-toggle="modal" data-bs-target="#notificationModal" data-title="Meeting Reminder" data-content="Don't forget your meeting with the Marketing Team at 3:00 PM tomorrow in Conference Room A." data-date="2024-12-02 03:00 PM">
            <div>
                <i class="fas fa-calendar-alt notification-icon"></i>
            </div>
            <div class="notification-content">
                <p class="notification-title">Meeting Reminder</p>
                <p class="notification-text">Marketing Team meeting tomorrow</p>
            </div>
            <div class="notification-date">2024-12-02</div>
        </div>
        <div class="notification-item" data-bs-toggle="modal" data-bs-target="#notificationModal" data-title="System Update" data-content="A new system update is available. Please update your device to the latest version for improved security and performance." data-date="2024-12-01 08:00 AM">
            <div>
                <i class="fas fa-sync-alt notification-icon"></i>
            </div>
            <div class="notification-content">
                <p class="notification-title">System Update</p>
                <p class="notification-text">Update available for your device</p>
            </div>
            <div class="notification-date">2024-12-01</div>
        </div>
    </div>

    <!-- Notification Modal -->
    <div class="modal fade" id="notificationModal" tabindex="-1" aria-labelledby="notificationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="notificationModalLabel">Notification Title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Notification Content
                    <div class="modal-date" id="modalDate"></div>
                </div>
                <div class="modal-action">
                    <button type="button" class="btn btn-primary">Take Action</button>
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
    <script>
        const modal = document.getElementById('notificationModal');
        const modalTitle = modal.querySelector('.modal-title');
        const modalBody = modal.querySelector('.modal-body');
        const modalDate = document.getElementById('modalDate');

        document.querySelectorAll('.notification-item').forEach(item => {
            item.addEventListener('click', () => {
                const title = item.getAttribute('data-title');
                const content = item.getAttribute('data-content');
                const date = item.getAttribute('data-date');

                modalTitle.textContent = title;
                modalBody.textContent = content;
                modalDate.textContent = `Date: ${date}`;
            });
        });
    </script>
</body>
</html>