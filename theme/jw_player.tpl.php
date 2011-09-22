<?php
/**
 * @file
 * Display the JW Player.
 *
 * Variables available:
 * - $html_id: Unique id generated for each video
 * - $width: Width of the video player
 * - $height: Height of the video player
 * - $file_url: The url of the file to be played
 *
 * @see template_preprocess_jw_player()
 */
?>
<div class="jwplayer-video">
  <video id="<?php print $html_id; ?>" width="<?php print $width;?>" height="<?php print $height;?>" controls="controls" preload="auto">';
    <source src="<?php print $file_url; ?>" type="video/mp4" codecs="avc1.42E01E, mp4a.40.2" />
  </video>
</div>