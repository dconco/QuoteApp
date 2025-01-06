<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Group Chat with Reply</title>
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
            bottom: 120px;
            left: 0;
            right: 0;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
            padding: 20px;
        }

        .chat-container {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            min-height: 100%;
        }

        .chat-bubble {
            background-color: #e2e3e5;
            border-radius: 20px;
            padding: 12px 18px;
            margin-bottom: 12px;
            display: inline-block;
            word-wrap: break-word;
        }

        .chat-bubble.sent {
            background-color: #007bff;
            color: white;
            align-self: flex-end;
        }

        .chat-bubble.received {
            background-color: #ffffff;
            color: #333;
            align-self: flex-start;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 12px 18px;
            border-radius: 20px;
            width: auto;
            max-width: 75%;
            margin-bottom: 12px;
            position: relative;
        }

        .chat-bubble.received .user-info {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
        }

        .chat-bubble.received .user-info img {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .chat-bubble.received .user-info .name {
            font-weight: bold;
            font-size: 1rem;
            margin-bottom: 4px;
        }

        .chat-bubble.received p {
            margin: 0;
            word-wrap: break-word;
            max-width: 100%;
        }

        .reply-container {
            background-color: #f1f1f1;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
        }

        .reply-container .quoted-message {
            background-color: #e2e3e5;
            padding: 8px 12px;
            border-radius: 10px;
            font-size: 0.9rem;
            color: #333;
            margin-bottom: 8px;
        }

        .reply-container .quoted-message .user-info {
            display: flex;
            align-items: center;
        }

        .reply-container .quoted-message .user-info img {
            width: 25px;
            height: 25px;
            border-radius: 50%;
            margin-right: 8px;
        }

        .message-input {
            position: absolute;
            bottom: 60px;
            left: 0;
            width: 100%;
            background-color: white;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
            padding: 10px 20px;
            display: flex;
            align-items: center;
            z-index: 999;
        }

        .message-input input {
            flex-grow: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 20px;
            margin-right: 10px;
        }

        .send-btn {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 50%;
            cursor: pointer;
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
            height: 60px;
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
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <span class="header-text">Group Chat</span>
        <i class="fas fa-sign-out-alt" title="Logout" style="cursor: pointer;"></i>
    </div>

    <!-- Main Content -->
    <div class="content">
        <div class="chat-container">
            <!-- Example: Replied Message -->
            <div class="reply-container">
                <div class="quoted-message">
                    <div class="user-info">
                        <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="User 1">
                        <div>
                            <div class="name">John Doe</div>
                            <div class="timestamp">12:30 PM</div>
                        </div>
                    </div>
                    <p>Hi everyone! How are you doing? I hope we can make some good progress today!</p>
                </div>

                <div class="chat-bubble sent">
                    <p>I'm good, thanks! How about you?</p>
                    <div class="timestamp">12:32 PM</div>
                </div>
            </div>

            <!-- Example: Message without reply -->
            <div class="chat-bubble received">
                <div class="user-info">
                    <img src="https://randomuser.me/api/portraits/women/2.jpg" alt="User 2">
                    <div>
                        <div class="name">Jane Smith</div>
                        <div class="timestamp">12:35 PM</div>
                    </div>
                </div>
                <p>I'm doing well, thanks! Looking forward to the meeting.</p>
            </div>

            <!-- Example: Another message without reply -->
            <div class="chat-bubble received">
                <div class="user-info">
                    <img src="https://randomuser.me/api/portraits/women/3.jpg" alt="User 3">
                    <div>
                        <div class="name">Alice Brown</div>
                        <div class="timestamp">12:40 PM</div>
                    </div>
                </div>
                <p>Hey, I just got in. How's everything going?</p>
            </div>
        </div>
    </div>

    <!-- Message Input -->
    <div class="message-input">
        <input type="text" placeholder="Type your message..." id="message-input">
        <button class="send-btn" id="send-btn">
            <i class="fas fa-paper-plane"></i>
        </button>
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

    <script>
        const sendBtn = document.getElementById('send-btn');
        const messageInput = document.getElementById('message-input');
        const content = document.querySelector('.content');

        sendBtn.addEventListener('click', () => {
            const messageText = messageInput.value.trim();
            const currentTime = new Date().toLocaleTimeString([], {hour: '2-digit', minute: '2-digit'});
            if (messageText !== "") {
                const newMessage = document.createElement('div');
                newMessage.classList.add('chat-bubble', 'sent');
                newMessage.innerHTML = `<p>${messageText}</p><div class="timestamp">${currentTime}</div>`;
                document.querySelector('.chat-container').appendChild(newMessage);
                messageInput.value = "";
                
                content.scrollTo({
                    top: content.scrollHeight,
                    behavior: 'smooth'
                });
            }
        });

        document.addEventListener('touchmove', function(e) {
            if(e.target.closest('.content')) return;
            e.preventDefault();
        }, { passive: false });
    </script>
</body>
</html>