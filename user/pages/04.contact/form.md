---
title: 'Nous contacter'
form:
    name: contact_form
    fields:
        -
            name: name
            id: name
            label: Nom
            classes: 'form-control form-control-lg'
            placeholder: 'Ecrivez votre nom'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: email
            id: email
            classes: 'form-control form-control-lg'
            label: Email
            placeholder: 'Entrez votre adresse mail'
            type: email
            validate:
                rule: email
                required: true
        -
            name: message
            label: Message
            classes: 'form-control form-control-lg'
            size: long
            placeholder: 'Ecrivez votre message'
            type: textarea
            validate:
                required: true
    buttons:
        -
            type: submit
            value: Envoyer
            class: 'btn btn-primary btn-block'
        -    
            type: reset
            value: Vider
    process:
        -
            email:
                from: '{{ config.plugins.email.from }}'
                to:
                    - '{{ config.plugins.email.from }}'
                    - '{{ form.value.email }}'
                subject: '[Feedback] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            save:
                fileprefix: feedback-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'

        -
            display: thankyou
---
## Notre Adresse
Rue Major Mouzon, 69A <br />
6890 Ochamps <br />

## Nos Informations
**Email:**  		 		info@naturamat.be <br />
**Primary Phone:**   		+32(0)61 25 87 62 <br />
**Alternate Phone:**   		+32(0)498 47 44 47 <br />




