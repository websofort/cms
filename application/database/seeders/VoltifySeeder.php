<?php

namespace Database\Seeders;

use App\Models\Frontend;
use App\Models\Page;
use Illuminate\Database\Seeder;

class VoltifySeeder extends Seeder
{
    public function run()
    {

        $frontend = Frontend::where('data_keys', 'banner.content')->first();
        $data_values = [
            "has_image" => "1",
            "top_heading" => "A trusted Smart meter",
            "heading" => "Dynamischer Stromtarif: Flexibel und kosteneffizient für moderne Verbraucher",
            "sub_heading" => "In einer Welt, in der Strompreise schwanken und die Verantwortung für unsere Umwelt immer wichtiger wird, bietet Voltify Ihnen die Lösung: Unsere dynamischen Stromtarife passen sich flexibel an die aktuellen Marktpreise an und liefern Ihnen dabei 100% erneuerbare Energie.",
            "banner_image" => "676d50be2d2441735217342.png"];
        if ($frontend) {
            $frontend->update([
                'data_values' => $data_values
            ]);
        }


        $frontend = Frontend::where('data_keys', 'service.content')->first();
        $data_values = [
            'top_heading' => 'What We Do',
            'heading' => 'Gemeinsam die Energiezukunft gestalten',
            'sub_heading' => 'Schließen Sie sich der Voltify-Bewegung an und profitieren Sie von einer zukunftsorientierten Energieversorgung, die sowohl Ihren Geldbeutel als auch unseren Planeten schont. Kontaktieren Sie uns jetzt, um Ihr individuelles Angebot zu erhalten. Voltify – Ihr Schlüssel zu smarter und nachhaltiger Energie!'
        ];
        if ($frontend) {
            $frontend->update([
                'data_values' => $data_values
            ]);
        }


        $frontend = Frontend::where('data_keys', 'choose_us.content')->first();
        $data_values = [
            "has_image" => "1",
            "top_heading" => "Why Choose Us",
            "heading" => "Warum Voltify die smarte Wahl für Ihre Energie ist",
            "sub_heading" => "Mit Voltify profitieren Sie von kosteneffizienter Stromversorgung, die sowohl Ihr Budget schont als auch aktiv zum Schutz unseres Planeten beiträgt – egal, ob Sie privat oder geschäftlich agieren. Nutzen Sie die Chance, Ihre Stromkosten zu senken und gleichzeitig die Energiezukunft mitzugestalten.",
            "top_heading_2" => "Experienced digital agency in Rejon. Innovative solutions for business success.",
            "sub_heading_2" => "Rather than focusing solely on technology platforms, it is important to also prioritize leadership skills and the seamless integration of wireless bandwidth to achieve optimal results. This approach allows for efficient and effective communication without any obstacles or barriers.",
            "url" => "#",
            "choose_image" => "676d583fb40651735219263.png"];
        if ($frontend) {
            $frontend->update([
                'data_values' => $data_values
            ]);
        }

        // Creating new 'choose_us.element' entries
        $data_values = ["service_icon" => "<i class=\"fas fa-piggy-bank\"></i>",
            "title" => "Sparen Sie bares Geld",
            "description" => "Unsere dynamischen Tarife passen sich den Marktpreisen an und helfen Ihnen, Ihre Energiekosten zu reduzieren."];
        Frontend::create([
            'data_keys' => 'choose_us.element',
            'data_values' => $data_values
        ]);

        $data_values = ["service_icon" => "<i class=\"fas fa-bolt\"></i>",
            "title" => "Nachhaltige Energie",
            "description" => "Wir liefern Ihnen 100% grünen Strom, der ausschließlich aus erneuerbaren Quellen stammt"];
        Frontend::create([
            'data_keys' => 'choose_us.element',
            'data_values' => $data_values
        ]);

        $data_values = ["service_icon" => "<i class=\"las la-file-invoice-dollar\"></i>",
            "title" => "Flexible Tarife für alle Bedürfnisse",
            "description" => "Ob für Ihr Zuhause oder Ihr Unternehmen, unsere Tarife bieten Ihnen maßgeschneiderte Lösungen"];
        Frontend::create([
            'data_keys' => 'choose_us.element',
            'data_values' => $data_values
        ]);

        $data_values = ["service_icon" => "<i class=\"fas fa-cogs\"></i>",
            "title" => "Intelligente Verbrauchssteuerung",
            "description" => "Optimieren Sie Ihren Energieverbrauch und nutzen Sie unsere Tarife effizient, um Kosten zu senken."];

        Frontend::create([
            'data_keys' => 'choose_us.element',
            'data_values' => $data_values
        ]);


         $frontend = Frontend::where('data_keys', 'call_to_action.content')->first();
        $data_values = [
            "has_image" => "1",
            "top_heading" => "Call To Action",
            "heading" => "Gemeinsam die Energiezukunft gestalten",
            "description" => "Schließen Sie sich der Voltify-Bewegung an und profitieren Sie von einer zukunftsorientierten Energieversorgung, die sowohl Ihren Geldbeutel als auch unseren Planeten schont.\r\n\r\nKontaktieren Sie uns jetzt, um Ihr individuelles Angebot zu erhalten. Voltify – Ihr Schlüssel zu smarter und nachhaltiger Energie!",
            "call_to_action_1" => "676d78a802d181735227560.png"
        ];
        if ($frontend) {
            $frontend->update([
                'data_values' => $data_values
            ]);
        }

        $frontend = Frontend::where('data_keys', 'savings.content')->first();
        $data_values = [
            "heading" => "Lohnt sich ein dynamischer Stromtarif? Vorteile von einem variablen Tarif"
        ];
        if ($frontend) {
            $frontend->update([
                'data_values' => $data_values
            ]);
        }

        $data_values = [
            "service_icon" => "<i class=\"fas fa-chart-line\"></i>",
            "title" => "Kosteneffizienz",
            "description" => "Flexibel anpassbare Tarife, die Ihnen helfen, Ihre monatlichen Stromkosten zu senken."
        ];
        Frontend::create([
            'data_keys' => 'savings.element',
            'data_values' => $data_values
        ]);

        $data_values = [
            "service_icon" => "<i class=\"fas fa-users-cog\"></i>",
            "title" => "Sicherheit und Transparenz",
            "description" => "Volle Kontrolle über Ihre Stromkosten dank transparenter Tarife."
        ];
        Frontend::create([
            'data_keys' => 'savings.element',
            'data_values' => $data_values
        ]);

        $data_values = [
            "service_icon" => "<i class=\"fas fa-hand-holding-heart\"></i>",
            "title" => "Ehrlichkeit",
            "description" => "Wir setzen auf echte Gespräche und direkten Austausch. So gewährleisten wir, dass eure Anliegen ernst genommen und schnell gelöst werden."
        ];

        Frontend::create([
            'data_keys' => 'savings.element',
            'data_values' => $data_values
        ]);

        $data_values = [
            "service_icon" => "<i class=\"las la-phone\"></i>",
            "title" => "Direkter Kontakt zur Geschäftsführung",
            "description" => "Kein Online-Kundenservice, keine Bots, keine Warteschleifen – bei uns erhalten Sie persönliche und schnelle Unterstützung persönlich von der Geschäftsführung."
        ];

        Frontend::create([
            'data_keys' => 'savings.element',
            'data_values' => $data_values
        ]);



        $data_values = [
            "service_icon" => "<i class=\"fas fa-leaf\"></i>",
            "title" => "Nachhaltigkeit",
            "description" => "100% Ökostrom – tragen Sie aktiv zur Energiewende bei."
        ];
        Frontend::create([
            'data_keys' => 'savings.element',
            'data_values' => $data_values
        ]);

        $frontend = Frontend::where('data_keys', 'understanding_pricing.content')->first();
        $data_values = [
            "heading" => "Wie funktioniert der dynamische Tarif und der Stromverbrauch im Detail?",
            "sub_heading" => "Der Kern eines dynamischen Stromtarifs ist die Nutzung von einem Smart Meter, das intelligente Messsystem. Diese digitalen Stromzähler überwachen den Stromverbrauch in Echtzeit und kommunizieren die Daten an die Energieversorger. Auf Basis dieser Informationen können Stromanbieter den Preis pro kWh dynamisch anpassen.\r\n\r\nDas System funktioniert durch den direkten Bezug des Börsenpreis für Strom, wo die Preise stündlich auf Basis von Angebot und Nachfrage festgelegt werden. Systeme wie der EPEX Spot ermöglichen es, dass bei den Börsenpreisen für Strom eine Grundlage zur Festlegung des Endverbraucherpreises vorhanden ist. Man kann durch den Strompreis an der Börse den variablen Preis pro Stunde für einen Haushalt festlegen. Die Preise an der Strombörse bieten so einen guten Überblick als Vergleich. Diese sind stündlich abrufbar. Bei Voltify kann man ganz leicht den Tarifrechner nutzen und hier Cent pro Kilowattstunde berechnen.\r\n\r\nDurch unseren Tarif wird es möglich, besonders günstig Energie zu bekommen und grüne Energien wie Wind und Sonne zu vollem Ausmaß zu nutzen, indem Zeiten genutzt werden, zu denen der Preis pro Kilowattstunde am niedrigsten ist.\r\n\r\nEntscheiden Sie sich noch heute für eine günstigere Stromrechnung & für grüne Energie!"
        ];

        if ($frontend) {
            $frontend->update([
                'data_values' => $data_values
            ]);
        }

        $frontend = Frontend::where('data_keys', 'dynamic_tariff.content')->first();
        $data_values = [
            "has_image" => "1",
            "heading" => "Wie funktionieren dynamische Stromtarife mit Ökostrom?",
            "description" => "Stellen Sie sich vor, die Stromrechnung direkt an die aktuellen Börsenpreise zu koppeln und effektiv zu sparen! Der Preis pro kWh kann sich stündlich ändern – und das kann zum Vorteil genutzt werden. Wenn Sie einen flexiblen Stromtarif nutzen, können Sie von günstigen Zeiten profitieren, besonders wenn der Preis pro Kilowattstunde niedrig ist. So fällt es leichter Kosten zu sparen.",
            "dynamic_tariff_1" => "676d8036607b21735229494.png"
        ];


        if ($frontend) {
            $frontend->update([
                'data_values' => $data_values
            ]);
        }

        $frontend = Frontend::where('data_keys', 'hourly_price.content')->first();
        $data_values = [
            "has_image" => "1",
            "heading" => "Wie beeinflusst der stündlich ändernde Strompreis den Tarif für Verbraucher?",
            "sub_heading" => "Die stündlich ändernden Preise können den Stromverbrauch stark beeinflussen. Verbraucher werden dazu motiviert, ihren Stromverbrauch auf Zeiten zu verlagern, in denen der Strompreis besonders niedrig ist und so lässt sich Geld sparen. Dies kann beispielsweise geschehen, indem energieintensive Geräte wie Waschmaschinen oder Geschirrspüler zu Zeiten mit niedrigen Strompreisen betrieben werden.",
            "hourly_price_background" => "676e697ebf81a1735289214.png"
        ];
        if ($frontend) {
            $frontend->update([
                'data_values' => $data_values
            ]);
        }

        $data_values = [
            "title" => "Geld sparen mit dynamischen Stromtarifen",
            "description" => "Das Verhalten der Verbraucher hat einen direkten Einfluss auf die Stromrechnung, insbesondere bei dynamischen Stromtarifen. Ein intelligentes Verbrauchsverhalten, das sich an den variablen Strompreisen orientiert, kann zu erheblicher Ersparnis führen. Ein dynamischer Stromtarif bietet Endkonsumenten die Chance, ihren Verbrauch in Zeiten hoher Strompreise zu reduzieren und Zeiten mit niedrigen Preisen zu nutzen. Durch den Einsatz eines Smart Meters können die Verbraucher den Arbeitspreis für ihren Stromverbrauch genau verfolgen und ihren Verbrauch gezielt steuern. Dies führt nicht nur zu direkten Kosteneinsparungen, sondern trägt auch zu einer effizienteren Nutzung von Strom aus erneuerbaren Energien bei."
        ];
        Frontend::create([
            'data_keys' => 'hourly_price.element',
            'data_values' => $data_values
        ]);

        $data_values = [
            "title" => "Dynamische Stromtarife vs. klassische Tarife: Ein Vergleich",
            "description" => "Im Vergleich zu klassischen Tarifen bieten dynamische Stromtarife eine größere Flexibilität und die Möglichkeit, den Strompreis aktiv zu beeinflussen. Während klassische Tarife meist einen fixen Preis pro Kilowattstunde haben, können Verbraucherschwankungen bei dynamischen Tarifen genutzt werden, um Geld zu sparen."
        ];
        Frontend::create([
            'data_keys' => 'hourly_price.element',
            'data_values' => $data_values
        ]);


        $frontend = Frontend::where('data_keys', 'why_choose.content')->first();
        $data_values = [
            "heading" => "Warum dynamische Tarife überzeugen:",
        ];
        if ($frontend) {
            $frontend->update([
                'data_values' => $data_values
            ]);
        }

        $data_values = [
            "service_icon" => "<i class=\"fas fa-cogs\"></i>",
            "title" => "Intelligente Steuerung:",
            "description" => "Nutzen Sie Strom zu den günstigsten Zeiten, indem Sie Ihren Verbrauch in Phasen verlagern, wenn Wind- und Solarenergie den Markt dominieren und die Preise sinken. Der Preis pro kWh kann sich stündlich ändern – profitieren Sie davon."
        ];
        Frontend::create([
            'data_keys' => 'why_choose.element',
            'data_values' => $data_values
        ]);

        $data_values = [
            "service_icon" => "<i class=\"fas fa-chart-line\"></i>",
            "title" => "Effizientes Verbrauchsmanagement:",
            "description" => "Unsere Smart Meter überwachen Ihren Verbrauch in Echtzeit und identifizieren die optimalen Zeiten für energieintensive Aktivitäten. So wird das Energiesparen einfach und effektiv."
        ];

        Frontend::create([
            'data_keys' => 'why_choose.element',
            'data_values' => $data_values
        ]);

        $frontend = Frontend::where('data_keys', 'contact_us.content')->first();
        $data_values = [
            "has_image" => "1",
            "title" => "Contact Us",
            "short_description" => "",
            "email_address" => "strom@voltify.energy",
            "contact_details" => "Yokohamastraße 2, 20457 Hamburg-HafenCity",
            "contact_number" => "040-30376305",
            "latitude" => "",
            "longitude" => "",
            "website_footer" => "<p>Copyright 2024. All rights reserved.<\/p>",
            "contact_image" => "643bca29c29ed1681639977.jpg",
            "theme_four_contact_image" => "65e6b703508551709618947.png",
            "theme_five_contact_image" => "65e86c36cb5f61709730870.png"
        ];
        if ($frontend) {
            $frontend->update([
                'data_values' => $data_values
            ]);
        }
        // Updating the Page model (fix for secs)

        Frontend::where('data_keys', 'footer_important_links.element')->delete();

        $data_values = [
            "title" => "Home",
            "url" => "/"
        ];
        Frontend::create([
            'data_keys' => 'footer_important_links.element',
            'data_values' => $data_values,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $data_values = [
            "title" => "About us",
            "url" => "/about"
        ];
        Frontend::create([
            'data_keys' => 'footer_important_links.element',
            'data_values' => $data_values,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $data_values = [
            "title" => "Downloads",
            "url" => "/downloads"
        ];
        Frontend::create([
            'data_keys' => 'footer_important_links.element',
            'data_values' => $data_values,
            'created_at' => now(),
            'updated_at' => now()
        ]);


        $page = Page::where('slug', '/')->where('tempname','presets.default.')->first();
        if ($page) {
            $page->update([
                'tempname' => 'presets.default.',
                'slug' => '/',
                'name' => 'Home',
                'secs' => json_encode(["choose_us","call_to_action","savings","dynamic_tariff","service","brand","understanding_pricing"]),
                'updated_at' => now(),
            ]);
        }else{
            Page::create([
                'tempname' => 'presets.default.',
                'slug' => '/',
                'name' => 'Home',
                'secs' => json_encode(["about", "blog", "brand", "choose_us", "counter", "faq", "plan", "portfolio", "service", "subscribe", "team_member", "testimonial"]),
                'updated_at' => now(),
            ]);
        }


        Page::where('slug','!=','/')->where('tempname',"presets.default")->delete();
        Page::create(['name' => 'About us', 'slug' => '/about','secs' => json_encode(['about']),
            'tempname' => 'presets.default.','is_default' => '1',
            'created_at' => now(), 'updated_at' => now()]);
        Page::create(['name' => 'Downloads', 'slug' => '/downloads','secs' => json_encode(['']),
            'tempname' => 'presets.default.','is_default' => '1',
            'created_at' => now(), 'updated_at' => now()]);

        // Using updateOrCreate for default presets theme (fix for secs)
        $page = Page::where('slug', '/')->where('tempname','presets.themesSix.')->first();
        if (!$page) {
            Page::create([
                'name' => 'Home',
                'slug' => '/',
                'tempname' => 'presets.themesSix.',
                'secs' => json_encode(["feature", "fact", "choose_us", "call_to_action", "portfolio", "service", "pricing", "blog", "clients", "newsletter", "appointment"]),
                'is_default' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        } else {
            $page->updateOrCreate([
                'slug' => '/',
                'tempname' => 'presets.themesSix.',
            ], [
                'secs' => json_encode(["feature", "fact", "choose_us", "call_to_action", "portfolio", "service", "pricing", "blog", "clients", "newsletter", "appointment"]),
                'is_default' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
