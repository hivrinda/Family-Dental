<section class="bg-alt" id="directions">
    <div class="container">
        <div class="section-header">
            <h2>A Short Drive to Your Smile Consultation</h2>
            <p>Plan your visit from Oachira, Charummoodu, Karunagappally or Kayamkulam. Explore nearby driving routes to FamilyDentalCare.</p>
        </div>
        <div class="revamp-directions city-route-grid">
            @foreach([
                ['Oachira', '9.9', '20', 'Oachira–Thamarakulam Rd'],
                ['Charummoodu', '9.8', '16', 'Kambisseri–Kattanam MLA Rd'],
                ['Karunagappally', '11.5', '25', 'NH 66 & Changankulangara Rd'],
                ['Kayamkulam', '12.4', '25', 'NH 66 / Kambisseri Link']
            ] as [$town, $distance, $minutes, $route])
                <a class="service-card" target="_blank" rel="noopener noreferrer" href="https://www.google.com/maps/dir/?api=1&amp;origin={{ rawurlencode($town . ', Kerala') }}&amp;destination={{ config('clinic.latitude') }},{{ config('clinic.longitude') }}&amp;travelmode=driving">
                    <div class="service-icon"><i class="fas fa-route" aria-hidden="true"></i></div>
                    <h3>From {{ $town }}</h3>
                    <dl class="city-route-stats">
                        <div><dt>Approx. distance</dt><dd>{{ $distance }} <span>km</span></dd></div>
                        <div><dt>Estimated drive</dt><dd>~{{ $minutes }} <span>min</span></dd></div>
                    </dl>
                    <p class="city-route-via">Via {{ $route }}</p>
                    <span class="revamp-link">Open directions <i class="fas fa-arrow-up-right-from-square" aria-hidden="true"></i></span>
                </a>
            @endforeach
        </div>
        <p class="revamp-note">Distances and driving times are approximate planning estimates supplied by the clinic. Your starting point, route and traffic can change these figures; Google Maps may suggest a different route. Clinic address: Kanjippuzha Pallimukk, Changankulangara – Kambisseri Road, Vallikunnam, Kerala 690501.</p>
    </div>
</section>
