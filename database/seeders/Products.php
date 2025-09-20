<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'ThreeDogs Raças Pequenas',
                'price' => 100.00,
                'weight' => 10.1,
                'arquivo' => 'threedogs-rp.jpg',
                'description' => 'A Ração Three Dogs Original Frango, Carne e Arroz para Cães Adultos Raças Pequenas e Mini é um alimento seguro e moderno, sem aromatizantes e corantes artificiais que possui melhor custo benefício. Com uma receita rica em ingredientes de alta qualidade, que promovem o equilibrio nutricional, palatabilidade superior e digestibilidade que o cães precisam para viverem saudável e feliz.',
                'author' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Monello Raças Pequenas',
                'price' => 105.90,
                'weight' => 7.5,
                'arquivo' => 'monelo-rp.jpg',
                'description' => 'A Ração Seca Monello Frango para Cães Adultos Raças Pequenas é um alimento desenvolvido pensando nos cães adultos de raças pequenas, visando alcançar mais longevidade para eles. Mantém a formulação original, além de receber adição de MOS - manafoligossacarídeos, prebiótico e levedura de cerveja, agindo diretamente na saúde intestinal e ocasionando uma absorção excelente dos nutrientes. Possui formato de nuggets recheados, proporcionando refeições mais agradáveis e saborosas ao paladar do seu amiguinho.',
                'author' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'ThreeDogs Raças Médias e Grandes',
                'price' => 147.90,
                'weight' => 15.0,
                'arquivo' => 'threedogs-rm.jpg',
                'description' => 'A Ração Seca Three Dogs Super Premium Carne e Arroz para Cães Adultos Raças Médias e Grandes é um alimento rico em ingredientes de alta qualidade que oferecem todos os nutrientes essenciais para condicionar a qualidade de vida e longevidade dos pets. Elaborada especialmente para cães de porte médio e grande, possui carne fresca bovina em sua formulação, é de digestão fácil contribuindo para um alimento muito mais saboroso.',
                'author' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'Primocão Original',
                'price' => 167.90,
                'weight' => 20.0,
                'arquivo' => 'primocao-original.jpg',
                'description' => 'A Ração Seca Primocão Premium Original Carne e Frango para Cães Adultos de Raças Médias e Grandes é um alimento 100% completo e balanceado e possui um sabor irresistível. Contem proteínas de alta qualidade que contribuem para uma musculatura reforçada. Elaborada com fibras naturais e extrato de yucca que promovem a boa formação e a redução do odor das fezes.',
                'author' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'name' => 'Golden Raças Pequenas',
                'price' => 179.90,
                'weight' => 15.0,
                'arquivo' => 'golden-rp.jpg',
                'description' => 'A Ração Premier Golden Formula Cães Adultos Frango e Arroz Mini Bits é um alimento Premium Especial desenvolvido para cães adultos de pequeno porte. Os cães são essencialmente carnívoros e digerem muito melhor alimentos de origem animal. Apresenta grãos adequados para animais de pequeno porte, facilitando a mastigação. É um produto completo e visa, acima de tudo, proporcionar aos cães o nível ideal de todos os nutrientes que eles necessitam para uma vida longa e saudável.',
                'author' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
