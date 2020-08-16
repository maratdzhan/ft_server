#!/bin/bash

docker build -t mydock .
docker run -d -p 8888:80 -p 443:443 mydock

# An additional command to run our server without auto-indexing
#docker run -e "INDEX=0" -d -p 8888:80 -p 443:443 mydock
