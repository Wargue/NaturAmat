---
title: Blog
blog_url: blog
menu: Blog

sitemap:
    changefreq: 
    priority: 1.03

content:
    items: @self.children
    order:
        by: date
        dir: desc
    limit: 5
    pagination: true

feed:
    description: Sample Blog Description
    limit: 10

pagination: true

---
dd
dd