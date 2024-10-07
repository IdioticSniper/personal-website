<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/incl/main/header.php');
// grab last.fm info
$lastfm_username = 's0uperfuzz';
$lastfm_api_key = '0c0702bcacedde7a246f2ecde7e4f56d';
$url = 'https://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user=' . $lastfm_username . '&api_key=' . $lastfm_api_key . '&format=xml&limit=20';
$xml = file_get_contents($url);
$xml = new SimpleXMLElement($xml);
?>

<div class="container" style="background-color: #191919;color: #FFFFFF;border: 1px solid #ffffff;">
	<div style="background-color: #383838;float: left; margin-left: 10px;border: 1px solid #FFFFFF;width:385px;display: block;padding:5px">Recently Played Traxx</div>
	<div style="float: left;margin-left: 10px;width: 395px;height: 230px;border: 1px solid #FFFFFF;font-size: 11px;overflow:scroll;display: block;">
		<ul>
		<?php
		if(isset($xml->recenttracks->track[0]['nowplaying'])) { $now_playing = true; } else { $now_playing = false; }
		foreach($xml->recenttracks->track as $track) {
			echo '<li>' . $track->artist . ' - ' . $track->name; if(!isset($track['nowplaying'])) { echo ' (' . $track->{'date'} . ')'; } else { echo ' (now playing) '; } echo '</li>';
		}
		?>
		</ul>
	</div>
	
	<div style="background-color: #383838;margin-left: 420px;border: 1px solid #FFFFFF;width:366px;padding: 5px;display: block">Info stuff</div>
	<div style="margin-left: 420px;width: 370px;height: 224px;border: 1px solid #FFFFFF;font-size: 12px;display: block;padding: 3px">
		<p>Welcome to my website, I'm just a random 14 year old from Chile. There's not a lot of stuff to check out at the moment... this is just my corner of random stuff, hosted on a friend's webserver.</p>
		<p>If you wanna know what the heck I'm up to, check <a href="http://blog.idsniper.xyz">the blog</a>. I try to post as often as I can.</p>
		<hr>
		<ul>
			<li>Interests: Music, Videogames, photography, video making</li>
			<li>Favorite Artists: too many</li>
		</ul>
	</div>
	
	<br>

	<div style="background-color: #383838;border: 1px solid #FFFFFF;width:98.5%;padding: 5px;display: block">Site Updates</div>
	<div style="width: 99%;height: 200px;border: 1px solid #FFFFFF;font-size: 12px;overflow:scroll;display: block;padding: 3px">
		<p>07-10-2024: Hello and welcome to this new site. I know it looks a little fugly, but I'm still trying to work with this new layout. Oh yeah, I'm yet to clean up the HTML and CSS. Probably not happening any time soon unless I finally feel like doing a rewrite 6 years later or something.</p>
		<hr>
		<p>No other news lol</p>
	</div>
</div>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/incl/main/footer.php'); ?>