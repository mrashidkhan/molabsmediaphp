<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap"
        rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />

    <!--Calendly required import-->
    <link href="/assets/calendly.css" rel="stylesheet">
    <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
    <!-- -->
    <script src="/assets/analytics.js" type="text/javascript" async></script>

    <link rel="shortcut icon" type="image/jpg" href="essentials/images/favicon/favicon.ico" />
    <link rel="stylesheet" href="style/style.css">

    <title>Molabs Media – Content Services</title>
    <meta name="description" content="Impress your prospects with stunning and unified content across all channels.">

    <style type="text/css">

/* ============ desktop view ============ */
@media all and (min-width: 992px) {

	.dropdown-menu li{
		position: relative;
	}
	.dropdown-menu .submenu{ 
		display: none;
		position: absolute;
		left:100%; top:-7px;
	}
	.dropdown-menu .submenu-left{ 
		right:100%; left:auto;
	}

	/* .dropdown-menu > li:hover{ background-color: #f1f1f1 } */
	.dropdown-menu > li:hover > .submenu{
		display: block;
	}
}	
/* ============ desktop view .end// ============ */

/* ============ small devices ============ */
@media (max-width: 991px) {

.dropdown-menu .dropdown-menu{
		margin-left:0.7rem; margin-right:0.7rem; margin-bottom: .5rem;
}

}	
/* ============ small devices .end// ============ */

</style>


<script type="text/javascript">
//	window.addEventListener("resize", function() {
//		"use strict"; window.location.reload(); 
//	});


	document.addEventListener("DOMContentLoaded", function(){
        

    	/////// Prevent closing from click inside dropdown
		document.querySelectorAll('.dropdown-menu').forEach(function(element){
			element.addEventListener('click', function (e) {
			  e.stopPropagation();
			});
		})



		// make it as accordion for smaller screens
		if (window.innerWidth < 992) {

			// close all inner dropdowns when parent is closed
			document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
				everydropdown.addEventListener('hidden.bs.dropdown', function () {
					// after dropdown is hidden, then find all submenus
					  this.querySelectorAll('.submenu').forEach(function(everysubmenu){
					  	// hide every submenu as well
					  	everysubmenu.style.display = 'none';
					  });
				})
			});
			
			document.querySelectorAll('.dropdown-menu a').forEach(function(element){
				element.addEventListener('click', function (e) {
		
				  	let nextEl = this.nextElementSibling;
				  	if(nextEl && nextEl.classList.contains('submenu')) {	
				  		// prevent opening link if link needs to open dropdown
				  		e.preventDefault();
				  		console.log(nextEl);
				  		if(nextEl.style.display == 'block'){
				  			nextEl.style.display = 'none';
				  		} else {
				  			nextEl.style.display = 'block';
				  		}

				  	}
				});
			})
		}
		// end if innerWidth

	}); 
	// DOMContentLoaded  end
</script>
</head>

<body>
    <!-- audience files and page -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"
        integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g=="
        crossorigin="anonymous"></script>



    <nav class="navbar" id="desktop-navbar">
        <div id="desktop-navbar-container">
            <div id="phone-desk-container">
                <button id="phone" class="nav-link flexauto">
                    <img id="footer_outlined_phone" src="essentials/images/Phone_white.png">
                </button>
                <img id="phone-dropdown-img" src="essentials/images/phone(dropdown)-01.png">
                <a href="tel:0012146796818" id="mobile-phone" class="nav-link">
                    <img id="footer_outlined_phone_mobile" src="essentials/images/Phone_white.png">
                </a>
                <a href="index.php" id="mobile-logo" class="nav-link flexauto">
                    <img id="mobile-logo-img" src="molabsmedia/molabs_logo.png">
                </a>
            </div>
            <a class="navbar-brand flexauto" href="index.php">
                <img id="desktop-logo" src="molabsmedia/molabs_logo.png">
            </a>

            <li class="nav-item dropdown">
                <a id="services" class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Services
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="events.php">Events &raquo; </a>
                        <ul class="submenu dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="upcomingevents.php">Upcoming Events</a></li>
                            <li><a class="dropdown-item" href="pastevents.php">Past Events &raquo; </a>
                                <ul class="submenu dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="videos.php">Video Archive</a></li>
                                    <li><a class="dropdown-item" href="picturearchive.php">Picture Archive</a></li>
                                    <li><a class="dropdown-item" href="posterarchive.php">Poster Archive</a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li><a class="dropdown-item" href="videoproduction.php">Video production</a></li>
                    <li><a class="dropdown-item" href="creativewriting.php">Creative writing</a></li>
                    <li><a class="dropdown-item" href="contentwriters.php">Content writers</a></li>
                    <li><a class="dropdown-item" href="webdesign.php">Web design</a></li>
                    <li><a class="dropdown-item" href="graphicsdesign.php">Graphics design</a></li>
                    <li><a class="dropdown-item" href="itandtelecom.php">IT and Telecom Staffing</a></li>
                    
                </ul>
            </li>

            <!-- <a href="products/advertising.php" id="advertising" class="nav-link flexauto">Solutions</a> -->
            <a href="ourteam.php" id="ourteam" class="nav-link flexauto">Our Team</a>
            <a href="aboutus.php" id="aboutus" class="nav-link flexauto">About us</a>
            <a href="contactus.php" id="contactus" class="nav-link flexauto">Contact Us</a>

            <div class="menu-icon-container">
                <div class="menu_icon">
                    <div class="hamburger_menu"></div>
                </div>
            </div>
            <ul class="mobile-dropdown-list">
                <li><a class="menu_link" href='index.php'>home</a></li>

                <li class="csquared-sublink"><a class="menu_link" href="events.php"> Events
                    </a>
                </li>

                <li class="csquared-sublink"><a class="menu_link" href="videos.php"> Video Archive
                    </a>
                </li>

                <li class="csquared-sublink"><a class="menu_link" href="picturearchive.php"> Picture Archive
                    </a>
                </li>

                <li class="csquared-sublink"><a class="menu_link" href="posterarchive.php"> Poster Archive
                    </a>
                </li>

                <li class="csquared-sublink"><a class="menu_link" href="videoproduction.php"> Video Production </a>
                </li>
                <li class="csquared-sublink"><a class="menu_link" href="creativewriting.php"> Creative Writing </a></li>
                <li class="csquared-sublink"><a class="menu_link" href="contentwriters.php"> Content Writing </a></li>
                <li class="csquared-sublink"><a class="menu_link" href="webdesign.php"> Web Design </a></li>
                <li class="csquared-sublink"><a class="menu_link" href="graphicsdesign.php"> Graphics design </a></li>
                <li class="csquared-sublink"><a class="menu_link" href="itandtelecom.php"> IT and Telecom Staffing </a>
                </li>
                <li class="csquared-sublink"><a class="menu_link" href="contactus.php"> Contact us </a></li>
                <li class="csquared-sublink"><a class="menu_link" href="aboutus.php"> About us </a></li>

                <!-- <li><a class="menu_link" href="/CareersPage/index.php" target="_blank">careers</a></li>
            <li class="csquared-sublink"><a class="menu_sublink" href="/CareersPage/careers/rippling-careers-listings.php" target="_blank" style="text-decoration: none;">open roles</a></li> -->
            </ul>
        </div>
    </nav>



    <script>
        var contactNumber = document.getElementById("phone-dropdown-img");
        // var transparent = document.getElementById("phone-image-dropdown");
        var num = 0;
        $('#phone').click(function (e) {
            e.stopPropagation();
            num++;
            contactNumber.style.display = "inline-block";
            // transparent.style.display = "inline-block";
            if (num % 2 == 0) {
                contactNumber.style.display = "none";
                // transparent.style.display = "none";
            }
            //if anything outside the button dropdown is selected, the dropdown goes away
            $("body").click(function (e) {
                num++;
                if (e.target.id != "phone-dropdown-img") {
                    contactNumber.style.display = "none";
                    $("body").unbind("click");
                }
            })
        });
    </script>

    <script>
        var menu_icon = document.querySelector(".menu_icon");
        var menu_list = document.querySelector(".mobile-dropdown-list");
        menu_list.style.display = "none";

        menu_icon.addEventListener("click", function () {
            menu_icon.classList.toggle("active");
            if (menu_list.style.display === "none") {
                menu_list.style.display = "block";
            } else {
                menu_list.style.display = "none";
            }
        });
    </script>

    <script>
        var menuList = document.querySelector(".mobile-dropdown-list");
        $("#contact-us-mob").click(function () {
            menu_icon.classList.toggle("active");
            menuList.style.display = "none";


            <
            !--TODO: test start here-- >
                $(`#formPopupModal-${sessionStorage['selectedForm']}`).modal('toggle');
            // location.href="#main-form";

            var mobileQuery = window.matchMedia("(max-width: 768px)");
            mobileQuery.addListener(function () {
                $(`#formPopupModal-${sessionStorage['selectedForm']}`).modal('toggle');
                // location.href="#mobile-form";
            }); <
            !--TODO: test end here-- >
        });
    </script>

    <script>
        document.addEventListener('click', function (e) {
            menu_icon_container = document.querySelector('.menu-icon-container');
            menu_ham = document.querySelector('.hamburger_menu');
            if (menu_icon.classList.contains("active") &&
                !e.target.isEqualNode(menu_ham) &&
                !e.target.isEqualNode(menu_icon_container) &&
                !e.target.isEqualNode(menu_icon) &&
                !e.target.isEqualNode(menu_list)) {
                menu_icon.classList.toggle("active");
                menu_list.style.display = "none";
            }
        });

        $(window).on('scroll', function (e) {
            var scroll = $(window).scrollTop();
            if (scroll > 200) {
                $(".mobile-dropdown-list").fadeOut();
                menu_list.style.display = "none";
                menu_icon.classList.remove("active");
            }
        });
    </script>


    <style>
        #phone-desk-container {
            display: none;
        }

        .menu-icon-container {
            width: 58px;
            height: 100%;
            padding-right: 50px;
            padding-top: 50px;
            /* margin-left: -50px; */
            position: relative;
        }

        #phone-image-dropdown {
            display: none;
            background-color: transparent;
            left: 0;
            top: 0;
            width: 100vw;
            height: 700vh;
            position: absolute;
            z-index: 2;
        }

        #phone-dropdown-img {
            display: none;
            width: 150px;
            position: absolute;
            margin-left: -75px;
        }

        #desktop-navbar-container {
            width: 100%;
            height: 100%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            /* padding-left: 25%;
    padding-right: 25%; */
            /* display: inline-block; */
            justify-content: center;
            align-items: stretch;
            align-content: stretch;
            /* margin-left: 3%; */
        }

        .navbar-brand {
            padding-left: 0;
            padding-right: 0;
            margin-right: 0;
        }

        #services {
            padding-right: 3vw;
            padding-left: 5vw;
        }

        #services-list {
            padding-right: 3vw;
            padding-left: 5vw;
        }

        #ourteam {
            padding-right: 3vw;
            padding-left: 3vw;
        }

        #aboutus {
            padding-right: 3vw;
            padding-left: 3vw;
        }

        #contactus {
            padding-right: 3vw;
            padding-left: 3vw;
        }

        #content {
            /* padding-right: 16%;
    padding-left: 6%; */
            /* padding-right: 215px;
    padding-left: 60px; */
            padding-right: 10vw;
            padding-left: 3vw;
        }

        #footer_outlined_phone {
            width: 30px;
            height: 30px;
        }

        #desktop-logo {
            width: 70px;
            height: auto;
            /* margin-left: 50px; */
        }

        .menu_icon {
            position: absolute;
            /* top: 10px;
    left: 20px; */
            left: 15px;
            bottom: 76px;
            transform: translate(-50%, -50%);
            /* width: 80px;
    height: 80px; */
            cursor: pointer;
            margin-left: -13px;
        }

        .hamburger_menu {
            position: absolute;
            width: 25px;
            height: 8px;
            background: transparent;
            top: 50px;
            left: 25px;
            transform: translate(-50%, -50%);
            box-shadow: 0 2px 5px rgba(0, 0, 0, .0);
        }

        .hamburger_menu::before,
        .hamburger_menu::after {
            content: "";
            position: absolute;
            width: 25px;
            height: 1px;
            background: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            transition: 0.5s;
            /* left: -18.5px; */
            left: 0;
        }

        .hamburger_menu::after {
            top: 8px;
        }

        .hamburger_menu::before {
            top: -4px;
        }

        .menu_icon.active .hamburger_menu {
            background: rgba(0, 0, 0, 0);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0);
            transition: 0.2s;
        }

        .menu_icon.active .hamburger_menu::before {
            top: 0;
            transform: rotate(45deg);
        }

        .menu_icon.active .hamburger_menu::after {
            top: 0;
            transform: rotate(-45deg);
        }

        /**desktop navbar styling */
        #audience {
            margin-left: 100px;
        }

        #phone {
            border: none;
            background: transparent;
            /* margin-left: 150px; */
            /* padding-right: 8.5%;
    padding-left: 8.5% */
        }

        #dropdown-button {
            border: none;
            background-color: black;
            color: white;
        }

        #dropdown-list {
            list-style: none;
            padding-left: 0;
            text-align: left;
        }

        .dropdown:hover .dropdown-content {
            display: block;
            padding: 0;
        }

        .dropdown {
            position: relative;
            display: inline-block;
            color: white;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 100px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            color: black;
            margin-left: -125%;
        }

        .dropdown-content a {
            color: black;
            padding: 5px 10px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: none;
        }

        .navbar {
            background-color: #1F1F1F;
            padding-left: 5%;
            padding-right: 5%;
            position: fixed !important;
            top: 0;
            width: 100%;
            text-align: center;
            justify-content: center;
            z-index: 99999;
            height: 75px;
            overflow: visible;
        }

        .nav-link {
            color: white !important;
            text-decoration: none;
            transition: 0s;
            font-weight: 200;
        }

        .navbar a:hover {
            background-color: none;
            color: white;
        }

        /**mobile navbar styling */
        #mobile-navbar {
            display: none;
            background-color: black;
            width: 100%;
            height: 75px;
            position: fixed;
            padding: 0;
        }

        .mobile-dropdown {
            position: relative;
            display: inline-block;
            color: white;
        }

        #mobile-dropdown-button {
            border: none;
            background-color: black;
            color: white;
        }

        .mobile-dropdown:hover .mobile-dropdown-content {
            display: block;
        }

        .mobile-dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 100px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            color: black;
            margin-left: -15%;
        }

        .mobile-dropdown-content a {
            color: black;
            padding: 5px 10px;
            text-decoration: none;
            display: block;
        }

        .mobile-dropdown-content a:hover {
            background-color: none;
        }

        /** hamburger dropdown styling */
        .mobile-dropdown-list {
            list-style: none;
            padding-left: 20px !important;
            padding-bottom: 20px;
            padding-right: 20px;
            padding-top: 10px;
            text-align: left;
            position: absolute;
            top: 55px;
            right: 0;
            line-height: 42px;
            background-color: #1F1F1F;
            color: #C8C8C8;
            height: 100vh;
            font-size: 44px;
            text-align: left;
            /* width: 28vw; */
        }

        .menu_link:link {
            color: white;
            text-decoration: none;
            /* font-size: 35px; */
            font-weight: 300;
        }

        a.menu_link {
            color: white;
            text-decoration: none;
            font-weight: 300;
        }

        a {
            color: #C8C8C8;
        }

        #mobile-logo-img {
            display: none;
        }

        #footer_outlined_phone_mobile {
            display: none;
        }

        .flexauto {
            flex: auto;
        }

        /* 
.csquared-sublink{
    font-size: 35px;
    margin-left: 15px;
} */

        .menu_link {
            font-size: 35px;
        }

        .csquared-sublink>.menu_link {
            font-size: 27px;
            font-weight: 100;
        }


        /* #desktop-navbar{
    display: none;
}

#mobile-navbar{
    display: inline-block;
} */


        /** Navbar Responsiveness */

        /* @media screen and (min-width: 2560px){
    .mobile-dropdown-list{
        padding-left: 4%;
    }
} */

        @media screen and (max-width: 1920px) {
            .mobile-dropdown-list {
                width: 26vw;
            }

            .csquared-sublink {
                /* font-size: 35px; */
                margin-left: 15px;
            }
        }

        @media screen and (max-width: 1600px) {
            .mobile-dropdown-list {
                width: 28vw;
            }
        }

        @media screen and (max-width: 1400px) {
            .mobile-dropdown-list {
                width: 30vw;
            }
        }

        @media screen and (max-width: 768px) {
            .csquared-sublink>.menu_link {
                padding-left: 15px;
                font-size: 20px;
            }

            .csquared-sublink {
                /* font-size: 35px; */
                margin-left: 0px;
            }

            #phone-desk-container {
                display: inline-block;
            }

            #desktop-navbar {
                /* display: none; */
            }

            #mobile-navbar {
                /* display: inline-block; */
                /* text-align: center;
        flex-direction: row;
        flex-wrap: nowrap;
        align-content: center;
        justify-content: center;
        justify-content: space-evenly;
        align-items: center; */
                display: inline-flex;
                flex-direction: row;
                flex-wrap: nowrap;
                align-content: stretch;
                justify-content: space-evenly;
                align-items: center;
            }

            .mobile-dropdown {
                display: inline-block;
            }

            #mobile-logo {
                display: inline-block;
                padding-left: 20vw;
                padding-right: 20vw;
            }

            #mobile-logo-img {
                width: 35px;
            }

            #mobile-phone {
                display: inline-block;
                padding-left: 10px;
                padding-right: 10px;
                margin-right: 0px;
            }

            .nav-link {
                display: none;
            }

            #desktop-logo {
                display: none;
            }

            #mobile-logo-img {
                display: inline-block;
            }

            #footer_outlined_phone_mobile {
                display: inline-block;
                width: 25px;
            }

            .navbar {
                background-color: #000000;
                width: 100%;
                height: 75px;
                position: fixed;
            }

            .mobile-dropdown-list {
                background-color: #000000;
                width: 55vw;
                text-align: left;
                padding-left: 15px !important;
                padding-right: 15% !important;
            }

            .flexauto {
                flex: unset;
            }
        }


        @media only screen and (max-width: 600px) {
            .mobile-dropdown-list {
                padding-right: 15% !important;
                text-align: left;
                width: 55vw;
                padding-left: 15px !important;
            }

            .csquared-sublink>.menu_link {
                padding-left: 15px;
                font-size: 20px;
            }
        }
    </style>

    <!-- <div id="web-hero" class="jumbotron hero-height">
        <div id="web-container" class="container hero-container">
            <div id="web-hero-container" class="hp-hero-content-container hp-hero-content-container-alt">
                <img class="hp-hero-logo" src="products/molabsmedia/molabs_logo.png">
                <h1 class="hp-hero-heading text-dark">Web Design</h1>
                <p id="web-hero-text" class="hp-hero-text text-dark "> Our team of professional writers have expertise in different genres of writing. We work on building content that is effective and persuasive. Our team of writers are capable of writing on range of different disciplines like showbiz, fashion, lifestyle, automobile, gadgets, education, technology, hospitality, eCommerce and what not.  </p>
                <button onclick="getButtonId(this)" name="Content Hero Button" id="content-hero-button"
                    class="outlined-white-button text-dark" type="button" data-toggle="modal" data-target="#buttonModal">get
                    pricing</button>
            </div>
        </div>
    </div> -->

    <!-- <section id="web-design">
        <div id="like-drives-row" class="row center-aligned-container">
            <div class="col-md">
                <img id="content-like-drive-hidden" src="content/images/mobile/content_likedrives_mobile.jpg"
                    width="100%" height="auto">
            </div>

            <div id="likeDrivesCol" class="col-md">
                <div class="inside-container-content-container-right">
                    <div id="content-three-content">
                        
                        <h1 class="body-headings">Web Design</h1>
                        <p class="copy-one">Our web design and development team work on your website keeping the
                            customer in mind. Our team not only make attractive website but takes into consideration
                            user experience, search engine optimization, user friendly, technical details etc. </p>
                        <p>
                            <button class="outlined-black-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                Read More
                            </button>
                        </p>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body copy-one" style="background-color: #F3C438;">
                                These are just few elements that are involved in developing a website that is equipped
                                to compete in the ever-changing marketplace. Our team of professionals will work with
                                you in bringing your vision to life.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <!-- <section id="content-one">
        <div id="content-socialposts-and-blog-row" class="row">
            <div id="content-left" class="col-md">
                <div id="content-left-box">
                    <div id="content-left-box-items" class="content-container">
                        <h1 id="social-posts-heading" class="body-headings font-white">social posts</h1>
                        <p id="social-posts-text" class="copy-one font-white">Provide the high-quality, consistent
                            organic content today’s customers expect. We’ll help you validate your brand and engage with
                            new customers to improve conversions.</p>
                        <button onclick="getButtonId(this)" name="Content Social Posts Button" id="content-left-button"
                            class="outlined-white-button" type="button" data-toggle="modal"
                            data-target="#buttonModal">let's talk!</button>
                    </div>
                </div>
            </div>
            <div id="content-right" class="col-md">
                <div id="content-right-box">
                    <div id="content-right-box-items" class="content-container">
                        <h1 class="body-headings font-white">blogs</h1>
                        <p id="blogs-text" class="copy-one font-white">Our in-house team of copywriting experts can help
                            you create relevant and engaging blog content.</p>
                        <button onclick="getButtonId(this)" name="Content Blogs Button" id="content-right-button"
                            class="outlined-white-button" type="button" data-toggle="modal"
                            data-target="#buttonModal">let's talk!</button>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- <section id="content-two">
        <div class="container">
            <div id="email-sms-row" class="row center-aligned-container">
                <div class="col-md">
                    <div class="inside-container-content-container-right">
                        <img id="text-bubble" src="content/images/desktop/email_SMS gif.gif">
                        <h1 class="body-headings">email/SMS</h1>
                        <p class="copy-one">Capitalize on your lead generation efforts with email and SMS marketing that
                            captures your message and drives more purchases.</p>
                        <button onclick="getButtonId(this)" name="Content email/SMS Button" id="content-two-button"
                            class="outlined-black-button" type="button" data-toggle="modal"
                            data-target="#buttonModal">book demo</button>
                    </div>
                </div>
                <div id="content-phone-bg-col" class="col-md"></div>
            </div>
        </div>
    </section> -->
    <section id="web-three">
        <div id="like-drives-row" class="row center-aligned-container">
            <div class="col-md">
                <img id="content-like-drive-hidden" src="homepage/images/newdesktop/webdesign.jpg"
                    width="100%" height="auto">
            </div>

            <div id="likeDrivesCol" class="col-md">
                <div class="inside-container-content-container-right">
                    <div id="content-three-content">
                        <!-- <img id="thumbs-up" src="content/images/thumb_and_numbers.png"> -->
                        <h1 class="body-headings">Web Design</h1>
                        <p class="copy-one">Our web design and development team work on your website keeping the
                            customer in mind. Our team not only make attractive website but takes into consideration
                            user experience, search engine optimization, user friendly, technical details etc.</p>
                        <!-- <button onclick="getButtonId(this)" name="Content Like Drives Button" id="content-three-button"
                            class="outlined-black-button" type="button" data-toggle="modal"
                            data-target="#buttonModal">book demo</button> -->

                        <p>
                            <button class="outlined-black-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                                Read More
                            </button>
                        </p>
                        <div class="collapse" id="collapseExample2">
                            <div class="card card-body copy-one" style="background-color: #FFDA4B;">
                                These are just few elements that are involved in developing a website that is equipped
                                to compete in the ever-changing marketplace. Our team of professionals will work with
                                you in bringing your vision to life.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"
        integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g=="
        crossorigin="anonymous"></script>

    <form id="main-form" action="mail.php" method="post" autocomplete="off">
        <div class="form-container container lets-talk-form">
            <h1 id="homepage-form-heading">let's talk</h1>
            <hr
                style="opacity: 1; color: black; width: 35px; height: 10px; margin-left: -11px; margin-top: 2rem; margin-bottom: 2rem;">
            <div id="main-form-confirmation">
                <p><span style="font-weight: bold;">Thank you for contacting us!</span> We will be in touch soon.</p>
            </div>
            <div class="row">
                <input name="full_name" id="form-fullname" type="text" class="field-in-row my-top-border"
                    placeholder="full name" required>
                <input name="email" id="form-email" type="email" class="field-in-row my-top-border" placeholder="email"
                    required>
                <input name="phone_number" id="form-phone-number" type="text" class="field-in-row my-top-border"
                    placeholder="phone number" required>
            </div>

            <div class="row">
                <input name="lead_business_name" id="form-business-name" type="text" placeholder="business name"
                    required>
            </div>

            <div class="row">
                <textarea name="msg" id="form-message" rows="7" cols="50" placeholder="message"></textarea>
            </div>

            <!-- used to get he values from the utm script -->
            <input name="utm_data" type="hidden" id="utmDataField">

            <button onclick="getButtonId(this)" name="Footer Form" id="form-button" type="submit">submit</button>
            <div id="form-disclaimer">* By clicking submit, you agree to our terms of service.</div>
        </div>
    </form>

    <style>
        /** stop ios rounded corners */
        input {
            -webkit-border-radius: 0;
            border-radius: 0;
        }

        textarea {
            -webkit-border-radius: 0;
            border-radius: 0;
        }

        #form-fullname {
            font-size: 20px;
        }

        #main-form-confirmation {
            display: none;
            border: solid 2px;
            font-size: 25px;
            font-family: 'Source Code Pro', sans-serif;
            padding-top: 20px;
            padding-bottom: 80px;
            padding-left: 15px;
        }

        #main-form {
            outline: none;
            height: 100%;
            padding-top: 80px;
            padding-bottom: 80px;
            /* height: 700px; */
            padding-left: 30px;
            padding-right: 30px;
        }

        #homepage-form-heading {
            margin-left: -11px;
            /* font-weight: 700; */
            /* font-size: 70px; */
        }

        .form-container {
            /* padding-bottom: 80px;
        padding-top: 80px; */
        }

        .lets-talk-form {
            display: block !important;
        }

        .field-in-row {
            width: 33.3%;
            border-left: none;
            height: 70px;
            font-family: 'Source Code Pro', monospace;
            font-size: 20px;
            outline: none;
            background-color: transparent;
        }

        #form-phone-number {
            border-right: none;
            font-size: 20px;
            outline: none;
            background-color: transparent;
        }

        #form-business-name {
            font-size: 20px;
            border: none;
            height: 70px;
            font-family: 'Source Code Pro', monospace;
            outline: none;
            background-color: transparent;
        }

        #form-message {
            font-size: 20px;
            font-family: 'Source Code Pro', monospace;
            border-left: none;
            border-right: none;
            resize: none;
            outline: none;
            background-color: transparent;
            padding-top: 25px;
        }

        .my-top-border {
            border-top: 5px solid black;
        }

        #form-button {
            width: 250px;
            height: 64px;
            border: solid;
            background: transparent;
            margin-left: -12px;
            font-size: 18px;
            font-weight: bold;
            box-shadow: inset 0 0 0 0 black;
            transition: ease-out 0.3s;
            outline: none;
        }

        #form-button:hover {
            box-shadow: inset 250px 0 0 0 black;
            border-color: black;
            color: white;
        }

        #form-disclaimer {
            font-weight: bold;
            display: inline-block;
            padding-left: 20px;
            font-size: 12px;
            position: absolute;
            margin-top: 20px;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"
        integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g=="
        crossorigin="anonymous"></script>

    <form id="mobile-form" action="mail.php" method="post" autocomplete="off" style="width: 100%;">
        <div class="mobile-form-container">
            <h1 id="homepage-form-heading-mobile">let's talk</h1>
            <hr style="opacity: 1; color: black; width: 15px; height: 4pt; margin-left: -11px; margin-bottom: 2rem;">
            <div id="mobile-form-confirmation">
                <p><span style="font-weight: bold;">Thank you for contacting us!</span> We will be in touch soon.</p>
            </div>
            <div class="row">
                <input style="width: 50%;" name="full_name" id="form-fullname-mobile" type="text"
                    class="field-in-row-mobile my-top-border-mobile" placeholder="full name" required>
                <input style="width: 50%;" name="phone_number" id="form-phone-number-mobile" type="text"
                    class="field-in-row-mobile my-top-border-mobile" placeholder="phone number" required>
            </div>

            <div class="row">
                <input style="width: 100%;" name="email" id="form-email-mobile" type="email" placeholder="email"
                    required>
            </div>

            <div class="row">
                <input style="width: 100%;" name="lead_business_name" id="form-business-name-mobile" type="text"
                    placeholder="business name" required>
            </div>

            <div class="row">
                <textarea style="width: 100%;" name="msg" id="form-message-mobile" rows="7" cols="50"
                    placeholder="message"></textarea>
            </div>

            <!-- used to get he values from the utm script -->
            <input name="utm_data" type="hidden" id="utmDataFieldTwo">

            <button onclick="getButtonId(this)" name="Footer Form" id="form-button-mobile">submit</button>
            <div id="form-disclaimer-mobile">* By clicking submit, you agree to our terms of service.</div>
        </div>
    </form>

    <style>
        input {
            -webkit-border-radius: 0;
            border-radius: 0;
        }

        #mobile-form-confirmation {
            display: none;
        }

        #mobile-form {
            outline: none;
            display: none;
        }

        #homepage-form-heading-mobile {
            margin-left: -11px;
            font-weight: bold;
            font-size: 40px;
        }

        .mobile-form-container {
            padding-left: 5%;
            padding-right: 5%;
            padding-bottom: 10%;
            padding-top: 10%;
            width: 100%;
        }

        .field-in-row-mobile {
            width: 45%;
            border-left: none;
            height: 50px;
            font-family: 'Source Code Pro', monospace;
            font-size: 10px !important;
            outline: none;
            background: transparent;
        }

        #form-phone-number-mobile {
            border-right: none;
            font-size: 10px;
            outline: none;
        }

        #form-business-name-mobile {
            font-size: 10px;
            border: none;
            height: 50px;
            font-family: 'Source Code Pro', monospace;
            outline: none;
            background: transparent;
        }

        #form-email-mobile {
            font-size: 10px;
            height: 50px;
            font-family: 'Source Code Pro', monospace;
            outline: none;
            border-top: none;
            border-left: none;
            border-right: none;
            width: 90%;
            background: transparent;
        }

        #form-message-mobile {
            font-size: 10px;
            font-family: 'Source Code Pro', monospace;
            border-left: none;
            border-right: none;
            resize: none;
            outline: none;
            width: 90%;
            padding-top: 25px;
            background: transparent;
        }

        .my-top-border-mobile {
            border-top: 5px solid black;
        }

        #form-button-mobile {
            width: 135px;
            height: 40px;
            border: solid;
            border-color: black;
            background: black;
            color: white;
            margin-left: -12px;
            font-size: 8px;
            font-weight: bold;
            outline: none;
        }

        #form-disclaimer-mobile {
            font-weight: bold;
            font-size: 9px;
            padding-top: 15px;
            margin-left: -10px;
        }

        @media screen and (max-width: 768px) {
            #main-form {
                display: none;
            }

            #mobile-form {
                display: inline-block;
            }
        }
    </style>
    <footer id="showOnMobile" class="mobileFooter">
        <div class="container">
            <img id="mobileFooterLogo" src='molabsmedia/molabs_logo.png' />
            <h2 class="desktopFooterHeader">Your Business <br> is unique for us!</h2>
            <hr class="footerHR">
            <h3 class="desktopFooterSubheading">contact</h3>
            <a class="desktopFooterPhone footerLinks" >
                <p class="desktopFooterMainCopy"><span style="font-weight: bold;">tel: +1 214-679-6818</span></p>
            </a>
            <a class="footerLinks" href="index.php">
                <p class="desktopFooterMainCopy">molabsmedia.com</p>
            </a>
            <!-- <a class="footerLinks" href="/cdn-cgi/l/email-protection#b5dcdbd3daf5d6c6c4c0d4c7d0d1c6dad6dcd4d99bd6dad8">
                <p class="desktopFooterMainCopy"><span class="__cf_email__"
                        data-cfemail="1e777078715e7d6d6f6b7f6c7b7a6d717d777f72307d7173">[email&#160;protected]</span>
                </p>
            </a> -->

            <a class="footerLinks">

                <span class="e-mail desktopFooterMainCopy" data-user="tcatnoc" data-website="moc.aidemsbalom">
                </span>

            </a>

            <div id="CAContainer" class="locationsContainer">
                <img class="stateIcon" src="essentials/footer/images/texas.png" />
                <div>
                    <p class="desktopFooterMainCopy stateInformation"><span style="font-weight: bold;">Carlsbad,
                            CA</span></p>
                    <p class="desktopFooterMainCopy stateInformation dontWrapText">2727 LBJ Freeway, Suite 200</p>
                    <p class="desktopFooterMainCopy stateInformation">Dallas, TX, 75234</p>
                </div>
            </div>
            <!-- <div class="locationsContainer">
        <img class="stateIcon" src="essentials/footer/images/ID.svg" />
            <div>
                <p class="desktopFooterMainCopy stateInformation"><span style="font-weight: bold;">Boise, ID</span></p>
                <p class="desktopFooterMainCopy stateInformation dontWrapText">1861 S Wells Ave #300</p>
                <p class="desktopFooterMainCopy stateInformation">Meridian, ID 83642</p>
            </div>
        </div> -->
            <hr class="footerHR">
            <h3 class="desktopFooterSubheading">follow</h3>
            <div class="desktopFooterSocialContainer">
                <a href="https://www.facebook.com/Molabsmedia" target="_blank"><img width="100%" height="auto"
                        id="desktopFooterFB" src="essentials/footer/images/Facebook_white.svg" /></a>
                <a class="footerLinks linkCenter" href="https://www.facebook.com/Molabsmedia" target="_blank">
                    <p class="desktopFooterMainCopy noBottomMargin">Facebook</p>
                </a>
            </div>
            <div class="desktopFooterSocialContainer">
                <a href="https://www.instagram.com/molabs_media" target="_blank"><img width="100%" height="auto"
                        id="desktopFooterInsta" src="essentials/footer/images/Instagram_white.svg" /></a>
                <a class="footerLinks linkCenter" href="https://www.instagram.com/molabs_media" target="_blank">
                    <p class="desktopFooterMainCopy noBottomMargin">Instagram</p>
                </a>
            </div>
            <div class="desktopFooterSocialContainer">
                <a href="https://twitter.com/Molabs_Media" target="_blank"><img width="100%" height="auto"
                        id="desktopFooterTwitter" src="essentials/footer/images/Twitter_white.svg" /></a>
                <a class="footerLinks linkCenter" href="https://twitter.com/Molabs_Media" target="_blank">
                    <p class="desktopFooterMainCopy noBottomMargin">Twitter</p>
                </a>
            </div>
            <div class="desktopFooterSocialContainer">
                <a href="https://www.linkedin.com/company/mo-labs-media" target="_blank"><img width="100%" height="auto"
                        id="desktopFooterLI" src="essentials/footer/images/Linkedin_white.svg" /></a>
                <a class="footerLinks linkCenter" href="https://www.linkedin.com/company/mo-labs-media" target="_blank">
                    <p class="desktopFooterMainCopy noBottomMargin">LinkedIn</p>
                </a>
            </div>
            <div class="desktopFooterSocialContainer">
                <a href="https://www.youtube.com/channel/UC4ZvAdyyN2slzr_N6pvXomg" target="_blank"><img width="100%"
                        height="auto" id="desktopFooterYT" src="essentials/footer/images/Youtube_white.svg" /></a>
                <a class="footerLinks linkCenter" href="https://www.youtube.com/channel/UC4ZvAdyyN2slzr_N6pvXomg"
                    target="_blank">
                    <p class="desktopFooterMainCopy noBottomMargin">Youtube</p>
                </a>
            </div>
            <hr class="footerHR">
            <p class="desktopRightsReserved desktopFooterMainCopy"> &#169; 2022 Molabs Media All Rights Reserved.</p>
            <!-- <a class="desktopPrivacyAndTerms" href="#disclaimerModal" data-toggle="modal"
                data-target="#disclaimerModal">
                <p class="desktopFooterMainCopy"><span style="font-weight: bold;">Privacy & Terms</span></p>
            </a> -->
        </div>
    </footer>

    <footer id="showOnDesktop" class="desktopFooter">
        <div class="container">
            <div id="desktopFooterRow" class="row">
                <div class="col-4">
                    <img class="desktopFooterLogo" src='molabsmedia/molabs_logo.png' />
                    <h2 class="desktopFooterHeader">Your Business <br> is unique for us!</h2>
                    <p class="desktopRightsReserved desktopFooterMainCopy"> &#169; 2022 Molabs Media All Rights
                        Reserved.</p>
                    <!-- <a class="desktopPrivacyAndTerms" href="#disclaimerModal" data-toggle="modal"
                        data-target="#disclaimerModal">
                        <p class="desktopFooterMainCopy"><span style="font-weight: bold;">Privacy & Terms</span></p>
                    </a> -->
                </div>

                <div class="col-2 columnBorderTop">
                    <h3 class="desktopFooterSubheading">contact</h3>
                    <a class="desktopFooterPhone footerLinks">
                        <p class="desktopFooterMainCopy"><span style="font-weight: bold;">+1 214-679-6818</span></p>
                    </a>
                    <a class="footerLinks" href="index.php">
                        <p class="desktopFooterMainCopy">molabsmedia.com</p>
                    </a>
                    <!-- <a class="footerLinks" href="/cdn-cgi/l/email-protection#98f1f6fef7d8fbebe9edf9eafdfcebf7fbf1f9f4b6fbf7f5"><p class="desktopFooterMainCopy"><span class="__cf_email__" data-cfemail="127b7c747d527161636773607776617d717b737e3c717d7f">[email&#160;protected]</span></p></a> -->

                    <a class="footerLinks">

                        <span class="e-mail desktopFooterMainCopy" data-user="tcatnoc" data-website="moc.aidemsbalom">
                        </span>

                    </a>

                    <div id="CAContainer" class="locationsContainer">
                        <img class="stateIcon" src="essentials/footer/images/texas.png" />
                        <div>
                            <p class="desktopFooterMainCopy stateInformation"><span style="font-weight: bold;">Dallas,
                                    TX</span></p>
                            <p class="desktopFooterMainCopy stateInformation dontWrapText">2727 LBJ Freeway, Suite 200
                            </p>
                            <p class="desktopFooterMainCopy stateInformation">Dallas, TX, 75234</p>
                        </div>
                    </div>
                    <!-- <div class="locationsContainer">
                <img class="stateIcon" src="essentials/footer/images/ID.svg" />
                    <div>
                        <p class="desktopFooterMainCopy stateInformation"><span style="font-weight: bold;">Boise, ID</span></p>
                        <p class="desktopFooterMainCopy stateInformation dontWrapText">1861 S Wells Ave #300</p>
                        <p class="desktopFooterMainCopy stateInformation">Meridian, ID 83642</p>
                    </div>
                </div> -->
                </div>
                <div class="col-2 columnBorderTop">
                    <h3 class="desktopFooterSubheading">information</h3>
                    <a class="footerLinks" href="videoproduction.php">
                        <p class="desktopFooterMainCopy">Video Production</p>
                    </a>
                    <a class="footerLinks" href="creativewriting.php">
                        <p class="desktopFooterMainCopy">Creative Writing</p>
                    </a>
                    <a class="footerLinks" href="contentwriters.php">
                        <p class="desktopFooterMainCopy">Content Writing</p>
                    </a>
                    <a class="footerLinks" href="webdesign.php">
                        <p class="desktopFooterMainCopy">Web Design</p>
                    </a>

                    <a class="footerLinks" href="graphicsdesign.php">
                        <p class="desktopFooterMainCopy">Graphics Design</p>
                    </a>

                    <a class="footerLinks" href="itandtelecom.php">
                        <p class="desktopFooterMainCopy">IT and Telecom Staffing</p>
                    </a>

                </div>
                <div class="col-2 columnBorderTop">
                    <h3 class="desktopFooterSubheading">follow</h3>
                    <div class="desktopFooterSocialContainer">
                        <a href="https://www.facebook.com/Molabsmedia" target="_blank"><img width="100%" height="auto"
                                id="desktopFooterFB" src="essentials/footer/images/Facebook_white.svg" /></a>
                        <a class="footerLinks linkCenter" href="https://www.facebook.com/Molabsmedia" target="_blank">
                            <p class="desktopFooterMainCopy noBottomMargin">Facebook</p>
                        </a>
                    </div>
                    <div class="desktopFooterSocialContainer">
                        <a href="https://www.instagram.com/molabs_media" target="_blank"><img width="100%" height="auto"
                                id="desktopFooterInsta" src="essentials/footer/images/Instagram_white.svg" /></a>
                        <a class="footerLinks linkCenter" href="https://www.instagram.com/molabs_media" target="_blank">
                            <p class="desktopFooterMainCopy noBottomMargin">Instagram</p>
                        </a>
                    </div>
                    <div class="desktopFooterSocialContainer">
                        <a href="https://twitter.com/Molabs_Media" target="_blank"><img width="100%" height="auto"
                                id="desktopFooterTwitter" src="essentials/footer/images/Twitter_white.svg" /></a>
                        <a class="footerLinks linkCenter" href="https://twitter.com/Molabs_Media" target="_blank">
                            <p class="desktopFooterMainCopy noBottomMargin">Twitter</p>
                        </a>
                    </div>
                    <div class="desktopFooterSocialContainer">
                        <a href="https://www.linkedin.com/company/mo-labs-media" target="_blank"><img width="100%"
                                height="auto" id="desktopFooterLI"
                                src="essentials/footer/images/Linkedin_white.svg" /></a>
                        <a class="footerLinks linkCenter" href="https://www.linkedin.com/company/mo-labs-media"
                            target="_blank">
                            <p class="desktopFooterMainCopy noBottomMargin">LinkedIn</p>
                        </a>
                    </div>
                    <div class="desktopFooterSocialContainer">
                        <a href="https://www.youtube.com/channel/UC4ZvAdyyN2slzr_N6pvXomg" target="_blank"><img
                                width="100%" height="auto" id="desktopFooterYT"
                                src="essentials/footer/images/Youtube_white.svg" /></a>
                        <a class="footerLinks linkCenter"
                            href="https://www.youtube.com/channel/UC4ZvAdyyN2slzr_N6pvXomg" target="_blank">
                            <p class="desktopFooterMainCopy noBottomMargin">Youtube</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- <div class="modal" tabindex="-1" role="dialog" aria-labelledby="disclaimerModal" aria-hidden="true"
        id="disclaimerModal" data-backdrop="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 100%;">
                <div class="modal-header" style="background-color: white;">
                    <h5 class="modal-title">Privacy & Terms</h5>
                    <button id="close-disclaimer" type="button" class="close" data-dismiss="modal" aria-label="Close"
                        style="border-radius: 25px; border-color: black; border: solid; background-color: white;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="overflow-y: scroll; height: 450px; background-color: white;"> -->
    <!-- Termly Tracking Code -->
    <!-- goes here -->
    <!--  <embed src="https://app.termly.io/document/privacy-policy/90512b59-d462-4367-b546-069571520429"
                        style="width: 100%;height: 450px;">

                </div>
            </div>
        </div>
    </div> -->

    <!-- <script language='JavaScript1.1' async src='//pixel.mathtag.com/event/js?mt_id=1541489&mt_adid=245306&mt_exem=&mt_excl=&v1=&v2=&v3=&s1=&s2=&s3='></script> -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="text/javascript">
        _linkedin_partner_id = "1293980";
        window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
        window._linkedin_data_partner_ids.push(_linkedin_partner_id);
    </script>
    <script type="text/javascript">
        (function () {
            var s = document.getElementsByTagName("script")[0];
            var b = document.createElement("script");
            b.type = "text/javascript";
            b.async = true;
            b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
            s.parentNode.insertBefore(b, s);
        })();
    </script>
    <noscript>
        <img height="1" width="1" style="display:none;" alt=""
            src="https://px.ads.linkedin.com/collect/?pid=1293980&fmt=gif" />
    </noscript>

    <style>
        #showOnDesktop {
            display: none;
        }

        .footerHR {
            opacity: 1;
            color: white;
        }

        .noBottomMargin {
            margin-bottom: 0px;
        }

        .linkCenter {
            display: flex;
            align-items: center;
        }

        .dontWrapText {
            white-space: nowrap;
        }

        #desktopFooterRow {
            justify-content: space-evenly;
        }

        .locationsContainer {
            display: flex;
            align-items: center;
        }

        .stateInformation {
            margin-bottom: 0px;
        }

        .columnBorderTop {
            border-top: solid 0.0001rem white;
            padding-top: 15px;
            padding-left: 0px;
            margin-right: 50px;
        }

        .desktopFooterMainCopy {
            color: white;
            font-weight: 200;
        }

        .footerLinks {
            text-decoration: none;
            color: white;
        }

        .mobileFooter {
            background-image: url('essentials/footer/images/FooterBG.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            height: 100%;
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .desktopFooter {
            background-image: url('essentials/footer/images/FooterBG.jpg');
            background-repeat: no-repeat;
            background-position: bottom;
            background-size: cover;
            height: 750px;
            display: flex;
            align-items: center;
        }

        .desktopRightsReserved {
            font-weight: 300;
        }

        .desktopPrivacyAndTerms {
            font-weight: bold;
        }

        .desktopPrivacyAndTerms:hover {
            text-decoration: none;
        }

        .desktopFooterSubheading {
            color: white;
            font-weight: bold;
            padding-bottom: 1.5rem;
        }

        .desktopFooterSocialContainer {
            display: flex;
            flex-direction: row;
            padding-bottom: 15px;
            height: 50px;
        }

        @media screen and (max-width: 600px) {
            #mobileFooterLogo {
                width: 200px;
                height: auto;
            }

            #desktopFooterFB {
                max-width: 31px;
                height: auto;
                margin-right: 15px;
            }

            #desktopFooterInsta {
                max-width: 31px;
                height: auto;
                margin-right: 15px;
            }

            #desktopFooterTwitter {
                width: 31px;
                height: auto;
                margin-right: 15px;
            }

            #desktopFooterLI {
                max-width: 31px;
                height: auto;
                margin-right: 15px;
            }

            #desktopFooterYT {
                max-width: 31px;
                height: auto;
                margin-right: 15px;
            }

            .stateIcon {
                padding-right: 30px;
            }

            .desktopFooterSubheading {
                font-size: 17px;
            }

            .desktopFooterMainCopy {
                font-size: 12px;
            }

            .desktopFooterHeader {
                font-weight: lighter;
                color: white;
                padding-top: 1rem;
                padding-bottom: 1.25rem;
            }

            .desktopFooterSubheading {
                padding-top: 1rem;
                padding-bottom: 1rem;
            }

            #CAContainer {
                margin-top: 0px;
            }

            .locationsContainer {
                padding-top: 25px;
                padding-bottom: 25px;
            }

            .e-mail:before {
                content: attr(data-website) "\0040"attr(data-user);
                unicode-bidi: bidi-override;
                direction: rtl;
            }
        }

        @media screen and (min-width: 600px) {
            #mobileFooterLogo {
                width: 200px;
                height: auto;
            }

            #desktopFooterFB {
                max-width: 31px;
                height: auto;
                margin-right: 15px;
            }

            #desktopFooterInsta {
                max-width: 31px;
                height: auto;
                margin-right: 15px;
            }

            #desktopFooterTwitter {
                width: 31px;
                height: auto;
                margin-right: 15px;
            }

            #desktopFooterLI {
                max-width: 31px;
                height: auto;
                margin-right: 15px;
            }

            #desktopFooterYT {
                max-width: 31px;
                height: auto;
                margin-right: 15px;
            }

            .stateIcon {
                padding-right: 30px;
            }

            .desktopFooterSubheading {
                font-size: 17px;
            }

            .desktopFooterMainCopy {
                font-size: 12px;
            }

            .desktopFooterHeader {
                font-weight: lighter;
                color: white;
                padding-top: 1rem;
                padding-bottom: 1.25rem;
            }

            .desktopFooterSubheading {
                padding-top: 1rem;
                padding-bottom: 1rem;
            }

            #CAContainer {
                margin-top: 0px;
            }

            .locationsContainer {
                padding-top: 25px;
                padding-bottom: 25px;
            }

            .e-mail:before {
                content: attr(data-website) "\0040"attr(data-user);
                unicode-bidi: bidi-override;
                direction: rtl;
            }
        }

        @media screen and (min-width: 768px) {
            #mobileFooterLogo {
                width: 200px;
                height: auto;
            }

            #desktopFooterFB {
                max-width: 31px;
                height: auto;
                margin-right: 15px;
            }

            #desktopFooterInsta {
                max-width: 31px;
                height: auto;
                margin-right: 15px;
            }

            #desktopFooterTwitter {
                width: 31px;
                height: auto;
                margin-right: 15px;
            }

            #desktopFooterLI {
                max-width: 31px;
                height: auto;
                margin-right: 15px;
            }

            #desktopFooterYT {
                max-width: 31px;
                height: auto;
                margin-right: 15px;
            }

            .stateIcon {
                padding-right: 30px;
            }

            .desktopFooterSubheading {
                font-size: 17px;
            }

            .desktopFooterMainCopy {
                font-size: 16px;
            }

            .desktopFooterHeader {
                font-weight: lighter;
                color: white;
                padding-top: 1rem;
                padding-bottom: 1.25rem;
            }

            .desktopFooterSubheading {
                padding-top: 1rem;
                padding-bottom: 1rem;
            }

            #CAContainer {
                margin-top: 0px;
            }

            .locationsContainer {
                padding-top: 25px;
                padding-bottom: 25px;
            }

            .e-mail:before {
                content: attr(data-website) "\0040"attr(data-user);
                unicode-bidi: bidi-override;
                direction: rtl;
            }
        }

        @media screen and (min-width: 1024px) {
            #CAContainer {
                margin-top: 75px;
                padding-bottom: 25px;
            }

            .locationsContainer {
                padding-top: 0px;
                padding-bottom: 0px;
            }

            .e-mail:before {
                content: attr(data-website) "\0040"attr(data-user);
                unicode-bidi: bidi-override;
                direction: rtl;
            }

            #showOnDesktop {
                display: flex;
            }

            #showOnMobile {
                display: none;
            }

            .desktopFooter {
                padding-left: 1rem;
                padding-right: 0rem;
            }

            .stateIcon {
                max-width: 100%;
                height: auto;
                padding-right: 15px;
            }

            .desktopFooterMainCopy {
                font-size: 13px;
            }

            .desktopFooterLogo {
                max-width: 150px;
                height: auto;
            }

            .desktopFooterHeader {
                font-weight: lighter;
                color: white;
                padding-top: 2rem;
                padding-bottom: 3rem;
                font-size: 35px;
            }

            .desktopFooterSubheading {
                font-size: 28px;
            }

            #desktopFooterFB {
                max-width: 31px;
                height: auto;
                margin-right: 15px;
            }

            #desktopFooterInsta {
                max-width: 31px;
                height: auto;
                margin-right: 15px;
            }

            #desktopFooterTwitter {
                width: 31px;
                height: auto;
                margin-right: 15px;
            }

            #desktopFooterLI {
                max-width: 31px;
                height: auto;
                margin-right: 15px;
            }

            #desktopFooterYT {
                max-width: 31px;
                height: auto;
                margin-right: 15px;
            }
        }

        @media screen and (min-width: 1440px) {
            .desktopFooter {
                padding-left: 3rem;
                padding-right: 0rem;
            }

            .stateIcon {
                max-width: 100%;
                height: auto;
                padding-right: 15px;
            }

            .desktopFooterMainCopy {
                font-size: 16px !important;
            }

            .desktopFooterLogo {
                max-width: 300px;
                height: auto;
            }

            .desktopFooterHeader {
                font-weight: lighter;
                color: white;
                padding-top: 2rem;
                padding-bottom: 3rem;
                font-size: 40px;
            }

            .desktopFooterSubheading {
                font-size: 32px;
            }

            #desktopFooterFB {
                max-width: 31px;
                height: auto;
                margin-right: 15px;
            }

            #desktopFooterInsta {
                max-width: 31px;
                height: auto;
                margin-right: 15px;
            }

            #desktopFooterTwitter {
                width: 31px;
                height: auto;
                margin-right: 15px;
            }

            #desktopFooterLI {
                max-width: 31px;
                height: auto;
                margin-right: 15px;
            }

            #desktopFooterYT {
                max-width: 31px;
                height: auto;
                margin-right: 15px;
            }
        }
    </style>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- here is our popup modal -->
    <div id="formPopupModal-form-a" class="modal mobile-form-popup-modal form-popup-modal modal-container" role="dialog"
        displayed="false" data-backdrop="false">
        <div class="modal-dialog">
            <div id="index-popup-content" class="index-popup-content  modal-content">


                <div id="form-container" class="form-container popupDesktopFormContainer">
                    <div class="input-container">
                        <form id="popup-form-three" action="mail.php" method="post" class="popup-form-three">
                            <div class="close-button-container">
                                <span id="close-popup-button" class="close-button-form">
                                    <svg style="width: 20px; height: 20px;" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                            </div>
                            <h1 id="popup-form-header-three" class="popup-form-header-three" style="font-weight: 200">
                                &#x2192; let's chat!</h1>
                            <div id="desktop-three-confirmation">
                                <p><span style="font-weight: bold; display: block; text-align: center;">Thank you! <br>
                                        Someone will be contacting you shortly!</p>
                            </div>
                            <div id="form-input-container-three" class="form-input-container-three">
                                <div class="form-group">
                                    <input id="three_name" name="full_name" type="text" class="my-form-styling"
                                        placeholder="your name*" required>
                                </div>
                                <div class="form-group">
                                    <input id="three_email" name="email" type="email" class="my-form-styling"
                                        placeholder="email address*" required>
                                </div>
                                <div class="form-group">
                                    <input id="three_phone" name="phone_number" type="text" class="my-form-styling"
                                        placeholder="phone number*" required>
                                </div>
                                <div class="form-group">
                                    <input id="three_business_name" name="lead_business_name" type="text"
                                        class="my-form-styling" placeholder="business name*" required>
                                </div>
                                <div class="form-group">
                                    <textarea id="three_msg" name="msg" id="message_three" type="text"
                                        class="my-form-styling three_msg" placeholder="how can we help?"
                                        rows="5"></textarea>
                                </div>
                                <!-- used to get he values from the utm script -->
                                <input name="utm_data" type="hidden" id="utmButtonDesktopThree">
                                <button id="popup-form-button-three" type="submit"
                                    class="my-form-button-three">submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="get-onboard-container">
                        <div class="popupDesktopParentContainer">
                            <div class="popupDesktopContainer">
                                <h4 class="popupDesktopCopy">partner up with <br>
                                    the specialists at <br>
                                    <span style="font-weight: bold;">Molabs Media.</span> <br>
                                    we have!</h4>

                            </div>
                        </div>
                    </div>

                    <div id="form-container" class="input-container-mobile">
                        <form id="popup-form-three-mobile" action="mail.php" method="post" class="popup-form-three">
                            <div class="mobile-get-onboard-container">
                                <div class="close-button-container">
                                    <span id="close-popup-button" class="close-button-form">
                                        <svg style="width: 20px; height: 20px;" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="popupDesktopParentContainer">
                                    <div class="popupDesktopContainer mobilePopupContainer">
                                        <h4 class="popupDesktopCopy">partner up with <br>
                                            the specialists at <br>
                                            <span style="font-weight: bold;">c squared social.</span> <br>
                                            i have!</h4>
                                        <div class="formSignatureContainer">
                                            <img id="formSignature" src="/homepage/images/signature_White.png">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div id="desktop-three-confirmation">
                                <p><span style="font-weight: bold; display: block; text-align: center;">Thank you! <br>
                                        Someone will be contacting you shortly!</p>
                            </div>
                            <div id="form-input-container-three" class="form-input-container-three">
                                <div class="mobile-button-container">
                                    <!-- <div class="form-group"> -->
                                    <input id="three_name_mobile" name="full_name" type="text" class="input-style"
                                        placeholder="your name*" required>
                                    <!-- </div> -->
                                    <!-- <div class="form-group"> -->
                                    <input id="three_email_mobile" name="email" type="email" class="input-style"
                                        placeholder="email address*" required>
                                    <!-- </div> -->
                                </div>
                                <div class="mobile-button-container">
                                    <!-- <div class="form-group"> -->
                                    <input id="three_phone_mobile" name="phone_number" type="text" class="input-style"
                                        placeholder="phone number*" required>
                                    <!-- </div> -->
                                    <!-- <div class="form-group"> -->
                                    <input id="three_business_name_mobile" name="lead_business_name" type="text"
                                        class="input-style" placeholder="business name*" required>
                                    <!-- </div> -->
                                </div>
                                <!-- <div class="form-group"> -->
                                <textarea id="three_msg_mobile" name="msg" id="message_three" type="text"
                                    class="help-input three_msg" placeholder="how can we help?" rows="5"></textarea>
                                <!-- </div> -->
                                <!-- used to get he values from the utm script -->
                                <input name="utm_data" type="hidden" id="utmButtonMobileThree">
                                <button id="popup-form-button-three" type="submit"
                                    class="mobile-form-button">submit</button>
                            </div>
                        </form>
                    </div>
                </div>

                <script>
                    $(document).ready(function () {
                        $(".close-button-form").on("click", function () {
                            $('.modal-backdrop').remove();
                            $(`#formPopupModal-${sessionStorage['selectedForm']}`).modal('toggle');
                        });
                    });
                </script>

                <style>
                    #desktop-three-confirmation {
                        display: none;
                    }

                    .help-input {
                        outline: none;
                        font-family: 'Source Code Pro', monospace;
                        width: 100%;
                        height: 80px;
                        font-size: 14px;
                        font-weight: 400;
                        line-height: 1.5;
                        color: #212529;
                        background-color: #fff;
                        background-clip: padding-box;
                        border: 1px solid #ced4da;
                        appearance: none;
                        border-radius: 0.25rem;
                        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                        padding: 4px;
                        margin-bottom: 1rem;
                    }

                    .input-style {
                        padding: 4px;
                        outline: none;
                        font-family: 'Source Code Pro', monospace;
                        width: 48%;
                        height: 40px;
                        font-size: 14px;
                        font-weight: 400;
                        line-height: 1.5;
                        color: #212529;
                        background-color: #fff;
                        background-clip: padding-box;
                        border: 1px solid #ced4da;
                        appearance: none;
                        border-radius: 0.25rem;
                        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                    }

                    .mobile-button-container {
                        width: 100%;
                        display: flex;
                        flex-direction: row;
                        margin-bottom: .5rem;
                        align-items: center;
                        justify-content: space-between;
                    }

                    .close-button-form {}

                    .close-button-container {
                        width: 100%;
                        height: 24px;
                        display: flex;
                        justify-content: flex-start;
                        align-items: flex-start;
                        margin-left: 12px;
                        color: black;
                        margin-top: 0px;
                    }

                    .input-container {
                        width: 50%;
                        height: 468px;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        background-color: #F7F8FA;
                    }

                    .input-container-mobile {
                        width: 100%;
                        height: 512px;
                        display: flex;
                        align-items: flex-start;
                        justify-content: center;
                        background-color: white;
                    }

                    .form-container {
                        width: 100%;
                        height: 100%;
                        display: flex;
                        flex-direction: row
                    }

                    #message_three {
                        height: 77px;
                        resize: none;
                        padding-top: 10px;
                    }



                    #three_msg {}

                    .three_msg {
                        width: 100%;
                        height: 77px !important;
                        resize: none;
                        padding-top: 3px;
                    }

                    #popup-form-three {}

                    .popup-form-three {
                        border-radius: 10px;
                        max-width: 100%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        flex-direction: column;
                        width: 100%;
                    }

                    .form-input-container-three {
                        padding-bottom: 20px;
                        width: 80%;
                    }

                    #form-input-container-three {}

                    .my-form-button-three {
                        background: transparent;
                        width: 100%;
                        height: 40px;
                        border: solid 1px black;
                        border-radius: 0.25rem;
                        /* background-image: url('essentials/forms/images/popup_person_button.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center; */
                        color: white;
                        font-family: 'Pro Source Code', monospace;
                        font-weight: 800;
                        background-color: black;
                    }

                    .mobile-form-button {
                        /* background: transparent; */
                        width: 100%;
                        height: 40px;
                        border: none;
                        border-radius: 0.25rem;
                        background-color: black;
                        background-size: cover;
                        background-repeat: no-repeat;
                        background-position: center;
                        color: white;
                        font-family: 'Pro Source Code', monospace;
                        font-weight: 800;
                    }

                    .get-onboard-container {
                        background-image: url("images/girl_popup_desktop.jpg");
                        background-position: left top;
                        background-size: cover;
                        background-repeat: no-repeat;
                        display: flex;
                        flex-direction: column;
                        padding-top: 92px;
                        align-items: center;
                        justify-content: flex-start;
                        width: 50%;
                        height: 468px;
                    }

                    .mobile-get-onboard-container {
                        background-image: url("images/girl_popup_desktop.jpg");
                        background-position: right top;
                        background-size: cover;
                        background-repeat: no-repeat;
                        display: flex;
                        flex-direction: column;
                        padding-top: 20px;
                        align-items: center;
                        justify-content: flex-start;
                        width: 100%;
                        margin-bottom: 1rem;
                        height: 100%;
                    }

                    .input-container-mobile {
                        display: none;
                    }


                    @media screen and (max-width: 1012px) {

                        .input-container-mobile {
                            display: inline-block;
                            /* min-width: 375px; */
                            width: 100%;
                            height: 100%;
                            display: flex;
                            align-items: flex-start;
                            justify-content: center;
                            background-color: white;
                            max-width: 500px;
                            padding-top: 0px;
                        }

                        .input-container {
                            display: none;
                        }

                        .form-container {
                            width: 100%;
                            height: 100%;
                            display: flex;
                            padding: 0px !important;
                            justify-content: center;
                            align-items: center;
                            flex-direction: column;
                        }

                        .get-onboard-container {
                            display: none;
                        }

                        .popup-form-header-three {
                            font-family: 'Inter', sans-serif;
                            padding-top: 20px;
                            line-height: 2rem;
                            text-align: center;
                            font-weight: 200 !important;
                            border-top: 1px solid red;
                        }

                        #popup-form-header-three {}

                        #three_msg {}
                    }
                </style>
            </div>
        </div>
    </div>

    <!-- here is our popup modal -->
    <div id="formPopupModal-form-b" class="modal mobile-form-popup-modal form-popup-modal modal-container" role="dialog"
        displayed="false" data-backdrop="false">
        <div class="modal-dialog">
            <div id="index-popup-content" class="index-popup-content  modal-content">


                <div id="form-container" class="form-container popupDesktopFormContainer">
                    <div class="input-container">
                        <form id="popup-form-two" action="mail.php" method="post" class="popup-form-two">
                            <div class="close-button-container">
                                <span id="close-popup-button" class="close-button-form">
                                    <svg style="width: 20px; height: 20px;" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                            </div>
                            <h1 id="popup-form-header-two" class="popup-form-header-two" style="font-weight: 200">
                                &#x2192; let's chat!</h1>
                            <div id="desktop-two-confirmation">
                                <p><span style="font-weight: bold; display: block; text-align: center;">Thank you! <br>
                                        Someone will be contacting you shortly!</p>
                            </div>
                            <div id="form-input-container-two" class="form-input-container-two">
                                <div class="form-group">
                                    <input id="two_name" name="full_name" type="text" class="my-form-styling"
                                        placeholder="your name*" required>
                                </div>
                                <div class="form-group">
                                    <input id="two_email" name="email" type="email" class="my-form-styling"
                                        placeholder="email address*" required>
                                </div>
                                <div class="form-group">
                                    <input id="two_phone" name="phone_number" type="text" class="my-form-styling"
                                        placeholder="phone number*" required>
                                </div>
                                <div class="form-group">
                                    <input id="two_business_name" name="lead_business_name" type="text"
                                        class="my-form-styling" placeholder="business name*" required>
                                </div>
                                <div class="form-group">
                                    <textarea id="two_msg" name="msg" id="message_two" type="text"
                                        class="my-form-styling two_msg" placeholder="how can we help?"
                                        rows="5"></textarea>
                                </div>
                                <!-- used to get he values from the utm script -->
                                <input name="utm_data" type="hidden" id="utmButtonDesktopTwo">
                                <button id="popup-form-button-two" type="submit"
                                    class="my-form-button-two">submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="get-onboard-container">
                        <div class="popupDesktopParentContainer">
                            <div class="popupDesktopContainer">
                                <h4 class="popupDesktopCopy">partner up with <br>
                                    the specialists at <br>
                                    <span style="font-weight: bold;">Molabs Media.</span><br>
                                    we have!</h4>

                            </div>
                        </div>
                    </div>
                    <div id="form-container" class="input-container-mobile">
                        <form id="popup-form-two-mobile" action="mail.php" method="post" class="popup-form-two">
                            <div class="mobile-get-onboard-container">
                                <div class="close-button-container">
                                    <span id="close-popup-button" class="close-button-form">
                                        <svg style="width: 20px; height: 20px;" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="popupDesktopParentContainer">
                                    <div class="popupDesktopContainer mobilePopupContainer">
                                        <h4 class="popupDesktopCopy">partner up with <br>
                                            the specialists at <br>
                                            <span style="font-weight: bold;">c squared social.</span> <br>
                                            i have!</h4>
                                        <div class="formSignatureContainer">
                                            <img id="formSignature" src="/homepage/images/signature_White.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="desktop-two-confirmation">
                                <p><span style="font-weight: bold; display: block; text-align: center;">Thank you! <br>
                                        Someone will be contacting you shortly!</p>
                            </div>
                            <div id="form-input-container-two" class="form-input-container-two">
                                <div class="mobile-button-container">
                                    <!-- <div class="form-group"> -->
                                    <input id="two_name_mobile" name="full_name" type="text" class="input-style"
                                        placeholder="your name*" required>
                                    <!-- </div> -->
                                    <!-- <div class="form-group"> -->
                                    <input id="two_email_mobile" name="email" type="email" class="input-style"
                                        placeholder="email address*" required>
                                    <!-- </div> -->
                                </div>
                                <div class="mobile-button-container">
                                    <!-- <div class="form-group"> -->
                                    <input id="two_phone_mobile" name="phone_number" type="text" class="input-style"
                                        placeholder="phone number*" required>
                                    <!-- </div> -->
                                    <!-- <div class="form-group"> -->
                                    <input id="two_business_name_mobile" name="lead_business_name" type="text"
                                        class="input-style" placeholder="business name*" required>
                                    <!-- </div> -->
                                </div>
                                <!-- <div class="form-group"> -->
                                <textarea id="two_msg_mobile" name="msg" id="message_two" type="text"
                                    class="help-input two_msg" placeholder="how can we help?" rows="5"></textarea>
                                <!-- </div> -->
                                <!-- used to get he values from the utm script -->
                                <input name="utm_data" type="hidden" id="utmButtonMobileTwo">
                                <button id="popup-form-button-two" type="submit"
                                    class="mobile-form-button">submit</button>
                            </div>
                        </form>
                    </div>
                </div>

                <script>
                    $(document).ready(function () {
                        $(".close-button-form").on("click", function () {
                            $('.modal-backdrop').remove();
                            $(`#formPopupModal-${sessionStorage['selectedForm']}`).modal('toggle');
                        });
                    });
                </script>

                <style>
                    #desktop-two-confirmation {
                        display: none;
                    }

                    .help-input {
                        outline: none;
                        font-family: 'Source Code Pro', monospace;
                        width: 100%;
                        height: 80px;
                        font-size: 14px;
                        font-weight: 400;
                        line-height: 1.5;
                        color: #212529;
                        background-color: #fff;
                        background-clip: padding-box;
                        border: 1px solid #ced4da;
                        appearance: none;
                        border-radius: 0.25rem;
                        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                        padding: 4px;
                        margin-bottom: 1rem;
                    }

                    .input-style {
                        padding: 4px;
                        outline: none;
                        font-family: 'Source Code Pro', monospace;
                        width: 48%;
                        height: 40px;
                        font-size: 14px;
                        font-weight: 400;
                        line-height: 1.5;
                        color: #212529;
                        background-color: #fff;
                        background-clip: padding-box;
                        border: 1px solid #ced4da;
                        appearance: none;
                        border-radius: 0.25rem;
                        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                    }

                    .mobile-button-container {
                        width: 100%;
                        display: flex;
                        flex-direction: row;
                        margin-bottom: .5rem;
                        align-items: center;
                        justify-content: space-between;
                    }

                    .close-button-container {
                        width: 100%;
                        height: 24px;
                        display: flex;
                        justify-content: flex-start;
                        align-items: flex-start;
                        margin-left: 12px;
                        color: black;
                        margin-top: 0px;
                    }

                    .input-container {
                        width: 50%;
                        height: 468px;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        background-color: #F7F8FA;
                    }

                    .input-container-mobile {
                        width: 100%;
                        height: 512px;
                        display: flex;
                        align-items: flex-start;
                        justify-content: center;
                        background-color: white;
                    }

                    .form-container {
                        width: 100%;
                        height: 100%;
                        display: flex;
                        flex-direction: row
                    }

                    #message_two {
                        height: 77px;
                        resize: none;
                        padding-top: 10px;
                    }

                    .two_msg {
                        width: 100%;
                        height: 77px !important;
                        resize: none;
                        padding-top: 3px;
                    }

                    .popup-form-two {
                        border-radius: 10px;
                        max-width: 100%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        flex-direction: column;
                        width: 100%;
                    }

                    .form-input-container-two {
                        padding-bottom: 20px;
                        width: 80%;
                    }

                    .my-form-button-two {
                        background: transparent;
                        width: 100%;
                        height: 40px;
                        border: solid 1px black;
                        border-radius: 0.25rem;
                        /* background-image: url('essentials/forms/images/popup_person_button.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center; */
                        color: white;
                        font-family: 'Pro Source Code', monospace;
                        font-weight: 800;
                        background-color: black;
                    }

                    .mobile-form-button {
                        width: 100%;
                        height: 40px;
                        border: none;
                        border-radius: 0.25rem;
                        background-color: black;
                        background-size: cover;
                        background-repeat: no-repeat;
                        background-position: center;
                        color: white;
                        font-family: 'Pro Source Code', monospace;
                        font-weight: 800;
                    }

                    .get-onboard-container {
                        background-image: url("images/girl_popup_desktop.jpg");
                        background-position: left top;
                        background-size: cover;
                        background-repeat: no-repeat;
                        display: flex;
                        flex-direction: column;
                        padding-top: 92px;
                        align-items: center;
                        justify-content: flex-start;
                        width: 50%;
                        height: 468px;
                    }

                    .mobile-get-onboard-container {
                        background-image: url("images/girl_popup_desktop.jpg");
                        background-position: right top;
                        background-size: cover;
                        background-repeat: no-repeat;
                        display: flex;
                        flex-direction: column;
                        padding-top: 20px;
                        align-items: center;
                        justify-content: flex-start;
                        width: 100%;
                        margin-bottom: 1rem;
                        height: 100%;
                    }

                    .input-container-mobile {
                        display: none;
                    }

                    .popupDesktopParentContainer {
                        position: relative;
                        height: 100%;
                        width: 100%;
                    }

                    #formSignature {
                        width: 60%;
                        height: auto;
                    }

                    /* @media screen and (max-width: 1920px){ */
                    .popUpSignature {
                        font-size: 13px;
                        font-family: 'Source Code Pro';
                        font-weight: 500;
                        padding-top: 20px;
                    }

                    .popupDesktopCopy {
                        font-weight: 200;
                    }

                    .popupDesktopContainer {
                        height: 100%;
                        color: white;
                        display: flex;
                        align-items: flex-start;
                        /* margin-bottom: 108px; */
                        width: 300px;
                        justify-content: flex-start;
                        /* margin-left: -50px; */
                        flex-direction: column;
                        padding-left: 25px;
                        padding-top: 50px;
                    }

                    .mobilePopupContainer {
                        padding-left: 40px !important;
                    }

                    /* } */

                    .popupDesktopFormContainer {
                        max-width: 800px;
                    }

                    @media screen and (max-width: 1012px) {

                        .close-button-container {
                            justify-content: flex-end !important;
                            align-items: flex-end !important;
                            margin-right: 40px !important;
                        }

                        .close-button-container {
                            color: white !important;
                        }

                        .input-container-mobile {
                            display: inline-block;
                            /* min-width: 375px; */
                            width: 100%;
                            height: 100%;
                            display: flex;
                            align-items: flex-start;
                            justify-content: center;
                            background-color: white;
                            max-width: 500px;
                            padding-top: 0px;
                        }

                        .input-container {
                            display: none;
                        }

                        .form-container {
                            width: 100%;
                            height: 100%;
                            display: flex;
                            padding: 0px !important;
                            justify-content: center;
                            align-items: center;
                            flex-direction: column;
                        }

                        .get-onboard-container {
                            display: none;
                        }

                        .popup-form-header-two {
                            font-family: 'Inter', sans-serif;
                            padding-top: 20px;
                            line-height: 2rem;
                            text-align: center;
                            font-weight: 200 !important;
                            border-top: 1px solid red;
                        }
                    }
                </style>
            </div>
        </div>
    </div>

    <!-- here is our button modal -->
    <div id="buttonModal-form-a"
        class=" modal mobile-button-form-popup-modal form-button-popup-modal modal-button-container" role="dialog"
        displayed="false" data-backdrop="false">
        <div class="modal-dialog">
            <div id="index-button-modal-content" class="index-popup-content  modal-content">

                <div class="form-container popupDesktopFormContainer">
                    <div id="blurred-form-background" class="input-container">
                        <form id="popup-form-a" action="mail.php" method="post" class="popup-form">
                            <div class="close-button-container">
                                <span id="close-popup-button" class="close-popup">
                                    <svg style="width: 20px; height: 20px;" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                            </div>

                            <h1 id="popup-form-header" class="popup-form-header" style="font-weight: 200"> &#x2192;
                                let's chat!</h1>
                            <div id="desktop-four-confirmation">
                                <p><span style="font-weight: bold; display: block; text-align: center;">Thank you! <br>
                                        Someone will be contacting you shortly!</p>
                            </div>

                            <div id="form-input-container" class="form-input-container">
                                <div class="form-group">
                                    <input id="pop_name" name="full_name" type="text" class="my-form-styling"
                                        placeholder="your name*" required>
                                </div>
                                <div class="form-group">
                                    <input id="pop_email" name="email" type="email" class="my-form-styling"
                                        placeholder="email address*" required>
                                </div>
                                <div class="form-group">
                                    <input id="pop_number" name="phone_number" type="text" class="my-form-styling"
                                        placeholder="phone number*" required>
                                </div>
                                <div class="form-group">
                                    <input id="pop_lead_business_name" name="lead_business_name" type="text"
                                        class="my-form-styling" placeholder="business name*" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="msg" id="message_four" type="text" class="my-form-styling msg"
                                        placeholder="how can we help?" rows="5"></textarea>
                                </div>

                                <!-- used to get the values from the utm script -->
                                <input name="utm_data" type="hidden" id="utmButtonDesktopFour">

                                <button id="popup-form-button" type="submit" class="my-form-button">submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="get-onboard-container">
                        <div class="popupDesktopParentContainer">
                            <div class="popupDesktopContainer">
                                <h4 class="popupDesktopCopy">partner up with <br>
                                    the specialists at <br>
                                    <span style="font-weight: bold;">Molabs Media.</span> <br>
                                    we have!</h4>

                            </div>
                        </div>
                    </div>

                    <div id="form-container" class="input-container-mobile">
                        <form id="popup-form-a-mobile" action="mail.php" method="post" class="popup-form">
                            <div class="mobile-get-onboard-container">
                                <div class="close-button-container">
                                    <span id="close-popup-button" class="close-popup">
                                        <svg style="width: 20px; height: 20px;" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="popupDesktopParentContainer">
                                    <div class="popupDesktopContainer mobilePopupContainer">
                                        <h4 class="popupDesktopCopy">partner up with <br>
                                            the specialists at <br>
                                            <span style="font-weight: bold;">c squared social.</span><br>
                                            i have!</h4>
                                        <div class="formSignatureContainer">
                                            <img id="formSignature" src="/homepage/images/signature_White.png">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="desktop-four-confirmation">
                                <p><span style="font-weight: bold; display: block; text-align: center;">Thank you! <br>
                                        Someone will be contacting you shortly!</p>
                            </div>

                            <div id="form-input-container" class="form-input-container">
                                <div class="mobile-button-container">
                                    <!-- <div class="form-group"> -->
                                    <input id="pop_name_mobile" name="full_name" type="text" class="input-style"
                                        placeholder="your name*" required>
                                    <!-- </div> -->
                                    <!-- <div class="form-group"> -->
                                    <input id="pop_email_mobile" name="email" type="email" class="input-style"
                                        placeholder="email address*" required>
                                    <!-- </div> -->
                                </div>
                                <div class="mobile-button-container">
                                    <!-- <div class="form-group"> -->
                                    <input id="pop_phone" name="phone_number" type="text" class="input-style"
                                        placeholder="phone number*" required>
                                    <!-- </div> -->
                                    <!-- <div class="form-group"> -->
                                    <input id="pop_business_name" name="lead_business_name" type="text"
                                        class="input-style" placeholder="business name*" required>
                                    <!-- </div> -->
                                </div>
                                <!-- <div class="form-group"> -->
                                <textarea name="msg" id="message_four" type="text" class="help-input msg"
                                    placeholder="how can we help?" rows="5"></textarea>
                                <!-- </div> -->
                                <!-- used to get he values from the utm script -->
                                <input name="utm_data" type="hidden" id="utmButtonMobileFour">
                                <button id="popup-form-button" type="submit" class="mobile-form-button">submit</button>
                            </div>
                        </form>
                    </div>


                </div>


                <script>
                    $(document).ready(function () {
                        $(".close-popup").on("click", function () {
                            $('.modal-backdrop').remove();
                            $(`#buttonModal-${sessionStorage['selectedForm']}`).modal('toggle');
                        });
                    });
                </script>

                <style>
                    #desktop-four-confirmation {
                        display: none;
                    }

                    .mobile-form-button {
                        /* background: transparent; */
                        width: 100%;
                        height: 40px;
                        border: none;
                        border-radius: 0.25rem;
                        background-color: black;
                        background-size: cover;
                        background-repeat: no-repeat;
                        background-position: center;
                        color: white;
                        font-family: 'Pro Source Code', monospace;
                        font-weight: 800;
                    }

                    .msg {
                        width: 100%;
                        height: 77px !important;
                        resize: none;
                    }

                    .input-style {
                        padding: 4px;
                        outline: one;
                        font-family: 'Source Code Pro', monospace;
                        width: 48%;
                        height: 40px;
                        font-size: 14px;
                        font-weight: 400;
                        line-height: 1.5;
                        color: #212529;
                        background-color: #fff;
                        background-clip: padding-box;
                        border: 1px solid #ced4da;
                        appearance: one;
                        border-radius: 0.25rem;
                        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                    }

                    .mobile-get-onboard-container {
                        background-image: url("images/girl_popup_desktop.jpg");
                        background-position: right top;
                        background-size: cover;
                        background-repeat: no-repeat;
                        display: flex;
                        flex-direction: column;
                        padding-top: 20px;
                        align-items: center;
                        justify-content: flex-start;
                        width: 100%;
                        margin-bottom: 1rem;
                        height: 100%;
                    }

                    .my-form-button {
                        background: transparent;
                        width: 100%;
                        height: 40px;
                        border: solid 1px black;
                        border-radius: 0.25rem;
                        /* background-image: url('essentials/forms/images/popup_person_button.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center; */
                        color: white;
                        font-family: 'Pro Source Code', monospace;
                        font-weight: 800;
                        background-color: black;
                    }

                    .form-input-container {
                        padding-bottom: 20px;
                        width: 80%;
                    }

                    .input-container {
                        width: 50%;
                        height: 468px;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        background-color: #F7F8FA;
                    }

                    .input-container-mobile {
                        width: 100vw;
                        height: 512px;
                        display: flex;
                        align-items: flex-start;
                        justify-content: center;
                        background-color: white;
                    }

                    .get-onboard-container {
                        background-image: url("images/girl_popup_desktop.jpg");
                        background-position: left top;
                        background-size: cover;
                        background-repeat: no-repeat;
                        display: flex;
                        flex-direction: column;
                        padding-top: 92px;
                        align-items: center;
                        justify-content: flex-start;
                        width: 50%;
                        height: 468px;
                    }

                    .form-container {
                        width: 100%;
                        height: 100%;
                        display: flex;
                        flex-direction: row
                    }

                    .close-button-container {
                        width: 100%;
                        height: 24px;
                        display: flex;
                        justify-content: flex-start;
                        align-items: flex-start;
                        margin-left: 12px;
                        color: black;
                        margin-top: -15px;
                        margin-top: 0px;
                    }


                    .modal-content {
                        background-color: transparent;
                        width: 703px;
                    }

                    .my-form-styling {
                        outline: one;
                        font-family: 'Source Code Pro', monospace;
                        margin-bottom: 1rem;
                        width: 100%;
                        height: 40px;
                        font-size: 16px;
                        padding: 0.375rem 0.75rem;
                        font-weight: 400;
                        line-height: 1.5;
                        color: #212529;
                        background-color: #fff;
                        background-clip: padding-box;
                        border: 1px solid #ced4da;
                        appearance: one;
                        border-radius: 0.25rem;
                        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                    }

                    .popup-form {
                        border-radius: 10px;
                        max-width: 100%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        flex-direction: column;
                        width: 100%;
                    }

                    .input-container-mobile {
                        display: none;
                    }


                    /** mobile media queries start here */
                    @media screen and (max-width: 768px) {
                        .input-container-mobile {
                            min-width: 375px;
                            width: 100%;
                            height: 512px;
                            display: flex;
                            padding-top: 10px;
                            align-items: flex-start;
                            justify-content: center;
                            background-color: white;
                            display: inline-block;
                        }

                    }

                    @media screen and (max-width: 1012px) {

                        .input-container-mobile {
                            display: inline-block;
                            /* min-width: 375px; */
                            width: 100%;
                            height: 100%;
                            display: flex;
                            align-items: flex-start;
                            justify-content: center;
                            background-color: white;
                            max-width: 500px;
                            padding-top: 0px;
                        }

                        .input-container {
                            display: one;
                        }

                        .get-onboard-container {
                            display: one;
                        }

                        .form-container {
                            width: 100%;
                            height: 100%;
                            display: flex;
                            padding: 0px !important;
                            justify-content: center;
                            align-items: center;
                            flex-direction: column;
                        }

                        .popup-form-header {
                            font-family: 'Inter', sans-serif;
                            font-weight: 200 !important;
                            padding-top: 20px;
                            line-height: 2rem;
                            text-align: center;
                            color: red;
                        }
                    }
                </style>
            </div>
        </div>
    </div>

    <!-- here is our button modal -->
    <div id="buttonModal-form-b"
        class=" modal mobile-button-form-popup-modal form-button-popup-modal modal-button-container" role="dialog"
        displayed="false" data-backdrop="false">
        <div class="modal-dialog">
            <div id="index-button-modal-content" class="index-popup-content  modal-content">

                <div class="form-container popupDesktopFormContainer">

                    <div id="blurred-form-background" class="input-container">
                        <form id="popup-form-b" action="mail.php" method="post" class="popup-form popupDesktopOne">
                            <div class="close-button-container">
                                <span id="close-popup-button" class="close-popup">
                                    <svg style="width: 20px; height: 20px;" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                            </div>

                            <h1 id="popup-form-header" class="popup-form-header" style="font-weight: 200"> &#x2192;
                                let's chat!</h1>
                            <div id="desktop-one-confirmation">
                                <p><span style="font-weight: bold; display: block; text-align: center;">Thank you! <br>
                                        Someone will be contacting you shortly!</p>
                            </div>
                            <div id="form-input-container" class="form-input-container">
                                <div class="form-group">
                                    <input id="pop_name_desk" name="full_name" type="text" class="my-form-styling"
                                        placeholder="your name*" required>
                                </div>
                                <div class="form-group">
                                    <input id="pop_email_desk" name="email" type="email" class="my-form-styling"
                                        placeholder="email address*" required>
                                </div>
                                <div class="form-group">
                                    <input id="pop_number_desk" name="phone_number" type="text" class="my-form-styling"
                                        placeholder="phone number*" required>
                                </div>
                                <div class="form-group">
                                    <input id="pop_lead_business_name_desk" name="lead_business_name" type="text"
                                        class="my-form-styling" placeholder="business name*" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="msg" id="message_one" type="text" class="my-form-styling msg"
                                        placeholder="how can we help?" rows="5"></textarea>
                                </div>

                                <!-- used to get the values from the utm script -->
                                <input name="utm_data" type="hidden" id="utmButtonDesktopOne">

                                <button id="popup-form-button" type="submit" class="my-form-button">submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="get-onboard-container">
                        <div class="popupDesktopParentContainer">
                            <div class="popupDesktopContainer">
                                <h4 class="popupDesktopCopy">partner up with <br>
                                    the specialists at <br>
                                    <span style="font-weight: bold;">Molabs Media</span> <br>
                                    we have!</h4>

                            </div>
                        </div>
                    </div>

                    <div id="form-container" class="input-container-mobile">
                        <form id="popup-form-b-mobile" action="mail.php" method="post"
                            class="popup-form popupDesktopOne">
                            <div class="mobile-get-onboard-container">
                                <div class="close-button-container">
                                    <span id="close-popup-button" class="close-popup">
                                        <svg style="width: 20px; height: 20px;" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="popupDesktopParentContainer">
                                    <div class="popupDesktopContainer mobilePopupContainer">
                                        <h4 class="popupDesktopCopy">partner up with <br>
                                            the specialists at <br>
                                            <span style="font-weight: bold;">c squared social.</span> <br>
                                            i have!</h4>
                                        <div class="formSignatureContainer">
                                            <img id="formSignature" src="/homepage/images/signature_White.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="desktop-one-confirmation">
                                <p><span style="font-weight: bold; display: block; text-align: center;">Thank you! <br>
                                        Someone will be contacting you shortly!</p>
                            </div>
                            <div id="form-input-container" class="form-input-container">
                                <div class="mobile-button-container">
                                    <input id="pop_name_one" name="full_name" type="text" class="input-style"
                                        placeholder="your name*" required>
                                    <input id="pop_email_one" name="email" type="email" class="input-style"
                                        placeholder="email address*" required>
                                </div>
                                <div class="mobile-button-container">
                                    <input id="pop_phone_one" name="phone_number" type="text" class="input-style"
                                        placeholder="phone number*" required>
                                    <input id="pop_lead_business_name_one" name="lead_business_name" type="text"
                                        class="input-style" placeholder="business name*" required>
                                </div>
                                <textarea id="message_one" name="msg" type="text" class="help-input msg"
                                    placeholder="how can we help?" rows="5"></textarea>

                                <input name="utm_data" type="hidden" id="utmButtonMobileOne">
                                <button id="popup-form-button" type="submit" class="mobile-form-button">submit</button>
                            </div>
                        </form>
                    </div>
                </div>

                <script>
                    $(document).ready(function () {
                        $(".close-popup").on("click", function () {
                            $('.modal-backdrop').remove();
                            $(`#buttonModal-${sessionStorage['selectedForm']}`).modal('toggle');
                        });
                    });
                </script>

                <style>
                    #desktop-one-confirmation {
                        display: none;
                    }

                    .mobile-form-button {
                        width: 100%;
                        height: 40px;
                        border: none;
                        border-radius: 0.25rem;
                        background-color: black;
                        background-size: cover;
                        background-repeat: no-repeat;
                        background-position: center;
                        color: white;
                        font-family: 'Pro Source Code', monospace;
                        font-weight: 800;
                    }

                    .msg {
                        width: 100%;
                        height: 77px !important;
                        resize: none;
                    }

                    .input-style {
                        padding: 4px;
                        outline: none;
                        font-family: 'Source Code Pro', monospace;
                        width: 48%;
                        height: 40px;
                        font-size: 14px;
                        font-weight: 400;
                        line-height: 1.5;
                        color: #212529;
                        background-color: #fff;
                        background-clip: padding-box;
                        border: 1px solid #ced4da;
                        appearance: none;
                        border-radius: 0.25rem;
                        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                    }

                    .mobile-get-onboard-container {
                        background-image: url("images/girl_popup_desktop.jpg");
                        background-position: right top;
                        background-size: cover;
                        background-repeat: no-repeat;
                        display: flex;
                        flex-direction: column;
                        padding-top: 20px;
                        align-items: center;
                        justify-content: flex-start;
                        width: 100%;
                        margin-bottom: 1rem;
                        height: 100%;
                    }

                    .my-form-button {
                        background: transparent;
                        width: 100%;
                        height: 40px;
                        border: solid 1px black;
                        border-radius: 0.25rem;
                        /* background-image: url('essentials/forms/images/popup_person_button.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center; */
                        color: white;
                        font-family: 'Pro Source Code', monospace;
                        font-weight: 800;
                        background-color: black;
                    }

                    .form-input-container {
                        padding-bottom: 20px;
                        width: 80%;
                    }

                    .input-container {
                        width: 50%;
                        height: 468px;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        background-color: #F7F8FA;
                    }

                    .input-container-mobile {
                        width: 100vw;
                        height: 512px;
                        display: flex;
                        align-items: flex-start;
                        justify-content: center;
                        background-color: white;
                    }

                    .get-onboard-container {
                        background-image: url("images/girl_popup_desktop.jpg");
                        background-position: left top;
                        background-size: cover;
                        background-repeat: no-repeat;
                        display: flex;
                        flex-direction: column;
                        padding-top: 92px;
                        align-items: center;
                        justify-content: flex-start;
                        width: 50%;
                        height: 468px;
                    }

                    .form-container {
                        width: 100%;
                        height: 100%;
                        display: flex;
                        flex-direction: row
                    }

                    .close-button-container {
                        width: 100%;
                        height: 24px;
                        display: flex;
                        justify-content: flex-start;
                        align-items: flex-start;
                        margin-left: 12px;
                        color: black;
                        margin-top: 0px;
                    }

                    .modal-content {
                        background-color: transparent;
                        width: 703px;
                    }

                    .my-form-styling {
                        outline: none;
                        font-family: 'Source Code Pro', monospace;
                        margin-bottom: 1rem;
                        width: 100%;
                        height: 40px;
                        font-size: 16px;
                        padding: 0.375rem 0.75rem;
                        font-weight: 400;
                        line-height: 1.5;
                        color: #212529;
                        background-color: #fff;
                        background-clip: padding-box;
                        border: 1px solid #ced4da;
                        appearance: none;
                        border-radius: 0.25rem;
                        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                    }

                    .popup-form {
                        border-radius: 10px;
                        max-width: 100%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        flex-direction: column;
                        width: 100%;
                    }

                    .input-container-mobile {
                        display: none;
                    }

                    /** mobile media queries start here */
                    @media screen and (max-width: 768px) {
                        .input-container-mobile {
                            display: inline-block;
                            min-width: 375px;
                            width: 100%;
                            height: 512px;
                            display: flex;
                            padding-top: 10px;
                            align-items: flex-start;
                            justify-content: center;
                            background-color: white;
                        }

                    }

                    @media screen and (max-width: 1012px) {

                        .input-container-mobile {
                            display: inline-block;
                            /* min-width: 375px; */
                            width: 100%;
                            height: 100%;
                            display: flex;
                            align-items: flex-start;
                            justify-content: center;
                            background-color: white;
                            max-width: 500px;
                            padding-top: 0px;
                        }

                        .input-container {
                            display: none;
                        }

                        .get-onboard-container {
                            display: none;
                        }

                        .form-container {
                            width: 100%;
                            height: 100%;
                            display: flex;
                            padding: 0px !important;
                            justify-content: center;
                            align-items: center;
                            flex-direction: column;
                        }

                        .popup-form-header {
                            font-family: 'Inter', sans-serif;
                            font-weight: 200 !important;
                            padding-top: 20px;
                            line-height: 2rem;
                            text-align: center;
                            color: red;
                        }
                    }
                </style>
            </div>
        </div>
    </div>

</body>

</html>


<script>
    $(document).ready(function () {

        // conditionally setting the sessions seconds
        var secondsToDisplayModal = sessionStorage['displayModal'] != undefined ? parseInt(sessionStorage[
            'displayModal']) : 0;

        //displaying modal after 30 seconds
        const formModalTimer = setInterval(() => {
            const iteratedSeconds = secondsToDisplayModal++;
            iteratedSeconds.toString();
            sessionStorage['displayModal'] = iteratedSeconds;
            if ((sessionStorage['displayModal'] == '15') && (sessionStorage['timer'] == 'running')) {

                $(`#formPopupModal-${sessionStorage['selectedForm']}`).modal('toggle');

                //creating a variable so we can pass as utm_data
                var popupModal = `Content Popup Modal ${sessionStorage['selectedForm']}`;
                var utmData =
                    'google | cpc | Social_Media_Agency | g | Social_Media_Agency | ad agency company' +
                    ' | ' + popupModal;

                //assigning string data to our form fields
                const elements = [

                    'utmDataField',
                    'utmDataFieldTwo',
                    'utmDataFieldThree',
                    'utmDataFieldFour',
                    'utmDataFieldFive',
                    'utmDataFieldSix',

                    'utmButtonDesktopOne',
                    'utmButtonMobileOne',

                    'utmButtonMobileTwo',
                    'utmButtonDesktopTwo',

                    'utmButtonDesktopThree',
                    'utmButtonMobileThree',

                    'utmButtonMobileFour',
                    'utmButtonDesktopFour',
                ];

                elements.map((element) => {
                    if (document.getElementById(element) !== null) {
                        const x = document.getElementById(element);
                        x.value = utmData;
                    }
                });
            }

            if (sessionStorage['displayModal'] == '16') {
                clearInterval(formModalTimer)
            }
        }, 1000);

    });

    //stops page from bouncing after modal is closed
    $('#buttonModal').on('hidden.bs.modal', function (event) {
        event.preventDefault();
        event.stopPropagation();
        event.stopImmediatePropagation();
        return false;
    });

    //stops page from bouncing after modal is closed
    $('#disclaimerModal').on('hidden.bs.modal', function (event) {
        event.preventDefault();
        event.stopPropagation();
        event.stopImmediatePropagation();
        return false;
    });
</script>

<script>
    //stops timer for popup modal checks to toggle modal, sets utmData
    function getButtonId(buttonClicked) {
        sessionStorage['timer'] = 'stop';
        var buttonClicked = buttonClicked.name;

        if (buttonClicked.toLowerCase() != "footer form") {
            $(`#buttonModal-${sessionStorage['selectedForm']}`).modal('toggle');
        }

        if (buttonClicked != null) {
            var utmData = 'google | cpc | Social_Media_Agency | g | Social_Media_Agency | ad agency company |' +
                `${buttonClicked} ${sessionStorage['selectedForm']}`;
        } else {
            var utmData = 'google | cpc | Social_Media_Agency | g | Social_Media_Agency | ad agency company';
        }

        const buttonElements = [

            'utmDataField',
            'utmDataFieldTwo',
            'utmDataFieldThree',
            'utmDataFieldFour',
            'utmDataFieldFive',
            'utmDataFieldSix',

            'utmButtonDesktopOne',
            'utmButtonMobileOne',

            'utmButtonMobileTwo',
            'utmButtonDesktopTwo',

            'utmButtonDesktopThree',
            'utmButtonMobileThree',

            'utmButtonMobileFour',
            'utmButtonDesktopFour',

        ];

        buttonElements.map((element) => {
            if (document.getElementById(element) !== null) {
                const x = document.getElementById(element);
                x.value = utmData;
            }
        });
    }
</script>

<style>
    /* body {
    font-family: 'Inter', sans-serif;
  } */

    html,
    body {
        margin: 0;
        overflow-x: hidden;
        overflow-y: overlay;
    }

    input[type="text"] {
        font-size: 16px;
    }

    .modal-content {
        border: none;
    }

    .index-popup-content {
        width: 65%;
        height: 100%;
        border: none;
        align-items: center;
    }

    .modal-dialog {
        display: flex;
        width: 100%;
        margin: 0;
        max-width: 100%;
        align-items: center;
        justify-content: center;
    }

    .modal-container {
        display: flex;
        width: 100%;
        height: 37rem;
    }

    .modal-button-container {
        width: 100%;
    }

    @media screen and (min-width: 1013px) {
        .form-popup-modal {
            display: none;
            justify-content: center;
            align-items: center;
            margin-top: 75px;
            height: 38rem;
        }

        .form-button-popup-modal {
            margin-top: 75px;
            height: 38rem;
        }
    }

    @media screen and (max-width: 1012px) {
        .index-popup-content {
            width: 100%;
        }

        .mobile-form-popup-modal {
            display: none;
            justify-content: center;
            align-items: flex-start;
            margin-top: 65px;
            height: 32rem;
        }

        .mobile-button-form-popup-modal {
            display: none;
            justify-content: center;
            align-items: flex-start;
            margin-top: 55px;
            height: 35rem;
        }
    }
</style>