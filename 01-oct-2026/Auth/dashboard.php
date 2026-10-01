<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Overview | Northstar</title>
	<style>
		:root {
			color-scheme: light;
			--ink: #202b28;
			--muted: #78817c;
			--line: #e8ebe6;
			--paper: #f7f8f5;
			--white: #fff;
			--green: #254c40;
			--green-light: #e6f0e9;
			--lime: #c8e27c;
			--orange: #d68458;
			font-family: "Segoe UI", "Trebuchet MS", sans-serif;
		}

		* { box-sizing: border-box; }

		body {
			min-width: 320px;
			margin: 0;
			background: var(--paper);
			color: var(--ink);
		}

		button, input { font: inherit; }
		button, a { -webkit-tap-highlight-color: transparent; }

		.app-shell { min-height: 100vh; }

		.sidebar {
			position: fixed;
			inset: 0 auto 0 0;
			z-index: 2;
			display: flex;
			width: 244px;
			flex-direction: column;
			padding: 28px 18px 20px;
			background: var(--green);
			color: #f5f7f2;
		}

		.brand {
			display: flex;
			align-items: center;
			gap: 11px;
			margin: 0 10px 46px;
			color: inherit;
			font-size: 18px;
			font-weight: 700;
			letter-spacing: .2px;
			text-decoration: none;
		}

		.brand-mark {
			display: grid;
			width: 34px;
			height: 34px;
			place-items: center;
			border-radius: 10px;
			background: var(--lime);
			color: var(--green);
			font-size: 19px;
			font-weight: 800;
		}

		.nav-label {
			margin: 0 12px 12px;
			color: #aabbb1;
			font-size: 10px;
			font-weight: 700;
			letter-spacing: 1.4px;
			text-transform: uppercase;
		}

		.nav-list { display: grid; gap: 5px; }

		.nav-link {
			display: flex;
			min-height: 44px;
			align-items: center;
			gap: 13px;
			padding: 0 12px;
			border-radius: 7px;
			color: #c5d2c9;
			font-size: 13px;
			text-decoration: none;
			transition: background .18s ease, color .18s ease;
		}

		.nav-link:hover, .nav-link.active {
			background: rgba(255, 255, 255, .11);
			color: #fff;
		}

		.nav-icon {
			display: grid;
			width: 19px;
			place-items: center;
			font-size: 16px;
		}

		.sidebar-bottom {
			margin-top: auto;
			padding-top: 18px;
			border-top: 1px solid rgba(255, 255, 255, .15);
		}

		.sidebar-bottom .nav-link { color: #d0dbd3; }

		.workspace {
			min-height: 100vh;
			margin-left: 244px;
		}

		.topbar {
			display: flex;
			height: 74px;
			align-items: center;
			justify-content: space-between;
			padding: 0 42px;
			border-bottom: 1px solid var(--line);
			background: rgba(255, 255, 255, .82);
		}

		.breadcrumb { color: var(--muted); font-size: 12px; }
		.breadcrumb strong { color: var(--ink); font-weight: 600; }

		.top-actions { display: flex; align-items: center; gap: 22px; }

		.search {
			width: 220px;
			height: 36px;
			padding: 0 12px;
			border: 1px solid var(--line);
			border-radius: 6px;
			outline: none;
			background: #fbfcfa;
			color: var(--ink);
			font-size: 12px;
		}

		.search:focus { border-color: #91aa9b; }
		.search::placeholder { color: #929b95; }

		.user-menu {
			display: flex;
			align-items: center;
			gap: 10px;
			color: var(--ink);
			font-size: 12px;
			font-weight: 600;
			text-decoration: none;
		}

		.avatar {
			display: grid;
			width: 34px;
			height: 34px;
			place-items: center;
			border-radius: 50%;
			background: #ead9c8;
			color: #694c3c;
			font-size: 11px;
			font-weight: 700;
		}

		main { max-width: 1440px; margin: 0 auto; padding: 36px 42px 52px; }

		.page-heading {
			display: flex;
			align-items: flex-end;
			justify-content: space-between;
			gap: 20px;
			margin-bottom: 27px;
		}

		.eyebrow {
			margin: 0 0 7px;
			color: #78877d;
			font-size: 10px;
			font-weight: 700;
			letter-spacing: 1.5px;
			text-transform: uppercase;
		}

		h1 { margin: 0; font-size: 27px; font-weight: 650; letter-spacing: -.3px; }
		.subtitle { margin: 7px 0 0; color: var(--muted); font-size: 13px; }

		.date-control {
			height: 37px;
			padding: 0 12px;
			border: 1px solid var(--line);
			border-radius: 6px;
			background: var(--white);
			color: #4c5952;
			font-size: 11px;
		}

		.stats-grid {
			display: grid;
			grid-template-columns: repeat(4, minmax(0, 1fr));
			gap: 15px;
			margin-bottom: 18px;
		}

		.stat-card, .panel {
			border: 1px solid var(--line);
			border-radius: 7px;
			background: var(--white);
		}

		.stat-card { min-height: 135px; padding: 19px 20px; }
		.stat-top { display: flex; align-items: center; justify-content: space-between; }
		.stat-name { color: var(--muted); font-size: 11px; }
		.stat-symbol { color: #a0aba3; font-size: 16px; }
		.stat-value { margin: 17px 0 8px; font-size: 25px; font-weight: 650; letter-spacing: -.4px; }
		.stat-change { color: #4a8060; font-size: 10px; }
		.stat-change.down { color: #b56d4e; }
		.stat-change span { margin-left: 4px; color: var(--muted); }

		.content-grid {
			display: grid;
			grid-template-columns: minmax(0, 1.7fr) minmax(260px, .9fr);
			gap: 18px;
			margin-bottom: 18px;
		}

		.panel { padding: 20px; }
		.panel-heading { display: flex; align-items: flex-start; justify-content: space-between; gap: 12px; }
		h2 { margin: 0; font-size: 14px; font-weight: 650; }
		.panel-caption { margin: 5px 0 0; color: var(--muted); font-size: 10px; }

		.range-tabs { display: flex; gap: 3px; padding: 3px; border-radius: 5px; background: #f3f5f2; }
		.range-tabs span { padding: 5px 8px; border-radius: 4px; color: #7c867f; font-size: 9px; }
		.range-tabs .selected { background: #fff; color: var(--green); box-shadow: 0 1px 3px #1d30221a; }

		.chart-total { margin: 20px 0 0; font-size: 24px; font-weight: 650; }
		.chart-total small { margin-left: 9px; color: #4a8060; font-size: 10px; font-weight: 500; }

		.chart {
			display: grid;
			height: 147px;
			grid-template-columns: repeat(12, 1fr);
			align-items: end;
			gap: 10px;
			margin-top: 12px;
			padding: 0 4px;
			border-bottom: 1px solid var(--line);
			background: repeating-linear-gradient(to bottom, transparent 0, transparent 35px, #edf0ec 36px, transparent 37px);
		}

		.bar { position: relative; min-width: 8px; border-radius: 3px 3px 0 0; background: #dce9df; }
		.bar:nth-child(3n) { background: #b7d0bc; }
		.bar.current { background: var(--green); }
		.chart-labels { display: flex; justify-content: space-between; padding: 8px 3px 0; color: #929b95; font-size: 9px; }

		.source-list { display: grid; gap: 19px; margin-top: 25px; }
		.source-row { display: grid; grid-template-columns: 1fr auto; gap: 8px; align-items: center; }
		.source-name { color: #56625a; font-size: 11px; }
		.source-percent { color: var(--ink); font-size: 11px; font-weight: 600; }
		.progress { grid-column: 1 / -1; height: 5px; overflow: hidden; border-radius: 5px; background: #edf1ed; }
		.progress span { display: block; height: 100%; border-radius: inherit; background: #5c8a70; }
		.source-row:nth-child(2) .progress span { background: #adc77a; }
		.source-row:nth-child(3) .progress span { background: #d68a60; }
		.source-row:nth-child(4) .progress span { background: #9baaa0; }

		.activity-panel { padding: 0; overflow: hidden; }
		.activity-panel .panel-heading { align-items: center; padding: 20px; }
		.view-all { color: #47715b; font-size: 10px; font-weight: 600; text-decoration: none; }
		.activity-table { width: 100%; border-collapse: collapse; text-align: left; }
		.activity-table th { padding: 11px 20px; border-top: 1px solid var(--line); border-bottom: 1px solid var(--line); background: #fafbf9; color: #89938c; font-size: 9px; font-weight: 600; }
		.activity-table td { padding: 13px 20px; border-bottom: 1px solid #f0f2ef; color: #59645d; font-size: 10px; white-space: nowrap; }
		.activity-table tr:last-child td { border-bottom: 0; }
		.person { display: flex; align-items: center; gap: 9px; color: var(--ink); font-weight: 600; }
		.person .avatar { width: 27px; height: 27px; font-size: 9px; }
		.status { display: inline-flex; align-items: center; gap: 5px; color: #48755a; }
		.status::before { width: 6px; height: 6px; border-radius: 50%; background: #7bb28a; content: ""; }

		@media (max-width: 1050px) {
			.sidebar { width: 205px; }
			.workspace { margin-left: 205px; }
			.topbar, main { padding-right: 26px; padding-left: 26px; }
			.stats-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
			.content-grid { grid-template-columns: minmax(0, 1.4fr) minmax(220px, .9fr); }
		}

		@media (max-width: 720px) {
			.sidebar { position: static; width: auto; height: auto; padding: 13px 16px; }
			.brand { margin: 0 3px; }
			.sidebar > .nav-label, .sidebar > .nav-list, .sidebar-bottom { display: none; }
			.workspace { margin-left: 0; }
			.topbar { height: 58px; padding: 0 17px; }
			.search { width: min(37vw, 180px); }
			.top-actions { gap: 12px; }
			.user-name { display: none; }
			main { padding: 25px 17px 38px; }
			.page-heading { align-items: flex-start; }
			h1 { font-size: 23px; }
			.date-control { max-width: 130px; font-size: 10px; }
			.stats-grid { gap: 10px; }
			.stat-card { min-height: 120px; padding: 15px; }
			.stat-value { font-size: 22px; }
			.content-grid { grid-template-columns: 1fr; gap: 12px; }
			.panel { padding: 16px; }
			.activity-panel { padding: 0; }
			.activity-panel .panel-heading { padding: 16px; }
			.table-wrap { overflow-x: auto; }
			.activity-table { min-width: 590px; }
		}

		@media (max-width: 390px) {
			.breadcrumb { font-size: 10px; }
			.search { width: 115px; }
			.page-heading { flex-direction: column; }
			.date-control { max-width: none; }
			.range-tabs span { padding: 5px 6px; }
		}
	</style>
</head>
<body>
	<div class="app-shell">
		<aside class="sidebar" aria-label="Main navigation">
			<a class="brand" href="#overview"><span class="brand-mark">N</span> Northstar</a>
			<p class="nav-label">Workspace</p>
			<nav class="nav-list">
				<a class="nav-link active" href="#overview" aria-current="page"><span class="nav-icon">⌂</span> Overview</a>
				<a class="nav-link" href="#activity"><span class="nav-icon">♙</span> Users</a>
				<a class="nav-link" href="#performance"><span class="nav-icon">▥</span> Reports</a>
				<a class="nav-link" href="#sources"><span class="nav-icon">◉</span> Analytics</a>
			</nav>
			<div class="sidebar-bottom">
				<a class="nav-link" href="#settings"><span class="nav-icon">⚙</span> Settings</a>
				<a class="nav-link" href="index.php"><span class="nav-icon">↪</span> Sign out</a>
			</div>
		</aside>

		<div class="workspace">
			<header class="topbar">
				<div class="breadcrumb">Workspace <span aria-hidden="true">/</span> <strong>Overview</strong></div>
				<div class="top-actions">
					<input class="search" type="search" placeholder="Search anything..." aria-label="Search">
					<a class="user-menu" href="#profile" aria-label="Signed in as Alex Morgan">
						<span class="avatar">AM</span><span class="user-name">Alex Morgan</span>
					</a>
				</div>
			</header>

			<main id="overview">
				<section class="page-heading" aria-labelledby="page-title">
					<div>
						<p class="eyebrow">Thursday, October 1, 2026</p>
						<h1 id="page-title">Good morning, Alex</h1>
						<p class="subtitle">Here is what is happening with your workspace today.</p>
					</div>
					<button class="date-control" type="button">Last 30 days&nbsp; ▾</button>
				</section>

				<section class="stats-grid" aria-label="Key metrics">
					<article class="stat-card">
						<div class="stat-top"><span class="stat-name">Total users</span><span class="stat-symbol">♙</span></div>
						<p class="stat-value">2,841</p><div class="stat-change">↑ 12.8% <span>vs last month</span></div>
					</article>
					<article class="stat-card">
						<div class="stat-top"><span class="stat-name">Active sessions</span><span class="stat-symbol">◉</span></div>
						<p class="stat-value">184</p><div class="stat-change">↑ 8.2% <span>vs last month</span></div>
					</article>
					<article class="stat-card">
						<div class="stat-top"><span class="stat-name">New sign-ups</span><span class="stat-symbol">＋</span></div>
						<p class="stat-value">326</p><div class="stat-change">↑ 4.6% <span>vs last month</span></div>
					</article>
					<article class="stat-card">
						<div class="stat-top"><span class="stat-name">Avg. engagement</span><span class="stat-symbol">◷</span></div>
						<p class="stat-value">6m 24s</p><div class="stat-change down">↓ 2.1% <span>vs last month</span></div>
					</article>
				</section>

				<section class="content-grid" aria-label="Workspace analytics">
					<article class="panel" id="performance">
						<div class="panel-heading">
							<div><h2>Workspace activity</h2><p class="panel-caption">User activity over the past 30 days</p></div>
							<div class="range-tabs" aria-label="Chart interval"><span>7D</span><span class="selected">30D</span><span>90D</span></div>
						</div>
						<p class="chart-total">18,492 <small>↑ 9.4%</small></p>
						<div class="chart" role="img" aria-label="Bar chart showing daily user activity trending upward">
							<span class="bar" style="height: 34%"></span><span class="bar" style="height: 46%"></span>
							<span class="bar" style="height: 40%"></span><span class="bar" style="height: 57%"></span>
							<span class="bar" style="height: 50%"></span><span class="bar" style="height: 66%"></span>
							<span class="bar" style="height: 55%"></span><span class="bar" style="height: 72%"></span>
							<span class="bar" style="height: 64%"></span><span class="bar" style="height: 83%"></span>
							<span class="bar" style="height: 76%"></span><span class="bar current" style="height: 96%"></span>
						</div>
						<div class="chart-labels"><span>Sep 1</span><span>Sep 8</span><span>Sep 15</span><span>Sep 22</span><span>Sep 30</span></div>
					</article>

					<article class="panel" id="sources">
						<div class="panel-heading"><div><h2>Traffic sources</h2><p class="panel-caption">Where users find you</p></div></div>
						<div class="source-list">
							<div class="source-row"><span class="source-name">Direct</span><span class="source-percent">42%</span><div class="progress"><span style="width: 42%"></span></div></div>
							<div class="source-row"><span class="source-name">Organic search</span><span class="source-percent">31%</span><div class="progress"><span style="width: 31%"></span></div></div>
							<div class="source-row"><span class="source-name">Social</span><span class="source-percent">18%</span><div class="progress"><span style="width: 18%"></span></div></div>
							<div class="source-row"><span class="source-name">Referral</span><span class="source-percent">9%</span><div class="progress"><span style="width: 9%"></span></div></div>
						</div>
					</article>
				</section>

				<section class="panel activity-panel" id="activity" aria-labelledby="activity-title">
					<div class="panel-heading">
						<div><h2 id="activity-title">Recent activity</h2><p class="panel-caption">Latest updates from your workspace</p></div>
						<a class="view-all" href="#activity">View all&nbsp; →</a>
					</div>
					<div class="table-wrap">
						<table class="activity-table">
							<thead><tr><th>USER</th><th>ACTIVITY</th><th>DATE</th><th>STATUS</th></tr></thead>
							<tbody>
								<tr><td><span class="person"><span class="avatar">JL</span> Jordan Lee</span></td><td>Created a new account</td><td>Today, 10:42 AM</td><td><span class="status">Completed</span></td></tr>
								<tr><td><span class="person"><span class="avatar">SK</span> Sam Kim</span></td><td>Updated profile details</td><td>Today, 9:18 AM</td><td><span class="status">Completed</span></td></tr>
								<tr><td><span class="person"><span class="avatar">RP</span> Riley Patel</span></td><td>Signed in to workspace</td><td>Today, 8:56 AM</td><td><span class="status">Completed</span></td></tr>
								<tr><td><span class="person"><span class="avatar">MT</span> Morgan Taylor</span></td><td>Invited a team member</td><td>Yesterday, 4:32 PM</td><td><span class="status">Completed</span></td></tr>
							</tbody>
						</table>
					</div>
				</section>
			</main>
		</div>
	</div>
</body>
</html>
