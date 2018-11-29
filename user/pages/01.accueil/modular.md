---
title: Accueil
menu : accueil
image : home.png
onpage_menu: true
body_classes: "modular title-center title-h1h2"
process:
    markdown: true
    twig: true
content:
    items: @self.modular
    order:
        by: default
        dir: asc
        custom:
            - _slider
            - _welcome
            - _lastpicture
            - _lastnews
---