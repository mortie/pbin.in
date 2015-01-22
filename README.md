pbin.in
=======

pbin.in is a pastebin-like service primarily intended for code, but also suitable for any kind of text sharing you may want to do.

Usage
-----

**Website**:

1. Go to pbin.in, write or paste text into the big text area.

2. If you want to name your paste, write a name in the filename input. If you want a random paste ID, leave the field empty.

3. Press submit, and share the link with whoever you want.

**Command line client**:

Install the command line client as such:

```
	sudo wget https://raw.githubusercontent.com/mortie/pbin.in/master/util/pbin -O /usr/bin/pbin
```

After installation, use the command as such:

```
	pbin <file> [name]
```

Advantages over other similar services
--------------------------------------

* **Shorter URLs**: pbin.in's domain name is only 7 characters long. Both pastebin.com and hastebin.com are 12 characters long. In addittion, pbin.in is a much newer service, so for the moment, most paste IDs are as short as one or two characters long. The latter is due to pbin.in being new, but it will always have a shorter domain name.

* **Open source**: All of pbin.in's source code is available to everyone on GitHub. Hastebin is too, but pastebin isn't.

* **Named URLs**: In addittion to randomly generated paste IDs, pbin.in allows you to specify a name for your paste, so that the paste can be accessed from pbin.com/[name].

* **Automated syntax highlighting**: Code you paste will automatically have its syntax highlighted, without you having to select a language, thanks to [the highlight.js project](http://highlightjs.org).

* **Ridiculously simple**: I mean, just look at the source code. Could it be simpler?

Disadvantages
-------------

Of course, pbin.in isn't perfect for everyone's needs.

* **Small**: pbin.in is for the time being my own personal side project. I can't promise not to take the website offline or remove pastes some time in the future. This shouldn't be a concern most of the time, but don't use this service to host mission critical documents, okay?

* **No user account system**: There's no way to get a list of or delete pastes you've made, or other features associated with user accounts.
