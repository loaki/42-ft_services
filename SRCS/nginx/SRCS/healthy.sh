ps > test
cat test | grep nginx > /dev/null 
p1=$?
cat test | grep telegraf > /dev/null 
p2=$?
cat test | grep sshd > /dev/null 
p3=$?

if [ $p1 == 1 ] || [ $p2 == 1 ] || [ $p3 == 1 ]
then
    exit 1
fi
exit 0