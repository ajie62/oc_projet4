Développez un back-end pour un client
======

## Contexte
Le musée du Louvre vous a missionné pour un projet ambitieux : 
créer un nouveau système de réservation et de gestion des 
tickets en ligne pour diminuer les longues files d’attente et 
tirer parti de l’usage croissant des smartphones.

## Cahier des charges
L'interface doit être accessible aussi bien sur ordinateur de bureau
que tablettes et smartphones, et utiliser pour cela un design responsive.

L'interface doit être fonctionnelle, claire et rapide avant tout. Le
client ne souhaite pas surcharger le site d'informations peu utiles :
l'objectif est de permettre aux visiteurs d'acheter un billet rapidement.

Il existe 2 types de billets : le billet &laquo; Journée &raquo; et le
billet &laquo; Demi-journée &raquo; (il ne permet de rentrer qu'à partir
de 14h00). Le musée est ouvert tous les jours sauf le mardi (et fermé 
les 1er mai, 1er novembre et 25 décembre).

Le musée propose plusieurs types de tarifs :
- Un tarif &laquo; normal &raquo; à partir de 12 ans à 16 euros ;
- Un tarif &laquo; enfant &raquo; à partir de 4 ans et jusqu'à 12 ans, à
8 euros (l'entrée est gratuite pour les enfants de moins de 4 ans) ;
- Un tarif &laquo; senior &raquo; à partir de 60 ans pour 12 euros ;
- Un tarif &laquo; réduit &raquo; de 10 euros accordé dans certaines
conditions (étudiant, employé du musée, d'un service du Ministère de la
Culture, militaire...).

Pour commander, on doit sélectionner :
- Le jour de la visite ;
- Le type de billet (Journée, Demi-journée...). On peut commander un billet
pour le jour même mais on ne peut plus commander de billet &laquo; Journée 
&raquo; une fois 14h00 passées ;
- Le nombre de billets souhaités.

Le client précise qu'il n'est pas possible de réserver pour les jours passés 
(!), les dimanches, les jours fériés et les jours où plus de 1000 billets ont
été vendus en tout pour ne pas dépasser la capacité du musée.

Pour chaque billet, l'utilisateur doit indiquer son nom, son prénom, son pays
 et sa date de naissance. Elle déterminera le tarif du billet.
 
 Si la personne dispose du tarif réduit, elle doit simplement cocher la case 
 &laquo; Tarif réduit &raquo;. Le site doit indiquer qu'il sera nécessaire
 de présenter sa carte d'étudiant, militaire ou équivalent lors de l'entrée 
 pour prouver qu'on bénéficie bien du tarif réduit.
 
 Le site récupèrera par ailleurs l'e-mail du visiteur afin de lui envoyer
 les billets. Il ne nécessitera pas de créer un compte pour commander.
 
 Le visiteur doit pouvoir payer avec la solution Stripe par carte bancaire.
 
 Le site doit gérer le retour du paiement. En cas d'erreur, il invite à 
 recommencer l'opération. Si tout s'est bien passé, la commande est enregistrée
  et les billets sont envoyés au visiteur.
  
  Vous utiliserez les environnements de test fournis par Stripe pour simuler
  la transaction, afin de ne pas avoir besoin de rentrer votre propre carte
  bleue.
  
  **La création d'un back-office pour lister les clients et commandes n'est
  pas demandée. Seule l'interface client est nécessaire ici.**
  
  ### Le billet
  Un email de confirmation sera envoyé à l'utilisateur et fera foi de billet.
  
  Le mail doit indiquer :
  - Le nom et le logo du musée ;
  - La date de réservation ;
  - Le tarif ;
  - Le nom de chaque visiteur ;
  - Le code de la réservation (un ensemble de lettres et de chiffres).