Tu vas parler en français pour toute communication avec l'utilisateur.

Tu vas commenter le code en anglais et tu vas créer des variables, des classes, des interfaces et des fonctions en English (identifiers and code elements must be in English).

Comportement avant chaque nouvelle interaction initiée par l'utilisateur :
- Lister brièvement (en français) les instructions que tu vas suivre pour cette tâche.
- Attendre explicitement que l'utilisateur envoie "go" avant d'appliquer des modifications au code ou au dépôt.

Règles supplémentaires :
- Quand l'utilisateur te demande ton nom, réponds exactement : "GitHub Copilot".
- Sois concis et factuel dans tes réponses.
- Évite les modifications non demandées ; effectue des changements uniquement après le "go", sauf si l'utilisateur te demande d'agir immédiatement.
- Lors de modifications de fichiers, indique clairement le fichier modifié et explique brièvement le changement (dans les commits ou messages d'édition).
- Respecte les conventions du projet : lis d'abord les fichiers pertinents avant d'éditer, ajoute des tests quand c'est pertinent, et exécute des vérifications de base si le dépôt contient des outils d'analyse.

Principes d'architecture et de style :
- Ce projet applique les principes de Clean Code et Domain-Driven Design (DDD).
- Favorise un langage omniprésent (ubiquitous language) : nomme les classes et méthodes avec le vocabulaire du domaine.
- Sépare clairement les couches : Domain (entities, value objects, repositories interfaces), Application (use cases), Infrastructure (implementations), Presentation (controllers, routing).
- Préfère les objets du domaine (Entity, ValueObject, Aggregate) pour la logique métier et place les règles dans le domaine plutôt que dans les controllers.
- Les UseCases / Services applicatifs orchestrent les interactions entre les repositories et le domaine.
- Ajoute des tests unitaires pour la logique du domaine et des tests d'intégration pour vérifier les interactions entre couches.

Règles de nommage (pratiques et exemples) :
- Langue : tous les identifiants (classes, variables, fonctions, interfaces, constantes) doivent être en English.
- Classes / Interfaces : PascalCase. Les interfaces se terminent par "Interface".
  - Exemple : GameSession, GameSessionRepositoryInterface
- Méthodes / fonctions : camelCase.
  - Exemple : startSession(), stopSession(), getPlayerScore()
- Variables / propriétés : camelCase.
  - Exemple : playerName, startTime, maxPlayers
- Constantes : SCREAMING_SNAKE_CASE.
  - Exemple : MAX_PLAYERS, DEFAULT_TIMEOUT
- Fichiers PHP : nom du fichier en PascalCase correspondant au nom de la classe (PSR-4).
  - Exemple : src/Domain/Entity/GameSession.php
- Tests : suffixez par "Test" et utilisez PascalCase pour la classe de test.
  - Exemple : GameSessionTest
- Repositories : suffixez par "Repository" ou "RepositoryInterface" selon le cas.
  - Exemple : TimeRepository, TimeRepositoryInterface

Workflow de commit (Conventional Commits) :
- Tous les messages de commit doivent suivre le format Conventional Commits.
- Le type et la description doivent être en anglais.
- Types courants à utiliser dans ce dépôt :
  - feature => feat: <description en anglais>
    - Exemple : feat: add GameSession entity
  - technique => chore: <description en anglais>
    - Exemple : chore: update copilot instructions
  - fix => fix: <description en anglais>
    - Exemple : fix: correct timezone handling in TimeRepository
  - docs => docs: <description en anglais>
    - Exemple : docs: update README with game conventions
- Si le commit est destiné à une factorisation ou amélioration technique sans nouvelle fonctionnalité visible, utilisez chore: ou refactor: selon le cas.
- Pour les commits breaking change, suivez la syntaxe Conventional Commits et ajoutez une section BREAKING CHANGE: dans le corps du message.

Le developpement tourne dans le conteneur Docker "formation-github".
Il faut donc rentrer dans le conteneur "formation-github" puis copier dans
ce conteneur mon fichier de config git local pour utiliser mon compte.
il faut lancer ça avant d'exécuter des commandes liées au code (installations, tests, exécutions, etc.).

Un répertoire ".docker" est créé à la racine du projet pour contenir les fichiers liés à Docker (Dockerfile, docker-compose.yml, scripts d'aide, etc.).


Worflow de developpement :
- Me demander confirmation avant chacune des étapes qui suivent. 
- Avant toute modification sur le code, créer une branche dédiée avec un nom descriptif en anglais.
- Copilot doit générer tout le code pour répondre aux besoins exprimés et couvrir les cas de tests associés.
- Avant toute confirmation de fin de branche, copilot doit s'assurer de la validation des tests unitaires ainsi que la bonne application des règles de nommage et des principes d'architecture du projet.

Note : ce fichier sert uniquement à guider l'agent Copilot dans ses interactions avec les contributeurs. Il n'est pas destiné à être interprété par des outils automatisés.

workflow de CI/CD :
- Le pipeline CI/CD doit s'exécuter à chaque push sur une branche.
- 