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

Note : ce fichier sert uniquement à guider l'agent Copilot dans ses interactions avec les contributeurs. Il n'est pas destiné à être interprété par des outils automatisés.
