<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Challenges</title>
    <style>
        html {
            position: fixed;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden;
            -webkit-overflow-scrolling: touch;
            background: #ffffff;
        }

        .header {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 60px;
            background: #ffffff;
            color: black;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            z-index: 1000;
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
            position: absolute;
            top: 60px;
            bottom: 70px;
            left: 0;
            right: 0;
            overflow-y: auto;
            overflow-x: hidden;
            -webkit-overflow-scrolling: touch;
            padding: 20px;
            background: #ffffff;
        }

        .category-pills {
            display: flex;
            gap: 10px;
            overflow-x: auto;
            padding: 10px 0;
            margin-bottom: 20px;
            scrollbar-width: none;
            -ms-overflow-style: none;
            -webkit-overflow-scrolling: touch;
        }

        .category-pills::-webkit-scrollbar {
            display: none;
        }

        .category-pill {
            padding: 8px 16px;
            background: #f5f5f5;
            border-radius: 20px;
            font-size: 0.9rem;
            white-space: nowrap;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .category-pill.active {
            background: linear-gradient(135deg, #a8b1ff 0%, #7179ff 100%);
            color: white;
        }

        .challenge-card {
            background: white;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .challenge-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 15px;
        }

        .challenge-title {
            font-weight: bold;
            font-size: 1.1rem;
            margin-bottom: 5px;
        }

        .challenge-description {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .challenge-reward {
            background: linear-gradient(135deg, #a8b1ff 0%, #7179ff 100%);
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.9rem;
        }

        .challenge-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #666;
            font-size: 0.85rem;
            margin-bottom: 15px;
        }

        .footer {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 70px;
            background: white;
            display: flex;
            justify-content: space-around;
            align-items: center;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
            z-index: 1000;
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

        .challenge-button {
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            border: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .join-button {
            background: linear-gradient(135deg, #a8b1ff 0%, #7179ff 100%);
            color: white;
        }

        .view-button {
            background: #f0f0f0;
            color: #666;
        }

        .bottom-modal {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: white;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            transform: translateY(100%);
            transition: transform 0.3s ease-out;
            z-index: 1001;
            max-height: 90vh;
            overflow-y: auto;
        }

        .bottom-modal.show {
            transform: translateY(0);
        }

        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.5);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .modal-overlay.show {
            opacity: 1;
            visibility: visible;
        }

        .modal-header {
            padding: 20px;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-content {
            padding: 20px;
        }

        .progress-bar {
            height: 8px;
            background: #eee;
            border-radius: 4px;
            margin: 15px 0;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(135deg, #a8b1ff 0%, #7179ff 100%);
            width: 60%;
            border-radius: 4px;
            transition: width 0.3s ease;
        }
    </style>
</head>
<body>
    <div class="header">
        <i class="fas fa-arrow-left back-arrow"></i>
        <span class="header-text">Challenges</span>
        <i class="fas fa-trophy"></i>
    </div>

    <div class="content">
        <div class="category-pills">
            <div class="category-pill active">All</div>
            <div class="category-pill">Daily</div>
            <div class="category-pill">Weekly</div>
            <div class="category-pill">Monthly</div>
            <div class="category-pill">Special</div>
        </div>

        <div class="challenge-card">
            <div class="challenge-header">
                <div>
                    <div class="challenge-title">Share 5 Quotes</div>
                    <div class="challenge-description">Share quotes with your friends and earn points!</div>
                </div>
                <div class="challenge-reward">+50 pts</div>
            </div>
            <div class="challenge-meta">
                <span><i class="far fa-clock"></i> 2 days left</span>
                <span><i class="fas fa-users"></i> 1.2k participants</span>
            </div>
            <button class="challenge-button join-button" onclick="showChallengeModal('Share 5 Quotes')">
                Join Challenge
            </button>
        </div>

        <div class="challenge-card">
            <div class="challenge-header">
                <div>
                    <div class="challenge-title">Create Original Quote</div>
                    <div class="challenge-description">Write and share your own inspirational quote</div>
                </div>
                <div class="challenge-reward">+100 pts</div>
            </div>
            <div class="challenge-meta">
                <span><i class="far fa-clock"></i> 5 days left</span>
                <span><i class="fas fa-users"></i> 856 participants</span>
            </div>
            <button class="challenge-button view-button" onclick="showProgressModal()">
                View Progress
            </button>
        </div>
    </div>

    <div class="modal-overlay" id="modalOverlay"></div>
    <div class="bottom-modal" id="challengeModal">
        <div class="modal-header">
            <h5 class="modal-title">Challenge Details</h5>
            <i class="fas fa-times" onclick="hideModal()" style="cursor: pointer;"></i>
        </div>
        <div class="modal-content">
            <!-- Modal content will be inserted here -->
        </div>
    </div>

    <div class="footer">
        <div class="footer-item">
            <i class="fas fa-home"></i>
            <span>Home</span>
        </div>
        <div class="footer-item">
            <i class="fas fa-trophy"></i>
            <span>Challenges</span>
        </div>
        <div class="footer-item">
            <i class="fas fa-user"></i>
            <span>Profile</span>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Prevent pull-to-refresh
            document.body.addEventListener('touchmove', function(e) {
                if (!e.target.closest('.content')) {
                    e.preventDefault();
                }
            }, { passive: false });

            // Prevent overscroll on content
            const content = document.querySelector('.content');
            let startY;

            content.addEventListener('touchstart', function(e) {
                startY = e.touches[0].pageY;
            }, { passive: true });

            content.addEventListener('touchmove', function(e) {
                const y = e.touches[0].pageY;
                const scrollTop = content.scrollTop;
                const scrollHeight = content.scrollHeight;
                const height = content.clientHeight;

                if ((scrollTop <= 0 && y > startY) || 
                    (scrollTop + height >= scrollHeight && y < startY)) {
                    e.preventDefault();
                }
            }, { passive: false });
        });

        // Modal functionality
        const modal = document.getElementById('challengeModal');
        const overlay = document.getElementById('modalOverlay');

        function showChallengeModal(title) {
            modal.querySelector('.modal-content').innerHTML = `
                <h4>${title}</h4>
                <p>Are you ready to take on this challenge?</p>
                <div class="challenge-meta">
                    <span><i class="far fa-clock"></i> Time remaining: 2 days</span>
                    <span><i class="fas fa-users"></i> 1.2k participants</span>
                </div>
                <button class="challenge-button join-button" onclick="joinChallenge()">
                    Confirm Join
                </button>
            `;
            showModal();
        }

        function showProgressModal() {
            modal.querySelector('.modal-content').innerHTML = `
                <h4>Your Progress</h4>
                <div class="progress-bar">
                    <div class="progress-fill"></div>
                </div>
                <p>3/5 quotes shared</p>
                <div class="challenge-meta">
                    <span><i class="far fa-clock"></i> Time remaining: 5 days</span>
                    <span><i class="fas fa-trophy"></i> +100 pts on completion</span>
                </div>
            `;
            showModal();
        }

        function showModal() {
            modal.classList.add('show');
            overlay.classList.add('show');
            document.body.style.overflow = 'hidden';
        }

        function hideModal() {
            modal.classList.remove('show');
            overlay.classList.remove('show');
            document.body.style.overflow = '';
        }

        function joinChallenge() {
            hideModal();
        }

        document.querySelectorAll('.category-pill').forEach(pill => {
            pill.addEventListener('click', () => {
                document.querySelector('.category-pill.active').classList.remove('active');
                pill.classList.add('active');
            });
        });

        overlay.addEventListener('click', hideModal);
    </script>
</body>
</html>