<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">


<!-- Libs CSS -->
<link href="{{ asset('assets/fonts/feather/feather.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/css/particle-style.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/libs/dragula/dist/dragula.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/libs/%40mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/libs/prismjs/themes/prism.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/libs/dropzone/dist/dropzone.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/libs/magnific-popup/dist/magnific-popup.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/libs/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/libs/%40yaireo/tagify/dist/tagify.css') }}" rel="stylesheet">


<!-- Theme CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
  <title>Learning Norms</title>
</head>

<body>
  
<!-- Navbar -->
  
<nav class="navbar navbar-expand-lg navbar-default ">
	<div class="container px-0">
	   <a class="navbar-brand" href="{{ route('home') }}">
		   <img src="{{ asset('assets/images/logo.svg') }}" alt="leaning norms" style="height: 25px; width: 150px"/>
		</a>
	   <!-- Mobile view nav wrap -->
	   <ul	class="navbar-nav navbar-right-wrap ml-auto d-lg-none d-flex nav-top-wrap">
		  <li class="dropdown stopevent">
			 <a
				class="btn btn-light btn-icon rounded-circle text-muted indicator indicator-primary"
				href="#!"
				role="button"
				id="dropdownNotification"
				data-toggle="dropdown"
				aria-haspopup="true"
				aria-expanded="false">
			 <i class="fe fe-bell"> </i>
			 </a>
			 <div
				class="dropdown-menu dropdown-menu-right"
				aria-labelledby="dropdownNotification">
				<div>
				   <div class="border-bottom px-3 pt-1 pb-3 d-flex justify-content-between align-items-center">
					  <span class="h5 mb-0">Notifications</span>
					  <a href="# " class="text-muted"
						 ><span class="align-middle"
						 ><i class="fe fe-settings mr-1"></i></span
						 ></a>
				   </div>
				   <ul class="list-group list-group-flush notification-list-scroll">
					  <li class="list-group-item bg-light">
						 <div class="row">
							<div class="col">
							   <div class="d-flex">
								  <img
									 src="{{ asset('assets/images/avatar-1.jpg') }}"
									 alt=""
									 class="avatar-md rounded-circle"
									 />
								  <div class="ml-3">
									 <h5 class="font-weight-bold mb-1">Kristin Watson:</h5>
									 <p class="mb-3">
										Krisitn Watsan like your comment on course Javascript
										Introduction!
									 </p>
									 <span class="font-size-xs text-muted">
									 <span
										><span
										class="fe fe-thumbs-up text-success mr-1"
										></span
										>2 hours ago,</span
										>
									 <span class="ml-1">2:19 PM</span>
									 </span>
								  </div>
							   </div>
							   <a class="stretched-link" href="#!"></a>
							</div>
							<div class="col-auto text-center">
							   <a
								  href="#!"
								  class="badge-dot badge-info"
								  data-toggle="tooltip"
								  data-placement="top"
								  title=""
								  data-original-title="Mark as read"
								  >
							   </a>
							   <div>
								  <a
									 href="#!"
									 data-toggle="tooltip"
									 data-placement="top"
									 title=""
									 data-original-title="Remove"
									 >
								  <i class="fe fe-x text-muted"></i>
								  </a>
							   </div>
							</div>
						 </div>
					  </li>
					  <li class="list-group-item">
						 <div class="row">
							<div class="col">
							   <div class="d-flex">
								  <img
									 src="{{ asset('assets/images/avatar-2.jpg') }}"
									 alt=""
									 class="avatar-md rounded-circle"
									 />
								  <div class="ml-3">
									 <h5 class="font-weight-bold mb-1">Brooklyn Simmons</h5>
									 <p class="mb-3">
										Just launched a new Courses React for Beginner.
									 </p>
									 <span class="font-size-xs text-muted">
									 <span
										><span
										class="fe fe-thumbs-up text-success mr-1"
										></span
										>Oct 9,</span
										>
									 <span class="ml-1">1:20 PM</span>
									 </span>
								  </div>
							   </div>
							   <a class="stretched-link" href="#!"></a>
							</div>
							<div class="col-auto text-center">
							   <a
								  href="#!"
								  class="badge-dot badge-secondary"
								  data-toggle="tooltip"
								  data-placement="top"
								  title=""
								  data-original-title="Mark as unread"
								  >
							   </a>
							</div>
						 </div>
					  </li>
					  <li class="list-group-item">
						 <div class="row">
							<div class="col">
							   <div class="d-flex">
								  <img
									 src="{{ asset('assets/images/avatar-3.jpg') }}"
									 alt=""
									 class="avatar-md rounded-circle"
									 />
								  <div class="ml-3">
									 <h5 class="font-weight-bold mb-1">Jenny Wilson</h5>
									 <p class="mb-3">
										Krisitn Watsan like your comment on course Javascript
										Introduction!
									 </p>
									 <span class="font-size-xs text-muted">
									 <span
										><span class="fe fe-thumbs-up text-info mr-1"></span
										>Oct 9,</span
										>
									 <span class="ml-1">1:56 PM</span>
									 </span>
								  </div>
							   </div>
							   <a class="stretched-link" href="#!"></a>
							</div>
							<div class="col-auto text-center">
							   <a
								  href="#!"
								  class="badge-dot badge-secondary"
								  data-toggle="tooltip"
								  data-placement="top"
								  title=""
								  data-original-title="Mark as unread"
								  >
							   </a>
							</div>
						 </div>
					  </li>
					  <li class="list-group-item">
						 <div class="row">
							<div class="col">
							   <div class="d-flex">
								  <img
									 src="{{ asset('assets/images/avatar-4.jpg') }}"
									 alt=""
									 class="avatar-md rounded-circle"
									 />
								  <div class="ml-3">
									 <h5 class="font-weight-bold mb-1">Sina Ray</h5>
									 <p class="mb-3">
										You earn new certificate for complete the Javascript
										Beginner course.
									 </p>
									 <span class="font-size-xs text-muted">
									 <span
										><span class="fe fe-award text-warning mr-1"></span
										>Oct 9,</span
										>
									 <span class="ml-1">1:56 PM</span>
									 </span>
								  </div>
							   </div>
							   <a class="stretched-link" href="#!"></a>
							</div>
							<div class="col-auto text-center">
							   <a
								  href="#!"
								  class="badge-dot badge-secondary"
								  data-toggle="tooltip"
								  data-placement="top"
								  title=""
								  data-original-title="Mark as unread"
								  >
							   </a>
							</div>
						 </div>
					  </li>
				   </ul>
				   <div class="border-top px-3 pt-3 pb-0">
					  <a
						 href="pages/notification-history.html"
						 class="text-muted"
						 >See all Notifications</a
						 >
				   </div>
				</div>
			 </div>
		  </li>
		  <li class="dropdown ml-2">
			 <a
				class="rounded-circle"
				href="#!"
				role="button"
				id="dropdownUser"
				data-toggle="dropdown"
				aria-haspopup="true"
				aria-expanded="false"
				>
				<div class="avatar avatar-md avatar-indicators avatar-online">
				   <img
					  alt="avatar"
					  src="{{ asset('assets/images/avatar-1.jpg') }}"
					  class="rounded-circle"
					  />
				</div>
			 </a>
			 <div
				class="dropdown-menu dropdown-menu-right"
				aria-labelledby="dropdownUser"
				>
				<div class="dropdown-item">
				   <div class="d-flex">
					  <div class="avatar avatar-md avatar-indicators avatar-online">
						 <img
							alt="avatar"
							src="{{ asset('assets/images/avatar-1.jpg') }}"
							class="rounded-circle"
							/>
					  </div>
					  <div class="ml-3 lh-1">
						 <h5 class="mb-1">Annette Black</h5>
						 <p class="mb-0 text-muted">annette@geeksui.com</p>
					  </div>
				   </div>
				</div>
				<div class="dropdown-divider"></div>
				<ul class="list-unstyled">
				   <li class="dropdown-submenu dropleft-lg">
					  <a
						 class="dropdown-item dropdown-list-group-item dropdown-toggle"
						 href="#!"
						 >
					  <i class="fe fe-circle mr-2"></i>Status
					  </a>
					  <ul class="dropdown-menu">
						 <li>
							<a class="dropdown-item" href="#!">
							<span class="badge-dot bg-success mr-2"></span>Online
							</a>
						 </li>
						 <li>
							<a class="dropdown-item" href="#!">
							<span class="badge-dot bg-secondary mr-2"></span>Offline
							</a>
						 </li>
						 <li>
							<a class="dropdown-item" href="#!">
							<span class="badge-dot bg-warning mr-2"></span>Away
							</a>
						 </li>
						 <li>
							<a class="dropdown-item" href="#!">
							<span class="badge-dot bg-danger mr-2"></span>Busy
							</a>
						 </li>
					  </ul>
				   </li>
				   <li>
					  <a class="dropdown-item" href="pages/profile-edit.html">
					  <i class="fe fe-user mr-2"></i>Profile
					  </a>
				   </li>
				   <li>
					  <a
						 class="dropdown-item"
						 href="pages/student-subscriptions.html"
						 >
					  <i class="fe fe-star mr-2"></i>Subscription
					  </a>
				   </li>
				   <li>
					  <a class="dropdown-item" href="#!">
					  <i class="fe fe-settings mr-2"></i>Settings
					  </a>
				   </li>
				</ul>
				<div class="dropdown-divider"></div>
				<ul class="list-unstyled">
				   <li>
					  <a class="dropdown-item" href="{{ route('home') }}">
					  <i class="fe fe-power nav-icon"></i>Sign Out
					  </a>
				   </li>
				</ul>
			 </div>
		  </li>
	   </ul>
	   <!-- Button -->
	   <button
		  class="navbar-toggler collapsed"
		  type="button"
		  data-toggle="collapse"
		  data-target="#navbar-default"
		  aria-controls="navbar-default"
		  aria-expanded="false"
		  aria-label="Toggle navigation"
		  >
	   <span class="icon-bar top-bar mt-0"></span>
	   <span class="icon-bar middle-bar"></span>
	   <span class="icon-bar bottom-bar"></span>
	   </button>
	   <!-- Collapse -->
	   <div class="collapse navbar-collapse" id="navbar-default">
		  <ul class="navbar-nav">
			 <li class="nav-item dropdown">
				<a
				   class="nav-link dropdown-toggle"
				   href="#!"
				   id="navbarBrowse"
				   data-toggle="dropdown"
				   aria-haspopup="true"
				   aria-expanded="false"
				   data-display="static"
				   >
				Browse Courses
				</a>
				<ul
				   class="dropdown-menu dropdown-menu-arrow"
				   aria-labelledby="navbarBrowse"
				   >
				   <li class="dropdown-submenu dropright">
					  <a
						 class="dropdown-item dropdown-list-group-item dropdown-toggle"
						 href="#!"
						 >
					  Web Development
					  </a>
					  <ul class="dropdown-menu">
						 <li>
							<a
							   class="dropdown-item"
							   href="pages/course-category.html"
							   >
							Bootstrap</a
							   >
						 </li>
						 <li>
							<a
							   class="dropdown-item"
							   href="pages/course-category.html"
							   >
							React
							</a>
						 </li>
						 <li>
							<a
							   class="dropdown-item"
							   href="pages/course-category.html"
							   >
							GraphQl</a
							   >
						 </li>
						 <li>
							<a
							   class="dropdown-item"
							   href="pages/course-category.html"
							   >
							Gatsby</a
							   >
						 </li>
						 <li>
							<a
							   class="dropdown-item"
							   href="pages/course-category.html"
							   >
							Grunt</a
							   >
						 </li>
						 <li>
							<a
							   class="dropdown-item"
							   href="pages/course-category.html"
							   >
							Svelte</a
							   >
						 </li>
						 <li>
							<a
							   class="dropdown-item"
							   href="pages/course-category.html"
							   >
							Meteor</a
							   >
						 </li>
						 <li>
							<a
							   class="dropdown-item"
							   href="pages/course-category.html"
							   >
							HTML5</a
							   >
						 </li>
						 <li>
							<a
							   class="dropdown-item"
							   href="pages/course-category.html"
							   >
							Angular</a
							   >
						 </li>
					  </ul>
				   </li>
				   <li class="dropdown-submenu dropright">
					  <a
						 class="dropdown-item dropdown-list-group-item dropdown-toggle"
						 href="#!"
						 >
					  Design
					  </a>
					  <ul class="dropdown-menu">
						 <li>
							<a
							   class="dropdown-item"
							   href="pages/course-category.html"
							   >
							Graphic Design</a
							   >
						 </li>
						 <li>
							<a
							   class="dropdown-item"
							   href="pages/course-category.html"
							   >
							Illustrator
							</a>
						 </li>
						 <li>
							<a
							   class="dropdown-item"
							   href="pages/course-category.html"
							   >
							UX / UI Design</a
							   >
						 </li>
						 <li>
							<a
							   class="dropdown-item"
							   href="pages/course-category.html"
							   >
							Figma Design</a
							   >
						 </li>
						 <li>
							<a
							   class="dropdown-item"
							   href="pages/course-category.html"
							   >
							Adobe XD</a
							   >
						 </li>
						 <li>
							<a
							   class="dropdown-item"
							   href="pages/course-category.html"
							   >
							Sketch</a
							   >
						 </li>
						 <li>
							<a
							   class="dropdown-item"
							   href="pages/course-category.html"
							   >
							Icon Design</a
							   >
						 </li>
						 <li>
							<a
							   class="dropdown-item"
							   href="pages/course-category.html"
							   >
							Photoshop</a
							   >
						 </li>
					  </ul>
				   </li>
				   <li>
					  <a
						 href="pages/course-category.html"
						 class="dropdown-item"
						 >
					  Mobile App
					  </a>
				   </li>
				</ul>
			 </li>
			 <li class="nav-item dropdown">
				<a
				   class="nav-link dropdown-toggle"
				   href="#!"
				   id="navbarAccount"
				   data-toggle="dropdown"
				   aria-haspopup="true"
				   aria-expanded="false"
				   >
				Accounts
				</a>
				<ul
				   class="dropdown-menu dropdown-menu-arrow"
				   aria-labelledby="navbarAccount"
				   >
				   <li>
					  <h4 class="dropdown-header">Accounts</h4>
				   </li>
				   <li class="dropdown-submenu dropright">
					  <a
						 class="dropdown-item dropdown-list-group-item dropdown-toggle"
						 href="#!"
						 >
					  Instructor
					  </a>
					  <ul class="dropdown-menu">
						 <li class="text-wrap">
							<h5 class="dropdown-header text-dark">Instructor</h5>
							<p class="dropdown-text mb-0">
							   Instructor dashboard for manage courses and earning.
							</p>
						 </li>
						 <li>
							<hr class="mx-3" />
						 </li>
						 <li>
							<a
							   class="dropdown-item"
							   href="pages/dashboard-instructor.html"
							   >
							Sign Up</a
							   >
						 </li>
						 <li>
							<a
							   class="dropdown-item"
							   href="pages/dashboard-instructor.html"
							   >
							Log In</a
							   >
						 </li>
					  </ul>
				   </li>
				   <li class="dropdown-submenu dropright">
					  <a
						 class="dropdown-item dropdown-list-group-item dropdown-toggle"
						 href="#!"
						 >
					  Students
					  </a>
					  <ul class="dropdown-menu">
						 <li class="text-wrap">
							<h5 class="dropdown-header text-dark">Students</h5>
							<p class="dropdown-text mb-0">
							   Students dashboard to manage your courses and subscriptions.
							</p>
						 </li>
						 <li>
							<hr class="mx-3" />
						 </li>
						 <li>
							<a
							   class="dropdown-item"
							   href="pages/dashboard-student.html"
							   >
							Sign Up</a
							   >
						 </li>
						 <li>
							<a
							   class="dropdown-item"
							   href="pages/dashboard-student.html"
							   >
							Log In</a
							   >
						 </li>
					  </ul>
				   </li>
				</ul>
			 </li>
		  </ul>
		  
		  <ul class="navbar-nav navbar-right-wrap ml-auto d-none d-lg-block">
            <form class="mt-3 mt-lg-0 ml-lg-3 d-flex align-items-center">
                <span class="position-absolute pl-3 search-icon">
                <i class="fe fe-search"></i>
                </span>
                <input
                   type="search"
                   class="form-control pl-6"
                   placeholder="Search Courses"
                   />
             </form>
			 {{-- <li class="dropdown d-inline-block stopevent">
				<a
				   class="btn btn-light btn-icon rounded-circle text-muted indicator indicator-primary"
				   href="#!"
				   role="button"
				   id="dropdownNotificationSecond"
				   data-toggle="dropdown"
				   aria-haspopup="true"
				   aria-expanded="false"
				   >
				<i class="fe fe-bell"> </i>
				</a>
				<div
				   class="dropdown-menu dropdown-menu-xl dropdown-menu-right"
				   aria-labelledby="dropdownNotificationSecond"
				   >
				   <div>
					  <div
						 class="border-bottom px-3 pt-1 pb-3 d-flex justify-content-between align-items-center"
						 >
						 <span class="h5 mb-0">Notifications</span>
						 <a href="# " class="text-muted"
							><span class="align-middle"
							><i class="fe fe-settings mr-1"></i></span
							></a>
					  </div>
					  <ul class="list-group list-group-flush notification-list-scroll">
						 <li class="list-group-item bg-light">
							<div class="row">
							   <div class="col">
								  <div class="d-flex">
									 <img
										src="{{ asset('assets/images/avatar-1.jpg') }}"
										alt=""
										class="avatar-md rounded-circle"
										/>
									 <div class="ml-3">
										<h5 class="font-weight-bold mb-1">Kristin Watson:</h5>
										<p class="mb-3">
										   Krisitn Watsan like your comment on course
										   Javascript Introduction!
										</p>
										<span class="font-size-xs text-muted">
										<span
										   ><span
										   class="fe fe-thumbs-up text-success mr-1"
										   ></span
										   >2 hours ago,</span
										   >
										<span class="ml-1">2:19 PM</span>
										</span>
									 </div>
								  </div>
								  <a class="stretched-link" href="#!"></a>
							   </div>
							   <div class="col-auto text-center">
								  <a
									 href="#!"
									 class="badge-dot badge-info"
									 data-toggle="tooltip"
									 data-placement="top"
									 title=""
									 data-original-title="Mark as read"
									 >
								  </a>
								  <div>
									 <a
										href="#!"
										class="bg-transparent"
										data-toggle="tooltip"
										data-placement="top"
										title=""
										data-original-title="Remove"
										>
									 <i class="fe fe-x text-muted"></i>
									 </a>
								  </div>
							   </div>
							</div>
						 </li>
						 <li class="list-group-item">
							<div class="row">
							   <div class="col">
								  <div class="d-flex">
									 <img
										src="{{ asset('assets/images/avatar-2.jpg') }}"
										alt=""
										class="avatar-md rounded-circle"
										/>
									 <div class="ml-3">
										<h5 class="font-weight-bold mb-1">
										   Brooklyn Simmons
										</h5>
										<p class="mb-3">
										   Just launched a new Courses React for Beginner.
										</p>
										<span class="font-size-xs text-muted">
										<span
										   ><span
										   class="fe fe-thumbs-up text-success mr-1"
										   ></span
										   >Oct 9,</span
										   >
										<span class="ml-1">1:20 PM</span>
										</span>
									 </div>
								  </div>
								  <a class="stretched-link" href="#!"></a>
							   </div>
							   <div class="col-auto text-center">
								  <a
									 href="#!"
									 class="badge-dot badge-secondary"
									 data-toggle="tooltip"
									 data-placement="top"
									 title=""
									 data-original-title="Mark as unread"
									 >
								  </a>
							   </div>
							</div>
						 </li>
						 <li class="list-group-item">
							<div class="row">
							   <div class="col">
								  <div class="d-flex">
									 <img
										src="{{ asset('assets/images/avatar-3.jpg') }}"
										alt=""
										class="avatar-md rounded-circle"
										/>
									 <div class="ml-3">
										<h5 class="font-weight-bold mb-1">Jenny Wilson</h5>
										<p class="mb-3">
										   Krisitn Watsan like your comment on course
										   Javascript Introduction!
										</p>
										<span class="font-size-xs text-muted">
										<span
										   ><span
										   class="fe fe-thumbs-up text-info mr-1"
										   ></span
										   >Oct 9,</span
										   >
										<span class="ml-1">1:56 PM</span>
										</span>
									 </div>
								  </div>
								  <a class="stretched-link" href="#!"></a>
							   </div>
							   <div class="col-auto text-center">
								  <a
									 href="#!"
									 class="badge-dot badge-secondary"
									 data-toggle="tooltip"
									 data-placement="top"
									 title=""
									 data-original-title="Mark as unread"
									 >
								  </a>
							   </div>
							</div>
						 </li>
						 <li class="list-group-item">
							<div class="row">
							   <div class="col">
								  <div class="d-flex">
									 <img
										src="{{ asset('assets/images/avatar-4.jpg') }}"
										alt=""
										class="avatar-md rounded-circle"
										/>
									 <div class="ml-3">
										<h5 class="font-weight-bold mb-1">Sina Ray</h5>
										<p class="mb-3">
										   You earn new certificate for complete the Javascript
										   Beginner course.
										</p>
										<span class="font-size-xs text-muted">
										<span
										   ><span
										   class="fe fe-award text-warning mr-1"
										   ></span
										   >Oct 9,</span
										   >
										<span class="ml-1">1:56 PM</span>
										</span>
									 </div>
								  </div>
								  <a class="stretched-link" href="#!"></a>
							   </div>
							   <div class="col-auto text-center">
								  <a
									 href="#!"
									 class="badge-dot badge-secondary"
									 data-toggle="tooltip"
									 data-placement="top"
									 title=""
									 data-original-title="Mark as unread"
									 >
								  </a>
							   </div>
							</div>
						 </li>
					  </ul>
					  <div class="border-top px-3 pt-3 pb-0">
						 <a
							href="pages/notification-history.html"
							class="text-muted"
							>See all Notifications</a
							>
					  </div>
				   </div>
				</div>
			 </li>
			 <li class="dropdown ml-2 d-inline-block">
				<a
				   class="rounded-circle"
				   href="#!"
				   role="button"
				   id="dropdownUserProfile"
				   data-toggle="dropdown"
				   aria-haspopup="true"
				   aria-expanded="false"
				   >
				   <div class="avatar avatar-md avatar-indicators avatar-online">
					  <img
						 alt="avatar"
						 src="{{ asset('assets/images/avatar-1.jpg') }}"
						 class="rounded-circle"
						 />
				   </div>
				</a>
				<div
				   class="dropdown-menu dropdown-menu-right"
				   aria-labelledby="dropdownUserProfile"
				   >
				   <div class="dropdown-item">
					  <div class="d-flex">
						 <div class="avatar avatar-md avatar-indicators avatar-online">
							<img
							   alt="avatar"
							   src="{{ asset('assets/images/avatar-1.jpg') }}"
							   class="rounded-circle"
							   />
						 </div>
						 <div class="ml-3 lh-1">
							<h5 class="mb-1">Annette Black</h5>
							<p class="mb-0 text-muted">annette@geeksui.com</p>
						 </div>
					  </div>
				   </div>
				   <div class="dropdown-divider"></div>
				   <ul class="list-unstyled">
					  <li class="dropdown-submenu dropleft-lg">
						 <a
							class="dropdown-item dropdown-list-group-item dropdown-toggle"
							href="#!"
							>
						 <i class="fe fe-circle mr-2"></i>Status
						 </a>
						 <ul class="dropdown-menu">
							<li>
							   <a class="dropdown-item" href="#!">
							   <span class="badge-dot bg-success mr-2"></span>Online
							   </a>
							</li>
							<li>
							   <a class="dropdown-item" href="#!">
							   <span class="badge-dot bg-secondary mr-2"></span>Offline
							   </a>
							</li>
							<li>
							   <a class="dropdown-item" href="#!">
							   <span class="badge-dot bg-warning mr-2"></span>Away
							   </a>
							</li>
							<li>
							   <a class="dropdown-item" href="#!">
							   <span class="badge-dot bg-danger mr-2"></span>Busy
							   </a>
							</li>
						 </ul>
					  </li>
					  <li>
						 <a
							class="dropdown-item"
							href="pages/profile-edit.html"
							>
						 <i class="fe fe-user mr-2"></i>Profile
						 </a>
					  </li>
					  <li>
						 <a
							class="dropdown-item"
							href="pages/student-subscriptions.html"
							>
						 <i class="fe fe-star mr-2"></i>Subscription
						 </a>
					  </li>
					  <li>
						 <a class="dropdown-item" href="#!">
						 <i class="fe fe-settings mr-2"></i>Settings
						 </a>
					  </li>
				   </ul>
				   <div class="dropdown-divider"></div>
				   <ul class="list-unstyled">
					  <li>
						 <a class="dropdown-item" href="{{ route('home) }}">
						 <i class="fe fe-power nav-icon"></i>Sign Out
						 </a>
					  </li>
				   </ul>
				</div>
			 </li> --}}
		  </ul>
	   </div>
	</div>
</nav>


@yield('user-content')


<div class="footer">
    <div class="container">
        <div class="row align-items-center no-gutters border-top py-2">
            <!-- Desc -->
            <div class="col-md-6 col-12">
                <span>© 2021 Learning Norms. All Rights Reserved.</span>
            </div>
                <!-- Links -->
            <div class="col-12 col-md-6">
                <nav class="nav justify-content-center justify-content-md-end">
                    <a class="nav-link active pl-0" href="#!">Privacy</a>
                    <a class="nav-link" href="#!">Terms </a>
                    <a class="nav-link" href="#!">Feedback</a>
                    <a class="nav-link" href="#!">Support</a>
                </nav>
            </div>
        </div>
    </div>
</div>
    
    
<!-- Scripts -->
<!-- Libs JS -->
<script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/odometer/odometer.min.js') }}"></script>
<script src="{{ asset('assets/libs/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/libs/flatpickr/dist/flatpickr.min.js') }}"></script>
<script src="{{ asset('assets/libs/inputmask/dist/jquery.inputmask.min.js') }}"></script>
<script src="{{ asset('assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/libs/quill/dist/quill.min.js') }}"></script>
<script src="{{ asset('assets/libs/file-upload-with-preview/dist/file-upload-with-preview.min.js') }}"></script>
<script src="{{ asset('assets/libs/dragula/dist/dragula.min.js') }}"></script>
<script src="{{ asset('assets/libs/bs-stepper/dist/js/bs-stepper.min.js') }}"></script>
<script src="{{ asset('assets/libs/dropzone/dist/min/dropzone.min.js') }}"></script>
<script src="{{ asset('assets/libs/jQuery.print/jQuery.print.js') }}"></script>
<script src="{{ asset('assets/libs/prismjs/prism.js') }}"></script>
<script src="{{ asset('assets/libs/prismjs/components/prism-scss.min.js') }}"></script>
<script src="{{ asset('assets/libs/%40yaireo/tagify/dist/tagify.min.js') }}"></script>
<script src="{{ asset('assets/js/particles.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>


<!-- clipboard -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.6/clipboard.min.js"></script>


<!-- Theme JS -->
<script src="{{ asset('assets/js/theme.min.js') }}"></script>


</body>

</html>