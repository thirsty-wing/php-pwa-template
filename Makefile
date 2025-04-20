locales/scan:
	find . -type f -iname "*.php" | xgettext --join-existing --no-location --language=PHP --output=document-root/locales/es/LC_MESSAGES/messages.po --files-from -

locales/compile:
	msgfmt -o document-root/locales/es/LC_MESSAGES/messages.mo document-root/locales/es/LC_MESSAGES/messages.po
