<?php

namespace Database\Seeders;

use App\Models\Stat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stats = [
            [
                'name' => 'Agilidad',
                'description' => 'La Agilidad mide la destreza, habilidad, reflejos y flexibilidad del personaje. En ciertos aspectos describe lo cómodo que se siente con su cuerpo, lo bien que controla sus movimientos y el modo en que reacciona a su entorno.'
            ],
            [
                'name' => 'Brío',
                'description' => 'El Brío describe el grado de entrenamiento, la aplicación de tu condición fisica, coordinación, formación y fuerza bruta. Es una habilidad muy importante, pues determina la distancia a la que puedes saltar, la velocidad a la que puedes correr, la rapidez de tus movimientos y la fuerza de tus brazos y piernas.'
            ],
            [
                'name' => 'Combate C/C',
                'description' => 'El Combate cuerpo a cuerpo define tu capacidad para blandir armas en combate cuerpo a cuerpo. Siempre que quieras atacar sin armas o utilizar un arma de mano debes realizar una tirada de Combate cuerpo a cuerpo.'
            ],
            [
                'name' => 'Conocimiento',
                'description' => 'El Conocimiento describe la comprensión y consciencia general que tiene el personaje del mundo en el que vive. Representa un amplio espectro que va desde su historia hasta la agricultura, pasando por la economía, la política y muchas otras materias.'
            ],
            [
                'name' => 'Constitución',
                'description' => 'La Constitución mide tu bienestar fisico, tu salud y tu vigor. Determina el daño que puedes recibir, así como la rapidez con la que te recuperas de tus heridas.'
            ],
            [
                'name' => 'Curación',
                'description' => 'La Curación representa el conocimiento y la práctica de los distintos saberes médicos del mundo. Poseer rangos en esta habilidad refleja la comprensión de la salud y el restablecimiento de heridas; los rangos más elevados corresponden a talentos que sólo poseen los más insignes maestres.'
            ],
            [
                'name' => 'Discreción',
                'description' => 'La Discreción representa tu capacidad para deslizarte en silencio y sin ser visto. Cuando debas desplazarte sin que adviertan tu presencia, deberás hacer una tirada de Discreción.'
            ],
            [
                'name' => 'Engaño',
                'description' => 'El Engaño mide la efectividad de tu doble caras tu capacidad para mentir y engañar. Esta habilidad se utiliza para ocultar tus verdaderas intenciones y mantener en secreto tus objetivos. También se usa para hacerte pasar por otra persona, fingiendo un acento distinto o disfrazándote de manera eficaz.'
            ],
            [
                'name' => 'Estatus',
                'description' => 'El Estatus describe las circunstancias de tu nacimiento y los conocimientos que dichas circunstancias te han proporcionado. Cuanto mayor sea el rango de esta habilidad, más posibilidades tendrás de reconocer emblemas heráldicos, mejor será tu reputación y mayor tu capacidad para administrar tus tierras y a tus vasallos.'
            ],
            [
                'name' => 'Guerra',
                'description' => 'La habilidad de Guerra describe el talento de un personaje para desenvolverse en el campo de batalla, desde su capacidad para impartir órdenes y sus dotes de estratega para liderar ejércitos hasta sus conocimientos tácticos para librar pequeñas escaramuzas.'
            ],
            [
                'name' => 'Idioma',
                'description' => 'El Idioma es la habilidad para comunicarse oralmente o, entre los más cultos, mediante la palabra escrita. El rango inicial en esta habilidad se aplica al conocimiento de la lengua común que se habla en todo Poniente. Al mejorar esta habilidad se puede incrementar el dominio de la Lengua común o bien aprender algún otro idioma.'
            ],
            [
                'name' => 'Ingenio',
                'description' => 'El Ingenio hace referencia a la inteligencia, el intelecto y la aplicación de los conocimientos del personaje. Normalmente se utiliza para recordar un detalle o instrucción importante, solucionar un enigma o resolver cualquier otro problema, como llevar a cabo una investigación o descifrar un código.'
            ],
            [
                'name' => 'Percepción',
                'description' => 'La Percepción es una medida de tu capacidad sensorial, de la rapidez con la que puedes reaccionar a los cambios que se produzcan en tu entorno y de tu habilidad para detectar mentiras y dobles sentidos para discernir la verdad. Siempre que quieras examinar tus alrededores o evaluar a otra persona deberás usar la Percepción.'
            ],
            [
                'name' => 'Persuasión',
                'description' => 'La Persuasión es la capacidad de manipular las emociones y creencias de los demás. Con esta habilidad puedes alterar el modo en que te ven los demás, moldear sus actitudes hacia otros, convencerlos de cosas con las que normalmente no estarían de acuerdo y mucho más.'
            ],
            [
                'name' => 'Picaresca',
                'description' => 'La Picaresca es una categoría genérica que engloba toda habilidad relacionada con actividades de latrocinio, como forzar cerraduras, hacer trucos de manos y el robo en general.'
            ],
            [
                'name' => 'Puntería',
                'description' => 'La Puntería representa tu destreza con armas a distancia, tu capacidad para usarlas apropiadamente y con precisión en combate. Siempre que quieras efectuar un ataque con un arma a distancia deberás realizar una tirada dc Puntería.'
            ],
            [
                'name' => 'Supervivencia',
                'description' => 'La Supervivencia es la capacidad de desenvolverse y sobrevivir en plena naturaleza cazando, buscando hierbas y siguiendo rastros sin perderse. Esta habilidad es muy importante para mucha gente, ya que la caza sigue siendo uno de los principales métodos para procurar alimento a la familia, especialmente en los confines más remotos de Poniente.'
            ],
            [
                'name' => 'Trato animal',
                'description' => 'El Trato animal engloba las diversas competencias y técnicas utilizadas para adiestrar, manejar y cuidar animales. Siempre que quieras recuperar el control de una montura desbocada, adiestrar a un perro guardián o entrenar cuervos mensajeros, tendrás que hacer una tirada de esta habilidad.'
            ],
            [
                'name' => 'Voluntad',
                'description' => 'La Voluntad es la fortaleza mental del personaje, y refleja su estado de salud mental y su cordura. Representa la capacidad de resistir el miedo ante una pavorosa exhibición de violencia o fenómeno sobrenatural, y también sirve de base para determinar la capacidad que tiene el personaje para no dejarse manipular por otros.'
            ]
        ];

        foreach ($stats as $stat) {
            Stat::create($stat);
        }
    }
}
