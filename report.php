<?php
echo '<!DOCTYPE html>
';
echo '<html lang="en">
';
echo '<head>
';
echo '<meta charset="UTF-8">
';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">
';
echo '<title>Résultats Nmap</title>
';
echo '<style>
';
echo 'body { font-family: Arial, sans-serif; margin: 20px; background-color: #f4f4f9; color: #333; }
';
echo 'pre { background: #282c34; color: #61dafb; padding: 15px; border-radius: 5px; overflow-x: auto; }
';
echo 'h1 { color: #20232a; }
';
echo '</style>
';
echo '</head>
';
echo '<body>
';
echo '<h1>Résultats du Scan Nmap</h1>
';
echo '<pre>
';
echo 'Starting Nmap 7.93 ( https://nmap.org ) at 2025-01-26 13:38 UTC
Nmap scan report for cluster029.hosting.ovh.net (51.91.236.255)
Host is up (0.014s latency).
Not shown: 98 filtered tcp ports (no-response)
PORT    STATE SERVICE   VERSION
80/tcp  open  http      OVHcloud
443/tcp open  ssl/https OVHcloud
2 services unrecognized despite returning data. If you know the service/version, please submit the following fingerprints at https://nmap.org/cgi-bin/submit.cgi?new-service :
==============NEXT SERVICE FINGERPRINT (SUBMIT INDIVIDUALLY)==============
SF-Port80-TCP:V=7.93%I=7%D=1/26%Time=67963AE6%P=x86_64-pc-linux-gnu%r(GetR
SF:equest,14F3,"HTTP/1\.1\x20404\x20Not\x20Found\r\ndate:\x20Sun,\x2026\x2
SF:0Jan\x202025\x2013:38:46\x20GMT\r\ncontent-type:\x20text/html;\x20chars
SF:et=utf8\r\ncontent-length:\x204958\r\nx-ovh-webhosting-id:\x2065554c53d
SF:c3538d92418943405355b5f\r\npragma:\x20no-cache\r\ncache-control:\x20no-
SF:store,\x20no-cache,\x20must-revalidate,\x20post-check=0,\x20pre-check=0
SF:\r\nserver:\x20OVHcloud\r\nx-iplb-request-id:\x2058BAB703:CA8E_335BECFF
SF::0050_67963AE0_2E195:3F67\r\nx-iplb-instance:\x2052432\r\nconnection:\x
SF:20close\r\n\r\n<html\x20xml:lang=\"en-EN\"\x20lang=\"en-EN\">\n\x20\x20
SF:\x20\x20<head>\n\x20\x20\x20\x20\x20\x20\x20\x20<title>Site\x20not\x20i
SF:nstalled\x20-\x20OVHcloud</title>\n\x20\x20\x20\x20\x20\x20\x20\x20<met
SF:a\x20name=\"viewport\"\x20content=\"width=device-width\">\n\x20\x20\x20
SF:\x20\x20\x20\x20\x20<meta\x20http-equiv=\"refresh\"\x20content=\"90\">\
SF:n\x20\x20\x20\x20\x20\x20\x20\x20<meta\x20http-equiv=\"Content-Type\"\x
SF:20content=\"text/html;\x20charset=utf-8\">\n\x20\x20\x20\x20\x20\x20\x2
SF:0\x20<meta\x20http-equiv=\"Content-Language\"\x20content=\"en-EN\">\n\x
SF:20\x20\x20\x20\x20\x20\x20\x20<meta\x20name=\"robots\"\x20content=\"noi
SF:ndex,\x20nofollow\">\n\x20\x20\x20\x20\x20\x20\x20\x20<meta\x20name=\"d
SF:escription\"\x20\x20qtlid=\"283606\"\x20content=\"Site\x20not\x20instal
SF:led\">\n\x20\x20\x20\x20\x20\x20\x20\x20<met")%r(HTTPOptions,14F3,"HTTP
SF:/1\.1\x20404\x20Not\x20Found\r\ndate:\x20Sun,\x2026\x20Jan\x202025\x201
SF:3:38:46\x20GMT\r\ncontent-type:\x20text/html;\x20charset=utf8\r\nconten
SF:t-length:\x204958\r\nx-ovh-webhosting-id:\x20e268a34169b13b64c3419846ae
SF:b7df8d\r\npragma:\x20no-cache\r\ncache-control:\x20no-store,\x20no-cach
SF:e,\x20must-revalidate,\x20post-check=0,\x20pre-check=0\r\nserver:\x20OV
SF:Hcloud\r\nx-iplb-request-id:\x2058BAB703:E394_335BECFF:0050_67963AE6_2E
SF:987:3F67\r\nx-iplb-instance:\x2052432\r\nconnection:\x20close\r\n\r\n<h
SF:tml\x20xml:lang=\"en-EN\"\x20lang=\"en-EN\">\n\x20\x20\x20\x20<head>\n\
SF:x20\x20\x20\x20\x20\x20\x20\x20<title>Site\x20not\x20installed\x20-\x20
SF:OVHcloud</title>\n\x20\x20\x20\x20\x20\x20\x20\x20<meta\x20name=\"viewp
SF:ort\"\x20content=\"width=device-width\">\n\x20\x20\x20\x20\x20\x20\x20\
SF:x20<meta\x20http-equiv=\"refresh\"\x20content=\"90\">\n\x20\x20\x20\x20
SF:\x20\x20\x20\x20<meta\x20http-equiv=\"Content-Type\"\x20content=\"text/
SF:html;\x20charset=utf-8\">\n\x20\x20\x20\x20\x20\x20\x20\x20<meta\x20htt
SF:p-equiv=\"Content-Language\"\x20content=\"en-EN\">\n\x20\x20\x20\x20\x2
SF:0\x20\x20\x20<meta\x20name=\"robots\"\x20content=\"noindex,\x20nofollow
SF:\">\n\x20\x20\x20\x20\x20\x20\x20\x20<meta\x20name=\"description\"\x20\
SF:x20qtlid=\"283606\"\x20content=\"Site\x20not\x20installed\">\n\x20\x20\
SF:x20\x20\x20\x20\x20\x20<met");
==============NEXT SERVICE FINGERPRINT (SUBMIT INDIVIDUALLY)==============
SF-Port443-TCP:V=7.93%T=SSL%I=7%D=1/26%Time=67963AEC%P=x86_64-pc-linux-gnu
SF:%r(GetRequest,1497,"HTTP/1\.1\x20404\x20Not\x20Found\r\nDate:\x20Sun,\x
SF:2026\x20Jan\x202025\x2013:38:52\x20GMT\r\nContent-Type:\x20text/html;\x
SF:20charset=utf8\r\nContent-Length:\x204958\r\nConnection:\x20close\r\nX-
SF:OVH-Webhosting-Id:\x20e646b77b1cfe8d1a212d4cb889ce23af\r\npragma:\x20no
SF:-cache\r\ncache-control:\x20no-store,\x20no-cache,\x20must-revalidate,\
SF:x20post-check=0,\x20pre-check=0\r\nServer:\x20OVHcloud\r\n\r\n<html\x20
SF:xml:lang=\"en-EN\"\x20lang=\"en-EN\">\n\x20\x20\x20\x20<head>\n\x20\x20
SF:\x20\x20\x20\x20\x20\x20<title>Site\x20not\x20installed\x20-\x20OVHclou
SF:d</title>\n\x20\x20\x20\x20\x20\x20\x20\x20<meta\x20name=\"viewport\"\x
SF:20content=\"width=device-width\">\n\x20\x20\x20\x20\x20\x20\x20\x20<met
SF:a\x20http-equiv=\"refresh\"\x20content=\"90\">\n\x20\x20\x20\x20\x20\x2
SF:0\x20\x20<meta\x20http-equiv=\"Content-Type\"\x20content=\"text/html;\x
SF:20charset=utf-8\">\n\x20\x20\x20\x20\x20\x20\x20\x20<meta\x20http-equiv
SF:=\"Content-Language\"\x20content=\"en-EN\">\n\x20\x20\x20\x20\x20\x20\x
SF:20\x20<meta\x20name=\"robots\"\x20content=\"noindex,\x20nofollow\">\n\x
SF:20\x20\x20\x20\x20\x20\x20\x20<meta\x20name=\"description\"\x20\x20qtli
SF:d=\"283606\"\x20content=\"Site\x20not\x20installed\">\n\x20\x20\x20\x20
SF:\x20\x20\x20\x20<meta\x20http-equiv=\"cache-control\"\x20content=\"no-c
SF:ache\">\n\x20\x20\x20\x20\x20\x20\x20\x20<meta\x20http-equiv=\"pragma\"
SF:\x20content=\"")%r(HTTPOptions,1497,"HTTP/1\.1\x20404\x20Not\x20Found\r
SF:\nDate:\x20Sun,\x2026\x20Jan\x202025\x2013:38:52\x20GMT\r\nContent-Type
SF::\x20text/html;\x20charset=utf8\r\nContent-Length:\x204958\r\nConnectio
SF:n:\x20close\r\nX-OVH-Webhosting-Id:\x20c2286ee4e61b742c7cf05e8bb68a4852
SF:\r\npragma:\x20no-cache\r\ncache-control:\x20no-store,\x20no-cache,\x20
SF:must-revalidate,\x20post-check=0,\x20pre-check=0\r\nServer:\x20OVHcloud
SF:\r\n\r\n<html\x20xml:lang=\"en-EN\"\x20lang=\"en-EN\">\n\x20\x20\x20\x2
SF:0<head>\n\x20\x20\x20\x20\x20\x20\x20\x20<title>Site\x20not\x20installe
SF:d\x20-\x20OVHcloud</title>\n\x20\x20\x20\x20\x20\x20\x20\x20<meta\x20na
SF:me=\"viewport\"\x20content=\"width=device-width\">\n\x20\x20\x20\x20\x2
SF:0\x20\x20\x20<meta\x20http-equiv=\"refresh\"\x20content=\"90\">\n\x20\x
SF:20\x20\x20\x20\x20\x20\x20<meta\x20http-equiv=\"Content-Type\"\x20conte
SF:nt=\"text/html;\x20charset=utf-8\">\n\x20\x20\x20\x20\x20\x20\x20\x20<m
SF:eta\x20http-equiv=\"Content-Language\"\x20content=\"en-EN\">\n\x20\x20\
SF:x20\x20\x20\x20\x20\x20<meta\x20name=\"robots\"\x20content=\"noindex,\x
SF:20nofollow\">\n\x20\x20\x20\x20\x20\x20\x20\x20<meta\x20name=\"descript
SF:ion\"\x20\x20qtlid=\"283606\"\x20content=\"Site\x20not\x20installed\">\
SF:n\x20\x20\x20\x20\x20\x20\x20\x20<meta\x20http-equiv=\"cache-control\"\
SF:x20content=\"no-cache\">\n\x20\x20\x20\x20\x20\x20\x20\x20<meta\x20http
SF:-equiv=\"pragma\"\x20content=\"");

Service detection performed. Please report any incorrect results at https://nmap.org/submit/ .
Nmap done: 1 IP address (1 host up) scanned in 21.13 seconds
';
echo '</pre>
';
echo '</body>
';
echo '</html>
';
?>