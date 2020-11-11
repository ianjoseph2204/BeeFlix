<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => 'Fantasy Island',
            'photo' => '',
            'description' => "Blumhouse's Fantasy Island is a 2020 American supernatural horror film directed and co-written by Jeff Wadlow.[2] A horror reimagining and prequel to ABC's 1977 television series of the same name, it stars Michael Peña, Maggie Q, Lucy Hale, Austin Stowell, Portia Doubleday, Jimmy O. Yang, Ryan Hansen, and Michael Rooker.[3] Produced by Wadlow and Marc Toberoff, as well as Jason Blum through his Blumhouse Productions banner, the film follows five people who visit the eponymous island, discovering that their dream fantasies brought to life begin to turn into horrific living nightmares they must try to survive.",
            'rating' => 3
        ]);
        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => 'Naruto',
            'photo' => '',
            'description' => "Naruto (Japanese: ナルト) is a Japanese manga series written and illustrated by Masashi Kishimoto. It tells the story of Naruto Uzumaki, a young ninja who seeks recognition from his peers and dreams of becoming the Hokage, the leader of his village. The story is told in two parts – the first set in Naruto's pre-teen years, and the second in his teens. The series is based on two one-shot manga by Kishimoto: Karakuri (1995), which earned Kishimoto an honorable mention in Shueisha's monthly Hop Step Award the following year, and Naruto (1997).",
            'rating' => 5
        ]);
        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => 'Crash Landing On You',
            'photo' => '',
            'description' => "Crash Landing on You tells the story of two star-crossed lovers, Yoon Se-ri (Son Ye-jin), a South Korean fashion entrepreneur with her company Se-ri's Choice, and Ri Jeong-hyeok (Hyun Bin), a member of the North Korean elite and a Captain in the North Korean Special Police Force.",
            'rating' => 4
        ]);
        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => 'The Fiery Priest (2019)',
            'photo' => '',
            'description' => "This drama follows Priest Kim Hae Il (Kim Nam Gil), a hot tempered Catholic Priest (which a troubled past) who strives for justice by generally using his fists. After getting into trouble at his local police station (yet again) he is sent to live in Gudam, Seoul with his former teacher Father Lee (Jung Dong Hwan).",
            'rating' => 2
        ]);
    }
}
