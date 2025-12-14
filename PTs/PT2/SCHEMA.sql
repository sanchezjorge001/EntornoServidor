DROP DATABASE IF EXISTS PT2_DB;
CREATE DATABASE PT2_DB;

USE PT2_DB;

-- CREAR TABLA PRODUCTO
CREATE TABLE PRODUCTO (
    ID INT UNSIGNED PRIMARY KEY NOT NULL,
    NOMBRE VARCHAR(255) NOT NULL,
    DESCRIPCION TEXT NOT NULL,
    PRECIO DECIMAL(10,2) NOT NULL
);

INSERT INTO PRODUCTO (ID, NOMBRE, DESCRIPCION, PRECIO) VALUES
(1,
 'Pan de Belén: Pan de Vida',
 'En un pueblo poco señalado en los mapas, los hornos siguen encendiéndose en noches frías. Quien ha compartido este pan asegura que, por un instante, la mesa parecía más grande de lo que la habitación permitía.',
 3.50),

(2,
 'Vino de la Nueva Alianza',
 'Viejos relatos hablan de una cena tardía donde un vino similar cambió el sentido de palabras antiguas sobre promesas y sangre. Desde entonces, algunos no vuelven a mirar igual las copas que levantan.',
 7.90),

(3,
 'Aceite de la Unción Mesiánica',
 'Se usa para ungir frentes cansadas y manos agrietadas. Hay quien dice que deja un rastro casi imperceptible de realeza allí donde toca, aunque solo los atentos parecen notarlo.',
 5.20),

(4,
 'Estrella de Oriente de Azúcar',
 'Su forma imita la luz que, según cuentan, una vez señaló un establo perdido entre tantos techos. No brilla por sí sola, pero basta con verla para recordar que alguien, en algún lugar, fue guiado.',
 4.10),

(5,
 'Incienso de la Adoración',
 'Al encenderlo, el humo sube lento y dibuja figuras que nadie termina de descifrar. Algunos lo encienden en habitaciones silenciosas y juran que el aire se vuelve más denso, como si algo invisible escuchara.',
 6.80),

(6,
 'Mirra del Misterio Pascual',
 'Su aroma es dulce y extraño, más propio de despedidas que de fiestas. Se regala pocas veces, casi siempre por intuición, como si el que lo ofrece presintiera que la alegría y la herida viajan juntas.',
 6.80),

(7,
 'Manto de la Madre de Dios',
 'Tejido sencillo, sin bordados ostentosos. Sin embargo, quienes lo han puesto sobre hombros ajenos hablan de una calma inesperada, de ese tipo que recuerda a brazos que sostienen sin decir palabra.',
 19.90),

(8,
 'Pesebre de Madera Humilde',
 'La madera es áspera y no fue pensada para cuna. Aun así, viejas historias insisten en que la primera corona que tocó el mundo no fue de oro, sino de heno y tablas mal encajadas.',
 15.50),

(9,
 'Vela de la Noche de Vigilia',
 'Arde mejor en noches largas que en días ruidosos. Muchos la encienden cuando todo parece apagarse, solo para descubrir que una llama pequeña basta para que la oscuridad deje de ser absoluta.',
 2.90),

(10,
 'Campanas del Gloria',
 'Su sonido es claro, pero es en la última campanada cuando algunos dicen oír un eco distinto, como si respondiera un coro lejano escondido más allá de los tejados.',
 8.40),

(11,
 'Capa del Pastor que Escucha',
 'Huele a campo, a lana mojada y a vigilia. No está hecha para tronos ni salones, sino para quienes pasan la noche afuera, atentos a sus rebaños… y a anuncios que casi siempre sorprenden a los de siempre.',
 22.00),

(12,
 'Jarrito de Agua de Nazaret',
 'Nada parece especial en este jarro; sirve para tareas sencillas, día tras día. Quienes lo usan recuerdan, sin saber por qué, que lo extraordinario suele esconderse en años de absoluta normalidad.',
 3.10),

(13,
 'Madera del Taller de José',
 'La veta de la madera guarda marcas de golpes torpes y de manos que aprendieron lentamente. Dicen que quien trabaja con ella aprende a unir lo frágil y lo firme con una paciencia inusual.',
 6.30),

(14,
 'Corona de Adviento: Espera del Mesías',
 'Sus espacios vacíos esperan ser llenados con luz. Cada semana agrega un círculo de claridad, como si el tiempo mismo se estuviera preparando para algo que nadie se atreve a nombrar del todo.',
 12.50),

(15,
 'Ramo de Trigo para la Ofrena',
 'Ramillete sencillo, a veces olvidado en un rincón de la mesa. Sin embargo, quienes lo miran con detenimiento dicen que recuerda a granos que un día dejarán de estar solos para alimentar a muchos.',
 4.70),

(16,
 'Sal de la Tierra de Judea',
 'Granos minúsculos que, sin embargo, cambian todo lo que tocan. Cuando faltan, la comida se siente incompleta; cuando sobran, nadie puede ignorarlos. Hay destinos que funcionan de manera parecida.',
 2.20),

(17,
 'Lámpara del Portal en la Noche',
 'La luz que emite no deslumbra; solo insiste. Permanece encendida junto a puertas y lugares pequeños, como si estuviera esperando a alguien que quizá llegue muy tarde… o ya esté dentro.',
 9.10),

(18,
 'Flauta del Canto de los Ángeles',
 'Su melodía es sencilla, pero algunos cuentan que al tocarla en la noche el cielo parece menos distante. A veces, sin saber cómo, el que sopla deja de pensar en sí mismo y empieza a pensar en los demás.',
 13.40),

(19,
 'Libro del Prólogo de Juan',
 'Sus primeras líneas hablan de principios y de palabras anteriores a cualquier historia. Quien lo abre en silencio se enfrenta a la incómoda sospecha de que quizá no todo empezó donde creía.',
 9.90),

(20,
 'Corona de los Reyes de Oriente',
 'No pesa tanto como otras coronas, pero incomoda a quien sueña con mandar desde arriba. Está pensada para quienes saben arrodillarse antes de ofrecer lo poco o mucho que traen consigo.',
 18.60);
