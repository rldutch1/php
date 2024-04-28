# ----------------------------------------------------------------------------<br />
# Script Author: Robert Holland<br />
# Script Name: getfolders.sh<br />
# Creation Date: Thu Jan 11 2024 09:00:40 GMT-0700 (US Mountain Standard Time)<br />
# Last Modified: 20240423<br />
# Copyright (c)2024<br />
# Purpose: Use rsync to copy specified folders from one server to another.<br />
# Source on using base 10: https://stackoverflow.com/questions/24777597/value-too-great-for-base-error-token-is-08<br />
# ----------------------------------------------------------------------------<br />
<br />
#!/bin/bash<br />
parent=$1 #Parent folder<br />
x=$2 #First argument<br />
y=$3 #Second argument<br />
z=0 #Zero constant to prepend to numbers less than 10<br />
<br />
if [ $# -ne 3 ]<br />
then<br />
clear<br />
echo &quot;*************************************************************************&quot;<br />
echo &quot;*  Enter the folder range that you want to send.&quot;<br />
echo &quot;*  Example to send folders 02 through 04 from the parent folder 202312.&quot;<br />
echo &quot;*  Type: $0 202312 2 4&quot;<br />
echo &quot;*************************************************************************&quot;<br />
else<br />
while [[ $((10#$x)) -le $((10#$y)) ]]<br />
do<br />
  if [ $x -lt 10 ]<br />
  then<br />
  echo &quot;Synching folder $parent/$z$x.&quot; #Prepend zero in front of number less than 10.<br />
  rsync -av /media/rob/8C41-0A68/$parent/&quot;$z$x&quot; rob@servername.example.com:~/Music/all_communication/$parent/<br />
  else<br />
  echo &quot;Synching folder $parent/$x.&quot;<br />
  rsync -av /media/rob/8C41-0A68/$parent/&quot;$x&quot; rob@servername.example.com:~/Music/all_communication/$parent/<br />
  fi<br />
  x=$(( 10#$x + 1 ))<br />
done<br />
echo &quot;Some really cool message.&quot;<br />
fi<br />
<br />
#z=0<br />
#if [ $1 -lt 10 ]<br />
#then<br />
#echo $z$1<br />
#else<br />
#echo $1<br />
#fi<br />
<br />
