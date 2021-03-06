<?php

class AnimalController {
    public static function show (string $animal) {
        $animalUrl = Animal::url($animal);
        
        Flight::render('animals/show', [
            'api_url' => $animalUrl,
        ]);
    }
}