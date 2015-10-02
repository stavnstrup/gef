<?php

// app/database/seeds/WorkshopTableSeeder.php

class WorkshopTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('workshops')->delete();

                // Workshop 1
		Workshop::create(array(
			'wstype' => 'address',
			'title' => 'Soldat for en dag for både piger og drenge',
                        'subtitle' => '',
			'description' => 'Vil du være “soldat for en dag”, så tag med til garderkasernen i Høvelte. Her trækker du i
uniform og deltager i skydning og opgavemarch med masser af aktionfyldte aktiviteter. Du 
prøver også en feltforhindringsbane og får en feltration til frokost i det grønne. Eftermiddagen 
bruges til foredrag og film om soldaters uddannelser og om, hvordan de kan være med til at 
gøre en forskel i verden. Du skal være iført praktisk fodtøj og du skal påføre din adresse på 
tilmeldingen sammen med dit navn.',
			'teaser_image' => '',
			'freeplaces' => 100,
                        'uri' => '',
		));


                // Workshop 2
		Workshop::create(array(
			'title' => 'Gør en forskel med Amnesty Youth',
                        'subtitle' => '',
			'description' => 'Meld dig til Amnesty\'s workshop for at få en hyggelig dag, men menneskerettigheder og
kreativitet i fokus.
Dagen starter ud med et oplæg fra Amnesty om deres aktuelle case, hvor man bliver sat ind i , hvad organisationen går ud på. Her efter vil i blive sat i gang med enten at skrive breve, lave plakater og andet hygge. Under hele dagen vil der køre en konkurrence, hvor der er en særlig præmie i spil.
Hvis du er frisk på en hyggelig dag, med plakat­lavning og "Skriv for liv" så er dette workshoppen til dig!
Håber vi ses!
Masser af kærlighed fra Amnesty­gruppen Humørikonet heart Humørikonet heart',
			'teaser_image' => '',
			'freeplaces' => 30,
                        'uri' => 'http://amnesty.dk',
		));

                // Workshop 3
		Workshop::create(array(
			'wstype' => 'od.have.job',
			'title' => 'Operation Dagsværk workshop (du finder selv job)',
                        'subtitle' => '',
			'description' => 'Operation Dagsværk er en frivillig organisation af unge der hvert år sætter fokus på en
specifik sag via en oplysningskampagne. Dette munder ud i den store Operation 
Dagsværk dag, hvor gymnasieelever fra hele landet arbejder en dag for at samle penge 
ind til årets sag.',
			'teaser_image' => 'dagsvaerk.png',
			'freeplaces' => 70,
                        'isODworkshop' => true,
                        'uri' => 'http://od.dk/',
		));


                // Workshop 4
		Workshop::create(array(
			'wstype' => 'od.want.job',
			'title' => 'Operation Dagsværk workshop (vi finder job for dig)',
                        'subtitle' => '',
			'description' => 'Operation Dagsværk er en frivillig organisation af unge der hvert år sætter fokus på en
specifik sag via en oplysningskampagne. Dette munder ud i den store Operation 
Dagsværk dag, hvor gymnasieelever fra hele landet arbejder en dag for at samle penge 
ind til årets sag.',
			'teaser_image' => 'dagsvaerk.png',
			'freeplaces' => 30,
                        'isODworkshop' => true,
                        'uri' => 'http://od.dk/',
		));


                // Workshop 5
		Workshop::create(array(
			'title' => 'Når generationer mødes',
                        'subtitle' => '',
			'description' => 'I denne workshop mødes unge og ældre generationer. Vil du være med til at hjælpe ældre mennesker med at bruge en computer eller en iPad? Eller er du villig til at høre deres(de ældres) historier, lave en debat, lære at strikke, samt spille kortspil? For at være med i denne workshop skal du have lyst til at gøre en forskel for ældre mennesker og dig selv, og så skal du huske din computer eller iPad, til når vi skal ud af huset for at møde de ældre. Vi lover at det bliver en super hyggelig dag med anderledes oplevelser, både for unge og ældre. 
”Jeg synes at det var en sjov og lærerig dag sammen med de ældre på Sløjfen, da jeg følte at jeg gjorde en forskel. Men jeg synes også at de gjorde en forskel for mig, da jeg lærte om mine medmennesker fra den ældre generation.” - Cecilie 3.b
“Jeg forventede, at vi skulle snakke med pensionisterne om gamle dage og bare hygge med dem, men ikke rigtig andet da de sikkert ville være for gamle til at få en rigtig samtale kørende. Jeg tog rigtig meget fejl. Det var et rigtig fedt initiativ fra elevernes side og noget jeg helt sikker vil se frem til næste år.” - Niels 3.b',
			'teaser_image' => '',
			'freeplaces' => 30,
                        'uri' => '',
		));


                // Workshop 6
		Workshop::create(array(
			'title' => 'Glad Tur',
                        'subtitle' => 'Gå på café, brug din smartphone og gør en forskel.',
			'description' => 'Lyder det for godt til at være sandt? Det er det ikke. På dagens workshop skal I nemlig ud i byen sammen og anmelde cafeer, biografer og butikker ved hjælp af vores nye app Glad Tur. Men det handler ikke om kvaliteten på maden eller hvor hyggeligt der er. I skal anmelde stedernes tilgængelighed. Er der fx trapper ved indgangen, plads til en kørestol, mulighed for hjælp? Det er ganske enkelt at anmelde i app’en, men gør en stor forskel for mennesker med handicap, deres venner og familie! Samtidig bidrager du til et rigere og mere mangfoldigt samfund til glæde for os alle sammen. 

Dagen starter hos Glad Fonden hvor vi først vil fortælle om hvordan vi i Glad Fonden ansætter og uddanner mennesker med og uden handicap. Sammen  laver vi mad, teater, radio, tv og meget mere. Måske kender du os fra Tv-Glad? Derefter vil I blive introduceret til Glad Tur app’en og gå ud og anmelde byen I små grupper. Det hold der får anmeldt flest steder på dagen vinder et gavekort til et cafébesøg. Vi slutter dagen hos Glad Fonden og  kårer vinderen af konkurrencen. 

"Vi tror på, at mennesker med forskellige forudsætninger er et aktiv, der kan gøre det samfund vi bor i rigere, gladere og mere inspirerende.”',
			'teaser_image' => '',
			'freeplaces' => 75,
                        'uri' => '',
		));


                // Workshop 7
		Workshop::create(array(
			'title' => 'Gør matematik til en leg for folkeskolen',
                        'subtitle' => '',
			'description' => 'Matematik ER både sjovt og nemt – det er bare ikke alle, der har opdaget det endnu!
Nu har du chancen for at gøre matematiklæring til en leg for skolebørn. I et samarbejde med Ørestad Skole skal vi finde på sjove lege, som samtidigt lærer børnene noget god matematik. Her skal vi bruge alle muligheder. Det kan være dans, praktiske og udfordrende opgaver, orienteringsløb, sjove historier og meget meget mere.',
			'teaser_image' => '',
			'freeplaces' => 25,
                        'uri' => '',
		));


                // Workshop 8
		Workshop::create(array(
			'title' => 'Hvordan fodbold kan gøre en forskel - for hjemløse',
                        'subtitle' => '',
			'description' => 'Organisationen OMBOLD, som står bag Danmarks hjemløselandshold i fodbold, kommer og holder et oplæg om deres landshold, samt hvordan fodbold kan gøre en forskel for hjemløse og udsatte mennesker.
Herefter tager hjemløselandsholdstræner Rikke Sparving sammen med nogle OMBOLD spillere eleverne med på banen i byparken og laver en miniturnering ud fra de principper som OMBOLD bruger for at få samfundets allermest idrætssvage grupper op ad sofaen og ud på banen
– Nemlig at det først og fremmest handler om at have det sjovt.',
			'teaser_image' => '',
			'freeplaces' => 30,
                        'uri' => '',
		));


                // Workshop 9
		Workshop::create(array(
			'title' => 'Tegnstuen / Street Signers',
                        'subtitle' => '',
			'description' => 'Mød en døv og lær at kaste med håndtegn! Tegnstuen introducerer dig til dansk tegnsprog, et visuelt sprog, der tales af 4000 danskere, der er døve eller svært hørehæmmede. Dansk tegnsprog er et sprog, som mange flere mennesker burde kunne, fordi man bruger hele kroppen og alle sine sanser, ligesom man via tegnsprog bliver meget mere opmærksom på sine medmennesker. Til workshoppen vil du også (på dansk tegnsprog, via tegnsprogstolk) blive lidt klogere på tegnsprogets og døvekulturens mange muligheder og udfordringer, og du vil komme til at producere små videoer med tegnsprog.',
			'teaser_image' => '',
			'freeplaces' => 30,
                        'uri' => '',
		));

                // Workshop 10
		Workshop::create(array(
			'title' => 'Idrætsprojektet gør en forskel',
                        'subtitle' => '',
			'description' => 'Oplev hvordan idræt og bevægelse kan gøre en forskel. Hør hvordan idræt og fællesskab har gjort en forskel for Abdullah Abdullah og få sved på panden, når han og Christoffer Hansen, grundlægger og leder af Idrætsprojektet, tæsker jer igennem i byparken. Brug en dag af dit liv med en organisation som har noget på hjerte. Du vil få et motiverende oplæg om Idrætsprojektets historie, metode og resultater. Du vil høre Abdullahs historie ’fra kriminel til træner’. Så på med sportstøj, rens ørerne og kom åben og positiv til en spændende dag.',
			'teaser_image' => '',
			'freeplaces' => 100,
                        'uri' => 'http://www.dr.dk/tv/se/tv-avisen/tv-avisen-1419#!/19:27',
		));


                // Workshop 11
		Workshop::create(array(
			'title' => 'Long living - bæredygtighed',
                        'subtitle' => '',
			'description' => 'Trænger du til en dag med fordybelse og mindfulness? Kunne du tænke dig at lære om bæredygtighed på en ny og interessant måde? Drømmer du om at gøre en forskel? Så meld dig til vores workshop, hvor vi både skal se film, debattere og lave forskellige sjove øvelser for at blive klogere på, hvad bæredygtighed egentlig handler om.
I vil lære om bæredygtighed, samt hvilke konsekvenser vores stigende forbrug i samfundet har på klodens natur, befolkning og dyr. Samtidig vil I lære, hvordan vi hver især kan være med til at gøre en forskel. Vi fokuserer derfor på en indre fordybelse hos det enkelte individ, dette med henblik på at opnå en dybere forståelse for en indre selv- og verdensopfattelse.
Alle kan være med - uanset om du kender til bæredygtighed eller ej.',
			'teaser_image' => '',
			'freeplaces' => 30,
                        'uri' => '',
		));

                // Workshop 12
		Workshop::create(array(
			'title' => 'Ventilen: en vej ud af ensomheden',
                        'subtitle' => '',
			'description' => 'Ensomhed kan ramme alle – og heldigvis kan vi alle sammen gøre noget for at skabe gode fællesskaber. Og række ud mod dem, der trænger til et klap på skulderen. I Ventilen arbejder vi med ensomhed blandt unge og hvordan den kan forebygges og afhjælpes. Og det fede er, at det der hjælper ensomme unge, også er godt for alle andre. Bliv klogere på ensomhed, social trivsel og hvad du kan gøre for at skabe den klasse og skole, der er rarest at være en del af. Du kan læse mere om Ventilen på http://www.ventilen.dk.',
			'teaser_image' => '',
			'freeplaces' => 30,
                        'uri' => '',
		));

                // Workshop 13
		Workshop::create(array(
			'title' => 'Afrikansk dans og trommespil og Frivillig i Ghana',
                        'subtitle' => '',
			'description' => 'I denne workshop vil du lære ægte afrikansk dans og trommespil, som giver glæde og afstressning. I programmet er der også et oplæg om, hvordan man kan gøre en forskel som frivillig i Ghana. Som der står på sitet afrikanskdansk.dk: “Ghana og dens indbyggere er en fantastisk oplevelse. Ghana er et af de fredeligste lande i Afrika og indbyggerne er utrolig imødekommende, hjælpsomme og kærlige. (...) Som frivillig på vores projekt kan du nemlig få lov at prøve kræfter med lige netop dét, du brænder for. 
Du er selv med til at tilrettelægge dit arbejdsprogram. Har du f.eks. en passion for børn, elsker at være kreativ og praktisk, brænder for at undervise, er bidt af en computer eller noget helt andet, ja så har du muligheden for at få det afprøvet nu.”',
			'teaser_image' => '',
			'freeplaces' => 30,
                        'uri' => '',
		));

                // Workshop 14
		Workshop::create(array(
			'title' => 'Little Big Help',
                        'subtitle' => '',
			'description' => 'Deltag i denne workshop, hvis du vil møde en sand ildsjæl som for 7 år siden forlod en fantastisk karriere for at tage til Indien og starte sin egen velgørenhedsorganisation LittleBigHelp som i dag hjælper over 500 børn og kvinder. Bliv inspireret og provokeret til at udfordre din egen komfortzone i dit liv... Mød også indiske Mercy Barla som arbejder for LittleBigHelp i Kolkata og som vil fortælle om forskellen på at vokse op I Danmark og Indien. Kom til vores workshop hvis du tør og har mod, og bliv væk hvis du har rygsøjle som en regnorm... Du vil gå herfra med ny inspiration og fremover værdsætte i højere grad at du er født i Denmark (eller andedamnen) som vi kalder den.',
			'teaser_image' => '',
			'freeplaces' => 30,
                        'uri' => '',
		));

                // Workshop 15
		Workshop::create(array(
			'title' => 'Fanger der synger og fortæller - og sangskrivning',
                        'subtitle' => '',
			'description' => 'Denne workshop er for dig, der gerne vil lære mere om, hvordan man formulerer personlige sang- /raptekster og sætter musik til disse. Workshoppen  indledes med at korlederen for “Fangekoret”, Louise Adrian, fortæller om, hvordan det at være med i fangekoret gør en forskel for indsatte og tidligere indsatte i Vridsløselille Statsfængsel. Herefter synger og rapper 2­3 kriminelle om deres liv og giver jer derved indblik i hvordan livet er som indsat og kriminel. Efter frokost tager I selv arbejdshandskerne på og udarbejder tekster med udgangspunkt i eget liv. Musiker og sangskriver, Benjamin Aggerbæk, guider jer i god tekstskrivning og sange, som I sætter musik til.',
			'teaser_image' => '',
			'freeplaces' => 20,
                        'uri' => '',
		));

                // Workshop 16
		Workshop::create(array(
			'title' => 'Mellemfolkelig Samvirke',
                        'subtitle' => '',
			'description' => 'Tag med Mellemfolkeligt Samvirke på alternativ sightseeing på Nørrebro. Nørrebro er kendt for at være en mangfoldig bydel, hvor mennesker med mange forskellige nationaliteter lever tæt sammen – og netop den multikulturelle by er i fokus her. Sammen undersøger vi, hvordan byrum og medborgerinitiativer er med til at skabe et miljø med plads til forskellige kulturer, og vi kigger på Nørrebros historie i forhold til blandt andet Ungdomshuset og Folkets Hus. Ved hjælp af tablets, skal I undersøge og dokumentere centrale begreber som f.eks. kultur, multikulturalitet, danskhed og medborgerskab.',
			'teaser_image' => '',
			'freeplaces' => 30,
                        'uri' => '',
		));

                // Workshop 17
		Workshop::create(array(
			'title' => 'Varme til krop og sjæl',
                        'subtitle' => '',
			'description' => 'Sammen med AVITAE­gruppen, kan du være med til at få et indblik i middelalderens køkken, være med til at lave god suppe og godt brød, som man kunne have spist den gang. Når maden er lavet, skal vi dele suppen ud ved metroen eller biblioteket med ordene "Varme til krop og sjæl". Vi skal have brandet at vi vil glæde folk med en varm kop suppe på en kold novemberdag, og lidt om hvordan den er blevet til. Så kom frisk til en varm workshop til glæde for krop og sjæl.
Link til Avitae gruppens ekskursion til Middelaldercenteret ved Nykøbing Falster, hvor vi lærte at lave mad som i middelalderen her',
			'teaser_image' => '',
			'freeplaces' => 30,
                        'uri' => '',
		));



                // Workshop 18
		Workshop::create(array(
			'title' => 'Folkedrab og menneskerettigheder!',
                        'subtitle' => '',
			'description' => 'Aldin Lemes er bosnier og er født i byen Srebrenica. Under krigen i Bosnien fandt der i 1995 et folkedrab sted i Srebrenica, hvor mere end 7.500 drenge og mænd blev dræbt. Aldin overværede som barn folkedrabet og så med sine egne øjne landsbyer blive brændt ned. I sit foredrag fortæller han om, hvilken rolle disse billeder spiller for ham i dag, og hvordan man kommer videre med sit liv efter at have været vidne til et folkedrab.

I denne workshop hører deltagerne først et oplæg ved Aldin. Herefter ser vi filmen "Hotel Rwanda”, der omhandler folkedrabet i Rwanda i 1994. Efter disse to vinker på folkedrab diskuteres folkedrab og menneskerettigheder, og vi skal gøre OEG opmærksom på disse. Vi bruger vores kreativitet til formidling af menneskerettighederne, fx. med posters, happenings eller innovativ formidling. Der bliver brug for at være kreativ. Vi kræver ikke andet end at have lyst til at deltage i et bragende spændende oplæg og ville udfordre OEG­folket!',

			'teaser_image' => '',
			'freeplaces' => 40,
                        'uri' => '',
		));




                // Workshop 19
		Workshop::create(array(
			'title' => 'Politisk kommunikation - design af symboler og logokunst',
                        'subtitle' => '',
			'description' => 'I skal designe et logo for OEG GØR EN FORSKEL, som skal bruges fremover på skolens hjemmeside, plakater, batches m.m.
Vi arbejder først med lidt research af forskellige politiske bevægelsers logoer, som har haft stor symbolsk betydning. Fx Paraplyrevolutionen i HongKong, Det Arabiske Forår m.fl. Herefter arbejder vi praktisk med design af logoer, og hvis vi når det, designer vi plakater til næste års GØR EN FORSKEL DAG.
Vi glæder os til at se jer til en kreativ dag med fokus på logoer og symboler, der gør en forskel!',
			'teaser_image' => '',
			'freeplaces' => 30,
                        'uri' => '',
		));


                // Workshop 20
		Workshop::create(array(
			'title' => 'PR-workshop: Produktion af trailer for GEF i TV­studiet',
                        'subtitle' => '',
			'description' => 'Har du lyst til at komme ind i kontrolrummet i TV­studiet og prøve at være producer, billedmixer eller titler? Eller måske prøve at styre ét af kameraerne i studiet eller være vært foran kameraet? Så skal du tilmelde dig denne workshop, hvor vi skal producere en trailer til næste års Gør en forskel­dag.
Du behøver ikke at være medie+­elev eller have nogen praktisk erfaring med tv-produktion, da elever fra den erfarne samlingsredaktion vil guide og forklare alt undervejs – du skal bare have lyst til at kaste dig ud i det med entusiasme og gå­på­mod!
Vi håber at se dig til en dag med praktisk produktion i TV­studiet.',
			'teaser_image' => '',
			'freeplaces' => 30,
                        'uri' => '',
		));

                // Workshop 21
		Workshop::create(array(
			'title' => 'Rok og rul på plejehjemmet Søster Sophies Minde',
                        'subtitle' => '',
			'description' => 'Kom og vær med i Diakonissestiftelsens frivillige fællesskab for en dag. Her kan du være med til at gøre en forskel i:
VærkstedsLoppen (4­6 pers). I værkstedet mødes frivillige om at reparere, istandsætte og re­designe. Vi bruger vores hænder, vores evner og vores tid til gavn og glæde for andre.
Tøjsortering i genbrugsbutikken Loppeshoppen(4­6 pers). I butikkerne sortere vi til salg i vores egen butik, til Frelsens Hær, til fibergenbrug og til kreative genbrugsværksteder. 
Tre på tur (4­6 pers). Et rickshaw­cykeltilbud til vores beboere på plejehjemmet Søster Sophies Minde. Turene er med til at give de ældre vind i håret og en masse oplevelser og indtryk, de ellers ikke har mulighed for at få. Tit giver turene på cyklen god tid og mulighed for snakke om alt mellem himmel og jord.',
			'teaser_image' => '',
			'freeplaces' => 30,
                        'uri' => '',
		));

                // Workshop 22
		Workshop::create(array(
			'title' => 'Vis en asylansøger DIT Danmark',
                        'subtitle' => '',
			'description' => 'Dagen starter med at OEG elever i par planlægger en aktivitetsdag for 2 asylansøgere. Det kan være hjemmebesøg, sport, sightseeing i KBH osv. Herefter drager vi til Kongelunden Asylcenter, hvor 2 OEG’ere og 2 asylansøgere går sammen. 
Asylansøgerne giver OEG’erne en lille rundvisning i deres gemakker på Kongelunden og herefter tager 4­mandsgupperne afsted på den planlagte aktivitetsdag ­ med OEG eleverne som guider. 
Det er en fordel hvis du kan et mellemøstligt sprog på denne workshop ­ men det er absolut ikke et krav.',
			'teaser_image' => '',
			'freeplaces' => 25,
                        'uri' => '',
		));

                // Workshop 23
		Workshop::create(array(
			'title' => 'Social Media love-storm',
                        'subtitle' => '',
			'description' => 'På den her workshop bliver din opgave at dække OEG Gør En Forskel til de sociale medier.
Workshoppen bliver indledt med, at vi kigger nærmere på, hvordan man skruer en kampagne sammen sammen på forskellige sociale medier, og hvordan man slår igennem med ”en god sag”. Vi bruger denne viden til at udtænke en plan for, hvordan man bedst kan gøre opmærksom på ”OEG Gør En Forskel”­dagen, og det arbejde, som eleverne laver. Herefter bliver I sluppet løs og tager ud til forskellige workshops og arrangementer, for at finde de gode historier og de bedste billeder, som vi publicerer via skolens Facebook, Instagram, hjemmeside – og hvem ved, måske hopper vi også med på Snapchat-vognen!',
			'teaser_image' => '',
			'freeplaces' => 20,
                        'uri' => '',
		));

                // Workshop 24
		Workshop::create(array(
			'title' => 'Rapworkshop - sæt ord på diskrimination',
                        'subtitle' => '',
			'description' => 'Kreativ rap­workshop, hvor I arbejder med at skrive og performe rap om diskrimination og hadforbrydelser. RAPOLITICS er en udtryksform, som kan bruges til at få sat ord på diskrimination og hadforbrydelser. Arrangementet består af en række praktiske øvelser, der giver de unge tilskuere en meget deltagende rolle. Publikum diskuterer, reflekterer og udfører rap­teksterne.  De unge facilitatorer sikrer, at publikum får mulighed for at beskæftige sig med alvorlige emner på kreativ vis. Det kan være emner, som kommer ind på: Hvad diskrimination er
● Hvilke former kan diskrimination, der findes
● Hvor diskrimination kommer fra?
● Hvilke konsekvenser det har, hvis diskrimination ikke stoppes?

Om RAPOLITICS:

RAPOLITICS arbejder med urbane musikalske udtryk, anerkendende kommunikation og demokratisk bevidstgørelse hos børn og unge i Danmark, Bolivia og Mellemøsten. RAPOLITICS søger at styrke børn og unges selvværd samt respekt og forståelse for andre gennem musik, politik og kommunikation og således modarbejde marginalisering og for youth empowerment på en konstruktiv og kreativ måde. RAPOLITICS arbejder med emner som ytringsfrihed, demokrati, diskrimination, revolution og medborgerskab gennem ord og musik. RAPOLITICS udarbejder undervisningsmaterialer og uddanner altid sine Rapolitics­coaches inden for alle relevante emner. I 2015 retter RAPOLITICS fokus mod diskrimination og hadforbrydelser mod minoritetsgrupper blandt borgere i København.',
			'teaser_image' => '',
			'freeplaces' => 20,
                        'uri' => '',
		));

                // Workshop 25
		Workshop::create(array(
			'title' => 'Mediernes magt og den offentlige debat',
                        'subtitle' => '',
			'description' => 'I Ansvarlig Presses workshop opnår du en forståelse for de mekanismer, der findes i samspillet mellem medier og offentlighed, ved selv at prøve kræfter med medieetiske dilemmaer i et rollespil. Med konkrete eksempler fra den aktuelle debat om indvandrere, radikalisering og religionsspørgsmål giver rollespillet dig indsigt i mediernes arbejdsgange og virkelighed. En virkelighed, der også er påvirket af politisk klima samt ambitioner om at sælge aviser, og konsekvenserne kan sommetider være en forenklet dækning. Du får redskaber til at analysere medierne og kendskab til, hvordan de kan få en stemme i den offentlige debat og derigennem opnå en højere grad af medborgerskab og demokratiforståelse. Workshoppen afdækker desuden spørgsmål og fordomme om mediernes virke og rolle i samfundet med udgangspunkt i foredragsholdernes erfaringer fra redaktionelle processer, de journalistiske nyhedskriterier og den danske mediebranche i almindelighed.',
			'teaser_image' => '',
			'freeplaces' => 30,
                        'uri' => '',
		));


                // Workshop 26
		Workshop::create(array(
			'title' => 'En NICE dag med bæredygtighed i modebranchen',
                        'subtitle' => '',
			'description' => 'Klodens voksende befolkning forbruger ufattelige mængder tøj og tekstiler. Hvert år farves cirka 28 milliarder kilo tekstiler til mode­ og tekstilindustrien, hvilket gør den globale mode­ og tekstilindustri ansvarlig for 17 % af al industriel vandforurening. Dette er bare én af mange konsekvenser, som vores stigende tøjforbrug har, og med en stigende verdensbefolkning kan det få kolossale klimamæssige konsekvenser.
Under Danish Fashion Institute er projektet NICE blevet etableret. NICE står for ”Nordic Initiative: Clean and Ethical”, og er et nordisk projekt, der arbejder på at gøre modeindustrien mere bæredygtig. I NICE’s workshop vil I lære mere om modeindustriens bagside og de initiativer der eksisterer, som kan gøre den mere bæredygtig og ansvarlig. I vil få lov til at udarbejde Jeres bud på en oplysningskampagne, der kan viderebringe den nylige viden I besidder til de danske forbrugere.',
			'teaser_image' => '',
			'freeplaces' => 40,
                        'uri' => '',
		));
		
                // Workshop 27
		Workshop::create(array(
			'title' => 'Hjælp unge hjemløse sammen med Kofoeds Skole',
                        'subtitle' => '',
			'description' => 'Antallet af unge hjemløse er eksploderet de senere år. Faktisk siger man i dag, at hver 4. hjemløse i Danmark er under 30 år.
Men hvem er disse unge mennesker og hvordan bliver man hjemløs i så ung en alder? Det kan du få svaret på gennem en række radiofortællinger, hvor 7 unge fra Kofoeds Kælder (der er et kontaktsted for unge hjemløse) åbenhjertet fortæller om hvordan det kunne gå så galt, og om hvordan det er at være ung, samtidig med, at man er hjemløs.
Der vil også være mulighed for at høre en af medarbejderne fra Kofoeds Kælder fortælle om hvad det er der gør, at så mange unge bliver ramt af hjemløshed i disse år og hvad der bliver gjort for at hjælpe dem. Til sidst vil I så have muligheden for selv gøre en forskel – og komme med kreative bud på, hvordan vi bedre kan oplyse om ungdomshjemløshed – og ikke mindst hvad vi kan gøre, for at hjælpe dem endnu mere.',
			'teaser_image' => '',
			'freeplaces' => 25,
                        'uri' => '',
		));
                // Workshop 28
		Workshop::create(array(
			'title' => 'Menneskebiblioteket',
                        'subtitle' => '',
			'description' => 'Mød bøgerne i Menneskebiblioteket. Det er mennesker, som du og jeg, men på grund af deres livsstil, overbevisning, etnicitet, handicap, seksualitet, sociale status eller beskæftigelse, er de ofte genstand for fordomme og stereotyper.
Alle bøger stiller i udgangspunktet frivilligt op til udlån og dialog, for at stille deres viden, erfaring, holdninger og oplevelser til rådighed for læseren. Det giver muligheden for et unikt indblik i et andet menneskes liv og en indsigt i det menneskes livsvilkår. En indsigt vi ved af erfaring, typisk resulterer i en bedre forståelse.
Lån dem på Menneskebiblioteket og opdag, at her er mere gemt end omslaget giver indtryk af. “Rigtige mennesker, rigtige samtaler”!',
			'teaser_image' => '',
			'freeplaces' => 55,
                        'uri' => '',
		));
                // Workshop 29
		Workshop::create(array(
			'title' => 'Islam, jødedom og kristendom - er vi så forskellige?',
                        'subtitle' => '',
			'description' => 'Din Tro – Min Tro tilbyder besøg af en jøde, en kristen og en muslim, der fortæller om forskelle og ligheder mellem de tre religioner
Oplægsholderne vil især komme ind på:
● Hvad de tror på
● Hvad de er fælles om
● Hvad der adskiller dem
Efter teamets korte oplæg inviteres der til dialog, hvor publikum kan spørge om alt vedrørende de tre religioner. Oplægsholderne forholder sig dog ikke til diverse politiske standpunkter og konflikter.
Din Tro – Min Tro til formål at skabe dialog og viden om de 3 monoteistiske religioners baggrund og traditioner med vægt på forståelse og respekt for det enkelte menneskes valg.',
			'teaser_image' => '',
			'freeplaces' => 30,
                        'uri' => '',
		));


                // Workshop 30
		Workshop::create(array(
			'title' => 'DANS gør en forskel',
                        'subtitle' => '',
			'description' => 'Vi har længe vidst at man kan blive glad af at danse og at bevægelse til forskellige stemninger i musikken kan påvirke humøret. I dansen arbejdes nemlig med både krop og psyke og ny forskning viser at dans kan gøre en forskel i behandlingen af depression, angst og stress. 
I denne workshop skal du danse til sveden drypper og du smiler op til begge ører.
Workshoppen starter med et ca. 45 minutters oplæg om hvad dans gør ved hjernen biologisk set, hvilke muligheder der er for at danse i Danmark samt om hvordan dans kan gøre en forskel i dit liv. 
Derefter er der 2 x ca. 2 timers danseworkshop (funk/hiphop/showdance). Vi arbejder frem mod et lille show, som fremvises om eftermiddagen.
OBS: Denne workshop er for elever med danseerfaring eller høj grad af musikforståelse og rytmisk sans.',
			'teaser_image' => '',
			'freeplaces' => 30,
                        'uri' => '',
		));

                // Workshop 31
		Workshop::create(array(
			'title' => 'OEG - et globalt værested  v. Karen og Sidsel',
                        'subtitle' => '',
			'description' => 'OEG skal gøres til et globalt værested, hvor du møder en kulturel mangfoldighed til hverdag. Det betyder, at OEG bliver rammen om en hverdag, hvor folk føler sig som en del af et globalt fællesskab og deltager i aktiviteter, der ligger ud over Ørestads grænser. Kort sagt – vi skal udvikle ideer til, hvordan vi gør OEG til en mere global skole. 

I denne workshop arbejder vi innovativt ved hjælp af Index’ kompas, og I skal i løbet af dagen udvikle et produkt, der gør skolen mere global. Produkterne præsenteres for en fra skolens ledelse ved workshoppens afslutning. Den bedste idé, bliver realiseret.',
			'teaser_image' => 'oeg-vaerksted.png',
			'freeplaces' => 30,
                        'uri' => '',
		));

                // Workshop 32
		Workshop::create(array(
			'title' => 'Center for konfliktløsning: Workshop om fordomme, myter og konflikter',
                        'subtitle' => '',
			'description' => 'Det er almenmenneskeligt at have fordomme om andre. Nogle af fordommene er vi bevidste om, andre styrer vores adfærd, uden vi rigtigt er klar over det. Det gælder ikke mindst de fordomme, som gennem tiden er blevet til myter, dvs. en slags ”sandheder” om andre. 

Workshoppen undersøger, hvordan fordomme, myter og diskrimination opstår og virker mellem mennesker, generelt men også konkret i din hverdag på Ørestad Gymnasium. Hvornår risikerer fordomme at udvikle sig til diskrimination og til konflikter? Og hvordan kan du gøre en forskel ved at ophæve og forandre fordomme og myter gennem dialog? Formålet er at give dig viden om fordomme generelt, indsigt i dine egne fordomme og inspiration til god konflikthåndtering gennem dialog.',
			'teaser_image' => '',
			'freeplaces' => 30,
                        'uri' => '',
		));

                // Workshop 33
		Workshop::create(array(
			'title' => 'Kage som alle kan tage og smage. Vil du bage?',
                        'subtitle' => '',
			'description' => 'Skal din indre bager se dagens lys? Har du lyst til at gøre en forskel for dine medstuderende med kage­treat når GEF dagen er omme? I denne workshop mødes vi og finder i fællesskab opskrifter på lækre kager. Vi tager sammen ud og køber ingredienser og herefter fordeler vi os i grupper, der tager hjem til de workshopdeltagere der bor tæt på skolen og bager lækre kager. Vi handler udfra princippet om ingen madspild. Ved 14.30 tiden mødes vi med vores kager i OEG’s foyer og her serverer vi smagsprøver til folk, når deres workshops slutter. Vi sætter raslebøsser op, sådan at kagespiserne kan donere et selvvalgt beløb, når de snupper kage. Det indsamlede beløb går til Røde Kors. NB: Det er en fordel, hvis du bor tæt på skolen til denne workshop, men det er ikke et krav.',
			'teaser_image' => '',
			'freeplaces' => 32,
                        'uri' => '',
		));


	}
}
