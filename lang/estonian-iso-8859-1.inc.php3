<?php
/* $Id$ */

$charset = 'iso-8859-1';
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Baiti', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('P�h', 'Esm', 'Tei', 'Kol', 'Nel', 'Ree', 'Lau');
$month = array('Jan', 'Veb', 'M�r', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Det');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d.%m.%Y kell %H:%M:%S';
$timespanfmt = '%s days, %s hours, %s minutes and %s seconds';

$strAPrimaryKey = 'Primaarne v�ti lisati %s';
$strAbortedClients = 'Katkestatud';
$strAccessDenied = 'Ligip��s keelatud';
$strAction = 'Tegevus';
$strAddDeleteColumn = 'Lisa/Kustuta v�lja veerud';
$strAddDeleteRow = 'Lisa/Kustuta kriteeriumirida';
$strAddNewField = 'Lisa uus v�li';
$strAddPriv = 'Lisa uus privileeg';
$strAddPrivMessage = 'Te lisasite uue privileegi.';
$strAddSearchConditions = 'Lisa otsinguparameetrid ("where" lause sisu):';
$strAddToIndex = 'Lisa indeksisse &nbsp;%s&nbsp;rida(ead)';
$strAddUser = 'Lisa uus kasutaja';
$strAddUserMessage = 'Te lisasite uue kasutaja.';
$strAffectedRows = 'M�jutatud read:';
$strAfter = 'Peale %s';
$strAfterInsertBack = 'Mine eelmisele lehele tagasi';
$strAfterInsertNewInsert = 'Lisa j�rgmine uus rida';
$strAll = 'K�ik';
$strAllTableSameWidth = 'kuva k�ik tabelid sama laiusega?';
$strAlterOrderBy = 'Muuda tabeli sorteeringut';
$strAnIndex = 'Indeks lisati %s';
$strAnalyzeTable = 'Anal��si tabelit';
$strAnd = 'ja';
$strAny = 'k�ik';
$strAnyColumn = 'K�ik v�ljad';
$strAnyDatabase = 'K�ik andmebaasid';
$strAnyHost = 'K�ik masinad';
$strAnyTable = 'K�ik tabelid';
$strAnyUser = 'K�ik kasutajad';
$strAscending = 'Kasvav';
$strAtBeginningOfTable = 'Tabeli algusesse';
$strAtEndOfTable = 'Tabeli l�ppu';
$strAttr = 'Parameetrid';

$strBack = 'Tagasi';
$strBeginCut = 'ALUSTA L�IGET';
$strBeginRaw = 'ALUSTA PUHAST';
$strBinary = 'Binaarne';
$strBinaryDoNotEdit = 'Binaarne - �rge muutke';
$strBookmarkDeleted = 'M�rgistus kustutati.';
$strBookmarkLabel = 'Nimetus';
$strBookmarkQuery = 'M�rgistatud SQL p�ring';
$strBookmarkThis = 'M�rgista see SQL p�ring';
$strBookmarkView = 'Vaata ainult';
$strBrowse = 'Vaata';
$strBzError = 'phpMyAdmin ei suutnud pakkida seda andmebaasiv�ljundit kuna Bz2 moodul on vigane selles PHP versioonis. Me soovitame tungivalt oma phpMyAdmini konfiguratsioonifailis panna lipu <code>$cfg[\'BZipDump\']</code> v��rtuseks <code>FALSE</code>. Kui te soovite kasutada Bz2 pakkimist peaksite te oma PHP versiooni uuendama viimasele versioonile. Lugege PHP vea %s raportit t�psemaks infoks.';
$strBzip = '"bzipitud"';

$strCannotLogin = 'Eei suuda MySQL serverisse logida';
$strCantLoadMySQL = 'ei suutnud lugeda MySql laiendit,<br />palun kontrollige PHP konfiguratsiooni.';
$strCantLoadRecodeIconv = 'Ei suuda lugeda iconv v�i recode moodulit mida on vaja t�hetabeli konvertimiseks, konfigureeriga php-d nii, et see sisaldaks antud mooduleid v�i keelake t�hetabeli konvertimine phpMyAdminis.';
$strCantRenameIdxToPrimary = 'Ei suuda muuta indeksit PRIMAARSEKS!';
$strCantUseRecodeIconv = 'Ei suuda kasutada iconv-d v�i libiconvi v�i recode_string funktsiooni kuigi moodul on installitud Kontrollige oma php konfiguratsiooni.';
$strCardinality = 'Kasulikkus';
$strCarriage = 'Reavahetus: \\r';
$strChange = 'Muuda';
$strChangeDisplay = 'Vali v�li mida kuvada';
$strChangePassword = 'Muuda parooli';
$strCharsetOfFile = 'Faili t�hekodeering:';
$strCheckAll = 'M�rgista k�ik';
$strCheckDbPriv = 'Vaata andmebaasi privileege';
$strCheckTable = 'Kontrolli tabelit';
$strChoosePage = 'Palun valige leht muutmiseks';
$strColComFeat = 'N�itan veeru kommentaare';
$strColumn = 'V�li';
$strColumnNames = 'V�ljade nimed';
$strCommand = 'K�sk';
$strComments = 'Kommentaarid';
$strCompleteInserts = 'T�ispikk INSERT';
$strCompression = 'Pakkimine';
$strConfigFileError = 'phpMyAdmin ei suutnud lugeda Teie konfiguratsioonifaili!<br />See v�ib juhtuda kui PHP leiab vea selles v�i PHP ei leia antud faili �les.<br />Palun kutsuga konfiguratsioonifail v�lja otseselt kasutades linki allpool ja lugege PHP veateadet(eid) mis teile �eldakse. Enamustel juhtudel on kuskilt puudu �lakoma v�i semikoolon.<br />Kui Teile kuvatakse t�hi leht on k�ik korras.';
$strConfigureTableCoord = 'Palun seadke koordinaadid tabelile %s';
$strConfirm = 'Kas Te t�esti tahate seda teha?';
$strConnections = '�hendused';
$strCookiesRequired = 'K�psised(cookies) peavad alates sellest momendist lubatud olema.';
$strCopyTable = 'Kopeeri tabel (andmebaas<b>.</b>tabel):';
$strCopyTableOK = 'Tabel %s on kopeeritud andmebaasi %s.';
$strCouldNotKill = 'phpMyAdmin ei suutnud katkestada protsessi %s. T�en�oliselt on see juba suletud.';
$strCreate = 'Loo';
$strCreateIndex = 'Loo indeks &nbsp;%s&nbsp;v�ljadest';
$strCreateIndexTopic = 'Loo uus indeks';
$strCreateNewDatabase = 'Loo uus andmebaas';
$strCreateNewTable = 'Loo uus tabel andmebaasi %s';
$strCreatePage = 'Loo uus leht';
$strCreatePdfFeat = 'PDF-ide tegemine';
$strCriteria = 'Kriteerium';

$strData = 'Andmed';
$strDataOnly = 'Ainult andmed';
$strDatabase = 'Andmebaas ';
$strDatabaseHasBeenDropped = 'Andmebaas %s kustutatud.';
$strDatabaseWildcard = 'Andmebaas (l�hendid lubatud):';
$strDatabases = 'andmebaasid';
$strDatabasesStats = 'Andmebaaside statistika';
$strDataDict = 'Andmes�nastik';
$strDefault = 'Vaikimisi';
$strDelete = 'Kustuta';
$strDeleteFailed = 'Kustutamine eba�nnestus!';
$strDeleteUserMessage = 'Te kustutasite kasutaja %s.';
$strDeleted = 'Rida kustutatud';
$strDeletedRows = 'Kustuta read:';
$strDescending = 'Kahanev';
$strDisabled = 'Keelatud';
$strDisplay = 'N�ita';
$strDisplayFeat = 'Kuva v�imalused';
$strDisplayOrder = 'N�itamise j�rjekord:';
$strDisplayPDF = 'N�ita PDF skeemi';
$strDoAQuery = 'Tee "p�ring n�ite j�rgi" (l�hend: "%")';
$strDoYouReally = 'Kas te t�esti tahate ';
$strDocu = 'Dokumentatsioon';
$strDrop = 'Kustuta';
$strDropDB = 'Kustuta andmebaas ';
$strDropTable = 'Kustuta tabel';
$strDumpXRows = 'P�ri %s rida alustades reast %s.';
$strDumpingData = 'Tabeli andmete salvestamine';
$strDynamic = 'd�naamiline';

$strEdit = 'Muuda';
$strEditPDFPages = 'Muuda PDF lehti';
$strEditPrivileges = 'Muuda privileege';
$strEffective = 'Efektiivne';
$strEmpty = 'T�hjenda';
$strEmptyResultSet = 'MySQL tagastas t�hja tulemuse (s.t. null rida).';
$strEnabled = 'Lubatud';
$strEnd = 'L�pp';
$strEndCut = 'L�PETA L�IGE';
$strEndRaw = 'L�PETA PUHAS';
$strEnglishPrivileges = ' M�rkus: MySQL privileegide nimed on ingliskeelsed ';
$strError = 'Viga';
$strExplain = 'Selete SQL-i';
$strExport = 'Ekspordi';
$strExportToXML = 'Ekspordi XML formaatt';
$strExtendedInserts = 'Laiendatud lisamised';
$strExtra = 'Ekstra';

$strFailedAttempts = 'Eba�nnestunud �ritused';
$strField = 'V�li';
$strFieldHasBeenDropped = 'V�li %s kustutatud';
$strFields = 'V�ljade arv';
$strFieldsEmpty = ' V�ljade loetelu on t�hi! ';
$strFieldsEnclosedBy = 'V�ljad �mbritsetud';
$strFieldsEscapedBy = 'V�ljad varjatud';
$strFieldsTerminatedBy = 'V�ljad eraldatud';
$strFixed = 'parandatud';
$strFlushTable = '�htlusta tabelid ("FLUSH")';
$strFormEmpty = 'Puuduv v��rtus vormis !';
$strFormat = 'Formaat';
$strFullText = 'T�istekstid';
$strFunction = 'Funktsioon';

$strGenBy = 'Genereerija ';
$strGenTime = 'Tegemisaeg';
$strGeneralRelationFeat = 'Peamised seoste v�imalused';
$strGlobalValue = '�ldine v��rtus';
$strGo = 'Mine';
$strGrants = '�igused';
$strGzip = '"gzipitud"';

$strHasBeenAltered = 'on muudetud.';
$strHasBeenCreated = 'on loodud.';
$strHaveToShow = 'Te peate valima v�hemalt �he veeru kuvamiseks';
$strHome = 'Esileht';
$strHomepageOfficial = 'Ametlik phpMyAdmini koduleht';
$strHomepageSourceforge = 'Sourceforge phpMyAdmini allalaadimisleht';
$strHost = 'Masin';
$strHostEmpty = 'Masin on t�hi!';

$strId = 'ID';
$strIdxFulltext = 'T�istekst';
$strIfYouWish = 'Kui soovite lugeda ainult m�ningaid tabeli v�lju, sisestage komaga eraldatud v�ljade loetelu.';
$strIgnore = 'Ignoreeri';
$strImportDocSQL = 'docSQL failide importimine';
$strInUse = 'kasutusel';
$strIndex = 'Indeks';
$strIndexHasBeenDropped = 'Indeks %s kustutatud';
$strIndexName = 'Indeksi nimi&nbsp;:';
$strIndexType = 'Indeksi t��p&nbsp;:';
$strIndexes = 'Indeksid';
$strInsecureMySQL = 'Teie konfiguratsioonifail sisaldab seadeid (root kasutaja ilma paroolita) mis vastab MySQL-i vaikimisi priviligeeritud kasutajale. Kui Teie MySQL-i server jookseb sellise seadega on ta avatud r�nnakutele, soovitav on see turvaauk kiiresti parandada.';
$strInsert = 'Lisa';
$strInsertAsNewRow = 'Lisa uue reana';
$strInsertNewRow = 'Lisa uus rida';
$strInsertTextfiles = 'Lisa andmed tekstifailist tabelisse';
$strInsertedRows = 'Lisatud read:';
$strInstructions = 'sisestused';
$strInvalidName = '"%s" on reserveeritud s�na, te ei saa seda kasutada andmebaasi/tabeli/v�lja nimena.';

$strKeepPass = '�rge muutke parooli';
$strKeyname = 'V�tme nimi';
$strKill = 'Tapa';

$strLandscape = 'Laipilt';
$strLaTeX = 'LaTeX';
$strLength = 'Pikkus';
$strLengthSet = 'Pikkus/V��rtused*';
$strLimitNumRows = 'Ridade arv lehel';
$strLineFeed = 'Real�pp: \\n';
$strLines = 'Read';
$strLinesTerminatedBy = 'Read l�petatud';
$strLinkNotFound = 'Linki ei leitud';
$strLinksTo = 'Lingib ';
$strLocationTextfile = 'tekstifaili asukoht';
$strLogPassword = 'Parool:';
$strLogUsername = 'Kasutajanimi:';
$strLogin = 'Sisselogimine';
$strLogout = 'Logi v�lja';

$strMissingBracket = 'Puuduv �lakoma';
$strModifications = 'Muutused salvestatud';
$strModify = 'Muuda';
$strModifyIndexTopic = 'Muude indeksit';
$strMoreStatusVars = 'Rohkem staatusev��rtusi';
$strMoveTable = 'Vii tabel �le (andmebaas<b>.</b>tabel):';
$strMoveTableOK = 'Tabel %s viidu �le andmebaasi %s.';
$strMySQLCharset = 'MySQLi t�hetabel';
$strMySQLReloaded = 'MySQL uuesti laetud.';
$strMySQLSaid = 'MySQL �tles: ';
$strMySQLServerProcess = 'MySQL %pma_s1% jookseb %pma_s2%\'is - %pma_s3%';
$strMySQLShowProcess = 'N�ita protsesse';
$strMySQLShowStatus = 'N�ita MySQL-i jooksvat informatsiooni';
$strMySQLShowVars = 'N�ita MySQL s�steemseid muutujaid';

$strName = 'Nimi';
$strNext = 'J�rgmine';
$strNo = 'Ei';
$strNoDatabases = 'Pole andmebaase';
$strNoDescription = 'pole kirjeldust';
$strNoDropDatabases = '"DROP DATABASE" k�sud keelatud.';
$strNoExplain = 'J�ta SQL-i seletamine vahele';
$strNoFrames = 'phpMyAdmin on s�bralikum <b>frame toetava</b> browseriga.';
$strNoIndex = 'Indeksit pole defineeritud!';
$strNoIndexPartsDefined = 'Indeksi osad pole defineeritud!';
$strNoModification = 'Ei muudetud';
$strNoPassword = 'Ilma paroolita';
$strNoPhp = 'ilma PHP koodita';
$strNoPrivileges = 'Ei oma �htegi privileegi';
$strNoQuery = '�htegi SQL p�ringut!';
$strNoRights = 'Teil pole piisavalt �igusi, et hetkel siin olla!';
$strNoTablesFound = 'Andmebaasist ei leitud tabeleid.';
$strNoUsersFound = 'Ei leitud �htegi kasutajat.';
$strNoValidateSQL = 'J�ta SQL-i kontroll vahele';
$strNone = 'Pole';
$strNotNumber = 'See pole number!';
$strNotOK = 'Ei ole korras';
$strNotSet = '<b>%s</b> tabelit ei leitud v�i ei eksisteeri %s';
$strNotValidNumber = ' pole korrektne reanumber!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s vaste(t) tabelis <i>%s</i>';
$strNumSearchResultsTotal = '<b>Kokku:</b> <i>%s</i> vaste(t)';
$strNumTables = 'Tabelid';

$strOK = 'Korras';
$strOftenQuotation = 'Kasuta jutum�rke koguaeg. VALIKULISELT t�hendab, et ainult char ja varchar t��pi v�ljad �mbritsetakse m��ratud m�rkidega.';
$strOperations = 'Tegevused';
$strOptimizeTable = 'Optimiseeri tabelit';
$strOptionalControls = 'Mittekohustuslik. Kontrollib kuidas kirjutada v�i lugeda erim�rke.';
$strOptionally = 'VALIKULISELT';
$strOptions = 'Valikud';
$strOr = 'v�i';
$strOverhead = '�lej��v';

$strPageNumber = 'Lehenumber:';
$strPartialText = 'L�hendatud tekstid';
$strPassword = 'Parool';
$strPasswordEmpty = 'Parool on t�hi!';
$strPasswordNotSame = 'Paroolid ei �hti!';
$strPdfDbSchema = 'Andmebaasi "%s" skeem - lehek�lg %s';
$strPdfInvalidPageNum = 'Defineerimata PDF lehe number!';
$strPdfInvalidTblName = '"%s" tabel ei eksisteeri!';
$strPdfNoTables = 'Pole tabeleid';
$strPerHour = 'tunni kohta';
$strPhp = 'Loo PHP kood';
$strPHP40203 = 'Te kasutate PHP 4.2.3, milles on t�sine viga mitmebaidiste tekstidega (mbstring). Vaadake PHP vearaportit 19404. Seda PHP versiooni ei soovitata kasutada phpMyAdminiga.';
$strPHPVersion = 'PHP versioon';
$strPmaDocumentation = 'phpMyAdmini dokumentatsioon';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> konstant peab teie konfiguratsioonifailis m��ratud olema!';
$strPortrait = 'Portreepilt';
$strPos1 = 'Algus';
$strPrevious = 'Eelmine';
$strPrimary = 'Primaarne';
$strPrimaryKey = 'Primaarne v�ti';
$strPrimaryKeyHasBeenDropped = 'Primaarne v�ti kustutatud';
$strPrimaryKeyName = 'Primaarse v�tme nimi peab olema... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>peab</b> olema ja <b>ainult</b> olema primaarse v�tme nimi!)';
$strPrint = 'Prindi';
$strPrintView = 'Tr�kivaade';
$strPrivileges = 'Privileegid';
$strProcesslist = 'Protsessinimekiri';
$strProperties = 'Seaded';
$strPutColNames = 'Pange v�ljade nimed esimesse ritta';

$strQBE = 'P�ring n�ite j�rgi';
$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQueryOnDb = 'SQL-p�ring andmebaasist <b>%s</b>:';
$strQueryStatistics = '<b>P�ringu statistika</b>: Alates stardist, %s p�ringut on saadetud serverile.';
$strQueryType = 'P�ringu t��p';

$strReType = 'Sisesta uuesti';
$strReceived = 'Saadud';
$strRecords = 'Kirjeid';
$strReferentialIntegrity = 'Kontrolli p�rinevust:';
$strRelationalSchema = 'Seoseskeem';
$strRelationNotWorking = 'Lisav�imalused t��tamiseks lingitud tabelitega on deaktiveeritud. Et lugeda miks see nii on, vajutage %ssiia%s.';
$strRelationView = 'P�rinevuse vaade';
$strReloadFailed = 'MySQL taaslaadimine eba�nnestus.';
$strReloadMySQL = 'Taaslae MySQL';
$strRememberReload = '�rge unustage serverit taaslaadida.';
$strRenameTable = 'Nimeta tabel �mber';
$strRenameTableOK = 'Tabel %s on �mber nimetatud %s';
$strRepairTable = 'Paranda tabelit';
$strReplace = 'Asenda';
$strReplaceTable = 'Asenda tabeli andmed failiga';
$strReset = 'T�hista';
$strRevoke = 'V�ta tagasi';
$strRevokeGrant = 'V�ta n�udmine tagasi';
$strRevokeGrantMessage = 'Te v�tsite privileegi andmise %s -le tagasi';
$strRevokeMessage = 'Te v�tsite tagasi privileegid %s-lt';
$strRevokePriv = 'V�tke privileegid';
$strRowLength = 'Rea pikkus';
$strRowSize = ' rea suurus ';
$strRows = 'Ridu';
$strRowsFrom = 'read alates';
$strRowsModeHorizontal = 'horisontaalselt';
$strRowsModeOptions = 'n�ita %s and korda pealkirju iga %s j�rel';
$strRowsModeVertical = 'vertikaalselt';
$strRowsStatistic = 'Rea statistika';
$strRunQuery = 'Lae p�ring';
$strRunSQLQuery = 'P�ri SQL p�ring(uid) andmebaasist %s';
$strRunning = 'jookseb masinas %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'On v�imalus, et te leidsite vea SQL parseris. Palun kontrollige oma p�ringut t�psemalt ja kontrollige, et jutum�rgid/�lakomad oleks korrektselt l�petatud. Veel on v�imalik, et te loete sisse faili kus on binaarne info v�ljaspool varjestatud tekstiala. Samuti v�iksite te proovida oma p�ringut MySQLi k�sureal. MySQLi viga v�ljastatakse p�ringu all, kui seal t�esti on m�ni viga, siis see v�ib aidata teil leida vea algp�hjuseid. Kui teil on peale seda ikka veel probleeme v�i kui mu parser keeldub t��tamast ning MySQL k�surida t��tab, siis palun v�hendage oma p�ringuid �ksiku p�ringuni, mis p�hjustab probleeme ja sisestage vea raport koos viga p�hjustanud p�ringuga L�IGET sektsioonis allpool:';
$strSQLParserUserError = 'Tundub, et teie SQL p�ringus on viga. MySQLi serveri error peaks ilmuma allpool, kui seal on midagi, siis peaks see teil aitama leia vea p�hjust.';
$strSQLQuery = 'SQL-p�ring';
$strSQLResult = 'SQL tulemus';
$strSQPBugInvalidIdentifer = 'Vigane identifikaator';
$strSQPBugUnclosedQuote = 'Sulgemata jutum�rk/�lakoma';
$strSQPBugUnknownPunctuation = 'Tundmatu suunav tekst';
$strSave = 'Salvesta';
$strScaleFactorSmall = 'Skalaarfaktor on liiga v�ike, et skeem mahuks �hele lehele.';
$strSearch = 'Otsi';
$strSearchFormTitle = 'Otsi andmebaasist';
$strSearchInTables = 'Otsi tabeli(te)st:';
$strSearchNeedle = 'S�na(d) v�i v��rtus(ed) otsinguks (l�hend: "%"):';
$strSearchOption1 = 'v�hemalt �ks s�nadest';
$strSearchOption2 = 'k�ik s�nadest';
$strSearchOption3 = 't�pne fraas';
$strSearchOption4 = 'regulaaravaldisena';
$strSearchResultsFor = 'Otsingu tulemused "<i>%s</i>" %s:';
$strSearchType = 'Leia:';
$strSelect = 'Vali';
$strSelectADb = 'Valige andmebaas';
$strSelectAll = 'M�rgista k�ik';
$strSelectFields = 'Vali v�ljad (v�hemalt �ks):';
$strSelectNumRows = 'p�ringus';
$strSelectTables = 'Vali tabelid';
$strSend = 'Salvesta failina';
$strSent = 'Saadetud';
$strServer = 'Server %s';
$strServerChoice = 'Serveri valik';
$strServerStatus = 'Jooksev informatsioon';
$strServerStatusUptime = 'See MySQL server on k�inud %s. K�ivitusaeg %s.';
$strServerTabVariables = 'Muutujad';
$strServerTabProcesslist = 'Protsessid';
$strServerTrafficNotes = '<b>Serveri liiklus</b>: Need tabelid n�itavad v�rguliikluse statistikat selle MySQL serveri jaoks alates tema k�ivitamisest.';
$strServerVars = 'Serveri muutujad ja seaded.';
$strServerVersion = 'Serveri versioon';
$strSessionValue = 'Sessiooni v��rtus';
$strSetEnumVal = 'Kui v�lja t��p on "enum" v�i "set", palun sisestage v��rtused kasutades j�rgmist paigutust: \'a\',\'b\',\'c\'...<br />Kui te peate lisama kaldkriipsu ("\") v�i �lakoma ("\'") sinna paigutusse, varjestage see tagurpidi kaldkriipsuga (n�iteks \'\\\\xyz\' v�i \'a\\\'b\').';
$strShow = 'N�ita';
$strShowAll = 'N�ita k�iki';
$strShowColor = 'N�ita v�rvi';
$strShowCols = 'N�ita v�lju';
$strShowDatadictAs = 'Andmes�nastiku formaat';
$strShowGrid = 'N�ita v�rgustiku';
$strShowPHPInfo = 'N�ita PHP informatsiooni';
$strShowTableDimension = 'N�ita tabelite dimensiooni';
$strShowTables = 'N�ita tabeleid';
$strShowThisQuery = ' N�ita p�ringut siin uuesti ';
$strShowingRecords = 'N�ita ridu';
$strSingly = '(�ksikult)';
$strSize = 'Suurus';
$strSort = 'Sorteeri';
$strSpaceUsage = 'Ruumiv�tt';
$strSplitWordsWithSpace = 'S�nad on eraldatud t�hikuga (" ").';
$strStatement = 'Parameerid';
$strStatus = 'Staatus';
$strStrucCSV = 'CSV andmed';
$strStrucData = 'Struktuur ja andmed';
$strStrucDrop = 'Lisa \'drop table\'';
$strStrucExcelCSV = 'CSV Ms Exceli jaoks';
$strStrucOnly = 'Ainult struktuur';
$strStructPropose = 'Soovita tabeli struktuuri';
$strStructure = 'Struktuur';
$strSubmit = 'Vali';
$strSuccess = 'Teie SQL p�ring t�ideti edukalt';
$strSum = 'Summa';

$strTable = 'Tabel';
$strTableComments = 'Tabeli kommentaarid';
$strTableEmpty = 'Tabeli nimi on t�hi!';
$strTableHasBeenDropped = 'Tabel %s kustutatud';
$strTableHasBeenEmptied = 'Tabel %s t�hjendatud';
$strTableHasBeenFlushed = 'Tabel %s �htlustatud';
$strTableMaintenance = 'Tabeli hooldus';
$strTableOfContents = 'Sisukord';
$strTableStructure = 'Struktuur tabelile';
$strTableType = 'Tabeli t��p';
$strTables = '%s tabel(it)';
$strTextAreaLength = ' Oma suuruse t�ttu<br /> v�ib see v�li olla mittemuudetav ';
$strTheContent = 'Teie faili sisu on lisatud.';
$strTheContents = 'Faili sisu asendab valitud tabeli sisu ridades kus on identsed primaarsed v�i unikaalsed v�tmed.';
$strTheTerminator = 'V�ljade eraldaja.';
$strThreadSuccessfullyKilled = 'Protsess %s katkestati edukalt.';
$strTime = 'Aeg';
$strTotal = 'kokku';
$strTotalUC = 'Kokku';
$strTraffic = 'Liiklus';
$strType = 'T��p';

$strUncheckAll = 'Puhasta k�ik';
$strUnique = 'Unikaalne';
$strUnselectAll = 'Puhasta k�ik';
$strUpdatePrivMessage = 'Te uuendasite privileege %s-l.';
$strUpdateProfile = 'Uuendatav profiil:';
$strUpdateProfileMessage = 'Profiil uuendatud.';
$strUpdateQuery = 'Uuenda p�ringut';
$strUsage = 'Kasutus';
$strUseBackquotes = 'Kasutage tagurpidi kaldkriipse tabelites v�i tabelinimedes';
$strUseTables = 'Kasuta tabeleid';
$strUser = 'Kasutaja';
$strUserEmpty = 'Kasutajanimi on t�hi!';
$strUserName = 'Kasutajanimi';
$strUsers = 'Kasutajad';

$strValidateSQL = 'Kontrolli SQL-i';
$strValidatorError = 'SQL-i valideerijat ei suudetud avada. Palun kontrollige, et te olete installinud vastavad php moodulid nagu on kirjeldatud %sdokumentatsioonis%s.';
$strValue = 'V��rtus';
$strVar = 'Muutuja';
$strViewDump = 'Vaata tabeli v�ljundit(skeemi)';
$strViewDumpDB = 'Vaata andmebaasi v�ljundit (skeemi)';

$strWebServerUploadDirectory = 'webiserveri �leslaadimiskataloogi';
$strWebServerUploadDirectoryError = 'Kataloog mille Te �leslaadimiseks s�ttisite ei ole ligip��setav';
$strWelcome = 'Tere tulemast %s';
$strWithChecked = 'Valitud:';
$strWrongUser = 'Vale kasutajanimi/parool. Ligip��s keelatud.';

$strYes = 'Jah';

$strZip = '"zipitud"';

// To translate
$strAdministration = 'Administration'; //to translate
$strFlushPrivilegesNote = 'Note: phpMyAdmin gets the users\' privileges directly from MySQL\'s privilege tables. The content of this tables may differ from the privileges the server uses if manual changes have made to it. In this case, you should %sreload the privileges%s before you continue.'; //to translate
$strGlobalPrivileges = 'Global privileges'; //to translate
$strGrantOption = 'Grant'; //to translate
$strPrivDescAllPrivileges = 'Includes all privileges except GRANT.'; //to translate
$strPrivDescAlter = 'Allows altering the structure of existing tables.'; //to translate
$strPrivDescCreateDb = 'Allows creating new databases and tables.'; //to translate
$strPrivDescCreateTbl = 'Allows creating new tables.'; //to translate
$strPrivDescCreateTmpTable = 'Allows creating temporary tables.'; //to translate
$strPrivDescDelete = 'Allows deleting data.'; //to translate
$strPrivDescDropDb = 'Allows dropping databases and tables.'; //to translate
$strPrivDescDropTbl = 'Allows dropping tables.'; //to translate
$strPrivDescExecute = 'Allows running stored procedures; Has no effect in this MySQL version.'; //to translate
$strPrivDescFile = 'Allows importing data from and exporting data into files.'; //to translate
$strPrivDescGrant = 'Allows adding users and privileges without reloading the privilege tables.'; //to translate
$strPrivDescIndex = 'Allows creating and dropping indexes.'; //to translate
$strPrivDescInsert = 'Allows inserting and replacing data.'; //to translate
$strPrivDescLockTables = 'Allows locking tables for the current thread.'; //to translate
$strPrivDescMaxConnections = 'Limits the number of new connections the user may open per hour.';
$strPrivDescMaxQuestions = 'Limits the number of queries the user may send to the server per hour.';
$strPrivDescMaxUpdates = 'Limits the number of commands that change any table or database the user may execute per hour.';
$strPrivDescProcess3 = 'Allows killing processes of other users.'; //to translate
$strPrivDescProcess4 = 'Allows viewing the complete queries in the process list.'; //to translate
$strPrivDescReferences = 'Has no effect in this MySQL version.'; //to translate
$strPrivDescReplClient = 'Gives the right to the user to ask where the slaves / masters are.'; //to translate
$strPrivDescReplSlave = 'Needed for the replication slaves.'; //to translate
$strPrivDescReload = 'Allows reloading server settings and flushing the server\'s caches.'; //to translate
$strPrivDescSelect = 'Allows reading data.'; //to translate
$strPrivDescShowDb = 'Gives access to the complete list of databases.'; //to translate
$strPrivDescShutdown = 'Allows shutting down the server.'; //to translate
$strPrivDescSuper = 'Allows connectiong, even if maximum number of connections is reached; Required for most administrative operations like setting global variables or killing threads of other users.'; //to translate
$strPrivDescUpdate = 'Allows changing data.'; //to translate
$strPrivDescUsage = 'No privileges.'; //to translate
$strPrivilegesReloaded = 'The privileges were reloaded successfully.'; //to translate
$strResourceLimits = 'Resource limits'; //to translate
$strUserOverview = 'User overview'; //to translate
$strZeroRemovesTheLimit = 'Note: Setting these options to 0 (zero) removes the limit.'; //to translate

$strPasswordChanged = 'The Password for %s was changed successfully.'; // to translate

$strDeleteAndFlush = 'Delete the users and reload the privileges afterwards.'; //to translate
$strDeleteAndFlushDescr = 'This is the cleanest way, but reloading the privileges may take a while.'; //to translate
$strDeleting = 'Deleting %s'; //to translate
$strJustDelete = 'Just delete the users from the privilege tables.'; //to translate
$strJustDeleteDescr = 'The &quot;deleted&quot; users will still be able to access the server as usual until the privileges are reloaded.'; //to translate
$strReloadingThePrivileges = 'Reloading the privileges'; //to translate
$strRemoveSelectedUsers = 'Remove selected users'; //to translate
$strRevokeAndDelete = 'Revoke all active privileges from the users and delete them afterwards.'; //to translate
$strRevokeAndDeleteDescr = 'The users will still have the USAGE privilege until the privileges are reloaded.'; //to translate
$strUsersDeleted = 'The selected users have been deleted successfully.'; //to translate

$strAddPrivilegesOnDb = 'Add privileges on the following database'; //to translate
$strAddPrivilegesOnTbl = 'Add privileges on the following table'; //to translate
$strColumnPrivileges = 'Column-specific privileges'; //to translate
$strDbPrivileges = 'Database-specific privileges'; //to translate
$strLocalhost = 'Local';
$strLoginInformation = 'Login Information'; //to translate
$strTblPrivileges = 'Table-specific privileges'; //to translate
$strThisHost = 'This Host'; //to translate
$strUserNotFound = 'The selected user was not found in the privilege table.'; //to translate
$strUserAlreadyExists = 'The user %s already exists!'; //to translate
$strUseTextField = 'Use text field'; //to translate

$strNoUsersSelected = 'No users selected.'; //to translate
$strDropUsersDb = 'Drop the databases that have the same names as the users.'; //to translate
$strAddedColumnComment = 'Added comment for column';  //to translate
$strWritingCommentNotPossible = 'Writing of comment not possible';  //to translate
$strAddedColumnRelation = 'Added relation for column';  //to translate
$strWritingRelationNotPossible = 'Writing of relation not possible';  //to translate
$strImportFinished = 'Import finished';  //to translate
$strFileCouldNotBeRead = 'File could not be read';  //to translate
$strIgnoringFile = 'Ignoring file %s';  //to translate
$strThisNotDirectory = 'This was not a directory';  //to translate
$strAbsolutePathToDocSqlDir = 'Please enter the absolute path on webserver to docSQL directory';  //to translate
$strImportFiles = 'Import files';  //to translate
$strDBGModule = 'Module';  //to translate
$strDBGLine = 'Line';  //to translate
$strDBGHits = 'Hits';  //to translate
$strDBGTimePerHitMs = 'Time/Hit, ms';  //to translate
$strDBGTotalTimeMs = 'Total time, ms';  //to translate
$strDBGMinTimeMs = 'Min time, ms';  //to translate
$strDBGMaxTimeMs = 'Max time, ms';  //to translate
$strDBGContextID = 'Context ID';  //to translate
$strDBGContext = 'Context';  //to translate
$strCantLoad = 'cannot load %s extension,<br />please check PHP Configuration';  //to translate
$strDefaultValueHelp = 'For default values, please enter just a single value, without backslash escaping or quotes, using this format: a';  //to translate
$strCheckPrivs = 'Check Privileges';  //to translate
$strCheckPrivsLong = 'Check privileges for database &quot;%s&quot;.';  //to translate
$strDatabasesStatsHeavyTraffic = 'Note: Enabling the Database statistics here might cause heavy traffic between the webserver and the MySQL one.';  //to translate
$strDatabasesStatsDisable = 'Disable Statistics';  //to translate
$strDatabasesStatsEnable = 'Enable Statistics';  //to translate
$strJumpToDB = 'Jump to database &quot;%s&quot;.';  //to translate
$strDropSelectedDatabases = 'Drop Selected Databases';  //to translate
$strNoDatabasesSelected = 'No databases selected.';  //to translate
$strDatabasesDropped = '%s databases have been dropped successfully.';  //to translate
$strGlobal = 'global';  //to translate
$strDbSpecific = 'database-specific';  //to translate
$strUsersHavingAccessToDb = 'Users having access to &quot;%s&quot;';  //to translate
$strChangeCopyUser = 'Change Login Information / Copy User';  //to translate
$strChangeCopyMode = 'Create a new user with the same privileges and ...';  //to translate
$strChangeCopyModeCopy = '... keep the old one.';  //to translate
$strChangeCopyModeJustDelete = ' ... delete the old one from the user tables.';  //to translate
$strChangeCopyModeRevoke = ' ... revoke all active privileges from the old one and delete it afterwards.';  //to translate
$strChangeCopyModeDeleteAndReload = ' ... delete the old one from the user tables and reload the privileges afterwards.';  //to translate
$strWildcard = 'wildcard';  //to translate
$strRowsModeFlippedHorizontal = 'horizontal (rotated headers)';//to translate
$strQueryTime = 'Query took %01.4f sec';//to translate
$strDumpComments = 'Include column comments as inline SQL-comments';//to translate
$strDBComment = 'Database comment: ';//to translate
$strQueryFrame = 'Query window';//to translate
$strQueryFrameDebug = 'Debugging information';//to translate
$strQueryFrameDebugBox = 'Active variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nCurrent variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nOpener location: %s\nFrameset location: %s.';//to translate
$strQuerySQLHistory = 'SQL-history';//to translate
$strMIME_MIMEtype = 'MIME-type';//to translate
$strMIME_transformation = 'Browser transformation';//to translate
$strMIME_transformation_options = 'Transformation options';//to translate
$strMIME_transformation_options_note = 'Please enter the values for transformation options using this format: \'a\',\'b\',\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').';//to translate
$strMIME_transformation_note = 'For a list of available transformation options and their MIME-type transformations, click on %stransformation descriptions%s';//to translate
$strMIME_available_mime = 'Available MIME-types';//to translate
$strMIME_available_transform = 'Available transformations';//to translate
$strMIME_without = 'MIME-types printed in italics do not have a seperate transformation function';//to translate
$strMIME_description = 'Description';//to translate
$strMIME_nodescription = 'No Description is available for this transformation.<br />Please ask the author, what %s does.';//to translate
$strMIME_file = 'Filename';//to translate
$strTransformation_image_jpeg__plain = 'Takes an imagefile and outputs a link for it. First options argument is a possible prepended string like http://...';//to translate
$strTransformation_text_plain__formatted = 'Preserves original formatting of the field. No Escaping is done.';//to translate
$strTransformation_text_plain__unformatted = 'Displays HTML code as HTML entities. No HTML formatting is shown.';//to translate
$strTransformation_image_jpeg__link = 'Displays a link to this image (direct blob download, i.e.).';//to translate
$strInnodbStat = 'InnoDB Status';  //to translate
$updComTab = 'Please see Documentation on how to update your Column_comments Table';  //to translate
$strTransformation_image_jpeg__inline = 'Displays a clickable thumbnail; options: width,height in pixels (keeps the original ratio)';  //to translate
$strTransformation_image_png__inline = 'See image/jpeg: inline';  //to translate
$strSQLOptions = 'SQL options';//to translate
$strXML = 'XML';//to translate
$strCSVOptions = 'CSV options';//to translate
$strNoOptions = 'This format has no options';//to translate
$strStatCreateTime = 'Creation';//to translate
$strStatUpdateTime = 'Last update';//to translate
$strStatCheckTime = 'Last check';//to translate
$strPerMinute = 'per minute';//to translate
$strPerSecond = 'per second';//to translate
$strAutomaticLayout = 'Automatic layout';  //to translate
$strDelOld = 'The current Page has References to Tables that no longer exist. Would you like to delete those References?';  //to translate
$strFileNameTemplate = 'File name template';//to translate 
$strFileNameTemplateRemember = 'remember template';//to translate 
$strFileNameTemplateHelp = 'Use __DB__ for database name, __TABLE__ for table name and %sany strftime%s options for time specification, extension will be automagically added. Any other text will be preserved.';//to translate
?>
