#!/usr/bin/env sh

ps aux | grep localhost:8000 | grep -v grep | awk {'print $2'} | xargs kill -9
ps aux | grep localhost:8001 | grep -v grep | awk {'print $2'} | xargs kill -9