lien Notion :
https://www.notion.so/e801ac0cd7e346c89152f8e84bd2ae9c?v=de4560729e354178b74b921e64d31d40

# Intro

- [ ]  Dans la template, juste ajouter les photos, comme ça on a le bon format

# 2 Front → Template

### 2.1 Page Home :

Register Customer → pour se connecter

---

- [ ]  On ne passe pas par le formulaire classique de Breeze. → même route mais l’estéthique change
- [ ]  On utilise pas Tailwind → on garde Bootstrap
- [ ]  Le backoffice possède le même visuel que la partie front

Il existe une autre page “ login ”, ou l’on peut se connecter ou s’enregistrer avec les deux formulaires côte à côte

- [ ]  Au formulaire s’enregistrer, il faut ajouter :
    1. une photo de profil → AVATAR, donc il va falloir ajouter un input
    2. cocher une inscription à la newsletter
    3. A l’inscription on recoit un mail de confirmation

1ere ligne

---

Carousel → défile → texte pas modifiable, donc pas de crud inutile pour titre et contenu

- [ ]  3 img max derrière et ça défile

cadre haut gauche → produit star

- [ ]  Le nommer dans le backoffice comme produit star et faire en sorte qu’il s’affiche la

cadre bas gauche → dernier produit créé

- [ ]  Gérer dans backoffice

2eme ligne : featured product

---

Slider → carousel de 5 images qui change avec 5 produits pris AU HASARD

- [ ]  Sur chaque produit, il y a deux boutons
- [ ]  le 1er bouton va ouvrir un modal :
    1. ajuster la quantité
    2. mettre dans le panier
    3. prix et promo si il y en a une

Le panier

---

- [ ]  hover sur le panier montrant les derniers produits ajoutés (ou des produits, pas forcément les derniers je crois)
- [ ]  Il y a deux boutons sur le panier :
    1. view card → pour voir le panier
    2. check out → pour valider le panier

3eme ligne : from the blog

---

- [ ]  Ce sont les deux derniers articles créés → article est ≠ de produit
- [ ]  juste en dessous → barre pour la news letter → avec mail de confirmation : merci de participer ...

Footer → attention ils seront ≠ d’une page à l’autre

---

- [ ]  Les 2 img à droite → statiques
- [ ]  Partie du milieu → statique → pas important
- [ ]  Le contact us → doit être modifiable dans le back

### 2.2 Page shop-list :

C’est ici que va se retrouver tous les produits qu’on va pouvoir acheter ⇒ classés de manière décroissantes de haut en bas

Banière

---

- [ ]  Pouvoir la modifier dans le backoffice

1ere ligne : input et agencement

---

- [ ]  système de recherche → input → par Nom et Catégorie → ça sort une liste de produit
- [ ]  organisation de la page en grid 4/6 ou en ligne 2/5

2eme ligne :  sur le coté → navBar verticale → liste de catégorie

---

- [ ]  Si on click sur une categorie → ça agence sur la page les produits de cette catégorie

3eme ligne : sur le coté → navBar “ size “ horizontale mais latérale 

---

- [ ]  Si on click sur une taille → ça agence sur la page les produits de cette catégorie

Les produits sur la page

---

- [ ]  Sur chaque produit :
    1. un bouton loupe → modal qui fait un show
    2. un bouton acheter
    3. un bouton pour ajuster la quantité du produit 

En bas de la page → pagination

---

- [ ]  Faire un système de pagination, ici 5 par 5.

Si il y a 5 articles → pagination par 5 → fonctionnelle et même esthétique

Footer

---

- [ ]  Sur la droite → ce n’est plus les photos des articles comme pour la page “ home “, ⇒ c’est email newsletter (oui encore) pour recevoir la newsletter avec mail de confirmation
- [ ]  Le reste du footer est identique à celui de la page home

### 2.3 Page single-product : → show de produit

C’est ce qu’on obtient quand on click sur le produit ⇒ le show du produit → plus d’info que sur le modal

Banière

---

- [ ]  Pouvoir la modifier dans le backoffice

1ere ligne : infos et images

---

Infos produit :

- [ ]  Différentes infos du produit :
    1. nom
    2. prix → et promo si il y en a une
    3. info → court texte sur produit
    4. taille
    5. bouton → ajuster la quantité
    6. bouton modal pour voir ENCORE les détails déjà sur la page → bizarre (juste récupérer le modal fait pour la page précédente)
    7. bouton acheter

Images :

- [ ]  Grande image sur la gauche
- [ ]  Plusieurs petites images en dessous des infos du produit

2eme ligne : description, review et information 

---

Dans un espèce d’accordéon  → comme pour le site du chef

Quand on click sur Description :

- [ ]  Faire un seeder via factory pour créer de fausses descriptions  -> non → c’est mieux de mettre une description du produit lors de sa création

Quand on click sur Review :

- [ ]  Afficher les commentaires
    1. Le 1er est a la ligne
    2. Tous les autres sont sur la même ligne verticale mais un peu décalé vers la gauche par rapport au 1er
    3. Ils sont affiché du plus récent, au moins récent. Le dernier créé en haut

- [ ]  En dessous des articles → formulaire pour créer un article → quand on est connecté, le formulaire doit être pré rempli

Quand on click sur Information :

- [ ]  Afficher des informations concernant le produit → le contenu peut être du lorem ? → modifiable !!

Footer

---

- [ ]  Identique à celui de la page shop-list

### 2.4 Page Blog :

Page reprenant tous les articles de manière décroissante

- [ ]  Sous navbar avec le terme catégorie uniquement
- [ ]  Quand on click sur catégorie → menu déroulant (dropdown) avec un foreach des catégories
- [ ]  Quand on click sur une des catégories → affichage des articles de la catégorie

Articles :

- [ ]  Chaque article possède :
    
    
    1. photo
    2. like et commentaire → les like sont la juste pour faire beau mais les commentaires il faut les compter. Ces commentaires, les users pourront les ajouter dans le show de l’article.
    3. date
    4. titre
    5. info courte → read more → vers un show
    

### 2.5 Page single-blog: → show de article

Banière

---

- [ ]  Pouvoir la modifier dans le backoffice

1ere ligne : cover pour l’article

---

- [ ]  Image pour cover
- [ ]  Au bas de l’image, il y a :
    1. auteur → ne doit pas être clickable
    2. les like → juste pour faire beau
    3. les comments → compter combien et afficher
    

2eme ligne : l’article

---

- [ ]  En dessous de l’image → Article :
    1. Titre
    2. Contenu

3eme ligne :  navBar/footer sous l’article

---

- [ ]  A gauche : Partie réseaux sociaux → statique, pas cliquable
- [ ]  A droite : Tag → pour chaque article on peut relier plusieurs tags, à choisir à la création de l’article → afficher les tags sur la droite. On doit pouvoir ajouter plusieurs tags dans backoffice, dans la modification de l’article pour ceux qui y ont accès.

Articles - Catégories - Tags  ⇒ relation Many to Many

4eme ligne :  affichage des commentaires et créer un commentaire

---

Commentaires sont affichés comme dans la page single-product, avec le même décalage

- [ ]  Afficher les commentaires
    1. Le 1er est a la ligne
    2. Tous les autres sont sur la même ligne verticale mais un peu décalé vers la gauche par rapport au 1er
    3. Ils sont affiché du plus récent, au moins récent. Le dernier créé en haut

- [ ]  En dessous des articles → formulaire pour créer un article → quand on est connecté, le formulaire doit être pré rempli

Footer

---

- [ ]  Identique à celui de la page shop-list

### 2.6 Page about us

1ere ligne :  texte modifiable et image

---

- [ ]  Texte avec quelques infos de l’entreprise modifiable dans backoffice par admin
- [ ]  Le titre on s’en fou
- [ ]  Image représentant l’entreprise modifiable dans backoffice par admin

2eme ligne :  Team member

---

Membre de la team → rien avoir avec les membres du site

A modifier, ajouter dans backoffice

- [ ]  afficher 4 cards
- [ ]  Le patron à gauche, en 1er sur la ligne
- [ ]  Et 3 employés pris au hasard sur la droite
- [ ]  Chaque employé à :
    1. photo
    2. nom 
    3. prénom
    4. fonction
    5. info
    6. barre réseaux sociaux → statique, non fonctionnelle
    

Footer

---

- [ ]  Identique à celui de la page shop-list

### 2.7 Page Contact

- [ ]  Map google
- [ ]  Contact Details → quand on modifie l’adresse → ça modifie la map google
- [ ]  Send Message → formulaire de contact qui envoi réellement un mail ( pas de mailTrap) ⇒ chercher sur internet pour configurer avec google

### 2.8 Page My Account

Page avec 3 formulaires contenant les infos du user connecté, permettant de modifier ses données

My payement Method : 

- [ ]  Pas grand chose à faire, ce sera le même moyen de payement

My wishlist :

- [ ]  Rien à faire, supprimée par Cactus

My personal information :

- [ ]  Quand on s’inscrit, on donne les informations de bases, et on peut les compléter par la suite
    1. name
    2. email address
    3. phone
    4. company
    5. country
    6. state
    7. city
    8. address

My billing address :

- [ ]  Formulaire identique aux personal information

Order history and details :

- [ ]  Affiche la dernière commande effectuée

### 2.9 Page Cart → panier → en 3 étapes

Banière

---

- [ ]  Pouvoir la modifier dans le backoffice

1ere ligne :  les produits sélectionnés

---

- [ ]  Les produits sélectionnés sont dans un tableau
    1. Photo
    2. Product
    3. Price
    4. Quantity → on doit pouvoir ajuster
    5. Total
    6. Remove → on doit pouvoir supprimer l’article

2eme ligne :  Coupon Discount et Payement Details

---

Coupon :

- [ ]  Quand on entre le code cactus best coach ever → on AJOUTE (oui c’est bizarre) 20 %

Payement Details :

- [ ]  Doit s’adapter avec le coupon

Quand on click sur Proceed check out → on passe sur la page checkout (2eme étape du panier)

### 2.10 Page Checkout

Banière

---

- [ ]  Pouvoir la modifier dans le backoffice

Billing Details et Our Order

---

Billing :

- [ ]  Au cas ou le user n’aurait pas rempli la billing details

Order :

- [ ]  Pour la tva → tout à 21 %

On click sur place order → vers la page “ Order “

### 2.11 Page Order

Banière

---

- [ ]  Pouvoir la modifier dans le backoffice

1ere ligne : message de remerciement

---

- [ ]  Générer un order aléatoirement
- [ ]  Date → adapter en fonction
- [ ]  Total → adapter en fonction
- [ ]  Mode de payement → le même

2eme ligne : Our order

---

- [ ]  Résumer de ce qu’on doit payer

⇒ Quand une commande a été passée → ça envoi automatiquement un mail à l’utilisateur 

# 3 Back → backoffice

## 3.1 page User

- [ ]  Afficher
- [ ]  Modifier
- [ ]  Changer leur rôle

## 3.2 page mailBox

- [ ]  Recevoir les mails des users → qu’on recoit dans une base de donnée → et qu’on affiche
- [ ]  Lire les mails
- [ ]  Répondre aux mails
- [ ]  Supprimer les mails
- [ ]  Archiver les mails

Un mail qui n’a pas encore été lu est affiché différement des autres, gras ou souligné ...

Si il a déjà été lu il est grisé

## 3.3 page commande

- [ ]  Historique des commandes que les utilisateurs vont passer
- [ ]  Annuler une commande → et ça envoie un mail à l’utilisateur pour lui confirmer que sa commande a été annulée

## 3.4 page article

- [ ]  Créer un article
- [ ]  Modifier un article
- [ ]  Supprimer un article
- [ ]  Publier un article. Avant d’être publier, l’article doit être validé (doit passer par un état de validation) par l’admin. Le rédacteur peut valider son propre article. (plus de détails plus loin).

## 3.5 page produit

- [ ]  créer des produits
- [ ]  modifier les stocks disponibles
- [ ]  modifier les infos liées à  ce produit
- [ ]  Quand un produit est ajouté, ça envoie un mail à tous ceux qui sont abonné à la newsletter

## 3.6 page team

- [ ]  créer des membres de la team (employé)
- [ ]  Définir qui est le membre principal (patron)

## 3.7 page info

- [ ]  modifier :
    1. info du contact
    2. map google
    3. banières
    4. autre ... (comme image team, texte info team, ...)
    

## 3.8 page Catégorie et Tag

- [ ]  créer catégories pour produits
- [ ]  créer catégories pour articles
- [ ]  créer des tags pour les articles
- [ ]  Si catégorie ou tag supprimé → ça ne supprime pas les articles (ou produits)

## 3.9 page rôle

⇒ 5 rôles

1. admin → accès à tout → pas de validation si crée un article
2. webmaster → rien → backoffice → catégorie → article → créer et éditer et valider → pas de validation si crée un article
3. redacteur → comme le webmaster MAIS uniquement SES articles (juste ceux qu’il a créé) → ses articles sont soumis à la validation par admin ou webmaster
4. stock → produit → créer, éditer, supprimer
5. user → rien, juste le front

# 4 Utiliser le Bootstrap 4 de la template

⇒ toutes les images sont upload et resize

⇒ utiliser les pages html qui commencent par element. → elles contiennent plusieur éléments comme des accordéons ou des boutons déjà codé avec bootstrap

⇒ faire un repository et inviter Cactus tout de suite

⇒ faire un notion

⇒  nom du projet → Projet_Final_Geoffrey_Gosset