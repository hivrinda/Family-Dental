<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cosmetic & Implant Dental Care | FamilyDentalCare</title>
    <meta name="description"
        content="Smile Corrections, Dental Veneers, Clear Aligners and Dental Implants with Dr. Farhana (BDS), serving Kayamkulam, Oachira and Karunagappally.">
    <meta name="keywords"
        content="dental clinic in Vallikunnam, invisible aligners in Vallikunnam, dental implants in Vallikunnam, root canal treatment in Vallikunnam, dentist near me Kanjippuzha, Dr Farhana dentist Vallikunnam, best dental clinic Kambisseri, teeth aligners Alappuzha, emergency toothache Kayamkulam">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://familydentalcare.in/services">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ filemtime(public_path('css/style.css')) }}">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    @include('partials.dentist-schema')
</head>

<body class="wireframe-page">

    <!-- Header Navigation -->
    @include('partials.site-navigation')

    <main style="padding-top: 6rem;">

        <!-- Services Hero Banner -->
        <section style="background: linear-gradient(180deg, #f0fdfa 0%, #ffffff 100%); padding: 4rem 0 3rem;">
            <div class="container text-center" style="max-width: 900px; text-align: center; margin: 0 auto;">
                <div class="location-badge" style="margin-bottom: 1.25rem;">
                    <i class="fas fa-map-marker-alt"></i> Serving Kayamkulam, Oachira & Karunagappally
                </div>
                <h1 style="font-size: 3.25rem; font-weight: 800; color: var(--text-dark); line-height: 1.2; margin-bottom: 1.25rem;">
                    Smile Corrections & Dental Veneers <br><span class="serif-italic" style="color: var(--primary);">Clear Aligners & Dental Implants</span>
                </h1>
                <p style="font-size: 1.2rem; color: var(--text-muted); line-height: 1.7; margin-bottom: 2rem;">
                    Explore Smile Corrections, Dental Veneers, Clear Aligners and Dental Implants with <strong>Dr. Farhana (BDS)</strong>. Welcoming patients from Kayamkulam and Oachira for personalised cosmetic, implant and family dental care.
                </p>

                <!-- Camp Offer Banner -->
                <div id="services-community-offer" class="camp-offer-banner">
                    <div class="services-offer-content">
                        <span class="camp-offer-tag">COMMUNITY OFFER</span>
                        <span class="services-offer-code" style="font-weight: 700; color: #92400e;">Code: FD-CAMP15</span>
                        <span style="color: #78350f;">— 15% OFF Ultrasonic Scaling & Free Oral Screening</span>
                    </div>
                    <a href="https://wa.me/917012761098?text=Hello%20Dr.%20Farhana,%20I%20would%20like%20to%20claim%20the%20FD-CAMP15%20screening%20offer." target="_blank" class="btn btn-primary" style="padding: 0.5rem 1.25rem; font-size: 0.9rem;">
                        Claim via WhatsApp
                    </a>
                </div>

                <div class="hero-actions" style="justify-content: center; margin-top: 1.5rem;">
                    <a href="tel:+917012761098" class="btn btn-primary">
                        <i class="fas fa-phone-alt"></i> Call +91 70127 61098
                    </a>
                    <a href="https://wa.me/917012761098?text=Hello%20Dr.%20Farhana,%20I%20would%20like%20to%20book%20a%20consultation%20at%20Family%20Dental%20Clinic." target="_blank" class="btn btn-outline">
                        <i class="fab fa-whatsapp"></i> Chat on WhatsApp
                    </a>
                </div>
            </div>
        </section>

        <!-- Bilingual Malayalam Key Info Snippet -->
        <section class="container">
            <div class="malayalam-snippet-card">
                <div class="malayalam-snippet-content">
                    <span class="malayalam-snippet-badge">
                        <i class="fas fa-language"></i> പ്രാദേശിക സേവനം • മലയാളം
                    </span>
                    <h3 class="malayalam-snippet-title">ഫാമിലി ഡെന്റൽ ക്ലിനിക്ക്, കാഞ്ഞിപ്പുഴ പള്ളിമുക്ക്</h3>
                    <p class="malayalam-snippet-text">
                        വള്ളിക്കുന്നം, കമ്പിശ്ശേരി, കായംകുളം പരിസരവാസികൾക്ക് ഏറ്റവും വിശ്വസനീയവും വേദനാരഹിതവുമായ അത്യാധുനിക ദന്തചികിത്സ. അടിയന്തിര പല്ലുവേദനയ്ക്കും ഇംപ്ലാന്റ്, കമ്പിയിടാത്ത ഇൻവിസിബിൾ അലൈനർ ചികിത്സകൾക്കും ഡോ. ഫർഹാനയുടെ നേരിട്ടുള്ള പരിശോധന.
                    </p>
                    <div class="malayalam-snippet-timing">
                        <span><i class="far fa-clock"></i> തിങ്കൾ - ശനി: 9:00 AM - 6:30 PM</span>
                        <span><i class="fas fa-calendar-times"></i> ഞായർ: അവധി (Emergency On-Call)</span>
                        <span><i class="fas fa-map-marker-alt"></i> കാഞ്ഞിപ്പുഴ പള്ളിമുക്ക്, വള്ളിക്കുന്നം</span>
                    </div>
                </div>
                <div class="malayalam-snippet-actions">
                    <a href="https://wa.me/917012761098?text=ഹലോ%20ഡോക്ടർ,%20എനിക്ക്%20ചികിത്സയെക്കുറിച്ച്%20കൂടുതൽ%20അറിയണം." target="_blank" class="btn-malayalam-whatsapp">
                        <i class="fab fa-whatsapp"></i> മലയാളത്തിൽ ചാറ്റ് ചെയ്യാം
                    </a>
                    <a href="tel:+917012761098" class="btn-malayalam-call">
                        <i class="fas fa-phone-alt"></i> വിളിക്കുക
                    </a>
                </div>
            </div>
        </section>

        @include('partials.flagship-services')

        @include('partials.treatment-pillars')

        @include('partials.comprehensive-care')

        @include('partials.doctor-authority')

        @include('partials.smile-gallery')

        @include('partials.regional-directions')

        @include('partials.smile-faq')





        <!-- Location Map Section -->
        <section class="map-section" id="location" style="padding: 4rem 0;">
            <div class="container">
                <div class="map-header">
                    <h2>Visit Our Dental Center</h2>
                    <p>Conveniently accessible from Vallikunnam, Kambisseri, and Kayamkulam</p>
                </div>
                <div class="map-container">
                    <iframe title="FamilyDentalCare clinic location" src="https://maps.google.com/maps?q={{ config('clinic.latitude') }},{{ config('clinic.longitude') }}&amp;z=15&amp;output=embed"
                        width="100%" height="420" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a href="/" class="footer-logo">FamilyDentalCare</a>
                    <p>Cosmetic, implant and family dental care with Dr. Farhana (BDS), welcoming patients from Kayamkulam, Oachira and Karunagappally.</p>
                </div>

                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/services">Services Hub</a></li>
                        <li><a href="/blog">Dental Blog</a></li>
                        <li><a href="/#about">About Dr. Farhana</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Treatment Pillars</h4>
                    <ul>
                        <li><a href="/services#aligners">Invisible Aligners</a></li>
                        <li><a href="/services#implants">Permanent Implants</a></li>
                        <li><a href="/services#root-canal">Single-Sitting RCT</a></li>
                        <li><a href="/services#root-canal">Ultrasonic Scaling</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Contact & Hours</h4>
                    <div class="footer-contact-item">
                        <span><i class="fas fa-map-marker-alt"></i></span>
                        <span>Kanjippuzha Pallimukk, Changankulangara Kambisseri Road, Vallikunnam, Kerala 690501</span>
                    </div>
                    <div class="footer-contact-item">
                        <span><i class="fas fa-phone-alt"></i></span>
                        <span><a href="tel:+917012761098" style="color: inherit; text-decoration: none;">+91 70127 61098</a></span>
                    </div>
                    <div class="footer-contact-item">
                        <span><i class="far fa-clock"></i></span>
                        <span>Mon - Sat: 9:00 AM - 6:30 PM<br>Sunday: Emergency On-Call</span>
                    </div>
                </div>
            </div>

            @include('partials.catchment-footer')

            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} FamilyDentalCare, Kanjippuzha. All rights reserved. Registered with Kerala Dental Council.</p>
            </div>
        </div>
    </footer>


    <script src="{{ asset('js/site-navigation.js') }}?v={{ filemtime(public_path('js/site-navigation.js')) }}" defer></script>
</body>

</html>
