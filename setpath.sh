#!/bin/bash
# import this file into the current shell to set up the administration environment

dir=$( cd $( dirname ${BASH_SOURCE[0]}) && pwd )/actions;
if [[ ":$PATH:" != *":$dir:"* ]]; then
    echo " - setting path...">&2
    export PATH=$dir:$PATH
fi

echo " - creating/updating bash-complete function...">&2
_gwShell() {
    #//local cur prev pprev
    local php=/usr/bin/env php
    if [[ $(($COMP_CWORD)) -ge 0 ]]; then export cur="${COMP_WORDS[$(($COMP_CWORD))]}"; else export cur=; fi
    if [[ $(($COMP_CWORD-1)) -ge 0 ]]; then export prev="${COMP_WORDS[$(($COMP_CWORD-1))]}"; else export prev=; fi
    if [[ $(($COMP_CWORD-2)) -ge 0 ]]; then export pprev="${COMP_WORDS[$(($COMP_CWORD-2))]}"; else export pprev=; fi
    COMPREPLY=()
    local opts=$($php $dir/../gw.shell.complete $COMP_LINE )
    COMPREPLY=($(compgen -W "${opts}" -- ${cur}))
    #compopt -o nospace;
    return 0
}

#echo -n " - searching binaries... ">&2
#gwcompletes=""
#cActions=0
#for f in $dir/*; do
#    let "cActions++"
#    gwcompletes="$gwcompletes $( basename $f)"
#done;
gwcompletes=$(ls -1 $dir/);
#echo "$cActions found.">&2
echo " - setting up bash-completition...">&2
complete -o nospace -F _gwShell $gwcompletes
echo " - defining pretty printer alias"
alias pretty='python -m json.tool'
echo -e "\tpipe programmatic output into \"pretty\" to format json output: eg: user.object ... | pretty "
echo " ->ready.">&2
echo
 

