# falmewai

### INSTALACION
---
1.- ir al git

[Github de falmewai](https://github.com/XxXTomatox/falmewai.git)

2.- Dercargar el git con un git clone 

	git clone https://github.com/XxXTomatox/falmewai.git

3.- si lo tienes en virtual host ir a [[configuración virtual host]] si no sigue al paso 4


4.- instalar las dependencias con el siguientes comando

	npm install -y
	
	composer install 

5.- con figurar la conexion a tu base de datos con el archivo .env

	PUERTO = 3306
	USUARIO = 'root'
	PASSWORD = ''
	HOST = 'localhost'
	DBNAME = 'EjemploBD'

5.- ir a configurar el archivo config/Route.php

	private const SERVER = "Url del servidor local o virtual";

## DESCRIPCION DE FLAMEWAI
---

Flamewai es un marco de aplicación web con una sintaxis elegante y expresiva. Un marco web proporciona una estructura y un punto de partida para crear su aplicación, lo que le permite concentrarse en crear algo sorprendente mientras nos preocupamos por los detalles.

Flamewai es un framework que puede crecer contigo. Le ayudaremos a dar sus primeros pasos como desarrollador web o le daremos un impulso a medida que lleva su experiencia al siguiente nivel. No podemos esperar a ver lo que construyes.

## PRIMEROS PASOS
---
En los primeros pasos para comensar a crear tu proyecto deves de crear controller, model,view
y para eso se le va a dar comandos para hacerlo 
#### Crear un [[Controller]]

Para crear un controller se nesesitarar colocar este comando 

	node flamewai.js controller NombreController

#### Crear un [[Model]]

	node falmewai.js model NombreModel

#### Crear una [[View]]

	node falmewai.js view NombreView
	
