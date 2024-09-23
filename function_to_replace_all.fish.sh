function replacegroups ;
grep -rl "https:\/\/\(s\|static\)\.werobot\.fr" |\
    xargs sed -i 's/https:\/\/\(s\|static\)\.werobot\.fr/\/proxyPhotos?code=/g';
end

# get captured groups:
function getcapturedgroups;
set t "[\w\.\-\/]"
grep -rl '/proxyPhotos?code=' | xargs sed -nr "s/.*\/proxyPhotos\?code=($t*)((^$t)?.*)?/https:\/\/s.werobot.fr\1/gp"
end

