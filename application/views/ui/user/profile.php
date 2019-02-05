<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>لینکدین فارسی - پروفایل من</title>
	<link rel="stylesheet" type="text/css" href="{base}assets/layout/layout.css">
	<link rel="stylesheet" type="text/css" href="{base}assets/library/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{base}assets/library/bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="{base}assets/library/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="{base}assets/library/fontawesome/css/all.min.css">
	<link rel="shortcut icon" href="{base}assets/images/favicon.png"/>
</head>
<body class="user-panel">

	<header>
		<div class="header">
			<div class="container">
				<div class="row right-to-left text-right">
					<div class="col-md-3">
						<a href="{base}panel" title="پنل کاربری">
							<div class="logo">
								<span class="fab fa-lg fa-linkedin"></span>
								<h1 class="d-inline text-dark">لینکدین فارسی | پنل کاربری</h1>
							</div>
						</a>
					</div>
					<div class="col-md-6">
						<div class="search">
							{form_search_open}
								{search_input}
							{form_close}
						</div>
					</div>
					<div class="col-md-3 left-to-right">
						<nav class="navbar">
							<ul class="nav">
								<a href="{base}panel/out" title="خروج"><li><span class="fas fa-lg fa-power-off text-danger"></span></li></a>
								<a href="{base}panel/setting" title="تنظیمات"><li><span class="fas fa-lg fa-cog"></span></li></a>
								<a href="{base}panel/profile" title="پروفایل من"><li><span class="fas fa-lg fa-user"></span></li></a>
								<a href="{base}panel/notification" title="اعلانات"><li><span class="fas fa-lg fa-bell"></span></li></a>
								<a href="{base}panel/message" title="پیام ها"><li><span class="fas fa-lg fa-envelope"></span></li></a>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div class="container">
		<section>
			<div class="content">
				<div class="row right-to-left text-right">
					<div class="col-md-3">
						<div class="content-box">
							<h5>خلاصه آمار</h5>
							<div class="real-content">
								<div class="float-right text-center">
									<p><strong>0</strong></p>
									<p class="text-gray">بازدیدکنندگان</p>
								</div>
								<div class="float-left text-center">
									<p><strong>0</strong></p>
									<p class="text-gray">بازدید پست ها</p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="content-box">
							<h5>شاید این افراد را بشناسید</h5>
							<div class="real-content">

							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="content-box">
							<div class="real-content">
								<h5>بیوگرافی [ <a class="text-success edit-item-icon" href="{base}panel/profile/edit/bio" title="ویرایش"><span class="fas fa-lg fa-pen"></span></a> ]</h5>
								<p><?php echo $user_person['biography'] ?></p>
							</div>
						</div>
						<div class="content-box">
							<div class="real-content">
								<h5>موقعیت های شغلی [ <a class="text-success edit-item-icon" href="{base}panel/profile/edit/experience" title="ویرایش"><span class="fas fa-lg fa-pen"></span></a> ]</h5>
							</div>
						</div>
						<div class="content-box">
							<div class="real-content">
								<h5>مدارک تحصیلی [ <a class="text-success edit-item-icon" href="{base}panel/profile/edit/education" title="ویرایش"><span class="fas fa-lg fa-pen"></span></a> ]</h5>
							</div>
						</div>
						<div class="content-box">
							<div class="real-content">
								<h5>مهارت ها [ <a class="text-success edit-item-icon" href="{base}panel/profile/edit/skills" title="ویرایش"><span class="fas fa-lg fa-pen"></span></a> ]</h5>
							</div>
						</div>
						<div class="content-box">
							<div class="real-content">
								<h5>پروژه ها [ <a class="text-success edit-item-icon" href="{base}panel/profile/edit/project" title="ویرایش"><span class="fas fa-lg fa-pen"></span></a> ]</h5>
							</div>
						</div>
						<div class="content-box">
							<div class="real-content">
								<h5>ارتباطات [ <a class="text-primary edit-item-icon" href="{base}panel/profile/connections" title="مشاهده همه"><span class="fas fa-lg fa-eye"></span></a> ]</h5>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="content-box">
							<div class="avatar-timeline">
								<img src="" title="" alt="" />
								<h2 class="display-4"></h2>
							</div>
							<div class="connection-state-timeline">
								<div class="">

								</div>
								<div class="">

								</div>
							</div>
							<div class="social-link-timeline">
						</div>
					</div>
				</div>
			</div>
		</section>

		<footer>
			<div class="footer">
				<div class="row">
					
				</div>
			</div>
		</footer>
	</div>

	<script href="{base}assets/library/jquery/jquery-3.3.1.min.js"></script>
	<script href="{base}assets/library/bootstrap/js/bootstrap.min.js"></script>
	<script href="{base}assets/library/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
