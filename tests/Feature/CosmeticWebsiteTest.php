<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class CosmeticWebsiteTest extends TestCase
{
    use RefreshDatabase;

    public function test_homepage_has_regional_content_and_matching_faq_schema(): void
    {
        Http::fake(['*' => Http::response(['blogs' => []])]);
        $response = $this->get('/')->assertOk();
        $response->assertSee('Dental Center')->assertSee('Karunagappally')
            ->assertSee('Smile Corrections')->assertSee('Dental Veneers')
            ->assertDontSee('testimonial-card', false)->assertDontSee('Playing patient story');
        preg_match_all('~<script type="application/ld\+json">(.*?)</script>~s', $response->getContent(), $matches);
        $faq = null;
        foreach ($matches[1] as $json) {
            $schema = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
            if (($schema['@type'] ?? null) === 'FAQPage') {
                $faq = $schema;
            }
        }
        $this->assertNotNull($faq);
        $this->assertCount(5, $faq['mainEntity']);
        foreach ($faq['mainEntity'] as $question) {
            $response->assertSee($question['name'])->assertSee($question['acceptedAnswer']['text']);
        }
    }

    public function test_flagship_links_have_unique_service_destinations(): void
    {
        $response = $this->get('/services')->assertOk();
        foreach (['smile-corrections', 'veneers', 'aligners', 'implants', 'family-care'] as $id) {
            $this->assertSame(1, substr_count($response->getContent(), 'id="'.$id.'"'), $id);
        }
        $response->assertDontSee('Playing patient story')->assertDontSee('Real Patient Video Testimonials');
    }

    public function test_wireframe_navigation_and_booking_have_real_destinations(): void
    {
        Http::fake(['*' => Http::response(['blogs' => []])]);
        $response = $this->get('/')->assertOk();
        $html = $response->getContent();
        foreach (['smile-corrections', 'veneers', 'aligners', 'implants', 'about', 'before-after', 'booking'] as $id) {
            $this->assertSame(1, substr_count($html, 'id="'.$id.'"'), $id);
            $response->assertSee('href="/#'.$id.'"', false);
        }
        $response->assertSee('Book Free Smile Assessment')->assertSee('Digital 3D Smile Design')
            ->assertSee('Approx. 20–25-min drive')->assertSee('id="smile-booking-form"', false)
            ->assertSee('action="https://wa.me/917012761098"', false);
        $this->assertSame(1, substr_count($html, 'site-navigation.js'));
    }

    public function test_comprehensive_care_and_doctor_details_are_consistent_on_both_pages(): void
    {
        Http::fake(['*' => Http::response(['blogs' => []])]);
        foreach (['/', '/services'] as $path) {
            $response = $this->get($path)->assertOk();
            $html = $response->getContent();
            foreach (['root-canal', 'teeth-whitening', 'zirconia-crowns', 'kids-dentistry', 'wisdom-teeth', 'gum-therapy'] as $id) {
                $this->assertSame(1, substr_count($html, 'id="'.$id.'"'), $path.' '.$id);
            }
            $response->assertSee('10,000+ completed smile treatments')->assertSee('Kerala Dental Council Registered')
                ->assertSee('Rotary Endodontics & Electronic Apex Locators', false)->assertSee('Class-B Autoclave Sterilization')
                ->assertSee('Transparent Itemized Estimates');
            $this->assertLessThan(strpos($html, 'id="family-care"'), strpos($html, 'id="implants"'));
        }
    }

    public function test_gallery_discloses_concepts_and_uses_local_assets(): void
    {
        Http::fake(['*' => Http::response(['blogs' => []])]);
        foreach (['/', '/services'] as $path) {
            $response = $this->get($path)->assertOk();
            $response->assertSee('Digitally generated treatment previews')->assertSee('not documented clinical outcomes')
                ->assertSee('2 visits in this example')->assertSee('9 months in this example');
            $this->assertSame(1, substr_count($response->getContent(), 'id="before-after"'));
            foreach (['bonding', 'veneers', 'aligners', 'implant'] as $asset) {
                $response->assertSee('images/smile-gallery/'.$asset.'.png');
                $this->assertFileExists(public_path('images/smile-gallery/'.$asset.'.png'));
            }
        }
    }

    public function test_clinic_schema_and_route_coordinates_match_on_public_pages(): void
    {
        Http::fake(['*' => Http::response(['blogs' => []])]);
        foreach (['/', '/services', '/blog'] as $path) {
            $response = $this->get($path)->assertOk();
            preg_match_all('~<script type="application/ld\+json">(.*?)</script>~s', $response->getContent(), $matches);
            $clinics = [];
            foreach ($matches[1] as $json) {
                $schema = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
                if (in_array('Dentist', (array) ($schema['@type'] ?? []), true)) $clinics[] = $schema;
            }
            $this->assertCount(1, $clinics);
            $clinic = $clinics[0];
            $this->assertSame('https://familydentalcare.in/#clinic', $clinic['@id']);
            $this->assertSame(9.1202, $clinic['geo']['latitude']);
            $this->assertSame(76.5637, $clinic['geo']['longitude']);
            $this->assertSame('+917012761098', $clinic['telephone']);
            $this->assertSame('Kanjippuzha Pallimukk, Changankulangara Kambisseri Road', $clinic['address']['streetAddress']);
            $this->assertSame('09:00', $clinic['openingHoursSpecification'][0]['opens']);
            $this->assertSame('18:30', $clinic['openingHoursSpecification'][0]['closes']);
            $this->assertCount(6, $clinic['openingHoursSpecification'][0]['dayOfWeek']);
            $this->assertSame(['Orthodontics', 'Prosthodontics', 'Cosmetic Dentistry'], array_column($clinic['medicalSpecialty'], 'name'));
            if ($path !== '/blog') $response->assertSee('destination=9.1202,76.5637', false)->assertSee('maps?q=9.1202,76.5637', false);
        }
    }
}
