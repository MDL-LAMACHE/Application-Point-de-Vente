# Application Point de Vente (POS)

## Description

Cette application est un système de point de vente (POS) en cours de développement. Elle est conçue pour aider les commerçants à gérer leurs ventes, leur inventaire, et leurs transactions de manière efficace et intuitive. L'objectif est de fournir une solution simple et flexible pour les petites, moyennes entreprises et les associations.

### Fonctionnalités principales (à venir) :
- Gestion des ventes : ajout, modification et suppression des ventes
- Suivi des stocks et gestion de l'inventaire
- Génération de rapports de vente et d'inventaire
- Interface utilisateur simple et réactive
- Système de gestion des utilisateurs (admins, caissiers, etc.)
- Paiement en ligne et gestion des différentes méthodes de paiement

## Installation

### Prérequis :
- Node.js
- npm ou yarn
- Base de données (par exemple MySQL, MongoDB)

### Pour installer et démarrer l'application :
1. Clonez ce repository :
   <pre><code>git clone https://github.com/MDL-LAMACHE/Application-Point-de-Vente.git</code></pre>
2. Accédez au répertoire du projet :
   <pre><code>cd Application-Point-de-Vente</code></pre>
3. Installez les dépendances :
   <pre><code>npm install</code></pre>
   ou si vous utilisez Yarn :  
   <pre><code>yarn install</code></pre>
4. Configurez votre base de données (consultez le fichier `config.json` pour les variables d'environnement nécessaires).
5. Lancez l'application :
   <pre><code>npm start</code></pre>
   ou avec Yarn :  
   <pre><code>yarn start</code></pre>

## Contributeurs

Ce projet est actuellement en développement.

[![Contributeurs](https://contrib.rocks/image?repo=MDL-LAMACHE/Application-Point-de-Vente)](https://github.com/MDL-LAMACHE/Application-Point-de-Vente/graphs/contributors)
## Roadmap

## Objectif du Projet
- [ ] Créer une application web responsive permettant aux vendeurs de gérer les ventes en magasin.
- [ ] Permettre de sélectionner des produits, les ajouter à une commande, et enregistrer les ventes tout en affichant le total.
- [ ] Optimiser l'application pour une utilisation sur tablette et permettre son installation en tant qu'APK.
- [ ] Vérifier les paiements par carte via l'API SumUp avant d'enregistrer la vente dans la base de données.

## Technologies
- [ ] **Frontend** : HTML, CSS, JavaScript (avec Bootstrap.
- [ ] **Backend** : PHP.
- [ ] **Base de données** : MySQL.
- [ ] **Packaging** : Utilisation de Cordova ou PhoneGap pour convertir l'application en APK.
- [ ] **Paiement** : Intégration de l'API SumUp pour la gestion des paiements par carte.

## Fonctionnalités Principales
- [ ] **Interface de l'Application** :
   - [ ] Zone des produits :
      - [ ] Affichage des produits sous forme de boutons ou cartes cliquables.
      - [ ] Organisation des produits par catégories.
      - [ ] Désactivation des boutons des produits en rupture de stock.
   - [ ] Liste des produits sélectionnés :
      - [ ] Afficher les produits ajoutés à la commande avec quantité et prix.
      - [ ] Calculer et afficher le total en temps réel.
      - [ ] Permettre la modification des quantités et la suppression de produits.
- [ ] **Gestion du Stock** :
   - [ ] Ajouter ou modifier les quantités disponibles dans un onglet "Stock".
   - [ ] Mettre à jour automatiquement le stock après chaque vente.
   - [ ] Désactiver les produits avec un stock nul dans l'interface des produits.
- [ ] **Vente et Paiement** :
   - [ ] Enregistrer les ventes dans un onglet "Vente".
   - [ ] Envoyer une requête à l'API SumUp pour vérifier si le paiement par carte est bien passé.
   - [ ] Si le paiement est validé ("paid"), enregistrer la vente dans la base de données.
   - [ ] Détails enregistrés : produit, quantité, prix, total, date, et état du paiement.
- [ ] **Historique des Ventes** :
   - [ ] Afficher l'historique des ventes dans un onglet dédié.
   - [ ] Permettre de trier les ventes par jour, semaine, ou mois.
- [ ] **Conversion en APK** :
   - [ ] Garantir une compatibilité responsive pour tablettes et smartphones.
   - [ ] Utiliser Cordova ou PhoneGap pour convertir l'application en APK.
   - [ ] Optimiser l'interface pour une navigation tactile.

## Exigences Techniques
- [ ] **Frontend** :
   - [ ] CSS avec framework responsive (Bootstrap/Vue.js).
   - [ ] JavaScript pour gérer les commandes et le calcul du total en temps réel.
- [ ] **Backend** :
   - [ ] PHP pour gérer la logique côté serveur.
   - [ ] Connexion à l'API SumUp pour les paiements par carte.
   - [ ] Connexion à une base de données MySQL.
- [ ] **Base de données** :
   - [ ] Table Produits : ID, nom, catégorie, prix, stock.
   - [ ] Table Ventes : ID, produit_id, quantité, prix, total, date, état du paiement.
   - [ ] Table Catégories : ID, nom.
- [ ] **Sécurité** :
   - [ ] Protéger les données des attaques par injection SQL.
   - [ ] Sécuriser la communication avec l'API SumUp.

## Design et Expérience Utilisateur
- [ ] Interface intuitive avec navigation tactile optimisée pour tablette.
- [ ] Boutons grands et lisibles pour une interaction rapide.
- [ ] Affichage clair des informations essentielles : prix, total, état du paiement.

## Délai et Livrables
- [ ] **Livrables** :
   - Code source complet (HTML, CSS, JavaScript, PHP).
   - Base de données MySQL pré-configurée.
   - APK pour Android.
## License

Ce projet est sous licence [MIT](https://opensource.org/licenses/MIT).
