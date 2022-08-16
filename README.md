# Basis webshop voor lessen webshop bouwen

## Starten van applicatie

In de **database** map staan een __website.sql__

Zorg dat je lokaal dit bestand in een database **website** hebt geimporteerd.

## Mappenstructuur

- ***admin*** 
    - Is het mapje waar het CMS (Content Management System) of Admin panel komt van de webshop.
- ***assets*** 
    - Hierin staan de css, js en images.
    - Ook staan hier de upload images die geupload worden vanuit het CMS
- ***core***
    - In dit mapje staat de database connectie.
    - De header en de footer van de HTML voorkant.
    - **admin/core** bevat nog een checklogin function file. 
- ***model***
    - Hier komen de _models of functions_ van de website in te staan. Denk hierbij aan het ophalen van producten of het ophalen van website data.

 ## Werking

 - in __router.php__ staat de url structuur van de website. Heb je een nieuwe url, dan kan je daar in een _case_ toevoegen.
    -- Zorg ervoor dat je in ieder geval een _$model_ en een _$template_ aanmaakt
    -- Maak in __views__ map een `.mustache` file aan met de naam van de variabel _$template_
    -- Maak in __models__ map een `.php` file aan met de naam van de variabel _$model_

- in je MODEL (van de __models_ folder) moet een array gemaakt worden met _$data_ 
    -- De inhoud van de variabel wordt omgezet via ***MUSTACHE*** template engine. 
    -- Kijk voor opties op de handleiding van Mustache: https://github.com/bobthecow/mustache.php/wiki/Mustache-Tags
