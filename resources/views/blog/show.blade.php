<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $article['title'] }} | Family Dental Blog</title>
    <meta name="description" content="{{ $article['excerpt'] }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
</head>
<body>

    <!-- Header Navigation -->
    <header>
        <div class="container header-inner">
            <a href="/" class="logo">FamilyDental.</a>
            <button class="mobile-menu-toggle" aria-label="Toggle menu">
                <i class="fas fa-bars"></i>
            </button>
            <nav>
                <a href="/"><i class="fas fa-home"></i> Home</a>
                <a href="/services"><i class="fas fa-tooth"></i> Services</a>
                <a href="/services#aligners"><i class="fas fa-teeth"></i> Aligners</a>
                <a href="/services#implants"><i class="fas fa-teeth-open"></i> Implants</a>
                <a href="/services#doctor-bio"><i class="fas fa-user-md"></i> Dr. Farhana</a>
                <a href="/blog" class="active"><i class="fas fa-newspaper"></i> Blog</a>
                <a href="/#contact"><i class="fas fa-map-marker-alt"></i> Contact</a>
            </nav>
        </div>
    </header>

    <main style="padding-top: 8rem;">
        <!-- Article Header Section -->
        <section class="article-header-section">
            <div class="container">
                <a href="{{ route('blog.index') }}" class="back-blog-link">
                    <i class="fas fa-arrow-left"></i> Back to All Articles
                </a>
                <div class="article-meta-badge">
                    <span class="category-tag">{{ $article['category'] }}</span>
                    <span class="publish-date"><i class="far fa-calendar"></i> {{ $article['date'] }}</span>
                    <span class="reading-time"><i class="far fa-clock"></i> {{ $article['read_time'] }}</span>
                </div>
                <h1 class="article-main-title">{{ $article['title'] }}</h1>
                
                <div class="article-cover-image">
                    <img src="{{ $article['image'] }}" alt="{{ $article['title'] }}">
                </div>
            </div>
        </section>

        <!-- Article Content Section -->
        <section class="article-body-section" style="padding-top: 0;">
            <div class="container article-layout-grid">
                <!-- Left: Article Body -->
                <article class="article-rich-text">
                    {!! $article['content'] !!}
                    
                    <div class="article-share-box">
                        <h4>Share this article:</h4>
                        <div class="share-buttons">
                            <a href="https://wa.me/?text={{ urlencode(url()->current()) }}" target="_blank" style="background: #25d366;"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}" target="_blank" style="background: #1da1f2;"><i class="fab fa-twitter"></i> Twitter</a>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" style="background: #1877f2;"><i class="fab fa-facebook-f"></i> Facebook</a>
                        </div>
                    </div>
                </article>

                <!-- Right: Sidebar -->
                <aside class="article-sidebar">
                    <!-- CTA Widget -->
                    <div class="sidebar-cta-widget">
                        <i class="fas fa-user-md cta-widget-icon"></i>
                        <h3>Consult Dr. Farhana (BDS)</h3>
                        <p>Discuss Smile Corrections, Dental Veneers, Clear Aligners or Dental Implants with Dr. Farhana. Serving Oachira, Kayamkulam & surrounding areas.</p>
                        <a href="tel:+917012761098" class="btn btn-primary" style="width: 100%;">
                            <i class="fas fa-phone-alt"></i> Call +91 70127 61098
                        </a>
                        <a href="https://wa.me/917012761098?text={{ urlencode('Hello Dr. Farhana, I read your article on ' . $article['title'] . ' and would like to book a consultation.') }}" target="_blank" class="btn btn-outline" style="width: 100%; margin-top: 0.75rem; background: white;">
                            <i class="fab fa-whatsapp"></i> Chat on WhatsApp
                        </a>
                    </div>

                    <!-- Related Articles Widget -->
                    <div class="sidebar-related-widget">
                        <h3>Related Articles</h3>
                        <div class="related-list">
                            @foreach($related as $post)
                                <a href="{{ route('blog.show', $post['slug']) }}" class="related-item-card">
                                    <div class="related-img">
                                        <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}">
                                    </div>
                                    <div class="related-info">
                                        <span class="related-category">{{ $post['category'] }}</span>
                                        <h4>{{ $post['title'] }}</h4>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </aside>
            </div>
        </section>
    </main>

    <!-- Premium Footer -->
    <footer id="contact">
        <div class="container">
            <div class="footer-grid">
                <!-- Brand Column -->
                <div class="footer-brand">
                    <a href="/" class="footer-logo">FamilyDental.</a>
                    <p>Family Dental Care • Serving Oachira, Kayamkulam & Surrounding Areas. Smile Corrections, Dental Veneers, Clear Aligners & Dental Implants.</p>
                </div>
                
                <!-- Quick Links Column -->
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/services">Services Hub</a></li>
                        <li><a href="/services#doctor-bio">Dr. Farhana (BDS)</a></li>
                        <li><a href="/blog">Dental Blog</a></li>
                    </ul>
                </div>

                <!-- Services Column -->
                <div class="footer-col">
                    <h4>Our Treatments</h4>
                    <ul>
                        <li><a href="/services#aligners">Clear Aligners</a></li>
                        <li><a href="/services#implants">Dental Implants</a></li>
                        <li><a href="/services#root-canal">Single-Sitting RCT</a></li>
                        <li><a href="/services#root-canal">Ultrasonic Scaling</a></li>
                    </ul>
                </div>

                <!-- Contact Column -->
                <div class="footer-col">
                    <h4>Contact & Hours</h4>
                    <div class="footer-contact-item">
                        <span><i class="fas fa-map-marker-alt"></i></span>
                        <span>Kanjippuzha Pallimukk,<br>Changankulangara - Kambisseri Rd,<br>Vallikunnam, Kerala 690501</span>
                    </div>
                    <div class="footer-contact-item">
                        <span><i class="fas fa-phone-alt"></i></span>
                        <span><a href="tel:+917012761098" style="color: inherit; text-decoration: none;">+91 70127 61098</a></span>
                    </div>
                    <div class="footer-contact-item">
                        <span><i class="far fa-clock"></i></span>
                        <span>Mon - Sat: 9:00 AM - 6:30 PM<br>Sunday: Closed</span>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} Family Dental Care. All rights reserved. Designed for Excellence.</p>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.querySelector('.mobile-menu-toggle');
            const nav = document.querySelector('nav');
            
            if (menuToggle && nav) {
                menuToggle.addEventListener('click', function(e) {
                    e.stopPropagation();
                    nav.classList.toggle('active');
                    const icon = menuToggle.querySelector('i');
                    if (nav.classList.contains('active')) {
                        icon.className = 'fas fa-times';
                    } else {
                        icon.className = 'fas fa-bars';
                    }
                });

                document.addEventListener('click', function(e) {
                    if (nav.classList.contains('active') && !nav.contains(e.target) && !menuToggle.contains(e.target)) {
                        nav.classList.remove('active');
                        menuToggle.querySelector('i').className = 'fas fa-bars';
                    }
                });
            }
        });
    </script>
</body>
</html>
