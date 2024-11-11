# PHP Basic Calculator

Este repositorio contiene una aplicación básica de calculadora en PHP que realiza operaciones matemáticas básicas: suma, resta, multiplicación y división.

## Descripción

El programa toma dos números (`num1` y `num2`) y una operación matemática (`operation`) como entrada, luego calcula y muestra el resultado de la operación solicitada. Las operaciones admitidas son: suma, resta, multiplicación y división.

## Requisitos

- **Lenguaje**: PHP
- **Dependencias**: PHP 7 o superior

## Cómo Clonar y Ejecutar

## Para clonar este repositorio en tu máquina local y ejecutarlo, sigue estos pasos:

```bash
git clone https://github.com/<tu-usuario>/php-basic-calculator.git
cd php-basic-calculator
```

Para ejecutar el programa en un contenedor Docker, usa los siguientes pasos:

1. **Construir la imagen Docker**:
```bash
docker build -t php-basic-calculator .
```

2. **Ejecutar el contenedor**:
```bash
docker run -p 8080:80 php-basic-calculator
```
Luego, abre tu navegador y accede a http://localhost:8080 para utilizar la calculadora. Para realizar operaciones, proporciona num1, num2 y operation en la URL como parámetros de consulta. Ejemplo: http://localhost:8080?num1=5&num2=3&operation=add.

**Dockerización**
A continuación, se indican los pasos para dockerizar la aplicación y subir la imagen a Docker Hub.

**Paso 1: Construir la Imagen Docker**

```bash
docker build -t php-basic-calculator .
```

**Paso 2: Etiquetar la Imagen**

```bash
docker tag php-basic-calculator <tu-usuario>/php-basic-calculator:latest
```
**Paso 3: Subir la Imagen a Docker Hub**
```bash
docker push <tu-usuario>/php-basic-calculator:latest
```

**Enlace al Docker Hub**
PHP Basic Calculator en Docker Hub:https://hub.docker.com/repository/docker/kaaguaisa/php-basic-calculator/
