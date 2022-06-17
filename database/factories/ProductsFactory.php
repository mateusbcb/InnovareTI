<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $image =
        [
            0 => [
                'https://static.netshoes.com.br/produtos/tenis-puma-runner-v2-sn-bdp/36/2I3-1288-036/2I3-1288-036_zoom1.jpg?ts=1618257570&',
            ],
            1 => [
                'https://t-static.dafiti.com.br/yvqRbysWD01-C2p2bMsEH5v96nY=/fit-in/430x623/static.dafiti.com.br/p/evoltenn-tênis-evoltenn-easy-style-preto-amarelo-1382-3414617-1-zoom.jpg',
            ],
            2 => [
                'https://static.lojadointer.com.br/produtos/tenis-adidas-breaknet-brilho-feminino/20/NQQ-6959-020/NQQ-6959-020_zoom1.jpg?',
            ],
            3 => [
                'https://www.thauro.com.br/media/catalog/product/cache/1/image/a4811146157e663113d10d64ad7ef273/r/e/relo_gio_doxa_sub200_aquamarine_diver_200m_799.10.241.10_caixa_42mm_capa_thauro_relogios.jpeg',
            ],
            4 => [
                'https://a-static.mlcdn.com.br/1500x1500/relogio-de-pulso-digital-led-com-pulseira-de-silicone-unissex-adulto-infantil-esportivo-sobrinhos/sobrinhosmodafeminina/2241-1045/b969f870544097635a9a7cd8b877261f.jpg',
            ],
            5 => [
                'https://m.media-amazon.com/images/I/61QdGH7IX9L._AC_SX679_.jpg',
            ],
            6 => [
                'https://imgs.extra.com.br/2542866/1xg.jpg'
            ]
        ];

        return [
            'sku' => $this->faker->ean13(),
            'name' => 'Produto '.$this->faker->unique()->numberBetween(1, 40),
            'price' => $this->faker->numberBetween(9, 999).'.'.$this->faker->numberBetween(00, 99),
            'promotion' => $this->faker->numberBetween(1, 2),
            'description'=> $this->faker->text(),
            'images' => json_encode($this->faker->randomElement($image)),
        ];
    }
}
