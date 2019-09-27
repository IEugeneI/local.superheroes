<?php

namespace Tests\Unit;

use App\Superheroes;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use DB;

class SomeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $db_post = DB::select('select * from superheroes where id = 1');
        $db_post_title = ucfirst($db_post[0]->nickname);

        // load post using Eloquent
        $model_post = Superheroes::find(1);
        $model_post_title = $model_post->nickname;
        $this->assertEquals($db_post_title, $model_post_title);

        DB::table('superheroes')->insert([
            'nickname' =>'Batman1',
            'real_name' => 'Bruce Wayne',
            'origin_description​' => "​Batman's secret identity is Bruce Wayne, a wealthy American playboy, philanthropist, and owner of Wayne Enterprises. His origin depicts Bruce Wayne as a child, after witnessing the murder of his parents Dr. Thomas Wayne and Martha Wayne, he swore vengeance against criminals, an oath tempered by a sense of justice.",
            'superpowers'=>"He does, however, possess a genius-level intellect, is a peerless martial artist, and his vast wealth affords him an extraordinary arsenal of weaponry and equipment. A large assortment of villains make up Batman's rogues gallery, including his archenemy, the Joker.",
            'catch_phrase'=>" Because I’m Batman",
            'images'=>'/public/images/superheroes/2/picture1.jpg,/public/images/superheroes/2/picture2.jpg,/public/images/superheroes/2/picture3.jpg',
        ]);

        DB::table('superheroes')->where('nickname', '=', 'Batman1')->delete();

    }
}
