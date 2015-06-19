<?php
//http://www.pontikis.net/tip/?id=29
/**
 * Convert a date(time) string to another format or timezone
 *
 * DateTime::createFromFormat requires PHP >= 5.3
 *
 * @param string $dt
 * @param string $tz1
 * @param string $df1
 * @param string $tz2
 * @param string $df2
 * @return string
 */
function date_convert($dt, $tz1, $df1, $tz2, $df2) {
  $res = '';
  if(!in_array($tz1, timezone_identifiers_list())) { // check source timezone
    trigger_error(__FUNCTION__ . ': Invalid source timezone ' . $tz1, E_USER_ERROR);
  } elseif(!in_array($tz2, timezone_identifiers_list())) { // check destination timezone
    trigger_error(__FUNCTION__ . ': Invalid destination timezone ' . $tz2, E_USER_ERROR);
  } else {
    // create DateTime object
    $d = DateTime::createFromFormat($df1, $dt, new DateTimeZone($tz1));
    // check source datetime
    if($d && DateTime::getLastErrors()["warning_count"] == 0 && DateTime::getLastErrors()["error_count"] == 0) {
      // convert timezone
      $d->setTimeZone(new DateTimeZone($tz2));
      // convert dateformat
      $res = $d->format($df2);
    } else {
      trigger_error(__FUNCTION__ . ': Invalid source datetime ' . $dt . ', ' . $df1, E_USER_ERROR);
    }
  }
  return $res;
}
?>

Examples:
Convert datetime 28/10/2013 02:00:00 in Europe/Athens to UTC timastamp:
		date_convert('28/10/2013 02:00:00', 'Europe/Athens', 'd/m/Y H:i:s', 'UTC', 'YmdHis');
It returns: 20131028020000

Convert UTC timastamp 20131028000000 to Europe/Athens datetime with format d/m/Y H:i:s:
		date_convert('20131028020000', 'UTC', 'YmdHis', 'Europe/Athens', 'd/m/Y H:i:s');
It returns: 28/10/2013 02:00:00