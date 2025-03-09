<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediClinic - Healthcare Excellence</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #1e88e5;
            --primary-dark: #1565c0;
            --secondary: #26c6da;
            --light: #f5f7fa;
            --dark: #263238;
            --gray: #757575;
        }
        
        body {
            font-family: 'Roboto', sans-serif;
            color: var(--dark);
        }
        
        .bg-primary-custom {
            background-color: var(--primary);
        }
        
        .btn-primary-custom {
            background-color: var(--primary);
            border-color: var(--primary);
            color: white;
            padding: 10px 25px;
            font-weight: 500;
            border-radius: 5px;
        }
        
        .btn-primary-custom:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
            color: white;
        }
        
        .btn-outline-primary-custom {
            background-color: transparent;
            border-color: var(--primary);
            color: var(--primary);
            padding: 10px 25px;
            font-weight: 500;
            border-radius: 5px;
        }
        
        .btn-outline-primary-custom:hover {
            background-color: var(--primary);
            color: white;
        }
        
        .navbar {
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .hero-section {
            background: linear-gradient(135deg, rgba(30,136,229,0.9) 0%, rgba(21,101,192,0.9) 100%), url('https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?ixlib=rb-4.0.3') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 120px 0;
        }
        
        .feature-box {
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: transform 0.3s ease;
            height: 100%;
            background-color: white;
        }
        
        .feature-box:hover {
            transform: translateY(-10px);
        }
        
        .feature-icon {
            width: 70px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background-color: rgba(30,136,229,0.1);
            color: var(--primary);
            font-size: 28px;
            margin-bottom: 20px;
        }
        
        .service-card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            height: 100%;
            transition: transform 0.3s ease;
        }
        
        .service-card:hover {
            transform: translateY(-5px);
        }
        
        .service-img {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }
        
        .testimonial-section {
            background-color: #f5f7fa;
        }
        
        .testimonial-card {
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            background-color: white;
            position: relative;
            margin-top: 30px;
        }
        
        .testimonial-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            position: absolute;
            top: -30px;
            left: 25px;
            border: 4px solid white;
        }
        
        .cta-section {
            background: linear-gradient(135deg, #26c6da 0%, #00acc1 100%);
            color: white;
        }
        
        .footer {
            background-color: #263238;
            color: #b0bec5;
            padding: 60px 0 30px;
        }
        
        .footer-heading {
            color: white;
            margin-bottom: 20px;
        }
        
        .footer-link {
            color: #b0bec5;
            text-decoration: none;
            display: block;
            margin-bottom: 10px;
            transition: all 0.2s;
        }
        
        .footer-link:hover {
            color: white;
            transform: translateX(5px);
        }
        
        .social-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(255,255,255,0.1);
            color: white;
            margin-right: 10px;
            transition: all 0.3s;
        }
        
        .social-icon:hover {
            background-color: var(--primary);
            transform: translateY(-3px);
        }
        
        .stats-counter {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="fas fa-heartbeat text-primary me-2"></i>
                <span class="fw-bold">MediClinic</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route(name: 'home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#doctors">Doctors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="{{ route('login') }}" class="btn btn-outline-primary-custom me-2">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-primary-custom">Register</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Your Health Is Our Top Priority</h1>
                    <p class="lead mb-4">Experience world-class healthcare with state-of-the-art facilities and compassionate medical professionals dedicated to your wellbeing.</p>
                    <div class="d-flex gap-3">
                        <a href="#appointment" class="btn btn-light btn-lg">Book Appointment</a>
                        <a href="#services" class="btn btn-outline-light btn-lg">Our Services</a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <img src="https://images.unsplash.com/photo-1638202993928-7267aad84c31?ixlib=rb-4.0.3" alt="Doctor Team" class="img-fluid rounded-4 shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h4>Expert Doctors</h4>
                        <p>Our team consists of highly qualified medical professionals with years of experience in their respective fields.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-hospital"></i>
                        </div>
                        <h4>Modern Facilities</h4>
                        <p>State-of-the-art equipment and facilities to provide the best possible care for all patients.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h4>24/7 Services</h4>
                        <p>Round-the-clock medical services to ensure you receive care whenever you need it.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-5 bg-light" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://images.unsplash.com/photo-1631815588090-c4c39a106iwe?ixlib=rb-4.0.3" alt="Clinic Building" class="img-fluid rounded-4 shadow">
                </div>
                <div class="col-lg-6">
                    <h2 class="mb-4">About MediClinic</h2>
                    <p class="lead">Providing exceptional healthcare services for over 15 years.</p>
                    <p>MediClinic was founded with a mission to deliver accessible, high-quality healthcare to our community. Our dedicated team of healthcare professionals strives to provide personalized care that meets the unique needs of each patient.</p>
                    <div class="row mt-4">
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-check-circle text-primary me-2"></i>
                                <span>Qualified Doctors</span>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-check-circle text-primary me-2"></i>
                                <span>Emergency Services</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-check-circle text-primary me-2"></i>
                                <span>Online Appointments</span>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-check-circle text-primary me-2"></i>
                                <span>Medical Counseling</span>
                            </div>
                        </div>
                    </div>
                    <a href="#contact" class="btn btn-primary-custom mt-3">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-5" id="services">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Our Medical Services</h2>
                <p class="text-muted">Comprehensive healthcare solutions for you and your family</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="service-card">
                        <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-4.0.3" class="service-img" alt="Cardiology">
                        <div class="p-4">
                            <h4>Cardiology</h4>
                            <p>Comprehensive heart care services including diagnosis, treatment, and preventive care.</p>
                            <a href="#" class="btn btn-sm btn-outline-primary-custom">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <img src="https://images.unsplash.com/photo-1609840114035-3c981b782573?ixlib=rb-4.0.3" class="service-img" alt="Neurology">
                        <div class="p-4">
                            <h4>Neurology</h4>
                            <p>Expert care for conditions affecting the brain, spinal cord, and nervous system.</p>
                            <a href="#" class="btn btn-sm btn-outline-primary-custom">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <img src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?ixlib=rb-4.0.3" class="service-img" alt="Pediatrics">
                        <div class="p-4">
                            <h4>Pediatrics</h4>
                            <p>Specialized healthcare for infants, children, and adolescents.</p>
                            <a href="#" class="btn btn-sm btn-outline-primary-custom">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="#" class="btn btn-primary-custom">View All Services</a>
            </div>
        </div>
    </section>

    <!-- Doctors Section -->
    <section class="py-5 bg-light" id="doctors">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Meet Our Doctors</h2>
                <p class="text-muted">Experienced healthcare professionals committed to your wellbeing</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3" class="card-img-top" alt="Doctor">
                        <div class="card-body text-center">
                            <h5 class="card-title">Dr. Sarah Johnson</h5>
                            <p class="text-primary mb-1">Cardiologist</p>
                            <p class="small text-muted">15+ years of experience in treating heart conditions</p>
                            <div class="d-flex justify-content-center gap-2 mt-3">
                                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?ixlib=rb-4.0.3" class="card-img-top" alt="Doctor">
                        <div class="card-body text-center">
                            <h5 class="card-title">Dr. Michael Chen</h5>
                            <p class="text-primary mb-1">Neurologist</p>
                            <p class="small text-muted">Specializes in brain and nervous system disorders</p>
                            <div class="d-flex justify-content-center gap-2 mt-3">
                                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?ixlib=rb-4.0.3" class="card-img-top" alt="Doctor">
                        <div class="card-body text-center">
                            <h5 class="card-title">Dr. Emily Rodriguez</h5>
                            <p class="text-primary mb-1">Pediatrician</p>
                            <p class="small text-muted">Providing compassionate care for children of all ages</p>
                            <div class="d-flex justify-content-center gap-2 mt-3">
                                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="https://images.unsplash.com/photo-1537368910025-700350fe46c7?ixlib=rb-4.0.3" class="card-img-top" alt="Doctor">
                        <div class="card-body text-center">
                            <h5 class="card-title">Dr. James Wilson</h5>
                            <p class="text-primary mb-1">Orthopedist</p>
                            <p class="small text-muted">Expert in treating musculoskeletal conditions</p>
                            <div class="d-flex justify-content-center gap-2 mt-3">
                                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Appointment Section -->
    <section class="py-5 bg-primary-custom text-white" id="appointment">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="fw-bold mb-4">Book Your Appointment Today</h2>
                    <p class="lead mb-4">Schedule a visit with our healthcare professionals quickly and easily.</p>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="fas fa-check-circle me-2"></i> Choose your preferred doctor</li>
                        <li class="mb-2"><i class="fas fa-check-circle me-2"></i> Select a convenient date and time</li>
                        <li class="mb-2"><i class="fas fa-check-circle me-2"></i> Receive confirmation instantly</li>
                        <li><i class="fas fa-check-circle me-2"></i> Get reminders before your appointment</li>
                    </ul>
                    <p>Need immediate assistance? Call us at <strong>(123) 456-7890</strong></p>
                </div>
                <div class="col-lg-6">
                    <div class="card border-0 rounded-4 shadow">
                        <div class="card-body p-4">
                            <h4 class="text-center text-dark mb-4">Request an Appointment</h4>
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Full Name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" placeholder="Email Address">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="tel" class="form-control" placeholder="Phone Number">
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select">
                                            <option selected disabled>Select Department</option>
                                            <option>Cardiology</option>
                                            <option>Neurology</option>
                                            <option>Pediatrics</option>
                                            <option>Orthopedics</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="date" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select">
                                            <option selected disabled>Preferred Time</option>
                                            <option>Morning</option>
                                            <option>Afternoon</option>
                                            <option>Evening</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" rows="3" placeholder="Brief description of your concern"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary-custom w-100">Book Appointment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-5" id="contact">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Get In Touch</h2>
                <p class="text-muted">We're here to help and answer any questions you might have</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="text-center mb-4">
                                <div class="feature-icon mx-auto">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <h4>Visit Us</h4>
                            </div>
                            <p class="text-center">123 Medical Center Blvd<br>Suite 500<br>Health City, CA 90210</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="text-center mb-4">
                                <div class="feature-icon mx-auto">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <h4>Call Us</h4>
                            </div>
                            <p class="text-center">Main: (123) 456-7890<br>Emergency: (123) 456-7777<br>Fax: (123) 456-7891</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="text-center mb-4">
                                <div class="feature-icon mx-auto">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <h4>Working Hours</h4>
                            </div>
                            <p class="text-center">Monday-Friday: 8:00 AM - 9:00 PM<br>Saturday: 9:00 AM - 5:00 PM<br>Sunday: 10:00 AM - 2:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <iframe class="w-100 rounded-4 shadow-sm" height="450" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.215132063662!2d-74.0060!3d40.7128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDQyJzQ2LjEiTiA3NMKwMDAnMjEuNiJX!5e0!3m2!1sen!2sus!4v1647282015693!5m2!1sen!2sus" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="mb-4">
                        <h5 class="footer-heading">About MediClinic</h5>
                        <p>MediClinic is a premier healthcare provider committed to delivering exceptional medical services with compassion and expertise. Our state-of-the-art facilities and dedicated team ensure the highest quality care for all patients.</p>
                    </div>
                    <div class="d-flex mb-4">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="footer-heading">Quick Links</h5>
                    <a href="#" class="footer-link">Home</a>
                    <a href="#about" class="footer-link">About Us</a>
                    <a href="#services" class="footer-link">Services</a>
                    <a href="#doctors" class="footer-link">Doctors</a>
                    <a href="#contact" class="footer-link">Contact</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="footer-heading">Our Services</h5>
                    <a href="#" class="footer-link">Cardiology</a>
                    <a href="#" class="footer-link">Neurology</a>
                    <a href="#" class="footer-link">Pediatrics</a>
                    <a href="#" class="footer-link">Orthopedics</a>
                    <a href="#" class="footer-link">Dermatology</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="footer-heading">Newsletter</h5>
                    <p>Subscribe to our newsletter for health tips and updates.</p>
                    <form class="mt-3">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Your Email" aria-label="Your Email">
                            <button class="btn btn-primary" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
            <hr class="mt-4 mb-4" style="border-color: rgba(255,255,255,0.1);">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2025 MediClinic. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">
                        <a href="#" class="text-decoration-none text-muted me-2">Privacy Policy</a>
                        <span class="text-muted">|</span>
                        <a href="#" class="text-decoration-none text-muted ms-2">Terms of Service</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to top button -->
    <a href="#" class="btn btn-primary-custom position-fixed bottom-0 end-0 m-4 rounded-circle" style="width: 45px; height: 45px; display: flex; align-items: center; justify-content: center; z-index: 1000;">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- Statistics Modal -->
    <div class="modal fade" id="statsModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary-custom text-white">
                    <h5 class="modal-title">Our Achievements</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row text-center g-4">
                        <div class="col-6">
                            <h2 class="stats-counter">15+</h2>
                            <p>Years of Experience</p>
                        </div>
                        <div class="col-6">
                            <h2 class="stats-counter">50+</h2>
                            <p>Medical Specialists</p>
                        </div>
                        <div class="col-6">
                            <h2 class="stats-counter">10k+</h2>
                            <p>Happy Patients</p>
                        </div>
                        <div class="col-6">
                            <h2 class="stats-counter">15+</h2>
                            <p>Medical Awards</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="#about" class="btn btn-primary-custom" data-bs-dismiss="modal">Learn More</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script>
        // Back to top button functionality
        document.addEventListener('DOMContentLoaded', function() {
            const backToTopBtn = document.querySelector('.btn-primary-custom.position-fixed');
            
            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 300) {
                    backToTopBtn.style.display = 'flex';
                } else {
                    backToTopBtn.style.display = 'none';
                }
            });
            
            // Hide button initially
            backToTopBtn.style.display = 'none';
            
            // Smooth scroll to top
            backToTopBtn.addEventListener('click', function(e) {
                e.preventDefault();
                window.scrollTo({top: 0, behavior: 'smooth'});
            });
        });
    </script>
</body>
</html>