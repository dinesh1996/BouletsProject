BouletsProject
==============

 Système de supervision de parc informatique

  Fonctionnalités

 L'administrateur doit pouvoir injecter son parc dans le système : salles et machines dans ces salles. Une machine, pour les besoins de notre outil, peut se limiter à son nom et son IP, mais si vous voulez vous lâcher, libre à vous.

Tout le système doit d'ailleurs être accessible. On a donc avoir des liens et des formulaires classiques pour ajouter une salle, ajouter des machines dans une salle, et maintenir tout ça par la suite (retrait ou déplacement de machine, retrait de salle, etc.).


Affichage de supervision

Il s'agit d'un écran affichant (graphiques et/ou tableaux) le parc, qui se met à jour régulièrement pour refléter les incidents éventuels en cours.


Les salles sont représentées sous forme de boîtes rectangulaires.

Dans ces boîtes, les machines concernées sont affichées 

Tout incident en cours pour une machine est affiché.

L'écran  peut  se mettre à jour régulièrement, de façon accessible. 



Partie authentifiée

L'application dispose d'un ou plusieurs comptes utilisateur, tous administrateurs, et il est nécessaire de s'authentifier pour pouvoir accéder à toute opération modificatrice.

En revanche, la supervision, l'interrogation manuelle, les éventuelles statistiques, etc. sont accessibles en
anonyme.
