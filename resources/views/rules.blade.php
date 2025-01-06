<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Rules</title>
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

        .search-container {
            position: absolute;
            top: 60px;
            left: 0;
            right: 0;
            padding: 15px;
            background-color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            z-index: 998;
        }

        .search-box {
            position: relative;
            width: 100%;
        }

        .search-box input {
            width: 100%;
            padding: 10px 40px 10px 15px;
            border: 1px solid #ddd;
            border-radius: 20px;
            font-size: 1rem;
        }

        .search-box i {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #666;
        }

        .content {
            position: absolute;
            top: 130px;
            bottom: 80px;
            left: 0;
            right: 0;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
            padding: 20px;
        }

        .rules-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .rule-card {
            background: white;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: transform 0.2s ease;
        }

        .rule-card:hover {
            transform: translateY(-2px);
        }

        .rule-card h3 {
            color: #007bff;
            font-size: 1.1rem;
            margin-bottom: 10px;
        }

        .rule-card p {
            margin: 0;
            color: #666;
            font-size: 0.95rem;
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
            color: #007bff;
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

        .modal-section {
            margin-bottom: 15px;
        }

        .modal-section h4 {
            font-size: 1rem;
            color: #333;
            margin-bottom: 8px;
        }

        .modal-section p {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.5;
            white-space: pre-line;
        }

        .modal-divider {
            height: 1px;
            background-color: #eee;
            margin: 15px 0;
        }

        .no-results {
            text-align: center;
            padding: 20px;
            color: #666;
            font-style: italic;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <span class="header-text">Rules</span>
        <i class="fas fa-sign-out-alt" title="Logout" style="cursor: pointer;"></i>
    </div>

    <!-- Search Bar -->
    <div class="search-container">
        <div class="search-box">
            <input type="text" id="searchInput" placeholder="Search rules...">
            <i class="fas fa-search"></i>
        </div>
    </div>

    <!-- Main Content -->
    <div class="content">
        <div class="rules-container" id="rulesContainer">
            <!-- Rules will be dynamically inserted here -->
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

    <!-- Modal -->
    <div class="modal-overlay" id="modalOverlay">
        <div class="bottom-modal" id="bottomModal">
            <div class="modal-header">
                <div class="modal-title" id="modalTitle">Rule Title</div>
                <button class="close-modal" id="closeModal">&times;</button>
            </div>
            <div class="modal-content">
                <div class="modal-section">
                    <h4>Description</h4>
                    <p id="modalDescription"></p>
                </div>
                <div class="modal-divider"></div>
                <div class="modal-section">
                    <h4>Additional Information</h4>
                    <p id="modalAdditionalInfo"></p>
                </div>
                <div class="modal-divider"></div>
                <div class="modal-section">
                    <h4>Examples</h4>
                    <p id="modalExamples"></p>
                </div>
            </div>
        </div>
    </div>

    <script>
        const rules = [
            {
                title: "Respect All Members",
                description: "Treat all community members with respect. No harassment, hate speech, or discriminatory behavior will be tolerated.",
                additionalInfo: "Our community thrives on mutual respect and understanding. Every member, regardless of their background, deserves to feel safe and welcomed.",
                examples: "- Using respectful language\n- Avoiding personal attacks\n- Being considerate of different viewpoints\n- Reporting inappropriate behavior"
            },
            {
                title: "No Spam",
                description: "Avoid posting repetitive content, excessive self-promotion, or irrelevant messages.",
                additionalInfo: "Spam reduces the quality of discussions and makes it harder for members to find valuable content.",
                examples: "- Don't post the same message multiple times\n- Limit self-promotion to appropriate channels\n- Keep discussions on-topic"
            },
            {
                title: "Content Guidelines",
                description: "Keep content family-friendly. No explicit, violent, or inappropriate material.",
                additionalInfo: "We aim to maintain a safe environment suitable for all age groups. Content should be appropriate for general audiences.",
                examples: "- No adult content\n- No graphic violence\n- No offensive language\n- Family-friendly discussions only"
            },
            {
                title: "Privacy Policy",
                description: "Do not share personal information of others without consent. Respect privacy at all times.",
                additionalInfo: "Privacy is a fundamental right. Protecting user information is crucial for maintaining trust in our community.",
                examples: "- Don't share private messages\n- Keep personal details confidential\n- Ask for permission before sharing someone's content"
            },
            {
                title: "Moderation Compliance",
                description: "Follow moderator instructions and accept their decisions. Appeal through proper channels if needed.",
                additionalInfo: "Moderators help maintain community standards. Their decisions are made to benefit the entire community.",
                examples: "- Follow moderator warnings\n- Use appropriate appeal channels\n- Respect final decisions\n- Be cooperative during investigations"
            }
        ];

        const rulesContainer = document.getElementById('rulesContainer');
        const searchInput = document.getElementById('searchInput');
        const modalOverlay = document.getElementById('modalOverlay');
        const bottomModal = document.getElementById('bottomModal');
        const closeModal = document.getElementById('closeModal');
        const modalTitle = document.getElementById('modalTitle');
        const modalDescription = document.getElementById('modalDescription');
        const modalAdditionalInfo = document.getElementById('modalAdditionalInfo');
        const modalExamples = document.getElementById('modalExamples');

        function displayRules(rulesToShow) {
            rulesContainer.innerHTML = '';
            
            if (rulesToShow.length === 0) {
                rulesContainer.innerHTML = '<div class="no-results">No rules found matching your search</div>';
                return;
            }

            rulesToShow.forEach(rule => {
                const ruleCard = document.createElement('div');
                ruleCard.className = 'rule-card';
                ruleCard.innerHTML = `
                    <h3>${rule.title}</h3>
                    <p>${rule.description}</p>
                `;
                ruleCard.addEventListener('click', () => showModal(rule));
                rulesContainer.appendChild(ruleCard);
            });
        }

        function showModal(rule) {
            modalTitle.textContent = rule.title;
            modalDescription.textContent = rule.description;
            modalAdditionalInfo.textContent = rule.additionalInfo;
            modalExamples.textContent = rule.examples;
            
            modalOverlay.classList.add('active');
            bottomModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function hideModal() {
            modalOverlay.classList.remove('active');
            bottomModal.classList.remove('active');
            document.body.style.overflow = '';
        }

        searchInput.addEventListener('input', (e) => {
            const searchTerm = e.target.value.toLowerCase();
            const filteredRules = rules.filter(rule => 
                rule.title.toLowerCase().includes(searchTerm) || 
                rule.description.toLowerCase().includes(searchTerm)
            );
            displayRules(filteredRules);
        });

        closeModal.addEventListener('click', hideModal);
        modalOverlay.addEventListener('click', (e) => {
            if (e.target === modalOverlay) {
                hideModal();
            }
        });

        displayRules(rules);

        document.addEventListener('touchmove', function(e) {
            if(e.target.closest('.content') || e.target.closest('.bottom-modal')) return;
            e.preventDefault();
        }, { passive: false });
    </script>
</body>
</html>
