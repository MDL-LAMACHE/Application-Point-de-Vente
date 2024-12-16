Ce document présente la roadmap détaillée pour le développement de l'application MDL Shop, une application
web responsive permettant aux vendeurs de gérer les ventes et le stock directement depuis une tablette.
L'application sera également convertie en APK pour une utilisation sur Android. L'équipe est composée de
membres juniors, avec Bastien en charge du frontend, Lux du backend, et Sacha de la relecture du code.

## Étape 1 : Planification et préparation
1. **Réunion initiale**
   - Analyse du cahier des charges par l’équipe.
   - Validation des technologies utilisées : Frontend (HTML, CSS, JavaScript, Bootstrap), Backend (PHP, MySQL),
     Packaging (Cordova/PhoneGap pour la conversion en APK).
   - Répartition des tâches : Bastien (Frontend), Lux (Backend), Sacha (Relecture du code).
   - **Livrables de cette étape :**
     - Maquettes validées (Bastien).
     - Script SQL initial pour la base de données (Lux).
     - Organisation du projet dans un dépôt Git.

## Étape 2 : Conception du frontend par Bastien
1. **Création des maquettes et structure HTML :**
   - Pages nécessaires : Page 'Vente', Page 'Stock', Page 'Historique'.
   - Construction du HTML en sections bien définies, avec des placeholders pour les futures fonctionnalités dynamiques.
2. **Développement CSS et responsivité :**
   - Utilisation de Bootstrap pour assurer un affichage adapté aux tablettes.
   - Ajout de styles personnalisés pour une interface tactile : Grands boutons, Mise en valeur des totaux et des catégories.
3. **Livrables de cette étape :**
   - Structure HTML/CSS complète et responsive.

## Étape 3 : Développement JavaScript par Bastien
1. **Ajout de l’interactivité utilisateur :**
   - Création des fonctionnalités dynamiques : Sélection de produits, Modification des quantités et suppression de produits,
     Calcul du total en temps réel.
2. **Gestion des statuts des produits :**
   - Désactivation des boutons pour les produits en rupture de stock.
   - Gestion des animations pour améliorer l’expérience utilisateur (produits ajoutés au panier).
3. **Livrables de cette étape :**
   - Fichiers JavaScript gérant l’interactivité et la logique frontend.

## Étape 4 : Conception du backend par Lux
1. **Création de la base de données MySQL :**
   - Tables nécessaires : Produits (ID, nom, catégorie, prix, stock), Ventes (ID, produit_id, quantité, prix total, date),
     Catégories (ID, nom).
2. **Développement des routes PHP :**
   - Endpoints principaux : GET /produits, POST /vente, GET /historique.
3. **Sécurisation et tests des routes :**
   - Validation des entrées utilisateur, Protection contre les injections SQL et autres vulnérabilités.
4. **Livrables de cette étape :**
   - Backend fonctionnel avec des routes testées et documentées.

## Étape 5 : Intégration frontend-backend
1. **Connexion des composants par Bastien et Lux :**
   - Récupération dynamique des produits depuis l’API (GET /produits), Envoi des données des ventes (POST /vente) depuis le frontend.
   - Mise à jour du stock en temps réel dans l’interface utilisateur.
2. **Tests fonctionnels :**
   - Vérification des interactions complètes : Ajout et suppression de produits, Mise à jour automatique du stock après une vente,
     Affichage trié de l’historique des ventes.
3. **Livrables de cette étape :**
   - Application fonctionnelle connectée au backend.

## Étape 6 : Relecture par Sacha
1. **Analyse et correction du code produit par Bastien :**
   - Revue des fichiers HTML, CSS, et JavaScript pour : Respect des bonnes pratiques, Optimisation du code pour la maintenabilité.
2. **Livrables de cette étape :**
   - Frontend révisé et documenté.

## Étape 7 : Tests et packaging final
1. **Tests collectifs :**
   - Simulation de scénarios utilisateur (rupture de stock, commandes multiples).
   - Identification et correction des derniers bugs.
2. **Conversion en APK :**
   - Utilisation de Cordova/PhoneGap pour rendre l’application installable sur tablette.
   - Tests de compatibilité et d’ergonomie sur différents écrans.
3. **Livrables de cette étape :**
   - APK finalisé et prêt à être déployé.

## Conclusion
Cette roadmap décrit les étapes détaillées pour le développement de l'application MDL Shop, avec une forte collaboration entre
les membres de l’équipe. Chaque tâche a été définie clairement et les commits doivent être clairs et détaillés pour une
meilleure gestion du projet. Sacha relira le code tous les soirs pour garantir la qualité du développement.
