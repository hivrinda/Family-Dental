<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smile Corrections, Veneers, Aligners & Implants | FamilyDentalCare</title>
    <meta name="description"
        content="Explore Smile Corrections, Dental Veneers, Clear Aligners and Dental Implants with Dr. Farhana (BDS), serving Kayamkulam, Oachira and Karunagappally.">
    <meta name="keywords"
        content="dental clinic in Vallikunnam, dentist near me Kanjippuzha, best dental clinic Kambisseri, family dentist Kayamkulam, invisible aligners in Vallikunnam, dental implants in Vallikunnam, root canal treatment in Vallikunnam, Dr Farhana dentist Vallikunnam, female dentist in Vallikunnam">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://familydentalcare.in/">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ filemtime(public_path('css/style.css')) }}">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    @include('partials.dentist-schema')
</head>

<body class="home-page wireframe-page">

    <!-- Header Navigation -->
    @include('partials.site-navigation')

    <main>
        <!-- Hero Section -->
        <section class="hero">
            <div class="container hero-inner">
                <div class="hero-content">
                    <div class="location-badge">
                        <i class="fas fa-map-marker-alt"></i> Premier Cosmetic & Implant Dental Center • Serving Oachira, Kayamkulam & Surrounding Areas
                    </div>
                    <h1>Advanced Smile Corrections, Dental Veneers, <span class="serif-italic" style="color: var(--primary);">Clear Aligners & Dental Implants</span></h1>
                    <p>Experience precision digital dentistry, natural-looking porcelain veneers, discreet teeth straightening and long-term tooth replacement—combining modern techniques focused on your comfort with transparent pricing, just minutes from Oachira and Kayamkulam.</p>

                    <div class="hero-actions">
                        <a href="#booking" class="btn btn-primary"><i class="fas fa-calendar-alt" aria-hidden="true"></i> Book Free Smile Assessment</a>
                        <a href="https://wa.me/917012761098?text=Hello%20FamilyDentalCare%2C%20I%20would%20like%20a%20free%20smile%20assessment." target="_blank" rel="noopener noreferrer" class="btn btn-outline"><i class="fab fa-whatsapp" aria-hidden="true"></i> Chat on WhatsApp: +91 70127 61098</a>
                    </div>
                </div>

                <div class="hero-image-container">
                    <div class="hero-image">
                        <img src="https://images.unsplash.com/photo-1606811841689-23dfddce3e95?q=80&w=800&auto=format&fit=crop"
                            alt="Advanced Smile Corrections and Dental Veneers near Oachira and Kayamkulam">
                    </div>
                    <!-- Floating Badge 1 -->
                    <div class="floating-badge floating-badge-1">
                        <div class="badge-icon"><i class="fas fa-award"></i></div>
                        <div class="badge-text">
                            <h4>Smile Care</h4>
                            <p>Designed for You</p>
                        </div>
                    </div>
                    <!-- Floating Badge 2 -->
                    <div class="floating-badge floating-badge-2">
                        <div class="badge-icon"><i class="fas fa-smile"></i></div>
                        <div class="badge-text">
                            <h4>Your Smile</h4>
                            <p>Our Focus</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container hero-treatment-trust" aria-label="Treatment technology">
            <span><i class="fas fa-check-circle" aria-hidden="true"></i> Digital 3D Smile Design</span>
            <span><i class="fas fa-check-circle" aria-hidden="true"></i> Ultra-Thin Porcelain Veneers</span>
            <span><i class="fas fa-check-circle" aria-hidden="true"></i> Certified Clear Aligners</span>
            <span><i class="fas fa-check-circle" aria-hidden="true"></i> Long-Term Dental Implants</span>
        </div>
        <!-- Trust Bar Section -->
        <section class="trust-bar">
            <div class="container trust-inner">
                <div class="trust-item">
                    <div class="trust-value">4.9 <i class="fas fa-star" style="color: #fbbf24; font-size: 1.75rem;"></i>
                    </div>
                    <div class="trust-label">33 Google reviews</div>
                </div>
                <div class="trust-item">
                    <div class="trust-value">8+</div>
                    <div class="trust-label">Years experience</div>
                </div>
                <div class="trust-item">
                    <div class="trust-value"><i class="fas fa-check-circle"
                            style="color: var(--primary); font-size: 2.25rem;"></i></div>
                    <div class="trust-label">BDS certified</div>
                </div>
            </div>
            <div class="scroll-indicator"><i class="fas fa-chevron-down"></i></div>
        </section>

        <!-- Bilingual Malayalam Key Info Snippet -->
        <div class="container">
            <div class="malayalam-snippet-card">
                <div class="malayalam-snippet-content">
                    <span class="malayalam-snippet-badge">
                        <i class="fas fa-language"></i> പ്രാദേശിക സേവനം • മലയാളം
                    </span>
                    <h3 class="malayalam-snippet-title">ഫാമിലി ഡെന്റൽ ക്ലിനിക്ക്, കാഞ്ഞിപ്പുഴ പള്ളിമുക്ക്</h3>
                    <p class="malayalam-snippet-text">
                        വള്ളിക്കുന്നം, കമ്പിശ്ശേരി, കായംകുളം ഭാഗത്തുള്ളവർക്ക് മികച്ച ഡെന്റൽ ചികിത്സ. അടിയന്തിര പല്ലുവേദനയ്ക്കും ഇംപ്ലാന്റ്, കമ്പിയിടാത്ത ഇൻവിസിബിൾ അലൈനർ ചികിത്സകൾക്കും ഡോ. ഫർഹാനയുടെ നേരിട്ടുള്ള പരിശോധന.
                    </p>
                    <div class="malayalam-snippet-timing">
                        <span><i class="far fa-clock"></i> തിങ്കൾ - ശനി: 9:00 AM - 6:30 PM</span>
                        <span><i class="fas fa-phone-alt"></i> അടിയന്തിര സഹായം: +91 70127 61098</span>
                    </div>
                </div>
                <div class="malayalam-snippet-actions">
                    <a href="https://wa.me/917012761098?text=ഹലോ%20ഡോക്ടർ,%20എനിക്ക്%20ചികിത്സയെക്കുറിച്ച്%20കൂടുതൽ%20അറിയണം." target="_blank" class="btn-malayalam-whatsapp">
                        <i class="fab fa-whatsapp"></i> WhatsApp ബുക്കിംഗ്
                    </a>
                    <a href="{{ url('/services') }}" class="btn-malayalam-call">
                        <i class="fas fa-tooth"></i> എല്ലാ സേവനങ്ങളും
                    </a>
                </div>
            </div>
        </div>

        @include('partials.flagship-services')

        @include('partials.treatment-pillars')

        @include('partials.comprehensive-care')

        @include('partials.doctor-authority')

        @include('partials.smile-gallery')

        @include('partials.regional-directions')

        @include('partials.smile-faq')

        <!-- Why Choose Us / Features Section (NEW) -->
        <section>
            <div class="container">
                <div class="section-header">
                    <h2>Why Choose FamilyDentalCare?</h2>
                    <p>We combine advanced technology with compassionate care.</p>
                </div>
                <div class="features-grid">
                    <div class="feature-item">
                        <div class="service-icon"><i class="fas fa-microscope"></i></div>
                        <h3>Advanced Technology</h3>
                        <p>We use state-of-the-art equipment for precise diagnostics and effective treatments.</p>
                    </div>
                    <div class="feature-item">
                        <div class="service-icon"><i class="fas fa-smile-beam"></i></div>
                        <h3>Pain-Free Experience</h3>
                        <p>Our priority is your comfort, utilizing modern techniques to minimize discomfort.</p>
                    </div>
                    <div class="feature-item">
                        <div class="service-icon"><i class="fas fa-tags"></i></div>
                        <h3>Affordable Pricing</h3>
                        <p>Premium dental care that fits your budget, with flexible payment options available.</p>
                    </div>
                    <div class="feature-item">
                        <div class="service-icon"><i class="fas fa-users"></i></div>
                        <h3>Family Friendly</h3>
                        <p>A welcoming environment designed to make patients of all ages feel right at home.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="testimonials" class="bg-alt">
            <div class="container">
                <div class="section-header">
                    <h2>Patient Experiences</h2>
                    <p>Read patient feedback on Google and speak with our team about what to expect from your treatment.</p>
                    <a class="btn btn-outline" href="https://maps.google.com/?cid=1155437812921048890" target="_blank" rel="noopener noreferrer">Read Google Reviews</a>
                </div>
            </div>
        </section>
        <!-- Blog Section -->
        <section class="home-blog-section">
            <div class="container">
                <div class="section-header">
                    <h2>Latest Dental Insights</h2>
                    <p>Read the latest guides and articles from our dental experts to keep your smile bright and
                        healthy.</p>
                </div>

                <div class="blog-grid-clean">
                    @foreach($latestArticles as $article)
                        <article class="blog-card-clean">
                            @if($article['image'])
                                <div class="blog-card-clean-image">
                                    <a href="{{ route('blog.show', $article['slug']) }}">
                                        <img src="{{ $article['image'] }}" alt="{{ $article['title'] }}">
                                    </a>
                                </div>
                            @endif
                            <div class="blog-card-clean-meta">
                                {{ \Carbon\Carbon::parse($article['created_at'])->format('F j, Y') }}
                            </div>
                            <h3 class="blog-card-clean-title">
                                <a href="{{ route('blog.show', $article['slug']) }}">{{ $article['title'] }}</a>
                            </h3>
                            <p class="blog-card-clean-excerpt">
                                {{ $article['excerpt'] }}
                            </p>
                            <a href="{{ route('blog.show', $article['slug']) }}" class="blog-card-clean-link">
                                Read more <span class="arrow-dot"><i class="fas fa-arrow-right"></i></span>
                            </a>
                        </article>
                    @endforeach
                </div>

                <div style="text-align: center; margin-top: 4rem;">
                    <a href="{{ route('blog.index') }}" class="btn btn-outline">
                        <i class="fas fa-newspaper"></i> View All Articles
                    </a>
                </div>
            </div>
        </section>



        @include('partials.smile-booking')

        <!-- Final CTA & Community Camp Offer -->
        <section class="cta-section">
            <div class="container cta-inner">
                <h2>Ready to Transform Your Smile?</h2>
                <p>Book your free consultation with Dr. Farhana (BDS) today. Discuss your treatment options, personalised smile plan and costs before you begin.</p>
                <div class="hero-actions" style="justify-content: center;">
                    <a href="tel:+917012761098" class="btn btn-primary">
                        <i class="fas fa-calendar-alt"></i> Book Free Consultation
                    </a>
                    <a href="https://wa.me/917012761098?text=Hello%20Dr.%20Farhana,%20I%20would%20like%20to%20book%20a%20consultation%20at%20Family%20Dental%20Clinic." target="_blank" class="btn btn-outline">
                        <i class="fab fa-whatsapp"></i> WhatsApp Us
                    </a>
                </div>

                <!-- Camp Offer Card -->
                <div id="community-outreach" class="camp-offer-banner" style="margin-top: 3rem; text-align: left;">
                    <div>
                        <span class="camp-offer-tag">COMMUNITY OUTREACH</span>
                        <h4 style="color: #92400e;">Free Oral Screening & 15% Scaling Discount</h4>
                        <p style="color: #78350f; font-size: 0.95rem; margin-bottom: 0;">Use Coupon Code: <strong>FD-CAMP15</strong> for your complimentary oral checkup and 15% discount on ultrasonic scaling.</p>
                    </div>
                    <a href="https://wa.me/917012761098?text=Hello%20Dr.%20Farhana,%20I%20would%20like%20to%20redeem%20the%20FD-CAMP15%20card." target="_blank" class="btn btn-primary" style="font-size: 0.9rem;">
                        Redeem via WhatsApp
                    </a>
                </div>

                <!-- Google Review Standee Card -->
                <div id="clinic-reviews" class="review-engine-banner" style="margin-top: 2rem; text-align: left;">
                    <div class="review-engine-info">
                        <div class="review-engine-stars">
                            <span class="review-rating-icons" aria-label="5 stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                            <span class="review-rating-label" style="color: #0f172a; font-weight: 700;">4.9 Rating • 33 Reviews</span>
                        </div>
                        <h3>Share Your Experience with FamilyDentalCare</h3>
                        <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 0;">
                            Have you visited Dr. Farhana recently? Take 30 seconds to support FamilyDentalCare with a Google Review. It helps local families find gentle, trustworthy dental care.
                        </p>
                    </div>
                    <a href="https://maps.google.com/?cid=1155437812921048890" target="_blank" class="btn-google-review">
                        <i class="fab fa-google"></i> Leave a Google Review
                    </a>
                </div>
            </div>
        </section>



        <!-- Location Map Section -->
        <section class="map-section bg-alt" id="location">
            <div class="container">
                <div class="map-header">
                    <h2>Visit Our Dental Center</h2>
                    <p>Conveniently located on Changankulangara - Kambisseri Road, Vallikunnam, Kerala 690501</p>
                </div>
                <div class="map-container">
                    <iframe title="FamilyDentalCare clinic location" src="https://maps.google.com/maps?q={{ config('clinic.latitude') }},{{ config('clinic.longitude') }}&amp;z=15&amp;output=embed" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                </div>
            </div>
        </section>
    </main>

    <!-- Premium Footer -->
    <footer id="contact">
        <div class="container">
            <div class="footer-grid">
                <!-- Brand Column -->
                <div class="footer-brand">
                    <a href="{{ url('/') }}" class="footer-logo">FamilyDentalCare</a>
                    <p>Cosmetic, implant and family dental care with Dr. Farhana (BDS), welcoming patients from Kayamkulam, Oachira and Karunagappally.</p>
                </div>

                <!-- Quick Links Column -->
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/services') }}">Services Hub</a></li>
                        <li><a href="{{ url('/services') }}#doctor-bio">Dr. Farhana (BDS)</a></li>
                        <li><a href="{{ url('/blog') }}">Dental Blog</a></li>
                    </ul>
                </div>

                <!-- Services Column -->
                <div class="footer-col">
                    <h4>Treatment Pillars</h4>
                    <ul>
                        <li><a href="{{ url('/services') }}#aligners">Invisible Aligners</a></li>
                        <li><a href="{{ url('/services') }}#implants">Dental Implants</a></li>
                        <li><a href="{{ url('/services') }}#root-canal">Single-Sitting RCT</a></li>
                        <li><a href="{{ url('/services') }}#root-canal">Ultrasonic Scaling</a></li>
                    </ul>
                </div>

                <!-- Contact Column -->
                <div class="footer-col">
                    <h4>Contact & Hours</h4>
                    <div class="footer-contact-item">
                        <span><i class="fas fa-map-marker-alt"></i></span>
                        <span>Kanjippuzha Pallimukk, Changankulangara Kambisseri Road, Vallikunnam, Kerala 690501</span>
                    </div>
                    <div class="footer-contact-item">
                        <span><i class="fas fa-phone-alt"></i></span>
                        <span><a href="tel:+917012761098" style="color: inherit; text-decoration: none;">+91 70127
                                61098</a></span>
                    </div>
                    <div class="footer-contact-item">
                        <span><i class="far fa-clock"></i></span>
                        <span>Mon - Sat: 9:00 AM - 6:30 PM<br>Sunday: Closed</span>
                    </div>
                </div>
            </div>

            @include('partials.catchment-footer')

            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} FamilyDentalCare. All rights reserved. Designed for Excellence.</p>
            </div>
        </div>
    </footer>


    <script src="{{ asset('js/site-navigation.js') }}?v={{ filemtime(public_path('js/site-navigation.js')) }}" defer></script>
</body>

</html>
