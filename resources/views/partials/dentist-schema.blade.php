@php
    $clinicSchema = [
        '@context' => 'https://schema.org',
        '@type' => ['Dentist', 'MedicalClinic'],
        '@id' => 'https://familydentalcare.in/#clinic',
        'name' => 'FamilyDentalCare',
        'url' => 'https://familydentalcare.in/',
        'telephone' => '+917012761098',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => 'Kanjippuzha Pallimukk, Changankulangara Kambisseri Road',
            'addressLocality' => 'Vallikunnam',
            'addressRegion' => 'Kerala',
            'postalCode' => '690501',
            'addressCountry' => 'IN',
        ],
        'geo' => [
            '@type' => 'GeoCoordinates',
            'latitude' => config('clinic.latitude'),
            'longitude' => config('clinic.longitude'),
        ],
        'hasMap' => 'https://www.google.com/maps/search/?api=1&query=' . config('clinic.latitude') . ',' . config('clinic.longitude'),
        'openingHoursSpecification' => [[
            '@type' => 'OpeningHoursSpecification',
            'dayOfWeek' => array_map(fn ($day) => 'https://schema.org/' . $day, ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday']),
            'opens' => '09:00',
            'closes' => '18:30',
        ]],
        'employee' => [
            '@type' => 'Person',
            'name' => 'Dr. Farhana',
            'jobTitle' => 'Chief Dental Surgeon',
            'hasCredential' => ['@type' => 'EducationalOccupationalCredential', 'name' => 'BDS (Bachelor of Dental Surgery)'],
        ],
        'medicalSpecialty' => array_map(fn ($name) => [
            '@type' => 'MedicalSpecialty',
            '@id' => 'https://familydentalcare.in/#specialty-' . strtolower(str_replace(' ', '-', $name)),
            'name' => $name,
        ], ['Orthodontics', 'Prosthodontics', 'Cosmetic Dentistry']),
        'areaServed' => array_map(fn ($town) => ['@type' => 'City', 'name' => $town], ['Oachira', 'Kayamkulam', 'Karunagappally', 'Charummoodu', 'Mavelikara', 'Haripad', 'Alappuzha', 'Vallikunnam']),
    ];
@endphp
<script type="application/ld+json">{!! json_encode($clinicSchema, JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) !!}</script>
