# Hello World! 👽👽🛸



You are currently reading the README of my AWS project where I committed to implementing Docker on AWS to create a fully optimized website! 🌍

## Project overview

The goal of this project was to leverage AWS cloud services to create a virtual server that hosts a single-page website. The entire stack, including web servers, databases, and PHP applications, runs inside Docker containers. 🧠

- The website is only accessible via a secure HTTPS connection using a self-signed certificate.
- A login form will welcome users, ensuring secure authentication before granting access to the website content.
- The website is developed following HTML5 and CSS3 standards. 🖥️🖥
- 
### Technologies Used

- AWS Cloud
- Docker
- Nginx
- PHP
- MariaDB



## Backend Configuration Guide

To create the virtual server, I used configuration techniques such as Docker, Nginx, PHP, and MariaDB for database management.

Below is a simple guide on configuring the backend managed by AWS:


1. istall docker Engine
```bash
sudo apt update
sudo apt install -y docker.io
```

2. enable docker 
```bash
sudo systemctl enable docker 
```

3. istall docker compose
```bash
  sudo curl -L "https://github.com/docker/compose/releases/latest/download/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
```

4. Now, create your folder for the project;
Note you can call it whatever you want :)
```bash
   mkdir ~/docker-project-example
```

5. change the folder to the one you just created
```bash
    cd ~/docker-project-example
```

### all right!! 👍👍



## after that you have to add NGINX and SSL 👾

1. create the file docker-compose
```bash
     nano docker-compose.yml
```
- After that AWS will open to you the file that you just created

2. copy this code in your file
```bash
      version: "3.9"
 services:
      nginx:
        image: nginx:latest
        container_name: nginx-container
        ports:
         - 80:80
```
- Cool, now close it pressing the combination of keys: ctrl+x + y + send.

3. start the nginx container
```bash
     sudo docker-compose up -d
```
### It's nice to see all that green check, right?  ✅✅



4. as last thing, create the certification in the ssl folder
```bash
mkdir ~/ssl 
sudo openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout ~/ssl/key.pem -out ~/ssl/cert.pem
```

5. connect the ngnix container with these commands:
```bash
 sudo docker run -d --name proxyapp --network docker-project_default -p 443:443 -e DOMAIN=*.compute-1.amazonaws.com -e TARGET_PORT=80 -e TARGET_HOST=docker 
 project-nginx-1 -e SSL_PORT=443 -v ~/ssl:/etc/nginx/certs --restart unless-stopped fsouza/docker-ssl-proxy
```
-now the compiler will ask you to enter:
- Name of the country
- State or Province name
- location name
- Organization name
- Organization Unit name
- Common name
- Email Address

put the names you want, it's the same but remember them, you never know ;)


### You're almost there! 🤯🤏


## You can pass now to configure the PHP side 🤖
1. create the php folder (you can put the name you want here too)
```bash
mkdir ~/docker-project/php_code-exemple
```
2. clone the docker repository created before whit the GitHub path, for exemple:
```bash
git clone https://github.com/Cuco22/progetto_AWS ~/docker-project/php_code/
```
- - attention: the first part of this command is linked to the gitHub path of your project, only the second (~/docker-project/php_code-exemple/) is the actual one

3. create a file called Dockerfile in the php_folder (if you want to see your current path write the command: pwd)
```bash
FROM php:7.0-fpm
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN docker-php-ext-enable mysqli
```

4. create a new folder nginx
```bash
mkdir ~/docker-project/nginx
```

5. create a new file for ngnix configuration
```bash
sudo nano ~/docker-project/nginx/default.conf
```

6. add this code into the file default.conf
```bash
server {  

 listen 80 default_server;  
 root /var/www/html;  
 index index.html index.php;  

 charset utf-8;  

 location / {  
  try_files $uri $uri/ /index.php?$query_string;  
 }  

 location = /favicon.ico { access_log off; log_not_found off; }  
 location = /robots.txt { access_log off; log_not_found off; }  

 access_log off;  
 error_log /var/log/nginx/error.log error;  

 sendfile off;  

 client_max_body_size 100m;  

 location ~ .php$ {  
  fastcgi_split_path_info ^(.+.php)(/.+)$;  
  fastcgi_pass php:9000;  
  fastcgi_index index.php;  
  include fastcgi_params;
  fastcgi_read_timeout 300;
  fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;  
  fastcgi_intercept_errors off;  
  fastcgi_buffer_size 16k;  
  fastcgi_buffers 4 16k;  
}  

 location ~ /.ht {  
  deny all;  
 }  
}
``` 

7. create a new Dockerfile into nginx directory
```bash
mkdir ~/docker-project/php_code-exemple
```

and add this code inside:
```bash
FROM nginx
COPY ./default.conf /etc/nginx/conf.d/default.conf
```

- 8. now return to your file docker-compose.yml and replace the command that is alredy present with this one
```bash
version: "3.9"
services:
   nginx:
     build: ./nginx/
     ports:
       - 80:80
  
     volumes:
         - ./php_code/:/var/www/html/

   php:
     build: ./php_code/
     expose:
       - 9000
     volumes:
        - ./php_code/:/var/www/html/
- save and close it (ctrl+x + y + send)
```

9. launch the containers:
```bash
sudo docker-compose up -d
```

10. finally, let's see all the containers 👀
```bash
sudo docker ps
```

finished, what a struggle eh? 

   
- now all you have to do is configure your database session
    - I used MariaDB to connect a database that included a table for managing users who can access my website.
 
## Update the repository on your AWS project 🩻
1. move to the folder of your repository
```bash
cd docker-project/php_code/
```

2. Do a git pull for update all the file
```bash
git pull
```

## finisched!!


# About me 👤
Link to instagram:  https://www.instagram.com/lucaa.cuco/
- Mi chiamo Luca Cuconato e frequento l'ultimo anno di scuole superiori presso l'istituto Antonio Bernocchi di Legnano, indirizzo informatica e telecomunicazioni. 🌐
- Ho 18 anni e sono italiano. 🤌🏻🍝

