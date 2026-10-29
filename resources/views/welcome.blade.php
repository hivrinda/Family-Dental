<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cosmetic & Implant Dental Center | Family Dental Care | Oachira & Kayamkulam</title>
    <meta name="description"
        content="Smile Corrections, Dental Veneers, Clear Aligners & Dental Implants with Dr. Farhana (BDS). Serving Oachira, Kayamkulam & surrounding areas. Book a consultation.">
    <meta name="keywords"
        content="smile corrections Oachira, dental veneers Kayamkulam, clear aligners Oachira, dental implants Kayamkulam, family dental care Charummoodu, dentist Karunagappally, Dr Farhana BDS">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://familydentalcare.in/">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v=1.2">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    <!-- Schema.org LocalBusiness / Dentist JSON-LD Markup -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@type": "Dentist",
      "name": "Family Dental Care",
      "image": "https://images.unsplash.com/photo-1606811841689-23dfddce3e95?q=80&w=800&auto=format&fit=crop",
      "@id": "https://familydentalcare.in/#clinic",
      "url": "https://familydentalcare.in",
      "telephone": "+917012761098",
      "priceRange": "₹₹",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Kanjippuzha Pallimukk, Changankulangara - Kambisseri Rd",
        "addressLocality": "Vallikunnam",
        "addressRegion": "Kerala",
        "postalCode": "690501",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 9.1210367,
        "longitude": 76.5629388
      },
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": [
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday"
          ],
          "opens": "09:00",
          "closes": "18:30"
        }
      ],
      "founder": {
        "@type": "Person",
        "name": "Dr. Farhana",
        "jobTitle": "Lead Dental Specialist & Aesthetic Consultant",
        "hasCredential": "BDS (Bachelor of Dental Surgery)"
      },
      "areaServed": [
        "Oachira",
        "Kayamkulam",
        "Charummoodu",
        "Karunagappally",
        "Vallikunnam",
        "Alappuzha"
      ],
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "33"
      }
    }
    </script>
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
                <a href="#about"><i class="fas fa-user-md"></i> Dr. Farhana</a>
                <a href="/services#aligners"><i class="fas fa-teeth"></i> Aligners</a>
                <a href="/services#implants"><i class="fas fa-teeth-open"></i> Implants</a>
                <a href="/blog"><i class="fas fa-newspaper"></i> Blog</a>
                <a href="#contact"><i class="fas fa-map-marker-alt"></i> Contact</a>
            </nav>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="hero">
            <div class="container hero-inner">
                <div class="hero-content">
                    <div class="location-badge">
                        <i class="fas fa-map-marker-alt"></i> Serving Oachira, Kayamkulam & Surrounding Areas
                    </div>
                    <h1>Cosmetic & Implant Dental Center <br><span class="serif-italic" style="color: var(--primary);">Dr. Farhana (BDS)</span></h1>
                    <p>Smile Corrections, Dental Veneers, Clear Aligners & Dental Implants, planned around you. Led by Dr. Farhana (BDS), serving Oachira, Kayamkulam & surrounding areas.</p>

                    <div class="hero-actions">
                        <a href="tel:+917012761098" class="btn btn-primary">
                            <i class="fas fa-calendar-alt"></i> Book Free Consultation
                        </a>
                        <a href="https://wa.me/917012761098?text=Hello%20Dr.%20Farhana,%20I%20would%20like%20to%20book%20a%20consultation%20at%20Family%20Dental%20Clinic." target="_blank" class="btn btn-outline">
                            <i class="fab fa-whatsapp"></i> WhatsApp Us
                        </a>
                    </div>
                </div>

                <div class="hero-image-container">
                    <div class="hero-image">
                        <img src="https://images.unsplash.com/photo-1606811841689-23dfddce3e95?q=80&w=800&auto=format&fit=crop"
                            alt="Doctor and Patient Consultation">
                    </div>
                    <!-- Floating Badge 1 -->
                    <div class="floating-badge floating-badge-1">
                        <div class="badge-icon"><i class="fas fa-award"></i></div>
                        <div class="badge-text">
                            <h4>Dr. Farhana</h4>
                            <p>BDS • Clinical Lead</p>
                        </div>
                    </div>
                    <!-- Floating Badge 2 -->
                    <div class="floating-badge floating-badge-2">
                        <div class="badge-icon"><i class="fas fa-smile"></i></div>
                        <div class="badge-text">
                            <h4>Smile Care</h4>
                            <p>Personalised Plans</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
                    <h3 class="malayalam-snippet-title">ഫാമിലി ഡെന്റൽ കെയർ</h3>
                    <p class="malayalam-snippet-text">
                        ഓച്ചിറ, കായംകുളം, ചാരുംമൂട്, കരുനാഗപ്പള്ളി എന്നിവിടങ്ങളിൽ നിന്നുള്ളവർക്ക് ഡെന്റൽ ചികിത്സ. സ്മൈൽ കറക്ഷൻ, ഡെന്റൽ വീനീർ, ക്ലിയർ അലൈനർ, ഡെന്റൽ ഇംപ്ലാന്റ് ചികിത്സകൾക്കായി ഡോ. ഫർഹാനയെ സമീപിക്കാം.
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
                    <a href="/services" class="btn-malayalam-call">
                        <i class="fas fa-tooth"></i> എല്ലാ സേവനങ്ങളും
                    </a>
                </div>
            </div>
        </div>

        <!-- Key Services Section -->
        <section id="services" class="services">
            <div class="container">
                <div class="section-header">
                    <h2>Cosmetic & Family Dentistry</h2>
                    <p>Explore Clear Aligners and Dental Implants, alongside root canal and preventive care for the whole family.</p>
                </div>

                <div class="services-grid">
                    <div class="service-card" id="aligners">
                        <div class="service-icon"><i class="fas fa-teeth"></i></div>
                        <h3>Clear Aligners</h3>
                        <p>Straighten your teeth discreetly with custom-fit invisible aligners. 6 to 18 months duration with 0% EMI options starting at ₹3,500/mo.</p>
                        <a href="/services#aligners" style="display: inline-block; margin-top: 1rem; color: var(--primary); font-weight: 700; text-decoration: none;">
                            Learn More & Pricing <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>

                    <div class="service-card" id="implants">
                        <div class="service-icon"><i class="fas fa-tooth"></i></div>
                        <h3>Dental Implants</h3>
                        <p>Restore missing teeth with permanent, biocompatible titanium implants. Prevents jawbone loss and functions just like your real teeth.</p>
                        <a href="/services#implants" style="display: inline-block; margin-top: 1rem; color: var(--primary); font-weight: 700; text-decoration: none;">
                            Learn More & Pricing <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>

                    <div class="service-card">
                        <div class="service-icon"><i class="fas fa-heartbeat"></i></div>
                        <h3>Single-Sitting Root Canal</h3>
                        <p>Immediate toothache relief with modern electric rotary endodontics. 100% painless single-visit procedure to save your natural tooth.</p>
                        <a href="/services#root-canal" style="display: inline-block; margin-top: 1rem; color: var(--primary); font-weight: 700; text-decoration: none;">
                            Learn More & Emergency <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div style="text-align: center; margin-top: 2.5rem;">
                    <a href="/services" class="btn btn-primary">
                        <i class="fas fa-list"></i> View All Services & Pricing Plans
                    </a>
                </div>
            </div>
        </section>

        <!-- Doctor E-E-A-T Bio Section (Dr. Farhana) -->
        <section id="about" class="bg-alt" style="padding: 5rem 0;">
            <div class="container about-inner">
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?q=80&w=800&auto=format&fit=crop"
                        alt="Dr Farhana BDS - Dentist in Vallikunnam"
                        style="width: 100%; height: 100%; object-fit: cover; border-radius: 24px; box-shadow: var(--shadow-lg);">
                </div>
                <div class="about-content">
                    <span style="color: var(--primary); font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">
                        Lead Dental Surgeon & Aesthetic Specialist
                    </span>
                    <h2 style="font-size: 2.5rem; margin-top: 0.35rem; margin-bottom: 0.75rem;">Meet Dr. Farhana, <span class="serif-italic" style="color: var(--primary);">BDS</span></h2>
                    <p style="font-size: 1.05rem; line-height: 1.7; color: var(--text-main); margin-bottom: 1.25rem;">
                        With <strong>8+ years of dedicated clinical experience</strong>, Dr. Farhana leads Family Dental Care. Registered with the <strong>Kerala Dental Council</strong>, she offers personalised treatment planning for patients from Oachira, Kayamkulam, Charummoodu and Karunagappally, with a focus on smile aesthetics, function and long-term oral health.
                    </p>
                    <ul class="about-list" style="margin-bottom: 1.75rem;">
                        <li><i class="fas fa-check-circle"></i> Certified BDS Professional (Kerala Dental Council Reg.)</li>
                        <li><i class="fas fa-check-circle"></i> 8+ Years Clinical Practice in Advanced Dentistry</li>
                        <li><i class="fas fa-check-circle"></i> Certified Provider for Clear Aligners & Smile Design</li>
                        <li><i class="fas fa-check-circle"></i> Expert in Single-Sitting Rotary Endodontics</li>
                        <li><i class="fas fa-check-circle"></i> Patient-First Care & Clear Treatment Guidance</li>
                    </ul>
                    <div style="display: flex; flex-wrap: wrap; gap: 0.75rem;">
                        <a href="/services#doctor-bio" class="btn btn-primary">
                            <i class="fas fa-user-md"></i> Meet Your Dentist
                        </a>
                        <a href="https://wa.me/917012761098?text=Hello%20Dr.%20Farhana,%20I%20would%20like%20to%20consult%20with%20you%20at%20Family%20Dental%20Clinic." target="_blank" class="btn btn-outline">
                            <i class="fab fa-whatsapp"></i> Chat on WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Dental Implants Section -->
        <section id="implants-detail" class="bg-alt">
            <div class="container about-inner">
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1606811841689-23dfddce3e95?q=80&w=800&auto=format&fit=crop"
                        alt="Dental Implants"
                        style="width: 100%; height: 100%; object-fit: cover; border-radius: 24px;">
                </div>
                <div class="about-content">
                    <h2>Dental Implants</h2>
                    <p>Restore your smile with permanent, natural-looking dental implants. They function just like your real teeth and provide a lifetime solution for missing teeth.</p>
                    <ul class="about-list">
                        <li><i class="fas fa-check-circle"></i> Natural appearance and fit</li>
                        <li><i class="fas fa-check-circle"></i> Long-lasting and durable</li>
                        <li><i class="fas fa-check-circle"></i> Prevents bone loss</li>
                        <li><i class="fas fa-check-circle"></i> High success rate</li>
                    </ul>
                    <button class="btn btn-primary">Learn More</button>
                </div>
            </div>
        </section>

        <!-- Root Canal Section -->
        <section id="root-canal-detail" style="background: white;">
            <div class="container about-inner">
                <div class="about-content">
                    <h2>Root Canal Treatment</h2>
                    <p>Save your natural tooth and eliminate pain with our advanced, virtually painless root canal procedures. We use the latest technology to ensure your comfort.</p>
                    <ul class="about-list">
                        <li><i class="fas fa-check-circle"></i> Relieves severe tooth pain</li>
                        <li><i class="fas fa-check-circle"></i> Saves the natural tooth</li>
                        <li><i class="fas fa-check-circle"></i> Prevents spread of infection</li>
                        <li><i class="fas fa-check-circle"></i> Pain-free modern techniques</li>
                    </ul>
                    <button class="btn btn-primary">Learn More</button>
                </div>
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?q=80&w=800&auto=format&fit=crop"
                        alt="Root Canal Treatment"
                        style="width: 100%; height: 100%; object-fit: cover; border-radius: 24px;">
                </div>
            </div>
        </section>

        <!-- Why Choose Us / Features Section (NEW) -->
        <section>
            <div class="container">
                <div class="section-header">
                    <h2>Four Ways to Transform Your Smile</h2>
                    <p>Smile Corrections, Dental Veneers, Clear Aligners & Dental Implants — with a personalised consultation to explore your options.</p>
                </div>
                <div class="features-grid">
                    <div class="feature-item">
                        <div class="service-icon"><i class="fas fa-microscope"></i></div>
                        <h3>Smile Corrections</h3>
                        <p>Discuss your smile goals with Dr. Farhana and explore a treatment plan tailored to your teeth, preferences and oral health.</p>
                    </div>
                    <div class="feature-item">
                        <div class="service-icon"><i class="fas fa-smile-beam"></i></div>
                        <h3>Dental Veneers</h3>
                        <p>Explore dental veneers as part of a personalised smile plan. Discuss suitability, shade, shape and ongoing care at your consultation.</p>
                    </div>
                    <div class="feature-item">
                        <div class="service-icon"><i class="fas fa-tags"></i></div>
                        <h3>Clear Aligners</h3>
                        <p>Explore discreet teeth straightening with Clear Aligners. Discuss eligibility, treatment duration and costs before deciding.</p>
                    </div>
                    <div class="feature-item">
                        <div class="service-icon"><i class="fas fa-users"></i></div>
                        <h3>Dental Implants</h3>
                        <p>Discuss Dental Implants for missing teeth, including your suitability, treatment stages, aftercare and personalised cost estimate.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="bg-alt testimonials-section-new">
            <div class="section-header">
                <h2>What Our Patients Say</h2>
                <p>Don't just take our word for it—read our 4.9-star Google Reviews.</p>
            </div>

            <div class="marquee-wrapper">
                <div class="marquee-track">
                    <!-- Card 1 -->
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Got my invisible aligners from here and the results are amazing!
                            The doctor is very patient and explained the entire process clearly. Highly recommend!"</p>
                        <div class="testimonial-author">
                            <div class="author-avatar" style="background: #3b82f6;">A</div>
                            <div class="author-info">
                                <h4>Arjun K.</h4>
                                <span>Aligner Patient</span>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"I was terrified of getting a dental implant, but the procedure was
                            surprisingly painless. The clinic is incredibly clean and professional."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar" style="background: #ef4444;">M</div>
                            <div class="author-info">
                                <h4>Meera S.</h4>
                                <span>Implant Patient</span>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Best dental clinic in the Alappuzha district! Took my entire family
                            for a checkup and the staff was extremely friendly and welcoming."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar" style="background: #10b981;">R</div>
                            <div class="author-info">
                                <h4>Rahul P.</h4>
                                <span>General Dentistry</span>
                            </div>
                        </div>
                    </div>
                    <!-- Card 4 (New) -->
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Highly recommended for braces and aligners! Very friendly doctors
                            and affordable treatment cost. Truly family friendly."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar" style="background: #a855f7;">S</div>
                            <div class="author-info">
                                <h4>Saritha M.</h4>
                                <span>Braces Patient</span>
                            </div>
                        </div>
                    </div>
                    <!-- Card 5 (New) -->
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"The root canal treatment here was exceptional. Zero pain and the
                            follow up care was very detailed. Excellent doctors."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar" style="background: #f97316;">V</div>
                            <div class="author-info">
                                <h4>Vipin D.</h4>
                                <span>Root Canal Patient</span>
                            </div>
                        </div>
                    </div>
                    <!-- Card 6 (New) -->
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Super clean clinic with state of the art equipment. The invisible
                            aligners were delivered on time and fit perfectly. 5 stars!"</p>
                        <div class="testimonial-author">
                            <div class="author-avatar" style="background: #06b6d4;">N</div>
                            <div class="author-info">
                                <h4>Nikhil J.</h4>
                                <span>Aligners Patient</span>
                            </div>
                        </div>
                    </div>

                    <!-- Repeat the same cards to make it infinite scrolling -->

                    <!-- Card 1 (Duplicate) -->
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Got my invisible aligners from here and the results are amazing!
                            The doctor is very patient and explained the entire process clearly. Highly recommend!"</p>
                        <div class="testimonial-author">
                            <div class="author-avatar" style="background: #3b82f6;">A</div>
                            <div class="author-info">
                                <h4>Arjun K.</h4>
                                <span>Aligner Patient</span>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 (Duplicate) -->
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"I was terrified of getting a dental implant, but the procedure was
                            surprisingly painless. The clinic is incredibly clean and professional."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar" style="background: #ef4444;">M</div>
                            <div class="author-info">
                                <h4>Meera S.</h4>
                                <span>Implant Patient</span>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 (Duplicate) -->
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Best dental clinic in the Alappuzha district! Took my entire family
                            for a checkup and the staff was extremely friendly and welcoming."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar" style="background: #10b981;">R</div>
                            <div class="author-info">
                                <h4>Rahul P.</h4>
                                <span>General Dentistry</span>
                            </div>
                        </div>
                    </div>
                    <!-- Card 4 (Duplicate) -->
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Highly recommended for braces and aligners! Very friendly doctors
                            and affordable treatment cost. Truly family friendly."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar" style="background: #a855f7;">S</div>
                            <div class="author-info">
                                <h4>Saritha M.</h4>
                                <span>Braces Patient</span>
                            </div>
                        </div>
                    </div>
                    <!-- Card 5 (Duplicate) -->
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"The root canal treatment here was exceptional. Zero pain and the
                            follow up care was very detailed. Excellent doctors."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar" style="background: #f97316;">V</div>
                            <div class="author-info">
                                <h4>Vipin D.</h4>
                                <span>Root Canal Patient</span>
                            </div>
                        </div>
                    </div>
                    <!-- Card 6 (Duplicate) -->
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Super clean clinic with state of the art equipment. The invisible
                            aligners were delivered on time and fit perfectly. 5 stars!"</p>
                        <div class="testimonial-author">
                            <div class="author-avatar" style="background: #06b6d4;">N</div>
                            <div class="author-info">
                                <h4>Nikhil J.</h4>
                                <span>Aligners Patient</span>
                            </div>
                        </div>
                    </div>
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

        <!-- FAQ Section -->
        <section class="faq-section-new">
            <div class="container faq-container">
                <!-- Left Side: Header info -->
                <div class="faq-left">
                    <span class="faq-label-small">FAQ</span>
                    <h2 class="faq-title-serif">Common <span class="serif-italic">questions</span></h2>
                    <p class="faq-subtitle">Still not sure? Reach out to the Family Dental team — we typically respond
                        within a few hours.</p>
                    <a href="tel:+917012761098" class="btn-faq-contact">Contact us</a>
                </div>

                <!-- Right Side: Accordion items -->
                <div class="faq-right">
                    <div class="faq-accordion-item">
                        <button class="faq-accordion-header">
                            <span class="faq-question-text">Are Clear Aligners suitable for me?</span>
                            <span class="faq-icon-toggle">+</span>
                        </button>
                        <div class="faq-accordion-body">
                            <div class="faq-answer-text">A consultation with Dr. Farhana helps determine suitability. Your treatment plan will explain the expected duration, follow-up visits and costs for your individual case.</div>
                        </div>
                    </div>

                    <div class="faq-accordion-item">
                        <button class="faq-accordion-header">
                            <span class="faq-question-text">Are dental implants painful?</span>
                            <span class="faq-icon-toggle">+</span>
                        </button>
                        <div class="faq-accordion-body">
                            <div class="faq-answer-text">Discuss anaesthesia, comfort and recovery with Dr. Farhana before treatment. Your consultation will cover what to expect during the procedure and aftercare.</div>
                        </div>
                    </div>

                    <div class="faq-accordion-item">
                        <button class="faq-accordion-header">
                            <span class="faq-question-text">How do I plan Smile Corrections or Dental Veneers?</span>
                            <span class="faq-icon-toggle">+</span>
                        </button>
                        <div class="faq-accordion-body">
                            <div class="faq-answer-text">Start with a consultation to discuss your goals and oral health. Ask about suitable options, veneer care, expected longevity and the treatment timeline before deciding.</div>
                        </div>
                    </div>

                    <div class="faq-accordion-item">
                        <button class="faq-accordion-header">
                            <span class="faq-question-text">What will treatment cost, and are payment plans available?</span>
                            <span class="faq-icon-toggle">+</span>
                        </button>
                        <div class="faq-accordion-body">
                            <div class="faq-answer-text">Costs depend on your treatment needs. Request a personalised estimate at your consultation and ask the team about current payment plans and any applicable terms.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Final CTA & Community Camp Offer -->
        <section class="cta-section">
            <div class="container cta-inner">
                <h2>Ready to Plan Your Smile Transformation?</h2>
                <p>Book a consultation with Dr. Farhana (BDS) for Smile Corrections, Dental Veneers, Clear Aligners or Dental Implants. Welcoming patients from Oachira, Kayamkulam, Charummoodu and Karunagappally.</p>
                <div class="hero-actions" style="justify-content: center;">
                    <a href="tel:+917012761098" class="btn btn-primary">
                        <i class="fas fa-calendar-alt"></i> Book Free Consultation
                    </a>
                    <a href="https://wa.me/917012761098?text=Hello%20Dr.%20Farhana,%20I%20would%20like%20to%20book%20a%20consultation%20at%20Family%20Dental%20Clinic." target="_blank" class="btn btn-outline">
                        <i class="fab fa-whatsapp"></i> WhatsApp Us
                    </a>
                </div>

                <!-- Camp Offer Card -->
                <div class="camp-offer-banner" style="margin-top: 3rem; text-align: left;">
                    <div>
                        <span class="camp-offer-tag">COMMUNITY OUTREACH</span>
                        <h4 style="color: #92400e; margin: 0.5rem 0 0.25rem;">Free Oral Screening & 15% Scaling Discount</h4>
                        <p style="color: #78350f; font-size: 0.95rem; margin-bottom: 0;">Use Coupon Code: <strong>FD-CAMP15</strong> for your complimentary oral checkup and 15% discount on ultrasonic scaling.</p>
                    </div>
                    <a href="https://wa.me/917012761098?text=Hello%20Dr.%20Farhana,%20I%20would%20like%20to%20redeem%20the%20FD-CAMP15%20card." target="_blank" class="btn btn-primary" style="font-size: 0.9rem;">
                        Redeem via WhatsApp
                    </a>
                </div>

                <!-- Google Review Standee Card -->
                <div class="review-engine-banner" style="margin-top: 2rem; text-align: left;">
                    <div class="review-engine-info">
                        <div class="review-engine-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <span style="color: #0f172a; font-weight: 700; margin-left: 0.5rem;">4.9 Rating • 33 Reviews</span>
                        </div>
                        <h3>Share Your Experience</h3>
                        <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 0;">
                            Have you visited Dr. Farhana recently? Take 30 seconds to support Family Dental Care with a Google Review. It helps local families find gentle, trustworthy dental care.
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
                    <h2>Visit Family Dental Care</h2>
                    <p>Approximate drive: Oachira 20 mins • Kayamkulam 25 mins • Karunagappally 25 mins. Find us on Changankulangara - Kambisseri Road, Vallikunnam. Travel times vary with route and traffic.</p>
                </div>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3939.3697445803323!2d76.56293889999999!3d9.121036700000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b061b264a857cef%3A0x1008df66628f1f3a!2sFamily%20Dental%20Care%2C%20Kanjippuzha!5e0!3m2!1sen!2sin!4v1786685539718!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
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
                    <a href="/" class="footer-logo">FamilyDental.</a>
                    <p>Smile Corrections, Dental Veneers, Clear Aligners & Dental Implants with Dr. Farhana (BDS). Serving Oachira, Kayamkulam, Charummoodu & Karunagappally.</p>
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
                        <span>Kanjippuzha Pallimukk,<br>Changankulangara - Kambisseri Rd,<br>Vallikunnam, Kerala
                            690501</span>
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

            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} Family Dental Care. All rights reserved. Designed for Excellence.</p>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const menuToggle = document.querySelector('.mobile-menu-toggle');
            const nav = document.querySelector('nav');

            if (menuToggle && nav) {
                menuToggle.addEventListener('click', function (e) {
                    e.stopPropagation();
                    nav.classList.toggle('active');
                    const icon = menuToggle.querySelector('i');
                    if (nav.classList.contains('active')) {
                        icon.className = 'fas fa-times';
                    } else {
                        icon.className = 'fas fa-bars';
                    }
                });

                // Close menu when clicking outside
                document.addEventListener('click', function (e) {
                    if (nav.classList.contains('active') && !nav.contains(e.target) && !menuToggle.contains(e.target)) {
                        nav.classList.remove('active');
                        menuToggle.querySelector('i').className = 'fas fa-bars';
                    }
                });

                // Close menu when a link is clicked
                nav.querySelectorAll('a').forEach(link => {
                    link.addEventListener('click', () => {
                        nav.classList.remove('active');
                        menuToggle.querySelector('i').className = 'fas fa-bars';
                    });
                });
            }

            // FAQ Accordion Toggle
            const faqItems = document.querySelectorAll('.faq-accordion-item');
            faqItems.forEach(item => {
                const header = item.querySelector('.faq-accordion-header');
                const toggle = item.querySelector('.faq-icon-toggle');

                header.addEventListener('click', () => {
                    const isActive = item.classList.contains('active');

                    // Close all other items
                    faqItems.forEach(otherItem => {
                        otherItem.classList.remove('active');
                        const otherToggle = otherItem.querySelector('.faq-icon-toggle');
                        if (otherToggle) otherToggle.textContent = '+';
                    });

                    if (!isActive) {
                        item.classList.add('active');
                        if (toggle) toggle.textContent = '−';
                    } else {
                        item.classList.remove('active');
                        if (toggle) toggle.textContent = '+';
                    }
                });
            });
        });
    </script>
</body>

</html>