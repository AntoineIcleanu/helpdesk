![HelpDesk](http://angular.kobject.net/git/phalconist/helpdesk.png "HelpDesk")
# helpdesk
A Helpdesk Application for educational purposes using a micro-framework
# Howto

- [x] fork your own copy of this repository.
- [x] read the project specifications : [Helpdesk project specifications](http://slamwiki.kobject.net/php-rt/projets/projet-2015/)
- [x] consult the micro-framework api : [documentation](http://api.kobject.net/micro-framework/)

But du projet:

Vous travaillez au sein d'une PME en tant que Responsable du support aux utilisateurs. Dans le cadre de votre travail,
vous gérez aussi bien les incidents que les demandes d'assistance technique ou fonctionnelle sollicitées par les
utilisateurs.

Les demandes d'assistance ou remontées d'incidents ne sont pour l'instant pas informatisées, et les utilisateurs doivent
vous contacter directement, par mail ou par téléphone, pour vous communiquer ces informations.

Ce procédé est coûteux en temps, insatisfaisant pour les utilisateurs dont les demandes sont parfois oubliées. Il ne
permet pas d'obtenir une traçabilité des actions d'exploitation menées.

Vous avez un temps envisagé la mise en place de solutions existantes (GLPI + OCS), mais ces solutions sont trop
complètes, parfois trop complexes pour le SI de votre entreprise.

Vous avez donc décidé de réaliser une application Web permettant de gérer les demandes d'assistance, et dont les
fonctionnalités sont adaptées à vos besoins.

Contribueurs:
Xavier Bouillé, Romain Bertrand et Antoine Icleanu.

Partie 1:
- 1) Antoine: j'ai créer la page qui permet de créer un ticket grâce la function public frm. Celle ci demande l'authentification
de l'utilisateur pour accéder à la page. La page est mise en forme par le code de views/Ticket/vAdd, former html avec quelque php,
dans celle ci, quand on valide cella se redirige sur la page update "action" où on voit bien que le ticket est créer si une catégorie
est bien choisie et un titre indiqué.

Romain : J'ai corrigé quelques erreurs situées dans la création de tickets

Partie 2:
- 1) Antoine: Même chose que la partie 1.
 

Partie 3: (Partie commune)
Xavier: J'ai créé la page d'accueil en implémentant des fonctions dans controllers/DefaultC afin que chaque session ait leur propre page
par défaut. Ensuite, J'ai utilisé le ficher views/main pour créer la page d'accueil qui s'affichera pour les utilisateurs,
l'administrateur et ceux qui ne sont pas connectés. J'ai rajouté la page test qui affiche les boutons des différents travaux
effectués. J'ai donc mit les liens des pages concernés pour les relier aux boutons. Chaque session a sa propre view.