<?php
/* $Id$ */
/* By: lubos klokner <erkac@vault-tec.sk> */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = '"verdana ce", "arial ce", verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = '"verdana ce", "arial ce", helvetica, arial, geneva, sans-serif';
$number_thousands_separator = ' ';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Tera, Peta, Exa
$byteUnits = array('Bajtov', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Ne', 'Po', 'Út', 'St', 'Št', 'Pi', 'So');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'Máj', 'Jún', 'Júl', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d.%B, %Y - %H:%M';


$strAccessDenied = 'Prístup zamietnutý';
$strAction = 'Akcia';
$strAddDeleteColumn = 'Pridať/Odobrať polia stĺpcov';
$strAddDeleteRow = 'Pridať/Odobrať kritéria riadku';
$strAddNewField = 'Pridať nové pole';
$strAddPriv = 'Pridať nové privilégium';
$strAddPrivMessage = 'Privilégium bolo pridané.';
$strAddSearchConditions = 'Pridať vyhľadávacie parametre (obsah dotazu po "where" príkaze):';
$strAddToIndex = 'Pridať do indexu &nbsp;%s&nbsp;stĺpec';
$strAddUser = 'Pridať nového používateľa';
$strAddUserMessage = 'Používateľ bol pridaný.';
$strAffectedRows = ' Ovplyvnené riadky: ';
$strAfter = 'Po %s';
$strAfterInsertBack = 'Späť';
$strAfterInsertNewInsert = 'Vložiť nový záznam';
$strAll = 'Všetko';
$strAlterOrderBy = 'Zmeniť poradie tabuľky podľa';
$strAnalyzeTable = 'Analyzovať tabuľku';
$strAnd = 'a';
$strAnIndex = 'Bol pridaný index pre %s';
$strAny = 'Akýkoľvek';
$strAnyColumn = 'Akýkoľvek stĺpec';
$strAnyDatabase = 'Akákoľvek databáza';
$strAnyHost = 'Akýkoľvek hostiteľ';
$strAnyTable = 'Akákoľvek tabuľka';
$strAnyUser = 'Akykoľvek používateľ';
$strAPrimaryKey = 'Bol pridaný primárny kľúč pre %s';
$strAscending = 'Vzostupne';
$strAtBeginningOfTable = 'Na začiatku tabuľky';
$strAtEndOfTable = 'Na konci tabuľky';
$strAttr = 'Atribúty';

$strBack = 'Späť';
$strBinary = 'Binárny';
$strBinaryDoNotEdit = 'Binárny - neupravujte ';
$strBookmarkDeleted = 'Záznam z obľúbených bol zmazaný.';
$strBookmarkLabel = 'Názov';
$strBookmarkQuery = 'Obľúbený SQL dotaz';
$strBookmarkThis = 'Pridať tento SQL dotaz do obľúbených';
$strBookmarkView = 'Iba prezrieť';
$strBrowse = 'Prechádzať';
$strBzip = '"bzipped"';

$strCantLoadMySQL = 'nieje možné nahrať rozšírenie pre MySQL,<br />prosím skontrolujte konfiguráciu PHP.';
$strCantLoadRecodeIconv = 'Nieje možné nahrať rozšírenie iconv alebo recode potrebné pre prevod znakových sad. Upravte nastavenie php tak aby umožňovalo použiť tieto rozšírenia alebo vypnite túto vlastnosť v konfigurácii phpMyAdmina.';
$strCantRenameIdxToPrimary = 'Nieje možné premenovať index na PRIMARY!';
$strCantUseRecodeIconv = 'Nieje možné použiť funkcie iconv,libiconv a recode_string aj napriek tomu, že rozšírenia su nahrané. Zkontrolujte prosím nastavenie PHP.';
$strCardinality = 'Mohutnosť';
$strCarriage = 'Návrat vozíku (Carriage return): \\r';
$strChange = 'Zmeniť';
$strChangeDisplay = 'Zvolte, ktoré pole zobraziť';
$strChangePassword = 'Zmeniť heslo';
$strCheckAll = 'Označiť všetko';
$strCheckDbPriv = 'Skontrolovať privilégia databázy';
$strCheckTable = 'Skontrolovať tabuľku';
$strChoosePage = 'Prosím zvolte si Stránku, ktorú chcete upraviť';
$strColumn = 'Stĺpec';
$strColumnNames = 'Názvy stĺpcov';
$strComments = 'Komentáre';
$strCompleteInserts = 'Úplné vloženie';
$strConfigureTableCoord = 'Prosím skonfigurujte koordináty pre tabuľku %s';
$strConfirm = 'Skutočne si želáte toto vykonať?';
$strCookiesRequired = 'Cookies musia byť zapnuté pokiaľ chcete pokračovať.';
$strCopyTable = 'Skopírovať tabuľku do (databáza<b>.</b>tabuľka):';
$strCopyTable = 'Skopírovať tabuľku do';
$strCopyTableOK = 'Tabuľka %s bola skorírovaná do %s.';
$strCreate = 'Vytvoriť';
$strCreateIndex = 'Vytvoriť index na&nbsp;%s&nbsp;stĺpcoch';
$strCreateIndexTopic = 'Vytvoriť nový index';
$strCreateNewDatabase = 'Vytvoriť novú databázu';
$strCreateNewTable = 'Vytvoriť novú tabuľku v databáze %s';
$strCreatePage = 'Vytvoriť novú Stránku';
$strCriteria = 'Kritéria';

$strData = 'Dáta';
$strDatabase = 'Databáza ';
$strDatabaseHasBeenDropped = 'Databáza %s bola zmazaná.';
$strDatabases = 'databáz(y)';
$strDatabasesStats = 'Štatistiky databázy';
$strDatabaseWildcard = 'DatabĂĄza (povolenĂŠ nahradzujĂşce znaky):';
$strDataOnly = 'Iba dáta';
$strDefault = 'Predvolené';
$strDelete = 'Zmazať';
$strDeleted = 'Riadok bol zmazaný';
$strDeletedRows = 'Zmazané riadky:';
$strDeleteFailed = 'Mazanie bolo neúspešné!';
$strDeleteUserMessage = 'Používateľ %s bol zmazaný.';
$strDescending = 'Zostupne';
$strDisplay = 'Zobraziť';
$strDisplayOrder = 'Zobraziť zoradené:';
$strDisplayPDF = 'Zobraziť schému PDF';
$strDoAQuery = 'VykonaĹĽ "dotaz podÄža prĂ­kladu" (nahradzujĂşci znak: "%")';
$strDocu = 'Dokumentácia';
$strDoYouReally = 'Skutočne chcete vykonať príkaz ';
$strDrop = 'Odstrániť';
$strDropDB = 'Odstrániť databázu %s';
$strDropTable = 'Zrušiť tabuľku';
$strDumpingData = 'Dampujem dáta pre tabuľku';
$strDumpXRows = 'Zobraziť %s riadkov od riadku %s.';
$strDynamic = 'dynamic';

$strEdit = 'Upraviť';
$strEditPDFPages = 'Upraviť PDF Stránky';
$strEditPrivileges = 'Upraviť privilégia';
$strEffective = 'Efektívny';
$strEmpty = 'Vyprázdniť';
$strEmptyResultSet = 'MySQL vrátil prázdny výsledok (tj. nulový počet riadkov).';
$strEnd = 'Koniec';
$strEnglishPrivileges = ' Poznámka: názvy MySQL privilégií sú uvádzané v angličtine. ';
$strError = 'Chyba';
$strExplain = 'Vysvetliť SQL kód';
$strExport = 'Exportovať';
$strExport = 'Exportovať';
$strExportToXML = 'Exportovať do formátu XML';
$strExtendedInserts = 'Rozšírené vkladanie';
$strExtra = 'Extra';

$strField = 'Pole';
$strFieldHasBeenDropped = 'Pole %s bolo odstránené';
$strFields = 'Polia';
$strFieldsEmpty = ' Počet polí je prázdny! ';
$strFieldsEnclosedBy = 'Polia uzatvorené';
$strFieldsEscapedBy = 'Polia uvedené pomocou';
$strFieldsTerminatedBy = 'Polia ukončené';
$strFixed = 'pevný';
$strFlushTable = 'Vyprázdniť tabuľku ("FLUSH")';
$strFormat = 'Formát';
$strFormEmpty = 'Chýbajúca položka vo formulári !';
$strFullText = 'Plné texty';
$strFunction = 'Funkcia';

$strGenBy = 'Vygenerované';
$strGenTime = 'Vygenerované:';
$strGo = 'Vykonaj';
$strGrants = 'Privilégia';
$strGzip = '"gzip-ované"';

$strHasBeenAltered = 'bola zmenená.';
$strHasBeenCreated = 'bola vytvorená.';
$strHaveToShow = 'Zvolte prosím aspoň jeden stĺpec, ktorý checete zobraziť';
$strHome = 'Domov';
$strHomepageOfficial = 'Oficiálne stránky phpMyAdmin-a';
$strHomepageSourceforge = 'Download stránka phpMyAdmin-a (Sourceforge)';
$strHost = 'Hostitel';
$strHostEmpty = 'Názov hostitela je prázdny!';

$strIdxFulltext = 'Celý text';
$strIfYouWish = 'Ak si zeláte nahrať iba určité stĺpce tabuľky, špecifikujte ich ako zoznam polí oddelený čiarkou.';
$strIgnore = 'Ignorovať';
$strIndex = 'Index';
$strIndexes = 'Indexy';
$strIndexHasBeenDropped = 'Index pre %s bol odstránený';
$strIndexName = 'Meno indexu&nbsp;:';
$strIndexType = 'Typ indexu&nbsp;:';
$strInsert = 'Vložiť';
$strInsertAsNewRow = 'Vložiť ako nový riadok';
$strInsertedRows = 'Vložené riadky:';
$strInsertNewRow = 'Vložiť nový riadok';
$strInsertTextfiles = 'Vložiť textové súbory do tabuľky';
$strInstructions = 'Inštrukcie';
$strInUse = 'práve sa používa';
$strInvalidName = '"%s" je rezervované slovo, nemôže byť použité ako názov databázy/tabuľky/poľa.';

$strKeepPass = 'Nezmeniť heslo';
$strKeyname = 'Kľúčový názov';
$strKill = 'Zabiť';

$strLength = 'Dĺžka';
$strLengthSet = 'Dĺžka/Nastaviť*';
$strLimitNumRows = 'záznamov na stránku';
$strLineFeed = 'Ukončenie riadku (Linefeed): \\n';
$strLines = 'Riadky';
$strLinesTerminatedBy = 'Riadky ukončené';
$strLinkNotFound = 'Linka nebola nájdená';
$strLinksTo = 'Linkovať na';
$strLocationTextfile = 'Lokácia textového súboru';
$strLogin = 'Login';
$strLogout = 'Odhlásiť sa';
$strLogPassword = 'Heslo:';
$strLogUsername = 'Používateľ:';

$strMissingBracket = 'Chýba zátvorka';
$strModifications = 'Zmeny boli uložené';
$strModify = 'Zmeniť';
$strModifyIndexTopic = 'Modifikovať index';
$strMoveTable = 'Presunúť tabuľku do (databáza<b>.</b>tabuľka):';
$strMoveTableOK = 'Tabuľka %s bola presunutá do %s.';
$strMySQLCharset = 'Znaková sada v MySQL';
$strMySQLReloaded = 'MySQL znovu-načítaná.';
$strMySQLSaid = 'MySQL hlási: ';
$strMySQLServerProcess = 'MySQL %pma_s1% beži na %pma_s2% ako %pma_s3%';
$strMySQLShowProcess = 'Zobraziť procesy';
$strMySQLShowStatus = 'Zobraziť MySQL informácie o behu';
$strMySQLShowVars = 'Zobraziť MySQL systémové premenné';

$strName = 'Názov';
$strNext = 'Ďalší';
$strNo = 'Nie';
$strNoDatabases = 'Žiadne databázy';
$strNoDescription = 'bez Popisu';
$strNoDropDatabases = 'Možnosť "DROP DATABASE" vypnutá.';
$strNoFrames = 'phpMyAdmin funguje lepšie s prehliadačmi podporujúcimi <b>rámy</b>.';
$strNoIndex = 'Nebol definovaný žiadny index!';
$strNoIndexPartsDefined = 'Časti indexu neboli definované!';
$strNoModification = 'Žiadna zmena';
$strNone = 'Žiadny';
$strNoPassword = 'Žiadne heslo';
$strNoPhp = 'bez PHP kódu';
$strNoPrivileges = 'Žiadne privilégia';
$strNoQuery = 'Žiadny SQL dotaz!';
$strNoRights = 'Nemáte dostatočné práva na vykonanie tejto akcie!';
$strNoTablesFound = 'Neboli nájdené žiadne tabuľky v tejto datábaze.';
$strNotNumber = 'Toto nieje číslo!';
$strNotSet = 'Tabuľka <b>%s</b> nebola nájdená alebo nieje nastavená v %s';
$strNotValidNumber = ' nieje platné číslo riadku!';
$strNoUsersFound = 'Nebol nájdený žiadny používateľ.';
$strNull = 'Nulový';
$strNumSearchResultsInTable = '%s výskyt(ov)v tabuľke <i>%s</i>';
$strNumSearchResultsTotal = '<b>Celkovo:</b> <i>%s</i> výskyt(ov)';

$strOftenQuotation = 'Často uvodzujúce znaky. Voliteľne znamena, že iba polia typu char a varchar sú uzatvorené do "uzatváracích" znakov.';
$strOperations = 'Operácie';
$strOptimizeTable = 'Optimalozovať tabuľku';
$strOptionalControls = 'Volitelné. Určuje ako zapisovať alebo čítať špeciálne znaky.';
$strOptionally = 'Voliteľne';
$strOptions = 'Voľby';
$strOr = 'alebo';
$strOverhead = 'Naviac';

$strPageNumber = 'Číslo stránky:';
$strPartialText = 'Čiastočné texty';
$strPassword = 'Heslo';
$strPasswordEmpty = 'Heslo je prázdne!';
$strPasswordNotSame = 'Heslá sa nezhodujú!';
$strPdfDbSchema = 'Schéma databázy "%s"  - Strana %s';
$strPdfInvalidPageNum = 'Nedefinované číslo stránky v PDF!';
$strPdfInvalidTblName = 'Tabuľka "%s" neexistuje!';
$strPhp = 'Vytvoriť PHP kód';
$strPHPVersion = 'Verzia PHP';
$strPmaDocumentation = 'phpMyAdmin Dokumentácia';
$strPmaUriError = 'Direktíva <tt>$cfg[\'PmaAbsoluteUri\']</tt> v konfiguračnom súbore MUSÍ byť nastavená!';
$strPos1 = 'Začiatok';
$strPrevious = 'Predchádzajúci';
$strPrimary = 'Primárny';
$strPrimaryKey = 'Primárny kľúč';
$strPrimaryKeyHasBeenDropped = 'Primárny kľúč bol zrušený';
$strPrimaryKeyName = 'Názov primárneho kľúca musí byť... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>musí</b> byť <b>iba</b> meno primárneho kľúča!)';
$strPrintView = 'Náhľad k tlači';
$strPrivileges = 'Privilégia';
$strProperties = 'Vlastnosti';

$strQBE = 'Dotaz podľa príkladu';
$strQBEDel = 'Zmazať';
$strQBEIns = 'Vložiť';
$strQueryOnDb = ' SQL dotaz v databáze <b>%s</b>:';

$strRecords = 'Záznamov';
$strReferentialIntegrity = 'Skontrolovať referenčnú integritu:';
$strRelationView = 'Zobraziť spojitosti';
$strReloadFailed = 'Znovu-načítanie MySQL bolo neúspešné.';
$strReloadMySQL = 'Znovu-načítať MySQL';
$strRememberReload = 'Nezabudnite znovu-načítať MySQL server.';
$strRenameTable = 'Premenovať tabuľku na';
$strRenameTableOK = 'Tabuľka %s bola premenovaná na %s';
$strRepairTable = 'Opraviť tabuľku';
$strReplace = 'Nahradiť';
$strReplaceTable = 'Nahradiť dáta v tabuľke súborom';
$strReset = 'Pôvodné (Reset)';
$strReType = 'Potvrdiť';
$strRevoke = 'Zrusiť';
$strRevokeGrant = 'Zrušiť polovenie pridelovať privilégia';
$strRevokeGrantMessage = 'Bolo zrušené právo pridelovať privilégia pre %s';
$strRevokeMessage = 'Boli zrušené privilégia pre %s';
$strRevokePriv = 'Zrušiť privilégia';
$strRowLength = 'Dĺžka riadku';
$strRows = 'Riadkov';
$strRowsFrom = 'riadky začínajú od';
$strRowSize = ' Veľkosť riadku ';
$strRowsModeHorizontal = 'horizontálnom';
$strRowsModeOptions = 'v(o) %s móde a opakovať hlavičky po každých %s bunkách';
$strRowsModeVertical='vertikálnom';
$strRowsStatistic = 'Štatistika riadku';
$strRunning = 'beži na %s';
$strRunQuery = 'Odošli dotaz';
$strRunSQLQuery = 'Spustiť SQL dotaz/dotazy na databázu %s';

$strSave = 'Uložiť';
$strScaleFactorSmall = 'Mierka je príliš mala na roztiahnutie schémy na stránku';
$strSearch = 'Hľadať';
$strSearchFormTitle = 'Hľadať v databáze';
$strSearchInTables = 'V tabuľke(ách):';
$strSearchNeedle = 'Slovo(á) alebo hodnotu(y), ktoré chcete vyhľadať (nahradzujúci znak: "%"):';
$strSearchOption1 = 'najmenej jedno zo slov';
$strSearchOption2 = 'všetky slová';
$strSearchOption3 = 'presný výraz';
$strSearchOption4 = 'ako relulárny výraz';
$strSearchResultsFor = 'Prehľadať výsledky na "<i>%s</i>" %s:';
$strSearchType = 'Nájdi:';
$strSelect = 'Vybrať';
$strSelectADb = 'Prosím vyberte si databázu';
$strSelectAll = 'Označiť všetko';
$strSelectFields = 'Zvoliť pole (najmenej jedno):';
$strSelectNumRows = 'v dotaze';
$strSelectTables = 'Vybrať Tabuľky';
$strSend = 'Pošli';
$strServerChoice = 'Voľba serveru';
$strServerVersion = 'Verzia serveru';
$strSetEnumVal = 'Ak je pole typu "enum" alebo "set", prosím zadávajte hodnoty v tvare: \'a\',\'b\',\'c\'...<br />Ak dokonca porebujete zadať spätné lomítko ("\") alebo apostrof ("\'") pri týchto hodnotách, zadajte ich napríklad takto \'\\\\xyz\' alebo \'a\\\'b\'.';
$strShow = 'Ukázať';
$strShowAll = 'Zobraziť všetko';
$strShowCols = 'Zobraziť stĺpce';
$strShowColor = 'Zobraziť farbu';
$strShowGrid = 'Zobraziť mriežku';
$strShowingRecords = 'Ukázať záznamy ';
$strShowPHPInfo = 'Zobraziť informácie o PHP';
$strShowTableDimension = 'Zobraziť rozmery tabuliek';
$strShowTables = 'Zobraziť tabuľky';
$strShowThisQuery = ' Zobraziť tento dotaz znovu ';
$strSingly = '(po jednom)';
$strSize = 'Veľkosť';
$strSort = 'Triediť';
$strSpaceUsage = 'Zabrané miesto';
$strSplitWordsWithSpace = 'Slová sú rozdelené medzerou (" ").';
$strSQL = 'SQL';
$strSQL = 'SQL';
$strSQLQuery = 'SQL dotaz';
$strSQLResult = 'výsledok SQL';
$strStatement = 'Údaj';
$strStrucCSV = 'CSV dáta';
$strStrucData = 'Štruktúru a dáta';
$strStrucDrop = 'Pridaj \'vymaž tabuľku\'';
$strStrucExcelCSV = 'CSV pre Ms Excel dáta';
$strStrucOnly = 'Iba štruktúru';
$strStructure = 'Štruktúra';
$strStructPropose = 'Navrhnúť štruktúru tabuľky';
$strSubmit = 'Odošli';
$strSuccess = 'SQL dotaz bol úspešne vykonaný';
$strSum = 'Celkom';

$strTable = 'tabuľka ';
$strTableComments = 'Komentár k tabuľke';
$strTableEmpty = 'Tabuľka je prázdna!';
$strTableHasBeenDropped = 'Tabuľka %s bola odstránená';
$strTableHasBeenEmptied = 'Tabuľka %s bola vyprázdená';
$strTableHasBeenFlushed = 'Tabuľka %s bola vyprázdnená';
$strTableMaintenance = 'Údržba tabuľky';
$strTables = '%s tabuľka(y)';
$strTableStructure = 'Štruktúra tabuľky pre tabuľku';
$strTableType = 'Typ tabuľky';
$strTextAreaLength = ' Toto možno nepojde upraviť,<br /> kôli svojej dĺžke ';
$strTheContent = 'Obsah Vášho súboru bol vložený.';
$strTheContents = 'Obsah súboru prepíše obsah vybranej tabuľky v riadkoch s identickým primárnym alebo unikátnym kľúčom.';
$strTheTerminator = 'Ukončenie polí.';
$strTotal = 'celkovo';
$strType = 'Typ';

$strUncheckAll = 'Odznačiť všetko';
$strUnique = 'Unikátny';
$strUnselectAll = 'Odznačiť všetko';
$strUpdatePrivMessage = 'Boli aktualizované privilégia pre %s.';
$strUpdateProfile = 'Aktualizovať profil:';
$strUpdateProfileMessage = 'Profil bol aktualizovaný.';
$strUpdateQuery = 'Aktualizovať dotaz';
$strUsage = 'Využitie';
$strUseBackquotes = ' Použiť opačný apostrof pri názvoch tabuliek a polí ';
$strUser = 'Používateľ';
$strUserEmpty = 'Meno používateľa je prázdne!';
$strUserName = 'Meno používateľa';
$strUsers = 'Používatelia';
$strUseTables = 'Použiť tabuľky';

$strValue = 'Hodnota';
$strViewDump = 'Zobraziť dump (schému) tabuľky';
$strViewDumpDB = 'Zobraziť dump (schému) databázy';

$strWelcome = 'Vitajte v %s';
$strWithChecked = 'Výber:';
$strWrongUser = 'Zlé používateľské meno alebo heslo. Prístup zamietnutý.';

$strYes = 'Áno';

$strZip = '"zo zipované"';


// To translate

$strRelationNotWorking = 'The additional Features for working with linked Tables have been deactivated. To find out why click %shere%s.';  //to translate
$strAllTableSameWidth = 'display all Tables with same width?';  //to translate
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
