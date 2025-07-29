<?php

namespace Database\Seeders;

use App\Models\Quality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QualitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $qualities = [
            // 1-5
            [
                'name' => 'Adiestrador de Cuervos',
                'description' => 'Estás capacitado para adiestrar y utilizar cuervos mensajeros. Puedes utilizar cuervos para transmitir tus mensajes; para ello hay que realizar una tirada de Trato animal aplicando la especialidad Cautivar (si la tienes), pero no la harás tú, sino el Narrador en secreto (puesto que tu personaje no tiene forma de saber si el cuervo ha llegado a su destino). EI Narrador fijará la dificultad de esta tirada basándose en la distancia, la velocidad o el peligro que correrá el ave. La mayoría de los mensajes requieren una tirada de RUTINA (6). Si consigue la tirada en tu nombre, el cuervo entregará el mensaje al destinatario correcto, pero si la falla el mensaje se perderá (y posiblemente el cuervo también).',
                'type' => 'Predestinada'

            ],
            [
                'name' => 'Afortunado',
                'description' => 'Gozas de una suerte inusual. Puedes repetir una única tirada una vez al día y quedarte con el mejor de ambos resultados.',
                'type' => 'Predestinada'
            ],
            [
                'name' => 'Artista',
                'description' => 'Tienes la capacidad de crear magníficas obras de arte. Elige entre pintura, poesía, composición, escultura o cualquier otra forma de arte. Si dedicas ocho horas diarias durante cinco días a tu arte, ganarás 10 venados de plata a cambio. También puedes hacer una tirada MODERADA (9) de Ingenio; si la consigues, ganas 1 venado de plata adicional por cada grado de éxito obtenido. A discreción del Narrador, podrías recibir +1D) para las tiradas de Persuasión que hagas contra quienes conozcan y admiren tu obra y tu talento.',
                'type' => 'Habilidad'
            ],
            [
                'name' => 'Atleta Consumado',
                'description' => 'Trenes una excelente forma fisica y destacas en una actividad particular. Elige una especialidad de Brío. Siempre que debas realizar una tirada de Brío relacionada con la especialidad escogida, podrás convertir la mitad de tus dados de bonificación (redondeando hacia abajo, mínimo 1) en dados de habilidad, Puedes adquirir esta cualidad varias veces y asignarla a una especialidad de Brío distinta cada vez.',
                'repeatable' => true,
                'type' => 'Habilidad'
            ],
            [
                'name' => 'Atractivo',
                'description' => 'Posees una increíble belleza, toda persona susceptible de sentirse atraída por tu aspecto tendrá problemas para concentrarse en tu presencia. Cuando tengas que hacer una tirada de Persuasión, podrás volver a tirar tantos dados en los que hayas sacado un 1 como la mitad de tu rango en Persuasión (mínimo una repetición).',
                'type' => 'Social'
            ],
            // 6-10
            [
                'name' => 'Autoridad',
                'description' => 'Vistes el manto del liderazgo, y todos te reconocen como una figura autoridad. Tu penalización a la Persuasión en una intriga (si la sufres) se reduce en 2. De este modo, cuando tu actitud sea de Rechazo no sufrirás ninguna penalización, si es de Aversión sólo se te impondrá un -2, y si sientes Hostilidad únicamente sufrirás una penalización de -4.',
                'type' => 'Social'
            ],
            [
                'name' => 'Banda de Leales',
                'description' => 'Estás rodeado de luchadores experimentados que os profesan una lealtad inquebrantable a ti y los tuyos. Recibes una escuadra veterana de diez hombres (ver página 170). Los miembros de esta banda de leales tienen las características de guardias (página 211 o, si el Narrador te da permiso, puedes asignarles las características de cualquier otra unidad en la que hayas invertido. Esta escuadra se reorganiza o reagrupa automáticamente al principio de cada asalto hasta ser destruida. Si alguna vez es aniquilada por completo, pierdes esta cualidad y el punto de Destino que invertiste en su adquisición. Aunque no tienes que pagar a los soldados de la escuadra por sus servicios, sí deberás proporcionarles comida, alojamiento y suministros.',
                'type' => 'Predestinada'
            ],
            [
                'name' => 'Benefactor',
                'description' => 'Gozas del favor de una importante personalidad. Alguien ilustre vela por ti. Esta cualidad es un requisito indispensable para algunas otras. Debes ponerte de acuerdo con el Narrador para definir al individuo que te protege. El benefactor debe estar relacionado con una de las cualidades que desees adquirir. Puede proporcionarte información, audiencias, compañía o incluso interesarte por tu carrera, aunque normalmente esta cualidad no suele traducirse en reglas beneficiosas.',
                'type' => 'Predestinada'
            ],
            [
                'name' => 'Caballero de Torneos',
                'description' => 'Eres un veterano de numerosos torneos. Cuando participes en una justa, podrás añadir el número de dados de bonificación de tu especialidad Torneos al resultado de tu tirada de Combate cuerpo a cuerpo y a tu valor pasivo de Trato animal para permanecer sobre la silla de tu montura.'
            ],
            [
                'name' => 'Cambiapieles',
                'description' => 'Has dominado el arte del cambio de piel y puedes abandonar tu cuerpo a voluntad para introducirte en el de tu animal de compañía. Mientras duermes, puedes vestir la piel de tu compañero animal sin ningún peligro. Utilizas las características del animal, pero conservas tu propio Ingenio y tu Voluntad. Puedes permanecer en esta forma tanto tiempo como desees, aunque has de ser consciente de que tu cuerpo tiene necesidades que satisfacer; un viaje prolongado al interior de tu compañero animal puede hacer que mueras de inanición si permaneces dentro de él durante una semana o más. Puedes regresar a tu cuerpo automáticamente. Si tu compañero animal sufre daños, vuelves a tu cuerpo de inmediato. Además, ahora también puedes adquirir el beneficio Compañero animal en múltiples instancias, lo que te confiere la capacidad de vestir las pieles de varios animales (pero nunca de varios a la vez).',
                'type' => 'Predestinada'
            ],
            // 11-15
            [
                'name' => 'Carismático',
                'description' => 'Sabes dar buen uso a tu marcada personalidad. Al adquirir esta cualidad debes elegir una única especialidad de Persuasión. Cuando tengas que hacer una tirada de Persuasión en la que pueda aplicarse la especialidad elegida, añade un +2 al resultado de la tirada. Puedes adquirir esta cualidad varias veces y asignarla a una especialidad nueva cada vez',
                'repeatable' => true,
                'type' => 'Social'
            ],
            [
                'name' => 'Certero',
                'description' => 'Tu mano firme y tu aguzada vista te convierten en un adversario mortífero cuando utilizas armas de proyectil. Tus ataques de Puntería pueden atravesar o eludir la cobertura de tus adversarios. Recibes +1D en todas las tiradas de Puntería que realices para atacar a un adversario protegido por algún tipo de cobertura.'
            ],
            [
                'name' => 'Comediante',
                'description' => 'Eres un consumado actor e intérprete y tus bufonadas deleitan al público. Puedes actuar delante de un público y ganarte la vida con ello. Para realizar una interpretación, debes conseguir una tirada de Persuasión. La dificultad de esta tirada suele ser MODERADA(9), pero puede aumentar o disminuir en función del ambiente y del humor de la audiencia. Si superas la tirada ganas 1D6 venados de plata, y por cada grado de éxito obtenido además del primero percibes 1 moneda adicional. Una única tirada representa toda una noche de actuaciones. Si obtienes un fallo crítico habrás ofendido al público y te echarán a patadas por tu mala actuación. Este mal trago te impondrá una penalización de -5 a los resultados de tus tiradas de Persuasión hasta que superes una de ellas actuando en público.',
                'type' => 'Habilidad'
            ],
            [
                'name' => 'Compañero Animal',
                'description' => 'Posees un vínculo con un animal que te profesa una lealtad inquebrantable y una firme disposición a defenderte de todo peligro. Elige un animal de la siguiente lista: perro, águila, caballo, cuervo, gatosombra o lobo. Este animal te es extremadamente leal y luchará por ti cuando 10 necesites. Siempre que tu animal se encuentre adyacente a ti o a tu adversario, recibes +1D para tus tiradas de Combate cuerpo a cuerpo. No necesitas hacer ninguna tirada de Trato animal para controlar a tu animal. Las características de tu compañero animal son las de un espécimen medio, descritas en el CAPÍTULO II: EI. NARRADOR (página 211). Si tu compañero animal muere, pierdes este beneficio y el punto de Destino que invertiste en él. Si el Narrador te lo permite, puedes escoger algún otro tipo de animal como compañero (como un lobo huargo, por ejemplo).',
                'repeatable' => true,
                'type' => 'Predestinada'
            ],
            [
                'name' => 'Compañero Fiel',
                'description' => 'Un estrecho vínculo te une a otro personaje, y su compañía te granjea ciertos beneficios. Adquieres el servicio de un aliado particularmente leal. Crea otro personaje usando las reglas descritas en el CAPÍTULO 3: CREACIÓN DE PERSONAJES. Tu compañero debe tener un Estatus inferior al tuyo; es completamente leal y se esforzará por obedecer tus órdenes de la mejor forma posible. Si muere, perderás esta cualidad y el punto de Destino invertido en ella. También gana Experiencia (la mitad de toda la que tú ganes). Cuando entables un combate, tu Defensa en combate y tu Defensa en intrigas se incrementan en un +2 si tu compañero se encuentra adyacente a ti.',
                'type' => 'Predestinada'
            ],
            // 16-20
            [
                'name' => 'Contactos',
                'description' => 'Dispones de varios espías y confidentes en una zona concreta. Al adquirir esta cualidad, debes elegir una región (el Norte, el Dominio, Dorne, etc.) o una ciudad (Desembarco del Rey, Puerto de lbben, etc.). Tienes contactos en el lugar escogido y puedes acudir a ellos en busca de información. Recibes +1D a todas las tiradas de Conocimiento que realices mientras estés en el lugar elegido. Puedes adquirir esta cualidad varias veces y asignarla a un lugar distinto cada vez.',
                'repeatable' => true,
                'type' => 'Habilidad'
            ],
            [
                'name' => 'Conocedor del Terreno',
                'description' => 'Tu vasta experiencia en tierras salvajes te concede ventaja cuando te desplazas por terreno familiar. Elige un tipo de terreno de entre los siguientes: desiertos, bosques, colinas, pantanos, montañas, llanuras y litorales. Cuando tengas que hacer una tirada de Supervivencia en zonas del tipo escogido, podrás añadir al resultado de tu tirada un número igual a la cantidad de dados de bonificación que tengas en Educación. Además, nunca sufres penalizaciones al Movimiento cuando te desplaces por el tipo de terreno elegido. Puedes adquirir esta cualidad varias veces y asignarla a un tipo de terreno distinto cada vez.',
                'repeatable' => true,
                'type' => 'Habilidad'
            ],
            [
                'name' => 'Cortés',
                'description' => 'Tus modales son impecables. Puedes añadir la mitad de tu rango de Persuasión (redondeando hacia abajo, mínimo 1) al resultado de tus tiradas de Engaño. Además, siempre que un adversario intente tantearte en una intriga, podrás añadir tu rango de Ingenio a tu valor pasivo de Engaño.',
                'type' => 'Social'
            ],
            [
                'name' => 'Danzarín del Agua I',
                'description' => 'Nada escapa a tus ojos. Puedes añadir tu rango de Combate cuerpo a cuerpo a los resultados de tus tiradas de Percepción y a tu valor pasivo en dicha habilidad.'
            ],
            [
                'name' => 'Danzarín del Agua II',
                'description' => 'Tienes la velocidad de un ciervo y la rapidez de una serpiente. Puedes añadir tu rango de Combate cuerpo a cuerpo a los resultados de tus tiradas de Agilidad.'
            ],
            // 21-25
            [
                'name' => 'Danzarín del Agua III',
                'description' => 'Eres grácil y escurridizo en combate. Cuando luches con un arma de esgrima, podrás añadir a tu Defensa en combate un número igual a la cantidad de dados de bonificación que tengas en la especialidad Esgrima. Perderás este beneficio mientras lleves puesta una armadura de Impedimento 1 o superior.'
            ],
            [
                'name' => 'Defensa Acrobática',
                'description' => 'Eres extraordinariamente ágil en combate; das tantos saltos y volteretas que resulta casi imposible alcanzarte. Puedes emplear una acción menor para añadir a tu Defensa en combate un número igual al doble de tus dados de bonificación por Acrobacia. No puedes utilizar este beneficio si vistes una armadura con Impedimento 1 o superior. Esta bonificación a tu Defensa en combate dura hasta el principio de tu próximo turno.'
            ],
            [
                'name' => 'Descomunal',
                'description' => 'Eres inusualmente grande. Puedes empuñar armas de dos manos en una sola, y también ignoras la cualidad Aparatosa de estas armas (si la tienen).',
                'type' => 'Heredada'
            ],
            [
                'name' => 'Diplomacia Sutil',
                'description' => 'Tu exhaustiva experiencia como negociar te proporciona cierta ventaja cuando dispones de tiempo para estudiar a tu adversario. Siempre que reflexiones durante una intriga, los dados de bonificación obtenidos podrán exceder los límites habituales. Además, conservarás estos dados hasta el finalice la intriga.',
                'type' => 'Social'
            ],
            [
                'name' => 'Disparo Doble',
                'description' => 'Puedes disparar dos flechas a la vez. Puedes emplear una acción mayor para efectuar dos ataques simultáneos con un arma de proyectiles. Haz dos tiradas usando tu Puntería completa, pero aplica una penalización de -1D a cada una de ellas. Puedes disparar ambos proyectiles al mismo objetivo o repartirlos entre dos objetivos adyacentes.'
            ],
            // 26-30
            [
                'name' => 'Disparo Mortífero',
                'description' => 'Los proyectiles de tus armas alcanzan las zonas más vulnerables del objetivo. Todos los arcos y ballestas que dispares adquieren las cualidades Letal y Perforante 1 (o incrementan en 1 el valor de ésta última si ya la tenían).'
            ],
            [
                'name' => 'Disparo Triple',
                'description' => 'Puedes emular a Anguy el Arquero y disparar tres flechas a la vez. Puedes emplear una acción mayor para efectuar tres ataques simultáneos con un arma de proyectiles. Haz tres tiradas usando tu Puntería completa, pero aplica una penalización de -2D a cada una de ellas. Puedes disparar todos los proyectiles al mismo objetivo o repartirlos entre dos o tres objetivos adyacentes.'
            ],
            [
                'name' => 'Dominio de Armas Contundentes I',
                'description' => 'Los escudos no sirven de nada contra tus ataques. Si empuñas un arma contundente en combate, adquiere la cualidad Aplastante 1 en tus manos (si ya tenía, se incrementa en +1).'
            ],
            [
                'name' => 'Dominio de Armas Contundentes II',
                'description' => 'Tus mazazos hacen que tus enemigos retrocedan tambaleándose. Si empuñas un arma contundente, puedes sacrificar todos tus dados de bonificación antes de hacer una tirada de Combate C/C para dejar sin sentido a un enemigo. Si logras golpear a tu adversario, éste se tambaleará hasta el principio de tu próximo turno. Un adversario tambaleante sólo puede realizar acciones menores y sufre una penalización de -1 al resultado de todas sus tiradas por cada grado de éxito obtenido en tu tirada de ataque además del primero (asi, con dos grados de éxito se impone un -1, con tres grados la penalización sería de -2, etc). Antes de atacar con un arma contundente, debes elegir qué nivel de la cualidad Dominio de armas contundentes vas a aplicar al golpe (I, II, III o ninguno).'
            ],
            [
                'name' => 'Dominio de Armas Contundentes III',
                'description' => 'Sabes asestar golpes devastadores que astillan huesos y parten cráneos. Si empuñas un arma contundente, puedes sacrificar todos tus dados de bonificación antes de hacer una tirada de Combate cuerpo a cuerpo para derribar a un enemigo. Si logras golpear a tu adversario y obtienes 2 grados de éxito o más, tu enemigo es derribado, sufre una herida grave y sólo podrá realizar acciones menores hasta el principio de tu próximo turno. Las heridas graves sufridas a consecuencia de este ataque reducen el daño sufrido. Antes de atacar con un arma contundente, debes elegir qué nivel de la cualidad Dominio de armas contundentes vas a aplicar al golpe (I, II, III o ninguno).'
            ],
            // 31-35
            [
                'name' => 'Dominio de Armas de Asta I',
                'description' => 'Eres un experto en el manejo de las armas de asta. Puedes emplear una acción mayor para hacer una tirada normal de Combate C/C con un arma de asta, pero deberás restar 2 del resultado por cada adversario que esté dentro del alcance de tu arma y al que quieras intentar derribar. Compara el resultado final de la tirada con la Defensa en combate de los adversarios que esté dentro del alcance del barrido. Aquellos a quienes logres golpear son derribados.'
            ],
            [
                'name' => 'Dominio de Armas de Asta II',
                'description' => 'Puedes utilizar tu arma de asta para derribar jinetes de sus monturas. Si usas un arma de asta para derribar a un jinete de su montura, puedes convertir los dados de bonificación de tu especialidad en dados de habilidad. Si no consigues superar el resultado de la tirada de Trato animal del jinete, quedarás desarmado.'
            ],
            [
                'name' => 'Dominio de Armas de Asta III',
                'description' => 'Puedes inmovilizar a tu adversario con un hábil golpe de tu arma. Puedes tratar de inmovilizar a tu adversario con una brusca acometida de tu arma de asta. Esto se resuelve haciendo una tirada normal de Combate cuerpo a cuerpo para atacar a tu adversario, empleando una acción mayor para ello. Si tienes éxito infliges el daño normal; si además obtienes al menos 2 grados de éxito, tu adversario no podrá efectuar acciones de movimiento hasta haberse liberado. Puede intentar zafarse lealizando una tirada de conflicto de Brío (aplicando la especialidad Fuerza). Tú puedes añadir a esta tirada los dados de bonificación de tu especialidad de Armas de asta.'
            ],
            [
                'name' => 'Dominio de Armas de Hoja Corta I',
                'description' => 'Sabes cómo colar tu hoja por entre los resquicios de las armaduras más pesadas. Si empuñas un arma de hoja corta en combate, adquiere la cualidad Perforante 1 en tus manos (si ya la tenía, se incrementa en +1).'
            ],
            [
                'name' => 'Dominio de Armas de Hoja Corta II',
                'description' => 'Desenvainas con la velocidad del rayo. Puedes desenvainar un arma de hoja corta con una acción gratuita. Además, si empuñas un arma de hoja corta en combate, puedes añadir la cantidad de dados de bonificación de tu especialidad Armas de hoja corta al resultado de tu tirada de Combate cuerpo a cuerpo.'
            ],
            // 36-40
            [
                'name' => 'Dominio de Armas de Hoja Corta III',
                'description' => 'Las armas de hoja corta son mortales en tus manos. Si empuñas un arma de hoja corta en combate, puedes añadir la cantidad de dados de bonificación de tu especialidad Armas de hoja corta al daño infligido. Este daño adicional se suma después de aplicar los efectos de los grados de éxito.'
            ],
            [
                'name' => 'Dominio de Armas de Hoja Larga I',
                'description' => 'El peso de tu hoja hace que tus ataques sean más dificiles de bloquear. Si empuñas un arma de hoja larga, puedes sacrificar todos tus dados de bonificación antes de hacer una tirada de Combate C/C para obtener un grado de éxito adicional si logras golpear a tu adversario. También recibes un +1 a los resultados de tus tiradas de Combate C/C si utilizas un arma de hoja larga para atacar a un adversario que no tenga escudo.'
            ],
            [
                'name' => 'Dominio de Armas de Hoja Larga II',
                'description' => 'La ferocidad de tus ataques hace retroceder a tus enemigos. Si empuñas un arma de hoja larga, puedes sacrificar dados de bonificación para hostigar a tu adversario. Por cada 2 dados de bonificación que sacrifiques, tu adversario y tú os desplazaréis 1 metro en cualquier dirección si logras golpearle. Puedes hostigar a tu adversario para empujarlo hacia elementos del terreno como charcas, ríos o incluso bordes de precipicios. Si al empujarlo de este modo haces que pierda el equilibrio o se encuentre en una situación peligrosa, tu adversario podrá anular este movimiento superando una tirada MODERADA (9) de Agilidad (aplicando los dados de bonificación de la especialidad Esquivar). Antes de atacar con un arma de hoja larga, debes elegir qué nivel de la cualidad Dominio de armas de hoja larga vas a aplicar al golpe (l, II, III o ninguno),'
            ],
            [
                'name' => 'Dominio de Armas de Hoja Larga III',
                'description' => 'Tus salvajes golpes hacen pedazos a tus enemigos. Si empuñas un arma de hoja larga, puedes sacrificar todos tus dados de bonificación para asestar un tajo devastador. Si logras golpear a tu adversario y consigues al menos 3 grados de éxito infligirás el daño normal, pero tu adversario también sufrirá una herida grave (que no reducirá el daño sufrido) y adquirirá la desventaja Mutilado (ver página 90), El objetivo puede evitar esta desventaja si sacrifica un punto de Destino antes de atacar con un arma de hoja larga, debes elegir qué nivel de la cualidad Dominio de armas de hoja larga vas a aplicar al golpe (I, II, III o ninguno).'
            ],
            [
                'name' => 'Dominio de Hachas I',
                'description' => 'Asestas unos hachazos temibles. Antes de realizar una tirada de Combate cuerpo a cuerpo para atacar a un enemigo con un hacha, puedes sacrificar cualquier cantidad de dados de bonificación para abrirle un tajo terrible. Si logras golpear a tu enemigo, éste sufrirá daños adicionales al comienzo de su próximo turno; la cantidad de daño sufrido es igual al número de dados de bonificación sacrificados. Este daño adicional ignora la PR.'
            ],
            // 41-45
            [
                'name' => 'Dominio de Hachas II',
                'description' => 'Tus salvajes hachazos pueden lisiar a tus adversarios. Antes de realizar una tirada de Combate Cuerpo a Cuerpo para atacar a un enemigo con un hacha, puedes sacrificar todos tus dados de bonificación para infligirle daños adicionales. Si logras golpear a tu enemigo y obtienes al menos 2 grados de éxito, recibirá una herida grave (además del daño normal infligido por el ataque). Esta herida grave no reduce el daño sufrido. Antes de atacar con un hacha, debes elegir qué nivel de la cualidad Dominio de hachas vas a aplicar al golpe (I, II, III o ninguno).'
            ],
            [
                'name' => 'Dominio de Hachas III',
                'description' => 'Cada tajo de tu hacha puede cercenar miembros y hendir cabezas. Antes de realizar una tirada de Combate cuerpo a cuerpo para atacar a un enemigo con un hacha, puedes sacrificar todos tus dados de bonificación para causar una herida incapacitante. Si logras golpear a tu enemigo, éste sufre una herida grave y deberá realizar una tirada de Constitución y superar con ella el resultado de tu tirada de Combate cuerpo a cuerpo, de lo contrario adquirirá la desventaja Mutilado de forma permanente. La herida grave adicional no reduce el daño sufrido. El adversario puede sacrificar un punto de Destino para no recibir esta desventaja. Antes de atacar con un hacha, debes elegir qué nivel de la cualidad Dominio de hachas vas a aplicar al golpe (l, II, III o ninguno).'
            ],
            [
                'name' => 'Dominio de Lanzas I',
                'description' => 'El asta de una lanza puede ser tan peligrosa como su punta. Puedes emplear una acción mayor para efectuar una tirada de Combate cuerpo a cuerpo utilizando una lanza; si la consigues, infliges el daño normal. Si fallas, puedes realizar un segundo ataque de inmediato contra cualquier otro enemigo que esté dentro de tu alcance; si este segundo ataque tiene éxito, inflige un daño igual a tu Brío -1,'
            ],
            [
                'name' => 'Dominio de Lanzas II',
                'description' => 'Puedes derribar a tus enemigos con un hábil golpe de tu lanza. En tus manos, una lanza puede golpear a adversarios situados a 1 metro más allá del alcance normal sin penalización al impacto. Además, si empuñas una lanza en combate, recibes +1D a las tiradas que realices para derribar a tus adversarios.'
            ],
            [
                'name' => 'Dominio de Lanzas III',
                'description' => 'Eres capaz de ensartar a tus enemigos con tu lanza mediante una combinación de destreza y fuerza bruta. Las lanzas adquieren la cualidad Perforante 2 en tus manos (si ya tenían esta cualidad, la incrementan en un +2).'
            ],
            // 46-50
            [
                'name' => 'Dotado',
                'description' => 'Posees un talento natural para una única habilidad; puedes tener una voz privilegiada o ser un consumado espadachín, o tal vez poseas algún tipo de magnetismo animal. Elige una habilidad cualquiera. Siempre que debas realizar una tirada de la habilidad escogida, añade +1 al resultado. Puedes adquirir esta cualidad varias veces y asignarla a una habilidad distinta cada vez.',
                'repeatable' => true,
                'type' => 'Habilidad'
            ],
            [
                'name' => 'Duro de Pelar',
                'description' => 'Eres increíblemente resistente y toleras una gran cantidad de daño. Puedes añadir a tu Salud un número igual a la cantidad de dados de bonificación que tengas en la especialidad Resistencia.'
            ],
            [
                'name' => 'Elocuente',
                'description' => 'Tienes un don extraordinario para la oratoria y la diplomacia. Si participas en una intriga utilizando un Idioma que conozcas con rango 4 o superior, actuarás en primer lugar automáticamente.',
                'type' => 'Social'
            ],
            [
                'name' => 'Empatía Animal',
                'description' => 'Tienes una gran facilidad para manejar animales y relacionarte con ellos. Tu afinidad con los animales te otorga +1D a todas las tiradas de Trato animal que realices utilizando las especialidades Cautivar o Adiestrar sobre un animal.',
                'type' => 'Habilidad'
            ],
            [
                'name' => 'Erudición',
                'description' => 'Eres todo un experto en una materia específica. Elige uno de los siguientes campos de experiencia: Alquimia, Arquitectura, Astronomía, Bajos fondos, Geografia, Heráldica, Historia y leyendas, Magia, Naturaleza o Religión. Cuando debas realizar una tirada de Conocimiento relacionada con la materia (o materias) escogida, convierte en dados de habilidad los dados de bonificación que tengas en la especialidad utilizada. Puedes adquirir esta cualidad varias veces y asignarla a un campo de experiencia distinto cada vez',
                'repeatable' => true,
                'type' => 'Habilidad'
            ],
            // 51-55
            [
                'name' => 'Esgrima Braavosi I',
                'description' => 'Puedes desviar los ataques de tus enemigos con facilidad. Las armas de esgrima adquieren la cualidad Defensiva +1 en tus manos (o bien incrementan su bonificación Defensiva en un +1). Siempre conservas un +1 de esta bonificación, aun cuando efectúes un ataque con el arma en cuestión.'
            ],
            [
                'name' => 'Esgrima Braavosi II',
                'description' => 'Puedes lanzar una serie de fulminantes estocadas a tu alrededor. Empleando una acción mayor, puedes sacrificar todos tus dados de bonificación para efectuar un único ataque con un arma de esgrima contra un adversario adyacente a ti. Si este ataque tiene éxito, inflige el daño normal; sin embargo, por cada grado de éxito que hayas obtenido en la tirada podrás incrementar tu Defensa en combate en 1 hasta que hagas la próxima tirada de Combate cuerpo a cuerpo.'
            ],
            [
                'name' => 'Esgrima Braavosi III',
                'description' => 'Aprovechas al máximo las oportunidades cuando se te presentan. Puedes realizar un rápido contraataque si tu adversario descuida la guardia. Siempre que un adversario armado con un arma de combate cuerpo a cuerpo te ataque y falle, podrás efectuar un único ataque contra él como acción gratuita. Para poder valerte de este beneficio debes utilizar un arma de esgrima.'
            ],
            [
                'name' => 'Experto en Armas',
                'description' => 'Puedes coger cualquier arma y empuñarla con la destreza de un experto. Puedes esgrimir cualquier arma sin penalización, independientemente de su requisito de entrenamiento.'
            ],
            [
                'name' => 'Famoso',
                'description' => 'Eres conocido a lo largo y ancho de los Siete Reinos. Cuando tengas que hacer tiradas de Persuasión para Cautivar o Seducir a alguien cn una intriga, puedes coger tantos dados de bonificación como tu Estatus de la especialidad de Cautivar o Seducir y usarlos como dados de habilidad, Por ejemplo, si tu Estatus es de 2 y pretendes seducir a alguien, puedes usar un máximo de 2B de tu especialidad Seducir (si los tienes) y añadirlos a tu tirada de Persuasión como dados de habilidad. Sin embargo, al ser tan conocido te resulta dificil ocultar tu identidad; siempre que utilices la Discreción, deberás restar tu Estatus del resultado de tus tiradas. Debes ponerte de acuerdo con el Narrador para determinar qué hiciste para llegar a ser famoso. Si eres de edad joven o inferior sólo podrás adquirir esta cualidad después de llevar a cabo alguna hazaña durante el juego que el Narrador considere especialmente digna de fama.',
                'type' => 'Predestinada'
            ],
            // 56-60
            [
                'name' => 'Fascinante',
                'description' => 'Tu personalidad es tan cautivadora que casi siempre consigues lo que te propones. Elige una especialidad de Persuasión a la que ya hubieras asignado el beneficio Carismático. Cuando utilices dicha especialidad en una intriga, su Influencia se incrementa en 1. Puedes adquirir esta cualidad varias veces y asignarla a una especialidad nueva de Persuasión cada vez (siempre que antes le hayas asignado a dicha especialidad la cualidad Carismático).' ,
                'type' => 'Social'
            ],
            [
                'name' => 'Favorecido por el Pueblo Llano',
                'description' => 'Encajas a la perfección en las clases más bajas. Recibes +1B a todas las tiradas de Persuasión que realices cuando trates con personajes de Estatus 3 o inferior.',
                'type' => 'Social'
            ],
            [
                'name' => 'Favorecido por la Nobleza',
                'description' => 'La alta sociedad te considera uno de los suyos. Recibes +1B a todas las tiradas de Persuasión que realices cuando trates con personajes de Estatus 4 o superior.',
                'type' => 'Social'
            ],
            [
                'name' => 'Feudo',
                'description' => 'Te has granjeado el favor de tu señor, y a cambio te han sido cedidas más tierras y títulos. El individuo al que has jurado lealtad ha reconocido tu servicio leal y continuado, y ha tenido a bien recompensarte con una hacienda en la que construir un hogar y gobernar como creas conveniente. Como caballero feudatario, estás en deuda con tu señor; deberás responder cuando llame a las armas y prestarle tu ayuda cuando la necesite. Puedes gastar Experiencia para incrementar tu Estatus. Para más información sobre cómo fundar una casa y gestionar tus tierras, consulta el CAPÍTUL0 6: CASA Y HEREDADES.' ,
                'type' => 'Predestinada'
            ],
            [
                'name' => 'Frenesí de Combate',
                'description' => 'Puedes sumirte en un estado de frenesí salvaje y transformarte en una brutal máquina de matar. Corres el riesgo de perder los estribos en combate. Siempre que sufras una herida leve o grave, podrás realizar una tirada de Combate cuerpo a cuerpo como acción gratuita contra un adversario adyacente a ti. Esta tirada no se beneficia de ningún dado de bonificación. Además, puedes seguir combatiendo aun cuando deberías caer derrotado. Si al final de tu turno has sufrido bastante heridas como para ser vencido, puedes intentar una tirada COMPLICADA (12) de Voluntad para continuar luchando. Los dados de penalización impuestos por las heridas sufridas no se aplican a esta tirada. Puedes hacer tantas tiradas de este tipo como tu rango de Constitución; una vez transcurrido este límite, eres derrotado de la forma habitual.' 
            ],
            // 61-65
            [
                'name' => 'Furia',
                'description' => 'Das rienda suelta a toda tu furia en combate y desatas tu cólera sobre tus enemigos. Puedes emplear una acción mayor para asestar un golpe terrible con un arma de cuerpo a cuerpo a un único adversario. Se resuelve como un ataque normal con -2D, pero si consigues golpear a tu adversario, el daño se incrementa en un +4 antes de aplicar los beneficios de cualesquier grados de éxito obtenidos.'             
            ],
            [
                'name' => 'Furtivo',
                'description' => 'Resulta muy difícil verte cuando decides pasar desapercibido. Cuando hagas una tirada de Discreción, podrás volver a tirar todos los dados en los que hayas sacado un 1. Además, también puedes añadir tu rango de Agilidad al resultado de las tiradas de Discreción que realices para moverte sigilosamente.',
                'type' => 'Habilidad'
            ],
            [
                'name' => 'Gran Cazador',
                'description' => 'Posees grandes dotes de cazador. Cuando luches contra un animal,podrás añadir tu rango de Supervivencia al resultado de tus tiradas de Combate cuerpo a cuerpo o de Puntería. Además de este beneficio en combate, cuando debas hacer una tirada de Supervivencia para cazar o rastrear animales, podrás usar uno de los dados de bonificación de tu especialidad Cazar como dado de habilidad adicional.',
                'type' => 'Habilidad'
            ],
            [
                'name' => 'Granuja',
                'description' => 'Te sientes perfectamente cómodo rodeado de la escoria de Poniente. Cuando tengas que hacer una tirada de Picaresca, podrás volver a tirar tantos dados en los que hayas sacado un 1 como tu rango en la especialidad más relevante. Siempre podrás volver a tirar 1 dado como mínimo.',
                'type' => 'Habilidad'
            ],
            [
                'name' => 'Heredero',
                'description' => 'Eres el beneficiario de toda la fortuna de tu casa nobiliaria. Eres el próximo en la línea de sucesión de tu casa nobiliaria. Añade un +1 al resultado de todas tus tiradas de Estatus. Si le ocurre algo, cambia esta cualidad por la de Líder de la Casa. Para poder adquirir esta cualidad debes de contar con el permiso del Narrador y de los demás jugadores. Este beneficio sólo puede tenerlo uno de los miembros de la casa.',
                'type' => 'Predestinada'
            ],
            // 66-70
            [
                'name' => 'Herencia',
                'description' => 'Has heredado un arma de gran calidad. Has heredado un arma de acero valyrio que lleva incontables generaciones en tu familia. Las armas de acero valyrio suelen ser espadas o dagas, pero si el Narrador te da permiso puedes aplicar este beneficio a otro tipo de arma. Para más detalles sobre las armas de acero valyrio, consulta la página 124.',
                'type' => 'Predestinada'
            ],
            [
                'name' => 'Hermano de la Guardia de la Noche',
                'description' => 'Has renunciado a todo privilegio de parentesco y heredades para servir como miembro de la Guardia de la Noche. Eres un miembro juramentado de la Guardia de la Noche, y como tal no te ves afectado por las vicisitudes de tu casa nobiliaria. Sufres una penalización de -2D a todas tus tiradas de Estatus y pierdes los beneficios Heredero y Líder de la casa (pero recuperas los puntos de Destino invertidos en ellos), Cuando ganes Riqueza o Gloria no podrás invertirlas en tu casa, pero sí en tu división (Castillo Negro, Torre Sombría o Guardiaoriente del Mar). Dependiendo de las habilidades que poseas, serás clasificado como explorador, constructor o mayordomo (a discreción del Narrador). En función de tu orden recibes un beneficio adicional: Explorador (Puedes añadir tu rango de Ingenio como bonificación al resultado de todas tus tiradas de Supervivencia), Constructor (Adquieres un Oficio sin necesidad de gastar un punto de Destino, pero debe resultar beneficioso para el Muro) o Mayordomo (Puedes añadir el número de dados de bonificaciónque tengas asignados en Administración al resultado de todas tus tiradas de Persuasión). Debes contar con el permiso del Narrador para poder escoger esta cualidad. Si la adquieres perderás todas las cualidades predestinadas, pero recuperarás los puntos de Destino que hubieras invertido en ellas.',
                'type' => 'Predestinada'
            ],
            [
                'name' => 'Hombre/Mujer de Mundo',
                'description' => 'Estás familiarizado con los pueblos que viven más allá de los Siete Reinos. Recibes +2B a todas las tiradas de Persuasión que debas realizar cuando trates con un personaje que no proceda de los Siete Reinos.',
                'type' => 'Social'
            ],
            [
                'name' => 'Inspirador',
                'description' => 'Tu extraordinario carisma motiva a tus hombres a luchar por ti, aunque para ello deban seguirte a los mismísimos siete infiernos. Si participas en una batalla, ganas 1 orden adicional cada asalto. Además, cuando tengas que hacer una tirada de Guerra para impartir una orden, podrás sacrificar una de tus órdenes disponibles para repetir la tirada y quedarte con el mejor resultado.'
            ],
            [
                'name' => 'Líder de la Casa',
                'description' => 'Eres el líder de tu casa Nobiliaria. Diriges tu casa y eres el responsable del mantenimiento de tus tierras, la seguridad de tu gente y la gestión de vuestras fortunas. Añade un +2 al resultado de todas tus tiradas de Estatus. Para poder adquirir esta cualidad debes contar con el permiso del Narrador y de los demás jugadores. Sólo un miembro de vuestro grupo puede tener esta cualidad.',
                'type' => 'Predestinado'
            ],
            // 71-75
            [
                'name' => 'Liderazgo excepcional',
                'description' => 'Los hombres que tienes a tu servicio darían su vida por ti. Una vez por asalto en una escaramuza o batalla, puedes reorganizar automáticamente a una unidad desorganizada o reagrupar a una unidad desbandada. El uso de esta cualidad no se considera una orden.'
            ],
            [
                'name' => 'Lluvia de acero',
                'description' => 'Puedes arrojar cuchillos y hachas con una velocidad y precisión sorprendentes. Las armas arrojadizas adquieren la cualidad Rápida en tus manos.'
            ],
            [
                'name' => 'Maestre',
                'description' => 'Has forjado tu cadena de conocimiento y la llevas colgada al cuello con orgullo. Eres un maestre de la Ciudadela. Las vicisitudes de la casa en la que naciste ya no te afectan, pero sí las de la casa a la que estés afiliado. Además, puedes añadir tu rango de Ingenio al resultado de todas tus tiradas de Conocimiento y Voluntad. Para poder adquirir esta cualidad debes contar con el permiso del Narrador. La adquisición de esta cualidad provoca la pérdida de todas las cualidades predestinadas, aunque recuperarás los Puntos de Destino invertidos en las cualidades perdidas.',
                'type' => 'Predestinada'
            ],
            [
                'name' => 'Maestría con Arma',
                'description' => 'Eres muy hábil con un arma concreta. Al adquirir esta cualidad, debes elegir una única arma. Cuando empuñas el arma elegida en combate, su daño básico se incrementa en +1. Puedes elegir esta cualidad varias veces y asignarla a un arma distinta cada vez.',
                'repeatable' => true
            ],
            [
                'name' => 'Maestría con Arma Mejorada',
                'description' => 'Tienes una gran soltura con un arma específica. Al adquirir este beneficio, debes elegir una única arma a la que ya hayas asignado la Maestría con arma. El daño básico de dicha arma se incrementa en un +1 en tus manos. Puedes elegir esta cualidad varias veces y asignarla a un arma distinta cada vez.',
                'repeatable' => true
            ],
            // 76-80
            [
                'name' => 'Maestría con Armaduras',
                'description' => 'Estás acostumbrado al peso y el volumen de las armaduras y sabes cómo vestirlas para maximizar sus beneficios. Toda armadura que vistas se adapta a tu cuerpo como si fuera una segunda piel. La PR de tu armadura se incrementa en un +1, y su Impedimento (si lo tiene) se reduce en 1 de cara al cálculo de tu Movimiento.'
            ],
            [
                'name' => 'Maestría con Armaduras Mejorada',
                'description' => 'Te sientes muy cómodo vistiendo armaduras y sabes cómo sacar el máximo partido de los beneficios que proporcionan. La PR de cualquier armadura que vistas se incrementa en 1, y su penalización a la Defensa en combate se reduce en 1. Este beneficio se suma a otros similares, como los proporcionados por la cualidad Maestría con armaduras.'
            ],
            [
                'name' => 'Maestría con Escudos',
                'description' => 'Eres muy hábil manejando escudos y puedes bloquear ataques con facilidad cuando embrazas uno. La bonificación Defensiva de todos los escudos que utilizas se incrementa en 1.'
            ],
            [
                'name' => 'Maestro Consumado',
                'description' => 'Puedes impartir tu sabiduría a tus estudiantes. Puedes dedicar 1 hora como mínimo para transmitir tus conocimientos a otro personaje. Una tirada de Persuasión con éxito te permite otorgarle dados de bonificación para las tiradas de Conocimiento que realice y que estén relacionadas con la materia que le has enseñado. Así, si superas una tirada de Persuasión para enseñar arquitectura a otro personaje, éste recibirá dados de bonificación para cualquier tirada de Conocimiento relacionada con la arquitectura. No puedes enseñar lo que sabes a personajes que posean más dados de bonificación que tú en la materia. La dificultad de la tirada depende del valor de la bonificación que desees otorgar. Si fallas la tirada, la materia habrá resultado demasiado complicada para el estudiante. Rutina (6 -> 1B); Moderada (9 -> 2B); Complicada (12 -> 3B); Difícil (15 -> 4B); Muy Difícil (18 -> 5B); Heroica (21+ -> 6B). Cuando por fin logres instruir al estudiante, éste podrá realizar en cualquier momento una tirada MODERADA (9) de Ingenio (con la especialidad Memoria) para tratar de recordar tus enseñanzas. Si consigue esta tirada recibirá +1B de los que le has conferido por cada grado de éxito obtenido en la misma. Cuando el estudiante agote la reserva de dados de bonificación proporcionada por tu instrucción, ya no podrá seguir aprovechando tus enseñanzas sobre esa materia específica hasta recibir una nueva lección.',
                'type' => 'Habilidad'
            ],
            [
                'name' => 'Magnetismo',
                'description' => 'Tu extraordinario carisma te granjea numerosas alianzas y amistades. Cuando derrotes a un enemigo empleando Cautivar, su actitud mejorará tantas categorías como el número de dados de bonificación que hayas invertido en esta especialidad (mínimo 2 categorías).',
                'type' => 'Social'
            ],
            // 81-85
            [
                'name' => 'Manos Ágiles',
                'description' => 'Tus manos rápidas te permiten recargar tu arma con celeridad. Si vas armado con un arma que posea la cualidad Recarga, puedes reducir la duración de la recarga de una acción mayor a una acción menor, o bien de una acción menor a una acción gratuita.'
            ],
            [
                'name' => 'Memoria Prodigiosa',
                'description' => 'Posees una capacidad sorprendente para recordar detalles sobre algo que hayas visto o leído. Cuando tengas que hacer una tirada de Ingenio utilizando la especialidad de Memoria, los dados de bonificación que tengas en dicha especialidad se convierten en dados de habilidad para la tirada.',
                'type' => 'Habilidad'
            ],
            [
                'name' => 'Miembro de la Guardia Real',
                'description' => 'Has sido elegido para proteger al Rey como uno de los siete miembros de su Guardia Real. Este gran honor te otorga los siguientes beneficios: Tu Estatus aumenta a 5; Tu Compostura se incrementa en +2; Si combates para proteger al Rey, a la Reina o a cualquier otro miembro de la familia real, puedes añadir un +2 al resultado de todas tus tiradas de Combate C/C; Posees una celda en el interior de la Torre Blanca de Desembarco del Rey, y te han equipado con una espada larga forjada en castillo, una armadura de placas forjada en castillo y una cota de malla; Siempre que necesites equipo general, la Corona te lo suministrará; Has renunciado a todos tus vínculos familiares y ya no podrás disfrutar de los beneficios otorgados por las vicisitudes o propiedades de tu casa nobiliaria, aunque cuando ganes Gloria podrás invertir la mitad en tu antigua casa (redondeando hacia abajo, minimo 1). Para poder adquirir esta cualidad debes contar con el permiso del Narrador. La adquisición de esta cualidad provoca la pérdida de todas las cualidades predestinadas, aunque recuperarás los puntos de Destino invertidos en las cualidades perdidas.',
                'type' => 'Predestinada'
            ],
            [
                'name' => 'Negociador Hábil',
                'description' => 'Puedes ocultar tus emociones de tal forma que tus adversarios lo tienen difícil para detectar tus verdaderas intenciones. Mientras tu adversario no sepa cuál es tu actitud, no sufrirás ninguna penalización a las tiradas de Persuasión a consecuencia de tu actitud inicial.',
                'type' => 'Social'
            ],
            [
                'name' => 'Obstinado',
                'description' => 'Eres difícil de persuadir. Puedes sumar a tu Compostura un número igual a la cantidad de dados de bonificación que tengas en la especialidad Dedicación.',
                'type' => 'Social'
            ],
            // 86-90
            [
                'name' => 'Oficio',
                'description' => 'Eres un artesano capacitado. Has aprendido un oficio. Elige un oficio cualquiera. Deberás invertir al menos 2 venados de plata y dedicarle diez horas diarias durante cinco días. Una vez transcurrido este periodo de tiempo, haz una tirada MODERADA (9) de Ingenio. Si la superas ganarás seis veces tu inversión inicial. Cada grado de éxito adicional incrementa el multiplicador en una unidad; así, con una inversión de 5 venados de plata y dos grados de éxito en la tirada ganarías un total de 35 venados de plata (es decir, percibirás un beneficio de 30 venados). Si obtienes un fallo crítico perderás tu inversión inicial y sufrirás una penalización de -1D a tu próxima tirada de Oficio. Por último, puedes crear objetos relacionados con tu oficio, lo que te permitirá adquirirlos por la mitad del precio de venta.',
                'type' => 'Habilidad'
            ],
            [
                'name' => 'Pericia',
                'description' => 'Posees un talento asombroso en una habilidad específica. Elige una especialidad en la que tengas dados de bonificación. Siempre que debas realizar una tirada de habilidad relacionada con la especialidad escogida, recibes +1D. Puedes adquirir esta cualidad varias veces y asignarla a una especialidad distinta cada vez.',
                'repeatable' => true,
                'type' => 'Habilidad'
            ],
            [
                'name' => 'Pío',
                'description' => 'Sientes una profunda convicción religiosa y una devoción intachable hacia tu deidad o deidades. Elige un culto relogioso, una deidad o un principio (moral o religioso); algunos ejemplos son las viejas costumbres, los Siete, el Señor de la Luz y demás. Te has consagrado en cuerpo y alma a esta creencia. Una vez al día, antes de realizar una tirada, puedes apelar a tu fe para que te asista en tus actos y te conceda +1D.',
                'type' => 'Predestinada'
            ],
            [
                'name' => 'Políglota',
                'description' => 'Tienes una gran facilidad para los idiomas. Sabes leer cualquier idioma que conozcas con al menos 1 rango. Además, cuando te expongas a un idioma con el que no estés familiarizado, podrás intentar una tirada COMPLICADA(12) de Ingenio para intentar captar lo suficiente como para desenvolverte con él. Si consigues esta tirada, ganas 1 rango en el Idioma mientras dure el encuentro. Por cada 2 grados de éxito que hayas obtenido además del primero recibirás 1 rango adicional.',
                'type' => 'Habilidad'
            ],
            [
                'name' => 'Puños de Acero I',
                'description' => 'Eres tremendamente rápido con los puños. Los ataques que efectúas con los puños se consideran Rápidos e inflingen un daño igual a tu rango en Brío menos 2.'
            ],
            // 91-95
            [
                'name' => 'Puños de Acero II',
                'description' => 'Eres capaz de asestar unos puñetazos demoledores. Los ataques que efectúas con los puños se consideran Poderosos. Además, puedes añadir tu rango de Brío al resultado de tu tirada de Combate C/C cuando atacas usando los puños.'
            ],
            [
                'name' => 'Puños de Acero III',
                'description' => 'Tus ataques sin armas son tan poderosos que tus enemigos se desmoronan al encajarlos. Si consigues una tirada de Combate cuerpo a cuerpo para golpear a un adversario con tus puños, puedes optar por sacrificar 3 grados de éxito a cambio de aturdirlo. Para ello debes haber obtenido al menos 3 grados de éxito en la tirada. Compara el resultado de la misma con el valor pasivo de Constitución de tu adversario; si es igual o superior a él, tu adversario queda aturdido y sólo podrá realizar una acción especial de recuperarse en su próximo turno. Para recuperarse del aturdimiento se necesita una acción mayor. El adversario debe superar una tirada MODERADA (9) de Constitución, de lo contrario deberá volver a intentarlo en su siguiente turno. Cada tirada fallida del adversario le proporciona un +1B acumulativo para la próxima. Cuando el adversario consiga su tirada de Constitución, recibirá una acción menor y podrá usarla de inmediato. Un adversario aturdido por efecto de este beneficio no podrá volver a resultar aturdido mientras esté sufriendo dicho efecto.'
            ],
            [
                'name' => 'Pupilo',
                'description' => 'Has sido criado por uno de los enemigos de tu padre para garantizar la paz entre sus casas. Elige otra casa nobiliaria; ésta es tu casa natal, y te cedió como condición de su rendición. Mientras sigas siendo un pupilo serás inmune a las vicisitudes, consulta el CAPÍTULO 6:CASA Y HEREDADES. El Narrador creará tu casa natal y determinará el estado actual de las relaciones entre ella y tu casa adoptiva.',
                'type' => 'Predestinada'
            ],
            [
                'name' => 'Rápido',
                'description' => 'Tus pies son inusualmente ligeros. A la hora de calcular tu tasa de movimiento, se considera que tu Movimiento inicial es de 5 metros. Tu capacidad de Movimiento se multiplica por cinco cuando corres.'
            ],
            [
                'name' => 'Reflejos Rápidos',
                'description' => 'Posees unos reflejos asombrosos. Cuando hagas una tirada de Agilidad, podrás volver a tirar tantos dados en los que hayas sacado un 1 como el número de dados de bonificación que tengas en la especialidad más relevante para la tirada (por ejemplo, Equilibrio si estás caminando por la cuerda floja). Siempre podrás volver a tirar un mínimo de 1 dado.',
                'type' => 'Habilidad'
            ],
            // 96-100
            [
                'name' => 'Respetable',
                'description' => 'Tus logros son sobradamente conocidos y tu reputación inspira respeto en los demás. Tus adversarios en intrigas sufren -1D a las tiradas de Persuasión que realicen para incitarte, intimidarte y provocarte.',
                'type' => 'Social'
            ],
            [
                'name' => 'Rico',
                'description' => 'Posees una verdadera fortuna debida a una herencia o a tu maestría en los negocios. Al principio de cada mes puedes hacer una tirada FÁCIL (3) de Ingenio o de Estatus para reponer tus arcas. Si la consigues, ganarás 10 dragones de oro por cada grado de éxito obtenido.',
                'type' => 'Predestinada'
            ],
            [
                'name' => 'Robusto',
                'description' => 'Tienes una salud de hierro y te recuperas rápidamente de tus heridas. Cuando tengas que hacer una tirada de Constitución para recuperarte de heridas leves o graves, puedes ignorar una penalización de -1 o bien un -1D a tu tirada.',
                'type' => 'Habilidad'
            ],
            [
                'name' => 'Sanador Milagroso',
                'description' => 'Conoces una amplia diversidad de técnicas y remedios para paliar el sufrimiento de tus pacientes. Cuando hagas una tirada de Curación para diagnosticar el estado de un paciente por primera vez, recibes +2B si superas la tirada y +1B adicional por cada grado de éxito obtenido además del primero, Puedes convertir 2 dados de bonificación en dados de habilidad para la tirada de Curación con la que habrás de tratar al paciente, por último, puedes añadir tu rango de Educación a los resultados de tus tiradas de Curación.',
                'type' => 'Habilidad'
            ],
            [
                'name' => 'Sangre de Ándalo',
                'description' => 'Por tus venas corre la sangre de los ándalos, tienes el cabello rubio y la piel clara. Cuando adquieras este beneficio debes elegir una habilidad que tengas a rango 3 o superior. Siempre que hagas una tirada de esta habilidad, podrás volver a tirar uno de los dados. Deberás quedarte con el resultado de la segunda tirada, incluso aunque sea peor que el de la primera. Además, una vez al día puedes añadir un +2 al resultado de cualquier tirada.',
                'type' => 'Heredada'
            ],
            // 101-105
            [
                'name' => 'Sangre de Héroes',
                'description' => 'Posees un talento innato para una habilidad concreta que supera con creces los límites de la gente corriente. Elige una habilidad. Puedes gastar Experiencia para incrementarla más allá de rango 7.',
                'type' => 'Heredada'
            ],
            [
                'name' => 'Sangre de los Hombres del Hierro',
                'description' => 'Desciendes de los hombres del Hierro, y el agua del mar fluye por tus venas. Una vez por combate puedes añadir +1D a una única tirada de Combate C/C. Debes tomar esta decisión antes de efectuar la tirada. Además, siempre que debas hacer una tirada de Brío a bordo de un barco o en el mar, podrás volver a tirar tantos dados en los que hayas sacado un 1 como tu rango en la especialidad más relacionada con la tirada (por ejemplo, Nadar, si lo que intentas es mantenerte a flote en un temporal).',
                'type' => 'Heredada'
            ],
            [
                'name' => 'Sangre de los Primeros Hombres',
                'description' => 'Eres uno de los primeros hombres, el antiguo pueblo que colonizó Poniente durante la Era del Amanecer. Tu Salud se incrementa en un +2. Además, siempre que hagas una tirada de Constitución, añade un +2 al resultado de la misma.',
                'type' => 'Heredada'
            ],
            [
                'name' => 'Sangre de Rhoynar',
                'description' => 'Desciendes del recio pueblo guerrero de Rhoyne, que llegaron a Poniente para luchar por el favor de su legendaria reina guerrera Nymeria. Tu Defensa en combate incrementa en 2. Además, siempre que debas hacer una tirada de Táctica, podrás volver a tirar tantos dados en los que hayas sacado un 1 como tu rango en Ingenio.',
                'type' => 'Heredada'
            ],
            [
                'name' => 'Sangre de Salvaje',
                'description' => 'Eres uno de los muchos individuos que moran en las tierras que hay allende el Muro. Los personajes que tengan un Estatus elevado no pueden imponerse automáticamente sobre ti y deberán enfrentarse a ti en una intriga. Además, siempre que te veas afectado por un frío extremo podrás añadir tu rango de Brío a tu valor pasivo de Constitución.',
                'type' => 'Heredada'
            ],
            // 106-110
            [
                'name' => 'Sangre Valyria',
                'description' => 'Por tus venas corre sangre de Valyria, que te confiere una cierta ferocidad y una inquietante autoridad innata, tienes el cabello plateado y los ojos de color púrpuraque caracterizan a la mayoría de los descendientes de este antiguo feudo franco. Antes de involucrarte en una intriga, tu Estatus se considera 1 rango superior a efectos de influir en un objetivo sin llegar a participar por completo en ella. Además, recibes un +2 al resultado de las tiradas de Persuasión que realices para Intimidar. Por último, puedes sumar un +2 a tu valor pasivo de Constitución cuando te veas expuesto al fuego o los efectos de calor intenso.',
                'type' => 'Heredada'
            ],
            [
                'name' => 'Sentido del Deber',
                'description' => 'Tu lealtad es incuestionable. Tu adversario sufre -1D a todas las tiradas de Persuasión que realice para influir en ti empleando Convencer, Intimidar o Seducir.',
                'type' => 'Social'
            ],
            [
                'name' => 'Sentidos Agudizados',
                'description' => 'Tus sentidos están sumamente desarrollados. Siempre que debas hacer una tirada de Percepción para fijarte en algo, podrás volver a tirar tantos dados en los que hayas sacado un 1 como tu rango de Observación (mínimo 1 dado). Además, puedes añadir tu rango de Ingenio a tu valor pasivo de Percepción.',
                'type' => 'Habilidad'
            ],
            [
                'name' => 'Sexto Sentido',
                'description' => 'Adviertes el peligro antes de que se manifieste. Puedes volver a repetir todos los resultados de 1 de las tiradas de Agilidad realizadas para determinar el orden de iniciativa. Además, siempre que tú o la unidad a la que pertenezcas sea sorprendida en combate, tu adversario no recibirá el +1D habitual a sus tiradas de Combate C/C o de Puntería.'
            ],
            [
                'name' => 'Siniestro',
                'description' => 'Tienes aspecto de ser un individuo cruel y peligroso. Durante el primer asalto de un combate o intriga, recibes una bonificación de +2 a tu Defensa en combate y Defensa en intrigas.',
                'type' => 'Habilidad'
            ],
            // 111-115
            [
                'name' => 'Talento Aritmético',
                'description' => 'Gestionas los recursos de tu casa con la precisión de un experto. Cuando debas realizar una tirada de Vicisitud para tu casa nobiliaria, podrás añadir tu rango de Ingenio al resultado de tu tirada de Estatus. Además, la Fortuna de tu casa nobiliaria se incrementa en 1d6 puntos.',
                'type' => 'Habilidad'
            ],
            [
                'name' => 'Tasación',
                'description' => 'Tienes un talento extraordinario para estimar el valor de un objeto. Siempre que encuentres un objeto potencialmente valioso, puedes examinarlo durante un minuto para hacer una tirada MODERADA (9) de Ingenio. Si la consigues podrás determinar su valor aproximado. Cada grado de éxito adicional obtenido en esta tirada te revela un poco de información sobre el objeto, como por ejemplo quién lo ha fabricado, qué circunstancias rodearon la vida del fabricante, etc.',
                'type' => 'Habilidad'
            ],
            [
                'name' => 'Tercer Ojo',
                'description' => 'Te atormentan por las noches extraños sueños de lugares remotos y visiones de cosas que aún no han sucedido, a veces estos sueños acaban haciéndose realidad. Tus peculiares sueños pueden revelarte el futuro. Tras cada noche de sueños completa, tira un dado. Si sacas un 6, puedes sumar +1D a una única tirada. Este beneficio refleja una comprensión súbita de tus vívidos sueños.',
                'type' => 'Predestinada'
            ],
            [
                'name' => 'Tercer Ojo Abierto',
                'description' => 'Aquejado de evocadores sueños, en ocasiones sientes como si vistieras la piel de tu animal de compañía mientras duermes. Cada vez que duermas, tira 1d6. Si sacas entre 1 y 4, dormirás plácidamente durante toda la noche. Si sacas un 5, tu consciencia se introducirá en tu compañero animal y tu mente se inundará de extrañas sensaciones y experiencias. Mientras vistas su piel, podrás tratar de influir en la criatura realizando una tirada de conflicto de Voluntad. Si la ganas, asumirás el control del animal. Podrás actuar con normalidad, pero usarás las características de la bestia en lugar de las tuyas. Si es el animal quien gana la tirada de conflicto de Voluntad, conservará el control, pero tú podrás ver a través de sus ojos y sentir lo mismo que él. En cualquier caso no podrás abandonar el cuerpo del animal hasta que consigas otra tirada MODERADA (9) de Voluntad. Puedes intentar una tirada cada hora que pases dentro del animal. Si un aliado sacude enérgicamente tu cuerpo humano, podrás hacer otra tirada antes de que transcurra este periodo de una hora. Por último, cada vez que vivas una experiencia de este tipo deberás realizar una tirada MODERADA (9) de Voluntad (aplicando la especialidad Dedicación). Si la consigues no sufrirás ningtin efecto adverso, pero si la fallas recibirás una penalización de -1D a todas las tiradas de Persuasión hasta la próxima vez que duermas. Si alguna vez fallas dos tiradas de Voluntad consecutivas tras dos noches de cambio de piel, perderás 1 rango de Ingenio de forma permanente. Si sacas un 6, recibirás el +1D que te concede habitualmente el beneficio Tercer Ojo. Puedes Intentar ejercer cierta influencia en el tipo de sueño que tendrás. Si consigues una tirada COMPLICADA (12) de Voluntad antes de dormirte, no tendrás que tirar 1d6, si no que podrás elegir el resultado que prefieras. Sin embargo, si fallas la tirada de Voluntad no tirarás el dado y pasarás una noche tranquila automáticamente, sin más efecto que alguna leve pesadilla.',
                'type' => 'Predestinada'
            ],
            [
                'name' => 'Traicionero',
                'description' => 'Te vales de tu astucia y tu falsedad para aventajar a tus enemigos. Puedes añadir tu rango de Ingenio al resultado de tus tiradas de Engaño durante una intriga.',
                'type' => 'Social'
            ],
            // 116-119
            [
                'name' => 'Ungido',
                'description' => 'Has velado tus armas, has jurado tus votos y has sido ungido con los siete óleos por un sagrado septón, ya eres un auténtico caballero. Disfrutas de todos los beneficios de ser un caballero ungido. Añade un +2 al resultadode todas tus tiradas de Estatus. Puedes extraer fuerzas de tu compromiso con las virtudes caballerescas y la firmeza de tus convicciones: una vez al día, y como acción gratuita, puedes incrementar tu Defensa en combate, tu Defensa en intrigas y todos los valores pasivosde tus habilidades en un +5 hasta el principio de tu próximo turno.'
            ],
            [
                'name' => 'Uno entre la Multitud',
                'description' => 'Tienes una gran facilidad para confundirte con la multitud. Añade tu rango de Ingenio al resultado de las tiradas de Discreción que hagas para Pasar inadvertido. El uso de esta especialidad es siempre una acción gratuita para ti.',
                'type' => 'Habilidad'
            ],
            [
                'name' => 'Visión Nocturna',
                'description' => 'Posees una vista excelente y puedes ver en la oscuridad con total claridad. No sufres ninguna penalización a tus tiradas cuando estés en zonas con poca visibilidad a consecuencia de una escasa iluminación (sin embargo, la oscuridad total sigue imponiéndote las penalizaciones habituales).',
                'type' => 'Predestinada'
            ],
            [
                'name' => 'Vista Verde',
                'description' => 'Posees el legendario don de la vista verde, y a veces tus sueños se hacen realidad. Según la leyenda, los verdevidentes eran hijos del bosque dotados de increíbles poderes sobre la naturaleza, pero por encima de todo poseían la capacidad de predecir el futuro de forma inequívoca. Aunque hace ya mucho tiempo que no hay verdevidentes ni hijos del bosque en Poniente, aún existen personas que poseen la vista verde y experimentan sueños premonitorios si son conscientes de lo que buscan. Tú eres uno de ellos, y sueles tener sueños proféticos, augurios y presagios de sucesos venideros. Tus sueños están cargados de contenido simbólico, imágenes y metáforas. Su significado no siempre es evidente, pero cuando experimentas estas visiones siempre acaban reflejándose en los acontecimientos que presencias. Las vista verde no es un poder que puedas utilizar a tu antojo. Las visiones sólo se producen cuando está a punto de ocurriros algo importante a tus aliados y a ti. El Narrador debe apartarte del resto del grupo, describirte los detalles más importantes de tus visiones y darte piezas sueltas para que las encajes como puedas. Pero sea cual sea tu interpretación de estas visiones, los sucesos presagiados por la vista verde siempre acaban ocurriendo.',
                'type' => 'Predestinada'                
            ]
        ];

        foreach ($qualities as $quality) {
            Quality::create($quality);
        }
    }
}
