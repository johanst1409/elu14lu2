# AVANS Deeltijd 2018
## ELU 1.4 LU 2 - Programmeren en Testen
De repository voor een school opdracht.

## De Opdracht
- Programmeren client-server applicatie
- Bestaat uit:
  - Front-end -> HTML5 (eventueel CSS3)
  - Back-end  -> PHP7 logica en MySQL database
- Databse bestaat uit 3 tabellen met onderlinge relatie
  - bv: order - orderregel - product
- Functionaliteit van de applicatie (CRUD)
  - Create item (Item invoeren via front-end en resultaat opgeslagen in database)
  - Read item (item gelezen uit database en getoond op scherm)
  - Update item (Item aangepast via front-end en resultaat opgeslagen in database)
  - Delete item (Specifiek item verwijderen uit database)
- Code voorzien van commentaar (verplicht)

## De Uitwerking

### Logica
Dit project is geschreven in het [Laravel Framework](https://laravel.com/). Dit heeft als gevolg dat de applicatie logica is geschreven in de volgende mappen:
- App/Http/Controllers/
- App/Models/
- App/Traits/

Laravel maakt gebruik van [routing](https://laravel.com/docs/5.6/routing) om de verschillen http requests af te vangen, hiervoor zijn routes aangemaakt voor de verschillende CRUD acties in het bestand:
- routes/web.php

#### CRUD acties
Iedere gegevens tabel heeft een bijbehorend [Eloquent model](https://laravel.com/docs/5.6/eloquent) en [Controller](https://laravel.com/docs/5.6/controllers), de CRUD acties worden uitgevoerd in de volgende methods in de controllers (naamgeving van de methods in volgens de Laravel conventies).
- Create: De create functie wordt uitgevoerd store method.
- Read: De read functie wordt uitgevoerd in de index method voor alle gegevens in de tabel en in de show method voor een enkel object
- Update: De update functie wordt uitgevoerd in de update method
- Delete: De delete functie wordt uitgevoerd in de destroy method

### Data
Het project bestaat uit 4 gegevens tabellen:
- companies
- games
- genres
- platforms
En 2 koppel (pivot) tabellen:
- game_genres
- game_platforms

De opbouw van de tabellen zijn geschreven als [migrations](https://laravel.com/docs/5.6/migrations), de initiele data in deze tabellen worden gevuld met behulp van een [seeder](https://laravel.com/docs/5.6/seeding). Deze zijn geschreven in de mappen:
- database/migrations/
- database/seeds/

### Weergave
Voor de weergave aan de front-end wordt gebruik gemaakt van de [blade templating engine](https://laravel.com/docs/5.6/blade), de blade templates zijn te vinden in de map:
- resources/views/