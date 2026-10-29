<section class="comprehensive-care bg-alt" id="family-care" aria-labelledby="family-care-title">
    <div class="container">
        <div class="section-header">
            <span class="faq-label-small">COMPLETE CARE FOR EVERY SMILE</span>
            <h2 id="family-care-title">Comprehensive Dental Care</h2>
            <p>Six essential services to protect your teeth, support healthy gums and care for your whole family.</p>
        </div>
        <div class="comprehensive-care-grid">
            @foreach([
                ['root-canal', 'Single-Sitting Root Canal (RCT)', 'fa-heartbeat', 'Computerised rotary endodontics to relieve tooth pain and help save infected teeth. Suitable cases may be treated in around 45 minutes, with local anaesthesia for comfort. Complex cases may need more visits.'],
                ['teeth-whitening', 'Laser Teeth Whitening', 'fa-sun', 'In-office enamel brightening with a treatment plan suited to your teeth. Selected cases may achieve 3 to 5 shades of improvement in a session of around 45 minutes; results and sensitivity vary.'],
                ['zirconia-crowns', 'Metal-Free Zirconia Crowns', 'fa-tooth', 'High-strength, biocompatible ceramic crowns designed to protect heavily filled or broken teeth, with a shade and shape selected to complement your smile.'],
                ['kids-dentistry', 'Pediatric (Kids) Dentistry', 'fa-child', 'Preventive oral care, fluoride applications when appropriate and cavity-prevention advice in a warm, reassuring environment for children and parents.'],
                ['wisdom-teeth', 'Wisdom Tooth & Gentle Extractions', 'fa-teeth-open', 'Assessment and surgical removal of impacted wisdom teeth using careful, atraumatic techniques where appropriate, with anaesthesia and recovery guidance tailored to your procedure.'],
                ['gum-therapy', 'Ultrasonic Scaling & Gum Therapy', 'fa-water', 'Ultrasonic cleaning to remove plaque and tartar, with gum-health assessment for bleeding gums and advice to help maintain fresh breath and healthy daily habits.']
            ] as [$id, $title, $icon, $description])
                <article class="service-card comprehensive-care-card" id="{{ $id }}">
                    <div class="service-icon"><i class="fas {{ $icon }}" aria-hidden="true"></i></div>
                    <h3>{{ $title }}</h3>
                    <p>{{ $description }}</p>
                    <a class="revamp-link" href="{{ url('/') }}#booking">Ask About This Treatment <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
                </article>
            @endforeach
        </div>
    </div>
</section>
