<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posts>
 */

 // required function

function getParagraphs(int $maxWords, int $maxSentences, int $maxParagraphs): array{ 
    $numParagraphs = random_int(1, $maxSentences);
    $paragraphs = [];
    $paragraph = '';
    for ($i = 0; $i < $numParagraphs; $i++){
        $numSentences = random_int(1, $maxSentences);
        $first = true;
        for ($j = 0; $j < $numSentences; $j++){
            $words = random_int(2, $maxWords);
            $sentence = fake()->sentence($words);
            if ($first){
                $first = false;
                $paragraph = $paragraph . $sentence;
            } else {
                $paragraph = $paragraph . ' ' . $sentence;
            }
        }
        array_push($paragraphs, $paragraph);
    }
    return $paragraphs;
}

function getPostBody($paragraphs) {
$htmlText='';
    foreach($paragraphs as $paragraph){
        $htmlText = $htmlText . '<p>'. $paragraph. '</p>';
    }
    return $htmlText;
}

function getRandomImageURL($directory){
$files = scandir($directory);
$url = '';
while(strlen($url) < 3) {
    $url = $files[array_rand($files)];
}
return 'gallery/' . $url;
}


function createTags($paragraphs)  {
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

 // end of required fuinctions

class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        $paragraphs = getParagraphs(12, 12, 6);
        return [
            'user_id' => random_int(1,10),
            'title' => fake()->sentence(),
            'featuredImage' => getRandomImageURL('public/gallery'),
            'tags' => createTags($paragraphs),
            'body' => getPostBody($paragraphs)
        ];
    }
}
