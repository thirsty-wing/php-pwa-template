# Localization

Localization is accomplished using PHP's built-in gettext() function (aliased to the \_() function). Localized text files are stored within the locales folder and are generated.

To scan the source code for new usage of the gettext() function and add entires to the localized text file, run `make locales/scan`. Then translations can be added to the files manually or by some other method.

Once the new translations are added to the files, they must be compiled by running `make locales/compile`, after which those tranlations should be seen in the application.
