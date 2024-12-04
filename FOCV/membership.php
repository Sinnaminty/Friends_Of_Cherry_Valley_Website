<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Plans</title>
    <link rel="stylesheet" href="styles.css">
    <link rel = "stylesheet" href = "main.css">
    <style>
        /*
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
            */

            header {
            text-align: center;
            margin: 20px 0;
            font-size: 30px;
        }
    </style>
</head>
<body>

<section id="header">
    
    <h1><a href="index.html">Friends Of Cherry Valley</a></h1>
    <nav id="nav">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about-us.html">About Us</a></li>
            <li><a href="events.html">Events</a></li>
            <li><a href="photo-gallery.html">Photo Gallery</a></li>
            <li><a href="donate.html">Donate</a></li>
            <li class="current"><a href="membership.php">Membership</a></li>
            <li><a href="partners.html">Partners</a></li>
        </ul>
    </nav>

    </section>
<section id="main">

    <header>
    <h1>Annual Membership Plans</h1>
    </header>

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

    </section>

    <!--
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
-->


<!-- Footer -->
<section id="footer">
	<div class="container">
		<div class="row">
			<div class="col-4 col-12-medium">
				<section>
					<p>
						<iframe src="https://docs.google.com/forms/d/e/1FAIpQLScbSqltidbBPF0sJ-89Idld7XFWGlW4ZVXoxMzyScGnkZhIAg/viewform?embedded=true" width="320" height="721" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
					</p>
				</section>
			</div>
			<div class="col-4 col-12-medium">
				<section>
					<header>
						<h2>Social Media</h2>
					</header>
					<ul class="social">
                    <li><a class="icon brands fa-facebook-f" href="https://www.facebook.com/friendsofcherryvalley/?ref=embed_page">
							<img src="facebook.png" alt="Facebook" style="width: 42px; height: 42px;"/>
							<span class="label">Facebook</span></a></li>
						<li><a class="icon brands fa-instagram" href="https://www.instagram.com/">
							<img src="instagram.png" alt="Instagram" style="width: 42px; height: 42px;"/>
							<span class="label">Instagram</span></a></li>
						<li><a class="icon brands fa-tiktok" href="https://www.tiktok.com/">
							<img src="tt.webp" alt="TikTok" style="width: 44px; height: 44px;"/>
							<span class="label">Tiktok</span></a></li>
					</ul>
					<ul class="contact">
						<li>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3012.4828198009004!2d-75.1745186234493!3d40.970907321724404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c489f1f668dceb%3A0xcdf75d8a3871d4c8!2sCherry%20Valley%20National%20Wildlife%20Refuge!5e0!3m2!1sen!2sus!4v1726505109626!5m2!1sen!2sus" width="200" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</li>
						<li>
							<h3>Address</h3>
							<p>
								Cherry Valley National Wildlife Refuge Headquarters<br />
								2138 Croasdale Rd<br />
								Stroudsburg, PA 18360
							</p>
						</li>
						<li>
							<h3>Mail</h3>
							<p><a href = "mailto: friendsofcherryvalley@gmail.com">friendsofcherryvalley@gmail.com</a></p>
					</ul>
				</section>
			</div>
			<div class="col-12">

				<!-- Copyright -->
					<div id="copyright">
						<ul class="links">
							<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>

			</div>
		</div>
	</div>
</section>

		</div>

</body>
</html>


