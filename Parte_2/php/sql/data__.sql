-- Insert a new quiz
INSERT INTO Quizz (title, description, created_Zat)
VALUES (
        'Sample Quiz',
        'This is a sample quiz description.',
        NOW()
    );
-- Get the quizz__id of the inserted quiz
SET @quizz__id = LAST_INSERT_ID();
-- Insert questions into the Questions table for the corresponding quiz
-- Question 1
INSERT INTO Questions (
        quizz__id,
        question__text,
        option__a,
        option__b,
        option__c,
        option__d,
        correct__ option
    )
VALUES (
        @quizz__id,
        '¿Qué significa HTML?',
        'Lenguaje de marcado de hipertexto',
        'Aprendizaje automático de alta tecnología',
        'Lenguaje de transferencia hipertexto',
        'Lenguaje de mensajería de texto para el hogar',
        'a'
    );
-- Question 2
INSERT INTO Questions (
        quizz__id,
        question__text,
        option__a,
        option__b,
        option__c,
        option__d,
        correct__ option
    )
VALUES (
        @quizz__id,
        '¿Qué etiqueta HTML se utiliza para crear un enlace?',
        'link',
        'href',
        'a',
        'hyperlink',
        'c'
    );
-- Question 3
INSERT INTO Questions (
        quizz__id,
        question__text,
        option__a,
        option__b,
        option__c,
        option__d,
        correct__ option
    )
VALUES (
        @quizz__id,
        '¿Cuál es el propósito de CSS en el desarrollo web?',
        'Definir la estructura de una página web',
        'Crear contenido web dinámico',
        'Dar formato a la apariencia de los elementos web',
        'Añadir interactividad a una página web',
        'c'
    );
-- Question 4
INSERT INTO Questions (
        quizz__id,
        question__text,
        option__a,
        option__b,
        option__c,
        option__d,
        correct__ option
    )
VALUES (
        @quizz__id,
        '¿Cuál de las siguientes es una variable JavaScript válida?',
        '123var',
        '_myVariable',
        'my-variable',
        'var 123',
        'b'
    );
-- Question 5
INSERT INTO Questions (
        quizz__id,
        question__text,
        option__a,
        option__b,
        option__c,
        option__d,
        correct__ option
    )
VALUES (
        @quizz__id,
        '¿Cuál es la función principal de un servidor web en el contexto del desarrollo web?',
        'Mostrar anuncios en un sitio web',
        'Procesar la entrada del usuario',
        'Hospedar y entregar contenido web a los clientes',
        'Encriptar el tráfico web',
        'c'
    );
-- Question 6
INSERT INTO Questions (
        quizz__id,
        question__text,
        option__a,
        option__b,
        option__c,
        option__d,
        correct__ option
    )
VALUES (
        @quizz__id,
        '¿Qué etiqueta HTML se utiliza para crear una lista numerada (ordenada)?',
        'list',
        'ol',
        'ul',
        'li',
        'b'
    );
-- Question 7
INSERT INTO Questions (
        quizz__id,
        question__text,
        option__a,
        option__b,
        option__c,
        option__d,
        correct__ option
    )
VALUES (
        @quizz__id,
        '¿Cuál es el propósito de la propiedad CSS "font-family"?',
        'Establecer el tamaño de la fuente del texto',
        'specificar el tipo de letra o estilo de fuente para el texto',
        'Definir el color del texto',
        'Controlar la alineación del texto',
        'b'
    );
-- Question 8
INSERT INTO Questions (
        quizz__id,
        question__text,
        option__a,
        option__b,
        option__c,
        option__d,
        correct__ option
    )
VALUES (
        @quizz__id,
        '¿Qué lenguaje de programación se usa a menudo para el scripting del lado del servidor en el desarrollo web?',
        'Java',
        'Python',
        'PHP',
        'HTML',
        'c'
    );
-- Question 9
INSERT INTO Questions (
        quizz__id,
        question__text,
        option__a,
        option__b,
        option__c,
        option__d,
        correct__ option
    )
VALUES (
        @quizz__id,
        '¿Qué significa el acrónimo "URL" en español?',
        'Localizador uniforme de recursos',
        'Lenguaje de representación universal',
        'Lenguaje de referencia único',
        'Enlace de registro de usuario',
        'a'
    );
-- Question 10
INSERT INTO Questions (
        quizz__id,
        question__text,
        option__a,
        option__b,
        option__c,
        option__d,
        correct__ option
    )
VALUES (
        @quizz__id,
        '¿Qué código HTTP indica una solicitud exitosa en el desarrollo web?',
        '200 OK',
        '404 No encontrado<',
        '500 Error interno del servidor',
        '302 Encontrado (Redirección)',
        'a'
    );