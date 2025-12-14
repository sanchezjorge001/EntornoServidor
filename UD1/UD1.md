# **Unidad Didáctica 1: Introducción a PHP**

## **1. ¿Qué es PHP?**

PHP, acrónimo de **"Hypertext Preprocessor"**, es un lenguaje de programación **dinámico**, **interpretado** y enfocado principalmente en el desarrollo del lado del servidor para aplicaciones web. Creado originalmente en 1994 por **Rasmus Lerdorf**, PHP ha evolucionado desde un conjunto de scripts de utilidad personal a un lenguaje completamente maduro y ampliamente utilizado, diseñado para generar contenido web dinámico, gestionar bases de datos y desarrollar aplicaciones robustas en múltiples entornos.

PHP es uno de los lenguajes más populares en el desarrollo web debido a su **facilidad de uso**, **flexibilidad** y la extensa comunidad que lo respalda. Su integración directa con HTML y su capacidad para interactuar con una variedad de bases de datos lo hacen ideal para aplicaciones web que requieren generación dinámica de contenido. 

### **1.1 Interpretado y No Compilado**

Una de las características fundamentales de PHP es que es un **lenguaje interpretado**, lo que significa que el código no se compila antes de ejecutarse. En lugar de convertir el código a un archivo binario o ejecutable, el código PHP es procesado directamente por el **servidor** (usualmente a través de un intérprete como **Zend Engine**). El intérprete de PHP lee y ejecuta el código en tiempo de ejecución, generando dinámicamente la salida en forma de **HTML**, **JSON**, u otros formatos de respuesta.

Este enfoque permite un ciclo de desarrollo ágil y rápido, ya que los desarrolladores pueden escribir, modificar y ejecutar su código sin necesidad de compilarlo antes. Sin embargo, esto también puede afectar el rendimiento si el código no está bien optimizado, ya que la interpretación se realiza cada vez que se solicita la ejecución del script.

### **1.2 Lenguaje del Lado del Servidor**

PHP es un lenguaje de programación **del lado del servidor**. Esto significa que el código PHP se ejecuta en el servidor web (en lugar del navegador del cliente) y el resultado procesado se envía al cliente en forma de HTML. **El cliente (generalmente un navegador) no ve el código PHP, sino únicamente la salida final generada por él**.

Por ejemplo, cuando un cliente solicita una página web, el servidor ejecuta el script PHP, interactúa con bases de datos u otros servicios si es necesario, genera HTML y lo envía al navegador. Este enfoque permite la creación de sitios web **dinámicos**, en los que el contenido cambia en función de la interacción del usuario o las entradas del sistema, como en tiendas en línea, sistemas de gestión de contenido (CMS), foros, etc.

### **1.3 Integración con HTML y Scripting Embebido**

PHP es conocido por su capacidad para integrarse de forma nativa con **HTML**, lo que permite a los desarrolladores intercalar código PHP con HTML en el mismo archivo. Esto significa que los desarrolladores pueden combinar fácilmente lógica de programación con el marcado HTML para generar páginas web dinámicas sin necesidad de separar la lógica de la presentación, como se haría en lenguajes basados en plantillas más rígidos.

Ejemplo básico de código PHP embebido en HTML:

```php
<html>
  <body>
    <h1>Bienvenido a mi sitio web</h1>
    <?php
      echo "Hoy es " . date("Y/m/d") . "<br>";
      echo "La hora actual es " . date("h:i:sa");
    ?>
  </body>
</html>
```

En este ejemplo, el código PHP genera la fecha y hora actuales en un documento HTML. Esta capacidad de integrar directamente PHP en un archivo HTML lo hace sumamente flexible para generar contenido dinámico en la web.

### **1.4 Multiplataforma y Compatibilidad con Servidores**

PHP es **multiplataforma**, lo que significa que puede ejecutarse en una amplia variedad de sistemas operativos, como **Linux**, **Windows**, **macOS** y entornos UNIX. Además, es compatible con los principales servidores web, como **Apache**, **Nginx**, e **IIS** (Internet Information Services). Esta flexibilidad permite que los desarrolladores puedan elegir la plataforma que mejor se ajuste a sus necesidades o a la infraestructura existente de su aplicación.

El soporte multiplataforma no sólo abarca sistemas operativos y servidores, sino que también incluye **compatibilidad con múltiples bases de datos**. PHP se integra nativamente con sistemas de bases de datos relacionales como **MySQL**, **PostgreSQL**, **Microsoft SQL Server**, y **Oracle**. Además, existen extensiones para interactuar con bases de datos no relacionales (NoSQL) como **MongoDB**, lo que lo hace adecuado para proyectos de todo tipo.

### **1.5 Código Abierto y Extensible**

PHP es un lenguaje **open-source**, lo que significa que su código fuente es accesible y está disponible gratuitamente para cualquier persona. Esto fomenta la colaboración, el desarrollo y la mejora constante por parte de la comunidad global de programadores. La naturaleza abierta de PHP permite a los desarrolladores modificar el lenguaje y su comportamiento, adaptándolo a sus necesidades específicas cuando es necesario.

Además de su núcleo, PHP cuenta con una amplia variedad de **extensiones** (módulos) que añaden funcionalidades adicionales, como el manejo de gráficos, la interacción con protocolos de red, la criptografía, entre otros. Algunos de los módulos más utilizados incluyen:
- **GD**: Para la manipulación de imágenes.
- **cURL**: Para la transferencia de datos mediante URLs.
- **PDO** (PHP Data Objects): Para la abstracción de bases de datos.

### **1.6 Facilidad de Aprendizaje y Amplia Comunidad**

PHP es conocido por ser uno de los lenguajes más **accesibles** para desarrolladores principiantes. Su sintaxis es relativamente sencilla y no requiere una configuración compleja para empezar a desarrollar aplicaciones básicas. Esta facilidad de uso, combinada con su versatilidad, lo convierte en una excelente opción tanto para quienes están comenzando en el desarrollo web como para desarrolladores experimentados que buscan un lenguaje potente para crear aplicaciones web complejas.

La popularidad de PHP también ha dado lugar a una **comunidad extensa y activa**, que proporciona una gran cantidad de recursos, desde documentación oficial y tutoriales, hasta librerías de terceros y frameworks que agilizan el desarrollo. Algunos de los frameworks más populares basados en PHP incluyen **Laravel**, **Symfony**, y **CodeIgniter**, que proporcionan estructuras sólidas para desarrollar aplicaciones web a gran escala.

### **1.7 Escalabilidad y Performance**

Aunque PHP es conocido por su facilidad de uso, también es un lenguaje potente y escalable para aplicaciones de gran tamaño. Con el uso adecuado de herramientas como **OPcache** (que cachea el código PHP precompilado para mejorar el rendimiento), junto con el enfoque en la optimización del código y el uso de frameworks robustos, PHP puede manejar aplicaciones web con alto tráfico sin perder eficiencia.

El lenguaje también soporta **programación orientada a objetos (POO)**, lo que facilita la creación de aplicaciones más organizadas, reutilizables y mantenibles. Este paradigma es crucial en proyectos de gran envergadura donde se requiere una estructura de código modular y escalable.

### **1.8 Seguridad**

Aunque PHP es seguro por diseño, como cualquier lenguaje de programación, está sujeto a **vulnerabilidades** si no se utilizan las mejores prácticas de desarrollo. Entre los riesgos comunes se incluyen **inyección SQL**, **cross-site scripting (XSS)**, y **cross-site request forgery (CSRF)**. Sin embargo, PHP incluye herramientas integradas y buenas prácticas para mitigar estos riesgos, como:
- **Preparación de consultas** (prepared statements) para evitar la inyección SQL.
- **Filtrado y saneamiento de entradas** para mitigar XSS.
- **Tokens CSRF** para protegerse contra ataques de falsificación de solicitudes.

Además, existen extensiones como **Sodium** para criptografía avanzada y **OpenSSL** para garantizar la transmisión segura de datos.

### **1.9 Aplicaciones Comunes de PHP**

PHP se utiliza en una amplia gama de aplicaciones web, desde pequeñas páginas informativas hasta grandes plataformas web como **Facebook** (en sus inicios), **Wikipedia**, y **WordPress**. Las áreas comunes de uso de PHP incluyen:
- **Sistemas de gestión de contenido (CMS)**: WordPress, Joomla y Drupal están construidos sobre PHP.
- **E-commerce**: Plataformas como Magento y OpenCart están desarrolladas en PHP.
- **Foros y redes sociales**: Aplicaciones como phpBB y MediaWiki (Wikipedia) están escritas en PHP.
- **APIs y servicios web**: PHP se utiliza para crear APIs RESTful y SOAP que interactúan con aplicaciones móviles y otros servicios.

---

## **2. Instalación y Configuración de PHP**

Para comenzar a desarrollar aplicaciones con PHP, es necesario configurar un entorno de desarrollo local que permita ejecutar scripts PHP en un servidor web y, opcionalmente, interactuar con bases de datos. Aunque PHP se puede instalar de forma independiente, es habitual utilizar paquetes preconfigurados que incluyen todo lo necesario para el desarrollo web. Estos paquetes son muy útiles para evitar la configuración manual de cada componente y simplificar la instalación.

### **2.1 Paquetes de Entornos de Desarrollo Local**

Los paquetes de entornos de desarrollo local más comunes son:

- **XAMPP**: Un entorno de servidor multiplataforma que incluye Apache (servidor web), MySQL (en realidad MariaDB) y PHP. Está disponible para Windows, macOS, y Linux, lo que lo convierte en una opción versátil.
  
- **WAMP**: Un paquete similar a XAMPP, pero diseñado exclusivamente para el sistema operativo Windows. WAMP incluye Apache, MySQL, y PHP. Es ideal para desarrolladores que trabajan en Windows y no necesitan soporte multiplataforma.

- **MAMP**: Diseñado específicamente para usuarios de macOS, MAMP es un paquete que incluye Apache, MySQL, y PHP. También está disponible una versión para Windows, aunque su popularidad es mayor en macOS.

Estos entornos facilitan el desarrollo de aplicaciones PHP sin necesidad de instalar y configurar manualmente cada componente de un servidor web y base de datos. Además, incluyen interfaces gráficas que permiten gestionar fácilmente los servicios asociados (servidor web, bases de datos, etc.).

### **2.2 Instalación de XAMPP: Guía Paso a Paso**

**XAMPP** es uno de los entornos de desarrollo más populares debido a su soporte multiplataforma y su facilidad de uso. A continuación, se detallan los pasos para instalar y configurar XAMPP en un sistema operativo Windows, aunque el proceso es similar para macOS y Linux.

#### **Paso 1: Descargar XAMPP**

- Accede al sitio oficial de XAMPP en [apachefriends.org](https://www.apachefriends.org/index.html).
- Selecciona la versión de XAMPP correspondiente a tu sistema operativo (Windows, macOS o Linux). Las versiones de XAMPP vienen con diferentes versiones de PHP, por lo que puedes seleccionar la más adecuada para tu proyecto (por ejemplo, si necesitas PHP 7.4 o PHP 8.x).

#### **Paso 2: Ejecutar el Instalador**

- Una vez descargado el archivo instalador, ejecuta el instalador de XAMPP.
- Durante el proceso de instalación, el asistente te permitirá seleccionar los componentes que deseas instalar. Por defecto, XAMPP incluye Apache, MySQL, PHP y PhpMyAdmin, aunque también puedes instalar otras herramientas como FileZilla FTP Server, Mercury Mail Server, y Tomcat si lo necesitas.

  > **Nota**: Durante la instalación en Windows, es posible que aparezcan advertencias sobre el Control de Cuentas de Usuario (UAC). Si ves este mensaje, sigue adelante con la instalación, pero puede que sea necesario ejecutar el programa con permisos de administrador posteriormente.

#### **Paso 3: Configuración Básica en el Panel de Control de XAMPP**

- Una vez finalizada la instalación, ejecuta el **Panel de Control de XAMPP**. Este panel te permite iniciar y detener los diferentes servicios que XAMPP incluye, como **Apache** (servidor web) y **MySQL** (base de datos).

- Para comenzar a trabajar con PHP, es fundamental que Apache esté en funcionamiento. Haz clic en el botón **Start** correspondiente a Apache en el panel de control. Si planeas usar bases de datos MySQL en tus proyectos, también puedes iniciar el servicio **MySQL** desde aquí.

  > **Problemas comunes**: A veces, el puerto 80 (utilizado por Apache) puede estar en uso por otras aplicaciones, como Skype o IIS en Windows. Si encuentras un conflicto de puertos, puedes cambiar el puerto en el archivo de configuración de Apache (`httpd.conf`), localizado en el directorio de instalación de XAMPP.

#### **Paso 4: Configuración de Archivos PHP**

XAMPP almacena los archivos del servidor web Apache en la carpeta `htdocs`, que se encuentra en el directorio de instalación de XAMPP. Para ejecutar un archivo PHP:

1. Navega a la carpeta `htdocs` (por defecto, la ruta en Windows es `C:\xampp\htdocs`).
2. Crea un archivo PHP. Puedes comenzar con un archivo de ejemplo llamado `index.php` con el siguiente código básico:

   ```php
   <?php
   echo "¡Hola, mundo!";
   ?>
   ```

3. Abre tu navegador web e ingresa la dirección `http://localhost/index.php`. Si Apache está funcionando correctamente, deberías ver el mensaje **¡Hola, mundo!** en el navegador.

#### **Paso 5: MySQL Workbench y Gestión de Bases de Datos**

En lugar de utilizar **PhpMyAdmin** para gestionar bases de datos MySQL en XAMPP, una opción más avanzada y flexible es **MySQL Workbench**. **MySQL Workbench** es una herramienta gráfica de gestión de bases de datos que proporciona un entorno robusto para diseñar, modelar, ejecutar consultas, administrar usuarios y realizar tareas de administración avanzadas. Ofrece una interfaz más rica en funcionalidades y mejor rendimiento, ideal para proyectos de mayor envergadura o desarrolladores que buscan una experiencia más profesional.

##### **Instalación de MySQL Workbench**

Si aún no tienes instalado MySQL Workbench, sigue estos pasos para descargar e instalar la herramienta:

1. **Descarga**: Visita el [sitio oficial de MySQL Workbench](https://dev.mysql.com/downloads/workbench/) y selecciona la versión adecuada para tu sistema operativo (Windows, macOS o Linux).
2. **Instalación**: Una vez descargado, sigue las instrucciones del instalador para completar el proceso de instalación. La instalación es bastante directa, y no requiere configuraciones adicionales si ya tienes MySQL instalado a través de XAMPP.

##### **Conexión de MySQL Workbench a MySQL en XAMPP**

Después de instalar MySQL Workbench, puedes conectarlo a la instancia de MySQL que está ejecutándose en XAMPP.

1. **Asegúrate de que el servicio MySQL esté en ejecución** en el panel de control de XAMPP. Esto es crucial ya que MySQL Workbench se conecta al servicio MySQL que XAMPP ejecuta localmente.

2. **Inicia MySQL Workbench** y sigue los pasos para establecer una nueva conexión:
   - En la pantalla de inicio de Workbench, selecciona **Database** en el menú superior y luego **Connect to Database** o haz clic en el ícono "MySQL Connections".
   
3. **Configura la conexión** a la base de datos MySQL:
   - **Host**: `localhost` (o `127.0.0.1`, que es lo mismo)
   - **Puerto**: `3306` (puerto predeterminado de MySQL, a menos que se haya configurado uno diferente en XAMPP)
   - **Username**: `root` (nombre de usuario predeterminado para MySQL en XAMPP, a menos que lo hayas cambiado)
   - **Password**: Por defecto, MySQL en XAMPP no tiene contraseña para el usuario root, pero puedes configurar una si lo prefieres.

   Después de ingresar estos datos, puedes hacer clic en **Test Connection** para verificar si la conexión es exitosa. Si todo está configurado correctamente, recibirás un mensaje indicando que la conexión fue exitosa.

4. **Almacenar la conexión**: Una vez que la conexión es exitosa, puedes guardar la configuración para acceder rápidamente la próxima vez sin tener que ingresar nuevamente los detalles de conexión.

##### **Ventajas de Usar MySQL Workbench sobre PhpMyAdmin**

1. **Entorno de Desarrollo Profesional**: A diferencia de PhpMyAdmin, que es accesible desde el navegador, MySQL Workbench es una aplicación de escritorio dedicada con una interfaz de usuario más rica y capacidades más avanzadas. Esto lo convierte en una herramienta ideal para proyectos de mayor escala o cuando se requiere realizar tareas complejas de administración de bases de datos.

2. **Mejor Rendimiento y Estabilidad**: Al ser una aplicación independiente, Workbench es generalmente más estable y ofrece un mejor rendimiento, especialmente cuando se trabaja con bases de datos grandes o se ejecutan consultas complejas.

3. **Modelado Visual**: MySQL Workbench permite crear **modelos de base de datos** visualmente, lo que facilita diseñar y gestionar esquemas complejos. Esta funcionalidad es inexistente en PhpMyAdmin.

4. **Características Avanzadas de Administración**: Desde la gestión de usuarios y privilegios hasta el monitoreo del rendimiento y la optimización de consultas, MySQL Workbench proporciona un conjunto de herramientas más robusto que PhpMyAdmin, haciéndolo adecuado tanto para desarrolladores como para administradores de bases de datos.

---

## **3. Sintaxis Básica de PHP**

PHP es un lenguaje de programación que se integra directamente con HTML, permitiendo que las páginas web dinámicas se generen y rendericen en el servidor antes de enviarse al navegador del cliente. La sintaxis de PHP es sencilla y flexible, y su capacidad para integrarse con HTML de forma transparente lo hace una opción popular para el desarrollo web. A continuación, se presentan los elementos esenciales de la sintaxis básica de PHP y cómo utilizarlo de manera efectiva en archivos web.

### **3.1 Inclusión de PHP en HTML**

PHP está diseñado para ser embebido directamente dentro de documentos HTML. Para indicarle al servidor que procese un bloque de código PHP, debes envolver el código PHP entre las etiquetas de apertura `<?php` y cierre `?>`. Cualquier código que se coloque dentro de estas etiquetas será interpretado por el servidor, mientras que todo lo que esté fuera de estas etiquetas será tratado como HTML estándar.

#### **Ejemplo de PHP embebido en un archivo HTML**:

```php
<!DOCTYPE html>
<html>
<head>
    <title>Mi primera página PHP</title>
</head>
<body>
    <h1>¡Hola, mundo!</h1>
    <?php
        echo "Este es un mensaje generado con PHP.";
    ?>
</body>
</html>
```

En este ejemplo, el navegador recibirá la salida como HTML. La etiqueta `<?php ... ?>` indica al servidor que procese el código PHP y lo convierta en HTML antes de enviarlo al navegador. El resultado sería la página HTML que incluye el texto "Este es un mensaje generado con PHP." donde se encuentra el bloque `echo`.

#### **Importancia de las Etiquetas PHP**

Las etiquetas de PHP (`<?php` y `?>`) son esenciales para distinguir el código PHP del HTML. Si omites estas etiquetas, el servidor no sabrá que debe procesar el código PHP y lo tratará como texto plano. Esto también significa que puedes mezclar PHP y HTML sin problemas dentro del mismo archivo, permitiendo la generación dinámica de contenido web. 

### **3.2 Estructura del Código PHP**

La estructura básica de un script PHP sigue convenciones comunes en otros lenguajes de programación, pero con sus propias peculiaridades. A continuación se describen algunos de los elementos más importantes.

#### **3.2.1 Sentencias y Bloques de Código**

PHP utiliza **punto y coma** (`;`) para finalizar cada declaración o sentencia de código. Esto es similar a lenguajes como C, C++ o Java. Cada línea de código debe terminar con un punto y coma, incluso cuando esté dentro de bloques de código más grandes.

**Ejemplo**:
```php
<?php
    echo "Hola, mundo!";  // Punto y coma para terminar la sentencia
    $nombre = "Juan";  // Asignación de valor a una variable
?>
```

#### **3.2.2 Función `echo` y Generación de Salida**

`echo` es una de las funciones más comunes en PHP y se utiliza para generar salida. Generalmente, se utiliza para imprimir texto, variables o resultados en la página HTML que será enviada al navegador.

**Ejemplo de uso de `echo`:**
```php
<?php
    echo "Este es un mensaje generado con PHP.";  // Imprime texto
    echo "<br>";  // Imprime una etiqueta HTML de salto de línea
    $mensaje = "Bienvenidos a mi sitio web";
    echo $mensaje;  // Imprime el contenido de la variable $mensaje
?>
```

En este ejemplo, `echo` imprime directamente el texto y también el valor almacenado en la variable `$mensaje`. Puede generar tanto texto plano como contenido HTML, lo que permite una integración fluida con las páginas web.

### **3.3 Comentarios en PHP**

Los comentarios en PHP son esenciales para documentar el código, hacer anotaciones y explicar la lógica utilizada, sin afectar la ejecución del script. PHP admite tres tipos principales de comentarios: de una línea y de varias líneas.

#### **3.3.1 Comentario de una línea:**

1. **Comentarios con `//`**: Este es el método más común para hacer comentarios de una sola línea. Todo lo que se escriba después de `//` en la misma línea será tratado como comentario.

   **Ejemplo**:
   ```php
   <?php
   // Este es un comentario de una línea
   echo "Hola, mundo!";
   ?>
   ```

2. **Comentarios con `#`**: Aunque menos común, PHP también permite usar `#` para comentarios de una sola línea, similar a cómo se hace en lenguajes como Bash.

   **Ejemplo**:
   ```php
   <?php
   # Esto también es un comentario de una línea
   echo "Este es otro ejemplo de comentario.";
   ?>
   ```

#### **3.3.2 Comentario de varias líneas:**

Cuando necesitas hacer anotaciones más extensas, puedes utilizar comentarios de varias líneas. Se utilizan las mismas convenciones que en lenguajes como C, C++ o Java: abrir el comentario con `/*` y cerrarlo con `*/`.

**Ejemplo de comentario de varias líneas**:
```php
<?php
/*
    Esto es un comentario
    de varias líneas.
    Puedes usarlo para escribir 
    descripciones más largas sobre el código.
*/
echo "Comentarios de varias líneas son útiles para documentar scripts grandes.";
?>
```

Este tipo de comentario es ideal para descripciones detalladas, como explicaciones de la lógica del código o anotaciones sobre su funcionamiento.

### **3.4 Variables en PHP**

En PHP, las variables se declaran con el prefijo `$` y no requieren que especifiques el tipo de dato. PHP es un lenguaje **de tipado dinámico**, lo que significa que una variable puede cambiar su tipo en tiempo de ejecución. Los nombres de las variables deben comenzar con una letra o guion bajo, y pueden contener letras, números o guiones bajos, pero no pueden comenzar con un número.

**Ejemplo de declaración y uso de variables**:
```php
<?php
    $nombre = "María";  // Variable de tipo cadena (string)
    $edad = 25;  // Variable de tipo entero (int)
    $precio = 12.99;  // Variable de tipo flotante (float)

    echo "Nombre: " . $nombre . "<br>";
    echo "Edad: " . $edad . "<br>";
    echo "Precio: $" . $precio . "<br>";
?>
```

En este ejemplo, vemos cómo PHP permite declarar y utilizar variables sin necesidad de definir explícitamente su tipo de dato. PHP detecta automáticamente el tipo basado en el valor asignado.

### **3.5 Buenas Prácticas para Escribir Código PHP**

1. **Consistencia en el uso de etiquetas PHP**: Siempre usa la forma estándar de las etiquetas PHP (`<?php ... ?>`). Evita las etiquetas cortas para garantizar la portabilidad de tu código.
2. **Comentarios claros y descriptivos**: Utiliza comentarios para describir la lógica del código y explicar secciones complejas. Esto facilitará la colaboración con otros desarrolladores y el mantenimiento a largo plazo.
3. **Nombrado de variables descriptivas**: Asegúrate de usar nombres de variables descriptivos y consistentes para que el código sea más fácil de entender. En lugar de `$x`, utiliza nombres como `$precioProducto` o `$nombreUsuario`.
4. **Separación de lógica y presentación**: Aunque PHP permite mezclar HTML y código de manera sencilla, es buena práctica separar la lógica del negocio (PHP) de la presentación (HTML). Esto se puede lograr utilizando plantillas o frameworks que respeten el patrón MVC.

---

## **4. Variables y Tipos de Datos en PHP**

En PHP, las **variables** son fundamentales para el desarrollo de aplicaciones, ya que permiten almacenar y manipular datos a lo largo de la ejecución de un script. PHP es un lenguaje de **tipado débil**, lo que significa que el tipo de una variable no necesita ser declarado explícitamente. El intérprete de PHP infiere automáticamente el tipo de dato según el valor asignado a la variable. Esta flexibilidad en la tipificación es una de las características que hacen de PHP un lenguaje accesible, pero también es importante comprender cómo maneja y trata los diferentes tipos de datos.

### **4.1 Declaración de Variables en PHP**

Las variables en PHP se identifican mediante el símbolo **`$`** seguido de un nombre de variable. El nombre de la variable puede contener letras, números y guiones bajos, pero debe comenzar con una letra o un guion bajo.

**Reglas para nombres de variables:**
- Deben comenzar con una letra o un guion bajo (`_`).
- Pueden contener letras, números y guiones bajos, pero no otros caracteres especiales.
- PHP distingue entre mayúsculas y minúsculas, por lo que `$Variable` y `$variable` son dos variables distintas.

**Ejemplo de declaración de variables en PHP**:
```php
<?php
    $nombre = "Juan";       // Cadena de texto (string)
    $edad = 25;             // Entero (integer)
    $altura = 1.75;         // Flotante (float)
    $esEstudiante = true;   // Booleano (boolean)
?>
```

En este ejemplo, `$nombre` almacena una cadena de texto, `$edad` es un entero, `$altura` es un número flotante y `$esEstudiante` es un booleano.

### **4.2 Tipado Débil en PHP**

En PHP, no es necesario declarar el tipo de una variable. El lenguaje determina automáticamente el tipo de dato según el valor que se le asigne. Esto se conoce como **tipado dinámico** o **tipado débil**. A diferencia de lenguajes de tipado estático, como Java o C++, donde el tipo de una variable debe definirse explícitamente, PHP permite que el tipo cambie en tiempo de ejecución si se le asigna un nuevo valor de un tipo diferente.

**Ejemplo de tipado dinámico:**
```php
<?php
    $variable = 5;          // Entero
    $variable = "Hola";     // Ahora es una cadena de texto
?>
```

En este caso, la variable `$variable` comienza almacenando un valor entero (`5`), pero luego cambia su tipo a una cadena de texto cuando se le asigna `"Hola"`.

### **4.3 Tipos de Datos en PHP**

PHP soporta una variedad de tipos de datos nativos, que se pueden dividir en dos categorías principales: **tipos escalares** y **tipos compuestos**. Además, existe un tipo especial, **NULL**, que representa la ausencia de valor.

#### **4.3.1 Tipos Escalares**

Los tipos escalares son tipos de datos simples que contienen un solo valor. Incluyen los siguientes:

1. **Enteros (integer)**:
   Los enteros son números sin decimales. Pueden ser positivos o negativos. Los enteros en PHP pueden representarse en varias bases numéricas:
   - **Decimal** (base 10): Ejemplo: `25`
   - **Octal** (base 8): Ejemplo: `075` (equivale a `61` en decimal)
   - **Hexadecimal** (base 16): Ejemplo: `0x1A` (equivale a `26` en decimal)
   - **Binario** (base 2): Ejemplo: `0b1101` (equivale a `13` en decimal)

   **Ejemplo**:
   ```php
   <?php
       $edad = 30;  // Entero
       $negativo = -15;  // Entero negativo
   ?>
   ```

2. **Flotantes (float)**:
   Los flotantes, también llamados **dobles** o **puntos flotantes**, son números que contienen una parte decimal. Estos números se representan utilizando la notación estándar de punto decimal o la notación científica.

   **Ejemplo**:
   ```php
   <?php
       $precio = 9.99;        // Flotante con decimal
       $cientifico = 3e2;     // Equivale a 300 (3 * 10^2)
   ?>
   ```

3. **Cadenas de texto (string)**:
   Las cadenas de texto son secuencias de caracteres. Pueden ser delimitadas con comillas simples (`'`) o dobles (`"`), y cada una tiene su propio comportamiento. Las comillas dobles permiten la interpolación de variables y el uso de caracteres de escape, mientras que las comillas simples son más rápidas y simples, pero no permiten interpolación.

   **Ejemplo**:
   ```php
   <?php
       $saludo = "Hola, $nombre";  // Comillas dobles permiten interpolación de variables
       $saludoSimple = 'Hola, Juan';  // Comillas simples, no interpolan
   ?>
   ```

4. **Booleanos (boolean)**:
   Los booleanos representan dos estados: **true** (verdadero) o **false** (falso). Son típicamente usados en evaluaciones condicionales y lógica de control.

   **Ejemplo**:
   ```php
   <?php
       $esAdmin = true;   // Valor booleano verdadero
       $esInvitado = false;   // Valor booleano falso
   ?>
   ```

### **4.3.2 Arrays y Maps: Funciones Clave y Ejemplos**

En PHP, los **arrays** son estructuras de datos fundamentales que permiten almacenar colecciones de valores bajo un mismo nombre. Son extremadamente flexibles y pueden ser utilizados tanto como **arrays indexados numéricamente** (donde las posiciones están definidas por números enteros) como **arrays asociativos (maps)**, que utilizan claves personalizadas como índices. Además, pueden contener datos de diversos tipos, incluyendo números, cadenas, booleanos e incluso otros arrays, lo que permite crear estructuras más complejas.

A continuación se explican los tipos de arrays más comunes y algunas de las funciones más útiles que se pueden utilizar con ellos:

#### **Arrays Indexados Numéricamente**

Los **arrays indexados numéricamente** son aquellos en los que cada elemento está asociado a un índice numérico, comenzando en 0. Son ideales para almacenar listas de elementos en un orden específico.

**Ejemplo básico de array indexado:**
```php
<?php
    $numeros = array(1, 2, 3, 4, 5);
    echo $numeros[0];  // Imprime 1
?>
```

Aquí, el array `$numeros` contiene cinco valores, donde el índice 0 almacena el valor 1, el índice 1 almacena el valor 2, y así sucesivamente.

##### **Funciones más útiles para trabajar con arrays indexados:**

1. **`count()`**: Devuelve el número de elementos en un array.
   ```php
   echo count($numeros);  // Imprime 5
   ```

2. **`array_push()`**: Añade uno o más elementos al final del array.
   ```php
   array_push($numeros, 6, 7);
   print_r($numeros);  // Imprime Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 7 )
   ```

3. **`array_pop()`**: Elimina y devuelve el último valor del array.
   ```php
   $ultimo_numero = array_pop($numeros);
   echo $ultimo_numero;  // Imprime 7
   ```

4. **`sort()`**: Ordena los elementos de un array en orden ascendente.
   ```php
   sort($numeros);
   print_r($numeros);  // Imprime Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
   ```

5. **`array_merge()`**: Combina dos o más arrays.
   ```php
   $mas_numeros = array(6, 7, 8);
   $resultado = array_merge($numeros, $mas_numeros);
   print_r($resultado);  // Imprime Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 7 [7] => 8 )
   ```

#### **Arrays Asociativos (Maps)**

Los **arrays asociativos**, también conocidos como **maps**, permiten utilizar claves personalizadas como índices en lugar de números. Esto es útil cuando se necesita asociar un valor con una clave descriptiva, como en el caso de almacenar información de una persona (nombre, edad, dirección, etc.).

**Ejemplo básico de array asociativo:**
```php
<?php
    $persona = array("nombre" => "Juan", "edad" => 25);
    echo $persona["nombre"];  // Imprime "Juan"
?>
```

En este ejemplo, el array `$persona` asocia la clave `"nombre"` con el valor `"Juan"` y la clave `"edad"` con el valor `25`.

##### **Funciones más útiles para trabajar con arrays asociativos:**

1. **`array_keys()`**: Devuelve todas las claves de un array asociativo.
   ```php
   $claves = array_keys($persona);
   print_r($claves);  // Imprime Array ( [0] => nombre [1] => edad )
   ```

2. **`array_values()`**: Devuelve todos los valores de un array asociativo.
   ```php
   $valores = array_values($persona);
   print_r($valores);  // Imprime Array ( [0] => Juan [1] => 25 )
   ```

3. **`isset()`**: Verifica si una clave o índice está definido en el array.
   ```php
   if (isset($persona["nombre"])) {
       echo "El nombre está definido.";  // Imprime "El nombre está definido."
   }
   ```

4. **`array_key_exists()`**: Verifica si una clave específica existe en un array.
   ```php
   if (array_key_exists("edad", $persona)) {
       echo "La clave 'edad' existe en el array.";  // Imprime "La clave 'edad' existe en el array."
   }
   ```

5. **`unset()`**: Elimina un elemento de un array asociativo mediante su clave.
   ```php
   unset($persona["edad"]);
   print_r($persona);  // Imprime Array ( [nombre] => Juan )
   ```

6. **`array_combine()`**: Combina dos arrays, uno de claves y otro de valores, en un solo array asociativo.
   ```php
   $claves = array("nombre", "edad");
   $valores = array("Ana", 30);
   $persona = array_combine($claves, $valores);
   print_r($persona);  // Imprime Array ( [nombre] => Ana [edad] => 30 )
   ```

#### **Arrays Multidimensionales**

Los arrays multidimensionales son arrays que contienen otros arrays como elementos, lo que permite estructurar datos en niveles más profundos.

**Ejemplo de array multidimensional:**
```php
<?php
    $personas = array(
        array("nombre" => "Juan", "edad" => 25),
        array("nombre" => "Ana", "edad" => 30)
    );
    echo $personas[1]["nombre"];  // Imprime "Ana"
?>
```

Aquí, el array `$personas` contiene dos arrays, cada uno con claves `"nombre"` y `"edad"`. Se accede al nombre de la segunda persona (`Ana`) utilizando los índices correspondientes.

##### **Funciones útiles para arrays multidimensionales:**

1. **`array_map()`**: Aplica una función a cada elemento de un array (útil también para arrays multidimensionales).
   ```php
   $nombres = array_map(function($persona) {
       return $persona["nombre"];
   }, $personas);
   print_r($nombres);  // Imprime Array ( [0] => Juan [1] => Ana )
   ```

2. **`array_walk_recursive()`**: Aplica una función a cada elemento de un array de forma recursiva.
   ```php
   array_walk_recursive($personas, function($valor, $clave) {
       echo "$clave: $valor\n";
   });
   // Imprime "nombre: Juan", "edad: 25", "nombre: Ana", "edad: 30"
   ```

#### **4.3.3 Tipo Especial: NULL**

El tipo **NULL** en PHP representa una variable sin valor asignado. Es el único valor posible del tipo de dato NULL, y se asigna a las variables cuando:
- No se ha asignado ningún valor.
- Se asigna explícitamente `NULL`.
- Una variable ha sido destruida.

**Ejemplo**:
```php
<?php
    $variableSinValor = NULL;
    $otraVariable;  // Automáticamente NULL ya que no tiene valor asignado
?>
```

### **4.4 Conversión de Tipos en PHP**

Aunque PHP gestiona automáticamente la mayoría de las conversiones de tipos (también llamado **coerción de tipos**), en algunos casos, es necesario realizar conversiones manuales para asegurarse de que una variable tiene el tipo de dato adecuado.

**Ejemplo de conversión manual**:
```php
<?php
    $numero = "25";  // Cadena de texto
    $numeroEntero = (int)$numero;  // Conversión a entero
?>
```

Los tipos de conversión disponibles en PHP son:
- `(int)` o `(integer)` para convertir a entero.
- `(float)` o `(double)` o `(real)` para convertir a flotante.
- `(string)` para convertir a cadena de texto.
- `(bool)` o `(boolean)` para convertir a booleano.
- `(array)` para convertir a array.
- `(object)` para convertir a objeto.

### **4.5 Variables Predefinidas en PHP**

PHP proporciona una serie de **variables superglobales** que son accesibles en cualquier lugar del script, sin necesidad de pasarles información de un contexto a otro. Estas variables incluyen:
- **`$_GET`**: Almacena los parámetros pasados mediante la URL (método GET).
- **`$_POST`**: Almacena los datos enviados mediante formularios (método POST).
- **`$_SESSION`**: Almacena datos de la sesión de usuario.
- **`$_COOKIE`**: Almacena cookies.

**Ejemplo de uso de `$_GET`:**
```php
<?php
    // URL: http://example.com?nombre=Juan
    $nombre = $_GET['nombre'];
    echo "Hola, $nombre";  // Imprime "Hola, Juan"
?>
```

---

## **5. Operadores y Expresiones en PHP**

En PHP, los **operadores** son símbolos especiales que se utilizan para realizar operaciones en variables y valores. Estos operadores permiten llevar a cabo diversas tareas como operaciones matemáticas, comparaciones entre valores, evaluaciones lógicas y más. Una **expresión** en PHP es cualquier combinación de valores, variables y operadores que devuelve un resultado. Comprender cómo usar operadores y expresiones es fundamental para manipular datos de manera eficaz dentro de un programa.

### **5.1 Operadores Aritméticos**

Los **operadores aritméticos** en PHP permiten realizar operaciones matemáticas básicas como la suma, resta, multiplicación, división y el módulo. Estos operadores son utilizados comúnmente para manipular números y cálculos matemáticos dentro de un script.

| Operador | Descripción           | Ejemplo       | Resultado       |
|----------|-----------------------|---------------|-----------------|
| `+`      | Suma                   | `$a + $b`     | Suma de `$a` y `$b` |
| `-`      | Resta                  | `$a - $b`     | Resta de `$b` a `$a` |
| `*`      | Multiplicación         | `$a * $b`     | Producto de `$a` y `$b` |
| `/`      | División               | `$a / $b`     | Cociente de `$a` entre `$b` |
| `%`      | Módulo (resto)         | `$a % $b`     | Resto de la división de `$a` entre `$b` |

**Ejemplo de operadores aritméticos en acción**:
```php
<?php
    $a = 10;
    $b = 3;
    echo $a + $b;  // Imprime 13
    echo $a - $b;  // Imprime 7
    echo $a * $b;  // Imprime 30
    echo $a / $b;  // Imprime 3.3333...
    echo $a % $b;  // Imprime 1 (resto de 10 / 3)
?>
```

#### **Precedencia de Operadores Aritméticos**

La **precedencia** determina el orden en que se evalúan los operadores en una expresión. PHP sigue reglas de precedencia similares a las de matemáticas:
1. Las operaciones entre paréntesis `()` se evalúan primero.
2. **Multiplicación**, **división** y **módulo** tienen mayor precedencia que la **suma** y **resta**.

**Ejemplo de precedencia de operadores**:
```php
<?php
    $resultado = 5 + 3 * 2;  // Resultado es 11, porque la multiplicación se evalúa primero.
    $resultado = (5 + 3) * 2;  // Resultado es 16, porque la operación entre paréntesis se evalúa primero.
?>
```

### **5.2 Operadores de Asignación**

Los operadores de asignación se utilizan para asignar valores a las variables. El operador más común es el de **asignación simple** (`=`), que asigna el valor de la expresión de la derecha a la variable de la izquierda. También existen **operadores de asignación combinados** que permiten realizar una operación aritmética y asignar el resultado en una sola expresión.

| Operador | Descripción           | Ejemplo       | Equivalente      |
|----------|-----------------------|---------------|------------------|
| `=`      | Asignación simple      | `$a = 5;`     | Asigna el valor `5` a `$a` |
| `+=`     | Suma y asigna          | `$a += 3;`    | `$a = $a + 3;` |
| `-=`     | Resta y asigna         | `$a -= 3;`    | `$a = $a - 3;` |
| `*=`     | Multiplica y asigna    | `$a *= 3;`    | `$a = $a * 3;` |
| `/=`     | Divide y asigna        | `$a /= 3;`    | `$a = $a / 3;` |
| `%=`     | Módulo y asigna        | `$a %= 3;`    | `$a = $a % 3;` |

**Ejemplo de operadores de asignación**:
```php
<?php
    $a = 10;
    $a += 5;  // Ahora $a es 15 (equivale a $a = $a + 5)
    $a *= 2;  // Ahora $a es 30 (equivale a $a = $a * 2)
?>
```

### **5.3 Operadores de Comparación**

Los operadores de comparación permiten comparar dos valores. El resultado de una comparación es siempre un valor booleano: **true** si la comparación es verdadera, o **false** si es falsa. Estos operadores son esenciales en **sentencias condicionales** y **bucles**.

| Operador | Descripción           | Ejemplo         | Resultado       |
|----------|-----------------------|-----------------|-----------------|
| `==`     | Igual a                | `$a == $b`      | True si `$a` es igual a `$b` |
| `===`    | Idéntico (igual y mismo tipo) | `$a === $b` | True si `$a` es igual a `$b` y son del mismo tipo |
| `!=`     | Diferente a            | `$a != $b`      | True si `$a` no es igual a `$b` |
| `!==`    | No idéntico            | `$a !== $b`     | True si `$a` no es igual a `$b` o no son del mismo tipo |
| `>`      | Mayor que              | `$a > $b`       | True si `$a` es mayor que `$b` |
| `<`      | Menor que              | `$a < $b`       | True si `$a` es menor que `$b` |
| `>=`     | Mayor o igual que      | `$a >= $b`      | True si `$a` es mayor o igual que `$b` |
| `<=`     | Menor o igual que      | `$a <= $b`      | True si `$a` es menor o igual que `$b` |

**Ejemplo de operadores de comparación**:
```php
<?php
    $a = 10;
    $b = 20;
    
    var_dump($a == $b);  // Imprime bool(false)
    var_dump($a != $b);  // Imprime bool(true)
    var_dump($a < $b);   // Imprime bool(true)
?>
```

En este ejemplo, `var_dump()` imprime el valor booleano de la comparación. El resultado es `true` o `false` según si la expresión evaluada es verdadera o falsa.

### **5.4 Operadores Lógicos**

Los operadores lógicos se utilizan para combinar múltiples condiciones o expresiones y devuelven un resultado booleano. Son esenciales para construir **condiciones complejas** en estructuras de control como `if` o `while`.

| Operador | Descripción           | Ejemplo       | Resultado       |
|----------|-----------------------|---------------|-----------------|
| `&&`     | Y lógico (AND)         | `$a && $b`    | True si `$a` **y** `$b` son verdaderos |
| `\|\|`     | O lógico (OR)          | `$a \|\| $b`    | True si `$a` **o** `$b` son verdaderos |
| `!`      | Negación lógica (NOT)  | `!$a`         | True si `$a` es falso |

**Ejemplo de operadores lógicos**:
```php
<?php
    $a = true;
    $b = false;

    var_dump($a && $b);  // Imprime bool(false) (ambas condiciones deben ser verdaderas)
    var_dump($a || $b);  // Imprime bool(true) (una de las dos condiciones es verdadera)
    var_dump(!$a);       // Imprime bool(false) (negación de $a)
?>
```

- El operador `&&` (AND) devuelve **true** solo si ambas expresiones son verdaderas.
- El operador `||` (OR) devuelve **true** si al menos una de las expresiones es verdadera.
- El operador `!` (NOT) invierte el valor de una expresión. Si una expresión es **true**, la convierte en **false**, y viceversa.

### **5.5 Operadores de Incremento y Decremento**

Estos operadores se utilizan para aumentar o disminuir el valor de una variable en **uno**. Pueden usarse en dos formas: **pre-incremento/decremento** o **post-incremento/decremento**.

| Operador | Descripción           | Ejemplo       | Resultado       |
|----------|-----------------------|---------------|-----------------|
| `++$a`   | Pre-incremento         | `$a = 5; ++$a;` | `$a` ahora es `6` |
| `$a++`   | Post-incremento        | `$a = 5; $a++;` | `$a` sigue siendo `5` en esta línea, pero luego es `6` |
| `--$a`   | Pre-decremento         | `$a = 5; --$a;` | `$a` ahora es `4` |
| `$a--`   | Post-decremento        | `$a = 5; $a--;` | `$a` sigue siendo `5` en esta línea, pero luego es `4` |

**Ejemplo de incremento/decremento**:
```php
<?php
    $a = 5;
    echo ++$a;  // Imprime 6 (pre-incremento)
    echo $a++;  // Imprime 6 (pero después $a será 7)
    echo $a;    // Imprime 7
?>
```

---

## **6. Estructuras de Control en PHP**

Las **estructuras de control** en PHP permiten modificar el flujo de ejecución de un programa en función de ciertas condiciones o repetir bloques de código. Estas estructuras son esenciales para crear programas dinámicos y flexibles, ya que permiten ejecutar diferentes secciones de código basándose en entradas o valores variables. En PHP, las principales estructuras de control incluyen las **condicionales** (`if`, `else`, `elseif`, `switch`) y los **bucles** (`for`, `while`, `foreach`).

### **6.1 Estructuras Condicionales**

Las estructuras condicionales permiten ejecutar bloques de código en función de si una condición es verdadera o falsa. PHP ofrece varias formas de manejar condiciones, siendo las más comunes `if`, `else`, `elseif` y `switch`.

#### **6.1.1 Condicional `if`, `else`, `elseif`**

La estructura condicional `if` evalúa una expresión y ejecuta un bloque de código si la expresión es verdadera. Si la expresión es falsa, puede haber una rama `else` para ejecutar un bloque de código alternativo. Además, se pueden encadenar múltiples condiciones utilizando `elseif`.

**Sintaxis básica**:
```php
if (condición) {
    // Bloque de código si la condición es verdadera
} elseif (otra_condición) {
    // Bloque de código si la segunda condición es verdadera
} else {
    // Bloque de código si ninguna condición es verdadera
}
```

**Ejemplo de uso de `if`, `else`, `elseif`:**
```php
<?php
    $edad = 20;

    if ($edad >= 18) {
        echo "Eres mayor de edad.";  // Se ejecuta si $edad es mayor o igual a 18
    } else {
        echo "Eres menor de edad.";  // Se ejecuta si $edad es menor que 18
    }
?>
```

En este ejemplo, se evalúa si la variable `$edad` es mayor o igual a 18. Dependiendo del resultado, se ejecuta uno de los dos bloques de código.

**Uso de `elseif`:**
```php
<?php
    $nota = 75;

    if ($nota >= 90) {
        echo "Excelente";
    } elseif ($nota >= 75) {
        echo "Muy bien";
    } else {
        echo "Necesitas mejorar";
    }
?>
```

Aquí, el bloque `elseif` permite evaluar otra condición en caso de que la primera no sea verdadera.

### **6.2 Estructuras de Repetición (Bucles)**

Los **bucles** permiten ejecutar un bloque de código repetidamente, ya sea un número fijo de veces o hasta que una condición se cumpla. PHP proporciona varias estructuras de bucles que se adaptan a diferentes situaciones: `for`, `while`, y `foreach`.

#### **6.2.1 Bucle `for`**

El bucle `for` se utiliza cuando el número de iteraciones es conocido de antemano. Se compone de tres partes principales:
1. Inicialización de la variable de control.
2. Condición para continuar el bucle.
3. Actualización de la variable de control al final de cada iteración.

**Sintaxis básica de `for`:**
```php
for (inicialización; condición; actualización) {
    // Bloque de código a repetir
}
```

**Ejemplo de bucle `for`:**
```php
<?php
    for ($i = 0; $i < 5; $i++) {
        echo "Iteración número: $i<br>";
    }
?>
```

En este ejemplo, el bucle comienza con `$i = 0`, y mientras `$i` sea menor que 5, el bucle se repite. Al final de cada iteración, `$i` se incrementa en 1.

#### **6.2.2 Bucle `while`**

El bucle `while` ejecuta un bloque de código repetidamente mientras una condición sea verdadera. A diferencia del `for`, la condición se evalúa antes de cada iteración, lo que lo hace útil cuando no se sabe cuántas veces se repetirá el bucle.

**Sintaxis básica de `while`:**
```php
while (condición) {
    // Bloque de código a repetir mientras la condición sea verdadera
}
```

**Ejemplo de bucle `while`:**
```php
<?php
    $i = 0;

    while ($i < 5) {
        echo "Iteración número: $i<br>";
        $i++;  // Incrementar $i para evitar un bucle infinito
    }
?>
```

En este ejemplo, el bucle se ejecuta mientras `$i` sea menor que 5. En cada iteración, se imprime el valor de `$i` y luego se incrementa.

#### **6.2.3 Bucle `foreach`**

El bucle `foreach` está diseñado específicamente para recorrer **arrays**. En cada iteración, el valor de un elemento del array se asigna a una variable temporal, lo que permite procesar cada elemento del array fácilmente.

**Sintaxis básica de `foreach`:**
```php
foreach (array as valor) {
    // Bloque de código a repetir para cada elemento del array
}
```

**Ejemplo de bucle `foreach`:**
```php
<?php
    $frutas = array("manzana", "naranja", "pera");

    foreach ($frutas as $fruta) {
        echo "Fruta: $fruta<br>";
    }
?>
```

En este ejemplo, el bucle `foreach` recorre el array `$frutas` y en cada iteración, asigna el valor del elemento actual a la variable `$fruta`, que luego se imprime. El bucle continúa hasta que se han procesado todos los elementos del array.

##### **Bucle `foreach` con claves y valores:**
Si el array es asociativo (map), el bucle `foreach` puede recorrer tanto las **claves** como los **valores**.

**Ejemplo:**
```php
<?php
    $persona = array("nombre" => "Juan", "edad" => 25);

    foreach ($persona as $clave => $valor) {
        echo "$clave: $valor<br>";
    }
?>
```

Aquí, `$clave` toma los nombres de las claves (`nombre`, `edad`), y `$valor` toma los valores asociados (`Juan`, `25`).

### **6.3 Otras Estructuras de Control**

#### **6.3.1 Bucle `do...while`**

El bucle `do...while` es similar al bucle `while`, pero la diferencia clave es que **siempre** se ejecuta al menos una vez, ya que la condición se evalúa **después** de ejecutar el bloque de código.

**Sintaxis básica de `do...while`:**
```php
do {
    // Bloque de código a ejecutar
} while (condición);
```

**Ejemplo de `do...while`:**
```php
<?php
    $i = 0;

    do {
        echo "Iteración número: $i<br>";
        $i++;
    } while ($i < 5);
?>
```

En este ejemplo, el bloque de código dentro de `do` se ejecuta al menos una vez, incluso si la condición no se cumple desde el inicio.

---

## **7. Trabajo con Formularios en PHP**

Los **formularios HTML** son una de las formas más comunes para que los usuarios interactúen con un sitio web. A través de ellos, los usuarios pueden enviar información al servidor, que es procesada por un script en el servidor. En PHP, el procesamiento de formularios se maneja principalmente mediante los métodos `GET` y `POST`, que determinan cómo se envían los datos al servidor.

### **7.1 Métodos de Envío de Formularios: GET vs POST**

Existen dos métodos principales para enviar datos de formularios HTML al servidor: **GET** y **POST**. Cada uno tiene características y usos específicos que los hacen más apropiados según el contexto.

#### **7.1.1 Método GET**

El método **GET** envía los datos del formulario a través de la **URL**. Los datos se adjuntan como una **cadena de consulta** (query string), lo que significa que son visibles en la barra de direcciones del navegador. Aunque este método es más sencillo de depurar y conveniente para solicitudes simples, **no es adecuado para enviar datos sensibles o de gran tamaño**, ya que los datos quedan expuestos y las URL tienen un límite de longitud.

**Características del método GET:**
- Los datos enviados son visibles en la barra de direcciones del navegador.
- No es adecuado para enviar datos confidenciales (como contraseñas o información personal).
- Hay un límite en la cantidad de datos que se pueden enviar, ya que las URL tienen una longitud máxima.
- Se puede almacenar en caché y reutilizar, lo que lo hace útil para solicitudes idempotentes (que no modifican el estado del servidor).

**Ejemplo de un formulario que usa el método GET**:
```html
<form method="GET" action="procesar.php">
    Nombre: <input type="text" name="nombre">
    <input type="submit" value="Enviar">
</form>
```

En este caso, al enviar el formulario, los datos se añaden a la URL, por ejemplo:  
`http://example.com/procesar.php?nombre=Juan`

#### **7.1.2 Método POST**

El método **POST** envía los datos de forma **oculta** en el cuerpo de la solicitud HTTP, lo que lo hace más adecuado para enviar información sensible o grandes cantidades de datos. A diferencia del método GET, los datos no se muestran en la barra de direcciones del navegador, lo que proporciona una capa adicional de privacidad. Además, no está limitado por la longitud de la URL.

**Características del método POST:**
- Los datos no son visibles en la barra de direcciones, lo que lo hace más seguro que GET.
- No hay límite práctico en la cantidad de datos que se pueden enviar.
- Es ideal para formularios que manejan datos sensibles (como contraseñas o detalles de pago).
- No se puede almacenar en caché o reutilizar de la misma manera que GET, lo que lo hace más adecuado para solicitudes que **modifican** el estado del servidor (como el envío de formularios de registro o compras).

**Ejemplo de un formulario que usa el método POST**:
```html
<form method="POST" action="procesar.php">
    Nombre: <input type="text" name="nombre">
    <input type="submit" value="Enviar">
</form>
```

### **7.2 Procesamiento de Formularios en PHP**

Cuando un formulario se envía desde el navegador al servidor, PHP puede acceder a los datos enviados a través de **variables superglobales** como `$_GET` y `$_POST`, dependiendo del método de envío utilizado.

#### **7.2.1 Superglobales: `$_GET` y `$_POST`**

- **`$_GET`**: Es una superglobal en PHP que contiene todos los datos enviados por el método GET. Los valores enviados se almacenan en un array asociativo donde las claves corresponden a los nombres de los campos del formulario.
  
  **Ejemplo de acceso a datos enviados por GET:**
  ```php
  <?php
    $nombre = $_GET["nombre"];
    echo "Hola, $nombre";
  ?>
  ```

- **`$_POST`**: Similar a `$_GET`, pero se utiliza para capturar los datos enviados por el método POST. Los datos se almacenan en un array asociativo y pueden ser recuperados usando los nombres de los campos de formulario.
  
  **Ejemplo de acceso a datos enviados por POST:**
  ```php
  <?php
    $nombre = $_POST["nombre"];
    echo "Hola, $nombre";
  ?>
  ```

### **7.3 Validación de Formularios en PHP: Un Enfoque Integral**

En el desarrollo web, la **validación de formularios** es un proceso crítico que garantiza la integridad, seguridad y precisión de los datos recibidos. Cuando los usuarios interactúan con formularios, los datos que envían pueden estar incompletos, incorrectos o maliciosos, lo que podría afectar la seguridad y funcionalidad de la aplicación. Por ello, resulta fundamental implementar mecanismos robustos de validación tanto del lado del cliente como del lado del servidor.

La validación de formularios en PHP se puede abordar desde dos enfoques complementarios: **validación del lado del cliente** (normalmente realizada con JavaScript) y **validación del lado del servidor** (llevada a cabo con PHP). Aunque la validación del lado del cliente mejora la experiencia del usuario al proporcionar retroalimentación inmediata, **no debe ser considerada suficiente**. Dado que el código JavaScript del lado del cliente puede ser modificado o deshabilitado, es imperativo que la validación **siempre se realice también del lado del servidor**, garantizando así la protección contra posibles entradas maliciosas o errores que podrían comprometer el sistema.

#### **7.3.1 Validación Básica del Lado del Servidor: Seguridad y Precisión**

La validación del lado del servidor se refiere a la verificación y limpieza de los datos recibidos antes de procesarlos en el backend. En este contexto, una práctica básica pero esencial es asegurarse de que los campos obligatorios no estén vacíos, así como validar que los datos ingresados sean del tipo esperado. Esto previene la introducción de datos incorrectos o inconsistentes que podrían generar errores o vulnerabilidades en la aplicación.

A continuación, se presenta un ejemplo típico de validación básica en PHP. El objetivo es comprobar si el campo `nombre` ha sido completado por el usuario, mostrando un mensaje de error si el campo está vacío o procesando el dato en caso contrario.

```php
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nombre"])) {
            echo "El nombre es obligatorio.";
        } else {
            $nombre = $_POST["nombre"];
            echo "Hola, $nombre";
        }
    }
?>
```

En este ejemplo, el script primero verifica si el formulario fue enviado utilizando la superglobal `$_SERVER["REQUEST_METHOD"]`, que determina si la solicitud HTTP es de tipo `POST`. Luego, mediante la función `empty()`, se valida que el campo `nombre` no esté vacío. Si lo está, se notifica al usuario con un mensaje de error. Si el campo contiene un valor, este se procesa y se muestra como parte de la respuesta.

#### **7.3.2 Saneamiento y Validación de Datos: Protección Contra Amenazas de Seguridad**

Uno de los mayores riesgos al procesar datos de formularios es la posible inyección de código malicioso, como **inyección SQL**, **inyección de scripts (XSS)** o la **inyección de comandos**. Para mitigar estos riesgos, es fundamental no solo validar los datos, sino también aplicar un **saneamiento riguroso**. El saneamiento de datos consiste en limpiar o transformar la entrada para eliminar cualquier elemento potencialmente peligroso antes de almacenarlo o utilizarlo.

##### **Uso de `htmlspecialchars()` para Evitar Inyección de HTML**
Una función comúnmente empleada para este propósito es `htmlspecialchars()`, que convierte caracteres especiales en entidades HTML, evitando así que los usuarios puedan inyectar código HTML o scripts maliciosos.

```php
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = htmlspecialchars($_POST["nombre"]);
        echo "Hola, $nombre";
    }
?>
```

En este ejemplo, la función `htmlspecialchars()` convierte cualquier carácter especial (como `<`, `>`, `&`, etc.) en su correspondiente entidad HTML, lo que impide que el navegador interprete el valor como código HTML o JavaScript, proporcionando una capa adicional de seguridad contra **Cross-Site Scripting (XSS)**.

##### **Validación de Tipos de Datos con `filter_var()`**

Además del saneamiento, la validación estricta de los tipos de datos es crucial para asegurar que la información ingresada sea la esperada. PHP proporciona una serie de funciones, entre ellas `filter_var()`, que permiten validar diferentes tipos de datos, como correos electrónicos, URLs y números enteros. La función `filter_var()` no solo valida, sino que también puede sanitizar los datos utilizando diferentes filtros.

Por ejemplo, para validar que el dato ingresado en un campo de correo electrónico sea un formato válido, se puede usar el siguiente código:

```php
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Correo electrónico no válido.";
        } else {
            echo "Correo válido: $email";
        }
    }
?>
```

En este fragmento de código, la función `filter_var()` utiliza el filtro `FILTER_VALIDATE_EMAIL` para comprobar si el valor ingresado cumple con el formato estándar de un correo electrónico. Si el valor no es válido, se informa al usuario; de lo contrario, el correo electrónico es aceptado y procesado.

### **7.3.3 Consideraciones Adicionales: Mejores Prácticas para la Validación en PHP con Ejemplos**

La validación y saneamiento de datos no debe limitarse a ejemplos sencillos como verificar campos vacíos o validar correos electrónicos. Cada aplicación tiene requisitos específicos y, por tanto, la validación debe adaptarse a la naturaleza de los datos que se procesan. A continuación se presentan mejores prácticas adicionales para la validación en PHP, junto con ejemplos prácticos que ilustran cómo implementarlas.

#### **Validación de Campos Numéricos y Rangos**

Cuando se trabaja con datos numéricos, es crucial asegurarse de que el valor recibido es, efectivamente, un número válido y que se encuentra dentro de los rangos definidos por el sistema. En PHP, se puede utilizar la función `filter_var()` junto con los filtros `FILTER_VALIDATE_INT` o `FILTER_VALIDATE_FLOAT` para validar números enteros o decimales, respectivamente.

**Ejemplo: Validación de Edad con Rango Permitido**
```php
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $edad = $_POST["edad"];
        // Validar que es un número entero y que está entre 18 y 65 años
        if (!filter_var($edad, FILTER_VALIDATE_INT, array("options" => array("min_range" => 18, "max_range" => 65)))) {
            echo "La edad debe ser un número entero entre 18 y 65.";
        } else {
            echo "Edad válida: $edad";
        }
    }
?>
```
En este ejemplo, `filter_var()` asegura que el campo `edad` es un número entero y está dentro del rango de 18 a 65 años. Si no cumple con estos requisitos, se devuelve un mensaje de error. De lo contrario, se procesa el dato.

**Ejemplo: Validación de Precio Decimal**
```php
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $precio = $_POST["precio"];
        // Validar que es un número decimal con filtro y un rango de precio
        if (!filter_var($precio, FILTER_VALIDATE_FLOAT) || $precio < 0.01 || $precio > 10000) {
            echo "El precio debe ser un número decimal entre 0.01 y 10,000.";
        } else {
            echo "Precio válido: $precio";
        }
    }
?>
```
Aquí se valida que el campo `precio` es un número decimal, y que está dentro del rango definido, asegurando que no se acepten valores negativos o extremadamente altos.

#### **Validación de Longitud de Campos**

En muchos casos, es necesario limitar la longitud de los datos ingresados, especialmente cuando se trata de campos como nombres, contraseñas o comentarios. Esto previene errores de almacenamiento y protege contra posibles ataques que intentan desbordar buffers o bases de datos. Se puede utilizar la función `strlen()` para medir la longitud de las cadenas de texto.

**Ejemplo: Validación de Longitud del Nombre**
```php
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        // Validar que la longitud del nombre esté entre 3 y 50 caracteres
        if (strlen($nombre) < 3 || strlen($nombre) > 50) {
            echo "El nombre debe tener entre 3 y 50 caracteres.";
        } else {
            echo "Nombre válido: $nombre";
        }
    }
?>
```
En este caso, se valida que el campo `nombre` tenga entre 3 y 50 caracteres, evitando que se ingresen nombres demasiado cortos o excesivamente largos.

**Ejemplo: Validación de Contraseña con Longitud y Complejidad**
```php
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $password = $_POST["password"];
        // Validar que la contraseña tenga al menos 8 caracteres y contenga letras y números
        if (strlen($password) < 8 || !preg_match("/[A-Za-z]/", $password) || !preg_match("/[0-9]/", $password)) {
            echo "La contraseña debe tener al menos 8 caracteres, incluir letras y números.";
        } else {
            echo "Contraseña válida.";
        }
    }
?>
```
Este código valida que la contraseña tenga una longitud mínima de 8 caracteres, y que incluya tanto letras como números, mejorando la seguridad del sistema.

#### **Validación de Entradas Personalizadas con Expresiones Regulares**

En algunos casos, la validación puede requerir patrones más específicos, como el formato de un número de teléfono, código postal o incluso nombres de usuario. Las **expresiones regulares** (regular expressions o **regex**) son una poderosa herramienta para definir estos patrones y asegurar que los datos ingresados cumplen con las expectativas.

**Ejemplo: Validación de Número de Teléfono**
```php
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $telefono = $_POST["telefono"];
        // Validar que el número de teléfono sea de 10 dígitos
        if (!preg_match("/^[0-9]{10}$/", $telefono)) {
            echo "El número de teléfono debe contener exactamente 10 dígitos.";
        } else {
            echo "Número de teléfono válido.";
        }
    }
?>
```
Aquí se utiliza una expresión regular que asegura que el campo `telefono` contiene exactamente 10 dígitos, un formato típico para números telefónicos en muchos países.

**Ejemplo: Validación de Código Postal**
```php
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $codigo_postal = $_POST["codigo_postal"];
        // Validar que el código postal sea un formato válido (5 dígitos en este caso)
        if (!preg_match("/^[0-9]{5}$/", $codigo_postal)) {
            echo "El código postal debe contener 5 dígitos.";
        } else {
            echo "Código postal válido.";
        }
    }
?>
```
En este caso, se valida que el código postal ingresado tenga exactamente 5 dígitos numéricos, un formato estándar en muchos países.

**Ejemplo: Validación de Nombre de Usuario**
```php
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        // Validar que el nombre de usuario contiene solo letras, números y guiones bajos, y tiene entre 3 y 15 caracteres
        if (!preg_match("/^[a-zA-Z0-9_]{3,15}$/", $username)) {
            echo "El nombre de usuario debe tener entre 3 y 15 caracteres y solo puede contener letras, números y guiones bajos.";
        } else {
            echo "Nombre de usuario válido: $username";
        }
    }
?>
```
Este ejemplo muestra cómo validar un nombre de usuario que debe contener solo letras, números y guiones bajos, y tener una longitud entre 3 y 15 caracteres.

#### **Validación de Fechas**

Las fechas son un tipo de dato especial que también requiere validación. PHP proporciona la función `checkdate()` para validar fechas con formato día, mes y año.

**Ejemplo: Validación de Fecha Válida**
```php
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dia = $_POST["dia"];
        $mes = $_POST["mes"];
        $anio = $_POST["anio"];
        // Validar si la fecha es válida
        if (!checkdate($mes, $dia, $anio)) {
            echo "La fecha no es válida.";
        } else {
            echo "Fecha válida: $dia/$mes/$anio";
        }
    }
?>
```
En este ejemplo, se valida que la fecha ingresada sea válida utilizando `checkdate()`, que comprueba que el día, mes y año forman una fecha real.

### **7.4 Subida de Archivos en Formularios**

PHP también permite el manejo de **subida de archivos** a través de formularios. Para habilitar esta funcionalidad, es necesario agregar el atributo `enctype="multipart/form-data"` en el formulario y usar la superglobal `$_FILES` para acceder a los archivos subidos.

**Ejemplo de formulario para subir archivos:**
```html
<form method="POST" action="upload.php" enctype="multipart/form-data">
    Selecciona un archivo: <input type="file" name="archivo">
    <input type="submit" value="Subir">
</form>
```

**Procesamiento en PHP para subir archivos (`upload.php`):**
```php
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $archivo = $_FILES["archivo"];
        $rutaDestino = "uploads/" . basename($archivo["name"]);
        
        if (move_uploaded_file($archivo["tmp_name"], $rutaDestino)) {
            echo "El archivo " . basename($archivo["name"]) . " ha sido subido correctamente.";
        } else {
            echo "Error al subir el archivo.";
        }
    }
?>


```

En este ejemplo, `move_uploaded_file()` se utiliza para mover el archivo desde la carpeta temporal a la ubicación deseada en el servidor.