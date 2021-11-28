					-- CONTACTO--

-- Creación de Vistas (SELECT) --
CREATE VIEW DireccionE AS SELECT direccionEmpresa FROM contacto;
CREATE VIEW TelefonoE AS SELECT telefonoEmpresa FROM contacto;
CREATE VIEW CelularE AS SELECT celularEmpresa FROM contacto;
CREATE VIEW CorreoE AS SELECT correoEmpresa FROM contacto;

-- Editar (UPDATE) --


					-- PRODUCTO--

-- Creación de Vistas (SELECT) --
CREATE VIEW NombreP AS SELECT nombreProducto FROM producto;
CREATE VIEW DescripcionP AS SELECT descripcionProducto FROM producto;
CREATE VIEW FotoP AS SELECT FotoP FROM producto;

					-- INFORMACIÓN--

-- Creación de Vistas (SELECT) --
CREATE VIEW Mision AS SELECT mision FROM informacion;
CREATE VIEW Vision AS SELECT vision FROM informacion;
CREATE VIEW Valores AS SELECT valores FROM informacion;
CREATE VIEW Slogan AS SELECT slogan FROM informacion;

					-- RECETA--

-- Creación de Vistas (SELECT) --
CREATE VIEW TituloR AS SELECT tituloReceta FROM receta;
CREATE VIEW ResumenR AS SELECT resumenReceta FROM receta;
CREATE VIEW Ingredientes AS SELECT ingredientes FROM receta;
CREATE VIEW Pasos AS SELECT pasos FROM receta;
CREATE VIEW FechaR AS SELECT fechaReceta FROM receta;
CREATE VIEW AutorR AS SELECT autorReceta FROM receta;
CREATE VIEW FotoR AS SELECT fotoReceta FROM receta;

					-- NOTICIA--

-- Creación de Vistas (SELECT) --
CREATE VIEW TituloN AS SELECT tituloNoticia FROM noticia;
CREATE VIEW ResumenN AS SELECT resumenNoticia FROM noticia;
CREATE VIEW FotoN AS SELECT fotoNoticia FROM noticia;
CREATE VIEW FechaN AS SELECT fechaNoticia FROM noticia;
CREATE VIEW tipoN AS SELECT tipoNoticia FROM noticia;