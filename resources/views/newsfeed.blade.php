<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>News Feed</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif; /* Default font for body */
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

        .news-feed {
            padding: 10px 20px;
        }

        .post {
            background: white;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 15px;
            padding: 15px;
        }

        .post p {
            font-family: 'Merriweather', serif; /* Use Merriweather font for quotes */
            font-size: 1.2rem;
            font-weight: 700;
            line-height: 1.5;
            color: #333;
        }

        .post .actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
        }

        .post .actions i {
            cursor: pointer;
        }

        .post .actions span {
            font-size: 0.9rem;
            color: gray;
        }

        .comment-box {
            margin-top: 10px;
        }

        .comment-input {
            margin-bottom: 10px;
        }

        .comment-input, .comment-btn {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body>
    <!-- Sticky Header -->
    <div class="header">
        <i class="fas fa-arrow-left back-arrow"></i>
        <span class="header-text">News Feed</span>
        <i class="fas fa-bell" style="cursor: pointer;"></i>
    </div>

    <!-- Main Content -->
    <div class="content" style="padding-top: 60px; padding-bottom: 60px;">
        <div class="news-feed" id="news-feed-container">
            <!-- Posts will be dynamically added here -->
        </div>
    </div>

    <!-- Bootstrap Modal for Comments -->
    <div class="modal fade" id="commentsModal" tabindex="-1" aria-labelledby="commentsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="commentsModalLabel">All Comments</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul id="modalCommentsList" class="list-group">
                        <!-- Comments will be dynamically populated here -->
                    </ul>
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
    <script>
        // Sample JSON data for posts with quotes, views, and comments
        const posts = [
            {
                id: 1,
                quote: "This is an inspirational quote.",
                author: "John Doe",
                views: 0,
                comments: ["Example comment 1", "Example comment 2"]
            },
            {
                id: 2,
                quote: "This is another quote.",
                author: "Jane Smith",
                views: 0,
                comments: ["Another comment 1", "Another comment 2"]
            }
        ];

        // Function to add a view count dynamically
        function addView(postId) {
            const post = posts.find(p => p.id === postId);
            post.views++;
            document.getElementById(`view-count-${postId}`).textContent = `Views (${post.views})`;
        }

        // Function to toggle the comment box visibility and change the button text
        function toggleComments(postId) {
            const commentBox = document.getElementById(`comment-box-${postId}`);
            const button = document.getElementById(`comment-btn-${postId}`);

            if (commentBox.style.display === 'none') {
                commentBox.style.display = 'block';
                button.textContent = 'Hide Comments';
            } else {
                commentBox.style.display = 'none';
                button.textContent = 'Check Comments';
            }
        }

        // Function to show the comments in the modal
        function showCommentsModal(postId) {
            const post = posts.find(p => p.id === postId);
            const modalCommentsList = document.getElementById('modalCommentsList');
            modalCommentsList.innerHTML = post.comments.map(comment => `<li class="list-group-item">${comment}</li>`).join('');
            
            // Show Bootstrap modal
            const myModal = new bootstrap.Modal(document.getElementById('commentsModal'));
            myModal.show();
        }

        // Dynamically generate posts and append to the news feed
        window.onload = function() {
            const newsFeedContainer = document.getElementById('news-feed-container');
            posts.forEach(post => {
                const postDiv = document.createElement('div');
                postDiv.classList.add('post');
                postDiv.id = `post-${post.id}`;

                postDiv.innerHTML = `
                    <p>"${post.quote}" - ${post.author}</p>
                    <div class="actions">
                        <i class="far fa-heart view-btn" onclick="addView(${post.id})"></i>
                        <span id="view-count-${post.id}">Views (${post.views})</span>
                        <button class="btn btn-sm btn-outline-primary" id="comment-btn-${post.id}" onclick="toggleComments(${post.id})">Check Comments</button>
                    </div>
                    <div id="comment-box-${post.id}" class="comment-box" style="display: none;">
                        <textarea class="form-control comment-input" placeholder="Write a comment..."></textarea>
                        <button class="btn btn-sm btn-primary">Post Comment</button>
                        <button class="btn btn-sm btn-secondary" onclick="showCommentsModal(${post.id})">View All Comments</button>
                    </div>`;

                // Append the post to the news feed container
                newsFeedContainer.appendChild(postDiv);
            });
        };
    </script>
</body>
</html>