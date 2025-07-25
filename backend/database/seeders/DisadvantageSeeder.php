<?php

namespace Database\Seeders;

use App\Models\Disadvantage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DisadvantageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $disadvantages = [
            [
                'name' => 'Aficionado a la bebida',
                'description' => 'Tienes una grave adicción al alcohol. Recurres al alcohol cuando te sientes tenso o abrumado, y ahogas las penas en la bebida. Cuando te enfrentes a una situación problemática, deberás superar una tirada COMPLICADA(12) de Voluntad para no calmar tus nervios emborrachándote. Mientras te dure la borrachera, sufres un penalizador de -2 a todas las tiradas. Si estabas bebiendo junto a otras personas (por ejemplo, en una taberna), acabas como una cuba y sufres una penalización de -2D a todas las tiradas. Estas penalizaciones duran hasta que duermas la mona durante toda una noche. Cada hora posterior a la ingesta de alcohol puedes intenetar una tirada MODERADA(9) de Constitución para despejarte; si la consigues, reducirás la penalización en un -1 (o en -1D).'
            ],
            [
                'name' => 'Altivo',
                'description' => 'Tu sentido del decoro eclipsa tu compasión. Sufres una penalización de -1D a todas las tiradas de Percepción relacionadas con la Empatía. Cuando interactúes con alguien de rango inferior al tuyo o que exhiba una conducta poco apropiada (como una mujer con armadura, un bastardo o similares), tu actitud inicial deberá ser de Rechazo o peor.'
            ],
            [
                'name' => 'Amenazador',
                'description' => 'Irradias un aura amenazadora. Si tu primera tirada de Persuasión en una intriga no es para intimidar a tu objetivo, sufrirás una penalización de -2 a tu Defensa en intrigas hasta el final del encuentro. También sufres una penalización de -2D a todas las tiradas de Persuasión que realices para cautivar y seducir a alguien'
            ],
            [
                'name' => 'Arrogancia suprema',
                'description' => 'Tu arrogancia te ciega ante los evidentes peligros que te rodean. El resultado de tus tiradas de Percepción recibe una penalización igual a tu Estatus.'
            ],
            [
                'name' => 'Atormentado',
                'description' => 'Los recuerdos de tu pasado te angustian. Sufres una penalización de -1D a todas las tiradas de Percepción, pero durante el primer asalto de un combate puedes añadir la cantidad de dados de bonificacion que tengas en Memoria a los resultados de tus tiradas de Combate cuerpo a cuerpo.'
            ],
            [
                'name' => 'Bastardo',
                'description' => 'Has sido engendrado por la lujuria, y por tanto eres un hijo ilegítimo, estigma que deberás soportar hasta el fin de tus días. Ser hijo bastardo te impone una penalización de -1D a todas las tiradas de Persuasión que realices para interactuar con personajes de Estatus superior al tuyo. Tienes vedado el apellido de tu familia, y en su lugar has de adoptar otro en función de la región en la que hayas nacido.'
            ],
            [
                'name' => 'Cobarde',
                'description' => 'Eres un cobarde. Sufres una penalización de -1D a todas las tiradas que realices cuando participes en un combate o intriga. Puedes emplear una acción gratuita cada asalto para intentar una tirada COMPLICADA(12) de Voluntad que te permita hacer acopio de valor. Si la consigues, la penalización se anula y recibes una bonificación de +1B a todas las tiradas.'
            ],
            [
                'name' => 'Débil',
                'description' => 'Eres muy viejo (Sólo edad anciana o mayor). No puedes hacer tiradas de Agilidad, Brío, Combate cuerpo a cuerpo ni Puntería, pero recibes una bonificación de +1D para todas las tiradas de Ingenio y Conocimiento. Esta desventaja vale por 3 de los defectos obligatorios para jugadores de edad venerable.'
            ],
            [
                'name' => 'Defecto',
                'description' => 'Sufres alguna dolencia o debilidad. Cuando adquieras esta desventaja, elige una habilidad. Sufrirás una penalización de -1D a todas las tiradas relacionadas con la habilidad escogida. A la hora de calcular el valor pasivo de una habilidad defectuosa, se considera que ésta es 1 punto más baja. Por ejemplo, si tienes Percepción 4 y desventaja Defecto(Percepción), tu valor pasivo de Percepción sería 12 ([4-1]*4). También se deben reducir en 1 todas las características derivadas (como por ejemplo la Defensa en intrigas).'
            ],
            [
                'name' => 'Despreciable',
                'description' => 'Has cometido una atrocidad tan deleznable que tu nombre es despreciado a lo largo y ancho de los Siete Reinos. Cuando participes en una intriga, la actitud de tu adversario siempre será 1 categoría peor de lo normal. Además, sufres una penalización de -1D a todas las tiradas de Estatus.'
            ],
            [
                'name' => 'Deuda',
                'description' => 'Has contraído una deuda terrible. Estás endeudado hasta las cejas. Todo lo que compres te costará el doble del precio de venta (esto refleja tus escasos recursos).'
            ],
            [
                'name' => 'Enano',
                'description' => 'Tu estatura es anormalmente corta. Tu capacidad básica de Movimiento se reduce en -1 metro. Además, sufres una penalización de -1D a todas las tiradas de Persuasión que realices para Cautivar y Seducir.'
            ],
            [
                'name' => 'Enemigo jurado',
                'description' => 'Tienes un enemigo mortal. Te has granjeado la enemistad de un peligroso enemigo, un individuo que te odia a muerte (tanto si has hecho algo para merecerlo como si no). Los detalles concretos de esta desventaja se dejan a discreción del Narrador, pero sin duda tu enemigo jurado te acosará hasta que te enfrentes a él de forma definitiva.'
            ],
            [
                'name' => 'Enfermedad infantil',
                'description' => 'Adoleces de un deteriorado y frágil estado de salud, consecuencia de una enfermedad o dolencia que padeciste en tu infancia. Reduce tu Salud en 2 puntos.'
            ],
            [
                'name' => 'Enfermizo',
                'description' => 'Eres débil y caes enfermo con frecuencia. Sufres una penalización de -1D a las tiradas de Constitución que debas realizar para resistir los efectos de peligros ambientales y enfermedades.'
            ],
            [
                'name' => 'Estigma',
                'description' => 'Tienes una fea cicatriz o algún defecto físico en un lugar bien visible. Cuando tengas que hacer una tirada de Persuasión, deberás volver a tirar todos los dados en los que hayas sacado un 6 y quedarte con el resultado de las segundas tiradas.'
            ],
            [
                'name' => 'Eunuco',
                'description' => 'Te los han cortado (Sólo sexo masculino). Sufres una penalización de -1D a todas las tiradas de Persuasión, pero tus enemigos no podrán utilizar la especialidad Seducir para influir en ti. Tampoco puedes engendrar hijos, y por tanto nunca tendrás herederos.'
            ],
            [
                'name' => 'Honorable',
                'description' => 'Tu sentido del honor es intachable. Cuando hagas una tirada de Engaño, deberás volver a tirar todos los dados en los que hayas sacado un 6 y quedarte con el resultado de las segundas tiradas (aunque sean peores que los primeros).'
            ],
            [
                'name' => 'Inepto',
                'description' => 'Eres patoso y bastante burro. Cuando tengas que hacer una tirada de Agilidad, deberás volver a tirar todos los dados en los que hayas sacado un 6 y quedarte con el resultado de las segundas tiradas (aunque sean peores que los primeros).'
            ],
            [
                'name' => 'Ingenuo',
                'description' => 'Se te da fatal detectar engaños. Sufres una penalización de -3 a tu Defensa en intrigas contra tiradas de Engaño.'
            ],
            [
                'name' => 'Innoble',
                'description' => 'Tenes fama de traicionero y deshonroso. Sufres una penalización de -1D a todas las tiradas de Persuasión y Estatus.'
            ],    
            [
                'name' => 'Irascible',
                'description' => 'Tienes muy mal genio. Cuando tengas que hacer tiradas de Persuasión, la primera de ellas siempre deberá ser para Intimidar. Además, sufres una penalización de -2D a todas las tiradas de Persuasión realizadas para Seducir a alguien.'
            ],
            [
                'name' => 'Lascivo',
                'description' => 'Tienes una líbido insaciable que domina tus relaciones con los demás. Si tu primera tirada de Persuasión en una intriga no es para seducir a tu objetivo, sufrirás una penalización de -2 a tu Defensa en intrigas hasta el final del encuentro. También sufres una penalización de -2D a todas las tiradas de Persuasión que realices para cautivar a alguien.'
            ],
            [
                'name' => 'Locura cruel',
                'description' => 'Eres cruel, desalmado y careces de compasión o empatía. Sufres una penalización de -2D a todas las tiradas de Percepción relacionadas con la Empatía. Además, cuando participes en una intriga, la actitud de tu adversario siempre empeorará en 1 categoría si te reconoce.'
            ],
            [
                'name' => 'Mala salud',
                'description' => 'Tu salud siempre está resentida , ya sea por tus excesos o a causa de una constitución débil. Cuando tengas que hacer tiradas de Constitución para recuperarte de heridas leves o graves, el resultado de las mismas se reduce en 3.'
            ],
            [
                'name' => 'Maldito',
                'description' => 'Sufres una funesta maldición que influye en todo lo que haces. Siempre que vayas a gastar un punto de Destino, tira 1d6. Si sacas un 1, no tendrá efecto alguno y lo habrás perdido.'
            ],
            [
                'name' => 'Manía desagradable',
                'description' => 'Tienes un hábito poco común, una costumbre que incomoda a los demás. Si intentas utilizar tu Persuasión para Intimidar habiendo sido reconocido, recibes una bonificación de +1D. Sin embargo, para todos los demás usos de la Persuasión sufres una penalización de -1D.'
            ],
            [
                'name' => 'Miedo',
                'description' => 'Sientes un profundo temor por algo. Elige un objeto para tus temores: fuego, serpientes, lobos, mujeres, etc. Mientras estés en presencia de aquello a lo que temes, sufrirás una penalización de -1D a todas las tiradas. Cada asalto, tira 1d6 en tu propio turno. Si sacas un 6, podrás sobreponerte a tu miedo y anular esta penalización hasta el final del encuentro. El Narrador debe dar el visto bueno al Objeto de tus temores.'
            ],
            [
                'name' => 'Mudo',
                'description' => 'Ya sea de nacimiento o a causa de alguna herida sufrida, eres incapaz de hablar. Sufres una penalización de -2D a todas las tiradas que debas realizar en una intriga; sin embargo, tu mudez también impone a tus adversarios una penalización de -2D a todos sus intentos de averiguar tu actitud.'
            ],
            [
                'name' => 'Mutilado',
                'description' => 'Has perdido una extremidad en combate o en algún accidente. Sufres los efectos de la desventaja Estigma, y además pierdes el uso de una extremidad cualquiera. Si se trata de una pierna, tu capacidad de Movimiento se reduce a la mitad y además sufres una penalización de -1D a todas las tiradas de Brío. Si lo que has perdido es un brazo, no podrás empuñar armas de dos manos y sufrirás una penalización de -2D a todas las tiradas que requieran el uso de ambas manos.'
            ],
            [
                'name' => 'Olvidadizo',
                'description' => 'Tu mente se distrae y tienes problemas para recordar detalles insignificantes. Cuando hagas una tirada de Ingenio, deberás volver a tirar todos los dados en los que hayas sacado un 6 y quedarte con la segunda tirada (aunque sea peor que la primera).'
            ],
            [
                'name' => 'Proscrito',
                'description' => 'Has cometido o se te ha acusado de algún acto particularmente aborrecible, y debido a ello has sido expulsado de tus tierras. Sufres una penalización de -2D para todas tus tiradas de Estatus.'
            ],
            [
                'name' => 'Sentido impedido',
                'description' => 'Estás ciego o sordo. Cuando adquieras esta cualidad, elige entre ceguera o sordera. Fallarás automáticamente todas las tiradas de Percepción que dependan del sentido que tengas impedido. Además, tu capacidad de Movimiento se reduce en 1 metro.'
            ],
            [
                'name' => 'Tullido',
                'description' => 'Has sufrido una herida terrible o naciste con alguna deformidad. Reduce tu capacidad de Movimiento en 2 metros (hasta un minimo de 1 metro).'
            ],
        ];

        foreach ($disadvantages as $disadvantage) {
            Disadvantage::create($disadvantage);
        }
    }
}
