<?php
/* Copyright (C) 2012	Regis Houssin	<regis.houssin@capnetworks.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

$errors = array(
		'CHARSET' => 'UTF-8',
		'MenuManager' => 'Valmynd framkvæmdastjóri',
		// Errors
		'Error' => 'Villa',
		'Errors' => 'Villur',
		'ErrorBadEMail' => 'Netfang %s  er rangt',
		'ErrorBadUrl' => 'Url %s  er rangt',
		'ErrorLoginAlreadyExists' => 'Innskráning %s  er þegar til.',
		'ErrorGroupAlreadyExists' => 'Group %s  er þegar til.',
		'ErrorRecordNotFound' => 'Upptaka fannst ekki.',
		'ErrorFailToCopyFile' => 'Mistókst að afrita skrá <b>\'%s\'</b> í \'á <b>%s</b> &quot;.',
		'ErrorFailToRenameFile' => 'Ekki tókst að endurnefna skrána \'á <b>%s\'</b> í \'á <b>%s</b> &quot;.',
		'ErrorFailToDeleteFile' => 'Ekki tókst að fjarlægja skrána <b>\' %s \'.</b>',
		'ErrorFailToCreateFile' => 'Ekki tókst að búa til skrána <b>\' %s \'.</b>',
		'ErrorFailToRenameDir' => 'Ekki tókst að endurnefna <b>\'Mappan %s \'</b> í <b>\' %s \'.</b>',
		'ErrorFailToCreateDir' => 'Ekki tókst að búa til möppu <b>\' %s \'.</b>',
		'ErrorFailToDeleteDir' => 'Tókst ekki að eyða <b>\'%</b> möppu <b>s\'.</b>',
		'ErrorFailedToDeleteJoinedFiles' => 'Get ekki eytt aðila vegna þess að það er einhver gekk til liðs við skrá. Fjarlægja tengja skrá fyrst.',
		'ErrorThisContactIsAlreadyDefinedAsThisType' => 'Þessi tengiliður er nú þegar skilgreint og tengiliður fyrir þessa tegund.',
		'ErrorCashAccountAcceptsOnlyCashMoney' => 'Þessi bankareikningur er reiðufé reikning, svo tekur það greiðslur af gerðinni reiðufé eingöngu.',
		'ErrorFromToAccountsMustDiffers' => 'Heimild og markmið bankareikninga verður að vera annað.',
		'ErrorBadThirdPartyName' => 'Bad gildi fyrir þriðja aðila Nafn',
		'ErrorBadCustomerCodeSyntax' => 'Bad setningafræði fyrir kóða viðskiptavina',
		'ErrorCustomerCodeRequired' => 'Viðskiptavinur númer sem þarf',
		'ErrorCustomerCodeAlreadyUsed' => 'Viðskiptavinur sem notaður er þegar',
		'ErrorPrefixRequired' => 'Forskeyti krafist',
		'ErrorUrlNotValid' => 'The website netfang er rangt',
		'ErrorBadSupplierCodeSyntax' => 'Bad setningafræði fyrir birgi kóða',
		'ErrorSupplierCodeRequired' => 'Birgir merkjamál þurfa',
		'ErrorSupplierCodeAlreadyUsed' => 'Birgir sem notaður er þegar',
		'ErrorBadParameters' => 'Bad breytur',
		'ErrorBadValueForParameter' => 'Rangt gildi \'%s &quot;fyrir breytu rangt að\' %s að \'',
		'ErrorBadImageFormat' => 'Mynd skrá hefur ekki studdur snið',
		'ErrorBadDateFormat' => '\'Á %s\' gildi hefur rangt snið dagsetningar',
		'ErrorFailedToWriteInDir' => 'Tókst ekki að skrifa í möppunni %s',
		'ErrorFoundBadEmailInFile' => 'Stofna rangt netfang setningafræði fyrir %s  línur í skrá (td línu %s  með email = %s )',
		'ErrorUserCannotBeDelete' => 'Notandi getur ekki verið eytt. Mega vera það er tengt á Speedealing aðila.',
		'ErrorFieldsRequired' => 'Sumir Nauðsynlegir reitir voru ekki fylltir.',
		'ErrorFailedToCreateDir' => 'Ekki tókst að búa til möppu. Athugaðu að vefþjóninn notandi hefur réttindi til að skrifa inn Speedealing skjöl skrá. Ef viðfang <b>safe_mode</b> er virkt á þessu PHP, athuga hvort Speedealing PHP skrár á nú á netþjóninn notandi (eða hóp).',
		'ErrorNoMailDefinedForThisUser' => 'Nei póstur er skilgreind fyrir þennan notanda',
		'ErrorFeatureNeedJavascript' => 'Þessi aðgerð þarfnast javascript til að virkja til vinnu. Breyting þessi hefur skipulag - sýna.',
		'ErrorTopMenuMustHaveAParentWithId0' => 'A valmynd af gerðinni \'Efst\' má ekki hafa foreldri valmyndinni. Put 0 í valmyndinni foreldri eða veldu Valmynd af gerðinni \'Vinstri\'.',
		'ErrorLeftMenuMustHaveAParentId' => 'A valmynd af gerðinni \'Vinstri\' verða að hafa foreldri kt.',
		'ErrorFileNotFound' => '<b>File %s </b> fannst ekki (Bad slóð, rangt leyfi eða aðgangi hafnað af PHP openbasedir eða safe_mode viðföng)',
		'ErrorDirNotFound' => '<b>Listinn %s </b> fannst ekki (Bad slóð, rangt leyfi eða aðgangi hafnað af PHP openbasedir eða safe_mode viðföng)',
		'ErrorFunctionNotAvailableInPHP' => '<b>Virka %s </b> er krafist fyrir þessa aðgerð, en er ekki til staðar í þessari útgáfu / skipulag af PHP.',
		'ErrorDirAlreadyExists' => 'A möppu með þessu nafni er þegar til.',
		'ErrorFileAlreadyExists' => 'Skrá með þessu nafni er þegar til.',
		'ErrorPartialFile' => 'Skrá fékk ekki alveg við þjóninn.',
		'ErrorNoTmpDir' => 'Tímabundin directy %s  er ekki til.',
		'ErrorUploadBlockedByAddon' => 'Hlaða læst með PHP / Apache tappi.',
		'ErrorFileSizeTooLarge' => 'Skráarstærð er of stór.',
		'ErrorSizeTooLongForIntType' => 'Stærð of lengi fyrir int tegund (%s tölustafir hámark)',
		'ErrorSizeTooLongForVarcharType' => 'Stærð of lengi fyrir gerð band (%s stafir hámark)',
		'ErrorFieldCanNotContainSpecialCharacters' => '<b>Akur %s </b> verður ekki innihalda sértákn.',
		'ErrorNoAccountancyModuleLoaded' => 'Nei bókhalds mát virkja',
		'ErrorExportDuplicateProfil' => 'Þetta profil heiti er þegar til fyrir þennan útflutning setja.',
		'ErrorLDAPSetupNotComplete' => 'Speedealing-LDAP samsvörun er ekki lokið.',
		'ErrorLDAPMakeManualTest' => 'A. LDIF skrá hefur verið búin til í %s . Prófaðu að hlaða það handvirkt úr stjórn lína að hafa meiri upplýsingar um villur.',
		'ErrorCantSaveADoneUserWithZeroPercentage' => 'Get ekki vistað aðgerð með "statut ekki farinn að" ef reitinn "gert með því að" er einnig fyllt.',
		'ErrorRefAlreadyExists' => 'Ref notað sköpun er þegar til.',
		'ErrorPleaseTypeBankTransactionReportName' => 'Vinsamlega sláðu banki berst nafn þar sem framkvæmd er greint (Format ÁÁÁÁMM eða YYYYMMDD)',
		'ErrorRecordHasChildren' => 'Ekki tókst að eyða gögnum þar sem það hefur einhverja barnsins.',
		'ErrorModuleRequireJavascript' => 'Javascript þarf ekki að vera óvirkur til að hafa þennan möguleika að vinna. Til að virkja / slökkva Javascript, fara í valmynd Heim-> Uppsetning-> Skjár.',
		'ErrorPasswordsMustMatch' => 'Bæði tegund lykilorð verður að samsvara hvor öðrum',
		'ErrorContactEMail' => 'Tæknilegt villa kom upp. Vinsamlegast hafðu samband við kerfisstjóra til að fylgja email <b>%s</b> en veita merkjamál villa <b>%s</b> í skilaboðin, eða jafnvel enn betri með því að bæta skjár afrit af þessari síðu.',
		'ErrorWrongValueForField' => 'Wrong gildi fyrir reitinn <b>númer %s </b> (gildi <b>\' %s \'</b> er ekki það sama ríkisstjóratíð <b>reglu %s )</b>',
		'ErrorFieldValueNotIn' => 'Rangt gildi fyrir sviði númer <b>%s (\'%s</b> &quot;gildi er ekki gildi í boði í <b>​​%s</b> svið <b>%s</b> borð)',
		'ErrorFieldRefNotIn' => 'Rangt gildi fyrir sviði númer <b>%s</b> (\'á <b>%s</b> &quot;gildi er ekki <b>%s</b> núverandi dómari)',
		'ErrorsOnXLines' => 'Villur <b>á %s </b> uppspretta línur',
		'ErrorFileIsInfectedWithAVirus' => 'The antivirus program was not \'fær til setja í gildi the skrá (skrá gæti verið sýkt af veiru)',
		'ErrorSpecialCharNotAllowedForField' => 'Sérstafir eru ekki leyfðar í reitinn " %s "',
		'ErrorDatabaseParameterWrong' => 'viðfang <b>\' %s </b> Gagnasafn skipulag hefur a gildi ekki samhæft við notkun Speedealing (verður að hafa <b>gildi\' %s </b> \').',
		'ErrorNumRefModel' => 'Vísun til staðar í gagnagrunninum ( %s ) og er ekki með þessari tala reglu. Fjarlægja færslu eða endurnefna þær tilvísun til að virkja þessa einingu.',
		'ErrorQtyTooLowForThisSupplier' => 'Magn of lág fyrir þessa söluaðila eða ekki verði skilgreind á þessa vöru fyrir þennan birgir',
		'ErrorModuleSetupNotComplete' => 'Skipulag á einingu lítur út fyrir að vera uncomplete. Fara á skipulag - einingar til að ljúka.',
		'ErrorBadMask' => 'Villa á grímu',
		'ErrorBadMaskFailedToLocatePosOfSequence' => 'Villa, gríma án fjölda röð',
		'ErrorBadMaskBadRazMonth' => 'Villa, slæmt endurstilla gildi',
		'ErrorSelectAtLeastOne' => 'Villa. Veldu amk eina færslu.',
		'ErrorProductWithRefNotExist' => 'Vara við \'á <i>%s\'</i> tilvísanir eru ekki til',
		'ErrorDeleteNotPossibleLineIsConsolidated' => 'Eyða ekki hægt vegna þess að færsla er tengd við banka transation sem er conciliated',
		'ErrorProdIdAlreadyExist' => '%s er úthlutað til annars þriðja',
		'ErrorFailedToSendPassword' => 'Tókst ekki að senda lykilorð',
		'ErrorFailedToLoadRSSFile' => 'Ekki til að fá RSS straum. Reyndu að bæta stöðugt MAIN_SIMPLEXMLLOAD_DEBUG ef villuskilaboð veitir ekki nægar upplýsingar.',
		'ErrorPasswordDiffers' => 'Lykilorð ólíkt skaltu slá þau aftur.',
		'ErrorForbidden' => 'Aðgangur neitun. <br> Þú ert að reyna að komast á síðu, svæði eða lögun án þess að vera í staðfesta setu eða sem er ekki leyft að notandinn þinn.',
		'ErrorForbidden2' => 'Leyfi fyrir þetta notandanafn er hægt að skilgreina með Speedealing kerfisstjóra valmynd %s -> %s .',
		'ErrorForbidden3' => 'Það virðist sem Speedealing er ekki notað í gegnum staðfesta setu. Skoðaðu Speedealing skipulag Documentation að vita hvernig á að stjórna authentications (htaccess, mod_auth eða önnur ...).',
		'ErrorNoImagickReadimage' => 'Virka imagick_readimage er ekki að finna í þessari PHP. Engin sýnishorn geta verið fyrir hendi. Stjórnandi getur aftengt þennan flipa valmynd Skipulag - Skjár.',
		'ErrorRecordAlreadyExists' => 'Upptaka er til nú þegar',
		'ErrorCantReadFile' => 'Gat ekki lesið skrána \' %s \'',
		'ErrorCantReadDir' => 'Ekki tókst að lesa skrá \' %s \'',
		'ErrorFailedToFindEntity' => 'Ekki tókst að lesa aðila \' %s \'',
		'ErrorBadLoginPassword' => 'Bad gildi fyrir tenging eða lykilorð',
		'ErrorLoginDisabled' => 'Reikningur þinn hefur verið gerður óvirkur',
		'ErrorFailedToRunExternalCommand' => 'Tókst ekki að keyra ytri stjórn. Athugaðu það er í boði og runnable með PHP netþjóninn. Ef PHP <b>Safe Mode</b> er virkt, athuga hvort stjórn er inni í möppu skilgreind viðföng <b>safe_mode_exec_dir.</b>',
		'ErrorFailedToChangePassword' => 'Ekki tókst að breyta lykilorðinu',
		'ErrorLoginDoesNotExists' => 'Notandi með <b>notandanafn %s </b> fannst ekki.',
		'ErrorLoginHasNoEmail' => 'Þessi notandi hefur ekki netfang. Aðferð aflýst.',
		'ErrorBadValueForCode' => 'Bad gerðir gildi fyrir kóða. Prófaðu aftur með nýtt gildi ...',
		'ErrorBothFieldCantBeNegative' => 'Fields %s og %s getur ekki verið bæði neikvæð',
		'ErrorWebServerUserHasNotPermission' => 'Notandi Reikningur <b>%s</b> notað til að framkvæma vefur framreiðslumaður hefur ekki leyfi til að',
		'ErrorNoActivatedBarcode' => 'Nei barcode gerð virk',
		'ErrUnzipFails' => 'Failed to unzip %s with ZipArchive',
		'ErrNoZipEngine' => 'No engine to unzip %s file in this PHP',
		'ErrorFileMustBeASpeedealingPackage' => 'The file %s must be a Speedealing zip package',
		'ErrorFileRequired' => 'It takes a package Speedealing file',
		'ErrorPhpCurlNotInstalled' => 'The PHP CURL is not installed, this is essential to talk with Paypal',
		'ErrorFailedToAddToMailmanList' => 'Failed to add record to Mailman list or SPIP base',
		'ErrorNewVaueCantMatchOldValue' => 'New value can\'t be equal to old one',
		'ErrorDuplicateTrigger' => 'Un fichier trigger de classe \'<b>%s</b>\' est présent plusieurs fois. Supprimer le doublon du répertoire \'<b>%s</b>\'.',
		'SESSIONEXPIRE' => 'La session est expirée',
		// Warnings
		'WarningMandatorySetupNotComplete' => 'Mandatory setup parameters are not yet defined',
		'WarningSafeModeOnCheckExecDir' => 'Aðvörun, PHP valkostur <b>safe_mode</b> er á svo stjórn verður að vera geymd inni í möppu gefur PHP breytu <b>safe_mode_exec_dir.</b>',
		'WarningAllowUrlFopenMustBeOn' => 'Viðfang <b>allow_url_fopen</b> verður að vera stillt <b>á Virkt</b> í <b>php.ini</b> Filer fyrir að hafa þessa einingu vinna algjörlega. Þú verður að breyta þessari skrá handvirkt.',
		'WarningBuildScriptNotRunned' => '<b>Script %s </b> var ekki enn rann til að byggja upp grafík, eða það er engin gögn til að sýna.',
		'WarningBookmarkAlreadyExists' => 'A bókamerki með þessum titli eða þessa miða (URL) er þegar til.',
		'WarningPassIsEmpty' => 'Viðvörun Skráð lykilorð er tóm. Þetta er öryggis gat. Þú ættir að setja inn lykilorð til að gagnasafninu og breyta conf.php þinni til að endurspegla þessa.',
		'WarningConfFileMustBeReadOnly' => 'Aðvörun, skrá samsk <b>(htdocs / conf / conf.php)</b> er hægt að skrifa of mikið af vefþjóni. Þetta er alvarlegur öryggi gat. Breyta leyfi á skrá til að vera í lesa aðeins ham fyrir stýrikerfi notandi notar netþjóninn. Ef þú notar Windows og FAT snið fyrir diskinn þinn, þú verður að vita að þetta skráarkerfi leyfir ekki að bæta við heimildum á skrá, svo má ekki vera fullkomlega öruggur.',
		'WarningsOnXLines' => 'Viðvaranir <b>á %s </b> uppspretta línur',
		'WarningNoDocumentModelActivated' => 'Engin fyrirmynd fyrir kynslóð skjal hefur verið virkjuð. A líkan vilja vera choosed sjálfgefið þar til þú skoðar einingin uppsetningu þína.',
		'WarningLockFileDoesNotExists' => 'Warning, once setup is finished, you must disable install/migrate tools by adding a file <b>install.lock</b> into directory <b>%s</b>. Missing this file is a security hole.',
		'WarningUntilDirRemoved' => 'Öll öryggi viðvaranir (sýnileg notendum admin eingöngu) verða áfram virkur eins lengi og varnarleysi er til staðar (eða þessi fasti MAIN_REMOVE_INSTALL_WARNING er bætt í Uppsetning-> Annað skipulag).',
		'WarningCloseAlways' => 'Warning, closing is done even if amount differs between source and target elements. Enable this feature with caution.'
);
?>