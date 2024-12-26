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

        // Updating the Page model (fix for secs)

        $page = Page::where('slug', '/')->where('tempname','presets.default.')->first();
        if ($page) {
            $page->update([
                'tempname' => 'presets.default.',
                'slug' => '/',
                'name' => 'Home',
                'secs' => json_encode(["about","call_to_action","choose_us","savings","dynamic_tariff","service","brand","understanding_pricing"]),
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
