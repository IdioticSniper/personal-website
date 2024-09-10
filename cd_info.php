<?php

// cd_info.php
// Gets CD info from musicmatch-ssl.xboxlive.com and turns it into a WMP 7-8 compatible format (Tunes.com)
// By IdioticSniper w/ help from JContoso

header('Content-Type: text/plain');
if(!isset($_GET['cd'])) { die('A CD TOC was not provided.'); }
$_GET['cd'] = str_replace(' ', '+', $_GET['cd']);

// Look for CD info through Xbox Live service
$cd_xml = file_get_contents('http://musicmatch-ssl.xboxlive.com/cdinfo/GetMDRCD.aspx?locale=80a&geoid=2e&version=12.0.19041.4355&userlocale=340a&CD=' . $_GET['cd']);

// Create XML element
$cd_xml_element = new SimpleXMLElement($cd_xml);
?>
[CD]
Mode=0
<?= isset($cd_xml_element->{"MDR-CD"}->albumTitle) ? 'Title=' . $cd_xml_element->{"MDR-CD"}->albumTitle . "\r\n" : NULL; ?>
<?= isset($cd_xml_element->{"MDR-CD"}->albumArtist) ? 'Artist=' . $cd_xml_element->{"MDR-CD"}->albumArtist . "\r\n" : NULL; ?>
<?= isset($cd_xml_element->{"MDR-CD"}->label) ? 'Copyright=' . $cd_xml_element->{"MDR-CD"}->label . "\r\n" : NULL; ?>
<?= isset($cd_xml_element->{"MDR-CD"}->label) ? 'Label=' . $cd_xml_element->{"MDR-CD"}->label . "\r\n" : NULL; ?>
<?= isset($cd_xml_element->{"MDR-CD"}->releaseDate) ? 'ReleaseDate=' . substr($cd_xml_element->{"MDR-CD"}->releaseDate, 0, 4) . "\r\n" : NULL; ?>
<?= isset($cd_xml_element->{"MDR-CD"}->largeCoverParams) ? 'CoverLarge=' . str_replace('https', 'http', $cd_xml_element->{"MDR-CD"}->largeCoverParams) . "\r\n" : NULL; ?>
<?php
$i = 1;
foreach($cd_xml_element->{"MDR-CD"}->track as $cd_track) {
	echo 'Track' . $i . '=' . $cd_track->trackTitle . "\r\n";
	$i++;
}
?>
Menu1=Rollingstone.com Search::http://rollingstone.tunes.com/sections/artists/text/searchresults.asp?afl=mscd&SearchFor=<?= $cd_xml_element->{"MDR-CD"}->albumArtist . "\r\n"; ?>
Menu2=Tunes.com Search::http://www.tunes.com/search/SearchResults.asp?SearchType=0&SearchString=<?= $cd_xml_element->{"MDR-CD"}->albumArtist; ?>&from=mscd 