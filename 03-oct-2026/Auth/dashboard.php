<?php
session_start();

if (empty($_SESSION['email'])) {
    header('Location: index.php');
    exit;
}

$rawEmail = (string) $_SESSION['email'];
$email = htmlspecialchars($rawEmail, ENT_QUOTES, 'UTF-8');
$initial = htmlspecialchars(strtoupper(substr($rawEmail, 0, 1)), ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f4f5fa">
    <title>Dashboard | PWAD 73</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div class="dashboard">
        <aside class="sidebar">
            <a class="brand" href="dashboard.php" aria-label="PWAD 73 dashboard">
                <span class="brand-mark" aria-hidden="true">P</span>
                <span>PWAD 73</span>
            </a>

            <div class="nav-label">WORKSPACE</div>
            <nav class="navigation" aria-label="Main navigation">
                <a class="nav-link active" href="#overview" aria-current="page">
                    <svg viewBox="0 0 20 20" fill="none" aria-hidden="true">
                        <rect x="2.5" y="2.5" width="6" height="6" rx="1.5" stroke="currentColor" stroke-width="1.5"/>
                        <rect x="11.5" y="2.5" width="6" height="6" rx="1.5" stroke="currentColor" stroke-width="1.5"/>
                        <rect x="2.5" y="11.5" width="6" height="6" rx="1.5" stroke="currentColor" stroke-width="1.5"/>
                        <rect x="11.5" y="11.5" width="6" height="6" rx="1.5" stroke="currentColor" stroke-width="1.5"/>
                    </svg>
                    Overview
                </a>
                <a class="nav-link" href="#account">
                    <svg viewBox="0 0 20 20" fill="none" aria-hidden="true">
                        <circle cx="10" cy="6.25" r="3" stroke="currentColor" stroke-width="1.5"/>
                        <path d="M3.75 17.25c.4-3.05 2.85-4.75 6.25-4.75s5.85 1.7 6.25 4.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                    Account
                </a>
            </nav>

            <div class="sidebar-bottom">
                <div class="sidebar-help">
                    <span class="help-icon" aria-hidden="true">?</span>
                    <div>
                        <strong>Need a hand?</strong>
                        <span>Your workspace is ready.</span>
                    </div>
                </div>
                <a class="logout-link" href="logout.php">
                    <svg viewBox="0 0 20 20" fill="none" aria-hidden="true">
                        <path d="M8 3.5H4.75a1.25 1.25 0 0 0-1.25 1.25v10.5a1.25 1.25 0 0 0 1.25 1.25H8M12.5 6.5 16 10l-3.5 3.5M16 10H7" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Sign out
                </a>
            </div>
        </aside>

        <main class="main-content" id="overview">
            <header class="topbar">
                <div class="breadcrumb">Workspace <span>/</span> <strong>Overview</strong></div>
                <div class="user-menu">
                    <span class="user-avatar" aria-hidden="true"><?= $initial ?></span>
                    <span class="user-email"><?= $email ?></span>
                </div>
            </header>

            <div class="page-content">
                <section class="welcome">
                    <div>
                        <span class="eyebrow">YOUR WORKSPACE</span>
                        <h1>Welcome back</h1>
                        <p>You’re signed in and ready to go. Here’s your account at a glance.</p>
                    </div>
                    <div class="welcome-art" aria-hidden="true">
                        <span class="art-orbit orbit-one"></span>
                        <span class="art-orbit orbit-two"></span>
                        <span class="art-spark">✦</span>
                    </div>
                </section>

                <section class="section-heading" aria-labelledby="account-heading">
                    <div>
                        <h2 id="account-heading">Account overview</h2>
                        <p>Your account information and current session.</p>
                    </div>
                </section>

                <div class="overview-grid">
                    <article class="info-card" id="account">
                        <div class="card-top">
                            <span class="card-icon purple-icon" aria-hidden="true">
                                <svg viewBox="0 0 20 20" fill="none">
                                    <circle cx="10" cy="6.25" r="3" stroke="currentColor" stroke-width="1.5"/>
                                    <path d="M3.75 17.25c.4-3.05 2.85-4.75 6.25-4.75s5.85 1.7 6.25 4.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                </svg>
                            </span>
                            <span class="card-kicker">PROFILE</span>
                        </div>
                        <h3>Your account</h3>
                        <p class="card-description">You’re signed in with this email address.</p>
                        <div class="card-value"><?= $email ?></div>
                    </article>

                    <article class="info-card">
                        <div class="card-top">
                            <span class="card-icon green-icon" aria-hidden="true">
                                <svg viewBox="0 0 20 20" fill="none">
                                    <path d="m10 2.5 6.25 2.25v4.6c0 3.55-2.55 6.65-6.25 8.15-3.7-1.5-6.25-4.6-6.25-8.15v-4.6L10 2.5Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                                    <path d="m7.25 9.75 1.8 1.8 3.7-3.8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                            <span class="card-kicker">SECURITY</span>
                        </div>
                        <h3>Session status</h3>
                        <p class="card-description">Your current session is active.</p>
                        <div class="status-value"><span class="status-dot"></span> Signed in</div>
                    </article>
                </div>

                <section class="account-banner">
                    <div class="banner-mark" aria-hidden="true">P</div>
                    <div class="banner-copy">
                        <h2>Good to have you here.</h2>
                        <p>Your PWAD 73 workspace is ready whenever you are.</p>
                    </div>
                    <a href="logout.php" class="banner-link">Sign out <span aria-hidden="true">→</span></a>
                </section>

                <footer class="page-footer">© <?= date('Y') ?> PWAD 73 <span>·</span> Your workspace</footer>
            </div>
        </main>
    </div>
</body>
</html>
