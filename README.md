# rolle.wtf

**Please note:** I redesigned the site in March, 2016. Check out [rolle.wtf-v2](https://github.com/ronilaukkarinen/rolle.wtf-v2).

Website at [rolle.wtf](http://rolle.wtf). A site where it all comes together. Built with [Modern HTML5 Boilerplate](https://github.com/ronilaukkarinen/modern-html5-boilerplate).

![](https://rolle.design/rolle.wtf.png "Screenshot")

### Cache

I have a simple PHP-cache which reloads every 10 minutes because of the social media feeds. Crontab follows:

````
*/6 * * * * /var/www/rolle.wtf/bin/flushrollewtfcache
````

`flushrollewtfcache` -executable:

````
#!/bin/bash
cd /var/www/rolle.wtf/public_html && wget -q http://rolle.wtf
````

### ToDo
- [x] Add Composer
- [x] Add latest tweet time
- [x] Add latest blog post time RSS in time ago format
- [x] Add DotENV
- [x] Add Todoist API for todo list statistics
- [x] Music section (Last.fm, Bandcamp, Spotify, Songkick, Mikseri...)
- [x] About.me section
- [x] Add more company links, Github etc.
- [x] Movies & TV section (IMDb, Letterboxd, Movli, Foundd, Trakt, Animewatcher etc.)
- [x] Instant messaging section (IRC, Skype, Slack, etc.)
- [x] Health section (HeiaHeia, Endomondo)
- [ ] Places section (Foursquare)
- [x] Add Codeivate and Wakatime to code section
- [ ] Work section (LinkedIn, Behance, Dribbble, etc.)
- [ ] Videos section (Youtube, Vine, Vimeo, etc.)
- [ ] Bookmarks section (Delicious, Digg, etc.)
- [ ] Old school Finnish social media section (IRC-galleria, Kuvake, etc.)
- [ ] Art (Deviantart, Pinterest)
- [ ] Other social medias like Path and Bebo
- [ ] Add the legacy stuff - website from 1999, university site, etc.
- [ ] Add [hashtg.it](https://github.com/ronilaukkarinen/hashtg)
- [ ] Add gadgets section (links to XDA, openSUSE, etc.)
- [x] Add last active in IRC
- [x] Add Facebook
- [ ] Add dreams and sleep data
- [x] Add Problemsolv.in IT-blog
- [ ] Add sysadmin section and home server stats

### Building blocks

* [Modern HTML5 Boilerplate](https://github.com/ronilaukkarinen/modern-html5-boilerplate)
* [Font Awesome](http://fortawesome.github.io/Font-Awesome/) - The iconic font and CSS toolkit
* [flatuicolorpicker](http://www.flatuicolorpicker.com/) - Best Flat Colors For UI Design
* [BrandColors](http://brandcolors.net/) - Official color codes for the world's biggest brands
* [Compressor.io](https://compressor.io/) - Compress and optimize your images. Up to 90% file size reduction
* [Social Icon Font SVG for VSCO](https://github.com/tombryan/social-icon-font/)
* [Acadia Untappd SVG](https://github.com/gesteves/acadia/tree/master/source/svg)
