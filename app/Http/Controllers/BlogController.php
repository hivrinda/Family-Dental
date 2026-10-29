<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Default curated local SEO articles based on the 30-day Local Search Visibility Action Plan.
     */
    private static function getDefaultArticles(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Invisible Aligners Cost in Kerala & Vallikunnam: Complete 2026 Price Guide',
                'slug' => 'invisible-aligners-cost-kerala',
                'category' => 'Aligners',
                'excerpt' => 'Discover transparent invisible aligners cost in Kerala, Vallikunnam, and Alappuzha. Compare clear aligners vs metal braces, starting prices, and 0% interest EMI options.',
                'content' => '
                    <p>Are you looking to straighten your crooked or crowded teeth without the awkward look of metal wires? <strong>Invisible aligners</strong> (clear braces) have become the #1 choice for adults and teenagers across Kerala. If you reside in <strong>Vallikunnam, Kambisseri, Kayamkulam, or Kanjippuzha</strong>, this guide breaks down the exact cost of invisible aligners, payment plans, and treatment expectations at Family Dental Clinic.</p>
                    
                    <h3>How Much Do Invisible Aligners Cost in Kerala?</h3>
                    <p>In Kerala, clear aligner treatments generally range between <strong>₹45,000 and ₹1,50,000</strong> depending on case complexity, whether both upper and lower arches need correction, and the total duration. At <strong>Family Dental Clinic, Kanjippuzha Pallimukk</strong>, we believe in transparent healthcare pricing without hidden consultation fees:</p>
                    <ul>
                        <li><strong>Mild Spacing or Crowding (6 to 8 months):</strong> Starting from ₹45,000 – ₹60,000</li>
                        <li><strong>Moderate Misalignment (9 to 14 months):</strong> ₹65,000 – ₹95,000</li>
                        <li><strong>Complex Bite Correction (14 to 18 months):</strong> Custom quotation with flexible monthly installments</li>
                    </ul>

                    <h3>Flexible 0% Interest EMI Options</h3>
                    <p>High upfront costs shouldn\'t keep you from smiling with confidence. We provide <strong>flexible monthly EMI options starting as low as ₹3,500/month</strong>. During your initial consultation, <strong>Dr. Farhana (BDS)</strong> conducts a detailed digital scan to show you a 3D preview of your future smile before you commit to any financial plan.</p>

                    <h3>Clear Aligners vs. Metal Braces: Cost vs. Lifestyle Comparison</h3>
                    <p>While traditional metal braces can cost ₹25,000 to ₹45,000, invisible aligners offer undeniable lifestyle advantages:</p>
                    <ul>
                        <li><strong>Virtually Invisible:</strong> Made of medical-grade transparent thermoplastic. Colleagues and friends won\'t even notice you are wearing them.</li>
                        <li><strong>Removable for Meals & Events:</strong> Eat your favorite Kerala foods without worrying about broken brackets.</li>
                        <li><strong>Pain-Free & Gentle:</strong> No sharp wires poking your cheeks or causing painful mouth ulcers.</li>
                        <li><strong>Fewer Clinic Visits:</strong> Perfect for busy professionals and students traveling from Kambisseri, Oachira, or Kayamkulam.</li>
                    </ul>

                    <div style="background: #f0fdfa; border-left: 4px solid #0f766e; padding: 1.5rem; margin: 2rem 0; border-radius: 8px;">
                        <h4 style="color: #0f766e; margin-bottom: 0.5rem;">🌟 Book Your Zero-Obligation Digital Smile Scan</h4>
                        <p style="margin-bottom: 1rem;">Curious whether you are an ideal candidate for clear aligners? Visit Dr. Farhana at Family Dental Clinic, Kanjippuzha Pallimukk.</p>
                        <a href="https://wa.me/917012761098?text=Hello%20Dr.%20Farhana,%20I%20would%20like%20to%20book%20a%20Zero-Obligation%20Smile%20Scan%20for%20Invisible%20Aligners." target="_blank" style="display: inline-block; background: #0f766e; color: white; padding: 0.75rem 1.5rem; border-radius: 9999px; text-decoration: none; font-weight: 600;">
                            Book Smile Scan via WhatsApp (+91 70127 61098)
                        </a>
                    </div>

                    <h3>Frequently Asked Questions on Aligners in Vallikunnam</h3>
                    <p><strong>Q: How many hours a day should I wear clear aligners?</strong><br>
                    For optimal results, aligners should be worn 20 to 22 hours per day, removing them only when eating, drinking hot beverages, and brushing.</p>
                    <p><strong>Q: Is Dr. Farhana certified in clear aligner therapy?</strong><br>
                    Yes, Dr. Farhana holds 8+ years of dedicated clinical experience and certified expertise in modern clear aligner planning and orthodontics.</p>
                ',
                'read_time' => '5 min read',
                'date' => 'October 10, 2026',
                'created_at' => '2026-10-10 10:00:00',
                'updated_at' => '2026-10-10 10:00:00',
                'image' => 'https://images.unsplash.com/photo-1598256989800-fe5f95da9787?q=80&w=800&auto=format&fit=crop'
            ],
            [
                'id' => 2,
                'title' => 'Clear Aligners vs. Metal Braces for Adults in Vallikunnam & Kayamkulam',
                'slug' => 'aligners-vs-braces-adults',
                'category' => 'Aligners',
                'excerpt' => 'Comparing invisible braces vs traditional metal braces for working professionals and students in Vallikunnam, Kambisseri, and Kayamkulam. Learn why clear aligners offer superior lifestyle flexibility.',
                'content' => '
                    <p>Many adults in <strong>Vallikunnam, Kambisseri, and Kayamkulam</strong> believe that orthodontic treatment is only meant for school children. However, more than 40% of patients seeking teeth alignment today are working professionals, college students, and brides/grooms preparing for weddings. If you want straight teeth without the "train-track" look of metal braces, clear aligners are your ideal solution.</p>

                    <h3>The Dilemma of Metal Braces for Working Professionals</h3>
                    <p>Traditional metal braces require metal brackets glued to each tooth joined with stainless steel wires. For teachers, bank executives, IT professionals, and business owners, metal braces often bring social self-consciousness during meetings, public speaking, and photos. Additionally, food particles frequently get trapped in metal brackets, requiring complex brushing routines after every snack.</p>

                    <h3>Why Adults Choose Clear Aligners at Family Dental Clinic</h3>
                    <ul>
                        <li><strong>100% Discreet Appearance:</strong> Custom-fabricated using high-precision 3D digital impressions to snugly fit your dental arch.</li>
                        <li><strong>Freedom to Eat What You Love:</strong> Pop the aligners out in 2 seconds before lunch or dinner. You have zero dietary restrictions.</li>
                        <li><strong>Superior Oral Hygiene:</strong> You can brush and floss normally, avoiding plaque accumulation and white spot lesions that often plague traditional braces wearers.</li>
                        <li><strong>Comfortable & Non-Invasive:</strong> Smooth edges ensure your inner lips and gums remain free from cuts and scrapes.</li>
                    </ul>

                    <h3>Treatment Duration: How Fast Can You See Results?</h3>
                    <p>Most adult aligner treatments at our <strong>Kanjippuzha clinic</strong> conclude within <strong>6 to 14 months</strong>. Noticeable tooth movement begins within the first 6 to 8 weeks. Each set of custom trays is worn for 7 to 10 days before advancing to the next progressive tray.</p>

                    <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 1.5rem; margin: 2rem 0;">
                        <h4 style="color: #0f172a; margin-bottom: 0.5rem;">👨‍⚕️ Consult Dr. Farhana (BDS) - Lead Dental Specialist</h4>
                        <p style="color: #64748b; margin-bottom: 1rem;">Benefit from gentle, patient-first orthodontic care right in Kanjippuzha Pallimukk, Changankulangara - Kambisseri Road.</p>
                        <a href="tel:+917012761098" style="display: inline-block; background: #0f766e; color: white; padding: 0.75rem 1.5rem; border-radius: 9999px; text-decoration: none; font-weight: 600; margin-right: 0.5rem;">
                            Call for Consultation (+91 70127 61098)
                        </a>
                        <a href="https://wa.me/917012761098?text=Hello%20Dr.%20Farhana,%20I%20would%20like%20to%20consult%20regarding%20Clear%20Aligners%20for%20Adults." target="_blank" style="display: inline-block; background: #25d366; color: white; padding: 0.75rem 1.5rem; border-radius: 9999px; text-decoration: none; font-weight: 600;">
                            WhatsApp Us
                        </a>
                    </div>
                ',
                'read_time' => '4 min read',
                'date' => 'October 12, 2026',
                'created_at' => '2026-10-12 10:00:00',
                'updated_at' => '2026-10-12 10:00:00',
                'image' => 'https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?q=80&w=800&auto=format&fit=crop'
            ],
            [
                'id' => 3,
                'title' => 'Single-Sitting Root Canal vs. Tooth Extraction: Emergency Pain Relief in Vallikunnam',
                'slug' => 'single-sitting-root-canal-vallikunnam',
                'category' => 'General Care',
                'excerpt' => 'Suffering from emergency toothache? Learn why a pain-free single sitting root canal (RCT) with rotary endodontics is far better than tooth extraction at Family Dental Clinic, Kanjippuzha.',
                'content' => '
                    <p>A severe, throbbing toothache that keeps you awake at night is one of the most agonizing pains anyone can experience. When dental pain strikes, many patients in <strong>Vallikunnam, Kanjippuzha, and Kambisseri</strong> ask: <em>"Doctor, should I just extract the tooth to get rid of the pain immediately?"</em></p>
                    <p>The clear clinical answer from <strong>Dr. Farhana (BDS)</strong> is: <strong>Always preserve your natural tooth whenever possible.</strong> A modern <strong>Single-Sitting Root Canal Treatment (RCT)</strong> eliminates pain instantly while saving your real tooth for decades to come.</p>

                    <h3>Why Pulling Your Tooth Out (Extraction) Costs More in the Long Run</h3>
                    <p>Extracting a damaged tooth might seem like a quick fix, but losing a natural tooth triggers serious oral health consequences:</p>
                    <ul>
                        <li><strong>Adjacent Teeth Shift:</strong> Neighboring teeth gradually tilt into the empty space, altering your natural bite and causing jaw joint (TMJ) discomfort.</li>
                        <li><strong>Jawbone Deterioration:</strong> Without a tooth root to stimulate the bone, the jawbone in that area recedes, aging your facial structure prematurely.</li>
                        <li><strong>Higher Replacement Cost:</strong> Replacing an extracted tooth with a dental implant or bridge costs significantly more than saving it with a root canal.</li>
                    </ul>

                    <h3>The Modern Difference: Painless Single-Sitting Rotary RCT</h3>
                    <p>Gone are the days when a root canal required 3 or 4 painful visits with manual metal needles. At <strong>Family Dental Clinic</strong>, we utilize <strong>advanced electric rotary endodontics</strong>:</p>
                    <ul>
                        <li><strong>Completed in One Visit (45–60 mins):</strong> The infected pulp is carefully cleaned, disinfected, and hermetically sealed in a single comfortable session.</li>
                        <li><strong>100% Pain-Free Local Anesthesia:</strong> Advanced numbing techniques ensure you feel absolutely zero pain during the procedure.</li>
                        <li><strong>Immediate Relief:</strong> As soon as the inflamed nerve tissue is removed, the throbbing pain disappears completely.</li>
                    </ul>

                    <h3>Root Canal Cost & Long-Lasting Ceramic Crowns</h3>
                    <p>Following single-sitting root canal therapy, we protect your tooth with a precision-milled crown (Zirconia or Porcelain-Fused-to-Metal) ensuring it can withstand heavy chewing just like an untouched tooth. Pricing in our Kanjippuzha clinic is transparent and pocket-friendly, with complete treatment estimates provided up-front.</p>

                    <div style="background: #fef2f2; border-left: 4px solid #ef4444; padding: 1.5rem; margin: 2rem 0; border-radius: 8px;">
                        <h4 style="color: #b91c1c; margin-bottom: 0.5rem;">🚨 Suffering from Severe Toothache Right Now?</h4>
                        <p style="color: #7f1d1d; margin-bottom: 1rem;">Do not wait for infection to spread. Our emergency dental team in Kanjippuzha Pallimukk provides fast relief and priority appointments.</p>
                        <a href="tel:+917012761098" style="display: inline-block; background: #dc2626; color: white; padding: 0.75rem 1.5rem; border-radius: 9999px; text-decoration: none; font-weight: 700;">
                            Emergency Call: +91 70127 61098
                        </a>
                        <a href="https://wa.me/917012761098?text=EMERGENCY:%20I%20have%20severe%20toothache%20and%20need%20immediate%20assistance%20at%20Family%20Dental%20Clinic." target="_blank" style="display: inline-block; background: #25d366; color: white; padding: 0.75rem 1.5rem; border-radius: 9999px; text-decoration: none; font-weight: 600; margin-left: 0.5rem;">
                            WhatsApp Emergency
                        </a>
                    </div>
                ',
                'read_time' => '5 min read',
                'date' => 'October 14, 2026',
                'created_at' => '2026-10-14 10:00:00',
                'updated_at' => '2026-10-14 10:00:00',
                'image' => 'https://images.unsplash.com/photo-1629909613654-28e377c37b09?q=80&w=800&auto=format&fit=crop'
            ],
            [
                'id' => 4,
                'title' => 'Dental Implants vs. Dentures: Why Implants Are the Gold Standard',
                'slug' => 'why-dental-implants-are-the-best-solution',
                'category' => 'Implants',
                'excerpt' => 'Explore the long-term benefits of permanent dental implants over temporary dentures, including bone preservation and natural speech in Vallikunnam.',
                'content' => '
                    <p>Replacing a missing tooth is not just about aesthetics; it is critical for your speech, chewing ability, and long-term oral structure. While dentures have been the traditional choice for decades, modern dentistry considers dental implants to be the gold standard. Here is why.</p>
                    
                    <h3>1. Natural Look, Feel, and Function</h3>
                    <p>Dental implants are designed to look and function exactly like your natural teeth. The implant post acts as a replacement for the tooth root, fusing directly to your jawbone. This provides unmatched stability—you can eat your favorite foods, speak clearly, and smile confidently without worrying about slipping dentures.</p>
                    
                    <h3>2. Jawbone Preservation</h3>
                    <p>When you lose a tooth, the jawbone underneath begins to deteriorate due to lack of stimulation. Implants are the only tooth replacement option that stimulates the bone, preventing bone loss and preserving your facial structure over time.</p>
                    
                    <h3>3. Exceptional Durability</h3>
                    <p>While dentures and bridges typically need to be replaced every 5 to 10 years, dental implants are built to last. With proper care and regular checkups, an implant can last a lifetime, making it the most cost-effective long-term solution.</p>
                    
                    <h3>4. Zero Impact on Adjacent Teeth</h3>
                    <p>Traditional dental bridges require grinding down neighboring teeth to support the bridge. Implants are standalone structures, meaning they support themselves without compromising the health of adjacent healthy teeth.</p>
                ',
                'read_time' => '5 min read',
                'date' => 'October 08, 2026',
                'created_at' => '2026-10-08 10:00:00',
                'updated_at' => '2026-10-08 10:00:00',
                'image' => 'https://images.unsplash.com/photo-1606811971618-4486d14f3f99?q=80&w=600&auto=format&fit=crop'
            ]
        ];
    }

    /**
     * Unified fetch: pulls from DB first, falls back to default local articles, and optionally merges with API.
     */
    public static function fetchAllArticles(): array
    {
        $articles = [];
        $slugsSeen = [];
        $databaseAvailable = false;

        // 1. Try fetching from local database model if available
        try {
            if (class_exists(Blog::class)) {
                $dbBlogs = Blog::orderBy('created_at', 'desc')->get();
                $databaseAvailable = true;
                if ($dbBlogs->isNotEmpty()) {
                    foreach ($dbBlogs as $b) {
                        $item = [
                            'id' => $b->id,
                            'title' => $b->title,
                            'slug' => $b->slug,
                            'category' => $b->category,
                            'excerpt' => $b->excerpt,
                            'content' => $b->content,
                            'read_time' => $b->read_time,
                            'date' => $b->date,
                            'image' => $b->image,
                            'created_at' => (string) $b->created_at,
                            'updated_at' => (string) $b->updated_at,
                        ];
                        $articles[] = $item;
                        $slugsSeen[$b->slug] = true;
                    }
                }
            }
        } catch (\Exception $e) {
            // DB connection or migration not ready yet
        }

        // Use sample guides only before the database is available. Once it is
        // ready, respect admin edits and deletions, including an empty blog table.
        if (!$databaseAvailable) {
            foreach (self::getDefaultArticles() as $defaultArticle) {
                $articles[] = $defaultArticle;
                $slugsSeen[$defaultArticle['slug']] = true;
            }
        }

        // 3. Try to fetch additional external blogs if API is responsive
        try {
            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'X-API-KEY' => 'pk_JROGfCHoFRcJFlGZ68Ff7BPSxdVSyqvJ'
            ])->timeout(3)->get('https://blogs.task19.com/api/v1/projects/blogs');

            if ($response->successful()) {
                $data = $response->json();
                $apiBlogs = $data['blogs'] ?? [];
                
                foreach ($apiBlogs as $blog) {
                    $slug = Str::slug($blog['title'] ?? '');
                    if ($slug && !isset($slugsSeen[$slug])) {
                        $contentHtml = '';
                        if (isset($blog['sections']) && is_array($blog['sections'])) {
                            foreach ($blog['sections'] as $section) {
                                if (!empty($section['image_path'])) {
                                    $imgUrl = str_starts_with($section['image_path'], '/') 
                                        ? 'https://blogs.task19.com' . $section['image_path'] 
                                        : $section['image_path'];
                                    $contentHtml .= '<div class="blog-section-image" style="margin: 2rem 0; text-align: center;"><img src="' . htmlspecialchars($imgUrl) . '" style="max-width: 100%; border-radius: 8px;"></div>';
                                }
                                if (!empty($section['text_content'])) {
                                    $rawText = $section['text_content'];
                                    // Check if text already contains HTML markup (e.g., <p>, <span>, <strong>, <div>)
                                    if ($rawText !== strip_tags($rawText)) {
                                        $contentHtml .= '<div style="margin-bottom: 1.5rem; line-height: 1.8;">' . $rawText . '</div>';
                                    } else {
                                        $contentHtml .= '<p style="margin-bottom: 1.5rem; line-height: 1.8;">' . nl2br(htmlspecialchars($rawText)) . '</p>';
                                    }
                                }
                            }
                        }

                        $articles[] = [
                            'title' => $blog['title'],
                            'slug' => $slug,
                            'category' => is_array($blog['category'] ?? null) ? ($blog['category']['name'] ?? 'Dental Care') : ($blog['category'] ?? 'Dental Care'),
                            'excerpt' => $blog['excerpt'] ?? Str::limit(strip_tags($contentHtml), 140),
                            'content' => $contentHtml ?: '<p>' . ($blog['excerpt'] ?? '') . '</p>',
                            'read_time' => $blog['read_time'] ?? '4 min read',
                            'date' => isset($blog['created_at']) ? \Carbon\Carbon::parse($blog['created_at'])->format('F j, Y') : date('F j, Y'),
                            'created_at' => $blog['created_at'] ?? now()->toDateTimeString(),
                            'updated_at' => $blog['updated_at'] ?? now()->toDateTimeString(),
                            'image' => isset($blog['cover_image']) && str_starts_with($blog['cover_image'], '/') ? 'https://blogs.task19.com' . $blog['cover_image'] : ($blog['cover_image'] ?? ''),
                        ];
                        $slugsSeen[$slug] = true;
                    }
                }
            }
        } catch (\Exception $e) {
            // Silently fall back to already collected articles
        }

        return $articles;
    }

    // Blog Listing Page
    public function index(Request $request)
    {
        $selectedCategory = $request->query('category');
        $categories = ['All', 'Aligners', 'Implants', 'General Care'];
        
        $articles = self::fetchAllArticles();
        
        // Filter by category if selected
        if ($selectedCategory && $selectedCategory !== 'All') {
            $articles = array_values(array_filter($articles, function($blog) use ($selectedCategory) {
                return strtolower($blog['category'] ?? '') === strtolower($selectedCategory);
            }));
        }

        $page = max(1, (int) $request->query('page', 1));
        $perPage = 6;
        $articles = new LengthAwarePaginator(
            array_slice($articles, ($page - 1) * $perPage, $perPage),
            count($articles),
            $perPage,
            $page,
            ['path' => $request->url(), 'query' => $request->except('page')]
        );

        return view('blog.index', compact('articles', 'categories', 'selectedCategory'));
    }

    // Blog Details Page
    public function show($slug)
    {
        $blogs = self::fetchAllArticles();
        $article = null;

        foreach ($blogs as $blog) {
            if ($blog['slug'] === $slug) {
                $article = $blog;
                break;
            }
        }

        if ($article) {
            // Get related articles (exclude current one)
            $related = array_values(array_filter($blogs, function($blog) use ($slug) {
                return $blog['slug'] !== $slug;
            }));
            $related = array_slice($related, 0, 3);

            return view('blog.show', compact('article', 'related'));
        }

        abort(404);
    }

    // Homepage latest articles helper
    public static function getLatestArticles()
    {
        $blogs = self::fetchAllArticles();
        return array_slice($blogs, 0, 3);
    }

    // XML Sitemap Generator
    public function sitemap()
    {
        $articles = self::fetchAllArticles();
        return response()->view('sitemap', compact('articles'))
            ->header('Content-Type', 'text/xml');
    }
}
