<?php

// app/database/seeds/WorkshopTableSeeder.php

class WorkshopTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('workshops')->delete();

                // Workshop 1
		Workshop::create(array(
			'title' => 'Afrikansk dans og trommespil og Frivillig i Ghana',
                        'subtitle' => '',
			'description' => 'Deltag i denne workshop, hvis du vil lære ægte afrikansk dans og trommespil. I programmet er der også et oplæg om, hvordan man kan blive frivillig i Ghana. Som der står på sitet afrikanskdansk.dk: “Frivillig i Ghana - en Rejse for Livet. Vil du på Eventyr? Rejs ud i verden - og gør en forskel. Har du lyst til at komme til Afrika, er Ghana et godt valg”. 

På OEG gør en forskel-dagen skal du dog først og fremmest danse og spille på tromme og være glad sammen med en danser og en trommespiller!',
			'teaser_image' => 'Selamta_Waka.jpg',
			'freeplaces' => 1,
                        'uri' => 'http://afrikanskdansk.dk',
		));


                // Workshop 2
		Workshop::create(array(
			'title' => 'Amnesty Youth Kampagne',
                        'subtitle' => 'Har du lyst til at være med i en kreativ workshop med Amnesty for at gøre en forskel både inden og udenfor skolens rammer?',
			'description' => 'Dagen starter med, at der kommer nogle fra Amnesty International og holder et kort oplæg om menneskerettigheder og derefter vil der være mulighed for at skrive og sende så mange breve som muligt til undertrykte folk og regeringsoverhoveder rundt om i verden. Udover det er der mulighed for at lave kreativt arbejde med plakater for at oplyse folk på ørestad gymnasium om menneskerettigheder og samtidig gøre gymnasiet mere hyggeligt.',
			'teaser_image' => '',
			'freeplaces' => 30,
                        'uri' => 'http://amnesty.dk',
		));

                // Workshop 3
		Workshop::create(array(
			'title' => 'Arkitekter Uden Grænser',
                        'subtitle' => '',
			'description' => 'Arkitekter Uden Grænser (AUG) er en frivillig organisation for alle, der vil arbejde med at gøre arkitektur og planlægning tilgængelig for samfundets fattigste grupper. MECC (Magburaka Education and Computer Centre) er i et samarbejde med til at skabe bedre computer- og internetviden i Sierra Leone,

Hør om hvordan AUG arbejder i Sierre Leone og hvorfor frivillige har bygget et nyt center for React, et dansk NGO-projekt. Arkitekt Carina Nissen står for oplæg og workshop sammen med en repræsentant fra React, der vil introducere til deres projekt og til Sierra Leone mere generelt. Du kommer til at deltage i konkrete måder at arbejde som frivillig på.',

			'teaser_image' => 'arkitekt.jpg',
			'freeplaces' => 40,
                        'uri' => 'http://arkitekterudengraenser.dk/',
		));

                // Workshop 4
		Workshop::create(array(
			'title' => 'Bløderforening og førstehjælp',
                        'subtitle' => '',
			'description' => 'Rundt omkring os er der mennesker med mærkelige sygdomme som vi sjældent hører noget til. I denne workshop skal du møde en forening der arbejder med og for en speciel sygdom: blødersygdommen. Derudover skal du deltage i et førstehjælpskursus. Kurset hjælper dig den dag når du står i en situation hvor et menneske kommer alvorligt til skade og behøver din hjælp. Du får et diplom på at du har gennemført kurset der afholdes af Dansk Folkehjælp. Til sidst skal du arbejde med måder at dele ud af din viden omkring førstehjælp på OEG.',
			'teaser_image' => '',
			'freeplaces' => 32,
                        'uri' => '',
		));

                // Workshop 5
		Workshop::create(array(
			'title' => 'Oplev - en forskel',
                        'subtitle' => '',
			'description' => 'Denne workshop henvender dig der er særlig nysgerrig, modig og åben for at opleve en OEG’er med en anden etnisk baggrund end dig selv. Dig der vil indsnuse, mærke og opleve en forskel - og samtidig få nye venner på OEG.
I workshoppen kan man tilmelde sig som “par” eller individuelt. Workshoppen fungerer således, de tilmeldtes navne (par eller individuelt)  puttes i en stor hat forud for GEF dagen. Herefter matches parrene og individerne tilfældigt, så de bliver en gruppe på 4 eller et par.  Dig og din(e)  nye partner(ere) får til opgave inden GEF dagen at have afholdt et besøg i hinandens hjem (eller på anden måde at have besøgt hinandens “kultur” i form et  restaurant-besøg, fritidsinteressebesøg osv. ). Samværet skal dokumenteres via en lille film, som I skal redigere på GEF dagen og vise til GEF cafeen kl. 15. Da workshoppen inkluderer brug af tid før GEF dagen skal deltagerne i denne workshop på selve GEF dagen først møde kl. 12.10.',
			'teaser_image' => '',
			'freeplaces' => 20,
                        'uri' => '',
		));
                // Workshop 6
		Workshop::create(array(
			'title' => 'Operation Dagsværk workshop (du finder selv job)',
                        'subtitle' => '',
			'description' => 'Operation Dagsværk er en frivillig organisation af unge der hvert år sætter fokus på en specifik sag via en oplysningskampagne. Dette munder ud i den store Operation Dagsværk dag, hvor gymnasieelever fra hele landet arbejder en dag for at samle penge ind til årets sag. I år støtter Operation Dagsværk homoseksuelles kamp for lige rettigheder i Kenya. Sagen er nemlig den, at unge homoseksuelle og transkønnede i Kenya bliver smidt ud af deres hjem og forfulgt, udelukkende på grund af deres seksualitet og kønsidentitet. Dette vil Operation Dagsværk prøve at afhjælpe ved at uddanne unge i Kenya til at blive ambassadører for flere rettigheder for LGBT i Kenya.

På selve dagsværkdagen finder du selv et job. Du kommer til at arbejde 5 timer og skal tjene mindst 300 kr ind til sagen. Hvis du melder dig til denne workshop får du mere information løbende.',
			'teaser_image' => 'dagsvaerk.png',
			'freeplaces' => 130,
                        'isODworkshop' => true,
                        'uri' => 'http://od.dk/',
		));


                // Workshop 7
		Workshop::create(array(
			'title' => 'Operation Dagsværk workshop (vi finder job for dig)',
                        'subtitle' => '',
			'description' => 'Operation Dagsværk er en frivillig organisation af unge der hvert år sætter fokus på en specifik sag via en oplysningskampagne. Dette munder ud i den store Operation Dagsværk dag, hvor gymnasieelever fra hele landet arbejder en dag for at samle penge ind til årets sag. I år støtter Operation Dagsværk homoseksuelles kamp for lige rettigheder i Kenya. Sagen er nemlig den, at unge homoseksuelle og transkønnede i Kenya bliver smidt ud af deres hjem og forfulgt, udelukkende på grund af deres seksualitet og kønsidentitet. Dette vil Operation Dagsværk prøve at afhjælpe ved at uddanne unge i Kenya til at blive ambassadører for flere rettigheder for LGBT i Kenya.

På selve dagsværkdagen får du OD-udvalget til at finde et job for dig. Du kommer til at arbejde 5 timer og skal tjene mindst 300 kr ind til sagen. Hvis du melder dig til denne workshop får du mere information løbende.',
			'teaser_image' => 'dagsvaerk.png',
			'freeplaces' => 70,
                        'isODworkshop' => true,
                        'uri' => 'http://od.dk/',
		));


                // Workshop 8
		Workshop::create(array(
			'title' => 'Danmarks Naturfredningsforening',
                        'subtitle' => '',
			'description' => 'Danmarks Naturfredningsforening kæmper for en rig natur og et sundt og rent miljø - også i fremtiden. I denne workshop kan du i løbet af en dag arbejde med Danmarks Naturfredningsforening og hjælpe med at bevare den danske natur.',
			'teaser_image' => '',
			'freeplaces' => 25,
                        'uri' => 'http://www.dn.dk',
		));
                // Workshop 9
		Workshop::create(array(
			'title' => 'Folkedrab og menneskerettigheder!',
                        'subtitle' => '',
			'description' => 'Aldin Lemes er bosnier og er født i byen Srebrenica. Under krigen i Bosnien fandt der i 1995 et folkedrab sted i Srebrenica, hvor mere end 7.500 drenge og mænd blev dræbt. Aldin overværede som barn folkedrabet og så med sine egne øjne landsbyer blive brændt ned. I sit foredrag fortæller han om, hvilken rolle disse billeder spiller for ham i dag, og hvordan man kommer videre med sit liv efter at have været vidne til et folkedrab.

I denne workshop hører deltagerne først et oplæg ved Aldin. Herefter er formålet at fylde OEG med menneskerettigheder! Vi skaber posters, med innovative og alternative måder at gøre OEG opmærksomme på disse rettigheder. Der bliver brug for at være kreativ. Vi kræver ikke andet end at have lyst til at deltage i et bragende spændende oplæg og ville udfordre OEG-folket! ',

			'teaser_image' => '',
			'freeplaces' => 40,
                        'uri' => '',
		));
                // Workshop 10
		Workshop::create(array(
			'title' => 'Glad Fonden og Glad Tur',
                        'subtitle' => 'Gå på café, brug din smartphone og gør en forskel.',
			'description' => 'Lyder det for godt til at være sandt? Det er det ikke. På dagens workshop skal I nemlig ud i byen sammen og anmelde cafeer, biografer og butikker ved hjælp af vores nye app Glad Tur. Men det handler ikke om kvaliteten på maden eller hvor hyggeligt der er. I skal anmelde stedernes tilgængelighed. Er der fx trapper ved indgangen, plads til en kørestol, mulighed for hjælp? Det er ganske enkelt at anmelde i app’en, men gør en stor forskel for mennesker med handicap, deres venner og familie! Samtidig bidrager du til et rigere og mere mangfoldigt samfund til glæde for os alle sammen. 

Dagen starter hos Glad Fonden hvor vi først vil fortælle om hvordan vi i Glad Fonden ansætter og uddanner mennesker med og uden handicap. Sammen  laver vi mad, teater, radio, tv og meget mere. Måske kender du os fra Tv-Glad? Derefter vil I blive introduceret til Glad Tur app’en og gå ud og anmelde byen I små grupper. Det hold der får anmeldt flest steder på dagen vinder et gavekort til et cafébesøg.Vi slutter dagen hos Glad Fonden og  kårer vinderen af konkurrencen. 

"Vi tror på, at mennesker med forskellige forudsætninger er et aktiv, der kan gøre det samfund vi bor i rigere, gladere og mere inspirerende.” Se en GLAD film: http://www.gladfonden.dk/engladfilm',
			'teaser_image' => 'glad.png',
			'freeplaces' => 150,
                        'uri' => '',
		));


                // Workshop 11
		Workshop::create(array(
			'title' => 'Global Camp ved Mellemfolkeligt Samvirke',
                        'subtitle' => 'Globalisering og globalt medborgerskab',
			'description' => 'Har jeg et medansvar for det, der sker i verden omkring mig? Hvordan kan jeg handle på de problemer, jeg ser? Denne Global Camp gør deltagerne bevidste om betydningen af det globale medborgerskab, og om hvordan globalisering kan relateres til dem som individer og borgere i Danmark. Du vil i løbet af dagen reflektere over din egen position, tage stilling til globalisering og dertilhørende problematikker samt diskutere, hvordan din hverdag kan siges at være påvirket af globale fænomener og forhold. Gennem rollespil om globale samarbejdsrelationer, visualiseringsøvelser og diskussioner udfordres du til at skulle forholde sig til forbindelsen mellem verdens udfordringer og globale unges ansvar.',
			'teaser_image' => '',
			'freeplaces' => 60,
                        'uri' => '',
		));


                // Workshop 12
		Workshop::create(array(
			'title' => 'Gør matematik til en leg for folkeskolen',
                        'subtitle' => '',
			'description' => 'Matematik ER både sjovt og nemt – det er bare ikke alle, der har opdaget det endnu!
Nu har du chancen for at gøre matematiklæring til en leg for skolebørn. I et samarbejde med Ørestad Skole skal vi finde på sjove lege, som samtidigt lærer børnene noget god matematik. Her skal vi bruge alle muligheder. Det kan være dans, praktiske og udfordrende opgaver, orienteringsløb, sjove historier og meget meget mere.',
			'teaser_image' => '',
			'freeplaces' => 20,
                        'uri' => '',
		));


                // Workshop 13
		Workshop::create(array(
			'title' => 'Gør en forskel med din stemme – korworkshop',

			'description' => 'I Elisabeths Korworkshop vil vi øve 2-3 fantastiske flerstemmige sange som vi vil synge til eftermiddagens Café, så det kan høres på hele OEG - og virkelig gøre en forskel!
Du behøver ikke at kunne noder, men du skal helst have sunget lidt før og være glad for at synge, så vi på kort tid kan få musikken til swinge. Vi kommer til at synge både engelske og afrikansk-sprogede sange, dansevenlige, powerfulde og stemningsfulde sange. Så smør tungebåndet og tag det gode humør frem. “Hallelujah!"',
			'teaser_image' => '',
			'freeplaces' => 50,
                        'uri' => '',
		));
                // Workshop 14
		Workshop::create(array(
			'title' => 'Gør en forskel med mad',
                        'subtitle' => '',
			'description' => 'Kan du godt lide at lave mad og har du lyst til at lave mad fra andre kulturer? Vil du gerne vise dine venner nationalmad fra dit hjemland eller er der bare noget international mad godt kan lide? Så meld dig på denne workshop hvor fokus er at lære anderledes opskrifter at kende sammen med folk fra hele skolen. Du har mulighed for selv at komme med input og opskrifter som vi vil lave i løbet af dagen.  
 Det er dog vigtigt at du har mulighed for at være på skolen til slutningen af Cafeen.',
			'teaser_image' => '',
			'freeplaces' => 30,
                        'uri' => '',
		));



                // Workshop 15
		Workshop::create(array(
			'title' => 'Gør en forskel med Global-udvalget',
                        'subtitle' => '',
			'description' => 'Deltag i en dag med fokus på globalisering & bæredygtighed. I denne workshop vil vi fokusere på bæredygtighed og kigge på urban gardening (byhaver) og hvordan de kan bruges til at skabe fællesskaber i byen. Workshoppen starter med et oplæg af  Globale Gymnasier, hvor der bliver snakket om initiativet bag global-gruppen, og globale gymnasiers arbejde. Derefter tager vi ud til en fælleshave i Urbanplanen hvor vi ser og hører hvad fælleshaven har gjort for beboerne. Efter frokost har vi gør-det-selv workshop og oplæg med TagTomat, hvor vi først bliver ført ind i den globale trend omkring "urban gardening" og efterfølgende skal vi i fællesskab bygge vores egen lille byhave til gymnasiet. Du vil få værktøjer til at dyrke grønt i byen, aktivere fællesskaber, og måske løftes sløret for de fremtidige visioner for gymnasiets tagterrasse.
Globaludvalget serverer lækker kage i løbet af dagen. Du kan se mere om TagTomats arbejde på #tagtomat og @tagtomat på de sociale medier.',
			'teaser_image' => '',
			'freeplaces' => 30,
                        'uri' => '',
		));



                // Workshop 16
		Workshop::create(array(
			'title' => 'DANS gør en forskel',
                        'subtitle' => '',
			'description' => 'Vi har længe vidst at man kan blive glad af at danse og at bevægelse til forskellige stemninger i musikken kan påvirke humøret. I dansen arbejdes nemlig med både krop og psyke og ny forskning viser at dans kan gøre en forskel i behandlingen af depression, angst og stress. 
I denne workshop skal du danse til sveden drypper og du smiler op til begge ører.
Workshoppen starter med et ca. 45 minutters oplæg om hvad dans gør ved hjernen biologisk set, hvilke muligheder der er for at danse i Danmark samt om hvordan dans kan gøre en forskel i dit liv. 
Derefter er der to x ca. 2 timers danseworkshop (jazz/showdance/salsa/hiphop).
OBS: Denne workshop er for elever med danseerfaring eller høj grad af musikforståelse og rytmisk sans.',
			'teaser_image' => '',
			'freeplaces' => 25,
                        'uri' => '',
		));


                // Workshop 17
		Workshop::create(array(
			'title' => 'Idrætsprojektet',
                        'subtitle' => '',
			'description' => 'Oplev hvordan idræt og bevægelse kan gøre en forskel. Hør hvordan idræt og fællesskab har gjort en forskel for Abdullah Abdullah og få sved på panden, når han og Christoffer Hansen, grundlægger og leder af Idrætsprojektet, tæsker jer igennem i byparken. Brug en dag af dit liv med en organisation som har noget på hjerte. Du vil få et motiverende oplæg om Idrætsprojektets historie, metode og resultater. Du vil høre Abdullahs historie ’fra kriminel til træner’. Så på med sportstøj, rens ørerne og kom åben og positiv til en spændende dag.',
			'teaser_image' => '',
			'freeplaces' => 100,
                        'uri' => 'http://www.dr.dk/tv/se/tv-avisen/tv-avisen-1419#!/19:27',
		));
                // Workshop 18
		Workshop::create(array(
			'title' => 'Asylansøgere - hør om Kongelunden Asylcenter i kombination med Outreach',
                        'subtitle' => '',
			'description' => 'Formiddagen består af et oplæg af Outreach, der er et oplysningsprojekt, som gennem involverende oplæg formidler viden og skaber debat om flygtninge, asyl og integration i Danmark og internationalt.
Outreach siger: “Vi er et hold af unge frivillige som har gennemgået et træningsforløb i formidling og dialog, da vi gerne vil fortælle flere om, hvem der er flygtninge, hvordan den danske asylprocedure fungerer, hvad der skal til for at blive anerkendt som flygtning osv”. 
Om eftermiddagen besøger workshoppen Kongelunden Asylcenter og får en rundvisning.',
			'teaser_image' => '',
			'freeplaces' => 30,
                        'uri' => '',
		));
                // Workshop 19
		Workshop::create(array(
			'title' => 'Long living – bæredygtighed',
                        'subtitle' => '',
			'description' => 'Trænger du til en dag med fordybelse og mindfulness? Kunne du tænke dig at lære om bæredygtighed på en ny og interessant måde? Drømmer du om at gøre en forskel? Så meld dig til vores workshop, hvor vi både skal se film, debattere og lave forskellige sjove øvelser for at blive klogere på, hvad bæredygtighed egentlig handler om.
I vil lære om bæredygtighed, samt hvilke konsekvenser vores stigende forbrug i samfundet har på klodens natur, befolkning og dyr. Samtidig vil I lære, hvordan vi hver især kan være med til at gøre en forskel. Vi fokuserer derfor på en indre fordybelse hos det enkelte individ, dette med henblik på at opnå en dybere forståelse for en indre selv- og verdensopfattelse.
Alle kan være med - uanset om du kender til bæredygtighed eller ej.',
			'teaser_image' => '',
			'freeplaces' => 30,
                        'uri' => '',
		));
                // Workshop 20
		Workshop::create(array(
			'title' => 'Når generationer mødes',
                        'subtitle' => '',
			'description' => 'I denne workshop mødes unge og ældre generationer. Vil du være med til at hjælpe ældre mennesker med at bruge en computer eller en iPad? Eller er du villig til at høre deres(de ældres) historier, lave en debat, lære at strikke, samt spille kortspil? For at være med i denne workshop skal du have lyst til at gøre en forskel for ældre mennesker og dig selv, og så skal du huske din computer eller iPad, til når vi skal ud af huset for at møde de ældre. Vi lover at det bliver en super hyggelig dag med anderledes oplevelser, både for unge og ældre. 
”Jeg synes at det var en sjov og lærerig dag sammen med de ældre på Sløjfen, da jeg følte at jeg gjorde en forskel. Men jeg synes også at de gjorde en forskel for mig, da jeg lærte om mine medmennesker fra den ældre generation.” - Cecilie 3.b
“Jeg forventede, at vi skulle snakke med pensionisterne om gamle dage og bare hygge med dem, men ikke rigtig andet da de sikkert ville være for gamle til at få en rigtig samtale kørende. Jeg tog rigtig meget fejl. Det var et rigtig fedt initiativ fra elevernes side og noget jeg helt sikker vil se frem til næste år.” - Niels 3.b',
			'teaser_image' => 'generation.jpg',
			'freeplaces' => 30,
                        'uri' => '',
		));
                // Workshop 21
		Workshop::create(array(
			'title' => 'OEG - et globalt værested  v. Karen og Sidsel',
                        'subtitle' => '',
			'description' => 'OEG skal gøres til et globalt værested, hvor du møder en kulturel mangfoldighed til hverdag. Det betyder, at OEG bliver rammen om en hverdag, hvor folk føler sig som en del af et globalt fællesskab og deltager i aktiviteter, der ligger ud over Ørestads grænser. Kort sagt – vi skal udvikle ideer til, hvordan vi gør OEG til en mere global skole. 

I denne workshop arbejder vi innovativt ved hjælp af Index’ kompas, og I skal i løbet af dagen udvikle et produkt, der gør skolen mere global. Produkterne præsenteres for en fra skolens ledelse ved workshoppens afslutning. Den bedste idé, bliver realiseret.',
			'teaser_image' => 'oeg-vaerksted.png',
			'freeplaces' => 30,
                        'uri' => '',
		));
                // Workshop 22
		Workshop::create(array(
			'title' => 'OMBOLD',
                        'subtitle' => 'Hvordan fodbold kan gøre en forskel - for hjemløse.', 
			'description' => 'Organisationen OMBOLD, som står bag Danmarks hjemløselandshold i fodbold, kommer og holder et oplæg om deres landshold, samt hvordan fodbold kan gøre en forskel for hjemløse og udsatte mennesker. Herefter tager hjemløselandsholdstræner Rikke Sparving eleverne med på banen i byparken og laver en gang fodboldtræning ud fra de principper som OMBOLD bruger for at få samfundets allermest idrætssvage grupper op ad sofaen og ud på banen – Nemlig at det først og fremmest handler om at have det sjovt.',
			'teaser_image' => '',
			'freeplaces' => 30,
                        'uri' => '',
		));


                // Workshop 23
		Workshop::create(array(
			'title' => 'Tegnstuen / Street Signers',
                        'subtitle' => '',
			'description' => 'Mød en døv og lær at kaste med håndtegn! Tegnstuen introducerer dig til dansk tegnsprog, et visuelt sprog, der tales af 4000 danskere, der er døve eller svært hørehæmmede. Dansk tegnsprog er et sprog, som mange flere mennesker burde kunne, fordi man bruger hele kroppen og alle sine sanser, ligesom man via tegnsprog bliver meget mere opmærksom på sine medmennesker. Til workshoppen vil du også (på dansk tegnsprog, via tegnsprogstolk) blive lidt klogere på tegnsprogets og døvekulturens mange muligheder og udfordringer, og du vil komme til at producere små videoer med tegnsprog.',
			'teaser_image' => '',
			'freeplaces' => 30,
                        'uri' => '',
		));


                // Workshop 24
		Workshop::create(array(
			'title' => 'Ungdommens Røde Kors',
                        'subtitle' => 'Frivillighed gør en forskel',
			'description' => 'Deltag i Ungdommens Røde Kors’ workshop og få indblik i, hvorfor det gør en forskel at være frivillig. Du får indblik i organisationens nationale aktiviteter, men også det spændende internationale arbejde som vi gør. Vi inddrager dine egne tanker og mulige erfaringer med det at være frivillig og at gøre en forskel.  Gennem workshops får du bl.a. mulighed for at speed-debattere om frivillighedskultur, få indblik i en flygtnings situation, prøve vores 5-trins guide til opstart af projekter og drømme stort sammen med os!',
			'teaser_image' => '',
			'freeplaces' => 30,
                        'uri' => '',
		));


                // Workshop 25
		Workshop::create(array(
			'title' => 'Ventilen: en vej ud af ensomheden',
                        'subtitle' => '',
			'description' => 'Ensomhed kan ramme alle – og heldigvis kan vi alle sammen gøre noget for at skabe gode fællesskaber. Og række ud mod dem, der trænger til et klap på skulderen. I Ventilen arbejder vi med ensomhed blandt unge og hvordan den kan forebygges og afhjælpes. Og det fede er, at det der hjælper ensomme unge, også er godt for alle andre. Bliv klogere på ensomhed, social trivsel og hvad du kan gøre for at skabe den klasse og skole, der er rarest at være en del af. Du kan læse mere om Ventilen på http://www.ventilen.dk.',
			'teaser_image' => 'ventilen.jpg',
			'freeplaces' => 35,
                        'uri' => '',
		));

                // Workshop 26
		Workshop::create(array(
			'title' => 'Zoo',
                        'subtitle' => '',
			'description' => 'Zoo er ikke bare et sted hvor man ser på nuttede dyr. Zoologisk have er også et sted hvor man bedriver forskningsarbejde, arbejder aktivt for naturbevarelse og deltager i et globalt samarbejde omkring klimaforandringer.  Kom med til Zoologisk have og bliv klogere på hvad denne fantastiske have gør for vores fælles miljø og natur. Dagen afrundes med en praktisk opgave, hvor du er med til at gøre en forskel!',
			'teaser_image' => '',
			'freeplaces' => 30,
                        'uri' => '',
		));

	}
}
