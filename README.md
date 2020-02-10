# php_tp_01

Créer un projet symfony:
    composer create-project symfony/website-skeleton php_tp_01 4.4.*

Voir la version actuelle de symfony:
    php bin/console --version

Voir la les routes:
    php bin/console debug:router

Créer une Entity: 
    php bin/console make:entity

Permet de load les fixtures:
    php bin/console doctrine:fixtures:load

J'ai fait deux controller un Index pour la page d'acceuil et potentiellement une page de présentation et une page de contact.
Et un controller pour gérer la liste des templates et les futurs templates quand on cliquera sur le lien du template.
Ils sont séparés parce qu'il n'ont pas vraiment de points commun.
