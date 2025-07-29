<?php

namespace Database\Seeders;

use App\Models\Specialty;
use App\Models\Stat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $specialties = [
            // Agilidad 
            // 1-5
            [
                'name' => 'Acrobacia',
                'action' => 'Acción Menor',
                'description' => 'Puedes usar la Agilidad para efectuar piruetas, volteretas, saltos mortales, ponerte en pie de un brinco y otras maniobras acrobáticas diversas.',
                'table' => 'Dificultad/Descripción|Rutina (6)/Ignorar el daño causado por 2 metros de caída (más 1 metro por cada grado de éxito)|Moderada (9)/Ponerte en pie con una acción gratuita (o con una acción menor si vistes armadura con un factor de Protección de 6 o más)|Complicada (12)/Incrementar tu Movimiento en 1 metro (más 1 metro por cada grado de éxito)|Difícil (15)/Balancearte con una cuerda, dar volteretas en el aire y aterrizar de pie|Heroica (21+)/Ignorar todo el daño causado por una caída de cualquier altura',
                'stat_id' => 1
            ],
            [
                'name' => 'Contorsionismo',
                'action' => 'Acción Mayor',
                'description' => 'Se puede hacer una tirada de Agilidad para colarse por un espacio estrecho. La dificultad de esta tirada depende del tamaño del hueco por el que intenta colarse el personaje, tal y como se indica en la siguiente tabla. Una tirada con éxito permite al personaje deslizarse a través de la abertura sin problema, mientras que un fallo no le permite seguir avanzando. Un fallo crítico implica que el personaje se ha quedado atascado y debe superar otra tirada de Agilidad (con la misma dificultad) para liberarse.',
                'table' => 'Dificultad/Descripción|Fácil (3)/Avanzar 1 metro por grado de éxito a través de una multitud, hasta el máximo permitido por el Movimiento.|Rutina (6)/Avanzar 1 metro por grado de éxito a través de una densa multitud, hasta el máximo permitido por el Movimiento.|Moderada (9)/Zafarse de una red.|Complicada (12)/Avanzar 1 metro por grado de éxito a través de un espacio estrecho, hasta el máximo permitido por el Movimiento.|Difícil (15)/Avanzar 1 metro por grado de éxito a través de una abertura muy estrecha, hasta el máximo permitido por el Movimiento.',
                'description2' => 'La penalización por armadura se vuelve a sumar a esta dificultad (se cuenta dos veces para las tiradas de Agilidad relacionadas con el Contorsionismo). Además, también se puede utilizar el Contorsionismo para liberarse de ataduras y grilletes. La dificultad depende de la calidad de las ataduras; normalmente es COMPLICADA (12) para cuerdas y DIFÍCIL (15) para grilletes. Si se falla esta tirada, el personaje no consigue nada; pero si obtiene más de 1 grado de fracaso, sufre una herida leve (ver CAPÍTULO 9: COMBATE para más detalles sobre las heridas). Si un personaje ataca a otro con un arma Apresadora, éste último puede usar el Contorsionismo para zafarse de ella, sustituyendo la tirada de Agilidad por una tirada de Brío.',
                'stat_id' => 1
            ],
            [
                'name' => 'Equilibrio',
                'action' => 'Acción Gratuita',
                'description' => 'La Agilidad también te permite mantener el equilibrio al caminar sobre una superficie precaria, como por ejemplo cuando avanzas o retrocedes por una estrecha cornisa. Solo se debe hacer una tirada de Agilidad para mantener el equilibrio cuando perderlo acarrea consecuencias (si la caída puede causarte la muerte, o si necesitas desplazarte con mayor rapidez sobre terreno traicionero). Un fallo crítico indica que se ha caído.',
                'table' => 'Dificultad/Descripción|Rutina (6)/Avanzar 1 metro por grado de éxito sobre un saliente o cornisa estrecha (de 15 cm o menos), hasta el máximo permitido por el Movimiento.|Moderada (9)/ Reducir las penalizaciones del terreno al Movimiento en 1 por grado de éxito.|Difícil (15)/Avanzar 1 metro por grado de éxito sobre la cuerda floja, hasta el máximo permitido por el Movimiento.',
                'stat_id' => 1
            ],
            [
                'name' => 'Esquivar',
                'action' => 'Acción Mayor',
                'description' => 'Cuando estés en combate, puedes emplear una acción mayor para esquivar todos los ataques efectuados contra ti. El resultado de tu tirada de Agilidad sustituye a tu valor de Defensa en combate hasta el comienzo de tu próximo turno (incluso aunque sea más bajo).',
                'stat_id' => 1
            ],
            [
                'name' => 'Rapidez',
                'action' => 'Acción Gratuita',
                'description' => 'Al iniciar un combate hay que hacer tiradas de Agilidad para determinar el orden de iniciativa de los contendientes (a esta tirada se aplican los dados de bonificación otorgados por la Rapidez). El combatiente que haya obtenido el resultado más alto actúa en primer lugar, seguido del segundo más alto, y así sucesivamente. En caso de empate, el personaje que tenga mayor rango en Agilidad va primero. Si aún persiste el empate, se comparan los rangos de Rapidez. Por último, si nada de esto ha servido para resolver el empate, los contendientes empatados deberán hacer una nueva tirada hasta que haya un claro vencedor. La Rapidez también entra en juego siempre que un personaje deba poner a prueba sus reflejos o su capacidad de reacción, como por ejemplo para atrapar al vuelo un objeto arrojado.',
                'stat_id' => 1
            ],


            // Brío 
            // 6-11
            [
                'name' => 'Arrojar',
                'action' => 'Acción Menor',
                'description' => 'Puedes usar el Brío para lanzar objetos. Si vas a arrojar un objeto especialmente diseñado para ello, como ciertas hachas, lanzas, cuchillos y demás, debes usar la Puntería en vez de esta habilidad; cualquier otro tipo de objeto se arroja haciendo una tirada de Brío. La dificultad de esta tirada y la distancia del lanzamiento dependen del peso del objeto y del grado de éxito obtenido. Fallar la tirada hace que el objeto aterrice a 1d6 metros de distancia en la dirección deseada, pero si se falla por más de un grado de fracaso el objeto cae a los pies del personaje.',
                'table' => 'Dificultad/Descripción|Automática (0)/15m por grado (Medio kg)|Fácil (3)/10m por grado (2 kg)|Rutina (6)/8m por grado (5 kg)|Moderada (9)/6m por grado (10 kg)|Complicada (12)/4m por grado (20 kg)|Difícil (15)/3m por grado (30 kg)|Muy Difícil (18)/2m por grado (50 kg)|Heroica (21+)/1m por grado (100 kg)',
                'description2' => 'Se aplica un -1D por cada punto de Impedimento que tenga el objeto.',
                'stat_id' => 2
            ],
            [
                'name' => 'Correr',
                'action' => 'Acción Mayor',
                'description' => 'En la mayoría de las ocasiones no es necesario efectuar una tirada de Brío para correr; el personaje sencillamente se desplaza a su velocidad de Carrera. Sin embargo, hay dos situaciones que sí requieren de una tirada de habilidad. Siempre que debas cubrir una gran distancia debes realizar una tirada MODERADA (9) de Brío. Si la consigues, podrás mantener el ritmo de Carrera durante 1 hora por cada grado de éxito obtenido. Una vez finalizado este tiempo debes hacer una nueva tirada, pero la dificultad se incrementa en un paso a COMPLICADA (12). En el momento en que falles una tirada, recibes 1 punto de Fatiga (ver página 169). Si no estáis usando las reglas de Fatiga, fallar una tirada significa que debes detenerte y no podrás volver a correr hasta haber descansado cuatro horas. La otra situación que exige el uso de esta especialidad se da cuando necesitas incrementar tu velocidad de Carrera. En combate, siempre que lleves a cabo una acción de carrera puedes intentar una tirada COMPLICADA (12) de Brío para correr aún más rápido y así cubrir más terreno. Conseguir esta tirada te permite correr 1 metro adicional por grado de éxito.',
                'table' => 'Dificultad/Descripción|Moderada (9)/Correr durante 1 hora por grado de éxito|Complicada (12)/Correr 1 metro adicional por grado de éxito (en combate).',
                'stat_id' => 2
            ],
            [
                'name' => 'Fuerza',
                'action' => 'Acción Mayor',
                'description' => 'Para levantar o empujar objetos pesados también hay que usar el Brío. Siempre que quieras levantar en vilo algo que el Narrador considere muy pesado, tendrás que hacer una tirada de Brío. En la tabla siguiente se indican las dificultades típicas de referencia; cabe señalar que se trata de puntos iniciales para levantar el peso una vez. El Narrador puede modificar esta dificultad en función del tamaño y el Impedimento del objeto en cuestión. También es más dificil levantar un objeto varias veces seguidas, por lo que si éste es el caso, la dificultad debería incrementarse en consecuencia.',
                'table' => 'Dificultad/Descripción|Automática (0)/5kg|Fácil (3)/10kg|Rutina (6)/20kg|Moderada (9)/45kg|Complicada (12)/65kg|Difícil (15)/110kg|Muy Difícil (18)/225kg|Heroica (21+)/340kg, más 100kg adicionales por cada grado de éxito además del primero.',
                'stat_id' => 2
            ],
            [
                'name' => 'Nadar',
                'action' => 'Acción Mayor',
                'description' => 'Tu personaje no sabrá nadar a no ser que tenga por lo menos 1B en esta especialidad. Sin ella, sólo podrá mantener la cabeza por encima de la superficie del agua si las condiciones son idóneas (aguas serenas y relativamente poco profundas, sin viento o con una leve brisa, etc.). En caso contrario, el personaje se hunde y posiblemente acabará ahogándose. Pero si posee la especialidad Nadar, no necesitará realizar tiradas de Brío a no ser que se encuentre en condiciones difíciles, como por ejemplo para vadear un río en plena crecida o mantenerse a flote en un mar azotado por la tempestad. La dificultad de esta tirada depende del estado del agua, teniendo en cuenta factores como profundidad, resaca, corriente, viento y demás. El Narrador debe establecer esta dificultad basándose en todos estos factores, pero puede de los siguientes ejemplos como referencia.',
                'table' => 'Dificultad/Descripción|Automática (0)/Aguas tranquilas y poco profundas|Fácil (3)/Aguas tranquilas y profundas|Rutina (6)/Aguas profundas con leve oleaje|Moderada (9)/Aguas profundas con oleaje moderado|Complicada (12)/Aguas profundas con una fuerte marejada|Difícil (15)/Aguas profundas, fuerte oleaje y principio de tormenta|Muy Difícil (18)/Aguas profundas, fuerte oleaje y tempestad|Heroica (21+)/Aguas profundas, fuerte oleaje y viento huracanado.',
                'description2' => 'Una tirada con éxito permite a tu personaje desplazarse a la mitad de su Movimiento más 1 metro adicional por cada grado de éxito además del primero. Si fallas la tirada de Brío, no podrás moverte del sitio. Y si además fallas una segunda tirada de Brío te hundirás bajo la superficie de las aguas. En el siguiente asalto deberás conseguir otra tirada de Brío para lograr subir de nuevo a respirar. Por cada asalto que no lo consigas y permanezcas bajo el agua necesitarás conseguir una tirada más de Brío para poder volver a la superficie. De este modo, si fallas tres tiradas consecutivas, necesitarás superar otras tres tiradas consecutivas para asomar de nuevo a la superficie.',
                'stat_id' => 2
            ],
            [
                'name' => 'Saltar',
                'action' => 'Acción Menor',
                'description' => 'Acción Menor.Debes realizar una tirada de Brío siempre que quieras salvar un obstáculo de un salto, como por ejemplo un foso o una valla. La dificultad de la tirada depende del tipo de salto que vas a intentar. Existen tres tipos básicos de salto: con carrerilla, inmóvil o de altura. Para hacer un salto con carrerilla el personaje debe recorrer al menos 3 metros; en caso contrario se considera un salto inmóvil. Si es necesario determinar la altura que alcanza el personaje en un salto inmóvil o con carrerilla, puede calcularse como la mitad de la distancia del salto.',
                'table' => 'Dificultad/Descripción|Rutina (6)/Salto de longitud con carretilla para cubrir 2 metros más 1 metro adicional por cada grado de éxito|Moderada (9)/Salto de longitud inmóvil para cubrir 1 metro por grado de éxito|Complicada (12)/Salto de altura para alcanzar 1 metro por grado de éxito.',
                'stat_id' => 2
            ],
            [
                'name' => 'Trepar',
                'action' => 'Acción Menor',
                'description' => 'Siempre que quieras ascender o descender por una superficie vertical tendrás que hacer una tirada de Brío. Si la consigues, podrás escalar hacia arriba o abajo una distancia total de 1 metro por grado de éxito (hasta un máximo igual a tu Movimiento normal). La dificultad de esta tirada depende de las propiedades de la superficie a escalar. Un fallo en la tirada te impide avanzar en la dirección deseada, pero si fallas por más de 1 grado de fracaso perderás tu asidero y caerás a plomo desde donde te encuentres.',
                'table' => 'Dificultad/Descripción|Rutina (6)/Subir por una escalera o pendiente empinada|Moderada (9)/Escalar por una pared usando una cuerda con nudos|Complicada (12)/Trepar por una superficie escarpada con numerosos asideros|Difícil (15)/Trepar por una superficie escarpada con pocos asideros|Muy Difícil (18)/Trepar por una superficie lisa|Heroica (21+)/Escalar una montaña muy escarpada|+5/Si la superficie está resbaladiza',
                'stat_id' => 2
            ],


            // Combate Cuerpo a Cuerpo
            // 12-20 
            [
                'name' => 'Armas Contundentes',
                'action' => 'Acción Menor o Mayor',
                'description' => 'Siempre que quieras efectuar un ataque en combate, debes realizar una tirada de Combate cuerpo a cuerpo contra la Defensa en combate de tu adversario. Una tirada con éxito inflige un daño total igual al daño del arma multiplicado por los grados de éxito obtenidos (el daño de un arma es el rango de la habilidad pertinente más posibles modificadores positivos o negativos). En el CAPITULO 9: COMBATE. se explica con detalle la resolución de ataques y sus consecuencias.',
                'stat_id' => 3
            ],
            [
                'name' => 'Armas de asta',
                'action' => 'Acción Menor o Mayor',
                'description' => 'Siempre que quieras efectuar un ataque en combate, debes realizar una tirada de Combate cuerpo a cuerpo contra la Defensa en combate de tu adversario. Una tirada con éxito inflige un daño total igual al daño del arma multiplicado por los grados de éxito obtenidos (el daño de un arma es el rango de la habilidad pertinente más posibles modificadores positivos o negativos). En el CAPITULO 9: COMBATE. se explica con detalle la resolución de ataques y sus consecuencias.',
                'stat_id' => 3
            ],
            [
                'name' => 'Armas de hoja corta',
                'action' => 'Acción Menor o Mayor',
                'description' => 'Siempre que quieras efectuar un ataque en combate, debes realizar una tirada de Combate cuerpo a cuerpo contra la Defensa en combate de tu adversario. Una tirada con éxito inflige un daño total igual al daño del arma multiplicado por los grados de éxito obtenidos (el daño de un arma es el rango de la habilidad pertinente más posibles modificadores positivos o negativos). En el CAPITULO 9: COMBATE. se explica con detalle la resolución de ataques y sus consecuencias.',
                'stat_id' => 3
            ],
            [
                'name' => 'Armas de hoja larga',
                'action' => 'Acción Menor o Mayor',
                'description' => 'Siempre que quieras efectuar un ataque en combate, debes realizar una tirada de Combate cuerpo a cuerpo contra la Defensa en combate de tu adversario. Una tirada con éxito inflige un daño total igual al daño del arma multiplicado por los grados de éxito obtenidos (el daño de un arma es el rango de la habilidad pertinente más posibles modificadores positivos o negativos). En el CAPITULO 9: COMBATE. se explica con detalle la resolución de ataques y sus consecuencias.',
                'stat_id' => 3
            ],
            [
                'name' => 'Escudos',
                'action' => 'Acción Menor o Mayor',
                'description' => 'Siempre que quieras efectuar un ataque en combate, debes realizar una tirada de Combate cuerpo a cuerpo contra la Defensa en combate de tu adversario. Una tirada con éxito inflige un daño total igual al daño del arma multiplicado por los grados de éxito obtenidos (el daño de un arma es el rango de la habilidad pertinente más posibles modificadores positivos o negativos). En el CAPITULO 9: COMBATE. se explica con detalle la resolución de ataques y sus consecuencias.',
                'stat_id' => 3
            ],
            [
                'name' => 'Esgrima',
                'action' => 'Acción Menor o Mayor',
                'description' => 'Siempre que quieras efectuar un ataque en combate, debes realizar una tirada de Combate cuerpo a cuerpo contra la Defensa en combate de tu adversario. Una tirada con éxito inflige un daño total igual al daño del arma multiplicado por los grados de éxito obtenidos (el daño de un arma es el rango de la habilidad pertinente más posibles modificadores positivos o negativos). En el CAPITULO 9: COMBATE. se explica con detalle la resolución de ataques y sus consecuencias.',
                'stat_id' => 3
            ],
            [
                'name' => 'Hachas',
                'action' => 'Acción Menor o Mayor',
                'description' => 'Siempre que quieras efectuar un ataque en combate, debes realizar una tirada de Combate cuerpo a cuerpo contra la Defensa en combate de tu adversario. Una tirada con éxito inflige un daño total igual al daño del arma multiplicado por los grados de éxito obtenidos (el daño de un arma es el rango de la habilidad pertinente más posibles modificadores positivos o negativos). En el CAPITULO 9: COMBATE. se explica con detalle la resolución de ataques y sus consecuencias.',
                'stat_id' => 3
            ],
            [
                'name' => 'Lanzas',
                'action' => 'Acción Menor o Mayor',
                'description' => 'Siempre que quieras efectuar un ataque en combate, debes realizar una tirada de Combate cuerpo a cuerpo contra la Defensa en combate de tu adversario. Una tirada con éxito inflige un daño total igual al daño del arma multiplicado por los grados de éxito obtenidos (el daño de un arma es el rango de la habilidad pertinente más posibles modificadores positivos o negativos). En el CAPITULO 9: COMBATE. se explica con detalle la resolución de ataques y sus consecuencias.',
                'stat_id' => 3
            ],
            [
                'name' => 'Pelea',
                'action' => 'Acción Menor o Mayor',
                'description' => 'Siempre que quieras efectuar un ataque en combate, debes realizar una tirada de Combate cuerpo a cuerpo contra la Defensa en combate de tu adversario. Una tirada con éxito inflige un daño total igual al daño del arma multiplicado por los grados de éxito obtenidos (el daño de un arma es el rango de la habilidad pertinente más posibles modificadores positivos o negativos). En el CAPITULO 9: COMBATE. se explica con detalle la resolución de ataques y sus consecuencias.',
                'stat_id' => 3
            ],


            // Conocimiento
            // 21-23
            [
                'name' => 'Callejeo',
                'action' => 'Varía, Mínimo 1 hora',
                'description' => 'Puedes utilizar el Conocimiento para adquirir información útil indagando rumores, hablando con los ciudadanos de a pie y visitando los locales más sórdidos de una comunidad. Recabando información de este modo puedes averiguar mucho sobre los actuales acontecimientos, actitudes y aires que se respiran en la comunidad. La dificultad de esta tirada depende del tiempo que dediques a merodear por una zona. Una tirada con éxito sólo revela rumores y especulaciones, pero normalmente bastan para saber qué está pasando. Cada grado de éxito adicional te permite averiguar un dato útil más.',
                'table' => 'Dificultad/Descripción|Automática (0)/|Fácil (3)/|Rutina (6)/|Moderada (9)/|Complicada (12)/|Difícil (15)/|Muy Difícil (18)/|Heroica (21+)/',
                'stat_id' => 4
            ],
            [
                'name' => 'Educación',
                'action' => 'Acción Gratuita',
                'description' => 'Para recordar información útil sobre una materia es preciso realizar una tirada de Conocimiento. Por lo general, la especialidad de Educación se utiliza para identificar las cosas que te rodean; por ejemplo, para saber qué es un gatosombra, hacia dónde queda el Muro o quién regenta el trono actualmente. La dificultad de la tirada depende del asunto concreto, específicamente de lo conocida que sea la información requerida.',
                'table' => 'Dificultad/Información|Automática (0)/Sobradamente conocida|Fácil (3)/Popular|Rutina (6)/Accesible|Moderada (9)/Poco conocida|Complicada (12)/Escasa|Difícil (15)/Rara|Muy Difícil (18)/Muy rara o confidencial|Heroica (21+)/Olvidada',
                'stat_id' => 4
            ],
            [
                'name' => 'Investigación',
                'action' => '1 día',
                'description' => 'La Educación no es el único método para averiguar información sobre un asunto: si tienes acceso a textos relacionados, puedes indagar en ellos para averiguar lo que buscas. La Investigación funciona de manera similar a la Educación, con la salvedad de que requiere más tiempo, lectura y búsqueda. Sólo se puede investigar una materia si se tiene acceso a una biblioteca que contenga la información deseada. La dificultad de la tirada depende de la accesibilidad de la materia y sigue las mismas pautas generales descritas en la descripción de la Educación. La cantidad de éxitos necesarios para hallar la información deseada depende del tamaño de la bibliografia consultada. Las bibliotecas más grandes tendrán dicha información casi con toda seguridad, pero consultar sus archivos suele requerir más tiempo (debido en parte a su terrible falta de organización). Además, cuanto mayor es la bibliografia más posibilidades existen de perderse, confundirse o seguir una línea de investigación equivocada.',
                'table' => 'Tiradas superadas/Ejemplo|1/Un único libro|2/Una pequeña colección de entre dos y cuatro libros|3/Una modesta colección de entre cinco y ocho libros|4/Una colección considerable de hasta una docena de libros|5/Una gran colección de hasta veinte libros|6/Una colección enorme de varias decenas de libros, la Biblioteca de Invernalia|7/Una selección descomunal de cientos de libros, tomos y pergaminos; Diez Torres|8/Una colección gigantesca; la Ciudadela de Antigua',
                'description2' => 'Conforme acumules éxitos, el Narrador puede ir proporcionándote datos para señalar tus progresos. Una vez empezada la investigación, puedes abandonarla y retomarla más adelante, conservando todos los éxitos que hubieras acumulado anteriormente (siempre y cuando la biblioteca esté tal y como la dejaste),',
                'stat_id' => 4
            ],


            // Constitución
            // 24-25
            [
                'name' => 'Recuperación',
                'action' => 'Acción Especial',
                'description' => 'Cada vez que recibas heridas leves o graves, puedes hacer una tirada de Constitución para sobreponerte a ellas. Debes esperar al menos 1 día antes de hacer una tirada para recuperarte de una herida leve, y por lo menos 1 semana para restablecerte de heridas graves. La dificultad de la tirada depende de tu nivel de actividad durante el periodo de tiempo comprendido entre que sufrieras la herida y realices la tirada para recuperarte de ella.',
                'table' => 'Dificultad/Descripción|Rutina (6)/Recuperarse de una herida leve tras actividad nula o leve|Moderada (9)/Recuperarse de una herida leve tras actividad moderada. Recuperarse de una herida grave tras actividad nula o leve|Complicada (12)/Recuperarse de una herida leve tras actividad moderada|Difícil (15)/Recuperarse de una herida grave tras actividad moderada|Heroica (21+)/Recuperarse de una herida grave tras actividad extenuante',
                'description2' => 'Una tirada con éxito te permite curarte 1 herida leve por grado de éxito o 1 herida grave por cada dos grados de éxito. Si fallas la tirada, tu estado de salud no cambiará; sin embargo, si obtienes un fallo crítico tus heridas se infectarán y sufrirás otra herida leve o grave (dependiendo de la que estuvieras intentando recuperarte).',
                'stat_id' => 5
            ],
            [
                'name' => 'Resistencia',
                'action' => 'Acción Gratuita',
                'description' => 'Siempre que te veas expuesto a algún peligro (venenos, enfermedades y similares), puedes realizar una tirada de Constitución para resistir sus efectos. Normalmente se requieren varias tiradas para resistir un peligro ambiental por completo, y un fallo podría acarrear una herida leve, una herida grave o incluso la muerte del personaje. Cada peligro incluye en su descripción una dificultad, una virulencia y una frecuencia concretas. La dificultad establece la complejidad de la tirada de Constitución necesaria para evitarlo, la virulencia indica la cantidad de tiradas que hay que superar con éxito para superar el peligro, y la frecuencia define el tiempo que hay que dejar pasar entre tirada y tirada. Por lo general, cada grado de éxito obtenido en una tirada cuenta como un éxito adicional. Para más detalles, consulta la sección Peligros (página 204 del CAPf1WIO 11: EL NARRADOR).',
                'stat_id' => 5
            ],


            // Curación
            // 25-27
            [
                'name' => 'Diagnosticar',
                'action' => 'Acción Mayor',
                'description' => 'Puedes examinar a un paciente herido o enfermo para averiguar lo que le pasa, o tratar de identificar una aflicción tras oír una descripción de sus síntomas. La dificultad de las tiradas de Diagnosticar suele ser COMPLICADA (12) cuando el paciente está presente, aunque puede reducirse a AUTOMÁTICA (0) si la causa de la dolencia es evidente a simple vista (una lanza clavada en el estómago se nota bastante). Si el personaje trata de emitir un diagnóstico sobre alguien que no está presente, la dificultad de la tirada se incrementa en 5. Un éxito en la tirada te permite comprender el problema general, pero si la fallas tendrás que aventurar un diagnóstico. Cada grado de obtenido de éxito además del primero concede +1D a la tirada de Curación necesaria para tratar al paciente (hasta un máximo de tantos dados de bonificación como hayas invertido en esta especialidad).',
                'stat_id' => 6
            ],
            [
                'name' => 'Tratar Dolencia',
                'action' => '1 minuto',
                'description' => 'Puedes realizar una tirada de Curación para tratar a un paciente aquejado de una enfermedad, envenenamiento o algún otro efecto perjudicial. El resultado de esta tirada sustituye el de la tirada de Constitución que deba hacer el paciente para resistir dicho efecto. El paciente debe utilizar el resultado de tu tirada incluso aunque sea peor que el que pudiera haber obtenido por sí mismo, y además la tirada de Curación debe realizarse antes de que el paciente tire por su Constitución.',
                'stat_id' => 6
            ],
            [
                'name' => 'Tratar Herida',
                'action' => 'Varía',
                'description' => 'La Curación también sirve para tratar a los heridos y acelerar el proceso de recuperación natural. Debes atender al paciente durante al menos cuatro horas cada día que el personaje deba (o no) descansar, limpiando su herida y cambiándole los vendajes. Una vez pasado todo este periodo de tiempo, el resultado de tu tirada de Curación sustituye a la tirada de Constitución del paciente. El paciente debe utilizar el resultado de tu tirada incluso aunque sea peor que el que pudiera haber obtenido por sí mismo. Sin embargo, un paciente atendido de este modo no sufre heridas adicionales por fallar una tirada de Curación.',
                'stat_id' => 6
            ],


            // Discreción
            // 28-29
            [
                'name' => 'Pasar inadvertido',
                'action' => '',
                'description' => '',
                'stat_id' => 7
            ],
            [
                'name' => 'Sigilo',
                'action' => '',
                'description' => '',
                'stat_id' => 7
            ],


            // Engaño
            // 30-34
            [
                'name' => 'Actuar',
                'action' => 'Acción Menor',
                'description' => 'Siempre que quieras hacerte pasar por quien no eres (ya sea interpretando un personaje sobre un escenario o fingiendo ser otra persona), has de hacer una tirada de Engaño. La especialidad Actuar requiere una tirada de conflicto en la que se mide tu Engaño contra el valor pasivo de Percepción de tu adversario. Si éste tiene motivos para sospechar de tu impostura, la dificultad de la tirada será igual al resultado de su tirada de Percepción. Bajo determinadas circunstancias podrás añadir tus dados de bonificación por Disfrazarse a tus tiradas de Engaño (por ejemplo, cuando tu indumentaria o disfraz sean vitales para el éxito de tu interpretación).',
                'stat_id' => 8
            ],
            [
                'name' => 'Disfrazarse',
                'action' => 'Acción Menor',
                'description' => 'De manera similar a Actuar, el uso del Engaño para disfrazarse uno mismo representa un intento de ocultar la identidad propia, aunque con ello no se hace un esfuerzo activo por aparentar ser otra persona. Esta especialidad te permite ocultar tu identidad a simple vista, por ejemplo vistiendo un manto con capucha e indumentaria propia de plebeyos para que la gente no se percate de que eres en realidad un infame caballero. Disfrazarse requiere una tirada de conflicto en la que debes medir tu Engaño contra el valor pasivo de Percepción de tu adversario. Si éste tiene motivos para dudar de tu identidad, la dificultad es igual al resultado de su tirada de Percepción, Bajo determinadas circunstancias podrás añadir tus dados de bonificación por Actuar a tus tiradas de Engaño (por ejemplo, cuando tu indumentaria o disfraz sean vitales para el éxito de tu interpretación).',
                'stat_id' => 8
            ],
            [
                'name' => 'Fullería',
                'action' => 'Acción Gratuita',
                'description' => 'Cuando participes en un juego de azar o situación similar, puedes alterar los resultados para concederte una ventaja a ti mismo. Para ello, haz una tirada de Engaño contra el valor pasivo de Percepción de tu adversario (o el resultado de su tirada, si tiene motivos para creer que haces trampas). Si la consigues, puedes añadir a la tirada implicada en el juego (normalmente Ingenio) una cantidad igual a tu rango de Engaño multiplicado por los grados de éxito que hayas obtenido.',
                'stat_id' => 8
            ],
            [
                'name' => 'Mentir',
                'action' => 'Acción Menor',
                'description' => 'El Engaño también es una herramienta de gran utilidad en las intrigas. Puedes hacer una tirada de Engaño en lugar de Persuasión cuando quieras imponerte a otro personaje, pero sólo si tu papel en la intriga implica ocultar información, confundir a tu adversario o mentir impunemente sobre tus intenciones. Además, si tu adversario intenta discernir tus motivos, la dificultad de su tirada será igual al resultado de tu tirada de Engaño.',
                'stat_id' => 8
            ],


            // Estatus
            // 35-38
            [
                'name' => 'Administración',
                'action' => 'Varía',
                'description' => 'El Estatus también es una habilidad esencial para gestionar las posesiones del personaje. Las tiradas de Administración se realizan en respuesta a los posibles problemas que surjan en tus tierras. También puedes tirar por Estatus para supervisar las mejoras realizadas en tu fortaleza, reclutar soldados, contratar mercenarios, mejorar el comercio, las comunidades o los caminos. Para más detalles sobre el uso de esta especialidad, consulta el CAPÍTULO 6: CASA Y HEREDADES.',
                'stat_id' => 9
            ],
            [
                'name' => 'Etiqueta',
                'action' => 'Acción Gratuita',
                'description' => 'La Etiqueta representa el conocimiento que tiene el personaje de las costumbres y los procedimientos, los aspectos protocolarios y la conducta que debe exhibirse al interactuar con otros individuos de clase social similar o superior. Siempre que participes en una intriga con un personaje que tenga un Estatus de 4 o superior (y seas consciente de su rango), puedes emplear una acción gratuita para realizar una tirada de Estatus contra la Defensa en intrigas del objetivo, Un éxito en esta tirada te proporciona +1B, y cada dos grados de éxito adicionales te conceden otro +1B. Estos dados son una reserva fija que puedes añadir en cualquier cantidad a las tiradas de Persuasión que debas realizar a lo largo de la intriga, y una vez utilizados se pierden. Si al final de la intriga aún te sobran algunos de estos dados de bonificación, también los pierdes.',
                'stat_id' => 9
            ],
            [
                'name' => 'Reputación',
                'action' => 'Acción Gratuita',
                'description' => 'El orden de iniciativa en una intriga se determina mediante una tirada de Estatus. El jugador que obtenga el resultado más alto actúa en primer lugar; en caso de empate, tienen prioridad los personajes con más dados de bonificación en Reputación, y luego los que tengan más en Estatus; si aún persiste el empate, los jugadores empatados deberán realizar nuevas tiradas para desempatar. También se puede hacer una tirada de Estatus durante una intriga para realizar la acción de escudarse en la reputación. La Reputación también permite al personaje desenvolverse con mayor facilidad en situaciones sociales y atraer más atenciones de lo que normalmente le granjearía su condición social. Normalmente es preciso superar una tirada MODERADA (9) de Estatus para captar la atención de alguien con quien deseas hablar, pero si estás pugnando por ocupar una posición disputada podrías tener que realizar una tirada de competición contra algún rival.',
                'stat_id' => 9
            ],
            [
                'name' => 'Torneos',
                'action' => 'Varía',
                'description' => 'Esta especialidad se usa para toda tirada de Estatus necesaria para recordar información útil sobre este tipo de eventos, para evaluar a los contendientes a los que te enfrentes, para atraer a caballeros distinguidos a tu propio torneo (para lo que deberás superar su valor pasivo de Estatus con tu tirada) y otros usos planteados por el Narrador.',
                'stat_id' => 9
            ],
            

            // Guerra
            // 39-41
            [
                'name' => 'Estrategia',
                'action' => 'Acción Gratuita',
                'description' => 'En escaramuzas y batallas, el líder de cada bando ha de realizar una tirada de Guerra (utilizando los dados de bonificación de la especialidad Estrategia) para determinar el orden de iniciativa.',
                'stat_id' => 10
            ],
            [
                'name' => 'Mando',
                'action' => 'Acción Especial',
                'description' => 'La Guerra se usa en escaramuzas y batallas; los personajes deben realizar una tirada de Guerra (usando los dados de bonificación de su Mando) para impartir órdenes a sus unidades. Para más detalles sobre su uso, consulta el CAPÍTULO 10: GUERRA.',
                'stat_id' => 10
            ],
            [
                'name' => 'Táctica',
                'action' => 'Acción Gratuita',
                'description' => 'En combate, un personaje puede renunciar a su tirada de iniciativa para hacer en su lugar una tirada de Guerra que condeda dados de bonificación a las tiradas de Agilidad de sus aliados. La dificultad de esta tirada suele ser MODERADA (9), y en caso de superarla se proporciona a los aliados +1B por cada grado de éxito obtenido.',
                'stat_id' => 10
            ],


            // Idioma
            // 42
            [
                'name' => 'Special',
                'action' => 'Ninguna',
                'description' => 'El Idioma es la habilidad para comunicarse oralmente o, entre los más cultos, mediante la palabra escrita. El rango inicial en esta habilidad se aplica al conocimiento de la lengua común que se habla en todo Poniente. Al mejorar esta habilidad se puede incrementar el rango de Lengua común o bien aprender algún otro idioma. Esta habilidad carece de usos especiales; sencillamente confiere la capacidad de comunicarse en una lengua concreta. El rango que adquieras en un Idioma determina la fluidez con que lo hablas e indica si sabes leerlo y escribirlo.',
                'table' => 'Rango/Descripción|0/Desconoces el idioma|1/Posees una compresión básica del idioma que te permite transmitir ideas básicas mediante el lenguaje oral.|2/Posees una comprensión media del idioma, y lo hablas bien, pero no sabes leer ni escribir.|3/Conoces bien el idioma y posees una capacidad de lectura básica.|4/Dominas el idioma y tienes una excelente capacidad de lectura.|5/Hablas con fluidez el idioma y puedes identificar sus distintos dialectos. Sabes leer la mayoría de sus formas de escritura.|6/Tu dominio del idioma es tal que puedes comunicarte en idiomas similares como si los conocieras con rango 2.|7/Dominas el idioma a la perfección y puedes alterar tu acento para ajustarlo a diferentes dialectos. Sabes leer todas las formas de escritura de tu idioma, e incluso puedes interpretar inscripciones arcaicas con facilidad.',
                'description2' => 'Algunos ejemplos de idiomas son: Alto Valyrio, idioma de la antigua Valyria (apenas se habla ya); Argot Esclavista, lengua comercial utilizada por esclavistas (principalmente en ciudades ghiscari); Asshai, idioma de los asshai y de la Sombra; Braavosi, el idioma de la ciudad libre de Braavos; Dothraki, el idioma de los pueblos dothraki; Ghiscari, lengua prácticamente desaparecida (de un antiguo pueblo destruido por Valyria); Ibbenés, idioma que se habla en el Puerto de Ibben; Lengua Antigua, idioma de los primeros hombres (ahora ya solo hablado por los salvajes más allá del Muro); Lengua Común, El idioma predominante en Poniente; Lyseno, el idioma de Lys; Myriano, el idioma de la Ciudad Libre de Myr; Norvosano, el idioma de Norvos; Pentoshi, el idioma de la Ciudad Libre de Pentosh (es un dialecto del valyrio); Qarthiano, el idioma de l pueblo de Qarth; Tyroshi, el idioma de la Ciudad Libre de Tyrosh; Valyrio, variante vulgar y corrompida del alto valyrio.',
                'stat_id' => 11
            ],


            // Ingenio
            // 43-45
            [
                'name' => 'Descifrar',
                'action' => 'Acción Mayor',
                'description' => 'Siempre que examines un texto escrito en clave o en otro idioma, puedes realizar una tirada de Ingenio para discernir el contenido del mensaje y comprender su significado básico. Cada grado de éxito obtenido en la tirada te permite descifrar un párrafo aproximado de información.',
                'table' => 'Dificultad/Descripción|Automática (0)/Descifrar un texto escrito en un idioma que conoces con rango 6.|Fácil (3)/Descifrar un texto escrito es un idioma que conoces con rango 5.|Rutina (6)/Descifrar un texto escrito en un idioma que conoces con rango 4.|Moderada (9)/Descifrar un código sencillo o un texto escrito en un idioma que conoces con rango 3.|Complicada (12)/Descifrar un código moderado o un texto escrito en un idioma que conoces con rango 2.|Difícil (15)/Descifrar un código complejo o un texto escrito en un idioma que conoces con rango 1.|Muy Difícil (18)/Descifrar un código complejo o un texto escrito en un idioma o un código muy complejo.|Heroica (21+)/Resolver un código nuevo.',
                'stat_id' => 12
            ],
            [
                'name' => 'Lógica',
                'action' => 'Acción Mayor',
                'description' => 'Se puede hacer una tirada de Ingenio para resolver enigmas, acertijos y demás problemas de lógica. Por ejemplo, podrías hacer una tirada de Lógica para averiguar cuáles son los planes de un enemigo basándote en una serie de maniobras no relacionadas, o quizá para evaluar el estado de la corte de un noble con objeto de identificar posibles conspiraciones y alianzas. La dificultad de esta tirada depende de la complejidad y el tamaño del problema que se desea resolver; por 10 general, la mayoría de los acertijos son COMPLICADOS (12). También puedes enfrentar tu tirada de Ingenio contra el valor pasivo de Guerra de un comandante enemigo (siempre y cuando puedas echarle un buen vistazo a sus planes) para encontrar algún fallo en su estrategia. A discreción del Narrador, una tirada con éxito podría permitirte sumar parte de o todos tus dados de bonificación de Lógica a la tirada de Guerra que debas realizar a1 librar una batalla.',
                'stat_id' => 12
            ],
            [
                'name' => 'Memoria',
                'action' => 'Acción Gratuita',
                'description' => 'Puedes realizar una tirada de Ingenio para recordar información útil relacionada con cualquier reto al que te enfrentes. La dificultad de esta tirada depende de la naturaleza del problema, y siempre debe establecerla el Narrador. Un éxito en la tirada podría sugerirte una idea para salvar el obstáculo, o incluso conferirte una bonificación para cualquier tirada contra un adversario. Por ejemplo, si te hallas en una situación de intriga con otro noble, podrías hacer una tirada de Ingenio para recordar algo útil sobre su familia; si la consiguieras, y fuera posible que supieras algo sobre su pasado que pudieras usar contra él, podrías recibir un dado de bonificación o incluso un dado de habilidad adicional para tu tirada.',
                'table' => 'Dificultad/Descripción|Automática (0)/Recordar tu nombre, dónde vives y cómo se llaman tus padres|Fácil (3)/Recordar el apellido de la familia que gobierna en tu región|Rutina (6)/Recordar detalles menores sobre la zona en la que vives.|Moderada (9)/Recordar detalles importantes sobre un personaje con Estatus 6 o más|Complicada (12)/Recordar detalles importantes sobre un personaje con Estatus 5|Difícil (15)/Recordar detalles importantes sobre un personaje con Estatus 4|Muy Difícil (18)/Recordar detalles importantes sobre un personaje con Estatus 3|Heroica (21+)/Recordar detalles importantes sobre un personaje con Estatus 2',
                'stat_id' => 12
            ],


            // Percepción
            // 46-47
            [
                'name' => 'Empatía',
                'action' => 'Acción Gratuita',
                'description' => 'La Percepción puede utilizarse para escrutar el interior de los demás y evaluar su sinceridad y la verdad que encierran sus palabras. Esto se resuelve efectuando una tirada de Percepción contra el valor pasivo de Engaño del objetivo; si la consigues, sabrás cuál es su actitud hacia ti o hacia el tema de vuestra conversación; cada grado de éxito adicional obtenido en esta tirada te revelará detalles más específicos sobre sus intenciones y actitudes generales. Este uso de la Percepción no sirve para leer la mente: tan sólo te permite intuir cuáles son las motivaciones de un personaje basándote en su lenguaje corporal, su forma de expresarse y el tono de su voz. También se puede utilizar la Empatía en situaciones de intriga (ver página 145).',
                'stat_id' => 13
            ],
            [
                'name' => 'Observación',
                'action' => 'Acción Gratuita',
                'description' => 'La Percepción se utiliza habitualmente para emplear tus sentidos, para percibir el mundo que rodea a tu personaje y fijarte en los detalles pequeños. Por lo general no se hacen tiradas de Percepción a no ser que estés buscando o mirando a tu alrededor activamente. En vez de eso, cuando alguien intenta esconderse de ti u ocultarte algo debe superar tu valor pasivo de Percepción. Si falla su tirada, te percatas automáticamente de su intento. Sin embargo, si estás buscando activamente algo o a alguien, debes igualar o superar el resultado de la tirada de Discreción de tu adversario o la dificultad establecida por el Narrador para encontrar el objeto oculto. La mayoría de las tiradas de Percepción realizadas para encontrar objetos, palancas y puertas ocultas tienen una dificultad COMPLICADA (12), aunque si están especialmente bien disimulados podrían ser más dificiles de encontrar.',
                'stat_id' => 13
            ],


            // Persuasión
            // 48-54
            [
                'name' => 'Cautivar',
                'action' => 'Ninguna',
                'description' => 'La Persuasión es la capacidad de manipular las emociones y creencias de otros. Con esta habilidad puedes alterar el modo en que te ven los demás, moldear sus actitudes hacia otras personas, convencerlos de cosas con las que normalmente no estarían de acuerdo, y mucho más. Aunque es una habilidad muy eficaz y resulta de vital importancia para quienes participan en el juego de tronos, existen ciertos límites; aquellos que no tienen ningún interés por las intrigas o la conversación no pueden ser sometidos por la fuerza a tus intentos de manipulación. Pero quienes desean algo de ti o se muestran dispuestos a dejarse convencer son víctimas propicias de la Persuasión. La Persuasión es una de las habilidades que más importancia tienen a la hora de participar en una intriga. Posee muchas expresiones, diferenciadas entre sí por las técnicas empleadas y el objetivo perseguido. Negociar representa un intercambio de servicios o artículos por algo de valor similar, mientras que Cautivar sirve para granjearse amistades y entablar alianzas. Provocar puede obligar a un objetivo a actuar para así evitar uno mismo ser censurado, mientras que Incitar se utiliza para empeorar la opinión que tiene el objetivo de alguna otra persona. Todos los métodos y usos completos de la habilidad Persuasión se explican con detalle en el CAPÍTULO 8: INTRIGA.',
                'description2' => 'No todas las situaciones de interpretación se dan en intrigas a gran escala; también hay encuentros menores que no tienen consecuencias duraderas. Para resolver uno de tales encuentros, debes hacer una tirada de Persuasión contra el valor pasivo de Voluntad de tu objetivo. Si la consigues, la actitud del objetivo hacia ti mejora en una categoría por cada grado de éxito obtenido. Por lo general basta con mejorar la actitud de un objetivo a Cordialidad para conseguir que realice una tarea menor. Sin embargo, los resultados no suelen durar demasiado, y la actitud del objetivo regresa a su categoría inicial al cabo de pocos minutos. En caso de fallar la tirada no podrá volver a intentarse sin comenzar una intriga, y un fallo crítico empeora la actitud del objetivo con una categoría. Las reducciones de la actitud son más duraderas y se mantienen hasta que te enfrentes al objetivo en una intriga para restaurar su actitud.',
                'stat_id' => 14
            ],
            [
                'name' => 'Convencer',
                'action' => 'Ninguna',
                'description' => 'La Persuasión es la capacidad de manipular las emociones y creencias de otros. Con esta habilidad puedes alterar el modo en que te ven los demás, moldear sus actitudes hacia otras personas, convencerlos de cosas con las que normalmente no estarían de acuerdo, y mucho más. Aunque es una habilidad muy eficaz y resulta de vital importancia para quienes participan en el juego de tronos, existen ciertos límites; aquellos que no tienen ningún interés por las intrigas o la conversación no pueden ser sometidos por la fuerza a tus intentos de manipulación. Pero quienes desean algo de ti o se muestran dispuestos a dejarse convencer son víctimas propicias de la Persuasión. La Persuasión es una de las habilidades que más importancia tienen a la hora de participar en una intriga. Posee muchas expresiones, diferenciadas entre sí por las técnicas empleadas y el objetivo perseguido. Negociar representa un intercambio de servicios o artículos por algo de valor similar, mientras que Cautivar sirve para granjearse amistades y entablar alianzas. Provocar puede obligar a un objetivo a actuar para así evitar uno mismo ser censurado, mientras que Incitar se utiliza para empeorar la opinión que tiene el objetivo de alguna otra persona. Todos los métodos y usos completos de la habilidad Persuasión se explican con detalle en el CAPÍTULO 8: INTRIGA.',
                'description2' => 'No todas las situaciones de interpretación se dan en intrigas a gran escala; también hay encuentros menores que no tienen consecuencias duraderas. Para resolver uno de tales encuentros, debes hacer una tirada de Persuasión contra el valor pasivo de Voluntad de tu objetivo. Si la consigues, la actitud del objetivo hacia ti mejora en una categoría por cada grado de éxito obtenido. Por lo general basta con mejorar la actitud de un objetivo a Cordialidad para conseguir que realice una tarea menor. Sin embargo, los resultados no suelen durar demasiado, y la actitud del objetivo regresa a su categoría inicial al cabo de pocos minutos. En caso de fallar la tirada no podrá volver a intentarse sin comenzar una intriga, y un fallo crítico empeora la actitud del objetivo con una categoría. Las reducciones de la actitud son más duraderas y se mantienen hasta que te enfrentes al objetivo en una intriga para restaurar su actitud.',
                'stat_id' => 14
            ],
            [
                'name' => 'Incitar',
                'action' => 'Ninguna',
                'description' => 'La Persuasión es la capacidad de manipular las emociones y creencias de otros. Con esta habilidad puedes alterar el modo en que te ven los demás, moldear sus actitudes hacia otras personas, convencerlos de cosas con las que normalmente no estarían de acuerdo, y mucho más. Aunque es una habilidad muy eficaz y resulta de vital importancia para quienes participan en el juego de tronos, existen ciertos límites; aquellos que no tienen ningún interés por las intrigas o la conversación no pueden ser sometidos por la fuerza a tus intentos de manipulación. Pero quienes desean algo de ti o se muestran dispuestos a dejarse convencer son víctimas propicias de la Persuasión. La Persuasión es una de las habilidades que más importancia tienen a la hora de participar en una intriga. Posee muchas expresiones, diferenciadas entre sí por las técnicas empleadas y el objetivo perseguido. Negociar representa un intercambio de servicios o artículos por algo de valor similar, mientras que Cautivar sirve para granjearse amistades y entablar alianzas. Provocar puede obligar a un objetivo a actuar para así evitar uno mismo ser censurado, mientras que Incitar se utiliza para empeorar la opinión que tiene el objetivo de alguna otra persona. Todos los métodos y usos completos de la habilidad Persuasión se explican con detalle en el CAPÍTULO 8: INTRIGA.',
                'description2' => 'No todas las situaciones de interpretación se dan en intrigas a gran escala; también hay encuentros menores que no tienen consecuencias duraderas. Para resolver uno de tales encuentros, debes hacer una tirada de Persuasión contra el valor pasivo de Voluntad de tu objetivo. Si la consigues, la actitud del objetivo hacia ti mejora en una categoría por cada grado de éxito obtenido. Por lo general basta con mejorar la actitud de un objetivo a Cordialidad para conseguir que realice una tarea menor. Sin embargo, los resultados no suelen durar demasiado, y la actitud del objetivo regresa a su categoría inicial al cabo de pocos minutos. En caso de fallar la tirada no podrá volver a intentarse sin comenzar una intriga, y un fallo crítico empeora la actitud del objetivo con una categoría. Las reducciones de la actitud son más duraderas y se mantienen hasta que te enfrentes al objetivo en una intriga para restaurar su actitud.',
                'stat_id' => 14
            ],
            [
                'name' => 'Intimidar',
                'action' => 'Ninguna',
                'description' => 'La Persuasión es la capacidad de manipular las emociones y creencias de otros. Con esta habilidad puedes alterar el modo en que te ven los demás, moldear sus actitudes hacia otras personas, convencerlos de cosas con las que normalmente no estarían de acuerdo, y mucho más. Aunque es una habilidad muy eficaz y resulta de vital importancia para quienes participan en el juego de tronos, existen ciertos límites; aquellos que no tienen ningún interés por las intrigas o la conversación no pueden ser sometidos por la fuerza a tus intentos de manipulación. Pero quienes desean algo de ti o se muestran dispuestos a dejarse convencer son víctimas propicias de la Persuasión. La Persuasión es una de las habilidades que más importancia tienen a la hora de participar en una intriga. Posee muchas expresiones, diferenciadas entre sí por las técnicas empleadas y el objetivo perseguido. Negociar representa un intercambio de servicios o artículos por algo de valor similar, mientras que Cautivar sirve para granjearse amistades y entablar alianzas. Provocar puede obligar a un objetivo a actuar para así evitar uno mismo ser censurado, mientras que Incitar se utiliza para empeorar la opinión que tiene el objetivo de alguna otra persona. Todos los métodos y usos completos de la habilidad Persuasión se explican con detalle en el CAPÍTULO 8: INTRIGA.',
                'description2' => 'No todas las situaciones de interpretación se dan en intrigas a gran escala; también hay encuentros menores que no tienen consecuencias duraderas. Para resolver uno de tales encuentros, debes hacer una tirada de Persuasión contra el valor pasivo de Voluntad de tu objetivo. Si la consigues, la actitud del objetivo hacia ti mejora en una categoría por cada grado de éxito obtenido. Por lo general basta con mejorar la actitud de un objetivo a Cordialidad para conseguir que realice una tarea menor. Sin embargo, los resultados no suelen durar demasiado, y la actitud del objetivo regresa a su categoría inicial al cabo de pocos minutos. En caso de fallar la tirada no podrá volver a intentarse sin comenzar una intriga, y un fallo crítico empeora la actitud del objetivo con una categoría. Las reducciones de la actitud son más duraderas y se mantienen hasta que te enfrentes al objetivo en una intriga para restaurar su actitud.',
                'stat_id' => 14
            ],
            [
                'name' => 'Negociar',
                'action' => 'Ninguna',
                'description' => 'La Persuasión es la capacidad de manipular las emociones y creencias de otros. Con esta habilidad puedes alterar el modo en que te ven los demás, moldear sus actitudes hacia otras personas, convencerlos de cosas con las que normalmente no estarían de acuerdo, y mucho más. Aunque es una habilidad muy eficaz y resulta de vital importancia para quienes participan en el juego de tronos, existen ciertos límites; aquellos que no tienen ningún interés por las intrigas o la conversación no pueden ser sometidos por la fuerza a tus intentos de manipulación. Pero quienes desean algo de ti o se muestran dispuestos a dejarse convencer son víctimas propicias de la Persuasión. La Persuasión es una de las habilidades que más importancia tienen a la hora de participar en una intriga. Posee muchas expresiones, diferenciadas entre sí por las técnicas empleadas y el objetivo perseguido. Negociar representa un intercambio de servicios o artículos por algo de valor similar, mientras que Cautivar sirve para granjearse amistades y entablar alianzas. Provocar puede obligar a un objetivo a actuar para así evitar uno mismo ser censurado, mientras que Incitar se utiliza para empeorar la opinión que tiene el objetivo de alguna otra persona. Todos los métodos y usos completos de la habilidad Persuasión se explican con detalle en el CAPÍTULO 8: INTRIGA.',
                'description2' => 'No todas las situaciones de interpretación se dan en intrigas a gran escala; también hay encuentros menores que no tienen consecuencias duraderas. Para resolver uno de tales encuentros, debes hacer una tirada de Persuasión contra el valor pasivo de Voluntad de tu objetivo. Si la consigues, la actitud del objetivo hacia ti mejora en una categoría por cada grado de éxito obtenido. Por lo general basta con mejorar la actitud de un objetivo a Cordialidad para conseguir que realice una tarea menor. Sin embargo, los resultados no suelen durar demasiado, y la actitud del objetivo regresa a su categoría inicial al cabo de pocos minutos. En caso de fallar la tirada no podrá volver a intentarse sin comenzar una intriga, y un fallo crítico empeora la actitud del objetivo con una categoría. Las reducciones de la actitud son más duraderas y se mantienen hasta que te enfrentes al objetivo en una intriga para restaurar su actitud.',
                'stat_id' => 14
            ],
            [
                'name' => 'Provocar',
                'action' => 'Ninguna',
                'description' => 'La Persuasión es la capacidad de manipular las emociones y creencias de otros. Con esta habilidad puedes alterar el modo en que te ven los demás, moldear sus actitudes hacia otras personas, convencerlos de cosas con las que normalmente no estarían de acuerdo, y mucho más. Aunque es una habilidad muy eficaz y resulta de vital importancia para quienes participan en el juego de tronos, existen ciertos límites; aquellos que no tienen ningún interés por las intrigas o la conversación no pueden ser sometidos por la fuerza a tus intentos de manipulación. Pero quienes desean algo de ti o se muestran dispuestos a dejarse convencer son víctimas propicias de la Persuasión. La Persuasión es una de las habilidades que más importancia tienen a la hora de participar en una intriga. Posee muchas expresiones, diferenciadas entre sí por las técnicas empleadas y el objetivo perseguido. Negociar representa un intercambio de servicios o artículos por algo de valor similar, mientras que Cautivar sirve para granjearse amistades y entablar alianzas. Provocar puede obligar a un objetivo a actuar para así evitar uno mismo ser censurado, mientras que Incitar se utiliza para empeorar la opinión que tiene el objetivo de alguna otra persona. Todos los métodos y usos completos de la habilidad Persuasión se explican con detalle en el CAPÍTULO 8: INTRIGA.',
                'description2' => 'No todas las situaciones de interpretación se dan en intrigas a gran escala; también hay encuentros menores que no tienen consecuencias duraderas. Para resolver uno de tales encuentros, debes hacer una tirada de Persuasión contra el valor pasivo de Voluntad de tu objetivo. Si la consigues, la actitud del objetivo hacia ti mejora en una categoría por cada grado de éxito obtenido. Por lo general basta con mejorar la actitud de un objetivo a Cordialidad para conseguir que realice una tarea menor. Sin embargo, los resultados no suelen durar demasiado, y la actitud del objetivo regresa a su categoría inicial al cabo de pocos minutos. En caso de fallar la tirada no podrá volver a intentarse sin comenzar una intriga, y un fallo crítico empeora la actitud del objetivo con una categoría. Las reducciones de la actitud son más duraderas y se mantienen hasta que te enfrentes al objetivo en una intriga para restaurar su actitud.',
                'stat_id' => 14
            ],
            [
                'name' => 'Seducir',
                'action' => 'Ninguna',
                'description' => 'La Persuasión es la capacidad de manipular las emociones y creencias de otros. Con esta habilidad puedes alterar el modo en que te ven los demás, moldear sus actitudes hacia otras personas, convencerlos de cosas con las que normalmente no estarían de acuerdo, y mucho más. Aunque es una habilidad muy eficaz y resulta de vital importancia para quienes participan en el juego de tronos, existen ciertos límites; aquellos que no tienen ningún interés por las intrigas o la conversación no pueden ser sometidos por la fuerza a tus intentos de manipulación. Pero quienes desean algo de ti o se muestran dispuestos a dejarse convencer son víctimas propicias de la Persuasión. La Persuasión es una de las habilidades que más importancia tienen a la hora de participar en una intriga. Posee muchas expresiones, diferenciadas entre sí por las técnicas empleadas y el objetivo perseguido. Negociar representa un intercambio de servicios o artículos por algo de valor similar, mientras que Cautivar sirve para granjearse amistades y entablar alianzas. Provocar puede obligar a un objetivo a actuar para así evitar uno mismo ser censurado, mientras que Incitar se utiliza para empeorar la opinión que tiene el objetivo de alguna otra persona. Todos los métodos y usos completos de la habilidad Persuasión se explican con detalle en el CAPÍTULO 8: INTRIGA.',
                'description2' => 'No todas las situaciones de interpretación se dan en intrigas a gran escala; también hay encuentros menores que no tienen consecuencias duraderas. Para resolver uno de tales encuentros, debes hacer una tirada de Persuasión contra el valor pasivo de Voluntad de tu objetivo. Si la consigues, la actitud del objetivo hacia ti mejora en una categoría por cada grado de éxito obtenido. Por lo general basta con mejorar la actitud de un objetivo a Cordialidad para conseguir que realice una tarea menor. Sin embargo, los resultados no suelen durar demasiado, y la actitud del objetivo regresa a su categoría inicial al cabo de pocos minutos. En caso de fallar la tirada no podrá volver a intentarse sin comenzar una intriga, y un fallo crítico empeora la actitud del objetivo con una categoría. Las reducciones de la actitud son más duraderas y se mantienen hasta que te enfrentes al objetivo en una intriga para restaurar su actitud.',
                'stat_id' => 14
            ],


            // Picaresca
            // 55-57
            [
                'name' => 'Forzar Cerraduras',
                'action' => '1 minuto',
                'description' => 'Se puede hacer una tirada de Picaresca para forzar el mecanismo de una cerradura. La dificultad de esta tirada depende de la calidad de la cerradura; para las normales es MODERADA (9), para las buenas es COMPLICADA (12) y para las de excelente factura es DIFÍCIL (15) o incluso superior. Una tirada con éxito permite al personaje abrir la cerradura; cada grado de éxito adicional reduce el tiempo invertido en 10 segundos. Si el personaje falla la tirada no habrá conseguido abrir la cerradura, pero podrá intentarlo otra vez. Sin embargo, si comete un fallo crítico se verá abrumado por la complejidad del mecanismo y no podrá volver a intentarlo hasta haber adquirido otro dado de bonificación en esta especialidad. Para forzar una cerradura es preciso tener las herramientas adecuadas. Si no es así, el personaje recibe uno o varios dados de penalización (dependiendo de la carencia). Por ejemplo, unas herramientas improvisadas podrían imponer una penalización de -1D, pero si se intenta forzar una cerradura sin ningún tipo de herramienta la penalización sería de -5D.',
                'stat_id' => 15
            ],
            [
                'name' => 'Juego de Manos',
                'action' => 'Acción Menor',
                'description' => 'Esta especialidad consiste en la realización de trucos simples destinados a divertir o distraer a otra persona. Se puede sustituir la tirada de Ingenio por una de Picaresca para distraer a un enemigo en combate usando esta especialidad. También puedes escamotear objetos pequeños (como un anillo) sin que nadie se percate. Para ello tienes que hacer una tirada de Juegos de manos contra el valor pasivo de Percepción del objetivo. Un personaje que posea esta especialidad también conoce trucos de magia sencillos (como sacar monedas de la oreja de los demás). Este uso requiere una tirada de RUTINA (6) si se trata de Objetos pequeños, por ejemplo monedas. Para realizar trucos con Objetos más grandes (como cuchillos) la dificultad de la tirada asciende a MODERADA (9) o puede que más, dependiendo del tamaño de los Objetos manipulados. Por último, también puedes valerte de esta especialidad para ocultar objetos en tu persona (dagas, venenos, pergaminos y demás). Si alguien te registra, para encontrar el objeto escondido deberá realizar una tirada de Percepción e igualar o superar el resultado de la tirada de Picaresca que hiciste para ocultarlo. A discreción del Narrador, puedes hacer una tirada de Juegos de manos en lugar de otra de Engaño en una intriga para emplear tu destreza manual en un intento por engañar o distraer a tu adversario, hacer trampas en juegos de azar o engatusarlos en un juego de trile.',
                'stat_id' => 15
            ],
            [
                'name' => 'Robar',
                'action' => 'Acción Menor',
                'description' => 'Puedes usar la especialidad Robar para vaciar los bolsillos o cortar las bolsas de monedas que llevan al cinto los incautos. Si intentas robar a un personaje desprevenido, debes realizar una tirada de Picaresca contra su valor pasivo de Percepción; si tienes éxito, logras llevarte su monedero sin que repare en el robo. Sin embargo, el objetivo tiene derecho a una tirada MODERADA (9) de Percepción cada asalto para darse cuenta de que le han aliviado la carga. Cada grado de éxito adicional obtenido en la tirada te concede un asalto más de tiempo antes de que el Objetivo pueda empezar a hacer estas tiradas de Percepción para descubrir que se la has jugado.',
                'stat_id' => 15
            ],


            // Puntería
            // 58-61
            [
                'name' => 'Armas arrojadizas',
                'action' => 'Acción Menor o Mayor',
                'description' => 'Para atacar en combate debes hacer una tirada de Puntería contra la Defensa en combate de tu adversario. Si la consigues le infligirás un daño igual al daño del arma multiplicado por los grados de éxito obtenidos en la tirada. El daño del arma depende del arma en cuestión y de sus propiedades especiales. En el CAPÍTULO 9: COMBATE se explica con detalle la resolución de ataques y sus consecuencias.',
                'stat_id' => 16
            ],
            [
                'name' => 'Arcos',
                'action' => 'Acción Menor o Mayor',
                'description' => 'Para atacar en combate debes hacer una tirada de Puntería contra la Defensa en combate de tu adversario. Si la consigues le infligirás un daño igual al daño del arma multiplicado por los grados de éxito obtenidos en la tirada. El daño del arma depende del arma en cuestión y de sus propiedades especiales. En el CAPÍTULO 9: COMBATE se explica con detalle la resolución de ataques y sus consecuencias.',
                'stat_id' => 16
            ],
            [
                'name' => 'Asedio',
                'action' => 'Acción Menor o Mayor',
                'description' => 'Para atacar en combate debes hacer una tirada de Puntería contra la Defensa en combate de tu adversario. Si la consigues le infligirás un daño igual al daño del arma multiplicado por los grados de éxito obtenidos en la tirada. El daño del arma depende del arma en cuestión y de sus propiedades especiales. En el CAPÍTULO 9: COMBATE se explica con detalle la resolución de ataques y sus consecuencias.',
                'stat_id' => 16
            ],
            [
                'name' => 'Ballestas',
                'action' => 'Acción Menor o Mayor',
                'description' => 'Para atacar en combate debes hacer una tirada de Puntería contra la Defensa en combate de tu adversario. Si la consigues le infligirás un daño igual al daño del arma multiplicado por los grados de éxito obtenidos en la tirada. El daño del arma depende del arma en cuestión y de sus propiedades especiales. En el CAPÍTULO 9: COMBATE se explica con detalle la resolución de ataques y sus consecuencias.',
                'stat_id' => 16
            ],


            // Supervivencia
            // 62-65
            [
                'name' => 'Cazar',
                'action' => 'Varía',
                'description' => 'La Supervivencia puede utilizarse para cazar animales. Esto sólo puede hacerse en zonas habitadas por animales salvajes. La dificultad de la tirada depende del tiempo que dedique el personaje a la cacería, así como del tipo de terreno y de la estación. Un éxito en la tirada proporciona comida suficiente para una persona durante tantos días como grados de éxito obtenidos. Si el personaje cuenta con sabuesos de caza o un ave de presa (un halcón, por ejemplo), recibe +1D a la tirada de Supervivencia.',
                'table' => 'Dificultad/Descripción|Fácil (3)/1 semana de cacería|Rutina (6)/4 días de cacería|Moderada (9)/2 días de cacería|Complicada (12)/1 día de cacería|Difícil (15)/12 horas de cacería|Muy Difícil (18)/6 horas de cacería|Heroica (21+)/1 hora de cacería|-5/Bosque frondoso|-5/Primavera|-2/Verano|-5/Otoño|+10/Invierno|+5/Plaga o sequía|+10/Páramo',
                'stat_id' => 17
            ],
            [
                'name' => 'Forrajear',
                'action' => 'Varía',
                'description' => 'La especialidad Forrajear permite realizar una tirada de Supervivencia para buscar comida y agua para uno mismo y sus compañeros. Esto sólo puede en zonas que contengan comida. La dificultad de la tirada depende del tiempo que dedique el personaje a la búsqueda, así como del tipo de terreno y de la estación. Un éxito en la tirada proporciona comida suficiente para una persona durante tantos días como grados de éxito obtenidos.',
                'table' => 'Dificultad/Descripción|Fácil (3)/12 horas de búsqueda|Rutina (6)/8 horas de búsqueda|Moderada (9)/4 horas de búsqueda|Complicada (12)/2 horas de búsqueda|Difícil (15)/1 hora de búsqueda|Muy Difícil (18)/30 minutos de búsqueda|-5/Bosque frondoso|-5/Primavera|-2/Verano|-5/Otoño|+10/Invierno|+5/Plaga o sequía|+10/Páramo',
                'stat_id' => 17
            ],
            [
                'name' => 'Orientarse',
                'action' => 'Una cada 4 horas',
                'description' => 'La Supervivencia también es esencial para moverse en plena naturaleza sin perderse, La dificultad básica es MODERADA (9), modificada por la hora del día, el clima y el terreno. Un éxito en la tirada indica que el personaje avanza en la dirección deseada durante tantas horas como los grados de éxito obtenidos multiplicados por cuatro; en todo este tiempo no necesitará hacer ninguna tirada adicional de Supervivencia. Si el personaje falla la tirada, se desvía hacia la derecha o la izquierda. Por ejemplo, si el personaje viaja hacia el norte y falla la tirada de Supervivencia, podría caminar en dirección nordeste durante cuatro horas. Un fallo crítico hace que el personaje se desoriente por completo y viaje en dilección opuesta a la deseada. Si en algún momento se producen cambios en el clima o el terreno y el personaje se ha perdido, puede realizar una nueva tirada de Supervivencia. Los modificadores son acumulativos.',
                'table' => 'Dificultad/Descripción|+0/Día|+0/Noche con luna|+2/Noche con luna parcial|+5/Noche sin luna|+5/Nublado|+2/Lluvia leve|+5/Lluvia intensa|+5/Nevada leve|+10/Nevada intensa|+0/Llanura o desierto|+2/Colinas|+5/Montañas|+5/Bosque disperso|+10/Bosque denso',
                'stat_id' => 17
            ],
            [
                'name' => 'Rastrear',
                'action' => 'Una cada 2 horas (ver texto)',
                'description' => 'Por último, también se puede hacer una tirada de Supervivencia para seguir rastros. Sin embargo, antes de seguirlos hay que encontrarlos, para lo que se requiere una tirada de Percepción. La dificultad básica de esta tirada es MODERADA (9), pero puede modificarse en función de la iluminación, el clima y la superficie en la que se han dejado las huellas. Una vez encontrado el rastro, el personaje puede tratar de seguirlo mediante una tirada de Supervivencia contra la misma dificultad fijada para la de Percepción. Si la consigue podrá seguir el rastro durante dos horas por cada grado de éxito obtenido, y no tendrá que hacer más tiradas en este periodo. Si falla la tirada habrá perdido dos horas, pero no el rastro. Si el personaje obtiene un fallo crítico entonces sí que habrá perdido el rastro por completo, Además, si en algún momento se producen cambios en el clima, la iluminación o el terreno, el personaje deberá realizar una nueva tirada de Supervivencia para seguir el rastro. Es posible obtener información de unas huellas. Para ello hay que efectuar una tirada de Supervivencia como si se fuera a seguir el rastro. Si se consigue, el personaje sabrá cuántas huellas distintas conforman el rastro. Cada grado de éxito adicional revela un aspecto importante del mismo, como el tamaño aproximado de la presa, la velocidad a la que se desplaza, con cuántos animales viajan, si están siendo perseguidos, cuánto hace que pasaron por el lugar, etc.',
                'table' => 'Dificultad/Descripción|+0/Día|+2/Noche con luna|+5/Noche con luna parcial o a la luz de una antorcha|+10/Noche sin luna|+5/Nublado|+2/Lluvia leve|+5/Lluvia intensa|+5/Nevada leve|+10/Nevada intensa|-2/Pedregal, ramas y escombros|-1/Despejado, pero acaba de caer una lluvia leve|-2/Despejado, pero acaba de caer una lluvia intensa|-2/Despejado, pero acaba de caer una nevada leve|-3/Despejado, pero acaba de caer una nevada intensa|-5/Tierra blanda|+0/Tierra dura|+5/Terreno rocoso|+10/Vado de río|+20/Lago',
                'stat_id' => 17
            ],


            // Trato animal
            // 66-69
            [
                'name' => 'Adiestrar',
                'action' => 'Acción especial (ver texto)',
                'description' => 'Puedes usar el Trato animal para enseñar a un animal a realizar tareas, desde los trucos más sencillos hasta los movimientos más complejos (por ejemplo, adiestrarlo para la guerra). El adiestramiento de animales es una acción prolongada. Debes tener éxito en tantas tiradas como la Voluntad del animal menos su Ingenio (mínimo 1 tirada), a una tirada por semana de adiestramiento (suponiendo que inviertas varias horas al día en enseñar al animal). La dificultad de la tirada depende de la Voluntad del animal, según se indica en la siguiente tabla.',
                'table' => 'Voluntad/Dificultad|1/Rutina (6)|2/Moderada (9)|3/Complicada (12)|4/Difícil (15)|5/Muy difícil (18)',
                'description2' => 'Los trucos y tareas más comunes incluyen recuperar objetos, proteger al amo, atacar, trabajar, llevar un jinete y demás, pero siempre dentro de lo razonable. Adiestrar a un animal para la guerra es bastante más laborioso y requiere una semana adicional para inculcarle la disciplina adecuada.',
                'stat_id' => 18
            ],
            [
                'name' => 'Cautivar',
                'action' => '1 minuto',
                'description' => 'Quienes pasan mucho tiempo rodeados de animales se sienten cómodos en su presencia. Estos individuos se sienten tan serenos que pueden mantener la calma y aprovechar su gran experiencia cuando se topan con criaturas salvajes. La primera vez que te encuentres con un animal salvaje, puedes hacer una tirada de Trato animal para apaciguar a la bestia. La dificultad de esta tirada es igual al valor pasivo de Voluntad del animal. Si superas esta tirada, mejoras su actitud con un paso por cada grado de éxito (para más detalles sobre la actitud, consulta el CAPÍTULO 8: INTRIGA). Por lo general, los animales salvajes sienten Aversión hacia los humanos, mientras que los animales domesticados muestran Indiferencia. La actitud de un animal debe rebajarse como mínimo hasta Indiferencia para que permita ser manejado (usar el Trato animal para cabalgar una montura que no esté familiarizada con el jinete es una excepción a esta regla). Después de hacer una tirada de Trato animal se puede volver a intentar, siempre y cuando el animal se quede el tiempo suficiente para realizar otro intento.',
                'stat_id' => 18
            ],
            [
                'name' => 'Conducir',
                'action' => 'Acción Mayor',
                'description' => 'Siempre que debas controlar un vehículo tirado por animales, como una carreta, carromato o carruaje, puedes hacer una tirada de Trato animal. Si el animal de tiro se siente cómodo y no está herido ni asustado, la tirada se considera AUTOMÁTICA (O). Sin embargo, si el animal se espanta o recibe una herida en combate, deberás conseguir una tirada de Trato animal para recuperar el control. La dificultad de esta tirada es igual al valor pasivo de Voluntad del animal. Si la consigues, podrás dirigirlo de la manera habitual; pero si la fallas, el animal se alejará a toda velocidad del origen de su temor o sus heridas. Se puede volver a intentar esta tirada en asaltos subsiguientes.',
                'stat_id' => 18
            ],
            [
                'name' => 'Montar',
                'action' => 'Acción Menor',
                'description' => 'Para cabalgar un animal adiestrado como montura se requiere una tirada AUTOMÁTICA (O) de Trato animal. Si intentas montar a un animal que no se muestra dispuesto a ello (es decir, que tenga una actitud de Rechazo o peor), deberás superar una tirada de Trato animal con una dificultad igual al valor pasivo de Voluntad del animal. Si la consigues, obtendrás el control del animal durante tantos asaltos como tu rango de Trato animal multiplicado por tu grado de éxito. Con tres tiradas superadas de forma consecutiva habrás domado al animal por completo y te llevará sin necesidad de más tiradas. Un fallo en la tirada hace que el animal no se mueva en todo el asalto, mientras que con un fallo crítico la bestia se encabrita y te tira al suelo, en cuyo caso aterrizas a 1d6/2 metros de distancia y recibes 1 punto de daño (que ignora PR) por cada metro recorrido. Si vas a montar un animal en combate, deberás emplear una acción menor (si está adiestrado para la guerra) o una acción mayor (si no lo está) para no perder el control de tu montura. Si el animal se asusta o sufre daños, deberás utilizar una acción mayor para realizar una tirada y controlarlo; la dificultad de esta tirada es igual al valor pasivo de Voluntad de la montura. Si la superas, logras amansar al animal lo suficiente para seguir llevando a cabo acciones normales. Si fallas la tirada, el animal huye a toda velocidad del origen de su temor o sus heridas; si cometes un fallo crítico, aterrizas a 1d6/2 metros de distancia y recibes 1 punto de daño (que ignora PR) por cada metro recorrido. También puedes usar la especialidad Cautivar para mejorar la actitud que tenga un animal hacia ti como lo harías al toparte con una bestia salvaje.',
                'stat_id' => 18
            ],


            // Voluntad
            // 70-72
            [
                'name' => 'Coordinación',
                'action' => 'Acción Mayor',
                'description' => 'Se puede hacer una tirada de Voluntad para mejorar la ayuda prestada por los aliados para la consecución de una tarea. Normalmente, cuando un aliado apoya a un personaje le concede una bonificación igual a la mitad de rango en la habilidad pertinente. Si coordinas sus esfuerzos, puedes añadir a su resultado un valor igual a tu rango de Voluntad multiplicado por los grados de éxito obtenidos en tu tirada. La dificultad de esta tirada es MODERADA (9) si no es de combate, y COMPLICADA (12) si es de combate. El uso de la Coordinación requiere un excelente sentido de la oportunidad. Para utilizar esta función de la Voluntad debes jugar tu turno después del personaje que está prestando su ayuda, pero antes del personaje que vaya a realizar la tirada de habilidad.',
                'stat_id' => 19
            ],
            [
                'name' => 'Coraje',
                'action' => 'Acción Gratuita',
                'description' => 'Normalmente eres libre de interpretar a tu PJ como creas conveniente en función de su personalidad y de la situación, No obstante, habrá ocasiones en las que tu personaje presenciará sucesos espantosos, imposibles o verdaderamente aterradores, Siempre que se enfrente a la magia, la muerte de un amigo, una circunstancia desesperada, una criatura sobrenatural o cualquier otra experiencia abrumadora, el Narrador puede pedirte una tirada de Voluntad. La dificultad de esta tirada depende de la situación: si los Otros han surgido del hielo y la nieve, podría ser MODERADA (9), mientras que batirse en duelo contra un famoso caballero tal vez sólo requiriese una tirada FÁCIL (3). Si superas esta tirada, habrás logrado controlar tu miedo; pero si la fallas, sufrirás una penalización de -1D a todas las tiradas relacionadas con el objeto de tu temor. Al principio de cada uno de tus turnos puedes intentar sobreponerte al miedo mediante otra tirada de Voluntad (aplicando la especialidad Coraje). Si fallas una segunda tirada se te impondrá otro -1D; esto es señal de que lo más conveniente es salir corriendo hasta que se te pase el miedo. Nota para el Narrador: Es mejor dejar que sean los jugadores quienes decidan las reacciones de sus personajes ante amenazas y situaciones de pánico, siempre basándose en la personalidad de sus PJ. Las tiradas de Coraje sólo deben usarse como herramienta para facilitar la interpretación o para modificar las circunstancias como consideres oportuno.',
                'stat_id' => 19
            ],
            [
                'name' => 'Dedicación',
                'action' => 'Acción Mayor',
                'description' => 'La Voluntad también puede usarse para resistir tentaciones y mantenerse fiel a los ideales. Cuando participes en una intriga, puedes intentar una tirada de Voluntad empleando una acción de cerrarse en banda para reemplazar tu Defensa en intrigas por el resultado de dicha tirada de Voluntad.',
                'stat_id' => 19
            ],
        ];

        foreach ($specialties as $specialty) {
            Specialty::create($specialty);
        }
    }
}
