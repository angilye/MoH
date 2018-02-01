<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HelpersTest extends TestCase
{
    /**
     * @test
     */
    public function page_title_should_return_the_base_title_if_title_is_empty() // test que le helpers retourne correctement si le titre est vide.
    {
        $this->assertEquals(config('app.name').' Communauté', page_title(''));
    }

    /**
     * @test
     */
    public function page_title_should_return_the_correct_title_if_title_is_provided() // test que le helpers retourne dans le titre de la page, la page affiche
    {
        $this->assertEquals('About | '.config('app.name').' Communauté', page_title('About'));
        $this->assertEquals('Home | '.config('app.name').' Communauté', page_title('Home'));
        $this->assertEquals('Contact | '.config('app.name').' Communauté', page_title('Contact'));
    }

    /**
     * @test
     */
    public function set_active_route_should_return_the_correct_class_based_on_a_given_route() // test qu'il mette bien le bon onglet en tant qu'onglet actif sur la page demandé
    {
        $this->get(route('root_path')); // on se place sur la route **** /
        //ou
        //$this->get('/');
        $this->assertEquals('active', set_active_route('root_path')); // on test la fonction avec comme argument ****
        $this->assertEquals('', set_active_route('about_path')); // on test la fonction avec comme argument ****

        $this->get(route('contactSend_path'));
        $this->assertEquals('active', set_active_route('contactSend_path'));
        $this->assertEquals('', set_active_route('about_path'));
        $this->assertEquals('', set_active_route('root_path'));
    }
}
