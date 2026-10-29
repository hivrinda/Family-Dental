<section id="before-after" class="smile-gallery" aria-labelledby="smile-gallery-title">
    <div class="container">
        <div class="section-header">
            <span class="faq-label-small">EXPLORE THE POSSIBILITIES</span>
            <h2 id="smile-gallery-title">Illustrative Smile Transformations</h2>
            <p>Digitally generated treatment previews, shown to explain four different approaches to smile care. These are illustrative examples, not documented clinical outcomes. Individual results vary.</p>
        </div>
        <div class="smile-gallery-grid">
            @foreach([
                ['bonding', 'Smile Correction', 'Front-tooth gap and uneven incisal edges.', 'Composite bonding to close the gap and refine the front-tooth edges.', '2 visits in this example'],
                ['veneers', 'Porcelain Veneers', 'Tetracycline-type discoloration and chipped upper front teeth.', 'Six custom E-Max porcelain veneers planned to improve tooth shade and shape.', 'Assessment, preparation and fitting; timing varies'],
                ['aligners', 'Clear Aligners', 'Moderate lower-tooth crowding and rotated upper incisors.', 'A digitally planned series of clear aligners, without metal braces.', '9 months in this example'],
                ['implant', 'Dental Implant', 'A missing front tooth following dental trauma.', 'A single titanium implant with a zirconia crown. Immediate placement depends on clinical suitability; the final crown may follow healing.', 'Placement, healing and restoration; timing varies']
            ] as [$image, $title, $challenge, $procedure, $timeline])
                <article class="smile-gallery-card">
                    <figure>
                        <img src="{{ asset('images/smile-gallery/' . $image . '.png') }}" alt="Digitally generated before and after illustration: {{ $title }} {{ $image === 'implant' ? 'near Oachira, Alappuzha' : 'near Kayamkulam' }}" width="1536" height="1024" loading="lazy">
                        <figcaption><span>Before concept</span><span>After concept</span></figcaption>
                    </figure>
                    <div class="smile-gallery-copy">
                        <h3>{{ $title }}</h3>
                        <dl>
                            <dt>Clinical challenge</dt><dd>{{ $challenge }}</dd>
                            <dt>Treatment approach</dt><dd>{{ $procedure }}</dd>
                            <dt>Illustrative timeline</dt><dd>{{ $timeline }}</dd>
                        </dl>
                        <a class="revamp-link" href="{{ url('/') }}#booking">Discuss Your Options <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
