<section class="services" id="smile-services">
    <div class="container">
        <div class="section-header">
            <h2>Four Ways to Transform Your Smile</h2>
            <p>Explore cosmetic and implant care with Dr. Farhana (BDS), welcoming patients from Kayamkulam, Oachira and Karunagappally.</p>
        </div>
        <div class="revamp-grid">
            @foreach([
                ['smile-corrections', 'Smile Corrections', 'fa-smile', 'Plan a smile that feels like you. Discuss tooth shape, spacing and colour, with treatment options tailored to your teeth and oral health.'],
                ['veneers', 'Dental Veneers', 'fa-tooth', 'Explore options for changing the appearance of chipped, discoloured or uneven teeth. Discuss suitability, tooth preparation and ongoing care.'],
                ['aligners', 'Clear Aligners', 'fa-teeth', 'Explore discreet, removable teeth straightening. An assessment helps determine suitability, expected treatment time and review visits.'],
                ['implants', 'Dental Implants', 'fa-teeth-open', 'Discuss replacing missing teeth with implant-supported restorations. Planning considers gum health, bone support and your individual needs.']
            ] as [$slug, $title, $icon, $description])
                <article class="service-card">
                    <div class="service-icon"><i class="fas {{ $icon }}" aria-hidden="true"></i></div>
                    <h3>{{ $title }}</h3>
                    <p>{{ $description }}</p>
                    <a class="revamp-link" href="{{ url('/services') }}#{{ $slug }}">Explore {{ $title }} <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
                </article>
            @endforeach
        </div>
    </div>
</section>
