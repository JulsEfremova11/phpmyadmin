<?php
/* $Id$ */

$charset = 'iso-8859-1';
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu');
$month = array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'Nopember', 'Desember');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d. %B %Y jam %H:%M';


$strAccessDenied = 'Akses ditolak';
$strAction = 'Aksi';
$strAddDeleteColumn = 'Tambah/Hapus kolom';
$strAddDeleteRow = 'Tambah/Hapus baris';
$strAddNewField = 'Tambah field baru';
$strAddPriv = 'Tambah hak (privilege) baru';
$strAddPrivMessage = 'Hak (privilege) baru telah ditambah.';
$strAddSearchConditions = 'Tambah syarat pencarian (Argumen untuk WHERE-Statement):';
$strAddToIndex = 'Tambah &nbsp;%s&nbsp;kolom ke indeks';
$strAddUser = 'Tambah User baru';
$strAddUserMessage = 'User baru telah ditambah.';
$strAffectedRows = 'Baris yang bersangkutan:';
$strAfter = 'Sisipkan setelah %s';
$strAfterInsertBack = 'Kembali';
$strAfterInsertNewInsert = 'Sisipkan baris baru';
$strAll = 'Seluruh';
$strAlterOrderBy = 'Urutkan tabel berdasarkan';
$strAnalyzeTable = 'Analisa tabel';
$strAnd = 'dan';
$strAnIndex = 'Indeks telah ditambahkan pada %s';
$strAny = 'Setiap';
$strAnyColumn = 'Setiap kolom';
$strAnyDatabase = 'Setiap database';
$strAnyHost = 'Setiap host';
$strAnyTable = 'Setiap tabel';
$strAnyUser = 'Setiap user';
$strAPrimaryKey = 'Primary key telah ditambahkan pada %s';
$strAscending = 'Urutan naik';
$strAtBeginningOfTable = 'pada awal tabel';
$strAtEndOfTable = 'pada akhir tabel';
$strAttr = 'Atribut';

$strBack = 'Kembali';
$strBinary = 'Biner';
$strBinaryDoNotEdit = 'Biner - jangan di-edit';
$strBookmarkDeleted = 'Bookmark telah dihapus.';
$strBookmarkLabel = 'Judul';
$strBookmarkQuery = 'Bookmark query SQL ';
$strBookmarkThis = 'Bookmark SQL-query ini';
$strBookmarkView = 'Hanya melihat';
$strBrowse = 'Browse';
$strBzip = '"Dikompress dengan BZip"';

$strCantLoadMySQL = 'Gagal loading extensi MySQL,<br />mohon periksa kembali konfigurasi PHP.';
$strCantLoadRecodeIconv = 'Gagal loading iconv atau perubahan kode extension untuk konversi charset diperlukan. Silakan konfigurasikan php untuk mengunakan extensions yang diperlukan atau matikan fasilitas charset conversion di phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Gagal ubah nama Indeks ke PRIMARY!';
$strCantUseRecodeIconv = 'Gagal mengunakan iconv, libiconv atau fungsi recode_string selama extension melapor lagi dalam keadaan di-load. Silakan periksa kembali konfigurasi php.';
$strCardinality = 'Huruf besar atau kecil';
$strCarriage = 'Carriage return: \\r';
$strChange = 'Ubah';
$strChangeDisplay = 'Pilih Field untuk ditampilkan';
$strChangePassword = 'Ubah Kata Sandi';
$strCheckAll = 'Conteng semua';
$strCheckDbPriv = 'Cek Hak Akses dari Database';
$strCheckTable = 'Cek tabel';
$strChoosePage = 'Silakan pilih halaman untuk di-edit';
$strColumn = 'Kolom';
$strColumnNames = 'Nama kolom';
$strComments = 'Komentar';
$strCompleteInserts = 'Penyisipan lengkap';
$strConfigFileError = 'phpMyAdmin gagal membaca file konfigurasi!<br />Hal ini diakibatkan oleh parse error atau file tidak ditemukan.<br />Silakan buka file konfigurasi secara langsung dengan gunakan link dibawah. Mohon perhatikan php error message(s) yang akan tertampil. Serinkali sebuah quote atau semicolon tertinggal.<br />Jika sebuah halaman kosong yang muncul berarti tidak ada masalah.';
$strConfigureTableCoord = 'Silakan konfigurasikan koordinasi untuk tabel %s';
$strConfirm = 'Anda yakin ingin melakukannya?';
$strCookiesRequired = 'Cookies harus diaktifkan mulai dari sini.';
$strCopyTable = 'Salin tabel ke (database<b>.</b>nama tabel):';
$strCopyTableOK = 'Tabel %s telah disalin ke %s.';
$strCreate = 'Buat';
$strCreateIndex = 'Buat indeks pada kolom &nbsp;%s&nbsp;';
$strCreateIndexTopic = 'Buat indeks baru';
$strCreateNewDatabase = 'Buat database baru';
$strCreateNewTable = 'Buat tabel baru pada database %s';
$strCreatePage = 'Buat halaman baru';
$strCriteria = 'Kriteria';

$strData = 'Data';
$strDatabase = 'Database ';
$strDatabaseHasBeenDropped = 'Database %s telah dihapus.';
$strDatabases = 'database';
$strDatabasesStats = 'Statistik dari seluruh Database';
$strDatabaseWildcard = 'Database (wildcards diperbolehkan):';
$strDataOnly = 'Hanya datanya';
$strDefault = 'Default';
$strDelete = 'Hapus';
$strDeleted = 'Baris telah dihapus';
$strDeletedRows = 'Baris yang dihapus:';
$strDeleteFailed = 'Penghapusan gagal!';
$strDeleteUserMessage = 'User %s telah dihapus.';
$strDescending = 'Urutan turun';
$strDisplay = 'Tampilkan';
$strDisplayOrder = 'Urutan tampilan berdasarkan:';
$strDisplayPDF = 'Tampilkan skema PDF';
$strDoAQuery = 'Cari berdasarkan data contoh ("query by example") (wildcard: "%")';
$strDocu = 'Dokumentasi';
$strDoYouReally = 'Anda yakin ingin melakukan ';
$strDrop = 'Hapus Field ini';
$strDropDB = 'Hapus database %s';
$strDropTable = 'Hapus tabel:';
$strDumpingData = 'Dumping data untuk tabel';
$strDumpXRows = 'Dump %s baris dimulai dari baris %s.';
$strDynamic = 'dinamis';

$strEdit = 'Edit';
$strEditPDFPages = 'Edit halaman PDF';
$strEditPrivileges = 'Ubah hak akses (privilege)';
$strEffective = 'Efektif';
$strEmpty = 'Hapus semua Record';
$strEmptyResultSet = 'MySQL balikkan hasil kosong (a.k. baris yang kosong).';
$strEnd = 'Terakhir';
$strEnglishPrivileges = ' Catatan: Nama privilege MySQL adalah dalam bahasa Ingris ';
$strError = 'Error';
$strExplain = 'Jelaskan kode SQL';
$strExport = 'Ekspor';
$strExportToXML = 'Ekspor ke format XML';
$strExtendedInserts = 'Penyisipan diperluas';
$strExtra = 'Ekstra';

$strField = 'Field';
$strFieldHasBeenDropped = 'Field %s telah dihapus';
$strFields = 'Field';
$strFieldsEmpty = ' Jumlah field dalam tabel harus ditentukan! ';
$strFieldsEnclosedBy = 'Field ditutup dengan';
$strFieldsEscapedBy = 'Field dikembalikan oleh';
$strFieldsTerminatedBy = 'Fields diputus oleh';
$strFixed = 'telah diperbaiki';
$strFlushTable = 'Tutup tabel ("FLUSH")';
$strFormat = 'Format';
$strFormEmpty = 'Kurang data dalam form !';
$strFullText = 'Teks Penuh';
$strFunction = 'Fungsi';

$strGenBy = 'Diadakan oleh';
$strGenTime = 'Waktu pembuatan';
$strGo = 'Go';
$strGrants = 'Hak (Grants)';
$strGzip = '"Dikompress dengan GZip"';

$strHasBeenAltered = 'telah dirubah.';
$strHasBeenCreated = 'telah dibuat.';
$strHaveToShow = 'Sedikitnya satu kolom harus dipilih untuk ditampilkan';
$strHome = 'Home';
$strHomepageOfficial = 'Homepage resmi phpMyAdmin';
$strHomepageSourceforge = 'Halaman download phpMyAdmin di Sourceforge';
$strHost = 'Host';
$strHostEmpty = 'Nama Host perlu diisi!';

$strIdxFulltext = 'Teks penuh';
$strIfYouWish = 'Jika Anda hanya ingin meload beberapa kolom dari tabel, gunakan tanda koma sebagai pemisah.';
$strIgnore = 'Abaikan';
$strIndex = 'Indeks';
$strIndexes = 'Indeks';
$strIndexHasBeenDropped = 'Indeks %s telah dihapus';
$strIndexName = 'Nama indeks&nbsp;:';
$strIndexType = 'Tipe indeks&nbsp;:';
$strInsert = 'Sisipkan';
$strInsertAsNewRow = 'Sisipkan sebagai baris baru';
$strInsertedRows = 'Baris yang disisipkan:';
$strInsertNewRow = 'Sisipkan baris baru';
$strInsertTextfiles = 'Sisipkan data baru dari textfile ke dalam tabel';
$strInstructions = 'Instruksi';
$strInUse = 'digunakan';
$strInvalidName = '"%s" adalah kata khusus dan tidak dapat dipergunakan sebagai nama database,tabel atau field.';

$strKeepPass = 'Kata Sandi jangan dirubah';
$strKeyname = 'Keyname';
$strKill = 'Tutup';

$strLength = 'Ukuran Panjang';
$strLengthSet = 'Ukuran Panjang/Nilai*';
$strLimitNumRows = 'Jumlah baris per halaman';
$strLineFeed = 'Linefeed: \\n';
$strLines = 'Garis';
$strLinesTerminatedBy = 'Garis yang diputus oleh';
$strLinkNotFound = 'Link tidak ditemukan';
$strLinksTo = 'Link ke';
$strLocationTextfile = 'Lokasi dari textfile';
$strLogin = 'Login';
$strLogout = 'Logout';
$strLogPassword = 'Kata Sandi:';
$strLogUsername = 'Nama User:';

$strMissingBracket = 'Kekurangan tanda kurung';
$strModifications = 'Modifikasi telah disimpan';
$strModify = 'Ubah';
$strModifyIndexTopic = 'Ubah indeks';
$strMoveTable = 'Pindahkan tabel ke (database<b>.</b>tabel):';
$strMoveTableOK = 'Tabel %s telah dipindahkan ke %s.';
$strMySQLCharset = 'Charset MySQL';
$strMySQLReloaded = 'MySQL telah di-reload.';
$strMySQLSaid = 'MySQL menyatakan: ';
$strMySQLServerProcess = 'MySQL %pma_s1% di %pma_s2% sebagai %pma_s3%';
$strMySQLShowProcess = 'Tampilkan Proses';
$strMySQLShowStatus = 'Tampilkan informasi runtime dari MySQL';
$strMySQLShowVars = 'Tampilkan variabel sistem dari MySQL';

$strName = 'Nama';
$strNbRecords = 'Jumlah baris';
$strNext = 'Berikutnya';
$strNo = 'Tidak';
$strNoDatabases = 'Database tidak ditemukan';
$strNoDescription = 'tanpa deskripsi (gambaran)';
$strNoDropDatabases = 'Perintah "DROP DATABASE" dimatikan.';
$strNoFrames = 'Lebih mudah jika menggunakan phpMyAdmin dengan browser yang <b>mendukung frame</b>.';
$strNoIndex = 'Indeks tidak ditentukan!';
$strNoIndexPartsDefined = 'Tidak ada bagian indeks yang didefinisikan!';
$strNoModification = 'Tidak ada perubahan';
$strNone = 'tanpa';
$strNoPassword = 'Tidak ada Kata Sandi';
$strNoPhp = 'tidak ada kode PHP';
$strNoPrivileges = 'Tidak ada Hak Akses (privilege)';
$strNoQuery = 'Tidak ada query SQL!';
$strNoRights = 'Hak Akses Anda untuk melanjut tidak cukup!';
$strNoTablesFound = 'Tidak ada tabel dalam database.';
$strNotNumber = 'Ini bukan angka!';
$strNotSet = '<b>%s</b> tabel tidak ditemukan atau tidak diset di %s';
$strNotValidNumber = ' tidak ada nomor baris yang berlaku!';
$strNoUsersFound = 'User tidak ditemukan.';
$strNull = 'Kosong';
$strNumSearchResultsInTable = '%s Records dalam tabel <i>%s</i>';
$strNumSearchResultsTotal = '<b>Jumlah:</b> <i>%s</i> records';

$strOftenQuotation = 'Banyak sekali tanda kutip. PILIHAN berarti hanya field dengan tipe char dan varchar yang ditutup oleh karakter "ditutup oleh" tersebut.';
$strOperations = 'Operasi';
$strOptimizeTable = 'Optimasikan tabel';
$strOptionalControls = 'Pilihan. Mengontrol cara tulis dan baca karakter khusus.';
$strOptionally = 'PILIHAN';
$strOptions = 'Setingan';
$strOr = 'Atau';
$strOverhead = 'Kelebihan (Overhead)';

$strPageNumber = 'Halaman no.:';
$strPartialText = 'Teks yang disingkat';
$strPassword = 'Kata Sandi';
$strPasswordEmpty = 'Kata Sandi kosong!';
$strPasswordNotSame = 'Kata Sandi tidak sama!';
$strPdfDbSchema = 'Skema dari database "%s"  - Halaman %s';
$strPdfInvalidPageNum = 'Nomor halaman PDF tidak ditentukan!';
$strPdfInvalidTblName = 'Tabel "%s" tidak ditemukan!';
$strPhp = 'Buat kode PHP';
$strPHPVersion = 'Versi PHP';
$strPmaDocumentation = 'Dokumentasi phpMyAdmin';
$strPmaUriError = 'Directif <tt>$cfg[\'PmaAbsoluteUri\']</tt> WAJIB diset dalam file konfigurasi!';
$strPos1 = 'Awal';
$strPrevious = 'Sebelumnya';
$strPrimary = 'PRIMARY';
$strPrimaryKey = 'Primary key';
$strPrimaryKeyHasBeenDropped = 'Primary key telah dihapus';
$strPrimaryKeyName = 'Nama primary key harus... PRIMARY!';
$strPrimaryKeyWarning = '(Tanda nama "PRIMARY" <b>wajib</b> sebagai nama satu-satunya dan <b>hanya</b> sebagai Primary Key saja!)';
$strPrintView = 'Pandangan cetak';
$strPrivileges = 'Hak Akses (Privilege)';
$strProperties = 'Properties';

$strQBE = 'Cari berdasarkan data contoh';
$strQBEDel = 'Hapus';
$strQBEIns = 'Sisipkan';
$strQueryOnDb = 'Query SQL dalam database <b>%s</b>:';

$strRecords = 'Records';
$strReferentialIntegrity = 'Cek integritas referensial:';
$strRelationView = 'Tampilan relasi';
$strReloadFailed = 'MySQL gagal di-reload.';
$strReloadMySQL = 'Reload MySQL';
$strRememberReload = 'Ingatlah untuk me-reload server.';
$strRenameTable = 'Ubah nama tabel menjadi ';
$strRenameTableOK = 'Nama tabel %s telah diubah menjadi %s';
$strRepairTable = 'Perbaiki tabel';
$strReplace = 'Ganti';
$strReplaceTable = 'Ganti data tabel dengan file';
$strReset = 'Reset';
$strReType = 'Ketik ulang';
$strRevoke = 'Cabut';
$strRevokeGrant = 'Cabut hak akses berstatus Grant';
$strRevokeGrantMessage = 'Hak akses berstatus Grant untuk %s telah dicabut';
$strRevokeMessage = 'Hak akses untuk %s telah dicabut';
$strRevokePriv = 'Cabut hak akses (privilege)';
$strRowLength = 'Ukuran panjang baris';
$strRows = 'Baris';
$strRowsFrom = 'baris dimulai dari';
$strRowSize = ' Ukuran baris ';
$strRowsModeHorizontal = 'horisontal';
$strRowsModeOptions = 'diatur dengan urutan %s dan ulang header setelah %s sel.';
$strRowsModeVertical = 'vertikal';
$strRowsStatistic = 'Statistik Baris';
$strRunning = 'dalam mode %s';
$strRunQuery = 'Jalankan query SQL';
$strRunSQLQuery = 'Jalankan query SQL pada database %s';

$strSave = 'Simpan';
$strScaleFactorSmall = 'Faktor skala yang dipilih terlalu kecil untuk dimuat dalam skema satu halaman';
$strSearch = 'Cari';
$strSearchFormTitle = 'Cari dalam database';
$strSearchInTables = 'Cari dalam tabel:';
$strSearchNeedle = 'Kata atau nilai yang dicari (wildcard: "%"):';
$strSearchOption1 = 'sedikitnya salah satu kata';
$strSearchOption2 = 'seluruh kata';
$strSearchOption3 = 'kata-kata yang sama';
$strSearchOption4 = 'sebagai regular expression';
$strSearchResultsFor = 'Hasil pencarian untuk "<i>%s</i>" %s:';
$strSearchType = 'Temukan:';
$strSelect = 'Pilih';
$strSelectADb = 'Silakan pilih database';
$strSelectAll = 'Pilih semua';
$strSelectFields = 'Pilih fields (minimal satu):';
$strSelectNumRows = 'dalam susunan pemeriksaan';
$strSelectTables = 'Pilih tabel';
$strSend = 'Kirim ke';
$strServerChoice = 'Pilih Server';
$strServerVersion = 'Versi Server';
$strSetEnumVal = 'Jika tipe field sama dengan "enum" atau "set", silakan isi nilai dengan format: \'a\',\'b\',\'c\'...<br />Jika sebuah backslash ("\") atau satu tanda kutip ("\'") diperlukan, tanda tersebut perlu ditutupi dengan tanda backslash (seb. contoh \'\\\\xyz\' atau \'a\\\'b\').';
$strShow = 'Tampilkan';
$strShowAll = 'Tampilkan semua';
$strShowColor = 'Tampilkan warna';
$strShowCols = 'Tampilkan kolom';
$strShowGrid = 'Tampilkan garis';
$strShowingRecords = 'Tampilan baris';
$strShowPHPInfo = 'Tampilkan informasi tentang PHP';
$strShowTableDimension = 'Tampilkan ukuran dari tabel';
$strShowTables = 'Tampilkan tabel';
$strShowThisQuery = ' Tampilkan ulang query SQL ';
$strSingly = '(unik)';
$strSize = 'Ukuran';
$strSort = 'Urutkan';
$strSpaceUsage = 'Penggunaan space';
$strSplitWordsWithSpace = 'Kata diputus oleh karakter spasi (" ").';
$strSQL = 'SQL';
$strSQLQuery = 'Query SQL';
$strSQLResult = 'Hasil SQL';
$strStartingRecord = 'Baris mulai';
$strStatement = 'Pernyataan';
$strStrucCSV = 'Data CSV';
$strStrucData = 'Struktur dan data';
$strStrucDrop = 'Tambah \'Hapus tabel\'';
$strStrucExcelCSV = 'CSV untuk data Ms Excel';
$strStrucOnly = 'Struktur saja';
$strStructPropose = 'Ajukan struktur tabel';
$strStructure = 'Struktur';
$strSubmit = 'Kirim';
$strSuccess = 'Perintah SQL telah diproses dengan sukses';
$strSum = 'Jumlah';

$strTable = 'Tabel ';
$strTableComments = 'Komentar tabel';
$strTableEmpty = 'Nama tabel kosong!';
$strTableHasBeenDropped = 'Tabel %s telah dihapus';
$strTableHasBeenEmptied = 'Tabel %s telah dikosongkan';
$strTableHasBeenFlushed = 'Tabel %s telah ditutup dan data tersimpan';
$strTableMaintenance = 'Pemeliharaan tabel';
$strTables = 'tabel %s';
$strTableStructure = 'Struktur dari tabel';
$strTableType = 'Tipe tabel';
$strTextAreaLength = ' Sehubungan ukuran yang sangat panjang,<br /> field ini tidak dapat di-edit ulang. ';
$strTheContent = 'Isi file telah disisipkan.';
$strTheContents = 'Isi file menggantikan isi tabel yang dipilih dengan primary atau unique key.';
$strTheTerminator = 'Pemutus field.';
$strTotal = 'jumlah';
$strType = 'Tipe';

$strUncheckAll = 'Uncheck semua';
$strUnique = 'Unik';
$strUnselectAll = 'Unselect semua';
$strUpdatePrivMessage = 'Hak Akses (privilege) untuk %s telah di-update.';
$strUpdateProfile = 'Update profil user:';
$strUpdateProfileMessage = 'Profil user telah di-update.';
$strUpdateQuery = 'Update proses pencarian';
$strUsage = 'Penggunaan';
$strUseBackquotes = 'Gunakan backquotes dengan nama tabel dan nama field';
$strUser = 'User';
$strUserEmpty = 'Username masih kosong!';
$strUserName = 'Username';
$strUsers = 'User';
$strUseTables = 'Gunakan tabel';

$strValue = 'Nilai';
$strViewDump = 'Tampilkan Dump (Skema) dari tabel';
$strViewDumpDB = 'Tampilkan Dump (Skema) dari database';

$strWelcome = 'Selamat Datang di %s';
$strWithChecked = 'Yang ditanda:';
$strWrongUser = 'Username/Kata Sandi salah. Akses ditolak.';

$strYes = 'Ya';

$strZip = '"Dikompress dengan Zip"';

// To translate
$strRelationNotWorking = 'Fasilitas tambahan untuk bekerja dengan tabel yang di-link di tidakaktifkan. Untuk mengetahui kenapa klik %disini%s.';
$strAllTableSameWidth = 'Tampilkan semua tabel dengan ukuran lebar yang sama?';
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
