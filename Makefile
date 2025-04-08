DATE := $(shell date -Iseconds)

locales/scan:
	find . -type f -iname "*.php" | xgettext --join-existing --no-location --language=PHP --output=locales/es/LC_MESSAGES/messages.po --files-from -

locales/compile:
	msgfmt -o locales/es/LC_MESSAGES/messages.mo locales/es/LC_MESSAGES/messages.po

migration/create:
  USERNAME ?= $(shell bash -c 'read -p "Username: " username; echo $$username')
	touch db/migrations/$(DATE).up.sql
	touch db/migrations/$(DATE).down.sql

migration/migrate:
	sqlite3 db/database.sqlite
