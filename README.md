# Checkpoint 3

![Gif Noël](http://www.informatiquegifs.com/gifs/images/noel/88.gif)

## Fais ta liste au Père Noël !!!

Noël approche, pour ça je ne t'apprends rien.  
Le problème c'est que le Père Noël est à la bourre (ou bien c'est toi ?.)  
Bref, il n'a pas encore reçu ta liste de cadeaux.  

Tu imagines bien ce que tu vas devoir faire du coup....
![sac](https://media.giphy.com/media/K90ckojkohXfW/giphy.gif)  
## Step

### 1. Récupération du projet
# Une fois le projet cloné, crée une branche à ton nom et déplace toi dessus, une fois le travail terminé, fais un push de ta branche

![Chat](https://media.giphy.com/media/3AJIqhQmHBEcM/giphy.gif)  

Clone le projet, il s'agit d'une application Symfony 3.4, cette dernière est totalement nue, il s'agit uniquement d'une application générée avec la commande ```Symfony new checkpoint-3-php-ParisCode 3.4```, rien n'a été modifié à l'intérieur.  

Déplaces-toi ensuite dans le dossier, et n'oublie pas que tu as une petite commande à exécuter (je suis désolé, je ne m'en souviens jamais, mais je crois que ça commence par `composer` :-) )

### Quizz
![youpi](https://media.giphy.com/media/5xtDaryAMLjvAyN4eiY/giphy.gif)  
Dans le projet que tu viens de cloner se trouve un fichier **Checkpoint 3 - QCM**.  
Il s'agit du quizz, fait le en premier mais ne prend pas plus d'une demi-heure, il ne faut pas faire attendre le Père Noël plus que ça, sinon pas de cadeau sous le sapin...

### 2. Entity
Pour faire notre liste au Père Noël, nous aurons dans un premier temps besoin d'une seule entitée.  
Tu créeras cette dernière dans App Bundle.  
Elle devra être définie comme suit:  

**Nom de l'entitée:** Gift  

Cette dernière devra posséder les propriétées suivantes:
- giftName, string, 100
- giftPictureUrl, string, 255
- giftDescription, text
- giftPrice, float

### 3. CRUD
![super](https://media.giphy.com/media/3o6ZtpBTZZ6AaKHXwc/giphy.gif)  
Une fois ton entitée créée, on va devoir l'utiliser.  
Pour cela, génère un CRUD sur cette dernière afin de récupérer les méthodes nécessaires à la création, la mise à jour, la suppression et l'affichage des informations.  

### 4. Un peu de style
Maintenant que tu peux créer ta liste au père Noël, ajoute y un peu de style. 
1. Actuellement ta vue qui liste toutes tes demandes n'est pas très belle (*index.html.twig*), ce serait sympa d'y retrouver un peu l'esprit de Noël, non ?  
2. Quelques liens pour t'aider:
	- http://symfony.com/doc/3.4/best_practices/web-assets.html
	- [Noël Pictures](https://www.google.fr/search?q=noel&safe=active&client=firefox-b-ab&dcr=0&tbs=sur:fc&tbm=isch&source=lnt&sa=X&ved=0ahUKEwibl4SXrZvYAhVOEVAKHfb0AvUQpwUIHg&biw=1440&bih=720&dpr=1)

### 5. Sympa une belle liste, mais l'idée, c'est quand même que Santa la reçoive non ?
![haha](https://media.giphy.com/media/g4HNPdJHRX3O0/giphy.gif)  
Tu as déjà envoyé un mail avec Swift Mailer sur ton projet 2, qu'à cela ne tienne, c'est pareil dans Symfony.  
1. En utilisant Swift Mailer, envoie un mail à ton Santa préféré, voilà son adresse: florian.pdf@gmail.com (ça va j'ai le droit de rêver un peu non ?)

### BONUS ![bangg](https://media.giphy.com/media/dIMl2dLIzjDNK/giphy.gif)  
Tiptop la liste, mais mes lutins ont chacun une spécificité, si je pouvais avoir tes cadeaux triés par catégorie, ce serait génial...  
L'idée est que lors de l'ajout d'un nouveau cadeau, tu puisses avoir le choix entre différentes catégories (j'ai vraiment une mauvaise organisation cette année, je ne connais pas encore bien mes lutins, il faudrait que l'on puisse créer, éditer, et voir les catégories)

# Good Luck

![ordure](https://media.giphy.com/media/26tPfy3nxxcnhjlzq/giphy.gif)