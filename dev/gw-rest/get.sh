#!/bin/bash

svr=`cat server.cfg`
echo $svr
for fname in $(ls *.xsd *.wadl)
do
	echo REC $fname
	curl https://$svr/gwadmin-service/$fname -k > $fname
done

