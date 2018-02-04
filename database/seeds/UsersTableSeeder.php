<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            
            'selectLang' => 'FR',
            'title' => 'Arma 3',
            'parent' => 'arma3',
            'contend' => 'A remplir',
        ]);
        DB::table('pages')->insert([
            
            'selectLang' => 'EN',
            'title' => 'arma3',
            'parent' => 'arma3',
            'contend' => 'A remplir',
        ]);
        DB::table('pages')->insert([
            
            'selectLang' => 'FR',
            'title' => 'Warzone',
            'parent' => 'warzone',
            'contend' => '  <br>
                            <h1>Le retour de <span>Red</span>Line ! </h1>

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
        ]);
        DB::table('pages')->insert([
            
            'selectLang' => 'EN',
            'title' => 'Warzone',
            'parent' => 'warzone',
            'contend' => 'A remplir',
        ]);
    }
}
