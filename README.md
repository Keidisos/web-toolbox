# Web Security Toolbox

## 📌 Description
**Web Toolbox** est une application web conçue pour tester automatiquement la sécurité d'un site web. 
Elle exécute des scénarios d'attaque courants afin d'identifier les vulnérabilités potentielles et génère un rapport final détaillant l'état de sécurité du site testé.

## 🚀 Fonctionnalités
- **Tests automatiques** des vulnérabilités web (XSS, SQL Injection, CSRF, etc.).
- **Génération de rapports** sur les failles détectées.
- **Authentification utilisateur sécurisée** (inscription et connexion).
- **Interface intuitive** avec un design moderne.
- **Bonnes pratiques en cybersécurité** affichées via un carrousel sur la page d'accueil.

## 🛠️ Installation
### 1️⃣ Prérequis
- Un serveur **Debian** avec **Apache, PHP et MySQL** installés.
- **Git** pour récupérer le projet.

### 2️⃣ Cloner le projet
```bash
git clone https://github.com/Keidisos/web-toolbox.git
cd web-toolbox
```

### 3️⃣ Configurer la base de données
1. **Créer la base de données**
```sql
CREATE DATABASE webapp_db;
```
2. **Importer la structure**
```bash
mysql -u root -p webapp_db < backup_webapp_db.sql
```
ou en utilisant le script `import_db.sh`
```bash
chmod +x import_db.sh
./import_db.sh
```

### 4️⃣ Configurer l'application
Renommer le fichier `.env.example` en `.env` puis modifier les valeurs :
```
DB_HOST=localhost
DB_NAME=webapp_db
DB_USER=root
DB_PASS=yourpassword
```

### 5️⃣ Lancer le serveur Apache
```bash
sudo systemctl restart apache2
```

## 📄 Utilisation
1. **Accéder à l'application** via :
   - `http://localhost/` (en local)
   - `http://votre-domaine.com/` (en ligne)
2. **Créer un compte et se connecter**.
3. **Lancer une analyse de sécurité** en entrant l'URL du site à tester.
4. **Consulter le rapport** et appliquer les recommandations.

## ⚠️ Avertissement
Ce projet est destiné **uniquement à des fins d’audit légal** et **ne doit en aucun cas être utilisé sur un site sans l'autorisation de son propriétaire**.

## 🏗️ Améliorations futures
- Génération de rapports en PDF.

## 📜 Licence
Ce projet est sous licence **MIT**. Vous pouvez l'utiliser et le modifier librement.
