<pre>
<?php
while ($ds->valid()){
    $d = $ds->current();
    print_r($d->info());
    $ds->next();
}
?>
</pre>