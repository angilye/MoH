<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('pages')->insert([

            [

                'id' => 1,
                'selectLang' => 'FR',
                'title' => 'Arma 3',
                'parent' => 'arma3',
                'sousTitre' => '§§',
                'contend' => 'A remplir',

            ],

            [

                'id' => 2,
                'selectLang' => 'EN',
                'title' => 'arma3',
                'parent' => 'arma3',
                'sousTitre' => '§§',
                'contend' => 'A remplir',

            ],

            [

                'id' => 3,
                'selectLang' => 'FR',
                'title' => 'Warzone',
                'parent' => 'warzone',
                'sousTitre' => 'Le retour de <span>Red</span>Line ! ',
                'contend' => '
                                <br>
                                Basé sur Wasteland[wasteland.arma.su], le mod RedLine se veut plus teamplay, plus organisé; on quitte la survie pour entrer dans la guerre, la vraie ! 
                                <br><br>
                                Sans être un serveur Rôle-Play, l’équipe vise est une forte coopération entre joueurs. Que ça soit en infanterie ou en véhicule mais également avec les unités de support. Pour conquérir la map (et ainsi gagner de l’argent), il faut capturer les zones représentés par des villes, des bases militaires ou autres.
                                <br><br>
                                En attaques frontales ou en embuscades meurtrières, en s’infiltrant derrière les lignes ennemies, à vous de faire mal à l’adversaire. Chaque camp dispose d’une base sécurisée avec tout le matériel nécessaire.
                                <br><br>
                                Les missions aléatoires Wasteland sont également présentes, avec leurs lots de récompenses et de loots. L’équipe peut intervenir à tous moments via la faction indé grâce à “Zeus”. 
                                <br><br>
                                Teamplay,combat, fun… RedLine !
                                <br><br>
                            ',

            ],

            [

                'id' => 4,
                'selectLang' => 'EN',
                'title' => 'Warzone',
                'parent' => 'warzone',
                'sousTitre' => '§§',
                'contend' => 'A remplir',

            ],

            [

                'id' => 5,
                'selectLang' => 'FR',
                'title' => 'Annonce',
                'parent' => 'Acceuil',
                'sousTitre' => '',
                'contend' => '',

            ],

        ]);
    }
}
