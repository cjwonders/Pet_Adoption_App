<?php 

class PigLatin 
{
    
    function convert ($word)
    {
        $firstLetter = substr($word, 0, 1);

        $newWord = substr($word, 1); 
        $newWord .= $firstLetter . 'ay';

        return $newWord;
    }
}