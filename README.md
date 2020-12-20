# Pré-requis

## Docker Installation

Tu peux trouver une installation docker propre à ton système d'exploitation sur ce site:
https://www.docker.com/get-started

# Lancer les serveurs

1. Ouvrir un terminal

2. Se placer dans le dossier du projet

```bash
# cd <chemin du projet>
```

Les serveurs sont configurés pour ne pas automatiquement se lancer au redémarrage de l'ordinateur.

```bash
# docker-compose up -d
```
L'option -d signifie daemon, est fait pour que docker s'execute en tâche de fond.

Lors de la première exécution, docker va télécharger les images des différents serveurs dont-il a besoin.
Dans notre cas, mysql et httpd.

# Accéder au site

Tu peux ensuite accéder au site en tappant: http://localhost dans ton navigateur.

# Arrêter les serveurs


```bash
# cd <chemin du projet>
```

```bash
# docker-compose down
```
