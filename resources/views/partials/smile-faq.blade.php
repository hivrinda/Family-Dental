@php
    $smileFaqs = [
        ['question' => 'How long do porcelain dental veneers last, and do they look natural?', 'answer' => 'High-grade porcelain (E-Max) veneers may last 10 to 15 years or longer with good oral hygiene and regular reviews. They are individually shaded to complement natural enamel translucency and resist staining from drinks such as tea and coffee. Longevity depends on your bite, habits and care; veneers may eventually need replacement.'],
        ['question' => 'Should I get clear aligners or dental veneers for my smile correction?', 'answer' => 'Clear aligners move your natural teeth and may suit crowding, rotation or bite misalignment. Selected mild-to-moderate cases may take 6 to 14 months, while complex cases can take longer. Veneers may suit well-aligned teeth with chips, small gaps or permanent stains. Some cosmetic corrections can be completed in 1 to 2 visits, but porcelain veneers may need preparation and laboratory appointments. A clinical assessment helps you choose.'],
        ['question' => 'Is dental implant surgery painful?', 'answer' => 'Implant placement is performed under local anaesthesia to manage pain during the procedure. You may feel pressure, and soreness or swelling can occur afterwards. Recovery and the return to light activities depend on the procedure and your health. Your clinician will explain pain relief, aftercare and when to resume your normal routine.'],
        ['question' => 'How frequently will I need to visit the clinic during clear aligner treatment?', 'answer' => 'Clear aligner reviews are typically planned every 6 to 8 weeks to check progress and provide the next tray sets, making visits easier to plan from Kayamkulam or Oachira. Your clinician may recommend more frequent visits depending on your treatment stage, fit and progress.'],
        ['question' => 'Are interest-free monthly installment (EMI) plans available?', 'answer' => 'Yes. We offer phased payments and zero-interest monthly EMI options for smile corrections, veneers, aligners and dental implants. Availability is subject to eligibility and the agreed payment terms. Ask for an itemized estimate and confirmation of instalment amounts, tenure and any applicable charges before starting treatment.'],
    ];
    $faqSchema = ['@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => array_map(fn ($faq) => ['@type' => 'Question', 'name' => $faq['question'], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $faq['answer']]], $smileFaqs)];
@endphp
<section id="faq" class="faq-section-new">
    <div class="container faq-container">
        <div class="faq-left">
            <span class="faq-label-small">FAQ</span>
            <h2 class="faq-title-serif">Your smile <span class="serif-italic">questions</span></h2>
            <p class="faq-subtitle">Understand your options before choosing treatment.</p>
            <a href="tel:+917012761098" class="btn-faq-contact">Talk to our team</a>
        </div>
        <div class="faq-right">
            @foreach($smileFaqs as $faq)
                <details class="revamp-faq" name="smile-faq">
                    <summary>{{ $faq['question'] }}</summary>
                    <p>{{ $faq['answer'] }}</p>
                </details>
            @endforeach
        </div>
    </div>
</section>
<script type="application/ld+json">{!! json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) !!}</script>
