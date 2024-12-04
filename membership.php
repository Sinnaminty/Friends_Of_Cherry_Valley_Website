<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Plans</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        nav {
    padding: 10px 0;
    background-color: transparent;
}

nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    justify-content: center;
}

nav ul li {
    margin: 0 15px;
}

nav ul li a {
    color: #337ab7;
    text-decoration: none;
    font-weight: bold;
}

nav ul li a:hover {
    text-decoration: underline;
}

.social-media-container {
            display: flex;
            gap: 10px;
            justify-content: center;
            margin-top: 30px;
            padding-bottom: 30px;
        }
        .social-media-container a {
            text-decoration: none;
        }
        .social-media-container img {
            width: 100px;
            height: auto;
        }
    </style>
</head>
<body>

<nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="aboutus.html">About Us</a></li>
            <li><a href="events.html">Events</a></li>
            <li><a href="photo-gallery.html">Photo Gallery</a></li>
            <li><a href="donate.html">Donate</a></li>
            <li><a href="membership.php">Membership</a></li>
            <li><a href="partners.html">Partners</a></li>
        </ul>
    </nav>


    <h1>Annual Membership Plans</h1>

    <div class="membership-row">

        <div class="membership-plan">
            <h2>Membership</h2>
            <p>$15</p>
            <p>Valid for one year</p>
            <ul>
                <li>Receive the Newsletter</li>
                <li>Invitations to member-only events</li>
                <li>Receive important updates about our organization</li>
                <li>Stay up to date on upcoming events</li>
            </ul>
            <a href="checkout.php?membership=1&price=15&duration=1" class="select-button">Select</a>
        </div>

        <div class="membership-plan">
            <h2>Corporate Sponsor</h2>
            <p>$100</p>
            <p>Valid for one year</p>
            <ul>
                <li>Receive the Newsletter</li>
                <li>Invitations to member-only events</li>
                <li>Receive important updates about our organization</li>
                <li>Stay up to date on upcoming events</li>
                <li>Receive Corporate Only Invitations</li>
            </ul>
            <a href="checkout.php?membership=6&price=100&duration=1" class="select-button">Select</a>
        </div>
    </div>

    <h2 class="combos-heading">Combos</h2>
    
    <div class="membership-combos-container">
        <div class="membership-combos">
            <div class="membership-plan">
                <h2>Combo 1</h2>
                <p>$25</p>
                <p>Donation and Membership (Valid for one year)</p>
                <ul>
                    <li>Receive the Newsletter</li>
                    <li>Invitations to member-only events</li>
                    <li>Receive important updates about our organization</li>
                    <li>Stay up to date on upcoming events</li>
                    <li>Thank you for your extra financial support!</li>
                </ul>
                <a href="checkout.php?membership=2&price=25&duration=1" class="select-button">Select</a>
            </div>

            <div class="membership-plan">
                <h2>Combo 2</h2>
                <p>$50</p>
                <p>Donation and Membership (Valid for one year)</p>
                <ul>
                    <li>Receive the Newsletter</li>
                    <li>Invitations to member-only events</li>
                    <li>Receive important updates about our organization</li>
                    <li>Stay up to date on upcoming events</li>
                    <li>Thank you for your extra financial support!</li>
                </ul>
                <a href="checkout.php?membership=3&price=50&duration=1" class="select-button">Select</a>
            </div>

            <div class="membership-plan">
                <h2>Combo 3</h2>
                <p>$75</p>
                <p>Donation and Membership (Valid for one year)</p>
                <ul>
                    <li>Receive the Newsletter</li>
                    <li>Invitations to member-only events</li>
                    <li>Receive important updates about our organization</li>
                    <li>Stay up to date on upcoming events</li>
                    <li>Thank you for your extra financial support!</li>
                </ul>
                <a href="checkout.php?membership=4&price=75&duration=1" class="select-button">Select</a>
            </div>

            <div class="membership-plan">
                <h2>Combo 4</h2>
                <p>$100</p>
                <p>Membership and Donation (Valid for one year)</p>
                <ul>
                    <li>Receive the Newsletter</li>
                    <li>Invitations to member-only events</li>
                    <li>Receive important updates about our organization</li>
                    <li>Stay up to date on upcoming events</li>
                    <li>Thank you for your extra financial support!</li>
                </ul>
                <a href="checkout.php?membership=5&price=100&duration=1" class="select-button">Select</a>
            </div>
        </div>
    </div>

    <div class="social-media-container">
        <a href="https://www.facebook.com/friendsofcherryvalley/?ref=embed_page" target="_blank">
            <img src="https://graph.facebook.com/friendsofcherryvalley/picture?type=small" alt="Friends of Cherry Valley" />
        </a>
        <a href="https://www.instagram.com/" target="_blank">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/1024px-Instagram_icon.png" alt="Instagram" />
        </a>
        <a href="https://www.tiktok.com/" target="_blank">
            <img src="tiktok.png" alt="TikTok" />
        </a>
        
    </div>


    <h2>Join Mailing List</h2>
    <form action="connectfocv2.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <button type="submit">Submit</button>
    </form>

</body>
</html>


