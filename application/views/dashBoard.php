<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.css">
  <style>
    @import 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet';

    :root {
      --dk-gray-100: #F3F4F6;
      --dk-gray-200: #E5E7EB;
      --dk-gray-300: #D1D5DB;
      --dk-gray-400: #9CA3AF;
      --dk-gray-500: #6B7280;
      --dk-gray-600: #4B5563;
      --dk-gray-700: #374151;
      --dk-gray-800: #1F2937;
      --dk-gray-900: #111827;
      --dk-dark-bg: #313348;
      --dk-darker-bg: #2a2b3d;
      --navbar-bg-color: #6f6486;
      --sidebar-bg-color: #252636;
      --sidebar-width: 250px;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', sans-serif;
      background-color: var(--dk-darker-bg);
      font-size: .925rem;
    }

    #wrapper {
      margin-left: var(--sidebar-width);
      transition: all .3s ease-in-out;
    }

    #wrapper.fullwidth {
      margin-left: 0;
    }



    /** --------------------------------
 -- Sidebar
-------------------------------- */
    .sidebar {
      background-color: var(--sidebar-bg-color);
      width: var(--sidebar-width);
      transition: all .3s ease-in-out;
      transform: translateX(0);
      z-index: 9999999
    }

    .sidebar .close-aside {
      position: absolute;
      top: 7px;
      right: 7px;
      cursor: pointer;
      color: #EEE;
    }

    .sidebar .sidebar-header {
      border-bottom: 1px solid #2a2b3c
    }

    .sidebar .sidebar-header h5 a {
      color: var(--dk-gray-300)
    }

    .sidebar .sidebar-header p {
      color: var(--dk-gray-400);
      /* color: #FFF; */
      font-size: .825rem;
    }

    .search input ::placeholder {
      color: #FFF;
    }

    .sidebar .search .form-control~i {
      color: #0d0e0f;
      right: 40px;
      top: 22px;
    }

    .sidebar>ul>li {
      padding: .7rem 1.75rem;
    }

    .sidebar ul>li>a {
      color: var(--dk-gray-400);
      text-decoration: none;
    }

    /* Start numbers */
    .sidebar ul>li>a>.num {
      line-height: 0;
      border-radius: 3px;
      font-size: 14px;
      padding: 0px 5px
    }

    .sidebar ul>li>i {
      font-size: 18px;
      margin-right: .7rem;
      color: var(--dk-gray-500);
    }

    /* .sidebar ul > li.has-dropdown > a:after {
	content: '\f063';
	font-family: unicons-line;
	font-size: 1rem;
	line-height: 1.8;
	float: right;
	color: var(--dk-gray-500);
	transition: all .3s ease-in-out;
} */

    .sidebar ul .opened>a:after {
      transform: rotate(-90deg);
    }

    /* Start dropdown menu */
    .sidebar ul .sidebar-dropdown {
      padding-top: 10px;
      padding-left: 30px;
      display: none;
    }

    .sidebar ul .sidebar-dropdown.active {
      display: block;
    }

    .sidebar ul .sidebar-dropdown>li>a {
      font-size: .85rem;
      padding: .5rem 0;
      display: block;
    }

    /* End dropdown menu */

    .show-sidebar {
      transform: translateX(-270px);
    }

    @media (max-width: 767px) {
      .sidebar ul>li {
        padding-top: 12px;
        padding-bottom: 12px;
      }

      .sidebar .search {
        padding: 10px 0 10px 30px
      }
    }




    /** --------------------------------
 -- welcome
-------------------------------- */
    .welcome {
      color: var(--dk-gray-300);
    }

    .welcome .content {
      background-color: var(--dk-dark-bg);
    }

    .welcome p {
      color: var(--dk-gray-400);
    }




    /** --------------------------------
 -- Statistics
-------------------------------- */
    .statistics {
      color: var(--dk-gray-200);
    }

    .statistics .box {
      background-color: var(--dk-dark-bg);
    }

    .statistics .box i {
      width: 60px;
      height: 60px;
      line-height: 60px;
    }

    .statistics .box p {
      color: var(--dk-gray-400);
    }




    /** --------------------------------
 -- Charts
-------------------------------- */
    .charts .chart-container {
      background-color: var(--dk-dark-bg);
      width: 100%;
    }

    .charts .chart-container h3 {
      color: var(--dk-gray-400)
    }

    .charts .chart-container {
      background-image: url('download.png');
      background-repeat: no-repeat;
      width: 100%;

    }




    /** --------------------------------
 -- users
-------------------------------- */
    .admins .box .admin {
      background-color: var(--dk-dark-bg);
    }

    .admins .box h3 {
      color: var(--dk-gray-300);
    }

    .admins .box p {
      color: var(--dk-gray-400)
    }




    /** --------------------------------
 -- statis
-------------------------------- */
    .statis {
      color: var(--dk-gray-100);
    }

    .statis .box {
      position: relative;
      overflow: hidden;
      border-radius: 3px;
    }

    .statis .box h3:after {
      content: "";
      height: 2px;
      width: 70%;
      margin: auto;
      background-color: rgba(255, 255, 255, 0.12);
      display: block;
      margin-top: 10px;
    }

    .statis .box i {
      position: absolute;
      height: 70px;
      width: 70px;
      font-size: 22px;
      padding: 15px;
      top: -25px;
      left: -25px;
      background-color: rgba(255, 255, 255, 0.15);
      line-height: 60px;
      text-align: right;
      border-radius: 50%;
    }





    .main-color {
      color: #ffc107
    }

    /** --------------------------------
 -- Please don't do that in real-world projects!
 -- overwrite Bootstrap variables instead.
-------------------------------- */

    .navbar {
      background-color: var(--navbar-bg-color) !important;
      border: none !important;
    }

    .navbar .dropdown-menu {
      right: auto !important;
      left: 0 !important;
    }

    .navbar .navbar-nav>li>a {
      color: #EEE !important;
      line-height: 55px !important;
      padding: 0 10px !important;
    }

    .navbar .navbar-brand {
      color: #FFF !important
    }

    .navbar .navbar-nav>li>a:focus,
    .navbar .navbar-nav>li>a:hover {
      color: #EEE !important
    }

    .navbar .navbar-nav>.open>a,
    .navbar .navbar-nav>.open>a:focus,
    .navbar .navbar-nav>.open>a:hover {
      background-color: transparent !important;
      color: #FFF !important
    }

    .navbar .navbar-brand {
      line-height: 55px !important;
      padding: 0 !important
    }

    .navbar .navbar-brand:focus,
    .navbar .navbar-brand:hover {
      color: #FFF !important
    }

    .navbar>.container .navbar-brand,
    .navbar>.container-fluid .navbar-brand {
      margin: 0 !important
    }

    @media (max-width: 767px) {
      .navbar>.container-fluid .navbar-brand {
        margin-left: 15px !important;
      }

      .navbar .navbar-nav>li>a {
        padding-left: 0 !important;
      }

      .navbar-nav {
        margin: 0 !important;
      }

      .navbar .navbar-collapse,
      .navbar .navbar-form {
        border: none !important;
      }
    }

    .navbar .navbar-nav>li>a {
      float: left !important;
    }

    .navbar .navbar-nav>li>a>span:not(.caret) {
      background-color: #e74c3c !important;
      border-radius: 50% !important;
      height: 25px !important;
      width: 25px !important;
      padding: 2px !important;
      font-size: 11px !important;
      position: relative !important;
      top: -10px !important;
      right: 5px !important
    }

    .dropdown-menu>li>a {
      padding-top: 5px !important;
      padding-right: 5px !important;
    }

    .navbar .navbar-nav>li>a>i {
      font-size: 18px !important;
    }




    /* Start media query */

    @media (max-width: 767px) {
      #wrapper {
        margin: 0 !important
      }

      .statistics .box {
        margin-bottom: 25px !important;
      }

      .navbar .navbar-nav .open .dropdown-menu>li>a {
        color: #CCC !important
      }

      .navbar .navbar-nav .open .dropdown-menu>li>a:hover {
        color: #FFF !important
      }

      .navbar .navbar-toggle {
        border: none !important;
        color: #EEE !important;
        font-size: 18px !important;
      }

      .navbar .navbar-toggle:focus,
      .navbar .navbar-toggle:hover {
        background-color: transparent !important
      }
    }


    ::-webkit-scrollbar {
      background: transparent;
      width: 5px;
      height: 5px;
    }

    ::-webkit-scrollbar-thumb {
      background-color: #3c3f58;
    }

    ::-webkit-scrollbar-thumb:hover {
      background-color: rgba(0, 0, 0, 0.3);
    }
  </style>
</head>

<body>
  <aside class="sidebar position-fixed top-0 left-0 overflow-auto h-100 float-left" id="show-side-navigation1">
    <i class="uil-bars close-aside d-md-none d-lg-none" data-close="show-side-navigation1"></i>
    <div class="sidebar-header d-flex justify-content-center align-items-center px-3 py-4">
      <img class="rounded-pill img-fluid" width="65"
        src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148906966/small/1501685402/enhance"
        alt="">
      <div class="ms-2">
        <h5 class="fs-6 mb-0">
          <a class="text-decoration-none" href="#">Jone Doe</a>
        </h5>
        <p class="mt-1 mb-0">Lorem ipsum dolor sit amet consectetur.</p>
      </div>
    </div>

    <div class="search position-relative text-center px-4 py-3 mt-2">
      <input type="text" class="form-control w-100 border-0 bg-transparent " placeholder="Search here">
      <i class="fa fa-search position-absolute d-block fs-6"></i>
    </div>

    <ul class="categories list-unstyled">
      <li class="has-dropdown">
        <i class="fa-solid fa-house"></i><a href="#"> Dashboard</a>
        <ul class="sidebar-dropdown list-unstyled">
          <li><a href="#">Lorem ipsum</a></li>
          <li><a href="#">ipsum dolor</a></li>
          <li><a href="#">dolor ipsum</a></li>
          <li><a href="#">amet consectetur</a></li>
          <li><a href="#">ipsum dolor sit</a></li>
        </ul>
      </li>
      <li class="">
        <i class="fa-solid fa-file-export"></i> <a href="#"> File manager</a>
      </li>
      <li class="has-dropdown">
        <i class="fa-regular fa-calendar-days"></i> <a href="#"> Calender</a>

      </li>
      </li>
      <li class="has-dropdown">
        <i class="fa-regular fa-envelope"></i> <a href="#"> Mailbox</a>

      </li>

      <li class="has-dropdown">
        <i class="fa-solid fa-bars-progress"></i><a href="#"> Projects</a>

      </li>
      <li class="">
        <i class="fa-solid fa-gear"></i><a href="#"> Settings</a>

      </li>

      <li class="has-dropdown">
        <i class="fa-solid fa-chart-simple"></i><a href="#"> Charts</a>
        <ul class="sidebar-dropdown list-unstyled">
          <li><a href="#">Lorem ipsum</a></li>
          <li><a href="#">ipsum dolor</a></li>
          <li><a href="#">dolor ipsum</a></li>
          <li><a href="#">amet consectetur</a></li>
          <li><a href="#">ipsum dolor sit</a></li>
        </ul>
      </li>
      <li class="">
        <i class="fa-solid fa-location-pin"></i><a href="#"> Maps</a>
      </li>
    </ul>
  </aside>

  <section id="wrapper">
    <nav class="navbar navbar-expand-md">
      <div class="container-fluid mx-2">
        <div class="navbar-header">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggle-navbar"
            aria-controls="toggle-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <i class="uil-bars text-white"></i>
          </button>
          <a class="navbar-brand" href="#">admin<span class="main-color">kit</span></a>
        </div>
        <div class="collapse navbar-collapse" id="toggle-navbar">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Settings
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="#">My account</a>
                </li>
                <li><a class="dropdown-item" href="#">My inbox</a>
                </li>
                <li><a class="dropdown-item" href="#">Help</a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="http://localhost/CODEIGNITER/DAY1/index.php/Welcome/Login">Log
                    out</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa-solid fa-message"></i></i><span>23</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa-regular fa-bell"></i><span>98</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i data-show="show-side-navigation1" class="uil-bars show-side-btn"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="p-4">
      <div class="welcome">
        <div class="content rounded-3 p-3">
          <h1 class="fs-3">Welcome to Dashboard</h1>
          <p class="mb-0">Hello Jone Doe, welcome to your awesome dashboard!</p>
        </div>
      </div>

      <section class="statistics mt-4">
        <div class="row">
          <div class="col-lg-4">
            <div class="box d-flex rounded-2 align-items-center mb-4 mb-lg-0 p-3">
              <i class="fa-regular fa-envelope text-center bg-primary rounded-circle"></i>
              <div class="ms-3">
                <div class="d-flex align-items-center">
                  <h3 class="mb-0">1,245</h3> <span class="d-block ms-2">Student</span>
                </div>
                <p class="fs-normal mb-0">Lorem ipsum dolor sit amet</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="box d-flex rounded-2 align-items-center mb-4 mb-lg-0 p-3">
              <i class="fa-regular fa-file text-center bg-danger rounded-circle"></i>
              <div class="ms-3">
                <div class="d-flex align-items-center">
                  <h3 class="mb-0">34</h3> <span class="d-block ms-2">Projects</span>
                </div>
                <p class="fs-normal mb-0">Lorem ipsum dolor sit amet</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="box d-flex rounded-2 align-items-center p-3">
              <i class="fa-regular fa-user text-center bg-success rounded-circle"></i>
              <div class="ms-3">
                <div class="d-flex align-items-center">
                  <h3 class="mb-0">5,245</h3> <span class="d-block ms-2">Users</span>
                </div>
                <p class="fs-normal mb-0">Lorem ipsum dolor sit amet</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="charts mt-4">
        <div class="row">
          <div class="col-lg-6">
            <div class="chart-container rounded-2 p-2">
              <img src="http://localhost/CODEIGNITER/DAY1\assect\images\download.png" alt="" class="w-100">
            </div>
          </div>
          <div class="col-lg-6">
          <div class="chart-container rounded-2 p-2">
              <img src="http://localhost/CODEIGNITER/DAY1\assect\images\download.png" alt="" class="w-100">
            </div>
          </div>
        </div>

      </section>

      <section class="admins mt-4">
        <div class="row">
          <div class="col-md-6">
            <div class="box">
              <!-- <h4>Admins:</h4> -->
              <div class="admin d-flex align-items-center rounded-2 p-3 mb-4">
                <div class="img">
                  <img class="img-fluid rounded-pill" width="75" height="75"
                    src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148906966/small/1501685402/enhance"
                    alt="admin">
                </div>
                <div class="ms-3">
                  <h3 class="fs-5 mb-1">Joge Lucky</h3>
                  <p class="mb-0">Lorem ipsum dolor sit amet consectetur elit.</p>
                </div>
              </div>
              <div class="admin d-flex align-items-center rounded-2 p-3 mb-4">
                <div class="img">
                  <img class="img-fluid rounded-pill" width="75" height="75"
                    src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148906966/small/1501685402/enhance"
                    alt="admin">
                </div>
                <div class="ms-3">
                  <h3 class="fs-5 mb-1">Joge Lucky</h3>
                  <p class="mb-0">Lorem ipsum dolor sit amet consectetur elit.</p>
                </div>
              </div>
              <div class="admin d-flex align-items-center rounded-2 p-3">
                <div class="img">
                  <img class="img-fluid rounded-pill" width="75" height="75"
                    src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907086/small/1501685404/enhance"
                    alt="admin">
                </div>
                <div class="ms-3">
                  <h3 class="fs-5 mb-1">Joge Lucky</h3>
                  <p class="mb-0">Lorem ipsum dolor sit amet consectetur elit.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="box">
              <!-- <h4>Moderators:</h4> -->
              <div class="admin d-flex align-items-center rounded-2 p-3 mb-4">
                <div class="img">
                  <img class="img-fluid rounded-pill" width="75" height="75"
                    src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148906966/small/1501685402/enhance"
                    alt="admin">
                </div>
                <div class="ms-3">
                  <h3 class="fs-5 mb-1">Joge Lucky</h3>
                  <p class="mb-0">Lorem ipsum dolor sit amet consectetur elit.</p>
                </div>
              </div>
              <div class="admin d-flex align-items-center rounded-2 p-3 mb-4">
                <div class="img">
                  <img class="img-fluid rounded-pill" width="75" height="75"
                    src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907086/small/1501685404/enhance"
                    alt="admin">
                </div>
                <div class="ms-3">
                  <h3 class="fs-5 mb-1">Joge Lucky</h3>
                  <p class="mb-0">Lorem ipsum dolor sit amet consectetur elit.</p>
                </div>
              </div>
              <div class="admin d-flex align-items-center rounded-2 p-3">
                <div class="img">
                  <img class="img-fluid rounded-pill" width="75" height="75"
                    src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148906966/small/1501685402/enhance"
                    alt="admin">
                </div>
                <div class="ms-3">
                  <h3 class="fs-5 mb-1">Joge Lucky</h3>
                  <p class="mb-0">Lorem ipsum dolor sit amet consectetur elit.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="statis mt-4 text-center">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="box bg-primary p-3">
              <i class="uil-eye"></i>
              <h3>5,154</h3>
              <p class="lead">Page views</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="box bg-danger p-3">
              <i class="uil-user"></i>
              <h3>245</h3>
              <p class="lead">User registered</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
            <div class="box bg-warning p-3">
              <i class="uil-shopping-cart"></i>
              <h3>5,154</h3>
              <p class="lead">Product sales</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="box bg-success p-3">
              <i class="uil-feedback"></i>
              <h3>5,154</h3>
              <p class="lead">Transactions</p>
            </div>
          </div>
        </div>
      </section>

      <section class="charts mt-4">
        <div class="chart-container p-3">
          <img src="http://localhost/CODEIGNITER/DAY1\assect\images\download.png" alt="">

        </div>
      </section>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Other important pens.
    // Map: https://codepen.io/themustafaomar/pen/ZEGJeZq
    // Navbar: https://codepen.io/themustafaomar/pen/VKbQyZ

    'use strict'

    function $(selector) {
      return document.querySelector(selector)
    }

    function find(el, selector) {
      let finded
      return (finded = el.querySelector(selector)) ? finded : null
    }

    function siblings(el) {
      const siblings = []
      for (let sibling of el.parentNode.children) {
        if (sibling !== el) {
          siblings.push(sibling)
        }
      }
      return siblings
    }

    const showAsideBtn = $('.show-side-btn')
    const sidebar = $('.sidebar')
    const wrapper = $('#wrapper')

    showAsideBtn.addEventListener('click', function () {
      $(`#${this.dataset.show}`).classList.toggle('show-sidebar')
      wrapper.classList.toggle('fullwidth')
    })

    if (window.innerWidth < 767) {
      sidebar.classList.add('show-sidebar');
    }

    window.addEventListener('resize', function () {
      if (window.innerWidth > 767) {
        sidebar.classList.remove('show-sidebar')
      }
    })

    // dropdown menu in the side nav
    var slideNavDropdown = $('.sidebar-dropdown');

    $('.sidebar .categories').addEventListener('click', function (event) {
      event.preventDefault()

      const item = event.target.closest('.has-dropdown')

      if (!item) {
        return
      }

      item.classList.toggle('opened')

      siblings(item).forEach(sibling => {
        sibling.classList.remove('opened')
      })

      if (item.classList.contains('opened')) {
        const toOpen = find(item, '.sidebar-dropdown')

        if (toOpen) {
          toOpen.classList.add('active')
        }

        siblings(item).forEach(sibling => {
          const toClose = find(sibling, '.sidebar-dropdown')

          if (toClose) {
            toClose.classList.remove('active')
          }
        })
      } else {
        find(item, '.sidebar-dropdown').classList.toggle('active')
      }
    })

    $('.sidebar .close-aside').addEventListener('click', function () {
      $(`#${this.dataset.close}`).classList.add('show-sidebar')
      wrapper.classList.remove('margin')
    })


    // Global defaults
    Chart.defaults.global.animation.duration = 2000; // Animation duration
    Chart.defaults.global.title.display = false; // Remove title
    Chart.defaults.global.defaultFontColor = '#71748c'; // Font color
    Chart.defaults.global.defaultFontSize = 13; // Font size for every label

    // Tooltip global resets
    Chart.defaults.global.tooltips.backgroundColor = '#111827'
    Chart.defaults.global.tooltips.borderColor = 'blue'

    // Gridlines global resets
    Chart.defaults.scale.gridLines.zeroLineColor = '#3b3d56'
    Chart.defaults.scale.gridLines.color = '#3b3d56'
    Chart.defaults.scale.gridLines.drawBorder = false

    // Legend global resets
    Chart.defaults.global.legend.labels.padding = 0;
    Chart.defaults.global.legend.display = false;

    // Ticks global resets
    Chart.defaults.scale.ticks.fontSize = 12
    Chart.defaults.scale.ticks.fontColor = '#71748c'
    Chart.defaults.scale.ticks.beginAtZero = false
    Chart.defaults.scale.ticks.padding = 10

    // Elements globals
    Chart.defaults.global.elements.point.radius = 0

    // Responsivess
    Chart.defaults.global.responsive = true
    Chart.defaults.global.maintainAspectRatio = false

    // The bar chart
    var myChart = new Chart(document.getElementById('myChart'), {
      type: 'bar',
      data: {
        labels: ["January", "February", "March", "April", 'May', 'June', 'August', 'September'],
        datasets: [{
          label: "Lost",
          data: [45, 25, 40, 20, 60, 20, 35, 25],
          backgroundColor: "#0d6efd",
          borderColor: 'transparent',
          borderWidth: 2.5,
          barPercentage: 0.4,
        }, {
          label: "Succes",
          startAngle: 2,
          data: [20, 40, 20, 50, 25, 40, 25, 10],
          backgroundColor: "#dc3545",
          borderColor: 'transparent',
          borderWidth: 2.5,
          barPercentage: 0.4,
        }]
      },
      options: {
        scales: {
          yAxes: [{
            gridLines: {},
            ticks: {
              stepSize: 15,
            },
          }],
          xAxes: [{
            gridLines: {
              display: false,
            }
          }]
        }
      }
    })

    // The line chart
    var chart = new Chart(document.getElementById('myChart2'), {
      type: 'line',
      data: {
        labels: ["January", "February", "March", "April", 'May', 'June', 'August', 'September'],
        datasets: [{
          label: "My First dataset",
          data: [4, 20, 5, 20, 5, 25, 9, 18],
          backgroundColor: 'transparent',
          borderColor: '#0d6efd',
          lineTension: .4,
          borderWidth: 1.5,
        }, {
          label: "Month",
          data: [11, 25, 10, 25, 10, 30, 14, 23],
          backgroundColor: 'transparent',
          borderColor: '#dc3545',
          lineTension: .4,
          borderWidth: 1.5,
        }, {
          label: "Month",
          data: [16, 30, 16, 30, 16, 36, 21, 35],
          backgroundColor: 'transparent',
          borderColor: '#f0ad4e',
          lineTension: .4,
          borderWidth: 1.5,
        }]
      },
      options: {
        scales: {
          yAxes: [{
            gridLines: {
              drawBorder: false
            },
            ticks: {
              stepSize: 12,
            }
          }],
          xAxes: [{
            gridLines: {
              display: false,
            },
          }]
        }
      }
    })

    var chart = document.getElementById('chart3');
    var myChart = new Chart(chart, {
      type: 'line',
      data: {
        labels: ["One", "Two", "Three", "Four", "Five", 'Six', "Seven", "Eight"],
        datasets: [{
          label: "Lost",
          lineTension: 0.2,
          borderColor: '#d9534f',
          borderWidth: 1.5,
          showLine: true,
          data: [3, 30, 16, 30, 16, 36, 21, 40, 20, 30],
          backgroundColor: 'transparent'
        }, {
          label: "Lost",
          lineTension: 0.2,
          borderColor: '#5cb85c',
          borderWidth: 1.5,
          data: [6, 20, 5, 20, 5, 25, 9, 18, 20, 15],
          backgroundColor: 'transparent'
        },
        {
          label: "Lost",
          lineTension: 0.2,
          borderColor: '#f0ad4e',
          borderWidth: 1.5,
          data: [12, 20, 15, 20, 5, 35, 10, 15, 35, 25],
          backgroundColor: 'transparent'
        },
        {
          label: "Lost",
          lineTension: 0.2,
          borderColor: '#337ab7',
          borderWidth: 1.5,
          data: [16, 25, 10, 25, 10, 30, 14, 23, 14, 29],
          backgroundColor: 'transparent'
        }]
      },
      options: {
        scales: {
          yAxes: [{
            gridLines: {
              drawBorder: false
            },
            ticks: {
              stepSize: 12
            }
          }],
          xAxes: [{
            gridLines: {
              display: false,
            },
          }],
        }
      }
    })
  </script>
</body>

</html>