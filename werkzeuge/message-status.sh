#!/bin/bash
# connect different servers
for s in gw{dom{0,m,s},po{00..09},ia{0..4}}.itz.uni-halle.de ; do
        echo $s
        # execute a find in domain, wpgate and posoffice directories
        ssh $s find {/srv,}/groupwise/{domain,po{m,s}}/{wpgate/gwia/,}{send,receive,wpcsin,wpcsout} -type f -exec ls -lt {} + 2>/dev/null
        echo end $s
        echo
done
