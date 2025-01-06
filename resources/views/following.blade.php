<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Following Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
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

        .following-list {
            margin-top: 70px;
            margin-bottom: 70px;
        }

        .following-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            background: white;
            margin: 10px 15px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .following-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 15px;
            cursor: pointer;
        }

        .following-name {
            font-weight: bold;
            font-size: 1rem;
        }

        .btn-unfollow {
            background: #dc3545;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
        }

        .btn-unfollow:hover {
            background: #c82333;
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

        /* Custom Modal Styling */
        .custom-modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease;
        }

        .custom-modal.active {
            opacity: 1;
            pointer-events: all;
        }

        .custom-modal-content {
            background: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 90%;
            max-width: 400px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .custom-modal-buttons {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .custom-modal-buttons button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
        }

        .btn-cancel {
            background: #6c757d;
            color: white;
        }

        .btn-confirm {
            background: #dc3545;
            color: white;
        }

        .btn-view-profile {
            background: #007bff;
            color: white;
            margin-top: 20px;
            border-radius: 5px;
            border: none;
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <i class="fas fa-arrow-left back-arrow"></i>
        <span class="header-text">Following</span>
    </div>

    <!-- Following List -->
    <div class="container following-list">
        <!-- Following Item -->
        <div class="following-item">
            <div class="following-info">
                <img src="https://via.placeholder.com/50" alt="Avatar" class="following-avatar" onclick="showUserInfoModal('John Doe', 120, 3000)">
                <div>
                    <p class="following-name mb-0">John Doe</p>
                    <small class="text-muted">@johndoe</small>
                </div>
            </div>
            <button class="btn-unfollow" onclick="showUnfollowModal('John Doe')">Unfollow</button>
        </div>

        <!-- Another Following Item -->
        <div class="following-item">
            <div class="following-info">
                <img src="https://via.placeholder.com/50" alt="Avatar" class="following-avatar" onclick="showUserInfoModal('Jane Smith', 85, 1200)">
                <div>
                    <p class="following-name mb-0">Jane Smith</p>
                    <small class="text-muted">@janesmith</small>
                </div>
            </div>
            <button class="btn-unfollow" onclick="showUnfollowModal('Jane Smith')">Unfollow</button>
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

    <!-- User Info Modal -->
    <div class="custom-modal" id="userInfoModal">
        <div class="custom-modal-content">
            <h5 id="userName"></h5>
            <p id="userDetails"></p>
            <button class="btn-view-profile" onclick="viewProfile()">View Profile</button>
        </div>
    </div>

    <!-- Unfollow Modal -->
    <div class="custom-modal" id="unfollowModal">
        <div class="custom-modal-content">
            <p id="unfollowText"></p>
            <div class="custom-modal-buttons">
                <button class="btn-cancel" onclick="closeUnfollowModal()">Cancel</button>
                <button class="btn-confirm" onclick="confirmUnfollow()">Unfollow</button>
            </div>
        </div>
    </div>

    <script>
        const userInfoModal = document.getElementById('userInfoModal');
        const userName = document.getElementById('userName');
        const userDetails = document.getElementById('userDetails');
        const unfollowModal = document.getElementById('unfollowModal');
        const unfollowText = document.getElementById('unfollowText');
        let currentUser = '';

        function showUserInfoModal(name, posts, followers) {
            userName.textContent = name;
            userDetails.textContent = `${posts} posts · ${followers} followers`;
            userInfoModal.classList.add('active');
        }

        function closeUserInfoModal() {
            userInfoModal.classList.remove('active');
        }

        userInfoModal.addEventListener('click', closeUserInfoModal);

        function viewProfile() {
            alert(`Viewing profile of ${userName.textContent}`);
            closeUserInfoModal();
        }

        function showUnfollowModal(userName) {
            currentUser = userName;
            unfollowText.textContent = `Are you sure you want to unfollow ${userName}?`;
            unfollowModal.classList.add('active');
        }

        function closeUnfollowModal() {
            unfollowModal.classList.remove('active');
        }

        function confirmUnfollow() {
            alert(`${currentUser} has been unfollowed.`);
            closeUnfollowModal();
        }
    </script>
</body>
</html>