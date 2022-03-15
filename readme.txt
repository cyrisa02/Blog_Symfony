Delphine AUGER 
git add branch main

1/Analyse du besoin 
Post = Message
-------------
id 
titre 
contenu
chapeau (flag) 
date-creation 
date-publication 
date-modification
image 
auteur


Commentaire 
---------
id 
FK_message (lien par rapport au message) 
date-creation 
auteur 
contenu 

Etape 1
Création de l'entité Message avec Doctrine 
Penser à 
use DateTime;
use Doctrine\ORM\Mapping as ORM;

Etape 2
Paramétrer l'Id penser à l'auto générer

Etape 3
Paramétrer les propriétés le type 

Etape 4
Paramétrer les propriétés avec
nullable=false <=> obligatoire
nullable=true <=> facultatif


Etape 5
Générer les getter et les setter
attention avec nullable false voir GetMessage.txt

Etape 6
Configurer la BD 
Créer un fichier .env.local et saisir 
DATABASE_URL="mysql://studi:studi@127.0.0.1:3306/studiBlog?serverVersion=5.7"

puis dans le terminal 
php bin/console doc:sch:upda --force 
dit que la DB n'existe pas 
php bin/console doc:datab:crea 51'30


Etape 7
Créer entité Commentaire

Etape 8
Créer le lien entre Commentaire et Message 
C'est One-To-Many ou Many-To-One
Aller dans google taper association mapping One-To-Many, chercher bidirectionnelle
https://www.doctrine-project.org/projects/doctrine-orm/en/2.9/reference/association-mapping.html
Faire attention de bien paramétrer message et commentaires c'est l'inverse et attention au s (pluriel) 
Collection = tableau pour une Entity
+ créer un constructeur pour commentaires

+ créer les getter et setter de commentaires (attention)

Etape 9
Faire les repository A voir 1h05
