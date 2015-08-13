<?hh // strict

function test(): void {
  var_dump(is_null(5));
  var_dump(is_null(null));
  var_dump(is_string(5));
  var_dump(is_int(5));

  $x = array(1,2,3);
  var_dump(idx($x, 0));
  var_dump(idx($x, 4));
  var_dump(idx($x, 0, 10));
  var_dump(idx($x, 4, 10));
  $n = idx($x, 0, 10);
  var_dump($n);

  $x = array(1, null);
  /* HH_IGNORE_ERROR[2049] */
  /* HH_IGNORE_ERROR[4107] */
  var_dump(array_key_exists(0, $x));
  /* HH_IGNORE_ERROR[2049] */
  /* HH_IGNORE_ERROR[4107] */
  var_dump(array_key_exists(1, $x));
  /* HH_IGNORE_ERROR[2049] */
  /* HH_IGNORE_ERROR[4107] */
  var_dump(array_key_exists(2, $x));
}
