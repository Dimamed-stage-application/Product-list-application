# Dimemed Admin Panel - Stageopdracht

Dit project is een **Admin Panel** dat ik als stageopdracht voor Dimemed heb ontwikkeld.  
Het doel van het project is het beheren van producten via een webapplicatie.

## Functionaliteiten
Het admin panel biedt de volgende functionaliteiten via **CRUD**:
- **Create**: Producten toevoegen
- **Read**: Producten bekijken
- **Update**: Producten aanpassen
- **Delete**: Producten verwijderen

Daarnaast:
- Productafbeeldingen worden toegevoegd via **image links** in plaats van uploads. Dit is bewust gekozen om de functionaliteit te presenteren zonder echte uploads.

## Technologieën
- **Frontend:** React, Tailwind CSS
- **Backend:** Laravel
- **Database:** MySQL

## Installatie & Setup

### 1. Project clonen
Clone het project via GitHub:

git clone https://github.com/Dimamed-stage-application/Product-list-application.git
cd web-app

### 1.2 Download het project als zip-bestand
Download het zip-bestand van de repository en pak deze uit op je lokale machine.

### 2. Backend dependencies installeren
composer install

### 3. Frontend dependencies installeren
npm install

### 4. database
Download en importeer de database vanuit het bestand 'dimadb.sql' in je MySQL server.

### 5. .env bestand configureren
Maak een kopie van het `.env.example` bestand en hernoem deze naar `.env`. Pas de database-instellingen aan:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dimemed_db
DB_USERNAME=root
DB_PASSWORD=

### 6. Laravel startem
composer run dev

# handleiding voor het gebruik van de admin panel
Je kunt nu de admin panel gebruiken via je webbrowser op `http://localhost:8000`.
Voeg, bekijk, bewerk en verwijder producten via de gebruiksvriendelijke interface.
Je kunt producten toevoegen door op de "Add Product" knop te klikken en de vereiste velden in te vullen.
en producten bewerken of verwijderen door op de respectievelijke knoppen naast elk product te klikken.
voor het toevoegen van een productafbeelding, gebruik een geldige image link in plaats van een upload.
maak gebruik van deze links of zoek zelf naar geschikte image links:
https://images.ctfassets.net/os4qrmlr8hsb/2pKaIrMlc7vjUhKAH1rGFh/95766ec2d888b8c542d23d9c2054a383/Shampoo.jpg?fm=webp&w=3840
https://media.s-bol.com/JRRZv89XwAL2/wOyOWJ/550x467.jpg
https://hydropeptide.nl/cdn/shop/files/012224_New_Retail_Packaging_PowerSerum_PDP.jpg?v=1752053271
https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQKnwRSqKNKXYhIJhDTg4Kqr54lYb--ec51XzIkvRM05hzEjNxefNEGDm4WGLynb28vrZWpxB7T6hNjo4FBSJl9_8TFCi1rLaZ5XWofcQnRpbh99ip4CbHBEg

Auteur: Jair Wey
Stagebedrijf: Dimemed