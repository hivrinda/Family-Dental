<section class="doctor-authority bg-alt" id="{{ request()->is('services') ? 'doctor-bio' : 'about' }}" aria-labelledby="doctor-authority-title">
    <div class="container about-inner">
        <div class="about-image">
            <img src="https://images.unsplash.com/photo-1606811841689-23dfddce3e95?q=80&w=800&auto=format&fit=crop" alt="Illustrative dental consultation for cosmetic and implant care near Oachira and Kayamkulam" loading="lazy" class="doctor-consultation-image">
            <p class="revamp-note doctor-image-caption">Dental consultation illustration</p>
        </div>
        <div class="about-content">
            <span class="faq-label-small">CLINICAL LEADERSHIP</span>
            <h2 id="doctor-authority-title">Meet Dr. Farhana, <span class="serif-italic">BDS</span></h2>
            <p>Registered with the <strong>Kerala Dental Council</strong>, Dr. Farhana leads FamilyDentalCare with <strong>8+ years of clinical experience</strong>, focusing on conservative cosmetic dentistry, implant treatment planning and patient comfort.</p>
            <p>Welcoming patients from Oachira, Kayamkulam and surrounding areas, she combines personalised digital planning with a clear explanation of your options, expected treatment stages and costs.</p>
            @if(config('clinic.verified_smile_treatments'))
                <p class="doctor-treatment-count"><strong>10,000+ completed smile treatments</strong> across the clinic's recorded clinical care.</p>
            @endif
            <div class="doctor-credentials" aria-label="Clinical credentials">
                <span><i class="fas fa-graduation-cap" aria-hidden="true"></i> BDS</span>
                <span><i class="fas fa-id-card" aria-hidden="true"></i> Kerala Dental Council Registered</span>
                <span><i class="fas fa-user-md" aria-hidden="true"></i> 8+ Years Clinical Experience</span>
            </div>
            <div class="hero-actions">
                <a href="{{ url('/') }}#booking" class="btn btn-primary">Book with Dr. Farhana</a>
                <a href="https://wa.me/917012761098?text=Hello%20Dr.%20Farhana%2C%20I%20would%20like%20to%20book%20a%20consultation%20at%20FamilyDentalCare." target="_blank" rel="noopener noreferrer" class="btn btn-outline"><i class="fab fa-whatsapp" aria-hidden="true"></i> Chat on WhatsApp</a>
            </div>
        </div>
    </div>
    <div class="container technology-section">
        <div class="section-header">
            <h2>Digital Planning. Careful Treatment. Clear Costs.</h2>
            <p>Technology and care processes that support your treatment journey.</p>
        </div>
        <ul class="clinical-technology-grid">
            <li><i class="fas fa-cube" aria-hidden="true"></i><div><h3>3D Digital Smile & Aligner Planning</h3><p>Preview your proposed smile and planned tooth movements before treatment. Digital previews guide planning; individual results may differ.</p></div></li>
            @if(config('clinic.verified_technology_stack'))
                <li><i class="fas fa-tooth" aria-hidden="true"></i><div><h3>Rotary Endodontics & Electronic Apex Locators</h3><p>Computerised rotary instruments and electronic working-length measurements support precise root canal care. Single-visit treatment depends on your clinical assessment.</p></div></li>
                <li><i class="fas fa-shield-virus" aria-hidden="true"></i><div><h3>Class-B Autoclave Sterilization</h3><p>Hospital-grade Class-B autoclave sterilization, a four-tier infection-control protocol and sealed instrument pouches support careful clinical hygiene.</p></div></li>
            @endif
            <li><i class="fas fa-file-invoice" aria-hidden="true"></i><div><h3>Transparent Itemized Estimates</h3><p>Understand your proposed treatment fees upfront. Any additional care or changes to your plan are discussed before proceeding.</p></div></li>
        </ul>
    </div>
</section>
