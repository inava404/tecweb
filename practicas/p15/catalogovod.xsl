<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output method="html" encoding="UTF-8" doctype-public="-//W3C//DTD XHTML 1.0 Strict//EN" doctype-system="http://www.w3.org/TR/xhtml1/DTD/strict.dtd" />
    
    <xsl:template match="/">
        <html>
            <head>
                <title>Catálogo VOD</title>
                <style>
<<<<<<< HEAD
                    body {
                        margin: 20px;
                        font-family: Verdana, Helvetica, sans-serif;
                        font-size: 90%;
                        background-color: #F4F4F9;
                    }
                    h1 {
                        color: #333;
                        text-align: center;
                        margin-bottom: 20px;
                    }
                    .logo {
                        text-align: center;
                        margin-bottom: 20px;
                    }
=======
                    .top-section {
                        background-color: #f1f1f1;
                        witdh: 100%;
                    }

                    body {
                        margin: 0%;
                        font-family: Verdana, Helvetica, sans-serif;
                        font-size: 90%;
                        background-color: #1499fd;
                    }
                    
                    h1 {
                        color: #1c2c3c;
                        text-align: center;
                        padding: 10px;
                        background-color: #54a8e8;
                    }
                    
                    .logo {
                        text-align: center;
                        margin-bottom: 20px;
                        padding: 15px;
                    }
                    
>>>>>>> dev
                    table {
                        width: 80%;
                        margin: 20px auto;
                        border-collapse: collapse;
<<<<<<< HEAD
                        border: 1px solid #ccc;
                    }
                    th, td {
                        border: 1px solid #ccc;
                        padding: 8px;
                        text-align: left;
                    }
                    th {
                        background-color: #005825;
                        color: white;
                    }
                    caption {
                        font-size: 1.2em;
                        margin: 10px 0;
                        font-weight: bold;
                    }
=======
                        border: 5px solid #1b2a3b;
                    }
                    
                    th, td {
                        border: 1px solid #1b2a3b;
                        padding: 8px;
                        font-size: 1.2em;
                        text-align: left;
                        background-color: #f1f1f1;
                    }
                    
                    th {
                        background-color: #1b2a3b;
                        color: white;
                        font-size: 1.4em;
                    }
                    
                    caption {
                        font-size: 1.6em;
                        color: #f1f1f1;  
                        padding: 10px;
                        margin-top: 15px;
                        font-weight: bold;
                        background-color: #1b2a3b;
                    }
                    
>>>>>>> dev
                </style>
            </head>
            <body>
                <!-- Logotipo -->
<<<<<<< HEAD
                <div class="logo">
                    <img src="logo.png" alt="Logotipo de la Compañía" width="150" />
                </div>

                <!-- Título -->
                <h1>Catálogo de Video Bajo Demanda</h1>
=======
                <div class="top-section">
                    <div class="logo">
                        <img src="PrimeLogo.png" alt="Logotipo de netflix" width="30%" height="20%" />
                    </div>

                <!-- Título -->
                    <h1>Catálogo de Video Bajo Demanda</h1>
                </div>
>>>>>>> dev

                <!-- Películas -->
                <table>
                    <caption>PELÍCULAS</caption>
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Duración</th>
                            <th>Género</th>
                        </tr>
                    </thead>
                    <tbody>
                        <xsl:for-each select="//contenido/peliculas/genero/titulo">
                            <tr>
                                <td><xsl:value-of select="nombre" /></td>
                                <td><xsl:value-of select="@duracion" /></td>
                                <td><xsl:value-of select="../@nombre" /></td>
                            </tr>
                        </xsl:for-each>
                    </tbody>
                </table>

                <!-- Series -->
                <table>
                    <caption>SERIES</caption>
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Duración</th>
                            <th>Género</th>
                        </tr>
                    </thead>
                    <tbody>
                        <xsl:for-each select="//contenido/series/genero/titulo">
                            <tr>
                                <td><xsl:value-of select="nombre" /></td>
                                <td><xsl:value-of select="@duracion" /></td>
                                <td><xsl:value-of select="../@nombre" /></td>
                            </tr>
                        </xsl:for-each>
                    </tbody>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
