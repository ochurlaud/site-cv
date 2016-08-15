#!/bin/sh

cd en_US.utf8/LC_MESSAGES
msgfmt messages.po
cd ../../fr_FR.utf8/LC_MESSAGES
msgfmt messages.po
cd ../..


