<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dental Health & Treatment Guides | FamilyDentalCare Kanjippuzha, Vallikunnam</title>
    <meta name="description" content="Read expert dental guides on Invisible Aligners cost, single-sitting root canal, and dental implants in Vallikunnam, Kambisseri, and Kayamkulam by Dr. Farhana (BDS).">
    <meta name="keywords" content="dental clinic in Vallikunnam, clear aligners price Vallikunnam, root canal treatment cost Vallikunnam, braces cost Alappuzha, Dr Farhana dentist Vallikunnam">
    <link rel="canonical" href="https://familydentalcare.in/blog">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ filemtime(public_path('css/style.css')) }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    @include('partials.dentist-schema')
</head>
<body class="wireframe-page">

    <!-- Header Navigation -->
    @include('partials.site-navigation')

    <main style="padding-top: 5rem; background-color: #FAF9F6;">
        <!-- Blog Intro Section -->
        <section style="padding: 1.5rem 0 1rem;">
            <div class="container">
                <div class="section-header" style="text-align: center; margin-bottom: 3.5rem; max-width: 800px; margin-left: auto; margin-right: auto;">
                    <h1 style="font-family: 'Playfair Display', Georgia, serif; font-size: 3.5rem; font-weight: 800; color: var(--text-dark); margin-bottom: 1rem; letter-spacing: -1px;">Blogs</h1>
                    <p style="font-family: 'Playfair Display', Georgia, serif; font-size: 1.25rem; line-height: 1.6; color: var(--text-muted); max-width: 650px; margin: 0 auto; font-style: italic; font-weight: 400;">
                        Our personal blog focused on keeping your smile healthy and beautiful, sharing helpful guides and insights.
                    </p>
                </div>

                <!-- Category Filters -->
                <div class="blog-filters" style="margin-bottom: 1.5rem;">
                    @foreach($categories as $category)
                        <a href="{{ route('blog.index', ['category' => $category === 'All' ? null : $category]) }}" 
                           class="filter-pill {{ ($selectedCategory == $category || (!$selectedCategory && $category == 'All')) ? 'active' : '' }}">
                            {{ $category }}
                        </a>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Articles Grid Section -->
        <section style="padding: 0 0 6rem;">
            <div class="container">
                @if(count($articles) > 0)
                    <div class="blog-grid-clean">
                        @foreach($articles as $article)
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
                    
                    <!-- Clean Minimalist Pagination (Syed Balkhi style) -->
                    <div class="blog-pagination-clean">
                        @if($articles->currentPage() > 1)
                            <a href="{{ $articles->previousPageUrl() }}" class="next-btn">Previous</a>
                        @endif
                        @for($page = 1; $page <= $articles->lastPage(); $page++)
                            @if($page === $articles->currentPage())
                                <span class="current" aria-current="page">{{ $page }}</span>
                            @else
                                <a href="{{ $articles->url($page) }}">{{ $page }}</a>
                            @endif
                        @endfor
                        @if($articles->hasMorePages())
                            <a href="{{ $articles->nextPageUrl() }}" class="next-btn">Next</a>
                        @endif
                    </div>
                @else
                    <div style="text-align: center; padding: 4rem 0;">
                        <i class="fas fa-search" style="font-size: 3rem; color: var(--text-muted); margin-bottom: 1.5rem;"></i>
                        <h3>No articles found in this category</h3>
                        <p style="color: var(--text-muted); margin-top: 0.5rem;">Check back soon for new guides and articles.</p>
                        <a href="{{ route('blog.index') }}" class="btn btn-primary" style="margin-top: 1.5rem;">View All Articles</a>
                    </div>
                @endif

                <!-- Dark Premium CTA Banner -->
                <div class="blog-cta-banner">
                    <div class="blog-cta-content">
                        <h2>Looking for a Perfect Smile?</h2>
                        <p>Book a consultation with our experienced dental specialists and discover customized treatments for you and your family.</p>
                        <a href="/#contact" class="blog-cta-btn">GET IN TOUCH</a>
                    </div>
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
                    <a href="/" class="footer-logo">FamilyDentalCare</a>
                    <p>Experience premium dental care in a comfortable environment. Your smile is our top priority.</p>
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
                    <h4>Treatment Pillars</h4>
                    <ul>
                        <li><a href="/services#aligners">Invisible Aligners</a></li>
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
                        <span>Kanjippuzha Pallimukk, Changankulangara Kambisseri Road, Vallikunnam, Kerala 690501</span>
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
            
            @include('partials.catchment-footer')

            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} FamilyDentalCare. All rights reserved. Designed for Excellence.</p>
            </div>
        </div>
    </footer>


    <script src="{{ asset('js/site-navigation.js') }}?v={{ filemtime(public_path('js/site-navigation.js')) }}" defer></script>
</body>
</html>
