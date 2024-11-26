<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output method="html" encoding="UTF-8" doctype-public="-//W3C//DTD XHTML 1.0 Strict//EN" doctype-system="http://www.w3.org/TR/xhtml1/DTD/strict.dtd" />
    
    <xsl:template match="/">
        <html>
            <head>
                <title>Catálogo VOD</title>
                <style>
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
                    table {
                        width: 80%;
                        margin: 20px auto;
                        border-collapse: collapse;
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
                </style>
            </head>
            <body>
                <!-- Logotipo -->
                <div class="logo">
                    <img src="logo.png" alt="Logotipo de la Compañía" width="150" />
                </div>

                <!-- Título -->
                <h1>Catálogo de Video Bajo Demanda</h1>

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
