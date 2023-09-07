# Licenciatura en Ingeniería en Sistemas Computacionales 
### Juan Carlos Chuc Uh
### Programación WEB
### Mtro. Luis Fernando Villafaña
### Quinto cuatrimestre
### Primer Parcial
-------------
### Actividad 1

**Creación de una Página Web básica**

Descripción: Los estudiantes deberán crear una página web básica que contenga:

- Un título que diga "Mi Primera Página Web".
- Una breve descripción sobre ellos mismos o un tema de su elección.
- Imágenes relacionadas al contenido.
- Un enlace a otra página web de su interés.
- Estilizar la página usando CSS básico para darle un toque personal.

Instrucciones:

- Utilizar un editor de texto como Visual Studio Code o cualquier otro de preferencia.
- Crear un archivo `index.html` y otro llamado `styles.css`.
- Estructurar el contenido en el archivo `index.html` utilizando etiquetas de HTML como `<h1>`, `<p>`, `<img>` y `<a>`.
- Agregar estilos en `styles.css` y vincularlo con el archivo `index.html`.
- Guardar y visualizar la página en un navegador.
- Objetivo de la actividad: Esta actividad tiene como objetivo que los estudiantes se familiaricen con la estructura básica del HTML, la incorporación de estilos con CSS y la visualización de su primera página web en un navegador.

![](/Img/Actividad1.png)

[Ver actividad](/P1A1%20-%20web_basica)

-------------

### Actividad 2

**Creación y Procesamiento de un Formulario de Contacto**

Descripción: Los estudiantes deberán diseñar un formulario de contacto que incluya campos para:

- Nombre.
- Dirección de correo electrónico.
- Asunto del mensaje.
- Mensaje (campo de texto largo).
- Un botón de envío.
- Posteriormente, deberán simular el procesamiento del formulario usando alguna herramienta o lenguaje de programación del lado del servidor (por ejemplo, PHP o Node.js).

Instrucciones:

- Diseñar el formulario en un archivo HTML, utilizando las etiquetas correspondientes para cada elemento.
- Añadir estilos básicos para hacer el formulario visualmente atractivo.
- Implementar una validación básica en el lado del cliente usando JavaScript (por ejemplo, asegurarse de que ningún campo esté vacío).
- Configurar el método de envío del formulario (recomendado: POST).
- Utilizar una herramienta o lenguaje de programación del lado del servidor para recibir y procesar los datos del formulario. Puede ser una simple impresión de los datos recibidos.
- Testear el formulario asegurando que los datos se envían y reciben correctamente.
- Objetivo de la actividad: Familiarizar a los estudiantes con la creación, diseño, validación y procesamiento de formularios web, proporcionándoles una comprensión práctica de cómo funcionan los formularios y su interacción con el servidor.

Nota: Esta actividad asume que los estudiantes tienen acceso a un entorno de servidor para realizar el procesamiento, ya sea local o en línea. Si no es el caso, se podría simplificar la actividad enfocándose únicamente en la creación y validación del formulario sin el procesamiento del servidor.

![](/Img/Actividad2.png)

[Ver actividad](/P1A2%20-%20formulario_de_contacto)

-------------

### Actividad 3

**Desarrollo de una Pequeña Aplicación de Notas**

Descripción: Los estudiantes desarrollarán una aplicación web sencilla donde puedan añadir, visualizar, editar y eliminar notas. Las notas consistirán en un título y un cuerpo de texto.

Instrucciones:

1. Configurar una base de datos local (por ejemplo, MySQL o SQLite) y diseñar una tabla para las notas.
2. Crear una interfaz web que permita al usuario añadir una nueva nota.
3. Mostrar todas las notas existentes en una lista o cuadrícula.
4. Implementar la funcionalidad para editar y eliminar notas.
5. Asegurarse de que todas las operaciones (añadir, visualizar, editar, eliminar) se reflejen en la base de datos.
6. Implementar medidas básicas de seguridad, como la prevención de inyección SQL.
Objetivo de la actividad: Esta actividad está diseñada para que los estudiantes entiendan la interacción entre una aplicación web y una base de datos. A través de esta experiencia práctica, deberían familiarizarse con las operaciones CRUD y la importancia de la gestión segura de datos.

Nota: Es esencial que los estudiantes tengan acceso a un entorno donde puedan configurar y acceder a una base de datos, ya sea localmente o a través de un servicio en línea. Si el acceso a una base de datos no es viable, se podría considerar el uso de un sistema de almacenamiento basado en archivos o un enfoque más simplificado centrado solo en la lógica de la aplicación sin persistencia de datos real.

![](/Img/Actividad3.png)

[Ver actividad](/P1A3%20-%20Notas)

-------------

### Actividad 4

**Construcción y Consumo de una API RESTful**

Descripción: Los estudiantes construirán una sencilla API RESTful para gestionar un listado de libros (título, autor, año de publicación). Posteriormente, desarrollarán una interfaz web que consuma esta API para realizar operaciones CRUD en el listado de libros.

Instrucciones:

1. Diseñar y configurar una base de datos para almacenar el listado de libros.
2. Desarrollar una API que exponga endpoints para:
    - Listar todos los libros.
    - Añadir un nuevo libro.
    - Editar la información de un libro existente.
    - Eliminar un libro.
3. Implementar una interfaz web que consuma la API desarrollada:
    - Mostrar una lista de todos los libros disponibles.
    - Formulario para añadir/editar libros usando la API.
Opción para eliminar libros.
4. Implementar autenticación básica para proteger el acceso a la API (por ejemplo, usando tokens).
5. Asegurarse de manejar errores adecuadamente tanto en la API como en la interfaz web (ejemplo: libro no encontrado, errores de servidor, etc.).
Objetivo de la actividad: Familiarizar a los estudiantes con la construcción y consumo de APIs RESTful, permitiéndoles experimentar tanto el desarrollo del backend como la interacción desde el frontend. Además, reforzar conceptos de seguridad y autenticación en servicios web.

Nota: La actividad propuesta es un proyecto más complejo que combina habilidades de semanas anteriores (gestión de datos) con el nuevo contenido de la semana. Es esencial asegurarse de que los estudiantes cuenten con las herramientas y recursos necesarios para desarrollar y probar APIs, como un entorno de desarrollo adecuado y herramientas como Postman o Insomnia para testear la API.
