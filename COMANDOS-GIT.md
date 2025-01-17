# Comandos Iniciales GIT & GITHUB
### Configuración e Instalación
---
### Descargar Git y luego instalar
- https://git-scm.com/downloads/win
### Crear una cuenta en Github o (GitLab, BitBucket)
- https://github.com/
### Configuración de GIT en su equipo
...
git config --global user.name "icervantesp"
git config --global user.email "ibakcloud@gmail.com"
...

----
## Crear un repositorio en Github

## Subir su codigo (Proyecto Laravel al repositorio de Github)
...
git init 
git remote add origin https://github.com/icervantesp/ejemplo-api-laravel.git
...
###  Comandos para subir
...
git add .
git commit -m "Proyecto Base Laravel"
git push origin master
...