<?php

use Illuminate\Database\Seeder;

class SuperheroesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('superheroes')->insert([
            'nickname' =>'Superman',
            'real_name' => 'Clark Kent',
            'origin_description​' => '​ he was born Kal-El on the planet Krypton, before being rocketed to Earth as an infant by his scientist father Jor-El, moments before Krypton\'s destruction...',
            'superpowers'=>'solar energy absorption and healing factor, solar flare and heat vision,solar invulnerability, flight...',
            'catch_phrase'=>" Look, up in the sky, it's a bird, it's a plane, it's Superman!",
            'images'=>'/public/images/superheroes/1/picture1.jpg,/public/images/superheroes/1/picture2.jpg,/public/images/superheroes/1/picture3.jpg',
        ]);

        DB::table('superheroes')->insert([
            'nickname' =>'Batman',
            'real_name' => 'Bruce Wayne',
            'origin_description​' => "​Batman's secret identity is Bruce Wayne, a wealthy American playboy, philanthropist, and owner of Wayne Enterprises. His origin depicts Bruce Wayne as a child, after witnessing the murder of his parents Dr. Thomas Wayne and Martha Wayne, he swore vengeance against criminals, an oath tempered by a sense of justice.",
            'superpowers'=>"He does, however, possess a genius-level intellect, is a peerless martial artist, and his vast wealth affords him an extraordinary arsenal of weaponry and equipment. A large assortment of villains make up Batman's rogues gallery, including his archenemy, the Joker.",
            'catch_phrase'=>" Because I’m Batman",
            'images'=>'/public/images/superheroes/2/picture1.jpg,/public/images/superheroes/2/picture2.jpg,/public/images/superheroes/2/picture3.jpg',
        ]);

        DB::table('superheroes')->insert([
            'nickname' =>'Spider Man',
            'real_name' => 'Peter Parker',
            'origin_description​' => "Spider-Man is the alias of Peter Parker, an orphan raised by his Aunt May and Uncle Ben in New York City after his parents Richard and Mary Parker were killed in a plane crash.",
            'superpowers'=>'The most common include Wall-crawling, enhanced strength, speed, reflexes, durability, stamina, healing and agility, as well as an early warning system officially dubbed the "Spider-Sense" power by Peter Parker',
            'catch_phrase'=>" It's your Friendly Neighborhood Spider-Man!, My Spider-Sense is tingling. , With great power comes great responsibility",
            'images'=>'/public/images/superheroes/3/picture1.jpg,/public/images/superheroes/3/picture2.jpg,/public/images/superheroes/3/picture3.jpg',
            'created_at'=>date('Y-m-d H:i:s'),
        ]);

        DB::table('superheroes')->insert([
            'nickname' =>'Superman',
            'real_name' => 'Clark Kent',
            'origin_description​' => '​ he was born Kal-El on the planet Krypton, before being rocketed to Earth as an infant by his scientist father Jor-El, moments before Krypton\'s destruction...',
            'superpowers'=>'solar energy absorption and healing factor, solar flare and heat vision,solar invulnerability, flight...',
            'catch_phrase'=>" Look, up in the sky, it's a bird, it's a plane, it's Superman!",
            'images'=>'/public/images/superheroes/4/picture1.jpg,/public/images/superheroes/4/picture2.jpg,/public/images/superheroes/4/picture3.jpg',
        ]);

        DB::table('superheroes')->insert([
            'nickname' =>'Batman',
            'real_name' => 'Bruce Wayne',
            'origin_description​' => "​Batman's secret identity is Bruce Wayne, a wealthy American playboy, philanthropist, and owner of Wayne Enterprises. His origin depicts Bruce Wayne as a child, after witnessing the murder of his parents Dr. Thomas Wayne and Martha Wayne, he swore vengeance against criminals, an oath tempered by a sense of justice.",
            'superpowers'=>"He does, however, possess a genius-level intellect, is a peerless martial artist, and his vast wealth affords him an extraordinary arsenal of weaponry and equipment. A large assortment of villains make up Batman's rogues gallery, including his archenemy, the Joker.",
            'catch_phrase'=>" Because I’m Batman",
            'images'=>'/public/images/superheroes/5/picture1.jpg,/public/images/superheroes/5/picture2.jpg,/public/images/superheroes/5/picture3.jpg',
        ]);

        DB::table('superheroes')->insert([
            'nickname' =>'Spider Man',
            'real_name' => 'Peter Parker',
            'origin_description​' => "Spider-Man is the alias of Peter Parker, an orphan raised by his Aunt May and Uncle Ben in New York City after his parents Richard and Mary Parker were killed in a plane crash.",
            'superpowers'=>'The most common include Wall-crawling, enhanced strength, speed, reflexes, durability, stamina, healing and agility, as well as an early warning system officially dubbed the "Spider-Sense" power by Peter Parker',
            'catch_phrase'=>" It's your Friendly Neighborhood Spider-Man!, My Spider-Sense is tingling. , With great power comes great responsibility",
            'images'=>'/public/images/superheroes/6/picture1.jpg,/public/images/superheroes/6/picture2.jpg,/public/images/superheroes/6/picture3.jpg',
            'created_at'=>date('Y-m-d H:i:s'),
        ]);
    }
}

