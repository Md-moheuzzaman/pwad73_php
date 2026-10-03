<?php
$loginError = false;

if (isset($_POST['submit'])) {
    $email = $_POST['email'] ?? '';
    $password = md5($_POST['password'] ?? '');

    include_once('dbconfig.php');
    $result = $conn->query("SELECT * FROM users WHERE email = '$email' AND password = '$password'");

    if ($result && $result->num_rows > 0) {
        session_start();
        $_SESSION['email'] = $email;
        header('Location: dashboard.php');
        exit;
    }

    $loginError = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#10152a">
    <title>Sign in | PWA 73</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="login-shell">
        <section class="welcome-panel" aria-label="Welcome">
            <div class="brand">
                <span class="brand-mark" aria-hidden="true">
                    <span>P</span>
                </span>
                <span>PWAD 73</span>
            </div>

            <div class="welcome-copy">
                <span class="eyebrow">Your workspace awaits</span>
                <h1>Good to see you again.</h1>
                <p>Sign in to pick up where you left off and keep your work moving forward.</p>
            </div>

            <div class="panel-note">A clearer view of what matters.</div>
        </section>

        <section class="form-panel" aria-labelledby="login-title">
            <div class="form-heading">
                <h2 id="login-title">Welcome back</h2>
                <p>Enter your details to access your account.</p>
            </div>

            <?php if ($loginError): ?>
                <div class="error-message" role="alert">
                    <svg viewBox="0 0 20 20" fill="none" aria-hidden="true">
                        <circle cx="10" cy="10" r="8" stroke="currentColor" stroke-width="1.6"/>
                        <path d="M10 6v4.5m0 3h.01" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
                    </svg>
                    <span>We couldn't sign you in with those details. Please check your email and password and try again.</span>
                </div>
            <?php endif; ?>

            <form action="" method="post">
                <div class="field">
                    <label for="email">Email address</label>
                    <input type="email" id="email" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"> <br>
                    
                </div>

                <div class="field">
                    <label for="password">Password</label>
                    <div class="input-wrap">
                        <input class="password-input" type="password" id="password" name="password" placeholder="Enter your password" autocomplete="current-password" required>
                        <button class="password-toggle" type="button" aria-controls="password" aria-pressed="false">Show</button>
                    </div>
                </div>

                <button class="submit-button" type="submit" name="submit" value="1">
                    <span>Sign in</span>
                    <svg viewBox="0 0 20 20" fill="none" aria-hidden="true">
                        <path d="M4 10h11m-4.5-4.5L15 10l-4.5 4.5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </form>

            <div class="secure-note">
                <svg viewBox="0 0 16 16" fill="none" aria-hidden="true">
                    <rect x="3.25" y="7" width="9.5" height="7" rx="1.5" stroke="currentColor" stroke-width="1.3"/>
                    <path d="M5.25 7V4.75a2.75 2.75 0 0 1 5.5 0V7" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>
                </svg>
                Your sign-in is private and secure
            </div>
        </section>
    </main>
    <script>
        const passwordInput = document.getElementById('password');
        const passwordToggle = document.querySelector('.password-toggle');

        passwordToggle.addEventListener('click', () => {
            const isVisible = passwordInput.type === 'text';
            passwordInput.type = isVisible ? 'password' : 'text';
            passwordToggle.textContent = isVisible ? 'Show' : 'Hide';
            passwordToggle.setAttribute('aria-pressed', String(!isVisible));
        });
    </script>
</body>
</html>
