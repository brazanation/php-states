<?php

$allStates = file_csv('https://raw.githubusercontent.com/datasets-br/state-codes/master/data/br-state-codes.csv');

foreach ($allStates as $item) {
	$uf =  (object) $item;
	$ascName = iconv('utf-8', 'ascii//TRANSLIT', $uf->name);
	$clasName = str_replace(' ', '', ucwords($ascName));
	if ($uf->idIBGE) file_put_contents("$clasName.php", "<?php

namespace Brazanation\States;

class $clasName extends State
{
    const CODE = {$uf->idIBGE};

    const FULL_NAME = '{$uf->name}';

    const SHORT_NAME = '{$uf->subdivision}';

    const TIMEZONE = '{$uf->timeZone}';

    public function __construct()
    {
        parent::__construct(
            self::FULL_NAME,
            self::SHORT_NAME,
            self::CODE,
            self::TIMEZONE
        );
    }
}
");

}


/**
 * Reads entire CSV file into an array (or associative array or pair of header-content arrays).
 * Like build-in file() function, but to CSV handling.
 * @param $file string filename.
 * @param $opt not-null (can be empty) associative array of options (sep,enclosure,escape,head,assoc,limit)
 * @param $length integer same as in fgetcsv().
 * @param $context resource same as in fopen().
 * @return array (as head and assoc options).
 */
function file_csv($file, $opt=[], $length=0, resource $context=NULL) {
	$opt = array_merge(['sep'=>',', 'enclosure'=>'"', 'escape'=>"\\", 'head'=>false, 'assoc'=>true, 'limit'=>0], $opt);
	$header = NULL;
	$n=0; $nmax=(int)$opt['limit'];
	$lines = [];
	$h = $context? fopen($file,'r',false,$context):  fopen($file,'r');
	while( $h && !feof($h) && (!$nmax || $n<$nmax) )
		if ( ($r=fgetcsv($h,$length,$opt['sep'],$opt['enclosure'],$opt['escape'])) && $n++>0 )
			$lines[] = $opt['assoc']? array_combine($header,$r): $r;
		elseif ($n==1)
			$header = $r;
	return $opt['head']? array($header,$lines): $lines;
}

