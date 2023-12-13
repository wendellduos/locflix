# Locflix

A simple, web-based application, intended to allow a more user-friendly experience when watching TV shows or movies stored locally.

The original idea came up after noticing my girlfriend had some trouble finding where the files of her favorite in my computer. Thankfully, in addition to this application, Fedora allows for an easy set up of Web Apps, even adding fancy icons, providing an almost native-like experience.

The main functionalities are:

- Autosaving last watched movies/shows.
- Picking up from where you left off in an episode.
- User-friendly UI.

## Folder Scheme

Movies and shows should be stored in similarly named `movies` and `shows` folders inside a `contents` folder.
Folders and files are preferably named using the [kebab case](https://developer.mozilla.org/en-US/docs/Glossary/Kebab_case) naming convention.

## Mobile Support

Locflix is meant to work in desktop environments, but tittle screens can access the created server through the local network, browsing to **http://yourIpAdress:5252/**.
