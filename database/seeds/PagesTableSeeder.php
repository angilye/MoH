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
                'page' => 'arma',
                'partieSite' => 'moh',
                'parent' => 'arma3',
                'sousTitre' => '§§',
                'contend' => 'A remplir',

            ],

            [

                'id' => 2,
                'selectLang' => 'EN',
                'title' => 'arma3',
                'page' => 'arma',
                'partieSite' => 'moh',
                'parent' => 'arma3',
                'sousTitre' => '§§',
                'contend' => 'A remplir',

            ],

            [

                'id' => 3,
                'selectLang' => 'FR',
                'title' => 'Warzone',
                'page' => 'warzone',
                'partieSite' => 'warzone',
                'parent' => 'warzone',
                'sousTitre' => 'L Ouverture de notre serveur <span>MoH</span>.WarZone! <br>',
                'contend' => '
                                <p>Nous sommes tr&egrave;s heureux de vous annoncer l&rsquo;ouverture de notre nouveau Mod de jeu Warzone, n&eacute;e de cette fameuse mission multijoueur PvP/PvE ( un wasteland am&eacute;lior&eacute;).</p>
                                <p>Bas&eacute; sur un travail d\'&eacute;quipe solide entre les joueurs, confrontant 2 a 3 factions : Force des USA , Russe et Les Independant ! L\'&eacute;quipe M.O.H a pour projet de reconstruire une communaut&eacute; solide et nombreuse autour de ce nouveau mod de jeu Warzone !</p>
                                <p>Les serveurs sont pr&ecirc;ts, les bugs que nous avons pu observer sont r&eacute;solus, bien s&ucirc;r si vous en observez d\'autres pr&eacute;venez nous afin de les corriger. Des mises &agrave; jours seront &eacute;videmment &agrave; pr&eacute;voir, nous comptons tout faire afin d\'am&eacute;liorer Warzone de jour en jour !</p>
                                <p>Il ne nous manque plus qu\'une chose : VOUS ! Oui, nous avons besoin de vous, derri&egrave;re votre &eacute;cran . Alors n\'h&eacute;sitez pas &agrave; nous rejoindre, c\'est ainsi que nous esp&eacute;rons retrouver une communaut&eacute; !</p>
                                <p>Le Discord pour jouer afin de garantir une coop&eacute;rations entre vous : https://discord.gg/vK3eJrR <br />Le Site : https://www.moh-warzone.fr/</p>
                                <p><br /><br /></p>
                            ',

            ],

            [

                'id' => 4,
                'selectLang' => 'EN',
                'title' => 'Warzone',
                'page' => 'warzone',
                'partieSite' => 'warzone',
                'parent' => 'warzone',
                'sousTitre' => '§§',
                'contend' => 'A remplir',

            ],

            [

                'id' => 5,
                'selectLang' => 'FR',
                'title' => 'Annonce',
                'page' => 'acceuilSite',
                'partieSite' => '',
                'parent' => 'Acceuil',
                'sousTitre' => '',
                'contend' => '',

            ],

        ]);
    }
}
