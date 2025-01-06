<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Settings</title>
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
            position: absolute;
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
            position: absolute;
            top: 60px;
            bottom: 80px;
            left: 0;
            right: 0;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
            padding: 20px;
        }

        .settings-section {
            background: white;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .section-title {
            font-size: 1.1rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .section-title i {
            color: #007bff;
        }

        .setting-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid #eee;
        }

        .setting-item:last-child {
            border-bottom: none;
        }

        .setting-label {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .setting-title {
            font-weight: 500;
            color: #333;
        }

        .setting-description {
            font-size: 0.9rem;
            color: #666;
        }

        /* Toggle Switch */
        .switch {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 24px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 24px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 20px;
            width: 20px;
            left: 2px;
            bottom: 2px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked + .slider {
            background-color: #007bff;
        }

        input:checked + .slider:before {
            transform: translateX(26px);
        }

        .setting-button {
            background: none;
            border: none;
            color: #007bff;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.9rem;
            transition: background-color 0.3s;
        }

        .setting-button:hover {
            background-color: #f0f0f0;
        }

        .danger-zone {
            background-color: #fff5f5;
        }

        .danger-button {
            color: #dc3545;
        }

        .danger-button:hover {
            background-color: #ffebeb;
        }

        .footer {
            position: absolute;
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
            height: 80px;
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

        /* Modal styles */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .bottom-modal {
            position: fixed;
            bottom: -100%;
            left: 0;
            right: 0;
            background-color: white;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            padding: 20px;
            max-height: 70vh;
            overflow-y: auto;
            transition: bottom 0.3s ease;
            z-index: 1001;
        }

        .bottom-modal.active {
            bottom: 0;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .modal-title {
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
        }

        .close-modal {
            background: none;
            border: none;
            font-size: 1.5rem;
            color: #666;
            cursor: pointer;
        }

        .modal-content {
            margin-bottom: 20px;
        }

        .modal-buttons {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        .modal-button {
            flex: 1;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
        }

        .cancel-button {
            background-color: #f8f9fa;
            color: #333;
        }

        .confirm-button {
            background-color: #dc3545;
            color: white;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <span class="header-text">Settings</span>
        <i class="fas fa-sign-out-alt" title="Logout" style="cursor: pointer;"></i>
    </div>

    <!-- Main Content -->
    <div class="content">
        <!-- Account Settings -->
        <div class="settings-section">
            <div class="section-title">
                <i class="fas fa-user"></i>
                Account Settings
            </div>
            <div class="setting-item">
                <div class="setting-label">
                    <div class="setting-title">Edit Profile</div>
                    <div class="setting-description">Change your profile information</div>
                </div>
                <button class="setting-button">Edit</button>
            </div>
            <div class="setting-item">
                <div class="setting-label">
                    <div class="setting-title">Change Password</div>
                    <div class="setting-description">Update your password</div>
                </div>
                <button class="setting-button">Change</button>
            </div>
        </div>

        <!-- Notifications -->
        <div class="settings-section">
            <div class="section-title">
                <i class="fas fa-bell"></i>
                Notifications
            </div>
            <div class="setting-item">
                <div class="setting-label">
                    <div class="setting-title">Push Notifications</div>
                    <div class="setting-description">Receive notifications on your device</div>
                </div>
                <label class="switch">
                    <input type="checkbox" checked>
                    <span class="slider"></span>
                </label>
            </div>
            <div class="setting-item">
                <div class="setting-label">
                    <div class="setting-title">Email Notifications</div>
                    <div class="setting-description">Receive updates via email</div>
                </div>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider"></span>
                </label>
            </div>
        </div>

        <!-- Privacy -->
        <div class="settings-section">
            <div class="section-title">
                <i class="fas fa-shield-alt"></i>
                Privacy
            </div>
            <div class="setting-item">
                <div class="setting-label">
                    <div class="setting-title">Profile Visibility</div>
                    <div class="setting-description">Control who can see your profile</div>
                </div>
                <button class="setting-button">Configure</button>
            </div>
            <div class="setting-item">
                <div class="setting-label">
                    <div class="setting-title">Activity Status</div>
                    <div class="setting-description">Show when you're active</div>
                </div>
                <label class="switch">
                    <input type="checkbox" checked>
                    <span class="slider"></span>
                </label>
            </div>
        </div>

        <!-- Danger Zone -->
        <div class="settings-section danger-zone">
            <div class="section-title">
                <i class="fas fa-exclamation-triangle"></i>
                Danger Zone
            </div>
            <div class="setting-item">
                <div class="setting-label">
                    <div class="setting-title">Delete Account</div>
                    <div class="setting-description">Permanently delete your account and data</div>
                </div>
                <button class="setting-button danger-button" id="deleteAccount">Delete</button>
            </div>
        </div>
    </div>

    <!-- Footer -->
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

    <!-- Delete Account Modal -->
    <div class="modal-overlay" id="modalOverlay">
        <div class="bottom-modal" id="bottomModal">
            <div class="modal-header">
                <div class="modal-title">Delete Account</div>
                <button class="close-modal" id="closeModal">&times;</button>
            </div>
            <div class="modal-content">
                <p>Are you sure you want to delete your account? This action cannot be undone.</p>
                <p>All your data, including:</p>
                <ul>
                    <li>Profile information</li>
                    <li>Messages and conversations</li>
                    <li>Posts and comments</li>
                    <li>Achievements and rewards</li>
                </ul>
                <p>will be permanently deleted.</p>
                <div class="modal-buttons">
                    <button class="modal-button cancel-button" id="cancelDelete">Cancel</button>
                    <button class="modal-button confirm-button" id="confirmDelete">Delete Account</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const deleteAccountBtn = document.getElementById('deleteAccount');
        const modalOverlay = document.getElementById('modalOverlay');
        const bottomModal = document.getElementById('bottomModal');
        const closeModal = document.getElementById('closeModal');
        const cancelDelete = document.getElementById('cancelDelete');
        const confirmDelete = document.getElementById('confirmDelete');

        function showModal() {
            modalOverlay.classList.add('active');
            bottomModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function hideModal() {
            modalOverlay.classList.remove('active');
            bottomModal.classList.remove('active');
            document.body.style.overflow = '';
        }

        deleteAccountBtn.addEventListener('click', showModal);
        closeModal.addEventListener('click', hideModal);
        cancelDelete.addEventListener('click', hideModal);
        modalOverlay.addEventListener('click', (e) => {
            if (e.target === modalOverlay) {
                hideModal();
            }
        });

        confirmDelete.addEventListener('click', () => {
            // Add account deletion logic here
            alert('Account deletion request submitted');
            hideModal();
        });

        // Prevent elastic scrolling on iOS
        document.addEventListener('touchmove', function(e) {
            if(e.target.closest('.content') || e.target.closest('.bottom-modal')) return;
            e.preventDefault();
        }, { passive: false });

        // Toggle switch functionality
        document.querySelectorAll('.switch input').forEach(toggle => {
            toggle.addEventListener('change', function() {
                // Add toggle state handling logic here
                console.log('Toggle changed:', this.checked);
            });
        });
    </script>
</body>
</html>
