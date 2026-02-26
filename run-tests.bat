@echo off

echo Building Docker image...
docker build -t recruit/php .

echo Running tests...
docker run recruit/php

echo Test completed!
pause