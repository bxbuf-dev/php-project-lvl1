install:
	composer install

brain-games:
	./bin/brain-games

validate:
	composer validate

autoload:
	composer dump-autoload

lint:
	composer run-script phpcs -- --standard=PSR12 src bin
