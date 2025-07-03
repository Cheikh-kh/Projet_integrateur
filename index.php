<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Analysis Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        .hero {
            background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        .features {
            padding: 80px 0;
            background-color: #f8f9fa;
        }
        .feature-card {
            transition: transform 0.3s ease;
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .feature-card:hover {
            transform: translateY(-10px);
        }
        .cta-section {
            background-color: #fff;
            padding: 80px 0;
            text-align: center;
        }
        .footer {
            background-color: #34495e;
            color: white;
            padding: 30px 0;
            text-align: center;
        }
        .stats-section {
            background-color: #f8f9fa;
            padding: 80px 0;
        }
        .stat-card {
            border: none;
            background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
            color: white;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
        }
        .carousel-item {
            height: 400px;
        }
        .carousel-item img {
            object-fit: cover;
            height: 100%;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" alt="Web Analysis Logo" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#analysis">Analysis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary ms-2" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section with Carousel -->
    <section id="home" class="hero">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/hero1.jpg" class="d-block w-100" alt="Web Analysis Hero 1">
                    <div class="carousel-caption">
                        <h1>Welcome to Web Analysis Platform</h1>
                        <p class="lead">Comprehensive tools for analyzing and optimizing your web presence</p>
                        <a href="#analysis" class="btn btn-light btn-lg">Start Analysis</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/hero2.jpg" class="d-block w-100" alt="Web Analysis Hero 2">
                    <div class="carousel-caption">
                        <h1>Advanced Analytics</h1>
                        <p class="lead">Get deep insights into your website's performance</p>
                        <a href="#features" class="btn btn-light btn-lg">Learn More</a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="stat-card">
                        <h3>1000+</h3>
                        <p>Analyses Completed</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="stat-card">
                        <h3>95%</h3>
                        <p>Customer Satisfaction</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="stat-card">
                        <h3>24/7</h3>
                        <p>Support Available</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="stat-card">
                        <h3>100%</h3>
                        <p>Data Privacy</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features">
        <div class="container">
            <h2 class="text-center mb-5">Our Features</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card feature-card h-100">
                        <div class="card-body text-center">
                            <img src="img/performance-icon.png" alt="Performance Icon" class="mb-3" height="64">
                            <h3>Performance Analysis</h3>
                            <p>Analyze website performance metrics and identify optimization opportunities</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card feature-card h-100">
                        <div class="card-body text-center">
                            <img src="img/seo-icon.png" alt="SEO Icon" class="mb-3" height="64">
                            <h3>SEO Analysis</h3>
                            <p>Optimize your website for search engines and improve visibility</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card feature-card h-100">
                        <div class="card-body text-center">
                            <img src="img/analytics-icon.png" alt="Analytics Icon" class="mb-3" height="64">
                            <h3>User Analytics</h3>
                            <p>Track user behavior and engagement metrics</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2>Ready to Analyze Your Website?</h2>
                    <p class="lead">Start optimizing your web presence today with our comprehensive analysis tools</p>
                    <a href="#analysis" class="btn btn-primary btn-lg">Get Started</a>
                </div>
                <div class="col-md-6">
                    <img src="img/cta-image.png" alt="Analysis Preview" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>About Us</h5>
                    <p>Your trusted partner in web analysis and optimization</p>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#analysis">Analysis</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <p>Email: contact@webanalysis.com<br>
                       Phone: (555) 123-4567</p>
                </div>
            </div>
            <hr>
            <p class="text-center">&copy; 2025 Web Analysis Platform. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>
</html>