#!/bin/bash

#Astro & Space Sciences
#Introduction to Database Management Systems

reset

getGrade() {
    python GetData.py | grep -A1 'Intro. to Database Manag. Sys.' > data

    sed -i '1d' data

    if grep -q '3.000' data
    then
        echo "It's still not out :("
    else
		sed -i 's/<TD CLASS="dddefault">//' data
        sed -i 's/<\/TD>//' data
        echo -n "It's out and the grade is "
        cat data
        paplay /usr/share/sounds/ubuntu/notifications/Amsterdam.ogg
        paplay /usr/share/sounds/ubuntu/notifications/Amsterdam.ogg
        paplay /usr/share/sounds/ubuntu/notifications/Amsterdam.ogg
    fi
}

COUNTER=0
while [  $COUNTER -lt 100 ]; do
	clear
	echo "Checking time:" `date`
    getGrade
    sleep 20m
    let COUNTER=COUNTER+1
done
