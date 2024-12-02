<?php
session_start();
include("connectfocv.php");

ob_start();

//ini_set('display_errors', 0);
//error_reporting(0);

if (isset($_GET['membership']) && isset($_GET['price']) && isset($_GET['duration'])) {
    $_SESSION['membership'] = $_GET['membership'];
    $_SESSION['price'] = $_GET['price'];
    $_SESSION['duration'] = $_GET['duration'];

    
}

$queryString = '';
if (isset($_SESSION['membership']) && isset($_SESSION['price']) && isset($_SESSION['duration'])) {
    $queryString = '?membership=' . $_SESSION['membership'] . '&price=' . $_SESSION['price'] . '&duration=' . $_SESSION['duration'];
}

if (isset($_POST['logout'])) {
    unset($_SESSION['email']);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="styles.css">
    <link rel = "stylesheet" href = "main.css">
    <script>
        
        function getQueryParams() {
            const params = {};
            const queryString = window.location.search;
            const urlParams = new URLSearchParams(queryString);

            params.membership = urlParams.get('membership');
            params.price = urlParams.get('price');
            params.duration = urlParams.get('duration');

            const membership = "<?php echo $_SESSION['membership'] ?? ''; ?>";
            const price = "<?php echo $_SESSION['price'] ?? ''; ?>";
            const duration = "<?php echo $_SESSION['duration'] ?? ''; ?>";

            const membershipNames = {
                "1": "Membership",
                "2": "Combo 1",
                "3": "Combo 2",
                "4": "Combo 3",
                "5": "Combo 4",
                "6": "Corporate Sponsor"
            };
            params.name = membershipNames[params.membership];

            return params;
        }

        function populateCheckout() {
            const params = getQueryParams();

            

            document.getElementById('membership-name').innerText = params.name || "NA";
            document.getElementById('membership-price').innerText = `$${params.price}` || "NA";
            document.getElementById('membership-duration').innerText = `${params.duration || 0} year`;
            document.getElementById('total-price').innerText = `$${params.price}` || "NA";
        }

        function togglePopup(popupId) {
            const popup = document.getElementById(popupId);
            popup.style.display = popup.style.display === "block" ? "none" : "block";
        }

        window.onload = () => {
            populateCheckout();

            document.getElementById('signup-btn').onclick = () => togglePopup('signup-popup');
            document.getElementById('login-btn').onclick = () => togglePopup('login-popup');

            document.querySelectorAll('.close').forEach(closeButton => {
                closeButton.onclick = (event) => {
                    event.target.closest('.popup').style.display = "none";
                };
            });

            document.getElementById('switch-to-login').onclick = () => {
                togglePopup('signup-popup');
                togglePopup('login-popup');
            };

            document.getElementById('switch-to-signup').onclick = () => {
                togglePopup('login-popup');
                togglePopup('signup-popup');
            };
        };

        

    </script> 
    <style>
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000;
            background: #fff;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            width: 300px;
            border-radius: 8px;
        }

        .popup h2 {
            margin: 0 0 10px;
        }

        .popup .close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            cursor: pointer;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        .checkout-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .action-button {
            display: block;
            margin: 10px 0;
            padding: 10px;
            background: #007bff;
            color: #fff;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .action-button:hover {
            background: #0056b3;
        }

        form input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form button {
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        form button:hover {
            background: #007bff;
        }

        .checkout-step {
            margin: 20px 0;
            text-align: center;
        }

        #payment-step {
            text-align: center;
            margin-top: 30px;
        }

        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }

        .action-button {
            width: 150px;
        }

        .popup .action-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }

        .popup .action-button {
            width: 120px;
        }

        .logout-button {
            margin-left: 15px;
            background: #ff4c4c;
        }

        .logout-button:hover {
            background: #e03e3e;
        }

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


    <div class="checkout-container">
        <header>
        <h1>Checkout</h1>
        </header>

        <div class="checkout-step">
            <h2>1. Sign Up</h2>
            <p>To purchase this plan and use its benefits in the future, log in to your account or sign up.</p>
            <div class="action-buttons">
                <button id="signup-btn" class="action-button">Sign Up</button>
                <button id="login-btn" class="action-button">Log In</button>
            </div>
        </div>

        <?php
        if (isset($_SESSION['email'])) {
            echo "<p>Logged in as " . $_SESSION['email'] . "</p>";
            echo '<form method="POST"><button type="submit" name="logout" class="logout-button action-button">Logout</button></form>';
        } else {
            echo "<p>You are not logged in.</p>";
        }
        ?>

        <div id="payment-step" class="checkout-step">
            <h2>2. Payment</h2>
            <h3>Order Summary</h3>
            <p><strong>Membership</strong>: <span id="membership-name"></span></p>
            <p>Price: <span id="membership-price"></span></p>
            <p>Duration: <span id="membership-duration"></span></p>
            <p><strong>Total</strong>: <span id="total-price"></span></p>
            <?php
            
            if (isset($_SESSION['email'])) {
                //echo "<p>Membership: " . $_SESSION['membership'] . "</p>";
                
                $membershipId = $_SESSION['membership'] == '6' ? 3 : 2;
                $loginEmail = $_SESSION['email'];

                
            
                if (isset($_GET['PayerID'])) {


                $update_query = "
                    UPDATE user_membership 
                    SET membership_id = ?, date_added = GETDATE() 
                    WHERE login_id = (SELECT login_id FROM users_login WHERE email = ?)
                ";
            
                $params = array($membershipId, $loginEmail);
                $stmt = sqlsrv_query($conn, $update_query, $params);
            
                if ($stmt === false) {
                } else {

                }
            
            
                sqlsrv_free_stmt($stmt);
                //sqlsrv_close($conn);

                }
                

                $price = $_SESSION['price'];
                $paypalUrl = "https://www.sandbox.paypal.com/cgi-bin/webscr";
                $paypalId = "sb-lv8e734183667@business.example.com";
                ?>
                
                

                <form action="<?= $paypalUrl ?>" method="post">
                    <input type="hidden" name="cmd" value="_xclick">
                    <input type="hidden" name="business" value="<?= $paypalId ?>">
                    <input type="hidden" name="item_name" value="<?= $_SESSION['membership'] ?>">
                    <input type="hidden" name="amount" value="<?= $price ?>">
                    <input type="hidden" name="currency_code" value="USD">
                    <!--<input type="hidden" name="return" value="http://localhost/FOCV/checkout.php">
                    <input type="hidden" name="cancel_return" value="http://localhost/FOCV/checkout.php">
                    <input type="hidden" name="custom" value="<?//= $_SESSION['email'] ?>">-->
                    <input type="hidden" name="return" value="http://localhost/FOCV/checkout.php<?php echo $queryString; ?>">
                    <input type="hidden" name="cancel_return" value="http://localhost/FOCV/checkout.php<?php echo $queryString; ?>">
                    <button type="submit" class="action-button" name = "pay_now">Pay Now</button>
                </form>
                <?php
            } else {
                echo "<p>Please log in to proceed with payment.</p>";
            }
                

            ?>
        </div>


    <div id="signup-popup" class="popup">
        <span class="close">&times;</span>
        <h2>Sign Up</h2>
        <p>Already a member? <a href="#" id="switch-to-login">Log In</a></p>
        <form id="signup-form" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="submit">Sign Up</button>
        </form>
    </div>

    <?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    sqlsrv_begin_transaction($conn);

    try {
        $check_email_query = "SELECT login_id FROM users_login WHERE email = ?";
        $params_check_email = array($email);
        $stmt_check_email = sqlsrv_query($conn, $check_email_query, $params_check_email);

        if (sqlsrv_has_rows($stmt_check_email)) {
            echo "<script>alert('Email is already registered.');</script>";
        } else {
            $insert_users_login_query = "INSERT INTO users_login (email, password)
                                         OUTPUT INSERTED.login_id
                                         VALUES (?, ?)";
            $params_users_login = array($email, $password_hash);
            $stmt_users_login = sqlsrv_query($conn, $insert_users_login_query, $params_users_login);
            if ($stmt_users_login === false) {
            }
            $users_login_row = sqlsrv_fetch_array($stmt_users_login, SQLSRV_FETCH_ASSOC);
            $login_id = $users_login_row['login_id'];

            $insert_users_query = "INSERT INTO user_membership (login_id, membership_ID)
                                   OUTPUT INSERTED.user_membership_id
                                   VALUES (?, 1)";
            $params_users = array($login_id);
            $stmt_users = sqlsrv_query($conn, $insert_users_query, $params_users);
            if ($stmt_users === false) {
            }

            sqlsrv_commit($conn);

            $_SESSION['email'] = $email;

            //header("Location: " . $_SERVER['PHP_SELF']);
            header("Location: " . $_SERVER['PHP_SELF'] . $queryString);
            exit();

        }

    } catch (Exception $e) {
        sqlsrv_rollback($conn);
        echo "<script>alert('Sign Up Unsuccessful.');</script>";
    }
}

?>


    <div id="login-popup" class="popup">
        <span class="close">&times;</span>
        <h2>Log In</h2>
        <p>New to this site? <a href="#" id="switch-to-signup">Sign Up</a></p>
        <form id="login-form" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login-submit">Log In</button>
        </form>
    </div>

    <?php
if (isset($_POST['login-submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];


    
    $check_email_query = "SELECT login_id, password FROM users_login WHERE email = ?";
    $params_check_email = array($email);
    //$params_check_email = $email;

    echo $check_email_query;
    echo "array($email)";


    $stmt_check_email = sqlsrv_query($conn, $check_email_query, $params_check_email);

    

    if ($stmt_check_email !== false && sqlsrv_has_rows($stmt_check_email)) {
        $user = sqlsrv_fetch_array($stmt_check_email, SQLSRV_FETCH_ASSOC);
        $stored_password = $user['password'];

        if (password_verify($password, $stored_password)) {
            $_SESSION['email'] = $email;

            //header("Location: " . $_SERVER['PHP_SELF']);
            header("Location: " . $_SERVER['PHP_SELF'] . $queryString);
            exit();
        } else {
            echo "<script>alert('Incorrect password.');</script>";
        }
    }
}

?>

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
        

    <?php
    ob_end_flush();
    ?>



</body>
</html>



