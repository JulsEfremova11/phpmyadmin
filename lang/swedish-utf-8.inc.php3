<?php
/* $Id$ */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ' ';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Tera, Peta, Exa
$byteUnits = array('bytes', 'kB', 'MB', 'GB');

$day_of_week = array('Sön', 'Mån', 'Tis', 'Ons', 'Tors', 'Fre', 'Lör');
$month = array('januari', 'februari', 'mars', 'april', 'maj', 'juni', 'juli', 'augusti', 'september', 'oktober', 'november', 'december');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%e %B %Y kl %H:%M';

$strAccessDenied = 'Åtkomst nekad';
$strAction = 'Åtgärd';
$strAddDeleteColumn = 'Lägg till/ta bort fältkolumner';
$strAddDeleteRow = 'Lägg till/ta bort villkorsrader';
$strAddNewField = 'Lägg till fält';
$strAddPriv = 'Lägg till ett nytt privilegium';
$strAddPrivMessage = 'Du har lagt till ett nytt privilegium.';
$strAddSearchConditions = 'Lägg till sökvillkor (uttryck i "where"-sats):';
$strAddToIndex = 'Lägg till&nbsp;%s&nbsp;kolumn(er) till index';
$strAddUser = 'Lägg till ny användare';
$strAddUserMessage = 'Du har lagt till en ny användare.';
$strAffectedRows = 'Påverkade rader:';
$strAfter = 'Efter %s';
$strAfterInsertBack = 'Gå tillbaka till föregående sida';
$strAfterInsertNewInsert = 'Lägg till ytterligare en ny rad';
$strAll = 'Alla';
$strAllTableSameWidth = 'Visa alla tabeller med samma bredd';
$strAlterOrderBy = 'Sortera om tabellen efter';
$strAnIndex = 'Ett index har lagts till för %s';
$strAnalyzeTable = 'Analysera tabell';
$strAnd = 'Och';
$strAny = 'Vem som helst';
$strAnyColumn = 'Vilken kolumn som helst';
$strAnyDatabase = 'Vilken databas som helst';
$strAnyHost = 'Vilken värd som helst';
$strAnyTable = 'Vilken tabell som helst';
$strAnyUser = 'Vilken användare som helst';
$strAPrimaryKey = 'En primär nyckel har lagts till för %s';
$strAscending = 'Stigande';
$strAtBeginningOfTable = 'I början av tabellen';
$strAtEndOfTable = 'I slutet av tabellen';
$strAttr = 'Attribut';

$strBack = 'Bakåt';
$strBinary = 'Binär';
$strBinaryDoNotEdit = 'Binär - ändra inte';
$strBookmarkDeleted = 'Bokmärket har raderats.';
$strBookmarkLabel = 'Etikett';
$strBookmarkQuery = 'Bokmärkt SQL-fråga';
$strBookmarkThis = 'Skapa bokmärke för den här SQL-frågan';
$strBookmarkView = 'Visa endast';
$strBrowse = 'Visa';
$strBzip = '"bzippad"';

$strCantLoadMySQL = 'kan inte ladda MySQL-tillägg,<br />var god och kontrollera PHP-konfigurationen.';
$strCantLoadRecodeIconv = 'Kan inte ladda utökningarna iconv eller recode som behövs för teckenuppsättningsomvandling. Konfigurera php för att tillåta dessa utökningar eller stäng av teckenuppsättningsomvandling i phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Kan inte byta namn på index till "PRIMARY"!';
$strCantUseRecodeIconv = 'Kan inte använda funktionerna iconv, libiconv eller recode_string när utökade rapporter ska laddas. Kontrollera din php-konfiguration.';
$strCardinality = 'Kardinalitet';
$strCarriage = 'Vagnretur: \\r';
$strChange = 'Ändra';
$strChangeDisplay = 'Välj fält som ska visas';
$strChangePassword = 'Byt lösenord';
$strCheckAll = 'Markera alla';
$strCheckDbPriv = 'Kontrollera databasprivilegier';
$strCheckTable = 'Kontrollera tabell';
$strChoosePage = 'Välj en sida att redigera';
$strColumn = 'Kolumn';
$strColumnNames = 'Kolumn-namn';
$strComments = 'Kommentarer';
$strCompleteInserts = 'Kompletta infogningar';
$strConfigFileError = 'phpMyAdmin kunde inte läsa din konfigurationsfil!<br />Detta kan inträffa om php hittar ett fel i den eller om php inte hittar filen.<br />Anropa konfigurationsfilen direkt mha länken nedan och läs php:s felmeddelande(n) som du erhåller. I de flesta fall saknas ett citationstecken eller ett semikolon någonstans.<br />Om du erhåller en tom sida är allt bra.';
$strConfigureTableCoord = 'Var god ange koordinaterna för tabellen %s';
$strConfirm = 'Vill du verkligen göra det?';
$strCookiesRequired = 'Kakor (cookies) måste tillåtas för att gå vidare.';
$strCopyTable = 'Kopiera tabellen till (databas<b>.</b>tabell):';
$strCopyTableOK = 'Tabellen %s har kopierats till %s.';
$strCreate = 'Skapa';
$strCreateIndex = 'Skapa ett index för&nbsp;%s&nbsp;kolumn(er)';
$strCreateIndexTopic = 'Skapa ett nytt index';
$strCreateNewDatabase = 'Skapa ny databas';
$strCreateNewTable = 'Skapa ny tabell i databas %s';
$strCreatePage = 'Skapa en ny sida';
$strCriteria = 'Villkor';

$strData = 'Data';
$strDataOnly = 'Enbart data';
$strDatabase = 'Databas ';
$strDatabaseHasBeenDropped = 'Databasen %s har tagits bort.';
$strDatabaseWildcard = 'Databas (jokertecken tillåtna):';
$strDatabases = 'databaser';
$strDatabasesStats = 'Databas-statistik';
$strDefault = 'Standard';
$strDelete = 'Radera';
$strDeleteFailed = 'Raderingen misslyckades!';
$strDeleteUserMessage = 'Du har tagit bort användaren %s.';
$strDeleted = 'Raden har raderats';
$strDeletedRows = 'Raderade rader';
$strDescending = 'Fallande';
$strDisplay = 'Visa';
$strDisplayOrder = 'Visningsordning:';
$strDisplayPDF = 'Visa PDF-schema';
$strDoAQuery = 'Utför en "Query by Example" (jokertecken: "%")';
$strDoYouReally = 'Vill du verkligen ';
$strDocu = 'Dokumentation';
$strDrop = 'Radera';
$strDropDB = 'Radera databas %s';
$strDropTable = 'Radera tabell';
$strDumpXRows = 'Visa %s rader med början på rad %s.';
$strDumpingData = 'Data i tabell';
$strDynamic = 'dynamisk';

$strEdit = 'Ändra';
$strEditPDFPages = 'Redigera PDF-sidor';
$strEditPrivileges = 'Ändra privilegier';
$strEffective = 'Effektivt';
$strEmpty = 'Töm';
$strEmptyResultSet = 'MySQL skickade tillbaka ett tomt resultat (dvs inga rader).';
$strEnd = 'Slutet';
$strEnglishPrivileges = ' Obs! MySQL-privilegiumnamn anges på engelska ';
$strError = 'Fel';
$strExplain = 'Förklara SQL-kod';
$strExport = 'Exportera';
$strExportToXML = 'Exportera till XML-format';
$strExtendedInserts = 'Utökade infogningar';
$strExtra = 'Extra';

$strField = 'Fält';
$strFieldHasBeenDropped = 'Fältet %s har tagits bort';
$strFields = 'Fält';
$strFieldsEmpty = ' Antalet fält är noll! ';
$strFieldsEnclosedBy = 'Fälten omges av';
$strFieldsEscapedBy = 'Specialtecken i fält föregås av';
$strFieldsTerminatedBy = 'Fälten avslutas med';
$strFixed = 'fast';
$strFlushTable = 'Rensa tabellen ("FLUSH TABLE")';
$strFormEmpty = 'Värde saknas i formuläret!';
$strFormat = 'Format';
$strFullText = 'Fullständiga texter';
$strFunction = 'Funktion';

$strGenBy = 'Genererad av';
$strGenTime = 'Skapad';
$strGo = 'Kör';
$strGrants = 'Befogenheter';
$strGzip = '"gzippad"';

$strHasBeenAltered = 'har ändrats.';
$strHasBeenCreated = 'har skapats.';
$strHaveToShow = 'Du måste välja minst en kolumn som ska visas';
$strHome = 'Hem';
$strHomepageOfficial = 'phpMyAdmin:s officiella hemsida';
$strHomepageSourceforge = 'phpMyAdmin Sourceforge-nedladdningssida';
$strHost = 'Värd';
$strHostEmpty = 'Värdnamnet är tomt!';

$strIdxFulltext = 'Heltext';
$strIfYouWish = 'Om du vill ladda enbart några av tabellens kolumner, ange en kommaseparerad fältlista.';
$strIgnore = 'Ignorera';
$strInUse = 'används';
$strIndex = 'Index';
$strIndexHasBeenDropped = 'Index %s har tagits bort';
$strIndexName = 'Indexnamn&nbsp;:';
$strIndexType = 'Indextyp&nbsp;:';
$strIndexes = 'Index';
$strInsert = 'Lägg till';
$strInsertAsNewRow = 'Lägg till som ny rad';
$strInsertNewRow = 'Lägg till ny rad';
$strInsertTextfiles = 'Importera data från textfil till tabellen';
$strInsertedRows = 'Tillagda rader:';
$strInstructions = 'Instruktioner';
$strInvalidName = '"%s" är ett reserverat ord, du kan inte använda det som ett namn på en databas/tabell/fält.';

$strKeepPass = 'Ändra inte lösenordet';
$strKeyname = 'Nyckel';;
$strKill = 'Döda';

$strLength = 'Längd';
$strLengthSet = 'Längd/Värden*';
$strLimitNumRows = 'Rader per sida';
$strLineFeed = 'Radframmatning: \\n';
$strLines = 'Rader';
$strLinesTerminatedBy = 'Raderna avslutas med';
$strLinkNotFound = 'Länk ej funnen';
$strLinksTo = 'Länkar till';
$strLocationTextfile = 'Textfilens plats';
$strLogPassword = 'Lösenord:';
$strLogUsername = 'Användarnamn:';
$strLogin = 'Logga in';
$strLogout = 'Logga ut';

$strMissingBracket = 'Parantes saknas';
$strModifications = 'Ändringarna har sparats';
$strModify = 'Ändra';
$strModifyIndexTopic = 'Ändra ett index';
$strMoveTable = 'Flytta tabellen till (databas<b>.</b>tabell):';
$strMoveTableOK = 'Tabellen %s har flyttats till %s.';
$strMySQLCharset = 'MySQL teckenuppsättning';
$strMySQLReloaded = 'MySQL har startats om.';
$strMySQLSaid = 'MySQL sa: ';
$strMySQLServerProcess = 'MySQL %pma_s1% körs på %pma_s2% som %pma_s3%';
$strMySQLShowProcess = 'Visa processer';
$strMySQLShowStatus = 'Visa MySQL-körningsinformation';
$strMySQLShowVars = 'Visa MySQL:s systemvariabler';

$strName = 'Namn';
$strNext = 'Nästa';
$strNo = 'Nej';
$strNoDatabases = 'Inga databaser';
$strNoDescription = 'Ingen beskrivning';
$strNoDropDatabases = '"DROP DATABASE"-instruktioner är avstängda.';
$strNoFrames = 'phpMyAdmin fungerar tyvärr endast med webbläsare som hanterar ramar.';
$strNoIndex = 'Inga index är definierade!';
$strNoIndexPartsDefined = 'Inga delar av index är definierade!';
$strNoModification = 'Ingen förändring';
$strNoPassword = 'Inget lösenord';
$strNoPhp = 'Utan PHP-kod';
$strNoPrivileges = 'Inga privilegier';
$strNoQuery = 'Ingen SQL-fråga!';
$strNoRights = 'Du har inte tillräcklig behörighet för att vara här!';
$strNoTablesFound = 'Inga tabeller funna i databasen.';
$strNoUsersFound = 'Hittade ingen användare.';
$strNone = 'Inget';
$strNotNumber = 'Det är inte ett nummer!';
$strNotSet = '<b>%s</b>-tabellen ej funnen eller ej angiven i %s';
$strNotValidNumber = ' är inte ett giltigt radnummer!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s träff(ar) i tabell <i>%s</i>';
$strNumSearchResultsTotal = '<b>Totalt:</b> <i>%s</i> träff(ar)';

$strOftenQuotation = 'Ofta citattecken. Frivilligt innebär att bara fält av typ \'char\' och \'varchar\' omges av angivet tecken.';
$strOperations = 'Operationer';
$strOptimizeTable = 'Optimera tabell';
$strOptionalControls = 'Frivilligt. Styr hur läsning och skrivning av specialtecken utförs.';
$strOptionally = 'Frivilligt';
$strOptions = 'Alternativ';
$strOr = 'Eller';
$strOverhead = 'Outnyttjat';

$strPHPVersion = 'PHP-version';
$strPageNumber = 'Sida:';
$strPartialText = 'Avkortade texter';
$strPassword = 'Lösenord';
$strPasswordEmpty = 'Lösenordet är tomt!';
$strPasswordNotSame = 'Lösenorden är inte lika!';
$strPdfDbSchema = 'Schema för databasen "%s" - Sidan %s';
$strPdfInvalidPageNum = 'Odefinierat PDF-sidnummer!';
$strPdfInvalidTblName = 'Tabellen "%s" finns inte!';
$strPhp = 'Skapa PHP-kod';
$strPmaDocumentation = 'phpMyAdmin dokumentation';
$strPmaUriError = 'Variabeln <tt>$cfg[\'PmaAbsoluteUri\']</tt> MÅSTE anges i din konfigurationsfil!';
$strPos1 = 'Början';
$strPrevious = 'Föregående';
$strPrimary = 'Primär';
$strPrimaryKey = 'Primärnyckel';
$strPrimaryKeyHasBeenDropped = 'Den primära nyckeln har tagits bort';
$strPrimaryKeyName = 'Primärnyckelns namn måste vara "PRIMARY"!';
$strPrimaryKeyWarning = '("PRIMARY" <b>måste</b> vara namnet på och <b>endast på</b> en primärnyckel!)';
$strPrintView = 'Utskriftsvänlig visning';
$strPrivileges = 'Privilegier';
$strProperties = 'Inställningar';

$strQBE = 'Skapa fråga';
$strQBEDel = 'Ta bort';
$strQBEIns = 'Infoga';
$strQueryOnDb = 'SQL-fråga i databas <b>%s</b>:';

$strReType = 'Skriv om';
$strRecords = 'Rader';
$strReferentialIntegrity = 'Kontrollera referensintegritet:';
$strRelationNotWorking = 'Den extra funktionaliteten för att hantera länkade tabeller har avaktiverats. %sVisa orsaken%s.';
$strRelationView = 'Visa relationer';
$strReloadFailed = 'Omladdning av MySQL misslyckades.';
$strReloadMySQL = 'Ladda om MySQL';
$strRememberReload = 'Kom ihåg att ladda om MySQL.';
$strRenameTable = 'Döp om tabellen till';
$strRenameTableOK = 'Tabell %s har döpts om till %s';
$strRepairTable = 'Reparera tabell';
$strReplace = 'Ersätt';
$strReplaceTable = 'Ersätt data i tabell';
$strReset = 'Nollställ';
$strReType = 'Bekräfta';
$strRevoke = 'Upphäv';
$strRevokeGrant = 'Upphäv Grant';
$strRevokeGrantMessage = 'Du har upphävt Grant-privilegiet för %s';
$strRevokeMessage = 'Du har upphävt privilegierna för %s';
$strRevokePriv = 'Upphäv privilegier';
$strRowLength = 'Radlängd';
$strRowSize = 'Radstorlek';
$strRows = 'Rader';
$strRowsFrom = 'rader med början från';
$strRowsModeHorizontal= 'vågrätt';
$strRowsModeOptions= 'i %s format och upprepa rubrikerna efter %s celler';
$strRowsModeVertical= 'lodrätt';
$strRowsStatistic = 'Radstatistik';
$strRunQuery = 'Kör fråga';
$strRunSQLQuery = 'Kör SQL-fråga/frågor i databasen %s';
$strRunning = 'körs på %s';

$strSQL = 'SQL';
$strSQLQuery = 'SQL-fråga';
$strSQLResult = 'SQL-resultat';
$strSave = 'Spara';
$strScaleFactorSmall = 'Skalfaktorn är för liten för att schemat ska få plats på en sida';
$strSearch = 'Sök';
$strSearchFormTitle = 'Sök i databas';
$strSearchInTables = 'I tabell(er):';
$strSearchNeedle = 'Ord eller värde(n) att söka efter (jokertecken: "%"):';
$strSearchOption1 = 'minst ett av orden';
$strSearchOption2 = 'alla ord';
$strSearchOption3 = 'den exakta frasen';
$strSearchOption4 = 'som reguljärt uttryck';
$strSearchResultsFor = 'Resultat av sökning efter "<i>%s</i>" %s:';
$strSearchType = 'Hitta:';
$strSelect = 'Välj';
$strSelectADb = 'Välj en databas';
$strSelectAll = 'Markera alla';
$strSelectFields = 'Välj fält (minst ett):';
$strSelectNumRows = 'i fråga';
$strSelectTables = 'Välj tabeller';
$strSend = 'Spara som fil';
$strServerChoice = 'Serverval';
$strServerVersion = 'Serverversion';
$strSetEnumVal = 'Om en fälttyp är "enum" eller "set", var god ange värden enligt följande format: \'a\',\'b\',\'c\'...<br />Om du behöver lägga till ett bakåtstreck ("\") eller ett enkelcitat ("\'") i värdena, skriv ett bakåtstreck före tecknet (till exempel \'\\\\xyz\' eller \'a\\\'b\').';
$strShow = 'Visa';
$strShowAll = 'Visa alla';
$strShowColor = 'Visa färger';
$strShowCols = 'Visa kolumner';
$strShowGrid = 'Visa rutnät';
$strShowPHPInfo = 'Visa PHP-information';
$strShowTableDimension = 'Visa tabellers dimensioner';
$strShowTables = 'Visa tabeller';
$strShowThisQuery = ' Visa frågan här igen ';
$strShowingRecords = 'Visar rader ';
$strSingly = '(ensam)';
$strSize = 'Storlek';
$strSort = 'Sortering';
$strSpaceUsage = 'Utrymmesanvändning';
$strSplitWordsWithSpace = 'Ord separeras med mellanslag (" ").';
$strStatement = 'Uppgift';
$strStrucCSV = 'CSV-data';
$strStrucData = 'Struktur och data';
$strStrucDrop = 'Lägg till \'radera tabell\'';
$strStrucExcelCSV = 'CSV för MS Excel-data';
$strStrucOnly = 'Enbart struktur';
$strStructPropose = 'Föreslå tabellstruktur';
$strStructure = 'Struktur';
$strSubmit = 'Sänd';
$strSuccess = 'Din SQL-fråga utfördes korrekt';
$strSum = 'Summa';

$strTable = 'tabell ';
$strTableComments = 'Tabellkommentarer';
$strTableEmpty = 'Tabellnamnet är tomt!';
$strTableHasBeenDropped = 'Tabellen %s har tagits bort';
$strTableHasBeenEmptied = 'Tabellen %s har tömts';
$strTableHasBeenFlushed = 'Tabellen %s har rengjorts';
$strTableMaintenance = 'Tabellunderhåll';
$strTableStructure = 'Struktur för tabell';
$strTableType = 'Tabelltyp';
$strTables = '%s tabell(er)';
$strTextAreaLength = ' På grund av dess längd,<br /> kanske detta fält inte kan redigeras ';
$strTheContent = 'Filens innehåll har importerats.';
$strTheContents = 'Filens innehåll ersätter den valda tabellens rader som har identiska primära eller unika nycklar.';
$strTheTerminator = 'Fältavslutare.';
$strTotal = 'totalt';
$strType = 'Typ';

$strUncheckAll = 'Avmarkera alla';
$strUnique = 'Unik';
$strUnselectAll = 'Avmarkera alla';
$strUpdatePrivMessage = 'Du har uppdaterat privilegierna för %s.';
$strUpdateProfile = 'Uppdatera profil:';
$strUpdateProfileMessage = 'Profilen har uppdaterats.';
$strUpdateQuery = 'Uppdatera fråga';
$strUsage = 'Användning';
$strUseBackquotes = 'Använd bakåtcitat runt tabell- och fältnamn';
$strUseTables = 'Använd tabeller';
$strUser = 'Användare';
$strUserEmpty = 'Användarnamnet är tomt!';
$strUserName = 'Användarnamn';
$strUsers = 'Användare';

$strValue = 'Värde';
$strViewDump = 'Visa SQL-satser för tabellen';
$strViewDumpDB = 'Visa SQL-satser för databasen';

$strWelcome = 'Välkommen till %s';
$strWithChecked = 'Med markerade:';
$strWrongUser = 'Fel användarnamn/lösenord. Åtkomst nekad.';

$strYes = 'Ja';

$strZip = '"zippad"';

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
