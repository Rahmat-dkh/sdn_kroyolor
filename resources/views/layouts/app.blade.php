<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    <style>
        :root {
            --primary-color: #004d40; /* Dark Teal */
            --secondary-color: #6c757d;
            --accent-color: #ffc107;
            --dark-color: #212529;
            --light-bg: #f8f9fa;
        }
        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--light-bg);
            color: #333;
        }
        h1, h2, h3, h4, h5, h6, .navbar-brand {
            font-family: 'Outfit', sans-serif;
        }
        
        /* Global Color Override */
        .text-primary {
            color: var(--primary-color) !important;
        }
        .btn-primary {
            background-color: var(--primary-color) !important;
            border-color: var(--primary-color) !important;
        }
        .btn-outline-primary {
            color: var(--primary-color) !important;
            border-color: var(--primary-color) !important;
        }
        .btn-outline-primary:hover {
            background-color: var(--primary-color) !important;
            color: #fff !important;
        }
        
        /* Navbar Base */
        .navbar {
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0.95) !important;
            padding: 0.5rem 0;
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }

        .navbar-brand {
            color: var(--primary-color) !important;
        }


        .nav-link {
            font-weight: 500;
            font-size: 0.95rem;
            color: var(--dark-color) !important;
            position: relative;
            transition: all 0.3s ease;
            padding: 0.5rem 1.2rem !important;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            left: 1.2rem;
            right: 1.2rem;
            height: 3px;
            bottom: 0;
            background-color: var(--primary-color);
            transition: all 0.3s ease;
            transform: scaleX(0);
            opacity: 0;
            z-index: 10;
            border-radius: 2px;
        }
        .nav-link:hover, .nav-item.dropdown:hover > .nav-link {
            color: var(--primary-color) !important;
        }
        .nav-link:hover::after, 
        .nav-link.active::after, 
        .nav-item.dropdown:hover > .nav-link::after {
            transform: scaleX(1);
            opacity: 1;
        }
        .nav-link.active {
            color: var(--primary-color) !important;
            font-weight: 600;
        }

        /* Hover Dropdown Logic */
        @media (min-width: 992px) {
            .nav-item.dropdown:hover > .dropdown-menu {
                display: block;
                opacity: 1;
                visibility: visible;
                transform: translateY(0);
            }
            .dropdown-menu {
                display: block;
                opacity: 0;
                visibility: hidden;
                transform: translateY(10px);
                transition: all 0.3s ease;
                margin-top: 15px; /* Positioned below the underline */
            }
        }

        .dropdown-menu {
            border: none;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            border-radius: 12px;
            padding: 0.5rem;
            background-color: #ffffff !important;
            min-width: 220px;
            border: 1px solid rgba(0,0,0,0.05);
        }
        .dropdown-item {
            color: var(--dark-color) !important;
            padding: 0.6rem 1.2rem;
            border-radius: 8px;
            transition: all 0.2s ease;
            font-weight: 500;
            font-size: 0.9rem; /* Reduced font size */
            display: flex;
            align-items: center;
        }
        .dropdown-item:hover {
            background-color: #f0f7f4 !important; /* Very light teal bg */
            color: var(--primary-color) !important;
            padding-left: 1.5rem;
        }
        .dropdown-item i:first-child {
            font-size: 0.95rem; /* Slightly smaller icons */
            color: #444;
            width: 25px;
            margin-right: 10px;
            text-align: center;
            transition: all 0.2s ease;
        }
        .dropdown-item:hover i:first-child {
            color: var(--primary-color);
        }
        .dropdown-toggle::after {
            display: none !important;
        }
        /* Hamburger Animation */
        .hamburger-icon {
            width: 24px;
            height: 20px;
            position: relative;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .hamburger-icon span {
            display: block;
            width: 100%;
            height: 2px;
            background-color: var(--primary-color);
            transition: all 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
            border-radius: 2px;
        }
        .navbar-toggler:not(.collapsed) .hamburger-icon span:nth-child(1) {
            transform: translateY(9px) rotate(45deg);
        }
        .navbar-toggler:not(.collapsed) .hamburger-icon span:nth-child(2) {
            opacity: 0;
            transform: translateX(-10px);
        }
        .navbar-toggler:not(.collapsed) .hamburger-icon span:nth-child(3) {
            transform: translateY(-9px) rotate(-45deg);
        }

        /* Mobile Navbar Style */
        @media (max-width: 991.98px) {
            .navbar-collapse {
                background-color: #ffffff;
                margin: 0.5rem -1rem -0.8rem;
                padding: 1.5rem;
                border-top: 1px solid rgba(0,0,0,0.05);
            }
            .nav-link {
                color: var(--dark-color) !important;
                padding: 0.75rem 0.5rem !important;
                font-weight: 400;
                font-size: 1rem;
                display: flex;
                justify-content: space-between;
                align-items: center;
                border-bottom: 1px solid #f2f2f2;
                border-radius: 8px;
                transition: all 0.2s ease;
            }
            .nav-link[aria-expanded="true"] {
                background-color: #f0f7ff !important;
                color: #0d6efd !important;
                padding-left: 1rem !important;
                padding-right: 1rem !important;
                margin-bottom: 0.25rem;
            }
            .nav-link::after {
                display: none;
            }
            .dropdown-menu {
                box-shadow: none;
                border: none;
                border-radius: 0;
                margin: 0;
                padding: 0 0 0.5rem 1rem;
                background-color: transparent !important;
            }
            .dropdown-item {
                padding: 0.5rem 0;
                border-bottom: none;
                font-size: 0.95rem;
                color: #555 !important;
            }
            .btn-cta-wrapper {
                text-align: center;
                width: 100%;
                margin-top: 1.5rem;
            }
            .btn-cta {
                width: auto !important;
                min-width: 200px;
                padding: 0.6rem 2rem !important;
                font-size: 1rem;
                border-radius: 50px !important;
                display: inline-block !important;
            }
        }

        /* Chevron Animation for Mobile Aria-Expanded */
        .nav-link[aria-expanded="true"] i.bi-chevron-down {
            transform: rotate(180deg);
            color: #0d6efd;
        }

        .nav-link i.bi-chevron-down {
            font-size: 0.8rem;
            transition: transform 0.3s ease, color 0.3s ease;
            color: #444;
        }
        
        /* Keep desktop hover rotation if needed, but prioritize aria-expanded for mobile */
        @media (min-width: 992px) {
            .nav-item.dropdown:hover .nav-link i.bi-chevron-down {
                transform: rotate(180deg);
                color: var(--primary-color);
            }
        }

        .hero-section {
            background: linear-gradient(135deg, rgba(0, 77, 64, 0.95), rgba(0, 77, 64, 0.8)), url('/images/hero-bg.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 140px 0 100px;
            clip-path: ellipse(150% 100% at 50% 0%);
        }
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 16px;
            overflow: hidden;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1) !important;
        }
        .info-card {
            background: #ffffff;
            border: 1px solid rgba(0,0,0,0.05);
            border-radius: 20px;
            padding: 2rem;
            height: 100%;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(0,0,0,0.03);
            text-align: left;
        }
        .info-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(0, 77, 64, 0.1) !important;
            border-color: rgba(0, 77, 64, 0.1);
        }
        .info-icon {
            width: 50px;
            height: 50px;
            background-color: var(--primary-color);
            color: #ffffff;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 8px 15px rgba(0, 77, 64, 0.2);
        }
        .info-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: #1a1d20;
            margin-bottom: 1rem;
        }
        .info-text {
            font-size: 0.95rem;
            color: #6c757d;
            line-height: 1.6;
            margin-bottom: 0;
        }
        .info-card-alt {
            padding: 0.5rem;
            transition: all 0.3s ease;
        }
        .info-icon-large {
            width: 80px;
            height: 80px;
            background-color: var(--primary-color);
            color: #ffffff;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.2rem;
            transition: all 0.5s ease;
            box-shadow: 0 8px 20px rgba(0, 77, 64, 0.15);
        }
        @media (max-width: 768px) {
            .info-icon-large {
                width: 70px;
                height: 70px;
                font-size: 1.8rem;
            }
            .display-5 {
                font-size: 2rem;
            }
        }
        .info-card-alt:hover .info-icon-large {
            transform: scale(1.05) rotate(5deg);
            border-radius: 50%;
        }
        footer {
            background-color: #1a1d20;
            color: #dee2e6;
            padding: 60px 0 30px;
        }
        .btn-primary {
            border-radius: 10px;
            padding: 0.6rem 1.5rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-cta {
            background-color: var(--primary-color) !important;
            color: #ffffff !important;
            border: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 77, 64, 0.2);
        }
        .btn-cta:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 77, 64, 0.3);
            background-color: #00332c !important; /* Slightly darker teal */
        }
        /* Footer Styling */
        .footer {
            background-color: var(--primary-color) !important;
            font-family: 'Inter', sans-serif;
            color: rgba(255, 255, 255, 0.8);
            margin-top: 2rem; /* Add clear distance from content */
        }
        .brand-icon-wrapper {
            width: 40px;
            height: 40px;
            background: #ffffff;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .brand-icon-wrapper i {
            color: var(--primary-color) !important;
            font-size: 1.2rem;
        }
        .social-icon {
            width: 34px;
            height: 34px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            text-decoration: none;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .social-icon:hover {
            background-color: #ffffff;
            color: var(--primary-color);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        .footer-links li {
            margin-bottom: 0.4rem;
        }
        .footer-links a {
            color: rgba(255, 255, 255, 0.7) !important;
            text-decoration: none;
            transition: all 0.2s ease;
            font-size: 0.85rem;
        }
        .footer-links a:hover {
            color: #ffffff !important;
            padding-left: 5px;
        }
        .contact-icon {
            width: 28px;
            height: 28px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        .contact-icon i {
            font-size: 0.8rem;
        }
        .bg-white-10 {
            background-color: rgba(255, 255, 255, 0.1) !important;
        }
        footer hr {
            border-color: rgba(255, 255, 255, 0.1) !important;
        }
    </style>
</head>
<body>

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
