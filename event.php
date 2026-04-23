<?php 
/* Template Name: Events Page */
get_header();
?>

<style>
/* Scope everything to prevent theme overrides */
.meetmingle-events {
	margin: 0;
	font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial;
	color: #0f172a;
	background: #f6f7fb;
}
.meetmingle-events * { box-sizing: border-box; }
.meetmingle-events img { display: block; max-width: 100%; height: auto; }

.meetmingle-events .container { width: min(1200px, 92%); margin-inline: auto; }

/* Header (sticky with admin-bar support) */
.meetmingle-events .site-header {
	position: sticky;
	top: 0;
	z-index: 1000;
	background: #fff;
	border-bottom: 1px solid #e6e8ee;
	box-shadow: 0 1px 2px rgba(0,0,0,.04);
}
body.admin-bar .meetmingle-events .site-header { top: 32px; }
@media (max-width: 782px) {
	body.admin-bar .meetmingle-events .site-header { top: 46px; }
}

.meetmingle-events .nav { display: flex; align-items: center; gap: 20px; padding: 14px 0; }
.meetmingle-events .brand { display: flex; align-items: center; gap: 10px; text-decoration: none; color: inherit; }
.meetmingle-events .brand-logo {
	width: 34px; height: 34px; object-fit: contain; border-radius: 8px; background: transparent; border: 0;
}
.meetmingle-events .brand-text { font-weight: 700; font-size: 20px; }

.meetmingle-events .nav-links { display: flex; gap: 16px; margin-left: auto; }
.meetmingle-events .nav-link {
	color: #5b6475; text-decoration: none; padding: 8px 10px; border-radius: 10px; white-space: nowrap;
}
.meetmingle-events .nav-link:hover,
.meetmingle-events .nav-link.active { background: #f1f3f7; color: #0f172a; }

.meetmingle-events .auth { display: flex; gap: 10px; }
.meetmingle-events .btn { border: 0; border-radius: 10px; padding: 10px 14px; font-weight: 600; cursor: pointer; text-decoration: none; display: inline-block; }
.meetmingle-events .btn-ghost { background: transparent; color: #0f172a; }
.meetmingle-events .btn-primary { background: #111827; color: #fff; }
.meetmingle-events .btn-success { background: #06c167; color: #fff; }
.meetmingle-events .btn-success:hover { background: #059455; }

/* Hero */
.meetmingle-events .page-hero { padding: 40px 0 18px; }
.meetmingle-events .page-title { margin: 0 0 8px; font-size: 34px; }
.meetmingle-events .page-subtitle { margin: 0 0 22px; color: #5b6475; max-width: 860px; line-height: 1.6; }

/* Toolbar */
.meetmingle-events .toolbar { display: flex; gap: 12px; flex-wrap: wrap; }
.meetmingle-events .search {
	flex: 1 1 520px; display: flex; align-items: center; gap: 10px; background: #fff;
	border: 1px solid #e6e8ee; border-radius: 999px; padding: 12px 16px;
}
.meetmingle-events .search input { flex: 1; border: 0; outline: 0; font-size: 15px; background: transparent; }
.meetmingle-events .search .icon { width: 18px; height: 18px; color: #9aa3af; }
.meetmingle-events .filters { display: flex; gap: 12px; align-items: center; }
.meetmingle-events .filter-btn {
	display: flex; align-items: center; gap: 8px; padding: 10px 14px; border-radius: 12px;
	border: 1px solid #e6e8ee; background: #fff; cursor: pointer;
}
.meetmingle-events .select { position: relative; }
.meetmingle-events .select select {
	appearance: none; -webkit-appearance: none; padding: 10px 40px 10px 12px; border-radius: 12px;
	border: 1px solid #e6e8ee; background: #fff; font-weight: 600; color: #0f172a;
}
.meetmingle-events .select .chev {
	pointer-events: none; position: absolute; right: 10px; top: 50%; transform: translateY(-50%);
	width: 16px; height: 16px; color: #6b7280;
}

/* Grid + Card */
.meetmingle-events .cards { padding: 18px 0 42px; }
.meetmingle-events .grid { display: grid; gap: 22px; grid-template-columns: repeat(3, 1fr); align-items: stretch; }
.meetmingle-events .card {
	display: flex; flex-direction: column; overflow: hidden; background: #fff;
	border-radius: 16px; box-shadow: 0 6px 16px rgba(17,24,39,.08); border: 1px solid #eef0f4;
	transition: transform .25s ease, box-shadow .25s ease;
}
.meetmingle-events .card:hover { transform: translateY(-4px); box-shadow: 0 18px 40px rgba(17,24,39,.12); }
.meetmingle-events .media { position: relative; aspect-ratio: 16 / 9; overflow: hidden; background: #ddd; }
.meetmingle-events .media img { width: 100%; height: 100%; object-fit: cover; transition: transform .35s ease; }
.meetmingle-events .card:hover .media img { transform: scale(1.04); }
.meetmingle-events .pill {
	position: absolute; left: 14px; top: 14px; background: #111827; color: #fff;
	font-size: 12px; padding: 6px 10px; border-radius: 999px; box-shadow: 0 4px 12px rgba(0,0,0,.25);
}
.meetmingle-events .card-body { padding: 16px 16px 18px; display: flex; flex-direction: column; gap: 10px; }
.meetmingle-events .card-title { margin: 4px 0 0; font-size: 20px; }
.meetmingle-events .card-text { margin: 0; color: #5b6475; }
.meetmingle-events .meta { list-style: none; margin: 6px 0 0; padding: 0; display: grid; gap: 8px; }
.meetmingle-events .meta li { display: flex; align-items: center; gap: 10px; color: #4b5563; font-size: 14px; }
.meetmingle-events .meta .dot { width: 6px; height: 6px; border-radius: 50%; background: #9aa3af; }
.meetmingle-events .byline { color: #6b7280; font-size: 13px; margin-top: 2px; }
.meetmingle-events .card .btn { align-self: flex-start; margin-top: 8px; border-radius: 12px; padding: 10px 16px; }

/* CTA */
.meetmingle-events .cta { padding: 54px 0; }
.meetmingle-events .cta-inner {
	text-align: center; background: #fff; border: 1px solid #e6e8ee; border-radius: 20px;
	padding: 40px 20px; box-shadow: 0 1px 2px rgba(0,0,0,.04);
}
.meetmingle-events .cta p { color: #5b6475; max-width: 820px; margin: 8px auto 16px; line-height: 1.6; }

/* Footer */
.meetmingle-events .site-footer { border-top: 1px solid #e6e8ee; padding: 18px 0; background: #fff; color: #6b7280; text-align: center; }

/* Responsive */
@media (max-width:1080px){ .meetmingle-events .grid { grid-template-columns: repeat(2, 1fr); } }
@media (max-width:760px){
	.meetmingle-events .nav-links, .meetmingle-events .auth { display: none; }
	.meetmingle-events .page-title { font-size: 28px; }
	.meetmingle-events .grid { grid-template-columns: 1fr; }
	.meetmingle-events .search { flex: 1 1 100%; }
}
</style>

<div class="meetmingle-events">
	<header class="site-header">
		<div class="container nav">
			<a href="<?php echo esc_url(home_url('/')); ?>" class="brand">
				<img class="brand-logo" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/logo.jpg" alt="MeetMingle logo">
				<span class="brand-text">MeetMingle</span>
			</a>
			<nav class="nav-links">
				<a class="nav-link" href="<?php echo esc_url(home_url('/')); ?>">Home</a>
				<a class="nav-link active" href="<?php echo esc_url(get_permalink(get_page_by_path('events'))); ?>">Events</a>
				<a class="nav-link" href="#">Volunteer</a>
				<a class="nav-link" href="<?php echo esc_url(get_permalink(get_page_by_path('about'))); ?>">About Us</a>
			</nav>
			<div class="auth">
				<?php if (is_user_logged_in()): ?>
					<a href="<?php echo wp_logout_url(home_url()); ?>" class="btn btn-ghost">Log In</a>
					<a href="<?php echo admin_url(); ?>" class="btn btn-primary">Dashboard</a>
				<?php else: ?>
					<a href="<?php echo wp_login_url(); ?>" class="btn btn-ghost">Log In</a>
					<a href="<?php echo wp_registration_url(); ?>" class="btn btn-primary">Sign Up</a>
				<?php endif; ?>
			</div>
		</div>
	</header>

	<main>
		<section class="page-hero">
			<div class="container">
				<h1 class="page-title">Upcoming Events</h1>
				<p class="page-subtitle">
					Discover meaningful volunteer opportunities in your community. Join events that make a difference and connect with like‑minded individuals who share your passion for positive change.
				</p>

				<div class="toolbar">
					<div class="search">
						<svg class="icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M10 2a8 8 0 105.292 14.292l4.208 4.208 1.414-1.414-4.208-4.208A8 8 0 0010 2zm0 2a6 6 0 110 12A6 6 0 0110 4z"/></svg>
						<input type="text" placeholder="Search events..." />
					</div>

					<div class="filters">
						<button class="filter-btn">Filters</button>
						<div class="select">
							<select>
								<option selected>All Categories</option>
								<option>Environment</option>
								<option>Community</option>
								<option>Animals</option>
								<option>Education</option>
							</select>
							<svg class="chev" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M7 10l5 5 5-5H7z"/></svg>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="cards">
			<div class="container grid">
				<!-- Card 1 -->
				<article class="card">
					<div class="media">
						<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/event-1.png" alt="Community Garden Cleanup">
						<span class="pill">Environment</span>
					</div>
					<div class="card-body">
						<h3 class="card-title">Community Garden Cleanup</h3>
						<p class="card-text">Help tidy our neighborhood garden while meeting fellow volunteers.</p>
						<ul class="meta">
							<li><span class="dot"></span> Oct 20, 2024</li>
							<li><span class="dot"></span> 1:00 PM – 4:00 PM</li>
							<li><span class="dot"></span> Central City Garden</li>
							<li><span class="dot"></span> 6 spots left</li>
						</ul>
						<div class="byline">By Community Care Network</div>
						<a href="#" class="btn btn-success">Join Event</a>
					</div>
				</article>

				<!-- Card 2 -->
				<article class="card">
					<div class="media">
						<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/event-2.png" alt="Beach Cleanup Drive">
						<span class="pill">Environment</span>
					</div>
					<div class="card-body">
						<h3 class="card-title">Beach Cleanup Drive</h3>
						<p class="card-text">Protect our coastline by removing trash and sorting recyclables.</p>
						<ul class="meta">
							<li><span class="dot"></span> Oct 25, 2024</li>
							<li><span class="dot"></span> 10:00 AM – 2:00 PM</li>
							<li><span class="dot"></span> Bayfront Beach</li>
							<li><span class="dot"></span> 20 spots left</li>
						</ul>
						<div class="byline">By Coastline Friends</div>
						<a href="#" class="btn btn-success">Join Event</a>
					</div>
				</article>

				<!-- Card 3 -->
				<article class="card">
					<div class="media">
						<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/event-3.jpg" alt="Food Bank Sorting">
						<span class="pill">Community</span>
					</div>
					<div class="card-body">
						<h3 class="card-title">Food Bank Sorting</h3>
						<p class="card-text">Support the food bank by sorting donations and preparing packages.</p>
						<ul class="meta">
							<li><span class="dot"></span> Oct 28, 2024</li>
							<li><span class="dot"></span> 11:00 AM – 3:00 PM</li>
							<li><span class="dot"></span> City Food Bank</li>
							<li><span class="dot"></span> 10 spots left</li>
						</ul>
						<div class="byline">By Helping Hands</div>
						<a href="#" class="btn btn-success">Join Event</a>
					</div>
				</article>

				<!-- Card 4 -->
				<article class="card">
					<div class="media">
						<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/event-4.jpg" alt="Senior Center Visit">
						<span class="pill">Community</span>
					</div>
					<div class="card-body">
						<h3 class="card-title">Senior Center Visit</h3>
						<p class="card-text">Spend time with seniors—games, stories, and good company.</p>
						<ul class="meta">
							<li><span class="dot"></span> Nov 02, 2024</li>
							<li><span class="dot"></span> 12:00 PM – 3:00 PM</li>
							<li><span class="dot"></span> Sunshine Senior Center</li>
							<li><span class="dot"></span> 8 spots left</li>
						</ul>
						<div class="byline">By Community Care Network</div>
						<a href="#" class="btn btn-success">Join Event</a>
					</div>
				</article>

				<!-- Card 5 -->
				<article class="card">
					<div class="media">
						<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/event-5.jpg" alt="Tree Planting Event">
						<span class="pill">Environment</span>
					</div>
					<div class="card-body">
						<h3 class="card-title">Tree Planting Event</h3>
						<p class="card-text">Help plant native trees in local parks with our team.</p>
						<ul class="meta">
							<li><span class="dot"></span> Nov 05, 2024</li>
							<li><span class="dot"></span> 9:30 AM – 1:30 PM</li>
							<li><span class="dot"></span> Oak Hill Park</li>
							<li><span class="dot"></span> 20 spots left</li>
						</ul>
						<div class="byline">By Forest Restoration Project</div>
						<a href="#" class="btn btn-success">Join Event</a>
					</div>
				</article>

				<!-- Card 6 -->
				<article class="card">
					<div class="media">
						<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/event-6.jpg" alt="Animal Shelter Support">
						<span class="pill">Animals</span>
					</div>
					<div class="card-body">
						<h3 class="card-title">Animal Shelter Support</h3>
						<p class="card-text">Assist with feeding, cleaning, and playtime at the shelter.</p>
						<ul class="meta">
							<li><span class="dot"></span> Nov 10, 2024</li>
							<li><span class="dot"></span> 11:00 AM – 3:00 PM</li>
							<li><span class="dot"></span> Happy Tails Shelter</li>
							<li><span class="dot"></span> 10 spots left</li>
						</ul>
						<div class="byline">By Happy Tails Shelter</div>
						<a href="#" class="btn btn-success">Join Event</a>
					</div>
				</article>
			</div>
		</section>

		<section class="cta">
			<div class="container cta-inner">
				<h2>Want to organize an event?</h2>
				<p>Have an idea for a volunteer event or community initiative? We'd love to help you bring it to life and connect you with volunteers.</p>
				<a href="#" class="btn btn-success">Create Event</a>
			</div>
		</section>
	</main>

	<footer class="site-footer">
		<div class="container">© <?php echo date('Y'); ?> MeetMingle</div>
	</footer>
</div>

<?php get_footer(); ?>