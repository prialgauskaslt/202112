.PHONY: run
run:
	docker run --rm -v $(dir $(abspath $(firstword $(MAKEFILE_LIST)))):/app --user $(shell id -u):$(shell id -g) composer/composer:latest install
	./vendor/bin/sail up -d
	./vendor/bin/sail php artisan key:generate --force
	./vendor/bin/sail composer install
	./vendor/bin/sail composer dump-autoload
	./vendor/bin/sail php artisan config:cache
	./vendor/bin/sail php artisan route:cache
	./vendor/bin/sail php artisan view:cache
	./vendor/bin/sail php artisan migrate:fresh --seed --force

.PHONY: stop
stop:
	./vendor/bin/sail down
