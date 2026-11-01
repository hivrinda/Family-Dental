<section class="services" id="smile-services">
    <div class="container">
        <div class="section-header">
            <h2>Four Ways to Transform Your Smile</h2>
            <p>Explore cosmetic and implant care with Dr. Farhana (BDS), welcoming patients from Kayamkulam, Oachira and Karunagappally.</p>
        </div>
        <div class="revamp-grid">
            @foreach([
                ['smile-corrections', 'Smile Corrections', 'Illustrative portrait of a woman with a bright natural smile', 'Plan a smile that feels like you. Discuss tooth shape, spacing and colour, with treatment options tailored to your teeth and oral health.'],
                ['veneers', 'Dental Veneers', 'Dental veneers illustration and a veneer being matched to a smile', 'Explore options for changing the appearance of chipped, discoloured or uneven teeth. Discuss suitability, tooth preparation and ongoing care.'],
                ['aligners', 'Clear Aligners', 'Hand holding a transparent clear aligner', 'Explore discreet, removable teeth straightening. An assessment helps determine suitability, expected treatment time and review visits.'],
                ['implants', 'Dental Implants', 'Dental model showing an implant and replacement crown', 'Discuss replacing missing teeth with implant-supported restorations. Planning considers gum health, bone support and your individual needs.']
            ] as [$slug, $title, $imageAlt, $description])
                <article class="service-card">
                    <img class="treatment-card-image treatment-card-image--{{ $slug }}" src="{{ asset('images/treatments/' . $slug . (in_array($slug, ['smile-corrections', 'veneers']) ? '.png' : '.jpg')) }}?v={{ filemtime(public_path('images/treatments/' . $slug . (in_array($slug, ['smile-corrections', 'veneers']) ? '.png' : '.jpg'))) }}" alt="{{ $imageAlt }}" width="960" height="540" loading="lazy" decoding="async">
                    <h3>{{ $title }}</h3>
                    <p>{{ $description }}</p>
                    <a class="revamp-link" href="{{ url('/services') }}#{{ $slug }}">Explore {{ $title }} <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
                </article>
            @endforeach
        </div>
    </div>
</section>
