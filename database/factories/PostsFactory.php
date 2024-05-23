<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */

  // required function

  function generateParagraph(int $maxWords, int $maxSentences){
    $paragraph = '';
    $first = true;
    for ($j = 0; $j < random_int(1, $maxSentences); $j++){
        $sentence = fake()->sentence(random_int(1,$maxWords));
        if ($first){
            $first = false;
            $paragraph = $paragraph . $sentence;
        } else {
            $paragraph = $paragraph .' '. $sentence;
        }
    }
    return $paragraph;
 }

 function generateParagraphs(int $maxWords, int $maxSentences, int $maxParagraphs) {
    $paragraphs = [];
    for ($i = 0; $i < random_int(1, $maxParagraphs); $i++){
        array_push($paragraphs, generateParagraph($maxWords, $maxSentences));
    }
    return $paragraphs;
}


function getRandomImageURL($directory){
    if(random_int(0,1) % 2 == 0) {
    $files = scandir($directory);
    $url = '';
    while(strlen($url) < 3) {
        $url = $files[array_rand($files)];
    }
    return 'gallery/' . $url;
    }
}


function createTags($paragraphs)  {
    if(random_int(0,1) % 2 == 0) {
        $body = [];
        foreach($paragraphs as $paragraph){
            $words = explode(' ', $paragraph);
            foreach($words as $word){
                array_push($body, $word);
            }
        }
        $tagarray = [];
        $tags = '';
        $tag = strtolower(preg_replace('/[^a-zA-Z0-9\s]/', '', $body[array_rand($body)]));
        array_push($tagarray, $tag);
        $count = random_int(1, 6);
        for ($i = 0; $i < $count; $i++) {
            while (in_array($tag, $tagarray)) {
                $tag = strtolower(preg_replace('/[^a-zA-Z0-9\s]/', '', $body[array_rand($body)]));
            }
            array_push($tagarray, $tag);
        }

        for( $i = 0; $i < sizeof($tagarray); $i++) {
            if ($i < sizeof($tagarray) -1) {
                $tags .= $tagarray[$i] . ',';
            } else {
                $tags .= $tagarray[$i];
            }
        }
        return $tags;
    }
}

function createExcerpt($paragraphs) {
    if(random_int(0,1) % 2 == 0) {
        $excerpt = '<p>' . explode('<p>', $paragraphs[0])[0] . '</p>';
        return $excerpt;
    }
}

function getPostBody($paragraphs) {
    $htmlText='';
        foreach($paragraphs as $paragraph){
            $htmlText = $htmlText . '<p>' . $paragraph . '</p>';
        }
        return $htmlText;
}

function random_boolean() {
    if (random_int(0,1) % 2 == 0) {
        return true;
    } else {
        return false;
    }
}


 // end of required fuinctions

class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        $paragraphs = generateParagraphs(12,12,8);
        $published = random_boolean();
        $publishedAt = null;
        $lastUpdated = fake()->dateTimeBetween('-1year', 'now');
        $created = fake()->dateTimeBetween('-1year', $lastUpdated);
        if ($published) {
            $publishedAt = fake()->dateTimeBetween($created, 'now');
        }
        return [
            'user_id' => random_int(1,10),
            'title' => fake()->sentence(),
            'featuredImage' => getRandomImageURL('public/gallery'),
            'tags' => createTags($paragraphs),
            'excerpt' => createExcerpt($paragraphs),
            'body' => getPostBody($paragraphs),
            'created_at' => $created,
            'updated_at' => $lastUpdated,
            'published' => $published,
            'published_at'  => $publishedAt
        ];
    }

}
