
# Muxx
Le site de l'artiste

## Deployment

Utilisez les commandes make pour déployer le projet

```bash
  npm run deploy
```

 —— 🔥 App ——                 
```init                           Init the project
cache-clear                    Clear cache
```
 —— ✅ Test ——                
```tests                          Run all tests
database-init-test             Init database for test
unit-test                      Run unit tests
functional-test                Run functional tests
e2e-test                       Run E2E tests
 —— 🐳 Docker ——              
start                          Start app
stop                           Stop app
 —— 🎻 Composer ——            
composer-install               Install dependencies
composer-update                Update dependencies
```
 —— 🐈 NPM ————————————————————————————————————————————————————————————————— 
 ```
npm-install                    Install all npm dependencies
npm-update                     Update all npm dependencies
npm-watch                      Update all npm dependencies
 —— 📊 Database ——            
database-init                  Init database
database-drop                  Create database
database-create                Create database
database-remove                Drop database
database-migration             Make migration
migration                      Alias : database-migration
database-migrate               Migrate migrations
migrate                        Alias : database-migrate
database-fixtures-load         Load fixtures
fixtures                       Alias : database-fixtures-load
 —— 🛠️  Others ——            
help                           List of commands
```
## Run Locally

Clone the project

```bash
  git clone https://github.com/Slvn89/compta.git
```

Go to the project directory

```bash
  cd compta
```

Install dependencies

```bash
  docker compose up -d
```

Start the server

```bash
  docker compose ps
```

