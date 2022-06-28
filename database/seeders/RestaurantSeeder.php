<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->upsert([
            [
                'id' => 1,
                'name' => 'Martuca',
                'web' => 'https://www.martuca.cl/',
                'phone_number' => '+569 12345678',
                'menu' => 'https://www.martuca.cl/#jPanelMenu',
                'city_id' => 1,
                'establishment_id' => 5,
                'food_id' => 3,
                'environment_id' => 1,
                'price_id' => 2,
                'description' => 'La mejor sangucheria chilena. ¡Ven a conocernos!',
                'img' => 'img/202206270507fuente-de-soda-martuca.jpg'
            ],
            [
                'id' => 2,
                'name' => 'Pizzeria Tiramisú',
                'web' => 'https://www.tiramisu.cl/',
                'phone_number' => '+569 12345678',
                'menu' => 'https://www.tiramisu.cl/productos.php',
                'city_id' => 1,
                'establishment_id' => 3,
                'food_id' => 4,
                'environment_id' => 2,
                'price_id' => 1,
                'description' => 'Tiramisú nace en 2001, a partir de la idea de integrar el concepto simple y esencial de la cocina italiana tradicional y rústica con un ambiente acogedor y democrático.',
                'img' => 'img/202206270507pizzeria-tiramisu.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Puerto del Alto',
                'web' => 'https://www.puertodelalto.cl/',
                'phone_number' => '+569 12345678',
                'menu' => 'https://linktr.ee/puertodelalto',
                'city_id' => 1,
                'establishment_id' => 6,
                'food_id' => 3,
                'environment_id' => 1,
                'price_id' => 3,
                'description' => 'Puerto del alto es una experiencia gastronómica donde podrás hacer un recorrido por los platos más destacados de la gastronomía chilena. Aquí, rescatamos la esencia del mar que nos acompaña de norte a sur, con la picardía y sensualidad del marisco, y el esfuerzo y tenacidad del pescador.',
                'img' => 'img/202206270508orioneat-prod_2YGXxkGaYHJGFqAaa-foto1.jpg'
            ],
            [
                'id' => 4,
                'name' => 'Giratorio Restaurant',
                'web' => 'https://www.giratorio.cl/',
                'phone_number' => '+569 42473940',
                'menu' => 'https://www.giratorio.cl/carta/index.html',
                'city_id' => 1,
                'establishment_id' => 6,
                'food_id' => 6,
                'environment_id' => 1,
                'price_id' => 1,
                'description' => 'El local abrió en 1981, el mismo año que la Torre Santa María. El giro en 360 grados se produce gracias a tres motores eléctricos, ubicados bajo el piso del recinto. Por mas de 35 años Giratorio Restaurant, entrega una experiencia gastronómica de 360 grados en 1 hora y 25 minutos aproximadamente. Un imperdible para todo turista extranjero y para el público nacional.',
                'img' => 'img/202206270508Restaurante_Giratorio_chefandhotel_PRINCIPAL_INTERIOR_f3fd54b30a72637be9a1c44902350b23.jpg'
            ],
            [
                'id' => 5,
                'name' => 'Palacio Danubio Azul',
                'web' => 'https://danubioazul.cl/',
                'phone_number' => '+569 42473940',
                'menu' => 'https://danubioazul.cl/carta/',
                'city_id' => 1,
                'establishment_id' => 6,
                'food_id' => 1,
                'environment_id' => 1,
                'price_id' => 1,
                'description' => 'Con mas de 62 años de prestigioso liderazgo, Palacio Danubio Azul es una visita imperdible en la ciudad de Santiago. Su ambientación vanguardista evoca con elegancia la milenaria cultura china. Una plácida terraza, que se ha convertido en la mas estilosa del privilegiado barrio El Golf, donde se encuentra.',
                'img' => 'img/202206270505palacio.jpeg'
            ],
            [
                'id' => 6,
                'name' => 'Milanos Pizza',
                'web' => 'https://www.milanospizza.cl/',
                'phone_number' => '+569 42473940',
                'menu' => 'https://www.milanospizza.cl/',
                'city_id' => 1,
                'establishment_id' => 5,
                'food_id' => 4,
                'environment_id' => 1,
                'price_id' => 3,
                'description' => 'Un proyecto familiar que comenzó en Australia y desde 2012 se situó en el corazón de una ciudad, protagonista de los momentos dorados en el centro de Santiago.',
                'img' => 'img/nuestra-florentino-te.jpg'
            ],
            [
                'id' => 7,
                'name' => 'Restaurant Oriental',
                'web' => 'https://www.restaurantoriental.cl/',
                'phone_number' => '+569 42473940',
                'menu' => 'https://www.restaurantoriental.cl/pedirl',
                'city_id' => 1,
                'establishment_id' => 6,
                'food_id' => 1,
                'environment_id' => 1,
                'price_id' => 2,
                'description' => 'Oriental, que ofrece una gran variedad de platos de la cocina china cantonesa, carnes, pescados.',
                'img' => 'img/oriental.jpg'
            ],
            
        ],['id'],['name'],['web'],['phone_number'],['menu'],['city_id'],['establishment_id'],['food_id'],['environment_id'],['price_id'],['description'],['img']);
    }
}
