<?php
$db_handle = pg_connect("host=ec2-18-211-41-246.compute-1.amazonaws.com dbname=d9u6bsoigamjmu user=teuqsaumeqnebe password=e57afbe83eb4e8780a2298194244ae797f4be8b08b2a20df238a77d0d7cbf0b5");
if ($db_handle) {
echo 'Connection attempt succeeded.';
} else {
echo 'Connection attempt failed.';
}
pg_close($db_handle);
?>