
<?php
session_start();

$isLoggedIn = isset($_SESSION['user_id']);
?>
<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>403 - Unauthorized Access</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/dark-theme.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #101522;
            font-family: Arial, sans-serif;
        }

        .error-card {
            width: 100%;
            max-width: 600px;
            padding: 45px 30px;
            text-align: center;
            border-radius: 20px;
            background: #1b2233;
            box-shadow: 0 10px 35px rgba(0, 0, 0, 0.25);
        }

        .error-icon {
            font-size: 75px;
            color: #ff5b6e;
        }

        .error-code {
            font-size: clamp(65px, 12vw, 100px);
            font-weight: 800;
            line-height: 1.2;
            color: #ff5b6e;
        }

        .error-message {
            color: #b9c1d0;
            line-height: 1.7;
        }

        .btn {
            padding: 11px 22px;
            border-radius: 8px;
        }
    </style>
</head>

<body>

    <main class="container px-3">
        <div class="error-card mx-auto">

            <div class="error-icon mb-3">
                <i class="bi bi-shield-lock-fill"></i>
            </div>

            <div class="error-code">403</div>

            <h2 class="fw-bold mt-3">Access Forbidden!</h2>

            <p class="error-message mt-3 mb-4">
                Sorry, you don't have permission to access this page.
                Please contact your administrator if you believe
                this is a mistake.
            </p>

            <div class="d-flex flex-wrap justify-content-center gap-3">

                <button type="button"
                        class="btn btn-outline-light"
                        onclick="history.back()">
                    <i class="bi bi-arrow-left me-2"></i>
                    Go Back
                </button>

                <?php if ($isLoggedIn): ?>
                    <a href="dashboard_admin.php"
                       class="btn btn-primary">
                        <i class="bi bi-house-door me-2"></i>
                        Dashboard
                    </a>
                <?php else: ?>
                    <a href="login.php"
                       class="btn btn-primary">
                        <i class="bi bi-box-arrow-in-right me-2"></i>
                        Login Now
                    </a>
                <?php endif; ?>

            </div>

            <p class="small text-secondary mt-4 mb-0">
                Error Code: 403 | Unauthorized Access
            </p>

        </div>
    </main>

</body>
</html>
