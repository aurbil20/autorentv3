-----  Commit 1 


-----  Commit 2

- Ajout du dashboard 
- Image asset au niveau de register et login défini 
- condition d'affichage au niveau de la layout de publicpages 

-----  Commit 3 

- Ajout des pages du dashboard concernant l'entreprise et l'admin
- les couleurs de la page public ont été adaptées au dashboard 
- les pages de gestion des utilisateurs n'ont pas encore été faits 
- il y a des modals qui n'ont pas été fait dans certaines pages 
- certains tableaux et formulaires n'ont pas encore été détaché en tant que composants livewire 

----- Commit 4 

- Installation de fortify 
- retrait suppresion des composants livewire au niveau de login 
- definition des regles de validation des form avec jquery dans public/js/validationForm.js
- ajout de FortifyServiceProviders dans config/app
- liaison de fortify au formulaire login et register dans app/providers/FortifyServiceProviders.php 
- creation de la migration table role 
- creation de la migration pour ajouter la foreignId de la table role à la table users 
- ajout des colonnes à la table users
- test de connexion (login réussi)
- parametrage pour register pas fait (à revoir au prochain commit )
- Regle de validation dans public/js/validationForm.js pour le register form (à revoir dans le prochain commit)
- Migration des tables restantes
- controller d'insertion de commentaire fait 
- creation du fichier du fichier livewire pour all vehicule dans le dash 



----- Commit 5 
- affichage des véhicules dans le dash (pas fini)
- paramétrage de la page register fini 
- Controller marque et modéle fait 
- ajout des images de logo de véhicules dans le fichier index de publicpages 
- Fonctionnalités ajout d'une agence faite et fonctionnelle 
- Jointure de allagencies à finir !!!!!!------

- Suppresion livewire allvehicules 
- Ajout d'un composant livewire removeagency et ecriture 
- Relations entre les tables définies dans le model 
- Création de middleware personnalisé et intégration aux routes 
- Edition des pages de gestion des utilisateurs 
