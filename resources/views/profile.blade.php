<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Responsive Bootstrap 5 admin dashboard template & web App ui kit.">
<meta name="keyword" content="LUNO, Bootstrap 5, ReactJs, Angular, Laravel, VueJs, ASP .Net, Admin Dashboard, Admin Theme, HRMS, Projects, Hospital Admin, CRM Admin, Events, Fitness, Music, Inventory, Job Portal">
<link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon">
<title>:: LUNO :: Account Settings</title>


<link rel="stylesheet" href="./assets/css/luno-style.css">

<script src="./assets/js/plugins.js"></script>
</head>
<body class="layout-1" data-luno="theme-blue">

<div class="sidebar p-2 py-md-3 @@cardClass">
<div class="container-fluid">

<div class="title-text d-flex align-items-center mb-4 mt-1">
<h4 class="sidebar-title mb-0 flex-grow-1"><span class="sm-txt">L</span><span>UNO Admin</span></h4>
<div class="dropdown morphing scale-left">
<a class="dropdown-toggle more-icon" href="#" role="button" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
<ul class="dropdown-menu shadow border-0 p-2 mt-2" data-bs-popper="none">
<li class="fw-bold px-2">Quick Actions</li>
<li>
<hr class="dropdown-divider">
</li>
<li><a class="dropdown-item" href="./landing/index.html" aria-current="page">Landing page</a></li>
<li><a class="dropdown-item" href="./inventory/index.html">Inventory</a></li>
<li><a class="dropdown-item" href="./ecommerce/index.html">eCommerce</a></li>
<li><a class="dropdown-item" href="./hrms/index.html">HRMS</a></li>
<li>
<hr class="dropdown-divider">
</li>
<li><a class="dropdown-item" href="./account-invoices.html">Invoices List</a></li>
<li><a class="dropdown-item" href="./account-create-invoices.html">Create Invoices</a></li>
</ul>
</div>
</div>

<div class="create-new py-3 mb-2">
<div class="d-flex">
<select class="form-select rounded-pill me-1">
<option selected>Select Project</option>
<option value="1">Luno University</option>
<option value="2">Book Manager</option>
<option value="3">Luno Sass App</option>
</select>
<button class="btn bg-primary text-white rounded-circle" data-bs-toggle="modal" data-bs-target="#CreateNew" type="button"><i class="fa fa-plus"></i></button>
</div>
</div>

<div class="main-menu flex-grow-1">
<ul class="menu-list">
<li class="divider py-2 lh-sm"><span class="small">MAIN</span><br> <small class="text-muted">Unique dashboard designs </small></li>
<li class="collapsed">
<a class="m-link" data-bs-toggle="collapse" data-bs-target="#my_dashboard" href="#">
<svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
<path class="var(--secondary-color)" fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
</svg>
<span class="ms-2">My Dashboard</span>
<span class="arrow fa fa-angle-right ms-auto text-end"></span>
</a>

<ul class="sub-menu collapse" id="my_dashboard">
<li><a class="ms-link" href="index.html">Analysis</a></li>
<li><a class="ms-link" href="index-wallet.html">My wallet</a></li>
<li><a class="ms-link" href="index-iot.html">IOT</a></li>
</ul>
</li>
<li class="collapsed">
<a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu_dashboard" href="#">
<svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
<path class="fill-secondary" d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
<path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
</svg>
<span class="ms-2">Unique Dashboard</span>
<span class="arrow fa fa-angle-right ms-auto text-end"></span>
</a>

<ul class="sub-menu collapse" id="menu_dashboard">
<li><a class="ms-link" href="./crm/index.html">CRM Management</a></li>
<li><a class="ms-link" href="./crypto/index.html">Cryptocurrency</a></li>
<li><a class="ms-link" href="./ecommerce/index.html">eCommerce</a></li>
<li><a class="ms-link" href="./event/index.html">Event Management</a></li>
<li><a class="ms-link" href="./fitness/index.html">Fitness Analytics</a></li>
<li><a class="ms-link" href="./hospital/index.html">Hospital Management</a></li>
<li><a class="ms-link" href="./hrms/index.html">HR & Project</a></li>
<li><a class="ms-link" href="./inventory/index.html">Inventory Management</a></li>
<li><a class="ms-link" href="./job-portal/index.html">job Portal</a></li>
<li><a class="ms-link" href="./music/index.html">Music Streaming</a></li>
<li><a class="ms-link" href="./nft/index.html">NFT Dashboard (New)</a></li>
<li><a class="ms-link" href="./real-estate/index.html">Real-Estate</a></li>
<li><a class="ms-link" href="./restaurant/index.html">Restaurant & Cafe</a></li>
<li><a class="ms-link" href="./server/index.html">Server Analysis</a></li>
<li><a class="ms-link" href="./university/index.html">School / University</a></li>
</ul>
</li>
<li class="collapsed">
<a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Applications" href="#">
<svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
<path d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
<path class="fill-secondary" d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
</svg>
<span class="ms-2">Applications</span>
<span class="arrow fa fa-angle-right ms-auto text-end"></span>
</a>

<ul class="sub-menu collapse" id="menu-Applications">
<li><a class="ms-link" href="app-calendar.html">Calendar</a></li>
<li><a class="ms-link" href="app-calendar-tui.html">tui Calendar</a></li>
<li><a class="ms-link" href="app-email.html">Email App</a></li>
<li><a class="ms-link" href="app-chat.html">Chat app</a></li>
<li><a class="ms-link" href="app-campaigns.html">Campaigns</a></li>
<li><a class="ms-link" href="app-social.html">Social App</a></li>
<li><a class="ms-link" href="app-file-manager.html">File Manager</a></li>
<li><a class="ms-link" href="app-todo.html">Todo App</a></li>
<li><a class="ms-link" href="app-contacts.html">Contacts</a></li>
<li><a class="ms-link" href="app-tasks.html">Tasks</a></li>
<li><a class="ms-link" href="app-project.html">Project List</a></li>
<li><a class="ms-link" href="app-jkanban.html">Kanban Board</a></li>
<li><a class="ms-link" href="app-blog.html">Blog Post</a></li>
<li><a class="ms-link" href="app-blog-detail.html">Blog Details</a></li>
<li><a class="ms-link" href="./landing/blog.html">Blog Preivew</a></li>
</ul>
</li>
<li class="collapsed">
<a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu_pages" href="#">
<svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
<path class="fill-secondary" fill-rule="evenodd" d="M8.646 5.646a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 8 8.646 6.354a.5.5 0 0 1 0-.708zm-1.292 0a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0 0 .708l2 2a.5.5 0 0 0 .708-.708L5.707 8l1.647-1.646a.5.5 0 0 0 0-.708z" />
<path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
<path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
</svg>
<span class="ms-2">Crafted Pages</span>
<span class="arrow fa fa-angle-right ms-auto text-end"></span>
</a>

<ul class="sub-menu collapse" id="menu_pages">
<li><a class="ms-link" href="page-profile.html">My Profile</a></li>
<li><a class="ms-link" href="page-bookmark.html">Bookmarks</a></li>
<li><a class="ms-link" href="page-timeline.html">Timeline</a></li>
<li><a class="ms-link" href="page-imagegallery.html">Image Gallery</a></li>
<li><a class="ms-link" href="page-pricing.html">Pricing</a></li>
<li><a class="ms-link" href="page-teamsboard.html">Teams Board</a></li>
<li><a class="ms-link" href="page-support-ticket.html">Support Ticket</a></li>
<li><a class="ms-link" href="page-faqs.html">FAQs</a></li>
<li><a class="ms-link" href="page-search.html">Search Pages</a></li>
<li><a class="ms-link" href="page-footers.html">Footers</a></li>
</ul>
</li>
<li class="collapsed">
<a class="m-link active" data-bs-toggle="collapse" data-bs-target="#menu-Account" href="#">
<svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
<path fill-rule="evenodd" clip-rule="evenodd" d="M2 1C1.46957 1 0.960859 1.21071 0.585786 1.58579C0.210714 1.96086 0 2.46957 0 3L0 13C0 13.5304 0.210714 14.0391 0.585786 14.4142C0.960859 14.7893 1.46957 15 2 15H14C14.5304 15 15.0391 14.7893 15.4142 14.4142C15.7893 14.0391 16 13.5304 16 13V3C16 2.46957 15.7893 1.96086 15.4142 1.58579C15.0391 1.21071 14.5304 1 14 1H2ZM1 3C1 2.73478 1.10536 2.48043 1.29289 2.29289C1.48043 2.10536 1.73478 2 2 2H14C14.2652 2 14.5196 2.10536 14.7071 2.29289C14.8946 2.48043 15 2.73478 15 3V13C15 13.2652 14.8946 13.5196 14.7071 13.7071C14.5196 13.8946 14.2652 14 14 14H2C1.73478 14 1.48043 13.8946 1.29289 13.7071C1.10536 13.5196 1 13.2652 1 13V3ZM2 5.5C2 5.36739 2.05268 5.24021 2.14645 5.14645C2.24021 5.05268 2.36739 5 2.5 5H6C6.13261 5 6.25979 5.05268 6.35355 5.14645C6.44732 5.24021 6.5 5.36739 6.5 5.5C6.5 5.63261 6.44732 5.75979 6.35355 5.85355C6.25979 5.94732 6.13261 6 6 6H2.5C2.36739 6 2.24021 5.94732 2.14645 5.85355C2.05268 5.75979 2 5.63261 2 5.5ZM2 8.5C2 8.36739 2.05268 8.24021 2.14645 8.14645C2.24021 8.05268 2.36739 8 2.5 8H6C6.13261 8 6.25979 8.05268 6.35355 8.14645C6.44732 8.24021 6.5 8.36739 6.5 8.5C6.5 8.63261 6.44732 8.75979 6.35355 8.85355C6.25979 8.94732 6.13261 9 6 9H2.5C2.36739 9 2.24021 8.94732 2.14645 8.85355C2.05268 8.75979 2 8.63261 2 8.5ZM2 10.5C2 10.3674 2.05268 10.2402 2.14645 10.1464C2.24021 10.0527 2.36739 10 2.5 10H6C6.13261 10 6.25979 10.0527 6.35355 10.1464C6.44732 10.2402 6.5 10.3674 6.5 10.5C6.5 10.6326 6.44732 10.7598 6.35355 10.8536C6.25979 10.9473 6.13261 11 6 11H2.5C2.36739 11 2.24021 10.9473 2.14645 10.8536C2.05268 10.7598 2 10.6326 2 10.5Z" />
<path class="fill-secondary" d="M8.5 11C8.5 11 8 11 8 10.5C8 10 8.5 8.5 11 8.5C13.5 8.5 14 10 14 10.5C14 11 13.5 11 13.5 11H8.5ZM11 8C11.3978 8 11.7794 7.84196 12.0607 7.56066C12.342 7.27936 12.5 6.89782 12.5 6.5C12.5 6.10218 12.342 5.72064 12.0607 5.43934C11.7794 5.15804 11.3978 5 11 5C10.6022 5 10.2206 5.15804 9.93934 5.43934C9.65804 5.72064 9.5 6.10218 9.5 6.5C9.5 6.89782 9.65804 7.27936 9.93934 7.56066C10.2206 7.84196 10.6022 8 11 8V8Z" />
</svg>
<span class="ms-2">Account</span>
<span class="arrow fa fa-angle-right ms-auto text-end"></span>
</a>

<ul class="sub-menu collapse show" id="menu-Account">
<li><a class="ms-link active" href="account-settings.html">Settings</a></li>
<li><a class="ms-link" href="account-invoices.html">Invoice List</a></li>
<li><a class="ms-link" href="account-create-invoice.html">Create Invoices</a></li>
<li><a class="ms-link" href="account-billing.html">Billing</a></li>
</ul>
</li>
<li class="collapsed">
<a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Authentication" href="#">
<svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
<path d="M5.33801 1.59C4.38559 1.85248 3.43965 2.1379 2.50101 2.446C2.41529 2.47376 2.3391 2.52504 2.28111 2.59399C2.22312 2.66295 2.18567 2.7468 2.17301 2.836C1.61901 6.993 2.89901 10.026 4.42601 12.024C5.07252 12.8784 5.84341 13.6311 6.71301 14.257C7.05901 14.501 7.36501 14.677 7.60601 14.79C7.72601 14.847 7.82401 14.885 7.89901 14.908C7.93181 14.9195 7.96562 14.9279 8.00001 14.933C8.03398 14.9275 8.06743 14.9191 8.10001 14.908C8.17601 14.885 8.27401 14.847 8.39401 14.79C8.63401 14.677 8.94101 14.5 9.28701 14.257C10.1566 13.6311 10.9275 12.8784 11.574 12.024C13.101 10.027 14.381 6.993 13.827 2.836C13.8145 2.74676 13.777 2.66285 13.719 2.59388C13.661 2.52491 13.5848 2.47366 13.499 2.446C12.848 2.233 11.749 1.886 10.662 1.591C9.55201 1.29 8.53101 1.067 8.00001 1.067C7.47001 1.067 6.44801 1.289 5.33801 1.59ZM5.07201 0.56C6.15701 0.265 7.31001 0 8.00001 0C8.69001 0 9.84301 0.265 10.928 0.56C12.038 0.86 13.157 1.215 13.815 1.43C14.0901 1.52085 14.334 1.68747 14.5187 1.9107C14.7034 2.13394 14.8213 2.40474 14.859 2.692C15.455 7.169 14.072 10.487 12.394 12.682C11.6824 13.621 10.834 14.4479 9.87701 15.135C9.5461 15.3728 9.19549 15.5819 8.82901 15.76C8.54901 15.892 8.24801 16 8.00001 16C7.75201 16 7.45201 15.892 7.17101 15.76C6.80452 15.5819 6.45391 15.3728 6.12301 15.135C5.16603 14.4478 4.31759 13.621 3.60601 12.682C1.92801 10.487 0.545005 7.169 1.14101 2.692C1.17869 2.40474 1.29665 2.13394 1.48132 1.9107C1.666 1.68747 1.9099 1.52085 2.18501 1.43C3.1402 1.11681 4.10281 0.826725 5.07201 0.56Z" />
<path class="fill-secondary" d="M8 5.38462C8.21217 5.38462 8.41566 5.46566 8.56569 5.60992C8.71571 5.75418 8.8 5.94983 8.8 6.15385V6.53846H7.2V6.15385C7.2 5.94983 7.28429 5.75418 7.43431 5.60992C7.58434 5.46566 7.78783 5.38462 8 5.38462ZM9.2 6.53846V6.15385C9.2 5.84783 9.07357 5.55434 8.84853 5.33795C8.62348 5.12157 8.31826 5 8 5C7.68174 5 7.37652 5.12157 7.15147 5.33795C6.92643 5.55434 6.8 5.84783 6.8 6.15385V6.53846C6.58783 6.53846 6.38434 6.61951 6.23431 6.76376C6.08429 6.90802 6 7.10368 6 7.30769V9.23077C6 9.43478 6.08429 9.63044 6.23431 9.7747C6.38434 9.91896 6.58783 10 6.8 10H9.2C9.41217 10 9.61566 9.91896 9.76569 9.7747C9.91571 9.63044 10 9.43478 10 9.23077V7.30769C10 7.10368 9.91571 6.90802 9.76569 6.76376C9.61566 6.61951 9.41217 6.53846 9.2 6.53846Z" />
</svg>
<span class="ms-2">Authentication</span>
<span class="arrow fa fa-angle-right ms-auto text-end"></span>
</a>

<ul class="sub-menu collapse" id="menu-Authentication">
<li><a class="ms-link" href="auth-404.html">404</a></li>
<li><a class="ms-link" href="auth-403.html">403</a></li>
<li><a class="ms-link" href="auth-500.html">500</a></li>
<li><a class="ms-link" href="auth-signin.html">Sign in</a></li>
<li><a class="ms-link" href="auth-signup.html">Sign up</a></li>
<li><a class="ms-link" href="auth-password-reset.html">Password reset</a></li>
<li><a class="ms-link" href="auth-two-step.html">2-Step Authentication</a></li>
<li><a class="ms-link" href="auth-lockscreen.html">Lockscreen</a></li>
<li><a class="ms-link" href="auth-maintenance.html">Maintenance</a></li>
</ul>
</li>
<li class="collapsed">
<a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-level0" href="#">
<svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
<path fill-rule="evenodd" clip-rule="evenodd" d="M6 3.5C6 3.10218 6.15804 2.72064 6.43934 2.43934C6.72064 2.15804 7.10218 2 7.5 2H8.5C8.89782 2 9.27936 2.15804 9.56066 2.43934C9.84196 2.72064 10 3.10218 10 3.5V4.5C10 4.89782 9.84196 5.27936 9.56066 5.56066C9.27936 5.84196 8.89782 6 8.5 6V7H14C14.1326 7 14.2598 7.05268 14.3536 7.14645C14.4473 7.24021 14.5 7.36739 14.5 7.5V8.5C14.5 8.63261 14.4473 8.75979 14.3536 8.85355C14.2598 8.94732 14.1326 9 14 9C13.8674 9 13.7402 8.94732 13.6464 8.85355C13.5527 8.75979 13.5 8.63261 13.5 8.5V8H8.5V8.5C8.5 8.63261 8.44732 8.75979 8.35355 8.85355C8.25979 8.94732 8.13261 9 8 9C7.86739 9 7.74021 8.94732 7.64645 8.85355C7.55268 8.75979 7.5 8.63261 7.5 8.5V8H2.5V8.5C2.5 8.63261 2.44732 8.75979 2.35355 8.85355C2.25979 8.94732 2.13261 9 2 9C1.86739 9 1.74021 8.94732 1.64645 8.85355C1.55268 8.75979 1.5 8.63261 1.5 8.5V7.5C1.5 7.36739 1.55268 7.24021 1.64645 7.14645C1.74021 7.05268 1.86739 7 2 7H7.5V6C7.10218 6 6.72064 5.84196 6.43934 5.56066C6.15804 5.27936 6 4.89782 6 4.5V3.5Z" />
<path class="fill-secondary" d="M0.43934 10.4393C0.158035 10.7206 0 11.1022 0 11.5V12.5C0 12.8978 0.158035 13.2794 0.43934 13.5607C0.720644 13.842 1.10218 14 1.5 14H2.5C2.89782 14 3.27936 13.842 3.56066 13.5607C3.84196 13.2794 4 12.8978 4 12.5V11.5C4 11.1022 3.84196 10.7206 3.56066 10.4393C3.27936 10.158 2.89782 10 2.5 10H1.5C1.10218 10 0.720644 10.158 0.43934 10.4393Z" />
<path class="fill-secondary" d="M6.43934 10.4393C6.15804 10.7206 6 11.1022 6 11.5V12.5C6 12.8978 6.15804 13.2794 6.43934 13.5607C6.72064 13.842 7.10218 14 7.5 14H8.5C8.89782 14 9.27936 13.842 9.56066 13.5607C9.84196 13.2794 10 12.8978 10 12.5V11.5C10 11.1022 9.84196 10.7206 9.56066 10.4393C9.27936 10.158 8.89782 10 8.5 10H7.5C7.10218 10 6.72064 10.158 6.43934 10.4393Z" />
<path class="fill-secondary" d="M12.4393 10.4393C12.158 10.7206 12 11.1022 12 11.5V12.5C12 12.8978 12.158 13.2794 12.4393 13.5607C12.7206 13.842 13.1022 14 13.5 14H14.5C14.8978 14 15.2794 13.842 15.5607 13.5607C15.842 13.2794 16 12.8978 16 12.5V11.5C16 11.1022 15.842 10.7206 15.5607 10.4393C15.2794 10.158 14.8978 10 14.5 10H13.5C13.1022 10 12.7206 10.158 12.4393 10.4393Z" />
</svg>
<span class="ms-2">Menu Level 0</span>
<span class="arrow fa fa-angle-right ms-auto text-end"></span>
</a>

<ul class="sub-menu collapse" id="menu-level0">
 <li class="collapsed">
<a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-level1" href="#"><span>Menu Level 1</span> <span class="arrow fa fa-angle-right ms-auto text-end"></span></a>

<ul class="sub-menu collapse" id="menu-level1">
<li class="collapsed">
<a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-level2" href="#"><span>Menu Level 2</span> <span class="arrow fa fa-angle-right ms-auto text-end"></span></a>

<ul class="sub-menu collapse" id="menu-level2">
<li><a class="ms-link" href="#">Menu Level 3</a></li>
</ul>
</li>
<li><a class="ms-link" href="#">Menu Level 2</a></li>
</ul>
</li>
<li><a class="ms-link" href="#">Menu Level 1</a></li>
</ul>
</li>
</ul>
<ul class="menu-list">
<li class="divider py-2 lh-sm"><span class="small">RESOURCES</span><br> <small class="text-muted">you need to know about LUNO</small></li>
<li>
<a class="m-link" href="layouts.html">
<svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
<path d="M14 2a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h12zM2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z" />
<path class="fill-secondary" d="M3 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z" />
</svg>
<span class="ms-2">Layouts</span>
</a>
</li>
<li>
<a class="m-link" href="modals.html">
<svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
<path class="fill-secondary" d="M2 3C2 3.13261 2.05268 3.25979 2.14645 3.35355C2.24021 3.44732 2.36739 3.5 2.5 3.5H13.5C13.6326 3.5 13.7598 3.44732 13.8536 3.35355C13.9473 3.25979 14 3.13261 14 3C14 2.86739 13.9473 2.74021 13.8536 2.64645C13.7598 2.55268 13.6326 2.5 13.5 2.5H2.5C2.36739 2.5 2.24021 2.55268 2.14645 2.64645C2.05268 2.74021 2 2.86739 2 3ZM4 1C4 1.13261 4.05268 1.25979 4.14645 1.35355C4.24021 1.44732 4.36739 1.5 4.5 1.5H11.5C11.6326 1.5 11.7598 1.44732 11.8536 1.35355C11.9473 1.25979 12 1.13261 12 1C12 0.867392 11.9473 0.740215 11.8536 0.646447C11.7598 0.552678 11.6326 0.5 11.5 0.5H4.5C4.36739 0.5 4.24021 0.552678 4.14645 0.646447C4.05268 0.740215 4 0.867392 4 1Z" />
<path d="M13.991 7L14.015 7.001C14.2018 7.01372 14.3845 7.06227 14.553 7.144C14.6744 7.20048 14.7786 7.28812 14.855 7.398C14.922 7.498 15 7.675 15 8V13.991L14.999 14.015C14.9862 14.2018 14.9376 14.3845 14.856 14.553C14.7995 14.6743 14.7118 14.7785 14.602 14.855C14.502 14.922 14.325 15 14 15H2.009L1.985 14.999C1.79817 14.9862 1.61554 14.9376 1.447 14.856C1.32567 14.7995 1.22148 14.7118 1.145 14.602C1.078 14.502 1 14.325 1 14V8.009L1.001 7.985C1.01372 7.79815 1.06227 7.6155 1.144 7.447C1.20052 7.32567 1.28816 7.22148 1.398 7.145C1.498 7.078 1.675 7 2 7H13.991ZM14 6H2C0 6 0 8 0 8V14C0 16 2 16 2 16H14C16 16 16 14 16 14V8C16 6 14 6 14 6Z" />
</svg>
<span class="ms-2">Modals Popups</span>
</a>
</li>
<li>
<a class="m-link" href="docs/w-cards.html">
<svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
<path d="M4 1.5H3C2.46957 1.5 1.96086 1.71071 1.58579 2.08579C1.21071 2.46086 1 2.96957 1 3.5V14C1 14.5304 1.21071 15.0391 1.58579 15.4142C1.96086 15.7893 2.46957 16 3 16H13C13.5304 16 14.0391 15.7893 14.4142 15.4142C14.7893 15.0391 15 14.5304 15 14V3.5C15 2.96957 14.7893 2.46086 14.4142 2.08579C14.0391 1.71071 13.5304 1.5 13 1.5H12V2.5H13C13.2652 2.5 13.5196 2.60536 13.7071 2.79289C13.8946 2.98043 14 3.23478 14 3.5V14C14 14.2652 13.8946 14.5196 13.7071 14.7071C13.5196 14.8946 13.2652 15 13 15H3C2.73478 15 2.48043 14.8946 2.29289 14.7071C2.10536 14.5196 2 14.2652 2 14V3.5C2 3.23478 2.10536 2.98043 2.29289 2.79289C2.48043 2.60536 2.73478 2.5 3 2.5H4V1.5Z" />
<path d="M9.5 1C9.63261 1 9.75979 1.05268 9.85355 1.14645C9.94732 1.24021 10 1.36739 10 1.5V2.5C10 2.63261 9.94732 2.75979 9.85355 2.85355C9.75979 2.94732 9.63261 3 9.5 3H6.5C6.36739 3 6.24021 2.94732 6.14645 2.85355C6.05268 2.75979 6 2.63261 6 2.5V1.5C6 1.36739 6.05268 1.24021 6.14645 1.14645C6.24021 1.05268 6.36739 1 6.5 1H9.5ZM6.5 0C6.10218 0 5.72064 0.158035 5.43934 0.43934C5.15804 0.720644 5 1.10218 5 1.5V2.5C5 2.89782 5.15804 3.27936 5.43934 3.56066C5.72064 3.84196 6.10218 4 6.5 4H9.5C9.89782 4 10.2794 3.84196 10.5607 3.56066C10.842 3.27936 11 2.89782 11 2.5V1.5C11 1.10218 10.842 0.720644 10.5607 0.43934C10.2794 0.158035 9.89782 0 9.5 0L6.5 0Z" />
<path class="fill-secondary" d="M5.556 7.8225C5.54589 7.71838 5.55767 7.6133 5.59058 7.51401C5.6235 7.41472 5.67682 7.32341 5.74712 7.24595C5.81742 7.16849 5.90315 7.10659 5.9988 7.06424C6.09444 7.02188 6.19789 7 6.3025 7H7.5C7.5663 7 7.62989 7.02634 7.67678 7.07322C7.72366 7.12011 7.75 7.1837 7.75 7.25V7.441C7.75 7.789 7.5015 8.032 7.314 8.1755C7.29143 8.19154 7.27195 8.21153 7.2565 8.2345C7.25399 8.2384 7.25198 8.2426 7.2505 8.247L7.25 8.25V8.2515L7.2515 8.2565C7.2535 8.2615 7.2585 8.2705 7.2695 8.283C7.30776 8.32381 7.35362 8.35676 7.4045 8.38C7.545 8.45 7.755 8.5 8 8.5C8.246 8.5 8.456 8.45 8.595 8.38C8.64606 8.35681 8.69209 8.32386 8.7305 8.283C8.73784 8.27497 8.74391 8.26587 8.7485 8.256L8.75 8.251V8.247C8.74853 8.2426 8.74651 8.2384 8.744 8.2345C8.72855 8.21153 8.70907 8.19154 8.6865 8.1755C8.499 8.032 8.2505 7.789 8.2505 7.441V7.25C8.2505 7.18378 8.27677 7.12027 8.32355 7.0734C8.37032 7.02653 8.43378 7.00013 8.5 7H9.6975C9.80211 7 9.90556 7.02188 10.0012 7.06424C10.0968 7.10659 10.1826 7.16849 10.2529 7.24595C10.3232 7.32341 10.3765 7.41472 10.4094 7.51401C10.4423 7.6133 10.4541 7.71838 10.444 7.8225L10.3225 9.25H10.441C10.5385 9.25 10.651 9.1765 10.7785 9.01C10.8835 8.873 11.0425 8.75 11.25 8.75C11.534 8.75 11.7235 8.9735 11.827 9.181C11.9385 9.4035 12 9.6935 12 10C12 10.3065 11.9385 10.5965 11.827 10.819C11.7235 11.0265 11.534 11.25 11.25 11.25C11.0425 11.25 10.8835 11.127 10.7785 10.99C10.651 10.8235 10.5385 10.75 10.441 10.75H10.3225L10.444 12.1775C10.4541 12.2816 10.4423 12.3867 10.4094 12.486C10.3765 12.5853 10.3232 12.6766 10.2529 12.7541C10.1826 12.8315 10.0968 12.8934 10.0012 12.9358C9.90556 12.9781 9.80211 13 9.6975 13H8.5C8.4337 13 8.37011 12.9737 8.32322 12.9268C8.27634 12.8799 8.25 12.8163 8.25 12.75V12.559C8.25 12.211 8.4985 11.968 8.686 11.8245C8.70857 11.8085 8.72805 11.7885 8.7435 11.7655C8.74601 11.7616 8.74802 11.7574 8.7495 11.753L8.75 11.75V11.7485L8.7485 11.7435C8.74386 11.7338 8.7378 11.7249 8.7305 11.717C8.69225 11.6762 8.64639 11.6432 8.5955 11.62C8.455 11.55 8.245 11.5 8 11.5C7.7545 11.5 7.544 11.55 7.405 11.62C7.35393 11.6432 7.3079 11.6761 7.2695 11.717C7.26216 11.725 7.25609 11.7341 7.2515 11.744L7.25 11.749V11.75L7.2505 11.753C7.25198 11.7574 7.25399 11.7616 7.2565 11.7655C7.2645 11.779 7.2815 11.7995 7.314 11.8245C7.5015 11.968 7.75 12.211 7.75 12.559V12.75C7.75 12.8163 7.72366 12.8799 7.67678 12.9268C7.62989 12.9737 7.5663 13 7.5 13H6.3025C6.19789 13 6.09444 12.9781 5.9988 12.9358C5.90315 12.8934 5.81742 12.8315 5.74712 12.7541C5.67682 12.6766 5.6235 12.5853 5.59058 12.486C5.55767 12.3867 5.54589 12.2816 5.556 12.1775L5.678 10.75H5.559C5.4615 10.75 5.349 10.8235 5.2215 10.99C5.1165 11.127 4.9575 11.25 4.75 11.25C4.466 11.25 4.2765 11.0265 4.173 10.819C4.0615 10.5965 4 10.3065 4 10C4 9.6935 4.0615 9.4035 4.173 9.181C4.2765 8.9735 4.466 8.75 4.75 8.75C4.9575 8.75 5.1165 8.873 5.2215 9.01C5.349 9.1765 5.4615 9.25 5.559 9.25H5.678L5.556 7.8225Z" />
</svg>
<span class="ms-2">Widget's</span>
</a>
</li>
<li>
<a class="m-link" href="./docs/index.html">
<svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
<path class="fill-secondary" d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
<path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
<path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
</svg>
<span class="ms-2">Documentation</span>
</a>
</li>
<li>
<a class="m-link" href="./docs/doc-changelog.html">
<svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
<path class="fill-secondary" d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
</svg>
<span class="ms-2">Changelog</span>
<span id="Changelog"></span>
</a>
</li>
</ul>
</div>


<ul class="menu-list nav navbar-nav flex-row text-center menu-footer-link">
<li class="nav-item flex-fill p-2">
<a class="d-inline-block w-100 color-400" href="#" data-bs-toggle="modal" data-bs-target="#ScheduleModal" title="My Schedule">
<svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
<path class="fill-secondary" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
<path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z" />
<path class="fill-secondary" d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z" />
</svg>
</a>
</li>
<li class="nav-item flex-fill p-2">
<a class="d-inline-block w-100 color-400" href="#" data-bs-toggle="modal" data-bs-target="#MynotesModal" title="My notes">
<svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
<path class="fill-secondary" d="M1.5 0A1.5 1.5 0 0 0 0 1.5V13a1 1 0 0 0 1 1V1.5a.5.5 0 0 1 .5-.5H14a1 1 0 0 0-1-1H1.5z" />
<path d="M3.5 2A1.5 1.5 0 0 0 2 3.5v11A1.5 1.5 0 0 0 3.5 16h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 16 9.586V3.5A1.5 1.5 0 0 0 14.5 2h-11zM3 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 .5.5V9h-4.5A1.5 1.5 0 0 0 9 10.5V15H3.5a.5.5 0 0 1-.5-.5v-11zm7 11.293V10.5a.5.5 0 0 1 .5-.5h4.293L10 14.793z" />
</svg>
</a>
</li>
<li class="nav-item flex-fill p-2">
<a class="d-inline-block w-100 color-400" href="#" data-bs-toggle="modal" data-bs-target="#RecentChat">
<svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
<path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
<path class="fill-secondary" d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
</svg>
</a>
</li>
<li class="nav-item flex-fill p-2">
<a class="d-inline-block w-100 color-400" href="./auth-signin.html" title="sign-out">
<svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
<path d="M7.5 1v7h1V1h-1z" />
<path class="fill-secondary" d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z" />
</svg>
</a>
</li>
</ul>
</div>
</div>

<div class="wrapper">

<header class="page-header sticky-top px-xl-4 px-sm-2 px-0 py-lg-2 py-1">
<div class="container-fluid">
<nav class="navbar">

<div class="d-flex">
<button type="button" class="btn btn-link d-none d-xl-block sidebar-mini-btn p-0 text-primary">
<span class="hamburger-icon">
<span class="line"></span>
<span class="line"></span>
<span class="line"></span>
</span>
</button>
<button type="button" class="btn btn-link d-block d-xl-none menu-toggle p-0 text-primary">
<span class="hamburger-icon">
<span class="line"></span>
<span class="line"></span>
<span class="line"></span>
</span>
</button>
<a href="./index.html" class="brand-icon d-flex align-items-center mx-2 mx-sm-3 text-primary">
<svg height="22" viewBox="0 0 67 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path class="fill-muted" d="M0.863281 18.9997V1.14968H3.11328V16.9997H10.9133V18.9997H0.863281Z" />
<path class="fill-muted" d="M27.3045 12.6997C27.3045 13.933 27.0545 15.0497 26.5545 16.0497C26.0545 17.033 25.2878 17.8163 24.2545 18.3997C23.2378 18.9663 21.9378 19.2497 20.3545 19.2497C18.1378 19.2497 16.4462 18.6497 15.2795 17.4497C14.1295 16.233 13.5545 14.633 13.5545 12.6497V1.14968H15.8045V12.7247C15.8045 14.1747 16.1878 15.2997 16.9545 16.0997C17.7378 16.8997 18.9128 17.2997 20.4795 17.2997C21.5628 17.2997 22.4378 17.108 23.1045 16.7247C23.7878 16.3247 24.2878 15.783 24.6045 15.0997C24.9212 14.3997 25.0795 13.5997 25.0795 12.6997V1.14968H27.3045V12.6997Z" />
<path class="fill-secondary" d="M46.5286 0.765681C46.6246 0.82568 46.6726 0.92168 46.6726 1.05368L46.5466 18.6037C46.5466 18.8677 46.3906 18.9937 46.0786 18.9817H44.4586L33.1546 3.62768L33.1006 13.1677L37.5646 13.1857C37.6726 13.1857 37.7626 13.2217 37.8346 13.2937C37.9186 13.3657 37.9606 13.4617 37.9606 13.5817L37.9426 14.8957C37.9426 15.0157 37.9066 15.1237 37.8346 15.2197C37.7626 15.3037 37.6666 15.3457 37.5466 15.3457L31.3726 15.2917H31.3546C31.1026 15.2917 30.9706 15.1837 30.9586 14.9677L31.0666 0.98168C31.0666 0.849679 31.1026 0.74768 31.1746 0.675681C31.2586 0.59168 31.3666 0.555679 31.4986 0.56768H33.1726C33.3406 0.56768 33.4726 0.63368 33.5686 0.765681L44.4406 15.4177L44.5486 0.94568C44.5966 0.741679 44.7286 0.639679 44.9446 0.639679L46.2046 0.65768C46.3126 0.65768 46.4206 0.69368 46.5286 0.765681ZM39.7786 16.7857C39.8986 16.7977 39.9946 16.8397 40.0666 16.9117C40.1386 16.9717 40.1746 17.0677 40.1746 17.1997L40.1566 18.4957C40.1566 18.6157 40.1206 18.7237 40.0486 18.8197C39.9886 18.9037 39.8926 18.9457 39.7606 18.9457H31.3546C31.2346 18.9457 31.1386 18.9097 31.0666 18.8377C30.9946 18.7657 30.9586 18.6697 30.9586 18.5497V17.2357C30.9586 17.1157 30.9946 17.0137 31.0666 16.9297C31.1386 16.8337 31.2406 16.7857 31.3726 16.7857H35.5666C38.0266 16.7857 39.4306 16.7857 39.7786 16.7857Z" />
<path class="fill-muted" d="M66.0301 10.0497C66.0301 11.433 65.8551 12.6913 65.5051 13.8247C65.1551 14.9413 64.6301 15.908 63.9301 16.7247C63.2467 17.5413 62.3884 18.1663 61.3551 18.5997C60.3384 19.033 59.1551 19.2497 57.8051 19.2497C56.4051 19.2497 55.1884 19.033 54.1551 18.5997C53.1217 18.1497 52.2634 17.5247 51.5801 16.7247C50.8967 15.908 50.3884 14.933 50.0551 13.7997C49.7217 12.6663 49.5551 11.408 49.5551 10.0247C49.5551 8.19135 49.8551 6.59135 50.4551 5.22468C51.0551 3.85801 51.9634 2.79135 53.1801 2.02468C54.4134 1.25801 55.9634 0.87468 57.8301 0.87468C59.6134 0.87468 61.1134 1.25801 62.3301 2.02468C63.5467 2.77468 64.4634 3.84135 65.0801 5.22468C65.7134 6.59135 66.0301 8.19968 66.0301 10.0497ZM51.9301 10.0497C51.9301 11.5497 52.1384 12.8413 52.5551 13.9247C52.9717 15.008 53.6134 15.8413 54.4801 16.4247C55.3634 17.008 56.4717 17.2997 57.8051 17.2997C59.1551 17.2997 60.2551 17.008 61.1051 16.4247C61.9717 15.8413 62.6134 15.008 63.0301 13.9247C63.4467 12.8413 63.6551 11.5497 63.6551 10.0497C63.6551 7.79968 63.1884 6.04135 62.2551 4.77468C61.3217 3.49135 59.8467 2.84968 57.8301 2.84968C56.4801 2.84968 55.3634 3.14135 54.4801 3.72468C53.6134 4.29135 52.9717 5.11635 52.5551 6.19968C52.1384 7.26635 51.9301 8.54968 51.9301 10.0497Z" />
</svg>
</a>
</div>

<div class="header-left flex-grow-1 d-none d-md-block">
<div class="main-search px-3 flex-fill">
<input class="form-control" type="text" placeholder="Enter your search key word">
<div class="card shadow rounded-4 search-result slidedown">
<div class="card-body">
<small class="text-uppercase text-muted">Recent searches</small>
<div class="d-flex flex-wrap align-items-start mt-2 mb-4">
<a class="small rounded py-1 px-2 m-1 fw-normal bg-primary text-white" href="#">HRMS Admin</a>
<a class="small rounded py-1 px-2 m-1 fw-normal bg-secondary text-white" href="#">Hospital Admin</a>
<a class="small rounded py-1 px-2 m-1 fw-normal bg-info text-white" href="./app-project.html">Project</a>
<a class="small rounded py-1 px-2 m-1 fw-normal bg-dark text-white" href="./app-social.html">Social App</a>
<a class="small rounded py-1 px-2 m-1 fw-normal bg-danger text-white" href="#">University Admin</a>
</div>
<small class="text-uppercase text-muted">Suggestions</small>
<div class="card list-group list-group-flush list-group-custom mt-2">
<a class="list-group-item list-group-item-action text-truncate" href=".//docs/doc-helperclass.html">
<div class="fw-bold">Helper Class</div>
<small class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
</a>
<a class="list-group-item list-group-item-action text-truncate" href=".//docs/element-daterange.html">
<div class="fw-bold">Date Range Picker</div>
<small class="text-muted">There are many variations of passages of Lorem Ipsum available</small>
</a>
<a class="list-group-item list-group-item-action text-truncate" href=".//docs/element-imageinput.html">
<div class="fw-bold">Image Input</div>
<small class="text-muted">It is a long established fact that a reader will be distracted</small>
</a>
<a class="list-group-item list-group-item-action text-truncate" href=".//docs/plugin-table.html">
<div class="fw-bold">DataTables for jQuery</div>
<small class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
</a>
<a class="list-group-item list-group-item-action text-truncate" href=".//docs/doc-setup.html">
<div class="fw-bold">Development Setup</div>
<small class="text-muted">Contrary to popular belief, Lorem Ipsum is not simply random text.</small>
</a>
</div>
</div>
</div>
</div>
</div>

<ul class="header-right justify-content-end d-flex align-items-center mb-0">

<li>
<div class="dropdown morphing scale-left notifications">
<a class="nav-link dropdown-toggle after-none" href="#" role="button" data-bs-toggle="dropdown">
<span class="d-none d-xl-block me-2">Notification</span>
<svg class="d-inline-block d-xl-none" viewBox="0 0 16 16" width="18px" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M8 1.91802L7.203 2.07902C6.29896 2.26322 5.48633 2.75412 4.90265 3.46864C4.31897 4.18316 4.0001 5.07741 4 6.00002C4 6.62802 3.866 8.19702 3.541 9.74202C3.381 10.509 3.165 11.308 2.878 12H13.122C12.835 11.308 12.62 10.51 12.459 9.74202C12.134 8.19702 12 6.62802 12 6.00002C11.9997 5.07758 11.6807 4.18357 11.097 3.46926C10.5134 2.75494 9.70087 2.26419 8.797 2.08002L8 1.91802ZM14.22 12C14.443 12.447 14.701 12.801 15 13H1C1.299 12.801 1.557 12.447 1.78 12C2.68 10.2 3 6.88002 3 6.00002C3 3.58002 4.72 1.56002 7.005 1.09902C6.99104 0.959974 7.00638 0.819547 7.05003 0.686794C7.09368 0.554041 7.16467 0.43191 7.25842 0.328279C7.35217 0.224647 7.4666 0.141815 7.59433 0.085125C7.72206 0.028435 7.86026 -0.000854492 8 -0.000854492C8.13974 -0.000854492 8.27794 0.028435 8.40567 0.085125C8.5334 0.141815 8.64783 0.224647 8.74158 0.328279C8.83533 0.43191 8.90632 0.554041 8.94997 0.686794C8.99362 0.819547 9.00896 0.959974 8.995 1.09902C10.1253 1.32892 11.1414 1.94238 11.8712 2.83552C12.6011 3.72866 12.9999 4.84659 13 6.00002C13 6.88002 13.32 10.2 14.22 12Z" />
<path class="fill-secondary" d="M9.41421 15.4142C9.03914 15.7893 8.53043 16 8 16C7.46957 16 6.96086 15.7893 6.58579 15.4142C6.21071 15.0391 6 14.5304 6 14H10C10 14.5304 9.78929 15.0391 9.41421 15.4142Z" fill="black" />
</svg>
</a>
<div id="NotificationsDiv" class="dropdown-menu shadow rounded-4 border-0 p-0 m-0">
<div class="card w380">
<div class="card-header p-3">
<h6 class="card-title mb-0">Notifications Center</h6>
<span class="badge bg-danger text-light">14</span>
</div>
<ul class="nav nav-tabs tab-card d-flex text-center" role="tablist">
<li class="nav-item flex-fill"><a class="nav-link active" data-bs-toggle="tab" href="#Noti-tab-Message" role="tab">Message</a></li>
<li class="nav-item flex-fill"><a class="nav-link" data-bs-toggle="tab" href="#Noti-tab-Events" role="tab">Events</a></li>
<li class="nav-item flex-fill"><a class="nav-link" data-bs-toggle="tab" href="#Noti-tab-Logs" role="tab">Logs</a></li>
</ul>
<div class="tab-content card-body custom_scroll">
<div class="tab-pane fade show active" id="Noti-tab-Message" role="tabpanel">
<ul class="list-unstyled list mb-0">
<li class="py-2 mb-1 border-bottom">
<a href="javascript:void(0);" class="d-flex">
<img class="avatar rounded-circle" src="./assets/img/xs/avatar5.jpg" alt="">
<div class="flex-fill ms-3">
<p class="d-flex justify-content-between mb-0"><span>Olive Tree</span> <small>13MIN</small></p>
<span>making it over 2000 years old</span>
</div>
</a>
</li>
<li class="py-2 mb-1 border-bottom">
<a href="javascript:void(0);" class="d-flex">
<img class="avatar rounded-circle" src="./assets/img/xs/avatar6.jpg" alt="">
<div class="flex-fill ms-3">
<p class="d-flex justify-content-between mb-0"><span>Del Phineum</span> <small>1HR</small></p>
<span>There are many variations of passages</span>
</div>
</a>
</li>
<li class="py-2 mb-1 border-bottom">
<a href="javascript:void(0);" class="d-flex">
<img class="avatar rounded-circle" src="./assets/img/xs/avatar1.jpg" alt="">
<div class="flex-fill ms-3">
<p class="d-flex justify-content-between mb-0"><span>Rose Bush</span> <small>2MIN</small></p>
<span>changed an issue from "In Progress" to <span class="badge bg-success">Review</span></span>
 </div>
</a>
</li>
<li class="py-2 mb-1 border-bottom">
<a href="javascript:void(0);" class="d-flex">
<div class="avatar rounded-circle no-thumbnail">PT</div>
<div class="flex-fill ms-3">
<p class="d-flex justify-content-between mb-0"><span>Pat Thettick</span> <small>13MIN</small></p>
<span>It is a long established fact that a reader will be distracted</span>
</div>
</a>
</li>
<li class="py-2 mb-1 border-bottom">
<a href="javascript:void(0);" class="d-flex">
<img class="avatar rounded-circle" src="./assets/img/xs/avatar3.jpg" alt="">
<div class="flex-fill ms-3">
<p class="d-flex justify-content-between mb-0"><span>Eileen Dover</span> <small>1HR</small></p>
<span>There are many variations of passages</span>
</div>
</a>
</li>
<li class="py-2 mb-1 border-bottom">
<a href="javascript:void(0);" class="d-flex">
<img class="avatar rounded-circle" src="./assets/img/xs/avatar4.jpg" alt="">
<div class="flex-fill ms-3">
<p class="d-flex justify-content-between mb-0"><span>Carmen Goh</span> <small>1DAY</small></p>
<span>Contrary to popular belief <span class="badge bg-danger">Code</span></span>
</div>
</a>
</li>
<li class="py-2">
<a href="javascript:void(0);" class="d-flex">
<img class="avatar rounded-circle" src="./assets/img/xs/avatar7.jpg" alt="">
<div class="flex-fill ms-3">
<p class="d-flex justify-content-between mb-0"><span>Karen Onnabit</span> <small>1DAY</small></p>
<span>The generated Lorem Ipsum</span>
</div>
</a>
</li>
</ul>
</div>
<div class="tab-pane fade" id="Noti-tab-Events" role="tabpanel">
<ul class="list-unstyled list mb-0">
<li class="py-2 mb-1 border-bottom">
<a href="javascript:void(0);" class="d-flex">
<div class="avatar rounded-circle no-thumbnail"><i class="fa fa-thumbs-up fa-lg"></i></div>
<div class="flex-fill ms-3">
<p class="mb-0">Your New Campaign <strong class="text-primary">Holiday Sale</strong> is approved.</p>
<small>11:30 AM Today</small>
</div>
</a>
</li>
<li class="py-2 mb-1 border-bottom">
<a href="javascript:void(0);" class="d-flex">
<div class="avatar rounded-circle no-thumbnail"><i class="fa fa-pie-chart fa-lg"></i></div>
<div class="flex-fill ms-3">
<p class="mb-0">Website visits from Twitter is <strong class="text-danger">27% higher</strong> than last week.</p>
<small>04:00 PM Today</small>
</div>
</a>
</li>
<li class="py-2 mb-1 border-bottom">
<a href="javascript:void(0);" class="d-flex">
<div class="avatar rounded-circle no-thumbnail"><i class="fa fa-info-circle fa-lg"></i></div>
<div class="flex-fill ms-3">
<p class="mb-0">Campaign <strong class="text-primary">Holiday Sale</strong> is nearly reach budget limit.</p>
<small>10:00 AM Today</small>
</div>
</a>
</li>
<li class="py-2 mb-1 border-bottom">
<a href="javascript:void(0);" class="d-flex">
<div class="avatar rounded-circle no-thumbnail"><i class="fa fa-warning fa-lg"></i></div>
<div class="flex-fill ms-3">
<p class="mb-0"><strong class="text-warning">Error</strong> on website analytics configurations</p>
<small>Yesterday</small>
</div>
</a>
</li>
</ul>
</div>
<div class="tab-pane fade" id="Noti-tab-Logs" role="tabpanel">
<h4 class="color-400">No Logs right now!</h4>
</div>
</div>
<a href="#" class="btn btn-primary text-light rounded-0">View all notifications</a>
</div>
</div>
</div>
</li>

<li class="d-none d-xl-inline-block">
<a class="nav-link fullscreen" href="javascript:void(0);" onclick="toggleFullScreen(documentElement)">
<svg viewBox="0 0 16 16" width="18px" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M5.8279 10.172C5.73414 10.0783 5.60698 10.0256 5.4744 10.0256C5.34182 10.0256 5.21467 10.0783 5.1209 10.172L1.0249 14.268V11.5C1.0249 11.3674 0.972224 11.2402 0.878456 11.1464C0.784688 11.0527 0.657511 11 0.524902 11C0.392294 11 0.265117 11.0527 0.171349 11.1464C0.0775808 11.2402 0.0249023 11.3674 0.0249023 11.5V15.475C0.0249023 15.6076 0.0775808 15.7348 0.171349 15.8285C0.265117 15.9223 0.392294 15.975 0.524902 15.975H4.4999C4.63251 15.975 4.75969 15.9223 4.85346 15.8285C4.94722 15.7348 4.9999 15.6076 4.9999 15.475C4.9999 15.3424 4.94722 15.2152 4.85346 15.1214C4.75969 15.0277 4.63251 14.975 4.4999 14.975H1.7319L5.8279 10.879C5.92164 10.7852 5.9743 10.6581 5.9743 10.5255C5.9743 10.3929 5.92164 10.2658 5.8279 10.172ZM10.1719 10.172C10.2657 10.0783 10.3928 10.0256 10.5254 10.0256C10.658 10.0256 10.7851 10.0783 10.8789 10.172L14.9749 14.268V11.5C14.9749 11.3674 15.0276 11.2402 15.1213 11.1464C15.2151 11.0527 15.3423 11 15.4749 11C15.6075 11 15.7347 11.0527 15.8285 11.1464C15.9222 11.2402 15.9749 11.3674 15.9749 11.5V15.475C15.9749 15.6076 15.9222 15.7348 15.8285 15.8285C15.7347 15.9223 15.6075 15.975 15.4749 15.975H11.4999C11.3673 15.975 11.2401 15.9223 11.1463 15.8285C11.0526 15.7348 10.9999 15.6076 10.9999 15.475C10.9999 15.3424 11.0526 15.2152 11.1463 15.1214C11.2401 15.0277 11.3673 14.975 11.4999 14.975H14.2679L10.1719 10.879C10.0782 10.7852 10.0255 10.6581 10.0255 10.5255C10.0255 10.3929 10.0782 10.2658 10.1719 10.172ZM5.8279 5.82799C5.73414 5.92173 5.60698 5.97439 5.4744 5.97439C5.34182 5.97439 5.21467 5.92173 5.1209 5.82799L1.0249 1.73199V4.49999C1.0249 4.6326 0.972224 4.75978 0.878456 4.85355C0.784688 4.94732 0.657511 4.99999 0.524902 4.99999C0.392294 4.99999 0.265117 4.94732 0.171349 4.85355C0.0775808 4.75978 0.0249023 4.6326 0.0249023 4.49999V0.524994C0.0249023 0.392386 0.0775808 0.265209 0.171349 0.17144C0.265117 0.0776723 0.392294 0.0249939 0.524902 0.0249939H4.4999C4.63251 0.0249939 4.75969 0.0776723 4.85346 0.17144C4.94722 0.265209 4.9999 0.392386 4.9999 0.524994C4.9999 0.657602 4.94722 0.784779 4.85346 0.878547C4.75969 0.972315 4.63251 1.02499 4.4999 1.02499H1.7319L5.8279 5.12099C5.92164 5.21476 5.9743 5.34191 5.9743 5.47449C5.9743 5.60708 5.92164 5.73423 5.8279 5.82799Z" />
<path class="fill-secondary" d="M10.5253 5.97439C10.3927 5.97439 10.2655 5.92173 10.1718 5.82799C10.078 5.73423 10.0254 5.60708 10.0254 5.47449C10.0254 5.34191 10.078 5.21476 10.1718 5.12099L14.2678 1.02499H11.4998C11.3672 1.02499 11.24 0.972315 11.1462 0.878547C11.0525 0.784779 10.9998 0.657602 10.9998 0.524994C10.9998 0.392386 11.0525 0.265209 11.1462 0.17144C11.24 0.0776723 11.3672 0.0249939 11.4998 0.0249939H15.4748C15.6074 0.0249939 15.7346 0.0776723 15.8283 0.17144C15.9221 0.265209 15.9748 0.392386 15.9748 0.524994V4.49999C15.9748 4.6326 15.9221 4.75978 15.8283 4.85355C15.7346 4.94732 15.6074 4.99999 15.4748 4.99999C15.3422 4.99999 15.215 4.94732 15.1212 4.85355C15.0275 4.75978 14.9748 4.6326 14.9748 4.49999V1.73199L10.8788 5.82799C10.785 5.92173 10.6579 5.97439 10.5253 5.97439Z" />
</svg>
</a>
</li>

<li class="d-none d-xl-inline-block">
<div class="dropdown morphing scale-left Language mx-sm-2">
<a class="nav-link dropdown-toggle after-none" href="#" role="button" data-bs-toggle="dropdown">
<svg viewBox="0 0 16 16" width="18px" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path class="fill-secondary" d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286H4.545zm1.634-.736L5.5 3.956h-.049l-.679 2.022H6.18z" />
<path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2zm7.138 9.995c.193.301.402.583.63.846-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6.066 6.066 0 0 1-.415-.492 1.988 1.988 0 0 1-.94.31z" />
</svg>
</a>
<div class="dropdown-menu rounded-4 shadow border-0 p-0" data-bs-popper="none">
<div class="card">
<div class="list-group list-group-custom" style="width: 200px;">
<a href="#" class="list-group-item"><span class="flag-icon flag-icon-gb me-2"></span>UK English</a>
<a href="#" class="list-group-item"><span class="flag-icon flag-icon-us me-2"></span>US English</a>
<a href="#" class="list-group-item"><span class="flag-icon flag-icon-de me-2"></span>Germany</a>
<a href="#" class="list-group-item"><span class="flag-icon flag-icon-in me-2"></span>Hindi</a>
<a href="#" class="list-group-item"><span class="flag-icon flag-icon-sa me-2"></span>Saudi Arabia</a>
</div>
</div>
</div>
</div>
</li>

<li class="d-none d-lg-inline-block">
<div class="dropdown morphing scale-left grid-menu mx-sm-2">
<a class="nav-link dropdown-toggle after-none" href="#" role="button" data-bs-toggle="dropdown">
<svg viewBox="0 0 16 16" width="18px" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M2 10H5C5.26522 10 5.51957 10.1054 5.70711 10.2929C5.89464 10.4804 6 10.7348 6 11V14C6 14.2652 5.89464 14.5196 5.70711 14.7071C5.51957 14.8946 5.26522 15 5 15H2C1.73478 15 1.48043 14.8946 1.29289 14.7071C1.10536 14.5196 1 14.2652 1 14V11C1 10.7348 1.10536 10.4804 1.29289 10.2929C1.48043 10.1054 1.73478 10 2 10ZM11 1H14C14.2652 1 14.5196 1.10536 14.7071 1.29289C14.8946 1.48043 15 1.73478 15 2V5C15 5.26522 14.8946 5.51957 14.7071 5.70711C14.5196 5.89464 14.2652 6 14 6H11C10.7348 6 10.4804 5.89464 10.2929 5.70711C10.1054 5.51957 10 5.26522 10 5V2C10 1.73478 10.1054 1.48043 10.2929 1.29289C10.4804 1.10536 10.7348 1 11 1ZM11 10C10.7348 10 10.4804 10.1054 10.2929 10.2929C10.1054 10.4804 10 10.7348 10 11V14C10 14.2652 10.1054 14.5196 10.2929 14.7071C10.4804 14.8946 10.7348 15 11 15H14C14.2652 15 14.5196 14.8946 14.7071 14.7071C14.8946 14.5196 15 14.2652 15 14V11C15 10.7348 14.8946 10.4804 14.7071 10.2929C14.5196 10.1054 14.2652 10 14 10H11ZM11 0C10.4696 0 9.96086 0.210714 9.58579 0.585786C9.21071 0.960859 9 1.46957 9 2V5C9 5.53043 9.21071 6.03914 9.58579 6.41421C9.96086 6.78929 10.4696 7 11 7H14C14.5304 7 15.0391 6.78929 15.4142 6.41421C15.7893 6.03914 16 5.53043 16 5V2C16 1.46957 15.7893 0.960859 15.4142 0.585786C15.0391 0.210714 14.5304 0 14 0L11 0ZM2 9C1.46957 9 0.960859 9.21071 0.585786 9.58579C0.210714 9.96086 0 10.4696 0 11L0 14C0 14.5304 0.210714 15.0391 0.585786 15.4142C0.960859 15.7893 1.46957 16 2 16H5C5.53043 16 6.03914 15.7893 6.41421 15.4142C6.78929 15.0391 7 14.5304 7 14V11C7 10.4696 6.78929 9.96086 6.41421 9.58579C6.03914 9.21071 5.53043 9 5 9H2ZM9 11C9 10.4696 9.21071 9.96086 9.58579 9.58579C9.96086 9.21071 10.4696 9 11 9H14C14.5304 9 15.0391 9.21071 15.4142 9.58579C15.7893 9.96086 16 10.4696 16 11V14C16 14.5304 15.7893 15.0391 15.4142 15.4142C15.0391 15.7893 14.5304 16 14 16H11C10.4696 16 9.96086 15.7893 9.58579 15.4142C9.21071 15.0391 9 14.5304 9 14V11Z" />
<path class="fill-secondary" d="M0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2V5C0 5.53043 0.210714 6.03914 0.585786 6.41421C0.960859 6.78929 1.46957 7 2 7H5C5.53043 7 6.03914 6.78929 6.41421 6.41421C6.78929 6.03914 7 5.53043 7 5V2C7 1.46957 6.78929 0.960859 6.41421 0.585786C6.03914 0.210714 5.53043 0 5 0H2C1.46957 0 0.960859 0.210714 0.585786 0.585786Z" />
</svg>
</a>
<div class="dropdown-menu rounded-4 shadow border-0 p-0" data-bs-popper="none">
<div class="card">
<div class="row g-1 text-center p-3" style="width: 302px;">
<div class="col-6">
<a class="card p-3 color-600 lift align-items-center" href="./dashboard.html" title="">
<svg viewBox="0 0 16 16" width="30px" class="mb-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path class="fill-secondary" d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
<path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
</svg>
<p class="mb-0 color-600">Dashboard</p>
<small class="text-muted">View All</small>
</a>
</div>
<div class="col-6">
<a class="card p-3 color-600 lift align-items-center" href="./app.html" title="">
<svg viewBox="0 0 16 16" width="30px" class="mb-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
<path class="fill-secondary" d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
</svg>
<p class="mb-0 color-600">Application</p>
<small class="text-muted">View All</small>
 </a>
</div>
<div class="col-6">
<a class="card p-3 color-600 lift align-items-center" href="./crafted-page.html" title="">
<svg viewBox="0 0 16 16" width="30px" class="mb-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M14 4.5V9H13V4.5H11C10.6022 4.5 10.2206 4.34196 9.93934 4.06066C9.65804 3.77936 9.5 3.39782 9.5 3V1H4C3.73478 1 3.48043 1.10536 3.29289 1.29289C3.10536 1.48043 3 1.73478 3 2V9H2V2C2 1.46957 2.21071 0.960859 2.58579 0.585786C2.96086 0.210714 3.46957 0 4 0L9.5 0L14 4.5ZM13 12H14V14C14 14.5304 13.7893 15.0391 13.4142 15.4142C13.0391 15.7893 12.5304 16 12 16H4C3.46957 16 2.96086 15.7893 2.58579 15.4142C2.21071 15.0391 2 14.5304 2 14V12H3V14C3 14.2652 3.10536 14.5196 3.29289 14.7071C3.48043 14.8946 3.73478 15 4 15H12C12.2652 15 12.5196 14.8946 12.7071 14.7071C12.8946 14.5196 13 14.2652 13 14V12Z" />
<path class="fill-secondary" d="M0.146447 10.1464C0.240215 10.0527 0.367392 10 0.5 10H15.5C15.6326 10 15.7598 10.0527 15.8536 10.1464C15.9473 10.2402 16 10.3674 16 10.5C16 10.6326 15.9473 10.7598 15.8536 10.8536C15.7598 10.9473 15.6326 11 15.5 11H0.5C0.367392 11 0.240215 10.9473 0.146447 10.8536C0.0526784 10.7598 0 10.6326 0 10.5C0 10.3674 0.0526784 10.2402 0.146447 10.1464Z" fill="black" />
</svg>
<p class="mb-0 color-600">Pages</p>
<small class="text-muted">Crafted Pages</small>
</a>
</div>
<div class="col-6">
<a class="card p-3 color-600 lift align-items-center" href="./layouts.html" title="">
<svg viewBox="0 0 16 16" width="30px" class="mb-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M14 2a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h12zM2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z" />
<path class="fill-secondary" d="M3 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z" />
</svg>
<p class="mb-0 color-600">Layouts</p>
<small class="text-muted">Crafted Layout</small>
</a>
</div>
</div>
</div>
</div>
</div>
</li>

<li class="d-none d-sm-inline-block d-xl-none">
<a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#MynotesModal">
<svg viewBox="0 0 16 16" width="18px" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path class="fill-secondary" d="M1.5 0A1.5 1.5 0 0 0 0 1.5V13a1 1 0 0 0 1 1V1.5a.5.5 0 0 1 .5-.5H14a1 1 0 0 0-1-1H1.5z" />
<path d="M3.5 2A1.5 1.5 0 0 0 2 3.5v11A1.5 1.5 0 0 0 3.5 16h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 16 9.586V3.5A1.5 1.5 0 0 0 14.5 2h-11zM3 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 .5.5V9h-4.5A1.5 1.5 0 0 0 9 10.5V15H3.5a.5.5 0 0 1-.5-.5v-11zm7 11.293V10.5a.5.5 0 0 1 .5-.5h4.293L10 14.793z" />
</svg>
</a>
</li>

<li class="d-none d-sm-inline-block d-xl-none">
<a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#RecentChat">
<svg viewBox="0 0 16 16" width="18px" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
<path class="fill-secondary" d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
</svg>
</a>
</li>

<li>
<a class="nav-link quick-light-dark" href="#">
<svg viewBox="0 0 16 16" width="18px" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z" />
<path class="fill-secondary" d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
</svg>
</a>
</li>

<li>
<div class="dropdown morphing scale-left user-profile mx-lg-3 mx-2">
<a class="nav-link dropdown-toggle rounded-circle after-none p-0" href="#" role="button" data-bs-toggle="dropdown">
<img class="avatar img-thumbnail rounded-circle shadow" src="./assets/img/profile_av.png" alt="">
</a>
<div class="dropdown-menu border-0 rounded-4 shadow p-0">
<div class="card border-0 w240">
<div class="card-body border-bottom d-flex">
<img class="avatar rounded-circle" src="./assets/img/profile_av.png" alt="">
<div class="flex-fill ms-3">
<h6 class="card-title mb-0">{{Auth::user()->name}}</h6>
<span class="text-muted"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0a6b6666636f6d786b7e6f784a667f646524696567">{{Auth::user()->email}}</a></span>
</div>
</div>
<div class="list-group m-2 mb-3">
<a class="list-group-item list-group-item-action border-0" href="page-profile.html"><i class="w30 fa fa-user"></i>My Profile</a>
<a class="list-group-item list-group-item-action border-0" href="account-settings.html"><i class="w30 fa fa-gear"></i>Settings</a>
<a class="list-group-item list-group-item-action border-0" href="account-billing.html"><i class="w30 fa fa-credit-card"></i>Billing</a>
<a class="list-group-item list-group-item-action border-0" href="./page-teamsboard.html"><i class="w30 fa fa-users"></i>Manage Team</a>
<a class="list-group-item list-group-item-action border-0" href="./dashboard-enevt.html"><i class="w30 fa fa-calendar"></i>My Events</a>
<a class="list-group-item list-group-item-action border-0" href="./page-support-ticket.html"><i class="w30 fa fa-tag"></i>Support Ticket</a>
</div>
<a class="btn bg-secondary text-light text-uppercase rounded-0" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                                     class="bx bx-log-out"></i>Log out</a>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                     @csrf
                                     </form>
</div>
</div>
</div>
</li>

<li>
<a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#SettingsModal" title="Settings">
<svg viewBox="0 0 16 16" width="18px" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path class="fill-secondary" d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"></path>
<path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"></path>
</svg>
</a>
</li>
</ul>
</nav>
</div>
</header>

<div class="page-toolbar px-xl-4 px-sm-2 px-0 py-3">
<div class="container-fluid">
<div class="row g-3 mb-3 align-items-center">
<div class="col">
<ol class="breadcrumb bg-transparent mb-0">
<li class="breadcrumb-item"><a class="text-secondary" href="index.html">Home</a></li>
<li class="breadcrumb-item"><a class="text-secondary" href="#">Account</a></li>
<li class="breadcrumb-item active" aria-current="page">Settings</li>
</ol>
</div>
</div>
<div class="row align-items-center">
<div class="col-auto">
<h1 class="fs-5 color-900 mt-1 mb-0">Welcome back, {{Auth::user()->name}}!</h1>
<small class="text-muted">You have 12 new messages and 7 new notifications.</small>
</div>
<div class="col d-flex justify-content-lg-end mt-2 mt-md-0">
<div class="p-2 me-md-3">

</div>

</div>
</div>
</div>
</div>

<div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-0 mt-lg-3">
<div class="container-fluid">
<div class="row g-3">
<div class="col-xxl-3 col-lg-4 col-md-4">
<div class="list-group list-group-custom sticky-top me-xl-4" style="top: 100px;">
<a class="list-group-item list-group-item-action" href="#list-item-1">Profile Details</a>
<a class="list-group-item list-group-item-action" href="#list-item-2">Change Password</a>
{{-- <a class="list-group-item list-group-item-action" href="#list-item-3">Notifications Settings</a>
<a class="list-group-item list-group-item-action" href="#list-item-4">Social Profiles</a> --}}
</div>
</div>
<div class="col-xxl-8 col-lg-8 col-md-8">
<div id="list-item-1" class="card fieldset border border-muted mt-0">

<span class="fieldset-tile text-muted bg-body">Profile Details:</span>
<div class="card">
<div class="card-body">
<form>
<div class="row mb-3">
<label class="col-md-3 col-sm-4 col-form-label">Avatar</label>
<div class="col-md-9 col-sm-8">
<div class="image-input avatar xxl rounded-4" style="background-image: url(./assets/img/avatar.png)">
<div class="avatar-wrapper rounded-4" style="background-image: url(./assets/img/profile_av.png)"></div>
<div class="file-input">
<input type="file" class="form-control" name="file-input" id="file-input">
<label for="file-input" class="fa fa-pencil shadow text-muted"></label>
</div>
</div>
</div>
</div>
<div class="row mb-3">
<label class="col-md-3 col-sm-4 col-form-label">Full Name *</label>
<div class="col-md-5 col-sm-4">
<input type="text" class="form-control form-control-lg" value="Chris">
</div>
<div class="col-md-4 col-sm-4">
<input type="text" class="form-control form-control-lg" value="Morise">
</div>
</div>
<div class="row mb-3">
<label class="col-md-3 col-sm-4 col-form-label">Company *</label>
<div class="col-md-9 col-sm-8">
<input type="text" class="form-control form-control-lg" value="thememakker">
</div>
</div>
<div class="row mb-3">
<label class="col-md-3 col-sm-4 col-form-label">Contact Phone *</label>
<div class="col-md-9 col-sm-8">
<input type="text" class="form-control form-control-lg" value="+01 (741) 852 123">
</div>
</div>
<div class="row mb-3">
<label class="col-md-3 col-sm-4 col-form-label">Company Site</label>
<div class="col-md-9 col-sm-8">
<input type="url" class="form-control form-control-lg" value="thememakker.com">
</div>
</div>
<div class="row mb-3">
<label class="col-md-3 col-sm-4 col-form-label">Country *</label>
<div class="col-md-9 col-sm-8">
<select class="form-control form-control-lg">
<option value="">-- Select Country --</option>
<option value="AF">Afghanistan</option>
<option value="AX">Åland Islands</option>
<option value="AL">Albania</option>
<option value="DZ">Algeria</option>
<option value="AS">American Samoa</option>
<option value="AD">Andorra</option>
<option value="AO">Angola</option>
<option value="AI">Anguilla</option>
<option value="AQ">Antarctica</option>
<option value="AG">Antigua and Barbuda</option>
<option value="AR">Argentina</option>
<option value="AM">Armenia</option>
<option value="AW">Aruba</option>
<option value="AU">Australia</option>
<option value="AT">Austria</option>
<option value="AZ">Azerbaijan</option>
<option value="BS">Bahamas</option>
<option value="BH">Bahrain</option>
<option value="BD">Bangladesh</option>
<option value="BB">Barbados</option>
<option value="BY">Belarus</option>
<option value="BE">Belgium</option>
<option value="BZ">Belize</option>
<option value="BJ">Benin</option>
<option value="BM">Bermuda</option>
<option value="BT">Bhutan</option>
<option value="BO">Bolivia, Plurinational State of</option>
<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
<option value="BA">Bosnia and Herzegovina</option>
<option value="BW">Botswana</option>
<option value="BV">Bouvet Island</option>
<option value="BR">Brazil</option>
<option value="IO">British Indian Ocean Territory</option>
<option value="BN">Brunei Darussalam</option>
<option value="BG">Bulgaria</option>
<option value="BF">Burkina Faso</option>
<option value="BI">Burundi</option>
<option value="KH">Cambodia</option>
<option value="CM">Cameroon</option>
<option value="CA">Canada</option>
<option value="CV">Cape Verde</option>
<option value="KY">Cayman Islands</option>
<option value="CF">Central African Republic</option>
<option value="TD">Chad</option>
<option value="CL">Chile</option>
<option value="CN">China</option>
<option value="CX">Christmas Island</option>
<option value="CC">Cocos (Keeling) Islands</option>
<option value="CO">Colombia</option>
<option value="KM">Comoros</option>
<option value="CG">Congo</option>
<option value="CD">Congo, the Democratic Republic of the</option>
<option value="CK">Cook Islands</option>
<option value="CR">Costa Rica</option>
<option value="CI">Côte d'Ivoire</option>
<option value="HR">Croatia</option>
<option value="CU">Cuba</option>
<option value="CW">Curaçao</option>
<option value="CY">Cyprus</option>
<option value="CZ">Czech Republic</option>
<option value="DK">Denmark</option>
<option value="DJ">Djibouti</option>
<option value="DM">Dominica</option>
<option value="DO">Dominican Republic</option>
<option value="EC">Ecuador</option>
<option value="EG">Egypt</option>
<option value="SV">El Salvador</option>
<option value="GQ">Equatorial Guinea</option>
<option value="ER">Eritrea</option>
<option value="EE">Estonia</option>
<option value="ET">Ethiopia</option>
<option value="FK">Falkland Islands (Malvinas)</option>
<option value="FO">Faroe Islands</option>
<option value="FJ">Fiji</option>
<option value="FI">Finland</option>
<option value="FR">France</option>
<option value="GF">French Guiana</option>
<option value="PF">French Polynesia</option>
<option value="TF">French Southern Territories</option>
<option value="GA">Gabon</option>
<option value="GM">Gambia</option>
<option value="GE">Georgia</option>
<option value="DE">Germany</option>
<option value="GH">Ghana</option>
<option value="GI">Gibraltar</option>
<option value="GR">Greece</option>
<option value="GL">Greenland</option>
<option value="GD">Grenada</option>
<option value="GP">Guadeloupe</option>
<option value="GU">Guam</option>
<option value="GT">Guatemala</option>
<option value="GG">Guernsey</option>
<option value="GN">Guinea</option>
<option value="GW">Guinea-Bissau</option>
<option value="GY">Guyana</option>
<option value="HT">Haiti</option>
<option value="HM">Heard Island and McDonald Islands</option>
<option value="VA">Holy See (Vatican City State)</option>
<option value="HN">Honduras</option>
<option value="HK">Hong Kong</option>
<option value="HU">Hungary</option>
<option value="IS">Iceland</option>
<option value="IN">India</option>
<option value="ID">Indonesia</option>
<option value="IR">Iran, Islamic Republic of</option>
<option value="IQ">Iraq</option>
<option value="IE">Ireland</option>
<option value="IM">Isle of Man</option>
<option value="IL">Israel</option>
<option value="IT">Italy</option>
<option value="JM">Jamaica</option>
<option value="JP">Japan</option>
<option value="JE">Jersey</option>
<option value="JO">Jordan</option>
<option value="KZ">Kazakhstan</option>
<option value="KE">Kenya</option>
<option value="KI">Kiribati</option>
<option value="KP">Korea, Democratic People's Republic of</option>
<option value="KR">Korea, Republic of</option>
<option value="KW">Kuwait</option>
<option value="KG">Kyrgyzstan</option>
<option value="LA">Lao People's Democratic Republic</option>
<option value="LV">Latvia</option>
<option value="LB">Lebanon</option>
<option value="LS">Lesotho</option>
<option value="LR">Liberia</option>
<option value="LY">Libya</option>
<option value="LI">Liechtenstein</option>
<option value="LT">Lithuania</option>
<option value="LU">Luxembourg</option>
<option value="MO">Macao</option>
<option value="MK">Macedonia, the former Yugoslav Republic of</option>
<option value="MG">Madagascar</option>
<option value="MW">Malawi</option>
<option value="MY">Malaysia</option>
<option value="MV">Maldives</option>
<option value="ML">Mali</option>
<option value="MT">Malta</option>
<option value="MH">Marshall Islands</option>
 <option value="MQ">Martinique</option>
<option value="MR">Mauritania</option>
<option value="MU">Mauritius</option>
<option value="YT">Mayotte</option>
<option value="MX">Mexico</option>
<option value="FM">Micronesia, Federated States of</option>
<option value="MD">Moldova, Republic of</option>
<option value="MC">Monaco</option>
<option value="MN">Mongolia</option>
<option value="ME">Montenegro</option>
<option value="MS">Montserrat</option>
<option value="MA">Morocco</option>
<option value="MZ">Mozambique</option>
<option value="MM">Myanmar</option>
<option value="NA">Namibia</option>
<option value="NR">Nauru</option>
<option value="NP">Nepal</option>
<option value="NL">Netherlands</option>
<option value="NC">New Caledonia</option>
<option value="NZ">New Zealand</option>
<option value="NI">Nicaragua</option>
<option value="NE">Niger</option>
<option value="NG">Nigeria</option>
<option value="NU">Niue</option>
<option value="NF">Norfolk Island</option>
<option value="MP">Northern Mariana Islands</option>
<option value="NO">Norway</option>
<option value="OM">Oman</option>
<option value="PK">Pakistan</option>
<option value="PW">Palau</option>
<option value="PS">Palestinian Territory, Occupied</option>
<option value="PA">Panama</option>
<option value="PG">Papua New Guinea</option>
<option value="PY">Paraguay</option>
<option value="PE">Peru</option>
<option value="PH">Philippines</option>
<option value="PN">Pitcairn</option>
<option value="PL">Poland</option>
<option value="PT">Portugal</option>
<option value="PR">Puerto Rico</option>
<option value="QA">Qatar</option>
<option value="RE">Réunion</option>
<option value="RO">Romania</option>
<option value="RU">Russian Federation</option>
<option value="RW">Rwanda</option>
<option value="BL">Saint Barthélemy</option>
<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
<option value="KN">Saint Kitts and Nevis</option>
<option value="LC">Saint Lucia</option>
<option value="MF">Saint Martin (French part)</option>
<option value="PM">Saint Pierre and Miquelon</option>
<option value="VC">Saint Vincent and the Grenadines</option>
<option value="WS">Samoa</option>
<option value="SM">San Marino</option>
<option value="ST">Sao Tome and Principe</option>
<option value="SA">Saudi Arabia</option>
<option value="SN">Senegal</option>
<option value="RS">Serbia</option>
<option value="SC">Seychelles</option>
<option value="SL">Sierra Leone</option>
<option value="SG">Singapore</option>
<option value="SX">Sint Maarten (Dutch part)</option>
<option value="SK">Slovakia</option>
<option value="SI">Slovenia</option>
<option value="SB">Solomon Islands</option>
<option value="SO">Somalia</option>
<option value="ZA">South Africa</option>
<option value="GS">South Georgia and the South Sandwich Islands</option>
<option value="SS">South Sudan</option>
<option value="ES">Spain</option>
<option value="LK">Sri Lanka</option>
<option value="SD">Sudan</option>
<option value="SR">Suriname</option>
<option value="SJ">Svalbard and Jan Mayen</option>
<option value="SZ">Swaziland</option>
<option value="SE">Sweden</option>
<option value="CH">Switzerland</option>
<option value="SY">Syrian Arab Republic</option>
<option value="TW">Taiwan, Province of China</option>
<option value="TJ">Tajikistan</option>
<option value="TZ">Tanzania, United Republic of</option>
<option value="TH">Thailand</option>
<option value="TL">Timor-Leste</option>
<option value="TG">Togo</option>
<option value="TK">Tokelau</option>
<option value="TO">Tonga</option>
<option value="TT">Trinidad and Tobago</option>
<option value="TN">Tunisia</option>
<option value="TR">Turkey</option>
<option value="TM">Turkmenistan</option>
<option value="TC">Turks and Caicos Islands</option>
<option value="TV">Tuvalu</option>
<option value="UG">Uganda</option>
<option value="UA">Ukraine</option>
<option value="AE">United Arab Emirates</option>
<option value="GB">United Kingdom</option>
<option value="US">United States</option>
<option value="UM">United States Minor Outlying Islands</option>
<option value="UY">Uruguay</option>
<option value="UZ">Uzbekistan</option>
<option value="VU">Vanuatu</option>
<option value="VE">Venezuela, Bolivarian Republic of</option>
<option value="VN">Viet Nam</option>
<option value="VG">Virgin Islands, British</option>
<option value="VI">Virgin Islands, U.S.</option>
<option value="WF">Wallis and Futuna</option>
<option value="EH">Western Sahara</option>
<option value="YE">Yemen</option>
<option value="ZM">Zambia</option>
<option value="ZW">Zimbabwe</option>
</select>
</div>
</div>
<div class="row mb-3">
<label class="col-md-3 col-sm-4 col-form-label">State/Province *</label>
<div class="col-md-9 col-sm-8">
<select class="form-control form-control-lg">
<option>California</option>
<option>Alaska</option>
<option>Alabama</option>
</select>
</div>
</div>
<div class="row mb-3">
<label class="col-md-3 col-sm-4 col-form-label">Time Zone *</label>
<div class="col-md-9 col-sm-8">
 <select class="form-control form-control-lg">
<option value="">Select a Timezone..</option>
<option value="International Date Line West">(GMT-11:00) International Date Line West</option>
<option value="Midway Island">(GMT-11:00) Midway Island</option>
<option value="Samoa">(GMT-11:00) Samoa</option>
<option value="Hawaii">(GMT-10:00) Hawaii</option>
<option value="Alaska">(GMT-08:00) Alaska</option>
<option value="Pacific Time (US &amp; Canada)">(GMT-07:00) Pacific Time (US &amp; Canada)</option>
<option value="Tijuana">(GMT-07:00) Tijuana</option>
<option value="Arizona">(GMT-07:00) Arizona</option>
<option value="Mountain Time (US &amp; Canada)">(GMT-06:00) Mountain Time (US &amp; Canada)</option>
<option value="Chihuahua">(GMT-06:00) Chihuahua</option>
<option value="Mazatlan">(GMT-06:00) Mazatlan</option>
<option value="Saskatchewan">(GMT-06:00) Saskatchewan</option>
<option value="Central America">(GMT-06:00) Central America</option>
<option value="Central Time (US &amp; Canada)">(GMT-05:00) Central Time (US &amp; Canada)</option>
<option value="Guadalajara">(GMT-05:00) Guadalajara</option>
<option value="Mexico City">(GMT-05:00) Mexico City</option>
<option value="Monterrey">(GMT-05:00) Monterrey</option>
<option value="Bogota">(GMT-05:00) Bogota</option>
<option value="Lima">(GMT-05:00) Lima</option>
<option value="Quito">(GMT-05:00) Quito</option>
<option value="Eastern Time (US &amp; Canada)">(GMT-04:00) Eastern Time (US &amp; Canada)</option>
<option value="Indiana (East)">(GMT-04:00) Indiana (East)</option>
<option value="Caracas">(GMT-04:00) Caracas</option>
<option value="La Paz">(GMT-04:00) La Paz</option>
<option value="Georgetown">(GMT-04:00) Georgetown</option>
<option value="Atlantic Time (Canada)">(GMT-03:00) Atlantic Time (Canada)</option>
<option value="Santiago">(GMT-03:00) Santiago</option>
<option value="Brasilia">(GMT-03:00) Brasilia</option>
<option value="Buenos Aires">(GMT-03:00) Buenos Aires</option>
<option value="Newfoundland">(GMT-02:30) Newfoundland</option>
<option value="Greenland">(GMT-02:00) Greenland</option>
<option value="Mid-Atlantic">(GMT-02:00) Mid-Atlantic</option>
<option value="Cape Verde Is.">(GMT-01:00) Cape Verde Is.</option>
<option value="Azores">(GMT) Azores</option>
<option value="Monrovia">(GMT) Monrovia</option>
<option value="UTC">(GMT) UTC</option>
<option value="Dublin">(GMT+01:00) Dublin</option>
<option value="Edinburgh">(GMT+01:00) Edinburgh</option>
<option value="Lisbon">(GMT+01:00) Lisbon</option>
<option value="London">(GMT+01:00) London</option>
<option value="Casablanca">(GMT+01:00) Casablanca</option>
<option value="West Central Africa">(GMT+01:00) West Central Africa</option>
<option value="Belgrade">(GMT+02:00) Belgrade</option>
<option value="Bratislava">(GMT+02:00) Bratislava</option>
<option value="Budapest">(GMT+02:00) Budapest</option>
<option value="Ljubljana">(GMT+02:00) Ljubljana</option>
<option value="Prague">(GMT+02:00) Prague</option>
<option value="Sarajevo">(GMT+02:00) Sarajevo</option>
<option value="Skopje">(GMT+02:00) Skopje</option>
<option value="Warsaw">(GMT+02:00) Warsaw</option>
<option value="Zagreb">(GMT+02:00) Zagreb</option>
<option value="Brussels">(GMT+02:00) Brussels</option>
<option value="Copenhagen">(GMT+02:00) Copenhagen</option>
<option value="Madrid">(GMT+02:00) Madrid</option>
<option value="Paris">(GMT+02:00) Paris</option>
<option value="Amsterdam">(GMT+02:00) Amsterdam</option>
<option value="Berlin">(GMT+02:00) Berlin</option>
<option value="Bern">(GMT+02:00) Bern</option>
<option value="Rome">(GMT+02:00) Rome</option>
<option value="Stockholm">(GMT+02:00) Stockholm</option>
<option value="Vienna">(GMT+02:00) Vienna</option>
<option value="Cairo">(GMT+02:00) Cairo</option>
<option value="Harare">(GMT+02:00) Harare</option>
<option value="Pretoria">(GMT+02:00) Pretoria</option>
<option value="Bucharest">(GMT+03:00) Bucharest</option>
<option value="Helsinki">(GMT+03:00) Helsinki</option>
<option value="Kiev">(GMT+03:00) Kiev</option>
<option value="Kyiv">(GMT+03:00) Kyiv</option>
<option value="Riga">(GMT+03:00) Riga</option>
<option value="Sofia">(GMT+03:00) Sofia</option>
<option value="Tallinn">(GMT+03:00) Tallinn</option>
<option value="Vilnius">(GMT+03:00) Vilnius</option>
<option value="Athens">(GMT+03:00) Athens</option>
<option value="Istanbul">(GMT+03:00) Istanbul</option>
<option value="Minsk">(GMT+03:00) Minsk</option>
<option value="Jerusalem">(GMT+03:00) Jerusalem</option>
<option value="Moscow">(GMT+03:00) Moscow</option>
<option value="St. Petersburg">(GMT+03:00) St. Petersburg</option>
<option value="Volgograd">(GMT+03:00) Volgograd</option>
<option value="Kuwait">(GMT+03:00) Kuwait</option>
<option value="Riyadh">(GMT+03:00) Riyadh</option>
<option value="Nairobi">(GMT+03:00) Nairobi</option>
<option value="Baghdad">(GMT+03:00) Baghdad</option>
<option value="Abu Dhabi">(GMT+04:00) Abu Dhabi</option>
<option value="Muscat">(GMT+04:00) Muscat</option>
<option value="Baku">(GMT+04:00) Baku</option>
<option value="Tbilisi">(GMT+04:00) Tbilisi</option>
<option value="Yerevan">(GMT+04:00) Yerevan</option>
<option value="Tehran">(GMT+04:30) Tehran</option>
<option value="Kabul">(GMT+04:30) Kabul</option>
<option value="Ekaterinburg">(GMT+05:00) Ekaterinburg</option>
<option value="Islamabad">(GMT+05:00) Islamabad</option>
<option value="Karachi">(GMT+05:00) Karachi</option>
<option value="Tashkent">(GMT+05:00) Tashkent</option>
<option value="Chennai">(GMT+05:30) Chennai</option>
<option value="Kolkata">(GMT+05:30) Kolkata</option>
<option value="Mumbai">(GMT+05:30) Mumbai</option>
<option value="New Delhi">(GMT+05:30) New Delhi</option>
<option value="Sri Jayawardenepura">(GMT+05:30) Sri Jayawardenepura</option>
<option value="Kathmandu">(GMT+05:45) Kathmandu</option>
<option value="Astana">(GMT+06:00) Astana</option>
<option value="Dhaka">(GMT+06:00) Dhaka</option>
<option value="Almaty">(GMT+06:00) Almaty</option>
<option value="Urumqi">(GMT+06:00) Urumqi</option>
<option value="Rangoon">(GMT+06:30) Rangoon</option>
<option value="Novosibirsk">(GMT+07:00) Novosibirsk</option>
<option value="Bangkok">(GMT+07:00) Bangkok</option>
<option value="Hanoi">(GMT+07:00) Hanoi</option>
<option value="Jakarta">(GMT+07:00) Jakarta</option>
<option value="Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
<option value="Beijing">(GMT+08:00) Beijing</option>
<option value="Chongqing">(GMT+08:00) Chongqing</option>
<option value="Hong Kong">(GMT+08:00) Hong Kong</option>
<option value="Kuala Lumpur">(GMT+08:00) Kuala Lumpur</option>
<option value="Singapore">(GMT+08:00) Singapore</option>
<option value="Taipei">(GMT+08:00) Taipei</option>
<option value="Perth">(GMT+08:00) Perth</option>
<option value="Irkutsk">(GMT+08:00) Irkutsk</option>
<option value="Ulaan Bataar">(GMT+08:00) Ulaan Bataar</option>
<option value="Seoul">(GMT+09:00) Seoul</option>
<option value="Osaka">(GMT+09:00) Osaka</option>
<option value="Sapporo">(GMT+09:00) Sapporo</option>
<option value="Tokyo">(GMT+09:00) Tokyo</option>
<option value="Yakutsk">(GMT+09:00) Yakutsk</option>
<option value="Darwin">(GMT+09:30) Darwin</option>
<option value="Adelaide">(GMT+09:30) Adelaide</option>
<option value="Canberra">(GMT+10:00) Canberra</option>
<option value="Melbourne">(GMT+10:00) Melbourne</option>
<option value="Sydney">(GMT+10:00) Sydney</option>
<option value="Brisbane">(GMT+10:00) Brisbane</option>
<option value="Hobart">(GMT+10:00) Hobart</option>
<option value="Vladivostok">(GMT+10:00) Vladivostok</option>
<option value="Guam">(GMT+10:00) Guam</option>
<option value="Port Moresby">(GMT+10:00) Port Moresby</option>
<option value="Solomon Is.">(GMT+10:00) Solomon Is.</option>
<option value="Magadan">(GMT+11:00) Magadan</option>
<option value="New Caledonia">(GMT+11:00) New Caledonia</option>
<option value="Fiji">(GMT+12:00) Fiji</option>
<option value="Kamchatka">(GMT+12:00) Kamchatka</option>
<option value="Marshall Is.">(GMT+12:00) Marshall Is.</option>
<option value="Auckland">(GMT+12:00) Auckland</option>
<option value="Wellington">(GMT+12:00) Wellington</option>
<option value="Nuku'alofa">(GMT+13:00) Nuku'alofa</option>
</select>
</div>
</div>
<div class="row mb-3">
<label class="col-md-3 col-sm-4 col-form-label">Communication *</label>
<div class="col-md-9 col-sm-8">
<div class="form-check form-check-inline">
<input class="form-check-input" type="checkbox" id="s_Phone" value="option1">
<label class="form-check-label" for="s_Phone">Phone</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="checkbox" id="s_Email" value="option2">
<label class="form-check-label" for="s_Email">Email</label>
</div>
</div>
</div>
<div class="row mb-3">
<label class="col-md-3 col-sm-4 col-form-label">Available for freelance?</label>
<div class="col-md-9 col-sm-8">
<div class="form-check form-switch">
<input class="form-check-input" type="checkbox" role="switch" id="freelance">
<label class="form-check-label" for="freelance">Yes, advertise my availability on my profile page</label>
</div>
</div>
</div>
</form>
</div>
<div class="card-footer text-end">
<button class="btn btn-lg btn-light me-2" type="reset">Discard</button>
<button class="btn btn-lg btn-primary" type="submit">Save Changes</button>
</div>
</div>
</div>
<div id="list-item-2" class="card fieldset border border-muted mt-5">

<span class="fieldset-tile text-muted bg-body">Change Password</span>
<div class="card">
<div class="card-body">
<div class="row g-3">
<div class="col-lg-4 col-md-12">
<div class="form-group">
<input type="text" class="form-control" value="louispierce" disabled="" placeholder="Username">
</div>
</div>
<div class="col-lg-4 col-md-12">
<div class="form-group">
<input type="email" class="form-control" value="louis.info@yourdomain.com" placeholder="Email">
</div>
</div>
<div class="col-lg-4 col-md-12">
<div class="form-group">
<input type="number" class="form-control" placeholder="Phone Number">
</div>
</div>
<div class="col-12">
<h6 class="border-top pt-2 mt-2 mb-3">Change Password</h6>
<div class="mb-3">
<input type="password" class="form-control form-control-lg" placeholder="Current Password">
</div>
<div class="mb-1">
<input type="password" class="form-control form-control-lg" placeholder="New Password">
</div>
<div>
<input type="password" class="form-control form-control-lg" placeholder="Confirm New Password">
<span class="text-muted small">Minimum 8 characters</span>
</div>
</div>
</div>
</div>
<div class="card-footer text-end">
<button class="btn btn-lg btn-light me-2" type="reset">Discard</button>
<button class="btn btn-lg btn-primary" type="submit">Save Changes</button>
</div>
</div>
</div>
<div id="list-item-3" class="card fieldset border border-muted mt-5">

{{-- <span class="fieldset-tile text-muted bg-body">Notifications Settings</span>
<div class="card">
<div class="card-body table-responsive">
<table class="table card-table mb-0">
 <tbody>
<tr>
<td class="text-muted">Email Notifications</td>
<td>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="n_email1" checked>
<label class="form-check-label" for="n_email1">Email</label>
</div>
</td>
<td>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="n_phone1" checked>
<label class="form-check-label" for="n_phone1">Phone</label>
</div>
</td>
</tr>
<tr>
<td class="text-muted">Billing Updates</td>
<td>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="n_email2">
<label class="form-check-label" for="n_email2">Email</label>
</div>
</td>
<td>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="n_phone2">
<label class="form-check-label" for="n_phone2">Phone</label>
</div>
</td>
</tr>
<tr>
<td class="text-muted">New Team Members</td>
<td>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="n_email3">
<label class="form-check-label" for="n_email3">Email</label>
</div>
</td>
<td>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="n_phone3">
<label class="form-check-label" for="n_phone3">Phone</label>
</div>
</td>
</tr>
<tr>
<td class="text-muted">Projects Complete</td>
<td>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="n_email4">
<label class="form-check-label" for="n_email4">Email</label>
</div>
</td>
<td>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="n_phone4" checked>
<label class="form-check-label" for="n_phone4">Phone</label>
</div>
</td>
</tr>
<tr>
<td class="text-muted">Newsletters</td>
<td>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="n_email5">
<label class="form-check-label" for="n_email5">Email</label>
</div>
</td>
<td>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="n_phone5" checked>
<label class="form-check-label" for="n_phone5">Phone</label>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<div class="card-footer text-end">
<button class="btn btn-lg btn-light me-2" type="reset">Discard</button>
<button class="btn btn-lg btn-primary" type="submit">Save Changes</button>
</div>
</div>
</div>
<div id="list-item-4" class="card fieldset border border-muted mt-5">

<span class="fieldset-tile text-muted bg-body">Social Profiles</span>
<div class="card">
<div class="card-body">
<div class="mb-3">
<label class="form-label">Twitter</label>
<input type="text" class="form-control form-control-lg">
<button class="btn btn-info my-1" type="submit"><i class="fa fa-twitter me-2"></i>Connect to Twitter</button>
<div class="small text-muted">One-click sign in</div>
</div>
<div class="mb-3">
<label class="form-label">Facebook</label>
<input type="text" class="form-control form-control-lg">
</div>
<div class="mb-3">
<label class="form-label">Behance</label>
<input type="text" class="form-control form-control-lg">
</div>
<div>
<label class="form-label">LinkedIn</label>
<input type="text" class="form-control form-control-lg">
</div>
</div>
<div class="card-footer text-end">
<button class="btn btn-lg btn-light me-2" type="reset">Discard</button>
<button class="btn btn-lg btn-primary" type="submit">Update Social Profiles</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div> --}}

<footer class="page-footer px-xl-4 px-sm-2 px-0 py-3">
<div class="container-fluid d-flex flex-wrap justify-content-between align-items-center">
<p class="col-md-4 mb-0 text-muted">© 2022 <a href="https://www.thememakker.com/" target="_blank" title="ThemeMakker Infotech LLP">ThemeMakker</a>, All Rights Reserved.</p>
<a href="#" class="col-md-4 d-flex align-items-center justify-content-center my-3 my-lg-0 me-lg-auto">
<svg height="18" viewBox="0 0 67 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path class="fill-muted" d="M0.863281 18.9997V1.14968H3.11328V16.9997H10.9133V18.9997H0.863281Z" />
<path class="fill-muted" d="M27.3045 12.6997C27.3045 13.933 27.0545 15.0497 26.5545 16.0497C26.0545 17.033 25.2878 17.8163 24.2545 18.3997C23.2378 18.9663 21.9378 19.2497 20.3545 19.2497C18.1378 19.2497 16.4462 18.6497 15.2795 17.4497C14.1295 16.233 13.5545 14.633 13.5545 12.6497V1.14968H15.8045V12.7247C15.8045 14.1747 16.1878 15.2997 16.9545 16.0997C17.7378 16.8997 18.9128 17.2997 20.4795 17.2997C21.5628 17.2997 22.4378 17.108 23.1045 16.7247C23.7878 16.3247 24.2878 15.783 24.6045 15.0997C24.9212 14.3997 25.0795 13.5997 25.0795 12.6997V1.14968H27.3045V12.6997Z" />
<path class="fill-secondary" d="M46.5286 0.765681C46.6246 0.82568 46.6726 0.92168 46.6726 1.05368L46.5466 18.6037C46.5466 18.8677 46.3906 18.9937 46.0786 18.9817H44.4586L33.1546 3.62768L33.1006 13.1677L37.5646 13.1857C37.6726 13.1857 37.7626 13.2217 37.8346 13.2937C37.9186 13.3657 37.9606 13.4617 37.9606 13.5817L37.9426 14.8957C37.9426 15.0157 37.9066 15.1237 37.8346 15.2197C37.7626 15.3037 37.6666 15.3457 37.5466 15.3457L31.3726 15.2917H31.3546C31.1026 15.2917 30.9706 15.1837 30.9586 14.9677L31.0666 0.98168C31.0666 0.849679 31.1026 0.74768 31.1746 0.675681C31.2586 0.59168 31.3666 0.555679 31.4986 0.56768H33.1726C33.3406 0.56768 33.4726 0.63368 33.5686 0.765681L44.4406 15.4177L44.5486 0.94568C44.5966 0.741679 44.7286 0.639679 44.9446 0.639679L46.2046 0.65768C46.3126 0.65768 46.4206 0.69368 46.5286 0.765681ZM39.7786 16.7857C39.8986 16.7977 39.9946 16.8397 40.0666 16.9117C40.1386 16.9717 40.1746 17.0677 40.1746 17.1997L40.1566 18.4957C40.1566 18.6157 40.1206 18.7237 40.0486 18.8197C39.9886 18.9037 39.8926 18.9457 39.7606 18.9457H31.3546C31.2346 18.9457 31.1386 18.9097 31.0666 18.8377C30.9946 18.7657 30.9586 18.6697 30.9586 18.5497V17.2357C30.9586 17.1157 30.9946 17.0137 31.0666 16.9297C31.1386 16.8337 31.2406 16.7857 31.3726 16.7857H35.5666C38.0266 16.7857 39.4306 16.7857 39.7786 16.7857Z" />
<path class="fill-muted" d="M66.0301 10.0497C66.0301 11.433 65.8551 12.6913 65.5051 13.8247C65.1551 14.9413 64.6301 15.908 63.9301 16.7247C63.2467 17.5413 62.3884 18.1663 61.3551 18.5997C60.3384 19.033 59.1551 19.2497 57.8051 19.2497C56.4051 19.2497 55.1884 19.033 54.1551 18.5997C53.1217 18.1497 52.2634 17.5247 51.5801 16.7247C50.8967 15.908 50.3884 14.933 50.0551 13.7997C49.7217 12.6663 49.5551 11.408 49.5551 10.0247C49.5551 8.19135 49.8551 6.59135 50.4551 5.22468C51.0551 3.85801 51.9634 2.79135 53.1801 2.02468C54.4134 1.25801 55.9634 0.87468 57.8301 0.87468C59.6134 0.87468 61.1134 1.25801 62.3301 2.02468C63.5467 2.77468 64.4634 3.84135 65.0801 5.22468C65.7134 6.59135 66.0301 8.19968 66.0301 10.0497ZM51.9301 10.0497C51.9301 11.5497 52.1384 12.8413 52.5551 13.9247C52.9717 15.008 53.6134 15.8413 54.4801 16.4247C55.3634 17.008 56.4717 17.2997 57.8051 17.2997C59.1551 17.2997 60.2551 17.008 61.1051 16.4247C61.9717 15.8413 62.6134 15.008 63.0301 13.9247C63.4467 12.8413 63.6551 11.5497 63.6551 10.0497C63.6551 7.79968 63.1884 6.04135 62.2551 4.77468C61.3217 3.49135 59.8467 2.84968 57.8301 2.84968C56.4801 2.84968 55.3634 3.14135 54.4801 3.72468C53.6134 4.29135 52.9717 5.11635 52.5551 6.19968C52.1384 7.26635 51.9301 8.54968 51.9301 10.0497Z" />
</svg>
</a>
<ul class="nav col-md-4 justify-content-center justify-content-lg-end">
<li class="nav-item"><a href="https://themeforest.net/user/wrraptheme/portfolio" target="_blank" class="nav-link px-2 text-muted">Portfolio</a></li>
<li class="nav-item"><a href="https://themeforest.net/licenses/standard" target="_blank" class="nav-link px-2 text-muted">licenses</a></li>
<li class="nav-item"><a href="https://help.market.envato.com/hc/en-us" target="_blank" class="nav-link px-2 text-muted">Support</a></li>
<li class="nav-item"><a href="https://themeforest.net/licenses/faq" target="_blank" class="nav-link px-2 text-muted">FAQs</a></li>
</ul>
</div>
</footer>
</div>

<div class="modal fade" id="CreateNew" tabindex="-1">
<div class="modal-dialog modal-dialog-vertical modal-dialog-scrollable">
<div class="modal-content rounded-0">
<div class="modal-header">
<h5 class="modal-title">Setup new project</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="progress bg-transparent" style="height: 3px;">
<div class="progress-bar bg-primary" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="5" style="width: 20%;"></div>
</div>
<div class="modal-body custom_scroll">
<ul class="nav nav-tabs tab-card border-0 fs-6" role="tablist">
<li class="nav-item flex-fill text-center"><a class="nav-link active" href="#step1" data-bs-toggle="tab" data-bs-step="1">1. Project</a></li>
<li class="nav-item flex-fill text-center"><a class="nav-link" href="#step2" data-bs-toggle="tab" data-bs-step="3">2. Team</a></li>
<li class="nav-item flex-fill text-center"><a class="nav-link" href="#step3" data-bs-toggle="tab" data-bs-step="4">3. File</a></li>
<li class="nav-item flex-fill text-center"><a class="nav-link" href="#step4" data-bs-toggle="tab" data-bs-step="5">4. Completed</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane fade show active" id="step1">
<div class="card mb-2">
<div class="card-body">
<h6 class="card-title mb-1">Project Type</h6>
<p class="text-muted small">If you need more info, please check out <a href="#">FAQ Page</a></p>

<div class="c_radio d-flex flex-md-wrap">
<label class="m-1 w-100" for="Personal">
<input type="radio" name="plan" id="Personal" checked />
<span class="card">
<span class="card-body d-flex p-3">
<svg class="avatar" viewBox="0 0 16 16">
<path class="fill-muted" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
</svg>
<span class="ms-3">
<span class="h6 d-flex mb-1">Personal Project</span>
<span class="text-muted">For smaller business, with simple salaries and pay schedules.</span>
</span>
</span>
</span>
</label>
<label class="m-1 w-100" for="Team">
<input type="radio" name="plan" id="Team" />
<span class="card">
<span class="card-body d-flex p-3">
<svg class="avatar" viewBox="0 0 16 16">
<path class="fill-muted" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
<path class="fill-muted" fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
<path class="fill-muted" d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
</svg>
<span class="ms-3">
<span class="h6 d-flex mb-1">Team Project</span>
<span class="text-muted">For growing business who wants to create a rewarding place to work.</span>
</span>
</span>
</span>
</label>
</div>
</div>
</div>
<div class="card mb-2">
<div class="card-body">
<h6 class="card-title mb-1">Project Details</h6>
<p class="text-muted small">It is a long established fact that a reader will be distracted by Luno.</p>
<div class="form-floating mb-2">
<select class="form-select">
<option selected>Open this select menu</option>
<option value="1">Lucid</option>
<option value="2">LUNO</option>
<option value="3">Luno</option>
</select>
<label>Choose a Customer *</label>
</div>
<div class="form-floating mb-2">
<input type="text" class="form-control" placeholder="Project name">
<label>Project name *</label>
</div>
<div class="form-floating mb-2">
<textarea class="form-control" placeholder="Add project details" style="height: 100px"></textarea>
<label>Add project details</label>
</div>
<div class="form-floating mb-2">
<input type="date" class="form-control">
<label>Enter release Date *</label>
</div>
<div class="d-flex justify-content-between">
<div class="text-muted">Allow Notifications *</div>
<div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="checkbox" id="allow_phone" value="option1">
<label class="form-check-label" for="allow_phone">Phone</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="checkbox" id="allow_email" value="option2">
<label class="form-check-label" for="allow_email">Email</label>
</div>
</div>
</div>
</div>
</div>
<div class="text-center">
<button class="btn btn-lg bg-secondary text-light next text-uppercase">Add People</button>
</div>
</div>
<div class="tab-pane fade" id="step2">
<div class="card mb-3">
<div class="card-body">
<h6 class="card-title mb-1">Build a Team</h6>
<p class="text-muted small">If you need more info, please check out <a href="#">Project Guidelines</a></p>
<div class="form-floating mb-4">
<input type="text" class="form-control" placeholder="Invite Teammates">
<label>Invite Teammates</label>
</div>
<h6 class="card-title mb-1">Team Members</h6>
<div class="form-check form-switch">
<input class="form-check-input" type="checkbox" id="list-group6" checked="">
<label class="form-check-label text-muted" for="list-group6">Adding Users by Team Members</label>
</div>
</div>
<ul class="list-group list-group-flush list-group-custom custom_scroll mb-0" style="height: 300px;">
<li class="list-group-item d-flex align-items-center">
<img class="avatar rounded" src="./assets/img/xs/avatar1.jpg" alt="">
<div class="flex-fill ms-2">
<div class="h6 mb-0">Chris Fox</div>
<small class="text-muted">Angular Developer</small>
</div>
<select class="form-select rounded-pill form-select-sm w120">
<option value="1">Owner</option>
<option value="2">Can Edit</option>
<option value="3">Guest</option>
</select>
</li>
<li class="list-group-item d-flex align-items-center">
<img class="avatar rounded" src="./assets/img/xs/avatar2.jpg" alt="">
<div class="flex-fill ms-2">
<div class="h6 mb-0">Joge Lucky</div>
<small class="text-muted">ReactJs Developer</small>
</div>
<select class="form-select rounded-pill form-select-sm w120">
<option value="1">Owner</option>
<option value="2">Can Edit</option>
<option value="3">Guest</option>
</select>
</li>
<li class="list-group-item d-flex align-items-center">
<img class="avatar rounded" src="./assets/img/xs/avatar3.jpg" alt="">
<div class="flex-fill ms-2">
<div class="h6 mb-0">Chris Fox</div>
<small class="text-muted">NodeJs Developer</small>
</div>
<select class="form-select rounded-pill form-select-sm w120">
<option value="1">Owner</option>
<option value="2">Can Edit</option>
<option value="3">Guest</option>
</select>
</li>
<li class="list-group-item d-flex align-items-center">
<img class="avatar rounded" src="./assets/img/xs/avatar4.jpg" alt="">
<div class="flex-fill ms-2">
<div class="h6 mb-0">Chris Fox</div>
<small class="text-muted">Sr. Designer</small>
</div>
<select class="form-select rounded-pill form-select-sm w120">
<option value="1">Owner</option>
<option value="2">Can Edit</option>
<option value="3">Guest</option>
</select>
</li>
<li class="list-group-item d-flex align-items-center">
<img class="avatar rounded" src="./assets/img/xs/avatar5.jpg" alt="">
<div class="flex-fill ms-2">
<div class="h6 mb-0">Chris Fox</div>
<small class="text-muted">Designer</small>
</div>
<select class="form-select rounded-pill form-select-sm w120">
<option value="1">Owner</option>
<option value="2">Can Edit</option>
<option value="3">Guest</option>
</select>
</li>
<li class="list-group-item d-flex align-items-center">
<img class="avatar rounded" src="./assets/img/xs/avatar6.jpg" alt="">
<div class="flex-fill ms-2">
<div class="h6 mb-0">Chris Fox</div>
<small class="text-muted">Front-End Developer</small>
</div>
<select class="form-select rounded-pill form-select-sm w120">
<option value="1">Owner</option>
<option value="2">Can Edit</option>
<option value="3">Guest</option>
</select>
</li>
<li class="list-group-item d-flex align-items-center">
<img class="avatar rounded" src="./assets/img/xs/avatar7.jpg" alt="">
<div class="flex-fill ms-2">
<div class="h6 mb-0">Chris Fox</div>
<small class="text-muted">QA</small>
</div>
<select class="form-select rounded-pill form-select-sm w120">
<option value="1">Owner</option>
<option value="2">Can Edit</option>
<option value="3">Guest</option>
</select>
</li>
<li class="list-group-item d-flex align-items-center">
<img class="avatar rounded" src="./assets/img/xs/avatar8.jpg" alt="">
<div class="flex-fill ms-2">
<div class="h6 mb-0">Chris Fox</div>
<small class="text-muted">Laravel Developer</small>
</div>
<select class="form-select rounded-pill form-select-sm w120">
<option value="1">Owner</option>
<option value="2">Can Edit</option>
<option value="3">Guest</option>
</select>
</li>
</ul>
</div>
<div class="text-center">
<button class="btn btn-lg bg-secondary text-light next text-uppercase">Select Files</button>
</div>
</div>
<div class="tab-pane fade" id="step3">
<div class="card mb-3">
<div class="card-body">
<h6 class="card-title mb-1">Upload Files</h6>
<div class="mb-4">
<label class="form-label small">Upload up to 10 files</label>
<input class="form-control" type="file" multiple>
</div>
<span>Already Uploaded File</span>
</div>
<ul class="list-group list-group-flush list-group-custom custom_scroll mb-0" style="height: 300px;">
<li class="list-group-item py-3">
<div class="d-flex align-items-center">
<div class="avatar rounded no-thumbnail"><i class="fa fa-file-pdf-o text-danger"></i></div>
<div class="flex-fill ms-3 text-truncate">
<p class="mb-0 color-800">Annual Sales Report 2018-19</p>
<small class="text-muted">.pdf, 5.3 MB</small>
</div>
</div>
</li>
<li class="list-group-item py-3">
<div class="d-flex align-items-center">
<div class="avatar rounded no-thumbnail"><i class="fa fa-file-excel-o text-success"></i></div>
<div class="flex-fill ms-3 text-truncate">
<p class="mb-0 color-800">Complete Product Sheet</p>
<small class="text-muted">.xls, 2.1 MB</small>
</div>
</div>
</li>
<li class="list-group-item py-3">
<div class="d-flex align-items-center">
<div class="avatar rounded no-thumbnail"><i class="fa fa-file-word-o text-info"></i></div>
<div class="flex-fill ms-3 text-truncate">
<p class="mb-0 color-800">Marketing Guidelines</p>
<small class="text-muted">.doc, 2.3 MB</small>
</div>
</div>
</li>
<li class="list-group-item py-3">
<div class="d-flex align-items-center">
<div class="avatar rounded no-thumbnail"><i class="fa fa-file-zip-o"></i></div>
<div class="flex-fill ms-3 text-truncate">
<p class="mb-0 color-800">Brand Photography</p>
<small class="text-muted">.zip, 30.5 MB</small>
</div>
</div>
</li>
</ul>
</div>
<div class="text-center">
<button class="btn btn-lg bg-secondary text-light next text-uppercase">Advanced Options</button>
</div>
</div>
<div class="tab-pane fade" id="step4">
<div class="card text-center">
<div class="card-body">
<h4 class="card-title mb-1">Project Created!</h4>
<span class="text-muted">If you need more info, please check how to create project</span>
</div>
<div class="card-body">
<button class="btn btn-lg bg-light first text-uppercase">Cretae new project</button>
<button class="btn btn-lg bg-secondary text-light text-uppercase">View project</button>
</div>
<div class="card-body">
<img class="img-fluid" src="./assets/img/project-team.svg" alt="" />
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="modal fade" id="MynotesModal" tabindex="-1">
<div class="modal-dialog modal-dialog-vertical modal-dialog-scrollable">
<div class="modal-content">
<div class="modal-header px-4">
<h5 class="modal-title">My Notes <span class="badge bg-danger ms-2">14</span></h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="bg-light px-4 py-3">
<ul class="nav nav-pills nav-fill" role="tablist">
<li class="nav-item">
<a class="nav-link active" data-bs-toggle="tab" href="#Notetab-all" role="tab" aria-selected="true">All Notes</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="tab" href="#Notetab-Business" role="tab" aria-selected="false">Business</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="tab" href="#Notetab-Social" role="tab">Social</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="tab" href="#Notetab-Create" role="tab"><i class="fa fa-plus me-2"></i>New</a>
</li>
</ul>
</div>
<div class="modal-body px-4 custom_scroll">
<div class="tab-content p-0">
<div class="tab-pane fade active show" id="Notetab-all" role="tabpanel">
<div class="card ribbon mb-2">
<div class="option-2 bg-primary position-absolute"></div>
<div class="card-body">
<span class="text-muted">02 January 2021</span>
<p class="lead">Give Review for design</p>
<span>It has roots in a piece of classical Latin literature from 45 BC, making it over 2020 years old.</span>
</div>
<div class="card-footer pt-0 border-0">
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
</div>
</div>
<div class="card ribbon mb-2">
<div class="option-2 bg-success position-absolute"></div>
<div class="card-body">
<span class="text-muted">17 January 2022</span>
<p class="lead">Give salary to employee</p>
<span>The generated Lorem Ipsum is therefore always free from repetition</span>
</div>
<div class="card-footer pt-0 border-0">
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
</div>
</div>
<div class="card ribbon mb-2">
<div class="option-2 bg-info position-absolute"></div>
<div class="card-body">
<span class="text-muted">02 Fabruary 2020</span>
<p class="lead">Launch new template</p>
<span>Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</span>
</div>
<div class="card-footer pt-0 border-0">
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
</div>
</div>
<div class="card ribbon mb-2">
<div class="option-2 bg-dark position-absolute"></div>
<div class="card-body">
<span class="text-muted">22 August 2021</span>
<p class="lead">Nightout with friends</p>
<span>Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</span>
</div>
<div class="card-footer pt-0 border-0">
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
</div>
</div>
<div class="card ribbon mb-2">
<div class="option-2 bg-danger position-absolute"></div>
<div class="card-body">
<span class="text-muted">01 December 2021</span>
<p class="lead">Change a Design</p>
<span> It has survived not only five centuries, but also the leap into electronic</span>
</div>
<div class="card-footer pt-0 border-0">
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
</div>
</div>
<div class="card ribbon mb-2">
<div class="option-2 bg-warning position-absolute"></div>
<div class="card-body">
<span class="text-muted">10 December 2021</span>
<p class="lead">Meeting with Mr.Lee</p>
<span>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model</span>
</div>
<div class="card-footer pt-0 border-0">
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
</div>
</div>
</div>
<div class="tab-pane fade" id="Notetab-Business" role="tabpanel">
<div class="card ribbon mb-2">
<div class="option-2 bg-warning position-absolute"></div>
<div class="card-body">
<span class="text-muted">10 December 2021</span>
<p class="lead">Meeting with Mr.Lee</p>
<span>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model</span>
</div>
<div class="card-footer pt-0 border-0">
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
</div>
</div>
<div class="card ribbon mb-2">
<div class="option-2 bg-danger position-absolute"></div>
<div class="card-body">
<span class="text-muted">01 December 2021</span>
<p class="lead">Change a Design</p>
<span> It has survived not only five centuries, but also the leap into electronic</span>
</div>
<div class="card-footer pt-0 border-0">
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
</div>
</div>
</div>
<div class="tab-pane fade" id="Notetab-Social" role="tabpanel">
<div class="card ribbon mb-2">
<div class="option-2 bg-dark position-absolute"></div>
<div class="card-body">
<span class="text-muted">22 August 2021</span>
<p class="lead">Nightout with friends</p>
<span>Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</span>
</div>
<div class="card-footer pt-0 border-0">
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
</div>
</div>
</div>
<div class="tab-pane fade" id="Notetab-Create" role="tabpanel">
<div class="form-floating mb-2">
<input type="text" class="form-control" placeholder="Note Title">
<label>Note Title</label>
</div>
<div class="form-floating mb-2">
<input type="text" class="form-control datepicker" placeholder="Select Date">
<label>Select Date</label>
</div>
<div class="form-floating mb-2">
<select class="form-select" id="floatingSelect" aria-label="Floating label select example">
<option selected>Open this select menu</option>
<option value="1">Business</option>
<option value="2">Social</option>
</select>
<label>Works with selects</label>
</div>
<div class="form-floating mb-4">
<textarea class="form-control" placeholder="Leave a comment here" style="height: 100px"></textarea>
<label>Leave a comment here</label>
</div>
<button type="button" class="btn btn-primary lift">Save note</button>
<button type="button" class="btn btn-white border lift" data-bs-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="modal fade" id="ScheduleModal" tabindex="-1">
<div class="modal-dialog modal-dialog-vertical modal-dialog-scrollable">
<div class="modal-content">
<div class="modal-header bg-secondary rounded-0">
<h5 class="modal-title text-light">Schedule</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body custom_scroll">
<div class="ps-2">

<div class="timeline-item ti-primary p-3">
<div class="avatar sm rounded-circle no-thumbnail">
<i class="fa fa-phone"></i>
</div>
<div class="timeline-content ms-3">
<div>Call Danny at Colby's</div>
<small class="text-muted">Today - 11:32am</small>
</div>
</div>

<div class="timeline-item ti-info p-3">
<div class="timeline-icon">
<img class="avatar sm rounded-circle" src="./assets/img/xs/avatar1.jpg" alt="">
</div>
<div class="timeline-content ms-3">
<div>Meeting with Alice</div>
<small class="text-muted">Today - 12:50pm</small>
</div>
</div>

<div class="timeline-item ti-danger p-3">
<div class="avatar sm rounded-circle no-thumbnail">
<i class="fa fa-comment"></i>
</div>
<div class="timeline-content ms-3">
<div>Answer Annie's message</div>
<small class="text-muted">Today - 01:35pm</small>
</div>
</div>

<div class="timeline-item ti-danger p-3">
<div class="avatar sm rounded-circle no-thumbnail">
<i class="fa fa-phone"></i>
</div>
<div class="timeline-content ms-3">
<div>Send new campaign</div>
<small class="text-muted">Today - 02:40pm</small>
</div>
</div>

<div class="timeline-item ti-primary p-3">
<div class="avatar sm rounded-circle no-thumbnail">
<i class="fa fa-smile-o"></i>
</div>
<div class="timeline-content ms-3">
<div>Project review</div>
<small class="text-muted">Today - 03:15pm</small>
</div>
</div>

<div class="timeline-item ti-warning p-3">
<div class="avatar sm rounded-circle no-thumbnail">
<i class="fa fa-phone"></i>
</div>
<div class="timeline-content ms-3">
<div>Call Trisha Jackson</div>
<small class="text-muted">Today - 05:40pm</small>
</div>
</div>

<div class="timeline-item ti-success p-3">
<div class="avatar sm rounded-circle no-thumbnail">
<i class="fa fa-leaf"></i>
</div>
<div class="timeline-content ms-3">
<div>Write proposal for Don</div>
<small class="text-muted">Today - 06:30pm</small>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="modal fade" id="RecentChat" tabindex="-1">
<div class="modal-dialog modal-dialog-vertical modal-dialog-scrollable">
<div class="modal-content">
<div class="d-flex align-items-start">
<div class="nav flex-column nav-pills p-3 h-100">
<a class="nav-link rounded-circle p-1 mb-2 active" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-1" title="">
<img class="avatar sm rounded-circle border" src="./assets/img/xs/avatar1.jpg" alt="avatar">
</a>
<a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-2" title="">
<img class="avatar sm rounded-circle border" src="./assets/img/xs/avatar2.jpg" alt="avatar">
</a>
<a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-3" title="">
<img class="avatar sm rounded-circle border" src="./assets/img/xs/avatar3.jpg" alt="avatar">
</a>
<a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-2" title="">
<img class="avatar sm rounded-circle border" src="./assets/img/xs/avatar4.jpg" alt="avatar">
</a>
<a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-5" title="">
<img class="avatar sm rounded-circle border" src="./assets/img/xs/avatar5.jpg" alt="avatar">
</a>
<a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-1" title="">
<img class="avatar sm rounded-circle border" src="./assets/img/xs/avatar6.jpg" alt="avatar">
</a>
<a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-7" title="">
<img class="avatar sm rounded-circle border" src="./assets/img/xs/avatar7.jpg" alt="avatar">
</a>
<a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-3" title="">
<img class="avatar sm rounded-circle border" src="./assets/img/xs/avatar8.jpg" alt="avatar">
</a>
<a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-3" title="">
<img class="avatar sm rounded-circle border" src="./assets/img/xs/avatar9.jpg" alt="avatar">
</a>
<a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-1" title="">
<img class="avatar sm rounded-circle border" src="./assets/img/xs/avatar10.jpg" alt="avatar">
</a>
<a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-1" title="">
<img class="avatar sm rounded-circle border" src="./assets/img/xs/avatar5.jpg" alt="avatar">
</a>
</div>
<div class="tab-content shadow-sm">
<div class="tab-pane fade show active" id="c-user-1" role="tabpanel">
<div class="card">

<div class="card-header border-bottom py-3">
<div class="d-flex">
<a href="javascript:void(0);" title="">
<img class="avatar rounded-circle" src="./assets/img/xs/avatar1.jpg" alt="avatar">
</a>
<div class="ms-3">
<h6 class="mb-0">Orlando Lentz</h6>
<small class="text-muted">Last seen: 2 hours ago</small>
</div>
</div>
<div class="dropdown morphing scale-left">
<a class="nav-link p-2 text-secondary d-none d-xl-inline-block" href="javascript:void(0);"><i class="fa fa-camera"></i></a>
<a class="nav-link p-2 me-1 text-secondary d-none d-xl-inline-block" href="javascript:void(0);"><i class="fa fa-video-camera"></i></a>
<a class="nav-link py-2 px-3 text-muted d-inline-block d-xl-none" data-bs-dismiss="modal" aria-label="Close" href="#"><i class="fa fa-close"></i></a>
<a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
<ul class="dropdown-menu shadow border-0 p-2">
<li><a class="dropdown-item" href="#">File Info</a></li>
<li><a class="dropdown-item" href="#">Copy to</a></li>
<li><a class="dropdown-item" href="#">Move to</a></li>
<li><a class="dropdown-item" href="#">Rename</a></li>
<li><a class="dropdown-item" href="#">Block</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</div>

<div class="card-body custom_scroll" style="height: calc(100vh - 141px);">
<ul class="list-unstyled chat-history flex-grow-1">

<li class="mb-3 d-flex flex-row align-items-end">
<div class="max-width-70">
<div class="user-info mb-1">
<img class="avatar xs rounded-circle me-1" src="./assets/img/xs/avatar1.jpg" alt="avatar">
<span class="text-muted small">10:10 AM, Today</span>
</div>
<div class="card p-3">
<div class="message"> Hi Aiden, how are you?</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>

<li class="mb-3 d-flex flex-row-reverse align-items-end">
<div class="max-width-70 text-end">
<div class="user-info mb-1">
<span class="text-muted small">10:12 AM, Today</span>
</div>
<div class="card border-0 p-3 bg-primary text-light">
<div class="message">Are we meeting today?</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>

<li class="mb-3 d-flex flex-row align-items-end">
<div class="max-width-70">
<div class="user-info mb-1">
<img class="avatar xs rounded-circle me-1" src="./assets/img/xs/avatar1.jpg" alt="avatar">
<span class="text-muted small">10:10 AM, Today</span>
</div>
<div class="card p-3">
 <div class="message"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>

<li class="mb-3 d-flex flex-row align-items-end">
<div class="max-width-70">
<div class="user-info mb-1">
<img class="avatar xs rounded-circle me-1" src="./assets/img/xs/avatar1.jpg" alt="avatar">
<span class="text-muted small">10:10 AM, Today</span>
</div>
<div class="card p-3">
<div class="message"> Contrary to popular belief, Lorem Ipsum is not simply random text.</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>

<li class="mb-3 d-flex flex-row-reverse align-items-end">
<div class="max-width-70 text-end">
<div class="user-info mb-1">
<span class="text-muted small">10:12 AM, Today</span>
</div>
<div class="card border-0 p-3 bg-primary text-light">
<div class="message">Yes, Orlando Allredy done <br> There are many variations of passages of Lorem Ipsum available</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>

<li class="mb-3 d-flex flex-row align-items-end">
<div class="max-width-70">
<div class="user-info mb-1">
<img class="avatar xs rounded-circle me-1" src="./assets/img/xs/avatar1.jpg" alt="avatar">
<span class="text-muted small">10:10 AM, Today</span>
</div>
<div class="card p-3">
<div class="message">
<p>Please find attached images</p>
<img class="w120 img-thumbnail" src="./assets/img/gallery/3.jpg" alt="">
<img class="w120 img-thumbnail" src="./assets/img/gallery/4.jpg" alt="">
</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>

<li class="mb-3 d-flex flex-row-reverse align-items-end">
<div class="max-width-70 text-end">
<div class="user-info mb-1">
<span class="text-muted small">10:12 AM, Today</span>
</div>
<div class="card border-0 p-3 bg-primary text-light">
<div class="message">Okay, will check and let you know.</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>
</ul>
</div>

<div class="card-footer border-top bg-transparent py-3 px-4">
<div class="input-group">
<input type="text" class="form-control" placeholder="Enter text here...">
<button class="btn btn-primary" type="button">Send</button>
</div>
</div>
</div>
</div>
<div class="tab-pane fade show active" id="c-user-2" role="tabpanel">
<div class="card">

<div class="card-header border-bottom py-3">
<div class="d-flex">
<a href="javascript:void(0);" title="">
<img class="avatar rounded-circle" src="./assets/img/xs/avatar2.jpg" alt="avatar">
</a>
<div class="ms-3">
<h6 class="mb-0">Orlando Lentz</h6>
<small class="text-muted">Last seen: 2 hours ago</small>
</div>
</div>
<div class="dropdown morphing scale-left">
<a class="nav-link p-2 text-secondary d-none d-xl-inline-block" href="javascript:void(0);"><i class="fa fa-camera"></i></a>
<a class="nav-link p-2 me-1 text-secondary d-none d-xl-inline-block" href="javascript:void(0);"><i class="fa fa-video-camera"></i></a>
<a class="nav-link py-2 px-3 text-muted d-inline-block d-xl-none" data-bs-dismiss="modal" aria-label="Close" href="#"><i class="fa fa-close"></i></a>
<a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
<ul class="dropdown-menu shadow border-0 p-2">
<li><a class="dropdown-item" href="#">File Info</a></li>
<li><a class="dropdown-item" href="#">Copy to</a></li>
<li><a class="dropdown-item" href="#">Move to</a></li>
<li><a class="dropdown-item" href="#">Rename</a></li>
<li><a class="dropdown-item" href="#">Block</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</div>

<div class="card-body custom_scroll" style="height: calc(100vh - 141px);">
<ul class="list-unstyled chat-history flex-grow-1">

<li class="mb-3 d-flex flex-row-reverse align-items-end">
<div class="max-width-70 text-end">
<div class="user-info mb-1">
<span class="text-muted small">10:12 AM, Today</span>
</div>
<div class="card border-0 p-3 bg-primary text-light">
<div class="message">Are we meeting today?</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>

<li class="mb-3 d-flex flex-row align-items-end">
<div class="max-width-70">
<div class="user-info mb-1">
<img class="avatar xs rounded-circle me-1" src="./assets/img/xs/avatar2.jpg" alt="avatar">
<span class="text-muted small">10:10 AM, Today</span>
</div>
<div class="card p-3">
<div class="message"> Hi Aiden, how are you?</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>

<li class="mb-3 d-flex flex-row-reverse align-items-end">
<div class="max-width-70 text-end">
<div class="user-info mb-1">
<span class="text-muted small">10:12 AM, Today</span>
</div>
<div class="card border-0 p-3 bg-primary text-light">
<div class="message">Yes, Orlando Allredy done <br> There are many variations of passages of Lorem Ipsum available</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
 <li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>

<li class="mb-3 d-flex flex-row align-items-end">
<div class="max-width-70">
<div class="user-info mb-1">
<img class="avatar xs rounded-circle me-1" src="./assets/img/xs/avatar2.jpg" alt="avatar">
<span class="text-muted small">10:10 AM, Today</span>
</div>
<div class="card p-3">
<div class="message">
<p>Please find attached images</p>
<img class="w120 img-thumbnail" src="./assets/img/gallery/1.jpg" alt="">
<img class="w120 img-thumbnail" src="./assets/img/gallery/2.jpg" alt="">
</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>

<li class="mb-3 d-flex flex-row-reverse align-items-end">
<div class="max-width-70 text-end">
<div class="user-info mb-1">
<span class="text-muted small">10:12 AM, Today</span>
</div>
<div class="card border-0 p-3 bg-primary text-light">
<div class="message">Okay, will check and let you know.</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>

<li class="mb-3 d-flex flex-row align-items-end">
<div class="max-width-70">
<div class="user-info mb-1">
<img class="avatar xs rounded-circle me-1" src="./assets/img/xs/avatar2.jpg" alt="avatar">
<span class="text-muted small">10:10 AM, Today</span>
</div>
<div class="card p-3">
<div class="message"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>

<li class="mb-3 d-flex flex-row align-items-end">
<div class="max-width-70">
<div class="user-info mb-1">
<img class="avatar xs rounded-circle me-1" src="./assets/img/xs/avatar2.jpg" alt="avatar">
<span class="text-muted small">10:10 AM, Today</span>
</div>
<div class="card p-3">
<div class="message"> Contrary to popular belief, Lorem Ipsum is not simply random text.</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>
</ul>
</div>

<div class="card-footer border-top bg-transparent py-3 px-4">
<div class="input-group">
<input type="text" class="form-control" placeholder="Enter text here...">
<button class="btn btn-primary" type="button">Send</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="modal fade" id="SettingsModal" tabindex="-1">
<div class="modal-dialog modal-dialog-vertical right-side modal-dialog-scrollable">
<div class="modal-content">
<div class="px-xl-4 modal-header">
<h5 class="modal-title">Theme Setting</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="px-xl-4 modal-body custom_scroll">

<div class="card fieldset border border-primary p-3 setting-theme mb-4">
<span class="fieldset-tile text-primary bg-card">Color Settings</span>
<ul class="list-unstyled d-flex choose-skin mb-0">
<li data-theme="black">
<div class="black"></div>
</li>
<li data-theme="indigo">
<div class="indigo"></div>
</li>
<li data-theme="blue">
<div class="blue"></div>
</li>
<li data-theme="cyan">
<div class="cyan"></div>
</li>
<li data-theme="green">
<div class="green"></div>
</li>
<li data-theme="orange">
<div class="orange"></div>
</li>
<li data-theme="blush">
<div class="blush"></div>
</li>
<li data-theme="red">
<div class="red"></div>
</li>
<li data-theme="dynamic">
<div class="dynamic"><i class="fa fa-paint-brush"></i></div>
</li>
</ul>

<div class="card fieldset border border-primary p-3 dt-setting mt-4">
<span class="fieldset-tile text-primary bg-card">Dynamic Color Settings</span>
<div class="row g-3">
<div class="col-7">
<ul class="list-unstyled mb-0">
<li>
<button id="primaryColorPicker" class="btn bg-primary avatar xs me-2"></button>
<label>Primary Color</label>
</li>
<li>
<button id="secondaryColorPicker" class="btn bg-secondary avatar xs me-2"></button>
<label>Secondary Color</label>
</li>
<li>
<button id="BodyColorPicker" class="btn btn-outline-secondary bg-body avatar xs me-2"></button>
<label>Site Background</label>
</li>
<li>
<button id="CardColorPicker" class="btn btn-outline-secondary bg-card avatar xs me-2"></button>
<label>Widget Background</label>
</li>
<li>
<button id="BorderColorPicker" class="btn btn-outline-secondary bg-card avatar xs me-2"></button>
<label>Border Color</label>
</li>
</ul>
</div>
<div class="col-5">
<ul class="list-unstyled mb-0">
<li>
<button id="chartColorPicker1" class="btn chart-color1 avatar xs me-2"></button>
<label>Chart Color 1</label>
</li>
<li>
<button id="chartColorPicker2" class="btn chart-color2 avatar xs me-2"></button>
<label>Chart Color 2</label>
</li>
<li>
<button id="chartColorPicker3" class="btn chart-color3 avatar xs me-2"></button>
<label>Chart Color 3</label>
</li>
<li>
<button id="chartColorPicker4" class="btn chart-color4 avatar xs me-2"></button>
<label>Chart Color 4</label>
</li>
<li>
<button id="chartColorPicker5" class="btn chart-color5 avatar xs me-2"></button>
<label>Chart Color 5</label>
</li>
</ul>
</div>
</div>
</div>
</div>

<div class="card fieldset border setting-mode mb-4">
<span class="fieldset-tile bg-card">Light/Dark & Contrast Layout</span>
<div class="c_radio d-flex text-center">
<label class="m-1 theme-switch" for="theme-switch">
<input type="checkbox" id="theme-switch" />
<span class="card p-2">
<img class="img-fluid" src="./assets/img/dark-version.svg" alt="Dark Mode" />
</span>
</label>
<label class="m-1 theme-dark" for="theme-dark">
<input type="checkbox" id="theme-dark" />
<span class="card p-2">
<img class="img-fluid" src="./assets/img/dark-theme.svg" alt="Theme Dark Mode" />
</span>
</label>
<label class="m-1 theme-high-contrast" for="theme-high-contrast">
<input type="checkbox" id="theme-high-contrast" />
<span class="card p-2">
<img class="img-fluid" src="./assets/img/high-version.svg" alt="High Contrast" />
</span>
</label>
<label class="m-1 theme-rtl" for="theme-rtl">
<input type="checkbox" id="theme-rtl" />
<span class="card p-2">
<img class="img-fluid" src="./assets/img/rtl-version.svg" alt="RTL Mode!" />
</span>
</label>
</div>
</div>

<div class="card fieldset border setting-font">
<span class="fieldset-tile bg-card">Google Font Settings</span>
<div class="c_radio d-flex text-center font_setting">
<label class="m-1" for="font-opensans">
<input type="radio" name="font" id="font-opensans" value="font-opensans" />
<span class="card p-2">
<img class="img-fluid" src="./assets/img/font-opensans.svg" alt="Dark Mode" />
</span>
</label>
<label class="m-1" for="font-quicksand">
<input type="radio" name="font" id="font-quicksand" value="font-quicksand" />
<span class="card p-2">
<img class="img-fluid" src="./assets/img/font-quicksand.svg" alt="Dark Mode" />
</span>
</label>
<label class="m-1" for="font-nunito">
<input type="radio" name="font" id="font-nunito" value="font-nunito" checked="" />
<span class="card p-2">
<img class="img-fluid" src="./assets/img/font-nunito.svg" alt="Dark Mode" />
</span>
</label>
<label class="m-1" for="font-raleway">
<input type="radio" name="font" id="font-raleway" value="font-raleway" />
<span class="card p-2">
<img class="img-fluid" src="./assets/img/font-raleway.svg" alt="Dark Mode" />
</span>
</label>
</div>
</div>

<div class="m-1 p-3 bg-body rounded-4 mb-4">
<p>Dynamic Font Settings</p>
<div class="mb-2">
<label class="form-label small text-muted mb-0">Enter font URL</label>
<input id="font_url" type="text" class="form-control" placeholder="http://fonts.cdnfonts.com/css/vonfont">
</div>
<div class="mb-3">
<label class="form-label small text-muted mb-0">Enter font family name</label>
<input id="font_family" type="text" class="form-control" placeholder="vonfont">
</div>
<button id="font_apply" type="submit" class="btn btn-primary">Save Changes</button>
<button id="font_cancel" type="submit" class="btn btn-secondary">Clear Changes</button>
</div>

<div class="setting-more mb-4">
<h6 class="card-title">More Setting</h6>
<ul class="list-group list-group-flush list-group-custom fs-6">

<li class="list-group-item">
<div class="form-check form-switch h-menu-switch mb-1">
<input class="form-check-input" type="checkbox" id="h_menu">
<label class="form-check-label" for="h_menu">Horizontal Menu Version</label>
</div>
</li>

<li class="list-group-item">
<div class="form-check form-switch pageheader-switch mb-1">
<input class="form-check-input" type="checkbox" id="PageHeader" checked>
<label class="form-check-label" for="PageHeader">Page Header Fix</label>
</div>
</li>

<li class="list-group-item">
<div class="form-check form-switch pageheader-dark-switch mb-1">
<input class="form-check-input" type="checkbox" id="PageHeader_dark">
<label class="form-check-label" for="PageHeader_dark">Page Header Dark Mode</label>
</div>
</li>

<li class="list-group-item">
<div class="form-check form-switch radius-switch mb-1">
<input class="form-check-input" type="checkbox" id="BorderRadius">
<label class="form-check-label" for="BorderRadius">Border Radius none</label>
</div>
</li>

<li class="list-group-item">
<div class="form-check form-switch sidebar-v2 mb-1">
<input class="form-check-input" type="checkbox" id="sidebar_v2">
<label class="form-check-label" for="sidebar_v2">Sidebar Version 2</label>
</div>
</li>

<li class="list-group-item">
<div class="form-check form-switch sidebardark-switch mb-1">
<input class="form-check-input" type="checkbox" id="SidebarDark">
<label class="form-check-label" for="SidebarDark">Enable Dark! ( Sidebar )</label>
</div>
</li>

<li class="list-group-item setting-img">
<div class="form-check form-switch imagebg-switch mb-1">
<input class="form-check-input" type="checkbox" id="CheckImage">
<label class="form-check-label" for="CheckImage">Background Image (Sidebar)</label>
</div>
<div class="bg-images">
<ul class="list-unstyled d-flex">
<li class="sidebar-img-1 me-1 sidebar-img-active"><a class="rounded sidebar-img" id="img-1" href="#"><img src="./assets/img/sidebar-bg/sidebar-1.jpg" alt="" /></a></li>
<li class="sidebar-img-2 me-1"><a class="rounded sidebar-img" id="img-2" href="#"><img src="./assets/img/sidebar-bg/sidebar-2.jpg" alt="" /></a></li>
<li class="sidebar-img-3 me-1"><a class="rounded sidebar-img" id="img-3" href="#"><img src="./assets/img/sidebar-bg/sidebar-3.jpg" alt="" /></a></li>
<li class="sidebar-img-4 me-1"><a class="rounded sidebar-img" id="img-4" href="#"><img src="./assets/img/sidebar-bg/sidebar-4.jpg" alt="" /></a></li>
<li class="sidebar-img-5 me-1"><a class="rounded sidebar-img" id="img-5" href="#"><img src="./assets/img/sidebar-bg/sidebar-5.jpg" alt="" /></a></li>
</ul>
</div>
</li>

<li class="list-group-item">
<div class="form-check form-switch fluid-switch mb-1">
<input class="form-check-input" type="checkbox" id="fluidLayout" checked="">
<label class="form-check-label" for="fluidLayout">Container Fluid</label>
</div>
</li>

<li class="list-group-item">
<div class="form-check form-switch shadow-switch mb-1">
<input class="form-check-input" type="checkbox" id="card_shadow">
<label class="form-check-label" for="card_shadow">Card Box-Shadow</label>
</div>
</li>
</ul>
</div>

<div class="mb-4">
<a class="btn lift  btn-outline-secondary" href="./marketing/index.html">Marketing page</a>
<a class="btn lift  btn-outline-secondary" href="./onepgae-uikit/onepage.html">Landing page</a>
<a class="btn lift  btn-outline-secondary" href="./onepgae-uikit/index.html">One page Ui Kit Elements</a>
</div>
</div>
<div class="px-xl-4 modal-footer d-flex justify-content-start text-center">
<button type="button" class="btn flex-fill btn-primary lift">Save Changes</button>
<button type="button" class="btn flex-fill btn-white border lift" data-bs-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>


<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="./assets/js/theme.js"></script>

<script src="./assets/js/bundle/apexcharts.bundle.js"></script>

<script src="./assets/js/bundle/apexcharts.bundle.js"></script>
</body>
</html>
