---
title: Nous contacter
body_classes: "modular title-center title-h1h2"
onpage_menu: false
bg_color: "#B4B093"
form:
    name: my-nice-form
    action: /contact
    fields:
        - name: name
          id: name
          label: Nom
          classes: form-control form-control-lg
          placeholder: Ecrivez votre nom
          autocomplete: on
          type: text
          validate:
            required: true

        - name: email
          id: email
          classes: form-control form-control-lg
          label: Email
          placeholder: Entrez votre adresse mail
          type: email
          validate:
            rule: email
            required: true

        - name: message
          label: Message
          classes: form-control form-control-lg
          size: long
          placeholder: Ecrivez votre message
          type: textarea
          validate:
            required: true

    buttons:
        - type: submit
          value: Submit
          class: btn btn-primary btn-block

    process:
        - email:
            from: "{{ config.plugins.email.from }}"
            to:
              - "{{ config.plugins.email.from }}"
              - "{{ form.value.email }}"
            subject: "[Feedback] {{ form.value.name|e }}"
            body: "{% include 'forms/data.html.twig' %}"
        - save:
            fileprefix: feedback-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include 'forms/data.txt.twig' %}"
        - message: Thank you for your feedback!
        - display: thankyou    
content:
    items: @self.modular
    order:
        by: default
        dir: asc
---
