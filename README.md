# Refactoring du blog  

Refactoring d'un blog en appliquant le motif MVC et la POO.

## Notes  

En plus des dossiers `Model`, `Views` et `Controller`, j'ai ajouté quelques couches ou sous-couches
afin d'accentuer l'organisation du projet.

- Config  

Ce repertoire contient comme son nom l'indique toute la configuration de l'app.
Le fichier `database.php` contiendra les paramètres de connexion à votre BD.
Le fichier `autoloader.php` permet le chargement automatique ou `autoloading` des classes lors de leurs instanciations (pas besoin de `require` ou `include`).

- Public  

C'est ce dossier que vous devriez faire pointer votre serveur web. Il contient les ressources accessibles publiquement, c'est à dire tout ce qui est fichier statique (css, js, images, etc).
Il contient également un `index.php` faisant office de `FrontController`.
