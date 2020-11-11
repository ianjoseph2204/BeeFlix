<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $FantasyIsland = [
            'You Are One of My Guests',
            'Arrival',
            "Regret Is a Disease",
            "Your Fantasy Begins Now",
            "No Soldier",
            "The Life You Wanted",
            "Panic Room",
            "Dog Tags",
            "Brax Makes His Move",
            "You Deserve It"];

        for ($i = 0; $i < sizeof($FantasyIsland); $i++) {
            DB::table('episodes')->insert([
                'movie_id' => DB::table('movies')->where('title', '=', 'Fantasy Island')->get()[0]->id,
                'episode' => $i + 1,
                'title' => $FantasyIsland[$i]
            ]);
        }

        $Naruto = [
            'Find the Crimson Four-Leaf Clover! (2002)',
            'Mission: Protect the Waterfall Village! (2003)',
            'Konoha Annual Sports Festival (2004)',
            'Finally a clash! Jonin VS Genin!! Indiscriminate grand melee tournament meeting!! (2005)',
            'Hurricane! "Konoha Academy" Chronicles (2008)',
            'Naruto: The Cross Roads (2009)',
            'Naruto, The Genie, and The Three Wishes!! (2010)',
            'Naruto x UT (2011)',
            'Chūnin Exam on Fire! ',
            'Hashirama Senju vs. Madara Uchiha (2012)',
            'Naruto Shippūden: Sunny Side Battle!!!'
        ];

        for ($i = 0; $i < sizeof($Naruto); $i++) {
            DB::table('episodes')->insert([
                'movie_id' => DB::table('movies')->where('title', '=', 'Naruto')->get()[0]->id,
                'episode' => $i + 1,
                'title' => $Naruto[$i]
            ]);
        }

        $CrashLandingOnYou = [
            '"But It\'s Destiny" (우연인 듯 운명)',
            '"Flower"',
            '"Sunset" (노을)	',
            '"Here I Am Again" (다시 난, 여기)',
            '"Someday" (어떤 날엔)',
            '"Sigriswil" (Crash Landing on You Title Full Version)',
            '"Spring in My Hometown" (고향의 봄)',
            '"The Wind of the Day" (그날의 바람)',
            '"My Companion" (나의 동무여)',
            '"Like a Wild Flower" (들꽃처럼)',
        ];

        for ($i = 0; $i < sizeof($CrashLandingOnYou); $i++) {
            DB::table('episodes')->insert([
                'movie_id' => DB::table('movies')->where('title', '=', 'Crash Landing On You')->get()[0]->id,
                'episode' => $i + 1,
                'title' => $CrashLandingOnYou[$i]
            ]);
        }

        $FieryPriest = [
            '"Our Neighbourhood HERO" (우리동네 HERO)',
            '"Breeze"',
            '"Fighter"',
            '"Paradise"',
            '"Joy"',
            '"Victory"',
        ];

        for ($i = 0; $i < sizeof($FieryPriest); $i++) {
            DB::table('episodes')->insert([
                'movie_id' => DB::table('movies')->where('title', '=', 'The Fiery Priest (2019)')->get()[0]->id,
                'episode' => $i + 1,
                'title' => $FieryPriest[$i]
            ]);
        }
    }
}
