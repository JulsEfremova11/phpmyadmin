<?php
/* $Id$ */

/**
 * Translated by Xosé Calvo <xosecalvo at terra.es>
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d, %Y at %I:%M %p';


$strAccessDenied = 'Acceso Negado';
$strAction = 'Acción';
$strAddDeleteColumn = 'Adicionar/Eliminar columnas de campo';
$strAddDeleteRow = 'Adicionar/Eliminar filas de criterios';
$strAddNewField = 'Adicionar un novo campo';
$strAddPriv = 'Adicionar un novo privilexio';
$strAddPrivMessage = 'Privilexio adicionado.';
$strAddSearchConditions = 'Condición da pesquisa (ou sexa, o complemento da cláusula "WHERE"):';
$strAddToIndex = 'Adicionar ao índice &nbsp;%s&nbsp;coluna(s)';
$strAddUser = 'Adicionar un novo usuario';
$strAddUserMessage = 'Usuario adicionado.';
$strAffectedRows = 'Filas que van ser afectadas:';
$strAfter = 'Despois de %s';
$strAfterInsertBack = 'Voltar';
$strAfterInsertNewInsert = 'Inserir un novo rexistro';
$strAll = 'Todos';
$strAllTableSameWidth = 'mostrar todas as tabelas co mesmo ancho?';
$strAlterOrderBy = 'Ordenar a tabela por';
$strAnalyzeTable = 'Analizar a tabela';
$strAnd = 'E';
$strAnIndex = 'Adicionouse un índice a %s';
$strAny = 'Calquer';
$strAnyColumn = 'Calquer columna';
$strAnyDatabase = 'Calquer banco de datos';
$strAnyHost = 'Calquer servidor';
$strAnyTable = 'Calquer tabela';
$strAnyUser = 'Calquer usuario';
$strAPrimaryKey = 'Adicionouse unha chave primaria a %s';
$strAscending = 'Ascendente';
$strAtBeginningOfTable = 'No comezo da tabela';
$strAtEndOfTable = 'Ao final da tabela';
$strAttr = 'Atributos';

$strBack = 'Voltar';
$strBinary = ' Binario ';
$strBinaryDoNotEdit= ' Binario - non editar ';
$strBookmarkDeleted = 'Eliminouse o marcador.';
$strBookmarkLabel = 'Nome';
$strBookmarkQuery = 'A procura de SQL foi gardada';
$strBookmarkThis = 'Gardar esta procura de SQL';
$strBookmarkView = 'Só visualizar';
$strBrowse = 'Visualizar';
$strBzip = 'comprimido no formato "bzipped"';

$strCantLoadMySQL = 'Non foi posible carregar a extensión do MySQL;<br>comprobe, por favor, a configuración do PHP.';
$strCantLoadRecodeIconv = 'Non se puido carregar iconv ou precísase da extensión recode para a conversión do charset. Configure o php para que se poidan usar estas extensións ou indique que non se use a conversión de charset en phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Non se pode facer que este índice sexa PRIMARIO!';
$strCantUseRecodeIconv = 'Non se puido usar nen iconv nen libiconv nen a función recode_stringf mentres haxa extensións por carregar. Comprobe a súa configuración do php.';
$strCardinality = 'Cardinalidade';
$strCarriage = 'Carácter de retorno: \\r';
$strChange = 'Mudar';
$strChangeDisplay = 'Escolla o campo que se há de mostrar';
$strChangePassword = 'Trocar o contrasinal';
$strCheckAll = 'Marcá-los todos';
$strCheckDbPriv = 'Verificar os privilexios do banco de datos';
$strCheckTable = 'Verificar a tabela';
$strChoosePage = 'Escolla unha páxina para modificar';
$strColumn = 'Columna';
$strColumnNames = 'Nomes das Columnas';
$strComments = 'Comentarios';
$strCompleteInserts = 'Insercións completas';
$strConfigFileError = 'phpMyAdmin non puido ler o seu ficheiro de configuración<br/>Isto podería deberse a que php atopou un erro nel ou a que php non puido atopar o ficheiro.<br/>Invoque o ficheiro de configuración directamente mediante o vínculo que hai máis abaixo e lea a mensaxe de erro de php que receba. Na maioría dos casos simplesmente faltan unha aspa ou un ponto e vírcula <br/>Se recebe unha páxina en branco é que todo está ben.';
$strConfigureTableCoord = 'Configure as coordenadas da tabela %s';
$strConfirm = 'Está seguro/a?';
$strCookiesRequired = 'A partir de aqui debe permitir cookies.';
$strCopyTable = 'Copiar a tabela a (base_de_datos<b>.</b>tabela):';
$strCopyTableOK = 'Tabela \$table copiada para \$new_name.';
$strCreate = 'Crear';
$strCreateIndex = 'Crear un índice en&nbsp;%s&nbsp;colunas';
$strCreateIndexTopic = 'Crear un novo índice';
$strCreateNewDatabase = 'Crear un novo banco de datos';
$strCreateNewTable = 'Crear unha tabela nova na base de datos %s';
$strCreatePage = 'Crear unha páxina nova';
$strCriteria = 'Criterio';

$strData = 'Datos';
$strDatabase = 'Banco de Datos ';
$strDatabaseHasBeenDropped = 'A base de datos %s foi eliminada.';
$strDatabases = 'Bancos de Datos';
$strDatabasesStats = 'Estatísticas dos bancos de datos';
$strDatabaseWildcard = 'Base de datos (permítese usar os comodíns):';
$strDataOnly = 'Só os datos';
$strDefault = 'Padrón';
$strDelete = 'Eliminar';
$strDeleted = 'Rexistro eliminado';
$strDeletedRows = 'Filas borradas:';
$strDeleteFailed = 'Non foi posible eliminar!';
$strDeleteUserMessage = 'Acaba de eliminar o usuario %s.';
$strDescending = 'Descendente';
$strDisplay = 'Mostrar';
$strDisplayOrder = 'Mostrar en orde:';
$strDisplayPDF = 'Mostrar o esquema PDF';
$strDoAQuery = 'Faga unha "procura por exemplo" (o comodín é "%")';
$strDocu = 'Documentación';
$strDoYouReally = 'Seguro? ';
$strDrop = 'Eliminar';
$strDropDB = 'Elimina o banco de datos %s';
$strDropTable = 'Eliminar a tabela';
$strDumpingData = 'Extraindo datos da tabela';
$strDumpXRows = 'Pór %s filas a partir da fila %s.';
$strDynamic = 'dinámico';

$strEdit = 'Modificar';
$strEditPDFPages = 'Editar as páxinas PDF';
$strEditPrivileges = 'Modificar privilexios';
$strEffective = 'Efectivo';
$strEmpty = 'Borrar';
$strEmptyResultSet = 'MySQL retornou um conxunto vacío (ex. cero rexistros).';
$strEnd = 'Fin';
$strEnglishPrivileges = ' Nota: os nomes de privilexios do MySQL están en inglés';
$strError = 'Erro';
$strExplain = 'Explicar o código SQL';
$strExport = 'Exportar';
$strExportToXML = 'Exportar no formato XML';
$strExtendedInserts = 'Insercións extendidas';
$strExtra = 'Extra';

$strField = 'Campo';
$strFieldHasBeenDropped = 'Eliminouse o campo %s';
$strFields = 'Campos';
$strFieldsEmpty = ' O reconto de campos di que non hai nengún! ';
$strFieldsEnclosedBy = 'Os campos delimítanse con';
$strFieldsEscapedBy = 'Os campos escápanse con';
$strFieldsTerminatedBy = 'Os campos rematan por';
$strFixed = 'fixo';
$strFlushTable = 'Fechar a tabela ("FLUSH")';
$strFormat = 'Formato';
$strFormEmpty = 'Falta un valor no formulario!';
$strFullText = 'Textos completos';
$strFunction = 'Funcións';

$strGenBy = 'Xerado por';
$strGenTime = 'Xerado en';
$strGo = 'Executar';
$strGrants = 'Conceder';
$strGzip = 'comprimido no formato "gzipped"';

$strHasBeenAltered = 'foi alterado.';
$strHasBeenCreated = 'foi creado.';
$strHaveToShow = 'Ten que escoller polo menos unha columna para mostrar';
$strHome = 'Comezo ("Home")';
$strHomepageOfficial = 'Páxina Oficial do phpMyAdmin';
$strHomepageSourceforge = 'Páxina do phpMyAdmin en Sourceforge';
$strHost = 'Servidor';
$strHostEmpty = 'O nome do servidor está vacío!';

$strIdxFulltext = 'Texto completo';
$strIfYouWish = 'Para carregar só algunhas columnas da tabela, faga unha lista separada por vírgulas.';
$strIgnore = 'Ignorar';
$strIndex = 'Índice';
$strIndexHasBeenDropped = 'Eliminouse o índice %s';
$strIndexName = 'Nome do índice&nbsp;:';
$strIndexType = 'Tipo de índice&nbsp;:';
$strIndexes = 'Índices';
$strInsert = 'Inserir';
$strInsertAsNewRow = 'Inserir unha nova columna';
$strInsertedRows = 'Filas inseridas:';
$strInsertNewRow = 'Inserir un novo rexistro';
$strInsertTextfiles = 'Inserir un arquivo de texto na tabela';
$strInstructions = 'Instruccións';
$strInUse = 'en uso';
$strInvalidName = '"%s" i unha palabra reservada. Non se pode utilizar como nome dun banco de datos, dunha tabela ou dun campo.';

$strKeepPass = 'Non mude o contrasinal';
$strKeyname = 'Nome chave';
$strKill = 'Matar (kill)';

$strLength = 'Tamaño';
$strLengthSet = 'Tamaño/Definir*';
$strLimitNumRows = 'Número de rexistros por páxina';
$strLineFeed = 'Carácter de alimentación de liña: \\n';
$strLines = 'Liñas';
$strLinesTerminatedBy = 'As liñas rematan por';
$strLinkNotFound = 'Non se atopou o vínculo';
$strLinksTo = 'Vincúlase con';
$strLocationTextfile = 'Localización do arquivo de texto';
$strLogin = 'Entrada (login)';
$strLogout = 'Sair';
$strLogPassword = 'Contrasinal:';
$strLogUsername = 'Nome de usuario:';

$strMissingBracket = 'Falta un paréntese';
$strModifications = 'As modificacións foron gardadas';
$strModify = 'Modificar';
$strModifyIndexTopic = 'Modificar un índice';
$strMoveTable = 'Mover a tabela a (base_de_datos<b>.</b>tabela):';
$strMoveTableOK = 'Moveuse a tabela %s para %s.';
$strMySQLCharset = 'Código de caracteres (Charset) MySQL';
$strMySQLReloaded = 'MySQL reiniciado.';
$strMySQLSaid = 'Mensaxes do MySQL: ';
$strMySQLShowProcess = 'Mostrar os procesos';
$strMySQLShowStatus = 'Mostrar información de tempo de execución do MySQL';
$strMySQLShowVars = 'Mostrar as variables de sistema do MySQL';

$strName = 'Nome';
$strNext = 'Seguinte';
$strNo = 'Non';
$strNoDatabases = 'Non hai nengún banco de datos';
$strNoDescription = 'sen descrición';
$strNoDropDatabases = 'Os comandos "Eliminar banco de datos" non están permitidos.';
$strNoFrames = 'phpMyAdmin usa-se mellor cun navegador que <b>acepte molduras</b>.';
$strNoIndex = 'Non se definiu un índice';
$strNoIndexPartsDefined = 'Non se definiron partes do índice';
$strNoModification = 'Sen cambios';
$strNone = 'Nengun';
$strNoPassword = 'Sen Contrasinal';
$strNoPhp = 'sen código PHP';
$strNoPrivileges = 'Sen Privilexios';
$strNoQuery = 'Non hai procura SQL!';
$strNoRights = 'Non ten direitos suficientes para estar aquí agora!';
$strNoTablesFound = 'Non se achou nengunha tabela no banco de datos';
$strNotSet = 'Non se atopou a tabela <b>%s</b>ou non se indicou en %s';
$strNotNumber = 'Non é un número!';
$strNotValidNumber = ' non é un número válido para unha fila!';
$strNoUsersFound = 'Non se achou nengun(s) usuario(s).';
$strNull = 'Nulo';
$strNumSearchResultsInTable = '%s ocorrencias(s) dentro da tabela <i>%s</i>';
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> ocorrencia(s)';

$strOftenQuotation = 'Xeralmente son aspas. OPCIONAL significa que só os campos de caracteres son delimitados por caracteres "delimitadores"';
$strOperations = 'Operacións';
$strOptimizeTable = 'Optimizar a tabela';
$strOptionalControls = 'Opcional. Controla como se han de ler e escreber os caracteres especiais.';
$strOptionally = 'OPCIONAL';
$strOptions = 'Opcións';
$strOr = 'ou';
$strOverhead = 'De máis (Overhead)';

$strPageNumber = 'Número de páxina:';
$strPartialText = 'Textos parciais';
$strPassword = 'Contrasinal';
$strPasswordEmpty = 'O contrasinal está vacío!';
$strPasswordNotSame = 'Os contrasinais non son os mesmos!';
$strPdfDbSchema = 'Esquema da base de datos "%s" - Páxina %s';
$strPdfInvalidPageNum = 'O número de páxina PDF non está definido';
$strPdfInvalidTblName = 'Non existe a tabela "%s".';
$strPhp = 'Crear código PHP';
$strPHPVersion = 'Versión do PHP';
$strPmaDocumentation = 'Documentación do phpMyAdmin';
$strPmaUriError = 'A directiva <tt>$cfg[\'PmaAbsoluteUri\']</tt> DEBE estar asignada no seu ficheiro de configuración.';
$strPos1 = 'Inicio';
$strPrevious = 'Anterior';
$strPrimary = 'Primaria';
$strPrimaryKey = 'Chave primaria';
$strPrimaryKeyHasBeenDropped = 'Eliminouse a chave primaria';
$strPrimaryKeyName = 'O nome da chave primaria debe ser... PRIMARIA';
$strPrimaryKeyWarning = '("PRIMARIA" <b>debe</b> ser o nome de e <b>só de</b> unha chave primaria)';
$strPrintView = 'Visualización previa da impresión';
$strPrivileges = 'Privilexios';
$strProperties = 'Propiedades';

$strQBE = 'Procurar pondo un exemplo ("QBE")';
$strQBEDel = 'Eliminar';
$strQBEIns = 'Inserir';
$strQueryOnDb = 'Procura tipo SQL no banco de datos <b>%s</b>:';

$strRecords = 'Rexistros';
$strReferentialIntegrity = 'Comprobar a integridade das referencias:';
$strRelationNotWorking = 'Desactivouse a funcionalidade adicional para o traballo con tabelas vinculadas. Para saber o por que, faga click%saqu&iacute;%s.';
$strRelationView = 'Vista das relacións';
$strReloadFailed = 'A reinicialización do MySQL fallou.';
$strReloadMySQL = 'Reinicializar o MySQL';
$strRememberReload = 'Lembre-se recarregar o servidor.';
$strRenameTable = 'Renomear a tabela para';
$strRenameTableOK = 'Tabela \$table renomeada para \$new_name';
$strRepairTable = 'Reparar a tabela';
$strReplace = 'Substituir';
$strReplaceTable = 'Substituir os datos da tabela polos do ficheiro';
$strReset = 'Reiniciar';
$strReType = 'Reescreber';
$strRevoke = 'Revogar';
$strRevokeGrant = 'Revogar privilexio de conceder';
$strRevokeGrantMessage = 'Retirou-lle o privilexio de Permitir a %s';
$strRevokeMessage = 'Retirou-lle os privilexios a %s';
$strRevokePriv = 'Revogar privilexios';
$strRowLength = 'Lonxitude da fila';
$strRows = 'Filas';
$strRowsFrom = 'filas, a comezar da';
$strRowSize= ' Tamaño da fila ';
$strRowsModeVertical= 'vertical';
$strRowsModeHorizontal= 'horizontal';
$strRowsModeOptions= 'en modo %s e repetir os cabezallos de cada %s celas';
$strRowsStatistic = 'Estatistícas da Fila';
$strRunning = 'a rodar no servidor %s';
$strMySQLServerProcess = 'MySQL %pma_s1% a rodar no servidor %pma_s2% como %pma_s3%';
$strRunQuery = 'Enviar esta procura';
$strRunSQLQuery = 'Efectuar unha procura SQL na base de datos %s';

$strSave = 'Gardar';
$strScaleFactorSmall = 'O factor de reducción é demasiado pequeno para que o esquema caiba nunha única páxina';
$strSearch = 'Procurar';
$strSearchFormTitle = 'Procurar na base de datos';
$strSearchInTables = 'Dentro da(s) tabela(s):';
$strSearchNeedle = 'Palabras(s) ou valore(s) a procurar (o comodín é: "%"):';
$strSearchOption1 = 'polo menos unha das palabras';
$strSearchOption2 = 'todas as palabras';
$strSearchOption3 = 'a frase exacta';
$strSearchOption4 = 'como expresión regular';
$strSearchResultsFor = 'Procurar os resultados para "<i>%s</i>" %s:';
$strSearchType = 'Atopar:';
$strSelect = 'Procurar';
$strSelectADb = 'Seleccione unha base de dados';
$strSelectAll = 'Seleccionar todo';
$strSelectFields = 'Seleccione os campos (mínimo 1)';
$strSelectNumRows = 'a procurar';
$strSelectTables = 'Seleccionar tabelas';
$strSend = 'Enviar <I>(gravar nun ficheiro)</I><br>';
$strServerChoice = 'Escolla de Servidor';
$strServerVersion = 'Versión do servidor';
$strSetEnumVal = 'Se o tipo de campo é "enum" ou "set", introduza os valores usando este formato: \'a\',\'b\',\'c\'...<br />Se precisar pór unha barra invertida (" \ ") ou aspas simples (" \' ") entre estes valores, preceda a barra e as aspas de barras invertidas (por exemplo \'\\\\xyz\' ou \'a\\\'b\').';
$strShow = 'Mostrar';
$strShowAll = 'Ver todos os rexistros';
$strShowCols = 'Mostrar as columnas';
$strShowColor = 'Mostrar a cor';
$strShowGrid = 'Mostrar a grella';
$strShowingRecords = 'Mostrando rexistros ';
$strShowPHPInfo = 'Mostrar información sobre o PHP';
$strShowTableDimension = 'Mostrar a dimensión das tabelas';
$strShowTables = 'Mostrar as tabelas';
$strShowThisQuery = ' Mostrar esta procura aquí outra vez ';
$strSingly = 'a refacer logo de insercións e destrucións (shingly)';
$strSize = 'Tamaño';
$strSort = 'Ordenar';
$strSpaceUsage = 'Uso do espazo';
$strSplitWordsWithSpace = 'As palabras divídense cun carácter de espazo (" ").';
$strSQL = 'SQL';
$strSQLQuery = 'comando SQL';
$strSQLResult = 'Resultado SQL';
$strStatement = 'Informacións';
$strStrucCSV = 'Datos CSV';
$strStrucData = 'Estructura e datos';
$strStrucDrop = 'Adicionar \'Eliminar tabela anterior se existe\'';
$strStrucExcelCSV = 'CSV (para datos de Ms Excel)';
$strStrucOnly = 'Só a estructura';
$strStructPropose = 'Propor unha estructura para a tabela';
$strStructure = 'Estructura';
$strSubmit = 'Submeter';
$strSuccess = 'O seu comando de SQL executou-se com éxito';
$strSum = 'Suma';

$strTable = 'tabela ';
$strTableComments = 'Comentarios da tabela';
$strTableEmpty = 'O nome da tabela está vacío!';
$strTableHasBeenDropped = 'Eliminouse a tabela %s';
$strTableHasBeenEmptied = 'Vaciouse a tabela %s';
$strTableHasBeenFlushed = 'Fechouse a tabela %s';
$strTableMaintenance = 'Tabela de manutención';
$strTables = '%s tabela(s)';
$strTableStructure = 'Estructura da tabela';
$strTableType = 'Tipo da tabela';
$strTextAreaLength = ' Por causa da sua lonxitude,<br> este campo pode non ser editable ';
$strTheContent = 'O conteúdo do seu arquivo foi inserido';
$strTheContents = 'O conteúdo do arquivo substituíu o conteúdo da tabela que tiña a mesma chave primaria ou única';
$strTheTerminator = 'O carácter que separa os campos.';
$strTotal = 'total';
$strType = 'Tipo';

$strUncheckAll = 'Quitar-lles as marcas a todos';
$strUnique = 'Único';
$strUnselectAll = 'Non seleccionar nada';
$strUpdatePrivMessage = 'Acaba de actualizar os privilexios de %s.';
$strUpdateProfile = 'Actualizar o perfil:';
$strUpdateProfileMessage = 'Actualizouse o perfil.';
$strUpdateQuery = 'Actualizar a procura';
$strUsage = 'Uso';
$strUseBackquotes = 'Protexer os nomes das tabelas e dos campos con&nbsp;" ` "';
$strUser = 'Usuario';
$strUserEmpty = 'O nome do usuario está vacío!';
$strUserName = 'Nome do usuario';
$strUsers = 'Usuarios';
$strUseTables = 'Usar as tabelas';

$strValue = 'Valor';
$strViewDump = 'Ver o esquema do volcado da tabela';
$strViewDumpDB = 'Ver o esquema do volcado do banco de datos';

$strWelcome = 'Benvida/o a %s';
$strWithChecked = 'Todos os marcados';
$strWrongUser = 'Usuario ou contrasinal errado. Acceso negado.';

$strYes = 'Si';

$strZip = 'comprimido no formato "zipped"';

// To translate
$strPdfNoTables = 'No tables';  //to translate
$strDisplayFeat = 'Display Features';  //to translate
$strCreatePdfFeat = 'Creation of PDFs';  //to translate
$strColComFeat = 'Displaying Column Comments';  //to translate
$strDisabled = 'Disabled';  //to translate
$strEnabled = 'Enabled';  //to translate
$strOK = 'OK';  //to translate
$strNotOK = 'not OK';  //to translate
$strGeneralRelationFeat = 'General relation features';  //to translate
?>
