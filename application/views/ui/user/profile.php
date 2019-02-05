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
							<h5>شاید این افراد را بشناسید</h5>
							<div class="real-content">

							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="content-box">
							<div class="real-content">
								<h5>اطلاعات شخصی [ <a class="text-success edit-item-icon" href="{base}panel/profile/edit/person" title="ویرایش"><span class="fas fa-lg fa-pen"></span></a> ]</h5>
								<table class="person-profile-table">
									
									<tr>
										<td>نام</td>
										<td><?php echo $user_person['firstname'] ?></td>
									</tr>

									<tr>
										<td>نام خانوادگی</td>
										<td><?php echo $user_person['lastname'] ?></td>
									</tr>

									<tr>
										<td>کشور</td>
										<td><?php echo $user_person['country_id'] ?></td>
									</tr>

									<tr>
										<td>کد پستی</td>
										<td><?php echo $user_person['zip_code'] ?></td>
									</tr>

									<tr>
										<td>تاریخ تولد</td>
										<td><?php echo $user_person['birthday'] ?></td>
									</tr>

								</table>
							</div>
						</div>
						<div class="content-box">
							<div class="real-content">
								<h5>بیوگرافی [ <a class="text-success edit-item-icon" href="{base}panel/profile/edit/bio" title="ویرایش"><span class="fas fa-lg fa-pen"></span></a> ]</h5>
								<p><?php echo $user_person['biography'] ?></p>
							</div>
						</div>
						<div class="content-box">
							<div class="real-content">
								<h5>موقعیت های شغلی [ <a class="text-success edit-item-icon" href="{base}panel/profile/edit/experience" title="ویرایش"><span class="fas fa-lg fa-pen"></span></a> ]</h5>
								<ul class="user-profile-items">
									<?php 
										if($experience !== false)
										{
											foreach ($experience as $me) {
												echo "<li>" . $me['title'] . "</li>";
											}
										}
										else
										{
											echo "<li>آیتمی موجود نمی باشد.</li>";
										}
									?>
								</ul>
							</div>
						</div>
						<div class="content-box">
							<div class="real-content">
								<h5>مدارک تحصیلی [ <a class="text-success edit-item-icon" href="{base}panel/profile/edit/education" title="ویرایش"><span class="fas fa-lg fa-pen"></span></a> ]</h5>
								<ul class="user-profile-items">
									<?php 
										if($education !== false)
										{
											foreach ($education as $ed) {
												echo "<li>" . $ed['title'] . "</li>";
											}
										}
										else
										{
											echo "<li>آیتمی موجود نمی باشد.</li>";
										}
									?>
								</ul>
							</div>
						</div>
						<div class="content-box">
							<div class="real-content">
								<h5>مهارت ها [ <a class="text-success edit-item-icon" href="{base}panel/profile/edit/skills" title="ویرایش"><span class="fas fa-lg fa-pen"></span></a> ]</h5>
								<ul class="user-profile-items">
									<?php 
										if($skills !== false)
										{
											foreach ($skills as $sk) {
												echo "<li>" . $sk['title'] . "</li>";
											}
										}
										else
										{
											echo "<li>آیتمی موجود نمی باشد.</li>";
										}
									?>
								</ul>
							</div>
						</div>
						<div class="content-box">
							<div class="real-content">
								<h5>پروژه ها [ <a class="text-success edit-item-icon" href="{base}panel/profile/edit/project" title="ویرایش"><span class="fas fa-lg fa-pen"></span></a> ]</h5>
								<ul class="user-profile-items">
									<?php
										if($project !== false)
										{
											foreach ($project as $pe) {
												echo "<li>" . $pe['title'] . "</li>";
											}
										}
										else
										{
											echo "<li>آیتمی موجود نمی باشد.</li>";
										}
									?>
								</ul>
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
							<div class="avatar-timeline text-center">
								<img src="{base}upload/avatar/{user_current_avatar}" title="تصویر کاربری" alt="تصویر کاربری" width="120" height="120" />
							</div>
							<div class="text-center">
								{form_avatar_open}
								<div>
									<label for="file-upload" class="custom-file-upload btn btn-primary d-inline"> انتخاب فایل</label>
									{file_avatar_content}
									{avatar_submit}
								</div>
								<div class="real-content">
									<?php if(!empty($avatar_success)) { ?>
										<p><div class="alert alert-success right-to-left text-right">{avatar_success}</div></p>
									<?php } ?>
								</div>
								{form_close}
							</div>
							<div class="connection-state-timeline text-center">
								<div class="real-content">
									<div class="float-right text-center width-50">
										<p><strong>{user_view_profile}</strong></p>
										<p class="text-gray">بازدیدها</p>
									</div>
									<div class="float-left text-center width-50">
										<p><strong>{user_connection_count}</strong></p>
										<p class="text-gray">ارتباطات</p>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="social-link-timeline left-to-right text-left">
								<div class="real-content">
									{social_form_open}
									<p>
										<span class="fab fa-lg fa-linkedin text-gray"></span>
										<span class="text-gray">{linkedin}</span>
									</p>
									<p>
										<span class="fab fa-lg fa-twitter text-gray"></span>
										<span class="text-gray">{twitter}</span>
									</p>
									<p>
										<span class="fab fa-lg fa-telegram text-gray"></span>
										<span class="text-gray">{telegram}</span>
									</p>
									<p>
										<span class="fab fa-lg fa-skype text-gray"></span>
										<span class="text-gray">{skype}</span>
									</p>
									<p>
										{social_submit}
									</p>
									<div class="clearfix"></div>
									<p>&nbsp;</p>
									<?php if(!empty($social_error)) { ?>
										<div class="alert alert-success right-to-left text-right">{social_error}</div>
									<?php } ?>
									<?php if(!empty($social_success)) { ?>
										<div class="alert alert-success right-to-left text-right">{social_success}</div>
									<?php } ?>
									{form_close}
								</div>
							</div>
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