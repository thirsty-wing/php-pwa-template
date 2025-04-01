locales/scan:
	find . -type f -iname "*.php" | xgettext --join-existing --no-location --language=PHP --output=locales/es/LC_MESSAGES/messages.po --files-from -

locales/compile:
	msgfmt -o locales/es/LC_MESSAGES/messages.mo locales/es/LC_MESSAGES/messages.po
