# **Unidad 2: PHP Avanzado y Programación Orientada a Objetos (POO)**

## **1. Programación Orientada a Objetos en PHP**

### **1.1 Clases y Objetos**

La **Programación Orientada a Objetos (POO)** en PHP es un paradigma que facilita la estructura y la organización del código al basarse en el concepto de objetos. Un objeto es una instancia de una clase, y las clases son las plantillas que definen los atributos (datos) y los comportamientos (funcionalidades) que los objetos instanciados a partir de ellas pueden poseer. A través de la POO, es posible modelar entidades del mundo real, organizando la información en propiedades (atributos) y métodos (comportamientos).

Una clase es el modelo fundamental en POO y representa una entidad abstracta. En PHP, una clase agrupa las propiedades (datos) y los métodos (funciones) que operan sobre esos datos. Cada instancia de una clase es un objeto que tiene sus propios valores para las propiedades definidas en la clase.

#### **Definición de una clase en PHP**
En PHP, una clase se define usando la palabra clave `class` seguida del nombre de la clase. Las propiedades se declaran como variables dentro de la clase, y los métodos se declaran como funciones. Cada método puede interactuar con las propiedades de la clase y realizar operaciones sobre ellas.

```php
class Persona {
    // Propiedades
    public $nombre;
    public $edad;

    // Método
    public function saludar() {
        return "Hola, mi nombre es " . $this->nombre;
    }
}
```

En el ejemplo anterior, la clase `Persona` tiene dos propiedades (`$nombre` y `$edad`) y un método (`saludar`). El método `saludar` accede a la propiedad `$nombre` utilizando `$this`, que es una referencia al objeto actual (la instancia de la clase). La palabra clave `public` define que las propiedades y métodos son accesibles desde fuera de la clase.

#### **Conceptos Clave**
- **Propiedades**: Son variables que contienen los datos asociados a cada instancia de una clase. En el ejemplo, `$nombre` y `$edad` son propiedades que almacenan información de un objeto `Persona`.
- **Métodos**: Son funciones definidas dentro de una clase que actúan sobre las propiedades del objeto. En este caso, el método `saludar()` imprime un mensaje utilizando la propiedad `$nombre`.

### **1.2 Creación de Objetos**

Para crear un objeto en PHP, se utiliza el operador `new`, que crea una nueva instancia de la clase definida. Cada objeto es independiente de los demás y puede tener valores únicos para sus propiedades.

```php
$persona1 = new Persona();  // Crear un nuevo objeto de la clase Persona
$persona1->nombre = "Juan";  // Asignar un valor a la propiedad 'nombre'
$persona1->edad = 30;  // Asignar un valor a la propiedad 'edad'

echo $persona1->saludar();  // Llamar al método 'saludar'
```

En este caso, el operador de instancia `->` se usa para acceder a las propiedades y métodos del objeto. `persona1` es una instancia de la clase `Persona` y tiene sus propias versiones de las propiedades `$nombre` y `$edad`, que pueden ser modificadas independientemente de otros objetos de la misma clase.

La creación de objetos permite encapsular datos y comportamiento dentro de cada instancia, lo que promueve la modularidad y facilita la reutilización del código. Cada instancia tiene su propio estado, lo que significa que las propiedades pueden tener valores diferentes en cada objeto.

### **1.3 Constructores y Destructores**

#### **Constructores**
Un **constructor** es un método especial que es invocado automáticamente al crear un nuevo objeto. En PHP, el constructor se define mediante el método mágico `__construct()`. Su principal función es inicializar las propiedades del objeto con valores específicos, ya sea predeterminados o basados en los parámetros que se le pasen.

```php
class Persona {
    public $nombre;
    public $edad;

    // Constructor
    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;  // Inicializa la propiedad 'nombre'
        $this->edad = $edad;      // Inicializa la propiedad 'edad'
    }

    public function saludar() {
        return "Hola, mi nombre es " . $this->nombre;
    }
}

$persona1 = new Persona("Juan", 30);  // El constructor es llamado automáticamente
echo $persona1->saludar();  // "Hola, mi nombre es Juan"
```

En el ejemplo anterior, cuando se crea un nuevo objeto `Persona` utilizando `new Persona("Juan", 30)`, el método `__construct()` es invocado automáticamente, asignando los valores "Juan" a la propiedad `$nombre` y 30 a la propiedad `$edad`.

#### **Destructores**
Un **destructor** es otro método especial que se invoca cuando un objeto es destruido o cuando el script termina su ejecución. En PHP, se define mediante el método mágico `__destruct()`. Se usa principalmente para realizar tareas de limpieza, como cerrar conexiones a bases de datos o liberar recursos.

```php
class Persona {
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    // Destructor
    public function __destruct() {
        echo "El objeto {$this->nombre} ha sido destruido.";
    }

    public function saludar() {
        return "Hola, mi nombre es " . $this->nombre;
    }
}

$persona1 = new Persona("Juan", 30);
echo $persona1->saludar();  // "Hola, mi nombre es Juan"
// Cuando el script finaliza, el destructor es llamado automáticamente
```

En el ejemplo, el destructor se invoca automáticamente cuando el objeto ya no es necesario, y en este caso, imprime un mensaje cuando el objeto se destruye.

### **1.4 Visibilidad: Public, Private y Protected**

La **visibilidad** en PHP define el nivel de acceso que las propiedades y los métodos de una clase pueden tener. PHP utiliza tres niveles de visibilidad que permiten controlar cómo se accede y se modifican las propiedades y métodos:

#### **Public**
Las propiedades o métodos declarados como `public` son accesibles desde cualquier parte del código, es decir, tanto desde dentro como desde fuera de la clase. Esta es la visibilidad predeterminada si no se especifica lo contrario.

```php
class Persona {
    public $nombre;  // Esta propiedad es accesible desde cualquier lugar
}
```

#### **Private**
Las propiedades o métodos marcados como `private` solo pueden ser accedidos o modificados desde dentro de la clase donde se han declarado. Esto se utiliza para proteger datos sensibles o evitar que se modifiquen accidentalmente desde fuera de la clase.

```php
class Persona {
    private $edad;  // Solo accesible dentro de la clase

    public function __construct($edad) {
        $this->edad = $edad;
    }

    private function getEdad() {  // Método privado, solo accesible dentro de la clase
        return $this->edad;
    }
}
```

En este ejemplo, la propiedad `$edad` y el método `getEdad()` son privados, lo que significa que no se pueden acceder directamente desde fuera de la clase. Esto protege los datos internos de modificaciones no deseadas.

#### **Protected**
Las propiedades y métodos declarados como `protected` son similares a los privados, pero con una diferencia clave: son accesibles desde la propia clase y desde cualquier clase que herede de ella (subclases). Esto permite controlar el acceso en jerarquías de clases.

```php
class Persona {
    protected $nombre;  // Accesible desde la clase y sus subclases

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }
}

class Empleado extends Persona {
    public function getNombre() {
        return $this->nombre;  // Se puede acceder a la propiedad protegida desde la subclase
    }
}
```

En este ejemplo, `Empleado` es una subclase de `Persona`, y aunque la propiedad `$nombre` es protegida, la subclase tiene acceso a ella. Esto permite un grado de encapsulamiento flexible dentro de jerarquías de clases.

### **1.5 Uso de diferentes ficheros y tipos de include en PHP**

A medida que los proyectos en PHP crecen en tamaño y complejidad, se vuelve fundamental dividir el código en múltiples ficheros para mantener una estructura limpia, organizada y modular. Esto no solo mejora la legibilidad del código, sino que también facilita su mantenimiento, escalabilidad y reutilización. PHP ofrece varias formas de incluir archivos externos en un script, lo que permite dividir el código en diferentes módulos o componentes. Las principales herramientas que proporciona PHP para esta tarea son `include`, `require`, `include_once` y `require_once`.

#### **Ventajas de modularizar el código**

La modularización del código mediante el uso de múltiples ficheros tiene varios beneficios:
- **Mantenimiento**: Al dividir el código en módulos más pequeños, es más fácil localizar, corregir y modificar partes específicas de la aplicación sin afectar otras.
- **Reutilización**: Las funciones, clases o configuraciones definidas en un fichero pueden reutilizarse en otros scripts del proyecto.
- **Colaboración**: En equipos grandes, dividir el código facilita que varios desarrolladores trabajen en diferentes partes del proyecto de manera simultánea y sin conflictos.
- **Carga condicional**: Los ficheros pueden incluirse condicionalmente, lo que permite que solo se carguen cuando son necesarios, optimizando el rendimiento.

#### **Tipos de inclusión de ficheros en PHP**

##### **1. Include**

La declaración `include` se utiliza para incluir y evaluar un archivo externo en el contexto del script actual. Si el archivo especificado no se encuentra o no puede incluirse, `include` genera un **warning** (advertencia), pero el script continuará ejecutándose. Este comportamiento es útil cuando la ausencia del fichero no debería interrumpir la ejecución global del script.

```php
include 'funciones.php';  // Incluir el archivo funciones.php
```

Ejemplo de uso:
```php
// archivo1.php
class Persona {
    public $nombre;
    public $edad;
}

// archivo2.php
include 'archivo1.php';  // Incluir archivo1.php, que contiene la clase Persona

$persona1 = new Persona();
$persona1->nombre = "Juan";
```

En este ejemplo, si `archivo1.php` no existe, PHP mostrará una advertencia, pero el script seguirá ejecutándose, lo que puede ser útil en situaciones donde el código no depende críticamente del archivo externo.

##### **2. Require**

La declaración `require` funciona de manera similar a `include`, pero con una diferencia clave: si el fichero especificado no se encuentra, se lanzará un **error fatal** (`E_COMPILE_ERROR`) y el script dejará de ejecutarse inmediatamente. Esto asegura que si un fichero es esencial para la operación del programa, el código no continúe su ejecución en caso de que falte.

```php
require 'config.php';  // Incluir el archivo config.php
```

Ejemplo de uso:
```php
// archivo1.php
class Persona {
    public $nombre;
    public $edad;
}

// archivo2.php
require 'archivo1.php';  // Incluir archivo1.php, el cual es esencial para el funcionamiento

$persona1 = new Persona();
$persona1->nombre = "Juan";
```

En este ejemplo, si `archivo1.php` no se encuentra, el script se detendrá, lo cual es deseable si `archivo1.php` contiene definiciones críticas para el funcionamiento del sistema, como clases o funciones esenciales.

##### **3. Include_once**

`include_once` es una variación de `include` que garantiza que el archivo solo se incluirá una vez, independientemente de cuántas veces se llame a `include_once` en el script. Si el fichero ya ha sido incluido previamente, PHP ignorará la inclusión subsiguiente. Esto es especialmente útil cuando se desea evitar redefinir clases, funciones o constantes múltiples veces, lo que podría causar errores de ejecución.

```php
include_once 'funciones.php';  // Solo se incluirá una vez
```

Ejemplo de uso:
```php
// archivo1.php
class Persona {
    public $nombre;
    public $edad;
}

// archivo2.php
include_once 'archivo1.php';  // Incluir archivo1.php solo una vez
include_once 'archivo1.php';  // No volverá a incluirse aunque se llame de nuevo

$persona1 = new Persona();
$persona1->nombre = "Juan";
```

En este ejemplo, aunque se llama dos veces a `include_once`, `archivo1.php` solo se incluirá una vez. Esto previene la redefinición de la clase `Persona`, evitando posibles errores fatales en el script.

##### **4. Require_once**

`require_once` es una versión más estricta de `include_once`. Al igual que `include_once`, asegura que un archivo solo se incluirá una vez, pero si el fichero no está disponible, el script se detendrá con un error fatal. Este comportamiento es útil cuando el fichero es esencial para la ejecución y se necesita garantizar que no se cargue más de una vez.

```php
require_once 'config.php';  // Solo se incluirá una vez, el script se detendrá si no se encuentra
```

Ejemplo de uso:
```php
// archivo1.php
class Persona {
    public $nombre;
    public $edad;
}

// archivo2.php
require_once 'archivo1.php';  // Incluir archivo1.php solo una vez
require_once 'archivo1.php';  // No se volverá a incluir

$persona1 = new Persona();
$persona1->nombre = "Juan";
```

En este caso, si `archivo1.php` ya ha sido incluido, no se incluirá de nuevo. Si el archivo es esencial pero no se encuentra, el script se detendrá, garantizando que no se ejecute sin las definiciones necesarias.

#### **¿Cuándo usar cada tipo de inclusión?**

- **Use `include`** cuando el archivo a incluir no sea crucial para el resto del script, es decir, cuando el script pueda seguir ejecutándose sin dicho archivo. Este es el caso típico de archivos que contienen partes opcionales o información secundaria.
  
- **Use `require`** cuando el archivo es absolutamente necesario para que el script funcione correctamente. Si el archivo no está disponible, es preferible detener el script en lugar de continuar con errores.

- **Use `include_once`** en situaciones donde el archivo contiene definiciones (por ejemplo, de clases o funciones) que no deben ser incluidas más de una vez. Esto previene redefiniciones accidentales que podrían causar errores.

- **Use `require_once`** cuando el archivo es esencial para el script y además debe incluirse solo una vez. Esto asegura que el archivo siempre esté presente y que no se cargue múltiples veces, protegiendo contra errores fatales.

--- 

## **2. Herencia y Polimorfismo en PHP**

La herencia y el polimorfismo son dos pilares fundamentales de la **Programación Orientada a Objetos (POO)**. Estos conceptos proporcionan mecanismos potentes para la reutilización de código, la flexibilidad en el diseño de software y la organización lógica de las clases. PHP, como lenguaje orientado a objetos, permite aprovechar estos conceptos para estructurar aplicaciones de manera escalable y eficiente.

### **2.1 Herencia de Clases**

La **herencia** es uno de los mecanismos más importantes en POO, ya que permite a una clase (denominada "clase hija" o "subclase") heredar propiedades y métodos de otra clase (denominada "clase padre" o "superclase"). Este mecanismo no solo fomenta la reutilización del código, sino que también mejora la mantenibilidad y legibilidad del mismo, permitiendo crear jerarquías de clases que comparten comportamiento y atributos comunes.

#### **Cómo funciona la herencia**

Cuando una clase hija hereda de una clase padre, tiene acceso a todos los métodos y propiedades públicas y protegidas de la clase padre. Esto permite que la clase hija extienda y modifique el comportamiento heredado sin duplicar código. Si la clase hija necesita características adicionales o un comportamiento específico, puede agregar sus propias propiedades y métodos, o **sobrescribir** aquellos heredados.

#### **Ejemplo de herencia en PHP**

En el siguiente ejemplo, la clase `Estudiante` hereda de la clase `Persona`, aprovechando las propiedades y métodos ya definidos en `Persona` sin tener que volver a implementarlos.

```php
class Persona {
    public $nombre;
    public $edad;

    // Constructor de la clase Persona
    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    // Método que devuelve un saludo
    public function saludar() {
        return "Hola, soy " . $this->nombre;
    }
}

class Estudiante extends Persona {
    public $grado;

    // Constructor de la clase Estudiante que llama al constructor padre
    public function __construct($nombre, $edad, $grado) {
        parent::__construct($nombre, $edad);  // Llamada al constructor de la clase padre
        $this->grado = $grado;
    }

    // Método que extiende el comportamiento del saludo, agregando información adicional
    public function info() {
        return $this->saludar() . " y estudio en " . $this->grado;
    }
}

$estudiante1 = new Estudiante("Carlos", 20, "Universidad");
echo $estudiante1->info();  // "Hola, soy Carlos y estudio en Universidad"
```

En este ejemplo:

1. La clase `Estudiante` hereda las propiedades `$nombre` y `$edad`, así como el método `saludar()` de la clase `Persona`.
2. `Estudiante` define una nueva propiedad `$grado` y añade un nuevo método `info()` que extiende el comportamiento heredado.
3. La palabra clave `parent::__construct()` se utiliza para llamar al constructor de la clase padre, asegurando que las propiedades heredadas también se inicialicen correctamente en la clase hija.

#### **Ventajas de la herencia**

- **Reutilización de código**: Las clases hijas no necesitan reescribir el código común a todas las clases, sino que lo heredan de la clase padre.
- **Jerarquización**: Permite organizar el código de forma lógica, creando jerarquías donde las clases más específicas extienden el comportamiento de clases más generales.
- **Mantenibilidad**: Los cambios realizados en la clase padre pueden reflejarse automáticamente en las clases hijas, reduciendo la necesidad de cambiar múltiples partes del código.

### **2.2 Sobrescritura de Métodos**

En un sistema de herencia, las subclases no están limitadas a utilizar los métodos tal como se definen en la clase padre. En PHP, es posible **sobrescribir** (override) métodos heredados en la clase hija, redefiniendo su comportamiento para adaptarlo a las necesidades específicas de la subclase.

La sobrescritura de métodos permite personalizar o modificar el comportamiento heredado sin cambiar el código de la clase padre, lo cual es fundamental para mantener la integridad y flexibilidad de los sistemas orientados a objetos.

#### **Ejemplo de sobrescritura de métodos**

```php
class Persona {
    // Método original en la clase padre
    public function saludar() {
        return "Hola!";
    }
}

class Estudiante extends Persona {
    // Sobrescritura del método 'saludar' en la clase hija
    public function saludar() {
        return "Hola, soy un estudiante!";
    }
}
```

En este ejemplo, la clase `Estudiante` sobrescribe el método `saludar()` heredado de `Persona`. Al instanciar un objeto de `Estudiante` y llamar a `saludar()`, se ejecutará la versión del método sobrescrito en la clase hija.

La sobrescritura de métodos es esencial para implementar el **polimorfismo**, permitiendo que diferentes clases (que heredan de la misma superclase) respondan de manera diferente a la misma llamada de método, proporcionando una mayor flexibilidad en el diseño del software.

### **2.3 Clases Abstractas e Interfaces**

#### **Clases Abstractas**

Una **clase abstracta** es una clase que no puede ser instanciada directamente y que debe ser extendida por otras clases. Las clases abstractas permiten definir una estructura común para un conjunto de subclases, proporcionando tanto métodos implementados como métodos abstractos (no implementados) que las clases hijas deben definir. Las clases abstractas son útiles cuando se desea crear una base genérica para varias clases que compartirán comportamiento, pero donde ciertos detalles específicos deben ser proporcionados por las subclases.

Una clase abstracta puede tener tanto métodos con implementación como métodos sin implementación (denominados **métodos abstractos**). Un método abstracto es simplemente una declaración sin cuerpo que obliga a las subclases a proporcionar su propia implementación.

#### **Ejemplo de clase abstracta en PHP**

```php
abstract class Figura {
    // Método abstracto: debe ser implementado por las subclases
    abstract public function area();
}

class Cuadrado extends Figura {
    private $lado;

    // Constructor para inicializar el valor del lado
    public function __construct($lado) {
        $this->lado = $lado;
    }

    // Implementación del método abstracto
    public function area() {
        return $this->lado * $this->lado;
    }
}
```

En este ejemplo:

1. La clase `Figura` es abstracta y define el método abstracto `area()`, pero no proporciona su implementación.
2. La subclase `Cuadrado` extiende `Figura` e implementa el método `area()` de acuerdo con sus propias características.

La principal ventaja de las clases abstractas es que permiten definir una estructura general para las clases derivadas, garantizando que las subclases provean implementaciones para los métodos críticos sin imponer cómo deberían hacerlo.

#### **Interfaces**

Una **interfaz** en PHP es similar a una clase abstracta, pero con diferencias clave. Una interfaz define un conjunto de métodos que deben ser implementados por cualquier clase que la utilice, pero no proporciona ninguna implementación de esos métodos. A diferencia de las clases abstractas, las interfaces no pueden tener propiedades ni métodos implementados.

Las interfaces son útiles cuando se quiere asegurar que un conjunto de clases diferentes sigan un contrato común, es decir, que todas implementen los mismos métodos, pero sin definir cómo deben hacerlo.

#### **Ejemplo de interfaz en PHP**

```php
interface Forma {
    public function area();
}

class Circulo implements Forma {
    private $radio;

    // Constructor para inicializar el radio
    public function __construct($radio) {
        $this->radio = $radio;
    }

    // Implementación del método 'area' de la interfaz
    public function area() {
        return pi() * $this->radio * $this->radio;
    }
}
```

En este ejemplo, `Circulo` implementa la interfaz `Forma` y está obligado a definir el método `area()`. Si `Circulo` no proporciona una implementación para `area()`, PHP generaría un error. Las interfaces proporcionan un contrato que las clases deben seguir, lo que es especialmente útil cuando diferentes clases que no comparten una relación de herencia necesitan implementar los mismos métodos.

#### **Diferencias entre clases abstractas e interfaces**

- **Propiedades**: Las clases abstractas pueden contener propiedades, mientras que las interfaces no.
- **Métodos implementados**: Las clases abstractas pueden tener métodos con o sin implementación, mientras que las interfaces solo definen métodos sin implementación.
- **Herencia múltiple**: En PHP, una clase solo puede heredar de una clase abstracta, pero puede implementar múltiples interfaces.

--- 

## **3. Namespaces y Manejo de Excepciones en PHP**

### **3.1 Namespaces**

En proyectos de gran envergadura, con múltiples clases, funciones y constantes, es habitual encontrarse con posibles conflictos de nombres. PHP soluciona este problema a través del uso de **namespaces**. Los namespaces permiten organizar el código en distintos espacios de nombres, evitando colisiones entre elementos con el mismo nombre pero que pertenecen a diferentes partes del proyecto.

#### **Concepto y propósito de los namespaces**

Un **namespace** (o espacio de nombres) es un contenedor que agrupa clases, interfaces, funciones y constantes bajo un nombre común. Este enfoque es especialmente útil cuando se trabaja en aplicaciones que dependen de bibliotecas de terceros o cuando se maneja una base de código extensa, en la que podrían surgir conflictos si dos clases o funciones tienen el mismo nombre.

En ausencia de namespaces, todas las clases, funciones y constantes se definen en el espacio de nombres global, lo que aumenta el riesgo de colisiones. Los namespaces permiten que cada componente del código pertenezca a un espacio de nombres único, manteniendo una clara separación entre los diferentes elementos.

#### **Definición de un namespace**

Para definir un espacio de nombres en PHP, se utiliza la palabra clave `namespace`, seguida por el nombre que agrupará las clases, funciones y constantes bajo ese espacio. Este nombre debe colocarse al principio del archivo PHP, antes de cualquier otro código.

```php
namespace MiProyecto;

class Usuario {
    public function saludar() {
        return "Hola desde MiProyecto!";
    }
}
```

En este ejemplo, la clase `Usuario` está definida dentro del espacio de nombres `MiProyecto`. Esto significa que cualquier código fuera de este namespace debe referirse a `Usuario` de manera explícita utilizando el nombre completo del namespace.

#### **Acceso a clases dentro de un namespace**

Para acceder a una clase o función que se encuentra dentro de un namespace, se utiliza el operador de resolución de nombres (`\`). Este operador le indica a PHP que busque la clase dentro del espacio de nombres especificado, en lugar de buscarla en el espacio de nombres global.

```php
$usuario = new \MiProyecto\Usuario();  // Acceso a la clase Usuario dentro del namespace MiProyecto
echo $usuario->saludar();
```

Este enfoque es necesario cuando se trabaja en proyectos complejos o en combinación con bibliotecas externas. Sin namespaces, diferentes paquetes o módulos podrían tener clases con nombres idénticos, lo que resultaría en colisiones de nombres y posibles errores fatales.

#### **Subnamespaces y organización jerárquica**

Los namespaces en PHP también permiten la creación de subnamespaces, lo que habilita una estructura jerárquica para organizar el código de manera aún más granular. Un subnamespace se define añadiendo un nivel adicional de separación mediante el uso de una barra invertida (`\`).

```php
namespace MiProyecto\Modelos;

class Usuario {
    public function saludar() {
        return "Hola desde el modelo Usuario!";
    }
}
```

Aquí, `Usuario` está dentro del subnamespace `Modelos`, que a su vez está dentro del namespace principal `MiProyecto`. Esto permite una organización jerárquica de clases según su función o contexto.

#### **Importación de namespaces**

Es posible utilizar la palabra clave `use` para importar un namespace y evitar tener que referirse a una clase con su nombre completo cada vez que se necesite.

```php
namespace MiApp;

use MiProyecto\Modelos\Usuario;

$usuario = new Usuario();  // Ahora se puede utilizar la clase sin necesidad de escribir el namespace completo
```

De esta forma, `use` simplifica el acceso a clases dentro de namespaces, reduciendo la verbosidad del código sin sacrificar la claridad.

### **3.2 Manejo de Excepciones**

El manejo de excepciones en PHP es una técnica fundamental que permite gestionar errores o condiciones excepcionales de manera estructurada y predecible. En lugar de detener abruptamente la ejecución del script cuando ocurre un error, las excepciones ofrecen un mecanismo flexible para detectar, manejar y responder a dichos errores de manera controlada.

#### **Excepciones en PHP: una visión general**

Una **excepción** es un objeto que se lanza ("throw") cuando ocurre un error que no puede gestionarse mediante el flujo normal del código. El proceso de manejo de excepciones permite capturar ese error utilizando bloques especiales (`try`, `catch`) y ejecutar código de respuesta, como mostrar mensajes de error, registrar incidentes o limpiar recursos.

El uso de excepciones no solo mejora la calidad del código al permitir una mejor gestión de errores, sino que también separa la lógica del manejo de errores del código funcional principal, haciendo que el código sea más legible y fácil de mantener.

#### **Sintaxis básica del manejo de excepciones**

El manejo de excepciones en PHP utiliza tres bloques principales: `try`, `catch` y `finally`.

1. **`try`**: Este bloque contiene el código que puede lanzar una excepción. Si ocurre una excepción dentro de este bloque, PHP dejará de ejecutar el código y buscará un bloque `catch` correspondiente para gestionar la excepción.
   
2. **`catch`**: El bloque `catch` se ejecuta cuando se lanza una excepción. Aquí se define cómo gestionar el error. Se puede acceder a la excepción a través de un objeto de la clase `Exception`.
   
3. **`finally`** (opcional): Este bloque contiene el código que se ejecuta siempre, sin importar si se lanzó o no una excepción. Es útil para liberar recursos o realizar acciones de limpieza.

#### **Ejemplo básico de manejo de excepciones**

```php
try {
    $num = 0;
    if ($num == 0) {
        throw new Exception("El número no puede ser cero.");
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
} finally {
    echo "Este bloque se ejecuta siempre.";
}
```

En este ejemplo:

- El bloque `try` contiene un código que verifica si `$num` es igual a 0. Si lo es, se lanza una excepción utilizando `throw new Exception()`.
- El bloque `catch` captura la excepción lanzada y maneja el error mostrando el mensaje correspondiente.
- El bloque `finally` se ejecuta siempre, independientemente de si ocurrió una excepción o no. Es útil para cerrar recursos como conexiones a bases de datos o archivos.

#### **Lanzamiento de excepciones personalizadas**

PHP permite lanzar excepciones personalizadas utilizando la palabra clave `throw`. Las excepciones pueden ser instancias de la clase `Exception` o de una subclase personalizada de `Exception`. Esto proporciona mayor flexibilidad, permitiendo que los desarrolladores creen excepciones específicas para diferentes tipos de errores.

```php
class MiExcepcion extends Exception {
    public function mensajePersonalizado() {
        return "Error específico: " . $this->getMessage();
    }
}

try {
    throw new MiExcepcion("Ocurrió un error crítico.");
} catch (MiExcepcion $e) {
    echo $e->mensajePersonalizado();
}
```

En este ejemplo, `MiExcepcion` es una subclase personalizada de `Exception`, que agrega un método adicional para devolver un mensaje de error personalizado. Esto permite manejar de forma más detallada y específica los distintos tipos de errores en el sistema.

#### **Jerarquía de excepciones en PHP**

En PHP, todas las excepciones derivan de la clase base `Exception`, pero el lenguaje también incluye clases más específicas para manejar distintos tipos de excepciones, como:

- **`ErrorException`**: Se utiliza para convertir errores nativos de PHP en excepciones.
- **`InvalidArgumentException`**: Una excepción comúnmente utilizada cuando se pasan argumentos inválidos a una función o método.
- **`RuntimeException`**: Se utiliza para errores que ocurren en tiempo de ejecución, que no se pueden anticipar en tiempo de compilación.

#### **Captura de múltiples excepciones**

PHP permite capturar diferentes tipos de excepciones utilizando múltiples bloques `catch`, lo que facilita la gestión de distintos tipos de errores en función del tipo de excepción lanzada.

```php
try {
    // Algún código que puede lanzar múltiples tipos de excepciones
} catch (InvalidArgumentException $e) {
    echo "Excepción de argumento inválido: " . $e->getMessage();
} catch (RuntimeException $e) {
    echo "Error de ejecución: " . $e->getMessage();
}
```

--- 

## **4. Sesiones y Cookies en PHP**

El manejo de sesiones y cookies es un aspecto clave en el desarrollo de aplicaciones web dinámicas y personalizadas en PHP. Estos mecanismos permiten almacenar y gestionar información persistente a lo largo de las interacciones de los usuarios con el sitio web, proporcionando experiencias personalizadas y seguras. A pesar de compartir el objetivo común de conservar información entre solicitudes HTTP, las sesiones y las cookies funcionan de manera diferente y son útiles en distintos contextos. Comprender cómo y cuándo utilizar cada uno de ellos es esencial para garantizar la eficiencia, seguridad y funcionalidad de las aplicaciones web.

### **4.1 Manejo de Sesiones en PHP**

#### **Concepto de sesiones**
Una **sesión** es un mecanismo que permite almacenar información en el servidor de manera persistente a lo largo de las diferentes interacciones de un usuario con un sitio web. A diferencia de las cookies, donde los datos se almacenan en el navegador del cliente, en las sesiones los datos se almacenan del lado del servidor, lo que ofrece un nivel de seguridad adicional, ya que la información sensible no es expuesta al usuario. Las sesiones permiten mantener datos entre distintas solicitudes HTTP, lo que permite, por ejemplo, mantener el estado de autenticación de un usuario o seguir el progreso de un proceso de compra.

Las sesiones en PHP utilizan un identificador único llamado **ID de sesión** que se almacena en una cookie o se pasa como parte de la URL para identificar las solicitudes provenientes de un mismo usuario.

#### **Inicio y uso de una sesión**

Para utilizar sesiones en PHP, se debe iniciar la sesión utilizando la función `session_start()`. Esta función genera un identificador único para la sesión y crea un archivo en el servidor donde se almacenarán los datos asociados a la sesión. Es importante que `session_start()` se invoque antes de cualquier salida de HTML, ya que PHP envía encabezados HTTP al iniciar la sesión.

```php
session_start();  // Inicia o reanuda una sesión existente

$_SESSION['usuario'] = "Juan";  // Almacena datos en la sesión
echo $_SESSION['usuario'];  // Accede a los datos de la sesión
```

En este ejemplo, la variable superglobal `$_SESSION` actúa como un array asociativo que almacena los datos de la sesión. Los datos almacenados en `$_SESSION` están disponibles a lo largo de toda la sesión de usuario, incluso en diferentes páginas del mismo sitio web.

#### **Persistencia y ciclo de vida de una sesión**

El ciclo de vida de una sesión está determinado por varios factores, entre ellos:
1. **Duración de la sesión**: Las sesiones duran mientras el navegador esté abierto por defecto, pero esto puede configurarse para durar más tiempo mediante configuraciones en `php.ini` o utilizando cookies con duración prolongada.
2. **Finalización de la sesión**: Una sesión puede finalizar explícitamente mediante la función `session_destroy()`, que elimina todos los datos asociados a la sesión del servidor.
3. **Tiempo de expiración**: PHP tiene configuraciones que controlan el tiempo de inactividad máximo después del cual una sesión expira automáticamente. Esto es configurable a través de `session.gc_maxlifetime`.

```php
session_start();  // Iniciar la sesión

// Finalizar la sesión y eliminar los datos del servidor
session_destroy();
```

Al destruir la sesión, se eliminan todos los datos almacenados en `$_SESSION`, pero la cookie de la sesión aún puede permanecer en el navegador hasta que el navegador sea cerrado o la cookie expire.

#### **Seguridad en el manejo de sesiones**

El manejo seguro de sesiones es fundamental en aplicaciones web que manejan datos sensibles, como información de autenticación o detalles de transacciones. Algunas recomendaciones para mejorar la seguridad de las sesiones incluyen:

1. **Regenerar el ID de sesión**: Para prevenir ataques de **session fixation**, es recomendable regenerar el ID de sesión después de iniciar sesión o cambiar los privilegios de un usuario. Esto se puede hacer con `session_regenerate_id(true)`, lo que genera un nuevo ID de sesión y elimina el anterior del servidor.
   
   ```php
   session_start();
   session_regenerate_id(true);  // Regenera el ID de sesión para mayor seguridad
   ```

2. **Configuración de la cookie de sesión**: Configurar las cookies de sesión de manera segura es esencial para evitar la exposición de la cookie en conexiones inseguras. PHP permite configurar opciones de seguridad como `httponly` (evitar que la cookie sea accesible por JavaScript) y `secure` (solo transmitir la cookie a través de conexiones HTTPS).

   ```php
   ini_set('session.cookie_httponly', 1);
   ini_set('session.cookie_secure', 1);  // Solo sobre HTTPS
   ```

3. **Limitar el tiempo de inactividad**: Configurar tiempos de expiración razonables para las sesiones inactivas ayuda a mitigar riesgos de sesión comprometida debido a la falta de uso.

4. **Control de IP o User-Agent**: En sistemas más críticos, se puede almacenar la dirección IP o el `User-Agent` del cliente en la sesión y verificarlo en cada solicitud para asegurar que la sesión no ha sido secuestrada.

### **4.2 Cookies en PHP**

#### **Concepto de cookies**

Una **cookie** es un pequeño archivo de texto que un servidor web puede enviar y almacenar en el navegador del cliente. Las cookies permiten mantener información persistente entre visitas del usuario al sitio web, incluso si el navegador se ha cerrado o el usuario ha cambiado de página. Las cookies son utilizadas comúnmente para almacenar preferencias de usuario, información de autenticación o el seguimiento de sesiones.

Las cookies se transmiten entre el navegador y el servidor en cada solicitud HTTP, lo que las convierte en una herramienta poderosa pero, a su vez, delicada para el manejo de información sensible. Dado que las cookies residen en el cliente, están expuestas a posibles manipulaciones, por lo que es crucial proteger su integridad y confidencialidad.

#### **Creación y manejo de cookies**

En PHP, la creación de una cookie se realiza mediante la función `setcookie()`. Los parámetros más importantes de esta función incluyen:

- **Nombre de la cookie**: Especifica el nombre bajo el cual se almacenará la cookie.
- **Valor de la cookie**: El valor que se desea almacenar en la cookie.
- **Tiempo de expiración**: Indica cuándo debe expirar la cookie. Si no se especifica, la cookie se eliminará cuando el navegador se cierre.
- **Ruta y dominio**: Permiten restringir el acceso a la cookie a un directorio o dominio específico.
- **Parámetros de seguridad**: Opciones como `secure` (solo enviar la cookie a través de HTTPS) y `httponly` (impide que JavaScript acceda a la cookie) ayudan a asegurar la cookie.

```php
setcookie("usuario", "Juan", time() + 3600);  // Crear una cookie que expira en 1 hora
```

En este ejemplo, se crea una cookie llamada `usuario` que almacena el valor "Juan" y que expirará en 3600 segundos (1 hora). El tercer parámetro, `time() + 3600`, indica el tiempo de expiración como una marca de tiempo UNIX.

#### **Lectura y eliminación de cookies**

Para leer el valor de una cookie en PHP, se utiliza la superglobal `$_COOKIE`, que actúa como un array asociativo donde las claves son los nombres de las cookies.

```php
if (isset($_COOKIE['usuario'])) {
    echo "Usuario: " . $_COOKIE['usuario'];
}
```

Las cookies son enviadas al servidor automáticamente con cada solicitud HTTP. Si el navegador contiene la cookie `usuario`, su valor será accesible a través de `$_COOKIE['usuario']`.

Para eliminar una cookie, se debe volver a invocar `setcookie()` con una fecha de expiración pasada:

```php
setcookie("usuario", "", time() - 3600);  // Elimina la cookie al expirar en el pasado
```

#### **Cookies seguras**

Dado que las cookies residen en el cliente, es esencial implementar medidas de seguridad adecuadas para proteger la integridad de la información almacenada. Algunas prácticas recomendadas incluyen:

1. **Cookies solo sobre HTTPS**: Usar el parámetro `secure` al crear cookies garantiza que estas solo se envíen a través de conexiones seguras (HTTPS), reduciendo el riesgo de interceptación por ataques man-in-the-middle.

   ```php
   setcookie("usuario", "Juan", time() + 3600, "/", "", true);  // Cookie segura solo sobre HTTPS
   ```

2. **Cookies HTTPOnly**: Con la opción `httponly`, se impide que la cookie sea accesible mediante scripts del lado del cliente (JavaScript), protegiendo la cookie de ataques como **Cross-Site Scripting (XSS)**.

   ```php
   setcookie("usuario", "Juan", time() + 3600, "/", "", true, true);  // Cookie segura y solo accesible por HTTP
   ```

3. **Restricción por dominio y ruta**: Al limitar el acceso a la cookie a un dominio o ruta específica, se puede prevenir que la cookie sea enviada innecesariamente a otras partes del sitio, mejorando la seguridad y la eficiencia.

#### **Comparación entre sesiones y cookies**

- **Ubicación de almacenamiento**: Las sesiones almacenan la información del lado del servidor, mientras que las cookies almacenan los datos en el navegador del usuario.
- **Seguridad**: Las sesiones son generalmente más seguras que las cookies, ya que los datos no son visibles para el cliente. Las cookies, por otro lado, están más expuestas a ser leídas

 o manipuladas.
- **Capacidad de almacenamiento**: Las cookies tienen un límite de tamaño (generalmente alrededor de 4 KB), mientras que las sesiones pueden almacenar una cantidad de datos mucho mayor en el servidor.
- **Duración**: Las sesiones suelen durar hasta que el navegador se cierra, a menos que se configure lo contrario. Las cookies pueden configurarse para persistir durante días, meses o años.

--- 

## **5. Introducción a PDO (PHP Data Objects)**

PDO (**PHP Data Objects**) es una extensión de PHP que proporciona una interfaz unificada y eficiente para acceder a bases de datos. A diferencia de las interfaces específicas de ciertos motores de bases de datos, como `mysqli` o `pg_connect`, PDO permite trabajar con múltiples tipos de bases de datos (como MySQL, PostgreSQL, SQLite, entre otros) utilizando un conjunto común de métodos y funciones. Esto ofrece ventajas significativas en términos de portabilidad, seguridad y simplicidad en el manejo de bases de datos.

PDO abstrae muchas complejidades del manejo de bases de datos, como la conexión, ejecución de consultas, transacciones y manejo de errores. Además, ofrece herramientas robustas para proteger aplicaciones contra ataques de inyección SQL a través del uso de **consultas preparadas** y **binding** de parámetros.

### **5.1 Conexión a una base de datos con PDO**

La conexión a una base de datos es el primer paso para interactuar con ella. PDO facilita esta tarea mediante la creación de una instancia de la clase `PDO`. Para establecer una conexión, se requiere especificar un *Data Source Name* (DSN), que contiene la información necesaria para conectar con la base de datos, como el tipo de base de datos, el servidor, el nombre de la base de datos, el nombre de usuario y la contraseña.

#### **Sintaxis básica para la conexión con PDO**

```php
try {
    // Crear una nueva conexión PDO
    $conexion = new PDO("mysql:host=localhost;dbname=mi_base_de_datos", "usuario", "contraseña");
    
    // Establecer el modo de error a excepciones
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexión exitosa";
} catch (PDOException $e) {
    // Capturar y manejar los errores de conexión
    echo "Error en la conexión: " . $e->getMessage();
}
```

#### **Explicación del código:**
1. **DSN (Data Source Name)**: La cadena `"mysql:host=localhost;dbname=mi_base_de_datos"` define el tipo de base de datos (MySQL), la dirección del host (localhost) y el nombre de la base de datos a la que se quiere conectar.
2. **Nombre de usuario y contraseña**: Los parámetros `"usuario"` y `"contraseña"` son las credenciales de acceso a la base de datos.
3. **Manejo de errores**: `setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)` configura PDO para que lance excepciones cuando se producen errores, en lugar de simplemente devolver `false`. Esto permite capturar errores de manera más controlada utilizando `try-catch`.
4. **`PDOException`**: Si la conexión falla, se lanza una excepción `PDOException`, que puede ser capturada en el bloque `catch` para mostrar un mensaje de error personalizado.

PDO permite la conexión no solo a MySQL, sino también a otros motores de bases de datos como PostgreSQL, SQLite, Oracle, entre otros, simplemente cambiando la cadena DSN. Por ejemplo, para conectarse a una base de datos PostgreSQL, la cadena DSN sería algo como `pgsql:host=localhost;dbname=mi_base_de_datos`.

#### **Opciones adicionales en la conexión PDO**

Además del manejo de errores, PDO ofrece varias configuraciones adicionales que se pueden establecer en la conexión, tales como:
- **PDO::ATTR_DEFAULT_FETCH_MODE**: Define el modo por defecto en el que se recuperarán los resultados. Por ejemplo, `PDO::FETCH_ASSOC` devuelve los resultados como un array asociativo.
  
  ```php
  $conexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  ```

- **PDO::ATTR_TIMEOUT**: Establece el tiempo de espera para la conexión en segundos.
  
  ```php
  $conexion->setAttribute(PDO::ATTR_TIMEOUT, 30);  // 30 segundos
  ```

Estas configuraciones permiten un mayor control y personalización de la conexión a la base de datos.

### **5.2 Consultas SQL con PDO**

Una de las mayores ventajas de PDO es el soporte nativo para **consultas preparadas**, lo que mejora tanto la seguridad como el rendimiento. Las consultas preparadas separan la lógica SQL de los datos proporcionados por el usuario, lo que protege contra ataques de inyección SQL y optimiza la ejecución de consultas repetitivas.

#### **Consultas preparadas**

Las consultas preparadas en PDO siguen dos pasos:
1. **Preparación de la consulta**: La consulta SQL se envía al servidor con marcadores de posición (placeholders) en lugar de valores reales.
2. **Ejecución de la consulta**: Los valores se "enlazan" (bind) a los marcadores de posición antes de que se ejecute la consulta.

```php
// Preparar la consulta
$stmt = $conexion->prepare("SELECT * FROM usuarios WHERE id = :id");

// Enlazar el valor del marcador de posición
$stmt->bindParam(':id', $id);

// Asignar el valor y ejecutar la consulta
$id = 1;
$stmt->execute();

// Recuperar los resultados
$resultado = $stmt->fetchAll();
foreach ($resultado as $fila) {
    echo $fila['nombre'];
}
```

#### **Explicación del código:**
1. **Preparación de la consulta**: `prepare()` envía la consulta al servidor con el marcador de posición `:id` en lugar de un valor específico. Esto evita que el valor proporcionado por el usuario altere la estructura de la consulta.
2. **Enlazado de parámetros**: `bindParam()` asocia el marcador de posición `:id` con la variable `$id`. De esta forma, el valor de `$id` se inserta en la consulta cuando se ejecuta, manteniendo la consulta SQL segura.
3. **Ejecución de la consulta**: Con `execute()`, PDO ejecuta la consulta con los valores proporcionados.
4. **Recuperación de resultados**: `fetchAll()` recupera todos los registros devueltos por la consulta. Dependiendo del modo de recuperación configurado (por ejemplo, `PDO::FETCH_ASSOC`), los resultados se devuelven como arrays asociativos, lo que facilita su manipulación.

#### **Consultas con múltiples parámetros**

PDO permite consultas más complejas con múltiples marcadores de posición. Se pueden usar tanto marcadores con nombre (`:param`) como marcadores anónimos (`?`).

```php
$stmt = $conexion->prepare("SELECT * FROM usuarios WHERE nombre = :nombre AND edad = :edad");
$stmt->bindParam(':nombre', $nombre);
$stmt->bindParam(':edad', $edad);

$nombre = 'Juan';
$edad = 25;
$stmt->execute();
```

Este enfoque es eficiente, seguro y escalable, ya que PDO automáticamente maneja el escape de caracteres y previene inyecciones SQL, incluso cuando los valores de entrada provienen de fuentes no confiables.

### **5.3 Manejo de errores y seguridad en consultas**

El manejo adecuado de errores y la validación de los datos recibidos es crucial para cualquier aplicación que interactúe con bases de datos. PDO ofrece herramientas robustas para capturar y manejar errores de manera eficiente, al mismo tiempo que garantiza la seguridad de las consultas.

#### **Manejo de errores con PDO**

El manejo de errores en PDO se configura a través de `setAttribute()` utilizando la constante `PDO::ATTR_ERRMODE`. Por defecto, PDO maneja errores de manera silenciosa (`PDO::ERRMODE_SILENT`), lo que requiere que el desarrollador verifique manualmente el éxito de cada operación. Sin embargo, es preferible establecer el modo de error en `PDO::ERRMODE_EXCEPTION`, que lanza excepciones cuando se producen errores, lo que permite capturarlos y manejarlos adecuadamente en bloques `try-catch`.

```php
try {
    $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $id = 999;  // Un ID que no existe en la base de datos
    $stmt->execute();
    
    $resultado = $stmt->fetchAll();
    if (empty($resultado)) {
        throw new Exception("No se encontraron resultados.");
    }
} catch (PDOException $e) {
    echo "Error en la consulta: " . $e->getMessage();
} catch (Exception $e) {
    echo $e->getMessage();
}
```

En este ejemplo, se captura cualquier excepción que PDO lance durante la ejecución de la consulta, y también se maneja la lógica personalizada para manejar el caso de que no se encuentren resultados.

#### **Seguridad en consultas: Protección contra inyecciones SQL**

Uno de los mayores beneficios de utilizar PDO es su capacidad para prevenir ataques de inyección SQL a través del uso de consultas preparadas y el **enlazado de parámetros**. Los ataques de inyección SQL ocurren cuando los datos proporcionados por el usuario se insertan directamente en una consulta SQL, lo que permite que el usuario malintencionado ejecute comandos SQL arbitrarios.

Al usar consultas preparadas con PDO, los valores proporcionados por el usuario nunca se interpretan como parte de la consulta SQL en sí, sino que se tratan como valores literales, lo que elimina el riesgo de inyección SQL.

**Ejemplo de ataque SQL evitado:**
Sin PDO:
```php
$id = $_GET['id'];
$query = "SELECT * FROM usuarios WHERE id = $id";  // Vulnerable a inyección SQL
```

Con PDO:
```php
$stmt = $conexion

->prepare("SELECT * FROM usuarios WHERE id = :id");
$stmt->bindParam(':id', $id);
$id = $_GET['id'];  // Entrada del usuario que puede ser maliciosa, pero segura con PDO
$stmt->execute();
```