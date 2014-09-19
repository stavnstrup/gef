<?php

// app/database/seeds/WorkshopTableSeeder.php

class WorkshopTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('workshops')->delete();

                // Workshop 1
		Workshop::create(array(
			'name' => 'Afrikansk dans og trommespil og Frivillig i Ghana',
			'description' => 'Deltag i denne workshop,
                         hvis du vil lære ægte afrikansk dans og
                         trommespil. I programmet er der også et oplæg
                         om, hvordan man kan blive frivillig i
                         Ghana. Som der står på sitet
                         afrikanskdansk.dk: \"Frivillig i Ghana - en
                         Rejse for Livet. Vil du på Eventyr? Rejs ud i
                         verden - og gør en forskel. Har du lyst til
                         at komme til Afrika, er Ghana et godt valg\".
                         På OEG gør en forskel-dagen skal du dog først
                         og fremmest danse og spille på tromme og være
                         glad sammen med en danser og en
                         trommespiller!',
			'teaser_image' => 'afrikansk-dans',
			'freeplaces' => 2,
                        'speaker' => 'Anders Andersen',
                        'uri' => 'http://afrikanskdansk.dk'
		));

                // Workshop 2
		Workshop::create(array(
			'name' => 'Amnesty Youth Kampagne',
			'description' => 'Har du lyst til at være med i en international brevkampagne for menneskerettigheder?',
			'teaser_image' => '',
			'freeplaces' => 2,
                        'speaker' => 'ukendt',
                        'uri' => 'http://amnesty.dk',
		));

                // Workshop 3
		Workshop::create(array(
			'name' => 'Arkitekter Uden Grænser',

			'description' => 'Vil du høre om hvordan
         			Arkitekter Uden Grænser (AUG) er med
         			til at skabe en bedre hverdag for
         			verdens fattige?  Carina Nissen,
         			arkitekt og projektleder for et af
         			AUG\'s projekter i Sierra Leone, laver
         			workshop om et bæredygtigt byggeri for
         			et socialt økonomisk projekthus, som
         			AUG bygger for en lille dansk NGO,
         			REACT.',

			'teaser_image' => 'arkitekt',
			'freeplaces' => 14,
                        'speaker' => 'Carina Nissen',
                        'uri' => 'http://arkitekterudengraenser.dk/',
		));

                // Workshop 4
		Workshop::create(array(
			'name' => 'Bløderforening og førstehjælp',
			'description' => '',
			'teaser_image' => '',
			'freeplaces' => 2,
                        'speaker' => '',
                        'uri' => '',
		));

                // Workshop 5
		Workshop::create(array(
			'name' => 'Børns Vilkår/Børnetelefonen',
			'description' => '',
			'teaser_image' => '',
			'freeplaces' => 2,
                        'speaker' => '',
                        'uri' => '',
		));
                // Workshop 6
		Workshop::create(array(
			'name' => 'Café Retro og spisehuset Rub og Stub',
			'description' => '',
			'teaser_image' => '',
			'freeplaces' => 2,
                        'speaker' => '',
                        'uri' => '',
		));
                // Workshop 7
		Workshop::create(array(
			'name' => 'Danmarks Naturfredningsforening',
			'description' => '',
			'teaser_image' => '',
			'freeplaces' => 2,
                        'speaker' => '',
                        'uri' => '',
		));
                // Workshop 8
		Workshop::create(array(
			'name' => 'FN’s rettigheder  og folkedrab',

			'description' => 'Gør en forskel - Fyld OEG
                             med menneskerettigheder Vi starter dagen
                             med et oplæg/film om, hvordan det er at
                             være flygtning v. Aldi.  Efter pausen er
                             formålet at fylde OEG med
                             menneskerettigheder! Vi skaber posters,
                             med innovative og alternative måder at
                             gøre OEG opmærksomme på disse
                             rettigheder.  Der bliver brug for at være
                             kreativ. Vi kræver ikke andet end at have
                             lyst til at deltage i et bragende
                             spændende oplæg og ville udfordre
                             OEG-folket!',

			'teaser_image' => '',
			'freeplaces' => 2,
                        'speaker' => '',
                        'uri' => '',
		));
                // Workshop 9
		Workshop::create(array(
			'name' => 'Glad Tur',
			'description' => '',
			'teaser_image' => '',
			'freeplaces' => 2,
                        'speaker' => '',
                        'uri' => '',
		));
                // Workshop 10
		Workshop::create(array(
			'name' => 'Global Camp ved Mellemfolkeligt Samvirke',
			'description' => 'Globalisering og globalt medborgerskab: Har jeg et medansvar for det, der sker i verden omkring mig? Hvordan kan jeg handle på de problemer, jeg ser? I denne workshop bringer vi det globale helt tæt på ved at reflektere over, hvordan det globale ses i jeres eget liv, og hvilken rolle I selv kan spille i globale processer. 

Når dagen er omme, har vi udfordret jer til at gennemtænke handlinger og konsekvenser i forhold til en global problemstilling og diskuteret jeres rolle som globale medborgere.
Formålet er at styrke jeres kritiske stillingtagen og evne til at konkretisere handlemuligheder i forhold til globale udfordringer. Vi har skræddersyet et læringsforløb, der bygget op omkring spændende elevaktiverende metoder, der sikrer, at det er jeres holdninger, der kommer i spil og diskuteres.',
			'teaser_image' => '',
			'freeplaces' => 2,
                        'speaker' => '',
                        'uri' => '',
		));
                // Workshop 11
		Workshop::create(array(
			'name' => 'Gør en forskel  for folkeskolen: Undervisning i 3.-6. klasse i matematik (Ørestad Skole)',
			'description' => '',
			'teaser_image' => '',
			'freeplaces' => 2,
                        'speaker' => '',
                        'uri' => '',
		));
                // Workshop 12
		Workshop::create(array(
			'name' => 'Gør en forskel for folkeskolen: Undervisning folkeskoleelever i filmsprog (Dyvekeskolen)',
			'description' => '',
			'teaser_image' => '',
			'freeplaces' => 2,
                        'speaker' => '',
                        'uri' => '',
		));
                // Workshop 13
		Workshop::create(array(
			'name' => 'Gør en forskel med din stemme – korworkshop',

			'description' => 'I Elisabeths Korworkshop vil
                          vi øve 2-3 fantastiske flerstemmige sange
                          som vi vil synge til eftermiddagens Café!
                          Du behøver ikke at kunne noder, men du skal
                          helst have sunget lidt før og være glad for
                          at synge, så vi på kort tid kan få musikken
                          til swinge. Vi kommer til at synge både
                          engelske og afrikansk-sprogede sange,
                          dansevenlige, powerfulde og stemningsfulde
                          sange. Så smør tungebåndet og tag det gode
                          humør frem. “Hallelujah!"',
			'teaser_image' => '',
			'freeplaces' => 2,
                        'speaker' => '',
                        'uri' => '',
		));
                // Workshop 14
		Workshop::create(array(
			'name' => 'Gør en forskel med mad',
			'description' => 'Kan du godt lide at lave mad og har du lyst til at lave mad fra andre kulturer? Vil du gerne vise dine venner nationalmad fra dit hjemland eller er der bare noget international mad godt kan lide? Så meld dig på denne workshop hvor fokus er at lære anderledes opskrifter at kende sammen med folk fra hele skolen. Du har mulighed for selv at komme med input og opskrifter som vi vil lave i løbet af dagen.  
 Det er dog vigtigt at du har mulighed for at være på skolen til slutningen af Cafeen.',
			'teaser_image' => '',
			'freeplaces' => 2,
                        'speaker' => '',
                        'uri' => '',
		));
                // Workshop 15
		Workshop::create(array(
			'name' => 'Gør en forskel med Global-udvalget',
			'description' => '',
			'teaser_image' => '',
			'freeplaces' => 2,
                        'speaker' => '',
                        'uri' => 'https://www.ventilen.dk',
		));
                // Workshop 16
		Workshop::create(array(
			'name' => 'HIPHOP workshop',
			'description' => 'Hiphop er ikke blot en musikform, men en subkultur, der opstod blandt de afroamerikanske indbyggere i New Yorks gader i starten af 1970´erne. I denne workshop skal du danse til sveden drypper og du smiler op til begge ører.
Workshoppen starter med et ca. 30 minutters oplæg af Louise som fortæller lidt om hiphop kulturens historie og betydning samt om hendes egen oplevelse med at bo og danse i New York. Derefter er der 2 x ca. 1,5 timers danseworkshop (Newstyle HIPHOP). Vi afslutter dagen med to shows ude i lokalområdet.
OBS: Denne workshop er for elever med danseerfaring eller musikforståelse og rytmisk sans.',
			'teaser_image' => '',
			'freeplaces' => 2,
                        'speaker' => '',
                        'uri' => '',
		));
                // Workshop 17
		Workshop::create(array(
			'name' => 'Idrætsprojektet',
			'description' => 'Oplev hvordan idræt og bevægelse kan gøre en forskel. Hør hvordan idræt og fællesskab har gjort en forskel for Abdullah Abdullah og få sved på panden, når han og Christoffer Hansen, grundlægger og leder af Idrætsprojektet, tæsker jer igennem i byparken. Brug en dag af dit liv med en organisation som har noget på hjerte. Du vil få et motiverende oplæg om Idrætsprojektets historie, metode og resultater. Du vil høre Abdullahs historie ’fra kriminel til træner’. Så på med sportstøj, rens ørerne og kom åben og positiv til en spændende dag.',
			'teaser_image' => '',
			'freeplaces' => 2,
                        'speaker' => '',
                        'uri' => 'http://www.dr.dk/tv/se/tv-avisen/tv-avisen-1419#!/19:27',
		));
                // Workshop 18
		Workshop::create(array(
			'name' => 'Kongelunden Asylcenter i kombination med Outreach',
			'description' => '',
			'teaser_image' => '',
			'freeplaces' => 2,
                        'speaker' => '',
                        'uri' => '',
		));
                // Workshop 19
		Workshop::create(array(
			'name' => 'Long living – bæredygtighed',
			'description' => 'Trænger du til en dag med fordybelse og mindfulness? Kunne du tænke dig at lære om bæredygtighed på en ny og interessant måde? Drømmer du om at gøre en forskel? Så meld dig til vores workshop, hvor vi både skal se film, debattere og lave forskellige sjove øvelser for at blive klogere på, hvad bæredygtighed egentlig handler om.
I vil lære om bæredygtighed, samt hvilke konsekvenser vores stigende forbrug i samfundet har på klodens natur, befolkning og dyr. Samtidig vil I lære, hvordan vi hver især kan være med til at gøre en forskel. Vi fokuserer derfor på en indre fordybelse hos det enkelte individ, dette med henblik på at opnå en dybere forståelse for en indre selv- og verdensopfattelse.
Alle kan være med - uanset om du kender til bæredygtighed eller ej.',
			'teaser_image' => '',
			'freeplaces' => 2,
                        'speaker' => 'Janie Ravnholt Knudsen og Iman Farah Mehdi',
                        'uri' => '',
		));
                // Workshop 20
		Workshop::create(array(
			'name' => 'Når generationer mødes',
			'description' => 'I denne workshop mødes unge og ældre generationer. Vil du være med til at hjælpe ældre mennesker med at bruge en computer eller en iPad? Eller er du villig til at høre deres(de ældres) historier, lave en debat, lære at strikke, samt spille kortspil? For at være med i denne workshop skal du have lyst til at gøre en forskel for ældre mennesker og dig selv, og så skal du huske din computer eller iPad, til når vi skal ud af huset for at møde de ældre. Vi lover at det bliver en super hyggelig dag med anderledes oplevelser, både for unge og ældre.',
			'teaser_image' => '',
			'freeplaces' => 2,
                        'speaker' => '',
                        'uri' => '',
		));
                // Workshop 21
		Workshop::create(array(
			'name' => 'OEG - et globalt værested',
			'description' => 'OEG skal gøres til et globalt værested, hvor du møder en kulturel mangfoldighed til hverdag. Det betyder, at OEG bliver rammen om en hverdag, hvor folk føler sig som en del af et globalt fællesskab og deltager i aktiviteter, der ligger ud over Ørestads grænser. Kort sagt – vi skal udvikle ideer til, hvordan vi gør OEG til en mere global skole.',
			'teaser_image' => '',
			'freeplaces' => 2,
                        'speaker' => '',
                        'uri' => '',
		));
                // Workshop 22
		Workshop::create(array(
			'name' => 'OMBOLD',
			'description' => 'Hvordan fodbold kan gøre en forskel - for hjemløse.
Organisationen OMBOLD, som står bag Danmarks hjemløselandshold i fodbold, kommer og holder et oplæg om deres landshold, samt hvordan fodbold kan gøre en forskel for hjemløse og udsatte mennesker. Herefter tager hjemløselandsholdstræner Rikke Sparving eleverne med på banen i byparken og laver en gang fodboldtræning ud fra de principper som OMBOLD bruger for at få samfundets allermest idrætssvage grupper op ad sofaen og ud på banen – Nemlig at det først og fremmest handler om at have det sjovt.',
			'teaser_image' => '',
			'freeplaces' => 2,
                        'speaker' => 'Rikke Sparving',
                        'uri' => '',
		));
                // Workshop 23
		Workshop::create(array(
			'name' => 'Tegnstuen/Street Signers',
			'description' => 'Mød en døv og lær at kaste med håndtegn! Tegnstuen introducerer dig til dansk tegnsprog, et visuelt sprog, der tales af 4000 danskere, der er døve eller svært hørehæmmede. Dansk tegnsprog er et sprog, som mange flere mennesker burde kunne, fordi man bruger hele kroppen og alle sine sanser, ligesom man via tegnsprog bliver meget mere opmærksom på sine medmennesker. Til workshoppen vil du også (på dansk tegnsprog, via tegnsprogstolk) blive lidt klogere på tegnsprogets og døvekulturens mange muligheder og udfordringer.',
			'teaser_image' => '',
			'freeplaces' => 2,
                        'speaker' => '',
                        'uri' => '',
		));
                // Workshop 24
		Workshop::create(array(
			'name' => 'Ungdommens Røde Kors',
			'description' => 'Hør om den internationale del af Ungdommens Røde Kors og om den nationale del af Røde Kors. Den internationale afdeling vil fortælle om Ungdommens Røde Kors’ arbejde med unge i Jordan og Palæstina. Fokus vil være på arbejdet med de frivillige, arabisk kultur og personlige fortællinger. Herefter er der praktiske “Life-skills”-aktiviteter om udfordringer ved at være ung, kønsproblematikker, forventninger til fremtiden osv. I vil komme til at lave de samme, legende aktiviteter som unge i Jordan og Palæstina, og der vil på det grundlag være mulighed for at tale om ligheder og forskelle mellem mellemøstlige og danske unge.
Den nationale afdeling vil fortælle om aktiviteter på nationalt plan, og herefter kommer du til til at prøve at starte et projekt op, efter den 5-trins-plan, organisationen plejer at anvende.  Der vil blive lagt op til debat om frivilligt arbejde, og hvordan man gør en forskel her.',
			'teaser_image' => '',
			'freeplaces' => 2,
                        'speaker' => '',
                        'uri' => '',
		));
                // Workshop 25
		Workshop::create(array(
			'name' => 'Ventilen: en vej ud af ensomheden',
			'description' => '',
			'teaser_image' => '',
			'freeplaces' => 2,
                        'speaker' => '',
                        'uri' => '',
		));

	}
}
