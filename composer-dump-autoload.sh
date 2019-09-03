#!/bin/bash

docker run --rm --interactive --tty \
    --volume $PWD/galeno-app:/app \
    composer dump-autoload
