@php
    $pillars = [
        [
            'id' => 'smile-corrections', 'title' => 'Smile Corrections & Digital Smile Design',
            'intro' => 'Custom-engineered aesthetic makeovers tailored to your facial symmetry and lip line.',
            'copy' => 'A confident smile is never one-size-fits-all. Our Smile Correction treatments evaluate your facial midline, tooth proportions, gum exposure and lip dynamics before touching a tooth. Whether you are preparing for your wedding day or upgrading your professional presence, we combine digital smile previews with minimally invasive cosmetic procedures to address gummy smiles, uneven tooth lengths, stains and front-tooth gaps. Selected bonding and contouring treatments may be completed in 1 to 2 appointments; your plan determines the timing.',
            'features' => [
                ['Digital Smile Preview', 'Visualise your proposed smile in 3D before starting treatment.'],
                ['Laser Gum Contouring', 'Carefully planned reshaping for balanced tooth-to-gum proportions, with anaesthesia as appropriate.'],
                ['Composite Enamel Bonding', 'Same-day cosmetic correction for suitable chipped edges and minor spacing.'],
            ], 'cta' => 'Plan Your Smile Correction',
        ],
        [
            'id' => 'veneers', 'title' => 'Dental Veneers – Porcelain & Composite',
            'intro' => 'Ultra-thin ceramic shells and composite options for a natural-looking smile transformation.',
            'copy' => 'For teeth that are discoloured, worn down, chipped or slightly uneven, custom dental veneers can offer an aesthetic upgrade. We design ultra-thin Porcelain (E-Max) Veneers and high-polish Composite Veneers that bond to the front surface of your teeth, with shade and shape selected to complement your natural smile. Porcelain veneers may last 10 to 15 years or longer with proper care; composite veneers have different maintenance and replacement needs.',
            'features' => [
                ['Custom Porcelain Veneers', 'Stain-resistant ceramics designed to mimic natural enamel translucency. Longevity depends on your bite, habits and care.'],
                ['Single-Visit Composite Veneers', 'A more affordable option for suitable same-day gap closure and tooth reshaping.'],
                ['Conservative Enamel Preparation', 'Preserve healthy tooth structure where possible. The amount of preparation is explained before treatment.'],
            ], 'cta' => 'Explore Your Veneer Options',
        ],
        [
            'id' => 'aligners', 'title' => 'Clear Aligners & Invisible Orthodontics',
            'intro' => 'Straighten crowded, gapped or overlapping teeth discreetly without metal wires or brackets.',
            'copy' => 'Our custom Clear Aligners use a sequence of medical-grade, transparent removable trays, digitally mapped to gently shift your teeth into alignment. Ideal for working professionals, college students and teens travelling from Kayamkulam and Oachira, they can be removed for meals, brushing and flossing. Reviews are typically planned every 6 to 8 weeks, with the exact schedule and daily wear requirements set by your treating clinician.',
            'features' => [
                ['Removable & Discreet', 'Remove trays for meals and cleaning, then wear them for the hours prescribed in your treatment plan.'],
                ['Predictable Digital Timelines', 'Selected mild-to-moderate corrections may take 6 to 14 months. Complex cases, compliance and refinements can change the timeline.'],
                ['Flexible Monthly EMI Plans', 'Transparent packages with interest-free instalment options, subject to eligibility and the agreed payment terms.'],
            ], 'cta' => 'Book an Aligner Assessment',
        ],
        [
            'id' => 'implants', 'title' => 'Permanent Dental Implants',
            'intro' => 'Replace missing teeth with titanium artificial roots and natural-looking zirconia crowns.',
            'copy' => 'Missing teeth can affect chewing, allow neighbouring teeth to shift and contribute to changes in the jawbone. Dental Implants replace a missing root with a biocompatible titanium post supporting a custom crown. Unlike a conventional tooth-supported bridge, an implant does not usually require preparation of the adjacent teeth. Your consultation assesses bone support, gum health and the restoration best suited to your needs.',
            'features' => [
                ['Single-Tooth to Full-Arch Solutions', 'Fixed replacement options for a missing tooth, multiple teeth or a full arch, based on clinical suitability.'],
                ['Guided Placement & Local Anaesthesia', 'Computer-guided planning and local anaesthesia support accurate placement and comfort. Recovery varies by procedure.'],
                ['Built for Long-Term Function', 'Implants can help maintain jawbone support and facial structure. Regular checkups and daily care are essential; crowns and components may need maintenance or replacement.'],
            ], 'cta' => 'Discuss Dental Implants',
        ],
    ];
@endphp
<section class="treatment-pillars" aria-label="Our four flagship treatments">
    <div class="container">
        @foreach($pillars as $pillar)
            <article class="services-pillar-card wireframe-pillar" id="{{ $pillar['id'] }}">
                <div class="pillar-overview">
                <div class="pillar-overview-copy">
                <span class="pillar-header-badge badge-aligners">{{ [
                    'smile-corrections' => 'Expert Treatment for Smile Correction',
                    'veneers' => 'Trusted Treatment for Dental Veneers',
                    'aligners' => 'Comfortable, Durable & Strong Aligners',
                    'implants' => 'No Missing Teeth is Detected',
                ][$pillar['id']] }}</span>
                <h2>{{ $pillar['title'] }}</h2>
                <p class="pillar-intro">{{ $pillar['intro'] }}</p>
                <p class="pillar-copy">{{ $pillar['copy'] }}</p>
                </div>
                @php
                    $treatmentImage = 'images/treatments/' . $pillar['id'] . (in_array($pillar['id'], ['smile-corrections', 'veneers']) ? '.png' : '.jpg');
                    $treatmentAlt = [
                        'smile-corrections' => 'Illustrative portrait showing a bright natural smile',
                        'veneers' => 'Dental veneers and tooth shade matching illustration',
                        'aligners' => 'A transparent removable dental aligner held in a hand',
                        'implants' => 'Dental implant model showing the implant post and crown',
                    ][$pillar['id']];
                @endphp
                <img class="pillar-treatment-image pillar-treatment-image--{{ $pillar['id'] }}" src="{{ asset($treatmentImage) }}?v={{ filemtime(public_path($treatmentImage)) }}" alt="{{ $treatmentAlt }}" width="960" height="720" loading="lazy" decoding="async">
                </div>
                <ul class="pillar-features">
                    @foreach($pillar['features'] as [$title, $detail])
                        <li><i class="fas fa-check-circle" aria-hidden="true"></i><div><h3>{{ $title }}</h3><p>{{ $detail }}</p></div></li>
                    @endforeach
                </ul>
                <a class="btn btn-primary" href="{{ url('/') }}#booking">{{ $pillar['cta'] }} <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
            </article>
        @endforeach
    </div>
</section>
