#!/bin/sh

mv -v ../img ../img3 | cat
mv -v ../img2 ../img | cat
mv -v ../img3 ../img2 | cat

echo "Switched Quality..."